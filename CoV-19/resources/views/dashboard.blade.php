<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Help & Guide') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{route('storeHelpAndGuide')}}" method="POST">
                        @csrf
                        <!-- Title -->
                        <div class="mt-4">
                            <x-input-label for="Title" :value="__('Title')" />
                            <textarea id="title" class="form-control w-full mt-1" type="" name="title" rows="1" required> </textarea>
                        </div>
                        <div style="margin-top:20px">
                        <x-input-label for="Description" :value="__('Description')" />
                        <!-- Description -->
                        <textarea name="description" id="description" class="form-control w-full mt-1" rows="8" required></textarea>
                        <button type="submit" class="btn btn-primary" >Help and Guide People</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
