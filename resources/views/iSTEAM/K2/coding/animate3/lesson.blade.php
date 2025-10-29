@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="title !text-[3vw] top-title stroke absolute top-[5vh] z-[100]">Animate a Character (3)</h2>


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video1" class=" pointer-events-none video1">
            <source src="{{ asset('assets/images/K2/animate3/252.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Children, what is happening here?</h2>
        <p class="note">Note: Encourage children to answer based on their views and accept all logical answers.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center  gap-[18rem]">

        <h2 class="title stroke">Let's explore and learn how to programme <br>
            a character to have sound!</h2>
        <p class="note">Note: Use a tablet to show children the following part.</p>

    </div>


    {{-- Slide 3 --}}
    <div class="slide flex flex-col items-center justify-center  relative">
        <div class="flex  gap-3  items-center  ">
            <div class=" flex flex-col   gap-1">
                <img src="/assets/images/K2/animate1/a12.png" class="!max-w-[13vw]" />
                <img src="/assets/images/K2/animate1/a13.png" class="!max-w-[13vw]" />
            </div>
            <div class=" flex flex-col   gap-6">
                <img src="/assets/images/K2/animate1/a14.png" class="!max-w-[2.5vw]" />
                <img src="/assets/images/K2/animate1/a15.png" class="!max-w-[2.5vw]" />
            </div>
            <div class=" flex flex-col   gap-1">
                <img src="/assets/images/K2/animate1/a17.png" class="!max-w-[13vw]" />
                <img src="/assets/images/K2/animate1/a18.png" class="!max-w-[13vw]" />
            </div>
            <div>
                <img src="/assets/images/K2/animate1/a16.png" class="!max-w-[2.5vw]" class="!max-w-[5vw]" />
            </div>
            <div>
                <img class="absolute  bottom-[11rem] right-[3rem] !max-w-[2.5vw]"
                    src="/assets/images/K2/animate1/a15.png" />

            </div>
        </div>
        <h2 class="title stroke">Open the application and start a new project.</h2>

        <p class="note">Note: Have children verbally direct the teacher to do this step.</p>


    </div>

    {{-- slide 4 --}}
    <div class="slide flex flex-col items-center justify-center gap-[2rem] ">


        <img class="large-img3" src="/assets/images/K2/animate3/a2.png" />


        <h2 class="title stroke">This command is called Sound Blocks. <br>
            It allows us to design movements for a character.</h2>
        <p class="note">Note: <button class="text-amber-300 click-btn1">Click here</button> to guide children
            explore and
            understand the details and use of Sound Blocks.</p>



    </div>


    {{-- Slide 5 --}}

    {{-- click here  --}}
    <div class="slide flex click1 flex-col items-center justify-center gap-[2rem] ">
        <img class="large-img3" src="/assets/images/K2/animate3/a3.png" />
        <h2 class="title stroke">Usually, there is a Pop programming block and
            a recording tool under Sound Blocks.</h2>
        <p class="note">Note: Show the programming block and recording tool here.</p>
    </div>


    {{-- slide 6 --}}
    <div class="slide flex click1 flex-col items-center justify-center gap-[2rem] ">
        <video id="video2" class=" pointer-events-none video1">
            <source src="{{ asset('assets/images/K2/animate3/255.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">What is the use of Pop block?</h2>
        <p class="note">Note: Show children the effect of this block on the stage. Guide them to know that Pop block plays
            a "Pop" sound. Explain that if we want a character to have sound while moving, two programmes have to be
            created.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- slide 7 --}}
    <div class="slide flex click1 flex-col items-center justify-center gap-[2rem] ">
        <img src="/assets/images/K2/animate3/a5.png" />
        <h2 class="title stroke">What is the use of this recording tool?</h2>
        <p class="note">Note: Show and guide children to know that this recording tool allows us to record sounds that we
            want.
            Explain that we can record our own voice or sound from other things (toys, mobile phones, etc).</p>
    </div>


    {{-- slide 8 --}}
    <div class="slide flex click1 flex-col items-center justify-center  ">
        <div class="flex  gap-[1vw] items-center ">
            <img src="/assets/images/K2/animate3/a6.png" class="!max-w-[10vw]" />
            <video id="video3" class=" pointer-events-none video1">
                <source src="{{ asset('assets/images/K2/animate3/256.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>

        </div>

        <h2 class="title stroke">Once a sound is recorded, a programming block called Play
            Recorded Sound will appear under Sound Blocks command.</h2>
        <p class="note">Note: Show children that we can record up to five sounds for a character.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>



    {{-- Slide 16 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <div class="flex  gap-[1vw]">
            <div>
                <h2 class="title stroke">Sample 1</h2>
                <video id="video4" class=" pointer-events-none !max-w-[16vw]">
                    <source src="{{ asset('assets/images/K2/animate3/253.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video> <!-- Video Trigger Button -->
                <div onclick="toggleVideo('video4')" class="absolute top-1/2 left-[-10vw] z-30 -translate-y-1/2 video-btn">
                    <img src="/assets/images/pptimages/video.png" />
                </div>
            </div>
            <div>

                <h2 class="title stroke">Sample 2</h2>
                <video id="video5" class=" pointer-events-none !max-w-[16vw]">
                    <source src="{{ asset('assets/images/K2/animate3/254.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video> <!-- Video Trigger Button -->
                <div onclick="toggleVideo('video5')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
                    <img src="/assets/images/pptimages/video.png" />
                </div>
            </div>

        </div>

        <h2 class="title stroke">Let's compare these two samples.
            What is the main difference between these two samples?</h2>

        <p class="note">Note: Guide children to compare and talk about the difference (the design of the programme).</p>


    </div>


    {{-- Slide 17 --}}
    <div class="slide flex flex-col items-center justify-center gap-[18rem] ">




        <h2 class="title stroke">Now, let's explore and learn about the use of another
            <span class="!text-white"> command</span> in ScratchJr app!
        </h2>
        <p class="note">Note: Use tablets to show children the following part.</p>



    </div>


    {{-- Slide 18 --}}
    <div class="slide flex flex-col items-center justify-center gap-[2rem] ">


        <img class="large-img3" src="/assets/images/K2/animate3/a8.png" />


        <h2 class="title stroke">This command is called Control Blocks. <br>
            It allows us to design movements for a character.</h2>
        <p class="note">Note: <button class="text-amber-300 click-btn2">Click here</button> to guide children
            explore and
            understand the details and use of Control Blocks.</p>



    </div>


    {{-- Slide 18 --}}
    {{-- click here  --}}
    <div class="slide flex click2 flex-col items-center justify-center gap-[2rem] ">


        <img class="large-img3" src="/assets/images/K2/animate3/a9.png" />


        <h2 class="title stroke">Control Blocks has a set of programming blocks.
            Each block here is a way to plan how to run a programme.</h2>
        <p class="note">Note: Show and name each programming block here. Tell children that we'll only use
            "Wait and Repeat" blocks for now.</p>



    </div>

    {{-- Slide 18 --}}
    <div class="slide flex click2 flex-col items-center justify-center  ">
        <div class="flex  gap-[1vw]">
            <div>

                <h2 class="title stroke">Sample 1</h2>
                <video id="video3" class=" pointer-events-none">
                    <source src="{{ asset('assets/images/K1/coding/91.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <!-- Video Trigger Button -->
                <div onclick="toggleVideo('video3')"
                    class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
                    <img src="/assets/images/pptimages/video.png" />
                </div>
            </div>
            <div>

                <h2 class="title stroke">Sample 2</h2>
                <video id="video3" class=" pointer-events-none">
                    <source src="{{ asset('assets/images/K1/coding/91.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <!-- Video Trigger Button -->
                <div onclick="toggleVideo('video3')"
                    class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
                    <img src="/assets/images/pptimages/video.png" />
                </div>
            </div>

        </div>

        <h2 class="title stroke">What are the differences between these two samples?</h2>

        <p class="note">Note: Guide children to compare and talk about the differences
            (Sample 2- Wait block in the programme; it makes the character pause for a while on the stage).</p>


    </div>


    {{-- Slide 19 --}}
    <div class="slide flex click2 flex-col items-center justify-center  ">
        <div class="flex  gap-[1vw] items-center">
            <div>
                <img src="/assets/images/K2/animate3/a12.png" />
            </div>
            <div>
                <img src="/assets/images/K2/animate3/a13.png" />
            </div>

        </div>

        <h2 class="title stroke">So what is the use of Wait block?</h2>
        <p class="note">Note: Show children the effect of this block when running a programme.
            Guide them to know that Wait block makes a programme pause for a specified amount of time.</p>


    </div>




    {{-- Slide 20 --}}
    <div class="slide flex click2 flex-col items-center justify-center  ">
        <div class="flex  gap-[1vw] items-center">
            <div>
                <img src="/assets/images/K2/animate3/a14.png" />
            </div>
            <div>
                <img src="/assets/images/K2/animate3/a15.png" />
            </div>

        </div>

        <h2 class="title stroke">What is the use of Repeat block?</h2>
        <p class="note">Note: Show children the effect of this block when running a programme.
            Guide them to know that Repeat block makes the block/blocks placed inside it run for a specified number of
            times.</p>


    </div>


    {{-- Slide 21 --}}
    <div class="slide flex click2 flex-col items-center justify-center  ">
        <div class="flex  gap-[1vw] items-center">
            <div>
                <img src="/assets/images/K2/animate3/a16.png" />
            </div>
            <div>
                <img src="/assets/images/K2/animate3/a17.png" />
            </div>

        </div>

        <h2 class="title stroke">Instead of using multiple programming blocks of the same type
            to create a programme, a Repeat block makes the
            programme created look shorter and neater.</h2>



    </div>




    {{-- Slide 22 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K2/animate3/a1.png" />

        <h2 class="title stroke">Do you remember this sample? Where do you find this
            background and character from the app?</h2>
        <p class="note">Note: Have children verbally direct the teacher to find them using a tablet.</p>
    </div>


    {{-- Slide 24 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <div class="flex  gap-[1vw] items-center">
            <div>
                <img src="/assets/images/K2/animate3/a1.png" />
            </div>
            <div>
                <img src="/assets/images/K2/animate3/a18.png" />
            </div>

        </div>

        <h2 class="title stroke">Adam is trying to work out the programmes of this character
            but the work is incomplete. He knows "Wait and Repeat"
            blocks must be added to the programmes. Can you help him?</h2>



    </div>



    {{-- Slide 25 --}}
    <div class="slide flex flex-col items-center justify-center gap-[5rem] ">
        <h2 class="title stroke !text-white">Hands-on Time</h2>
        <ul class="title stroke !text-start">
            <li>Mission:
                Help Adam to work out the programmes of a character (as <br>
                shown in the sample on the last page). Help him to complete <br>
                his work by adding in "Wait and Repeat" blocks to the <br>
                programmes.</li>
        </ul>

        <p class="note">Note: Divide children into groups. Have them take turns to complete the mission.</p>
    </div>


    {{-- Slide 26 --}}
    <div class="slide flex flex-col  justify-start gap-[1rem] ">

        <div>

            <ul class="title stroke !text-start ">
                <li>Steps: <br>
                    1. Choose the correct background.</li>
            </ul>
        </div>


        <div class="flex  gap-[1vw] items-center ">

            <img src="/assets/images/K2/animate2/a15.png" class="large-img3" />
            <img class="h-[30px] w-[30px]" src="/assets/images/K2/animate2/a16.png" class="!max-w-[2.5vw]" />
            <img src="/assets/images/K2/animate2/a17.png" class="large-img3" />


        </div>


        <p class="note">Note: Reply the <a class=" title stroke" href="">video</a> if needed.</p>


    </div>

    {{-- video   --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <div class="flex  gap-[1vw] items-center">
            <div>
                <img src="/assets/images/K2/animate3/a1.png" class="large-img3" />
            </div>
            <div>
                <img src="/assets/images/K2/animate3/a19.png" class="large-img3" />
            </div>

        </div>

        <h2 class="title stroke">Adam is trying to work out the programmes of this character
            but the work is incomplete. He knows "Wait and Repeat"
            blocks must be added to the programmes. Can you help him?</h2>



    </div>


    {{-- Slide 24 --}}
    <div class="slide flex flex-col  justify-start gap-[1rem] ">

        <div>

            <ul class="title stroke !text-start ">
                <li>Steps: <br>
                    2. Delete the cat and choose the correct character.</li>
            </ul>
        </div>


        <div class="flex  gap-[1vw] items-center ">

            <img src="/assets/images/K2/animate3/a20.png" class="large-img3" />
            <img class="h-[30px] w-[30px]" src="/assets/images/K2/animate2/a16.png" class="!max-w-[2.5vw]" />
            <img src="/assets/images/K2/animate3/a21.png" class="large-img3" />


        </div>


        <p class="note">Note: Reply the <a class=" title stroke" href="">video</a> if needed.</p>


    </div>

    {{-- video   --}}

    <div class="slide flex flex-col items-center justify-center  ">
        <div class="flex  gap-[1vw] items-center">
            <div>
                <img src="/assets/images/K2/animate3/a1.png" class="large-img3" />
            </div>
            <div>
                <img src="/assets/images/K2/animate3/a19.png" class="large-img3" />
            </div>

        </div>

        <h2 class="title stroke">Adam is trying to work out the programmes of this character
            but the work is incomplete. He knows "Wait and Repeat"
            blocks must be added to the programmes. Can you help him?</h2>



    </div>


    {{-- Slide 25 --}}
    <div class="slide flex flex-col  justify-start gap-[1rem]  ">

        <div>

            <ul class="title stroke !text-start ">
                <li>Steps: <br>
                    3. Move the character to the starting point.</li>
            </ul>
        </div>


        <img src="/assets/images/K2/animate3/a22.png" class="large-img3" />





        <p class="note">Note: Verbally guide children that need help.</p>


    </div>


    {{-- Slide 27 --}}
    <div class="slide flex flex-col  justify-start gap-[1rem] ">

        <div>

            <ul class="title stroke !text-start ">
                <li>Steps: <br>
                    4. Copy the incompleted work.</li>
            </ul>
        </div>


        <div class="flex  gap-[1vw] items-center ">

            <img src="/assets/images/K2/animate3/a23.png" class="large-img3" />
            <img src="/assets/images/K2/animate3/a24.png" class="large-img3" />


        </div>


        <p class="note">Note: Have children create these 3 programmes over at the programming area.</p>


    </div>

    {{-- Slide 28 --}}
    {{-- where to add missing   --}}
    <div class="slide flex flex-col  justify-start gap-[1rem] ">

        <div>

            <ul class="title stroke !text-start ">
                <li>Steps: <br>
                    5. Add in "Wait and Repeat" blocks to make the programmes <br>
                    work.</li>
            </ul>
        </div>


        <div class="flex  gap-[1vw] items-center ">

            <img src="/assets/images/K2/animate3/a23.png" class="large-img3" />
            <img src="/assets/images/K2/animate3/a24.png" class="large-img3" />


        </div>


        <p class="note">Note: Reply the <a class=" title stroke" href="">video</a> if needed. Ask
            children: How many times does the ball bounce</p>


    </div>

    {{-- video   --}}

    <div class="slide flex flex-col items-center justify-center  ">
        <div class="flex  gap-[1vw] items-center">
            <div>
                <img src="/assets/images/K2/animate3/a1.png" class="large-img3" />
            </div>
            <div>
                <img src="/assets/images/K2/animate3/a19.png" class="large-img3" />
            </div>

        </div>

        <h2 class="title stroke">Adam is trying to work out the programmes of this character
            but the work is incomplete. He knows "Wait and Repeat"
            blocks must be added to the programmes. Can you help him?</h2>



    </div>






    {{-- Slide 29 --}}
    <div class="slide flex flex-col justify-start gap-[11rem] ">
        <div>
            <ul class="title stroke !text-start ">
                <li>Steps: <br>
                    6. Showcase your work.</li>
            </ul>
        </div>
        <div class="flex  gap-3 items-center justify-center items-end ">

            <div>
                <button class=" !text-white w-[188px] h-[61px] bg-[#2D9CDB] rounded-[20px]"> Sample Answer</button>
            </div>

        </div>
        <p class="note">Note: Give out clues if needed (Repeat block>hopping; Repeat and Wait blocks>sound).
            After the showcase, have children share what they have learnt through this problem solving process.</p>
    </div>

    {{-- sample answer --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K2/animate3/a25.png" class="large-img3" />
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

            const whereToGoWhenReturn = "{{ route('makey1Selection') }}";
            const whereToGoWhenDone = "{{ route('makey1Selection') }}";

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
