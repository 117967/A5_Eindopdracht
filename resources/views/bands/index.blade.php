

<x-layout>
@include('partials._hero')
@include('partials._search')

    @unless(count($bands) == 0)
        <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

            @foreach ($bands as $band)
               <x-bands-card :band='$band'></x-bands-card>
            @endforeach
        @else
            <p>THERE IS NOTHING</p>
        @endunless


    </div>
</x-layout>
