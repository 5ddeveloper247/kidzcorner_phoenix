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

    {{-- slide 0 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <h2 class="title">Do you remember these glow-in-the-dark toys?</h2>
        <img src="{{ asset('assets/images/pptimages/dark1.png') }}" class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>

    {{-- slide 1 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title">These toys store light energy and glow when
                they are in a dark palce.</h2>
            <img src="{{ asset('assets/images/pptimages/dark2.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        </div>
        <p class="note">Note: Encourage children to recap what they did previously.</p>
    </div>

    {{-- slide 2 --}}
    <div class="flex flex-col items-center justify-center gap-2 slide hidden">
        <h2 class="title">Look at these items, they are bright in
            colours. Do they look like they are glowing?</h2>

        <img src="{{ asset('assets/images/pptimages/bl1.png') }}" class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
    </div>

    {{-- slide 3 --}}
    <div class="flex flex-col items-center justify-center gap-2 slide hidden">
        <h2 class="title">These bright colours are known as neon colours.</h2>
        <img src="{{ asset('assets/images/pptimages/bl1.png') }}" class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
    </div>

    {{-- slide 4 --}}
    <div class="flex flex-col justify-center gap-2 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title !text-white">CLASS ACTIVITY 1</h2>
            <img src="{{ asset('assets/images/pptimages/bl1.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        </div>
        <div class="flex items-start">
            <h2 class="title stroke text-start !text-[48px]">Let's try:<br> Will the neon coloured items glow in the dark?
            </h2>
        </div>
        <p class="note ">Note: Encourage children to share their views and findings after trying this short activity.</p>
    </div>

    {{-- slide 5 --}}
    <div class="flex flex-col gap-20 slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class="list-decimal list-inside ">
                <li>Switch off the lights.</li>
                <li>Discuss as a class:</li>
                <ul class="list-disc list-inside ml-6 space-y-1">
                    <li>How does the items look?</li>
                    <li>Are they still bright?</li>
                    <li>How can we make it glow?</li>
                </ul>
            </ul>
        </div>
        <p class="note  text-center">Note: Teacher to explain that these neon coloured items are not the same as the glow
            <br>
            in the dark items.
        </p>
    </div>

    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center gap-2 slide hidden">
        <h2 class="title stroke">Although the neon coloured items look like
            they are glowing, they do not glow in the dark.</h2>
        <img src="{{ asset('assets/images/pptimages/bl2.png') }}" class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
    </div>

    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center gap-2 slide hidden">
        <h2 class="title stroke">This special flashlight can make the neon
            coloured items look like they are glowing in the dark.</h2>
        <img src="{{ asset('assets/images/pptimages/bl3.png') }}" class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
    </div>

    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center gap-2 slide hidden">
        <h2 class="title stroke">This is a black light flashlight. the light is blue
            in colour. It is different from the usual flashlight.</h2>
        <img src="{{ asset('assets/images/pptimages/bl3.png') }}" class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
    </div>

    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center gap-2 slide hidden">
        <h2 class="title stroke">When the neon coloured items are placed
            under black light, they glow brightly.</h2>
        <img src="{{ asset('assets/images/pptimages/bl4.png') }}" class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
    </div>



    {{-- slide 10 --}}
    <div class="flex flex-col justify-center gap-2 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title !text-white">CLASS ACTIVITY 2</h2>
            <img src="{{ asset('assets/images/pptimages/bl5.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        </div>
        <div class="flex items-start">
            <h2 class="title stroke text-start !text-[48px]">Let's try:<br> Make a black light flashlight.</h2>
        </div>
    </div>

    {{-- slide 11 --}}
    <div class="flex flex-col gap-20 slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class="list-decimal list-inside ">
                <li>Choose the cellophane paper that will give a light similar to a black light.</li>
                <li>Put it on the front of a normal flashlight. Is the colour of the light same as the light from the black
                    light flash light?</li>
                <li>Shine the light at some neon coloured items in the black box. Do the items glow?</li>
            </ul>
        </div>
        <p class="note  text-center">Note: Teacher to assist children in creating the flashlight. Provide cellophane paper
            of different
            colours and encourage children to try to create their own black light to make neon items glow. </p>
    </div>

    {{-- slide 12 --}}
    <div class="flex flex-col gap-20 slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class="list-decimal list-inside ">
                <li>Use the black light and shine on the items. Now use the black light which you have made and shine on the
                    item too.</li>
                <li>Does it work? How does the items look?</li>
                <li>Change the cellophane paper if your black light does not work.</li>
            </ul>
        </div>
        <p class="note  text-center">Note: Teacher to guide children on this and remind them not to shine light
            into their eyes. </p>
    </div>


    {{-- slide 13 --}}
    <div class="flex flex-col items-center justify-center gap-2 slide hidden">
        <h2 class="title stroke">Look at these Halloween crafts! Neon
            coloured materials are often used for Halloween crafts.</h2>
        <img src="{{ asset('assets/images/pptimages/bl6.png') }}"
            class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
    </div>

    {{-- slide 14 --}}
    <div class="flex flex-col items-center justify-center gap-2 slide hidden">
        <h2 class="title stroke">Black light are often used during Halloween!
            The lights make the Halloween decorations glow brightly.</h2>
        <img src="{{ asset('assets/images/pptimages/bl7.png') }}"
            class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
    </div>



    {{-- slide 15 --}}
    <div class="flex flex-col justify-center gap-2 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title !text-white">CLASS ACTIVITY 2</h2>
            <img src="{{ asset('assets/images/pptimages/bl6.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        </div>
        <div class="flex items-start">
            <h2 class="title stroke text-start !text-[48px]">Let's try:<br>Prepare for Halloweeen</h2>
        </div>
        <p class="note  text-center">Note: Encourage children to decide what to create. This activity spreads over 2-3
            lessons.</p>
    </div>


    {{-- slide 16 --}}
    <div class="flex flex-col gap-20 slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class="list-decimal list-inside ">
                <li>Discuss as a class on the characters and items that appear during Halloween. (E.g. witches, ghost,
                    pumpkins etc)</li>
                <li>Use the black light and explore with the materials such as paper plate, stripes of cloth, paper,
                    ribbons, highlighter, glow sticks and paint.</li>
                <li>Share ideas on how the materials can be used to create the characters/items to decorate the classroom
                    for Halloween party.</li>
            </ul>
        </div>
        <p class="note  text-center">Note: Teacher to provide a range of neon and regular coloured materials for
            children to explore.</p>
    </div>


    {{-- slide 17 --}}
    <div class="flex flex-col gap-20 slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class=" list-inside ">
                <li>4. Use the materials provided to create the select Halloween characters and decorate the class.</li>
                <li>5. Place the craft in a place where the black light can shine on it.</li>
            </ul>
        </div>
        <p class="note  text-center">Note: Guide children on creating the craft. Make a display box. Paint the inside black.
            Make two-three holes on top to put the black light flashlight in such that it
            will shine downwards on the children's creation.</p>
    </div>


    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center gap-2 slide hidden">
        <h2 class="title stroke">Black light helps neon colour items
            glow in the dark.</h2>
        <img src="{{ asset('assets/images/pptimages/bl4.png') }}"
            class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
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
                    window.location.href = "{{ route('blacklightSelection') }}";
                });
            }

            //  Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
