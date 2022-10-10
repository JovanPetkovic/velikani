@extends('components.layout')
@section('content')
<div class="back-image w-screen h-screen bg-black flex justify-between items-center">
    <img src="{{$figure->background_image}}" class="fixed h-screen w-full opacity-60">
    <button class="z-10 w-16 h-16 ml-32"></button>
    <div class="text-shadow z-10 text-center text-white flex flex-col items-center w-96 mr-32">
        <div class="mb-5">
            <h1 class="text-5xl mb-2 ">{{$figure->name}}</h1>
            <h3 class="text-3xl ">{{intdiv($figure->years,10000)}} - {{fmod($figure->years,10000)}}</h3>
        </div>
        <p class="z-10 text-white text-center w-64 ">{{$figure->description}}</p>
    </div>
</div>
@endsection
