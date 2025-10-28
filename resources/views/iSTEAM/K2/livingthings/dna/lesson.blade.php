@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="title stroke">
            <h2>What are the common points of <span class="text-white">living things</span>?</h2>
            <h2>Can you name some examples of <span class="text-white">living things</span>?</h2>
        </div>
        <p class="note text-center">Note: Encourage children to recall and share the six basic characteristics of living
            things; have them name some examples of living things around them.</p>
    </div>



    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-center  ">
            <div class="title stroke text-start">
                <h2>Living things are things that...:</h2>
                <ul class="!text-white">
                    <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" class="w-[2.5vw]" />
                        <p> Move on their own</p>
                    </li>
                    <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" class="w-[2.5vw]" />
                        <p> Drink</p>
                    </li>
                    <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" class="w-[2.5vw]" />
                        <p>Eat</p>
                    </li>
                    <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" class="w-[2.5vw]" />
                        <p> Breath (need air)</p>
                    </li>
                    <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" class="w-[2.5vw]" />
                        <p> Grow (get bigger)</p>
                    </li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/N2/LivingThings/an15.png') }}" class="!max-w-[14vw]" />
        </div>
        <p class="note">Note: Invite children to sing “”It is Living”” song together.</p>
    </div>


    {{-- Slide3 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="{{ asset('assets/images/K2/livingthings/pthings/p24.png') }}" class="large-img6" />
        <h2 class="text-center title stroke">Animals and plants are groups of living things.</h2>
    </div>


    {{-- slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="text-start title stroke">Today, we’ll find out another common point
            of <span class="text-white">living thing</span> called <span class="text-white">DNA</span>!</h2>
    </div>


    {{-- Slide 5 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/d1.png') }}" class="w-[400px]" />
        <h2 class="title stroke">What is this? <br>
            Have you ever played it? How do you play it?</h2>
    </div>


    {{-- slide 6 --}}
    <div class="slide  hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/livingthings/dna/d1.png') }}" class="w-[400px]" />
            <img src="{{ asset('assets/images/K2/livingthings/dna/d2.png') }}" class="w-[400px]" />
        </div>
        <h2 class="title stroke">A set of building bricks can be joined together
            to form an object.</h2>
    </div>


    {{-- slide 7 --}}
    <div class="slide  hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/d3.png') }}" class="large-img6" />
        <h2 class="title stroke">Different sets of bricks can build different objects.</h2>
        <p class="note">Note: Have children name the different objects that can be constructed.</p>
    </div>


    {{-- slide 8 --}}
    <div class="slide  hidden  flex flex-col items-center justify-start  ">
        <div>
            <img src="{{ asset('assets/images/K2/livingthings/dna/d4.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke">This set of bricks can build a car.</h2>
    </div>



    {{-- Slide 9  --}}
    <div class="slide  hidden  flex flex-col items-center justify-start  ">
        <div>
            <img src="{{ asset('assets/images/K2/livingthings/dna/d5.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke">This set of bricks can build a dinosaur.</h2>
    </div>


    {{-- Slide 10 --}}
    <div class="slide  hidden  flex flex-col items-center justify-start  ">
        <div>
            <img src="{{ asset('assets/images/K2/livingthings/dna/d6.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke">So how do you know the correct way to build each object?</h2>
        <p class="note">Note: Encourage children to share their prior knowledge and experience.</p>
    </div>


    {{-- Slide 11 --}}
    <div class="slide  hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/d7.png') }}" class="large-img6" />
        <h2 class="title stroke">Do you think the seeds that you have planted
            go through the similar growing process?</h2>
    </div>


    {{-- Slide 12 --}}
    <div class="slide  hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/livingthings/dna/d8.png') }}" />
            <img src="{{ asset('assets/images/K2/livingthings/dna/d9.png') }}" />
        </div>
        <h2 class="title stroke">Different instruction manuals will show <br>
            how to build different objects correctly.</h2>
    </div>

    {{-- Slide 13 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="{{ asset('assets/images/K2/livingthings/pthings/p24.png') }}" class="large-img6" />
        <h2 class="text-center title stroke">Similarly, every living things has its own
            instruction manual called DNA!</h2>
    </div>

    {{-- Slide 14 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="{{ asset('assets/images/K2/livingthings/dna/d10.png') }}" class="large-img6" />
        <h2 class="text-center title stroke">DNA gives instruction to every living thing
            on how to form and work correctly.</h2>
    </div>

    {{-- Slide 15 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h1 class="!text-[4.5vw] stroke">
            <span class="text-white">DNA</span>
            <br>
            <span class="text-red-600">deoxyribonucleic <br>
                acid</span>
        </h1>
        <!-- sound Button -->
        <div onclick="toggleVideo('video1')"
            class="absolute top-1/2 right-[5vw]">
            <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" class="!max-w-[2.8vw]" />
        </div>
        <h2 class="text-center title stroke">DNA stands for deoxyribonucleic acid. Can you pronounce it?
            Where do you think our DNA is in our body?</h2>
    </div>

    {{-- Slide 16 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/livingthings/dna/d2.png') }}" class="w-[400px]" />
            <img src="{{ asset('assets/images/K2/livingthings/dna/d10.png') }}" class="w-[600px]" />
        </div>
        <h2 class="text-center title stroke">Like this car is made up of different bricks, every living thing
            is made up of different tiny <span class="text-white">cells</span>.</h2>
    </div>

    {{-- Slide 17 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="text-center title stroke">Now we'll learn how to take out DNA from our body.
            We'll see what does DNA really look like!</h2>
    </div>

    {{-- Slide 18 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="{{ asset('assets/images/K2/livingthings/dna/d10.png') }}" class="large-img6" />
        <h2 class="text-center title stroke"><span class="text-white">DNA</span> is located in every cell.
            So every cell has an <span class="text-white">instruction manual</span>.</h2>
    </div>

    {{-- Slide 19 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="text-center justify-start text-[45px] text-white stroke">Class Activity</h2>
        <img src="{{ asset('assets/images/K2/livingthings/dna/d11.png') }}" class="w-[400px]" />
        <h2 class="title stroke">Let's find out: <br>
            How to extract DNA from one's mouth? What does it look like?</h2>
    </div>


    {{-- Slide 20 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke">Let's do: <br>
            1. Mix together 100ml distilled water and half a teaspoon of salt in a cup.</h2>
        <img src="{{ asset('assets/images/K2/livingthings/dna/d12.png') }}" />
        <p class="note text-center">Note: Guide children to measure and prepare the salt water; stir until salt is
            dissolved.</p>
    </div>

    {{-- Slide 21 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke">Let's do: <br>
            2. Transfer 4 tablespoons of the salt water into another cup.</h2>
        <img src="{{ asset('assets/images/K2/livingthings/dna/d13.png') }}" />
        <p class="note text-center">Note: Invite a child to do the step; can be 4 tablespoons or 30ml.</p>
    </div>

    {{-- Slide 22 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke">Let's do: <br>
            3. Gargle the salt water for one minute. Try hard and don't swallow it!</h2>
        <img src="{{ asset('assets/images/K2/livingthings/dna/d14.png') }}" />
        <p class="note text-center">Note: Teacher to do the step; for better result, clean your mouth beforehand to remove
            any food residue.</p>
    </div>


    {{-- Slide 24 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke">Let's do: <br>
            4. Spit the water back into the cup.</h2>
        <img src="{{ asset('assets/images/K2/livingthings/dna/d15.png') }}" class="large-img6" />
    </div>


    {{-- Slide 25 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke">Let's do: <br>
            5. Add one drop of clear liquid dish soap to the cup. Stir
            gently to avoid making bubbles.</h2>
        <img src="{{ asset('assets/images/K2/livingthings/dna/d16.png') }}" class="large-img6" />
    </div>

    {{-- Slide 26 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke">Let's do: <br>
            6. Mix together 30ml cold rubbing alcohol and 3 drops food colouring in another cup.</h2>
        <img src="{{ asset('assets/images/K2/livingthings/dna/d17.png') }}" class="large-img6" />
        <p class="note">Note: Guide children to measure and prepare the alcohol mixture.</p>
    </div>


    {{-- Slide 27 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke">Let's do: <br>
            7.Gently pour the alcohol mixture from the side into the cup with gargled water.</h2>
        <img src="{{ asset('assets/images/K2/livingthings/dna/d18.png') }}" class="large-img6" />
        <p class="note">Note: Teacher to do the step; do not mix or stir.</p>
    </div>

    {{-- Slide 28 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke">Let's do: <br>
            8. Observe what happens in the cup.</h2>
        <img src="{{ asset('assets/images/K2/livingthings/dna/d19.png') }}" class="large-img6" />
        <p class="note">Note: Advise observation from the top view. Take a photo of the result for use in the next
            lesson.</p>
    </div>


    {{-- Slide 29 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/d20.png') }}" class="large-img6" />
        <h2 class="title stroke">What do you observe? <br>
            What happens in the cup?</h2>
    </div>

    {{-- Slide 30 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke">What do you learn: <br>
            What are the white strings and clumps in the cup?</h2>
        <img src="{{ asset('assets/images/K2/livingthings/dna/d21.png') }}" class="large-img6" />
    </div>

    {{-- Slide 31 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/d21.png') }}" class="large-img6" />
        <h2 class="title stroke text-center">Through the activity, we know that the white strings and
            clumps are DNA strands from the mouth.</h2>
    </div>

    {{-- Slide 32 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/d22.png') }}" class="large-img6" />
        <h2 class="title stroke text-center">In fact, a strand of DNA is a long string <br>
            but too small to be visible to our eyes.</h2>
    </div>


    {{-- Slide 33 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/d21.png') }}" class="large-img6" />
        <h2 class="title stroke text-center">The reason we are able to see DNA in this activity is that
            there are so many of them clumped together at the end.</h2>
    </div>


    {{-- Slide 34 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/d21.png') }}" class="large-img6" />
        <h2 class="title stroke text-center">Do you know why are these DNA strands clumped together?
            Where do they come from?</h2>
    </div>


    {{-- Slide 35 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/d14.png') }}" class="large-img6" />
        <h2 class="title stroke text-center">When one gargle with salt water vigorously and spit it back
            out, cheek cells will be collected in the salt water.</h2>
    </div>


    {{-- Slide 36 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/d23.png') }}" class="large-img6" />
        <h2 class="title stroke text-center">For better understanding, this is the scientific drawing of our
            cheek. DNA is stored in the cells.</h2>
    </div>


    {{-- Slide 37 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-center gap-5">
            <div class="flex flex-col items-center gap-5">
                <img src="{{ asset('assets/images/K2/livingthings/dna/d12.png') }}" class="w-[500px]" />
                <img src="{{ asset('assets/images/K2/livingthings/dna/d18.png') }}" class="w-[500px]" />
            </div>
            <img src="{{ asset('assets/images/K2/livingthings/dna/d21.png') }}" class="w-[550px]" />
        </div>
        <h2 class="title stroke text-center">The chemicals used in the process break down the outer
            covering of cheek cells and release <span class="text-white">DNA</span> from the cells.</h2>
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
    // Redirect to route if on slide 1
    if (currentSlide === 1) {
        window.location.href = "{{ route('your-route-name') }}";
        return;
    }

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
                        window.location.href = "{{ route('DnaSelection') }}";
                    }
                });
            }

            // Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
