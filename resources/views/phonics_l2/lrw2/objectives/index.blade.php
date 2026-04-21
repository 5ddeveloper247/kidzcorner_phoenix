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
        <h1 class="panel-title text-center stroke">Objectives</h1>
        <div class="text-start">
            <h2 class="text-white text-[1.5vw]">Children will:</h2>
            <ul class="list-disc text-start panel-ul mb-[1vw]">
                <li>Recognise the targeted consonant blend and the sound it represents.</li>
                <li>Say the sound made by the consonant blend.</li>
                <li>Practice decoding common initial blends and endings.</li>
                <li>Discriminate and read words with initial consonant blends.</li>
                <li>Apply the letter-sound relationships as they read words, sentences and stories.</li>
                <li>Read common high frequency words by sight.</li>
                <li>Spell by using the knowledge of letter names and sounds.</li>
            </ul>
        </div>
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
            const returnURL = "{{ url('/phonics_l2/fl_gl') }}";
            const doneURL = "{{ url('/phonics_l2/fl_gl') }}";

            if (returnButton) {
                returnButton.addEventListener("click", function() {
                    window.location.href = returnURL;
                });
            }

            document.querySelectorAll(".doneButton").forEach(btn => {
                btn.addEventListener("click", function() {
                    window.location.href = doneURL;
                });
            });

        });
    </script>
@endpush
