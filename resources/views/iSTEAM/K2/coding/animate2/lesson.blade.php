@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Animate a Character (2)</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center">
        <div class="flex gap-[1vw] items-center">
            <img class="img-normal-md" src="{{ asset('assets/images/K2/animate2/a1.png') }}" />
            <img class="img-normal-md" src="{{ asset('assets/images/K2/animate2/a2.png') }}" />
        </div>
        <h2 class="title stroke">Children, what is the name of this app?
            What can you use it for?</h2>
    </div>

    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="flex gap-[1vw] items-center">
            <img src="{{ asset('assets/images/K2/animate2/a3.png') }}" class="img-h-md" />
            <video id="video1" class="pointer-events-none video-md">
                <source src="{{ asset('assets/images/K2/animate2/242.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <h2 class="title stroke">We can use ScratchJr to create our own animated stories.</h2>
        <p class="note">Note: Have children talk about what they see and guess what the story is about (no right or
            wrong).</p>
        {{-- Video Trigger Button --}}
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/animate2/a5.png') }}" class="img-md" />
        <h2 class="title stroke">How do we get the background and character?</h2>
        <p class="note">Note: Have children point out the features that enable them to add background and character.</p>
    </div>

    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/animate2/a5.png') }}" class="img-md" />
        <h2 class="title stroke">Which command in the app allows us to animate a character?</h2>
        <p class="note">Note: Have children name and point out the Motion Blocks command.</p>
    </div>

    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video2" class="pointer-events-none video-md">
            <source src="{{ asset('assets/images/K2/animate2/243.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">How does the character move according to this programme?</h2>
        <p class="note">Note: Guide children to describe the movements in sequence and name each programming block used.
        </p>
        {{-- Video Trigger Button --}}
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video3" class="pointer-events-none video-md">
            <source src="{{ asset('assets/images/K2/animate2/244.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Why do we need this programming block in front of the
            programme? Where do you get it from?</h2>
        <p class="note">Note: Remind children that this Green Flag programming block under Triggering Blocks command
            enables the programme created for a character to start running on the stage or in the presentation mode.</p>
        {{-- Video Trigger Button --}}
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-4">
        <video id="video4" class="pointer-events-none video-md">
            <source src="{{ asset('assets/images/K2/animate2/245.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Let's look at this story!</h2>
        <p class="note">Note: Guide children to describe the movements of the character in sequence.</p>
        {{-- Video Trigger Button --}}
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video5" class="pointer-events-none video-md">
            <source src="{{ asset('assets/images/K2/animate2/246.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Make a guess, what kind of programming blocks control a
            character to move diagonally?</h2>
        <p class="note">Note: Have children verbally direct the teacher to try out every solution that they can think of
            using a tablet.</p>
        {{-- Video Trigger Button --}}
        <div onclick="toggleVideo('video5')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="flex gap-[1vw] items-center">
            <img src="{{ asset('assets/images/K2/animate2/a10.png') }}" class="img-h-sm" />
            <video id="video6" class="pointer-events-none video-sm">
                <source src="{{ asset('assets/images/K2/animate2/247.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <h2 class="title stroke">A character will move diagonally when we programme it to
            move left or right and up or down at the same time!</h2>
        <p class="note">Note: Show children how to do so with different combination of the two required programming
            blocks. Explain that the number of steps to move for both the blocks must be the same so that the character will move steadily.</p>
        {{-- Video Trigger Button --}}
        <div onclick="toggleVideo('video6')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="flex gap-[1vw] items-center">
            <img src="{{ asset('assets/images/K2/animate2/a12.png') }}" class="img-sm" />
            <video id="video7" class="pointer-events-none video-sm">
                <source src="{{ asset('assets/images/K2/animate2/248.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <h2 class="title stroke">This means that we can create more than a programme
            for a character to do several movements at the same time.</h2>
        <p class="note">Note: Encourage children to think and discuss why people create multiple programmes for a
            character.</p>
        {{-- Video Trigger Button --}}
        <div onclick="toggleVideo('video7')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="flex gap-[1vw] items-center">
            <video id="video8" class="pointer-events-none video-sm">
                <source src="{{ asset('assets/images/K2/animate2/249.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            {{-- Video Trigger Button --}}
            <div onclick="toggleVideo('video8')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
                <img src="{{ asset('assets/images/pptimages/video.png') }}" />
            </div>

            <video id="video9" class="pointer-events-none video-sm">
                <source src="{{ asset('assets/images/K2/animate2/250.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            {{-- Video Trigger Button --}}
            <div onclick="toggleVideo('video9')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
                <img src="{{ asset('assets/images/pptimages/video.png') }}" />
            </div>
        </div>
        <h2 class="title stroke">When a character is programmed to do several movements
            at the same time, we'll see different
            animation effects on the stage.</h2>
        <p class="note">Note: Encourage children to think and discuss why people create multiple programmes for a
            character.</p>
    </div>

    {{-- Slide 12 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <h2 class="title stroke !text-white">Hands-on Time 1</h2>
        <h2 class="title stroke !text-start text-[1.3vw]">Mission: <br>
            Let's programme a character to do several movements at the same time to see the
            different animation effects on the stage.</h2>
        <p class="note">Note: Divide children into groups and have them work in groups to complete the mission.</p>
    </div>

    {{-- Slide 13 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-[.5vw]">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke">
                <li>Use different programming blocks under Motion Blocks to create two programmes for a character.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/animate2/a14.png') }}" class="img-normal-md" />
        <p class="note">Note: Encourage children to explore the fun of creating different animation effects together.</p>
    </div>

    {{-- Slide 14 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="2">
                <li>Run the programmes to see what kind of animation effect you get.</li>
                <li>Repeat steps 1 and 2 to create other programmes for a character.</li>
            </ol>
        </div>
        <p class="note">Note: Encourage children to explore the fun of creating different animation effects together.</p>
    </div>

    {{-- Slide 15 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video10" class="pointer-events-none video-md">
            <source src="{{ asset('assets/images/K2/animate2/245.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Based on this sample, <br>
            can you work out the programmmes of this character?</h2>
        {{-- Video Trigger Button --}}
        <div onclick="toggleVideo('video10')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 16 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <h2 class="title stroke !text-white">Hands-on Time 2</h2>
        <h2 class="title stroke !text-start">Mission: <br>
            Use ScratchJr to work out the programmes of a character
            (as shown in the sample on the last page).</h2>
        <p class="note">Note: Encourage children to explore the fun of creating different animation effects together.</p>
    </div>

    {{-- Slide 17 --}}
    <div class="slide hidden flex flex-col justify-start">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke">
                <li>Choose the correct background.</li>
            </ol>
        </div>
        <div class="flex gap-[1vw] items-center">
            <img class="img-sm" src="{{ asset('assets/images/K2/animate2/a15.png') }}" />
            <img class="!max-w-[2.5vw]" src="{{ asset('assets/images/K2/animate2/a16.png') }}" />
            <img class="img-sm" src="{{ asset('assets/images/K2/animate2/a17.png') }}" />
        </div>
        <h2 class="title stroke">Tap, drag and place a Move Right programming block
            to the programming area.</h2>
        <p class="note">Note: Reply the <a class="text-[#f7b94a] click-btn1">video</a> if needed.</p>
    </div>

    {{-- Slide 18 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-center">
        <video id="video11" class="pointer-events-none video-md">
            <source src="{{ asset('assets/images/K2/animate2/245.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Based on this sample, <br>
            can you work out the programmmes of this character?</h2>
        {{-- Video Trigger Button --}}
        <div onclick="toggleVideo('video11')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 19 --}}
    <div class="slide hidden flex flex-col justify-start">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="2">
                <li>Move the character to a starting point.</li>
            </ol>
        </div>
        <div class="flex gap-3 items-center justify-center">
            <img class="img-sm" src="{{ asset('assets/images/K2/animate2/a15.png') }}" />
            <p class="text-[1.2vw] !text-start !text-white">How to move a character?
                Tap, drag and place it to
                the point that you want!</h2>
        </div>
        <p class="note">Note: This is the actual starting point of the character in the sample.
            To be more flexible, let children decide their own starting point.</p>
    </div>

    {{-- Slide 20 --}}
    <div class="slide hidden flex flex-col justify-start">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="3">
                <li>Work out the programmes for the character and run the programmes.</li>
            </ol>
        </div>
        <div class="flex gap-3 items-center justify-center items-end">
            <img class="img-sm" src="{{ asset('assets/images/K2/animate2/a18.png') }}" />
            <button class="click-btn2 !text-white w-[188px] h-[61px] bg-[#2D9CDB] rounded-[20px]">Sample Answer</button>
        </div>
        <p class="note">Note: Accept all similar programmes presented by children.</p>
    </div>

    {{-- Slide 21 --}}
    <div class="slide hidden click2 flex flex-col items-center justify-center">
        <video id="video12" class="pointer-events-none video-md">
            <source src="{{ asset('assets/images/K2/animate2/251.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Note: Accept all similar programmes presented by children.</h2>
        {{-- Video Trigger Button --}}
        <div onclick="toggleVideo('video12')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    <div id="buttons" class="absolute flex flex-row gap-6">
        <a id="returnButton">
            <img src="{{ asset('assets/images/pptimages/return.png') }}" />
        </a>

        <button id="homeButton">
            <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
        </button>

        <button id="closeButton">
            <img src="{{ asset('assets/images/pptimages/cancel.png') }}" />
        </button>
    </div>

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

            const whereToGoWhenReturn = "{{ route('animate2Selection') }}";
            const whereToGoWhenDone = "{{ route('k2coding') }}";

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
                if (inSpecialMode) {
                    return !hasMoreSpecialSlides(slideNumber);
                }

                for (let i = slides.length - 1; i >= 0; i--) {
                    if (!isSpecialSlide(slides[i])) {
                        return slideNumber === i;
                    }
                }

                return slideNumber === slides.length - 1;
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