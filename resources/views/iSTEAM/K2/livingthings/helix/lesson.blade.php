@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/td16.png') }}" />
        <div class="title stroke">
            <h2>Children, do you still remember what does DNA look like?
                Is it possible to see a strand of DNA with our naked eyes?</h2>
        </div>
    </div>



    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/livingthings/dna/d22.png') }}" />
        <h2 class="title stroke">A strand of DNA is a long string
            but too small to be visible to our eyes.</h2>
    </div>


    {{-- Slide3 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/h2.png') }}" />
        <h2 class="title stroke text-center">Thanks to the efforts of some scientists,
            the structure of DNA was discovered in 1953.</h2>
    </div>

    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/h1.png') }}" class="!max-w-[10vw]" />
        <h2 class="title stroke text-center">This is the scientific drawing of DNA in close-up.
            It has a special shape that is called a double helix.</h2>
    </div>


    {{-- Slide 5 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/h1.png') }}" class="!max-w-[10vw]" />
        <h2 class="title stroke">What does <span class="text-white">DNA</span> look like?</h2>
    </div>


    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="{{ asset('assets/images/K2/livingthings/dna/h1.png') }}" class="!max-w-[10vw]" />
        <h2 class="title stroke">DNA actually looks like a twisted ladder.</h2>
    </div>



    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/h1.png') }}" class="!max-w-[10vw]" />
        <h2 class="title stroke">Its is made up of two long twisted rails and many rungs.</h2>
    </div>


    {{-- slide 8 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/h1.png') }}" class="!max-w-[10vw]" />
        <h2 class="title stroke">The rungs are special. Each one formed by a pair of bases.</h2>
        <p class="note">Note: Have children guess how many bases are there (count the number of colours that formed
            rungs).</p>
    </div>



    {{-- Slide 9  --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-center gap-5 relative">
            <img src="{{ asset('assets/images/K2/livingthings/dna/h3.png') }}" />
            <div class="flex flex-col gap-[1.3vw] items-center">
                <!-- sound Button -->
                <div data-property-1="Default"
                    class="">
                    <img class="!max-w-[3vw]" src="/assets/images/pptimages/sound-btn.png" alt="Sound Button" />
                </div>

                <!-- sound Button -->
                <div data-property-2="Default"
                    class="">
                    <img class="!max-w-[3vw]" src="/assets/images/pptimages/sound-btn.png" alt="Sound Button" />
                </div>

                <!-- sound Button -->
                <div data-property-1="Default"
                    class="">
                    <img class="!max-w-[3vw]" src="/assets/images/pptimages/sound-btn.png" alt="Sound Button" />
                </div>

                <!-- sound Button -->
                <div data-property-1="Default"
                    class="">
                    <img class="!max-w-[3vw]" src="/assets/images/pptimages/sound-btn.png" alt="Sound Button" />
                </div>
            </div>

        </div>
        <h2 class="title stroke text-center">The four bases have names, <br>
            but they prefer to be called by their initials.</h2>
        <p class="note text-center">Note: Have children name the initials and try to pronounce the names of the four bases.
        </p>
    </div>


    {{-- Slide 10 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/h3.png') }}" />
        <div class="self-start text-start">
            <h2 class="title stroke">The bases don't like to be alone, so they always pair up with a
                friend. A always pair with T and C always pair with G.</h2>
        </div>
        <p class="note text-center">Note: Have children check if A always pair with T and C always pair with G.</p>
    </div>



    {{-- Slide 11 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/h4.png') }}" />
        <h2 class="title stroke">In short, a DNA double helix is composed of
            long sequences of the four bases.</h2>
        <p class="note text-center">Note: Have children talk about the differences between the two DNA.</p>
    </div>



    {{-- Slide 12 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/h5.png') }}" />
        <h2 class="title stroke">We look so different from a tomato, thanks to the different
            orders of the bases in DNA!</h2>
    </div>


    {{-- Slide 13 --}}
    <div class="slide hidden  flex flex-col items-center justify-center  ">
        <h2 class="title stroke">Now we’ll learn how to make a model of <span class="text-white">DNA Double Helix</span>!
        </h2>
    </div>


    {{-- Slide 14 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke !text-white">Individual Activity</h2>
        <img src="{{ asset('assets/images/K2/livingthings/dna/h6.png') }}" />
        <div class="self-start text-start">
            <h2 class="title stroke">Let's find out: <br>
                How to make a model of DNA double helix?</h2>
        </div>
        <p class="note text-center">Note: Display all the things needed. Have children name each and then
            give each child a set of things needed.</p>
    </div>


    {{-- Slide 15 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                1. Find out the colour representation of each bead.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/h7.png') }}" />
        <p class="note text-center">Note: Display the beads with labels. Guide children to understand which
            coloured bead represent which base.</p>
    </div>


    {{-- Slide 16 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                2. Create base pairs by hooking AT or CG beads together in
                the middle of the twist tie.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/h8.png') }}" />
        <p class="note text-center">Note: Tell children how many base pairs is needed (this sample needs 10 pairs in total)
            and it is up to them to have equal or unequal numbers of AT and CG base pairs.</p>
    </div>


    {{-- Slide 17 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                3. Attach the base pairs to the pipe cleaners by twisting the
                free ends of twist ties around the pipe cleaners.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/h9.png') }}" />
        <p class="note text-center">Note: Advise children to space the base pairs as evenly as possible on the pipe cleaners
            (around 1cm gap) Tell them that it is up to them to create the order of the base pairs..</p>
    </div>


    {{-- Slide 18 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                4. Display and observe the ladder made.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/h10.png') }}" />
        <p class="note text-center">Note: Have children place all ladders made together for observations.</p>
    </div>


    {{-- Slide 19 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/livingthings/dna/h10.png') }}" />
        <h2 class="title stroke">What do you observe: <br>
            Do you find many friends have the same base pattern like yours?</h2>
        <p class="note">Note: Guide children to compare base arrangements of different ladders.</p>
    </div>


    {{-- Slide 20 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="{{ asset('assets/images/K2/livingthings/dna/h10.png') }}" />
        <h2 class="title stroke">What do you observe: <br>
            How many base patterns have been designed by the class?</h2>
        <p class="note">Note: Guide children to count and record the number.</p>
    </div>

    {{-- Slide 21 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                5. Twist the ladder to form the shape of DNA double helix.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/h11.png') }}" />
        <p class="note text-center">Note: Adjust the shape and tidy up one end of DNA model for each child
            (refer to teacher resource).</p>
    </div>


    {{-- Slide 22 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                6. Attach a strap over the DNA double helix.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/h12.png') }}" />
        <p class="note">Note: Tell children that they can use the DNA model as a charm to hang on their
            belongings.</p>
    </div>


    {{-- Slide 24 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke">What do you learn: <br>
            How many base patterns of DNA double helix have been designed by the class?</h2>
        <img src="{{ asset('assets/images/K2/livingthings/dna/h13.png') }}" />
        <p class="note">Note: Have children refer to their record for the answer.</p>
    </div>


    {{-- Slide 25 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/h13.png') }}" />
        <h2 class="title stroke">Through the activity, we know that the shape of different
            DNA is the same but the order of the bases is different.</h2>
    </div>

    {{-- Slide 26 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/h13.png') }}" />
        <h2 class="title stroke">Due to the different orders of the bases, <br>
            different DNA have different building instructions!</h2>
    </div>


    {{-- Slide 27 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/h14.png') }}" />
        <h2 class="title stroke">That's why every living thing, either an animal or a plant,
            has its own unique look.</h2>
    </div>

    {{-- Slide 28 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="text-start self-start">
            <h2 class="!text-white title stroke">Let's look at ourselves!</h2>
            <ul class="list-decimal title stroke">
                <h2>Have you ever wondered:</h2>
                <li>Why is my hair straight or curly?</li>
                <li>Why is my eye colour brown, blue, green, or another colour?</li>
                <li>Why am I left-handed or right-handed?</li>
                <li>Why do I have attached or unattached earlobes?</li>
                <li>Why can I roll my tongue — or why can’t I?</li>
            </ul>
        </div>
        <p class="note">Note: Guide children to compare their physical look (if possible, in front of a big mirror).</p>
    </div>


    {{-- Slide 29 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/h15.png') }}" />
        <h2 class="title stroke">DNA determines our traits like hair type, facial feature,
            height, body shape and handedness.</h2>
    </div>


    {{-- Slide 30 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/h16.png') }}" />
        <h2 class="title stroke">As we get part of our DNA from father and part from
            mother, so we often hear of the term "family resemblance".</h2>
        <p class="note">Note: Guide children to understand the meaning of family resemblance (similarities between family
            members).</p>
    </div>

    {{-- Slide 31 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/livingthings/dna/h17.png') }}" class="w-[500px]" />
            <img src="{{ asset('assets/images/K2/livingthings/dna/h16.png') }}" class="w-[500px]" />
        </div>
        <h2 class="title stroke">As a matter of fact. <br>
            we share some traits with people around.</h2>
    </div>


    {{-- Slide 32 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/livingthings/dna/h17.png') }}" class="w-[500px]" />
            <img src="{{ asset('assets/images/K2/livingthings/dna/h16.png') }}" class="w-[500px]" />
        </div>
        <h2 class="title stroke">However, every one of us has a unique combination of traits
            that is different from anyone else! Do you know why?</h2>
    </div>

    {{-- Slide 32 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/livingthings/dna/h17.png') }}" class="w-[500px]" />
            <img src="{{ asset('assets/images/K2/livingthings/dna/h16.png') }}" class="w-[500px]" />
        </div>
        <h2 class="title stroke">We are all unique <br>
            because the bases in our DNA are arranged differently!</h2>
    </div>

    {{-- sldie 33 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[30vw] h-fit bg-cover bg-center p-[20px] flex flex-col justify-center items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('assets/images/K2/livingthings/dna/h18.png') }}" />

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
                        window.location.href = "{{ route('helixSelection') }}";
                    }
                });
            }

            // Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
