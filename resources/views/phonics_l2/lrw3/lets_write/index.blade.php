@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = false;
    $showVector1 = false;
    $showVector5 = true;
    $showMascot = false;
@endphp

@push('styles')
    <style>
        #slide-board a img {
            width: 14vw;
        }
    </style>
@endpush

@section('content')

    <div>
        <h2 class="stroke text-[3vw] text-[#f7b94a] ">Let's Write About</h2>
        {{-- Navigations to Inner folders  --}}
        <div id="slide-board" class="grid grid-cols-2 gap-[2vw] mb-[2vw]  text-center justify-content-center">

            <a href="{{ url('/phonics_l2/lrw3/lets_write/pattern') }}">
                <img src="{{ asset('assets/images/phonics_l2/lrw1/ab1.png') }}" class="mx-auto d-block" />
            </a>

            <a href="{{ url('/phonics_l2/lrw3/lets_write/five_sense') }}">
                <img src="{{ asset('assets/images/phonics_l2/lrw1/ab2.png') }}" class="mx-auto d-block" />
            </a>
            <div class="col-span-2 flex justify-center items-center">
                <a href="{{ url('/phonics_l2/lrw3/lets_write/wraparound') }}">
                    <img src="{{ asset('assets/images/phonics_l2/lrw1/ab3.png') }}" class="mx-auto d-block" />
                </a>
            </div>

        </div>
    </div>



    <div id="buttons" class="absolute flex flex-row gap-6 z-90">

        <a href="{{ url('/phonics_l2/lrw3') }}" id="returnButton">
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
