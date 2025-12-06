@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Go! Go! Go! 1</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center">
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/K1/coding/cd/cd4.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/K1/coding/cd/cd7.png') }}" class="img-sm" />
        </div>
        <h2 class="title stroke">Children, do you still remember what controls most machines around us? What is the meaning
            of <span class="!text-white">programming</span> or <span class="!text-white">coding</span>?</h2>
        <p class="note text-center">Note: Encourage children to recall and share what they have learnt.</p>
    </div>

    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/K1/coding/cd/cd4.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/K1/coding/cd/cd25.png') }}" class="img-sm" />
        </div>
        <h2 class="title stroke">
            Most machines around us are controlled by different <span class="!text-white">programmes</span>.</h2>
    </div>

    {{-- Slide3 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/coding/cd/cd5.png') }}" class="!w-[35vw]" />
        <h2 class="title stroke">A programme is a set of step-by-step instructions that tell a
            machine what to do and how to do it, somewhat like a recipe.</h2>
    </div>

    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/coding/cd/cd6.png') }}" class="img-md" />
        <h2 class="title stroke">So when a programme is turned on, a machine will do a
            specific task in a specific way by itself.</h2>
    </div>

    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/coding/cd/cd7.png') }}" class="img-md" />
        <h2 class="title stroke">When someone is creating a programme for a machine,
            it is a task called programming or coding.</h2>
    </div>

    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video1" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/coding/89.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Let's watch a video!</h2>
        <p class="note">Note: Have children follow through the lesson, sing and do actions together.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/coding/go/go2.png') }}" class="img-md" />
        <h2 class="title stroke">Why do you think we learn to sing the song and do the actions?</h2>
        <p class="note">Note: Encourage children to share based on the clues (choice of programming blocks in Blockly)</p>
    </div>

    {{-- slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/coding/go/go2.png') }}" class="img-md" />
        <h2 class="title stroke">
            <span class="!text-white">Programming</span> a <span class="!text-white">robot</span> to move is like telling
            yourself how to move, so we need to know how to move <span class="!text-white">forward</span>, <span
                class="text-white">backward</span>, turn <span class="!text-white">left</span>, and turn <span
                class="text-white">right</span> correctly.
        </h2>
    </div>

    {{-- slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video2" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/coding/90.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Let's watch another video!</h2>
        <p class="note">Note: At the end, have children recall and say how to ensure that Blockly finds the correct robot.
        </p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">We are going to learn how to programme a robot
            to move a certain distance today,
            so we'll find out what distance is!</h2>
    </div>

    {{-- sldie 11 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video3" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/coding/91.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Let's watch a video!</h2>
        <p class="note">Note: At the end, have children recap what distance is.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- slide 12 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/coding/go/g0.png') }}" class="img-md" />
        <h2 class="text-center title stroke">Distance is a length of space between two points.</h2>
        <p class="note">Note: Have children pair with a friend, each holds one end of a rope and then
            move to show long and short distances between them.</p>
    </div>

    {{-- slide 13 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video4" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/coding/92.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Now, let's see how to programme a robot
            to move a certain distance!</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- slide 14 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video5" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/coding/93.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">How do we measure a <span class="!text-white">distance</span>?</h2>
        <p class="note">Note: Encourage children to share ways to measure a distance.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- slide 15 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="flex flex-col gap-[1vw]">
            <img src="{{ asset('assets/images/K1/coding/go/go7.png') }}" class="img-lg" />
            <img src="{{ asset('assets/images/K1/coding/go/go8.png') }}" class="img-lg" />
        </div>
        <h2 class="text-center title stroke">Measuring tapes and rulers are common measuring tools.</h2>
        <p class="note text-center">Note: Have children discuss and show how to use a measuring tape for measuring
            (read the line markings on it).</p>
    </div>

    {{-- slide 16 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K1/coding/go/gl1.png') }}" class="img-lg" />
        <h2 class="title stroke">
            Both the tools have a standard unit of measurement called <span class="!text-white">centimeter</span> and <span
                class="text-white">cm</span> is the short form of <span class="!text-white">centimeter</span>.
        </h2>
    </div>

    {{-- slide 17 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K1/coding/go/gl2.png') }}" class="img-lg" />
        <h2 class="title stroke">What is this? Have you used it before? How do you use it?
            What is the unit of measurement of it?</h2>
    </div>

    {{-- slide 18 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K1/coding/go/gl2.png') }}" class="img-lg" />
        <h2 class="title stroke">A height chart allows us to measure our heights in centimeter.
            It has the standard unit of measurement like a ruler.</h2>
    </div>

    {{-- slide 19 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K1/coding/go/gl3.png') }}" class="img-xl" />
        <h2 class="title stroke">Are you aware that Blockly also has this standard unit
            of measurement in it?</h2>
    </div>

    {{-- slide 20 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K1/coding/go/gl3.png') }}" class="img-xl" />
        <h2 class="title stroke">We actually use Blockly to programme a robot to move a certain <span
                class="text-white">distance</span> in <span class="!text-white">centimeter</span> (<span
                class="text-white">cm</span>).</h2>
    </div>

    {{-- slide 21 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video6" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/coding/94.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Let's watch the last video!</h2>
        <p class="note">Note: Explain to children that a circuit means a track or path.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video6')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- sldie 22 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/coding/go/go16.png') }}" class="img-xl" />
        <h2 class="title stroke">How do you programme a robot to move forward 50cm?</h2>
        <p class="note text-center">Note: Encourage children to share based on the clues (select Drive>place programming
            block of Forward> turn on the programme so that the robot moves accordingly).</p>
    </div>

    {{-- slide 23 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/coding/go/go17.png') }}" class="img-xl" />
        <h2 class="title stroke">How do you programme a robot to move forward 90cm?</h2>
        <p class="note text-center">Note: Encourage children to share based on the clues (select Drive>place programming
            block of Forward>select
            Forward>change distance to 90cm>turn on the programme so that the robot moves accordingly).</p>
    </div>

    {{-- slide 24 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <h2 class="text-center title !text-white stroke">Hands-on Time</h2>
        <h2 class="text-start title stroke">Mission: <br>
            Let's use a measuring tape to find out the lengths of the two
            circuits. Record the results on the coding cards. After that,
            use Blockly to programme a robot to first move through circuit
            1 and then circuit 2 based on the distances measured.</h2>
        <p class="note">Note: Divide children into groups. Have them take turns to complete the mission.</p>
    </div>

    {{-- slide 25 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <div class="text-start title stroke">
                <ol class="lesson-ul list-decimal" start="1">
                    <li>Use a measuring tape to measure the length of Circuit 1
                        and record the result on the first coding card.</li>
                </ol>
            </div>
        </div>
        <img src="{{ asset('assets/images/K1/coding/go/gl16.png') }}" class="img-lg" />
        <p class="note text-center">Note: Have children help each other to complete this step; then place the card
            near the starting point of Circuit 1.</p>
    </div>

    {{-- slide 26 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <div class="text-start title stroke">
                <ol class="lesson-ul list-decimal" start="2">
                    <li>Use a measuring tape to measure the length of Circuit 2 and
                        record the result on the second coding card.</li>
                </ol>
            </div>
        </div>
        <img src="{{ asset('assets/images/K1/coding/go/gl5.png') }}" class="img-lg" />
        <p class="note text-center">Note: Have children help each other to complete this step; then place the card
            near the starting point of Circuit 2.</p>
    </div>

    {{-- slide 27 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <div class="text-start title stroke">
                <ol class="lesson-ul list-decimal" start="3">
                    <li>Turn on a robot and make sure that Blockly finds the robot.</li>
                </ol>
            </div>
        </div>
        <img src="{{ asset('assets/images/K1/coding/go/gl6.png') }}" class="img-lg" />
        <p class="note">Note: Otherwise remind children to make Blockly and the robot sync (sync based on the
            nametag on the robot).</p>
    </div>

    {{-- slide 28 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <div class="text-start title stroke">
                <ol class="lesson-ul list-decimal" start="4">
                    <li>Programme the robot to move through circuit 1.</li>
                </ol>
            </div>
        </div>
        <img src="{{ asset('assets/images/K1/coding/go/go22.png') }}" class="!w-[30vw]" />
        <p class="note">Note: Select Drive > place programming block of Forward > turn on the programme so that the
            robot moves accordingly; <a href="" class="text-[#F7B94A] click-btn1">click here</a> for visual guide.
        </p>
    </div>

    {{-- clik slides  --}}
    {{-- slide 1 --}}
    <div class="slide click1 hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/coding/go/go16.png') }}" class="img-xl" />
        <h2 class="title stroke">How do you programme a robot to move forward 50 cm?</h2>
        <p class="note text-center">Note: Encourage children to share based on the clues (Select Drive > place programming
            block of Forward > turn on the programme so that the robot moves accordingly)</p>
    </div>

    {{-- sldie 2 --}}
    <div class="slide click1 hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/coding/go/go17.png') }}" class="img-xl" />
        <h2 class="title stroke">How do you programme a robot to move forward 90cm?</h2>
        <p class="note text-center">Note: Encourage children to share based on the clues (select Drive>place programming
            block of Forward> select Forward>change distance to 90cm>turn on the programme so that the robot moves
            accordingly).</p>
    </div>

    {{-- slide 3 --}}
    <div class="slide click1 hidden flex flex-col items-center justify-between h-[28vw]">
        <h2 class="text-center title !text-white stroke">Hands-on Time</h2>
        <h2 class="text-start title stroke">Mission: <br>
            Let's use a measuring tape to find out the lengths of the two
            circuits. Record the results on the coding cards. After that,
            use Blockly to programme a robot to first move through circuit
            1 and then circuit 2 based on the distances measured.</h2>
        <p class="note">Note: Divide children into groups. Have them take turns to complete the mission.</p>
    </div>

    {{-- slide 29 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <div class="text-start title stroke">
                <ol class="lesson-ul list-decimal" start="5">
                    <li>Programme the robot to move through circuit 2.</li>
                </ol>
            </div>
        </div>
        <img src="{{ asset('assets/images/K1/coding/go/go23.png') }}" class="!w-[30vw]" />
        <p class="note">Note: Select Drive>place programming block of Forward>select Forward>change distance to 90cm>turn
            on the programme so that the robot moves accordingly; <a href=""
                class="text-[#F7B94A] click-btn2">click here</a>
            for visual guide.</p>
    </div>

    {{-- click slides  --}}
    {{-- slide 1 --}}
    <div class="slide click2 hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/coding/go/go17.png') }}" class="img-xl" />
        <h2 class="title stroke">How do you programme a robot to move forward 90cm?</h2>
        <p class="note text-center">Note: Encourage children to share based on the clues (select Drive>place programming
            block of Forward>
            select Forward>change distance to 90cm>turn on the programme so that the robot moves accordingly).</p>
    </div>

    {{-- slide 2 --}}
    <div class="slide click2 hidden flex flex-col items-center justify-between h-[28vw]">
        <h2 class="text-center title !text-white stroke">Hands-on Time</h2>
        <h2 class="text-start title stroke">Mission: <br>
            Let's use a measuring tape to find out the lengths of the two
            circuits. Record the results on the coding cards. After that,
            use Blockly to programme a robot to first move through circuit
            1 and then circuit 2 based on the distances measured.</h2>
        <p class="note">Note: Divide children into groups. Have them take turns to complete the mission.</p>
    </div>

    {{-- slide 30 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center flex  justify-between items-start"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>What can be used to measure a distance between two objects? Draw them.</p>
        </div>
    </div>

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

            const whereToGoWhenReturn = "{{ route('go1Selection') }}";
            const whereToGoWhenDone = "{{ route('coding') }}";

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
