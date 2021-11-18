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
            <option value="{{ route('dashboard')}}">Select your Playlist</option>
                @foreach($playlists as $playlist)
                    <option value="{{ $playlist->id }}">{{ $playlist->title }}</option>
                @endforeach
            </select>
            <div class="border-b border-gray-200 shadow">
                <table>
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-2 text-xs text-gray-500">ID</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Album</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Cover Image</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach($albums as $album)
                        <tr class="whitespace-nowrap">
                            <td class="px-6 py-4 text-sm text-gray-500">
                                {{$album->id}}
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{$album->name}}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <img class="h-10 w-10 rounded-full object-cover" src="{{ asset('/images/' . $album->cover_image) }}" alt="">
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</x-app-layout>
