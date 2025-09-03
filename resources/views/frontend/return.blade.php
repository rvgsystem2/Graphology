{{-- resources/views/return-policy.blade.php --}}
@extends('component.main')

@section('content')

<section class="bg-[#3E3229] text-white py-16 px-6 md:px-16 lg:px-32">
    <div class="max-w-5xl mx-auto space-y-10">

        <!-- Page Header -->
        <div class="text-center space-y-4">
            <h1 class="text-4xl md:text-5xl font-bold text-[#EBA35B]">Return Policy</h1>
            <p class="text-gray-300 max-w-2xl mx-auto">
                Our Return Policy ensures transparency and fairness in case you are not satisfied with a physical product purchase.
            </p>
        </div>

        <!-- Sections -->
        <div class="space-y-8 text-gray-200 leading-relaxed">

            <div>
                <h2 class="text-2xl font-semibold text-[#EBA35B] mb-3">1. Eligibility for Returns</h2>
                <p>
                    Returns are applicable only for physical products (if offered). To be eligible, items must be unused, in their original packaging,
                    and returned within <strong>7 days of delivery</strong>.
                </p>
            </div>

            <div>
                <h2 class="text-2xl font-semibold text-[#EBA35B] mb-3">2. Non-Returnable Items</h2>
                <ul class="list-disc list-inside space-y-1 mt-2">
                    <li>Digital services (handwriting or wristwatch analysis sessions)</li>
                    <li>Downloadable resources or reports</li>
                    <li>Customized or personalized items</li>
                </ul>
            </div>

            <div>
                <h2 class="text-2xl font-semibold text-[#EBA35B] mb-3">3. Return Process</h2>
                <p>
                    To initiate a return, please contact us at
                    <a href="mailto:contact@shivanshdargarh.com" class="text-[#EBA35B] hover:underline">
                        contact@shivanshdargarh.com
                    </a>
                    with your order details. Once approved, we will share the return shipping address.
                </p>
                <p class="mt-2">
                    Customers are responsible for return shipping costs unless the item is defective or incorrect.
                </p>
            </div>

            <div>
                <h2 class="text-2xl font-semibold text-[#EBA35B] mb-3">4. Refunds after Return</h2>
                <p>
                    Once we receive and inspect the returned product, refunds (if applicable) will be processed within
                    7–10 business days. Refunds will be made to the original payment method.
                </p>
            </div>
        </div>

    </div>
</section>
@endsection
