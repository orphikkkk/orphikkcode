@extends('master')

@section('content')
    <div class="h-34 bg-obsblack text-white mb-auto">
        <div class="grid grid-cols-2">
            <div class="col-span-1 flex place-content-end mt-24">
                <div class="text-sassyorange text-5xl ml-8">Hi, I am Sajag <br> Dhungana</div>
                <div class="text-sassygreen text-9xl mt-14 mr-8">&</div>
                <div class="text-sassyorange text-3xl mt-32">I am Fullstack <br> web developer</div>
            </div>
            <div class="col-span-1 flex place-content-center">
                <img src="{{ asset('/img/mainWhite.png') }}" alt="orphikk-logo" width="300px" height="300px">
            </div>
        </div>
    </div>


@endsection
