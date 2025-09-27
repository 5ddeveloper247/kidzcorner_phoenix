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


    {{-- slide 1 --}}
    <div class="slide  flex flex-col items-center justify-center gap-5">
        <div class="flex flex-col items-center justify-center">
            <h2 class="text-3xl text-amber-300 sm:text-4xl lg:text-5xl stroke">Have you ever noticed a black shape near your
                feet when you are out in the sun?</h2>
            <img src="{{ asset('assets/images/pptimages/shadow1.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        </div>

        <p class="note">Note: Encourage children to share and ask them what that black shape is.</p>

    </div>

    {{-- slide 2 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-5">

        <h2 class="title stroke">That
            <span class="text-white">black</span> shape is your <span class="text-white">shadow</span>
            <span class="text-white">Shadows</span> are made when something <span class="text-white">blocks</span> the
            <span class="text-white">light</span>
        </h2>

        <img src="{{ asset('assets/images/pptimages/shadow1.png') }}"
            class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />

    </div>

    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-5">
        <div class="flex flex-col items-center justify-center">
            <h2 class="stroke title">The man, the poles, the trees have shadows!</h2>

            <img src="{{ asset('assets/images/pptimages/shadow1.png') }}" class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />

        </div>

        <div class="note">Note: Teacher to point out the shadows of each item to the children.</div>
    </div>



    <!-- Slide 4 -->
    <div class="slide hidden flex flex-col items-center justify-center gap-5">
        <div class="flex flex-col items-center justify-center">
            <h2 class="stroke title">The shape of your
                <span class="text-white">shadow </span> looks like you and it follows all your movements.
            </h2>

            <img src="{{ asset('assets/images/pptimages/shadow1.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />


        </div>
    </div>


    <!-- Slide 5 -->
    <div class="slide hidden flex flex-col items-center justify-center gap-5">

        <h2 class="stroke title">When you jump, your shadow jumps.</h2>

            <img src="{{ asset('assets/images/pptimages/shadow2.png') }}" class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />

    </div>


    <!-- Slide 6 -->
    <div class="slide hidden flex flex-col items-center justify-center gap-5">

        <h2 class="stroke title">When you lift up your arms, your shadow does
            the same actions.</h2>
        <img src="{{ asset('assets/images/pptimages/shadow2.png') }}"
            class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />

    </div>


    <!-- Slide 7 -->
    <div class="slide hidden flex flex-col items-center justify-center px-4 text-center">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title !text-white">Class Activity 1</h2>
            <img src="{{ asset('assets/images/pptimages/shadow17.png') }}" />

            <h2 class="text-2xl title">Make animal shadows with your hands.</h2>
        </div>
        <p class="note text-ellipsis">Note: Teacher to use light to shine towards a white wall. Ensure enough space
            for children to work in front of the light.</p>
    </div>


    <!-- Slide 8 -->
    <div class="slide hidden flex flex-col items-center justify-center px-4 text-start">
        <div class="title stroke">
            <h2>Let's do:</h2>
            <ul class="list-decimal">
                <li>Place a light source at a distance from a plain wall.</li>
                <li>Shine the light at the wall.</li>
                <li>Stand in front of the light and raise up your arms.</li>
                <li>Observe how your shadows move as your arms move.</li>
            </ul>
        </div>
        <p class="note text-ellipsis">Note: Ensure children's safety while doing this activity. <br>Make sure the room
            is not too dark and remind children not to look into the light directly. <br>Let children know that it is
            bad for their eyes.</p>

    </div>


    <!-- Slide 9 -->
    <div class="slide hidden flex flex-col items-center justify-center px-4 text-center">
        <div class="flex flex-col items-center justify-center">
            <div class="title !text-white">Let's do:</div>
            <div class="title">5. Make animal shadows with your hands.</div>
            <img src="{{ asset('assets/images/pptimages/shadow16.png') }}" />

        </div>

        <p class="note text-ellipsis">Note: Encourage children to share their answers.</p>

    </div>

    <!-- Slide 10 -->
    <div class="slide hidden flex flex-col items-center justify-center px-4 text-center">
        <div class="flex flex-col items-center justify-center">
            <h2 class="!text-white title">Let's do:</h2>
            <h2 class="title">6. Follow the pictures below and make a shadow of a bird.</h2>
            <img src="{{ asset('assets/images/pptimages/shadow14.png') }}" />

        </div>
        <div class="note text-ellipsis">Note: Guide children to follow the shadow of a bird.</div>

    </div>
    <!-- Slide 11 -->
    <div class="slide hidden flex flex-col items-center justify-center px-4 text-center">
        <div class="flex flex-col items-center justify-center">
            <h2 class="text-2xl text-white sm:text-3xl lg:text-5xl stroke">Let's do:</h2>
            <h2 class="text-2xl text-amber-300 sm:text-3xl lg:text-5xl stroke">7. Look at the picture below. What animal is
                it?</h2>
            <!-- Example Image -->
            <img src="{{ asset('assets/images/pptimages/shadow15.png') }}" />

        </div>
        <div class="flex w-[70%] flex-col items-center justify-center">
            <!-- Note -->
            <p class="note text-ellipsis">Note: Encourage children to share their answers.</p>
        </div>
    </div>

    <!-- Slide 12 -->
    <div class="slide hidden flex flex-col items-center justify-center px-4 text-center">
        <div class="flex flex-col items-center justify-center">
            <h2 class="text-2xl text-white sm:text-3xl lg:text-5xl stroke">Let's do:</h2>
            <h2 class="text-2xl text-amber-300 sm:text-3xl lg:text-5xl stroke">8. Follow the pictures below and make a
                shadow of a moose.</h2>
            <img src="{{ asset('assets/images/pptimages/shadow13.png') }}" />

        </div>
        <div class="flex w-[70%] flex-col items-center justify-center">
            <!-- Note -->
            <p class="note text-ellipsis">Note: Guide children to follow the shadow of a moose.</p>
        </div>
    </div>  

    <!-- Slide 13 -->
    <div class="slide hidden flex flex-col items-center justify-center px-4 text-center">
        <div class="flex flex-col items-center justify-center">
            <h2 class="text-2xl text-white sm:text-3xl lg:text-5xl stroke">Let's do:</h2>
            <h2 class="text-2xl text-amber-300 sm:text-3xl lg:text-5xl stroke">9. Try making the shadow of a dog.</h2>
            <img src="{{ asset('assets/images/pptimages/shadow12.png') }}" />

        </div>
        <div class="flex w-[70%] flex-col items-center justify-center">
            <!-- Note -->
            <p class="note text-ellipsis">Note: Guide and encourage children to try.</p>
        </div>
    </div>

    <!-- Slide 14 -->
    <div class="slide hidden flex flex-col items-center justify-center px-4 text-center">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title !text-white stroke">Let's do:</h2>
            <h2 class="title stroke">10.Try making the shadow of a duck.</h2>
            <img src="{{ asset('assets/images/pptimages/shadow11.png') }}" />
        </div>
        <div class="flex w-[70%] flex-col items-center justify-center">
            <!-- Note -->
            <p class="note text-ellipsis">Note: Guide and encourage children to try.</p>
        </div>
    </div>

    <!-- Slide 15 -->
    <div class="slide hidden flex flex-col items-center justify-center gap-y-3">
        <!-- Center Illustration -->
        <h2 class="justify-start text-center text-[40px] text-amber-300 stroke">
            Look at these pictures. <br />
            How are the shadows different?
        </h2>
        <div class="flex items-center gap-x-10">
            <img class="h-80 w-[494px]" src="{{ asset('assets/images/pptimages/shadow5.png') }}" />
            <img class="h-80 w-[494px]" src="{{ asset('assets/images/pptimages/shadow4.png') }}" />

        </div>
        <div class="flex flex-col items-center justify-center">
            <!-- Song Note -->
            <p class="note leading-snug text-wrap">Note: Guide and encourage children to answer.</p>
        </div>
    </div>

    <!-- Slide 16 -->
    <div class="slide hidden flex flex-col items-center justify-center gap-y-3">
        <!-- Center Illustration -->
        <h2 class="justify-start text-center text-[40px] text-amber-300 stroke w-[80%]">The shadow in the land is
            <span class="text-white"> long </span>, </br> but the shadow on the tennis player is
            <span class="text-white"> short </span>.
        </h2>
        <div class="flex items-center gap-x-10">
            <img class="h-80 w-[494px]" src="{{ asset('assets/images/pptimages/shadow5.png') }}" />
            <img class="h-80 w-[494px]" src="{{ asset('assets/images/pptimages/shadow4.png') }}" />

        </div>
    </div>

    <!-- Slide 17 -->
    <div class="slide hidden flex flex-col items-center justify-center gap-y-3">
        <!-- Center Illustration -->
        <h2 class="stroke justify-start text-center text-[40px] text-amber-300">Why are the shadows different?</h2>
        <div class="flex items-center gap-x-10">
            <img class="h-80 w-[494px]" src="{{ asset('assets/images/pptimages/shadow5.png') }}" />
            <img class="h-80 w-[494px]" src="{{ asset('assets/images/pptimages/shadow4.png') }}" />

        </div>
        <div class="flex flex-col items-center justify-center">
            <p class="note leading-snug text-wrap">Note: Guide and encourage children to share their thoughts.</p>
        </div>
    </div>

    <!-- Slide 18 -->
    <div class="slide hidden flex flex-col items-center justify-center gap-y-3">
        <h2 class="justify-start text-center text-[45px] text-white stroke">CLASS ACTIVITY 2</h2>
        <img src="{{ asset('assets/images/pptimages/shadow6.png') }}" />

        <h2 class="stroke justify-start text-start text-[40px] text-amber-300">
            Let's find out: <br />
            What changes the size of the shadows?
        </h2>
        <div class="flex flex-col items-center justify-center">
            <p class="note leading-snug text-wrap">Note: Teacher to prepapre materials for each group to explore.</p>
        </div>
    </div>

    <!-- Slide 19 -->
    <div class="slide hidden flex flex-col items-center justify-between h-[60%] px-4 text-start">
        <h2 class="stroke title">
            Let's do:
        </h2>
        <ul class="list-decimal title">
            <li>Build a tower with 3 blocks.</li>
            <li>Paste a piece of paper on the wall.</li>
        </ul>

            <p class="note text-ellipsis">Note: Assist the children in each group to set up the paper on the wall.
                Encourage children to build their own tower.</p>
    </div>

    <!-- Slide 20 -->
    <div class="slide hidden flex flex-col items-center justify-center px-4 text-start">
        <h2 class="stroke text-[45px] text-amber-300">
            Let's do:
        </h2>
        <ul>
            <li>
                3. Put the flashlight at a distance from the <br />
                blocks such that the shadow is projected on the wall.
            </li>
        </ul>
        <img src="{{ asset('assets/images/pptimages/shadow6.png') }}" alt="" />

        <div class="flex w-[85%] flex-col items-center justify-center text-center">
            <!-- Note -->
            <p class="note text-ellipsis">Note: Assist the children in each group to set up and let children explore with
                the set up.</p>
        </div>
    </div>

    <!-- Slide 21 -->
    <div class="slide hidden flex flex-col items-center justify-center px-4 text-start">
        <h2 class="stroke text-[45px] text-amber-300">
            Let's do:
        </h2>
        <ul>
            <li> <span style="opacity:0;">-</span> 4. Draw the shadow on the paper and label it as A.</li>
            <li>5. Paste a label A at the position where the flashlight is</li>
        </ul>
        <img src="{{ asset('assets/images/pptimages/shadow7.png') }}" alt="" />

        <div class="flex w-[85%] flex-col items-center justify-center text-center">
            <!-- Note -->
            <p class="note text-ellipsis">Note: Assist the children in each group to set up and let children explore with
                the set up.</p>
        </div>
    </div>

    <!-- Slide 22 -->
    <div class="slide hidden flex flex-col items-center justify-center px-2 space-y-10 text-start w-[90%]">
        <h2 class="stroke text-[45px] text-amber-300">
            Let's do:
        </h2>
        <ul>
            <li>6. Move the position of the flashlight and observe the size of the shadows formed.</li>
            <li>7.Now try to make a shadow that is smaller/bigger than the one drawn on the paper.</li>
            <li>8. Draw the shadow and mark the position.</li>
        </ul>
        <div class="flex w-[85%] flex-col items-center justify-center text-center">
            <!-- Note -->
            <p class="note text-ellipsis">Note: Teacher to ask questions to lead children to explore how they can change
                the position of the light. Children are not allowed to add blocks to make a taller tower.</p>
        </div>
    </div>

    <!-- Slide 23 -->
    <div class="slide hidden flex flex-col items-center justify-center px-4 text-start">
        <h2 class="stroke text-[45px] text-amber-300">
            Let's do:
        </h2>
        <ul>
            <li><span style="opacity:0;">-</span> 9. Share how to make a shadow smaller/bigger.</li>
        </ul>
        <img src="{{ asset('assets/images/pptimages/shadow8.png') }}" alt="" />

        <div class="flex w-[85%] flex-col items-center justify-center text-center">
            <!-- Note -->
            <p class="note text-ellipsis">Note: Assist the children to gather conclusion.</p>
        </div>
    </div>

    <!-- Slide 24 -->
    <div class="slide hidden flex w-[90%] flex-col items-center justify-center space-y-10 px-2 text-start">
        <h2 class="stroke text-[40px] text-amber-300">
            Suggested Guiding Question:
        </h2>
        <ul class="list-disc stroke">
            <li>What happens to the shadow when the flashlight is placed nearer to/farther from the blocks?</li>
            <li>What happens when the flashlight is placed at a higher or lower position?</li>
            <li>Use more or bigger flashlights to shine at the blocks.</li>
            <li>How to make the shadow taller/smaller/shorter?</li>
        </ul>
        <div class="flex w-[85%] flex-col items-center justify-center text-center">
            <!-- Note -->
            <p class="note text-ellipsis">Note: Teacher to facilitate each group and encourage them to explore how they can
                find solutions for the different challenges - making shadows taller, smaller or shorter.</p>
        </div>
    </div>

    <!-- Slide 25 -->
    <div
        class="slide hidden flex flex-col items-center justify-center text-[50px] text-amber-300 text-center w-[90%] stroke">
        <!-- Center Illustration -->
        <h2>The shadow becomes <span class="text-white">bigger </span> when the <span class="text-white">flashlight</span>
            is used and placed <span class="text-white">nearer</span> to the blocks.</h2>
        <div class="px-20">
            <img src="{{ asset('assets/images/pptimages/shadow9.png') }}" />

        </div>
        <h2>The shadow becomes <span class="text-white">smaller</span> when the <span class="text-white">flashlight</span>
            is placed <span class="text-white">farther from</span> the blocks.</h2>
    </div>

    <!-- Slide 26 -->
    <div
        class="slide hidden flex flex-col items-center justify-center text-[50px] text-amber-300 text-center w-[90%] stroke">
        <!-- Center Illustration -->
        <h2>The shadow becomes <span class="text-white">taller</span> when the <span class="text-white">flashlight</span>
            is placed <span class="text-white">at a lower position.</span></h2>
        <div class="px-20">
            <img src="{{ asset('assets/images/pptimages/shadow10.png') }}" />

        </div>
        <h2>The shadow becomes <span class="text-white">shorter</span> when the <span class="text-white">flashlight</span>
            is placed <span class="text-white">at a higher position.</span></h2>
    </div>

    <!-- Slide 27 -->
    <div class="slide hidden flex w-[100%] flex-col items-center justify-center text-center text-[42px] text-amber-300">
        <!-- Center Illustration -->
        <div class="flex items-center gap-x-20">
            <h2 class="stroke">Let's sing:</h2>
            <h2 class="stroke">Hi Shadow</h2>
        </div>
        <img src="{{ asset('assets/images/pptimages/shadow2.png') }}" class="w-[50%]" />

        <h2 class="stroke text-nowrap">This song tells you what you have learned about <span
                class="text-white">shadows.</span></h2>
        <p class="note text-ellipsis">Note: Encourage children to sing along. Refer</p>
    </div>

    <!-- Slide 28 -->
    <div class="slide hidden flex w-[100%] flex-col items-center justify-center text-center text-[42px] text-amber-300">
        <img src="{{ asset('assets/images/pptimages/shadow2.png') }}" class="w-[50%]" />

        <h2 class="stroke">Shadows are black shapes made when <br />something blocks light.</h2>
    </div>

    <!-- Slide 29 -->
    <div class="slide hidden flex w-[100%] flex-col items-center justify-center text-center text-[42px] text-amber-300">
        <img src="{{ asset('assets/images/pptimages/shadow17.png') }}" class="w-[50%]" />

        <h2 class="stroke">Animal shaped shadows can be made using hands. <br />The shadows move when your hands move!</h2>
    </div>

    <!-- Slide 30 -->
    <div class="slide hidden flex w-[100%] flex-col items-center justify-center text-center text-[42px] text-amber-300">
        <img src="{{ asset('assets/images/pptimages/shadow8.png') }}" class="w-[50%]" />

        <h2 class="stroke">The size of the shadow changes <br />when the position of the light changes.</h2>
    </div>




    {{-- Complete/Done Butttom --}}
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

    {{-- Buttons --}}
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
            const doneButton = document.querySelector(".doneButton"); // ✅ DONE button

            let currentSlide = 0;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });
                if (index === slides.length - 1) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            //  NEXT buttons listener
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                });
            });

            //  Return button
            returnButton.addEventListener("click", () => {
                if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('chooseShadow') }}";
                });
            }

            //  Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
