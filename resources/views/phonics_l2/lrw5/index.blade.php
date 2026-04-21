@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = false;
    $showVector1 = true;
    $showVector5 = false;
    $showMascot = true;
@endphp

@push('styles')
    <style>
        #slide-board a img {
            width: 14vw;
        }
    </style>
@endpush

@section('content')

    {{-- Navigations to Inner folders  --}}
    <div id="slide-board" class="grid grid-cols-2 gap-[2vw] mb-[2vw]  text-center justify-content-center">

        <a href="{{ url('/phonics_l2/lrw3/antonyms') }}">
            <img src="{{ asset('assets/images/phonics_l2/lrw3/antonyms.png') }}" class="mx-auto d-block" />
        </a>

        <a href="{{ url('/phonics_l2/lrw3/synonyms') }}">
            <img src="{{ asset('assets/images/phonics_l2/lrw3/synonyms.png') }}" class="mx-auto d-block" />
        </a>

        <a href="{{ url('/phonics_l2/lrw3/lets_write') }}">
            <img src="{{ asset('assets/images/phonics_l2/global/lr3.png') }}" class="mx-auto d-block" />
        </a>

      
            <a href="{{ url('/phonics_l2/objectives') }}">
                <img src="{{ asset('assets/images/phonics_l2/global/objectives.png') }}" class="mx-auto d-block" />
            </a>
    </div>



    <div id="buttons" class="absolute flex flex-row gap-6 z-90">

        <a href="{{ url ('/phonics/l2') }}" id="returnButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/return-btn.png') }}" />
        </a>

        <!-- Home Button (goes to specific URL) -->
        <button id="homeButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/home-btn.png') }}" />
        </button>

        <!-- Close Button -->
        <button id="closeButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/cancel.png') }}" />
        </button>
    </div>
@endsection

@push('script')
    <script>
        document.body.dataset.homeRoute = "{{ url('/phonics/l2') }}";
    </script>
@endpush
