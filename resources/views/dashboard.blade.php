<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Thank you for login {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        This is the new page

    </div>
</x-app-layout>
