@extends('component.index')

@section('section')


<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <form action="{{ route('birthday.store') }}" method="POST" class="w-full sm:w-11/12 md:w-9/12 lg:w-3/4 xl:w-2/4 mx-auto bg-white p-8 rounded-lg shadow-lg">
        @csrf

        <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">User Information</h2>

        @if(session('success'))
            <div class="fixed top-0 right-0 mt-5 mr-5 max-w-xs w-full bg-green-500 text-white p-4 rounded-lg shadow-lg flex items-center space-x-4">
                <div class="flex-1">
                    <p class="font-semibold">{{ session('success') }}</p>
                </div>
                <button onclick="this.parentElement.style.display='none'" class="text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div class="relative z-0 w-full mb-5 group">
                <label for="user_first_name" class="text-sm text-gray-500 mb-2 block">First Name</label>
                <input type="text" name="user_first_name" id="user_first_name" class="block  px-0 w-full text-sm text-gray-900 bg-transparent border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-500" placeholder=" " required />
            </div>

            <div class="relative z-0 w-full mb-5 group">
                <label for="user_last_name" class="text-sm text-gray-500 mb-2 block">Last Name</label>
                <input type="text" name="user_last_name" id="user_last_name" class="block  px-0 w-full text-sm text-gray-900 bg-transparent border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-500" placeholder=" " required />
            </div>
        </div>

        <div class="relative z-0 w-full mb-6 group">
            <label for="user_email" class="text-sm text-gray-500 mb-2 block">Email Address</label>
            <input type="email" name="user_email" id="user_email" class="block  px-0 w-full text-sm text-gray-900 bg-transparent border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-500" placeholder=" " required />
        </div>

        <h1 class="my-2 text-center text-2xl font-bold text-gray-600">Birthday Boy</h1>

        <div class="relative z-0 w-full mb-6 group">
            <label for="birthday_date" class="text-sm text-gray-500 mb-2 block">Birthday Date</label>
            <input type="date" name="birthday_date" id="birthday_date" class="block  px-0 w-full text-sm text-gray-900 bg-transparent border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-500" placeholder=" " required />
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">

            <div class="relative z-0 w-full mb-6 group">
                <label for="birthday_boy_first" class="text-sm text-gray-500 mb-2 block">First Name</label>
                <input type="text" name="birthday_boy_first" id="birthday_boy_first" class="block  px-0 w-full text-sm text-gray-900 bg-transparent border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-500" placeholder=" " required />
            </div>

            <div class="relative z-0 w-full mb-6 group">
                <label for="birthday_boy_last" class="text-sm text-gray-500 mb-2 block">Last Name</label>
                <input type="text" name="birthday_boy_last" id="birthday_boy_last" class="block  px-0 w-full text-sm text-gray-900 bg-transparent border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-500" placeholder=" " required />
            </div>
        </div>

        <div class="relative z-0 w-full mb-6 group">
            <label for="birthday_email" class="text-sm text-gray-500 mb-2 block"> Email Address</label>
            <input type="email" name="birthday_email" id="birthday_email" class="block  px-0 w-full text-sm text-gray-900 bg-transparent border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-500" placeholder=" " required />
        </div>

        <div class="relative z-0 w-full mb-6 group">
            <label for="birthday_message" class="text-sm text-gray-500 mb-2 block">Birthday Message</label>
            <textarea name="birthday_message" id="birthday_message" rows="4" class="block  px-0 w-full text-sm text-gray-900 bg-transparent border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-500" placeholder=" " required></textarea>
        </div>

        <div class="flex justify-center mt-6">
            <button type="submit" class="w-full sm:w-auto bg-blue-700 hover:bg-blue-800 text-white font-semibold py-3 px-6 rounded-lg text-sm focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Submit
            </button>
        </div>
    </form>
</div>

@endsection
