@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Unique Buildings</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/u1.png') }}" class="img-md" />
        <h2 class="title stroke">Children, buildings are common structures around us. Do you still remember who designs
            buildings?</h2>
    </div>

    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/u2.png') }}" class="img-xl" />
        <h2 class="title stroke">Children, buildings are common structures around us. Do you still remember who designs
            buildings?</h2>
        <p class="note">Note: Have children recall what do architects and engineers do.</p>
    </div>

    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/u3.png') }}" class="img-md" />
        <h2 class="title stroke">Architects draw a plan to design the look and space of building.</h2>
    </div>

    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/u4.png') }}" class="img-md" />
        <h2 class="title stroke">Engineers look through the plan to come out with ideas to bring the design to life.</h2>
    </div>

    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/u3.png') }}" class="img-md" />
        <h2 class="title stroke">Engineers look through the plan to come out with ideas to bring the design to life.</h2>
    </div>

    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/st2.png') }}" class="img-xl" />
        <h2 class="title stroke">Some architects design interesting looking buildings to make the buildings unique and
            standout.</h2>
    </div>

    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="flex items-center gap-[1.3vw]">
            <p class="note w-[6.2vw]">It is called the Basket Building.</p>
            <img src="{{ asset('assets/images/K1/str/u5.png') }}" class="img-md" />
        </div>
        <h2 class="title stroke">The building in America is unique because it is designed based on the basket that the
            company produced.</h2>
    </div>

    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="flex items-center gap-[1.3vw]">
            <p class="note w-[6.2vw]">It is called the Burj Al Arab!</p>
            <img src="{{ asset('assets/images/K1/str/u6.png') }}" class="img-md" />
        </div>
        <h2 class="title stroke">The building in Dubai is unique because it is designed to look like the sail of a ship.
        </h2>
    </div>

    {{-- Slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="flex items-center gap-[1.3vw]">
            <p class="note w-[6.2vw]">It is called the Dancing House!</p>
            <img src="{{ asset('assets/images/K1/str/u7.png') }}" class="img-md" />
        </div>
        <h2 class="title stroke">The building in Prague is unique because it is designed to look like a pair of dancers.
        </h2>
    </div>

    {{-- Slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="flex items-center gap-[1.3vw]">
            <p class="note w-[6.2vw]">It is called the Dancing House!</p>
            <img src="{{ asset('assets/images/K1/str/u7.png') }}" class="img-md" />
        </div>
        <h2 class="title stroke">The building in Prague is unique because it is designed to look like a pair of dancers.
        </h2>
    </div>

    {{-- Slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="flex items-center gap-[1.3vw]">
            <p class="note w-[6.2vw]">It is called the Elephant Building!</p>
            <img src="{{ asset('assets/images/K1/str/u8.png') }}" class="img-md" />
        </div>
        <h2 class="title stroke">The building in Bangkok is unique because it is designed to look like an elephant.</h2>
    </div>

    {{-- Slide 12 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="flex items-center gap-[1.3vw]">
            <p class="note w-[6.2vw] text-start self-start">It is called the capital Gate, known as the Leaning Tower of Abu
                Dhabi!</p>
            <img src="{{ asset('assets/images/K1/str/u9.png') }}" class="img-h-md" />
            <p class="note w-[6.2vw] text-start self-end">It leans four times more than the Leaning Tower of Pisa!</p>
        </div>
        <h2 class="title stroke">This building in Abu Dhabi is unique because it is designed to lean west.</h2>
    </div>

    {{-- Slide 13 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="flex items-center gap-[1.3vw]">
            <p class="note w-[6.2vw]">It is called the Hive!</p>
            <img src="{{ asset('assets/images/K1/str/u10.png') }}" class="img-md" />
        </div>
        <h2 class="title stroke">The building in Singapore is unique because it looks like a cluster of elongated bee hives.
        </h2>
    </div>

    {{-- Slide 14 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <h2 class="text-center justify-start text-[45px] !text-white stroke">Small Group Activity</h2>
        <h2 class="text-start title stroke">Mission: <br>Let's design and build a unique building using the straws and pipe
            cleaners.</h2>
        <p class="note">Note: Give each group a set of materials to work on.</p>
    </div>

    {{-- Slide 15 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke">
                <li>Draw your design of a unique building in the learning journal.</li>
                <li>Build the structure of your building using the straws and pipe cleaners.</li>
                <li>Choose suitable materials to build the look of your building.</li>
                <li>Name and label your building.</li>
                <li>Showcase your work.</li>
            </ol>
        </div>
        <p class="note text-center">Note: Have children discuss in groups and draw out their design of a unique building in
            the learning journal. After that, have them work together in groups to construct the building according to their
            design ideas. During the showcase, have them share their design ideas to the class.</p>
    </div>

    {{-- Slide 16 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center flex flex-col justify-between text-start"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>Design a unique building. Draw it.</p>
            <p>What is the name of your building?___________________________________________________</p>
        </div>
    </div>


    {{-- ================ --}}
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
                    window.location.href = "{{ route('uniqueSelection') }}";
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
