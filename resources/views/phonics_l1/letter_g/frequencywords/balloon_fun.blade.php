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
            width: 50vw;
        }

        .bg-title {
            font-size: 3vw;
            color: #f7b94a;
            line-height: 100%;
        }
    </style>
@endpush

@section('content')
    {{-- Top Title --}}
    <h2 class="top-title stroke">Balloon Fun</h2>

    {{-- panel 1 --}}
    <div class="phonics-panel mb-[2vw]">
        <div class="flex items-start ">
            <div class="relative">
                <img src="{{ asset('assets/images/phonicsl1/global/click3.png') }}" class="w-[30vw]" />
                <h3 class="text-[#B76E33] text-[2.5vw] absolute top-[30%] left-[27%]">Which word <br>
                    matches...</h3>
            </div>
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
        <p class="p-note">Tips: When children can success fully match all the high frequency words, ask them to do the
            Balloon Fun Activity Sheet in the Pupil's Activity Book.</p>
    </div>


    {{-- Panel 2 --}}
    <div class="phonics-panel flex flex-col items-center justify-between h-full">
        <div class="space-y-[5vw]">
            <h1 class="text-white text-[5vw]">has</h1>
            <div class="flex gap-[1vw]">

                <a id="true" class="h-fit relative inline-block">
                    <img src="{{ asset('assets/images/phonicsl1/letter_g/bg.png') }}" class="h-[10vw]">
                    <span class="bg-title absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                        has
                    </span>
                </a>

                <a id="false" class="h-fit relative inline-block">
                    <img src="{{ asset('assets/images/phonicsl1/letter_g/bg.png') }}" class="h-[10vw]">
                    <span class="bg-title absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                        he
                    </span>
                </a>

                <a id="false" class="h-fit relative inline-block">
                    <img src="{{ asset('assets/images/phonicsl1/letter_g/bg.png') }}" class="h-[10vw]">
                    <span class="bg-title absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                        on
                    </span>
                </a>

                <a id="false" class="h-fit relative inline-block">
                    <img src="{{ asset('assets/images/phonicsl1/letter_g/bg.png') }}" class="h-[10vw]">
                    <span class="bg-title absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                        look
                    </span>
                </a>

            </div>
        </div>
        <p class="p-note">Tips: Click on the word that matches the onw shown. This is the first of 4 sets activities.</p>
    </div>



    {{-- Panel 3 --}}
    <div class="phonics-panel flex flex-col items-center justify-between h-full">
        <div class="space-y-[5vw]">
            <h1 class="text-white text-[5vw]">to</h1>
           <div class="flex gap-[1vw]">

                <a id="false" class="h-fit relative inline-block">
                    <img src="{{ asset('assets/images/phonicsl1/letter_g/bg.png') }}" class="h-[10vw]">
                    <span class="bg-title absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                        she
                    </span>
                </a>

                <a id="false" class="h-fit relative inline-block">
                    <img src="{{ asset('assets/images/phonicsl1/letter_g/bg.png') }}" class="h-[10vw]">
                    <span class="bg-title absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                        it
                    </span>
                </a>

                <a id="false" class="h-fit relative inline-block">
                    <img src="{{ asset('assets/images/phonicsl1/letter_g/bg.png') }}" class="h-[10vw]">
                    <span class="bg-title absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                        at
                    </span>
                </a>

                <a id="true" class="h-fit relative inline-block">
                    <img src="{{ asset('assets/images/phonicsl1/letter_g/bg.png') }}" class="h-[10vw]">
                    <span class="bg-title absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                        to
                    </span>
                </a>

            </div>
        </div>
        <p class="p-note">Tips: Click on the word that matches the onw shown. This is the first of 4 sets activities.</p>
    </div>


    {{-- Panel 4 --}}
    <div class="phonics-panel flex flex-col items-center justify-between h-full">
        <div class="space-y-[5vw]">
            <h1 class="text-white text-[5vw]">she</h1>
            <div class="flex gap-[1vw]">

                <a id="true" class="h-fit relative inline-block">
                    <img src="{{ asset('assets/images/phonicsl1/letter_g/bg.png') }}" class="h-[10vw]">
                    <span class="bg-title absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                        she
                    </span>
                </a>

                <a id="false" class="h-fit relative inline-block">
                    <img src="{{ asset('assets/images/phonicsl1/letter_g/bg.png') }}" class="h-[10vw]">
                    <span class="bg-title absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                        looks
                    </span>
                </a>

                <a id="false" class="h-fit relative inline-block">
                    <img src="{{ asset('assets/images/phonicsl1/letter_g/bg.png') }}" class="h-[10vw]">
                    <span class="bg-title absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                        has
                    </span>
                </a>

                <a id="false" class="h-fit relative inline-block">
                    <img src="{{ asset('assets/images/phonicsl1/letter_g/bg.png') }}" class="h-[10vw]">
                    <span class="bg-title absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                        or
                    </span>
                </a>

            </div>
        </div>
        <p class="p-note">Tips: Click on the word that matches the onw shown. This is the first of 4 sets activities.</p>
    </div>


    {{-- Panel 5 --}}
    <div class="phonics-panel flex flex-col items-center justify-between h-full">
        <div class="space-y-[5vw]">
            <h1 class="text-white text-[5vw]">looks</h1>
            <div class="flex gap-[1vw]">

                <a id="false" class="h-fit relative inline-block">
                    <img src="{{ asset('assets/images/phonicsl1/letter_g/bg.png') }}" class="h-[10vw]">
                    <span class="bg-title absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                        or
                    </span>
                </a>

                <a id="false" class="h-fit relative inline-block">
                    <img src="{{ asset('assets/images/phonicsl1/letter_g/bg.png') }}" class="h-[10vw]">
                    <span class="bg-title absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                        he
                    </span>
                </a>

                <a id="false" class="h-fit relative inline-block">
                    <img src="{{ asset('assets/images/phonicsl1/letter_g/bg.png') }}" class="h-[10vw]">
                    <span class="bg-title absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                        on
                    </span>
                </a>

                <a id="true" class="h-fit relative inline-block">
                    <img src="{{ asset('assets/images/phonicsl1/letter_g/bg.png') }}" class="h-[10vw]">
                    <span class="bg-title absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                        looks
                    </span>
                </a>

            </div>
        </div>
        <p class="p-note">Tips: Click on the word that matches the one shown. This is the last of 4 sets of activities. Follow
