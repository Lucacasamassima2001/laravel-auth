{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

@extends('admin.layouts.base')

@section('contents')
<div class="container dashboard">
    <h1 class="text-center py-5 main-title">Welcome to your dashboard!</h1>
    <h2 class="text-center">This is your staging area for all your projects.</h2>
    <p class="text-center">This current version is an early build, it's still on development...</p>
    <h3 class="py-3">Here you can:</h3>
    <ul class="capabilities">
        <li>Stage your works.</li>
        <li>Edit your works.</li>
        <li>Delete your works.</li>
    </ul>
</div>   
@endsection

<style lang="scss" scoped>

.dashboard{
    color: white;
}

.main-title{
    color: white;
    font-size: 4em;
}

.capabilities{
    font-size: 1.5em;
}





</style>