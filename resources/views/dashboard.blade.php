<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   
                </div>
            </div>
        </div>
    </div>


    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ __("Hi") }}</h4>
                    </div>
                    <div class="card-body">
                        <p>{{ __("You're logged in!") }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>