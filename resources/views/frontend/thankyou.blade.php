@extends('component.main')
@section('content')

  <div class="flex justify-center items-center min-h-screen ">
    <div class="max-w-md w-full bg-white shadow-lg rounded-lg p-8 text-center m-24">
        <!-- Logo (Optional) -->
        <div class="mb-4">
          <svg class="mx-auto h-16 w-16 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </div>

        <!-- Heading -->
        <h1 class="text-2xl font-bold text-gray-800 mb-2">Thank You!</h1>

        <!-- Message -->
        <p class="text-gray-600 mb-6">
          Your submission has been received successfully. We’ll get back to you shortly.
        </p>

        <!-- Button (Optional CTA) -->
        <a href="/" class="inline-block bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-6 rounded transition duration-200">
          Back to Home
        </a>
      </div>

  </div>

@endsection
