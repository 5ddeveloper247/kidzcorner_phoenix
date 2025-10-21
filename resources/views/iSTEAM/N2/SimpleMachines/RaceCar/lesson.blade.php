@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')


    {{-- Slide 1 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <div class="grid grid-cols-4 grid-row-2">
            <img src="/assets/images/N2/a8.png" class="w-[436px]" />
            <img src="/assets/images/N2/b2.png" class="w-[436px]" />
            <img src="/assets/images/N2/b23.png" class="w-[436px]" />
            <img src="/assets/images/N2/bcar2.png" class="w-[436px]" />
            <img src="/assets/images/N2/a33.png" class="w-[436px]" />
            <img src="/assets/images/N2/a61.png" class="w-[436px]" />
            <img src="/assets/images/N2/s3.png" class="w-[436px]" />

        </div>
        <h2 class="stroke title">Children, what are these? Do you remember how to build each of these?</h2>
    </div>




    {{-- Slide 2 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <div class="grid grid-cols-3">
            <img src="/assets/images/N2/a8.png" class="w-[436px]" />
            <img src="/assets/images/N2/b2.png" class="w-[436px]" />
            <img src="/assets/images/N2/b23.png" class="w-[436px]" />
            <img src="/assets/images/N2/bcar2.png" class="w-[436px]" />
            <img src="/assets/images/N2/a33.png" class="w-[436px]" />
            <img src="/assets/images/N2/a61.png" class="w-[436px]" />
        </div>
        <h2 class="stroke title">Certain parts of these are made with a <span class="text-white">wheel</span> and <span
                class="text-white">axle<br /></span>a type of <span class="text-white">simple machine</span>. What are they?
        </h2>
    </div>


    {{-- Slide 3 --}}
    <div class="slide flex flex-col items-center justify-center gap-10 ">
        <img src="/assets/images/N2/s3.png" class="w-[436px]" />
        <h2 class="stroke title">This is made with a <span class="text-white">lever</span>, another type of <span
                class="text-white">simple machine</span>.<br />Where is the <span class="text-white">lever</span>? Where is
            its <span class="text-white">fulcrum</span>?</h2>
    </div>



    {{-- slide 4 --}}
    <div class="slide flex flex-col items-center justify-center gap-10 ">
        <img src="/assets/images/N2/b20.png" class="w-[436px]" />
        <h2 class="stroke title">This is made with a <span class="text-white">inclined plane</span>, another type of <span
                class="text-white">simple<br />machine</span>. What did you use it for?</h2>
    </div>

    {{-- slide 5 --}}
    <div class="slide flex flex-col items-center justify-center gap-10 ">
        <img src="/assets/images/N2/flag.png" class="w-[436px]" />
        <h2 class="stroke title">There will be a race in the class.
            The car that moves down an inclined plane and goes the
            furthest will be the winner of the race!</h2>
    </div>


    {{-- slide 6 --}}
    <div class="flex flex-col  slide hidden">
        <img src="/assets/images/N2/s26.png" class="w-[436px]" />
        <h2 class="title stroke">This is the inclined plane of the race.
            What kind of car do you think will run down the
            inclined plane and go the furthest?</h2>
        <p class="note">Note: Show children the real setup of inclined plane of the race. Encourage them to share their
            views.</p>
    </div>




    {{-- slide 7 --}}
    <div class="flex flex-col  slide hidden">

        <h2 class="title storke !text-white">Hands-on Time </h2>
        <div class="text-start">

            <h2 class="title storke">Mission: <br>
                Let’s put on your thinking caps to design a car for the race!</h2>
        </div>
        <p class="note">Note: Divide children into groups and give each group a box of building bricks.</p>
    </div>

    {{-- slide 8 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul class="list-decimal">
                <li>What kind of design will make a car move down the inclined plane (of the race) and go the furthest?
                    Design and build it.</li>
                <li>Test out your car and then decide if you need to make it better.</li>
                <li>Start the race to find out the car of which team will be the winner of the race.</li>
            </ul>
        </div>

        <p class="note">Note: Have each group of children discuss and work together to complete the mission.
            Take turns to guide each group of children in discussion by asking prompting questions.</p>
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
                    window.location.href = "{{ route('RaceCarSelection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script
@endpush
