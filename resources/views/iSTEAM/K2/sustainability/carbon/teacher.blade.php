@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- title --}}
    <h2 class="!text-[2.5vw] top-title stroke ">Carbon
        Footprint and
        the Future of
        Food</h2>


    {{-- sldie 1  --}}
    <div class=" slide t-slide flex  text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Understand the meaning of carbon footprint</li>
                <li>Learn how to protect Earth by reducing our carbon footprint</li>
                <li>Learn about the future of food</li>
                <li>Develop awareness of environmental issues/li>
                <li>Develop curiosity and understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex flex-col  items-start justify-between">
            <h2 class="t-title">Keywords:</h2>
            <div class="flex items-start gap-[4vw]">
                <ul class="list-disc ">
                    <li>Earth</li>
                    <li>Global warming</li>
                    <li>Greenhouse-gases</li>
                    <li>Carbon dioxide</li>
                    <li>Carbon Footprint</li>
                </ul>

                <ul class="list-disc ">
                    <li>Sustainable Future</li>
                    <li>Population Growth</li>
                    <li>Future Food</li>
                    <li>Plant-Based Meat</li>
                    <li>Lab-Grown Meat/Cultured Meat</li>
                </ul>

            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide t-slide flex  text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>
                    If you have no idea what carbon footprint is, go through this video
                    <span class="text-[#F7B94A] stroke !text-[1.4vw]">
                        (<a href="https://www.youtube.com/watch?v=8q7_aV8eLUE"
                            target="_blank">https://www.youtube.com/watch?v=8q7_aV8eLUE</a>)
                    </span>.
                </li>
                <li>
                    Go through the online carbon footprint calculator
                    <span class="text-[#F7B94A] stroke !text-[1.4vw]">
                        (<a href="https://mycarbonfootprint.spgroup.com.sg/"
                            target="_blank">https://mycarbonfootprint.spgroup.com.sg/</a>

                    </span>or your desired website)
                    to know what information is needed for the demo in class.
                </li>
                <li>
                    For class activity 1, you need to prepare and send parents a notice that includes the link as mentioned
                    above to get them assist their children to calculate their carbon footprint at home; record the result
                    and share in the class.
                </li>
                <li>Papers and drawing tools (for plotting graph)</li>
                <li>
                    Go through the video about Singapore's plan in building future farms
                    <span class="text-[#F7B94A] stroke !text-[1.4vw]">
                        (<a href="https://www.youtube.com/watch?v=2ueVw83Plec"
                            target="_blank">https://www.youtube.com/watch?v=2ueVw83Plec</a>)
                    </span>
                    know how you can explain it to children in simple terms.
                </li>
                <li>
                    Go through the vegan ground beef recipe and video
                    <span class="text-[#F7B94A] stroke !text-[1.4vw]">
                        (<a href="https://passtheplants.com/vegan-ground-beef/"
                            target="_blank">https://passtheplants.com/vegan-ground-beef/</a>)
                    </span>
                    help you visually understand the steps of making plant-based meat in Class Activity 2.
                </li>
            </ul>

        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 3 --}}
    <div class=" slide t-slide flex  text-white flex-col items-center justify-center  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc">
                <li>For class activity 2, you need cauliflowers, eggplants, carrots, onion, garlic,
                    basil,
                    crushed pumpkin seeds, cinnamon powder and cumin (refer to the vegan ground beef recipe
                    to decide the quantity needed for each ingredient).</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/sustain/carbon/c21.png') }}" />
        <ul class="list-disc">
            <li>Crushed the pumpkin seeds and clean the ingredients beforehand.</li>
        </ul>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- sldie 4 --}}
    <div class=" slide t-slide flex  text-white flex-col items-center justify-center  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc">
                <li>For class activity 2, you need cauliflowers, eggplants, carrots, onion, garlic,
                    basil,
                    crushed pumpkin seeds, cinnamon powder and cumin (refer to the vegan ground beef recipe
                    to decide the quantity needed for each ingredient).</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 5 --}}
    <div class="slide t-slide flex  text-white flex-col items-center justify-start gap-y-10 text-start hidden">
        <div>
            <h2 class="t-title">Notes</h2>
            <div class="text-start ">
                <ol class="lesson-ul">
                    <li class="flex whitespace-nowrap">If you see <span><img
                                src="{{ asset('assets/images/K2/sustain/Globalwarming/s27.png') }}"
                                class="!max-w-[2.5vw]" /></span> next to a picture, click on the picture to watch the video
                    </li>
                    <li>Always ask questions to encourage children to think and share their ideas first before giving out
                        any information.</li>
                    <li>Emphasise and use the keywords during hands-on sessions.</li>
                    <li>Print out the Learning Journal (if any) for every child to complete at the end of the lesson.</li>
                    <li class="flex whitespace-nowrap">Click on this shortcut icon <span><img
                                src="{{ asset('assets/images/K2/sustain/Globalwarming/s28.png') }}"
                                class="!max-w-[2.5vw]" /></span> if you need to go to some parts of the lesson quickly.</li>
                </ol>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
        </div>
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
                    window.location.href = "{{ route('carbonSelection') }}";
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
