@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Roler Coasters</h2>


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video1" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/156.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Children, have you experienced riding on this type of structure?
            Do you know what structure this is?</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/str/r2.png" />
        <h2 class="title stroke">A roller coaster is an elevated track wit turns and slopes
            for open cars.</h2>
    </div>


    {{-- Slide3 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/str/r2.png" />
        <h2 class="title stroke">A roller coaster is an elevated track wit turns and slopes
            for open cars. </h2>
        <p class="note">Note: Have a children share their roller coaster riding experiences (if any).</p>
    </div>


    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <video id="video2" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/156.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Can you ‘feel’ the excitement of a roller coaster ride?
            Can you tell where the turns and slopes of the track are?.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>


    {{-- Slide 5  --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <h2 class="text-start title stroke">Now, let’s learn how to build a ball roller coaster!</h2>
    </div>



    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <h2 class="text-center justify-start text-[45px] text-white stroke">Small Group Activity </h2>
        <h2 class="text-start title stroke">Mission: <br>
            Use the straws and pipe cleaner to build a ball roller coaster.</h2>
    </div>

    {{-- Slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="text-start title stroke">Steps:</h2>
        <ol class="lesson-ul title stroke">
            <li>1. Observe the structure of a roller coaster and answer some
                questions.</li>
        </ol>
        <img src="/assets/images//K1/str/r4.png" />
        <p class="note text-center">Note: <a href="" class="text-[#F7B94A] click-btn1">Click here</a> for questions.
            Guide children to identify the characteristics of a roller coaster.</p>

    </div>
    {{-- step 1 --}}
    <div class="slide hidden click1  flex flex-col items-center justify-start  ">
        <h2 class="text-center title stroke">Where are the starting and end of this roller coaster?</h2>
        <video id="video3" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/157.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Guide children to spot the start and end of this roller coaster.</p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>
    {{-- step 2 --}}
    <div class="slide hidden click1  flex flex-col items-center justify-start  ">
        <h2 class="text-center title stroke">Where kind of structures are built to make the track elevated?</h2>
        <video id="video4" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/157.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Guide children to talk about the shape and size of the support structures of this
            roller coaster - pyramids</p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- step 3 --}}
    <div class="slide hidden click1  flex flex-col items-center justify-start  ">
        <h2 class="text-center title stroke">Where are the turns an slopes of the track?</h2>
        <video id="video5" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/157.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Guide children to spot the turns and slopes of the track of this roller coaster.
        </p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>
    {{-- step 4 --}}
    <div class="slide hidden click1  flex flex-col items-center justify-start  ">
        <h2 class="text-center title stroke">How to set up the turns and slopes of the track?</h2>
        <video id="video6" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/157.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Guide children to understand that supports of different heights allow us to create
            turns and slopes.</p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video6')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- Slide 8 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="text-start title stroke">Steps:</h2>
        <ol class="lesson-ul title stroke">
            <li>2. Learn how to build the track of a ball roller coaster.</li>
        </ol>
        <img src="/assets/images//K1/str/r6.png" />
        <p class="note text-center">Give each group a set of materials to work on. <a href=""
                class="text-[#F7B94A] click-btn2">Click here</a> to follow the step-by-step guide.</p>
    </div>

    {{-- step 1 --}}
    <div class="slide hidden click2  flex flex-col items-center justify-start  ">
        <h2 class="text-center title stroke">How to build the track of a ball roller coaster? <br>
            i. Make 2 short pieces of tracks.</h2>
        <div class="flex items-center gap-[1.5VW]">
            <video id="video7" class=" pointer-events-none video1">
                <source src="{{ asset('assets/images/K1/str/158.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <p class="note w-[3.5vw]">Repeat for
                the second
                piece!</p>
        </div>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all
            the sub-steps. Then have them work together in groups to complete the step.</p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video7')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- step 2 --}}
    <div class="slide hidden click2  flex flex-col items-center justify-start  ">
        <h2 class="text-center title stroke">How to build the track of a ball roller coaster? <br>
            ii. Make 7 long pieces of tracks</h2>
        <div class="flex items-center gap-[1.5VW]">
            <video id="video8" class=" pointer-events-none video1">
                <source src="{{ asset('assets/images/K1/str/159.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <p class="note w-[3.5vw]">Repeat for
                the other
                pieces!</p>
        </div>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all
            the sub-steps. Then have them work together in groups to complete the step.</p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video8')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- step 3 --}}
    <div class="slide hidden click2  flex flex-col justify-start  ">
        <h2 class="text-start title stroke">How to build the track of a ball roller coaster? <br>
            iii. Join all the long pieces of tracks together as a long track</h2>
        <div class="flex items-center gap-[1.5VW]">
            <video id="video9" class=" pointer-events-none video1">
                <source src="{{ asset('assets/images/K1/str/160.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <p class="note w-[3.5vw]">Repeat for
                the other
                pieces!</p>
        </div>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all
            the sub-steps. Then have them work together in groups to complete the step.</p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video9')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>
    {{-- step 4 --}}
    <div class="slide hidden click2  flex flex-col items-center justify-start  ">
        <h2 class="text-start title stroke">How to build the track of a ball roller coaster? <br>
            iv. Join all the short pieces of track to each end of the long track</h2>
        <video id="video10" class=" pointer-events-none video1">
            <source src="{{ asset('assets/images/K1/str/161.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all
            the sub-steps. Then have them work together in groups to complete the step.</p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video10')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>





    {{-- slide 9 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ol class="lesson-ul">
                <li>3. Learn how to build supports for the track of a ball roller coaster.</li>
            </ol>
        </div>
        <img src="/assets/images//K1/str/r11.png" />
        <p class="note text-center">Note: Give each group a set of materials to work on. <a href=""
                class="text-[#F7B94A] click-btn3">Click here</a> to follow the step-by
            step guide.</p>
    </div>
    {{-- step 1 --}}
    <div class="slide hidden click3  flex flex-col justify-start items-center  ">
        <h2 class="text-start title stroke">How to build support for the track of a ball roller coaster? <br>
            i. Make a pyramid.</h2>
        <div class="flex items-center gap-[1.5VW]">
            <video id="video11" class=" pointer-events-none">
                <source src="{{ asset('assets/images/K1/str/162.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all
            the sub-steps. Then have them work together in groups to complete the step.</p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video11')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>
    {{-- step 2 --}}
    <div class="slide hidden click3  flex flex-col items-center justify-start  ">
        <h2 class="text-start title stroke">How to build support for the track of a ball roller coaster?
            i. Make a total of 10 pyramids of different heights.</h2>
        <video id="video12" class=" pointer-events-none video1">
            <source src="{{ asset('assets/images/K1/str/163.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all
            the sub-steps. Then have them work together in groups to complete the step.</p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video12')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>




    {{-- slide 10 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ol class="  lesson-ul">
                <li>4. Use your track and supports to form a roller coaster.</li>
            </ol>
        </div>
        <img src="/assets/images//K1/str/r4.png" />
        <p class="note text-center">Note: Give each group a set of materials to work on. <a href=""
                class="text-[#F7B94A] click-btn4">Click here</a>
            to follow the step-by
            step guide.</p>
    </div>
    {{-- step 1 --}}
    <div class="slide hidden  click4 flex flex-col justify-start items-center ">
        <h2 class="text-start title stroke">How to fix the track on a support?</h2>
        <video id="video13" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/164.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all
            the sub-steps. Then have them work together in groups to complete the step.</p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video13')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- slide 11 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ol class="lesson-ul">
                <li>5. How do you make sure that a ball can always roll from the
                    start to the end of your roller coaster?</li>
            </ol>
        </div>
        <video id="video14" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/165.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Give each group a set of materials to work on. <a href=""
                class="text-[#F7B94A] click-btn5">Click here</a>
            to follow the step-by
            step guide.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video14')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>
    {{-- step 1 --}}
    <div class="slide hidden click5  flex flex-col justify-start items-center  ">
        <h2 class="text-start title stroke">How to make a ball roll down the track smoothly?</h2>
        <video id="video15" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/166.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video and talk about how to do so.
            Then have them work together in groups to make a successful ball roller coaster.</p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video15')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 12 --}}
    <div class="slide hidden  flex flex-col items-center justify-between h-[50vh]   ">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ol class="lesson-ul ">
                <li>6. Showcase your work.</li>
            </ol>
        </div>
        <p class="note text-center">Note: After the showcase, guide children to reflect and share things they learn from
            this engineering
            activity (refer to the possible questions for reflection in the teacher's mode).</p>
    </div>




    {{-- ====================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>


    <div id="buttons" class="absolute  flex flex-row ">

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

            const whereToGoWhenReturn = "{{ route('rollerSelection') }}";
            const whereToGoWhenDone = "{{ route('rollerSelection') }}";

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
