@props(['band'])

<x-card>
    <div class="flex">
        <img class="hidden w-58 mr-6 md:block" src="images/no-image.png">
    </div>
    <h3><a href="/bands/{{$band['band_id']}}">{{ $band['band_email'] }}</a></h3>
    <div class="text-xl font-bold mb-4">{{ $band['band_name'] }}</div>
    <x-bands-genre :genre='$band["band_genre"]'></x-bands-genre>
</x-card>