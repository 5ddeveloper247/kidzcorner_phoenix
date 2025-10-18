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
        <h2 class="stroke title">Children, have your seeds grown?
            How did it grow?</h2>
    </div>


    {{-- Slide 2 --}}
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
        <h2 class="stroke title">The seed would have grown and gotten bigger in size.
            Its look would have changed as it grew.</h2>
        <p class="note">Note: The plants may look different depending on the type of seeds planted.</p>
    </div>

    {{-- Slide 3 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt22.png') }}" />
        <h2 class="stroke title">This is an Adzuki <span class="text-white">plant</span>.<br />It is a plant grown from a
            <span class="text-white">bean</span>.
        </h2>
    </div>


    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt22.png') }}" />
        <h2 class="stroke title">Let’s take a closer look at the <span class="text-white">plant</span> and<br />learn about
            the different parts of the <span class="text-white">plant</span>.</h2>
    </div>

    {{-- slide 5 --}}
    <div class="flex items-center flex-col slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt32p.png') }}" />
        <h2 class="title stroke">What is this? What does it do?</h2>
        <p class="note">Note: Encourage children to describe what they see and guess what does the leaves do.</p>
    </div>


    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt32p.png') }}" />
        <h2 class="stroke title">This is a<span class="text-white"> leaf</span>. The <span class="text-white">leaf</span>
            makes food for the<span class="text-white"> plant</span>.</h2>
    </div>


    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt23.png') }}" class="w-[300px]" />
        <h2 class="stroke title">The<span class="text-white"> leaves</span> use water, nutrients from the soil,<br />air and
            sunlight to make food.</h2>
    </div>

    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt33p.png') }}" class="h-[400px]" />
        <h2 class="stroke title">What is this? What does it do?</h2>
        <p class="note">Note: Encourage children to describe what they see and guess what the stem does.</p>
    </div>

    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt33p.png') }}" class="h-[400px]" />
        <h2 class="stroke title">This is a stem.</h2>
    </div>


    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center justify-center flex-wrap ">
            <div class="w-[400px]">
                <img src="{{ asset('assets/images/N2/LivingThings/lt24.png') }}" />
            </div>
            <div class="w-[400px]">
                <img src="{{ asset('assets/images/N2/LivingThings/lt31.png') }}" />
            </div>
        </div>
        <h2 class="stroke title">The<span class="text-white"> stem</span> helps the plant to grow tall. When the
            plant<br />is tall, its <span class="text-white">leaves</span> can get enough sunlight to make food.</h2>
    </div>


    {{-- slide 11 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt25.png') }}" />
        <h2 class="stroke title">The<span class="text-white"> stem</span> also helps to <span class="text-white">carry
            </span>water to the<br /><span class="text-white">leaves</span> and <span class="text-white">flower</span>.</h2>
    </div>


    {{-- slide 12 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt34p.png') }}" />
        <h2 class="stroke title">What is this? What does it do?</h2>
        <p class="note">Note: Encourage children to describe what they see and guess what does roots do.</p>
    </div>



    {{-- slide 13 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt34p.png') }}" />
        <h2 class="stroke title">These are the roots of the plant.</h2>
    </div>

    {{-- slide 14 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt34p.png') }}" />
        <h2 class="stroke title">The <span class="text-white">roots</span> take in water and nutrients from the soil
            and<br />carry them to the <span class="text-white">stem</span> and <span class="text-white">leaves</span>.</h2>
    </div>

    {{-- slide 15 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
            <img src="{{ asset('assets/images/N2/LivingThings/lt35p.png') }}" />
        <h2 class="stroke title">Children, do you know what these are?</h2>
    </div>

    {{-- slide 16 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center justify-center">
            <img src="{{ asset('assets/images/N2/LivingThings/lt26.png') }}" class="w-[250px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/lt46.png') }}" class="w-[250px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/lt47.png') }}" class="w-[250px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/lt48.png') }}" class="w-[250px]" />
        </div>
        <h2 class="stroke title">These are plants with <span class="text-white">flowers</span>.<br />Plants will need time
            to grow before they have <span class="text-white">flowers</span>.</h2>
    </div>

    {{-- slide 17 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt49.png') }}" />
        <h2 class="stroke title">This is an adzuki plant with <span class="text-white">flowers</span>.<br />The <span
                class="text-white">flowers</span> may grow only after 60-70 days</h2>
    </div>


    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt50.png') }}" />
        <h2 class="stroke title">This is an adzuki plant with <span class="text-white">pods</span>.<br /><span
                class="text-white">Pods</span> are the <span class="text-white">fruits</span> from the adzuki plant.</h2>
    </div>


    {{-- slide 19 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt51.png') }}" />
        <h2 class="stroke title">When you peel the <span class="text-white">pods</span> open, you will find red beans in
            them.<br />The red beans are the <span class="text-white">seeds</span>.</h2>
    </div>


    {{-- slide 17 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title !text-white stroke">Individual Activity</h2>
       <div class="w-[536px] h-[450px] bg-cover bg-center flex flex-col items-center" style="background-image: url('{{ asset('assets/images/N2/LivingThings/lt54.png') }}');">   
       <p>Record the changes you see in your flower (draw and paste photos).</p>
       <img src="{{ asset('assets/images/N2/LivingThings/lt52.png') }}" />
       </div>
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>Can you name the parts of a plant? Match and paste the
                    names to the parts of the plant.</li>
            </ul>
        </div>
        <p class="note">Note: Provide labels for children to complete the learning journal.</p>
    </div>

    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt53.png') }}" />
        <h2 class="title stroke">How do you name each part of the plant?</h2>
      <p class="note">Note: Encourage children to point and name the different parts of the plant.</p>
    </div>


    {{-- slide 19 --}}
  <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt36p.png') }}" />
        <h2 class="title stroke">These are the parts of the plant.</h2>
    </div>


    {{-- slide 20 --}}
   <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title !text-white stroke">Learning Journal</h2>
        <div class="w-[536px] h-[450px] bg-cover bg-center flex flex-col items-center" style="background-image: url('{{ asset('assets/images/N2/LivingThings/lt54.png') }}');">   
       <p>Record the changes you see in your flower (draw and paste photos).</p>
       <img src="{{ asset('assets/images/N2/LivingThings/lt52.png') }}" />
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
                    window.location.href = "{{ route('PartsOfPlantsSelection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
