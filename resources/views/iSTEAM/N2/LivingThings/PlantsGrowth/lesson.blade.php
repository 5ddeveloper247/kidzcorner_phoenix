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
        <img src="{{ asset('assets/images/N2/LivingThings/lt1.png') }}" class="w-[436px]" />
        <h2 class="stroke title">Children, what do you see in the picture?</h2>
    </div>


    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-10 ">

        <img src="{{ asset('assets/images/N2/LivingThings/lt1.png') }}" class="w-[436px]" />
        <h2 class="stroke title">This is grass.</h2>
    </div>


    {{-- Slide 3 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt2.png') }}" class="w-[436px]" />
        <h2 class="stroke title">Children, what do you see in the picture.</h2>
    </div>


    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt2.png') }}" />
        <h2 class="stroke title">This is an orange tree.</h2>
    </div>

    {{-- slide 5 --}}
    <div class="flex items-center flex-col slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt3.png') }}" />
        <h2 class="title stroke">Children, what do you see in the picture?</h2>


    </div>


    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt3.png') }}" />
        <h2 class="title stroke">These are flowers.</h2>
    </div>


    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center gap-20">
            <img src="{{ asset('assets/images/N2/LivingThings/lt1.png') }}" class="w-[300px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/lt2.png') }}" class="w-[300px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/lt3.png') }}" class="w-[300px]" />
        </div>
        <h2 class="stroke title"><span class="text-white">Grass</span>, <span class="text-white">trees</span> and <span
                class="text-white">flowers</span> are <span class="text-white">plants</span>.</h2>
    </div>

    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt4.png') }}" class="h-[400px]" />
        <h2 class="stroke title">Children, do you know how <span class="text-white">plants</span> grow?<br />Have you ever
            <span class="text-white">grown</span> a <span class="text-white">plant</span>? How does it change?
        </h2>
        <p class="note">Note: Encourage children to share their knowledge and experiences.</p>
    </div>

    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt5.png') }}" class="h-[400px]" />
        <h2 class="stroke title">Most <span class="text-white">plants</span> grow from <span
                class="text-white">seeds</span>.<br />For example: An orange <span class="text-white">tree</span> grows from
            an orange <span class="text-white">seed</span>.</h2>
    </div>


    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center justify-center flex-wrap ">
            <div class="w-[300px]">
                <img src="{{ asset('assets/images/N2/LivingThings/lt6.png') }}" />
                <p class="note">Melon</p>
            </div>
            <div class="w-[300px]">
                <img src="{{ asset('assets/images/N2/LivingThings/lt7.png') }}" />
                <p class="note">Strawberry</p>
            </div>
            <div class="w-[300px]">
                <img src="{{ asset('assets/images/N2/LivingThings/lt8.png') }}" />
                <p class="note">Dragonfruit</p>
            </div>
            <br>
            <div class="w-[300px]">
                <img src="{{ asset('assets/images/N2/LivingThings/lt27.png') }}" />
                <p class="note">Papaya</p>
            </div>
            <div class="w-[300px]">
                <img src="{{ asset('assets/images/N2/LivingThings/lt33.png') }}" />
                <p class="note">Avocado</p>
            </div>
        </div>
        <h2 class="stroke title">We can find <span class="text-white">seeds</span> in fruits.</h2>
    </div>


    {{-- slide 11 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center justify-center flex-wrap ">
            <div class="w-[300px]">
                <img src="{{ asset('assets/images/N2/LivingThings/lt6.png') }}" />
                <p class="note">Melon</p>
            </div>
            <div class="w-[300px]">
                <img src="{{ asset('assets/images/N2/LivingThings/lt7.png') }}" />
                <p class="note">Strawberry</p>
            </div>
            <div class="w-[300px]">
                <img src="{{ asset('assets/images/N2/LivingThings/lt8.png') }}" />
                <p class="note">Dragonfruit</p>
            </div>
            <br>
            <div class="w-[300px]">
                <img src="{{ asset('assets/images/N2/LivingThings/lt27.png') }}" />
                <p class="note">Papaya</p>
            </div>
            <div class="w-[300px]">
                <img src="{{ asset('assets/images/N2/LivingThings/lt33.png') }}" />
                <p class="note">Avocado</p>
            </div>
        </div>
        <h2 class="stroke title">Some fruits have many <span class="text-white">seeds</span>, some just have 1.</h2>
    </div>

    {{-- slide 12 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center justify-center flex-wrap ">
            <div class="w-[300px]">
                <img src="{{ asset('assets/images/N2/LivingThings/lt43.png') }}" />
                <p class="note">Mung Beans</p>
            </div>
            <div class="w-[300px]">
                <img src="{{ asset('assets/images/N2/LivingThings/lt44.png') }}" />
                <p class="note">Kidney Beans</p>
            </div>
            <div class="w-[300px]">
                <img src="{{ asset('assets/images/N2/LivingThings/lt9.png') }}" />
                <p class="note">Cranberry Beans</p>
            </div>

            <div class="w-[300px]">
                <img src="{{ asset('assets/images/N2/LivingThings/lt10.png') }}" />
                <p class="note">Peanuts</p>
            </div>
            <div class="w-[300px]">
                <img src="{{ asset('assets/images/N2/LivingThings/lt45.png') }}" />
                <p class="note">Walnuts</p>
            </div>
        </div>
        <h2 class="stroke title"><span class="text-white">Beans</span> and <span class="text-white">nuts</span> are <span
                class="text-white">seeds</span> too.</h2>
    </div>



    {{-- slide 13 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt11.png') }}" />
        <h2 class="stroke title">This is a kind of red <span class="text-white">bean</span>.</h2>
    </div>

    {{-- slide 14 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt12.png') }}" />
        <h2 class="stroke title">The <span class="text-white">bean</span> grows into a <span
                class="text-white">sprout</span> after being planted in soil.</h2>
    </div>

    {{-- slide 15 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt13.png') }}" />
        <h2 class="stroke title">As the <span class="text-white">sprout</span> grows, it becomes a young plant.<br />A
            young <span class="text-white">plant</span> is called <span class="text-white">seedling</span>.</h2>
    </div>

    {{-- slide 16 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt14.png') }}" />
        <h2 class="stroke title">The <span class="text-white">seedling</span> grows into a <span
                class="text-white">plant</span>.</h2>
    </div>

    {{-- slide 17 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-end ">
            <div class="w-[200px]">
                <img src="{{ asset('assets/images/N2/LivingThings/lt11.png') }}" />
                <p class="note">Seed</p>
            </div>
            <div class="w-[250px]">
                <img src="{{ asset('assets/images/N2/LivingThings/lt12.png') }}" />
                <p class="note">Sprout</p>
            </div>
            <div class="w-[300px]">
                <img src="{{ asset('assets/images/N2/LivingThings/lt13.png') }}" />
                <p class="note">Seedling</p>
            </div>
            <div class="w-[400px]">
                <img src="{{ asset('assets/images/N2/LivingThings/lt14.png') }}" />
                <p class="note">Plant</p>
            </div>
        </div>
        <h2 class="stroke title">The seed grows and gets bigger in size. Its look changes it grows.</h2>
        <p class="note">Note: The plants may look different depending on the type of seeds planted.</p>
    </div>


    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="stroke title">Today, we are going to learn how to<br /><span class="text-white">grow</span> a <span
                class="text-white">plant</span> from a <span class="text-white">seed</span>!</h2>
    </div>



    {{-- slide 19 --}}
    <div class="flex flex-col items-center justify-center slide hidden">

        <img src="{{ asset('assets/images/N2/LivingThings/lt15.png') }}" />

        <h2 class="title stroke text-start">Let’s find out: <br>
            How do you grow a plant from a seed?</h2>
        <p class="note">Note: Display all the things needed and have children gather around the work area.</p>

    </div>


    {{-- slide 17 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title !text-white stroke">Class Activity</h2>
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>1. Prepare an empty pot.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/lt16.png') }}" />
    </div>

    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center slide hidden">

        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>2. Fill one third of the pot with potting soil.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/lt17.png') }}" />
    </div>


    {{-- slide 19 --}}
    <div class="flex flex-col items-center justify-center slide hidden">

        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>3. Water the soil such that water seeps out from the
                    bottom of the pot. Ensure that the soil is damp.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/lt18.png') }}" />
    </div>



    {{-- slide 20 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>4. Take a seed which had been soaked overnight and
                    push it into the center of the pot into the soil.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/lt19.png') }}" />
    </div>

    {{-- slide 21 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>5. Cover the seed with soil. Water it when the soil is dry and
                    wait for it to grow! Place it outdoors or near a window.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/lt20.png') }}" />
    </div>


    {{-- slide 22 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>6. Observe the seed each day and take a photo of the plant
                    when you spot changes.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/lt21.png') }}" />
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
            <div class="absolute left-[8.22px] top-[3.17px] "> <img src="/assets/images/pptimages/Vector4.png" />
            </div>
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
                    window.location.href = "{{ route('PlantsGrowthSelection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
