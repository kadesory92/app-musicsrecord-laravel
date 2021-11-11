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
            <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">New Artist form</h1>
            <form action="{{ route('artists.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="name">Full Name</label>
                    <input class="border py-2 px-3 text-grey-800" type="text" name="name" id="name">
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="profileimage">Photo de profile</label>
                    <input class="border py-2 px-3 text-grey-800" type="file" name="profileimage" id="profileimage">
                </div>
                <button class="block bg-green-400 hover:bg-green-600 text-white uppercase text-lg mx-auto p-4 rounded" type="submit">Save</button>
            </form>
        </div>
    </div>

</x-app-layout>