@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s2.png') }}" />
        </div>
        <div class="title stroke">
            <h2>Children, do you remember what global warming is?</h2>
            <p class="note">Note: Encourage children to share what their answers.</p>
        </div>
    </div>



    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s2.png') }}" />
        </div>
        <h2 class="title stroke">Global warming is the process of Earth getting warmer
            and the increase in temperature.</h2>
        <p class="note">Note: Explain that climate means the weather over a longer period of time.</p>
    </div>


    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s10.png') }}" />
        <h2 class="title stroke text-center">Global warming is caused by the increase in greenhouse gases
            trapped in the atmosphere.</h2>
        <p class="note">Note: Encourage children to share their thoughts with the class.</p>
    </div>
    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s10.png') }}" />
        <h2 class="title stroke text-center">This is known as global warming.
            Make a guess - What causes Earth's temperature to rise?</h2>
        <p class="note">Note: Encourage children to share their thoughts with the class.</p>
    </div>
    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s2.png') }}" />
        </div>
        <h2 class="title stroke">Global warming is the process of Earth getting warmer
            and the increase in temperature.</h2>
        <p class="note">Note: Explain that climate means the weather over a longer period of time.</p>
    </div>
    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex gap-2 items-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s16.png') }}"class="w-90" />
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s18.png') }}" class="w-90" />
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s23.png') }}"class="w-90" />
        </div>
        <h2 class="title stroke">With the increased temperature, it affects the land, animals
            and plants. When glaciers melt, we will be affected too.</h2>
    </div>

    {{-- Slide 5 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s1.png') }}" />
        <h2 class="title stroke">Do you know that besides the increasing greenhouse gases,
            Earth is facing another major problem?</h2>
        <p class="note">Note: Encourage children to brainstorm.</p>
    </div>


    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s1.png') }}" />
        <h2 class="title stroke">Earth’s natural resources are running out!</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s1.png') }}" />
        <h2 class="title stroke">Do you know what natural resources are?
            Can you name some examples of natural resources?</h2>
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>



    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a1.png') }}" />
        <h2 class="title stroke">Natural resources are things found in nature
            which can be used by people.</h2>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a1.png') }}" />
        <h2 class="title stroke">Trees, sun, coal, fish, water, plants and animals
            are examples of natural resources.</h2>
    </div>

    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a2.png') }}" />
        <h2 class="title stroke">People need natural resources to stay alive.</h2>
        <p class="note">Note: Teacher can share that people need air, water and food to stay alive.
            Food comes from animals and plants.</p>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a1.png') }}" />
        <h2 class="title stroke">However, natural resources are running out.
            People are using them faster than they can recover.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s1.png') }}" />
        <h2 class="title stroke">When all the natural resources run out,
            no one can live on Earth anymore.</h2>
        <p class="note">Note: Teacher can explain that the lives of animals, plants and humans will be affected due to
            the lack of clean water, clean air and food.</p>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s1.png') }}" />
        <h2 class="title stroke">We need to make the natural resources sustainable..</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">Do you know what is the meaning of
            sustainable?.</h2>
        <p class="note">Note: Encourage children to share their thoughts.</p>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a3.png') }}" />
        <h2 class="title stroke">Imagine that you have a jar of cookies in class.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a3.png') }}" />
        <h2 class="title stroke">Whenever children take cookies from the jar,
            the cookie jar refills itself.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a3.png') }}" />
        <h2 class="title stroke">The cookies will never run out! It’s like magic!</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a3.png') }}" />
        <h2 class="title stroke">In this case, the cookies are sustainable. This means that
            there will still be cookies after a long time.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a4.png') }}" />
        <h2 class="title stroke">But in the real world, there isn't any magic cookie jars. The
            number of cookies in the jar will decrease when we take them.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a4.png') }}" />
        <h2 class="title stroke">The jar will be empty if we continue to take the
            cookies and no one refills it..</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a1.png') }}" />
        <h2 class="title stroke">Just like the cookies, natural resources will run out
            if we don’t do anything to ‘refill’ them.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a2.png') }}" />
        <h2 class="title stroke">We need to make natural resources sustainable
            so that people can continue to live on Earth.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">Let’s find out why natural resources are important to us.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img class="w-140"src="{{ asset('assets/images/K2/sustain/sustainability/a5.png') }}" />
        <h2 class="title stroke">Let's look at one of the natural resources - trees. How will
            Earth be affected when trees are being chopped down?</h2>
        <p class="note">Note: Encourage children to share their thoughts.</p>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="note">Class Activity 1</h2>
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a6.png') }}" />
        <h2 class="title stroke">Let's find out:
            What do you think happens when trees are chopped down?</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">Let's do:
            1. Set up as shown. Label the bottles as A, B and C from left
            to right.</h2>
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a6.png') }}" />
        <p class="note">Note: Click on each bottle label to explain to children what each represents.</p>
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
                        window.location.href = "{{ route('sustainSelection') }}";
                    }
                });
            }

            // Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
