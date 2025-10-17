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
    <h2 class="title stroke absolute top-[80px] z-[1000]">How Does a Screw Work?</h2>
    <div class="slide flex flex-col items-center justify-center">
        <img src="/assets/images/K1/sm/screw/s1.png" />
        <h2 class="title stroke">What is the boy doing?</h2>
        <p class="note">Note: Let children share what they see. Guide them to know that he is using a screw to fix a chair.
        </p>
    </div>

    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-5">
        <img src="/assets/images/K1/sm/screw/s2.png" />
        <h2 class="title stroke">This is a <span class="text-white">screw</span>. It is a rod with a spiral groove on it.
            The spiral groove is called <span class="text-white">thread.</span></h2>
        <p class="note"></p>
    </div>

    {{-- Slide 3 --}}
    <div class="slide flex flex-col items-center justify-center gap-5">
        <img src="/assets/images/K1/sm/screw/s3.png" />
        <h2 class="title stroke">This is how <span class="text-white">screw</span> goes inside a plank of wood!
            The <span class="text-white">thread</span> of the screw helps it to go into the wood easily.</h2>
        <p class="note"></p>
    </div>

    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center gap-0">
        <img src="/assets/images/K1/sm/screw/s4.png" />
        <h2 class="title stroke">These are different <span class="text-white">screw.</span></h2>
        <p class="note">Note: If possible, let children touch and feel different types of screws; emphasize that each
            screw has a thread.</p>
    </div>

    {{-- Slide 5 --}}
    <div class="slide flex flex-col items-center justify-center gap-0">
        <img src="/assets/images/K1/sm/screw/s5.png" />
        <h2 class="title stroke">A <span class="text-white">screw.</span> is a type of <span class="text-white">simple
                machine.</span></h2>
        <p class="note">Note: Let children share what they think a simple machine is.</p>
    </div>

    {{-- Slide 6 --}}
    <div class="slide flex flex-col items-center justify-center gap-5">
        <h2 class="title stroke"><span class="text-white">simple machine</span> are basic tools that help us to do work
            easily.</h2>
        <p class="note">Note: Explain that there are 6 types of simple machines and screw is one of it.</p>
    </div>

    {{-- Slide 7 --}}
    <div class="slide flex flex-col items-center justify-center gap-5">
        <h2 class="title stroke">Do you know how a <span class="text-white">screw</span> helps us to do work easily?</h2>
        <p class="note">Note: Let children share what they know.</p>
    </div>

    {{-- Slide 8 --}}
    <div class="slide flex flex-col items-center justify-center gap-5">
        <img src="/assets/images/K1/sm/screw/s1.png" />
        <h2 class="title stroke">A <span class="text-white">screw</span> generally helps to hold things together easily.
        </h2>
        <p class="note">Note: Guide children to understand that a screw is a simple machine as it helps us to do our work
            easily.</p>
    </div>

    {{-- Slide 9 --}}
    <div class="slide flex flex-col items-center justify-start gap-5">
        <h2 class="title stroke">Can you name some things which have <span class="text-white">screws</span> on them?</h2>
        <p class="note">Note: Have children name some things in their surroundings which have screws on them.</p>
    </div>

    {{-- Slide 10 --}}
    <div class="slide flex flex-col items-center justify-start gap-4">
        <img src="/assets/images/K1/sm/screw/s6.png" />
        <h2 class="title stroke">What is this? Where is the screw? What does it do?</h2>
    </div>

    {{-- Slide 11 --}}
    <div class="slide flex flex-col items-center justify-start gap-5">
        <img src="/assets/images/K1/sm/screw/s6.png" />
        <h2 class="title stroke">The screw is on the swing. It is used to hold the chain and the seat of the swing together.
        </h2>
    </div>

    {{-- Slide 12 --}}
    <div class="slide flex flex-col items-center justify-start gap-5">
        <img src="/assets/images/K1/sm/screw/s7.png" />
        <h2 class="title stroke">What is this? Where is the screw? What does it do?</h2>
    </div>

    {{-- Slide 13 --}}
    <div class="slide flex flex-col items-center justify-start gap-5">
        <img src="/assets/images/K1/sm/screw/s7.png" />
        <h2 class="title stroke">There are two screws on the coat hook. A screw driver is used to drive a screw in. The
            screws fix the hook easily.</h2>
    </div>

    {{-- Slide 14 --}}
    <div class="slide flex flex-col items-center justify-start gap-5">
        <img src="/assets/images/K1/sm/screw/s8.png" />
        <h2 class="title stroke">What is this? Where is the screw? What does it do?</h2>
    </div>

    {{-- Slide 15 --}}
    <div class="slide flex flex-col items-center justify-start gap-5">
        <img src="/assets/images/K1/sm/screw/s8.png" />
        <h2 class="title stroke">The base of the light bulb has thread on it and is a screw. It helps us to fix the light
            bulb into the socket.</h2>
    </div>

    {{-- Slide 16 --}}
    <div class="slide flex flex-col items-center justify-start gap-5">
        <img src="/assets/images/K1/sm/screw/s9.png" />
        <h2 class="title stroke">What is this? Where is the screw? What does it do?</h2>
    </div>

    {{-- Slide 17 --}}
    <div class="slide flex flex-col items-center justify-start gap-5">
        <img src="/assets/images/K1/sm/screw/s9.png" />
        <h2 class="title stroke">The bottle lid has thread on it and is a screw. It helps us to close the bottle tightly.
        </h2>
    </div>

    {{-- Slide 18 --}}
    <div class="slide flex flex-col items-center justify-start gap-5">
        <img src="/assets/images/K1/sm/screw/s10.png" />
        <h2 class="title stroke">What is this? Where is the screw? What does it do?</h2>
    </div>

    {{-- Slide 19 --}}
    <div class="slide flex flex-col items-center justify-start gap-5">
        <img src="/assets/images/K1/sm/screw/s10.png" />
        <h2 class="title stroke">The stool has a screw below the seat. It helps to raise the seat to the correct height.
        </h2>
    </div>

    {{-- Slide 20 --}}
    <div class="slide flex flex-col items-center justify-start gap-5">
        <img src="/assets/images/K1/sm/screw/s11.png" />
        <h2 class="title stroke">How do you (always) get holes punched in the paper?</h2>
    </div>

    {{-- Slide 21 --}}
    <div class="slide flex flex-col items-center justify-start gap-5">
        <img src="/assets/images/K1/sm/screw/s11.png" />
        <h2 class="title stroke">Arrange the books from small to big.</h2>
    </div>

    {{-- Slide 22 --}}
    <div class="slide flex flex-col items-center justify-start gap-5">
        <img src="/assets/images/K1/sm/screw/s12.png" />
        <h2 class="title stroke">What is this? Where is the screw? What does it do?</h2>
    </div>
    <div class="slide flex flex-col items-center justify-start gap-5">
        <img src="/assets/images/K1/sm/screw/s12.png" />
        <h2 class="title stroke">A spiral car park is a screw. It helps us to move cars up or down a building easily for
            parking.</h2>
    </div>
    <div class="slide flex flex-col items-center justify-start gap-5">
        <img src="/assets/images/K1/sm/screw/s13.png" />
        <h2 class="title stroke">What is this? Where is the screw? What does it do?</h2>
    </div>
    <div class="slide flex flex-col items-center justify-start gap-5">
        <img src="/assets/images/K1/sm/screw/s13.png" />
        <h2 class="title stroke">This is a special type of screw called <span class="text-white">Archimedes’ screw.</span>
        </h2>
    </div>
    <div class="slide flex flex-col items-center justify-start gap-5">
        <img src="/assets/images/K1/sm/screw/s13.png" />
        <h2 class="title stroke"><span class="text-white">Archimedes’ screw.</span> is big and usually used in farms.</h2>
    </div>
    <div class="slide flex flex-col items-center justify-start gap-5">
        <img src="/assets/images/K1/sm/screw/s13.png" />
        <h2 class="title stroke">It is used to transfer water from a lower place ot a higher place.</h2>
    </div>
    <div class="slide flex flex-col items-center justify-start gap-5">
        <h2 class="title stroke">Now, let’s learn how to make a small Archimedes’ screw and find out how it works!</h2>
    </div>
    <div class="slide flex flex-col items-center justify-start gap-5">
        <img src="/assets/images/K1/sm/screw/s14.png" />
        <h2 class="title stroke">Let’s find out: How do we make an Archimedes’ screw? How does it work?</h2>
    </div>
    <div class="slide flex flex-col items-center justify-start gap-5">
        <h2 class="title stroke">Let’s do: Wrap the plastic tubing around a tube and fix it with tape.</h2>
        <img src="/assets/images/K1/sm/screw/s15.png" />
    </div>
    <div class="slide flex flex-col items-center justify-start gap-5">
        <img src="/assets/images/K1/sm/screw/s16.png" />
        <h2 class="title stroke">Your Archimedes’ screw is ready.</h2>
    </div>
    <div class="slide flex flex-col items-center justify-start gap-5">
        <h2 class="title stroke">Let’s do: Put some water in a large container and add food colouring.</h2>
        <img src="/assets/images/K1/sm/screw/s17.png" />
    </div>
    <div class="slide flex flex-col items-center justify-start gap-5">
        <h2 class="title stroke">Let’s do: Place the screw in the coloured water as shown.</h2>
        <img src="/assets/images/K1/sm/screw/s18.png" />
    </div>
    <div class="slide flex flex-col items-center justify-start gap-5">
        <img src="/assets/images/K1/sm/screw/s19.png" />
        <h2 class="title stroke"><span class="text-white">What do you think (Prediction):</span> What will happen when we
            turn the Archimedes’ screw?</h2>
    </div>
    <div class="slide flex flex-col items-center justify-start gap-5">
        <h2 class="title stroke">Let’s do: Take turns to turn your Archimedes’ screw.</h2>
        <img src="/assets/images/K1/sm/screw/s19.png" />
    </div>
    <div class="slide flex flex-col items-center justify-start gap-5">
        <img src="/assets/images/K1/sm/screw/s19.png" />
        <h2 class="title stroke"><span class="text-white">What do you observe (Result):</span> What happens when we start
            turning the screw?</h2>
    </div>
    <div class="slide flex flex-col items-center justify-start gap-5">
        <h2 class="title stroke"><span class="text-white">What do you learn:</span> How does an Archimedes’ screw work?
        </h2>
        <p class="note">Note: After the hands-on activity, guide children to understand how an Archimedes’ screw work.
        </p>
    </div>
    <div class="slide flex flex-col items-center justify-start gap-5">
        <img src="/assets/images/K1/sm/screw/s19.png" />
        <h2 class="title stroke">Through the activity, we learn that when we turn the screw, the water rises up the tubing
            and flows into the small container.</h2>
    </div>
    <div class="slide flex flex-col items-center justify-start gap-5">
        <img src="/assets/images/K1/sm/screw/s19.png" />
        <h2 class="title stroke">Water is taken in at the bottom and moves up the thread of the screw as it rotates.</h2>
    </div>
    <div class="slide flex flex-col items-center justify-start gap-5">
        <img src="/assets/images/K1/sm/screw/s19.png" />
        <h2 class="title stroke">Water is taken in at the bottom and moves up the thread of the screw as it rotates.</h2>
    </div>
    <div class="slide flex flex-col items-center justify-start gap-5">
        <img src="/assets/images/K1/sm/screw/s13.png" />
        <h2 class="title stroke">How is the Archimedes’ screw useful?</h2>
        <p class="note">Note: Have children freely share their ideas.</p>
    </div>
    <div class="slide flex flex-col items-center justify-start gap-5">
        <img src="/assets/images/K1/sm/screw/s13.png" />
        <h2 class="title stroke">The Archimedes’ screw helps to transfer water from a lower place to a higher place and is
            used in farms.</h2>
    </div>
    <div class="slide flex flex-col items-center justify-start gap-5">
        <img src="/assets/images/K1/sm/screw/s20.png" />
        <h2 class="title stroke">How do you think we can use this Archimedes’ screw in our school or home?</h2>
        <p class="note">Note: Have children freely share their ideas. Encourage them to try their ideas with the screw
            they have made.</p>
    </div>

    {{-- Slide 23 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="w-[950px] h-[550px] bg-cover bg-center flex flex-col p-[40px] justify-flex-start"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>Draw the Rube Goldberg Machine that you have created to punch holes in a sheet of paper.</p>
        </div>
    </div>

    {{-- Complete button --}}
    <div class="absolute bottom-[85px]">
        <button
            class="cursor-pointer doneButton w-66 h-[75px] relative bg-[#F8A23A] rounded-[30px] shadow-[3px_4px_7.8px_0px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_0px_rgba(0,0,0,0.25)] outline outline-1 outline-yellow-700 overflow-hidden">
            <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
            <div class="absolute left-[8.22px] top-[3.17px]"><img src="/assets/images/pptimages/Vector4.png" /></div>
            <span
                class="absolute left-[80px] top-[18px] flex items-center text-white text-5xl font-bold stroke">DONE</span>
        </button>
    </div>

    {{-- Buttons --}}
 <div id="buttons" class="absolute right-[60px] flex flex-row gap-6 ">
        <!-- Return Button -->
        <a class="relative w-24 h-24 button-fade-in bg-slate-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-teal-800 cursor-pointer"
            id="returnButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10" src="{{ asset('assets/images/K1/cm/Vector4.png') }}" />
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
                class="absolute top-[16px] left-[30px] w-11 h-16 text-white text-6xl font-normal font-['Jua']">X</div>
        </button>
    </div>
    {{-- Next Button --}}
    <div class="absolute bottom-[85px]">
        <button
            class="cursor-pointer nextButton w-66 h-[75px] relative bg-[#F8A23A] rounded-[30px] shadow-[3px_4px_7.8px_0px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_0px_rgba(0,0,0,0.25)] outline outline-1 outline-yellow-700 overflow-hidden">
            <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
            <div class="absolute left-[8.22px] top-[3.17px]"><img src="/assets/images/pptimages/Vector4.png" /></div>
            <span
                class="absolute left-[80px] top-[18px] flex items-center text-white text-5xl font-bold stroke">NEXT</span>
        </button>
    </div>

@endsection

@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const slides = document.querySelectorAll(".slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");

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

            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                });
            });

            returnButton.addEventListener("click", () => {
                if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('ScrewSelection') }}";
                });
            }

            showSlide(currentSlide);
        });
    </script>
@endpush
