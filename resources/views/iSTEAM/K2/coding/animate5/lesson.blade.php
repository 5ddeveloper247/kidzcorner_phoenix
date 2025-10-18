@extends('layout.master')
@section('title', 'Dynamic Presentation')

@push('style')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        button {
            cursor: pointer !important;
        }

        a {
            cursor: pointer;

        }
    </style>
@endpush



@section('content')


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-[2rem] ">


        <img src="/assets/images/K2/animate5/a1.png" />


        <h2 class="title stroke">Children, let's look at this story!</h2>
        <p class="note">Note: Have children talk about what they see and guess what the story is about (no right or wrong).
        </p>



    </div>


    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-[1rem] ">


        <img src="/assets/images/K2/animate5/a1.png" />


        <h2 class="title stroke">Why do you think there are two backgrounds in this story?</h2>
        <p class="note">Note: Encourage children to boldly share their views.</p>



    </div>

    {{-- Slide 3 --}}
    <div class="slide flex flex-col items-center justify-center gap-[2rem] ">


        <img src="/assets/images/K2/animate5/a2.png" />


        <h2 class="title stroke">This story has two pages!</h2>
        <p class="note">Note: Encourage children to guess which feature in the app allows us to add pages.</p>



    </div>

    {{-- slide 4 --}}
    <div class="slide flex flex-col items-center justify-center gap-[18rem] ">




        <h2 class="title stroke">Now, let's find out how to create second page of a story and
            how to programme the story to auto play from page to page!</h2>
        <p class="note">Note: Use tablets to show children the following part.</p>



    </div>


    {{-- Slide 5 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">


        <img src="/assets/images/K2/animate5/a3.png" />


        <h2 class="title stroke">What is the name and use of this command?</h2>
        <p class="note">Note: Guide children to recall and talk about the use of End Blocks command (ways to end a
            programme).</p>



    </div>


    {{-- slide 6 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">


        <img src="/assets/images/K2/animate5/a4.png" />


        <h2 class="title stroke">What are the two programming blocks here?</h2>
        <p class="note">Note: Guide children to recall and name the two programming blocks under End Blocks command.</p>



    </div>



    {{-- slide 7 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">


        <img src="/assets/images/K2/animate5/a5.png" />


        <h2 class="title stroke">Usually, there are two programming blocks under End Blocks.
            Each block here represents a way to end a programme.</h2>
        <p class="note">Note: Show and name each programming block here.</p>



    </div>



    {{-- slide 8 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex  gap-2">
            <div>

                <h2 class="title stroke">Sample 1</h2>
                <img src="/assets/images/K2/animate5/a6.png" />
            </div>
            <div>

                <h2 class="title stroke">Sample 2</h2>
                <img src="/assets/images/K2/animate5/a7.png" />
            </div>

        </div>

        <h2 class="title stroke">What is the use of the "End" block?</h2>

        <p class="note">Note: Guide children to recall and talk about the use of "End "block (it marks the end of a
            programme; we can add
            or don't add it to a programme because it does not affect the programme in any way).</p>


    </div>



    {{-- Slide 16 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">


        <img src="/assets/images/K2/animate5/a7.png" />


        <h2 class="title stroke">What is the use of the "Repeat Forever" block?</h2>
        <p class="note">Note: Guide children to recall and talk about the use of "Repeat Forever" block
            (it runs a programme over and over again until we stop it).</p>



    </div>



    {{-- Slide 17 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex  gap-2">
            <div>


                <img src="/assets/images/K2/animate5/a7.png" />
            </div>
            <div>

                <img src="/assets/images/K2/animate5/a7.png" />
            </div>

        </div>

        <h2 class="title stroke">There isn't a need to add "Repeat Forever" block at the end
            of every programme. We add it only when we want to see
            certain animation effects on the stage.</h2>



    </div>


    {{-- Slide 18 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">


        <img src="/assets/images/K2/animate5/a8.png" />


        <h2 class="title stroke">Now, let's see how to create a story with two pages.</h2>
        <p class="note">Note: Guide children to talk about what they see. Then have them guess what the
            story is about (no right or wrong).</p>



    </div>


    {{-- Slide 18 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">


        <img src="/assets/images/K2/animate5/a9.png" />


        <h2 class="title stroke">Let's see how to programme the story to auto play.</h2>
        <p class="note">Note: Guide children to talk about what they see.</p>



    </div>

    {{-- Slide 18 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex  gap-2  items-end">
            <div>


                <img src="/assets/images/K2/animate5/a10.png" />
            </div>
            <div>

                <img src="/assets/images/K2/animate5/a11.png" />
            </div>

        </div>

        <h2 class="title stroke">Once a second page is created, a programming block called
            "Go To Page" will appear under the End Blocks command.</h2>
        <p class="note">Note: Show children how to do so.</p>



    </div>


    {{-- Slide 19 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K2/animate5/a12.png" />

        <h2 class="title stroke">The "Go To Page" block allows us to link up different pages.</h2>
        <p class="note">Note: Create a story with 2 pages and show children how to link page 1 to 2 and page 2 to 1 by
            adding Go To Page
            block at the end of a programme. Have them take note of the number on "Go To Page" block at different pages.</p>



    </div>




    {{-- Slide 20 --}}
    <div class="slide flex flex-col items-center justify-center gap-[5rem] ">
        <h2 class="title stroke !text-white">Hands-on Time</h2>
        <ul class="title stroke !text-start">
            <li>Mission: <br>

                Let's use ScratchJr to create a story about the adventure of <br>
                a butterfly. Your story must at least have two pages and can <br>
                auto play from page to page. What happens in the story? <br>
                Share your story with the class.</li>
        </ul>

        <p class="note">Note: Divide children into groups. Have them take turns to complete the mission.</p>
    </div>


    {{-- Slide 21 --}}
    <div class="slide flex flex-col  justify-start gap-[1rem] ">

        <div>

            <ul class="title stroke !text-start !text-4xl">
                <li>Steps: <br>
                    1. Choose the correct character for your story.</li>
            </ul>
        </div>


        <div class="flex  gap-2 items-center ">

            <img src="/assets/images/K2/animate5/a13.png" />
            <img class="h-[30px] w-[30px]" src="/assets/images/K2/animate2/a16.png" />
            <img src="/assets/images/K2/animate5/a14.png" />


        </div>


        <p class="note">Note: Remind children that it's a story about the adventure of a butterfly.</p>


    </div>



    {{-- Slide 22 --}}
    <div class="slide flex flex-col  justify-start gap-[1rem] ">

        <div>

            <ul class="title stroke !text-start !text-4xl">
                <li>Steps: <br>
                    2. Choose suitable backgrounds for your story.</li>
            </ul>
        </div>


        <div class="flex  gap-2 items-center ">

            <img src="/assets/images/K2/animate5/a16.png" />
            <img class="h-[30px] w-[30px]" src="/assets/images/K2/animate2/a16.png" />
            <img src="/assets/images/K2/animate5/a15.png" />


        </div>


        <p class="note">Note: Have children think what kind of adventure would the butterfly go on.</p>


    </div>


    {{-- Slide 24 --}}
    <div class="slide flex flex-col  justify-start gap-[18rem] ">

        <div>

            <ul class="title stroke !text-start !text-4xl">
                <li>Steps: <br>
                    3. Use your creativity to animate your character on different <br>
                    pages.</li>
            </ul>
        </div>





        <p class="note">Note: Have children create programmes for their characters. Guide them if needed.</p>


    </div>


    {{-- Slide 25 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">


        <div>

            <ul class="title stroke !text-start !text-4xl">
                <li>Steps: <br>
                    4. Make your story auto play from page to page.</li>
            </ul>
        </div>
        <div class="flex  gap-2  items-center">
            <div>


                <img src="/assets/images/K2/animate5/a10.png" />
            </div>
            <div>

                <img src="/assets/images/K2/animate5/a17.png" />
            </div>

        </div>

        <h2 class="title stroke">Once a second page is created, a programming block called
            "Go To Page" will appear under the End Blocks command.</h2>
        <p class="note">Note: Remind children to add the Go To Page" block at the end of a programme for linking up
            different pages.</p>



    </div>


    {{-- Slide 26 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <ul class="title stroke !text-start !text-4xl">
            <li>Steps: <br>
                5. Share your story.</li>
        </ul>
        <div class="flex  gap-2  items-center">
            <img src="/assets/images/K2/animate5/a18.png" />
            <img src="/assets/images/K2/animate5/a19.png" />


        </div>

        <p class="note">Note: Have children share their stories with the class using the presentation mode.</p>
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
            <div class="absolute left-[8.22px] top-[3.17px] "> <img src="/assets/images/pptimages/Vector4.png" /> </div>
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
                        window.location.href = "{{ route('animate5Selection') }}";
                    }
                });
            }

            // Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
