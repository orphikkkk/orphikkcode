@extends('master')

@section('content')
    {{--Banner Part--}}
    <div class="bg-obsblack text-white mb-auto py-12 h-screen">
        <div class="grid grid-cols-2">
            <div class="col-span-1 flex place-content-end mt-44">
                <div class="text-sassyorange text-5xl ml-8 -mr-24 z-10">Hi, I am Sajag <br> Dhungana</div>
                <div class="text-sassygreen text-9xl mt-14 mr-16 z-0 opacity-60">&</div>
                <div class="text-sassyorange text-3xl mt-32 -ml-20 z-10">I am Fullstack <br> web developer</div>
            </div>
            <div class="col-span-1 flex place-content-start ml-10">
                <img src="{{ asset('/img/mainWhite.png') }}" alt="orphikk-logo" width="500px" height="700px">
            </div>
        </div>
    </div>
    {{--About me--}}
    <div class="h-screen">
        <div class="mx-40 py-36">
            <div class="grid grid-cols-2">
                <div class="col-span-1 flex place-content-center">
                    <img src="{{ asset('/img/me.jpg') }}" alt="orphikk-face" width="350" class="rounded-full">
                </div>
                <div class="col-span-1">
                    <div class="text-3xl text-obsblack text-center">About me</div>
                    <p class="text-justify mt-14">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet asperiores aut corporis delectus dicta ducimus ea enim et explicabo hic, labore nam neque unde! Amet corporis dignissimos eius maiores quam.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet asperiores aut corporis delectus dicta ducimus ea enim et explicabo hic, labore nam neque unde! Amet corporis dignissimos eius maiores quam.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet asperiores aut corporis delectus dicta ducimus ea enim et explicabo hic, labore nam neque unde! Amet corporis dignissimos eius maiores quam.
                    </p>
                </div>
            </div>
        </div>
        {{--Stack--}}
        <div class="h-40 grid grid-cols-3 place-content-center bg-obsblack py-8">
            <div class="col-start-2 flex place-content-center">
                <img src="{{ asset('/img/stack/tailwind.svg') }}" alt="orphikk-logo" class="w-28 h-36 mr-12">
                <img src="{{ asset('/img/stack/alpine.svg') }}" alt="orphikk-logo" class="w-28 h-36 mr-12">
                <img src="{{ asset('/img/stack/laravel.svg') }}" alt="orphikk-logo" class="w-28 h-36 mr-12">
                <img src="{{ asset('/img/stack/livewire.png') }}" alt="orphikk-logo" width="200" class="h-32 mr-12 mt-2">
            </div>
        </div>
    </div>
    {{--Blogs--}}
    <div class="h-26 bg-sassygreen px-64 text-obsblack py-16">
        <div class="text-2xl">Recent Blogs</div>
        <div class="mt-4 ml-6 text-lg">
            <span class="mr-4">22.03.2021</span>
            <span>Substack’s UI and 1Password just cost me $2,023</span> <br>
            <span class="mr-4">22.03.2021</span>
            <span>Substack’s UI and 1Password just cost me $2,023</span> <br>
            <span class="mr-4">22.03.2021</span>
            <span>Substack’s UI and 1Password just cost me $2,023</span> <br>
            <span class="mr-4">22.03.2021</span>
            <span>Substack’s UI and 1Password just cost me $2,023</span> <br>
            <span class="mr-4">22.03.2021</span>
            <span>Substack’s UI and 1Password just cost me $2,023</span> <br>
            <span class="mr-4">22.03.2021</span>
            <span>Substack’s UI and 1Password just cost me $2,023</span> <br>
        </div>
    </div>
    {{--Projects--}}
    <div class="h-42 mx-40 py-24">
        <div class="text-3xl text-obsblack text-center">My Recent Works</div>
        <div class="grid grid-cols-2 my-12">
            <div class="col-span-1 flex place-content-center h-54">
                <img src="{{ asset('/img/testProject.jpeg') }}" alt="project-1" width="500" class="rounded-lg">
            </div>
            <div class="col-span-1">
                <div class="text-5xl">Real Estate Webpage</div>
                <p class="text-justify mt-8">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet asperiores aut corporis delectus dicta ducimus ea enim et explicabo hic, labore nam neque unde! Amet corporis dignissimos eius maiores quam.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet asperiores aut corporis delectus dicta ducimus ea enim et explicabo hic, labore nam neque unde! Amet corporis dignissimos eius maiores quam.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet asperiores aut corporis delectus dicta ducimus ea enim et explicabo hic, labore nam neque unde! Amet corporis dignissimos eius maiores quam.
                </p>
            </div>
        </div>
    </div>


@endsection
