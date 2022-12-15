@props(['genre'])

@php
    $genre = explode(',' , $genre);

@endphp

<ul class="flex">
    @foreach($genre as $genre)
    <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
        <a href="/?genre={{$genre}}">{{$genre}}</a></li>
    @endforeach
</ul>