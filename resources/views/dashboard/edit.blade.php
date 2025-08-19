<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{-- {{ __('Create Post') }} --}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xs sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <x-posts.edit :post="$post" />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
