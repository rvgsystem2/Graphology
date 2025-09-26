<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center bg-white shadow-md px-6 py-4 rounded-lg">
            <h2 class="font-bold text-2xl text-gray-800">{{ __('Consultation Management') }}</h2>
{{--            <a href="{{ route('consultation.create') }}"--}}
{{--               class="px-5 py-2 bg-gradient-to-r from-[#c21108] to-[#000308] text-white font-semibold rounded-lg shadow-md hover:from-[#000308] hover:to-[#c21108] transition">--}}
{{--                + New Consultation--}}
{{--            </a>--}}
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Success (you can keep SweetAlert as well if you added it) --}}
            @if (session('success'))
                <div class="flex items-center bg-green-100 text-green-700 px-4 py-3 rounded-lg mb-6 shadow-md">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            {{-- 🔍 Filter + Controls --}}
            <form method="GET" action="{{ route('consultation.index') }}"
                  class="bg-white border border-gray-200 rounded-2xl shadow p-4 mb-6">
                <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
                    {{-- Search --}}
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Search</label>
                        <input type="text" name="q" value="{{ request('q') }}"
                               placeholder="Search name, email, phone, notes..."
                               class="w-full rounded-lg border-gray-300 focus:ring-2 focus:ring-indigo-500">
                    </div>

                    {{-- Date From --}}
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">From (Date)</label>
                        <input type="date" name="date_from" value="{{ request('date_from') }}"
                               class="w-full rounded-lg border-gray-300 focus:ring-2 focus:ring-indigo-500">
                    </div>

                    {{-- Date To --}}
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">To (Date)</label>
                        <input type="date" name="date_to" value="{{ request('date_to') }}"
                               class="w-full rounded-lg border-gray-300 focus:ring-2 focus:ring-indigo-500">
                    </div>

                    {{-- Per Page --}}
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Per Page</label>
                        <select name="per_page" class="w-full rounded-lg border-gray-300 focus:ring-2 focus:ring-indigo-500"
                                onchange="this.form.submit()">
                            @foreach($allowedPerPage as $n)
                                <option value="{{ $n }}" @selected((int)request('per_page', 10) === $n)>{{ $n }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mt-4 flex items-center gap-2">
                    <button type="submit"
                            class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 shadow">
                        Apply Filters
                    </button>

                    {{-- Reset clears filters --}}
                    <a href="{{ route('consultation.index') }}"
                       class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200">
                        Reset
                    </a>

                    {{-- Small summary --}}
                    @if(request()->hasAny(['q','date_from','date_to']))
                        <span class="ml-auto text-sm text-gray-500">
                            Filters active
                            @if(request('q')) • q:“{{ request('q') }}” @endif
                            @if(request('date_from')) • from: {{ request('date_from') }} @endif
                            @if(request('date_to')) • to: {{ request('date_to') }} @endif
                        </span>
                    @endif
                </div>
            </form>

            {{-- 📋 Table --}}
            <div class="bg-white shadow-xl rounded-2xl p-6 border border-gray-100">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-2xl font-bold text-gray-800">📅 Consultations</h2>
                    <div class="text-sm text-gray-500">
                        Showing
                        <span class="font-semibold">{{ $consultations->firstItem() ?? 0 }}</span>–
                        <span class="font-semibold">{{ $consultations->lastItem() ?? 0 }}</span>
                        of <span class="font-semibold">{{ $consultations->total() }}</span>
                    </div>
                </div>

                <div class="overflow-x-auto rounded-lg border border-gray-200">
                    <table class="w-full text-sm text-left text-gray-800">
                        <thead class="bg-gradient-to-r from-gray-100 to-gray-200 text-gray-700 uppercase font-semibold text-xs">
                        <tr>
                            <th class="px-6 py-4 border-b">ID</th>
                            <th class="px-6 py-4 border-b">Name</th>
                            <th class="px-6 py-4 border-b">Email</th>
                            <th class="px-6 py-4 border-b">Phone</th>
                            <th class="px-6 py-4 border-b">Date</th>
                            <th class="px-6 py-4 border-b">Time</th>
                            <th class="px-6 py-4 border-b">Notes</th>
                            <th class="px-6 py-4 border-b">Created At</th>
                            <th class="px-6 py-4 border-b text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-100">
                        @forelse ($consultations as $consultation)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4">{{ $consultation->id }}</td>
                                <td class="px-6 py-4 font-medium text-gray-900">{{ $consultation->name }}</td>
                                <td class="px-6 py-4">{{ $consultation->email }}</td>
                                <td class="px-6 py-4">{{ $consultation->phone }}</td>
                                <td class="px-6 py-4">{{ \Carbon\Carbon::parse($consultation->date)->format('d-M-Y') }}</td>
                                <td class="px-6 py-4">{{ \Carbon\Carbon::parse($consultation->time)->format('h:i A') }}</td>
                                <td class="px-6 py-4 text-gray-600 line-clamp-2">{{ $consultation->notes ?? '—' }}</td>
                                <td class="px-6 py-4">{{ $consultation->created_at->format('d-M-Y h:i A') }}</td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex justify-center flex-wrap gap-2">
{{--                                        <a href="{{ route('consultation.edit', $consultation->id) }}"--}}
{{--                                           class="bg-yellow-500 hover:bg-yellow-600 text-white text-xs px-4 py-2 rounded-md shadow">--}}
{{--                                            ✏️ Edit--}}
{{--                                        </a>--}}
{{--                                        <form action="{{ route('consultation.destroy', $consultation->id) }}" method="POST"--}}
{{--                                              onsubmit="return confirm('Are you sure?');">--}}
{{--                                            @csrf @method('DELETE')--}}
{{--                                            <button type="submit"--}}
{{--                                                    class="bg-red-500 hover:bg-red-600 text-white text-xs px-4 py-2 rounded-md shadow">--}}
{{--                                                🗑️ Delete--}}
{{--                                            </button>--}}
{{--                                        </form>--}}
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" class="text-center py-6 text-gray-500 text-base">No consultations found.</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>

                {{-- 🔗 Pagination (keeps filters via withQueryString) --}}
                <div class="mt-6">
                    {{ $consultations->onEachSide(1)->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
