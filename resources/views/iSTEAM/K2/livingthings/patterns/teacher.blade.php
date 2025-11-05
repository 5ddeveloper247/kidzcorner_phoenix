@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- sldie 1  --}}
    <div class=" slide t-slide flex  text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li class="text-[1.1vw]">Know that fingerprints are unique because they are formed based on individual
                    growing experience while
                    still in the mother's womb</li>
                <li class="text-[1.1vw]">Identify three basic fingerprint patterns</li>
                <li class="text-[1.1vw]">Analyse own set of fingerprints to find out the patterns that one has</li>
                <li class="text-[1.1vw]">Know that basic patterns can be found on different fingers and that no two
                    fingerprints are exactly the
                    same</li>
                <li class="text-[1.1vw]">Make conclusions from a graph</li>
                <li class="text-[1.1vw]">Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex flex-col  items-start justify-between">
            <h2 class="t-title font-bold">Keywords:</h2>
            <div>
                <ul class="list-disc ">
                    <li class="text-[1.1vw]">Fingerprint</li>
                    <li class="text-[1.1vw]">Ridge</li>
                    <li class="text-[1.1vw]">Thumb</li>
                    <li class="text-[1.1vw]">Finger</li>
                </ul>
                <ul class="list-disc ">
                    <li class="text-[1.1vw]">Fingerprint Pattern</li>
                    <li class="text-[1.1vw]">Loop</li>
                    <li class="text-[1.1vw]">Whorl</li>
                    <li class="text-[1.1vw]">Arch</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide t-slide flex  text-white flex-col justify-start  text-start">
        <div>
            <h2 class="font-bold t-title">Preparations for Individual Activity - Which fingerprint pattern do you have on
                each
                finger? :</h2>
            <ul class="list-disc ">
                <li class="text-[1.3vw]">A few magnifying glasses (optional; use in case children cannot
                    determine which pattern is in a fingerprint; guide them on how to use
                    it correctly so that will see a clear magnifying image of fingerprints)</li>
                <li class="text-[1.3vw]">Individual Fingerprint Record (from the last lesson)</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f2.png') }}" class="w-[500px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 3 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-center  text-start">
        <div>
            <h2 class=" t-title">Preparations for Group Activity - Fingerprint Patterns Of The Class:</h2>
            <ul class="list-disc">
                <li class="text-[1.3vw]">2 sheets of big papers (based on the number of children in the class,
                    draw a table as shown below in a paper beforehand; you are going to
                    guide children to plot a graph in another paper when you carry out
                    the activity: you may consider use a graph paper instead)</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp12.png') }}" class="w-[800px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class="slide flex t-slide  flex-col justify-start  text-2xl text-start text-white">
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class=" t-title">Notes:</h2>
                <ul class="list-disc leading-relaxed">
                    <li class="text-[1.3vw] flex whitespace-nowrap">
                        If you see
                        <span>
                            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                        </span>
                        next to a picture,click on the picture to watch the video.
                    </li>
                    <li class="text-[1.3vw]">Emphasise and use the keywords during hands-on sessions.</li>
                    <li class="text-[1.3vw]">Print out the Learning Journal (if any) for every child to complete at the end
                        of the lesson.
                    </li>
                    <li class="text-[1.3vw] flex whitespace-nowrap">
                        Click on this shortcut icon
                       <span>
                            <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" class="home-btn" />
                        </span>
                        if you need to go to some parts of the lesson quickly.
                    </li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
        </div>
    </div>


    {{-- slide 5 --}}
    <div class="text-white flex flex-col items-center justify-center  text-start t-slide slide hidden">
        <h2 class=" title stroke">Learning Centre Idea</h2>
        <div class="flex flex-col gap-10">
            <ul>
                <h2 class="!text-white title stroke">Toe Prints</h2>
                <h2 class="t-title">What and how to set up:</h2>
                <li class="text-[1.3vw]">Put 2B pencils, plain paper, adhesive clear tape, scissors, wet
                    towels and drawing papers here.</li>
            </ul>

            <div>
                <h2 class="t-title">What to do:</h2>
                <ul class="list-decimal">
                    <li class="text-[1.3vw]">Make a set of your toe prints.</li>
                    <li class="text-[1.3vw]">Compare them with your set of fingerprints..</li>
                    <li class="text-[1.3vw]">Share your findings: Are your toe prints identical to your fingerprints?</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" />
    </div>


    {{-- slide 6 --}}
    <div class="text-white flex flex-col items-center justify-center  text-start t-slide slide hidden">
        <h2 class=" title stroke">Learning Centre Idea</h2>
        <div>
            <ul class="list-disc">
                <h2 class="!text-white title stroke">Toe Prints</h2>
                <h2>Explanation:</h2>
                <p class="text-[1.3vw]">Your prints on each finger and each toe are different from all your
                    other fingers and toes, but the patterns should be almost the
                    same. So just like fingerprints, your toe prints are totally unique to
                    you!</p>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" />
    </div>

    {{-- slide 7 --}}
    <div class="text-white flex flex-col items-center justify-center  text-start t-slide slide hidden">
        <h2 class=" title stroke">Learning Centre Idea</h2>
        <div>
            <ul class="list-disc">
                <h2 class="!text-white title stroke">Fun Facts</h2>
                <h2 class="t-title">What and how to set up:</h2>
                <p class="text-[1.3vw]">Use your creativity to design graphic fact sheet for every fun fact below.
                    Guide children to understand the facts.</p>
                <br> <br>
                <li class="text-[1.3vw]">You can outgrow your shoes but not your prints as they will stay the <br>
                    same no matter how old you are.</li>
                <li class="text-[1.3vw]">Do you think we are the only type of animals with fingerprints? <br>
                    Chimpanzees, gorillas and koalas also have fingerprints!</li>
                <li class="text-[1.3vw]">The fingerprints of koalas are so similar to ours that even experts <br>
                    have trouble telling them apart.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" />
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
                    window.location.href = "{{ route('k2livingthings') }}";
                } else {
                    //   Previous slide pe jao
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('k2livingthings') }}";
                });
            }
            showSlide(currentSlide);
        });
    </script>
@endpush
