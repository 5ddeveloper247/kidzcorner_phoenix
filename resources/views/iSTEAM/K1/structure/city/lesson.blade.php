@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Our Amazing City</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-between h-[20vw] self-end">
        <h2 class="title stroke">Children, how many types of structures have you learnt to build in the past few lessons?
        </h2>
        <p class="note">Note: Have children recall and name the structures that they built in the past few lessons.</p>
    </div>

    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col justify-between h-[20vw] self-end items-center">
        <h2 class="title stroke text-center">How confident are you in building different structures using the straws and pipe
            cleaners? <br>What are some of the points you have learned in building structures?</h2>
        <p class="note">Note: Encourage children to share their views and experiences.</p>
    </div>

    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[20vw] self-end">
        <h2 class="title stroke">We are going to design and build an amazing city. What do you think an amazing city has?
            <br>Let's look at some cities around the world!</h2>
        <p class="note">Note: Have children think and name the different types of structures in a city.</p>
    </div>

    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/c1.png') }}" class="img-lg" />
        <h2 class="title stroke">What <span class="!text-white">structures</span> do you see in this <span
                class="text-white">city</span>?</h2>
        <p class="note">Note: Guide children to talk about the different structures in the photo (London).</p>
    </div>

    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/c2.png') }}" class="img-lg" />
        <h2 class="title stroke">What <span class="!text-white">structures</span> do you see in this <span
                class="text-white">city</span>?</h2>
        <p class="note">Note: Guide children to talk about the different structures in the photo (Portugal).</p>
    </div>

    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/c3.png') }}" class="img-lg" />
        <h2 class="title stroke">What <span class="!text-white">structures</span> do you see in this <span
                class="text-white">city</span>?</h2>
        <p class="note">Note: Guide children to talk about the different structures in the photo (Vienna).</p>
    </div>

    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/c4.png') }}" class="img-lg" />
        <h2 class="title stroke">What <span class="!text-white">structures</span> do you see in this <span
                class="text-white">city</span>?</h2>
        <p class="note">Note: Guide children to talk about the different structures in the photo (Shanghai).</p>
    </div>

    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/c5.png') }}" class="img-lg" />
        <h2 class="title stroke">What <span class="!text-white">structures</span> do you see in this <span
                class="text-white">city</span>?</h2>
        <p class="note">Note: Guide children to talk about the different structures in the photo (Singapore).</p>
    </div>

    {{-- Slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/c6.png') }}" class="img-lg" />
        <h2 class="title stroke">A city has different types of structures that make it interesting and unique.</h2>
    </div>

    {{-- Slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[20vw]">
        <h2 class="text-center justify-start !text-white stroke">Create an Amazing City</h2>
        <h2 class="text-start title stroke">Mission: <br>Let's design and build an amazing city using the straws and pipe
            cleaners.</h2>
    </div>

    {{-- Slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="1">
                <li>What structures do you want to have in your amazing city? List them in the learning journal.</li>
                <li>Decide the structures that you are going to build. Circle them on your list.</li>
            </ol>
        </div>
        <p class="note text-center">Note: Guide children to discuss as a class in deciding what structures to build.</p>
    </div>

    {{-- Slide 12 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="3">
                <li>Design and build the different structures. Draw your designs in the learning journals.</li>
            </ol>
        </div>
        <p class="note text-center">Note: Divide children into groups and have them work in groups to design and build the
            assigned structures.</p>
    </div>

    {{-- Slide 13 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="4">
                <li>Showcase the structures created.</li>
            </ol>
        </div>
        <p class="note text-center">Note: Have each group showcase their works and share their design ideas with the class.
            Allow them to make improvement to their works if they want to.</p>
    </div>

    {{-- Slide 14 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="5">
                <li>How do you put those structures together to form a city? Draw your design in the learning journal.</li>
            </ol>
        </div>
        <p class="note text-center">Note: Guide children to discuss as a class in deciding how to put together all the
            structures created to form a city.</p>
    </div>

    {{-- Slide 15 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="6">
                <li>Give your city a name and showcase your city.</li>
            </ol>
        </div>
        <p class="note text-center">Note: Have children name and label their city. Finally, have them showcase and share
            design ideas of their city with all the guests invited to the showcase.</p>
    </div>

    {{-- Slide 16 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center flex flex-col justify-start text-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>What do you want to have in your amazing city? List them. <br>Circle only those that you are going to build.
            </p>
        </div>
    </div>

    {{-- Slide 17 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center flex flex-col justify-start text-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>What are you going to build? <br>How do you design it? Draw it.</p>
        </div>
    </div>

    {{-- Slide 18 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center flex flex-col justify-between items-start"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>How do you design your amazing city? Draw it.</p>
            <p>What is the name of your city?___________________________________</p>
        </div>
    </div>

    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    <div id="buttons" class="absolute flex flex-row gap-6">
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
                    window.location.href = "{{ route('citySelection') }}";
                } else {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('K1structure') }}";
                });
            }

            showSlide(currentSlide);
        });
    </script>
@endpush
