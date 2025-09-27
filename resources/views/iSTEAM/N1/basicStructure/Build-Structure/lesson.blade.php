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
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="stroke title">Everything around us has a <span class="text-white">structure</span>.<br /><span
                class="text-white">Structures</span> give the item its <span class="text-white">shapes</span>.</h2>
        <img src="{{ asset('assets/images/pptimages/B-4.png') }}" />
    </div>


    {{-- slide 1 --}}
    <div class="flex flex-col items-center justify-center slide hidden">

        <img src="{{ asset('assets/images/pptimages/r33.png') }}" />

        <h2 class="title stroke">Do you remember this gift box? Is it <span class="text-white">fla</span>?</h2>
        <p class="note">Note: Encourage the children to share their answers.</p>
    </div>

    {{-- slide 2 --}}
    <div class="flex flex-col items-center justify-center slide hidden">


        <img src="{{ asset('assets/images/pptimages/r33.png') }}" />
        <h2 class="title stroke">The gift box is not flat and it has 6 sides.</h2>
        <p class="note">Note: Teacher can point out to the children. Teacher can also use the cube box
            from previous lesson.</p>
    </div>


    {{-- slide 3 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <div class="flex items-center">
            <img src="{{ asset('assets/images/pptimages/r33.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
            <img src="{{ asset('assets/images/pptimages/r30.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />

        </div>
        <h2 class="stroke title">Each side of the gift box is a <span class="text-white">square</span>.<br />The <span
                class="text-white">squares</span> from the <span class="text-white">structure</span> of the gift box.</h2>
    </div>

    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <div class="flex items-center">
            <img src="{{ asset('assets/images/pptimages/r4.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
            <img src="{{ asset('assets/images/pptimages/r3.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />

        </div>
        <h2 class="stroke title"><span class="text-white">Buildings</span> such as office building and<br /><span
                class="text-white">houses</span> have <span class="text-white">structures</span> too.</h2>
    </div>



    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <div class="flex items-center">
            <img src="{{ asset('assets/images/pptimages/r4.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
            <img src="{{ asset('assets/images/pptimages/r3.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />

        </div>
        <h2 class="stroke title"><span class="text-white">Buildings</span> are not<span class="text-white"> flat</span>.
            Different <span class="text-white">shapes</span> are put together to form their <span class="text-white">structures</span>.</h2>
    </div>


    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">

        <img src="{{ asset('assets/images/pptimages/r4.png') }}" />
        <h2 class="stroke title">This is an office <span class="text-white">building</span>. What <span
                class="text-white">shape</span> is the <span class="text-white">building</span>?</h2>
        <p class="note">Note: Encourage children to share answer.</p>
    </div>

    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <img src="{{ asset('assets/images/pptimages/r4.png') }}" />
        <h2 class="stroke title">This part of the building looks like a rectangle.</span>?</h2>
        <p class="note">Note: Point out the rectangle to the children.</p>

    </div>


    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">

        <img src="{{ asset('assets/images/pptimages/r4.png') }}" />
        <h2 class="stroke title">The side of the <span class="text-white">building</span> also looks like a <span
                class="text-white">rectangle</span>.</h2>
        <p class="note">Note: Point out the rectangle to the children.</p>

    </div>


    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <img src="{{ asset('assets/images/pptimages/r4.png') }}" />
        <h2 class="stroke title">The building is not flat.Its sides are rectangular in shape.</h2>

    </div>

    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <div class="flex items-center">
            <img src="{{ asset('assets/images/pptimages/r6.png') }}" />
            <img src="{{ asset('assets/images/pptimages/r5.png') }}" />
        </div>
        <h2 class="stroke title">Both the<span class="text-white"> top</span> and <span class="text-white">bottom</span> of
            the <span class="text-white">building</span> are <span class="text-white">shaped</span> like <span
                class="text-white">squares</span>.</h2>
    </div>


    {{-- slide 11 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <img src="{{ asset('assets/images/pptimages/r4.png') }}" />
        <h2 class="stroke title">The building is not flat.Its sides are rectangular in shape.</h2>

    </div>


    {{-- slide 12 --}}
    <div class="flex flex-col justify-center  slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title !text-white stroke">individual Activity 1</h2>
            <img src="{{ asset('assets/images/pptimages/r17.png') }}" />
        </div>
        <div class="flex items-start">
            <h2 class="title stroke text-start !text-[48px]">Let's do:<br> Create the structure of a building! </h2>
        </div>
    </div>

    {{-- slide 13 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class="list-decimal list-inside ">
                <li>Take two pieces of square tiles and create a rectangle as shown below.</li>
            </ul>
            <img src="{{ asset('assets/images/pptimages/r8.png') }}" />
        </div>
        <p class="note  text-center">Note: This can be done individually. Each child can build his/her building.</p>
    </div>



    {{-- slide 14 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class="list-decimal list-inside ">
                <li>2. Make three more rectangles.</li>
                <li>3. Place the four rectangles together as shown</li>

            </ul>
            <div class="flex items-center gap-5">
                <img src="{{ asset('assets/images/pptimages/r10.png') }}" />
                <img src="{{ asset('assets/images/pptimages/r9.png') }}" />
            </div>
        </div>
        <p class="note  text-center">Note: Teacher to guide the children and assist them.</p>
    </div>

    {{-- slide 15 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class="list-decimal list-inside ">
                <li>4. Lift up the rectangles and attached the rectangles as shown.</li>
            </ul>
            <div class="flex items-center gap-5">
                <img src="{{ asset('assets/images/pptimages/r10.png') }}" />
                <img src="{{ asset('assets/images/pptimages/r9.png') }}" />
            </div>
        </div>
        <p class="note  text-center">Note: Teacher to guide the children and assist them.</p>
    </div>

    {{-- slide 16 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class="list-decimal list-inside ">
                <li>5. Take one square and place it on the top. Take one more and put it at the bottom.</li>
            </ul>
            <div class="flex items-center gap-5">
                <img src="{{ asset('assets/images/pptimages/r14.png') }}" />
                <img src="{{ asset('assets/images/pptimages/r13.png') }}" />
            </div>

        </div>
        <p class="note  text-center">Note: Teacher to guide the children and assist them.</p>
    </div>

    {{-- slide 17 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class="list-decimal list-inside ">
                <li>6. Put squares surrounding the building to make the building structure look like the one in the picture!
                </li>
            </ul>
            <div class="flex items-center gap-5">
                <img src="{{ asset('assets/images/pptimages/r15.png') }}" />
                <img src="{{ asset('assets/images/pptimages/r16.png') }}" />
                <img src="{{ asset('assets/images/pptimages/r17.png') }}" />

            </div>

        </div>
        <p class="note  text-center">Note: Teacher to guide the children and assist them.</p>
    </div>


    {{-- slide 18 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class="list-decimal list-inside ">
                <li>7. Build a taller/bigger building as a class. Put all the buildings together and see what structure can
                    be created.</li>
            </ul>


        </div>
        <p class="note  text-center">Note: Teacher to challenge children and encourage them to work together as a class.
        </p>
    </div>



    {{-- slide 19 --}}

    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">Look at this <span class="text-white">house</span>! What <span
                class="text-white">shapes</span> are put together to form the <span class="text-white">structure</span>?
        </h2>
        <img src="{{ asset('assets/images/pptimages/r18.png') }}" />
        <p class="note  text-center">Note: Encourage children to share answer.</p>
    </div>


    {{-- slide 20 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">The <span class="text-white">top</span> looks like a <span
                class="text-white">triangle</span> and the<span class="text-white"> bottom
            </span>looks like a <span class="text-white">square</span>.</h2>
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/pptimages/r18.png') }}" />
            <img src="{{ asset('assets/images/pptimages/r18.png') }}" />
        </div>
        <p class="note  text-center">Note: Point out the shape to the children..</p>
    </div>

    {{-- ================= --}}
    {{-- slide 21 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">What about this side? What <span class="text-white">shapes</span> are used from the <span
                class="text-white">structure</span> on the side?</h2>
        <img src="{{ asset('assets/images/pptimages/r19.png') }}" />
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>

    {{-- slide 22 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">This side can be formed by putting two <span class="text-white">rectangles</span>
            together.</h2>
        <img src="{{ asset('assets/images/pptimages/B-house.png') }}" />
        <p class="note">Note: Teacher to point out the two rectangles.</p>
    </div>


    {{-- slide 23 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">One <span class="text-white">rectangle</span> and one on top. The one on top<br />is
            placed at an angle.</h2>
        <img src="{{ asset('assets/images/pptimages/B-house2.png') }}" />
        <p class="note">Note: Teacher can use two pieces of rectangles (paper/cardboards) to demonstrate.</p>
    </div>



    {{-- slide 24 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <img src="{{ asset('assets/images/pptimages/r18.png') }}" />
        <h2 class="stroke title">Just like the office <span class="text-white">building</span>, the <span
                class="text-white">house</span> is not <span class="text-white">flat<br /></span>and it has many sides.
        </h2>
    </div>

    {{-- slide 25 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <img src="{{ asset('assets/images/pptimages/r20.png') }}" />
        <h2 class="stroke title">The bottom of the house is in a shape of a rectangle.</h2>
        <p class="note">Note: Teacher can use two pieces of rectangles (paper/cardboards) to demonstrate.</p>
    </div>

    {{-- slide 26 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">When all the <span class="text-white">shapes</span> are places together, the<br />
            <span class="text-white">structure</span> of the <span class="text-white">house</span> is completed.
        </h2>
        <img src="{{ asset('assets/images/pptimages/r19.png') }}" />

    </div>


    {{-- slide 27 --}}
    <div class="flex flex-col justify-center  slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title !text-white stroke">Class Activity 2</h2>
            <img src="{{ asset('assets/images/pptimages/r21.png') }}" />
        </div>
        <div class="flex items-start">
            <h2 class="title stroke text-start !text-[48px]">Let's do:<br>Create the structure of a house!</h2>
        </div>

    </div>



    {{-- slide 28 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class="list-decimal list-inside ">
                <li>This side of the house looks like a square a triangle. Find a square and a triangle and put them together to form this.</li>

            </ul>
        </div>
         <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/pptimages/r48.png') }}" />
            <img src="{{ asset('assets/images/pptimages/r47.png') }}" />
        </div>
        <p class="note  text-center">Note: Teacher to guide children.</p>
    </div>




    {{-- slide 29 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class="list-decimal list-inside ">
                <li>2. Put two squares together to form a rectangle. Make two rectangles and put them together.</li>

            </ul>
        </div>
     <img src="{{ asset('assets/images/pptimages/r22.png') }}" />

        <p class="note  text-center">Note: Teacher to guide the children and assist them.</p>
    </div>


    
    {{-- slide 30 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class="list-decimal list-inside ">
                <li>3. Hold the rectangles up and attach it as shown below.</li>

            </ul>
        </div>
     <img src="{{ asset('assets/images/pptimages/r23.png') }}" />

        <p class="note  text-center">Note: Teacher to guide the children and assist them.</p>
    </div>


    
      {{-- slide 31 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class="list-decimal list-inside ">
                <li>4. Make another rectangle and form the base of the house like this</li>

            </ul>
        </div>
         <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/pptimages/r24.png') }}" />
            <img src="{{ asset('assets/images/pptimages/r25.png') }}" />
        </div>
        <p class="note  text-center">Note: Teacher to guide the children and assist them.</p>
    </div>

     
      {{-- slide 32 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class="list-decimal list-inside ">
                <li>5. Use another 4 square to form the side of the house.</li>

            </ul>
        </div>
         <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/pptimages/r27.png') }}" />
            <img src="{{ asset('assets/images/pptimages/r26.png') }}" />
        </div>
        <p class="note  text-center">Note: Teacher to guide the children and assist them.</p>
    </div>

     
      {{-- slide 33 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class="list-decimal list-inside ">
                <li>6. Use another square and triangle and complete the house.</li>

            </ul>
        </div>
         <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/pptimages/r28.png') }}" />
            <img src="{{ asset('assets/images/pptimages/r29.png') }}" />
        </div>
        <p class="note  text-center">Note: Teacher to guide the children and assist them.</p>
    </div>


    {{-- slide 34 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title"><span class="text-white">Structures</span> are made up of <span class="text-white">shapes</span>.</h2>
        <div class="flex ">
            <img src="{{ asset('assets/images/pptimages/r17.png') }}" class="w-[300px]" />

            <img src="{{ asset('assets/images/pptimages/r29.png') }}" class="w-[300px]" />
        </div>
    </div>


        {{-- slide 35 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
       <h2 class="stroke title">The <span class="text-white">structure</span> of the buildings can be created by building the <span class="text-white">structure</span> one side at a time.</h2>
        <div class="flex ">
            <img src="{{ asset('assets/images/pptimages/r17.png') }}" class="w-[300px]" />

            <img src="{{ asset('assets/images/pptimages/r29.png') }}" class="w-[300px]" />
        </div>
    </div>


        {{-- slide 36 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
      <h2 class="stroke title">Different pieces of <span class="text-white">shapes</span> can be combined to create different <span class="text-white">structures</span>.</h2>
        <div class="flex ">
            <img src="{{ asset('assets/images/pptimages/r17.png') }}" class="w-[300px]" />

            <img src="{{ asset('assets/images/pptimages/r29.png') }}" class="w-[300px]" />
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
                    window.location.href = "{{ route('Build-StructureSelection') }}";
                });
            }

            //  Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
