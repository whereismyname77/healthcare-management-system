<x-comp.layout>
    @include('partials._hero')
    @include('partials._search')


    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        {{-- @if (count($listings) == 0)
<p> no lisitngs found</p>
@endif --}}

        {{-- @foreach ($listings as $listing)
<x-listing-card :listing="$listing"/>
@endforeach --}}

        @auth

        @if (count($appointments)==0 && count($prescriptions)==0 && count($sickleaves)==0 && count($medicalreports)==0)

            <p style="text-align: left; color:rgb(195, 38, 38) ">hospital staff did not upload any data for you yet</p>
        @endif

        @foreach ($appointments as $appointment)
                <x-comp.card>
                    <ul>
                        <li onMouseOver="this.style.color='red'" onMouseOut="this.style.color='black'">
                            <a href="{{ route('appointments.show', ['id' => $appointment->id]) }}">
                                <i class="fa-solid fa-calendar-days"></i> appointment {{$appointment->date}} {{$appointment->time}}
                            </a>
                        </li>
                    </ul>
                </x-card>
        @endforeach

        @foreach ($prescriptions as $prescriptions)
                <x-comp.card>
                    <ul>
                        <li onMouseOver="this.style.color='red'" onMouseOut="this.style.color='black'">
                            <a href="{{ route('prescription.show', ['id' => $prescriptions->id]) }}">
                                <i class="fa-solid fa-prescription-bottle"></i> prescription {{$prescriptions->id}}
                            </a>
                        </li>
                    </ul>
                </x-card>
        @endforeach

            @foreach ($sickleaves as $sickleave)
                <x-comp.card>
                    <ul>
                        <li onMouseOver="this.style.color='red'" onMouseOut="this.style.color='black'">
                            <a href="{{ asset('storage/' . $sickleave->sickleave) }}" target="_blank">
                                <i class="fa-solid fa-file"></i> sick leave
                            </a>
                        </li>
                    </ul>
                </x-comp.card>
            @endforeach

            @foreach ($medicalreports as $medicalreport)
                <x-comp.card>
                    <ul>
                        <li onMouseOver="this.style.color='red'" onMouseOut="this.style.color='black'">
                            <a href="{{ asset('storage/' . $medicalreport->medicalreport) }}" target="_blank">
                                <i class="fa-solid fa-file-medical"></i> medical report
                            </a>
                        </li>
                    </ul>
                </x-comp.card>
            @endforeach








        @endauth

        {{-- 
</div>
<div class="mt-6 p-4">{{$listings->links()}}</div> --}}
</x-comp.layout>
