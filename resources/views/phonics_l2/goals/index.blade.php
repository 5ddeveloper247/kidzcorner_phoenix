@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;
@endphp

@push('styles')
    <style>
        .p-note {
            font-size: 1.2vw;
            color: white !important;
        }

        .panel-title {
            color: #F7B94A;
            font-size: 3vw;
        }

        .panel-ul {
            color: white;
            font-size: 1.3vw;
            padding-left: 3vw;
        }
    </style>
@endpush

@section('content')

    {{-- Panel --}}
    <div class="phonics-panel flex flex-col -mt-[6vw] gap-y-[1vw]">
        <h1 class="panel-title text-center stroke">Goals of Phonics Instruction</h1>

        <ul class="list-disc text-start panel-ul mb-[1vw]">
            <li>The goal of phonics instruction is to help children learn and use the alphabetic principle - the
                understanding that there are systematic and predictable relationships between written letters and spoken
                words.</li>
            <li>Knowing these relationships will help children recognize familiar words accurately and automatically and
                decode new words.</li>
            <li>Knowledge of the alphabetic principle contributes greatly to children's ability to read words both in
                isolation and in connected text.</li>
        </ul>
        <p class="p-note text-start">(National Reading Panel, 2000)</p>
    </div>

    {{-- Buttons --}}
    <div id="buttons" class="absolute flex flex-row gap-6 z-90">
        <button id="returnButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/return-btn.png') }}" />
        </button>
        <button id="homeButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/home-btn.png') }}" />
        </button>
        <button id="closeButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/cancel.png') }}" />
        </button>
    </div>

    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/done.png') }}" />
        </button>
    </div>

@endsection

@push('script')
    <script>
        document.body.dataset.homeRoute = "{{ url('/phonics/l2') }}";

        document.addEventListener("DOMContentLoaded", function() {

            const returnButton = document.getElementById("returnButton");

            // ✅ Capture where user came from, fallback to bl_pl if no referrer
            const returnURL = document.referrer || "{{ url('/phonics_l2/bl_pl') }}";

            if (returnButton) {
                returnButton.addEventListener("click", function() {
                    window.location.href = returnURL;
                });
            }

            document.querySelectorAll(".doneButton").forEach(btn => {
                btn.addEventListener("click", function() {
                    window.location.href = returnURL;
                });
            });

        });
    </script>
@endpush
