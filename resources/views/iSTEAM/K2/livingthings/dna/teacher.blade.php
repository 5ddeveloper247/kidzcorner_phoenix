@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">What is DNA?</h2>
    {{-- sldie 1  --}}
    <div class="t-slide flex  !text-white flex-col justify-around  text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Know that DNA is the instruction manual of all living things</li>
                <li>Know that living things are made up of cells and DNA is stored in the cells</li>
                <li>Learn how to extract DNA from one's mouth</li>
                <li>Know that a strand of DNA is a long string</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex flex-col  items-start justify-between">
            <h2 class="t-title ">Keywords:</h2>
            <div>
                <ul class="list-disc ">
                    <li>Living Thing</li>
                    <li>DNA</li>
                    <li>Instruction Manual</li>
                    <li>Cell</li>
                    <li>String</li>
                </ul>
            </div>
        </div>
    </div>



    {{-- slide 2 --}}
    <div class="t-slide flex  !text-white flex-col justify-center  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>1 bottle of distilled water (normally sold in 500ml bottles; will use 100ml)</li>
                <li>Some salt</li>
                <li>3 clear plastic cups or glasses</li>
                <li>1 bottle of clear liquid dish soap</li>
                <li>
                    1 bottle of rubbing alcohol (for better results, try to find 90% isopropyl alcohol; use 30ml ice-cold
                    alcohol —
                    put the alcohol in the freezer one day before the activity) </li>
                <li>1 bottle of food colouring (preferably blue or green)</li>
                <li>1 eyedropper</li>
                <li>1 teaspoon and 1 tablespoon</li>
                <li>1 measuring cup (at least 100ml)</li>
            </ul>
        </div>
    </div>

    {{-- sldie 3 --}}
    <div class="t-slide flex  !text-white flex-col justify-center  text-start">
        <div>
            <h2 class=" t-title">How to extract DNA from one's mouth and things to consider:</h2>
            <ul class="list-decimal">
                <li>Mix together 100ml distilled water and half a teaspoon of salt in a cup . [Guide
                    children to measure and
                    prepare the salt water with a measuring cup and a teaspoon; have them stir until salt is dissolved .]
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/d12.png') }}" class="img-lg" />
    </div>


    {{-- slide 4 --}}
    <div class="t-slide flex  !text-white flex-col justify-center  text-start">
        <div>
            <h2 class=" t-title">How to extract DNA from one's mouth and things to consider:</h2>
            <ul>
                <li>2. Transfer 4 tablespoons of the salt water into another cup . [Invite a child to
                    do the step; can be 4
                    tablespoons or 30ml . As the final result will be displayed at the learning corner, you may consider
                    using a clear plastic container with lid instead.]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/d13.png') }}" class="!w-[35vw]" />
    </div>


    {{-- slide 5 --}}
    <div class="t-slide flex  !text-white flex-col justify-center  text-start">
        <div>
            <h2 class=" t-title">How to extract DNA from one's mouth and things to consider:</h2>
            <ul>
                <li>3. Gargle the salt water for one minute. Try hard and don't swallow it! [Teacher to
                    do the step; for
                    better result, clean your mouth beforehand to remove any food residue.]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/d14.png') }}" class="!w-[35vw]" />
    </div>


    {{-- sldie 6 --}}
    <div class="t-slide flex  !text-white flex-col justify-center  text-start">
        <div>
            <h2 class=" t-title">How to extract DNA from one's mouth and things to consider:</h2>
            <ul>
                <li>4. Spit the water back into the cup . [Make sure you gargle the salt water for the
                    full 1 minute, so
                    that more cheek cells will be collected .]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/d15.png') }}" class="!w-[35vw]" />
    </div>


    {{-- sldie 7 --}}
    <div class="t-slide flex  !text-white flex-col justify-center  text-start">
        <div>
            <h2 class=" t-title">How to extract DNA from one's mouth and things to consider:</h2>
            <ul>
                <li>5. Add one drop of clear liquid dish soap to the cup. Stir gently to avoid making
                    bubbles. [Preferably
                    teacher to do the step .]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/d16.png') }}" class="img-lg" />
    </div>

    {{-- sldie 8 --}}
    <div class="t-slide flex  !text-white flex-col justify-center  text-start">
        <div>
            <h2 class=" t-title">How to extract DNA from one's mouth and things to consider:</h2>
            <ul>
                <li>6. Mix together 30ml cold rubbing alcohol and 3 drops food colouring in another cup
                    [Guide children to
                    measure and prepare the alcohol mixture with a measuring cup, an eyedropper and a tablespoon .]</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/K2/livingthings/dna/d17.png') }}" class="img-lg" />
    </div>


    {{-- sldie 9 --}}
    <div class="t-slide flex  !text-white flex-col justify-center  text-start">
        <div>
            <h2 class=" t-title">How to extract DNA from one's mouth and things to consider:</h2>
            <ul>
                <li>7. Gently pour the alcohol mixture from the side into the cup with gargled water.
                    [Teacher to do the
                    step; do not mix or stir .]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/d18.png') }}" class="img-md" />
    </div>


    {{-- sldie 10 --}}
    <div class="t-slide flex  !text-white flex-col justify-center  text-start">
        <div>
            <h2 class=" t-title">How to extract DNA from one's mouth and things to consider:</h2>
            <ul>
                <li>8. Observe what happens in the cup . [Advise children to observe from the top view
                    .Take a photo of the
                    result for use in the next lesson.]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/d19.png') }}" class="img-md" />
    </div>


    {{-- slide 11 --}}
    <div class=" t-slide text-start flex items-center !text-white !w-[53vw]">
        <div>
            <h2 class="t-title ">Notes:</h2>
            <ul class="list-disc space-y-3">
                <li>
                    <span class="relative">
                        If you see <span class="opacity-0">---</span>next to a picture, click on the picture to watch the
                        video.
                        <img class="t-video-btn absolute top-[-1vw] left-[7.6vw]"
                            src="{{ asset('assets/images/pptimages/video.png') }}" />
                    </span>
                </li>

                <li>
                    Always ask questions to encourage children to think and share their ideas first before giving out
                    any information.
                </li>

                <li>Emphasise and use the keywords during hands-on sessions.</li>

                <li>
                    Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                </li>

                <li>
                    <span class="relative">
                        Click on this shortcut icon <span class="opacity-0">---</span> if you need to go to some parts of
                        the lesson quickly.
                        <img src="{{ asset('assets/images/pptimages/home-btn.png') }}"
                            class="t-home-btn absolute top-0 left-[19vw]" />
                    </span>
                </li>

            </ul>
        </div>

    </div>


    {{-- slide 12 --}}
    <div class="text-white flex flex-col justify-center  text-start t-slide hidden">
        <h2 class="text-center title stroke">Learning Centre Idea</h2>
        <div>
            <h2 class="!text-white text-[2vw] stroke">Our DNA</h2>
            <h2 class="t-title">What and how to set up:</h2>
            <ul>
                <li>Put the final result of the activity (the gargled water with alcohol
                    mixture) here as a display for children. Use cling wrap to tightly
                    seal the cup and fix the position of the cup. As long as you don't
                    shake the cup, the alcohol in the cup can keep the DNA last for a
                    period of time. Put up a label (DNA from cheek cells) next to the
                    cup.</li>
            </ul>
        </div>
    </div>


    {{-- slide 13 --}}
    <div class="text-white flex flex-col justify-center  text-start t-slide hidden">
        <h2 class="text-center title stroke">Learning Centre Idea</h2>
        <div>
            <div class="flex ">
                <h2 class="!text-white text-[2vw] stroke">DNA In A Cell</h2>
                <img src="{{ asset('assets/images/K2/livingthings/dna/h24.png') }}" class="!w-[5vw]" />

            </div>
            <h2 class="t-title">What and how to set up:</h2>
            <ul>
                <li>Place a 2m long compact string coil here (to make it more real, put
                    it in a cell).</li>
            </ul>
        </div>

        <div>
            <h2 class="t-title">What to do:</h2>
            <ul class="list-decimal">
                <li>Unravel the DNA in a cell to find out how long is it.</li>
                <li>Share with your teacher: What does DNA look like? How long is
                    DNA in a cell?</li>
            </ul>
        </div>
    </div>


    {{-- slide 14 --}}
    <div class="text-white flex flex-col justify-center  text-start t-slide hidden">
        <h2 class="text-center title stroke">Learning Centre Idea</h2>
        <div>
            <h2 class="!text-white text-[2vw] stroke">Fun Facts</h2>
            <h2 class="t-title">What and how to set up:</h2>
            <ul>
                <li>
                    Use your creativity to design graphic fact sheet for every fun fact
                    below. Guide children to understand the facts.
                    <ul class="list-disc">
                        <li>If every cell in your hand was the size of a grain of sand, your hand
                            would be the size of a school bus!</li>
                        <li>If you stretched the DNA in one cell all the way out, it would be
                            about 2 metres long.</li>
                        <li>Your DNA is 98% identical to the DNA of chimpanzees. What's
                            amazing is that the 2% differences of DNA is what makes us unique!</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" />

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
            const slides = document.querySelectorAll(".t-slide");
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
                    window.location.href = "{{ route('DnaSelection') }}";
                } else {
                    //   Previous slide pe jao
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('DnaSelection') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
