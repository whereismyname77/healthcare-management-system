<x-comp.AddsLayout/>

  <style>

    form{
        display: inline-block;
    }
        /* Style to make the button inline with form fields */
        .inline-button {
            display: inline-block;
            padding-left: 10px;
            
        }
    </style>

<title>Doctors list</title>
<div class="p-5 ">
    <span>
        <p style="font-size: 2.5rem"> Doctors list </p> <b>ID : name , specialty</b>
    </span>
    @if ($doctors->count() > 0)
        <ul>
            @foreach ($doctors as $doctor)
            <li> {{ $doctor->id }} : {{ $doctor->name }} , {{$doctor->specialty}}
             <form action="{{ route('doctors.destroy', ['id' => $doctor->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button onMouseOver="this.style.color='red'"
                onMouseOut="this.style.color='black'" type="submit" class="inline-button"><i style="font-size: 12px" class="fa-solid fa-user-minus"> Delete Doctor </i></button>

            </form>
            </li>


                
                
            @endforeach
        </ul>
    @else
        <p>No results found.</p>
    @endif

</div>

<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"
style="position: absolute; top: -40%; left: -18%;z-index: -1;">

    <path fill="#9EF0F0" d="M52.7,-60.5C67.4,-61.8,78,-45.3,78.9,-28.8C79.8,-12.4,71.1,3.9,58.6,11.8C46.1,19.7,29.8,19.2,19.4,28.5C9.1,37.7,4.5,56.8,-5.3,64.1C-15.1,71.3,-30.3,66.9,-42.7,58.3C-55.2,49.8,-65,37,-66.6,23.6C-68.2,10.2,-61.7,-3.8,-55,-15.9C-48.4,-28,-41.7,-38,-32.5,-38.6C-23.3,-39.1,-11.7,-30,3.7,-35.1C19,-40.1,37.9,-59.2,52.7,-60.5Z" transform="translate(90 90)" />
  </svg>