up with the 'Balloon Fun' Activity Sheet in the Pupil's Activity Book.</p>
    </div>



    {{-- Try Again --}}
    <div id="tryAgain" class="fixed inset-0 z-[1000] hidden  items-center justify-center bg-[#0000002e]  backdrop-blur-sm">
        <div class="w-[60vw] relative h-[40vw] bg-contain bg-no-repeat bg-center flex flex-col justify-center items-center rounded-lg "
            style="background-image: url('{{ asset('assets/images/K2/exit.png') }}');">
            <p class="text-[3vw] !text-[#F8473A] stroke font-bold">Try Again?</p>
            <div class="mt-[1vw] ">
                <img src="{{ asset('assets/images/phonicsl1/global/gifs/tryagain.gif') }}" class="h-[20vw]"
                    alt="Animation" />

            </div>
            <a href="#" id="retry"
                class="text-[#F8473A] text-[2vw] font-bold stroke hover:scale-110 transition-transform absolute bottom-[6vw] right-[10vw]">Retry</a>
        </div>
    </div>

    {{-- Well Done --}}
    <div id="wellDone" class="fixed inset-0 z-[1000] hidden  items-center justify-center bg-[#0000002e]  backdrop-blur-sm">
        <div class="w-[60vw] relative h-[40vw] bg-contain bg-no-repeat bg-center flex flex-col justify-center items-center rounded-lg "
            style="background-image: url('{{ asset('assets/images/K2/exit.png') }}');">
            <p class="text-[3vw] !text-[#59967D] font-bold">Well Done!</p>
            <div class="mt-[1vw] ">
                <img src="{{ asset('assets/images/phonicsl1/global/gifs/welldone.gif') }}" class="h-[20vw]"
                    alt="Animation" />

            </div>
            <a href="#" id="close"
                class="text-[#59967D] text-[2vw] hover:scale-110 transition-transform absolute bottom-[6vw] right-[10vw]">Close</a>
        </div>
    </div>



    {{-- All Buttons --}}
    <div id="buttons" class="absolute flex flex-row gap-6 z-90">

        <!-- Home Button -->
        <button id="returnButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/return-btn.png') }}" />
        </button>

        <!-- return Button -->
        <button id="homeButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/home-btn.png') }}" />
        </button>

        <!-- Close Button -->
        <button id="closeButton">

            <img src="{{ asset('assets/images/phonicsl1/global/btns/cancel.png') }}" />
        </button>
    </div>

    {{-- Next and Done Buttons --}}
    <div class="down-btn-container">
        <button class="nextButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/next-btn.png') }}" />
        </button>
    </div>

    <div class="down-btn-container">
        <button class="doneButton hidden">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/done.png') }}" />
        </button>
    </div>
