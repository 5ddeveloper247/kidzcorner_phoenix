@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- Slide 1 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <h2 class="title stroke">Children, do you remember
                what clean energy is?</h2>
        </div>
        <p class="note">Note: Encourage children to share their thoughts.</p>

    </div>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/energy2/e1.png') }}" />
        </div>
        <div class="title stroke">
            <h2>Clean energy does not cause pollution and is generated from
                natural sources or processes that are constantly replenished.</h2>
        </div>
    </div>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/energy2/e1.png') }}" />
        </div>
        <div class="title stroke">
            <h2> In the previous lesson, we learned about solar energy
                from the sun.</h2>
        </div>
    </div>

    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/energy2/e2.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke text-center"> Now, let’s look at energy generated from
            wind and water.</h2>
    </div>
    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/energy2/e3.png') }}" class="large-img6"/>
        </div>
        <h2 class="title stroke text-center"> Look at these pictures. What are they and what do they do?</h2>
        <p class="note">Note: Encourage children to compare and discuss the similarities and differences.</p>
    </div>



    {{-- Slide 5 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/sustain/energy2/e3.png') }}" class="large-img6"/>
        <span class="text-white"> wind-mill wind-turbine </span>
        <h2 class="title stroke"> When the wind blows, the windmill and wind turbine rotate.</h2>
    </div>

    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/energy2/e4.png') }}" class="large-img6"/>
        </div>
        <h2 class="title stroke text-center"> This is how a <span class="text-white"> windmill </span>rotates.</h2>
    </div>
    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/energy2/e5.png') }}" class="large-img6"/>
        </div>
        <h2 class="title stroke text-center"> As the windmill rotates, it generates energy to operate
            machines that help to mill grains or pump water to the crops.</h2>
    </div>
    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/energy2/e6.png') }}" class="large-img6"/>
        </div>
        <h2 class="title stroke text-center">When the wind blows, the wind turbines rotate
            and generate electricity.</h2>
    </div>
    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start">
        <span class="text-white">Class Activity 1</span>
        <div class="flex items-center gap-5">
                <img class="w-190" src="{{ asset('assets/images/K2/sustain/energy2/e12.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke text-center">Let's find out:<br>
            Build and observe how wind can light up the light bulb.</h2>
    </div>
    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start">
        <h2 class="title stroke text-center">Let's do:<br>
            1. Assemble the wind powered light.</h2>
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/energy2/e7.png') }}" class="large-img6" />
        </div>
    </div>
    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start">
        <h2 class="title stroke text-center">Let's do:<br>
            2. Look at the shape of the connecting portion and fix the
            blades on the centre piece.</h2>
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/energy2/e9.png') }}" class="large-img6" />
        </div>
    </div>

    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">Let's do:<br>
            3. Once the blades are fixed, think of ways to light up the
            blub.<br>
            4. You may blow at the blades or find sources of wind.<br>
            5. Observe how the light shines. Does it shine brightly if the
            wind blown is weak/ strong? Does it continue to shine if
            the wind stops.</h2>
    </div>
    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/energy2/e10.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke text-center">A hairdryer was used to blow at the wind powered light bulb.</h2>
        <p class="note">Note: Encourage children to share what they see.</p>
    </div>
    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/energy2/e10.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke text-center">The light bulb stop shining when the blades stop moving.</h2>
        <p class="note">Note: Explain that when blades stop turning, it does not generate energy
            anymore to the bulb, so there's no light.</p>
    </div>
    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/energy2/e11.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke text-center">Similarly, water also uses turbines to generate electricity.</h2>

    </div>
    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/energy2/e12.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke text-center">Dams are built to keep water on higher grounds.</h2>

    </div>


    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex  gap-2 items-center">
            <img class="w-190" src="{{ asset('assets/images/K2/sustain/energy2/e12.png') }}" />
            <img src="{{ asset('assets/images/K2/sustain/energy2/e12a.png') }}" class="!max-w-[14vw]" class="!max-w-[15vw]" />
        </div>
        <h2 class="title stroke">As the water flows down, it rotates the water
            turbines behind the dams.</h2>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex  gap-2 items-center">
            <img class="w-190" src="{{ asset('assets/images/K2/sustain/energy2/e12.png') }}" />
            <img src="{{ asset('assets/images/K2/sustain/energy2/e12a.png') }}" class="!max-w-[14vw]" class="!max-w-[15vw]" />
        </div>
        <h2 class="title stroke">Just like the wind turbines, the water turbines
            rotates and generate electricity.</h2>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex  gap-2 items-center">
            <img class="w-190" src="{{ asset('assets/images/K2/sustain/energy2/e12.png') }}" />
            <img src="{{ asset('assets/images/K2/sustain/energy2/e12a.png') }}" class="!max-w-[14vw]" class="!max-w-[15vw]" />
        </div>
        <h2 class="title stroke">Electricity generated by flowing water is called
            hydroelectric power or hydropower.</h2>
    </div>


    {{-- slide 8 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Children, can you make the wind powered light work
                by using water?</h2><br><br><br>
        </div>
        <p class="note text-center">Note: Teacher can recap with children on how the wind turn the blades.<br>
            Prompt children look at the picture of dam and think of how water flows.<br>
            Encourage children to brainstorm on how they can make water flow down and turn the blades.</p>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
    <h2 class="note">Class activity 2</h2>
        <div class="flex  gap-2 items-center">
            <img class="w-190" src="{{ asset('assets/images/K2/sustain/energy2/e12.png') }}" />
            <img src="{{ asset('assets/images/K2/sustain/energy2/e12a.png') }}" class="!max-w-[14vw]" />
        </div>
        <h2 class="title stroke">Let’s find out:<br>
            Design and build a waterfall to create hydropower.</h2>
    </div>

    {{-- slide 8 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do:<br>
                1. Discuss in small groups on how to make the water flow down
                to turn the blades on the turbines.<br>
                2. Design and draw your idea on 8the learning journal.<br>
                3.Use any materials such as tape, boxes, blocks or any
                recyclable materials to assemble your structure.<br>
                4. Work as a group and test if your waterfall works.</h2><br><br><br>
        </div>
        <p class="note text-center">Note: Encourage children to brainstorm on how they can create a waterfall.</p>
    </div>
    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/energy2/e13.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke text-center">Solar energy, wind power and hydropower are
            three types of clean energy.</h2>

    </div>
    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/energy2/e13.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke text-center">Clean energy can be used in place of the natural resources
            such as wood and coal.</h2>

    </div>
    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/energy2/e13.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke text-center">Using clean energy will help natural resources to be sustainable
            and protect our Earth from global warming and pollution.</h2>

    </div>
    <!-- Video Trigger Button -->
    <div data-property-1="Default" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
        <img src="{{ asset('assets/images/pptimages/video.png') }}" />
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
        document.addEventListener("DOMContentLoaded", () => {
            const slides = document.querySelectorAll(".slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");

            // Get all info/click buttons (info-btn1, info-btn2, click-btn1, click-btn2, etc.)
            const infoButtons = document.querySelectorAll("[class*='info-btn'], [class*='click-btn']");

            let currentSlide = 0;
            let parentSlideIndex = null;
            let isViewingInfoSlides = false;
            let currentInfoClass = null; // Track which info/click class we're viewing

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                // Check if last slide OR last info/click slide
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

            // Get info/click class from button (info-btn1 → , click-btn1 → click1)
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

            // Info/Click button handlers
            infoButtons.forEach((btn) => {
                btn.addEventListener("click", (e) => {
                    e.preventDefault(); // Prevent default anchor behavior

                    parentSlideIndex = currentSlide;
                    isViewingInfoSlides = true;
                    currentInfoClass = getInfoClassFromButton(btn);

                    // Find the first slide with matching info/click class
                    for (let i = 0; i < slides.length; i++) {
                        if (slides[i].classList.contains(currentInfoClass)) {
                            currentSlide = i;
                            showSlide(currentSlide);
                            break;
                        }
                    }
                });
            });

            // NEXT button - skip info/click slides if not viewing them
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;

                        // Skip info/click slides if not viewing them
                        while (!isViewingInfoSlides &&
                            currentSlide < slides.length &&
                            isInfoSlide(slides[currentSlide])) {
                            currentSlide++;
                        }

                        // If viewing info/click slides, only show slides with current class
                        if (isViewingInfoSlides) {
                            while (currentSlide < slides.length &&
                                !slides[currentSlide].classList.contains(currentInfoClass)) {
                                currentSlide++;
                            }
                        }

                        if (currentSlide < slides.length) {
                            showSlide(currentSlide);
                        }
                    }
                });
            });

            // Check if slide is any info/click slide (info-slide1, info-slide2, click1, click2, etc.)
            function isInfoSlide(slide) {
                return Array.from(slide.classList).some(cls =>
                    (cls.startsWith('info-slide') && cls.match(/^info-slide\d+$/)) ||
                    (cls.startsWith('click') && cls.match(/^click\d+$/))
                );
            }

            // Return button
            returnButton.addEventListener("click", () => {
                if (isViewingInfoSlides && currentSlide > 0) {
                    // Check if previous slide is also same info/click class
                    let prevSlide = currentSlide - 1;

                    // Find previous slide with same info/click class
                    while (prevSlide >= 0 && !slides[prevSlide].classList.contains(currentInfoClass)) {
                        prevSlide--;
                    }

                    if (prevSlide >= 0 && slides[prevSlide].classList.contains(currentInfoClass)) {
                        currentSlide = prevSlide;
                        showSlide(currentSlide);
                    } else {
                        // No more info/click slides, return to parent
                        currentSlide = parentSlideIndex;
                        isViewingInfoSlides = false;
                        currentInfoClass = null;
                        parentSlideIndex = null;
                        showSlide(currentSlide);
                    }
                } else if (currentSlide > 0) {
                    currentSlide--;

                    // Skip info/click slides when going back
                    while (currentSlide > 0 && isInfoSlide(slides[currentSlide])) {
                        currentSlide--;
                    }

                    showSlide(currentSlide);
                }
            });

            // DONE button handler
            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    if (isViewingInfoSlides && parentSlideIndex !== null) {
                        // Return to parent slide
                        currentSlide = parentSlideIndex;
                        isViewingInfoSlides = false;
                        currentInfoClass = null;
                        parentSlideIndex = null;
                        showSlide(currentSlide);
                    } else {
                        // Navigate to route
                        window.location.href = "{{ route('energy2Selection') }}";
                    }
                });
            }

            // Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
