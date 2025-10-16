@extends('layout.master')

@section('title stroke', 'Dynamic Presentation')

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
        <h2 class="title stroke">Do you remember what the black shap in the picture is?</h2>
        <div class="relative">
            <div class="absolute border border-4 border-red-600 w-[150px] h-[150px] rounded-[50%] right-[60px] top-[38%]">
            </div>
            <img src="{{ asset('assets/images/pptimages/shadow1.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        </div>

        <p class="note">Note: Encourage children to share and ask them what that black shape is.</p>
    </div>

    {{-- slide 1 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
            <h2 class="title stroke">The <span class=" text-white"> black</span> shape is the boy's <span class="text-white">
                    shadow </span>! <span class="text-white"> Shadows </span> are made when something <span
                    class="text-white"> blocks</span> the <span class="text-white"> light </span>.</h2>
            <img src="{{ asset('assets/images/pptimages/shadow1.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
    </div>

    {{-- slide 2 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
            <h2 class="title stroke">When you stand in the sun or in front of a <span class="text-white">light</span>, you <span
                    class="text-white">block</span> the <span class="text-white">shadow</span> will be formed.</h2>
            <img src="{{ asset('assets/images/pptimages/shadow3.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
    </div>

    {{-- slide 3 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
            <h2 class="title stroke">The shape of your shadow looks like you and it follows your movement and actions.</h2>
            <img src="{{ asset('assets/images/pptimages/shadow3.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
    </div>

    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
            <h2 class="title stroke">Look at this picture. Can you see the shadow? How is the shadow different?</h2>
            <img src="{{ asset('assets/images/pptimages/umbrella.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        <p class="note">Note: Teacher to encourage children to answer.</p>
    </div>

    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title stroke">The shadow is <span class="text-white"> red</span> in colour! What do you think it is not
                black in colour?</h2>
            <img src="{{ asset('assets/images/pptimages/umbrella.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        </div>
        <p class="note">Note: Teacher to encourage children to answer.</p>
    </div>

    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title stroke">This is because some light can pass through the canopy of the umbrella.</h2>
            <img src="{{ asset('assets/images/pptimages/umbrella.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        </div>
    </div>

    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title stroke">When some light pass through the red canopy, it forms a red shadow in the floor.</h2>
            <img src="{{ asset('assets/images/pptimages/umbrella.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        </div>
        <p class="note">Note: Teacher to point out to children which part of the umbrella is known as the canopy.</p>
    </div>

    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title stroke">The canopy of the umbrella is <span class="text-white">translucent.</span> This means some
                light is able to pass through it.</h2>
            <img src="{{ asset('assets/images/pptimages/umbrella.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        </div>
    </div>

    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title stroke">What do you see here? Do you see any shadows.</h2>
            <img src="{{ asset('assets/images/pptimages/window.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        </div>
        <p class="note">Note: Teacher to encourage children to share, get the children to point which part of the window
            formed the shadow.</p>
    </div>

    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title stroke">The metal frame formed the black shadows that look like '+'s.</h2>
            <div class="relative">
                <p class="absolute right-[-120px] text-[24px] text-white z-20 top-[20%] ">Shadows</p>
                <img class="absolute  h-[200px]  right-[-30px] top-[25%] rotate-[5deg]"
                    src="{{ asset('assets/images/pptimages/arrow.png') }}" />
                <img class="absolute  h-[200px]  right-0 top-[14%] rotate-[16deg]"
                    src="{{ asset('assets/images/pptimages/arrow.png') }}" />
                <img src="{{ asset('assets/images/pptimages/window.png') }}"
                    class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
            </div>
        </div>
        <p class="note">Note: Teacher to point out to the children.</p>
    </div>

    {{-- slide 11 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title stroke">What about the glass? Why are there no shadows formed?</h2>
            <img src="{{ asset('assets/images/pptimages/window.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        </div>
        <p class="note">Note: Teacher to encourage children to guess.</p>
    </div>

    {{-- slide 12 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title stroke">There are no shadows because light passes through the glass.</h2>
            <img src="{{ asset('assets/images/pptimages/window.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        </div>
        <p class="note">Note: Teacher can recap with children that shadows are form only when something blocks the light.
        </p>
    </div>

    {{-- slide 13 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title stroke">The glass is transparent. You can see through them and light can pass through them too.</h2>
            <img src="{{ asset('assets/images/pptimages/window.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        </div>
    </div>

    {{-- slide 14 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title stroke">Transparent things do not form any shadows.</h2>
            <img src="{{ asset('assets/images/pptimages/window.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        </div>
        <p class="note">Note: Teacher can give examples of things that are transparent e.g. spectacles, zip loc bags etc.
        </p>
    </div>

    {{-- slide 15 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title stroke text-white">CLASS ACTIVITY 1</h2>
            <img src="{{ asset('assets/images/pptimages/tools.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        </div>
        <h2 class="title stroke text-start">Let's find out: Can light pass through these items?</h2>
        <p class="note">Note: Teacher to give each group a flashlight and a set of materials.</p>
    </div>

    {{-- slide 16 --}}
    <div class="flex flex-col items-center justify-center space-y-20 w-[80%] slide hidden">
        <div class="title stroke text-start px-4">
            <h2>let's do: </h2>
            <ul class="list-decimal">
                <li>Choose an item and shine the flashlight on the item.</li>
                <li>Look at the shadow — is it black, coloured, or no shadow?</li>
                <li>Gather as a class and share findings.</li>
            </ul>
        </div>
        <p class="note">Note: Teacher to facilitate as children work on the activity, ask questions and point out to them
            if the items form shadows, coloured shadows or no shadows. Teacher can explain to children using simple words -
            light can/cannot pass through the items.</p>
    </div>

    {{-- slide 17 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title stroke">Look at the picture. What are they doing?</h2>
            <img src="{{ asset('assets/images/pptimages/girls.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        </div>
        <p class="note">Note: Teacher to encourage children to share answers.</p>
    </div>

    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title stroke">This is shadow puppetry. They are putting up a show using the shadows of the puppets.</h2>
            <img src="{{ asset('assets/images/pptimages/girls.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        </div>
    </div>

    {{-- slide 19 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title stroke">What shadows do you see?</h2>
            <img src="{{ asset('assets/images/pptimages/girls.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        </div>
        <p class="note w-[80%]">Note: Teacher to encourage children to share answers. Teacher can point out the shadows of
            the tree and bird.</p>
    </div>

    {{-- slide 20 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title stroke">When light shines on the puppets, shadows are formed. The shape of the shadows show what
                characters they are.</h2>
            <img src="{{ asset('assets/images/pptimages/girls.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        </div>
    </div>

    {{-- slide 21 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title stroke text-white">CLASS ACTIVITY 2</h2>
            <img src="{{ asset('assets/images/pptimages/act.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        </div>
        <h2 class="title stroke text-start">Let's try: Make puppets for shadow play.</h2>
        <p class="note">Note: Teacher to provide some templates for children to choose. E.g. House, shapes, animals.</p>
    </div>

    {{-- slide 22 --}}
    <div class="flex flex-col items-center justify-center space-y-20 w-[80%] slide hidden">
        <div class="title stroke text-start px-4">
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
        <div class="title stroke">
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
        <div class="title stroke text-start px-4">
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
        <div class="flex flex-col items-center justify-center">
            <h2 class="title stroke">Look at the shadow of the house. The holes allow light to pass through them.</h2>
            <img src="{{ asset('assets/images/pptimages/house.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        </div>
    </div>

    {{-- slide 26 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title stroke">Coloured shadows are formed when cellophane paper used.</h2>
            <img src="{{ asset('assets/images/pptimages/article.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        </div>
    </div>

    {{-- slide 27 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title stroke"> <span class="text-white">Translucent</span> things, such as the cellophane paper, allow
                some light to pass through them.</h2>
            <img src="{{ asset('assets/images/pptimages/article.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        </div>
    </div>

    {{-- slide 28 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title stroke"><span class="text-white">Translucent</span> things allow light to pass through them and
                they do not form any shadows.</h2>
            <img src="{{ asset('assets/images/pptimages/window.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        </div>
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
                    window.location.href = "{{ route('choosetypes') }}";
                });
            }

            //  Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
