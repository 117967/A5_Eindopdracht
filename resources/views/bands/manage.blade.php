<x-layout>
    <x-card class="p-10">
        <header>
            <h1 class="text-3xl text-center font-bold my-6 uppercase">
                YOUR BANDS
            </h1>
        </header>

        <table class="w-full table-auto rounded-sm">
            <tbody>
                @unless($bands->isEmpty())
                    @foreach ($bands as $band)
                        <tr class="border-gray-300">
                            <td class="px-4 py-8 border-t border-b border-black text-lg">
                                <a href="/bands/{{ $band->band_id }}"> {{ $band->band_name }} </a>
                            </td>
                            <td class="px-4 py-8 border-t border-b border-black-300 text-lg">
                                <a href="/bands/{{ $band->band_id }}/edit" class="text-blue-400 px-6 py-2 rounded-xl"><i
                                        class="fa-solid fa-pen-to-square"></i>
                                    Edit</a>
                            </td>
                            <td class="px-4 py-8 border-t border-b border-black text-lg">
                                <form method="POST" action="/bands/{{ $band->band_id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr class="border-black-300">
                        <td class="px-4 py-8 border-t border-b border-black text-lg">
                            <p class="text-center">No Bands here</p>
                        </td>
                    </tr>
                @endunless

            </tbody>
        </table>
    </x-card>
</x-layout>
