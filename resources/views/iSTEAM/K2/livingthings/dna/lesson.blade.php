@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">What is DNA?</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <div class="title stroke">
            <h2>What are the common points of <span class="!text-white">living things</span>?</h2>
            <h2>Can you name some examples of <span class="!text-white">living things</span>?</h2>
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
                    <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}"
                            class="w-[2.5vw]" />
                        <p> Move on their own</p>
                    </li>
                    <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}"
                            class="w-[2.5vw]" />
                        <p> Drink</p>
                    </li>
                    <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}"
                            class="w-[2.5vw]" />
                        <p>Eat</p>
                    </li>
                    <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}"
                            class="w-[2.5vw]" />
                        <p> Breath (need air)</p>
                    </li>
                    <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}"
                            class="w-[2.5vw]" />
                        <p> Grow (get bigger)</p>
                    </li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/N2/LivingThings/an15.png') }}" class="!max-w-[14vw]" />
        </div>
        <p class="note">Note: Invite children to sing “”It is Living”” song together.</p>
    </div>


    {{-- Slide3 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K2/livingthings/pthings/p24.png') }}" class="large-img6" />
        <h2 class="text-center title stroke">Animals and plants are groups of living things.</h2>
    </div>


    {{-- slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <h2 class=" title stroke">Today, we’ll find out another common point
            of <span class="!text-white">living thing</span> called <span class="!text-white">DNA</span>!</h2>
    </div>


    {{-- Slide 5 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/d1.png') }}" class="w-img" />
        <h2 class="title stroke">What is this? <br>
            Have you ever played it? How do you play it?</h2>
    </div>


    {{-- slide 6 --}}
    <div class="slide  hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/livingthings/dna/d1.png') }}" class="w-img" />
            <img src="{{ asset('assets/images/K2/livingthings/dna/d2.png') }}" class="w-img" />
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
            <img src="{{ asset('assets/images/K2/livingthings/dna/d8.png') }}" class="w-img" />
            <img src="{{ asset('assets/images/K2/livingthings/dna/d9.png') }}" class="w-img" />
        </div>
        <h2 class="title stroke">Different instruction manuals will show <br>
            how to build different objects correctly.</h2>
    </div>

    {{-- Slide 13 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K2/livingthings/pthings/p24.png') }}" class="large-img6" />
        <h2 class="text-center title stroke">Similarly, every living things has its own
            instruction manual called DNA!</h2>
    </div>

    {{-- Slide 14 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/d10.png') }}" class="large-img6" />
        <h2 class="text-center title stroke">DNA gives instruction to every living thing
            on how to form and work correctly.</h2>
    </div>

    {{-- Slide 15 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <h1 class="!text-[4.5vw] stroke">
            <span class="!text-white">DNA</span>
            <br>
            <span class="text-red-600">deoxyribonucleic <br>
                acid</span>
        </h1>
        <!-- sound Button -->
        <button onclick="playSound()" class="absolute top-1/2 right-[-10vw] z-[99]">
            <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" class="!max-w-[2.8vw]" />
        </button>
        <h2 class="text-center title stroke">DNA stands for deoxyribonucleic acid. Can you pronounce it?
            Where do you think our DNA is in our body?</h2>
    </div>

    {{-- Slide 16 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/livingthings/dna/d2.png') }}" class="w-img" />
            <img src="{{ asset('assets/images/K2/livingthings/dna/d10.png') }}" class="!max-w-[30vw]" />
        </div>
        <h2 class="text-center title stroke">Like this car is made up of different bricks, every living thing
            is made up of different tiny <span class="!text-white">cells</span>.</h2>
    </div>

    {{-- Slide 17 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <h2 class="text-center title stroke">Now we'll learn how to take out DNA from our body.
            We'll see what does DNA really look like!</h2>
    </div>

    {{-- Slide 18 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/d10.png') }}" class="large-img6" />
        <h2 class="text-center title stroke"><span class="!text-white">DNA</span> is located in every cell.
            So every cell has an <span class="!text-white">instruction manual</span>.</h2>
    </div>

    {{-- Slide 19 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <h2 class="text-center justify-start text-[45px] !text-white stroke">Class Activity</h2>
        <img src="{{ asset('assets/images/K2/livingthings/dna/d11.png') }}" class=" w-img !h-[14vw]" />
        <h2 class="title stroke text-start">Let's find out: <br>
            How to extract DNA from one's mouth? What does it look like?</h2>
    </div>


    {{-- Slide 20 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke text-start">Let's do: <br>
            1. Mix together 100ml distilled water and half a teaspoon of salt in a cup.</h2>
        <img src="{{ asset('assets/images/K2/livingthings/dna/d12.png') }}" class="w-img3" />
        <p class="note text-center">Note: Guide children to measure and prepare the salt water; stir until salt is
            dissolved.</p>
    </div>

    {{-- Slide 21 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke text-start">Let's do: <br>
            2. Transfer 4 tablespoons of the salt water into another cup.</h2>
        <img src="{{ asset('assets/images/K2/livingthings/dna/d13.png') }}" class="w-img" />
        <p class="note text-center">Note: Invite a child to do the step; can be 4 tablespoons or 30ml.</p>
    </div>

    {{-- Slide 22 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke text-start">Let's do: <br>
            3. Gargle the salt water for one minute. Try hard and don't swallow it!</h2>
        <img src="{{ asset('assets/images/K2/livingthings/dna/d14.png') }}" class="w-img" />
        <p class="note text-center">Note: Teacher to do the step; for better result, clean your mouth beforehand to remove
            any food residue.</p>
    </div>


    {{-- Slide 24 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke text-start">Let's do: <br>
            4. Spit the water back into the cup.</h2>
        <img src="{{ asset('assets/images/K2/livingthings/dna/d15.png') }}" class="large-img6" />
    </div>


    {{-- Slide 25 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke text-start">Let's do: <br>
            5. Add one drop of clear liquid dish soap to the cup. Stir
            gently to avoid making bubbles.</h2>
        <img src="{{ asset('assets/images/K2/livingthings/dna/d16.png') }}" class="large-img6" />
    </div>

    {{-- Slide 26 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke text-start">Let's do: <br>
            6. Mix together 30ml cold rubbing alcohol and 3 drops food colouring in another cup.</h2>
        <img src="{{ asset('assets/images/K2/livingthings/dna/d17.png') }}" class="large-img6" />
        <p class="note">Note: Guide children to measure and prepare the alcohol mixture.</p>
    </div>


    {{-- Slide 27 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke text-start">Let's do: <br>
            7.Gently pour the alcohol mixture from the side into the cup with gargled water.</h2>
        <img src="{{ asset('assets/images/K2/livingthings/dna/d18.png') }}" class="large-img6" />
        <p class="note">Note: Teacher to do the step; do not mix or stir.</p>
    </div>

    {{-- Slide 28 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke text-start">Let's do: <br>
            8. Observe what happens in the cup.</h2>
        <img src="{{ asset('assets/images/K2/livingthings/dna/d19.png') }}" class="large-img6" />
        <p class="note">Note: Advise observation from the top view. Take a photo of the result for use in the next
            lesson.</p>
    </div>


    {{-- Slide 29 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/d20.png') }}" />
        <h2 class="title stroke">What do you observe? <br>
            What happens in the cup?</h2>
    </div>

    {{-- Slide 30 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke">What do you learn: <br>
            What are the white strings and clumps in the cup?</h2>
        <img src="{{ asset('assets/images/K2/livingthings/dna/d21.png') }}" />
    </div>

    {{-- Slide 31 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/d21.png') }}" />
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
        <img src="{{ asset('assets/images/K2/livingthings/dna/d21.png') }}" />
        <h2 class="title stroke text-center">The reason we are able to see DNA in this activity is that
            there are so many of them clumped together at the end.</h2>
    </div>


    {{-- Slide 34 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/d21.png') }}" />
        <h2 class="title stroke text-center">Do you know why are these DNA strands clumped together?
            Where do they come from?</h2>
    </div>


    {{-- Slide 35 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/d14.png') }}" />
        <h2 class="title stroke text-center">When one gargle with salt water vigorously and spit it back
            out, cheek cells will be collected in the salt water.</h2>
    </div>


    {{-- Slide 36 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/d23.png') }}" />
        <h2 class="title stroke text-center">For better understanding, this is the scientific drawing of our
            cheek. DNA is stored in the cells.</h2>
    </div>


    {{-- Slide 37 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-center gap-5">
            <div class="flex flex-col items-center gap-5">
                <img src="{{ asset('assets/images/K2/livingthings/dna/d12.png') }}" class="w-img" />
                <img src="{{ asset('assets/images/K2/livingthings/dna/d18.png') }}" class="w-img" />
            </div>
            <img src="{{ asset('assets/images/K2/livingthings/dna/d21.png') }}" class="w-img" />
        </div>
        <h2 class="title stroke text-center">The chemicals used in the process break down the outer
            covering of cheek cells and release <span class="!text-white">DNA</span> from the cells.</h2>
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
        // Audio functionality - must be outside DOMContentLoaded for onclick access
        const sound = new Audio('{{ asset('assets/audio/dna.mp3') }}');

        function playSound() {
            sound.play();
        }

        function toggleVideo(videoId) {
            const video = document.getElementById(videoId);
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        }

        document.addEventListener("DOMContentLoaded", function() {
            const slides = document.querySelectorAll(".slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");

            // Get all clickable buttons (info-btn, click-btn)
            const clickButtons = document.querySelectorAll("[class*='info-btn'], [class*='click-btn']");

            let currentSlideNumber = 0;
            let inSpecialMode = false;
            let slideToReturnTo = null;
            let specialSlideType = null;

            const whereToGoWhenReturn = "{{ route('DnaSelection') }}";
            const whereToGoWhenDone = "{{ route('DnaSelection') }}";

            function pauseAllVideos() {
                const videos = document.querySelectorAll('video');
                for (let i = 0; i < videos.length; i++) {
                    videos[i].pause();
                }
            }

            function isSpecialSlide(slide) {
                const classes = slide.className.split(' ');
                for (let i = 0; i < classes.length; i++) {
                    // Check for click pattern (click1, click2, etc.)
                    if (classes[i].startsWith('click') && classes[i].match(/^click\d+$/)) {
                        return true;
                    }
                    // Check for info-slide pattern (info-slide1, info-slide2, etc.)
                    if (classes[i].startsWith('info-slide') && classes[i].match(/^info-slide\d+$/)) {
                        return true;
                    }
                }
                return false;
            }

            function getSpecialTypeFromButton(button) {
                const classes = button.className.split(' ');
                for (let i = 0; i < classes.length; i++) {
                    // Handle click-btn pattern (click-btn1 → click1)
                    if (classes[i].startsWith('click-btn')) {
                        const number = classes[i].replace('click-btn', '');
                        return 'click' + number;
                    }
                    // Handle info-btn pattern (info-btn1 → info-slide1)
                    if (classes[i].startsWith('info-btn')) {
                        const number = classes[i].replace('info-btn', '');
                        return 'info-slide' + number;
                    }
                }
                return null;
            }

            function hasMoreSpecialSlides(startFrom) {
                if (!specialSlideType) {
                    return false;
                }

                for (let i = startFrom + 1; i < slides.length; i++) {
                    if (slides[i].classList.contains(specialSlideType)) {
                        return true;
                    }
                }
                return false;
            }

            function isLastSlide(slideNumber) {
                if (slideNumber === slides.length - 1) {
                    return true;
                }

                if (inSpecialMode && !hasMoreSpecialSlides(slideNumber)) {
                    return true;
                }

                return false;
            }

            function showSlide(slideNumber) {
                pauseAllVideos();

                for (let i = 0; i < slides.length; i++) {
                    if (i === slideNumber) {
                        slides[i].classList.remove("hidden");
                    } else {
                        slides[i].classList.add("hidden");
                    }
                }

                if (isLastSlide(slideNumber)) {
                    for (let i = 0; i < nextButtons.length; i++) {
                        nextButtons[i].classList.add("hidden");
                    }
                    if (doneButton) {
                        doneButton.classList.remove("hidden");
                    }
                } else {
                    for (let i = 0; i < nextButtons.length; i++) {
                        nextButtons[i].classList.remove("hidden");
                    }
                    if (doneButton) {
                        doneButton.classList.add("hidden");
                    }
                }
            }

            function goToNextSlide() {
                if (currentSlideNumber >= slides.length - 1) {
                    return;
                }

                currentSlideNumber++;

                while (currentSlideNumber < slides.length) {
                    const slide = slides[currentSlideNumber];

                    if (inSpecialMode) {
                        if (slide.classList.contains(specialSlideType)) {
                            break;
                        }
                    } else {
                        if (!isSpecialSlide(slide)) {
                            break;
                        }
                    }

                    currentSlideNumber++;
                }

                if (currentSlideNumber < slides.length) {
                    showSlide(currentSlideNumber);
                }
            }

            function goToPreviousSlide() {
                if (currentSlideNumber === 0 && !inSpecialMode) {
                    window.location.href = whereToGoWhenReturn;
                    return;
                }

                if (inSpecialMode) {
                    let previousSlide = currentSlideNumber - 1;

                    while (previousSlide >= 0) {
                        if (slides[previousSlide].classList.contains(specialSlideType)) {
                            break;
                        }
                        previousSlide--;
                    }

                    if (previousSlide >= 0) {
                        currentSlideNumber = previousSlide;
                        showSlide(currentSlideNumber);
                    } else {
                        currentSlideNumber = slideToReturnTo;
                        inSpecialMode = false;
                        specialSlideType = null;
                        slideToReturnTo = null;
                        showSlide(currentSlideNumber);
                    }
                } else {
                    if (currentSlideNumber > 0) {
                        currentSlideNumber--;

                        while (currentSlideNumber > 0 && isSpecialSlide(slides[currentSlideNumber])) {
                            currentSlideNumber--;
                        }

                        showSlide(currentSlideNumber);
                    }
                }
            }

            // Handle all click buttons (info-btn and click-btn)
            for (let i = 0; i < clickButtons.length; i++) {
                clickButtons[i].addEventListener("click", function(event) {
                    event.preventDefault();

                    slideToReturnTo = currentSlideNumber;
                    inSpecialMode = true;
                    specialSlideType = getSpecialTypeFromButton(clickButtons[i]);

                    for (let j = 0; j < slides.length; j++) {
                        if (slides[j].classList.contains(specialSlideType)) {
                            currentSlideNumber = j;
                            showSlide(currentSlideNumber);
                            break;
                        }
                    }
                });
            }

            // Next button handlers
            for (let i = 0; i < nextButtons.length; i++) {
                nextButtons[i].addEventListener("click", goToNextSlide);
            }

            // Return button handler
            returnButton.addEventListener("click", goToPreviousSlide);

            // Done button handler
            if (doneButton) {
                doneButton.addEventListener("click", function() {
                    if (inSpecialMode && slideToReturnTo !== null) {
                        currentSlideNumber = slideToReturnTo;
                        inSpecialMode = false;
                        specialSlideType = null;
                        slideToReturnTo = null;
                        showSlide(currentSlideNumber);
                    } else {
                        window.location.href = whereToGoWhenDone;
                    }
                });
            }

            showSlide(currentSlideNumber);
        });
    </script>
@endpush
