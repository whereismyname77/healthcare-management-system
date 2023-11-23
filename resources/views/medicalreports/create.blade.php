<x-AddsLayout/>
<title>upload medical reports</title>


<x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            upload medical report
        </h2>
        <br>
    </header>

    <form method="POST" action="/medicalreports" enctype="multipart/form-data">
        @csrf

        <div class="mb-6">
            <label for="user_id">Enter patient ID    </label>
            
            {{-- <select name="user_id" id="user_id">
                  <option value="" selected disabled>ID , Patient</option>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->id }} , {{ $user->name }}</option>
                @endforeach
            </select> --}}
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="user_id" />

            @error('user_id')
                <p class="text-red-500 text-xs mt">{{ $message }}</p>
            @enderror


        </div>

        <div class="mb-6">
            <label for="medicalreport" class="inline-block text-lg mb-2">
                Medical report <span style="opacity: 0.3; position: relative; left:78%;"> jpeg,jpg,png only </span>
            </label>
            <input type="file" accept = 'image/jpeg , image/jpg, image/gif, image/png' class="border border-gray-200 rounded p-2 w-full" name="medicalreport" />
            @error('medicalreport')
                <p class="text-red-500 text-xs mt">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                Upload
            </button>

        </div>
    </form>
</x-card>

<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"
style="position: absolute; top: -45%; left: 1%;z-index: -1;">

    <path fill="#A7F0BA" d="M20.9,-15.7C36,-17.8,63.3,-23.6,70.5,-18.8C77.7,-14,64.9,1.5,51.1,8.2C37.3,14.9,22.6,12.8,13.9,14.2C5.2,15.6,2.6,20.5,-6.8,29.9C-16.2,39.3,-32.5,53.2,-44.4,52.8C-56.3,52.5,-64,37.9,-68.7,22.5C-73.4,7.2,-75.2,-8.9,-72.6,-25.7C-70.1,-42.5,-63.2,-60,-50.4,-58.6C-37.5,-57.2,-18.8,-36.9,-7.9,-26C2.9,-15.1,5.8,-13.5,20.9,-15.7Z" transform="translate(100 100)" />
  </svg>