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
        <img src="/assets/images/K1/cm/cm25.png" />
        <h2 class="title stroke">Let’s watch a video! What do you see?</h2>
        <p class="note">Note: Let children share what they see.</p>

        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-0 z-30 h-24 w-24 -translate-y-1/2 cursor-pointer h-24 w-24 rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-[80%] " />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/cm/cm25.png" />
        <h2 class="title stroke">When the first domino is pushed, it falls and pushes
            the second domino.</h2>

        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-0 z-30 h-24 w-24 -translate-y-1/2 cursor-pointer h-24 w-24 rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-[80%] " />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- Slide3 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/cm/cm25.png" />
        <h2 class="title stroke">When the second domino falls on the ice cream stick,
            the ice cream stick moves and pushes the next domino.</h2>

        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-0 z-30 h-24 w-24 -translate-y-1/2 cursor-pointer h-24 w-24 rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-[80%] " />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>



    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/cm/cm25.png" />
        <h2 class="title stroke">When one action causes the next action, which in turn causes
            the next action, and so on, we call it a <span class="text-white">domino effect</span>.</h2>

        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-0 z-30 h-24 w-24 -translate-y-1/2 cursor-pointer h-24 w-24 rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-[80%] " />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>



    {{-- Slide 5  --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/cm/cm25.png" />
        <h2 class="title stroke"><span class="text-white">Chain reaction</span> is another name for a <span
                class="text-white">domino effect</span>.</h2>

        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-0 z-30 h-24 w-24 -translate-y-1/2 cursor-pointer h-24 w-24 rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-[80%] " />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- slide 6 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm25.png" />
        <h2 class="title stroke">You can make a long chain of dominoes with
            the help of ice cream sticks.</h2>
    </div>


    {{-- Slide 7 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-20">
        <h2 class=" title stroke !text-white">Individual Activity</h2>
        <h2 class="text-start title stroke">Now, we’ll learn to do this Long Chain Dominoes
            idea and have fun making it work!</h2>
    </div>




    {{-- slide 8 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm26.png" />
        <h2 class="title stroke">Place two dominoes one after another.
            Then lay an ice cream stick on the third domino.</h2>
    </div>


    {{-- slide 9 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm26.png" />
        <h2 class="title stroke">Lay another ice cream stick on the next domino. Repeat this
            for another two times to form a long chain of dominoes.</h2>
    </div>


    {{-- slide 10 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm27.png" />
        <h2 class="title stroke">Push the first domino.</h2>
    </div>


    {{-- slide 11 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm28.png" />
        <h2 class="title stroke">Do the dominoes and ice cream sticks
            fall one after another?</h2>
    </div>



    {{-- slide 12 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <h2 class="title stroke">Are you able to do this Long Chain Dominoes?
            Let’s do it one more time!</h2>
    </div>



    {{-- slide 13 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm29.png" />
        <h2 class="title stroke">Let’s watch another video! What do you see?</h2>
        <p class="note">Note: Let children share what they see.</p>


        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-0 z-30 h-24 w-24 -translate-y-1/2 cursor-pointer h-24 w-24 rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-[80%] " />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>



    {{-- slide 14 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm29.png" />
        <h2 class="title stroke">When the first domino is pushed, it falls and makes the
            other dominoes fall one after another.</h2>
    </div>


    {{-- slide 15 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm29.png" />
        <h2 class="title stroke">When the last domino pushes the ice cream stick, the ice cream
            stick moves away and lets the ball roll down the slanted track.</h2>
    </div>


    {{-- slide 16 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm30.png" />
        <h2 class="title stroke">What <span class="text-white">simple machines</span> is used here?</h2>
    </div>


    {{-- slide 17 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm30.png" />
        <h2 class="title stroke">The slanted track is the inclined plane used here.</h2>
    </div>



    {{-- slide 18 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-20">
        <h2 class=" title stroke !text-white">Individual Activity</h2>
        <h2 class="text-start title stroke">Now, we’ll learn to do this Ball Roll idea and
            have fun making it work!</h2>
    </div>


    {{-- slide 19 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm31.png" />
        <h2 class="title stroke">Place some dominoes under a track to form
            an inclined plane.</h2>
    </div>



    {{-- slide 20  --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm32.png" />
        <h2 class="title stroke">Place four dominoes beside the track at some distance from it.</h2>
    </div>


    {{-- slide 21  --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm30.png" />
        <h2 class="title stroke">Place an ice cream stick on the last domino and
            rest it on the track to hold a ball in place.</h2>
    </div>



    {{-- sldie 22 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm29.png" />
        <h2 class="title stroke">Push the first domino.</h2>
    </div>



    {{-- sldie 23 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm29.png" />
        <h2 class="title stroke">Do the dominoes fall one after another? Does the ice-cream
            stick move away and make the ball roll down the inclined plane?</h2>
    </div>


    {{-- slide 24 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <h2 class="title stroke">Are you able to do this Ball Roll?
            Let’s do it one more time!</h2>
    </div>


    {{-- sldie 25 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm33.png" />
        <h2 class="title stroke">Let’s watch another video! What do you see?</h2>
        <p class="note">Note: Let children share what they see.</p>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-0 z-30 h-24 w-24 -translate-y-1/2 cursor-pointer h-24 w-24 rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-[80%] " />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- slide 26 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm33.png" />
        <h2 class="title stroke">The ball rolls down a slanted track into a cup. The cup turns
            and the ball rolls down the book onto another track.</h2>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-0 z-30 h-24 w-24 -translate-y-1/2 cursor-pointer h-24 w-24 rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-[80%] " />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>

    {{-- slide 27 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm33.png" />
        <h2 class="title stroke">The ball then rolls down this slanted track and pushes
            the dominoes and so they fall one after another.</h2>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-0 z-30 h-24 w-24 -translate-y-1/2 cursor-pointer h-24 w-24 rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-[80%] " />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- slide 28 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm34.png" />
        <h2 class="title stroke">What simple machine is used here?</h2>
    </div>



    {{-- slide 29 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm34.png" />
        <h2 class="title stroke">The big book and the two slanted tracks are
            the <span class="text-white">inclined planes</span> used here.</h2>
    </div>


    {{-- slide 30 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-20">
        <h2 class=" title stroke !text-white">Individual Activity</h2>
        <h2 class="text-start title stroke">Now, we’ll learn to do this Cup Turn idea and have
            fun making it work!</h2>
    </div>


    {{-- slide 31 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm35.png" />
        <h2 class="title stroke">First, set up an inclined plane with some books. Also make a
            platform of books next to the inclined plane.</h2>
    </div>


    {{-- slide 32 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm35.png" />
        <h2 class="title stroke">Now, set up a higher slanted track and rest
            it on the book.</h2>
    </div>


    {{-- slide 33 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm36.png" />
        <h2 class="title stroke">Place a cup on the edge of the book such that
            it faces this track.</h2>
    </div>


    {{-- slide 34 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm34.png" />
        <h2 class="title stroke">Place another track for the ball to roll onto after the cup
            turns. Use some dominoes to make this track slanted.</h2>
    </div>


    {{-- slide 35 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm37.png" />
        <h2 class="title stroke">Keep wooden blocks near this track so that the ball
            does not roll off this track.</h2>
    </div>


    {{-- slide 36 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm38.png" />
        <h2 class="title stroke">Place five dominoes at the end of this track and
            a ball on the higher slanted track.</h2>
    </div>


    {{-- slide 37 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm39.png" />
        <h2 class="title stroke">Push a ping pong ball down the higher slanted track.</h2>
    </div>



    {{-- slide 38 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm33.png" />
        <h2 class="title stroke">Does the cup turn? Does the ball roll onto the other
            track and push the dominoes?</h2>
    </div>


    {{-- slide 39 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <h2 class="title stroke">Are you able to do this Cup Turn?
            Let’s do it one more time!</h2>
    </div>


    {{-- slide 40 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[536px] bg-cover bg-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>Which idea did you like doing the most? Draw how you set up this idea.</p>
        </div>
    </div>




    {{-- Complete button --}}
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
            <img class="absolute top-[6px] left-[8px] w-20 h-10" src="{{ asset('assets/images/K1/cm/Vector4.png') }}" />
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

                // ✅ Agar last slide hai → NEXT button hide, DONE show
                if (index === slides.length - 1) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            // ✅ NEXT buttons listener
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                });
            });

            // ✅ Return button
            returnButton.addEventListener("click", () => {
                if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('SmartIdeasSelection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
