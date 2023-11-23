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
        <title>staff homepage</title>
        <style>
            .sv1{
                position: absolute;
                top: 65%;
                left: -7%;
                height: 60%;
                width: 60%;
                z-index: -1;
            }
            .sv2{
                position: absolute;
                top: 65%;
                left: 20%;
                height: 60%;
                width: 60%;
                z-index: -1;
            }
            .sv3{
                position: absolute;
                top: 65%;
                left: 50%;
                height: 60%;
                width: 60%;
                z-index: -1;
            }
            body{
                overflow-x: hidden;
            }
        </style>
        
    </head>
    <body class="mb-48">
        <nav class="flex justify-between items-center mb-4">
            <a href="/"
                ><img class="w-24" src="{{asset('images/logo.png')}}" alt="" class="logo"
            /></a>
            @auth
            <span class="font-bold uppercase">welcome {{auth()->guard('staff')->user()->name}}</span>
            @endauth
            <ul class="flex space-x-6 mr-6 text-lg">

                <li onMouseOver="this.style.color='red'"
                onMouseOut="this.style.color='black'">
                    <a href="/appointments/search"><i class="fa-solid fa-magnifying-glass"> Search appointment</i></a>
                </li>

                <li onMouseOver="this.style.color='red'"
                onMouseOut="this.style.color='black'">
                    <a href="/doctors/list"><i class="fa-solid fa-user-doctor"> Doctors list</i></a>
                </li>

                {{-- <li>
                    <a href="/listings/manage" class="hover:text-laravel"
                        ><i class="fa-solid fa-gear"></i>
                        manage listing</a>
                </li> --}}

                <li onMouseOver="this.style.color='red'"
                onMouseOut="this.style.color='black'">
                    <form class="inline" method="POST" action="/logout/staff">
                    @csrf
                    <button type="submit">
                        <i class="fa-solid fa-door-closed">logout</i>
                    </button>
                </form>
                </li>
            </ul>
        </nav>

        <main>
        </main>
        
    <x-comp.flash-message/>

</body>
</html>

<section
class="relative h-72 flex flex-col justify-center align-center text-center space-y-4 mb-4"
style="background-color:#0a0a74">
<div
    class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"
    
></div>

<div class="z-10">
    <h3 class="text-6xl font-bold uppercase text-white">
        Healthcare managment system
    </h3>
    <p class="text-2xl text-gray-200 font-bold my-4">
        assist patients to track their health online
    </p>
</div>
</section>

