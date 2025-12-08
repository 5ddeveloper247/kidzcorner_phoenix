@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">How Does Plants drink Water?</h2>



    {{-- Slide 1 --}}
    <div class="flex flex-col items-center justify-between h-[20vw] self-end slide hidden">
        <h2 class="stroke title">Children, do you remember what the <span class="!text-white">stem</span> does?</h2>
        <p class="note">Note: Encourage children to share that they had learned.</p>
    </div>


    {{-- Slide 2 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center gap-[1.5vw]">

            <img src="{{ asset('assets/images/N2/LivingThings/lt24.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/N2/LivingThings/lt31.png') }}" class="img-sm" />

        </div>
        <h2 class="stroke title">That’s right! The <span class="!text-white">stem</span> helps the <span
                class="text-white">plant</span> to grow tall. When the <span class="!text-white">plant</span> is tall,
            its <span class="!text-white">leaves</span> can get enough sunlight to make food.</h2>
    </div>


    {{-- Slide 3 --}}
    <div class="flex flex-col items-center justify-center slide hidden">

        <img src="{{ asset('assets/images/N2/LivingThings/lt25.png') }}" class="img-h-md rounded-[2vw]" />

        <h2 class="stroke title">The<span class="!text-white"> stem</span> also helps to <span class="!text-white">carry
            </span>water to the<br /><span class="!text-white">leaves</span> and <span class="!text-white">flower</span>.</h2>

    </div>


    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-between h-[20vw] self-end slide hidden">
        <h2 class="stroke title">Let’s observe how <span class="!text-white">flowers</span> drink water.</h2>
        <p class="note">Note: Divide children into small groups for the activity.</p>
    </div>

    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ol class="list-decimal lesson-ul" start="1">
                <li>Take a stalk of flower from a bouquet.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/lt34.png') }}" class="!w-[25vw]" />
        <p class="note">Note: Assist the children in cutting the flowers.</p>
    </div>


    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ol class="list-decimal lesson-ul" start="2">
                <li>Take a stalk of flower from a bouquet.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/lt35.png') }}" class="img-lg" />
    </div>


    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ol class="list-decimal lesson-ul" start="3">
                <li>Choose a colour. In your cup, add 10 drops of the colouring into half a cup of water.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/lt36.png') }}" class="img-lg" />
    </div>



    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ol class="list-decimal lesson-ul" start="4">
                <li>Put one stalk of flower into your cup.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/lt37.png') }}" class="img-lg" />
    </div>



    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ol class="list-decimal lesson-ul" start="5">
                <li>Observe for any changes and record your observation
                    in the learning journal.</li>
            </ol>
        </div>
        <div class="w-[55vw] h-[25vw] drawable2 bg-cover bg-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>Record the changes you see in your flower (draw and paste photos).</p>
        </div>
    </div>


    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt38.png') }}" class="img-xl" />
        <h2 class="stroke title">As the <span class="!text-white">stem </span>carried coloured water to the <span
                class="text-white">leaves</span> and <span class="!text-white">flowers</span>, the white flower <span
                class="text-white">petals</span> now have same <br />colours on them.</h2>
    </div>



    {{-- slide 11 --}}
    <div class="flex flex-col  slide hidden">
        <h2 class="title !text-white stroke">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>Record the changes you see in your flower (draw and paste photos).</p>
        </div>
    </div>


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
                    window.location.href ="{{ route('DrinkingSelection') }}";  
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
