<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Edit Band</h2>
            <p class="mb-4">Edit: {{ $band->band_name }}</p>
        </header>

        <form method="POST" action="/bands/{{ $band->band_id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="band_name" class="inline-block text-lg mb-2">Band Name</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="band_name"
                    value="{{ $band->band_name }}" />

                @error('band_name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="band_location" class="inline-block text-lg mb-2">Band Location</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="band_location"
                    placeholder="Example: Remote, Boston MA, etc" value="{{ $band->band_location }}" />

                @error('band_location')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="band_email" class="inline-block text-lg mb-2">
                    Contact Email
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="band_email"
                    value="{{ $band->band_email }}" />

                @error('band_email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="band_website" class="inline-block text-lg mb-2">
                    Website/Application URL
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="band_website"
                    value="{{ $band->band_website }}" />

                @error('band_website')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="band_genre" class="inline-block text-lg mb-2">
                    Tags (Comma Separated)
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="band_genre"
                    placeholder="Example: Laravel, Backend, Postgres, etc" value="{{ $band->band_genre }}" />

                @error('band_genre')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="band_logo" class="inline-block text-lg mb-2">
                    Band Logo
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="band_logo" />

                <img class="w-48 mr-6 mb-6"
                    src="{{ $band->band_logo ? asset('storage/' . $band->band_logo) : asset('/images/no-image.png') }}"
                    alt="" />

                @error('band_logo')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    Band Description
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                    placeholder="Include tasks, requirements, salary, etc">{{ $band->description }}</textarea>

                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Update
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>
