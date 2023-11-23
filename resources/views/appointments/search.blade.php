<x-comp.AddsLayout />
<title>search appointments</title>
<body style="overflow-x: hidden">
    

<form action="/appointment/search" method="GET">

    <div class="relative border-2 border-gray-100 m-4 rounded-lg">
        <div class="absolute top-4 left-3">
            <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
        </div>
        <input type="text" name="query" class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
            placeholder="Search for an appointment by ID" />
        <div class="absolute top-2 right-2">
            <button type="submit" class="h-10 w-20 text-white rounded-lg bg-blue-800 hover:bg-blue-600">
                Search
            </button>
        </div>
    </div>
</form>

@if (isset($query))
    @if ($appointment != null)
        <x-comp.card class="flex space-x-6 mr-6 text-lg mt-6">
            <ul>
                <li>appointment id: {{ $appointment->id }}</li>
                <li>patient : {{ $user->name }}</li>
                <li>clinic number: {{ $appointment->clinic_number }}</li>
                <li>date : {{ $appointment->date }}</li>
                <li>time: {{ $appointment->time }}</li>
            </ul>
        </x-comp.card>
    @else
        <p style="color: red">  no appointment found</p>
    @endif
@endif


<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"
style="position: absolute; top: -80%; left: -40%;z-index: -1; width: 160%">

    <path fill="#FFD6E8" d="M39.6,-52.4C46,-49.8,42.3,-31.2,46.1,-15.9C49.9,-0.5,61.1,11.5,57,16.7C52.8,21.9,33.2,20.3,21.1,21.2C9,22.2,4.5,25.8,-6.2,34.4C-17,43,-34,56.6,-38.2,53C-42.3,49.5,-33.6,28.8,-35.6,13.7C-37.5,-1.4,-50.2,-10.9,-49.1,-16.4C-47.9,-22,-33.1,-23.6,-22.7,-24.9C-12.2,-26.2,-6.1,-27.1,5.2,-34.3C16.6,-41.6,33.1,-55,39.6,-52.4Z" transform="translate(100 100)" />
  </svg>
</body>