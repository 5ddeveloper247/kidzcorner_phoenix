@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e1.png') }}" />
        <div class="title stroke">
            <h2>Children, what are these? What are they for?</h2>
        </div>
        <p class="note">Note: Have children share their prior knowledge.</p>
    </div>


    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e1.png') }}" />
        <h2 class="title stroke">Ovens, refrigerators, washing machines and vacuum cleaners
            are machines that help us do work.</h2>
    </div>


    {{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center gap-y-4 ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e1.png') }}" />
        <h2 class="title stroke text-center">What do they need in common?</h2>
        <p class="note">Note: Encourage children to boldly share their views.</p>
    </div>

    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e1.png') }}" />
        <h2 class="title stroke text-center">These machines need the power of electricity to do work.</h2>
        <p class="note">Note: Have children share what they know about the power of electricity.</p>
    </div>


    {{-- Slide 5 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e1.png') }}" />
        <h2 class="title stroke">Where do these machines get electricity from?</h2>
        <p class="note">Note: Have children recall and say how to put these machines to work.</p>
    </div>


    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center ">
        <div class="flex gap-3 items-end">
            <img src="{{ asset('assets/images/K2/circuit/ecity/e1.png') }}" />
            <img src="{{ asset('assets/images/K2/circuit/ecity/e2.png') }}" class="h-[120px]" />
        </div>
        <h2 class="title stroke">Most machines get electricity when its plug is inserted into
            a socket and the switch is turned on.</h2>
        <p class="note">Note: A socket is a common power source . Most sockets are fixed on the wall.</p>
    </div>



    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center gap-3 ">
        <video id="video1" class="w-full max-w-[42rem] pointer-events-none">
            <source src="{{ asset('assets/images/K2/circuit/ecity/307.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Most machines get electricity when its plug is inserted into
            a socket and the switch is turned on.</h2>
        <p class="note">Note: A socket is a common power source . Most sockets are fixed on the wall.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>

    {{-- slide 8 --}}
    <div class="slide hidden  flex flex-col items-center justify-between h-full ">
        <h2 class="!text-white title stroke">Hands-on Time 1</h2>
        <h2 class="title stroke">Mission: <br>
            Walk around the place (school, classroom, kitchen, etc) to
            find machines that come with a plug. Observe each machine
            and answer some questions.</h2>
        <p class=" note">Note: This is a class activity, so do make sure that all children are involved in each step.</p>
    </div>

    {{-- slide 9 --}}

    <div class="slide hidden flex flex-col items-center gap-5">
        <ul class="title stroke text-start">
            <h2>Steps:</h2>
            <li>1. What machines did you find that come with a plug? Tell
                your teacher and friends.</li>
        </ul>
        <img src="{{ asset('assets/images/K2/circuit/ecity/e3.png') }}" />

        <p class="note">Note: Guide children to pay attention to things with a plug around the place,
            especially those already connected to sockets.</p>
    </div>


    {{-- slide 10 --}}
    <div class="slide hidden flex flex-col items-center gap-5">
        <ul class="title stroke text-start">
            <h2>Steps:</h2>
            <li>2.Observe each machine and answer these questions:
                <ul class="list-disc">
                    <li>What is it for?</li>
                    <li>Does it come with a common plug?</li>
                    <li>How many metal pins does the plug have?</li>
                    <li>How do we make it work?</li>
                    <li>What is this machine?</li>
                </ul>
            </li>
        </ul>
        <p class="note text-center">Note: Guide children to answer the questions and record their findings on a big paper.
            For the last question, connect each machine to a socket to show how electricity
            makes each machine work.</p>
    </div>


    {{-- slide 11 --}}
    <div class="slide hidden flex flex-col items-center gap-5">
        <ul class="title stroke text-start">
            <li>What do you learn from this activity?
                <ul class="list-disc">
                    <li>Do machines that come with a plug need electricity to work?</li>
                    <li>How do we provide electricity to machines that come with a</li>
                    <li>Do different machines come with different types of plugs?</li>
                </ul>
            </li>
        </ul>
        <p class="note text-center">Note: Guide children to discuss and conclude from their findings (refer to the record in
            the big paper).</p>
    </div>


    {{-- slide 12 --}}
    <div class="slide hidden flex flex-col items-center gap-3 ">
        <video id="video2" class="w-full max-w-[42rem] pointer-events-none">
            <source src="{{ asset('assets/images/K2/circuit/ecity/308.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Children, what is this? What is it for? <br>
            Does it use electricity to work?</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- slide 13 --}}
    <div class="slide hidden flex flex-col items-center gap-3 ">
        <video id="video3" class="w-full max-w-[42rem] pointer-events-none">
            <source src="{{ asset('assets/images/K2/circuit/ecity/309.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">How about this? What is it for? <br>
            Does it use electricity to work?</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>



    {{-- slide 14 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e4.png') }}" />
        <h2 class="title stroke">These machines have no plugs. They have batteries in them.</h2>
        <p class="note">Note: Have children share what they know about batteries.</p>
    </div>


    {{-- slide 15 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e4.png') }}" />
        <h2 class="title stroke">Why do these things not have a plug?</h2>
        <p class="note">Note: Have children think and share their views.</p>
    </div>

    {{-- slide 16 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e5.png') }}" />
        <h2 class="title stroke">A battery is like a small storage of electricity.
            It provides electricity for things without plugs.</h2>
    </div>


    {{-- slide 17 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e6.png') }}" />
        <h2 class="title stroke">Children, what are these? What are they for?
            Do they use electricity to work?</h2>
    </div>


    {{-- slide 18 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e7.png') }}" />
        <h2 class="title stroke">Have you ever seen this screen on a smartphone?
            What does it mean? What do you do when you see this screen?</h2>
        <p class="note">Note: Have children share their prior knowledge and experience.</p>
    </div>

    {{-- slide 19 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e6.png') }}" />
        <h2 class="title stroke">Modern machines have a built-in battery that you can't see.</h2>
        <p class="note">Note: Display a smartphone or tablet. Show children the battery percentage on the screen.</p>
    </div>

    {{-- slide 20 --}}
    <div class="slide hidden flex flex-col items-center gap-3 ">
        <div class="flex items-center gap-3">
            <img src="{{ asset('assets/images/K2/circuit/ecity/e8.png') }}" />
            <video id="video4" class="w-full max-w-4xl pointer-events-none">
                <source src="{{ asset('assets/images/K2/circuit/ecity/310.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <h2 class="title stroke">These machines come with a detachable cable and plug for you
            to recharge the battery.</h2>
        <p class="note">Note: Guide children to watch the video and describe what they see.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>

    {{-- slide 21 --}}
    <div class="slide hidden flex flex-col items-center gap-5">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e9.png') }}" />
        <h2 class="title stroke">Why do these things come with a detachable cable
            and plug?</h2>
        <p class="note">Note: Have children think and share their views.</p>
    </div>

    {{-- slide 22 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-full  ">
        <h2 class="!text-white title stroke">Hands-on Time 2</h2>
        <h2 class="title stroke text-start">Mission: <br>
            Which machine around you uses electricity to work? Find one
            and share with the class.</h2>
        <p class="text-center note">Note: This is a class activity, so make sure that all children are involved in each
            step.</p>
    </div>

    {{-- slide 23 --}}
    <div class="slide hidden flex flex-col items-center ">
        <ul class="text-start title stroke">
            <h2>Steps:</h2>
            <li>1. Which machine around you uses electricity to work?
                Find one.</li>
        </ul>
        <img src="{{ asset('assets/images/K2/circuit/ecity/e10.png') }}" />
        <p class="note">Note: Have each child to look for one thing that use electricity to work. Guide if needed.</p>
    </div>


    {{-- slide 24 --}}
    <div class="slide hidden flex flex-col items-center h-full justify-between">
        <ul class="text-start title stroke self-start">
            <h2>Steps:</h2>
            <li>2. Share these with the class:
                <ul class="list-disc pl-[60px]">
                    <li>What is this machine?</li>
                    <li>What is it for?</li>
                    <li>How do we make it work?</li>
                </ul>
            </li>
        </ul>
        <p class="note">Note: Have children take turns to share their findings. Guide them to record their findings on a
            big paper.
            Display the record in class at last.</p>
    </div>

    {{-- slide 25 --}}
    <div class="slide hidden  flex flex-col items-center justify-between h-[60%] ">
        <h2 class="title stroke">What do you learn from the two hands-on activities?</h2>
        <p class="note">Note: Encourage children to share their findings and views.</p>
    </div>

    {{-- slide 26 --}}
    <div class="slide hidden  flex flex-col items-center justify-between h-full ">
        <ul class="title stroke text-start list-disc">
            <h2>Do you realise that:
                <li>Many things around us are machines.</li>
                <li>Machines help us do work easily.</li>
                <li>Many machines need the power of electricity to do work.</li>
                <li>Machines with an attached plug need to be inserted into a
                    socket to get electricity to work.</li>
                <li>Different machines may have different types of plugs.</li>
            </h2>
        </ul>
        <p class="note">Note: Guide children to understand these points.</p>
    </div>

    {{-- slide 27 --}}
    <div class="slide hidden  flex flex-col items-center justify-between h-full ">
        <ul class="title stroke text-start list-disc">
            <h2>Do you realise that:
                <li>People usually use a plastic adapter to help them insert a 2-
                    pin plug in a common 3-hole socket.</li>
                <li>Normal batteries in machines need to be replaced from time
                    to time.</li>
                <li>Rechargeable batteries in machines can be recharged many
                    times when needed.</li>
            </h2>
        </ul>
        <p class="note">Note: Guide children to understand these points.</p>
    </div>


    {{-- ====================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button
         class="doneButton">
 <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>


    <div id="buttons" class="absolute  flex flex-row ">
        <!-- Return Button -->
        <a class="relative w-24 h-24 button-fade-in bg-slate-500 rounded-[30px] " id="returnButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class=" w-14 h-14"
                src="{{ asset('assets/images/pptimages/reverse-icon.png') }}" />
        </a>

        <!-- Home Button -->
        <button class="relative w-24 h-24 button-fade-in bg-sky-500 rounded-[30px] " id="homeButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class=" w-14 h-14"
                src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
        </button>

        <!-- Close Button -->
        <button  id="closeButton">
                        <img src="{{ asset('assets/images/pptimages/cancel.png') }}" />

        </button>
    </div>

    {{-- next Button --}}
    <div class="down-btn-container">
        <button class="cursor-pointer nextButton w-66 h-[75px] relative bg-[#F8A23A]  rounded-[30px]">
            <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
            <div class="absolute left-[8.22px] top-[3.17px] "> <img src="/assets/images/pptimages/Vector4.png" /> </div>
            <span class="flex items-center  text-white text-5xl font-bold stroke">NEXT
            </span>
        </button>
    </div>
@endsection


@push('script')
 <script>
    // Video toggle function
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

        // Get all click buttons (click-btn1, click-btn2, etc.)
        const clickButtons = document.querySelectorAll("[class*='click-btn']");

        let currentSlide = 0;
        let parentSlideIndex = null;
        let isViewingClickSlides = false;
        let currentClickClass = null; // Track which click class we're viewing (click1, click2, etc.)

        // DEFINE YOUR RETURN ROUTE HERE - This is the route to navigate when on slide 1 and clicking return
        const returnRouteFromFirstSlide = "{{ route('electricitySelection') }}"; 

        // Function to pause all videos
        function pauseAllVideos() {
            const videos = document.querySelectorAll('video');
            videos.forEach(video => {
                if (!video.paused) {
                    video.pause();
                }
            });
        }

        function showSlide(index) {
            // Pause all videos before changing slides
            pauseAllVideos();

            slides.forEach((slide, i) => {
                slide.classList.toggle("hidden", i !== index);
            });

            // Check if last slide OR last click slide
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

        // Check if there's another click slide with same class after current one
        function hasNextClickSlide(currentIndex) {
            if (!currentClickClass) return false;

            for (let i = currentIndex + 1; i < slides.length; i++) {
                if (slides[i].classList.contains(currentClickClass)) {
                    return true;
                }
            }
            return false;
        }

        // Get click class from button (click-btn1 → click1, click-btn2 → click2)
        function getClickClassFromButton(button) {
            const classList = Array.from(button.classList);
            const clickBtnClass = classList.find(cls => cls.startsWith('click-btn'));
            if (clickBtnClass) {
                // Extract number from click-btn1, click-btn2, etc.
                const number = clickBtnClass.replace('click-btn', '');
                return 'click' + number;
            }
            return null;
        }

        // Click button handlers
        clickButtons.forEach((btn) => {
            btn.addEventListener("click", (e) => {
                e.preventDefault(); // Prevent default anchor behavior

                parentSlideIndex = currentSlide;
                isViewingClickSlides = true;
                currentClickClass = getClickClassFromButton(btn);

                // Find the first slide with matching click class
                for (let i = 0; i < slides.length; i++) {
                    if (slides[i].classList.contains(currentClickClass)) {
                        currentSlide = i;
                        showSlide(currentSlide);
                        break;
                    }
                }
            });
        });

        // NEXT button - skip click slides if not viewing them
        nextButtons.forEach((btn) => {
            btn.addEventListener("click", () => {
                if (currentSlide < slides.length - 1) {
                    currentSlide++;

                    // Skip click slides if not viewing them
                    while (!isViewingClickSlides &&
                        currentSlide < slides.length &&
                        isClickSlide(slides[currentSlide])) {
                        currentSlide++;
                    }

                    // If viewing click slides, only show slides with current click class
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

        // Check if slide is any click slide (click1, click2, etc.)
        function isClickSlide(slide) {
            return Array.from(slide.classList).some(cls => cls.startsWith('click') && cls.match(/^click\d+$/));
        }

        // Return button with route navigation on first slide
        returnButton.addEventListener("click", () => {
            // If on first slide (slide 0) and not viewing click slides, navigate to return route
            if (currentSlide === 0 && !isViewingClickSlides) {
                window.location.href = returnRouteFromFirstSlide;
                return;
            }

            if (isViewingClickSlides && currentSlide > 0) {
                // Check if previous slide is also same click class
                let prevSlide = currentSlide - 1;

                // Find previous slide with same click class
                while (prevSlide >= 0 && !slides[prevSlide].classList.contains(currentClickClass)) {
                    prevSlide--;
                }

                if (prevSlide >= 0 && slides[prevSlide].classList.contains(currentClickClass)) {
                    currentSlide = prevSlide;
                    showSlide(currentSlide);
                } else {
                    // No more click slides, return to parent
                    currentSlide = parentSlideIndex;
                    isViewingClickSlides = false;
                    currentClickClass = null;
                    parentSlideIndex = null;
                    showSlide(currentSlide);
                }
            } else if (currentSlide > 0) {
                currentSlide--;

                // Skip click slides when going back
                while (currentSlide > 0 && isClickSlide(slides[currentSlide])) {
                    currentSlide--;
                }

                showSlide(currentSlide);
            }
        });

        // DONE button handler
        if (doneButton) {
            doneButton.addEventListener("click", () => {
                if (isViewingClickSlides && parentSlideIndex !== null) {
                    // Return to parent slide
                    currentSlide = parentSlideIndex;
                    isViewingClickSlides = false;
                    currentClickClass = null;
                    parentSlideIndex = null;
                    showSlide(currentSlide);
                } else {
                    // Navigate to route
                    window.location.href = "{{ route('electricitySelection') }}";
                }
            });
        }

        // Start with first slide
        showSlide(currentSlide);
    });
</script>
@endpush
