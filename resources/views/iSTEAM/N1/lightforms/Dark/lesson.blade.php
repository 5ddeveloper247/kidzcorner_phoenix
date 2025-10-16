@extends('layout.master')
@section('title stroke', 'Dynamic Presentation')


@section('content')

    {{-- slide 0 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <h2 class="title stroke">What do you see in this picture?</h2>
        <img src="{{ asset('assets/images/pptimages/dark1.png') }}" class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        <p class="note">Note: Guide children to share their answers.</p>
    </div>

    {{-- slide 1 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title stroke">Do you see toys that are shaped like
                the moon and stars?</h2>
            <img src="{{ asset('assets/images/pptimages/dark1.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        </div>
        <p class="note">Note: Ask children if they have played with such toys and share their experience.</p>
    </div>

    {{-- slide 2 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <h2 class="title stroke">These toys are able to store light energy when
            they are in a bright place.</h2>
        <img src="{{ asset('assets/images/pptimages/dark1.png') }}"
            class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />

        <p class="note">Note: Ask children if they have played with such toys and share their experience.</p>
    </div>


    {{-- slide 3 --}}
    <div class="flex flex-col items-center justify-center gap-2 slide hidden">
        <h2 class="title stroke">When these toys are place in the dark,
            they glow!</h2>
        <img src="{{ asset('assets/images/pptimages/dark2.png') }}" />

        <h2 class="title stroke !text--[30px]">They will stop glowing when they have used up the
            light energy in them.</h2>
    </div>

    {{-- slide 4 --}}
    <div class="flex flex-col justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title stroke !text-white">CLASS ACTIVITY </h2>
            <img src="{{ asset('assets/images/pptimages/dark3.png') }}" />
        </div>
        <div class="flex items-start">

            <h2 class="title stroke text-start">Let's try: <br> Can it glow?</h2>
        </div>
        <p class="note ">Note: Teacher to include toys that do not glow in the group. Encourage children to choose toys .
        </p>
    </div>



    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-center space-y-20 slide hidden">
        <div class="title stroke text-start px-4">
            <h2>let's do:</h2>
            <ul class="list-decimal">
                <li>Look at the toys and make a guess which one will glow in the dark.</li>
                <li>Put the toys in the black box.</li>
                <li>Switch off the lights and peek in the box</li>
            </ul>
        </div>
    </div>

    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center gap-3 slide hidden">

        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul>
                <li>4. Draw the toys that glow in the dark on the learning journal.</li>
            </ul>
        </div>
        <div class="w-[836px] h-[450px] bg-cover bg-center "
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p class="text-[20px] ">Draw the items that glow in the dark!</p>

        </div>

    </div>

    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center gap-3 slide hidden">
        <div class=" flex gap-10  ">
            <div class="flex flex-col items-center justify-center">
                <h2 class="title stroke !text-[35px]">Clcok</h2>
                <img src="{{ asset('assets/images/pptimages/d5.png') }}" class="w-[430px]" />
            </div>
            <div class="flex flex-col items-center justify-center">
                <h2 class="title stroke !text-[35px]">Watch</h2>
                <img src="{{ asset('assets/images/pptimages/d6.png') }} " class="w-[430px]" />
            </div>
        </div>
        <h2 class="title stroke">Some clocks and watches have parts that glow in the dark.</h2>
        <p class="note ">Note: Teacher can show children such clocks and watches too.</p>
    </div>


    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center gap-3 slide hidden">
        <div class=" flex gap-10  ">
            <div class="flex flex-col items-center justify-center">
                <h2 class="title stroke !text-[35px]">Clcok</h2>
                <img src="{{ asset('assets/images/pptimages/d7.png') }}" class="w-[430px]" />
            </div>
            <div class="flex flex-col items-center justify-center">
                <h2 class="title stroke !text-[35px]">Watch</h2>
                <img src="{{ asset('assets/images/pptimages/d8.png') }} " class="w-[430px]" />
            </div>
        </div>
        <h2 class="title stroke">With the glow-in-the-dark parts, it is easy to tell the
            items in the dark.</h2>
    </div>


    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center gap-3 slide hidden">
        <div class=" flex gap-10  ">
            <img src="{{ asset('assets/images/pptimages/d10.png') }} " class="w-[430px]" />
            <img src="{{ asset('assets/images/pptimages/d9.png') }}" class="w-[430px]" />
        </div>
        <h2 class="title stroke">Look at the pictures. What are they?</h2>
        <p class="note ">Note: Encourage children to share their answers.</p>
    </div>

    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center gap-3 slide hidden">
        <div class=" flex gap-10  ">
            <div class="flex flex-col items-center justify-center">
                <h2 class="title stroke !text-[35px]">FireFly</h2>
                <img src="{{ asset('assets/images/pptimages/d10.png') }}" class="w-[430px]" />
            </div>
            <div class="flex flex-col items-center justify-center">
                <h2 class="title stroke !text-[35px]">Jellyfish</h2>
                <img src="{{ asset('assets/images/pptimages/d9.png') }} " class="w-[430px]" />
            </div>
        </div>
        <h2 class="title stroke">The firefly and the jellyfish can glow in the dark too.</h2>
    </div>

    {{-- slide 11 --}}
    <div class="flex flex-col items-center justify-center gap-3 slide hidden">
        <div class=" flex gap-10  ">
            <div class="flex flex-col items-center justify-center">
                <h2 class="title stroke !text-[35px]">FireFly</h2>
                <img src="{{ asset('assets/images/pptimages/d12.png') }}" class="w-[430px]" />
            </div>
            <div class="flex flex-col items-center justify-center">
                <h2 class="title stroke !text-[35px]">Jellyfish</h2>
                <img src="{{ asset('assets/images/pptimages/d11.png') }} " class="w-[430px]" />
            </div>
        </div>
        <h2 class="title stroke">The firefly and the jellyfish can glow in the dark too.</h2>
    </div>


    {{-- slide 12 --}}
    <div class="flex flex-col justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title stroke !text-white">Individual Activity </h2>
            <img src="{{ asset('assets/images/pptimages/d13.png') }}" />
        </div>
        <div class="flex items-start">

            <h2 class="title stroke text-start">Let's try: <br>
                Make a glow in the dark jar/bottle</h2>
        </div>
        <p class="note ">Note: Teacher to assist children in creating the craft. </p>
    </div>


    {{-- slide 13 --}}
    <div class="flex flex-col items-center justify-center space-y-20 slide hidden">
        <div class="title stroke text-start px-4">
            <h2>let's do:</h2>
            <ul class="list-decimal">
                <li>Make a glow in the dark jar/bottle with the stickers and paint.</li>
                <li>Paint on the inside of the bottle and paste stickers on the outside.</li>
            </ul>
            <img src="{{ asset('assets/images/pptimages/d14.png') }}" class="w-[336px] float-right" />
        </div>
        <p class="note ">Note: Teacher to assist children with the materials, especially if glass jars are used.</p>
    </div>


    {{-- slide 14 --}}
    <div class="flex flex-col items-center justify-center space-y-20 slide hidden">
        <div class="title stroke text-start px-4">
            <h2>let's do:</h2>
            <ul>
                <li>3. Close the jar/bottle.</li>
                <li>4. Switch off the lights in the class and get look at everyone’s jar/bottles.</li>
            </ul>
            <img src="{{ asset('assets/images/pptimages/d15.png') }}" class="w-[336px] float-right" />
        </div>
        <p class="note ">Note: Teacher to assist children with the materials, especially if glass jars are used.</p>
    </div>


    {{-- slide 15 --}}
    <div class="flex flex-col items-center justify-center gap-3 slide hidden">
        <div class=" flex gap-10  ">
            <img src="{{ asset('assets/images/pptimages/dark1.png') }} " class="w-[430px]" />
            <img src="{{ asset('assets/images/pptimages/d14.png') }}" class="w-[430px]" />
        </div>
        <h2 class="title stroke"> <span class="text-white">Glow-in-the-dark</span> items store
            <span class="text-white">light energy</span> when they are placed in a bright
            <span class="text-white">place</span>.
        </h2>
    </div>


    {{-- slide 16 --}}
    <div class="flex flex-col items-center justify-center gap-3 slide hidden">
        <div class=" flex gap-10  ">
            <img src="{{ asset('assets/images/pptimages/dark2.png') }} " class="w-[430px]" />
            <img src="{{ asset('assets/images/pptimages/d15.png') }}" class="w-[430px]" />
        </div>
        <h2 class="title stroke"> When it’s dark, the Glow-in-the-dark items will glow brightly
            until all the light energy is used up.</h2>
    </div>

    {{-- slide 17 --}}
    <div class="flex flex-col items-center justify-center gap-3 slide hidden">
        <div class=" flex gap-10  ">
            <img src="{{ asset('assets/images/pptimages/d10.png') }} " class="w-[430px]" />
            <img src="{{ asset('assets/images/pptimages/d9.png') }}" class="w-[430px]" />
        </div>
        <h2 class="title stroke">Besides toys, fireflies and jellyfish can glow in the
            dark too!h2>
    </div>


    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">

        <h2 class="title stroke stroke">Learning Journal </h2>
        <div class=" relative ">
            <p class="absolute top-0 left-0 text-[24px] ">Draw the items that glow in the dark!</p>
            <img src="{{ asset('assets/images/pptimages/dark4.png') }}" />
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

            // ✅ prevent reload on all buttons
            document.querySelectorAll("button").forEach(btn => {
                btn.addEventListener("click", e => e.preventDefault());
            });

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
                    window.location.href = "{{ route('darkSelection') }}";
                });
            }

            showSlide(currentSlide);
        });
    </script>
@endpush