<body>

    <form action="{{ route('search') }}" method="GET">

        <div class="relative border-2 border-gray-100 m-4 rounded-lg">
            <div class="absolute top-4 left-3">
                <i
                    class="fa fa-search text-gray-400 z-20 hover:text-gray-500"
                ></i>
            </div>
            <input
                type="text"
                name="query"
                class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
                placeholder="Search for a patient either by name or by ID"
            />
            <div class="absolute top-2 right-2">
                <button
                    type="submit"
                    class="h-10 w-20 text-white rounded-lg bg-blue-800 hover:bg-blue-600"
                >
                    Search
                </button>
            </div>
        </div>
    </form>

    @if (isset($query))
        @include('staff.search-results')
        @endif


        
    
        <ul>
    <li style="position: absolute; left: 15%; top: 90% ;font-size: 1.5rem;" onMouseOver="this.style.color='red'"
    onMouseOut="this.style.color='black'">
        <a href="/sickleaves/create"><i class="fa-solid fa-upload"></i> <b> upload sick leaves</b></a>
      </li>

      <li style="position: absolute; left: 40%; top: 90% ;font-size: 1.5rem;" onMouseOver="this.style.color='red'"
      onMouseOut="this.style.color='black'">
          <a href="/medicalreports/create"><i class="fa-solid fa-upload"></i> <b> upload medical reports</b></a>
        </li>

        <li style="position: absolute; left: 70%; top: 90% ;font-size: 1.5rem;" onMouseOver="this.style.color='red'"
      onMouseOut="this.style.color='black'">
          <a href="/prescription/create"><i class="fa-solid fa-upload"></i> <b> upload prescription</b></a>
        </li>

        <li style="position: absolute; left: 15%; top: 100% ;font-size: 1.5rem;" onMouseOver="this.style.color='red'"
      onMouseOut="this.style.color='black'">
          <a href="/doctors/create"><i class="fa-solid fa-user-plus"></i><b> add doctors</b></a>
        </li>

        <li style="position: absolute; left: 40%; top: 100% ;font-size: 1.5rem;" onMouseOver="this.style.color='red'"
      onMouseOut="this.style.color='black'">
          <a href="/appointments/create"> <i class="fa-solid fa-calendar-days"></i> <b> book appointment</b></a>
        </li>

        <li style="position: absolute; left: 70%; top: 100% ;font-size: 1.5rem;" onMouseOver="this.style.color='red'"
      onMouseOut="this.style.color='black'">
          <a href="/appointments/delete"> <i class="fa-solid fa-calendar-xmark"></i> <b> delete appointment</b></a>
        </li>

        </ul>
        {{-- <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="sv1">
            <path fill="#8A3FFC" d="M54.4,-40.8C62.7,-33,56.3,-10.8,51.8,12.9C47.2,36.5,44.5,61.7,33.5,65.3C22.6,69,3.3,51.1,-16.5,39.5C-36.4,28,-56.8,22.8,-60.1,12.5C-63.4,2.3,-49.5,-13.1,-36.6,-21.9C-23.8,-30.7,-11.9,-33.1,5.6,-37.5C23.1,-42,46.1,-48.6,54.4,-40.8Z" transform="translate(100 100)" />
          </svg>

          <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="sv1">
            <path fill="#D0E2FF" d="M23.2,-29.5C37.9,-26.7,63.1,-33.5,70.1,-28.9C77.1,-24.2,66.1,-8.2,62.1,7.8C58,23.8,61,39.6,56,52.5C51,65.3,38,75.1,26.3,69.4C14.6,63.7,4.2,42.4,-11.3,38.1C-26.7,33.7,-47.2,46.2,-49.6,43.1C-52.1,40.1,-36.5,21.6,-38.5,5.7C-40.5,-10.2,-60.2,-23.3,-65.5,-37.4C-70.7,-51.5,-61.6,-66.5,-48.3,-70C-35,-73.4,-17.5,-65.2,-6.6,-54.9C4.3,-44.7,8.5,-32.3,23.2,-29.5Z" transform="translate(100 100)" />
          </svg>

          <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="sv2">
            <path fill="#FFD6E8" d="M44.2,-54.7C58.2,-59.9,71.1,-49.1,75,-35.7C78.9,-22.3,73.8,-6.2,69.9,8.9C66,24.1,63.3,38.3,53.8,43.5C44.4,48.8,28.3,45.2,14,50.9C-0.3,56.7,-12.9,71.7,-15.4,65.1C-17.9,58.6,-10.3,30.5,-18.5,17.8C-26.6,5.2,-50.4,7.9,-60.4,2.7C-70.4,-2.5,-66.7,-15.6,-57.1,-21.7C-47.5,-27.9,-32.2,-27,-21.7,-23.4C-11.2,-19.9,-5.6,-13.6,4.8,-21C15.1,-28.5,30.2,-49.5,44.2,-54.7Z" transform="translate(100 100)" />
          </svg>

          <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="sv2">
            <path fill="#08BDBA" d="M40.4,-59.6C49,-57.4,50.2,-40.4,47.8,-27.2C45.5,-14,39.6,-4.6,37.4,4.8C35.1,14.2,36.5,23.5,35,36.6C33.4,49.7,29,66.5,19.5,71.7C10,76.9,-4.4,70.5,-20.2,66.8C-36.1,63.1,-53.3,62.1,-63.6,53.4C-74,44.6,-77.5,28.1,-70.4,15.8C-63.4,3.4,-45.9,-4.8,-40.6,-19.5C-35.3,-34.2,-42.3,-55.3,-37.5,-59.3C-32.8,-63.3,-16.4,-50,-0.2,-49.6C15.9,-49.3,31.8,-61.8,40.4,-59.6Z" transform="translate(100 100)" />
          </svg>

          <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="sv3">
            <path fill="#FF0066" d="M33.3,-48.5C41.1,-46.9,43.7,-34,43.9,-23.1C44,-12.2,41.6,-3.3,45.8,10.6C50,24.4,60.7,43.2,57.3,52.7C53.8,62.2,36.1,62.4,22.9,56.3C9.8,50.3,1.2,37.8,-12.3,36.4C-25.8,35,-44.1,44.6,-53.5,41.9C-62.9,39.1,-63.2,24.1,-64.9,9.6C-66.6,-4.9,-69.5,-19,-64.1,-28.6C-58.7,-38.2,-44.9,-43.3,-32.8,-42.9C-20.7,-42.5,-10.4,-36.5,1.2,-38.4C12.8,-40.3,25.6,-50,33.3,-48.5Z" transform="translate(100 100)" />
          </svg>

          <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="sv3">
            <path fill="#C2AAFF" d="M50.6,-67.2C65.3,-69.3,76.6,-54.7,81.2,-38.8C85.8,-22.9,83.5,-5.6,73.1,4.7C62.6,15.1,43.9,18.4,33.4,27.1C23,35.7,20.8,49.6,13.1,57.9C5.4,66.2,-7.8,68.9,-20,66.2C-32.3,63.5,-43.6,55.6,-53.6,45.6C-63.5,35.6,-72.1,23.6,-73.3,10.9C-74.5,-1.7,-68.4,-15.1,-59.1,-23.6C-49.9,-32,-37.6,-35.7,-27.2,-35.5C-16.8,-35.4,-8.4,-31.5,4.8,-39C18,-46.4,35.9,-65.1,50.6,-67.2Z" transform="translate(100 100)" />
          </svg> --}}
</body>
