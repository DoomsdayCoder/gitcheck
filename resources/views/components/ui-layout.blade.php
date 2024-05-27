@extends('layouts/layout')

@section('content')
    <div class="container overflow-hidden">
        <div class="card bg-transparent ui-container capped-height d-flex flex-column flex-lg-row">


            <div class="ui-card-header card-header px-2 py-lg-2 bg-darker border-0 d-flex flex-lg-column position-relative">

                <x-primary-button href='/editprofile' class="var-3" label="{{ auth()->user()->username }}"
                    labelClass="text-capitalize fs-3 fw-bold">
                    <img width="100%" height="100%"
                        src="{{ !empty(auth()->user()->profile) ? asset('profile-images/' . auth()->user()->profile . '.jpg') : asset('profile-images/default-profile.jpg') }}"
                        alt="profile" class="rounded-circle img-fluid">
                </x-primary-button>

                <div class="d-flex h-100 flex-lg-column gap-3 gap-lg-0 w-100 justify-content-end">
                    <x-primary-button href='/newentry' class="var-4 my-lg-4 mx-lg-auto" label='Add new comic'>
                        {{-- Add Comic --}}
                        <i class="bi bi-plus-circle"></i>
                    </x-primary-button>

                    <x-navigation-bar></x-navigation-bar>
                </div>

            </div>

            <div class ='w-100 d-flex flex-column content-og-box'>

                @livewire('search-comic')

                <div class='content-display px-2'>
                    {{ $slot }}
                </div>

            </div>


        </div>
    </div>
@endsection
