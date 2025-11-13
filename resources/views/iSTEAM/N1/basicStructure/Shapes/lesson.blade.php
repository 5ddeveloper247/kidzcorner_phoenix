@extends('layout.master')
@section('title', 'Dynamic Presentation')



@section('content')

    {{-- title --}}
    <h2 class="top-title stroke">Forming Shapes</h2>

    {{-- slide 0 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">Children, what do you see here?</h2>
        <img src="{{ asset('assets/images/pptimages/cshapes.png') }}" class="img-xl" />
        <p class="note">Note: Guide children to share their answers.</p>
    </div>

    {{-- slide 1 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">

        <h2 class="title stroke">There is a <span class="!text-white">square</span>, <span class="!text-white">triangle</span>
            and a <span class="!text-white">rectangle</span>.</h2>
        <img src="{{ asset('assets/images/pptimages/cshapes.png') }}" class="img-xl" />
        <p class="note">Note: Guide children to point out the shapes.</p>
    </div>

    {{-- slide 2 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke"> <span class="!text-white">Shapes</span> can be formed using <span
                class="text-white">lines</span>.</h2>

        <img src="{{ asset('assets/images/pptimages/cshapes.png') }}" class="img-xl" />
    </div>

    {{-- slide 3 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">A <span class="!text-white">Square</span> is formed using 4 straight <span
                class="text-white">lines</span> of the same
            length.
        </h2>
        <img src="{{ asset('assets/images/pptimages/box.png') }}" class="img-lg" />
        <p class="note">Note: Point out to the children and count the <span class="!text-white">lines</span> together.</p>
    </div>

    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">A <span class="!text-white">Square</span> is formed when the <span
                class="text-white">lines</span> join together.</h2>
        <img src="{{ asset('assets/images/pptimages/box2.png') }}" class="img-lg" />
    </div>

    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">A <span class="!text-white">triangle</span> needs three <span
                class="text-white">lines</span>.</h2>
        <img src="{{ asset('assets/images/pptimages/triangle.png') }}" class="img-lg" />
        <p class="note">Note: Point out to the children and count the <span class="!text-white">lines</span> together.</p>
    </div>


    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">A <span class="!text-white">triangle</span> is formed when the <span
                class="text-white">three</span> lines join together.</h2>
        <img src="{{ asset('assets/images/pptimages/triangle2.png') }}" class="img-lg" />
        <p class="note">Note: Point out to the children on the parts where the <span class="!text-white">lines</span> are
            joined.</p>
    </div>

    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">A <span class="!text-white">rectangle</span> is formed using 4 straight <span
                class="text-white">lines</span> too.</h2>
        <img src="{{ asset('assets/images/pptimages/rect3.png') }}" class="img-lg" />
        <p class="note">Note: Point out to the children and count the <span class="!text-white">lines</span> together.</p>
    </div>

    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">A <span class="!text-white">rectangle</span> is formed using 4 straight
            <span class="!text-white">lines</span> too.
        </h2>
        <img src="{{ asset('assets/images/pptimages/rect3.png') }}" class="img-lg" />
        <p class="note">Note: Point out to the children and count the <span class="!text-white">lines</span> together.</p>
    </div>

    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Two long <span class="!text-white">lines</span> and two short <span
                class="text-white">lines</span> are
            used to form a <span class="!text-white">rectangle</span>.</h2>
        <img src="{{ asset('assets/images/pptimages/rect3.png') }}" class="img-lg" />

    </div>

    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">This is another way of forming a <span class="!text-white">rectangle</span>.</h2>
        <img src="{{ asset('assets/images/pptimages/rect5.png') }}" class="img-lg" />
        <p class="note">Note: Point out to the children that this is also a <span class="!text-white">rectangle</span>.</p>
    </div>


    {{-- slide 11 --}}
    <div class="flex flex-col justify-center  slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title !text-white stroke">Individual Activity 1</h2>
            <img src="{{ asset('assets/images/pptimages/shape2.png') }}" class="img-xl" />
        </div>
        <div class="flex items-start">
            <h2 class="title stroke text-start"> <span class="!text-white">Let's try:</span><br> Form a shape using the
                materials.
            </h2>
        </div>
        <p class="note ">Note: Give each child a set of materials to carry out this activity</p>
    </div>

    {{-- slide 12 --}}
    <div class="flex flex-col items-center slide hidden h-[50vh] justify-between">
        <div class="title stroke text-start">
            <h2 class="!text-white">let's do:</h2>
            <ul class="list-decimal space-y-3">
                <li>Let’s make a square..</li>
                <li>Take 4 ice cream sticks or 4 straws.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/shape3.png') }}" class="img-sm" />
        <p class="note  text-center">Note: Encourage children to count the pieces needed. Straws and ice cream sticks can be
            used.</p>
    </div>

    {{-- slide 13 --}}
    <div class="flex flex-col items-center slide hidden h-[50vh] justify-between">
        <div class="title stroke text-start">
            <h2 class="!text-white">let's do:</h2>
            <ol class="list-decimal " start="3">
                <li>Follow the steps below in arranging the
                    sticks/straws to form a square. Glue it on
                    your learning journal.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/pptimages/shape2.png') }}" class="img-xl" />
        <p class="note  text-center">Note: Encourage and guide the children.</p>
    </div>

    {{-- slide 14 --}}
    <div class="flex flex-col items-center slide hidden h-[50vh] justify-between">
        <div class="title stroke text-start">
            <h2 class="!text-white">let's do:</h2>
            <ol class="list-decimal space-y-3" start="4">
                <li>Now take 3 ice cream sticks or straws.</li>
                <li> Follow the steps below and make a triangle Glue it on your learning journal.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/pptimages/shape1.png') }}" class="img-xl" />
        <p class="note  text-center">Note: Guide children in getting the pieces. They can mix as they do not need 3 pieces
            on the same length.</p>
    </div>


    {{-- slide 15 --}}
    <div class="flex flex-col  items-center slide hidden h-[50vh] justify-between">
        <div class="title stroke text-start">
            <h2 class="!text-white">let's do:</h2>
            <ol class="list-decimal space-y-3" start="5">
                <li>Take 2 ice cream sticks and 2 straws to make rectangle.</li>
                <li> Follow the following and make a rectangle. Glue it on the journal.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/pptimages/shape55.png') }}" class="img-xl" />
        <p class="note  text-center">Note: Guide children in getting the pieces.</p>
    </div>

    {{-- slide 16 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke ">This is how these <span class="!text-white">shapes</span> are formed.</h2>
        <img src="{{ asset('assets/images/pptimages/shapess.png') }}" class="img-xl" />

    </div>

    {{-- slide 17 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke "> <span class="!text-white">Shapes</span> can be formed putting <span
                class="text-white">lines</span> together.</h2>
        <img src="{{ asset('assets/images/pptimages/cshapes.png') }}" class="img-xl" />

    </div>

    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <h2 class="title stroke ">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center text-start text-[1.2vw]"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>Create asquare and paste it here.</p>

        </div>
    </div>

    {{-- slide 19 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <h2 class="title stroke ">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center text-start text-[1.2vw]"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>Create atriangle and paste it here.</p>

        </div>
    </div>

    {{-- slide 20 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <h2 class="title stroke ">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center text-start text-[1.2vw]"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>Create arectangle and paste it here.</p>

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
                window.location.href = "{{ route('basicStructure') }}";
            });

            // Start at first slide
            showSlide(0);
        });
    </script>
@endpush
