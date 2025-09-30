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
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <div class="flex items-center justify-center">
            <img src="/assets/iamges/N2/b2.png" alt="">
            <img src="/assets/iamges/N2/b17.png" alt="">
        </div>
        <h2 class="stroke title">Children, what did you build in the last lesson? How did you play with it? What can you use
            it for?</h2>
    </div>




    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-10 ">

        <img src="/assets/images/N2/b19.png" class="w-[436px]" />
        <h2 class="stroke title">You pushed the car to make it go forward.
            You read the scale to know how far it went forward. </h2>
    </div>


    {{-- Slide 3 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <div class="flex items-center justify-center">
            <img src="/assets/iamges/N2/b2.png" alt="">
            <img src="/assets/iamges/N2/b17.png" alt="">
        </div>
        <h2 class="stroke title">It is measuring car. <br>
            You can use it to count how many units it goes forward.</h2>
    </div>


    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How do you make a measuring car go very far?
            How many ways can you make it go very far?</h2>
        <p class="note">Note: Encourage children to share their hands-on experiences.</p>
    </div>

    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/b20.png') }}" />
        <h2 class="title stroke">This is way to make a measuring car go very far when you give it a push.</h2>
    </div>


    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/b20.png') }}" />
        <h2 class="title stroke">Do you know what this is?</h2>
        <p class="note">Note: Encourage children to boldly share their views.</p>
    </div>


    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/b20.png') }}" />
        <h2 class="title stroke">This is a ramp. It is a slanting surface with one end higher than the other end.</h2>
    </div>

    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/b20.png') }}" />
        <h2 class="stroke title">The <span class="text-white">ramp</span> looks like a shape.<br />It is a <span
                class="text-white">simple machine</span> called an <span class="text-white">inclined plane</span>.</h2>
    </div>


    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/b20.png') }}" />
        <h2 class="stroke title"><span class="text-white">Simple machines </span>are tools that help us to do work
            easily.<br />Let’s find out more about <span class="text-white">inclined planes!</span></h2>
    </div>

    {{-- slide 10 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Mission:</h2>
            <ul>
                <li>Let’s push a measuring car down an inclined plane at different heights to see how far it will go.</li>
            </ul>
        </div>
        <p class="note">Note: Divide children into groups and give each group a set of materials.</p>
    </div>


    {{-- slide 11 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>1. Push a measuring car down an inclined plane to see how far it goes. Read the scale and record your
                    reading.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/b21.png') }}" />
        <p class="note">Note: Have children work in groups to complete the mission. Have them record the reading in their
            learning journal.</p>

    </div>


    {{-- slide 12 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>2. Change the height of the inclined plane and test again. Read the scale and record your reading.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/b21.png') }}" />
        <p class="note">Note: Have children work in groups to complete the mission.Have them record the reading in their
            learning journal.</p>

    </div>

    {{-- slide 13 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>2. Change the height of the inclined plane and test again. Read the scale and record your reading,</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/b22.png') }}" />
        <p class="note">Note: Have children work in groups to complete the mission.Have them record the reading in their
            learning journal.</p>

    </div>

    {{-- sldie 14 --}}
    <div class="flex flex-col  slide hidden gap-20">
        <h2 class="title storke">Based on your record, which height of inclined plane makes the car go very far? How many
            units does the car go? What do you find out from the test?</h2>
        <p class="note">Note: Have each group of children share their findings based on the record in their learning
            journal.
            Guide them to conclude in the end- a car will go very far (longer distance) if the inclined plane is sleeper.
        </p>
    </div>


    {{-- sldie 15 --}}
    <div class="flex flex-col  slide hidden">
        <h2 class="stroke title">Learning Journal</h2>
        <img src="{{ asset('assets/images/N2/bb1.png') }}" />
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
                    window.location.href = "{{ route('MeasuringCar2Selection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
