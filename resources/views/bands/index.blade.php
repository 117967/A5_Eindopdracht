<x-layout>
  @if (!Auth::check())
    @include('partials._hero')
  @endif

  @include('partials._search')

  <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

    @unless(count($bands) == 0)

    @foreach($bands as $band)
    <x-band-card :band="$band" />
    @endforeach

    @else
    <p>No bands registered at the moment</p>
    @endunless

  </div>

  <div class="mt-6 p-4">
  </div>
</x-layout>
