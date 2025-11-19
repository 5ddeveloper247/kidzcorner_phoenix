@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Umbrellas</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/um1.png') }}" class="img-h-md" />
        <h2 class="title stroke">Children, this is another type of structure.
            What is it called? What do we use it for?</h2>
    </div>



    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/K1/str/gl6.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/K1/str/um2.png') }}" class="img-h-sm" />
        </div>
        <h2 class="title stroke">An umbrella is a folding canopy designed
            to protect us from the rain or sunlight.</h2>
    </div>


    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/um3.png') }}" class="img-xl" />
        <h2 class="title stroke">If you look closely, the canopy of an umbrella is supported by
            a structure formed by the connected parts.</h2>
        <p class="note">Note: Display an umbrella. Have children point out the shaft, ribs and stretches of the umbrella.
        </p>
    </div>


    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">Now, let's learn how to build an umbrella!</h2>
    </div>


    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <h2 class="text-center justify-start text-[45px] !text-white stroke">Small Group Activity 1</h2>
        <div class="text-start">
            <h2 class="title stroke">Mission:</h2>
            <ol class="title stroke">
                <li>Use the straws and pipe cleaners to build the structure of an umbrella.</li>
            </ol>
        </div>
        <p class="note text-center">Note: Display a premade sample of the structure of an umbrella.</p>
    </div>



    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="1">
                <li>Observe the structure of this umbrella and count how many ribs and stretchers there are.</li>
            </ol>
        </div>
        <video id="video1" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/136.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Guide children to count number of ribs and stretchers in this umbrella.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>




    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="2">
                <li>Learn how to build the structure of an umbrella.</li>
            </ol>
        </div>
        <video id="video2" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/136.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Give each group a set of materials to work on. <a href=""
                class="text-[#F7B94A] click-btn1">Click here</a> to follow the step-by-step guide.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>


    {{-- Slide 8 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start">
        <h2 class="text-center title stroke">How to make the structure of an umbrella? - Step 1 of 9</h2>
        <video id="video3" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/137.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all the sub-steps. Then have them work together in groups to complete the sub-steps.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 9 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start">
        <h2 class="text-center title stroke">How to make the structure of an umbrella? - Step 2 of 9</h2>
        <video id="video4" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/138.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all the sub-steps. Then have them work together in groups to complete the sub-steps.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 10 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start">
        <h2 class="text-center title stroke">How to make the structure of an umbrella? - Step 3 of 9</h2>
        <div class="flex items-center">
            <video id="video5" class="pointer-events-none">
                <source src="{{ asset('assets/images/K1/str/137.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <p class="w-[2vw]">Repeat the step 1</p>
        </div>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all the sub-steps. Then have them work together in groups to complete the sub-steps.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 11 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start">
        <h2 class="text-center title stroke">How to make the structure of an umbrella? - Step 4 of 9</h2>
        <video id="video6" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/139.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all the sub-steps. Then have them work together in groups to complete the sub-steps.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video6')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 12 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start">
        <h2 class="text-center title stroke">How to make the structure of an umbrella? - Step 5 of 9</h2>
        <video id="video7" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/140.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all the sub-steps. Then have them work together in groups to complete the sub-steps.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video7')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 13 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start">
        <h2 class="text-center title stroke">How to make the structure of an umbrella? - Step 6 of 9</h2>
        <div class="flex items-center">
            <video id="video8" class="pointer-events-none">
                <source src="{{ asset('assets/images/K1/str/141.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <p class="note w-[3vw]">Do the same for the other 4 parts!</p>
        </div>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all the sub-steps. Then have them work together in groups to complete the sub-steps.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video8')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 14 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start">
        <h2 class="text-center title stroke">How to make the structure of an umbrella? - Step 7 of 9</h2>
        <video id="video9" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/142.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all the sub-steps. Then have them work together in groups to complete the sub-steps.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video9')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>


    {{-- Slide 15 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start">
        <h2 class="text-center title stroke">How to make the structure of an umbrella? - Step 8 of 9</h2>
        <video id="video10" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/143.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all the sub-steps. Then have them work together in groups to complete the sub-steps.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video10')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>


    {{-- Slide 16 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start">
        <h2 class="text-center title stroke">How to make the structure of an umbrella? - Step 9 of 9</h2>
        <div class="flex items-center">
            <video id="video11" class="pointer-events-none">
                <source src="{{ asset('assets/images/K1/str/144.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <p class="note w-[3vw]">Do the same for the other 4 parts!</p>
        </div>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all the sub-steps. Then have them work together in groups to complete the sub-steps.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video11')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>




    {{-- Slide 17 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="3">
                <li>Showcase your work.</li>
            </ol>
        </div>
        <video id="video12" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/136.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: After the showcase, guide children to reflect and share things they learn from
            this engineering activity (refer to the possible questions for reflection in the teacher's mode).</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video12')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>




    {{-- Slide 18 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/um14.png') }}" class="img-xl" />
        <h2 class="title stroke">Nowadays, umbrellas come in all sorts of prints and designs.
            Which one do you think is the prettiest?</h2>
    </div>



    {{-- Slide 19 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <h2 class="text-center justify-start text-[45px] !text-white stroke">Small Group Activity 2</h2>
        <div class="text-start">
            <h2 class="title stroke">Mission:</h2>
            <ol class="title stroke">
                <li>Design and build the canopy of your umbrella.</li>
            </ol>
        </div>
    </div>

    {{-- Slide 20 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="1">
                <li>What design would you like to have on your umbrella's canopy? Draw it in the learning journal.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K1/str/um15.png') }}" class="img-h-sm" />
        <p class="note text-center">Note: Encourage children to design the look of their umbrellas creatively in the
            learning journal.</p>
    </div>



    {{-- Slide 21 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="2">
                <li>Choose the wrappers based on your design idea and start building the canopy of your umbrella.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K1/str/st18.png') }}" class="img-xl" />
        <p class="note text-center z-[99]">Note: Encourage children try to find their own building techniques. <a
                href="" class="text-[#F7B94A] click-btn2">Click Here</a> to see a way to build.</p>
    </div>

    {{-- Slide 22 --}}
    <div class="slide hidden click2 flex flex-col items-center justify-start">
        <video id="video13" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/145.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Give children more times to explore and learn their own building techniques.
            Pause the class for once or twice to point out good building techniques.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video13')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>




    {{-- Slide 23 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="3">
                <li>Showcase your work.</li>
            </ol>
        </div>
        <p class="note text-center">Note: During the showcase, have children share their design ideas to the class.</p>
    </div>


    {{-- Slide 24 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center flex flex-col justify-center items-start"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('assets/images/K1/str/um17.png') }}" />
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

            const whereToGoWhenReturn = "{{ route('umbrellaSelection') }}";
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
