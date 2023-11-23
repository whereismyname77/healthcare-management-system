<x-comp.AddsLayout/>

<title>upload prescriptions</title>


<x-comp.card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            upload prescription
        </h2>
        <br>
    </header>

    <form method="POST" action="/prescription" enctype="multipart/form-data">
        @csrf

        <div class="mb-6">
            <label for="user_id">Enter patient ID    </label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="user_id" />

            @error('user_id')
                <p class="text-red-500 text-xs mt">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="medicine_name">Enter medicine name</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="medicine_name" />

            @error('medicine_name')
                <p class="text-red-500 text-xs mt">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="strength">Enter strength <span style="color: gray">(optional)</span>  </label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="strength" />

            @error('strength')
                <p class="text-red-500 text-xs mt">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="amount">Enter amount    </label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="amount" />

            @error('amount')
                <p class="text-red-500 text-xs mt">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="mb-6">
            <label for="instructions">Enter using instructions <span style="color: gray">(optional)</span>  </label>
            <textarea class="border" name="instructions" cols="61" rows="3"></textarea>
            @error('instructions')
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
style="position: absolute; top: -30%; left: -10%;z-index: -1;">

<path fill="#A0A2FA" d="M46.4,-44.5C57.9,-34.9,63.5,-17.5,59.2,-4.3C54.8,8.8,40.6,17.6,29.1,32.5C17.6,47.4,8.8,68.5,-2.7,71.1C-14.1,73.8,-28.3,58.1,-33.1,43.2C-37.9,28.3,-33.3,14.1,-36.8,-3.5C-40.3,-21.1,-51.8,-42.2,-47,-51.8C-42.2,-61.5,-21.1,-59.6,-1.8,-57.8C17.5,-55.9,34.9,-54.1,46.4,-44.5Z" transform="translate(100 100)" />
</svg>