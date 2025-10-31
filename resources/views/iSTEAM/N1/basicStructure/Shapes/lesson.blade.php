@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- title --}}
    <h2 class="top-title stroke">Forming Shapes</h2>

    {{-- slide 0 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">Children, what do you see here?</h2>
        <img src="{{ asset('assets/images/pptimages/cshapes.png') }}" />
        <p class="note">Note: Guide children to share their answers.</p>
    </div>

    {{-- slide 1 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">

        <h2 class="title stroke">There is a square, triangle and a rectangle.</h2>
        <img src="{{ asset('assets/images/pptimages/cshapes.png') }}" />
        <p class="note">Note: Guide children to point out the shapes.</p>
    </div>

    {{-- slide 2 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Shapes can be formed using lines.</h2>

        <img src="{{ asset('assets/images/pptimages/cshapes.png') }}" />
    </div>

    {{-- slide 3 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">A Square is formed using <span class="text-white">4 straight lines</span> of the same
            length.
        </h2>
        <img src="{{ asset('assets/images/pptimages/box.png') }}" />
        <p class="note">Note: Point out to the children and count the lines together.</p>
    </div>

    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">A Square is formed when the lines join together.</h2>
        <img src="{{ asset('assets/images/pptimages/box2.png') }}" />
    </div>

    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">A triangle needs three lines.</h2>
        <img src="{{ asset('assets/images/pptimages/triangle.png') }}" />
        <p class="note">Note: Point out to the children and count the lines together.</p>
    </div>


    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">A triangle is formed when the three lines join together.</h2>
        <img src="{{ asset('assets/images/pptimages/triangle2.png') }}" />
        <p class="note">Note: Point out to the children on the parts where the lines are joined.</p>
    </div>

    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">A rectangle is formed using 5 straight lines too.</h2>
        <img src="{{ asset('assets/images/pptimages/rect3.png') }}" />
        <p class="note">Note: Point out to the children and count the lines together.</p>
    </div>

    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">A rectangle is formed using 5 straight
            lines too.</h2>
        <img src="{{ asset('assets/images/pptimages/rect3.png') }}" />
        <p class="note">Note: Point out to the children and count the lines together.</p>
    </div>

    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Two long lines and two short lines are
            used to form a rectangle.</h2>
        <img src="{{ asset('assets/images/pptimages/rect3.png') }}" />

    </div>

    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">This is another way of forming a rectangle.</h2>
        <img src="{{ asset('assets/images/pptimages/rect5.png') }}" />
        <p class="note">Note: Point out to the children that this is also a rectangle.</p>
    </div>


    {{-- slide 11 --}}
    <div class="flex flex-col justify-center  slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title !text-white stroke">Individual Activity 1</h2>
            <img src="{{ asset('assets/images/pptimages/shape2.png') }}" />
        </div>
        <div class="flex items-start">
            <h2 class="title stroke text-start">Let's try:<br> Form a shape using the materials.
            </h2>
        </div>
        <p class="note ">Note: Give each child a set of materials to carry out this activity</p>
    </div>

    {{-- slide 12 --}}
    <div class="flex flex-col items-center slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class="list-decimal list-inside ">
                <li>Let’s make a square..</li>
                <li>Take 4 ice cream sticks or 4 straws.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/shape3.png') }}" class="large-img2" />
        <p class="note  text-center">Note: Encourage children to count the pieces needed. Straws and ice cream sticks can be
            used.</p>
    </div>

    {{-- slide 13 --}}
    <div class="flex flex-col items-center slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class=" list-inside ">
                <li>3. Follow the steps below in arranging the
                    sticks/straws to form a square. Glue it on
                    your learning journal.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/shape2.png') }}" />
        <p class="note  text-center">Note: Encourage and guide the children.</p>
    </div>

    {{-- slide 14 --}}
    <div class="flex flex-col items-center slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class=" list-inside ">
                <li>4.Now take 3 ice cream sticks or straws.</li>
                <li>5. Follow the steps below and make a triangle Glue it on your learning journal.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/shape1.png') }}" />
        <p class="note  text-center">Note: Guide children in getting the pieces. They can mix as they do not need 3 pieces
            on the same length.</p>
    </div>


    {{-- slide 15 --}}
    <div class="flex flex-col  items-center slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class=" list-inside ">
                <li>6.Take 2 ice cream sticks and 2 straws to make rectangle.</li>
                <li>7. Follow the following and make a rectangle. Glue it on the journal.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/shape55.png') }}" />
        <p class="note  text-center">Note: Guide children in getting the pieces.</p>
    </div>

    {{-- slide 16 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke ">This is how these shapes are formed.</h2>
        <img src="{{ asset('assets/images/pptimages/shapess.png') }}" />

    </div>

    {{-- slide 17 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke ">Shapes can be formed putting lines together.</h2>
        <img src="{{ asset('assets/images/pptimages/cshapes.png') }}" />

    </div>

    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <h2 class="title stroke ">Learning Journal</h2>
        <div class="relative">
            <p class="absolute top-0 left-0">Create a square and paste it here.</p>
            <img src="{{ asset('assets/images/pptimages/dark4.png') }}" class="w-[900px]" />
        </div>
    </div>

    {{-- slide 19 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <h2 class="title stroke ">Learning Journal</h2>
        <div class="relative">
            <p class="absolute top-0 left-0">Create a triangle and paste it here.</p>
            <img src="{{ asset('assets/images/pptimages/dark4.png') }}" class="w-[900px]" />
        </div>
    </div>

    {{-- slide 20 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <h2 class="title stroke ">Learning Journal</h2>
        <div class="relative">
            <p class="absolute top-0 left-0">Create a rectangle and paste it here.</p>
            <img src="{{ asset('assets/images/pptimages/dark4.png') }}" class="w-[900px]" />
        </div>
    </div>
    
    {{-- Buttons --}}
    {{-- Complete/Done Butttom --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    
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
                    window.location.href = "{{ route('shapesSelection') }}";
                } else {
                    // Not first slide: go back
                    showSlide(currentIndex - 1);
                }
            });

            // Done button
            doneBtn.addEventListener("click", () => {
                window.location.href = "{{ route('shapesSelection') }}";
            });

            // Start at first slide
            showSlide(0);
        });
    </script>
@endpush
