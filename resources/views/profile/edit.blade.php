<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>



    <section>
        @include('profile.partials.update-profile-information-form')
    </section>

    <section class="mt-8">
        @include('profile.partials.update-password-form')
    </section>

    <section class="mt-8">
        @include('profile.partials.delete-user-form')
    </section>


</x-app-layout>