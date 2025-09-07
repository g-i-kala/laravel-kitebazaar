<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12 container mx-auto">
        <div class="w-full mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-6">

                {{-- Sidebar --}}
                <aside class="w-full lg:w-1/4 bg-gray-100 rounded-lg">
                    @include('dashboard.partials.sidebar')
                </aside>

                {{-- Main Content --}}
                <main class="w-full lg:w-3/4 flex flex-col gap-4">
                    {{-- Toggle (aligned right) --}}
                    <div class="flex justify-end">
                        @include('dashboard.partials.all-my-toggle')
                    </div>

                    {{-- Listings feed / main panel --}}
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            {{ __("You're logged in!") }}
                            <br>
                            Here will be the feed of all users listings (or mine if toggled).
                        </div>
                    </div>
                </main>

            </div>

        </div>

    </div>

</x-app-layout>
