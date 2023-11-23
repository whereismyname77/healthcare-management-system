<x-AddsLayout/>
<title>book appointments</title>

<style>
    #date-input {
    font-size: 16px; /* Adjust the size as needed */
}

/* Increase the size of the calendar icon (pseudo-element) */
#date-input::-webkit-calendar-picker-indicator {
    font-size: 26px; /* Adjust the size as needed */
}
</style>

<x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            book appointment
        </h2>
        <br>
    </header>

    <form method="POST" action="/appointments" enctype="multipart/form-data">
        @csrf

        <div class="mb-6">
            <label for="user_id">Enter patient ID    </label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="user_id" 
            value="{{old('user_id')}}"/>

            @error('user_id')
                <p class="text-red-500 text-xs mt">{{ $message }}</p>
            @enderror


        </div>


        <div class="mb-6">
            <label for="doctor_id">Choose doctor </label>

            <select name="doctor_id" id="doctor_id">
                  <option value="" disabled>ID : name , specialty</option>
                @foreach ($doctors as $doctor)
                    <option value="{{ $doctor->id }}" @if(old('doctor_id') == $doctor->id) selected @endif>{{ $doctor->id }} : {{ $doctor->name }} , {{ $doctor->specialty }}</option>
                @endforeach
            </select>
            @error('doctor_id')
                <p class="text-red-500 text-xs mt">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-6">
            <label for="clinic_number">Enter clinic number </label>
            
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="clinic_number"
            value="{{old('clinic_number')}}" />

            @error('clinic_number')
                <p class="text-red-500 text-xs mt">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-6">
            <label for="date">Enter date</label>
            
            <input type="date" min="{{ date('Y-m-d') }}" id="date-input" class="border border-gray-200 rounded p-2 w-full" name="date"
            value="{{old('date')}}" />

            @error('date')
                <p class="text-red-500 text-xs mt">{{ $message }}</p>
            @enderror

        </div>


        <div>
            <label for="time">Enter time</label>
            <select name="time" id="time">
                @php
                    $start = strtotime('08:00:00'); // Start time
                    $end = strtotime('16:00:00');   // End time
                @endphp
        
                @while ($start <= $end)
                    <option value="{{ date('H:i', $start) }}" @if(old('time') == date('H:i', $start)) selected @endif>
                        {{ date('h:i A', $start) }}</option>
                    @php
                        $start = strtotime('+15 minutes', $start);
                    @endphp
                @endwhile
            </select>
            @error('time')
                <p class="text-red-500 text-xs mt">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6 mt-4" >
            <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
               Submit
            </button>

        </div>
    </form>
</x-card>

{{-- <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" style="position: absolute; right: 5%;top:-40%; z-index: -1;">
    <path fill="#8A3FFC" d="M54.4,-40.8C62.7,-33,56.3,-10.8,51.8,12.9C47.2,36.5,44.5,61.7,33.5,65.3C22.6,69,3.3,51.1,-16.5,39.5C-36.4,28,-56.8,22.8,-60.1,12.5C-63.4,2.3,-49.5,-13.1,-36.6,-21.9C-23.8,-30.7,-11.9,-33.1,5.6,-37.5C23.1,-42,46.1,-48.6,54.4,-40.8Z" transform="translate(100 100)" />
  </svg>
<svg viewBox="10 0 200 200" xmlns="http://www.w3.org/2000/svg" style="position: absolute; right: 5%;top:-20%; z-index: -2;" >
    <path fill="#0F62FE" d="M36.6,-52.6C50.3,-48.1,66.3,-42.8,74.3,-32C82.3,-21.1,82.3,-4.6,75.6,7.6C68.8,19.9,55.2,28,42.6,30C30.1,32.1,18.6,28.1,9.4,29.9C0.2,31.7,-6.8,39.3,-17.3,43.3C-27.7,47.3,-41.7,47.8,-47.3,41.1C-53,34.4,-50.2,20.6,-46.1,10.2C-42,-0.2,-36.6,-7.2,-34.2,-16.9C-31.8,-26.7,-32.5,-39.2,-27.3,-47.5C-22.1,-55.9,-11.1,-60.2,0.2,-60.5C11.4,-60.7,22.9,-57.1,36.6,-52.6Z" transform="translate(100 100)" />
  </svg> --}}

  <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" style="position: absolute; left: 2%;top:-20%; z-index: -3;">
    <path fill="#FF0066" d="M40.3,-70.2C48.5,-57.4,48.9,-40,56.5,-25.3C64.1,-10.5,78.8,1.5,80.6,13.9C82.4,26.3,71.3,39.2,58.8,47.8C46.4,56.3,32.7,60.5,18,67.7C3.3,75,-12.4,85.3,-27.1,84.6C-41.9,83.8,-55.7,72,-59.5,57.3C-63.4,42.6,-57.4,25,-58.6,9.1C-59.7,-6.7,-68,-20.8,-67.8,-35C-67.6,-49.2,-58.9,-63.6,-46.1,-74.3C-33.4,-85.1,-16.7,-92.1,-0.3,-91.6C16,-91.1,32.1,-83,40.3,-70.2Z" transform="translate(100 100)" />
  </svg>