<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('MUSICRECORD') }}
        </h2>
    </x-slot>

    <div class="container flex justify-center mx-auto mt-10">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="border-b border-gray-200 shadow">
                    <table>
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    ID
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Name
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Image de couverture
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Show
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Edit
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Delete
                                </th>
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
                                <td class="px-6 py-4">
                                    <a href="{{ route('albums.show', $album) }}" class="px-4 py-1 text-sm text-white bg-blue-400 rounded">Show</a>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('albums.edit', $album) }}" class="px-4 py-1 text-sm text-white bg-blue-400 rounded">Edit</a>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('albums.destroy', $album) }}" class="px-4 py-1 text-sm text-white bg-blue-400 rounded">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $albums->links() }}
            </div>
        </div>
    </div>

</x-app-layout>