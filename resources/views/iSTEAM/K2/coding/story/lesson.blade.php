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
    <div class="slide flex flex-col items-center justify-center gap-5">
        <img src="/assets/images/K2/story/a1.png" />
        <h2 class="title stroke">Children, let's look at this story!</h2>
        <p class="note"> Note: Have children talk about what they see and guess what the story is about (no right or
            wrong).
        </p>
    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-5">
        <img src="/assets/images/K2/story/a1.png" />
        <h2 class="title stroke">How do you create a story step-by-step?</h2>
        <p class="note">Note: Guide children to describe steps in creating a story with ScratchJr
            (point at the different features using a tablet).
        </p>
    </div>


    {{-- Slide 3 --}}
    <div class="slide flex flex-col items-center justify-center gap-5">
        <img src="/assets/images/K2/story/a2.png" />
        <h2 class="title stroke">Do you think you can find all the backgrounds and characters
            that you want from the app to create your own story?</h2>
        <p class="note">Note: Use a tablet to show available backgrounds and characters in the app.
        </p>
    </div>

    {{-- slide 4 --}}
    <div class="slide flex flex-col items-center justify-center gap-5">
        <img src="/assets/images/K2/story/a3.png" />
        <h2 class="title stroke">What is this story about?
            Can you find this background and character from the app?</h2>
        <p class="note">Note: Show children that the app does not have the same background and character.
        </p>
    </div>


    {{-- Slide 5 --}}
    <div class="slide flex flex-col items-center justify-center gap-5">
        <img src="/assets/images/K2/story/a4.png" />
        <h2 class="title stroke">What is this story about?
            Can you find this background and character from the app?</h2>
        <p class="note">Note: Show children that the app does not have the same background and character.
        </p>
    </div>


    {{-- slide 6 --}}
    <div class="slide flex flex-col items-center justify-center gap-[2rem] ">


        <img src="/assets/images/K2/story/a5.png" />


        <h2 class="title stroke">Do you want to use your own backgrounds and characters when
            creating your own animated story?</h2>
        <p class="note">Note: <button class="title stroke  font-medium !text-xl">Click here</button> to guide children
            explore and learn how to use the paint tool in ScratchJr.</p>



    </div>



    {{-- slide 7 --}}

    {{-- video  slide --}}
    <div class="slide flex flex-col items-center justify-center gap-5">


        <img src="/assets/images/K2/story/a7.png" />


        <h2 class="title stroke">You will find the paint icon when you start creating a project.</h2>
        <p class="note">Note: Show children the paint icon as mentioned.</p>



    </div>


    {{-- slide 8 --}}
    <div class="slide flex flex-col items-center justify-center gap-5">


        <img src="/assets/images/K2/story/a8.png" />


        <h2 class="title stroke">You will also find the paint icon when you are at the
            background and character page.</h2>
        <p class="note">Note: Show children the paint icon as mentioned.</p>



    </div>


    {{-- Slide 16 --}}
    <div class="slide flex flex-col  justify-start gap-[1rem] ">




        <div class="flex  gap-2 items-center ">

            <img src="/assets/images/K2/story/a9.png" />
            <img class="h-[30px] w-[30px]" src="/assets/images/K2/animate2/a16.png" />
            <img src="/assets/images/K2/story/a10.png" />


        </div>
        <h2 class="title stroke">If you tap on the paint icon here, the paint tool will appear.
            It means that you can make changes to the character.</h2>


        <p class="note">Note: Show children how to do so.</p>


    </div>


    {{-- Slide 17 --}}
    <div class="slide flex flex-col items-center justify-center gap-[17rem] ">




        <h2 class="title stroke">How do you use the paint tool to make changes to a <br>
            character? Let's find out together!</h2>
        <p class="note">Note: Show and explain to children <button class="title stroke  font-medium !text-xl"> how to use
                the different features in the paint tool.</button></p>



    </div>


    {{-- Slide 18 --}}
    <div class="slide flex flex-col  justify-start gap-[2rem] ">




        <div class="flex  gap-2 items-end ">

            <img src="/assets/images/K2/story/a12.png" />
            <img src="/assets/images/K2/story/a11.png" />


        </div>



        <p class="note">Note: Show children how to do so and have them talk about the uses of each feature shown.</p>


    </div>


    {{-- Slide 18 --}}
    <div class="slide flex flex-col  justify-start gap-[2rem] ">




        <div class="flex  gap-2 items-end ">

            <img src="/assets/images/K2/story/a13.png" />
            <img src="/assets/images/K2/story/a14.png" />


        </div>



        <p class="note">Note: Show children how to do so and have them talk about the uses of each feature shown.</p>


    </div>

    {{-- Slide 18 --}}
    <div class="slide flex flex-col  justify-start gap-[2rem] ">




        <div class="flex  gap-2 items-end ">

            <img src="/assets/images/K2/story/a15.png" />
            <img src="/assets/images/K2/story/a16.png" />


        </div>



        <p class="note">Note: Show children how to do so and have them talk about the uses of each feature shown.</p>


    </div>


    {{-- Slide 19 --}}
    <div class="slide flex flex-col  justify-start gap-[2rem] ">




        <div class="flex  gap-2 items-end ">

            <img src="/assets/images/K2/story/a17.png" />
            <img src="/assets/images/K2/story/a18.png" />


        </div>



        <p class="note">Note: Show children the uses of each feature in the red box.</p>


    </div>




    {{-- Slide 20 --}}
    <div class="slide flex flex-col  justify-start gap-[2rem] ">




        <div class="flex  gap-2 items-end ">

            <img src="/assets/images/K2/story/a19.png" />
            <img src="/assets/images/K2/story/a20.png" />


        </div>



        <p class="note">Note: Show and explain another use of this feature (edit a shape by dragging the dots that
            appear).</p>


    </div>


    {{-- Slide 21 --}}
    <div class="slide flex flex-col  justify-start gap-[2rem] ">




        <div class="flex  gap-2 items-end ">

            <img src="/assets/images/K2/story/a17.png" />
            <img src="/assets/images/K2/story/a20.png" />


        </div>



        <p class="note">Note: Show and explain that combining shapes created will form things based on our imagination.
        </p>


    </div>



    {{-- Slide 22 --}}
    <div class="slide flex flex-col  justify-start gap-[2rem] ">




        <div class="flex  gap-2  items-center ">

            <img src="/assets/images/K2/story/a21.png" />
            <img class="h-[30px] w-[30px]" src="/assets/images/K2/animate2/a16.png" />

            <img src="/assets/images/K2/story/a22.png" />


        </div>
        <h2 class="title stroke">If you tap here, your work will be saved.
            You will find this new character at the character page.</h2>



        <p class="note">Note: Show children how to do so.</p>


    </div>


    {{-- Slide 24 --}}
    <div class="slide flex flex-col  justify-start gap-[2rem] ">




        <div class="flex  gap-2  items-center ">

            <img src="/assets/images/K2/story/a23.png" />
            <img class="h-[30px] w-[30px]" src="/assets/images/K2/animate2/a16.png" />

            <img src="/assets/images/K2/story/a24.png" />


        </div>
        <h2 class="title stroke">You can use the paint tool to make changes to any character
            at the character page.</h2>



        <p class="note">Note: Show children how to access the paint tool by selecting a character before tapping on the
            paint icon.</p>


    </div>


    {{-- Slide 25 --}}
    <div class="slide flex flex-col  justify-start gap-[2rem] ">




        <div class="flex  gap-2  items-center ">

            <img src="/assets/images/K2/story/a25.png" />
            <img class="h-[30px] w-[30px]" src="/assets/images/K2/animate2/a16.png" />

            <img src="/assets/images/K2/story/a26.png" />


        </div>
        <h2 class="title stroke">If you choose to make changes to one of these characters,
            you can add any face you want to form the character!</h2>

        <p class="note">Note: Show children <button class="title stroke  font-medium !text-xl"> how to use
                the different features in the paint tool.</button></p>
    </div>




    {{-- Slide 26 --}}
    {{-- video   --}}
    <div class="slide flex flex-col  justify-start gap-[2rem] ">




        <div class="flex  gap-2  items-ends ">

            <img src="/assets/images/K2/story/a27.png" />

            <img src="/assets/images/K2/story/a28.png" />


        </div>


        <p class="note">Note: Show children how to use the camera feature to add one's face to the character.</p>
    </div>


    {{-- Slide 27 --}}
    <div class="slide flex flex-col  justify-start gap-[2rem] ">




        <div class="flex  gap-3 items-center ">
            <div class="flex flex-col gap-2">
                <img src="/assets/images/K2/story/a29.png" />
                <img src="/assets/images/K2/story/a30.png" />
            </div>
            <div>

                <img src="/assets/images/K2/story/a31.png" />
            </div>


        </div>


        <p class="note">Note: Show children how to use the camera feature to create a new character.</p>
    </div>

    {{-- Slide 28 --}}
    <div class="slide flex flex-col  justify-start gap-[2rem] ">




        <div class="flex  gap-3 items-center ">
            <div class="flex flex-col gap-2">
                <img src="/assets/images/K2/story/a29.png" />
                <img src="/assets/images/K2/story/a32.png" />
            </div>
            <div>

                <img src="/assets/images/K2/story/a33.png" />
            </div>


        </div>


        <p class="note">Note: Show children how to use the camera feature to create a new character.</p>
    </div>

    {{-- Slide 29 --}}
    <div class="slide flex flex-col  justify-start gap-[2rem] ">




        <div class="flex  gap-2  items-center ">

            <img src="/assets/images/K2/story/a34.png" />
            <img class="h-[30px] w-[30px]" src="/assets/images/K2/animate2/a16.png" />

            <img src="/assets/images/K2/story/a35.png" />


        </div>
        <h2 class="title stroke">Similarly, you can use the paint tool to make changes to any
            background on the background page.</h2>

        <p class="note">Note: Show children how to access and use the paint tool to edit a background.</p>
    </div>

    {{-- slide 30 --}}
    <div class="slide flex flex-col  justify-start gap-[2rem] ">




        <div class="flex  gap-2  items-center ">

            <img src="/assets/images/K2/story/a36.png" />
            <img class="h-[30px] w-[30px]" src="/assets/images/K2/animate2/a16.png" />

            <img src="/assets/images/K2/story/a37.png" />


        </div>
        <h2 class="title stroke">You can also use the paint tool to create a new background.</h2>

        <p class="note">Note: Show children how to access and use the paint tool to create a background.</p>
    </div>
    {{-- slide 31 --}}
    <div class="slide flex flex-col  justify-start gap-[2rem] ">




        <div class="flex  gap-2  items-center ">

            <img src="/assets/images/K2/story/a37.png" />
            <img class="h-[30px] w-[30px]" src="/assets/images/K2/animate2/a16.png" />

            <img src="/assets/images/K2/story/a38.png" />


        </div>
        <h2 class="title stroke">Once you tap here, your work will be saved.
            You will find those new backgrounds ot the background page.</h2>

        <p class="note">Note: Show children how to do so.</p>
    </div>
    {{-- slide 32 --}}
    <div class="slide flex flex-col  justify-start items-center">

        <h2 class="title stroke">Now it's time for you to get creative! <br>
            Use your imagination to create an animated story <br>
            using ScratchJr!</h2>

    </div>

    {{-- slide 33 --}}
    <div class="slide flex flex-col items-center justify-center gap-[6rem] ">
        <h2 class="title stroke !text-white">Final Project</h2>
        <ul class="title stroke !text-4xl !text-start">
            <li>Mission: <br>
                Use your imagination to create a four page story. Then use <br>
                ScratchJr to turn it into an animated story. Share your story <br>
                with the class at the end.</li>
        </ul>

        <p class="note">Note: Divide children into groups and have them work in groups to complete the final project.</p>
    </div>



    {{-- slide 34 --}}
    <div class="slide flex flex-col justify-start gap-[4rem]">
        <!-- Step Description -->
        <div>
            <ul class="title stroke text-start text-4xl">
                <li>
                    Steps: <br />
                    1. Use your imagination to create a story that is made up of
                    four backgrounds.
                </li>
            </ul>
        </div>
        <!-- Image with Text Overlays -->
        <div class="flex gap-4 items-center justify-center ">
            <!-- First Image Block -->
            <div class="relative w-[300px]">
                <img src="/assets/images/K2/story/a39.png" alt="Story Background" class="h-[700px]" />
                <div class="absolute top-10 left-4 text-white ">
                    <ul>
                        <li>
                            <span class="title stroke !text-2xl block tracking-tighter">What is the story about?</span>
                        
                            Family? Friendship? <br />
                            Outing? Adventure? <br />
                            Fantasy?..
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Second Image Block -->
            <div class="relative w-[300px]">
                <img src="/assets/images/K2/story/a39.png" alt="Story Background" class=" h-[700px] " />
                <div class="absolute top-10 left-4 text-white  ">
                    <ul>
                        <li>
                            <span class="title stroke !text-2xl block tracking-tighter">What is the story about?</span>
                            
                            Family? Friendship? <br />
                            Outing? Adventure? <br />
                            Fantasy?..
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <p class="note mt-">
            Note: Have children discuss as a group to come out with ideas for their story.
            After that, have them record their finalized story in the learning journal.
        </p>
    </div>
    {{-- slide 35 --}}
    <div class="slide flex flex-col  justify-start gap-[5rem] ">
        <div>
            <ul class="title stroke !text-start !text-white !text-4xl list-disc">
                <li class="list-none title stroke">Steps:<br>
                    2. Use ScratchJr to turn it into an animated story.</li><br>
                <li>Choose or create a background for each story page.</li>
                <li>Choose or create characters for each story page.</li>
                <li>Programme each character in a page.</li>
                <li>Test and improve the programmes of the characters in each page.</li>
                <li>Link up the pages.</li>
                <li>Run the story.</li>
            </ul>
        </div>
        <p class="note">Note: Encourage children to use the programming blocks under different
            commands to create the programmes.</p>
    </div>
    {{-- slide 36 --}}
    <div class="slide flex flex-col  justify-start gap-[30rem] ">

        <ul class="title stroke !text-start !text-white !text-4xl list-disc">
            <li class="list-none title stroke">Steps: <br>
                3. Share your story.</li>

        </ul>

        <p class="note">Note: Have children share their stories to the class using the presentation mode.</p>
    </div>



    {{-- slide 37   --}}
    <div class="slide  hidden flex flex-col  justify-center  gap-[1rem]">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[400px] bg-cover bg-center flex flex-col p-[40px] "
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
                        <img src="/assets/images/K2/story/a40.png" />

           
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
                        window.location.href = "{{ route('storySelection') }}";
                    }
                });
            }

            // Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
