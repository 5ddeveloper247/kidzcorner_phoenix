@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;
@endphp

@section('content')

    <div id="top-panel" class="flex w-full justify-around hidden">
        <button id="phonics-btn">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/phonic-btn.png') }}" class="w-[15vw] h-[25vw]">
        </button>

        <button id="words-btn">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/words-btn.png') }}" class="w-[18vw] h-[25vw]">
        </button>

    </div>

    {{-- Phonics --}}
    <div id="phonics-slide" class="flex flex-col hidden">
        <h2 class="text-[3vw] stroke text-[#F7B94A]">Phonics</h2>
        <div class="box-grid grid grid-cols-4 gap-[2vw]">
            <a href="{{ url('/phonics/letter_g/phonics/magicletters') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/slides-btn/btn8.png') }}" />
            </a>

            <a href="{{ url('/phonics/letter_g/phonics/alphabets') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/slides-btn/btn1.png') }}" />
            </a>

            <a href="{{ url('/phonics/letter_g/phonics/singalong') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/slides-btn/btn2.png') }}" />
            </a>

            <a href="{{ url('/phonics/letter_g/phonics/readalong') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/slides-btn/btn3.png') }}" />
            </a>

            <a href="{{ url('/phonics/letter_g/phonics/storytime') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/slides-btn/btn4.png') }}" />
            </a>

            <a href="{{ url('/phonics/letter_g/phonics/animated') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/slides-btn/btn5.png') }}" />
            </a>

            <a href="{{ url('/phonics/letter_g/phonics/teaching') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/slides-btn/btn6.png') }}" />
            </a>

            <a href="{{ url('/phonics/letter_g/phonics/about') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/slides-btn/btn7.png') }}" />
            </a>



        </div>
    </div>

    {{-- High Frequency Words --}}
    <div id="words-slide" class="flex flex-col gap-y-[2vw]">
        <h2 class="text-[3vw] stroke text-[#F7B94A]">High frequency Words</h2>
        <div class="grid grid-cols-3 gap-[2vw]">
            <a href="{{ url('phonics/letter_g/frequencywords/storytime') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/slides-btn/btn9.png') }}" class="w-[14vw]" />
            </a>

            <a href="{{ url('phonics/letter_g/frequencywords/flashcards') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/slides-btn/btn13.png') }}" class="w-[14vw]" />
            </a>

            <a href="{{ url('phonics/letter_g/frequencywords/balloon_fun') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/slides-btn/btn10.png') }}" class="w-[14vw]" />
            </a>

            <div class="col-span-3 flex justify-center items-center gap-[2vw]">
                <a href="{{ url('phonics/letter_g/frequencywords/bingo') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/slides-btn/btn11.png') }}" class="w-[14vw]" />
                </a>

                <a href="{{ url('phonics/letter_g/frequencywords/about') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/slides-btn/btn7.png') }}" class="w-[14vw]" />
                </a>
            </div>


        </div>
    </div>





    {{-- All Buttons --}}
    <div id="buttons" class="absolute flex flex-row gap-6 z-90">

        <!-- Return Button -->
        <button id="returnButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/return-btn.png') }}" />
        </button>

        <!-- Home Button -->
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
        document.body.dataset.homeRoute = "{{ url('/phonics/l1') }}";

        document.addEventListener("DOMContentLoaded", () => {
            // Get all elements
            const startSlide = document.getElementById('top-panel')
            const phonicsBtn = document.getElementById('phonics-btn');
            const wordsBtn = document.getElementById('words-btn');
            const phonicsSlide = document.getElementById('phonics-slide');
            const wordsSlide = document.getElementById('words-slide');
            const returnButton = document.getElementById('returnButton');
            let currentView = 'start';


            function showSlide(slideName) {
                // Hide all slides first
                startSlide?.classList.add('hidden');
                phonicsSlide?.classList.add('hidden');
                wordsSlide?.classList.add('hidden');

                // Show the requested slide
                if (slideName === 'start') {
                    startSlide?.classList.remove('hidden');
                    currentView = 'start';
                } else if (slideName === 'phonics') {
                    phonicsSlide?.classList.remove('hidden');
                    currentView = 'phonics';
                } else if (slideName === 'words') {
                    wordsSlide?.classList.remove('hidden');
                    currentView = 'words';
                }
            }

            // NEW: Check URL parameters on page load
            function checkURLParameter() {
                const urlParams = new URLSearchParams(window.location.search);
                const view = urlParams.get('view');

                if (view === 'phonics') {
                    showSlide('phonics');
                } else if (view === 'words') {
                    showSlide('words');
                } else {
                    showSlide('start');
                }
            }

            // Phonics button click - show phonics slide
            if (phonicsBtn) {
                phonicsBtn.addEventListener('click', () => {
                    showSlide('phonics');
                });
            }

            // Words button click - show words slide
            if (wordsBtn) {
                wordsBtn.addEventListener('click', () => {
                    showSlide('words');
                });
            }

            if (returnButton) {
                returnButton.addEventListener('click', (e) => {
                    e.preventDefault();

                    // If on phonics or words slide, return to start slide
                    if (currentView === 'phonics' || currentView === 'words') {
                        showSlide('start');
                    } else if (currentView === 'start') {
                        // If on start slide, go back to previous page
                        window.location.href = "{{ url('/phonics/l1') }}";
                    }
                });
            }

            checkURLParameter();
        });
    </script>
@endpush
