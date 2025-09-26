<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center bg-white shadow-md px-6 py-4 rounded-lg">
            <h2 class="font-bold text-2xl text-gray-800">{{ __('Contact Messages Management') }}</h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- ✅ Success Message --}}
            @if (session('success'))
                <div class="flex items-center bg-green-100 text-green-700 px-4 py-3 rounded-lg mb-6 shadow-md">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            {{-- 🔍 Filter + Controls --}}
            <form method="GET" action="{{ route('contact.index') }}"
                  class="bg-white border border-gray-200 rounded-2xl shadow p-4 mb-6">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    {{-- Search --}}
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Search</label>
                        <input type="text" name="q" value="{{ request('q') }}"
                               placeholder="Search name, email, message..."
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

                    <a href="{{ route('contact.index') }}"
                       class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200">
                        Reset
                    </a>

                    @if(request()->has('q'))
                        <span class="ml-auto text-sm text-gray-500">
                            Filters active • q:“{{ request('q') }}”
                        </span>
                    @endif
                </div>
            </form>

            {{-- 📋 Table --}}
            <div class="bg-white shadow-xl rounded-2xl p-6 border border-gray-100">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-2xl font-bold text-gray-800">📩 Contact Messages</h2>
                    <div class="text-sm text-gray-500">
                        Showing
                        <span class="font-semibold">{{ $contacts->firstItem() ?? 0 }}</span>–
                        <span class="font-semibold">{{ $contacts->lastItem() ?? 0 }}</span>
                        of <span class="font-semibold">{{ $contacts->total() }}</span>
                    </div>
                </div>

                <div class="overflow-x-auto rounded-lg border border-gray-200">
                    <table class="w-full text-sm text-left text-gray-800">
                        <thead class="bg-gradient-to-r from-gray-100 to-gray-200 text-gray-700 uppercase font-semibold text-xs">
                        <tr>
                            <th class="px-6 py-4 border-b">ID</th>
                            <th class="px-6 py-4 border-b">Name</th>
                            <th class="px-6 py-4 border-b">Email</th>
                            <th class="px-6 py-4 border-b">Message</th>
                            <th class="px-6 py-4 border-b">Created At</th>
                            <th class="px-6 py-4 border-b text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-100">
                        @forelse ($contacts as $contact)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4">{{ $contact->id }}</td>
                                <td class="px-6 py-4 font-medium text-gray-900">{{ $contact->name }}</td>
                                <td class="px-6 py-4">{{ $contact->email }}</td>
                                <td class="px-6 py-4 text-gray-600 line-clamp-2">{{ $contact->message ?? '—' }}</td>
                                <td class="px-6 py-4">{{ $contact->created_at->format('d-M-Y h:i A') }}</td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex justify-center gap-2">
                                        {{-- Example delete button --}}
                                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST"
                                              onsubmit="return confirm('Are you sure you want to delete this message?');">
                                            @csrf @method('DELETE')
                                            <button type="submit"
                                                    class="bg-red-500 hover:bg-red-600 text-white text-xs px-4 py-2 rounded-md shadow">
                                                🗑️ Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-6 text-gray-500 text-base">No contacts found.</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>

                {{-- 🔗 Pagination --}}
                <div class="mt-6">
                    {{ $contacts->onEachSide(1)->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
