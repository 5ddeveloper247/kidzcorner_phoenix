@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Animate a Character (2)</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <div class="flex gap-[1vw]  items-center">
            <img class="!max-w-[19vw]" src="/assets/images/K2/animate2/a1.png" />
            <img class="!max-w-[19vw]" src="/assets/images/K2/animate2/a2.png" />
        </div>
        <h2 class="title stroke">Children, what is the name of this app? <br>x
            What can you use it for?</h2>
    </div>



    {{-- Slide 2 --}}

    <div class="slide flex flex-col items-center justify-center  ">


        <div class="flex gap-[1vw]  items-center">

            <img src="/assets/images/K2/animate2/a3.png" class="!max-h-[17vh]" />
            <img src="/assets/images/K2/animate2/a4.png" class="!max-w-[19vw]" />
        </div>
        <h2 class="title stroke">We can use ScratchJr to create our own animated stories.</h2>
        <p class="note">Note: Have children talk about what they see and guess what the story is about (no right or
            wrong).</p>
    </div>



    {{-- Slide 3 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K2/animate2/a5.png" />
        <h2 class="title stroke">How do we get the background and character?</h2>

        <p class="note">Note: Have children point out the features that enable them to add background and character.</p>
    </div>

    {{-- slide 4 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K2/animate2/a5.png" class="w-img" />
        <h2 class="title stroke">Which command in the app allows us to animate a character?</h2>

        <p class="note">Note: Have children name and point out the Motion Blocks command.</p>
    </div>


    {{-- Slide 5 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K2/animate2/a6.png" class="w-img" />
        <h2 class="title stroke">How does the character move according to this programme?</h2>

        <p class="note">Note: Guide children to describe the movements in sequence and name each programming block used.
        </p>
    </div>


    {{-- slide 6 --}}


    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K2/animate2/a7.png" class="w-img" />
        <h2 class="title stroke">Why do we need this programming block in front of the
            programme? Where do you get it from?</h2>

        <p class="note">Note: Remind children that this Green Flag programming block under Triggering Blocks command
            enables the
            programme created for a character to start running on the stage or in the presentation mode.</p>
    </div>



    {{-- slide 7 --}}
    <div class="slide flex flex-col items-center justify-center gap-4 ">
        <img src="/assets/images/K2/animate2/a8.png" class="w-img" />
        <h2 class="title stroke">Let's look at this story!</h2>

        <p class="note">Note: Guide children to describe the movements of the character in sequence.</p>
    </div>

    {{-- slide 8 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K2/animate2/a9.png" class="w-img" />
        <h2 class="title stroke">Make a guess, what kind of programming blocks control a <br>
            character to move diagonally?</h2>

        <p class="note">Note: Have children verbally direct the teacher to try out every solution that they can think of
            using a tablet.</p>
    </div>


    {{-- Slide 16 --}}
    <div class="slide flex flex-col items-center justify-center  ">


        <div class="flex gap-[1vw]  items-center">

            <img src="/assets/images/K2/animate2/a10.png" class="!max-w-[13vw]" />
            <img src="/assets/images/K2/animate2/a11.png" class="!max-w-[19vw]" />
        </div>
        <h2 class="title stroke">A character will move diagonally when we programme it to
            move left or right and up or down at the same time!</h2>
        <p class="note">Note: Show children how to do so with different combination of the two required programming
            blocks. Explain that the
            number of steps to move for both the blocks must be the same so that the character will move steadily.</p>
    </div>


    {{-- Slide 17 --}}
    <div class="slide flex flex-col items-center justify-center  ">


        <div class="flex gap-[1vw]  items-center">

            <img src="/assets/images/K2/animate2/a12.png" class="!max-w-[19vw]" />
            <img src="/assets/images/K2/animate2/a13.png" class="!max-w-[19vw]" />
        </div>
        <h2 class="title stroke">This means that we can create more than a programme
            for a character to do several movements at the same time.</h2>
        <p class="note">Note: Encourage children to think and discuss why people create multiple programmes for a
            character.</p>
    </div>


    {{-- Slide 18 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <div class="flex gap-[1vw]  items-center">
            <img src="/assets/images/K2/animate2/a13.png" class="!max-w-[19vw]" />
            <img src="/assets/images/K2/animate2/a13.png" class="!max-w-[19vw]" />
        </div>
        <h2 class="title stroke">When a character is programmed to do several movements
            at the same time, we'll see different <br>
            animation effects on the stage.</h2>
        <p class="note">Note: Encourage children to think and discuss why people create multiple programmes for a
            character.</p>
    </div>


    {{-- Slide 18 --}}
    <div class="slide flex flex-col items-center justify-between h-[45vh] ">
        <h2 class="title stroke !text-white">Hands-on Time 1</h2>
        <div>
            <ul class="title stroke !text-start text-[1.3vw]">
                <li>Mission: <br> Let's programme a character to do several movements at the <br>same time to see the
                    different animation effects on the stage.</li>

            </ul>
        </div>
        <p class="note">Note: Divide children into groups and have them work in groups to complete the mission.</p>
    </div>


    {{-- Slide 19 --}}
    <div class="slide flex flex-col items-center justify-center gap-[.5vw]">
        <div>
            <ul class="title stroke !text-start">
                <li>Steps: <br>
                    1. Use different programming blocks under Motion Blocks to <br>
                    create two programmes for a character.</li>
            </ul>
        </div>
        <img src="/assets/images/K2/animate2/a14.png" class="w-img" />
        <p class="note">Note: Encourage children to explore the fun of creating different animation effects together.</p>
    </div>


    {{-- Slide 19 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <div>
            <ul class="title stroke !text-start">
                <li>Steps: <br> 2. Run the programmes to see what kind of animation effect <br> you get. <br> 3. Repeat
                    steps 1 and 2 to create other programmes for a <br> character.</li>
            </ul>
        </div>
        <p class="note">Note: Encourage children to explore the fun of creating different animation effects together.</p>
    </div>



    {{-- Slide 20 --}}

    {{-- video  --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K2/animate2/a8.png" class="w-img" />
        <h2 class="title stroke">Based on this sample, <br>
            can you work out the programmmes of this character?</h2>
    </div>


    {{-- Slide 21 --}}
    <div class="slide flex flex-col items-center justify-center gap-[10rem]">
        <h2 class="title stroke !text-white">Hands-on Time 2</h2>

        <div>
            <ul class="title stroke !text-start">
                <li>Mission: <br>
                    Use ScratchJr to work out the programmes of a character <br>
                    (as shown in the sample on the last page).</li>
            </ul>
        </div>
        <p class="note">Note: Encourage children to explore the fun of creating different animation effects together.</p>
    </div>



    {{-- Slide 22 --}}
    <div class="slide flex flex-col  justify-start  ">
        <div>
            <ul class="title stroke !text-start">
                <li>Steps: <br>
                    1. Choose the correct background.</li>
            </ul>
        </div>
        <div class="flex  gap-[1vw] items-center ">

            <img class="!max-w-[13vw]" src="/assets/images/K2/animate2/a15.png" />
            <img class="!max-w-[2.5vw]" src="/assets/images/K2/animate2/a16.png" />
            <img class="!max-w-[13vw]" src="/assets/images/K2/animate2/a17.png" />
        </div>

        <h2 class="title stroke">Tap, drag and place a Move Right programming block <br>
            to the programming area.</h2>
        <p class="note">Note: Reply the <a class="title stroke" href="">video</a> if needed.</p>
    </div>


    {{-- Slide 24 --}}
    <div class="slide flex flex-col justify-start  ">
        <div>
            <ul class="title stroke !text-start">
                <li>Steps: <br>
                    2. Move the character to a starting point.</li>
            </ul>
        </div>
        <div class="flex  gap-3 items-center justify-center ">
            <div>
                <img class="!max-w-[13vw]" src="/assets/images/K2/animate2/a15.png" />
            </div>
            <div>
                <ul class=" title stroke !text-start !text-white">
                    <li>How to move a character? <br>
                        Tap, drag and place it to <br>
                        the point that you want!</li>
                </ul>
            </div>
        </div>
        <p class="note">Note: This is the actual starting point of the character in the sample.
            To be more flexible, let children decide their own starting point.</p>
    </div>


    {{-- Slide 25 --}}
    <div class="slide flex flex-col justify-start  ">
        <div>
            <ul class="title stroke !text-start">
                <li>Steps: <br>
                    3. Work out the programmes for the character and run the
                    programmes.</li>
            </ul>
        </div>
        <div class="flex  gap-3 items-center justify-center items-end ">
            <div>
                <img class="!max-w-[13vw]" src="/assets/images/K2/animate2/a18.png" />
            </div>
            <div>
                <button class="click-btn1 !text-white w-[188px] h-[61px] bg-[#2D9CDB] rounded-[20px]"> Sample
                    Answer</button>
            </div>
        </div>
        <p class="note">Note: Accept all similar programmes presented by children.</p>
    </div>


    {{-- Slide 26 --}}
    <div class="slide flex flex-col items-center justify-center click1    ">
        <img src="/assets/images/K2/animate2/a19.png" />
        <h2 class="title stroke">Note: Accept all similar programmes presented by children.</h2>
    </div>





    {{-- ====================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>


    <div id="buttons" class="absolute  flex flex-row gap-6 ">

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

            const whereToGoWhenReturn = "{{ route('animate2Selection') }}";
            const whereToGoWhenDone = "{{ route('animate2Selection') }}";

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
                // If in special mode, check if there are more special slides
                if (inSpecialMode) {
                    return !hasMoreSpecialSlides(slideNumber);
                }

                // If not in special mode, check if this is the actual last slide
                // We need to find the last non-special slide
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
