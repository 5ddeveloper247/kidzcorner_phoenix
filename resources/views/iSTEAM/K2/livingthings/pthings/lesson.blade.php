@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Are Plants Living Things?</h2>

    {{-- Slide 1 --}}
    <div class="slide hidden flex flex-col items-center h-[40vh] justify-between">
        <h2 class="title stroke">Children, do you still remember how to grow seeds in a bag?
            What seeds did you plant?</h2>
        <p class="note">Note: Have children display their seed bag and the learning journal; <br>
            encourage them to share their experiences.</p>
    </div>

    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-5">
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p18.png') }}" class="img-md" />
        <div class="text-start self-start">
            <h2 class="title stroke text-start">
                <span class="!text-white">What do you observe:</span> <br>
                Did the seed grow into a new plant?
            </h2>
            <p class="note">
                Note: Have children pick and share their observations on one of the seed planted.
            </p>
        </div>
    </div>

    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p19.png') }}" class="img-md" />
        <div class="text-start self-start">
            <h2 class="title stroke text-start">
                <span class="!text-white">What do you observe:</span> <br>
                What changes did it go through?
            </h2>
            <p class="note">
                Note: Have children pick and share their observations on one of the seed planted - root, stem, leaf.
            </p>
        </div>
    </div>

    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col justify-center">
        <div class="text-start self-start">
            <h2 class="title stroke text-start"><span class="!text-white">What do you learn:</span> <br>
                How did a seed in the bag grow into a new plant?</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pthings/p1.png') }}" class="img-xl" />
        <p class="note">Note: Guide children to understand what seed germination is (sprouting of a seedling).</p>
    </div>

    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col justify-center">
        <div class="text-start self-start">
            <h2 class="title stroke text-start"><span class="!text-white">What do you learn:</span> <br>
                What helped the seed grow?</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pthings/p1.png') }}" class="img-xl" />
        <p class="note">Note: Guide children to understand that water, air and sunlight help plants grow.</p>
    </div>

    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col justify-center">
        <h2 class="title stroke text-start"><span class="!text-white">What do you learn:</span> <br>
            What helped the seed grow?</h2>
        <img src="{{ asset('assets/images/K2/livingthings/pthings/p1.png') }}" class="img-xl" />
        <p class="note">Note: Guide children to understand that water, air and sunlight help plants grow.</p>
    </div>

    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/livingthings/pthings/p2.png') }}" class="img-xl" />
        <h2 class="title stroke">Through the activity, we know that water, air and sunlight
            will trigger seeds to grow.</h2>
    </div>

    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[15vw]">
        <h2 class="title stroke">How about the green onions?
            How tall did they grow after a week?</h2>
        <p class="note">Note: Display the green onions. Have children refer to their learning
            journal and share their experiences.</p>
    </div>

    {{-- Slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/livingthings/pthings/p3.png') }}" class="img-md" />
        <h2 class="title stroke text-start"><span class="!text-white">What do you observe:</span> <br>
            Did the green onion plants grow taller after a week?</h2>
        <p class="note">Note: Have children share their observations on the growing process of the green onions.</p>
    </div>

    {{-- Slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/livingthings/pthings/p3.png') }}" class="img-md" />
        <h2 class="title stroke text-start"><span class="!text-white">What do you observe:</span> <br>
            What changes did they go through?</h2>
        <p class="note">Note: Have children share their observations on the growing process of the green
            onions - roots, stems and leaves.</p>
    </div>

    {{-- Slide 11 --}}
    <div class="slide hidden flex flex-col justify-center">
        <h2 class="title stroke text-start"><span class="!text-white">What do you learn:</span> <br>
            How long did the green onions take to start growing?</h2>
        <img src="{{ asset('assets/images/K2/livingthings/pthings/p4.png') }}" class="img-xl" />
        <p class="note">Note: Have children share their observations - sample shown what they looked like after 1 day.</p>
    </div>

    {{-- Slide 12 --}}
    <div class="slide hidden flex flex-col justify-center">
        <h2 class="title stroke text-start"><span class="!text-white">What do you learn:</span> <br>
            How tall did they grow from day 1?</h2>
        <img src="{{ asset('assets/images/K2/livingthings/pthings/p4.png') }}" class="img-xl" />
        <p class="note">Note: Have children share their observations - sample shown what they looked like 1 week later.
        </p>
    </div>

    {{-- Slide 13 --}}
    <div class="slide hidden flex flex-col justify-center">
        <h2 class="title stroke text-start"><span class="!text-white">What do you learn:</span> <br>
            What helped the green onions grow taller?</h2>
        <img src="{{ asset('assets/images/K2/livingthings/pthings/p4.png') }}" class="img-xl" />
        <p class="note">Note: Guide children to understand that water, air and sunlight help plants grow.</p>
    </div>

    {{-- Slide 14 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/livingthings/pthings/p4.png') }}" class="img-xl" />
        <h2 class="title stroke">Through the activity, we know that as long as the roots and
            white stems are around, water, air and sunlight will make the
            green onion plants continue to grow.</h2>
    </div>

    {{-- Slide 15 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[15vw]">
        <h2 class="title stroke">Children, do you still remember the common points
            of <span class="!text-white">living thing</span>? What are they?</h2>
        <p class="note">Note: Encourage children to recall and share the six basic characteristics of living things.</p>
    </div>

    {{-- Slide 16 --}}
    <div class="slide hidden flex items-center">
        <div class="text-start space-y-3">
            <h2 class="title stroke ">Living things are things that...:</h2>
            <ul class="!text-white pl-[4vw] text-[2.2vw]">
                <li class="flex items-center gap-[1vw]">
                    <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" class="!max-w-[2.4vw]" />
                    <p>Move on their own</p>
                </li>
                <li class="flex items-center gap-[1vw]">
                    <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" class="!max-w-[2.4vw]" />
                    <p>Need food</p>
                </li>
                <li class="flex items-center gap-[1vw]">
                    <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" class="!max-w-[2.4vw]" />
                    <p>Need Drink</p>
                </li>
                <li class="flex items-center gap-[1vw]">
                    <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" class="!max-w-[2.4vw]" />
                    <p>Need Eat</p>
                </li>
                <li class="flex items-center gap-[1vw]">
                    <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" class="!max-w-[2.4vw]" />
                    <p>Grow</p>
                </li>
                <li class="flex items-center gap-[1vw]">
                    <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" class="!max-w-[2.4vw]" />
                    <p>Produce young</p>
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pthings/p31.png') }}" class="img-h-md" />
    </div>

    {{-- slide 17 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke !text-white">Class Activity </h2>
        <img src="{{ asset('assets/images/K2/livingthings/pthings/p30.png') }}" class="img-xl" />
        <div class="self-start title stroke">
            <div class="text-start">
                <h2 class="text-start">Let's find out:</h2>
                <h2>Are plants living or non-living things?</h2>
            </div>
        </div>
        <p class="note">Note: Display seed bags and green onions.</p>
    </div>

    {{-- slide 18 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">What do you think (Prediction):</h2>
        <img src="{{ asset('assets/images/K2/livingthings/pthings/p5.png') }}" class="img-xl" />
        <p class="note">Note: Have children use the learning journal to fill in their prediction.</p>
    </div>


    {{-- slide 19 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="relative">
            <h2 class="title stroke">Let’s do:</h2>
            <img src="{{ asset('assets/images/K2/livingthings/pthings/p6.png') }}" class="img-xl" />
            <button class="info-btn1 absolute top-[23%] right-[33%] ">
                <img src="{{ asset('assets/images/K2/sustain/energy1/information.png') }}" class="!max-w-[3.2vw]" />
            </button>
        </div>
        <p class="note">Note: Guide children to discuss each point and check if their prediction is correct;
            if wrong, correct with a red crayon.</p>

    </div>

    {{-- info slide 1 --}}
    <div class="slide info-slide1 flex flex-col items-center justify-center  ">
        <video id="video1" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/177.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Are these plants moving on their own?</h2>
        <p class="note">Note: Guide children to understand that plants move by themselves when they grow
            (stems move up and roots move down).</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- =====2 --}}
    <div class="slide info-slide1 flex flex-col items-center justify-center  ">
        <video id="video2" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/178.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Are these plants moving on their own?</h2>
        <p class="note">Note: Guide children to understand that plants move by themselves when their flowers bloom.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- ====3 --}}
    <div class="slide info-slide1 flex flex-col items-center justify-center  ">
        <video id="video3" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/179.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Are these plants moving on their own?</h2>
        <p class="note">Note: Guide children to understand that plants will grow towards the sun;
            sunflower plants move by themselves to follow the sun as it moves across the sky.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- ====4 --}}
    <div class="slide info-slide1 flex flex-col items-center justify-center  ">
        <video id="video4" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/180.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Are these plants moving on their own?</h2>
        <p class="note">Note: Guide children to understand that plants sometimes moved by other things like wind, rain
            and animals.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>






    {{-- slide 20 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div>
            <h2 class="title stroke">Let’s do:</h2>
            <img src="{{ asset('assets/images/K2/livingthings/pthings/p7.png') }}" class="img-xl" />
        </div>
        <p class="note">Note: Guide children to discuss each point and check if their prediction is correct;
            if wrong, correct with a red crayon.</p>
    </div>


    {{-- slide 21 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">Let’s do:</h2>
        <img src="{{ asset('assets/images/K2/livingthings/pthings/p5.png') }}" class="img-xl" />
        <p class="note">Note: Have children use the learning journal to fill in their prediction.</p>
    </div>
    {{-- slide 18 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">Let’s do:</h2>
        <img src="{{ asset('assets/images/K2/livingthings/pthings/p5.png') }}" class="img-xl" />
        <p class="note">Note: Have children use the learning journal to fill in their prediction.</p>
    </div>



























    {{-- Slide 28 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/livingthings/pthings/p23.png') }}" class="img-lg" />
        <h2 class="text-start title stroke">In fact, we live in the world that is made up of both
            living and non-living things.</h2>
    </div>

    {{-- Slide 29 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/livingthings/pthings/p24.png') }}" class="img-lg" />
        <h2 class="text-start title stroke">Animals and plants are groups of living things.</h2>
    </div>

    {{-- Slide 30 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke !text-white">Individual Activity</h2>
        <div class="self-start title stroke space-y-20">
            <div class="text-start">
                <h2 class="text-start">Mission:</h2>
                <p>Draw 5 examples of living things and 5 examples of non-living things.</p>
            </div>
            <div class="text-start">
                <h2 class="title stroke text-start">Let's do:</h2>
                <ol class="lesson-ul list-decimal text-start pl-9">
                    <li>Name 5 examples of living things and 5 examples of non-living things.</li>
                    <li>Draw the examples in the learning journal.</li>
                </ol>
            </div>
        </div>
    </div>

    {{-- Slide 31 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="text-center title stroke"><span class="!text-white">What do you learn:</span> <br>
            What are the differences between <br>
            living and non-living things?</h2>
    </div>

    {{-- Slide 32 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="bg-cover bg-center flex flex-col justify-center items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('assets/images/K2/livingthings/pthings/p25.png') }}" class="!max-w-[42vw]" />
        </div>
    </div>

    {{-- Slide 33 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="bg-cover bg-center flex flex-col justify-start items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('assets/images/K2/livingthings/pthings/p26.png') }}" class="!max-w-[42vw]" />
        </div>
    </div>








    {{-- ====================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    <div id="buttons" class="absolute flex flex-row gap-6">
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
        function toggleVideo(videoId) {
            const video = document.getElementById(videoId);
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        }

        document.addEventListener("DOMContentLoaded", function() {
            const slides = document.querySelectorAll(".slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");

            // Get all clickable buttons (info-btn, click-btn)
            const clickButtons = document.querySelectorAll("[class*='info-btn'], [class*='click-btn']");

            let currentSlideNumber = 0;
            let inSpecialMode = false;
            let slideToReturnTo = null;
            let specialSlideType = null;

            const whereToGoWhenReturn = "{{ route('pthingsSelection') }}";
            const whereToGoWhenDone = "{{ route('k2livingthings') }}";

            function pauseAllVideos() {
                const videos = document.querySelectorAll('video');
                for (let i = 0; i < videos.length; i++) {
                    videos[i].pause();
                }
            }

            function isSpecialSlide(slide) {
                const classes = slide.className.split(' ');
                for (let i = 0; i < classes.length; i++) {
                    // Check for click pattern (click1, click2, etc.)
                    if (classes[i].startsWith('click') && classes[i].match(/^click\d+$/)) {
                        return true;
                    }
                    // Check for info-slide pattern (info-slide1, info-slide2, etc.)
                    if (classes[i].startsWith('info-slide') && classes[i].match(/^info-slide\d+$/)) {
                        return true;
                    }
                }
                return false;
            }

            function getSpecialTypeFromButton(button) {
                const classes = button.className.split(' ');
                for (let i = 0; i < classes.length; i++) {
                    // Handle click-btn pattern (click-btn1 → click1)
                    if (classes[i].startsWith('click-btn')) {
                        const number = classes[i].replace('click-btn', '');
                        return 'click' + number;
                    }
                    // Handle info-btn pattern (info-btn1 → info-slide1)
                    if (classes[i].startsWith('info-btn')) {
                        const number = classes[i].replace('info-btn', '');
                        return 'info-slide' + number;
                    }
                }
                return null;
            }

            function hasMoreSpecialSlides(startFrom) {
                if (!specialSlideType) {
                    return false;
                }

                for (let i = startFrom + 1; i < slides.length; i++) {
                    if (slides[i].classList.contains(specialSlideType)) {
                        return true;
                    }
                }
                return false;
            }

            function isLastSlide(slideNumber) {
                if (slideNumber === slides.length - 1) {
                    return true;
                }

                if (inSpecialMode && !hasMoreSpecialSlides(slideNumber)) {
                    return true;
                }

                return false;
            }

            function showSlide(slideNumber) {
                pauseAllVideos();

                for (let i = 0; i < slides.length; i++) {
                    if (i === slideNumber) {
                        slides[i].classList.remove("hidden");
                    } else {
                        slides[i].classList.add("hidden");
                    }
                }

                if (isLastSlide(slideNumber)) {
                    for (let i = 0; i < nextButtons.length; i++) {
                        nextButtons[i].classList.add("hidden");
                    }
                    if (doneButton) {
                        doneButton.classList.remove("hidden");
                    }
                } else {
                    for (let i = 0; i < nextButtons.length; i++) {
                        nextButtons[i].classList.remove("hidden");
                    }
                    if (doneButton) {
                        doneButton.classList.add("hidden");
                    }
                }
            }

            function goToNextSlide() {
                if (currentSlideNumber >= slides.length - 1) {
                    return;
                }

                currentSlideNumber++;

                while (currentSlideNumber < slides.length) {
                    const slide = slides[currentSlideNumber];

                    if (inSpecialMode) {
                        if (slide.classList.contains(specialSlideType)) {
                            break;
                        }
                    } else {
                        if (!isSpecialSlide(slide)) {
                            break;
                        }
                    }

                    currentSlideNumber++;
                }

                if (currentSlideNumber < slides.length) {
                    showSlide(currentSlideNumber);
                }
            }

            function goToPreviousSlide() {
                if (currentSlideNumber === 0 && !inSpecialMode) {
                    window.location.href = whereToGoWhenReturn;
                    return;
                }

                if (inSpecialMode) {
                    let previousSlide = currentSlideNumber - 1;

                    while (previousSlide >= 0) {
                        if (slides[previousSlide].classList.contains(specialSlideType)) {
                            break;
                        }
                        previousSlide--;
                    }

                    if (previousSlide >= 0) {
                        currentSlideNumber = previousSlide;
                        showSlide(currentSlideNumber);
                    } else {
                        currentSlideNumber = slideToReturnTo;
                        inSpecialMode = false;
                        specialSlideType = null;
                        slideToReturnTo = null;
                        showSlide(currentSlideNumber);
                    }
                } else {
                    if (currentSlideNumber > 0) {
                        currentSlideNumber--;

                        while (currentSlideNumber > 0 && isSpecialSlide(slides[currentSlideNumber])) {
                            currentSlideNumber--;
                        }

                        showSlide(currentSlideNumber);
                    }
                }
            }

            // Handle all click buttons (info-btn and click-btn)
            for (let i = 0; i < clickButtons.length; i++) {
                clickButtons[i].addEventListener("click", function(event) {
                    event.preventDefault();

                    slideToReturnTo = currentSlideNumber;
                    inSpecialMode = true;
                    specialSlideType = getSpecialTypeFromButton(clickButtons[i]);

                    for (let j = 0; j < slides.length; j++) {
                        if (slides[j].classList.contains(specialSlideType)) {
                            currentSlideNumber = j;
                            showSlide(currentSlideNumber);
                            break;
                        }
                    }
                });
            }

            // Next button handlers
            for (let i = 0; i < nextButtons.length; i++) {
                nextButtons[i].addEventListener("click", goToNextSlide);
            }

            // Return button handler
            returnButton.addEventListener("click", goToPreviousSlide);

            // Done button handler
            if (doneButton) {
                doneButton.addEventListener("click", function() {
                    if (inSpecialMode && slideToReturnTo !== null) {
                        currentSlideNumber = slideToReturnTo;
                        inSpecialMode = false;
                        specialSlideType = null;
                        slideToReturnTo = null;
                        showSlide(currentSlideNumber);
                    } else {
                        window.location.href = whereToGoWhenDone;
                    }
                });
            }

            showSlide(currentSlideNumber);
        });
    </script>
@endpush
