@extends('layout.master')

@section('title', 'Dynamic Presentation')


@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Shapes and Structures</h2>

    {{-- slide 0 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">Children, do you remember how were these <span class="!text-white">shapes</span> formed?</h2>
        <img src="{{ asset('assets/images/pptimages/cshapes.png') }}" class="!max-w-[52vw]" />
        <p class="note">Note: Guide children to share their answers.</p>
    </div>

    {{-- slide 1 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">These <span class="!text-white">shapes</span> are formed by joining <span
                class="text-white">lines</span> together.</h2>
        <img src="{{ asset('assets/images/pptimages/gl9.png') }}" class="img-xl" />
    </div>

    {{-- slide 2 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">When the ice cream sticks are joined together,it formed a <span
                class="text-white">structure</span> in the <span class="!text-white">shape</span> of a
            <span class="!text-white">square.</span>
        </h2>
        <img src="{{ asset('assets/images/pptimages/shape2.png') }}" class="img-xl" />
    </div>

    {{-- slide 3 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">Similarly, the ice cream sticks and straws were joined together to form the triangular and
            rectangular <span class="!text-white">structures</span>. </h2>
        <img src="{{ asset('assets/images/pptimages/s1.png') }}" class="img-xl" />
    </div>

    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">The <span class="!text-white">structure</span> of an object gives its <span
                class="text-white">shapes</span>.</h2>
        <img src="{{ asset('assets/images/pptimages/s5.png') }}" class="img-xl" />
        <p class="note">Note: Teacher can explain that ice cream sticks and straws were used to make the strcutures.</p>
    </div>

    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">Look at these magnetics tiles, they are <span class="!text-white">structure</span> of
            different <span class="!text-white">shapes</span> too.</h2>
        <div class="flex gap-[2vw] ">
            <img src="{{ asset('assets/images/pptimages/s18.png') }}" class="img-md img-normal-md" />
            <img src="{{ asset('assets/images/pptimages/s17.png') }}" class="img-md img-normal-md" />
        </div>

    </div>

    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke"><span class="!text-white">Shapes</span> can be used to create images.What do you think this
            is?</h2>
        <img src="{{ asset('assets/images/pptimages/s2.png') }}" class="img-md" />
        <p class="note">Note: Encourage the children to share their answers.</p>
    </div>

    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">This is a house! It can be made using one <span class="!text-white">square </span> one <span
                class="text-white">triangle.</span></h2>
        <img src="{{ asset('assets/images/pptimages/s2.png') }}" class="img-md" />
    </div>

    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">

        <h2 class="title stroke">Look at this house. What <span class="!text-white">shapes</span> are needed to make it?</h2>
        <img src="{{ asset('assets/images/pptimages/s3.png') }}" class="img-md" />
        <p class="note">Note: Encourage the children to identify and point out the <span class="!text-white">shapes</span>.
        </p>
    </div>

    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">A bigger house can be created by putting more <span class="!text-white">triangles</span> and
            <span class="!text-white">squares</span> together.
        </h2>
        <img src="{{ asset('assets/images/pptimages/s3.png') }}" class="img-md" />
    </div>

    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">What is this? What <span class="!text-white">shapes</span> do you see?</h2>
        <img src="{{ asset('assets/images/pptimages/s4.png') }}" class="img-md" />
        <p class="note">Note: Encourage the children share what do they see.</p>
    </div>


    {{-- slide 11 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">This is a van! It is made up of <span class="!text-white">squares</span> and <span
                class="text-white">circles</span>.</h2>
        <img src="{{ asset('assets/images/pptimages/s4.png') }}" class="img-md" />
        <p class="note">Note: guide the children to identify the <span class="!text-white">shapes</span>.</p>
    </div>


    {{-- slide 12 --}}
    <div class="flex flex-col justify-center items-center  slide hidden">

        <h2 class="title !text-white stroke">Individual Activity 1</h2>

        <div class="flex gap-[2vw]">
            <img src="{{ asset('assets/images/pptimages/s17.png') }}" class="img-md img-normal-md" />
            <img src="{{ asset('assets/images/pptimages/s18.png') }}" class="img-md img-normal-md" />
        </div>
        <div class="flex items-start">
            <h2 class="title stroke text-start"><span class="!text-white">Let's do:</span><br> Match the shapes on the
                template and create an image.</h2>
        </div>

    </div>

    {{-- slide 13 --}}
    <div class="flex flex-col  slide hidden h-[50vh] justify-between">
        <div class="title stroke text-start">
            <h2 class="text-white">let's do:</h2>
            <ul class="list-decimal pl-8">
                <li>Take one template image.</li>
                <li>Find the matching magnetic tiles and place them on the template sheet.</li>
                <li>Show it to the teacher when you are done.</li>
            </ul>

        </div>
        <p class="note  text-center">Note: Teacher to prepare the templates before lesson. Encourage children to identify
            the <span class="!text-white">shapes</span>
            of the magnetic tiles needed in the template image.</p>
    </div>


    {{-- slide 14 --}}
    <div class="flex flex-col items-center justify-center items-center slide hidden ">
        <div class="flex gap-[2vw]">
            <img src="{{ asset('assets/images/pptimages/s7.png') }}" class="img-sm"  />
            <img src="{{ asset('assets/images/pptimages/s6.png') }}" class="img-sm" />
        </div>
        <h2 class="title stroke">Many other images can be created by using the <span class="!text-white">shapes</span>.
        </h2>
        <p class="note  text-center">Note: Point out the images created above.</p>

    </div>

    {{-- slide 15 --}}
    <div class="flex flex-col justify-center items-center slide hidden ">
        <h2 class="title !text-white stroke">Individual Activity 2</h2>
        <div class="flex gap-[2vw]">
            <img src="{{ asset('assets/images/pptimages/s17.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/pptimages/s18.png') }}" class="img-sm" />
        </div>
        <div class="flex items-start">
            <h2 class="title stroke text-start"><span class="!text-white">Let's do:</span><br> Use the shapes and create an
                image of something
                you like.</h2>
        </div>
        <p class="note  text-center">Note: Give the each child a set of materials to carry out this activity.</p>
    </div>


    {{-- slide 16 --}}
    <div class="flex flex-col slide hidden justify-between h-[50vh]">
        <div class="title stroke text-start">
            <h2 class="text-white">let's do:</h2>
            <ul class="list-decimal pl-6">
                <li>Think of an animal, building, vehicles or even a person that you would like to make.</li>
                <li>Take the tiles and arrange them on the blank mat.</li>
                <li>Start creating from the top to the bottom.</li>
                <li>Present your creation to the class. Tell your friends what have you made.</li>
            </ul>

        </div>
        <p class="note  text-center">Note: Encourage children to use the shapes as they
            like and guide them to create the
            image they want. Provide a variety of shapes for the children to work with. If
            children are unable,
            teacher can use the shape templates to inspire children to create something
            similar. Teachers may take photos of
            the children's creations.</p>
    </div>



    {{-- slide 17 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">When <span class="!text-white">lines</span> are put together, they form a <span
                class="text-white">structure</span>. The <span class="!text-white">structure</span>s can be of different
            <span class="!text-white">shapes</span>.
        </h2>
        <img src="{{ asset('assets/images/pptimages/s5.png') }}" class="img-xl" />
    </div>



    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">The <span class="!text-white">structure</span> of an object gives it its <span
                class="text-white">shape</span>.</h2>
        <img src="{{ asset('assets/images/pptimages/s5.png') }}" class="img-xl" />
        <p class="note  text-center">Note: Teacher can explain that ice cream sticks and straws were used to make the
            <span class="!text-white">structure</span>s.
        </p>
    </div>

    {{-- slide 19 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <div class="flex gap-[2vw]">
            <img src="{{ asset('assets/images/pptimages/s7.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/pptimages/s6.png') }}" class="img-sm" />
        </div>
        <h2 class="title stroke">When <span class="!text-white">shapes</span> are put together, different images can be
            created.</h2>

    </div>



    {{-- ===================== --}}
    {{-- Complete/Done Butttom --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    {{-- Buttons --}}
    <div id="buttons" class="absolute  flex flex-row ">

        <!-- Return Button -->
        <a id="returnButton">
            <img src="{{ asset('assets/images/pptimages/return.png') }}" />
        </a>

        <!-- Home Button -->
        <button id="homeButton">
            <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
        </button>

        <!-- Close Button -->
        <button id="closeButton">
            <img src="{{ asset('assets/images/pptimages/cancel.png') }}" />
        </button>

    </div>

    {{-- next Button --}}
    <div class="down-btn-container">

        <button class="nextButton">
            <img src="{{ asset('assets/images/pptimages/next-btn.png') }}" />
        </button>
    </div>
@endsection



@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // Get all elements
            const slides = document.querySelectorAll(".slide");
            const nextBtn = document.querySelector(".nextButton");
            const returnBtn = document.getElementById("returnButton");
            const doneBtn = document.querySelector(".doneButton");

            // Current slide position
            let currentIndex = 0;

            // Show slide and update buttons
            function showSlide(index) {
                // Hide all slides
                slides.forEach(slide => slide.classList.add("hidden"));

                // Show current slide
                slides[index].classList.remove("hidden");

                // Update index
                currentIndex = index;

                // Check if last slide
                const isLastSlide = (index === slides.length - 1);

                if (isLastSlide) {
                    // Last slide: hide Next, show Done
                    nextBtn.style.display = "none";
                    doneBtn.style.display = "block";
                } else {
                    // Not last slide: show Next, hide Done
                    nextBtn.style.display = "block";
                    doneBtn.style.display = "none";
                }
            }

            // Next button
            nextBtn.addEventListener("click", () => {
                if (currentIndex < slides.length - 1) {
                    showSlide(currentIndex + 1);
                }
            });

            // Return button
            returnBtn.addEventListener("click", () => {
                if (currentIndex === 0) {
                    // On first slide: redirect to route
                    window.location.href = "{{ route('Shapes-StructureSelection') }}";
                } else {
                    // Not first slide: go back
                    showSlide(currentIndex - 1);
                }
            });

            // Done button
            doneBtn.addEventListener("click", () => {
                window.location.href = "{{ route('basicStructure') }}";
            });

            // Start at first slide
            showSlide(0);
        });
    </script>
@endpush
