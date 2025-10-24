@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="title !text-[3vw] top-title stroke absolute top-[5vh] z-[100]">Directional Signs</h2>

    {{-- Slide 1 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs1.png') }}" alt="">
        <h2 class="stroke title">Children, do you know what this is?
            Have you seen this before?</h2>
        <p class="note">Note: Have children boldly share their views.</p>
    </div>


    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-10 ">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs2.png') }}"  />
        <h2 class="stroke title">What about this?</h2>
        <p class="note">Note: Have children boldly share their views.</p>
    </div>


    {{-- Slide 3 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs3.png') }}"  />
        <h2 class="stroke title">What about this?</h2>
        <p class="note">Note: Have children boldly share their views.</p>
    </div>


    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs1a.png') }}" class="large-img6" />
        <h2 class="stroke title">All these are directional signs. What do they have in common.</h2>
        <p class="note">Note: Guide children to spot the arrows in each directional signs.</p>
    </div>

    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs1a.png') }}" class="large-img6" />
        <h2 class="stroke title"><span class="text-white">Directional signs</span> have <span
                class="text-white">arrows</span> that point in different <span class="text-white">directions</span>.</h2>
        <p class="note">Note: Guide children to spot the arrows in each arrow; use an index finger to point
            like each arrow to show different ways.</p>
    </div>

    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs4.png') }}" />
        <h2 class="stroke title">This signboard has an <span class="text-white">arrow </span>pointing <span
                class="text-white">left</span> to the washrooms. So if you need the washroom, you should turn<span
                class="text-white"> left</span>.</h2>
    </div>


    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs5.png') }}" />
        <h2 class="stroke title">It also has an <span class="text-white">arrow </span>pointing <span
                class="text-white">right</span> to the escalators.<br />So if you need the escalators., you should turn<span
                class="text-white">right</span>.</h2>
    </div>


    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs6.png') }}" />
        <h2 class="stroke title">It also has an <span class="text-white">arrow</span> pointing <span
                class="text-white">right</span> to the escalators.<br />So if you need escalators, you should turn <span
                class="text-white">right</span>.</h2>
    </div>


    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs7.png') }}" />
        <h2 class="stroke title">These <span class="text-white">arrows</span> on a train platform are pointing <span
                class="text-white">backward</span>.<br />For your safety, you should move <span
                class="text-white">backward</span>.</h2>
    </div>


    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs1a.png') }}" class="large-img6" />
        <h2 class="stroke title"><span class="text-white">Directional signs</span> use
            <span class="text-white">arrows</span> to show us which way to go.<br />They give us
            <span class="text-white">instructions</span> on where to go.
        </h2>
    </div>


    {{-- slide 11 --}}
    <div class="flex flex-col items-center justify-center gap-x-30 slide hidden">
        <h2 class="title !text-white stroke">Hands-on Time</h2>
        <h2 class="title stroke text-start">Mission: <br>
            Let’s find directional signs around us. Take a walk outside
            with your teachers and friends to find them. See how many you can spot outside!</h2>
        <p class="note">Note: Bring children out to find directional signs in the environment.</p>
    </div>




    {{-- =================================================================== --}}
    {{-- Complete button --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    {{-- Buttons --}}
    <div id="buttons" class="absolute  flex flex-row gap-6 ">

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

    {{-- next Button --}}
    <div class="down-btn-container">
        <button class="nextButton ">
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
            const doneButton = document.querySelector(".doneButton"); //   DONE button

            let currentSlide = 0;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                //   Agar last slide hai → NEXT button hide, DONE show
                if (index === slides.length - 1) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            //   NEXT buttons listener
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                });
            });

            //   Return button - redirect if on first slide
            returnButton.addEventListener("click", () => {
                if (currentSlide === 0) {
                    // Redirect to route when on first slide
                    window.location.href =
                    "{{ route('DirectionsSelection') }}";  
                } else if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('DirectionsSelection') }}";
                });
            }

            //   Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
