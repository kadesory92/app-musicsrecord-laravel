<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container flex justify-center mx-auto mt-10">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="border-b border-gray-200 shadow">
                    <label for="profileimage">Photo de profile</label>
                    <p>
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ asset('/images/' . $artist->profileimage) }}" alt="">
                    </p>
                    <label for="name">Name </label>
                    <p>
                        {{$artist->name}}
                    </p>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
