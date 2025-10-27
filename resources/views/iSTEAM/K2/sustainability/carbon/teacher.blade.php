@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li class="text-[1.3vw]">Understand the meaning of carbon footprint</li>
                <li class="text-[1.3vw]">Learn how to protect Earth by reducing our carbon footprint</li>
                <li class="text-[1.3vw]">Learn about the future of food</li>
                <li class="text-[1.3vw]">Develop awareness of environmental issues/li>
                <li class="text-[1.3vw]">Develop curiosity and understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex flex-col  items-start justify-between">
            <h2 class="t-title font-bold">Keywords:</h2>
            <div class="flex items-start gap-[4vw]">
                <ul class="list-disc ">
                    <li class="text-[1.3vw]">Earth</li>
                    <li class="text-[1.3vw]">Global warming</li>
                    <li class="text-[1.3vw]">Greenhouse-gases</li>
                    <li class="text-[1.3vw]">Carbon dioxide</li>
                    <li class="text-[1.3vw]">Carbon Footprint</li>
                </ul>

                <ul class="list-disc ">
                    <li class="text-[1.3vw]">Sustainable Future</li>
                    <li class="text-[1.3vw]">Population Growth</li>
                    <li class="text-[1.3vw]">Future Food</li>
                    <li class="text-[1.3vw]">Plant-Based Meat</li>
                    <li class="text-[1.3vw]">Lab-Grown Meat/Cultured Meat</li>
                </ul>

            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li class="text-[1.3vw]">
                    If you have no idea what carbon footprint is, go through this video
                    <span class="title stroke !text-[1.4vw]">(https://www.youtube.com/watch?v=8q7_aV8eLUE )</span>.
                </li>
                <li class="text-[1.3vw]">Go through the online carbon footprint calculator
                    <span class="title stroke !text-[1.4vw]"> (https://mycarbonfootprint.spgroup.com.sg/ or your desired website)</span>
                    to
                    know what information is needed for the demo in class.
                </li>
                <li class="text-[1.3vw]">
                    For class activity 1, you need to prepare and send parents a notice that
                    includes the link as mentioned above to get them assist their children to
                    calculate their carbon footprint at home; record the result and share in the
                    class.
                </li>
                <li class="text-[1.3vw]">Papers and drawing tools (for plotting graph)</li>
                <li class="text-[1.3vw]">
                    Go through the video about Singapore's plan in building future farms
                    <span class="title stroke !text-[1.4vw]"> (https://www.youtube.com/watch?v=2ueVw83Plec ) </span> know how you can
                    explain it to children in simple terms.
                </li>
                <li class="text-[1.3vw]">
                    Go through the vegan ground beef recipe and video
                    <span class="title stroke !text-[1.4vw]"> (https://passtheplants.com/vegan-ground-beef/) </span> help you visually
                    understand the steps of making plant-based meat in Class Activity 2.
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 3 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-center gap-y-10 text-start">
        <div>
            <h2 class="font-bold t-title">Preparations:</h2>
            <ul class="list-disc">
                <li class="text-[1.3vw]">For class activity 2, you need cauliflowers, eggplants, carrots, onion, garlic, basil,
                    crushed pumpkin seeds, cinnamon powder and cumin (refer to the vegan ground beef recipe
                    to decide the quantity needed for each ingredient).</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/sustain/carbon/c21.png') }}" />
        <ul class="list-disc">
            <li class="text-[1.3vw]">Crushed the pumpkin seeds and clean the ingredients beforehand.</li>
        </ul>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- ========================================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    <div id="buttons" class="absolute  flex flex-row gap-6 z-90">
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

            //   Return button - redirect if on first slide, otherwise go back
            returnButton.addEventListener("click", () => {
                if (currentSlide === 0) {
                    //   First slide pe hai →  
                    window.location.href = "{{ route('k2sustainability') }}";
                } else {
                    //   Previous slide pe jao
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('k2sustainability') }}";
                });
            }
            showSlide(currentSlide);
        });
    </script>
@endpush
