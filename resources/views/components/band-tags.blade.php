@props(['genreCard'])

@php
    $genres = explode(',', $genreCard);
@endphp

<ul class="flex">
    @foreach ($genres as $genre)
        <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
            <a href="/?band_genre={{ $genre }}">{{ $genre }}</a>
        </li>
    @endforeach
</ul>
