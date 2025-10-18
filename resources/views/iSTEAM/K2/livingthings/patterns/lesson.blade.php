@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f10.png') }}" />
        <div class="title stroke">
            <h2>Children, as you know, <span class="text-white">fingerprints</span> are
                <span class="text-white">ridges</span> on the ips of our <span class="text-white">fingers</span> and <span
                    class="text-white">thumbs</span>.
            </h2>
        </div>
    </div>



    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col h-[50%] justify-between items-center">
        <h2 class="title stroke">When do you think we started having these ridges
            on our fingers and thumbs?</h2>
        <p class="note">Note: Encourage children to guess boldly.</p>
    </div>


    {{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp1.png') }}" />
        <h2 class="title stroke text-center">When you were still inside your mother's womb,
            the ridges on your fingers and thumbs started forming.</h2>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>

    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp2.png') }}" />
        <h2 class="title stroke text-center">The ridges form based on individual growing experience
            in the mother's womb.</h2>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- Slide 5 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f11.png') }}" />
        <h2 class="title stroke">That's why individual fingerprints are unique and no two people
            have the same fingerprints, including identical twins.</h2>
    </div>


    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f11.png') }}" />
        <h2 class="title stroke">Scientists compare fingerprints and group them according to
            the similar ridge patterns they find.</h2>
    </div>


    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp3.png') }}" />
        <h2 class="title stroke">As a result, there are three basic <span class="text-white">fingerprint patterns
                - loop, whorl</span>and <span class="text-white">arch</span>.</h2>
    </div>

    {{-- slide 8 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp4.png') }}" />
        <h2 class="title stroke">In a loop pattern, the ridges enter from one side,
            recurve and tend to exit from the same side.</h2>
    </div>

    {{-- slide 9 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp5.png') }}" />
        <h2 class="title stroke">Loop pattern is found in about 65% of fingerprints.
            That means out of 10 fingers, 6 or 7 of them have loops.</h2>
    </div>


    {{-- slide 10 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp6.png') }}" />
        <h2 class="title stroke">In a whorl pattern, the ridges are usually circular,
            spiral or have more than one loop.</h2>
    </div>


    {{-- slide 11 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp7.png') }}" />
        <h2 class="title stroke">Whorl pattern is found in about 30% of fingerprints.
            That means out of 10 fingers, 3 of them have whorls.</h2>
    </div>

    {{-- slide 12 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp8.png') }}" />
        <h2 class="title stroke">In an arch pattern, the ridges enter from one side, make a
            rise in the centre and exit from the other side like a hill.</h2>
    </div>

    {{-- slide 13 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp9.png') }}" />
        <h2 class="title stroke">Arch pattern is found in about 5% of fingerprints.
            That means out of 10 fingers, 1 or none of them have arches.</h2>
    </div>


    {{-- slide 14 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">Now we'll check our own fingerprints to find out
            which patterns we have!</h2>
    </div>


    {{-- slide 15 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="!text-white title stroke">Individual Activity</h2>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp3.png') }}" />
        <h2 class="title stroke">Let's find out: <br>
            Which fingerprint pattern do you have on each finger?</h2>
        <p class="text-center note">Note: Have children take out their fingerprint records.</p>
    </div>


    {{-- slide 16 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                Observe each fingerprint to find out which pattern it has.
                Write down the result of comparison at the side of each
                fingerprint in the record.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp10.png') }}" />
        <p class="note text-center">Note: Have children analyse own set of fingerprints and write down the results (letter
            L, W or A).</p>
    </div>


    {{-- Slide 17 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp10.png') }}" />
        <div class="self-start text-start">
            <h2 class="title stroke">What do you observe: <br>
                Which fingerprint pattern do you have on each finger?</h2>
        </div>

    </div>


    {{-- Slide 18 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">What do you learn: <br>
                Do you have the same fingerprint pattern on each finger?</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp10.png') }}" />
        <p class="note text-center">Note: Have children take turns to share based on the record.</p>
    </div>


    {{-- Slide 19 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">What do you learn: <br>
                Which fingerprint pattern do you have on each finger?</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp10.png') }}" />
        <p class="note text-center">Note: Have children take turns to share based on the record.</p>
    </div>


    {{-- Slide 20 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">What do you learn: <br>
                Do you have al three types of fingerprint patterns?</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp10.png') }}" />
        <p class="note text-center">Note: Have children take turns to share based on the record.</p>
    </div>

    {{-- Slide 21 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">What do you learn: <br>
                For the fingers with the same fingerprint pattern, do the
                fingerprints look exactly the same?</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp10.png') }}" />
        <p class="note text-center">Note: Have children take turns to share based on the record.</p>
    </div>


    {{-- Slide 22 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp10.png') }}" />
        <h2 class="title stroke">Through the activity, we know that
            each fingerprint has a basic pattern.</h2>
    </div>


    {{-- Slide 23 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp10.png') }}" />
        <h2 class="title stroke">The same pattern can be found on different fingerprints
            but no two fingerprints are exactly the same.</h2>
    </div>


    {{-- slide 23 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="!text-white title stroke">Class Activity</h2>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp3.png') }}" />
        <h2 class="title stroke">Let's find out: <br>
            How many fingers and thumbs in the class have loop, whorl
            and arch patterns?</h2>
    </div>

    {{-- slde 24 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                1. Which fingerprint pattern do you have on each finger?
                Record them in a table.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp11.png') }}" />
        <p class="note">Note: Guide children take turns to fill up the table as shown.</p>
    </div>


    {{-- slde 25 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                2. Create a graph to show the numbers of fingerprint
                patterns in the class.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp12.png') }}" />
        <p class="note">Note: Guide children to count from the record table and create the graph.</p>
    </div>


    {{-- Slide 26 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp13.png') }}" />
        <h2 class="title stroke text-start">What do you observe:
            How many fingers and thumbs in the class have loop pattern?</h2>
        <p class="note">Note: Guide children to find out the answer from the graph.</p>
    </div>


    {{-- Slide 27 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp13.png') }}" />
        <h2 class="title stroke text-start">What do you observe: <br>
            How many fingers and thumbs in the class have whorl pattern?</h2>
        <p class="note">Note: Guide children to find out the answer from the graph.</p>
    </div>


    {{-- Slide 28 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp13.png') }}" />
        <h2 class="title stroke text-start">What do you observe: <br>
            How many fingers and thumbs in the class have arch pattern?</h2>
        <p class="note">Note: Guide children to find out the answer from the graph.</p>
    </div>


    {{-- Slide 29 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="title stroke text-start">What do you learn: <br>
            How many fingers and thumbs in the class have loop, whorl
            and arch patterns?</h2>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp13.png') }}" />
        <p class="note">Note: Guide children to make conclusions from the graph.</p>
    </div>


    {{-- Slide 30 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="title stroke text-start">What do you learn: <br>
            Which is the most and least common fingerprint pattern
            in the class?</h2>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp13.png') }}" />
        <p class="note">Note: Guide children to make conclusions from the graph.</p>
    </div>


    {{-- Slide 31 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp12.png') }}" />
        <h2 class="title stroke text-start">Through the activity, we know that loop is indeed the most
            common pattern of fingerprints because there are ________
            out of _____ fingers and thumbs in the class have loops.</h2>
    </div>



    {{-- slide 32 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-fit bg-cover bg-center p-[20px] flex flex-col justify-center items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp14.png') }}" />
        </div>
    </div>


    {{-- ====================================== --}}
    {{-- Buttons --}}
    <div class="absolute bottom-[85px]">
        <button
            class="cursor-pointer doneButton w-66 h-[75px] relative bg-[#F8A23A] rounded-[30px]  shadow-[3px_4px_7.8px_0px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_0px_rgba(0,0,0,0.25)] 
                    outline outline-1 outline-yellow-700 overflow-hidden">
            <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
            <div class="absolute left-[8.22px] top-[3.17px] "> <img src="/assets/images/pptimages/Vector4.png" />
            </div>
            <span
                class="absolute left-[80px] top-[18px] flex items-center  text-white text-5xl font-bold stroke">DONE</span>
        </button>
    </div>


 <div id="buttons" class="absolute right-[60px] flex flex-row gap-6 ">

        <!-- Return Button -->
        <a class="relative w-24 h-24 button-fade-in bg-slate-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-teal-800 cursor-pointer"
            id="returnButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] w-14 h-14"
                src="{{ asset('assets/images/pptimages/reverse-icon.png') }}" />
        </a>

        <!-- Home Button -->
        <button
            class="relative w-24 h-24 button-fade-in bg-sky-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-teal-800 cursor-pointer"
            id="homeButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] w-14 h-14"
                src="{{ asset('assets/images/pptimages/home-icon.png') }}" />
        </button>

        <!-- Close Button -->
        <button class="relative w-24 h-24 button-fade-in cursor-pointer" id="closeButton">
            <div
                class="absolute inset-0 bg-red-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-red-900">
            </div>
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <div id="closeButtonText"
                class="absolute top-[16px] left-[30px] w-11 h-16 text-white text-6xl font-normal font-['Jua']">X
            </div>
        </button>

    </div>

    {{-- next Button --}}
    <div class="absolute bottom-[85px]">

        <button
            class="cursor-pointer nextButton w-66 h-[75px] relative bg-[#F8A23A]  rounded-[30px]  shadow-[3px_4px_7.8px_0px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_0px_rgba(0,0,0,0.25)] 
        outline outline-1 outline-yellow-700 overflow-hidden">
            <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
            <div class="absolute left-[8.22px] top-[3.17px] "> <img src="/assets/images/pptimages/Vector4.png" />
            </div>
            <span class="absolute left-[80px] top-[18px] flex items-center  text-white text-5xl font-bold stroke">NEXT
            </span>
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
                        window.location.href = "{{ route('FingerprintpatternsSelection') }}";
                    }
                });
            }

            // Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
