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
    <div class="flex flex-col items-center justify-center  slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs10.png') }}" alt="">
        <h2 class="stroke title">Children, do you remember why machines like these can work?<h2>
                <p class="note">Note: Have children recall and share what they have learnt.</p>
    </div>


    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs10.png') }}" />
        <h2 class="stroke title">Machines can work because they have programmes inside them.</h2>
        <p class="note">Note: Have children recall and share what a programme is.</p>
    </div>


    {{-- Slide 3 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs10.png') }}" />
        <h2 class="stroke title">Machines can work because they have programmes inside them.</h2>
        <p class="note">Note: Have children recall and share what a programme is.</p>
    </div>

    {{-- sldie 4 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs13.png') }}" />
        <h2 class="stroke title">The steps to do things is like a programme for machines.</h2>
    </div>


    {{-- sldie 5 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs11.png') }}" />
        <h2 class="title stroke text-center">So a <span class="text-white">programme</span> is the step-by-step
            <span class="text-white">instructions</span>that tell the <span class="text-white">machine</span> what to do.
        </h2>
    </div>

    {{-- sldie 6 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">Now, let’s find out a new toy that you will use
            to learn programming today!</h2>
    </div>


    {{-- slide 7 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/br1.png') }}" />
        <h2 class="title stroke text-center"> This is a <span class="text-white">robot</span>.
            A <span class="text-white">robot</span> is a <span class="text-white">machine</span>.</h2>
        <p class="note">Note: Display a robot. Guide children to talk about it’s physical look.</p>
    </div>

    {{-- slide 8 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/br2.png') }}" />
        <h2 class="title stroke text-center"> This <span class="text-white">robot</span>
            can be programmed using its<span class="text-white"> pen controller</span>.</h2>
        <p class="note">Note: Display a pen controller. Guide children to count how many buttons are there on the pen.</p>
    </div>


    {{-- slide 9 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/br1.png') }}" />
        <h2 class="title stroke text-center">This is the way to turn the robot on or off.</h2>
        <p class="note">Note: Demonstrate and then guide children to describe how to do so.</p>
    </div>


    {{-- sldie 10 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/br2.png') }}" />
        <h2 class="title stroke text-center">This is the way to turn the pen controller on or off.</h2>
        <p class="note">Note: Demonstrate and then guide children to describe how to do so.</p>
    </div>


    {{-- sldie 11 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/br3.png') }}" />
        <h2 class="title stroke text-center">These are facial expression <span class="text-white">programming
            </span> <span class="text-white">cards</span>.
            Each card tells the <span class="text-white">robot</span> what facial expression to show.
            What feeling does each card show?</h2>
    </div>


    {{-- slide 12 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/br4.png') }}" />
        <h2 class="title stroke text-center">This is how to use a pen controller to programme a robot
            to show a facial expression.</h2>
        <p class="note">Note: Demonstrate and then guide children to describe how to do so (use the pen to tap on a card).
        </p>
    </div>


    {{-- sldie 13 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="!text-white title stroke">Hands-on Time 1</h2>
        <div class="text-start">
            <h2 class="title stroke">Mission: <br>
                Let's use a pen controller to programme a robot to show a
                facial expression. Can you do the same facial expression? Show your friends.</h2>
        </div>
        <p class="note">Note: Divide children into groups. Have them work together to complete the mission.</p>
    </div>


    {{-- slide 14 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ul class="list-decimal title stroke">
                <li> Use the pen controller to tap on a facial expression
                    programming card and see what happens to the robot.</li>
                <li>How to do the same facial expression? Show your friends.</li>
            </ul>
        </div>
        <p class="note">Note: Have each group children take turns to programme the robot to show an expression.
            Then have them imitate the expression and show in groups.</p>
    </div>


    {{-- sldie 15 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/br18.png') }}" />
        <h2 class="title stroke text-center">If you want the robot to show different facial expressions
            in an order, this is the way to programme.</h2>
        <p class="note">Note: Demonstrate and then guide children to describe how to do so.</p>
    </div>


    {{-- sldie 16 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/br6.png') }}" />
        <h2 class="title stroke text-center">You use this card to record a programme,
            so you may call it a record card.</h2>
    </div>


    {{-- sldie 17 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/br7.png') }}" />
        <h2 class="title stroke text-center">You use this card to play a programme recorded,
            so you may call it a play card.</h2>
    </div>


    {{-- sldie 18 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="!text-white title stroke">Hands-on Time 2</h2>
        <div class="text-start">
            <h2 class="title stroke">Mission: <br>
                Let's create a programme to tell a robot to show different
                facial expressions in an order. Can you create a programme that is different from your friends? Try it!</h2>
        </div>
        <p class="note">Note: Have each group children take turns to create a programme and show in groups.
            Guide them to record the programmes created in a group learning journal.</p>
    </div>


    {{-- slide 19 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">Learning Journal</h2>
        <div class="w-[836px] h-[536px] bg-cover bg-center flex flex-col items-start justify-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">

            <div class="text-start">
                <p>Group Name:</p>
                <p>Programmes created to tell a robot to show different facial expressions:</p>
            </div>
            <img src="{{ asset('assets/images/N2/BasicCoding/br8.png') }}" />
        </div>
    </div>





    {{-- =================================================================== --}}
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
                    window.location.href = "{{ route('Robot1Selection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
