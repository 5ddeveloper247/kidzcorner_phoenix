@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')
    {{-- sldie 1  --}}
    <div class=" slide t-slide flex  !text-white flex-col justify-start  text-start">
        <div>
            <h2 class="t-title ">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Invent things that help to solve problems or challenges using previously learnt knowledge</li>
                <li>Use design thinking to solve problems together with friends</li>
                <li>Learn about respect, teamwork and perseverance through the project</li>
                <li>Develop fine motor and eye-hand coordination skills</li>
                <li>Develop creativity and imagination</li>
            </ul>
        </div>

        <div class="flex flex-col  items-start justify-between">
            <h2 class="t-title ">Keywords:</h2>
            <ul class="list-disc ">
                <li>Simple Machines</li>
                <li>Coding/Programming</li>
                <li>Structures</li>
                <li>Electrical Circuits</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide t-slide flex  !text-white flex-col justify-start  text-start">
        <div>
            <ul class="list-disc ">
                <h2 class=" t-title">Preparations:</h2>
                <li>Common art and craft materials (ice cream sticks, rubber bands, different strings, ruler, coloured
                    pencils, adhesive tape, glue, scissors, etc)</li>
                <li>Recycled materials (tissue boxes, plastic bottles, empty cans, etc)</li>
                <li>Pulley and rope, toy cars, marbles, dominoes and blocks (things that children used to build simple
                    machines previously)</li>
                <li>Straws and pipe cleaners</li>
                <li>Dash the robot and a tablet</li>
                <li>mTiny set</li>
                <li>Basic circuit components (battery, battery connector, LED bulb)</li>
                <li>Suitable conducting materials (playdough, paper clips, foil, conductive tape, etc)</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- sldie 3 --}}
    <div class=" slide t-slide text-start !text-white">
        <div>
            <h2 class=" t-title">Possible iSTEAM concepts for each problem/challenge:</h2>
            <img src="{{ asset('assets/images/K2/final/f15.png') }}" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>

    {{-- sldie 4 --}}
    <div class=" slide t-slide text-start !text-white">
        <div>
            <h2 class=" t-title">Possible iSTEAM concepts for each problem/challenge:</h2>
            <img src="{{ asset('assets/images/K2/final/f16.png') }}" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>

    {{-- sldie 5 --}}
    <div class=" slide text-start text-2xl items-center !text-white">
        <div class="space-y-10">
            <h2>Note</h2>
            <ul class="list-disc">
                <h2>For the invention challenge 10, you may:</h2>
                <li>Invite children to watch the following video: <br>
                    <a href="https://www.youtube.com/watch?v=XiuU1mlFeEc"
                        class="text-[#F7B94A]">https://www.youtube.com/watch?v=XiuU1mlFeEc</a>
                </li>
                <li>Guide children to discuss and find a problem to solve</li>
            </ul>
            <ul class="list-disc">
                <h2>For the invention challenge 11, you may:</h2>
                <li>Get children to use themselves as robots while playing the game</li>
                <li>Get children to incorporate either Dash or mTiny into the game</li>
            </ul>
        </div>
        Note: <a class="click-btn1 text-[#F7B94A]">Click here</a> only if you have problem connecting to
        the webpage.
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>

    {{-- click slide  --}}
    <div class=" slide click1 text-start text-2xl items-center !text-white">
        <div class="flex flex-col items-center justify-center">
            <h2>11 Kid Inventors Break Down Their Greatest Inventions | The New Yorker <br>
                <a href="https://www.youtube.com/watch?v=Xiul/1mlFeEc" class="text-[#F7B94A]"></a>
                [https://www.youtube.com/watch?v=Xiul/1mlFeEc]
            </h2>
            <video id="video1" class="pointer-events-none">
                <source src="{{ asset('assets/images/K2/final/285.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')"
            class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
      <img src="/assets/images/pptimages/video.png" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>



    {{-- sldie 6 --}}
    <div class=" slide t-slide text-start !text-white">
        <div>
            <h2>Things to consider during hands-on session:</h2>
            <ul class="list-disc">
                <li>Guide children to use design thinking process (reference on the next page) to run the project.</li>
                <li>Let children lead the project. Encourage them to follow their natural curiosity and explore what
                    they are interested in.</li>
                <li>Encourage children to generate ideas through discussion; respect each other's views and opinions;
                    come up with solutions together as a team; tackle problems faced one at a time; cheer for each other
                    and never give up.</li>
                <li>Ask open ended questions to prompt children to share and try out their ideas. One strategy for
                    asking good questions is focusing on "what". "What" questions focus on what is happening, what you
                    are noticing and what you are doing. The answers are right in front of you and the children.
                    Focusing questions on what children have observed and noticed not only helping them develop
                    communication and observation skills, but also building their confidence by giving them questions
                    they can answer as experts. Examples of "what" questions: What did you try? What if you ...? What
                    are the ideas you have talked about that you haven't tried yet? What have you seen other people
                    trying? What do you notice about ...? What do you think will happen if ...?</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>

    {{-- slide 7 --}}
    <div class=" slide text-start text-2xl items-center !text-white">
        <div class="flex flex-col items-start justify-center">
            <h2>Design Thinking: a process for creative problem solving.</h2>
            <div class="flex items-center gap-0">
                <img src="{{ asset('assets/images/K2/final/f18.png') }}" class="w-[330px]" />
                <img src="{{ asset('assets/images/K2/final/f17.png') }}" class="w-[630px]" />
            </div>

        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>

    {{-- slide 8 --}}
    <div class="slide flex t-slide  flex-col justify-start  text-2xl text-start !text-white">
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class=" t-title">Notes:</h2>
                <ul class="list-disc leading-relaxed">
                    <li>
                        If you see
                        <span class="info-btn">
                        <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                    </span>
                        next to a picture, click on the picture to watch the video.
                    </li>
                    <li>Emphasise and use the keywords during hands-on sessions.</li>
                    <li>Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                    </li>
                    <li>
                        Click on this shortcut icon
                        <span>
                        <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" class="home-btn" />
                    </span>
                        if you need to go to some parts of the lesson quickly.
                    </li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1"
                alt="Teacher" />
        </div>
    </div>


    {{-- ========================================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button
         class="doneButton">
 <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    <div id="buttons" class="absolute  flex flex-row gap-6 z-90">

        <!-- Return Button -->
        <a id="returnButton">
 <img
    src="{{ asset('assets/images/pptimages/return.png') }}" />
        </a>

        <!-- Home Button -->
        <button class="relative w-24 h-24 button-fade-in bg-sky-500 rounded-[30px]  cursor-pointer" id="homeButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img  
                src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
        </button>

        <!-- Close Button -->
        <button  id="closeButton">
                        <img src="{{ asset('assets/images/pptimages/cancel.png') }}" />

        </button>

    </div>

    {{-- next Button --}}
    <div class="down-btn-container">

        <button class="cursor-pointer nextButton w-66 h-[75px] relative bg-[#F8A23A]  rounded-[30px] overflow-hidden">
                        <img src="{{ asset('assets/images/pptimages/return.png') }}" />

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
            const infoButtons = document.querySelectorAll("[class*='info-btn'], [class*='click-btn']");

            let currentSlide = 0;
            let parentSlideIndex = null;
            let isViewingInfoSlides = false;
            let currentInfoClass = null;

            // Pause all videos in the current slide before navigating away
            function pauseCurrentSlideVideos() {
                const currentSlideElement = slides[currentSlide];
                if (currentSlideElement) {
                    const videos = currentSlideElement.querySelectorAll("video");
                    videos.forEach(video => {
                        if (!video.paused) {
                            video.pause();
                        }
                    });
                }
            }

            function showSlide(index) {
                // Pause videos before switching slides
                pauseCurrentSlideVideos();

                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                // Update current slide index
                currentSlide = index;

                // Determine if we're on the last slide
                const isLastSlide = index === slides.length - 1;
                const isLastInfoSlide = isViewingInfoSlides && !hasNextInfoSlide(index);

                if (isLastSlide || isLastInfoSlide) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            // Check if there's another info/click slide with same class after current one
            function hasNextInfoSlide(currentIndex) {
                if (!currentInfoClass) return false;

                for (let i = currentIndex + 1; i < slides.length; i++) {
                    if (slides[i].classList.contains(currentInfoClass)) {
                        return true;
                    }
                }
                return false;
            }

            // Get info/click class from button (info-btn1 → info-slide1, click-btn1 → click1)
            function getInfoClassFromButton(button) {
                const classList = Array.from(button.classList);

                // Check for info-btn pattern
                const infoBtnClass = classList.find(cls => cls.startsWith('info-btn'));
                if (infoBtnClass) {
                    const number = infoBtnClass.replace('info-btn', '');
                    return 'info-slide' + number;
                }

                // Check for click-btn pattern
                const clickBtnClass = classList.find(cls => cls.startsWith('click-btn'));
                if (clickBtnClass) {
                    const number = clickBtnClass.replace('click-btn', '');
                    return 'click' + number;
                }

                return null;
            }

            // Check if slide is any info/click slide
            function isInfoSlide(slide) {
                return Array.from(slide.classList).some(cls =>
                    (cls.startsWith('info-slide') && cls.match(/^info-slide\d+$/)) ||
                    (cls.startsWith('click') && cls.match(/^click\d+$/))
                );
            }

            // Info/Click button handlers
            infoButtons.forEach((btn) => {
                btn.addEventListener("click", (e) => {
                    e.preventDefault();

                    parentSlideIndex = currentSlide;
                    isViewingInfoSlides = true;
                    currentInfoClass = getInfoClassFromButton(btn);

                    // Find the first slide with matching info/click class
                    for (let i = 0; i < slides.length; i++) {
                        if (slides[i].classList.contains(currentInfoClass)) {
                            showSlide(i);
                            break;
                        }
                    }
                });
            });

            // NEXT button - skip info/click slides if not viewing them
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        let nextSlide = currentSlide + 1;

                        // Skip info/click slides if not viewing them
                        while (!isViewingInfoSlides &&
                            nextSlide < slides.length &&
                            isInfoSlide(slides[nextSlide])) {
                            nextSlide++;
                        }

                        // If viewing info/click slides, only show slides with current class
                        if (isViewingInfoSlides) {
                            while (nextSlide < slides.length &&
                                !slides[nextSlide].classList.contains(currentInfoClass)) {
                                nextSlide++;
                            }
                        }

                        if (nextSlide < slides.length) {
                            showSlide(nextSlide);
                        }
                    }
                });
            });

            // Return button
            returnButton.addEventListener("click", () => {
                if (isViewingInfoSlides) {
                    // Find previous slide with same info/click class
                    let prevSlide = currentSlide - 1;

                    while (prevSlide >= 0 && !slides[prevSlide].classList.contains(currentInfoClass)) {
                        prevSlide--;
                    }

                    if (prevSlide >= 0 && slides[prevSlide].classList.contains(currentInfoClass)) {
                        showSlide(prevSlide);
                    } else {
                        // No more info/click slides, return to parent
                        isViewingInfoSlides = false;
                        currentInfoClass = null;
                        showSlide(parentSlideIndex);
                        parentSlideIndex = null;
                    }
                } else if (currentSlide > 0) {
                    let prevSlide = currentSlide - 1;

                    // Skip info/click slides when going back
                    while (prevSlide > 0 && isInfoSlide(slides[prevSlide])) {
                        prevSlide--;
                    }

                    showSlide(prevSlide);
                }
            });

            // DONE button handler
            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    if (isViewingInfoSlides && parentSlideIndex !== null) {
                        // Return to parent slide
                        isViewingInfoSlides = false;
                        currentInfoClass = null;
                        showSlide(parentSlideIndex);
                        parentSlideIndex = null;
                    } else {
                        // Navigate to route
                        window.location.href = "{{ route('k2Aerodynamics') }}";
                    }
                });
            }

            // Start with first slide
            showSlide(0);
        });
    </script>
@endpush
