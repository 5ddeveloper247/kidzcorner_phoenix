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
        <h2 class="title">What do you see in this picture?</h2>
        <img src="{{ asset('assets/images/pptimages/rainbow.png') }}"
            class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        <p class="note">Note: Guide children to share their answers.</p>
    </div>

    {{-- slide 1 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title">There's a <span class="text-white">rainbow</span> in the sky! Do you know how are <span
                    class="text-white">rainbows</span> formed?</h2>
            <img src="{{ asset('assets/images/pptimages/rainbow.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        </div>
        <p class="note">Note: Ask children if they have seen a rainbow in real life and share their thoughts about
            rainbows.</p>
    </div>

    {{-- slide 2 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <h2 class="title">Rainbows are formed when <span class="text-white">light</span> shines through water droplets
            forming a <span class="text-white">rainbow</span></h2>
        <div class="flex items-center justify-around">
            <img src="{{ asset('assets/images/pptimages/suny.png') }}" />
            <img src="{{ asset('assets/images/pptimages/arrow2.png') }}" />
            <img src="{{ asset('assets/images/pptimages/drops.png') }}" />
        </div>
    </div>

    {{-- slide 3 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <h2 class="title">The water droplet separates the <span class="text-white">white light</span> into <span
                class="text-white">seven colours</span></h2>
        <div class="flex items-center justify-around">
            <img src="{{ asset('assets/images/pptimages/suny.png') }}" />
            <img src="{{ asset('assets/images/pptimages/arrow2.png') }}" />
            <img src="{{ asset('assets/images/pptimages/drops.png') }}" />
        </div>
    </div>

    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center gap-3 slide hidden">
        <h2 class="title">The seven colours are <span style="color:red;">red</span>, <span
                style="color:orange;">orange</span>, <span style="color:yellow;">yellow</span>, <span
                style="color:green;">green</span>, <span style="color:blue;">blue</span>, <span
                style="color:indigo;">indigo</span> and <span style="color:violet;">violet</span>.</h2>
        <div class="relative flex items-center justify-center w-[25%]">
            <img src="{{ asset('assets/images/pptimages/suny.png') }}" />
            <img src="{{ asset('assets/images/pptimages/arrow2.png') }}" />
            <img src="{{ asset('assets/images/pptimages/drops.png') }}" />
            <img src="{{ asset('assets/images/pptimages/svgR.png') }}" class="absolute left-[80%]" />
        </div>
    </div>

    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-center gap-3 slide hidden">
        <h2 class="title">This is how the <span class="text-white">rainbows</span> are formed!</h2>
        <div class="relative flex items-center justify-center w-[25%]">
            <img src="{{ asset('assets/images/pptimages/suny.png') }}" />
            <img src="{{ asset('assets/images/pptimages/arrow2.png') }}" />
            <img src="{{ asset('assets/images/pptimages/drops.png') }}" />
            <img src="{{ asset('assets/images/pptimages/svgR.png') }}" class="absolute left-[80%]" />
        </div>
    </div>

    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title"><span style="color:white;">Rainbows</span> can form whenever there's <span
                    style="color:white;">light</span> and water! Sometimes <span style="color:white;">rainbows</span> appear
                at the fountains on a sunny day.</h2>
            <img src="{{ asset('assets/images/pptimages/reflect.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        </div>
        <p class="note">Note: Teacher can explain that there's light from the sun and water from the fountain.</p>
    </div>

    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title text-white">CLASS ACTIVITY 1</h2>
            <img src="{{ asset('assets/images/pptimages/bottle.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        </div>
        <h2 class="title text-start">Let's try: Create a raibow in the sun</h2>
        <p class="note">Note: Teacher recap with children what are the main things needed to create a <br>rainbow (light
            and water). This should be done on a sunny day.</p>
    </div>

    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center space-y-20 slide hidden">
        <div class="title text-start px-4">
            <h2>let's do:</h2>
            <ul class="list-decimal">
                <li>Place white paper on the floor in the outdoors.</li>
                <li>Take a bottle of water and hold it in the sun.</li>
                <li>Observe the paper on the floor as the sunlight shines through the bottle of water.</li>
            </ul>
        </div>
        <p class="note">Note: The rainbow captured on the paper may be very small, teacher may need to point out to
            children to see it.</p>
    </div>

    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <div class="title text-start">
                <h2>let's do:</h2>
                <ul>
                    <li>4. Place white paper on the floor in the outdoors.</li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/couple.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        </div>
    </div>

    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title text-white">CLASS ACTIVITY 2</h2>
            <img src="{{ asset('assets/images/pptimages/bowl.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        </div>
        <h2 class="title text-start">Let's try: Create a raibow using a mirror, water and flashlight!</h2>
        <p class="note">Note: Teacher recap with children what are the main things needed to create a rainbow (light and
            water).</p>
    </div>

    {{-- slide 11 --}}
    <div class="flex  flex-col items-center justify-center space-y-10 slide hidden">
        <div class="title text-start px-4">
            <h2>let's do:</h2>
            <ul class="list-decimal">
                <li>Fill half the container with water and place a mirror in it.</li>
                <li>Make sure that the mirror is placed slanted such that only half of the mirror is submerged in the water.
                </li>
                <li>Shine the flashlight onto the mirror submerged in water.</li>
            </ul>
        </div>
        <p class="note">Note: Remind children not to shine light into eyes. Teacher to guide children to observe where the
            rainbow is formed when they shine the <br>flashlight on the mirror.</p>
    </div>

    {{-- slide 12 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <div class="title text-start">
                <h2>let's do:</h2>
                <ul>
                    <li>4. Move the flashlight and explore how a rainbow can be reformed</li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/couple2.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        </div>
    </div>

    {{-- slide 13 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <img src="{{ asset('assets/images/pptimages/cds.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
            <h2 class="title">Do you know what these are?</h2>
            <p class="note">Note: Encourage children to share their answers.</p>
        </div>
    </div>

    {{-- slide 14 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title">These are disc. They are shiny and reflective!</h2>
            <img src="{{ asset('assets/images/pptimages/cds.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
            <h2 class="title">Like water, the shiny disc separates light into seven colours.</h2>
            <p class="note">Note: Teacher can pass a few CDs around the class and let children have a closer look at it.
            </p>
        </div>
    </div>

    {{-- slide 15 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <img src="{{ asset('assets/images/pptimages/cds.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
            <h2 class="title">Can you see rainbows on the disc?</h2>
            <p class="note">Note: Teacher can guide children to observe and share what colours they see on the disc.</p>
        </div>
    </div>

    {{-- slide 16 --}}
    <div class="flex flex-col items-center justify-center space-y-10 slide hidden">
        <div class="title text-start px-4">
            <h2>let's do:</h2>
            <ul class="list-decimal">
                <li>Place white paper on the floor in the outdoors.</li>
                <li>Take a bottle of water and hold it in the sun.</li>
                <li>Observe the paper on the floor as the sunlight shines through the bottle of water.</li>
            </ul>
        </div>
        <p class="note">Note: The rainbow captured on the paper may be very small, teacher may need to point out to
            children to see it.</p>
    </div>

    {{-- slide 17 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title text-white">CLASS ACTIVITY 2</h2>
            <img src="{{ asset('assets/images/pptimages/paper.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        </div>
        <h2 class="title text-start">Let's try: Create a raibow using a disc!</h2>
        <p class="note">Note: Teacher can try to do this activity both indoors and outdoors.</p>
    </div>

    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title">This is shadow puppetry. They are putting up a show using the shadows of the puppets.</h2>
            <img src="{{ asset('assets/images/pptimages/girls.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        </div>
    </div>

    {{-- slide 19 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title">What shadows do you see?</h2>
            <img src="{{ asset('assets/images/pptimages/girls.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        </div>
        <p class="note ">Note: Teacher to encourage children to share answers. Teacher can point out the shadows of the
            tree and bird.</p>
    </div>

    {{-- slide 20 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title">When light shines on the puppets, shadows are formed. The shape of the shadows show what
                characters they are.</h2>
            <img src="{{ asset('assets/images/pptimages/girls.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        </div>
    </div>

    {{-- slide 21 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title text-white">CLASS ACTIVITY 2</h2>
            <img src="{{ asset('assets/images/pptimages/act.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        </div>
        <h2 class="title text-start">Let's try: Make puppets for shadow play.</h2>
        <p class="note">Note: Teacher to provide some templates for children to choose. E.g. House, shapes, animals.</p>
    </div>

    {{-- slide 22 --}}
    <div class="flex flex-col items-center justify-center space-y-10 slide hidden">
        <div class="title text-start px-4">
            <h2>let's do: </h2>
            <ul class="list-decimal text-4xl">
                <li>Explore the items and with flashlights.</li>
                <li>
                    Choose where to add the materials to the cardboard template:
                    <ul class="list-disc">
                        <li>Cover the holes (eyes and mouth) with translucent materials (e.g., cellophane paper).</li>
                        <li>Add other materials to create a different shape on the template.</li>
                    </ul>
                </li>
            </ul>
        </div>
        <p class="note">Note: Teacher to provide a wide variety of materias for children to explore. Encourage children
            to explore the materials with the flashlight.</p>
    </div>

    {{-- slide 23 --}}
    <div class="flex flex-col items-center justify-center px-4 text-start slide hidden">
        <div class="title">
            <h2>Let's do:</h2>
            <ul>
                <li>3. Use a flashlight and shine it on your puppet. Look at the shadow of your puppet.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/doll.png') }}" alt="" />
        <div class="flex w-[100%] flex-col items-center justify-center text-center">
            <p class="note text-ellipsis">Note: Teacher to guide and assist children in using tape and glue as they add the
                translucent paper and other materials on their puppet. Template should have some holes cut out e.g eyes nose
                etc for children to paste.</p>
        </div>
    </div>

    {{-- slide 24 --}}
    <div class="flex flex-col items-center justify-center space-y-20 w-[90%] slide hidden">
        <div class="title text-start px-4">
            <h2>let's do: </h2>
            <ul>
                <li>4. Continue to add more materials until you are satisfied with the outcome of the shadow.</li>
                <li>5. Gather as a class. Take turns to do a "Show And Tell" on the puppet you have created.</li>
            </ul>
        </div>
        <p class="note">Note: Encourage children to share their puppet as they present the shadows during the 'Show and
            Tell. Teacher to guide children in expressing their thoughts with questions.</p>
    </div>

    {{-- slide 25 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">

        <h2 class="title">Look at the shadow of the house. The holes allow light to pass through them.</h2>
        <img src="{{ asset('assets/images/pptimages/house.png') }}"
            class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />

    </div>

    {{-- slide 26 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">

        <h2 class="title">Coloured shadows are formed when cellophane paper used.</h2>
        <img src="{{ asset('assets/images/pptimages/article.png') }}"
            class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />

    </div>

    {{-- slide 27 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">

        <h2 class="title"> <span class="text-white">Translucent</span> things, such as the cellophane paper, allow some
            light to pass through them.</h2>
        <img src="{{ asset('assets/images/pptimages/article.png') }}"
            class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />

    </div>

    {{-- slide 28 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">

        <h2 class="title"><span class="text-white">Translucent</span> things allow light to pass through them and they do
            not form any shadows.</h2>
        <img src="{{ asset('assets/images/pptimages/window.png') }}"
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
                    window.location.href = "{{ route('rainbowSelection') }}";
                });
            }

            //  Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