@endsection

@push('script')
    <script>
        // SLIDE NAVIGATION SYSTEM
          document.body.dataset.homeRoute = "{{ url('/phonics/l1') }}";
document.addEventListener("DOMContentLoaded", function() {

            // Get all elements
            const slides = document.querySelectorAll(".phonics-panel");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");

            // URLs for navigation
            const returnURL = "{{ url('/phonics/letter_g') }}?view=words";
            const doneURL = "{{ url('/phonics/letter_g') }}?view=words";

            // Track current position
            let currentSlide = 0;

            // HELPER FUNCTIONS
            function isLastSlide(slideIndex) {
                return slideIndex >= slides.length - 1;
            }

            // DISPLAY FUNCTIONS
            function showSlide(slideIndex) {
                const ajaxSection = document.getElementById('ajax-section');
                const currentSlideElement = slides[slideIndex];

                // Hide all slides, show only current one
                slides.forEach((slide, index) => {
                    if (index === slideIndex) {
                        slide.classList.remove("hidden");
                    } else {
                        slide.classList.add("hidden");
                    }
                });

                // Show "Done" button on last slide, otherwise show "Next"
                if (isLastSlide(slideIndex)) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }

                // Toggle ajax-section background ONLY based on no-bg class
                if (ajaxSection && currentSlideElement.classList.contains('no-bg')) {
                    ajaxSection.classList.add('no-bg');
                } else if (ajaxSection) {
                    ajaxSection.classList.remove('no-bg');
                }
            }

            // NAVIGATION FUNCTIONS
            function goNext() {
                if (currentSlide >= slides.length - 1) return;
                currentSlide++;
                showSlide(currentSlide);
            }

            function goBack() {
                if (currentSlide === 0) {
                    window.location.href = returnURL;
                    return;
                }
                currentSlide--;
                showSlide(currentSlide);
            }

            function handleDone() {
                window.location.href = doneURL;
            }

            // EVENT LISTENERS
            nextButtons.forEach(btn => {
                btn.addEventListener("click", goNext);
            });

            if (returnButton) {
                returnButton.addEventListener("click", goBack);
            }

            if (doneButton) {
                doneButton.addEventListener("click", handleDone);
            }

            // INITIALIZE
            showSlide(currentSlide);
        });


        // PANEL LOGIC (Try Again / Well Done)
        document.addEventListener('DOMContentLoaded', function() {
            // Get elements
            const tryAgainPanel = document.getElementById('tryAgain');
            const wellDonePanel = document.getElementById('wellDone');
            const retryBtn = document.getElementById('retry');
            const closeBtn = document.getElementById('close');

            // Get all letter buttons
            const falseLetters = document.querySelectorAll('[id="false"]');
            const trueLetters = document.querySelectorAll('[id="true"]');

            // Create audio elements
            const tryAgainSound = new Audio('{{ asset('assets/audio/phonics_audio/tryagain.mp3') }}');
            const wellDoneSound = new Audio('{{ asset('assets/audio/phonics_audio/welldone.mp3') }}');

            // Function to show panel and play sound automatically
            function showPanelWithSound(panel, audioElement) {
                panel.style.display = 'flex';
                audioElement.currentTime = 0;
                audioElement.play().catch(err => console.log('Audio play failed:', err));
            }

            // Handle FALSE letter clicks (show try again panel with sound)
            falseLetters.forEach(letter => {
                letter.addEventListener('click', function(e) {
                    e.preventDefault();
                    showPanelWithSound(tryAgainPanel, tryAgainSound);
                });
            });

            // Handle TRUE letter click (show well done panel with sound)
            trueLetters.forEach(letter => {
                letter.addEventListener('click', function(e) {
                    e.preventDefault();
                    showPanelWithSound(wellDonePanel, wellDoneSound);
                });
            });

            // Handle Retry button - close panel and stay on same slide
            retryBtn.addEventListener('click', function(e) {
                e.preventDefault();
                tryAgainPanel.style.display = 'none';
                tryAgainSound.pause();
                tryAgainSound.currentTime = 0;
            });

            // Handle Close button - close panel and stay on same slide
            closeBtn.addEventListener('click', function(e) {
                e.preventDefault();
                wellDonePanel.style.display = 'none';
                wellDoneSound.pause();
                wellDoneSound.currentTime = 0;
            });
        });
    </script>
@endpush
