<x-comp.AddsLayout/>
<title>Add doctors</title>

<x-comp.card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Add doctor
        </h2>
        <br>
    </header>

    <form method="POST" action="/doctors" enctype="multipart/form-data">
        @csrf

        <div class="mb-6">
            <label for="id">Enter doctor ID </label>
            
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="id" />

            @error('id')
                <p class="text-red-500 text-xs mt">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-6">
            <label for="name">Enter doctor name </label>
            
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name" />

            @error('name')
                <p class="text-red-500 text-xs mt">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-6">
            <label for="specialty">Enter doctor specialty</label>
            
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="specialty" />

            @error('specialty')
                <p class="text-red-500 text-xs mt">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-6">
            <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                Add
            </button>

        </div>
    </form>
</x-comp.card>

<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" 
style="position: absolute; top: -50%; z-index: -1; left: 2%" >
    <path fill="#686AC9" d="M30.1,-38.3C41.2,-33.4,53.7,-27.5,55.7,-18.7C57.7,-9.9,49.3,1.7,41.7,10C34,18.2,27.2,23.2,20.4,37.6C13.6,52,6.8,75.8,-1.6,78C-10,80.2,-20.1,60.8,-24.7,45.7C-29.2,30.6,-28.4,19.8,-25.8,12.1C-23.2,4.4,-18.7,-0.1,-16,-4.1C-13.2,-8.1,-12.1,-11.6,-9.7,-19.3C-7.3,-26.9,-3.6,-38.8,3,-42.9C9.5,-46.9,19.1,-43.2,30.1,-38.3Z" transform="translate(100 100)" />
  </svg>

  <svg viewBox="0 0 200 100" xmlns="http://www.w3.org/2000/svg"
  style="position: absolute; top: -40%; left: -18%;z-index: -1;">
    <path fill="#686AC9" d="M16.2,-30.9C18.6,-20.6,16.4,-12.6,22.8,-4.6C29.2,3.3,44.2,11.3,43.3,14C42.3,16.6,25.3,14,15.4,25.1C5.5,36.2,2.8,61,-0.8,62C-4.3,63.1,-8.7,40.5,-11,27C-13.4,13.5,-13.8,9,-15.9,4.6C-18.1,0.2,-22.1,-4.1,-24.6,-11.6C-27.1,-19.1,-28.2,-29.7,-23.9,-39.3C-19.5,-49,-9.8,-57.7,-1.4,-55.7C6.9,-53.7,13.8,-41.1,16.2,-30.9Z" transform="translate(100 100)" />
  </svg>

  <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"
  style="position: absolute; top: 38%; left: 26%;z-index: -1; width: 60%">
    <path fill="#686AC9" d="M52.7,-60.5C67.4,-61.8,78,-45.3,78.9,-28.8C79.8,-12.4,71.1,3.9,58.6,11.8C46.1,19.7,29.8,19.2,19.4,28.5C9.1,37.7,4.5,56.8,-5.3,64.1C-15.1,71.3,-30.3,66.9,-42.7,58.3C-55.2,49.8,-65,37,-66.6,23.6C-68.2,10.2,-61.7,-3.8,-55,-15.9C-48.4,-28,-41.7,-38,-32.5,-38.6C-23.3,-39.1,-11.7,-30,3.7,-35.1C19,-40.1,37.9,-59.2,52.7,-60.5Z" transform="translate(100 100)" />
  </svg>


