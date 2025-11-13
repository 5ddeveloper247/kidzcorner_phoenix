@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">The Stages of Growth of a Butterfly</h2>

    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl !text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class="  ">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Learn about the stages of growth of a butterfly</li>
                <li>Talk about the changes that occur between the different stages of growth</li>
                <li>Learn how to take care of a caterpillar</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="t-title ">Keywords:</h2>
                <div class="flex  gap-10">

                    <ul class="list-disc ">
                        <li>Egg</li>
                        <li>Caterpillar</li>
                        <li>Pupa</li>
                        <li>Butterfly</li>
                    </ul>
                    <ul class="list-disc ">
                        <li>Stage of Growth</li>
                        <li>Living Thing</li>

                    </ul>

                </div>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
        </div>
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl !text-white flex-col t-slide justify-start  text-start ">
        <div>
            <h2 class=" t-title">Preparations for Individual Activity:</h2>
            <ul class="list-disc ">
                <li>Caterpillar Kit (from Oh Farm)</li>
                <li>Leaves for caterpillar (from Oh Farm)</li>
                <li>Empty Container</li>
                <li>Clean paper cut to the size of the caterpillar's container</li>
            </ul>
        </div>
        <div class="flex flex-col  gap-[1vw] border-4 border-white border">
            <h2 class="t-title">Preparations for Individual Activity:</h2>

            <ul>

                <li>Prepare the photos of the stages of growth of a butterfly</li>
                <li>Cut them out before the lesson so that children can use it in their learning journal</li>

            </ul>

        </div>
    </div>



    {{-- slide 3 --}}
    <div class=" slide flex text-2xl !text-white justify-start  text-start t-slide">
        <div>
            <h2 class=" t-title">Things to consider during hands-on sessions:</h2>
            <ul class="list-disc ">
                <li>Teacher please print the children's photo based on the size as
                    provided in the resource - photo template.</li>
                <li> Cut out the photos before the lesson.</li>
                <li>Optional, 3 photos of a teacher (as a baby, child and adult) - as a
                    sample to show children the stages of growth of a teacher.</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />


    </div>


    {{-- slide 4 --}}
    <div class="text-white flex text-start text-2xl slide hidden t-slide">
        <div>
            <h2 class=" t-title ">Things to consider during discussion:</h2>
            <ul class="list-disc">
                <li>
                    Prompt children to share how Emma/Oliver have changed over time.
                    Encourage children to describe the visible size and appearance of the person in each picture.
                </li>
                <li>
                    <span class="font-semibold">Some possible questions during Class Activity:</span>
                    How have you changed since you were born?Guide children in pointing out the changes in their sizes and
                    appearances. If there is indication of their ages (e.g. photos of them celebrating birthday), teacher
                    can point out
                    that their ages change too.
                </li>
            </ul>
            <br>
            <h2 class=" t-title ">Additional information:</h2>
            <ul class="list-disc">
                <li>All living things go through similar stages of growth.
                    However, some start from an egg and some are born.</li>
            </ul>

        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>


    {{-- slide 5 --}}
    <div class="slide flex t-slide  flex-col  text-2xl text-start !text-white">
        <div>
            <h2 class="t-title">Notes:</h2>
            <ul class="list-disc">
                <li class="flex whitespace-nowrap">
                    If you see
                    <span class="info-btn">

                        <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                    </span>
                    next to a picture, click on the picture to watch the video.
                </li>
                <li class="flex whitespace-nowrap">
                    If you see
                    <span> <img src="{{ asset('assets/images/pptimages/info-btn.png') }}" class="video-btn" />
                    </span>
                    , click on it for additional information or activity.
                </li>
                <li>Always ask questions to encourage children to think and share their ideas first before giving
                    out
                    any information.</li>
                <li>Emphasise and use the keywords during hands-on sessions.</li>
                <li>Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                </li>
                <li class="flex whitespace-nowrap">
                    Click on this shortcut icon
                    <span> <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" class="home-btn" />
                    </span>
                    if you need to go to some parts of the lesson quickly.
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 6 --}}
    <div class="text-white flex flex-col text-2xl slide hidden t-slide">
        <h2 class="!text-white text-center title stroke">Learning Centre Idea</h2>

        <div class="text-start">
            <h2 class="!text-white title stroke">Stages of Growth of a Person</h2>
            <h2 class=" t-title ">What and how to set up:</h2>
            <ul class="list-disc">
                <li>
                    Place pictures of the different stages of growth of a person (e.g.
                    teacher's photo) here - include baby, young and adult (current)
                    photos. Prepare text labels of the stages.
                </li>
            </ul>
            <br>
            <h2 class=" t-title ">What to do:</h2>
            <ul class="list-decimal">
                <li>Invite children to arrange the photos in the correct order.</li>
                <li> Then, invite children to match each photo to its label.</li>
            </ul>

        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>


    {{-- slide 7 --}}
    <div class="text-white flex  flex-col text-2xl slide hidden t-slide">
        <h2 class="!text-white text-cneter title stroke">Learning Centre Idea</h2>
        <div class="text-start">
            <h2 class="!text-white title stroke">Stages of Growth of a Person</h2>
            <h2 class=" t-title ">What and how to set up:</h2>
            <p>Place pictures of the different stages of growth of an animal (e.g.
                cat or chicken) here - include egg, baby, young and adult photos.
                Prepare text labels of the stages.
            </p>
            <br>
            <h2 class=" t-title ">What to do:</h2>
            <ul class="list-decimal">
                <li>Invite children to arrange the photos in the correct order.</li>
                <li> Then, invite children to match each photo to its label.</li>
            </ul>

        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>



    {{-- Done Button --}}
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
                    window.location.href = "{{ route('StageOfGrowthSelection') }}";
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


            showSlide(currentSlide);
        });
    </script>
@endpush
