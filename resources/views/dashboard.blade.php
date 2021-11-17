<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container flex justify-center mx-auto mt-7">
        <div class="flex flex-col mb-4">
            <label class="mb-2 font-bold text-lg text-gray-900" for="Select">My playlists</label>
            <select class="border py-2 px-3 text-grey-800" name="artist_id">
                @foreach($playlists as $playlist)
                    <option value="{{ $playlist->id }}">{{ $playlist->title }}</option>
                @endforeach
            </select>
        </div>
    </div>


</x-app-layout>
