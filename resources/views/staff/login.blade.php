
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#ef3b2d",
                        },
                    },
                },
            };
        </script>
        <title>Staff login</title>
    </head>
    <body class="mb-48">
        <nav class="flex justify-between items-center mb-4">
            <a href="/"
                ><img class="w-24" src="{{asset('images/logo.png')}}" alt="" class="logo"
            /></a>
            <ul class="flex space-x-6 mr-6 text-lg">
                @auth
                <li>
                    <span class="font-bold uppercase">welcome </span>
                </li>
                {{-- <li>
                    <a href="/listings/manage" class="hover:text-laravel"
                        ><i class="fa-solid fa-gear"></i>
                        manage listing</a>
                </li> --}}

                <li>
                    <form class="inline" method="POST" action="">
                    @csrf
                    <button type="submit">
                        <i class="fa-solid fa-door-closed">logout</i>
                    </button>
                </form>
                </li>

                @else
                <li>
                    <a href="/register/staff" class="hover:text-laravel"
                        ><i class="fa-solid fa-user-plus"></i> Register</a
                    >
                </li>
                <li>
                    <a href="/login/staff" class="hover:text-laravel"
                        ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a
                    >
                </li>
                @endauth
            </ul>
        </nav>

        <main>
        </main>
        
    <x-flash-message/>
</body>
</html>



    <x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
          staff  log in
        </h2>
        <p class="mb-4">Log into your account</p>
    </header>

    <form method="POST" action="/staff/authenticate">
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
                <a href="/register/staff" class="text-laravel"
                    >Register</a
                >
            </p>

            <p style="text-align: right">
                patient?
                <a href="/login" class="text-laravel"
                    >login as a patient</a
                >
            </p>
        </div>
    </form>
    </x-card>


    <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"
    style="position: absolute; top: -45%; left: 1%;z-index: -1;">

        <path fill="#A7F0BA" d="M44.5,-63.5C57.8,-51.5,69,-38.8,64.6,-27C60.2,-15.2,40.3,-4.3,28.8,2.7C17.4,9.6,14.4,12.6,11,19.7C7.6,26.8,3.8,38,-5.8,46C-15.4,54,-30.9,58.9,-45.9,55.6C-60.9,52.2,-75.6,40.8,-82.3,25.5C-89.1,10.2,-87.9,-9,-75.9,-18.2C-64,-27.3,-41.3,-26.5,-26.9,-38.2C-12.5,-49.8,-6.2,-74,4.7,-80.4C15.6,-86.8,31.1,-75.5,44.5,-63.5Z" transform="translate(100 100)" />
      </svg>