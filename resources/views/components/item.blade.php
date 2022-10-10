@props(['figure'])

<div class="w-80 h-80 bg-amber-900 m-10">
    <a href="/figure/{{$figure->slug}}">
        <img src="{{$figure->profile_photo}}">
        <h3>{{$figure->name}}</h3>
    </a>
</div>
