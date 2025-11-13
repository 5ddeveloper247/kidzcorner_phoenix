@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Go! Go! Go! 2</h2>


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-between h-[30vh] ">
        <h2 class="title stroke">
            Children, do you remember what <span class="!text-white">distance</span> is? What is a <span
                class="text-white">circuit</span>?</h2>
        <p class="note">Note: Encourage children to recall and share what they have learnt.</p>
    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col justify-center items-center ">
        <img src="/assets/images/K1/coding/go/g0.png" />
        <h2 class="title stroke text-center">Distance is a length of space between two points.</h2>
        <p class="note">Note: Have children use 2 things in the class to show long and short distances.</p>
    </div>


    {{-- Slide3 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/coding/go/G1.png" />
        <h2 class="title stroke">A <span class="!text-white">circuit</span> is a track or path. <br>
            It can be straight, curved or in any shape.</h2>
    </div>


    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-between h-[30vh] ">
        <h2 class=" title stroke">Do you remember how to programme a robot
            to move through a straight circuit?</h2>
        <p class="note">Note: Invite children to sing “Hokey Pokey’ song and do actions together.</p>
    </div>


    {{-- Slide 5  --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <video id="video1" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/coding/95.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class=" title stroke">Let’s watch a video!</h2>
        <p class="note">Note: At the end, have children recap the steps involved to programmed a robot to move
            forward 50cm and 90cm.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/coding/go/go16.png" />
        <h2 class=" title stroke">This is how we programme a robot to move through
            a 50cm straight circuit.</h2>
        <p class="note">Note: Select Drive>place programming block of Forward>turn on the programme so that
            the robot moves accordingly.</p>
    </div>


    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/coding/go/go17.png" />
        <h2 class=" title stroke">This is how we programme a robot to move through 90cm
            straight circuit.</h2>
        <p class="note">Note: Select Drive>place programming block of Forward>select Forward> Change distance to 90cm>
            turn on the programme so that the robot moves accordingly.</p>
    </div>


    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <h2 class=" title stroke">Now, we are going to learn how to programme a robot
            to move through a circuit that needs a turn.</h2>
    </div>




    {{-- slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <video id="video2" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/coding/96.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class=" title stroke">Let’s watch a video!</h2>
        <p class="note">Note: Have children follow through the lesson.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/coding/go/go28.png" />
        <h2 class=" title stroke">How does the robot move through this L-shaped circuit?</h2>
        <p class="note">Note: Encourage children to share based on the clues provided (the arrows).</p>
    </div>


    {{-- slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/coding/go/go28.png" />
        <h2 class="title stroke"> It will move <span class="!text-white">forward</span> 50cm, <span class="!text-white">turn
                left</span> and move <span class="!text-white">forward</span> another 50cm.
        </h2>
    </div>


    {{-- slide 12 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/coding/go/go29.png" />
        <h2 class="title stroke"> It will move forward 50cm, turn left and move
            forward another 50cm.</h2>
        <p class="note">Note: Encourage children to share based on the clues provided (the coding cards).</p>
    </div>


    {{-- slide 13 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/coding/go/go30.png" />
        <h2 class="title stroke">Note: Encourage children to share based on the clues provided (the coding cards).</h2>
        <p class="note">Note: Select Drive>place programming block of Forward>select Drive>place programming block of
            Turn Left>select Drive>place programming block of Forward>turn on the programme so
            that the robot moves accordingly.</p>
    </div>



    {{-- slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[45vh]">
        <h2 class="text-center justify-start text-[45px] !text-white stroke">Hands-on Time 1</h2>
        <h2 class="text-start title stroke">Mission: <br>
            Use Blockly to programme a robot to move through a L-shaped circuit.</h2>
        <p class="note">Note: Divide children into groups. Have them take turns to complete the mission.</p>
    </div>




    {{-- slide 11 --}}
    <div class="slide hidden  flex flex-col items-center justify-start   ">
        <div class="title stroke text-start self-start">
            <h2>Steps:</h2>
            <ul class="lesson-ul list-decimal">
                <li>Use coding cards to lay out the steps needed for a
                    robot to move through this circuit.</li>
            </ul>
        </div>
        <div class="flex gap-[1vw] items-center">
            <img src="/assets/images/K1/coding/go/go28.png" class="w-img" />
            <img src="/assets/images/K1/coding/go/go31.png" class="h-[15vh]" />
        </div>
        <p class="note text-center">Note: Guide children individually if needed.</p>
    </div>



    {{-- slide 12 --}}
    <div class="slide hidden  flex flex-col items-center justify-start">
        <div class="title stroke text-start self-start">
            <h2>Steps:</h2>
            <ul class="lesson-ul">
                <li>2. Turn on a robot and make sure that Blockly finds the robot.</li>
            </ul>
        </div>
        <img src="/assets/images/K1/coding/go/go32.png" />
        <p class="note text-center">Note: Otherwise remind children to make Blockly and the robot in sync
            (sync based on the nametag on the robot)</p>
    </div>

    {{-- slide 13 --}}
    <div class="slide hidden  flex flex-col items-center justify-start">
        <div class="title stroke text-start self-start">
            <h2>Steps:</h2>
            <ul class="lessosn-ul">
                <li>3. Programme the robot to move through this circuit.</li>
            </ul>
        </div>
        <div class="flex gap-[1vw] items-start">
            <img src="/assets/images/K1/coding/go/go28.png" class="w-img" />
            <div class="flex flex-col items-end ">
                <img src="/assets/images/K1/coding/go/go31.png" class="h-[15vh]" />
                <a class="click-btn1 w-[12vw] cursor-pointer bg-sky-500 rounded-[30px] p-[1.5vw] z-[99] !text-white">Visual
                    Guide</a>
            </div>
        </div>
        <p class="note text-center">Note: Select Drive>place programming block of Forward>select Drive>place programming
            block of Turn Left>select Drive>place programming block of Forward>turn on the
            programme so that the robot moves accordingly.</p>
    </div>

    {{-- click slide --}}
    <div class="slide hidden click1  flex flex-col items-center justify-start">
        <img src="/assets/images/K1/coding/go/go33.png" />
        <p class="note text-center">Note: Select Drive>place programming block of Forward>select Drive>place programming
            block of
            Turn Left>select Drive>place programming block of Forward>turn on the
            programme so that the robot moves accordingly.</p>
    </div>


    {{-- slide 14 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <video id="video3" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/coding/97.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class=" title stroke">Let’s watch another video!</h2>
        <p class="note">Note: Have children follow through the lesson.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 15 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[50vh]">
        <h2 class="text-center justify-start text-[45px] !text-white stroke">Hands-on Time 2</h2>
        <h2 class="text-start title stroke">Mission: <br>
            Choose a circuit. How does a robot move through this circuit?
            Use coding cards to lay out the steps. Use Blockly to
            programme the robot to move through the circuit.</h2>
        <p class="note">Note: Divide children into groups. Have them take turns to complete the mission.</p>
    </div>




    {{-- slide 16 --}}
    <div class="slide hidden  flex flex-col items-center justify-start   ">
        <div class="title stroke text-start self-start">
            <h2>Steps:</h2>
            <ul>
                <li>1. Choose a circuit.</li>
            </ul>
        </div>
        <img src="/assets/images/K1/coding/go/go35.png" class="w-[30vw]" />
        <p class="note text-center">Note: Guide children individually if needed.</p>
    </div>


    {{-- slide 17 --}}
    <div class="slide hidden  flex flex-col items-center justify-start   ">
        <div class="title stroke text-start self-start">
            <h2>Steps:</h2>
            <ul>
                <li>2. Use coding cards to lay out the steps needed for a
                    robot to move through it.</li>
            </ul>
        </div>
        <img src="/assets/images/K1/coding/go/go36.png" />
        <p class="note text-center">Note: Guide children individually if needed.</p>
    </div>


    {{-- slide 18 --}}
    <div class="slide hidden  flex flex-col items-center justify-start   ">
        <div class="title stroke text-start self-start">
            <h2>Steps:</h2>
            <ul>
                <li>3. Turn on a robot and make sure that Blockly finds the robot.</li>
            </ul>
        </div>
        <img src="/assets/images/K1/coding/go/go32.png" />
        <p class="note text-center">Note: Otherwise remind children to make Blockly and the robot in sync
            (sync based on the nametag on the robot)</p>
    </div>


    {{-- slide 19 --}}
    <div class="slide hidden  flex flex-col items-center justify-start   ">
        <div class="title stroke text-start self-start">
            <h2>Steps:</h2>
            <ul>
                <li>4. Programme the robot to move through the circuit./li>
            </ul>
        </div>
        <img src="/assets/images/K1/coding/go/go35.png" />
        <p class="note text-center">Note: Repeat the steps so that all children will be able to programme all 3 circuits.
        </p>
    </div>


    {{-- slide 20 --}}
    <div class="slide  hidden flex flex-col items-center justify-center ">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center flex flex-col items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="/assets/images/K1/coding/go/go37.png" />

        </div>
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

        <button class="nextButton ">
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

            const whereToGoWhenReturn = "{{ route('go2Selection') }}";
            const whereToGoWhenDone = "{{ route('go2Selection') }}";

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
