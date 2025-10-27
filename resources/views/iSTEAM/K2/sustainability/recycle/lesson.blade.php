@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/reduce/r9.png') }}" class="!max-w-[14vw]" />
        </div>
        <div class="title stroke">
            <h2>Children, do you remember the three ‘R’s?</h2>
            <p class="note">Note: Encourage children to share what they know about reduce and reuse.</p>
        </div>
    </div>



    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/reduce/r24.png') }}" />
        </div>
        <h2 class="title stroke">Reduce is about throwing less waste!</h2>
    </div>


    {{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center justify-between h-[50%] ">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/reduce/r3.png') }}" class="w-130" />
        </div>
        <h2 class="title stroke text-center">When we throw lesser rubbish, there will be lesser rubbish.
            Less rubbish will end up in the sea.</h2>
    </div>

    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/reduce/r17.png') }}" />
        </div>
        <h2 class="title stroke text-center">Reusing is about looking for ways to use the item again.</h2>
    </div>


    {{-- Slide 5 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/recycle/s1.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke">We can reuse old bottles or make new bag out of old clothes.
            Artists reuse old items to create new artworks.</h2>
    </div>


    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/reduce/r9.png') }}" class="!max-w-[14vw]" />
        </div>
        <h2 class="title stroke">What about recycle? What does that mean?</h2>
        <p class="note">Note: Encourage children to share what they know about recycle.</p>
    </div>

    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/reduce/r9.png') }}" class="!max-w-[14vw]" />
        </div>
        <h2 class="title stroke"> <span class="text-white"> Recycle </span> using rubbish to make new things that
            can be used again.</h2>
    </div>

    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke"> Do you know the
            process of recycling?</h2>
        <p class="note"> Note: Encourage children to share their answers.</p>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/reduce/s2a.png') }}" class="!max-w-[16vw]" />
        </div>
        <h2 class="title stroke">Recyclable items such as bottles should be washed and cleaned
            before being discarded at the recycling bins.</h2>
        <p class="note">Note: Teacher can explain it is important to wash before throwing the bottles.
        <h4 class="title stroke">Click here </h4> more information.</p>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke"> Additional information about washing recyclable rubbish:

            What happens if I don't wash my recycling?

            Food residue is a form of contamination. It gives off bad smell and may attract pests to the recycling bin.
            The recycling facility will not be able to recycle the items filled with pests.

            Food residue from one container may also contaminate all the other rubbish in the track.
            The recycling facility will not be able to process the contaminate rubbish too. All the rubbish will then be
            send to the landfill.
    </div>

    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/recycle/s2.png') }}" />
        </div>
        <h2 class="title stroke"> <span class="text-white">Recyclable </span> items should be sorted out by types. </h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/recycle/s2.png') }}" />
        </div>
        <h2 class="title stroke"> <span class="text-white">Metal,</span> paper, <span class="text-white">plastic </span> and
            glass are some
            examples of <span class="text-white">recyclable </span></h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/recycle/s3.png') }}" />
        </div>
        <h2 class="title stroke">Recyclable items are then discarded in recycling bins.</h2>
        <p class="note"> Note: Ask children if they have seen or used these bins before.</p>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/recycle/s4.png') }}" />
        </div>
        <h2 class="title stroke">Recycling trucks collect the different types of recyclables and
            send them to the recycling factories accordingly.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/recycle/s2.png') }}" />
        </div>
        <h2 class="title stroke"> The recyclables are sorted, checked and washed before being
            processed to make into new products.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/recycle/s5.png') }}" />
        </div>
        <h2 class="title stroke">Glass items are crashed and melted. The molten glass are
            then placed into molds to make new glass bottles and jars.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/recycle/s6.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke">Old tins and cans are melted to make new cans and tins.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/recycle/s7.png') }}" />
        </div>
        <h2 class="title stroke"> <span class="text-white">Plastics </span> are squashed and shredded in factories.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/recycle/s8.png') }}" />
        </div>
        <h2 class="title stroke"> Shredded plastics are moulded into new containers or made
            into products such as clothes, toys and other items.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/recycle/s9.png') }}" />
        </div>
        <h2 class="title stroke"> Paper products are mixed and soaked in chemicals. The
            mixture is then dried and rolled out as new sheets of paper.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/recycle/s10.png') }}" />
        </div>
        <h2 class="title stroke"> Boxes, books, newspaper and toilet rolls are some examples
            made from recycled paper.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="!text-white title stroke">Class Activity</h2>
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/recycle/s11.png') }}" />
        </div>
        <h2 class="title stroke"> Let’s find out:
            How do we recycle paper?</h2>
    </div>

    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke"> Let’s do:
            1. Prepare the materials needed for the activity.</h2>
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/recycle/s12.png') }}" />
        </div>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke"> Let's do:
            2. Tear used paper into small pieces and soak them in water
            for 30 minutes.</h2>
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/recycle/s13.png') }}" />
        </div>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke"> Let's do:
            3. Blend the soaked paper in the blender.</h2>
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/recycle/s14.png') }}" />
        </div>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke"> Let's do:
            4. Set up the tray as seen in the video below and prepare the
            pulp mixture.</h2>
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/recycle/s15.png') }}" />
        </div>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">Let's do:
            5. Pour the pulp mixture in the frame. Move the frame to let
            the pulp settle. Arrange the flowers and leaves as desired.</h2>
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/recycle/s16.png') }}" />
        </div>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">Let's do:
            6. After one hour, follow the steps in the video on drying the
            pulp mixture.</h2>
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/recycle/s17.png') }}" />
        </div>
    </div>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/reduce/r9.png') }}" class="!max-w-[14vw]" />
        </div>
        <div class="title stroke">
            <h2>Recycling helps to create new things from old items.
                This reduces the usage of natural resources!</h2>
        </div>
    </div>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/reduce/r9.png') }}" class="!max-w-[14vw]" />
        </div>
        <div class="title stroke">
            <h2>If everyone practices the three 'R's, there will
                be lesser pollution on Earth! </h2>
        </div>
    </div>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/reduce/r9.png') }}" class="!max-w-[14vw]" />
        </div>
        <div class="title stroke">
            <h2>Earth will be a better environment for everyone to live in!
                Let's do our parts together!
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
                        window.location.href = "{{ route('recycleSelection') }}";
                    }
                });
            }

            // Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
