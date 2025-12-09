@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Programme A Robot 5</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/BasicCoding/rb14.png') }}" class="img-lg" />
        <h2 class="stroke title">Children, do you remember the story of Patchy Panda at the amusement park? What happens
            there?</h2>
    </div>

    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/BasicCoding/rb15.png') }}" class="img-lg" />
        <h2 class="stroke title">How did Patchy move from one place to another?
            Do you like the story?</h2>
    </div>

    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/BasicCoding/rb16.png') }}" class="!w-[35vw]" />
        <h2 class="title stroke text-center">How did Patchy move from one place to another?
            Do you like the story?</h2>
    </div>

    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/BasicCoding/rb17.png') }}" class="img-md" />
        <h2 class="title stroke text-center">How did Patchy plan his afternoon?
            Do you like the story?</h2>
    </div>

    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/BasicCoding/dl9.png') }}" class="img-lg" />
        <h2 class="title stroke text-center">Is it fun to play programming games based on a story?</h2>
    </div>

    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center !gap-y-[4vw]">
        <h2 class="title stroke text-center">Let's get creative!
        </h2>
        <h2 class="title stroke"> Create a simple story and then turn it into a programming
            game for your friends.</h2>
    </div>

    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[30vw]">
        <h2 class="title stroke !text-white">Create Your Own Story</h2>
        <h2 class="title stroke text-start">Mission: <br>
            Use your imagination and creativity to create a story!</h2>
        <p class="note">Note: Divide children into groups. Have them work together to complete the mission.</p>
    </div>

    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="title stroke lesson-ul list-decimal">
                <li>Choose an animal to be the character of your story.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/BasicCoding/rb4.png') }}" class="img-sm" />
    </div>

    {{-- Slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="title stroke lesson-ul list-decimal" start="2">
                <li>Choose 4 picture mats and use them to form your story.</li>
            </ol>
        </div>
        <div class="flex items-center justify-center gap-10">
            <img src="{{ asset('assets/images/N2/BasicCoding/rb5.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/N2/BasicCoding/rb13.png') }}" class="img-sm" />
        </div>
    </div>

    {{-- Slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[30vw]">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="title stroke lesson-ul list-decimal" start="3">
                <li>Create your story and share with the class.</li>
            </ol>
        </div>
        <p class="note">Note: Give children enough time to discuss and finalized their stories in groups.
            Have the different groups take turns to tell their stories to the class in the end.</p>
    </div>

    {{-- Slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[30vw]">
        <h2 class="!text-white title stroke">Turn Your Story Into A Game</h2>
        <h2 class="title stroke text-start">Mission: <br>
            Turn your story into a programming game by designing a
            simple maze. After that, let your friends try
            out the game.</h2>
        <p class="note">Note: Divide children into groups. Have them work together to complete the mission.</p>
    </div>

    {{-- Slide 12 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="title stroke lesson-ul list-decimal">
                <li>Design a simple maze using some lawn mats together with the five picture mats that you have chosen for
                    your story.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/BasicCoding/dl10.png') }}" class="img-lg" />
        <p class="note">Note: Advise children to keep it simple.</p>
    </div>

    {{-- Slide 13 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[30vw]">
        <h2 class="!text-white title stroke">Turn Your Story Into A Game</h2>
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="title stroke lesson-ul list-decimal" start="2">
                <li>Test out your programming game to make sure that it works.</li>
                <li>Tell your story to another group and have them programme the robot to move from one place to another
                    based on the storyline.</li>
            </ol>
        </div>
        <p class="note">Note: Advise children on how to modify their maze if needed.</p>
    </div>







    {{-- ===================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    <div id="buttons" class="absolute flex flex-row gap-6">
        <a id="returnButton">
            <img src="{{ asset('assets/images/pptimages/return.png') }}" />
        </a>

        <button id="homeButton">
            <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
        </button>

        <button id="closeButton">
            <img src="{{ asset('assets/images/pptimages/cancel.png') }}" />
        </button>
    </div>

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
                    window.location.href = "{{ route('Robot5Selection') }}";
                } else if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('BasicCoding') }}";
                });
            }

            showSlide(currentSlide);
        });
    </script>
@endpush
