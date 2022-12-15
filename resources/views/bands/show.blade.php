<x-layout>
<a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i>Back</a>
<div class="mx-4">
    <x-card>
        <div class="flex flex-col items-center justify-center text-center">
            <img class="w-48 mr-6 mb-6" src="{{asset('images/no-image.png')}}">
            <h3 class="text-2xl mb-2">
                {{$band['band_name']}}
            </h3>
            <div class="text-xl font-bold mb-4">{{$band['band_name']}}</div>
            <x-bands-genre :genre='$band["band_genre"]'></x-bands-genre>
            <div class="text-lg my-4"><i class="fa-solid fa-location-dot"></i> Somewhere</div>
            <div class="border border-gray-200 w-full mb-6"></div>
            <div>
                <h3 class="text-3xl font-bold mb-4">BAND DESCRIPTION</h3>
                <div class="'text-lg space-y-6">
                    <p>{{$band['description']}}</p>
                    <a href="mailto:{{$band['email']}}" class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"><i class='fa-solid fa-envelope'></i>Contact Management</a>
                    <a href="{{$band['website']}}" class="block bg-black text-white mt-6 py-2 rounded-xl hover:opacity-80"><i class='fa-solid fa-globe'></i>Website band</a>
                </div>
            </div>
        </div>
    </x-card>
</div>
</x-layout>
