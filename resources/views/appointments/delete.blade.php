<x-AddsLayout/>
<title>delete appointments</title>

<x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            delete appointment
        </h2>
        <br>
    </header>

    <form method="POST" action="/appointments/destroy" enctype="multipart/form-data">
        @csrf

        <div class="mb-6">
            <label for="id">Enter appointment ID    </label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="id" />

            @error('id')
                <p class="text-red-500 text-xs mt">{{ $message }}</p>
            @enderror

        <div class="mb-6 mt-4" >
            <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
               Submit
            </button>

        </div>
    </form>
</x-card>

<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" 
style="position: absolute; top: -40%; left: 10%; z-index: -1; width: 80%;">
    <path fill="#FA4D56" d="M52.7,-60.5C67.4,-61.8,78,-45.3,78.9,-28.8C79.8,-12.4,71.1,3.9,58.6,11.8C46.1,19.7,29.8,19.2,19.4,28.5C9.1,37.7,4.5,56.8,-5.3,64.1C-15.1,71.3,-30.3,66.9,-42.7,58.3C-55.2,49.8,-65,37,-66.6,23.6C-68.2,10.2,-61.7,-3.8,-55,-15.9C-48.4,-28,-41.7,-38,-32.5,-38.6C-23.3,-39.1,-11.7,-30,3.7,-35.1C19,-40.1,37.9,-59.2,52.7,-60.5Z" transform="translate(100 100)" />
  </svg>

