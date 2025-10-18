@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">


        <img src="/assets/images/K2/coding/s1.png" />

        <div class="title stroke">
            <h2>Children, do you remember what these are?
                What did we do with them?</h2>
        </div>
    </div>



    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center  ">
        <div class="flex items-center gap-2 justify-center   ">
            <div >
                <img  src="/assets/images/K2/coding/s2.png" />
                <img  src="/assets/images/K2/coding/s3.png" />
            </div>

            <img  src="/assets/images/K2/coding/s1.png" />

        </div>

        <h2 class="title stroke">We used an application called Blockly in a tablet
            to programme the robot to do certain tasks.</h2>
    </div>



  

    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/h17.png') }}" />
        <h2 class="title stroke text-center">For an example, we used Blockly to programme the robot
            to say "Hi" before moving forward and then
            say "Ta-da" before changing its eye pattern.</h2>
    </div>


    {{-- Slide 5 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="/assets/images/K2/coding/s4.png" />

        <h2 class="title stroke">Now, let's explore and learn about another interesting
            application called ScratchJr!</h2>
    </div>


    {{-- slide 6 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  gap-[4rem] ">
        <img src="/assets/images/K2/coding/s5.png" />

        <h2 class="title stroke"><span class="!text-white">ScratchJr</span> is a tool that allows us to create our own
            interactive stories and games.</h2>


        <p class="note">Note: Encourage children to share whether they like to read storybooks and create their own
            stories.</p>
    </div>




    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  gap-[2rem]">

        <img class="w-[800px] h-[100px]" src="/assets/images/K2/coding/s5.png" />

        <img class="w-[300px] h-[100px]" src="/assets/images/K2/coding/s4.png" />


        <h2 class="title stroke">How does ScratchJr work? <br>
            Let's find out together!</h2>
    </div>


    {{-- slide 8 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  gap-[3rem] ">
        <img src="/assets/images/K2/coding/s6.png" />

        <h2 class="title stroke">This is the application icon of ScratchJr in a tablet.</h2>


        <p class="note">Note: Use a tablet to show the application of ScratchJr. Demonstrate the correct way to handle
            a tablet. Remind children that we should use it with care to prevent it from spoiling easily.</p>
    </div>

    {{-- Slide 16 --}}
    <div class="slide hidden flex flex-col items-center gap-[3rem]">
        <div class="flex items-center gap-2 justify-center items-center">

            <img src="/assets/images/K2/coding/s7.png" />
            <img src="/assets/images/K2/coding/s8.png" />


            <img src="/assets/images/K2/coding/s9.png" />

        </div>

        <h2 class="title stroke">Tap on the icon of ScratchJr to open the application.</h2>

        <p class="note">Note: Use a tablet to demonstrate how to do it.</p>
    </div>


    {{-- Slide 17 --}}
    <div class="slide hidden flex flex-col items-center  gap-[3rem]">
        <div class="flex items-center gap-2 justify-center items-center">

            <img src="/assets/images/K2/coding/s11.png" />
            <img src="/assets/images/K2/coding/s8.png" />


            <img src="/assets/images/K2/coding/s10.png" />

        </div>

        <h2 class="title stroke">Tap here to start using the <span class="!text-white">application</span>.</h2>

        <p class="note">Note: Use a tablet to demonstrate how to do it.</p>
    </div>



    {{-- Slide 18 --}}
    <div class="slide hidden flex flex-col items-center  gap-[3rem]">
        <div class="flex items-center gap-2 justify-center items-center">

            <img src="/assets/images/K2/coding/s12.png" />
            <img src="/assets/images/K2/coding/s8.png" />


            <img src="/assets/images/K2/coding/s13.png" />

        </div>

        <h2 class="title stroke">Tap here to start creating a project.</h2>

        <p class="note">Note: Use a tablet to demonstrate how to do it.</p>
    </div>


    {{-- Slide 18 --}}
    <div class="slide hidden flex flex-col items-center  gap-[3rem]">
        <div class="flex items-center gap-2 justify-center items-center">

            <img src="/assets/images/K2/coding/s14.png" />
            <img src="/assets/images/K2/coding/s8.png" />


            <img src="/assets/images/K2/coding/s15.png" />

        </div>

        <h2 class="title stroke">Tap here to add a background.</h2>

        <p class="note">Note: Use a tablet to demonstrate how to do it.</p>
    </div>


    {{-- Slide 18 --}}
    <div class="slide hidden flex flex-col items-center  gap-[2rem]">
        <div class="flex items-center gap-2 justify-center items-center">

            <img src="/assets/images/K2/coding/s16.png" />
            <img src="/assets/images/K2/coding/s8.png" />


            <img src="/assets/images/K2/coding/s17.png" />

        </div>

        <h2 class="title stroke">Tap on the background that you want and then tap here
            to return to the working stage.</h2>

        <p class="note">Note: Use a tablet to demonstrate how to do it; double click on the selected background will
            achieve the same effect.</p>
    </div>



    {{-- Slide 19 --}}
    <div class="slide hidden flex flex-col items-center  gap-[2rem]">
        <div class="flex items-center gap-2 justify-center items-center">

            <img src="/assets/images/K2/coding/s14.png" />
            <img src="/assets/images/K2/coding/s8.png" />


            <img src="/assets/images/K2/coding/s15.png" />

        </div>

        <h2 class="title stroke">To change background, tap here again.</h2>

        <p class="note">Note: Use a tablet to demonstrate how to do it.</p>
    </div>




    {{-- Slide 20 --}}
    <div class="slide hidden flex flex-col items-center  gap-[2rem]">
        <div class="flex items-center gap-2 justify-center items-center">

            <img src="/assets/images/K2/coding/s18.png" />
            <img src="/assets/images/K2/coding/s8.png" />


            <img src="/assets/images/K2/coding/s19.png" />

        </div>

        <h2 class="title stroke">Tap on the background that you want and then tap here
            to return to the working stage.</h2>

        <p class="note">Note: Use a tablet to demonstrate how to do it; double click on the selected background will
            achieve the same effect.</p>
    </div>


    {{-- Slide 21 --}}
    <div class="slide hidden flex flex-col items-center  gap-[2rem]">
        <div class="flex items-center gap-2 justify-center items-center">

            <img src="/assets/images/K2/coding/s20.png" />
            <img src="/assets/images/K2/coding/s8.png" />


            <img src="/assets/images/K2/coding/s21.png" />

        </div>

        <h2 class="title stroke">Tap here to add a character..</h2>

        <p class="note">Note: Use a tablet to demonstrate how to do it.</p>
    </div>



    {{-- Slide 22 --}}
    <div class="slide hidden flex flex-col items-center  gap-[2rem]">
        <div class="flex items-center gap-2 justify-center items-center">

            <img src="/assets/images/K2/coding/s22.png" />
            <img src="/assets/images/K2/coding/s8.png" />


            <img src="/assets/images/K2/coding/s23.png" />

        </div>

        <h2 class="title stroke">Tap on the background that you want and then tap here
            to return to the working stage.</h2>

        <p class="note">Note: Use a tablet to demonstrate how to do it; double click on the selected background will
            achieve the same effect.</p>
    </div>



    {{-- Slide 24 --}}
    <div class="slide hidden flex flex-col items-center  gap-[3rem]">
        <div class="flex items-center gap-2 justify-center items-center">

            <img src="/assets/images/K2/coding/s24.png" />
            <img src="/assets/images/K2/coding/s8.png" />


            <img src="/assets/images/K2/coding/s25.png" />

        </div>

        <h2 class="title stroke">Tap, drag and place to move a character.</h2>

        <p class="note">Note: Use a tablet to demonstrate how to do it.</p>
    </div>



    {{-- Slide 25 --}}
    <div class="slide hidden flex flex-col items-center  gap-[4rem]">

        <img src="/assets/images/K2/coding/s26.png" />
        <h2 class="title stroke">To delete the character, tap and hold it till you see a cross
            and then tap the cross.</h2>
        <p class="note">Note: Use a tablet to demonstrate how to do it; show children both ways to delete a character.
        </p>
    </div>


    {{-- Slide 26 --}}
    <div class="slide hidden flex flex-col items-center  gap-[3rem]">
        <div class="flex items-center gap-2 justify-center items-center">

            <img src="/assets/images/K2/coding/s27.png" />
            <img src="/assets/images/K2/coding/s8.png" />


            <img src="/assets/images/K2/coding/s28.png" />

        </div>

        <h2 class="title stroke">If you tap here, your project will be saved.</h2>

        <p class="note">Note: Use a tablet to demonstrate how to do it.</p>
    </div>


    {{-- Slide 27 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  gap-[8rem] ">

        <h2 class="title stroke !text-white">Hands-on Time</h2>
        <ul class="title stroke !text-start">
            <li>Mission:</li>
            <li>Let's use ScratchJr to create a story about two friends</li>
            <li>helping each other. What happens in the story? Share your</li>
            <li>story with the class.</li>
        </ul>

        <p class="note">Note: Divide children into groups. Have them take turns to complete the mission.</p>
    </div>

    {{-- Slide 28 --}}
    <div class="slide hidden flex flex-col items-center  gap-[3rem]">

        <ul class="title stroke !text-start">
            <li>Steps: <br> 1. Tap on the icon of ScratchJr to open the application.</li>
        </ul>
        <div class="flex items-center gap-2 justify-center items-center">
            <img class="w-[470px]" src="/assets/images/K2/coding/s7.png" />
            <img src="/assets/images/K2/coding/s8.png" />
            <img class="w-[470px]" src="/assets/images/K2/coding/s9.png" />
        </div>
    </div>

    {{-- Slide 29 --}}
    <div class="slide hidden flex flex-col items-center  gap-[3rem]">
        <ul class="title stroke !text-start">
            <li>Steps: <br> 2. Tap here to start using the application.</li>
        </ul>
        <div class="flex items-center gap-2 justify-center items-center">
            <img class="w-[470px]" src="/assets/images/K2/coding/s11.png" />
            <img src="/assets/images/K2/coding/s8.png" />
            <img class="w-[470px]" src="/assets/images/K2/coding/s10.png" />
        </div>
    </div>

    {{-- slide 30 --}}
    <div class="slide hidden flex flex-col items-center  gap-[3rem]">
        <ul class="title stroke !text-start">
            <li>Steps: <br> 3.Tap here to start creating your story.</li>
        </ul>
        <div class="flex items-center gap-2 justify-center items-center">
            <img class="w-[470px]" src="/assets/images/K2/coding/s12.png" />
            <img src="/assets/images/K2/coding/s8.png" />
            <img class="w-[470px]" src="/assets/images/K2/coding/s19.png" />
        </div>
    </div>


    {{-- slide 31 --}}
    <div class="slide hidden flex flex-col items-center  gap-[3rem]">
        <ul class="title stroke !text-start">
            <li>Steps: <br> 4.Choose a background for your story.</li>
        </ul>
        <div class="flex items-center gap-2 justify-center items-center  relative">
            <img class="w-[470px]" src="/assets/images/K2/coding/s14.png" />
            <img src="/assets/images/K2/coding/s8.png" />
            <img class="  w-[470px]" src="/assets/images/K2/coding/s30.png" />
            <img class=" right-[13rem] bottom-[14rem]   absolute   " src="/assets/images/K2/coding/s31.png" />


        </div>

        <p class="note">Note: Remind children that it’s a story about two friends helping each other.</p>

    </div>

    {{-- slide 32 --}}
    <div class="slide hidden flex flex-col items-center  gap-[3rem]">
        <ul class="title stroke !text-start">
            <li>Steps: <br> 5.Choose two character for your story.</li>
        </ul>
        <div class="flex items-center gap-2 justify-center items-center  relative">
            <img class="w-[470px]" src="/assets/images/K2/coding/s32.png" />
            <img src="/assets/images/K2/coding/s8.png" />
            <img class="  w-[470px]" src="/assets/images/K2/coding/s21.png" />
            <img class=" right-[13rem] bottom-[14rem]   absolute   " src="/assets/images/K2/coding/s31.png" />


        </div>

        <p class="note">Note: Remind children that it’s a story about two friends helping each other.</p>

    </div>
    {{-- slide 33 --}}
    <div class="slide hidden flex flex-col items-center  gap-[3rem]">
        <ul class="title stroke !text-start">
            <li>Steps: <br> 6.What happens in your story? Share your story.</li>
        </ul>
        <div class="flex items-center gap-2 justify-center items-center  ">
            <img class="w-[470px]" src="/assets/images/K2/coding/s33.png" />
            <img src="/assets/images/K2/coding/s8.png" />
            <img class="  w-[470px]" src="/assets/images/K2/coding/s34.png" />
        </div>
        <p class="note">Note: Have children share their stories to the class using the presentation mode..</p>
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
                        window.location.href = "{{ route('scratchSelection') }}";
                    }
                });
            }

            // Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
