@extends('layout.master')
@section('title', 'Dynamic Presentation')

 

@section('content')


    {{-- Slide 1 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/sb1.png') }}" alt="">
        <h2 class="stroke title">Children, what are these? Do you like them?<h2>
                <p class="note">Note: Encourage children to share their views.</p>
    </div>


    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/sb1.png') }}" />
        <h2 class="stroke title">How do you turn them on or off?</h2>
        <p class="note">Note: Have children recall and say how to do so.</p>
    </div>


    {{-- Slide 3 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/br1.png') }}" />
        <h2 class="stroke title">This is the way to turn the robot on ot off.</h2>
    </div>

    {{-- sldie 4 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/br3.png') }}" />
        <h2 class="stroke title">This is the way to turn the pen controller on ot off.</h2>
    </div>


    {{-- sldie 5 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/sb2.png') }}" />
        <h2 class="title stroke text-center">What about these? What do you use them for?</h2>
        <p class="note">Note: Guide children to name the cards and talk about their uses.</p>
    </div>

    {{-- sldie 6 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/br18.png') }}" />
        <h2 class="title stroke text-center">You can create a programme by arranging the facial
            expression programming cards in a row.</h2>
    </div>


    {{-- slide 7 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/sb3.png') }}" />
        <h2 class="title stroke text-center"> Then you use a <span class="text-white">pen</span> <span
                class="text-white">controller</span> to tap on the different cards<br />
            to record the <span class="text-white">programme</span>.</h2>
    </div>

    {{-- slide 8 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/sb3.png') }}" />
        <h2 class="title stroke text-center">When you use the <span class="text-white">pen controller</span> to tap on the
            <span class="text-white">play card</span>,
            the <span class="text-white">robot</span> will run the recorded <span class="text-white">programme</span>.
        </h2>
    </div>


    {{-- slide 9 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/br18.png') }}" />
        <h2 class="title stroke text-center">This <span class="text-white">programme</span> tells the <span
                class="text-white">robot</span> to show different facial
            expressions based on the order of the <span class="text-white">programming cards</span>.</h2>
    </div>


    {{-- sldie 10 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/sb4.png') }}" />
        <h2 class="title stroke text-center">These are directional <span class="text-white">programming cards</span>.<br />
            What do you think you can use them for?</h2>
        <p class="note">Note: Display the cards and have children share their views.</p>
    </div>


    {{-- sldie 11 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/sb5.png') }}" />
        <h2 class="title stroke text-center">You can arrange these cards in a row
            to create a programme that tells the robot how to move.</h2>
        <p class="note">Note: Duplicate he set-up in class. Encourage children to name the things used in this set-up.</p>
    </div>


    {{-- slide 12 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/sb5.png') }}" />
        <h2 class="title stroke text-center">Let’s use the <span class="text-white">pen controller</span> to record and play
            the <span class="text-white">programme</span> to see how the <span class="text-white">robot</span> move. </h2>
        <p class="note">Note: Duplicate he set-up in class. Encourage children to name the things used in this set-up.</p>
    </div>


    {{-- slide 13 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/sb6.png') }}" />
        <h2 class="title stroke text-center"> Now, let’s use these directional <span class="text-white">programming
                cards</span><br />
            to design a <span class="text-white">programme</span> to tell a <span class="text-white">robot</span><br />
            how to move from a starting point to an end point!
        </h2>

    </div>


    {{-- sldie 13 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="!text-white title stroke">Hands-on Time 1</h2>
        <div class="text-start">
            <h2 class="title stroke">Mission: <br>
                Let's lay out the sample maze. Use the programming cards to
                think and plan how to tell a robot to move from the starting
                point to the end point. After that, use the pen controller to
                record and play the programme to see how the robot move
                according to the programme created.</h2>
        </div>
        <p class="note">Note: Divide children into groups. Have them work together to complete the mission.</p>
    </div>


    {{-- slide 14 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="!text-white title stroke">Hands-on Time 1</h2>
        <div class="flex items-center justify-center gap-x-10">
            <img src="{{ asset('assets/images/N2/BasicCoding/sb8.png') }}" />
            <div class="flex gap-0">
                <p class="rotate-[90deg] max-w-fit">Graphic Guide (Start View)</p>
                <img src="{{ asset('assets/images/N2/BasicCoding/sb9.png') }}" />
            </div>
        </div>
        <p class="note">Note: Have children layout the maze, use programming cards to plan the steps, record and play
            the programme to see how the robot move from the starting point to the end point.</p>
    </div>

    {{-- sldie 15 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center justify-center gap-x-10">
            <img src="{{ asset('assets/images/N2/BasicCoding/sb10.png') }}" />
            <div class="flex gap-0">
                <img src="{{ asset('assets/images/N2/BasicCoding/sb11.png') }}" />
            </div>
        </div>
        <p class="note">Note: Have children layout the maze, use programming cards to plan the steps, record and play
            the programme to see how the robot move from the starting point to the end point.</p>
    </div>


    {{-- sldie 16 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center justify-center gap-x-10">
            <img src="{{ asset('assets/images/N2/BasicCoding/sb12.png') }}" />
            <div class="flex gap-0">
                <img src="{{ asset('assets/images/N2/BasicCoding/sb13.png') }}" />
            </div>
        </div>
        <p class="note">Note: Have children layout the maze, use programming cards to plan the steps, record and play
            the programme to see how the robot move from the starting point to the end point.</p>
    </div>


    {{-- sldie 17 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center justify-center gap-x-10">
            <img src="{{ asset('assets/images/N2/BasicCoding/sb14.png') }}" />
            <div class="flex gap-0">
                <img src="{{ asset('assets/images/N2/BasicCoding/sb15.png') }}" />
            </div>
        </div>
        <p class="note">Note: Have children layout the maze, use programming cards to plan the steps, record and play
            the programme to see how the robot move from the starting point to the end point.</p>
    </div>


    {{-- sldie 18 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center justify-center gap-x-10">
            <img src="{{ asset('assets/images/N2/BasicCoding/sb16.png') }}" />
            <div class="flex gap-0">
                <img src="{{ asset('assets/images/N2/BasicCoding/sb17.png') }}" />
            </div>
        </div>
        <p class="note">Note: Have children layout the maze, use programming cards to plan the steps, record and play
            the programme to see how the robot move from the starting point to the end point.</p>
    </div>


    {{-- sldie 19 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center justify-center gap-x-10">
            <img src="{{ asset('assets/images/N2/BasicCoding/sb18.png') }}" />
            <div class="flex gap-0">
                <img src="{{ asset('assets/images/N2/BasicCoding/sb19.png') }}" />
            </div>
        </div>
        <p class="note">Note: Have children layout the maze, use programming cards to plan the steps, record and play
            the programme to see how the robot move from the starting point to the end point.</p>
    </div>

    {{-- sldie 20 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center justify-center gap-x-10">
            <img src="{{ asset('assets/images/N2/BasicCoding/sb20.png') }}" />
            <div class="flex gap-0">
                <img src="{{ asset('assets/images/N2/BasicCoding/sb21.png') }}" />
            </div>
        </div>
        <p class="note">Note: Have children layout the maze, use programming cards to plan the steps, record and play
            the programme to see how the robot move from the starting point to the end point.</p>
    </div>

    {{-- sldie 21 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center justify-center gap-x-10">
            <img src="{{ asset('assets/images/N2/BasicCoding/sb22.png') }}" />
            <div class="flex gap-0">
                <img src="{{ asset('assets/images/N2/BasicCoding/sb23.png') }}" />
            </div>
        </div>
        <p class="note">Note: Have children layout the maze, use programming cards to plan the steps, record and play
            the programme to see how the robot move from the starting point to the end point.</p>
    </div>


    {{-- sldie 22 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center justify-center gap-x-10">
            <img src="{{ asset('assets/images/N2/BasicCoding/sb24.png') }}" />
            <div class="flex gap-0">
                <img src="{{ asset('assets/images/N2/BasicCoding/sb25.png') }}" />
            </div>
        </div>
        <p class="note">Note: Have children layout the maze, use programming cards to plan the steps, record and play
            the programme to see how the robot move from the starting point to the end point.</p>
    </div>

    {{-- slide 23 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="!text-white title stroke">Hands-on Time 2</h2>
        <div class="text-start">
            <h2 class="title stroke">Mission: <br>
                Now, let's repeat the game by designing a programme to tell a
                robot how to move through the maze and show a facial
                expression in the end! Tell your friends why you choose that
                facial expression for the robot.</h2>
        </div>
        <p class="note">Note: Have each group children take turns to complete a maze.</p>
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
                    window.location.href = "{{ route('Robot2Selection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
