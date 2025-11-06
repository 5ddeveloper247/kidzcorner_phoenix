@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/reduce/r9.png') }}" class="!max-w-[14vw]" />
        </div>
        <div class="title stroke">
            <h2>Do you know why it is important for us to
                <span class="text-white"> reduce, reuse </span> and <span class="text-white"> recycle </span>?
            </h2><br>
            <p class="note">Note: Encourage children to share their thoughts.</p>
        </div>
    </div>



    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/self/s1.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke">When we reduce waste, there will be less rubbish
            and less pollution.</h2>
    </div>


    {{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center ">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/recycle/s1.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke text-center">When we reuse containers and old clothing,
            less waste is generated.</h2>
    </div>

    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/sustain/reduce/s2a.png') }}" class="large-img6" />
        <h2 class="title stroke text-center">Recycling creates new things from old items.
            When we recycle, factories do not need to take resources
            from Earth to create the new things we need.</h2>
    </div>


    {{-- Slide 5 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/reduce/r9.png') }}" class="!max-w-[14vw]" />
        </div>
        <h2 class="title stroke">When everyone reduce, reuse and recycle,
            Earth can be cleaner and healthier!</h2>
    </div>


    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/self/s3.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke">Global warming is one of the problems that Earth is facing.
            Droughts and floods are happening as the temperature rises.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s3.png') }}" />
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s3.png') }}" />
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s3.png') }}" />
        </div>
        <h2 class="title stroke">We learned that greenhouse gases had caused
            Earth's temperature to rise!</h2>
    </div>



    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/self/s2.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke">Greenhouse gases are produced when fuels such as wood and
            coal are burned in factories and vehicles.</h2>
    </div>


    {{-- slide 8 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">What can be done to
                reduce greenhouse gases?</h2><br>
        </div>
        <p class="note text-center">Note: Encourage children to share their answers.</p>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex gap-2 items-center">
            <img src="{{ asset('assets/images/K2/sustain/reduce/r9.png') }}" class="!max-w-[14vw]" />
            <img src="{{ asset('assets/images/K2/sustain/self/s5b.png') }}" />
        </div>
        <h2 class="title stroke">By practicing the three 'R's, we will not need so many new
            things. Factories will not need to produce so many things.</h2>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex gap-2 items-center">
            <img src="{{ asset('assets/images/K2/sustain/reduce/r9.png') }}" class="!max-w-[14vw]" />
            <img src="{{ asset('assets/images/K2/sustain/self/s5b.png') }}" />
        </div>
        <h2 class="title stroke">When factories do not produce so many things, less coal and
            fuel will be burned and less greenhouse gases will be produced./h2>
    </div>

    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/self/s4.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke">To reduce greenhouse gases produced by vehicles, we need to
            reduce the usage of vehicles!</h2>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/self/s6.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke">Walking, riding a bicycle and taking the public transport
            instead of driving our cars help to <span class="text-white">reduce greenhouse gases </span>.</h2>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/self/s4.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke">Besides our daily commute, vehicles also travel when they are
            exporting and importing goods from different countries.</h2>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/self/s7.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke">For example, these vegetables are imported from China.
            How did they get to the supermarket near you from China?</h2>
        <p class="note">Note: Encourage children to share their thoughts.</p>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/self/s8.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke">First, the vegetables are gathered from the farm and are
            sent to the airport using a delivery truck.</h2>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/self/s10.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke">The vegetables are loaded on to the plane from
            the delivery truck.</h2>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/self/s9.png') }}" />
        </div>
        <h2 class="title stroke">The planes flies from China to Singapore.</h2>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/self/s11.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke">The vegetables are then transferred onto another truck to be
            delivered to the supermarkets near you.</h2>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/self/s12.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke">The vegetables travelled on trucks and
            plane to reach the supermarkets.</h2>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/self/s12.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke"><span class="text-white">Greenhouse gases </span> are produced from the trucks and the
            plane.
            <span class="text-white">Greenhouse gases </span> can be <span class="text-white">reduced </span> the trucks and
            plane do
            not need to <span class="text-white">import </span> and <span class="text-white"> export </span>
        </h2>
    </div>

    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/self/s13.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke">One of the ways to reduce importing and exporting goods such
            as vegetables and fruits is to buy food grown locally.</h2>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/self/s13.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke">When we buy food grown locally, fewer planes are needed to
            <span class="text-white">import </span> and <span class="text-white"> export </span> these items.
        </h2>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/self/s13.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke">This helps our country to be self-sufficient, meaning our
            country can provide food for our people!</h2>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/self/s14.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke">Another way of being self-sufficient is growing vegetables for
            our own use at home.</h2>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/self/s14.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke">When we grow our own food, we do not need to import food
            from other countries too!</h2>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="text-white">Class Activity </h2>
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/self/s15.png') }}" />
        </div>
        <h2 class="title stroke">Let’s do:<br>
            Grow some vegetables for the school.</h2>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke text-start ">Let's do:<br>
            1. Discuss as a class on the types of vegetables to grow.<br>
            2. Put one seed into each hole of the growing cubes.</h2>
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/self/s16.png') }}" />
        </div>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke text-start ">Let's do:<br>
            3. When the seed has grown into a small plant, cut the cubes
            and put each piece into the white container.<br>
            4. Put the container into the vertical garden system.</h2>
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/self/s17.png') }}" />
        </div>
        <p class="note text-center">Note: Teacher to refer to the notes for the usage of the vertical system.</p>
    </div>
    {{-- slide 8 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke text-start ">Let's do:<br>
                5. Check on the plants and wait for the harvest!<br>
                6. Discuss as a class and create a recipe to cook the
                vegetables that you will be harvesting!</h2>
        </div>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/self/s13.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke">When we support local farms, fewer planes are needed to
            import and export these items.</h2>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/self/s14.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke">Similarly, being self-sufficient also reduces the need to
            import food from other countries.</h2>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/reduce/r8.png') }}" />
        </div>
        <h2 class="title stroke">There's only one Earth.<br>
            Let's do our part in protecting our Earth together!</h2>
    </div>


    <!-- Video Trigger Button -->
    <div data-property-1="Default" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
        <img src="/assets/images/pptimages/video.png" />
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
});;

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
                        window.location.href = "{{ route('selfSelection') }}";
                    }
                });
            }

            // Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
