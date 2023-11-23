<x-comp.AddsLayout/>
<title>upload sick leaves</title>

<x-comp.card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            upload sick leave
        </h2>
        <br>
    </header>

    <form method="POST" action="/sickleaves" enctype="multipart/form-data">
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
            <label for="sickleave" class="inline-block text-lg mb-2">
                Sick leave <span style="opacity: 0.3; position: relative; left: 210%"> PDF only </span>
            </label>
            <input type="file" accept="application/pdf" class="border border-gray-200 rounded p-2 w-full" name="sickleave" />
            @error('sickleave')
                <p class="text-red-500 text-xs mt">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                Upload
            </button>

        </div>
    </form>
</x-comp.card>

<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"
style="position: absolute; top: -50%; left: 1%;z-index: -1;">

    <path fill="#08BDBA" d="M31.7,-40.8C39.9,-37.6,44.5,-26.8,53.7,-13.8C63,-0.8,76.8,14.3,73,23C69.1,31.6,47.6,33.8,32.5,31.7C17.4,29.7,8.7,23.4,-4,28.9C-16.7,34.4,-33.5,51.8,-48.6,53.8C-63.6,55.9,-77,42.6,-71.9,30.1C-66.7,17.5,-43.1,5.6,-35.3,-9.4C-27.5,-24.3,-35.7,-42.3,-32.5,-47.1C-29.2,-52,-14.6,-43.6,-1.4,-41.6C11.7,-39.6,23.5,-44.1,31.7,-40.8Z" transform="translate(100 100)" />
  </svg>