@props(['band'])

<x-card>
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block"
            src="{{ $band->band_logo ? asset('storage/' . $band->band_logo) : asset('/images/no-image.png') }}"
            alt="" />
        <div>
            <h3 class="text-2xl">
                <a href="/bands/{{ $band->band_id }}">{{ $band->band_name }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $band->band_name }}</div>
            <x-band-tags :tagsCsv="$band->band_genre" />
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{ $band->band_location }}
            </div>
        </div>
    </div>
</x-card>
