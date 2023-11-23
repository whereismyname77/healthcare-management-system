<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
</head>

<body class="mb-48">
    <nav class="flex justify-between items-center mb-4">
        <a href="/"><img class="w-24" src="{{ asset('images/logo.png') }}" alt="" class="logo" /></a>
        <ul class="flex space-x-6 mr-6 text-lg">

            <li onMouseOver="this.style.color='red'" onMouseOut="this.style.color='black'">
                <a href="/homepage/staff"> <i class="fa-solid fa-arrow-left"></i> <b>back</b></a>
            </li>
        </ul>
    </nav>
    
    <div class="p-5 ">
        <span>
            <p style="font-size: 1.5rem"> Search Results for "{{ $query }}" </p> ID: name
        </span>
        @if ($users->count() > 0)
            <ul>
                @foreach ($users as $user)
                    <li> {{ $user->id }} : {{ $user->name }}</li>
                @endforeach
            </ul>
        @else
            <p>No results found.</p>
        @endif

    </div>
</body>

</html>
