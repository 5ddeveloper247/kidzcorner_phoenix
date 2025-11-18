@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Domino Fun</h2>

    {{-- sldie 1 --}}
    <div class="flex !text-white flex-col t-slide justify-around  text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Explore and learn about a domino effect (chain reaction)</li>
                <li>Learn about the basic concept of force (push)</li>
                <li>Learn to form some basic domino arrangements</li>
                <li>Create a domino pattern that includes some of the basic domino arrangements together with friends</li>
            </ul>
        </div>
        <div>
            <h2 class="t-title ">Keywords:</h2>
            <ul class="list-disc ">
                <li>Domino Effect</li>
                <li>Chain Reaction</li>
                <li>Force (Push)</li>
            </ul>
        </div>
    </div>



    {{-- slide 2 --}}
    <div class="flex !text-white flex-col t-slide justify-center  text-start ">
        <div>
            <h2 class=" t-title">Preparations for Class Activity I:</h2>
            <ul class="list-disc ">
                <li>Each child: 25 dominoes</li>
            </ul>
        </div>

        <img src="{{ asset('/assets/images/K1/cm/cm20.png') }}" class="img-md" />
    </div>


    {{-- slide 3 --}}
    <div class="flex !text-white justify-center t-slide  text-start ">
        <div>
            <h2 class=" t-title">Preparations for Class Activity I:</h2>
            <ul class="list-disc ">
                <li> Domino toppling game requires a lot of patience, hard work, dedication, and perseverance.
                    Always praise children for their effort. When they fail, compliment the work they did and
                    then guide them to figure out how they can improve for next time, such as trying a different
                    strategy or practicing more.</li>
                <li>Domino toppling is best carried out on a very flat and hard surface.
                    Avoid doing it on carpets and rugs because you will find it very difficult
                    to set up and topple the dominoes. </li>
                <li> While children are working in a small group, remind them to respect each
                    other's ideas. </li>
            </ul>
        </div>
    </div>




    {{-- slide 4 --}}
    <div class=" t-slide text-start flex items-center !text-white !w-[53vw]">
        <div>
            <h2 class="t-title ">Notes:</h2>
            <ul class="list-disc space-y-3">
                <li>
                    <span class="relative">
                        If you see <span class="opacity-0">---</span>next to a picture, click on the picture to
                        watch the
                        video.
                        <img class="t-video-btn absolute top-[-1vw] left-[7.6vw]"
                            src="{{ asset('assets/images/pptimages/video.png') }}" />
                    </span>
                </li>

                <li>
                    Always ask questions to encourage children to think and share their ideas first before giving
                    out
                    any information.
                </li>

                <li>Emphasise and use the keywords during hands-on sessions.</li>

                <li>
                    Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                </li>

                <li>
                    <span class="relative">
                        Click on this shortcut icon <span class="opacity-0">---</span> if you need to go to some
                        parts of
                        the lesson quickly.
                        <img src="{{ asset('assets/images/pptimages/home-btn.png') }}"
                            class="t-home-btn absolute top-0 left-[19vw]" />
                    </span>
                </li>

            </ul>
        </div>
    </div>




    {{--  slide 5 --}}
    <div class="text-white flex flex-col t-slide justify-center  text-start  hidden">
        <h2 class="text-center title stroke">Learning Centre Idea</h2>
        <div>
            <h2 class="!text-white text-[2vw] stroke">Domino Toppling</h2>
            <h2 class="t-title">What and how to set up:</h2>
            <ul>
                <li>Place dominoes and pictures of basic domino arrangements here.</li>
            </ul>
        </div>
        <div>
            <h2 class="t-title">What to do:</h2>
            <ul class="list-decimal">
                <li>Arrange some dominoes to form a pattern that you like.</li>
                <li>Push the first domino and enjoy watching all the dominoes fall one after another.</li>
            </ul>
        </div>
    </div>


    {{--  slide 6 --}}
    <div class="text-white flex flex-col t-slide justify-center  text-start  hidden">
        <h2 class="text-center title stroke">Learning Centre Idea</h2>
        <div>
            <h2 class="!text-white text-[2vw] stroke">Special Domino Effect</h2>
            <h2 class="t-title">What and how to set up:</h2>
            <ul>
                <li>Place books, CDs and other possible things here for children to
                    create a domino effect.</li>
            </ul>
        </div>
        <div>
            <h2 class="t-title">What to do:</h2>
            <ul class="list-decimal">
                <li>Select things that you like and arrange them in line to create a
                    domino effect.</li>
                <li>Push the first domino to watch the domino effect happens.</li>
            </ul>
        </div>
    </div>

    <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt=""class="absolute teacher-img1" />


    {{-- ================================================================================== --}}
    <div class="down-btn-container">
        <button class=" doneButton ">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    {{-- Buttons --}}
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
                    window.location.href = "{{ route('DominoFunSelection') }}";
                } else {
                    //   Previous slide pe jao
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('DominoFunSelection') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
