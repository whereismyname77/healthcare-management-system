<x-comp.layout>
    <x-comp.card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
           patient log in
        </h2>
        <p class="mb-4">Log into your account</p>
    </header>

    <form method="POST" action="/users/authenticate">
        @csrf
        <div class="mb-6">
            <label for="email" class="inline-block text-lg mb-2"
                >Email</label
            >
            <input
                type="email"
                class="border border-gray-200 rounded p-2 w-full"
                name="email"
                value="{{old('email')}}"
            />
            @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="password"
                class="inline-block text-lg mb-2"
            >
                Password
            </label>
            <input
                type="password"
                class="border border-gray-200 rounded p-2 w-full"
                name="password"
                value="{{old('password')}}"
            />
            @error('password')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button
                type="submit"
                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
            >
                Sign in
            </button>
        </div>

        <div class="mt-8">
            <p>
                dont have an account?
                <a href="/register" class="text-laravel"
                    >Register</a
                >
            </p>

            <p style="text-align: right">
                staff team?
                <a href="/login/staff" class="text-laravel"
                    >login as a staff</a
                >
            </p>
        </div>
    </form>
    </x-comp.card>


    

      <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"
      style="position: absolute; top: -45%; left: 1%;z-index: -1;">
        <path fill="#BAE6AA" d="M55.6,-57.6C70.3,-54,79,-34.8,75.8,-18.5C72.6,-2.2,57.5,11.2,44.6,18.5C31.7,25.8,21,27.1,11.6,29.3C2.2,31.6,-5.8,34.9,-20.9,37.9C-35.9,40.9,-58,43.5,-71.7,34.3C-85.5,25.1,-91,4.1,-83.2,-10.3C-75.5,-24.7,-54.5,-32.3,-38.4,-35.6C-22.3,-38.8,-11.2,-37.7,4.7,-43.3C20.5,-48.9,41,-61.1,55.6,-57.6Z" transform="translate(100 100)" />
      </svg>

</x-comp.layout>