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
        <h2 class="stroke title">Children, do you remember what the <span class="text-white">stem</span> does?</h2>
        <p class="note">Note: Encourage children to share that they had learned.</p>
    </div>


    {{-- Slide 2 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center">

            <img src="{{ asset('assets/images/N2/LivingThings/lt24.png') }}" class="h-[400px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/lt31.png') }}" class="h-[400px]" />

        </div>
        <h2 class="stroke title">That’s right! The <span class="text-white">stem</span> helps the <span
                class="text-white">plant</span> to grow tall. When<br />the <span class="text-white">plant</span> is tall,
            its <span class="text-white">leaves</span> can get enough sunlight to make food.</h2>
    </div>


    {{-- Slide 3 --}}
    <div class="flex flex-col items-center justify-center slide hidden">

        <img src="{{ asset('assets/images/N2/LivingThings/lt25.png') }}" class="h-[200px]" />

      <h2 class="stroke title">The<span class="text-white"> stem</span> also helps to <span class="text-white">carry </span>water to the<br/><span class="text-white">leaves</span> and <span class="text-white">flower</span>.</h2>

    </div>


    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
      <h2 class="stroke title">Let’s observe how <span class="text-white">flowers</span> drink water.</h2>
<p class="note">Note: Divide children into small groups for the activity.</p>
    </div>

    {{-- slide 5 --}}
      <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>1. Take a stalk of flower from a bouquet.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/lt34.png') }}" />
        <p class="note">Note: Assist the children in cutting the flowers.</p>
    </div>


    {{-- slide 6 --}}
         <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>2. Take a stalk of flower from a bouquet.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/lt35.png') }}" />
        </div>


    {{-- slide 7 --}}
           <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>3. Choose a colour. In your cup, add 10 drops of the colouring into half a cup of water.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/lt36.png') }}" />
    </div>



    {{-- slide 8 --}}
          <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>4. Put one stalk of flower into your cup.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/lt37.png') }}" />
    </div>



    {{-- slide 9 --}}
        <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>5. Observe for any changes and record your observation
     in the learning journal.</li>
            </ul>
        </div>
     <div class="w-[736px] h-[336px] bg-cover bg-center" style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">   
       <p>Record the changes you see in your flower (draw and paste photos).</p>
       </div>
    </div>


    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt38.png') }}" />
     <h2 class="stroke title">As the <span class="text-white">stem </span>carried coloured water to the <span class="text-white">leaves</span> and<br/><span class="text-white">flowers</span>, the white flower <span class="text-white">petals</span> now have same <br/>colours on them.</h2>
    </div>



    {{-- slide 11 --}}
     <div class="flex flex-col  slide hidden">
      <h2 class="title !text-white stroke">Learning Journal</h2>
        <div class="w-[736px] h-[336px] bg-cover bg-center" style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">   
       <p>Record the changes you see in your flower (draw and paste photos).</p>
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
                    window.location.href = "{{ route('DrinkingSelection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
