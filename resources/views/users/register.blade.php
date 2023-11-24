<x-comp.layout>
    <x-comp.card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Register
        </h2>
        <p class="mb-4">Create an account to track your helath online</p>
    </header>

    <form method="POST" action="/users">
        @csrf
        <div class="mb-6">
            <label for="name" class="inline-block text-lg mb-2">
                Name
            </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="name"
                value="{{old('name')}}"
            />
            @error('name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

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
            <label
                for="password2"
                class="inline-block text-lg mb-2"
            >
                Confirm Password
            </label>
            <input
                type="password"
                class="border border-gray-200 rounded p-2 w-full"
                name="password_confirmation"
                value="{{old('password_confirmation')}}"
            />
            @error('password_confirmation')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button
                type="submit"
                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
            >
                Sign Up
            </button>
        </div>

        <div class="mt-8">
            <p>
                Already have an account?
                <a href="/login" class="text-laravel"
                    >Login</a
                >
            </p>

            <p style="text-align: right">
                staff team?
                <a href="/register/staff" class="text-laravel"
                    >register as a staff</a
                >
            </p>
        </div>
    </form>
    </x-comp.card>





</x-comp.layout>

<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"
    style="position: absolute; top: -60%; left: -10%;z-index: -1; width: 110%">

        <path fill="#ff7675" d="M18.6,-16.6C30.8,-16.7,52,-20.3,55.7,-16.4C59.4,-12.4,45.6,-1.1,40.4,12.6C35.2,26.2,38.7,42.1,33.4,56.7C28.1,71.3,14.1,84.5,0,84.5C-14.1,84.5,-28.2,71.4,-34.1,57C-40,42.7,-37.8,27.1,-41.6,13.9C-45.4,0.6,-55.4,-10.3,-57.5,-23.3C-59.6,-36.2,-53.9,-51.3,-43,-51.6C-32.1,-51.9,-16,-37.6,-6.4,-28.7C3.2,-19.9,6.4,-16.5,18.6,-16.6Z" transform="translate(100 100)" />
      </svg>