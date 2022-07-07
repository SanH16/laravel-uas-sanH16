<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <CENTER>{{ __('Welcome SMOKE TEAM LOVERS !') }}</CENTER>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="shadow-lg p-3 mb-5 bg-body rounded">
                <div class="p-6 bg-white border-b border-gray-200">
                    <CENTER><b>Hallo Masbro SMOKE TEAM! {{ Auth :: user() ->name }}</b></CENTER>
                    <CENTER><b>Tetap Semangat !</b></CENTER>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
