@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/td1.png') }}" />
        <div class="title stroke">
            <h2>Children, do you still remember how to extract DNA from
                one's mouth? What does DNA look like?</h2>
        </div>
        <p class="note text-center">Note: Encourage children to recall and share what they have learnt.</p>
    </div>



    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/livingthings/dna/d21.png') }}" />
        <h2 class="title stroke">What is DNA? Where is our DNA?</h2>
        <p class="note">Note: Guide children to recap the points learnt [1. Like a set of building bricks will form an
            object correctly
            based on its instruction manual, every living thing has its own instruction manual called DNA that guide them on
            how to form and work correctly. 2. Living things are made up of cells and DNA is stored in the cells.]</p>
    </div>


    {{-- Slide3 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-center gap-5">
            <div class="flex flex-col items-center gap-5">
                <img src="{{ asset('assets/images/K2/livingthings/dna/d12.png') }}" class="w-[500px]" />
                <img src="{{ asset('assets/images/K2/livingthings/dna/d18.png') }}" class="w-[500px]" />
            </div>
            <img src="{{ asset('assets/images/K2/livingthings/dna/d21.png') }}" class="w-[550px]" />
        </div>
        <h2 class="title stroke text-center">These are the chemicals used to extract our DNA.
            Can you name them?</h2>
        <p class="note">Note: Explain to children that chemicals are things will cause changes/chemical reactions.</p>
    </div>

    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-center gap-5">
            <div class="flex flex-col items-center gap-5">
                <img src="{{ asset('assets/images/K2/livingthings/dna/d12.png') }}" class="w-[500px]" />
                <img src="{{ asset('assets/images/K2/livingthings/dna/d18.png') }}" class="w-[500px]" />
            </div>
            <img src="{{ asset('assets/images/K2/livingthings/dna/d21.png') }}" class="w-[550px]" />
        </div>
        <h2 class="title stroke text-center">Since our DNA can be extracted using these chemicals,
            do you think the same chemicals can be used to extract DNA from a plant?</h2>
    </div>


    {{-- Slide 5 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke">Now we'll learn how to extract DNA from a tomato.
            We'll also find out if the same chemicals will be used to extract DNA from a tomato.</h2>
    </div>


    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="text-center justify-start text-[45px] text-white stroke">Class Activity</h2>
        <img src="{{ asset('assets/images/K2/livingthings/dna/td2.png') }}" class="w-[400px]" />
        <h2 class="title stroke">Let's find out: <br>
            How to extract DNA from a tomato?</h2>
    </div>



    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                1. Put a tomato into a zipper storage bag and seal it.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/td3.png') }}" />
        <p class="note text-center">Note: Invite a child to do the step.</p>
    </div>


    {{-- slide 8 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                2. Smash and crush the tomato.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/td4.png') }}" />
        <p class="note text-center">Note: Invite a child to take turns to do so.</p>
    </div>



    {{-- Slide 9  --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                3. Mix together 100ml distilled water, 10ml clear liquid dish
                soap and half a teaspoon of salt in a clear cup.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/td5.png') }}" />
        <p class="note text-center">Note: Guide children to measure and prepare the mixture;
            stir gently until salt is dissolved but avoid making bubbles.</p>
    </div>


    {{-- Slide 10 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                4. Add 10ml of the mixture prepared into the bag with
                tomato.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/td6.png') }}" />
        <p class="note text-center">Note: Guide children to measure and add the mixture into the bag.</p>
    </div>



    {{-- Slide 11 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                5. Reseal the bag and gently smash for another minute.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/td4.png') }}" />
        <p class="note text-center">Note: Advise children try to avoid making too many soap bubbles.</p>
    </div>



    {{-- Slide 12 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                6. Put a strainer on top of another clear cup.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/td7.png') }}" />
        <p class="note text-center">Note: Invite a child to do the step.</p>
    </div>


    {{-- Slide 13 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                7. Pour the tomato liquid into the strainer to separate the
                liquid from the flesh.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/td8.png') }}" />
        <p class="note text-center">Note: Guide children to gently do so with a teaspoon.</p>
    </div>


    {{-- Slide 14 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                8. Take 30ml of the filtrated liquid into another clear cup.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/td9.png') }}" />
        <p class="note text-center">Note: Guide children to do the step.</p>
    </div>


    {{-- Slide 15 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                9. Pour 30ml of cold rubbing alcohol from the side into the cup.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/td10.png') }}" />
        <p class="note text-center">Note: Teacher to do the step; do not mix or stir.</p>
    </div>


    {{-- Slide 16 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                10. Observe what happens in the cup.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/td10.png') }}" />
        <p class="note text-center">Note: Teacher to do the step; do not mix or stir.</p>
    </div>


    {{-- Slide 17 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="{{ asset('assets/images/K2/livingthings/dna/td11.png') }}" />
        <div class="text-start self-start">
            <h2 class="text-center title stroke">What do you observe: <br>
                What happens in the cup?</h2>
        </div>
    </div>

    {{-- Slide 18 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <div class="text-start self-start">
            <h2 class="text-center title stroke">What do you learn: <br>
                What are the white strings and clumps in the cup?</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/td12.png') }}" />
    </div>


    {{-- Slide 19 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="title stroke">What do you learn: <br>
            Do you think the DNA is extracted from one cell or many cells?</h2>
        <img src="{{ asset('assets/images/K2/livingthings/dna/td12.png') }}" />
    </div>


    {{-- Slide 20 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="{{ asset('assets/images/K2/livingthings/dna/td12.png') }}" />
        <h2 class="title stroke">Through the activity, we know that the white strings and
            clumps are DNA strands from a tomato.</h2>
    </div>

    {{-- Slide 21 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="{{ asset('assets/images/K2/livingthings/dna/d22.png') }}" />
        <h2 class="title stroke">In fact, a strand of DNA is a long string
            but too small to be visible to our eyes.</h2>
    </div>


    {{-- Slide 22 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/td12.png') }}" />
        <h2 class="title stroke">The reason we are able to see DNA in this activity is that
            there are so many of them clumped together at the end.</h2>
    </div>


    {{-- Slide 24 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/td12.png') }}" />
        <h2 class="title stroke">Therefore, the white strings and clumps are many DNA strands
            that are released from many tomato cells.</h2>
    </div>


    {{-- Slide 25 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/td13.png') }}" />
        <h2 class="title stroke">This is the image drawing of a tomato under a microscope.
            DNA is stored in the cells.</h2>
    </div>

    {{-- Slide 26 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/td14.png') }}" />
        <h2 class="title stroke">The <span class="text-white">chemicals</span> used in the process break down the outer
            covering of tomato <span class="text-white">cells</span> and release <span class="text-white">DNA</span> from
            the <span class="text-white">cells</span>.</h2>
    </div>


    {{-- Slide 27 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/td15.png') }}" />
        <h2 class="title stroke">As a matter of fact, the same chemicals have been used to
            extract our DNA, as well as a tomato's DNA.</h2>
        <p class="note">Note: Have children name the chemicals or things used.</p>
    </div>

    {{-- Slide 28 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/td16.png') }}" />
        <h2 class="title stroke">Based on the results of the activities, we can conclude that
            both animals and plants have DNA.</h2>
    </div>


    {{-- Slide 29 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/td17.png') }}" />
        <h2 class="title stroke"><span class="text-white">Animals</span> and <span class="text-white">plants</span> are
            <span class="text-white">living things</span>, so we can summarize
            that <span class="text-white">all living things have DNA</span>!
        </h2>
    </div>



    {{-- ====================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button
         class="doneButton">
 <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>


 <div id="buttons" class="absolute  flex flex-row gap-6 ">

        <!-- Return Button -->
        <a id="returnButton">
 <img
    src="{{ asset('assets/images/pptimages/return.png') }}" />
        </a>

        <!-- Home Button -->
        <button
     id="homeButton">
            <img 
                src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
        </button>

        <!-- Close Button -->
        <button id="closeButton">
           
            <img 
                src="{{ asset('assets/images/pptimages/cancel.png') }}" />
    
        </button>

    </div>

    {{-- next Button --}}
    <div class="down-btn-container">

        <button
            class="nextButton">
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
                        window.location.href = "{{ route('tomatoDnaSelection') }}";
                    }
                });
            }

            // Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
