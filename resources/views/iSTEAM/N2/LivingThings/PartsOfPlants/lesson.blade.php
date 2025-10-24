@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

 {{-- title --}}
    <h2 class="title !text-[3vw] top-title stroke absolute top-[5vh] z-[100]">Parts 0f a Plant</h2>


    {{-- Slide 1 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <h2 class="stroke title">Children, have your seeds grown?
            How did it grow?</h2>
    </div>


    {{-- Slide 2 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
       
                <img src="{{ asset('assets/images/N2/LivingThings/gl15.png') }}" />
        <h2 class="stroke title">The seed would have grown and gotten bigger in size.
            Its look would have changed as it grew.</h2>
        <p class="note">Note: The plants may look different depending on the type of seeds planted.</p>
    </div>

    {{-- Slide 3 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt22.png') }}" />
        <h2 class="stroke title">This is an Adzuki <span class="text-white">plant</span>.<br />It is a plant grown from a
            <span class="text-white">bean</span>.
        </h2>
    </div>


    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt22.png') }}" />
        <h2 class="stroke title">Let’s take a closer look at the <span class="text-white">plant</span> and<br />learn about
            the different parts of the <span class="text-white">plant</span>.</h2>
    </div>

    {{-- slide 5 --}}
    <div class="flex items-center flex-col slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt32p.png') }}" class="large-img3" />
        <h2 class="title stroke">What is this? What does it do?</h2>
        <p class="note">Note: Encourage children to describe what they see and guess what does the leaves do.</p>
    </div>


    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt32p.png') }}" />
        <h2 class="stroke title">This is a<span class="text-white"> leaf</span>. The <span class="text-white">leaf</span>
            makes food for the<span class="text-white"> plant</span>.</h2>
    </div>


    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt23.png') }}"  />
        <h2 class="stroke title">The<span class="text-white"> leaves</span> use water, nutrients from the soil,<br />air and
            sunlight to make food.</h2>
    </div>

    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt33p.png') }}" />
        <h2 class="stroke title">What is this? What does it do?</h2>
        <p class="note">Note: Encourage children to describe what they see and guess what the stem does.</p>
    </div>

    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt33p.png') }}" />
        <h2 class="stroke title">This is a stem.</h2>
    </div>


    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center justify-center gap-3">
                <img src="{{ asset('assets/images/N2/LivingThings/lt24.png') }}" class="large-img4" />
                <img src="{{ asset('assets/images/N2/LivingThings/lt31.png') }}" class="large-img4" />
        </div>
        <h2 class="stroke title">The<span class="text-white"> stem</span> helps the plant to grow tall. When the
            plant<br />is tall, its <span class="text-white">leaves</span> can get enough sunlight to make food.</h2>
    </div>


    {{-- slide 11 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt25.png') }}" class="large-img2" />
        <h2 class="stroke title">The<span class="text-white"> stem</span> also helps to <span class="text-white">carry
            </span>water to the<br /><span class="text-white">leaves</span> and <span class="text-white">flower</span>.</h2>
    </div>


    {{-- slide 12 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt34p.png') }}" />
        <h2 class="stroke title">What is this? What does it do?</h2>
        <p class="note">Note: Encourage children to describe what they see and guess what does roots do.</p>
    </div>



    {{-- slide 13 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt34p.png') }}" />
        <h2 class="stroke title">These are the roots of the plant.</h2>
    </div>

    {{-- slide 14 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt34p.png') }}" />
        <h2 class="stroke title">The <span class="text-white">roots</span> take in water and nutrients from the soil
            and<br />carry them to the <span class="text-white">stem</span> and <span class="text-white">leaves</span>.</h2>
    </div>

    {{-- slide 15 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt35p.png') }}" />
        <h2 class="stroke title">Children, do you know what these are?</h2>
    </div>

    {{-- slide 16 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center justify-center">
            <img src="{{ asset('assets/images/N2/LivingThings/lt26.png') }}" class="large-img3" />
            <img src="{{ asset('assets/images/N2/LivingThings/lt46.png') }}" class="large-img3" />
            <img src="{{ asset('assets/images/N2/LivingThings/lt47.png') }}" class="large-img3" />
            <img src="{{ asset('assets/images/N2/LivingThings/lt48.png') }}" class="large-img3" />
        </div>
        <h2 class="stroke title">These are plants with <span class="text-white">flowers</span>.<br />Plants will need time
            to grow before they have <span class="text-white">flowers</span>.</h2>
    </div>

    {{-- slide 17 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt49.png') }}" />
        <h2 class="stroke title">This is an adzuki plant with <span class="text-white">flowers</span>.<br />The <span
                class="text-white">flowers</span> may grow only after 60-70 days</h2>
    </div>


    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt50.png') }}" />
        <h2 class="stroke title">This is an adzuki plant with <span class="text-white">pods</span>.<br /><span
                class="text-white">Pods</span> are the <span class="text-white">fruits</span> from the adzuki plant.</h2>
    </div>


    {{-- slide 19 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt51.png') }}" />
        <h2 class="stroke title">When you peel the <span class="text-white">pods</span> open, you will find red beans in
            them.<br />The red beans are the <span class="text-white">seeds</span>.</h2>
    </div>


    {{-- slide 17 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title !text-white stroke">Individual Activity</h2>
        <div class="w-[40vw] h-[40vh] bg-cover bg-center flex flex-col items-center"
            style="background-image: url('{{ asset('assets/images/N2/LivingThings/lt54.png') }}');">
            <p>Record the changes you see in your flower (draw and paste photos).</p>
            <img src="{{ asset('assets/images/N2/LivingThings/lt52.png') }}" class="large-img3" />
        </div>
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>Can you name the parts of a plant? Match and paste the
                    names to the parts of the plant.</li>
            </ul>
        </div>
        <p class="note">Note: Provide labels for children to complete the learning journal.</p>
    </div>

    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt53.png') }}" />
        <h2 class="title stroke">How do you name each part of the plant?</h2>
        <p class="note">Note: Encourage children to point and name the different parts of the plant.</p>
    </div>


    {{-- slide 19 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt36p.png') }}" />
        <h2 class="title stroke">These are the parts of the plant.</h2>
    </div>


    {{-- slide 20 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title !text-white stroke">Learning Journal</h2>
        <div class="w-[40vw] h-[45vh] bg-cover bg-center flex flex-col items-center"
            style="background-image: url('{{ asset('assets/images/N2/LivingThings/lt54.png') }}');">
            <p>Record the changes you see in your flower (draw and paste photos).</p>
            <img src="{{ asset('assets/images/N2/LivingThings/lt52.png') }}" class="large-img3" />
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
                    window.location.href =
                    "{{ route('PartsOfPlantsSelection') }}";  
                } else if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('PartsOfPlantsSelection') }}";
                });
            }

            //   Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
