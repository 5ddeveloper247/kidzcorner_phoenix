@extends('layout.master')

@section('title', 'Dynamic Presentation')


@section('content')

    {{-- slide 0 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">Children, do you remember how were these shapes formed?</h2>
            <img src="{{ asset('assets/images/pptimages/cshapes.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[736px]" />
            <p class="note">Note: Guide children to share their answers.</p>
    </div>

    {{-- slide 1 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title stroke">These shapes are formed by joining lines together.</h2>
            <img src="{{ asset('assets/images/pptimages/shapess.png') }}" class="max-w-[500px] sm:max-w-[600px] lg:max-w-[736px]" />
        </div>
    </div>

    {{-- slide 2 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">When the ice cream sticks are joined together,it formed a structure in the shape of a square.
        </h2>
        <img src="{{ asset('assets/images/pptimages/shape2.png') }}"  class="w-[736px]" />
    </div>

    {{-- slide 3 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">Similarly, the ice cream sticks and straws were joined together to form the triangular and
            rectangular structures. </h2>
        <img src="{{ asset('assets/images/pptimages/s1.png') }}"  class="w-[636px]" />
    </div>

    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">The structure of an object gives its shapes.</h2>
        <img src="{{ asset('assets/images/pptimages/s5.png') }}"  class="w-[636px]" />
        <p class="note">Note: Teacher can explain that ice cream sticks and straws were used to make the strcutures.</p>
    </div>

    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">Look at these magnetics tiles, they are structure of different shapes too.</h2>
        <div class="flex gap-10 ">
            <img src="{{ asset('assets/images/pptimages/s18.png') }}" class="w-[436px]" />
            <img src="{{ asset('assets/images/pptimages/s17.png') }}" class="w-[436px]"/>
        </div>

    </div>

    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">Shapes can be used to create images.What do you think this is?</h2>
        <img src="{{ asset('assets/images/pptimages/s2.png') }}"  class="w-[536px]" />
        <p class="note">Note: Encourage the children to share their answers.</p>
    </div>

    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">This is a house! It can be made using one square and one triangle.</h2>
        <img src="{{ asset('assets/images/pptimages/s2.png') }}" class="w-[536px]"  />
    </div>

    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">

        <h2 class="title stroke">Look at this house. What shapes are needed to make it?</h2>
        <img src="{{ asset('assets/images/pptimages/s3.png') }}" class="w-[436px]"  />
        <p class="note">Note: Encourage the children to identify and point out the shapes.</p>
    </div>

    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">A bigger house can be created by putting more triangles and squares together.</h2>
        <img src="{{ asset('assets/images/pptimages/s3.png') }}" class="w-[436px]"  />
    </div>

    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">A bigger house can be created by putting more triangles and squares together.</h2>
        <img src="{{ asset('assets/images/pptimages/s4.png') }}"   class="w-[436px]" />
        <p class="note">Note: Encourage the children share what do they see.</p>
    </div>


    {{-- slide 11 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">This is a van! It is made up of squares and circles.</h2>
        <img src="{{ asset('assets/images/pptimages/s4.png') }}" class="w-[436px]"  />
        <p class="note">Note: guide the children to identify the shapes.</p>
    </div>


    {{-- slide 12 --}}
    <div class="flex flex-col justify-center  slide hidden">

        <h2 class="title !text-white stroke">Individual Activity 1</h2>

        <div class="flex gap-10">
            <img src="{{ asset('assets/images/pptimages/s17.png') }}"  class="w-[436px]" />
            <img src="{{ asset('assets/images/pptimages/s18.png') }}" class="w-[436px]"  />
        </div>
        <div class="flex items-start">
            <h2 class="title stroke text-start !text-[48px]">Let's do:<br> Match the shapes on the template and create an
                image.</h2>
        </div>

    </div>

    {{-- slide 13 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class="list-decimal list-inside ">
                <li>Take one template image.</li>
                <li>Find the matching magnetic tiles and place them on the template sheet.</li>
                <li>Show it to the teacher when you are done.</li>
            </ul>

        </div>
        <p class="note  text-center">Note: Teacher to prepare the templates before lesson. Encourage children to identify
            the shapes
            of the magnetic tiles needed in the template image.</p>
    </div>


    {{-- slide 14 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <div class="flex gap-10">
            <img src="{{ asset('assets/images/pptimages/s7.png') }}" class="w-[436px]"  />
            <img src="{{ asset('assets/images/pptimages/s6.png') }}" class="w-[436px]"  />
        </div>
        <h2 class="titl strokee">Many other images can be created by using the shapes.</h2>
        <p class="note  text-center">Note: Point out the images created above.</p>

    </div>

    {{-- slide 15 --}}
    <div class="flex flex-col justify-center  slide hidden">
        <h2 class="title !text-white stroke">Individual Activity 1</h2>
        <div class="flex gap-10">
            <img src="{{ asset('assets/images/pptimages/s17.png') }}"  class="w-[436px]" />
            <img src="{{ asset('assets/images/pptimages/s18.png') }}"  class="w-[436px]" />
        </div>
        <div class="flex items-start">
            <h2 class="title stroke text-start !text-[48px]">Let's do:<br> Use the shapes and create an image of something
                you like.</h2>
        </div>
        <p class="note  text-center">Note: Give the each child a set of materials to carry out this activity.</p>
    </div>


    {{-- slide 16 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class="list-decimal list-inside ">
                <li>Think of an animal, building, vehicles or even a person that you would like to make.</li>
                <li>Take the tiles and arrange them on the blank mat.</li>
                <li>Start creating from the top to the bottom.</li>
                <li>Present your creation to the class. Tell your friends what have you made.</li>
            </ul>

        </div>
        <p class="note  text-center">Note: Encourage children to use the shapes as they like and guide them to create the
            image they want. Provide a variety of shapes for the children to work with. If children are unable,
            teacher can use the shape templates to inspire children to create something similar. Teachers may take photos of
            the children's creations.</p>
    </div>



    {{-- slide 17 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">When lines are put together, they form a structure. The structures can be of different shapes.
        </h2>
        <img src="{{ asset('assets/images/pptimages/s5.png') }}" class="w-[436px]"  />
    </div>



    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="titl strokee">The structure of an object gives it its shape.</h2>
        <img src="{{ asset('assets/images/pptimages/s5.png') }}" class="w-[436px]"  />
        <p class="note  text-center">Note: Teacher can explain that ice cream sticks and straws were used to make the
            structures.</p>
    </div>

    {{-- slide 19 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <div class="flex gap-10">
            <img src="{{ asset('assets/images/pptimages/s7.png') }}" class="w-[436px]"  />
            <img src="{{ asset('assets/images/pptimages/s6.png') }}" class="w-[436px]"  />
        </div>
        <h2 class="title stroke">When shapes are put together, different images can be created.</h2>

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
                    window.location.href = "{{ route('Shapes-StructureSelection') }}";
                });
            }

            //  Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
