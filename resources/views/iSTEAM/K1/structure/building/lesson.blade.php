@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Buildings are Structure</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/st1.png') }}" class="img-xl" />
        <h2 class="title stroke">Children, what are these?</h2>
        <p class="note text-center">Note: Guide children to share what they know about buildings and describe the look and
            shape of these buildings.</p>
    </div>



    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/st2.png') }}" class="img-xl" />
        <h2 class="title stroke">Buildings are common structures around us.</h2>
        <p class="note text-center">Note: Guide children to share what they know about buildings and describe the look and
            shape of these buildings.</p>
    </div>


    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/st2.png') }}" class="img-xl" />
        <h2 class="title stroke">Do you know how tall buildings are built?</h2>
        <p class="note text-center">Note: Have children discuss how a tall building is built and who are we involved in the
            construction process.</p>
    </div>


    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/st3.png') }}" class="img-md" />
        <h2 class="title stroke">First, <span class="!text-white">architects</span> draw a plan
            to design the look and space of a <span class="!text-white">building</span>.</h2>
    </div>



    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/st4.png') }}" class="img-lg" />
        <h2 class="title stroke">Then, engineers look through the plan to ensure that the
            design is safe and the building is strong enough for use.</h2>
    </div>



    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-1">
        <video id="video1" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/103.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Finally, construction workers construct the building
            from the ground up floor by floor.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>


    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-1">
        <video id="video12" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/104.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Finally, construction workers construct the building
            from the ground up floor by floor.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video12')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>


    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/st6.png') }}" class="img-lg" />
        <h2 class="title stroke">If you see closely, the connected beams and columns form the
            structure of a building.</h2>
    </div>


    {{-- Slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/st7.png') }}" class="img-h-md" />
        <h2 class="title stroke">This <span class="!text-white">structure</span> supports a <span
                class="text-white">building</span> to stand on its own.</h2>
    </div>



    {{-- Slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/st8.png') }}" class="img-lg" />
        <h2 class="title stroke">This structure also supports the floors with space in between.</h2>
    </div>



    {{-- Slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-1">
        <video id="video2" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/105.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">What will happen if we tear down parts of the structure
            from the ground floor of a <span class="!text-white">tall building</span>?</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>




    {{-- Slide 12 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-1">
        <video id="video3" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/105.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">When we tear down the structure of beams and columns from
            the bottom of a tall building, the building collapses.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>



    {{-- Slide 13 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="text-start title stroke">Now, can you design and build a tall building
            that can stand on its own?</h2>
    </div>


    {{-- Slide 14 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <h2 class="text-center justify-start !text-white stroke">Individual Activity 1</h2>
        <div class="text-start">
            <h2 class="title stroke">Mission:</h2>
            <ol class="title stroke" >
                <li>Use the straws and pipe cleaners to build the structure of a building as tall as you can.</li>
            </ol>
        </div>
        <p class="note text-center">Note: Give each child a set of materials (straws, pipe cleaners and scissors) to work
            on; remind them that a tall building must have space between its floors.</p>
    </div>


    {{-- Slide 15 --}}
    <div class="slide hidden flex flex-col items-center justify-start ">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="1">
                <li>Find ways to join straws together using the pipe cleaners.</li>
            </ol>
        </div>
        <video id="video4" class="video-md pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/106.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">
            Note: Have children observe the video and talk about how to do so (there are a total of 6 examples on
            different pages). Encourage them to try using the method when they start building their structures.
        </p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>


    {{-- Slide 16 --}}
    <div class="slide hidden flex flex-col items-center justify-start ">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="2">
                <li>Find ways to join straws together using the pipe cleaners.</li>
            </ol>
        </div>
        <video id="video5" class="video-md pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/107.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">
            Note: Have children observe the video and talk about how to do so (there are a total of 6 examples on
            different pages). Encourage them to try using the method when they start building their structures.
        </p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>



    {{-- Slide 17 --}}
    <div class="slide hidden flex flex-col items-center justify-start ">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="3">
                <li>Find ways to join straws together using the pipe cleaners.</li>
            </ol>
        </div>
        <video id="video6" class="video-md pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/108.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">
            Note: Have children observe the video and talk about how to do so (there are a total of 6 examples on
            different pages). Encourage them to try using the method when they start building their structures.
        </p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video6')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>



    {{-- Slide 18 --}}
    <div class="slide hidden flex flex-col items-center justify-start ">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="4">
                <li>Find ways to join straws together using the pipe cleaners.</li>
            </ol>
        </div>
        <video id="video7" class="video-md pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/109.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">
            Note: Have children observe the video and talk about how to do so (there are a total of 6 examples on
            different pages). Encourage them to try using the method when they start building their structures.
        </p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video7')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 19 --}}
    <div class="slide hidden flex flex-col items-center justify-start ">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="5">
                <li>Find ways to join straws together using the pipe cleaners.</li>
            </ol>
        </div>
        <video id="video8" class="video-md pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/110.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">
            Note: Have children observe the video and talk about how to do so (there are a total of 6 examples on
            different pages). Encourage them to try using the method when they start building their structures.
        </p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video8')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>


    {{-- Slide 20 --}}
    <div class="slide hidden flex flex-col items-center justify-start ">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="6">
                <li>Find ways to join straws together using the pipe cleaners.</li>
            </ol>
        </div>
        <video id="video9" class="video-md pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/111.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">
            Note: Have children observe the video and talk about how to do so (there are a total of 6 examples on
            different pages). Encourage them to try using the method when they start building their structures.
        </p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video9')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>


    {{-- Slide 21 --}}
    <div class="slide hidden flex flex-col items-center justify-start ">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="7">
                <li>Build the structure of a building as tall as you can.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K1/str/st16.png') }}" class="img-md" />
        <p class="note text-center">
            Note: Give children more time to explore and learn their own building techniques.
            Ask possible questions (on the next page) to trigger their ideas.</p>
    </div>


    {{-- Slide 22 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <div class="text-start">
            <h2 class="title stroke">Possible questions during hands-on session:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="1">
                <li>How do you start building the base of your building? Do you start by building shapes?</li>
                <li>How do you make sure that you can continue building up? Would it help by building a wide or narrow base?</li>
                <li>How do you make your building strong enough to stand on its own? What are the strong or weak parts of your building? How do you strengthen the weaker parts?</li>
            </ol>
        </div>
        <p class="note text-center">Note: Have children try out their ideas and share with the class.
            Pause once or twice to point out good building techniques or good building designs.</p>
    </div>


    {{-- Slide 23 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="4">
                <li>How did you build your tall building? Draw it in the learning journal.</li>
                <li>How tall is your building? Measure and record it in the learning journal.</li>
                <li>Showcase your work.</li>
            </ol>
        </div>
        <p class="note text-center">Note: After the showcase, guide children to reflect and share things they learn from
            this engineering activity (refer to the possible questions for reflection in the teacher's mode).</p>
    </div>

    {{-- Slide 24 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <h2 class="text-center justify-start !text-white stroke">Individual Activity 2</h2>
        <div class="text-start">
            <h2 class="title stroke">Mission:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="">
                <li>Think of what your tall building is going to be used for. Design and build the look of your tall building.</li>
            </ol>
        </div>
        <p class="note text-center">Note: Guide children to discuss uses of a tall building (house, office, factory, hotel,
            hospital, etc).</p>
    </div>

    {{-- Slide 25 --}}
    <div class="slide hidden flex flex-col items-center justify-start ">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="1">
                <li>What is the use of your tall building? Design the look based on its use. Draw it in the learning journal.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K1/str/st17.png') }}" class="img-lg" />
        <p class="note text-center">Note: Encourage children to design the look of their tall buildings creatively in the
            learning journal.</p>
    </div>


    {{-- Slide 26 --}}
    <div class="slide hidden flex flex-col items-center justify-start ">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="2">
                <li>Choose the wrappers based on your design idea and start building the look of your tall building.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K1/str/st18.png') }}" class="img-xl" />
        <p class="note text-center z-[99]">Note: Encourage children to try to find their own building techniques. <a
                href=""><span class="text-[#F7B94A] click-btn1">Click here</span></a> to see a way to build.</p>
    </div>

    {{-- Slide 27 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start">
        <video id="video10" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/112.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Give children more time to explore and learn their own building techniques.
            Pause once or twice to point out good building techniques.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video10')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 28 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="3">
                <li>Name and label your building.</li>
                <li>Showcase your work.</li>
            </ol>
        </div>
        <p class="note">Note: During the showcase, have children share their design ideas to the class.</p>
    </div>



    {{-- Slide 29 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center flex flex-col justify-between items-start"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>How did you build your tall building? Draw it?</p>
            <p>How tall is your building? _ _ _ _ _ _ _ _ _ cm</p>
        </div>
    </div>


    {{-- Slide 30 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center flex flex-col justify-between items-start"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>What is the use of your building? ________________________________________________ <br>
                Design the look of your tall building based on its use. Draw it.</p>
            <p>What is the name of your building?___________________________________________________</p>
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

        document.addEventListener("DOMContentLoaded", () => {
            const slides = document.querySelectorAll(".slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");
            const clickButtons = document.querySelectorAll("[class*='click-btn']");

            let currentSlide = 0;
            let parentSlideIndex = null;
            let isViewingClickSlides = false;
            let currentClickClass = null;

            const returnRouteFromFirstSlide = "{{ route('buildingsSelection') }}";

            function pauseAllVideos() {
                const videos = document.querySelectorAll('video');
                videos.forEach(video => {
                    if (!video.paused) {
                        video.pause();
                    }
                });
            }

            function showSlide(index) {
                pauseAllVideos();

                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                const isLastSlide = index === slides.length - 1;
                const isLastClickSlide = isViewingClickSlides && !hasNextClickSlide(index);

                if (isLastSlide || isLastClickSlide) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            function hasNextClickSlide(currentIndex) {
                if (!currentClickClass) return false;

                for (let i = currentIndex + 1; i < slides.length; i++) {
                    if (slides[i].classList.contains(currentClickClass)) {
                        return true;
                    }
                }
                return false;
            }

            function getClickClassFromButton(button) {
                const classList = Array.from(button.classList);
                const clickBtnClass = classList.find(cls => cls.startsWith('click-btn'));
                if (clickBtnClass) {
                    const number = clickBtnClass.replace('click-btn', '');
                    return 'click' + number;
                }
                return null;
            }

            clickButtons.forEach((btn) => {
                btn.addEventListener("click", (e) => {
                    e.preventDefault();

                    parentSlideIndex = currentSlide;
                    isViewingClickSlides = true;
                    currentClickClass = getClickClassFromButton(btn);

                    for (let i = 0; i < slides.length; i++) {
                        if (slides[i].classList.contains(currentClickClass)) {
                            currentSlide = i;
                            showSlide(currentSlide);
                            break;
                        }
                    }
                });
            });

            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;

                        while (!isViewingClickSlides &&
                            currentSlide < slides.length &&
                            isClickSlide(slides[currentSlide])) {
                            currentSlide++;
                        }

                        if (isViewingClickSlides) {
                            while (currentSlide < slides.length &&
                                !slides[currentSlide].classList.contains(currentClickClass)) {
                                currentSlide++;
                            }
                        }

                        if (currentSlide < slides.length) {
                            showSlide(currentSlide);
                        }
                    }
                });
            });

            function isClickSlide(slide) {
                return Array.from(slide.classList).some(cls => cls.startsWith('click') && cls.match(/^click\d+$/));
            }

            returnButton.addEventListener("click", () => {
                if (currentSlide === 0 && !isViewingClickSlides) {
                    window.location.href = returnRouteFromFirstSlide;
                    return;
                }

                if (isViewingClickSlides && currentSlide > 0) {
                    let prevSlide = currentSlide - 1;

                    while (prevSlide >= 0 && !slides[prevSlide].classList.contains(currentClickClass)) {
                        prevSlide--;
                    }

                    if (prevSlide >= 0 && slides[prevSlide].classList.contains(currentClickClass)) {
                        currentSlide = prevSlide;
                        showSlide(currentSlide);
                    } else {
                        currentSlide = parentSlideIndex;
                        isViewingClickSlides = false;
                        currentClickClass = null;
                        parentSlideIndex = null;
                        showSlide(currentSlide);
                    }
                } else if (currentSlide > 0) {
                    currentSlide--;

                    while (currentSlide > 0 && isClickSlide(slides[currentSlide])) {
                        currentSlide--;
                    }

                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    if (isViewingClickSlides && parentSlideIndex !== null) {
                        currentSlide = parentSlideIndex;
                        isViewingClickSlides = false;
                        currentClickClass = null;
                        parentSlideIndex = null;
                        showSlide(currentSlide);
                    } else {
                        window.location.href = "{{ route('K1structure') }}";
                    }
                });
            }

            showSlide(currentSlide);
        });
    </script>
@endpush