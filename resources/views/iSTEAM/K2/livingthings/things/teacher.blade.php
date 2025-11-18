@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">What Are Living Things?</h2>

    {{-- sldie 1  --}}
    <div class="flex t-slide !text-white flex-col justify-around text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Explore and learn about the basic characteristics of living things</li>
                <li>Analyse and sort things into living and non-living things</li>
                <li>Programme a robot to produce sound and light</li>
                <li>Know that all animals are living things</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex flex-col  items-start justify-between">
            <h2 class="t-title ">Keywords:</h2>
            <div class="flex gap-[5vw]">
                <ul class="list-disc ">
                    <li>Living Thing</li>
                    <li>Non-living Thing</li>
                    <li>Move</li>
                    <li>Water</li>
                    <li>Food</li>
                </ul>
                <ul class="list-disc">
                    <li>Air </li>
                    <li>Grow</li>
                    <li>Produce Young</li>
                    <li>Animals</li>
                </ul>
            </div>
        </div>
    </div>



    {{-- t-slide 2 --}}
    <div class="flex t-slide !text-white flex-col justify-center text-start">
        <div>
            <h2 class=" t-title">Preparations for Class Activity 1 - comparison of living and non-living things:
            </h2>
            <ul class="list-disc ">
                <li>A teddy bear</li>
                <li>Use whiteboard mode during discussion [Tick or cross to complete the
                    table of comparison (as shown below) with the whiteboard pen. For
                    documentation purpose, you may want to save or print the page.]</li>
            </ul>
        </div>
        <div>
            <img src="{{ asset('assets/images/K2/livingthings/things/t23.png') }}" alt="Teacher" class="t-title" />
        </div>
    </div>

    {{-- sldie 3 --}}
    <div class="flex t-slide !text-white flex-col justify-center text-start">
        <div>
            <h2 class=" t-title">Things to consider during hands-on sessions:</h2>
            <ul class="list-disc">
                <li>
                    Ask questions to prompt children share their prior knowledge and experiences. You may ask questions
                    based on children's interest and response too.
                </li>
                <li>
                    Some possible questions for Activity 1: What will happen if you have no access to water? How long do you
                    think you can live without water? Why do we need food? How long do you think you can live without food?
                    How do you change since you were born?
                </li>
                <li>
                    Some possible questions for Activity 2: A piece of fried chicken is made from chickens, which are
                    animals. Would you call it a living or non-living thing? Why? Ball, toy train and doll are toys. Do you
                    think toys are living or non-living things? Why? If all toys are non-living things, how about the
                    cartoon characters that we know? Are they living or non-living things? Why?
                </li>
            </ul>
        </div>
    </div>


    {{-- t-slide 4 --}}
    <div class="flex t-slide !text-white flex-col justify-center text-start">
        <div>
            <h2 class=" t-title">Additional information:</h2>
            <ul class="list-disc">
                <li>
                    Many things have one or more characteristics of living things, but a living thing must has all of the
                    characteristics of living things.
                </li>
                <li>
                    Many things that move like car, fan and windmill are non-living things. These
                    things moved by external power like fuel, battery, electricity and wind.
                </li>
                <li>
                    All human-made things are non-living things. But some natural things around us like rock, water, air and
                    cloud are non-living things too.
                </li>
            </ul>
        </div>
    </div>


    {{-- sldie 5 --}}
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
                    <span class="relative">
                        If you see <span class="opacity-0">---</span> , click on it for additional information or activity.
                        <img src="{{ asset('assets/images/pptimages/info-btn.png') }}"
                            class="t-info-btn absolute top-[-1vw] left-[8vw]" />
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




    {{-- t-slide 6 --}}
    <div class="text-white flex flex-col justify-center gap-[2vw] !text-start t-slide hidden">
        <h2 class=" title stroke text-center">Learning Centre Idea</h2>
        <div>
            <h2 class="!text-white text-[2vw] stroke">Living or Non-Living</h2>
            <h2 class="t-title">What and how to set up:</h2>
            <ul>
                <li>
                    Place pictures of living (different animals) and non-living things
                    (toys, transportation, household items, etc) here.
                </li>
            </ul>
        </div>
        <div>
            <h2 class="t-title">What to do:</h2>
            <ul class="list-decimal">
                <li>
                    Name the thing in each picture.
                </li>
                <li>
                    Sort the pictures into living and non-living things.
                </li>
            </ul>
        </div>
    </div>

    {{-- slide 7 --}}
    <div class="text-white flex flex-col items-center justify-center gap-[2vw] text-start t-slide hidden">
        <h2 class=" title stroke">Extension Class Activity</h2>
        <div>
            <h2 class="t-title">What to do:</h2>
            <ul class="list-decimal">
                <li> Prepare lyrics poster for the 2 songs on the next page.</li>
                <li>Guide children learn to sing the songs to the tune of "Are You
                    Sleeping".</li>
                <li>When children are familiar with the songs, you may modify the
                    lyrics by replacing "It" with examples of living or non-living
                    things to sing the songs again.</li>
            </ul>
        </div>
    </div>

    {{-- slide 8 --}}
    <div class="text-white flex flex-col items-center justify-center gap-[2vw] text-start t-slide hidden">
        <h2 class=" title stroke">Extension Class Activity</h2>
        <div>
            <h2 class="!text-white text-[2vw] stroke">Let's Sing Songs</h2>
            <div class="flex items-center justify-between gap-[5vw]">

                <ul class="pl-3 space-y-2">
                    <li>It is living</li>
                    <li>It is living. It is living.</li>
                    <li>I know why! I know why!</li>
                    <li>It needs water, food and air.</li>
                    <li>It moves, grows and produces young.</li>
                    <li>It's alive. It's alive.</li>
                </ul>
                <ul class="pl-6 space-y-2">
                    <li>It's Non-living</li>
                    <li>It's non-living. It's non-living.</li>
                    <li>I know why! I know why!</li>
                    <li>It doesn't need anything.</li>
                    <li>It stays the same forever.</li>
                    <li>It's not alive. It's not alive.</li>
                </ul>

            </div>
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
            // Get all elements
            const slides = document.querySelectorAll(".t-slide");
            const nextBtn = document.querySelector(".nextButton");
            const returnBtn = document.getElementById("returnButton");
            const doneBtn = document.querySelector(".doneButton");

            // Current slide position
            let currentIndex = 0;

            // Show slide and update buttons
            function showSlide(index) {
                // Hide all slides
                slides.forEach(slide => slide.classList.add("hidden"));

                // Show current slide
                slides[index].classList.remove("hidden");

                // Update index
                currentIndex = index;

                // Check if last slide
                const isLastSlide = (index === slides.length - 1);

                if (isLastSlide) {
                    // Last slide: hide Next, show Done
                    nextBtn.style.display = "none";
                    doneBtn.style.display = "block";
                } else {
                    // Not last slide: show Next, hide Done
                    nextBtn.style.display = "block";
                    doneBtn.style.display = "none";
                }
            }

            // Next button
            nextBtn.addEventListener("click", () => {
                if (currentIndex < slides.length - 1) {
                    showSlide(currentIndex + 1);
                }
            });

            // Return button
            returnBtn.addEventListener("click", () => {
                if (currentIndex === 0) {
                    // On first slide: redirect to route
                    window.location.href = "{{ route('K2thingsSelection') }}";
                } else {
                    // Not first slide: go back
                    showSlide(currentIndex - 1);
                }
            });

            // Done button
            doneBtn.addEventListener("click", () => {
                window.location.href = "{{ route('K2thingsSelection') }}";
            });

            // Start at first slide
            showSlide(0);
        });
    </script>
@endpush
