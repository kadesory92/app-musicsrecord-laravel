<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('MUSICRECORD') }}
        </h2>
    </x-slot>

    <div class="container flex justify-center mx-auto mt-7">
        <div class="w-1/2 bg-white rounded shadow-2xl p-8 m-4">
            @foreach ($errors->all() as $error)
                <span class="block text-red-500">{{ $error }}</span>
            @endforeach
            <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">New Album Form</h1>
            <form action="{{ route('albums.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="name">Album Name</label>
                    <input class="border py-2 px-3 text-grey-800" type="text" name="name" id="name">
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="cover_image">Cover Photo</label>
                    <input class="border py-2 px-3 text-grey-800" type="file" name="cover_image" id="cover_image">
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="textarea">Description</label>
                    <textarea class="border py-2 px-3 text-grey-800" name="desc_albums" id="desc_albums"></textarea>
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="Select">Artists</label>
                    <select class="border py-2 px-3 text-grey-800" name="artist_id">
                        @foreach($artists as $artist)
                            <option value="{{ $artist->id }}">{{ $artist->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button class="block bg-green-400 hover:bg-green-600 text-white uppercase text-lg mx-auto p-4 rounded" type="submit">Save</button>
            </form>
        </div>
</div>

</x-app-layout>