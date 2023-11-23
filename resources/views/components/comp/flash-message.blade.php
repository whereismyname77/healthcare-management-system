@if(session()->has('message'))
<div x-data="{show: true}" x-init="setTimeout(() => show=false , 4000)"   
    x-show='show' class="fixed top-0 left-1/2 trasform -translate-x-1/2 text-white px-48 py-3"
    style="background-color:rgb(13, 13, 157)">
<p>{{session('message')}}</p>
</div>
@endif