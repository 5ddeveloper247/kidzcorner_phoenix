@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Double DNA Helix</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/livingthings/dna/td16.png') }}" class="img-xl" />
        <div class="title stroke">
            <h2>Children, do you still remember what does DNA look like? Is it possible to see a strand of DNA with our
                naked eyes?</h2>
        </div>
    </div>

    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/livingthings/dna/d22.png') }}" class="img-xl" />
        <h2 class="title stroke">A strand of DNA is a long string but too small to be visible to our eyes.</h2>
    </div>

    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/livingthings/dna/h2.png') }}" class="img-xl" />
        <h2 class="title stroke text-center">Thanks to the efforts of some scientists, the structure of DNA was discovered
            in 1953.</h2>
    </div>

    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/livingthings/dna/h1.png') }}" class="img-h-sm" />
        <h2 class="title stroke text-center">This is the scientific drawing of DNA in close-up. It has a special shape that
            is called a double helix.</h2>
    </div>

    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/livingthings/dna/h1.png') }}" class="img-h-sm" />
        <h2 class="title stroke">What does <span class="!text-white">DNA</span> look like?</h2>
    </div>

    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/livingthings/dna/h1.png') }}" class="img-h-sm" />
        <h2 class="title stroke">DNA actually looks like a twisted ladder.</h2>
    </div>

    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/livingthings/dna/h1.png') }}" class="img-h-sm" />
        <h2 class="title stroke">Its is made up of two long twisted rails and many rungs.</h2>
    </div>

    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/livingthings/dna/h1.png') }}" class="img-h-sm" />
        <h2 class="title stroke">The rungs are special. Each one formed by a pair of bases.</h2>
        <p class="note">Note: Have children guess how many bases are there (count the number of colours that formed
            rungs).</p>
    </div>

    {{-- Slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="flex items-center relative">
            <img src="{{ asset('assets/images/K2/livingthings/dna/h3.png') }}" class="img-h-md" />
            <div class="flex flex-col gap-[1.3vw] items-center">
                <!-- sound Button -->
                <button onclick="playSound1()">
                    <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" class="!max-w-[2.8vw]" />
                </button>

                <!-- sound Button -->
                <button onclick="playSound2()">
                    <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" class="!max-w-[2.8vw]" />
                </button>

                <!-- sound Button -->
                <button onclick="playSound3()">
                    <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" class="!max-w-[2.8vw]" />
                </button>

                <!-- sound Button -->
                <button onclick="playSound4()">
                    <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" class="!max-w-[2.8vw] z-[99]" />
                </button>
            </div>
        </div>
        <h2 class="title stroke text-center">The four bases have names, <br>but they prefer to be called by their initials.
        </h2>
        <p class="note text-center">Note: Have children name the initials and try to pronounce the names of the four bases.
        </p>
    </div>

    {{-- Slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/livingthings/dna/h3.png') }}" class="img-h-sm" />
        <h2 class="title stroke">The bases don't like to be alone, so they always pair up with a friend. A always pair with
            T and C always pair with G.</h2>
        <p class="note text-center">Note: Have children check if A always pair with T and C always pair with G.</p>
    </div>

    {{-- Slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/livingthings/dna/h4.png') }}" class="img-h-md" />
        <h2 class="title stroke">In short, a DNA double helix is composed of long sequences of the four bases.</h2>
        <p class="note text-center">Note: Have children talk about the differences between the two DNA.</p>
    </div>

    {{-- Slide 12 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/livingthings/dna/h5.png') }}" class="img-xl" />
        <h2 class="title stroke">We look so different from a tomato, thanks to the different orders of the bases in DNA!
        </h2>
    </div>

    {{-- Slide 13 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">Now we'll learn how to make a model of <span class="!text-white">DNA Double Helix</span>!
        </h2>
    </div>

    {{-- Slide 14 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <h2 class="title stroke !text-white">Individual Activity</h2>
        <img src="{{ asset('assets/images/K2/livingthings/dna/h6.png') }}" class="img-lg" />
        <div class="text-start">
            <h2 class="title stroke text-start">Let's find out: <br>How to make a model of DNA double helix?</h2>
        </div>
        <p class="note text-center">Note: Display all the things needed. Have children name each and then give each child a
            set of things needed.</p>
    </div>

    {{-- Slide 15 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke text-start">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke text-start">
                <li>Find out the colour representation of each bead.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/h7.png') }}" class="img-lg" />
        <p class="note text-center">Note: Display the beads with labels. Guide children to understand which coloured bead
            represent which base.</p>
    </div>

    {{-- Slide 16 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke text-start">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke text-start" start="2">
                <li>Create base pairs by hooking AT or CG beads together in the middle of the twist tie.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/h8.png') }}" class="img-xl" />
        <p class="note text-center">Note: Tell children how many base pairs is needed (this sample needs 10 pairs in total)
            and it is up to them to have equal or unequal numbers of AT and CG base pairs.</p>
    </div>

    {{-- Slide 17 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke text-start">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke text-start" start="3">
                <li>Attach the base pairs to the pipe cleaners by twisting the free ends of twist ties around the pipe cleaners.
                </li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/h9.png') }}" class="img-xl" />
        <p class="note text-center">Note: Advise children to space the base pairs as evenly as possible on the pipe
            cleaners (around 1cm gap) Tell them that it is up to them to create the order of the base pairs.</p>
    </div>

    {{-- Slide 18 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke text-start">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke text-start" start="4">
                <li>Display and observe the ladder made.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/h10.png') }}" class="img-sm" />
        <p class="note text-center">Note: Have children place all ladders made together for observations.</p>
    </div>

    {{-- Slide 19 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/livingthings/dna/h10.png') }}" class="img-sm" />
        <h2 class="text-start title stroke">What do you observe: <br>Do you find many friends have the same base pattern like yours?
        </h2>
        <p class="note">Note: Guide children to compare base arrangements of different ladders.</p>
    </div>

    {{-- Slide 20 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/livingthings/dna/h10.png') }}" class="img-sm" />
        <h2 class="text-start title stroke">What do you observe: <br>How many base patterns have been designed by the class?</h2>
        <p class="note">Note: Guide children to count and record the number.</p>
    </div>

    {{-- Slide 21 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <div class="text-start">
            <h2 class="title stroke text-start">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke text-start" start="5">
                <li>Twist the ladder to form the shape of DNA double helix.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/h11.png') }}" class="img-xl" />
        <p class="note text-center">Note: Adjust the shape and tidy up one end of DNA model for each child (refer to
            teacher resource).</p>
    </div>

    {{-- Slide 22 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke text-start">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke text-start" start="6">
                <li>Attach a strap over the DNA double helix.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/h12.png') }}" class="img-xl" />
        <p class="note">Note: Tell children that they can use the DNA model as a charm to hang on their belongings.</p>
    </div>

    {{-- Slide 23 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <h2 class="text-start title stroke">What do you learn: <br>How many base patterns of DNA double helix have been designed by
            the class?</h2>
        <img src="{{ asset('assets/images/K2/livingthings/dna/h13.png') }}" class="img-xl" />
        <p class="note">Note: Have children refer to their record for the answer.</p>
    </div>

    {{-- Slide 24 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/livingthings/dna/h13.png') }}" class="img-xl" />
        <h2 class="title stroke">Through the activity, we know that the shape of different DNA is the same but the order of
            the bases is different.</h2>
    </div>

    {{-- Slide 25 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/livingthings/dna/h13.png') }}" class="img-xl" />
        <h2 class="title stroke">Due to the different orders of the bases, <br>different DNA have different building
            instructions!</h2>
    </div>

    {{-- Slide 26 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/livingthings/dna/h14.png') }}" class="img-xl" />
        <h2 class="title stroke">That's why every living thing, either an animal or a plant, has its own unique look.</h2>
    </div>

    {{-- Slide 27 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <div class="text-start">
            <h2 class="!text-white title stroke">Let's look at ourselves!</h2>
            <h2 class="title stroke">Have you ever wondered:</h2>
            <ol class="lesson-ul list-decimal title stroke">
                <li>Why is my hair straight or curly?</li>
                <li>Why is my eye colour brown, blue, green, or another colour?</li>
                <li>Why am I left-handed or right-handed?</li>
                <li>Why do I have attached or unattached earlobes?</li>
                <li>Why can I roll my tongue — or why can't I?</li>
            </ol>
        </div>
        <p class="note">Note: Guide children to compare their physical look (if possible, in front of a big mirror).</p>
    </div>

    {{-- Slide 28 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/livingthings/dna/h15.png') }}" class="img-lg" />
        <h2 class="title stroke">DNA determines our traits like hair type, facial feature, height, body shape and
            handedness.</h2>
    </div>

    {{-- Slide 29 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/livingthings/dna/h16.png') }}" class="img-md" />
        <h2 class="title stroke">As we get part of our DNA from father and part from mother, so we often hear of the term
            "family resemblance".</h2>
        <p class="note">Note: Guide children to understand the meaning of family resemblance (similarities between family
            members).</p>
    </div>

    {{-- Slide 30 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="flex items-center">
            <img src="{{ asset('assets/images/K2/livingthings/dna/h17.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/K2/livingthings/dna/h16.png') }}" class="img-sm" />
        </div>
        <h2 class="title stroke">As a matter of fact. <br>we share some traits with people around.</h2>
    </div>

    {{-- Slide 31 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="flex items-center">
            <img src="{{ asset('assets/images/K2/livingthings/dna/h17.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/K2/livingthings/dna/h16.png') }}" class="img-sm" />
        </div>
        <h2 class="title stroke">However, every one of us has a unique combination of traits that is different from anyone
            else! Do you know why?</h2>
    </div>

    {{-- Slide 32 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="flex items-center">
            <img src="{{ asset('assets/images/K2/livingthings/dna/h17.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/K2/livingthings/dna/h16.png') }}" class="img-sm" />
        </div>
        <h2 class="title stroke">We are all unique <br>because the bases in our DNA are arranged differently!</h2>
    </div>

    {{-- Slide 33 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center p-[20px] flex flex-col justify-center items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('assets/images/K2/livingthings/dna/h18.png') }}" />
        </div>
    </div>



    {{-- ================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    <div id="buttons" class="absolute flex flex-row gap-6">
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
        const sound1 = new Audio('{{ asset('assets/audio/helix1.mp3') }}');
        const sound2 = new Audio('{{ asset('assets/audio/helix2.mp3') }}');
        const sound3 = new Audio('{{ asset('assets/audio/helix3.mp3') }}');
        const sound4 = new Audio('{{ asset('assets/audio/helix4.mp3') }}');

        function playSound1() {
            sound1.play();
        }

        function playSound2() {
            sound2.play();
        }

        function playSound3() {
            sound3.play();
        }

        function playSound4() {
            sound4.play();
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

            const whereToGoWhenReturn = "{{ route('helixSelection') }}";
            const whereToGoWhenDone = "{{ route('k2livingthings') }}";

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
                // If on first slide and not in special mode, go to return route
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
                    } else {
                        // If somehow at slide 0, go to return route
                        window.location.href = whereToGoWhenReturn;
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
