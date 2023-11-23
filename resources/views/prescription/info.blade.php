
<body style="overflow-x: hidden">
    <x-layout>
    
    
        <ul class="flex space-x-6 mr-6 text-lg mb-6" style="position: absolute; left: 2%;">
            <li onMouseOver="this.style.color='red'"
            onMouseOut="this.style.color='black'">
            <a href="/"> <i class="fa-solid fa-arrow-left"></i> <b>back</b></a></li>
        </ul>
        <br>
    
        <x-card class="flex space-x-6 mr-6 text-lg mt-6">
            <ul>
                <li>prescription id: {{$prescription->id}}</li>
                <li>medicine name: {{$prescription->medicine_name}}</li>
                <li>strength: {{$prescription->strength}}</li>
                <li>amount: {{$prescription->amount}}</li>
                <li>instructions: {{$prescription->instructions}}</li>
                <li>created at: {{$prescription->created_at}}</li>
            </ul>
        </x-card>
    
    </x-layout>
    <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"
    style="position: absolute; top: -80%; left: -40%;z-index: -1;">
    
    <path fill="#08BDBA" d="M22.8,-24.1C33.3,-12.3,48.1,-6.2,55.8,7.8C63.6,21.7,64.3,43.3,53.8,49.9C43.3,56.5,21.7,48,6.4,41.6C-8.9,35.2,-17.7,30.9,-29.3,24.3C-40.9,17.7,-55.3,8.9,-54.8,0.5C-54.3,-7.9,-38.9,-15.7,-27.3,-27.5C-15.7,-39.2,-7.9,-54.8,-0.9,-54C6.2,-53.1,12.3,-35.8,22.8,-24.1Z" transform="translate(100 100)" />
    </svg>
    </body>
    