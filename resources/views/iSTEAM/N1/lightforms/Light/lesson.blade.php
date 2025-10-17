@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <h2 class="title stroke">What do you see in this picture?</h2>
        <img src="{{ asset('assets/images/pptimages/light1.png') }}"
            class="max-w-[500px] sm:max-w-[600px] lg:max-w-[736px]" />
        <p class="note">Note: Guide children to share their answers.</p>
    </div>

    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 hidden ">
        <!-- Question -->
        <h2 class="title stroke">
            <span class="text-amber-300">Can you see the </span>
            <span class="text-white">SUN</span>
            <span class="text-amber-300">?</span>
        </h2>

        <img src="{{ asset('assets/images/pptimages/light2.png') }}"
            class=" w-[736px] outline outline-[6px] outline-offset-[-3px] outline-orange-400" />
        <div class="note">Note: Point out the sun to the children.</div>
    </div>

    {{-- Slide3 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-5">
        <!-- Question -->
        <h2 class="title stroke">
            The <span class="text-5xl text-white">sun</span>is so <span class="text-5xl text-white">Bright !</span> </br>It
            gives <span class="text-5xl text-white">light</span> during the day! </h2>
        <img class=" w-[730px]" src="{{ asset('assets/images/pptimages/light1.png') }}" alt="Light Example" />
    </div>

    {{-- Slide 4 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-5">

        <h2 class="text-2xl sm:text-3xl lg:text-5xl text-white max-w-4xl leading-snug stroke">
            The <span class="text-amber-300">sun</span> is so <span class="text-amber-300">bright!</span></br>
            It gives <span class="text-amber-300">light</span> during the day!
        </h2>
        <img class="w-[300px] sm:w-[500px] lg:w-[436px] h-auto  outline-offset-[-3px]  mb-8"
            src="{{ asset('assets/images/pptimages/sun.png') }}" />

    </div>

    {{-- Slide 5  --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-5 text-center">
        <h2 class="title stroke">What do you see in this video?</h2>
        <video id="video1" class="w-full max-w-3xl pointer-events-none">
            <source src="{{ asset('assets/images/pptimages/v1.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note">Note: Encourage children to share. Teacher to lead to sing along the song twinkle
            twinkle stars.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')"
            class="absolute top-1/2 right-[80px] z-[100] h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="{{ asset('assets/images/pptimages/Vector4.png') }}" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="{{ asset('assets/images/pptimages/play.png') }}" />
        </div>
    </div>


    {{-- slide 6 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-5">
        <h2 class="title stroke">These are
            <span class="text-white">stars</span> ! The stars give out
            <span class="text-white">light</span>
            and they shine
            <span class="text-white">brightly </span>
            at night!
        </h2>
        <img class="mb-10 h-auto w-[300px] lg:w-[736px]" src="{{ asset('assets/images/pptimages/galaxy.png') }}" />
    </div>


    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-5 text-center">
        <h2 class="text-4xl text-amber-300 sm:text-5xl lg:text-6xl stroke">Let us
            Sing!</h2>
        <img class="h-auto w-[400px] sm:w-[600px] lg:w-[534px]" src="{{ asset('assets/images/pptimages/star.png') }}" />
        <div class="text-[55px] text-white stroke">Twinkle Twinkle Little Star</div>
        <p class="note">Note: Teacher to lead the song and encourage children to sing together.</p>
    </div>



    {{-- slide 8 --}}
    <div class="slide hidden  flex flex-col items-center justify-center gap-1.5">
        <h2 class="title stroke stroke">Do you know what this is?</h2>
        <!-- Center Illustration -->
        <img class="h-auto w-[400px] sm:w-[600px] lg:w-[736px]" src="{{ asset('assets/images/pptimages/candle.png') }}" />
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>


    {{-- slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-1.5">
        <div class="title stroke">The <span class="text-white">fire</span> in the candle gives <span
                class="text-white">light</span> too!</div>
        <img class="h-auto w-[400px] sm:w-[600px] lg:w-[736px]" src="{{ asset('assets/images/pptimages/candle.png') }}" />

        <p class="note">Note: Ask children if they have seen candles on birthday cakes and what
            </br> happen when the candles are blown out.</p>
    </div>


    {{-- slide 10 --}}
    <div class="slide hidden flex flex-col items-center gap-5 ">
        <h2 class="text-center justify-start title stroke">The <span class="text-white ">sun</span>,
            <span class="text-white ">stars</span> and <span class="text-white ">fire</span> are natural sources of
            <span class="text-white ">light</span>.<span class="text-white ">Light</span> help us to see things
            around us.
        </h2>
        <img src="{{ asset('assets/images/pptimages/three1.png') }}" class="h-fit" />
        <div class="note">Note: Ask children if they have seen candles on birthday cakes and
            what </br> happen when the candles are blown out.</div>

    </div>


    {{-- slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-5">
        <h2 class="text-center justify-start title stroke">Switch
            off the <span class="text white">light</span>in the room and draw the curtains. How do you feel? Do you see
            clearly?
        </h2>
        <img class="h-auto w-[400px] sm:w-[600px] lg:w-[736px]"
            src="{{ asset('assets/images/pptimages/blacklight.png') }}" />
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>

    {{-- slide 12 --}}
    <div class="slide hidden  flex flex-col items-center justify-center gap-5">
        <h2 class="text-center justify-start title stroke">Without any <span class="text white">light</span>, the room
            would be dark and it would be hard to see things around us. </h2>
        <img class="h-auto w-[400px] sm:w-[600px] lg:w-[736px]"
            src="{{ asset('assets/images/pptimages/blacklight.png') }}" />
    </div>


    {{-- slide 13 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="text-center justify-start text-[45px] text-white stroke">CLASS ACTIVITY 1 </h2>
        <div class="flex gap-10 flex-wrap justify-center w-[90%] h-[70%]">
            <img class="w-60 h-44" src="{{ asset('assets/images/pptimages/football.png') }}" />
            <img class="w-60 h-44" src="{{ asset('assets/images/pptimages/pencil.png') }}" />
            <img class="w-60 h-44" src="{{ asset('assets/images/pptimages/books.png') }}" />
            <img class="w-60 h-44" src="{{ asset('assets/images/pptimages/torch.png') }}" />
            <img class="w-60 h-44" src="{{ asset('assets/images/pptimages/tdBear.png') }}" />
        </div>
        <h2 class="text-center title stroke">Look at these items, which items have
            light? </h2>
        <p class="note">Note: Teacher to prepare more additional items too like light stick,
            anything that creates light.</p>
    </div>


    {{-- slide 14 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="text-center justify-start text-[55px] text-white stroke">Let's do:</h2>
        <div class=" justify-start title font-normal mb-20">
            <ol class="list-decimal list-inside space-y-2 text-start stroke">
                <li>
                    Explore the items provided. Which item lights up?
                </li>
                <li>
                    Are there any other things that light up in the class?
                </li>
                <li>
                    Point them out to your friends.
                </li>
            </ol>
        </div>

        <p class="note w-[80%]">
            Note: Ensure children's safety while doing this activity. Make sure the room is not
            too dark and do not let the children shine light directly into their eyes. You may let children
            find items that light up in the class if there's any.
        </p>

    </div>


    {{-- slide 15 --}}
    <div class="slide hidden  flex flex-col items-center justify-center gap-y-3">
        <h2 class="text-center justify-start text-[45px] text-white">CLASS ACTIVITY 2</h2>

        <img class="h-auto w-[400px] sm:w-[600px] lg:w-[536px]" src="{{ asset('assets/images/pptimages/torch.png') }}" />
        <h2 class=" title stroke">The flashlight light up when it is switched on.</h2>

    </div>

    {{-- slide 16 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-3">
        <div class="flex items-center gap-x-10">
            <img class="w-[494px] h-80 border-[6px] border-orange-400"
                src="{{ asset('assets/images/pptimages/roof-light.png') }}" />
            <img class="w-[494px] h-80 border-[6px] border-orange-400"
                src="{{ asset('assets/images/pptimages/lamp.png') }}" />
        </div>

        <h2 class="text-center justify-start title stroke">The <span class="text-white ">ceiling light</span> and<span
                class="text-white ">table lamp</span> light up when they are being switched on.</h2>
        <div class="note">Note: Encourage children to point out the lights in the room.</div>
    </div>


    {{-- slide 17 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-3">
        <div class="flex items-center gap-x-10">
            <img class="w-[494px] h-80 border-[6px] border-orange-400"
                src="{{ asset('assets/images/pptimages/street.png') }}" />
            <img class="w-[494px] h-80 border-[6px] border-orange-400"
                src="{{ asset('assets/images/pptimages/car.png') }}" />
        </div>
        <h2 class="text-center justify-start stroke title">The <span class="text-white ">streetlights</span> and <span
                class="text-white "> vehicle headlights</span> help
            people to see better at night.</h2>
        <p class="note">Note: Encourage children to point out the lights they can see at night.</p>
    </div>


    {{-- slide 18 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-3">
        <img src="{{ asset('assets/images/pptimages/strlight.png') }}" />
        <h2 class="text-center justify-start title stroke">The flashlight, streetlights, table lamps are <span
                class="text-white"> man-made lights</span>. </h2>
        <h2 class="text-wrap title stroke">These items need batteries or electricity to give light.
        </h2>
    </div>


    {{-- slide 19 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-3">
        <h2 class="text-center justify-start text-[53px] text-white stroke">CLASS ACTIVITY 2</h2>
        <div class="flex gap-10 flex-wrap justify-center w-[80%] h-[70%]">
            <img class="w-[31rem] h-auto" src="{{ asset('assets/images/pptimages/dedective.png') }}" />
        </div>
        <h2 class="text-center justify-start title stroke"> What kind of lights are there around us?</h2>
        <p class="note">Note: Teacher to prepare camera to capture children looking for different
            light sources.</p>

    </div>

    {{-- slide 20  --}}
    <div class="slide hidden flex flex-col items-center justify-start ">
        <h2 class="justify-start text-center text-[55px] text-white stroke">Let's do:</h2>

        <div class="justify-start title px-5 mb-20">
            <ol class="stroke list-inside list-decimal space-y-2 text-start">
                <li>Take a walk around the school or outdoors.</li>
                <li>Identify all the light sources.</li>
                <li>Take photos and discuss as a class why is light needed on that place.</li>
            </ol>
        </div>

        <p class="note">Note: Look out for light sources and take photos using the ipad for
            the discussion in class. Challenge children to think of reasons why a light source is placed in that area. E.g.
            park, to light up the path at night.</p>
    </div>


    {{-- slide 21  --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-5">

        <h2 class="text-center title stroke">The <span class="text-white">sun</span>,<span
                class="text-white">stars</span> and <span class="text-white">fire</span> are natural light
        </h2>
        <img src="{{ asset('assets/images/pptimages/three1.png') }}" />
        <p class="note text-center text-xl text-white leading-snug max-w-2xl">Note: Ask children if they have seen candles
            on birthday cakes
            and what happens when the candles are blown out.</p>
    </div>


    {{-- sldie 22 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-3">
        <img src="{{ asset('assets/images/pptimages/strlight.png') }}" />

        <h2 class="w-[80%] justify-start text-center title stroke ">The flashlight, streetlights, table lamps are <span
                class="text-white"> man-made lights</span>.</h2>

    </div>

    {{-- Buttons --}}
    <div class="absolute bottom-[85px]">
        <button class="cursor-pointer doneButton w-66 h-[75px] relative bg-[#F8A23A] rounded-[30px] overflow-hidden">
            <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
            <div class="absolute left-[8.22px] top-[3.17px] "> <img
                    src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            </div>
            <span
                class="absolute left-[80px] top-[18px] flex items-center  text-white text-5xl font-bold stroke">DONE</span>
        </button>
    </div>

    <div id="buttons" class="absolute top-[30px] right-[60px] flex flex-row gap-6 z-40">
        <!-- Return Button -->
        <a class="relative w-24 h-24 button-fade-in bg-slate-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-teal-800 cursor-pointer"
            id="returnButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] w-14 h-14"
                src="{{ asset('assets/images/pptimages/reverse-icon.png') }}" />
        </a>

        <!-- Home Button -->
        <button
            class="relative w-24 h-24 button-fade-in bg-sky-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-teal-800 cursor-pointer"
            id="homeButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] w-14 h-14"
                src="{{ asset('assets/images/pptimages/home-icon.png') }}" />
        </button>

        <!-- Close Button -->
        <button class="relative w-24 h-24 button-fade-in cursor-pointer" id="closeButton">
            <div
                class="absolute inset-0 bg-red-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-red-900">
            </div>
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <div id="closeButtonText"
                class="absolute top-[16px] left-[30px] w-11 h-16 text-white text-6xl font-normal font-['Jua']">X
            </div>
        </button>

    </div>

    {{-- next Button --}}
    <div class="absolute bottom-[85px]">
        <button
            class="cursor-pointer nextButton w-66 h-[75px] relative bg-[#F8A23A]  rounded-[30px]  shadow-[3px_4px_7.8px_0px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_0px_rgba(0,0,0,0.25)] 
        outline outline-1 outline-yellow-700 overflow-hidden">
            <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
            <div class="absolute left-[8.22px] top-[3.17px] "> <img
                    src="{{ asset('assets/images/pptimages/Vector4.png') }}" /> </div>
            <span class="absolute left-[80px] top-[18px] flex items-center  text-white text-5xl font-bold stroke">NEXT
            </span>
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
                        window.location.href = "{{ route('n1lightchoose') }}";
                    }
                });
            }

            // Start with first slide
            showSlide(0);
        });
    </script>
@endpush
