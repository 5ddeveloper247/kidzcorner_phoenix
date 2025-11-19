@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- title --}}
    <h2 class="top-title stroke">Giant Wheels</h2>


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/gw1.png') }}" class="img-md" />
        <h2 class="title stroke">Children, this is another type of <span class="!text-white">structure</span>.
            What is it called? What do we use it for?</h2>
    </div>



    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/gw2.png') }}" class="img-xl" />
        <h2 class="title stroke">A <span class="!text-white"> giant wheel</span> is a very large upright <span
                class="text-white">wheel</span> with <span class="!text-white">carriages</span>.</h2>
        <p class="note">Note: Have children point out and compare the carriages of these two giant wheels.</p>
    </div>


    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/gw1.png') }}" class="img-md" />
        <h2 class="title stroke">We may take a ride on a giant wheel for fun and excitement.</h2>
        <p class="note">Note: Have children share their giant wheel riding experiences (if any).</p>
    </div>


    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/gw3.png') }}" class="img-md" />
        <h2 class="title stroke">Tourists may take a ride on a giant wheel to view
            the scenery around a city.</h2>
    </div>


    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/gw3.png') }}" class="img-md" />
        <h2 class="text-start title stroke">Do you know how a giant wheel works?</h2>
        <p class="note text-center">Note: Guide children to recall and talk about how a wheel and axle works as a simple
            machine.</p>
    </div>



    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/gl4.png') }}" class="img-lg" />
        <h2 class="text-start title stroke">As the wheel and axle turn together, the carriages attached
            to the outer rim of a giant wheel will move too.</h2>
    </div>


    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="text-start title stroke">Now, let's learn how to build a giant wheel!</h2>
    </div>


    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <h2 class="text-center justify-start !text-white stroke">Small Group Activity 1</h2>
        <div class="text-start">
            <h2 class="title stroke">Mission:</h2>
            <ol class="title stroke">
                <li>Use the straws and pipe cleaners to build the structure of a giant wheel.</li>
            </ol>
        </div>
        <p class="note">Note: Display a premade sample of the structure of a giant wheel.</p>
    </div>

    {{-- Slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="1">
                <li>Observe the structure of this giant wheel and name the shapes that form it.</li>
            </ol>
        </div>
        <video id="video1" class="pointer-events-none video-md">
            <source src="{{ asset('assets/images/K1/str/146.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Guide children to spot the shapes (hexagons, triangles, triangular prism) from the
            premade sample.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>


    {{-- Slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="2">
                <li>Learn how to build the structure of a giant wheel.</li>
            </ol>
        </div>
        <video id="video2" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/146.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Give each group a set of materials to work on. <a href=""
                class="text-[#F7B94A] click-btn1">Click here</a> to follow the step-by-step guide.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 11 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start">
        <h2 class="text-center title stroke">How to build the structure of a giant wheel? - Step 1 of 8</h2>
        <video id="video3" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/147.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all the sub-steps. Then have them work together in groups to complete the sub-steps.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 12 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start">
        <h2 class="text-center title stroke">How to build the structure of a giant wheel? - Step 2 of 8</h2>
        <video id="video4" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/148.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all the sub-steps. Then have them work together in groups to complete the sub-steps.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 13 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start">
        <h2 class="text-center title stroke">How to build the structure of a giant wheel? - Step 3 of 8</h2>
        <video id="video5" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/149.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all the sub-steps. Then have them work together in groups to complete the sub-steps.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 14 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start">
        <h2 class="text-center title stroke">How to build the structure of a giant wheel? - Step 4 of 8</h2>
        <img src="{{ asset('assets/images/K1/str/gl5.png') }}" class="img-md" />
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all the sub-steps. Then have them work together in groups to complete the sub-steps.</p>
    </div>

    {{-- Slide 15 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start">
        <h2 class="text-center title stroke">How to build the structure of a giant wheel? - Step 5 of 8</h2>
        <video id="video6" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/150.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all the sub-steps. Then have them work together in groups to complete the sub-steps.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video6')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 16 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start">
        <h2 class="text-center title stroke">How to build the structure of a giant wheel? - Step 6 of 8</h2>
        <video id="video7" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/151.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all the sub-steps. Then have them work together in groups to complete the sub-steps.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video7')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 17 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start">
        <h2 class="text-center title stroke">How to build the structure of a giant wheel? - Step 7 of 8</h2>
        <video id="video8" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/152.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all the sub-steps. Then have them work together in groups to complete the sub-steps.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video8')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>


    {{-- Slide 18 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start">
        <h2 class="text-center title stroke">How to build the structure of a giant wheel? - Step 8 of 8</h2>
        <video id="video9" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/153.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all the sub-steps. Then have them work together in groups to complete the sub-steps.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video9')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>






    {{-- Slide 19 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="3">
                <li>Showcase your work.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K1/str/gw4.png') }}" class="img-md" />
        <p class="note text-center">Note: After the showcase, guide children to reflect and share things they learn from
            this engineering activity (refer to the possible questions for reflection in the teacher's mode).</p>
    </div>




    {{-- Slide 20 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/gw13.png') }}" class="img-xl" />
        <h2 class="title stroke">Different giant wheels have different designs of carriages
            but all carriages always hang downwards as the wheels spin.</h2>
    </div>



    {{-- Slide 21 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video10" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/154.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="text-start title stroke">It means that when the wheel is spinning, the riders in the
            carriages will remain balanced at all times.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video10')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 22 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[18vw]">
        <h2 class="text-center justify-start !text-white stroke">Small Group Activity 2</h2>
        <div class="text-start">
            <h2 class="title stroke">Mission:</h2>
            <ol class="title stroke" >
                <li>Design and build carriages for your giant wheel.</li>
            </ol>
        </div>
    </div>


    {{-- Slide 23 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="1">
                <li>Design carriages for your giant wheel. Draw your design in the learning journal.</li>
                <li>Choose the materials based on your design idea and start building the carriages.</li>
                <li>Showcase your work.</li>
            </ol>
        </div>
        <p class="note text-center">Note: Encourage children to design the look of their carriages creatively in the
            learning journal and then choose suitable art and craft materials to build the carriages. <a href=""
                class="text-[#F7B94A] click-btn2">Click here</a> to see one example.
            During the showcase, have each group share their design ideas to the class.</p>
    </div>

    {{-- Slide 24 --}}
    <div class="slide hidden click2 flex flex-col items-center justify-start">
        <video id="video11" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/155.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Give children more times to explore and learn their own building techniques.
            Pause the class for once or twice to point out good building techniques.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video11')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>



    {{-- Slide 25 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center flex flex-col justify-start items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>Draw your design of a carriage or carriages for your giant wheel here.</p>
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
            const clickButtons = document.querySelectorAll("[class*='click-btn']");

            let currentSlideNumber = 0;
            let inSpecialMode = false;
            let slideToReturnTo = null;
            let specialSlideType = null;

            const whereToGoWhenReturn = "{{ route('giantSelection') }}";
            const whereToGoWhenDone = "{{ route('K1structure') }}";

            function pauseAllVideos() {
                const videos = document.querySelectorAll('video');
                for (let i = 0; i < videos.length; i++) {
                    videos[i].pause();
                }
            }

            function isSpecialSlide(slide) {
                const classes = slide.className.split(' ');
                for (let i = 0; i < classes.length; i++) {
                    if (classes[i].startsWith('click') && classes[i].match(/^click\d+$/)) {
                        return true;
                    }
                }
                return false;
            }

            function getSpecialTypeFromButton(button) {
                const classes = button.className.split(' ');
                for (let i = 0; i < classes.length; i++) {
                    if (classes[i].startsWith('click-btn')) {
                        const number = classes[i].replace('click-btn', '');
                        return 'click' + number;
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

            for (let i = 0; i < nextButtons.length; i++) {
                nextButtons[i].addEventListener("click", goToNextSlide);
            }

            returnButton.addEventListener("click", goToPreviousSlide);

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
