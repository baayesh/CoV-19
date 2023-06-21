<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Help & Guide') }}
        </h2>
        <p class="mt-3">You can exchange your experiences with our community. It will help to save at least one valuable human life</p>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{route('storeHelpAndGuide')}}" method="POST">
                        @csrf
                        <!-- Title -->
                        <div class="mt-4">
                            <x-input-label for="Link" :value="__('Link')" />
                            <textarea id="link" class="form-control w-full mt-1" type="" name="link" rows="1" required> </textarea>
                        </div>
                        <div style="margin-top:20px">
                        <x-input-label for="Description" :value="__('Description')" />
                        <!-- Description -->
                        <textarea name="description" id="description" class="form-control w-full mt-1" rows="3" required></textarea>
                        <button type="submit" class="" >Share</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
