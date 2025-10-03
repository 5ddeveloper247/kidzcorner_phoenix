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
        <img src="{{ asset('assets/images/N2/BasicCoding/sb1.png') }}" alt="">
        <h2 class="stroke title">Children, what are these? Do you like them?
            How do you turn them on or off?</h2>
        <p class="note">Note: Have children recall and share what they have learnt.</p>
    </div>


    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/rb1.png') }}" />
        <h2 class="stroke title">Children, what are these? What do you use them for?</h2>
        <p class="note">Note: Guide children to name the cards and talk about their uses.</p>
    </div>


    {{-- Slide 3 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/rb2.png') }}" />
        <h2 class="stroke title text-5xl font-normal font-['Jua'] text-center">
            You can create a <span class="text-white">programme</span> by arranging the
            <span class="text-white">programming</span> <span class="text-white">cards</span> in an order.
        </h2>
    </div>

    {{-- sldie 4 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/rb3.png') }}" />
        <h2 class="stroke title text-center">Then you use a <span class="text-white">pen controller</span> to tap on
            the different cards to record the <span class="text-white">programme</span>.
        </h2>
    </div>


    {{-- sldie 5 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/rb3.png') }}" />
        <h2 class="stroke title text-center">When you use the <span class="text-white">pen controller</span> to tap on the
            <span class="text-white">play card</span>, the <span class="text-white">robot</span> will run the recorded
            <span class="text-white">programme</span>.
        </h2>
    </div>

    {{-- sldie 6 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/rb2.png') }}" />
        <h2 class="title stroke text-center">This programme tells the robot to move through
            the maze and show a facial expression in the end.</h2>
    </div>


    {{-- slide 7 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <div class="flex items-center justify-center gap-x-10">
            <img src="{{ asset('assets/images/N2/BasicCoding/rb4.png') }}" />
            <img src="{{ asset('assets/images/N2/BasicCoding/rb5.png') }}" />
        </div>
        <h2 class="title stroke text-center">These are mats are designed with pictures for a reason.
            Let’s find out!</h2>
    </div>

    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="!text-white title stroke">Hands-on Time </h2>
        <div class="text-start">
            <h2 class="title stroke">Mission: <br>
                Let's lay out the sample maze and play a game. Use the
                programming cards to think and plan how to help a robot move
                from the starting point to the end point. After that, use the
                pen controller to record and play the programme to see how
                the robot moves according to the programme created. A surprise awaits you at the end!</h2>
        </div>
        <p class="note">Note: Divide children into groups. Have them work together to complete the mission.</p>
    </div>
    {{-- ==== --}}
    {{-- slide 9 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">Help the robot move from the mat with its picture
            to the mat with a <span class="text-white">fish</span>.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/rb6.png') }}" />
        <p class="note">Note: Have children lay out the maze, use programming cards to plan the steps,
            record and play the programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>

    </div>


    {{-- sldie 10 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">Help the robot move from the mat with its picture
            to the mat with a <span class="text-white">piece of meat</span>.</h2>

        <img src="{{ asset('assets/images/N2/BasicCoding/rb6.png') }}" />

        <p class="note text-center">Note: Have children lay out the maze, use programming cards to plan the steps,
            record and play the programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>
    </div>


    {{-- sldie 11 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">Help the robot move from the mat with its picture
            to the mat with a <span class="text-white">corn</span>.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/rb6.png') }}" />
        <p class="note text-center">Note: Have children lay out the maze, use programming cards to plan the steps,
            record and play the programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>
    </div>


    {{-- slide 12 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">Help the robot move from the mat with its picture
            to the mat with a <span class="text-white">bamboos</span>.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/rb6.png') }}" />
        <p class="note">Note: Duplicate he set-up in class. Encourage children to name the things used in this set-up.</p>
    </div>


    {{-- ===== --}}
    {{-- slide 9 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">Help the robot move from the mat with its picture
            to the mat with a <span class="text-white">fish</span>.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/rb7.png') }}" />
        <p class="note">Note: Have children lay out the maze, use programming cards to plan the steps,
            record and play the programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>

    </div>


    {{-- sldie 10 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">Help the robot move from the mat with its picture
            to the mat with a <span class="text-white">piece of meat</span>.</h2>

        <img src="{{ asset('assets/images/N2/BasicCoding/rb7.png') }}" />

        <p class="note text-center">Note: Have children lay out the maze, use programming cards to plan the steps,
            record and play the programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>
    </div>


    {{-- sldie 11 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">Help the robot move from the mat with its picture
            to the mat with a <span class="text-white">corn</span>.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/rb7.png') }}" />
        <p class="note text-center">Note: Have children lay out the maze, use programming cards to plan the steps,
            record and play the programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>
    </div>


    {{-- slide 12 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">Help the robot move from the mat with its picture
            to the mat with a <span class="text-white">bamboos</span>.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/rb7.png') }}" />
        <p class="note">Note: Duplicate he set-up in class. Encourage children to name the things used in this set-up.</p>
    </div>

    {{-- ======== --}}
    {{-- slide 9 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">Help the robot move from the mat with its picture
            to the mat with a <span class="text-white">fish</span>.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/rb8.png') }}" />
        <p class="note">Note: Have children lay out the maze, use programming cards to plan the steps,
            record and play the programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>

    </div>


    {{-- sldie 10 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">Help the robot move from the mat with its picture
            to the mat with a <span class="text-white">piece of meat</span>.</h2>

        <img src="{{ asset('assets/images/N2/BasicCoding/rb8.png') }}" />

        <p class="note text-center">Note: Have children lay out the maze, use programming cards to plan the steps,
            record and play the programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>
    </div>


    {{-- sldie 11 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">Help the robot move from the mat with its picture
            to the mat with a <span class="text-white">corn</span>.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/rb8.png') }}" />
        <p class="note text-center">Note: Have children lay out the maze, use programming cards to plan the steps,
            record and play the programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>
    </div>


    {{-- slide 12 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">Help the robot move from the mat with its picture
            to the mat with a <span class="text-white">bamboos</span>.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/rb8.png') }}" />
        <p class="note">Note: Duplicate he set-up in class. Encourage children to name the things used in this set-up.
        </p>
    </div>

    {{-- ======== --}}
    {{-- slide 9 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">Help the robot move from the mat with its picture
            to the mat with a <span class="text-white">fish</span>.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/rb9.png') }}" />
        <p class="note">Note: Have children lay out the maze, use programming cards to plan the steps,
            record and play the programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>

    </div>


    {{-- sldie 10 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">Help the robot move from the mat with its picture
            to the mat with a <span class="text-white">piece of meat</span>.</h2>

        <img src="{{ asset('assets/images/N2/BasicCoding/rb9.png') }}" />

        <p class="note text-center">Note: Have children lay out the maze, use programming cards to plan the steps,
            record and play the programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>
    </div>


    {{-- sldie 11 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">Help the robot move from the mat with its picture
            to the mat with a <span class="text-white">corn</span>.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/rb9.png') }}" />
        <p class="note text-center">Note: Have children lay out the maze, use programming cards to plan the steps,
            record and play the programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>
    </div>


    {{-- slide 12 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">Help the robot move from the mat with its picture
            to the mat with a <span class="text-white">bamboos</span>.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/rb9.png') }}" />
        <p class="note">Note: Duplicate he set-up in class. Encourage children to name the things used in this set-up.
        </p>
    </div>

    {{-- ============ --}}
    {{-- slide 13 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <div class="flex items-center justify-center gap-x-10">
            <img src="{{ asset('assets/images/N2/BasicCoding/rb4.png') }}" />
            <img src="{{ asset('assets/images/N2/BasicCoding/rb5.png') }}" />
        </div>
        <h2 class="title stroke text-center">What are the uses of these mats?
            Let’s discuss and share!</h2>
    </div>

    {{-- slide 14 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <div class="flex items-center gap-x-10">
            <div class="flex flex-col items-center justify-center gap-y-10">
                <img src="{{ asset('assets/images/N2/BasicCoding/rb6.png') }}" class="w-[400px]" />
                <img src="{{ asset('assets/images/N2/BasicCoding/rb8.png') }}" class="w-[400px]" />
            </div>
            <div class="flex flex-col items-center justify-center gap-y-10">
                <img src="{{ asset('assets/images/N2/BasicCoding/rb7.png') }}" class="w-[400px]" />
                <img src="{{ asset('assets/images/N2/BasicCoding/rb9.png') }}" class="w-[400px]" />
            </div>
        </div>
        <h2 class="title stroke text-center">These mats are the starting points of the robot in different mazes.</h2>
    </div>


    {{-- sldie 15 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/rb4.png') }}" />
        <h2 class="title stroke text-center">These mats are in special shapes.</h2>
        <p class="note">Note: Display the mats. Guide children to compare their shapes with other mats.</p>
    </div>

    {{-- slide 16 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/rb10.png') }}" />
        <h2 class="stroke title text-center">When you place a <span class="text-white">robot</span> on one of the
            character
            <span class="text-white">mats</span>,
            the <span class="text-white">robot</span> turns into an animal character as shown.
        </h2>
        <p class="note">Note: Display the mats. Guide children to compare their shapes with other mats.</p>
    </div>

    {{-- slide 17 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/rb5.png') }}" />
        <h2 class="stroke title text-center">These mats have pictures of different food.
            Can you name the food?</h2>
    </div>


    {{-- slide 18 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <div class="flex items-center gap-x-10">
            <div class="flex flex-col items-center justify-center gap-y-10">
                <img src="{{ asset('assets/images/N2/BasicCoding/rb6.png') }}" class="w-[400px]" />
                <img src="{{ asset('assets/images/N2/BasicCoding/rb8.png') }}" class="w-[400px]" />
            </div>
            <div class="flex flex-col items-center justify-center gap-y-10">
                <img src="{{ asset('assets/images/N2/BasicCoding/rb7.png') }}" class="w-[400px]" />
                <img src="{{ asset('assets/images/N2/BasicCoding/rb9.png') }}" class="w-[400px]" />
            </div>
        </div>
        <h2 class="stroke title text-center">When you <span class="text-white">programme</span> a <span
                class="text-white">robot</span> to move to these picture
            <span class="text-white">mats</span>, the <span class="text-white">robot</span> shows reactions of the
            character.
        </h2>
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
                    window.location.href = "{{ route('Robot3Selection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
