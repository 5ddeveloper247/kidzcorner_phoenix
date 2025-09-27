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

    {{-- slide 0 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title">Children, do you remember these shapes?</h2>
        <img src="{{ asset('assets/images/pptimages/cshapes.png') }}"
            class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        <p class="note">Note: Guide children to share their answers.</p>
    </div>

    {{-- slide 1 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title">These are square, triangle and rectangle.</h2>
            <img src="{{ asset('assets/images/pptimages/cshapes.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        </div>
        <p class="note">Note: Guide children to point out the shapes.</p>
    </div>

    {{-- slide 2 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title">These shapes are formed by joining lines together.</h2>

        <img src="{{ asset('assets/images/pptimages/cshapes.png') }}"
            class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
    </div>

    {{-- slide 3 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title">Look at these shapes. What shape are these?
        </h2>
        <img src="{{ asset('assets/images/pptimages/box.png') }}" class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        <p class="note">Note: Guide children to share their answers.</p>
    </div>

    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title">These are squares of different sizes!</h2>
        <img src="{{ asset('assets/images/pptimages/box2.png') }}" />
        <p class="note">Note: Guide children to point out which is big and which is small.</p>
    </div>

    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title">Look at these shapes. What are they?</h2>
        <img src="{{ asset('assets/images/pptimages/triangle.png') }}" />
        <p class="note">Note: Guide children to answer.</p>
    </div>

    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title">These triangles are of different types and sizes.</h2>
        <img src="{{ asset('assets/images/pptimages/triangle2.png') }}" />
        <p class="note">Note: Guide children to compare them.</p>
    </div>

    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title">Each of them is formed using three lines.</h2>
        <img src="{{ asset('assets/images/pptimages/rect3.png') }}" />
        <p class="note">Note: Guide children to count the lines.</p>
    </div>

    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">

        <img src="{{ asset('assets/images/pptimages/rect3.png') }}" />
        <h2 class="title">Rectangles come in different sizes too.</h2>
        <p class="note">Note: Guide children to point out which is big and which is small.</p>
    </div>

    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <img src="{{ asset('assets/images/pptimages/rect3.png') }}" />
        <h2 class="title">Some are big and some are small.</h2>
        <p class="note">Note: Guide children to point out which is big and which is small.</p>
    </div>

    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <img src="{{ asset('assets/images/pptimages/rect5.png') }}" />
        <h2 class="title">Look at these toys. Do you know what shapes are they?</h2>
        <p class="note">Note: Encourage children to asnwer.</p>
    </div>


    {{-- slide 11 --}}
    <div class="flex flex-col justify-center  slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title !text-white stroke">Class Activity 1</h2>
            <img src="{{ asset('assets/images/pptimages/shape2.png') }}" />
        </div>
        <div class="flex items-start">
            <h2 class="title stroke text-start !text-[48px]">Let's do:<br> Compare and sort out the magnetic tiles based on
                their shapes. </h2>
        </div>

    </div>

    {{-- slide 12 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class="list-decimal list-inside ">
                <li>Look at the magnetic tiles.</li>
                <li>Take one and match it to the mat labeled with the picture of the same shape.</li>
                <li>When all shapes are sorted, take the shapes out and compare their sizes.</li>
            </ul>

        </div>
        <p class="note  text-center">Note: Encourage children to sort. Teacher to guide children on this for the
            triangles as there are different types.</p>
    </div>


    {{-- slide 13 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title">Look at these. There are not squares, triangles or
            rectangles. But they are shapes too.</h2>
        <img src="{{ asset('assets/images/pptimages/rect3.png') }}" />

    </div>

    {{-- slide 14 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title">This is a circle! It is formed with one curved line.</h2>
        <img src="{{ asset('assets/images/pptimages/rect3.png') }}" />
        <p class="note">Note: Point out to the children that it has no straight lines.</p>
    </div>

    {{-- slide 15 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title">Some of these shapes are formed by joining
            straight lines together.</h2>
        <img src="{{ asset('assets/images/pptimages/rect3.png') }}" />
        <p class="note">Note: Point out to the children that it has no straight lines.</p>
    </div>

    {{-- slide 16 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title">This is a circle! It is formed with one curved line.</h2>
        <img src="{{ asset('assets/images/pptimages/rect3.png') }}" />
        <p class="title stroke">Pentagon, hexagon, trapezium and rhombus are
            formed using straight lines.</p>
    </div>

    {{-- slide 17 --}}

    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title">These shapes are formed by putting curve and
            straight lines together.</h2>
        <img src="{{ asset('assets/images/pptimages/rect3.png') }}" />
    </div>

    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title">A semi-circle is half a circle. It is formed
            using a curve and a straight line.</h2>
        <img src="{{ asset('assets/images/pptimages/rect3.png') }}" />
    </div>

    {{-- slide 19 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title">This is a quadrant. It is half semi-circle..</h2>
        <img src="{{ asset('assets/images/pptimages/rect3.png') }}" />
        <p class="note">Note: Teacher to use the tiles to show children when two quadrants are put together
            it forms a semi circle.</p>
    </div>

    {{-- slide 20 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title">This shape is called a pie shape as it looks
            like a piece of a pie.</h2>
        <img src="{{ asset('assets/images/pptimages/rect3.png') }}" />
    </div>


    {{-- slide 21 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title">Look at these shapes, do they look like bridges?</h2>
        <img src="{{ asset('assets/images/pptimages/rect3.png') }}" />
        <p class="note">Note: Point out to the children that it has no straight lines.</p>
    </div>



    {{-- slide 22 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title">They are known as arches. They looked like bridges going over a river.</h2>
        <img src="{{ asset('assets/images/pptimages/rect3.png') }}" />
    </div>


    {{-- slide 23 --}}
    <div class="flex flex-col justify-center  slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title !text-white stroke">Class Activity 2</h2>
            <img src="{{ asset('assets/images/pptimages/shape2.png') }}" />
        </div>
        <div class="flex items-start">
            <h2 class="title stroke text-start !text-[48px]">Let's do:<br> Match the shapes.</h2>
        </div>

    </div>


    {{-- slide 24 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title">Shapes can be formed using straight lines
            and curve lines. There are many different
            types of shapes.</h2>
        <div class="flex ">
            <img src="{{ asset('assets/images/pptimages/rect3.png') }}" class="w-[300px]" />

            <img src="{{ asset('assets/images/pptimages/rect3.png') }}" class="w-[300px]" />
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
                    window.location.href = "{{ route('identifyShapesSelection') }}";
                });
            }

            //  Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
