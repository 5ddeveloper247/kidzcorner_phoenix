@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">How do Plants Grow?</h2>


    {{-- Slide 1 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt1.png') }}" class="img-md" />
        <h2 class="stroke title">Children, what do you see in the picture?</h2>
    </div>


    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">

        <img src="{{ asset('assets/images/N2/LivingThings/lt1.png') }}" class="img-md" />
        <h2 class="stroke title">This is grass.</h2>
    </div>


    {{-- Slide 3 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt2.png') }}" class="img-md" />
        <h2 class="stroke title">Children, what do you see in the picture.</h2>
    </div>


    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt2.png') }}" class="img-md" />
        <h2 class="stroke title">This is an orange tree.</h2>
    </div>

    {{-- slide 5 --}}
    <div class="flex items-center flex-col slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt3.png') }}" class="img-md" />
        <h2 class="title stroke">Children, what do you see in the picture?</h2>


    </div>


    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt3.png') }}" class="img-md" />
        <h2 class="title stroke">These are flowers.</h2>
    </div>


    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center gap-1">
            <img src="{{ asset('assets/images/N2/LivingThings/lt1.png') }}" class="img-xs" />
            <img src="{{ asset('assets/images/N2/LivingThings/lt2.png') }}" class="img-xs" />
            <img src="{{ asset('assets/images/N2/LivingThings/lt3.png') }}" class="img-xs" />
        </div>
        <h2 class="stroke title"><span class="!text-white">Grass</span>, <span class="!text-white">trees</span> and <span
                class="text-white">flowers</span> are <span class="!text-white">plants</span>.</h2>
    </div>


    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt4.png') }}" class="img-h-md" />
        <h2 class="stroke title">Children, do you know how <span class="!text-white">plants</span> grow?<br />Have you ever
            <span class="!text-white">grown</span> a <span class="!text-white">plant</span>? How does it change?
        </h2>
        <p class="note">Note: Encourage children to share their knowledge and experiences.</p>
    </div>

    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt5.png') }}" class="img-h-md" />
        <h2 class="stroke title">Most <span class="!text-white">plants</span> grow from <span
                class="text-white">seeds</span>.<br />For example: An orange <span class="!text-white">tree</span> grows
            from
            an orange <span class="!text-white">seed</span>.</h2>
    </div>


    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center slide hidden">

        <img src="{{ asset('assets/images/N2/LivingThings/gl13.png') }}" class="img-md" />
        <h2 class="stroke title">We can find <span class="!text-white">seeds</span> in fruits.</h2>
    </div>


    {{-- slide 11 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/gl14.png') }}" class="img-md" />
        <h2 class="stroke title">Some fruits have many <span class="!text-white">seeds</span>, some just have 1.</h2>
    </div>

    {{-- slide 12 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/gl16.png') }}" class="img-md" />
        <h2 class="stroke title"><span class="!text-white">Beans</span> and <span class="!text-white">nuts</span> are <span
                class="text-white">seeds</span> too.</h2>
    </div>



    {{-- slide 13 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt11.png') }}" class="img-md" />
        <h2 class="stroke title">This is a kind of red <span class="!text-white">bean</span>.</h2>
    </div>

    {{-- slide 14 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt12.png') }}" class="img-md" />
        <h2 class="stroke title">The <span class="!text-white">bean</span> grows into a <span
                class="text-white">sprout</span> after being planted in soil.</h2>
    </div>

    {{-- slide 15 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt13.png') }}" class="img-md" />
        <h2 class="stroke title">As the <span class="!text-white">sprout</span> grows, it becomes a young plant.<br />A
            young <span class="!text-white">plant</span> is called <span class="!text-white">seedling</span>.</h2>
    </div>

    {{-- slide 16 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt14.png') }}" class="img-md" />
        <h2 class="stroke title">The <span class="!text-white">seedling</span> grows into a <span
                class="text-white">plant</span>.</h2>
    </div>

    {{-- slide 17 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/gl15.png') }}" class="img-xl" />
        <h2 class="stroke title">The seed grows and gets bigger in size. Its look changes it grows.</h2>
        <p class="note">Note: The plants may look different depending on the type of seeds planted.</p>
    </div>


    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="stroke title">Today, we are going to learn how to<br /><span class="!text-white">grow</span> a <span
                class="text-white">plant</span> from a <span class="!text-white">seed</span>!</h2>
    </div>



    {{-- slide 19 --}}
    <div class="flex flex-col items-center justify-center slide hidden">

        <img src="{{ asset('assets/images/N2/LivingThings/lt15.png') }}" class="img-md" />

        <h2 class="title stroke text-start">Let’s find out: <br>
            How do you grow a plant from a seed?</h2>
        <p class="note">Note: Display all the things needed and have children gather around the work area.</p>

    </div>


    {{-- slide 17 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title !text-white stroke">Class Activity</h2>
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ol class="list-decimal lesson-ul" start="1">
                <li>Prepare an empty pot.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/lt16.png') }}" class="img-md" />
    </div>

    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center slide hidden">

        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ol class="list-decimal lesson-ul" start="2">
                <li>Fill one third of the pot with potting soil.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/lt17.png') }}" class="img-md" />
    </div>


    {{-- slide 19 --}}
    <div class="flex flex-col items-center justify-center slide hidden">

        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ol class="list-decimal lesson-ul" start="3">
                <li>Water the soil such that water seeps out from the
                    bottom of the pot. Ensure that the soil is damp.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/lt18.png') }}" class="img-md" />
    </div>



    {{-- slide 20 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ol class="list-decimal lesson-ul" start="4">
                <li>Take a seed which had been soaked overnight and
                    push it into the center of the pot into the soil.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/lt19.png') }}" class="img-xl" />
    </div>

    {{-- slide 21 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ol class="list-decimal lesson-ul" start="5">
                <li>Cover the seed with soil. Water it when the soil is dry and
                    wait for it to grow! Place it outdoors or near a window.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/lt20.png') }}" class="img-h-md" />
    </div>


    {{-- slide 22 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ol class="list-decimal lesson-ul" start="6">
                <li>Observe the seed each day and take a photo of the plant
                    when you spot changes.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/lt21.png') }}" class="img-lg" />
    </div>




    {{-- ==================== --}}
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
                    window.location.href = "{{ route('PlantsGrowthSelection') }}";
                } else if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('LivingThings') }}";
                });
            }

            //   Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
