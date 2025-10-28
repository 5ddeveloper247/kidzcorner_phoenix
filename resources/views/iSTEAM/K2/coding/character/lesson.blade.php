@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-[1vw] ">
        <div class="flex  gap-2">
            <div>

                <h2 class="title stroke">Sample A</h2>
                <img src="/assets/images/K2/character/a1.png" class="large-img3" />
            </div>
            <div>

                <h2 class="title stroke">Sample B</h2>
                <img src="/assets/images/K2/character/a1.png" class="large-img3" />
            </div>

        </div>

        <h2 class="title stroke">Children, let's look at these sample stories!
            Do they show you the same storyline and ending?</h2>

        <p class="note">Note: Have children talk about what they see from each sample.</p>


    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-[1vw] ">
        <div class="flex  gap-2">
            <div>

                <h2 class="title stroke">Sample A</h2>
                <img src="/assets/images/K2/character/a1.png" class="large-img3" />
            </div>
            <div>

                <h2 class="title stroke">Sample B</h2>
                <img src="/assets/images/K2/character/a1.png" class="large-img3" />
            </div>

        </div>

        <h2 class="title stroke">What about these samples?
            Do they show you the same storyline and ending?</h2>

        <p class="note">Note: Have children talk about what they see from each sample.</p>


    </div>


    {{-- Slide 3 --}}
    <div class="slide flex flex-col items-center justify-center gap-[15rem] ">


        <h2 class="title stroke">What is the main difference between Sample A, B and C?</h2>

        <p class="note">Note: Replay videos of the 3 samples. Guide children to compare and talk about the difference
            (speed of the ball). Ask children what speed is.</p>


    </div>

    {{-- slide 4 --}}
    <div class="slide flex flex-col items-center justify-center gap-[1vw]">
        <img src="/assets/images/K2/character/a2.png" class="large-img6" />
        <h2 class="title stroke"><span class="!text-white"> Speed</span> is a rate that tells us how fast or slow
            someone or something is moving.</h2>
    </div>


    {{-- Slide 5 --}}
    <div class="slide flex flex-col items-center justify-center gap-[12rem]">


        <h2 class="title stroke">By looking at the three samples, we know that when a <br>
            character is programmed to move at different speeds, we may
            see different animation effects on the stage. <br><br>

            Let's find out how to set the speed of a character!</h2>

        <p class="note">Note: Use tablets to show children the following part.</p>




    </div>


    {{-- slide 6 --}}
    <div class="slide flex flex-col items-center justify-center gap-[1vw]">
        <img src="/assets/images/K2/character/a3.png" class="large-img6" />


        <h2 class="title stroke">What is the name and use of this command?</h2>
        <p class="note"> Note: Guide children to recall and talk about the use of Control Blocks command
            (to plan and design a programme).
        </p>




    </div>



    {{-- slide 7 --}}
    <div class="slide flex flex-col items-center justify-center gap-[1vw]">
        <img src="/assets/images/K2/character/a4.png" class="large-img6" />


        <h2 class="title stroke">What are these programming blocks?</h2>
        <p class="note"> Note: Guide children to recall and name the four programming blocks under Control Blocks command.
        </p>




    </div>


    {{-- slide 8 --}}
    <div class="slide flex flex-col items-center justify-center gap-[1vw]">
        <img src="/assets/images/K2/character/a5.png" class="large-img6" />


        <h2 class="title stroke">The Control Blocks have a set of programming blocks.
            Each block here is a way to plan how to run a programme.</h2>
        <p class="note">Note: Show and name each programming block here.
        </p>




    </div>


    {{-- Slide 16 --}}
    <div class="slide flex flex-col items-center justify-center gap-[1vw] ">
        <div class="flex  gap-2  items-end">
            <div>


                <img src="/assets/images/K2/character/a6.png" class="large-img3" />
            </div>
            <div>

                <img src="/assets/images/K2/character/a7.png" class="large-img3" />
            </div>

        </div>

        <h2 class="title stroke">What is the use of "Wait" block?</h2>
        <p class="note">Note: Guide children to recall and talk about the use of "Wait" block (it makes a programme pause
            for a specified
            amount of time; a character with programmes that include this block will pause for a while on the stage).</p>



    </div>


    {{-- Slide 17 --}}
    <div class="slide flex flex-col items-center justify-center gap-[1vw] ">
        <div class="flex  gap-2  items-end">
            <div>


                <img src="/assets/images/K2/character/a8.png" class="large-img3" />
            </div>
            <div>

                <img src="/assets/images/K2/character/a9.png" class="large-img3" />
            </div>

        </div>

        <h2 class="title stroke">What is the use of "Repeat" block?</h2>
        <p class="note">Note: Guide children to recall and talk about the use of "Repeat" block (it makes the block/blocks
            placed inside it to
            run for a specified number of times; it makes the programme created looks shorter and neater).</p>



    </div>


    {{-- Slide 18 --}}
    <div class="slide flex flex-col items-center justify-center gap-[1vw] ">
        <div class="flex  gap-2  items-end">
            <div>


                <img src="/assets/images/K2/character/a10.png" class="large-img3" />
            </div>
            <div>

                <img src="/assets/images/K2/character/a11.png" class="large-img3" />
            </div>

        </div>

        <h2 class="title stroke">What is the use of "Set Speed" block?</h2>
        <p class="note">Note: Show children the effect of this block on a character. Guide them to know that "Set Speed"
            block changes the
            running speed of some blocks in a programme; it controls how fast or slow a character animates on the stage.</p>



    </div>

    {{-- Slide 18 --}}
    <div class="slide flex flex-col items-center justify-center gap-[1vw] ">

        <img src="/assets/images/K2/character/a12.png" class="large-img3" />

        <h2 class="title stroke">Clearly, we can use "Set Speed" block to programme a
            character to move at slow, normal or fast speed.</h2>
        <p class="note">Note: Have children point at the block image that show us slow, normal and fast speed.</p>



    </div>

    {{-- Slide 18 --}}
    <div class="slide flex flex-col items-center justify-center gap-[1vw] ">

        <img src="/assets/images/K2/character/a1.png" class="large-img3" />

        <h2 class="title stroke">Based on this sample,
            can you work out the programmes of the two characters?</h2>



    </div>


    {{-- Slide 19 --}}
    <div class="slide flex flex-col items-center justify-center gap-[5rem] ">
        <h2 class="title stroke !text-white">Hands-on Time</h2>
        <ul class="title stroke !text-start">
            <li>Mission: <br>
                Use ScratchJr to work out the programmes of the two <br>
                characters as shown in the sample on the last page.</li>
        </ul>

        <p class="note">Note: Divide children into groups. Have them take turns to complete the mission.</p>
    </div>




    {{-- Slide 20 --}}
    <div class="slide flex flex-col  justify-start gap-[1rem] ">

        <div>

            <ul class="title stroke !text-start ">
                <li>Steps: <br>
                    1. Choose the correct background.</li>
            </ul>
        </div>


        <div class="flex  gap-2 items-center ">

            <img src="/assets/images/K2/character/a13.png" class="large-img3" />
            <img class="h-[30px] w-[30px]" src="/assets/images/K2/animate2/a16.png" class="large-img3" />
            <img src="/assets/images/K2/character/a14.png" class="large-img3" />


        </div>


        <p class="note">Note: Replay the <button class="title stroke  font-medium !text-xl">Video</button> if needed.</p>


    </div>


    {{-- Slide 21 --}}
    <div class="slide flex flex-col  justify-start gap-[1rem] ">

        <div>

            <ul class="title stroke !text-start ">
                <li>Steps: <br>
                    2. Add and move each character to a starting point.</li>
            </ul>
        </div>




        <img src="/assets/images/K2/character/a15.png" class="large-img3" />




        <p class="note">Note: This is the actual starting point of the characters in the sample.
            To be more flexible, let children decide their own starting points.</p>


    </div>



    {{-- Slide 22 --}}
    <div class="slide flex flex-col  justify-start gap-[10rem] ">

        <div>

            <ul class="title stroke !text-start ">
                <li>Steps: <br>
                    3. Work out the programmes of each character and run the
                    programmes.</li>
            </ul>
        </div>
        <div class="flex  items-center justify-center items-end ">

            <div>
                <button class=" !text-white w-[188px] h-[61px] bg-[#2D9CDB] rounded-[20px]"> Sample Answer</button>
            </div>

        </div>
        <p class="note">Note: Replay the <button class="title stroke  font-medium !text-xl">Video</button> if needed.
            Accept all similar programmes presented by children.</p>


    </div>


    {{-- Slide 24 --}}
    {{-- video  --}}
    <div class="slide flex flex-col items-center justify-center gap-[1vw] ">

        <img src="/assets/images/K2/character/a1.png" class="large-img3" />

        <h2 class="title stroke">Based on this sample,
            can you work out the programmes of the two characters?</h2>



    </div>


    {{-- Slide 25 --}}
    {{-- video   --}}
    <div class="slide flex flex-col items-center justify-center gap-[1vw] ">

        <img src="/assets/images/K2/character/a16.png" class="large-img3" />


        <p class="note">Note: Accept all similar programmes presented by children.</p>



    </div>


    {{-- Slide 26 --}}
    <div class="slide flex flex-col items-center justify-center gap-[1vw] ">

        <img src="/assets/images/K2/character/a17.png" class="large-img3" />


        <h2 class="title stroke">Based on this sample,
            can you work out the programmes of the two characters?</h2>



    </div>


    {{-- Slide 27 --}}
    <div class="slide flex flex-col items-center justify-center gap-[5rem] ">
        <h2 class="title stroke !text-white">Hands-on Time 2</h2>
        <ul class="title stroke !text-start">
            <li>Mission: <br>
                Use ScratchJr to work out the programmes of the characters <br>
                as shown in the sample on the last page.</li>
        </ul>

        <p class="note">Note: Divide children into groups and have them work in groups to complete the mission.</p>
    </div>

    {{-- Slide 28 --}}
    <div class="slide flex flex-col  justify-start gap-[1rem] ">

        <div>

            <ul class="title stroke !text-start ">
                <li>Steps: <br>
                    1. Choose the correct background.</li>
            </ul>
        </div>


        <div class="flex  gap-2 items-center ">

            <img src="/assets/images/K2/character/a13.png" class="large-img3" />
            <img class="h-[30px] w-[30px]" src="/assets/images/K2/animate2/a16.png" class="large-img3" />
            <img src="/assets/images/K2/character/a14.png" class="large-img3" />


        </div>


        <p class="note">Note: Replay the <button class="title stroke  font-medium !text-xl">Video</button> if needed.
        </p>


    </div>

    {{-- Slide 29 --}}
    {{-- video   --}}
    <div class="slide flex flex-col items-center justify-center gap-[1vw] ">

        <img src="/assets/images/K2/character/a17.png" class="large-img3" />


        <h2 class="title stroke">Based on this sample,
            can you work out the programmes of the two characters?</h2>



    </div>

    {{-- slide 30 --}}
    <div class="slide flex flex-col  justify-start gap-[1rem] ">

        <div>

            <ul class="title stroke !text-start ">
                <li>Steps: <br>
                    2. Add and move each character to a starting point.</li>
            </ul>
        </div>



        <img src="/assets/images/K2/character/a18.png" class="large-img3" />




        <p class="note">Note: This is the actual starting point of the characters in the sample. <br>
            To be more flexible, let children decide their own starting points.</p>


    </div>
    {{-- slide 30 --}}
    <div class="slide flex flex-col  justify-start gap-[1rem] ">

        <div>

            <ul class="title stroke !text-start ">
                <li>Steps: <br>
                    2. Add and move each character to a starting point.</li>
            </ul>
        </div>



        <img src="/assets/images/K2/character/a18.png" class="large-img3" />




        <p class="note">Note: This is the actual starting point of the characters in the sample. <br>
            To be more flexible, let children decide their own starting points.</p>


    </div>

    {{-- slide 31  --}}


    <div class="slide flex flex-col  justify-start gap-[10rem] ">

        <div>

            <ul class="title stroke !text-start ">
                <li>Steps: <br>
                    3. Work out the programmes of each character and run the
                    programmes.</li>
            </ul>
        </div>
        <div class="flex  items-center justify-center items-end ">

            <div>
                <button class=" !text-white w-[188px] h-[61px] bg-[#2D9CDB] rounded-[20px]"> Sample Answer</button>
            </div>

        </div>
        <p class="note">Note: Replay the <button class="title stroke  font-medium !text-xl">Video</button> if needed.
            Accept all similar programmes presented by children.</p>


    </div>
    {{-- slide 31  --}}

    {{-- video   --}}
    <div class="slide flex flex-col items-center justify-center gap-[1vw] ">

        <img src="/assets/images/K2/character/a16.png" class="large-img3" />


        <p class="note">Note: Accept all similar programmes presented by children; underwater sound can be varied.</p>



    </div>


    {{-- slide 32  --}}
    {{-- video   --}}
    <div class="slide flex flex-col items-center justify-center gap-[1vw] ">

        <img src="/assets/images/K2/character/a1.png" class="large-img3" />

        <h2 class="title stroke">Based on this sample,
            can you work out the programmes of the two characters?</h2>



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
                        window.location.href = "{{ route('characterSelection') }}";
                    }
                });
            }

            // Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
