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
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K2/animate3/a1.png" />

        <h2 class="title stroke">Children, what is happening here?</h2>
        <p class="note">Note: Encourage children to answer based on their views and accept all logical answers.</p>
    </div>



    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center  gap-[18rem]">

        <h2 class="title stroke">Let's explore and learn how to programme <br>
            a character to have sound!</h2>
        <p class="note">Note: Use a tablet to show children the following part.</p>

    </div>


    {{-- Slide 3 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 relative">
        <div class="flex  gap-3  items-center  ">
            <div class=" flex flex-col   gap-1">

                <img src="/assets/images/K2/animate1/a12.png" />
                <img src="/assets/images/K2/animate1/a13.png" />
            </div>
            <div class=" flex flex-col   gap-6">
                <img src="/assets/images/K2/animate1/a14.png" />
                <img src="/assets/images/K2/animate1/a15.png" />
            </div>
            <div class=" flex flex-col   gap-1">
                <img src="/assets/images/K2/animate1/a17.png" />
                <img src="/assets/images/K2/animate1/a18.png" />
            </div>
            <div>
                <img src="/assets/images/K2/animate1/a16.png" />
            </div>
            <div>
                <img class="absolute  bottom-[11rem] right-[3rem] " src="/assets/images/K2/animate1/a15.png" />

            </div>
        </div>
        <h2 class="title stroke">Open the application and start a new project.</h2>

        <p class="note">Note: Have children verbally direct the teacher to do this step.</p>


    </div>

    {{-- slide 4 --}}
    <div class="slide flex flex-col items-center justify-center gap-[2rem] ">


        <img class="w-[550px]" src="/assets/images/K2/animate3/a2.png" />


        <h2 class="title stroke">This command is called Sound Blocks. <br>
            It allows us to design movements for a character.</h2>
        <p class="note">Note: <button class="title stroke  font-medium !text-xl">Click here</button> to guide children
            explore and
            understand the details and use of Sound Blocks.</p>



    </div>


    {{-- Slide 5 --}}

    {{-- click here  --}}
    <div class="slide flex flex-col items-center justify-center gap-[2rem] ">


        <img class="w-[550px]" src="/assets/images/K2/animate3/a3.png" />


        <h2 class="title stroke">Usually, there is a Pop programming block and
            a recording tool under Sound Blocks.</h2>
        <p class="note">Note: Show the programming block and recording tool here.</p>



    </div>


    {{-- slide 6 --}}
    <div class="slide flex flex-col items-center justify-center gap-[2rem] ">


        <img src="/assets/images/K2/animate3/a4.png" />


        <h2 class="title stroke">What is the use of Pop block?</h2>
        <p class="note">Note: Show children the effect of this block on the stage. Guide them to know that Pop block plays
            a "Pop" sound.
            Explain that if we want a character to have sound while moving, two programmes have to be created.</p>



    </div>



    {{-- slide 7 --}}
    <div class="slide flex flex-col items-center justify-center gap-[2rem] ">


        <img src="/assets/images/K2/animate3/a5.png" />


        <h2 class="title stroke">What is the use of this recording tool?</h2>
        <p class="note">Note: Show and guide children to know that this recording tool allows us to record sounds that we
            want.
            Explain that we can record our own voice or sound from other things (toys, mobile phones, etc).</p>



    </div>


    {{-- slide 8 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex  gap-2 items-center">
            <div>
                <img src="/assets/images/K2/animate3/a6.png" />
            </div>
            <div>
                <img src="/assets/images/K2/animate3/a7.png" />
            </div>

        </div>

        <h2 class="title stroke">Once a sound is recorded, a programming block called Play
            Recorded Sound will appear under Sound Blocks command.</h2>
        <p class="note">Note: Show children that we can record up to five sounds for a character.</p>


    </div>



    {{-- Slide 16 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex  gap-2">
            <div>

                <h2 class="title stroke">Sample 1</h2>
                <img src="/assets/images/K2/animate1/a33.png" />
            </div>
            <div>

                <h2 class="title stroke">Sample 2</h2>
                <img src="/assets/images/K2/animate1/a33.png" />
            </div>

        </div>

        <h2 class="title stroke">Let's compare these two samples.
            What is the main difference between these two samples?</h2>

        <p class="note">Note: Guide children to compare and talk about the difference (the design of the programme).</p>


    </div>


    {{-- Slide 17 --}}
    <div class="slide flex flex-col items-center justify-center gap-[18rem] ">




        <h2 class="title stroke">Now, let's explore and learn about the use of another
            <span class="!text-white"> command</span> in ScratchJr app!
        </h2>
        <p class="note">Note: Use tablets to show children the following part.</p>



    </div>


    {{-- Slide 18 --}}
    <div class="slide flex flex-col items-center justify-center gap-[2rem] ">


        <img class="w-[550px]" src="/assets/images/K2/animate3/a8.png" />


        <h2 class="title stroke">This command is called Control Blocks. <br>
            It allows us to design movements for a character.</h2>
        <p class="note">Note: <button class="title stroke  font-medium !text-xl">Click here</button> to guide children
            explore and
            understand the details and use of Control Blocks.</p>



    </div>


    {{-- Slide 18 --}}
    {{-- click here  --}}
    <div class="slide flex flex-col items-center justify-center gap-[2rem] ">


        <img class="w-[550px]" src="/assets/images/K2/animate3/a9.png" />


        <h2 class="title stroke">Control Blocks has a set of programming blocks.
            Each block here is a way to plan how to run a programme.</h2>
        <p class="note">Note: Show and name each programming block here. Tell children that we'll only use
            "Wait and Repeat" blocks for now.</p>



    </div>

    {{-- Slide 18 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex  gap-2">
            <div>

                <h2 class="title stroke">Sample 1</h2>
                <img src="/assets/images/K2/animate1/a10.png" />
            </div>
            <div>

                <h2 class="title stroke">Sample 2</h2>
                <img src="/assets/images/K2/animate1/a11.png" />
            </div>

        </div>

        <h2 class="title stroke">What are the differences between these two samples?</h2>

        <p class="note">Note: Guide children to compare and talk about the differences
            (Sample 2- Wait block in the programme; it makes the character pause for a while on the stage).</p>


    </div>


    {{-- Slide 19 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex  gap-2 items-center">
            <div>
                <img src="/assets/images/K2/animate3/a12.png" />
            </div>
            <div>
                <img src="/assets/images/K2/animate3/a13.png" />
            </div>

        </div>

        <h2 class="title stroke">So what is the use of Wait block?</h2>
        <p class="note">Note: Show children the effect of this block when running a programme.
            Guide them to know that Wait block makes a programme pause for a specified amount of time.</p>


    </div>




    {{-- Slide 20 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex  gap-2 items-center">
            <div>
                <img src="/assets/images/K2/animate3/a14.png" />
            </div>
            <div>
                <img src="/assets/images/K2/animate3/a15.png" />
            </div>

        </div>

        <h2 class="title stroke">What is the use of Repeat block?</h2>
        <p class="note">Note: Show children the effect of this block when running a programme.
            Guide them to know that Repeat block makes the block/blocks placed inside it run for a specified number of
            times.</p>


    </div>


    {{-- Slide 21 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex  gap-2 items-center">
            <div>
                <img src="/assets/images/K2/animate3/a16.png" />
            </div>
            <div>
                <img src="/assets/images/K2/animate3/a17.png" />
            </div>

        </div>

        <h2 class="title stroke">Instead of using multiple programming blocks of the same type
            to create a programme, a Repeat block makes the
            programme created look shorter and neater.</h2>



    </div>




    {{-- Slide 22 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K2/animate3/a1.png" />

        <h2 class="title stroke">Do you remember this sample? Where do you find this
            background and character from the app?</h2>
        <p class="note">Note: Have children verbally direct the teacher to find them using a tablet.</p>
    </div>


    {{-- Slide 24 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex  gap-2 items-center">
            <div>
                <img src="/assets/images/K2/animate3/a1.png" />
            </div>
            <div>
                <img src="/assets/images/K2/animate3/a18.png" />
            </div>

        </div>

        <h2 class="title stroke">Adam is trying to work out the programmes of this character
            but the work is incomplete. He knows "Wait and Repeat"
            blocks must be added to the programmes. Can you help him?</h2>



    </div>



    {{-- Slide 25 --}}
    <div class="slide flex flex-col items-center justify-center gap-[5rem] ">
        <h2 class="title stroke !text-white">Hands-on Time</h2>
        <ul class="title stroke !text-start">
            <li>Mission:
                Help Adam to work out the programmes of a character (as <br>
                shown in the sample on the last page). Help him to complete <br>
                his work by adding in "Wait and Repeat" blocks to the <br>
                programmes.</li>
        </ul>

        <p class="note">Note: Divide children into groups. Have them take turns to complete the mission.</p>
    </div>


    {{-- Slide 26 --}}
    <div class="slide flex flex-col  justify-start gap-[1rem] ">

        <div>

            <ul class="title stroke !text-start !text-4xl">
                <li>Steps: <br>
                    1. Choose the correct background.</li>
            </ul>
        </div>


        <div class="flex  gap-2 items-center ">

            <img src="/assets/images/K2/animate2/a15.png" />
            <img class="h-[30px] w-[30px]" src="/assets/images/K2/animate2/a16.png" />
            <img src="/assets/images/K2/animate2/a17.png" />


        </div>


        <p class="note">Note: Reply the <a class="!text-4xl title stroke" href="">video</a> if needed.</p>


    </div>

    {{-- video   --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex  gap-2 items-center">
            <div>
                <img src="/assets/images/K2/animate3/a1.png" />
            </div>
            <div>
                <img src="/assets/images/K2/animate3/a19.png" />
            </div>

        </div>

        <h2 class="title stroke">Adam is trying to work out the programmes of this character
            but the work is incomplete. He knows "Wait and Repeat"
            blocks must be added to the programmes. Can you help him?</h2>



    </div>


    {{-- Slide 24 --}}
    <div class="slide flex flex-col  justify-start gap-[1rem] ">

        <div>

            <ul class="title stroke !text-start !text-4xl">
                <li>Steps: <br>
                    2. Delete the cat and choose the correct character.</li>
            </ul>
        </div>


        <div class="flex  gap-2 items-center ">

            <img src="/assets/images/K2/animate3/a20.png" />
            <img class="h-[30px] w-[30px]" src="/assets/images/K2/animate2/a16.png" />
            <img src="/assets/images/K2/animate3/a21.png" />


        </div>


        <p class="note">Note: Reply the <a class="!text-4xl title stroke" href="">video</a> if needed.</p>


    </div>

    {{-- video   --}}

    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex  gap-2 items-center">
            <div>
                <img src="/assets/images/K2/animate3/a1.png" />
            </div>
            <div>
                <img src="/assets/images/K2/animate3/a19.png" />
            </div>

        </div>

        <h2 class="title stroke">Adam is trying to work out the programmes of this character
            but the work is incomplete. He knows "Wait and Repeat"
            blocks must be added to the programmes. Can you help him?</h2>



    </div>


    {{-- Slide 25 --}}
    <div class="slide flex flex-col  justify-start gap-[1rem]  ">

        <div>

            <ul class="title stroke !text-start !text-4xl">
                <li>Steps: <br>
                    3. Move the character to the starting point.</li>
            </ul>
        </div>


        <img src="/assets/images/K2/animate3/a22.png" />





        <p class="note">Note: Verbally guide children that need help.</p>


    </div>


    {{-- Slide 27 --}}
    <div class="slide flex flex-col  justify-start gap-[1rem] ">

        <div>

            <ul class="title stroke !text-start !text-4xl">
                <li>Steps: <br>
                    4. Copy the incompleted work.</li>
            </ul>
        </div>


        <div class="flex  gap-2 items-center ">

            <img src="/assets/images/K2/animate3/a23.png" />
            <img src="/assets/images/K2/animate3/a24.png" />


        </div>


        <p class="note">Note: Have children create these 3 programmes over at the programming area.</p>


    </div>

    {{-- Slide 28 --}}
    {{-- where to add missing   --}}
    <div class="slide flex flex-col  justify-start gap-[1rem] ">

        <div>

            <ul class="title stroke !text-start !text-4xl">
                <li>Steps: <br>
                    5. Add in "Wait and Repeat" blocks to make the programmes <br>
                    work.</li>
            </ul>
        </div>


        <div class="flex  gap-2 items-center ">

            <img src="/assets/images/K2/animate3/a23.png" />
            <img src="/assets/images/K2/animate3/a24.png" />


        </div>


        <p class="note">Note: Reply the <a class="!text-4xl title stroke" href="">video</a> if needed. Ask
            children: How many times does the ball bounce</p>


    </div>

    {{-- video   --}}

    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex  gap-2 items-center">
            <div>
                <img src="/assets/images/K2/animate3/a1.png" />
            </div>
            <div>
                <img src="/assets/images/K2/animate3/a19.png" />
            </div>

        </div>

        <h2 class="title stroke">Adam is trying to work out the programmes of this character
            but the work is incomplete. He knows "Wait and Repeat"
            blocks must be added to the programmes. Can you help him?</h2>



    </div>






    {{-- Slide 29 --}}
    <div class="slide flex flex-col justify-start gap-[11rem] ">
        <div>
            <ul class="title stroke !text-start !text-4xl">
                <li>Steps: <br>
                    6. Showcase your work.</li>
            </ul>
        </div>
        <div class="flex  gap-3 items-center justify-center items-end ">

            <div>
                <button class=" !text-white w-[188px] h-[61px] bg-[#2D9CDB] rounded-[20px]"> Sample Answer</button>
            </div>

        </div>
        <p class="note">Note: Give out clues if needed (Repeat block>hopping; Repeat and Wait blocks>sound).
            After the showcase, have children share what they have learnt through this problem solving process.</p>
    </div>

     {{-- sample answer --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K2/animate3/a25.png" />
        <h2 class="title stroke">Note: Accept all similar programmes presented by children.</h2>


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


    <div id="buttons" class="absolute top-[24px] right-[60px] flex flex-row gap-6 z-40">

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
                        window.location.href = "{{ route('animate3Selection') }}";
                    }
                });
            }

            // Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
