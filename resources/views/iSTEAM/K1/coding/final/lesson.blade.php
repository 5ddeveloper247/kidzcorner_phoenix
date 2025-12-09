@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Final Project</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/coding/final/f1.png') }}" class="img-lg" />
        <h2 class="title stroke">Children, do you remember these coding activities? <br>What did you have to do?</h2>
    </div>

    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/K1/coding/final/f2.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/K1/coding/challenge4/ch9.png') }}" class="img-sm" />
        </div>
        <h2 class="title stroke">How about these coding activities? <br>What did you have to do?</h2>
    </div>

    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="text-center title stroke">Let's put on your thinking caps to create a coding game!</h2>
    </div>

    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <h2 class="text-center justify-start !text-white stroke">Create your Own Coding Game</h2>
        <h2 class="text-start title stroke">What to do: <br>After having gone through the coding challenges from lessons 6
            to 10, now it's time for you to get creative and create your own coding game using the coding mat!</h2>
        <p class="note">Note: Divide children into groups and have them work in groups to complete the final project.</p>
    </div>

    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal stroke" start="1">
                <li>How should this game be played? How do you determine the winner? Decide the rules for your coding game
                    and record them in the learning journal.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K1/coding/final/f3.png') }}" class="img-md" />
        <p class="note text-center">Note: Have each group of children plan their coding game using the learning journal.</p>
    </div>

    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal stroke" start="2">
                <li>How do you design your coding mat? What kind of graphic cards and obstacles do you need? Plot your plan
                    in the learning journal.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K1/coding/final/f4.png') }}" class="img-md" />
        <p class="note text-center">Note: Have each group of children plan their coding game using the learning journal.</p>
    </div>

    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal stroke" start="3">
                <li>Give your coding game a name.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K1/coding/final/f5.png') }}" class="img-lg" />
        <p class="note text-center">Note: Have each group of children plan their coding game using the learning journal.</p>
    </div>

    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal stroke" start="4">
                <li>Set up coding mat according to your game design and test it out.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K1/coding/final/f6.png') }}" class="!h-[20vw]" />
        <p class="note text-center">Note: Have each group of children set up the mat. Advise them to modify their design if
            needed.</p>
    </div>

    {{-- Slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal stroke" start="5">
                <li>Present your coding game to your friends and let them try it out.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K1/coding/final/f6.png') }}" class="!h-[20vw]" />
        <p class="note text-center">Note: Have children try on each other's game.</p>
    </div>

    {{-- Slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-start gap-y-4">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center flex flex-col gap-[1vw] justify-center items-center p-[2vw]"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>Create your own coding game.</p>
            <img src="{{ asset('assets/images/K1/coding/final/f8.png') }}" class="w-full" />
        </div>
    </div>

    {{-- Slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center flex flex-col gap-[1vw] justify-center items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p class="text-center">Design the coding mat for your coding game.</p>
            <img src="{{ asset('assets/images/K1/coding/final/f7.png') }}" class="!w-[17vw]" />
        </div>
    </div>

    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    <div id="buttons" class="absolute flex flex-row">
        <!-- Return Button -->
        <a id="returnButton">
            <img src="{{ asset('assets/images/pptimages/return.png') }}" />
        </a>
        <!-- Home Button -->
        <button id="homeButton">
            <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
        </button>
        <!-- Close Button -->
        <button id="closeButton">
            <img src="{{ asset('assets/images/pptimages/cancel.png') }}" />
        </button>
    </div>

    {{-- Next Button --}}
    <div class="down-btn-container">
        <button class="nextButton">
            <img src="{{ asset('assets/images/pptimages/next-btn.png') }}" />
        </button>
    </div>
@endsection

@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const slides = document.querySelectorAll(".slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");

            let currentSlide = 0;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                if (index === slides.length - 1) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                });
            });

            returnButton.addEventListener("click", () => {
                if (currentSlide === 0) {
                    window.location.href = "{{ route('finalSelection') }}";
                } else {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('coding') }}";
                });
            }

            showSlide(currentSlide);
        });
    </script>
@endpush
