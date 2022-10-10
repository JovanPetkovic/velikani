@extends('components.layout')
@section('content')
    <div class="flex flex-row w-full justify-around flex-wrap">
        @foreach($figures as $figure)
            <x-item :figure="$figure"></x-item>
        @endforeach
    </div>
@endsection


