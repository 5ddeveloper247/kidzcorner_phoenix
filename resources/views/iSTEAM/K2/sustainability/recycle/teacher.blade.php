@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Let's Recycle</h2>

    {{-- sldie 1  --}}
    <div class=" slide t-slide flex  text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Understand the meaning of recycling</li>
                <li>Learn about the process of recycling</li>
                <li>Develop curiosity and understanding of recycling paper through hands</li>
                <li>
                    Know that individual fingerprints are unique and no two people have the same fingerprints on activity
                </li>
                <li>Develop awareness of environmental issues</li>
            </ul>
        </div>

        <div class="flex flex-col items-start justify-between">
            <h2 class="t-title ">Keywords:</h2>
            <div class="flex items-start gap-[4vw]">
                <ul class="list-disc ">
                    <li>Reuse</li>
                    <li>Reduce</li>
                    <li>Recycle</li>
                    <li>Earth</li>
                    <li>Environment</li>
                    <li>Metal</li>
                </ul>

                <ul class="list-disc ">
                    <li>Plastic</li>
                    <li>Molten</li>
                    <li>Recyclable</li>
                    <li>Pollution</li>
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
                <li>Please prepare the materials as stated in the video for the recycle paper activity.

                </li>
                <li>If you do not have blender, you can tear the paper into small pieces of paper and
                    soak it overnight. You
                    will
                    need to tear the paper into smaller pieces and soak for another few hours so that it will be easier to
                    form the
                    recycled paper.</li>

            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/sustain/recycle/s12.png') }}" class="!max-w-[10vw]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 7 --}}
    <div class=" slide t-slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">Notes</h2>
            <ul>
                <li class=" flex whitespace-nowrap">If you see
                    <span>
                        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s27.png') }}" />
                    </span>
                    next to a
                    picture, click on the picture to watch the video
                </li>
                <li> Always ask questions to encourage children to think and share their ideas first
                    before giving out any information.</li>
                <li>Emphasise and use the keywords during hands-on sessions.
                </li>
                <li>Print out the Learning Journal (if any) for every
                    child to complete at the end of the lesson.
                </li>
                <li class=" flex whitespace-nowrap">Click on this shortcut icon
                    <span>
                        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s28.png') }}" />
                    </span>
                    if
                    you need to go to some
                    parts of the lesson quickly.
                </li>


            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>




    {{-- sldie 3 --}}
    <div class=" slide t-slide flex  text-white flex-col items-center justify-center  text-start">
        <h2 class="title stroke  text-center">Learning Centre Idea</h2>
        <div>
            <div>
                <h2 class="title stroke !text-white">Let's Sort!</h2>
                <h2 class="t-title">What and how to set up:</h2>
                <p> Print pictures of recyclable materials or put actual materials at
                    the learning corner with five containers with the labels (glass,
                    metal, paper, plastic and other waste).</p>
            </div>

            <div>
                <h2 class="t-title"> What to do:</h2>
                <ul class="list-decimal">
                    <li>Guide children sort them accordingly.</li>
                    <li>You may include items such as a set meal with can drinks with straw
                        and burger in a box to get children to think how they sort the rubbish properly.</li>
                </ul>
            </div>
        </div>
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

            //   Return button - redirect if on first slide
            returnButton.addEventListener("click", () => {
                if (currentSlide === 0) {
                    // Redirect to route when on first slide
                    window.location.href = "{{ route('recycleSelection') }}";
                } else if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('recycleSelection') }}";
                });
            }
            showSlide(currentSlide);
        });
    </script>
@endpush
