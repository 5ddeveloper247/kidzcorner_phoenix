@extends('layout.master')
@section('title', 'Dynamic Presentation')


@section('content')
    {{-- title --}}
    <h2 class="title !text-[3vw] top-title stroke absolute top-[5vh] z-[100]">Identifying Shapes</h2>

    {{-- slide 0 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">Children, do you remember these shapes?</h2>
        <img src="{{ asset('assets/images/pptimages/cshapes.png') }}" />
        <p class="note">Note: Guide children to share their answers.</p>
    </div>

    {{-- slide 1 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title stroke">These are <span class="text-white"> square</span>, <span
                    class="text-white">triangle</span> and <span class="text-white"> rectangle</span>
                </span>.</h2>
            <img src="{{ asset('assets/images/pptimages/cshapes.png') }}" />
        </div>
        <p class="note">Note: Guide children to point out the shapes.</p>
    </div>

    {{-- slide 2 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">These shapes are formed by joining lines together.</h2>

        <img src="{{ asset('assets/images/pptimages/gl9.png') }}" />
    </div>

    {{-- slide 3 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">Look at these shapes. What shape are these?
        </h2>
        <img src="{{ asset('assets/images/pptimages/gl6.png') }}" />
        <p class="note">Note: Guide children to share their answers.</p>
    </div>

    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">These are squares of different sizes!</h2>
        <img src="{{ asset('assets/images/pptimages/gl6.png') }}" />
        <p class="note">Note: Guide children to point out which is big and which is small.</p>
    </div>

    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">Look at these shapes. What are they?</h2>
        <img src="{{ asset('assets/images/pptimages/gl7.png') }}" />
        <p class="note">Note: Guide children to answer.</p>
    </div>

    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">These triangles are of different types and sizes.</h2>
        <img src="{{ asset('assets/images/pptimages/gl7.png') }}" />
        <p class="note">Note: Guide children to compare them.</p>
    </div>

    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">Each of them is formed using three lines.</h2>
        <img src="{{ asset('assets/images/pptimages/gl7.png') }}" />
        <p class="note">Note: Guide children to count the lines.</p>
    </div>

    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">

        <img src="{{ asset('assets/images/pptimages/gl8.png') }}" />
        <h2 class="title stroke">Rectangles come in different sizes too.</h2>
        <p class="note">Note: Guide children to point out which is big and which is small.</p>
    </div>

    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <img src="{{ asset('assets/images/pptimages/gl8.png') }}" />
        <h2 class="title stroke">Some are big and some are small.</h2>
        <p class="note">Note: Guide children to point out which is big and which is small.</p>
    </div>

    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <img src="{{ asset('assets/images/pptimages/s18.png') }}"  class="large-img2" />
        <h2 class="title stroke">Look at these toys. Do you know what shapes are they?</h2>
        <p class="note">Note: Encourage children to asnwer.</p>
    </div>


    {{-- slide 11 --}}
    <div class="flex flex-col justify-center  slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title !text-white stroke">Class Activity 1</h2>
            <img src="{{ asset('assets/images/pptimages/s18.png') }}"  class="large-img2" />
        </div>
        <div class="flex items-start">
            <h2 class="title stroke text-start">Let's do:<br> Compare and sort out the magnetic tiles based on
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
        <h2 class="title stroke">Look at these. There are not squares, triangles or
            rectangles. But they are shapes too.</h2>
        <img src="{{ asset('assets/images/pptimages/s17.png') }}"  class="large-img2" />

    </div>

    {{-- slide 14 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">This is a circle! It is formed with one curved line.</h2>
        <img src="{{ asset('assets/images/pptimages/s16.png') }}"  class="large-img2" />
        <p class="note">Note: Point out to the children that it has no straight lines.</p>
    </div>

    {{-- slide 15 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">Some of these shapes are formed by joining
            straight lines together.</h2>
        <img src="{{ asset('assets/images/pptimages/s15.png') }}"  class="large-img2"/>
        <p class="note">Note: Point out to the children that it has no straight lines.</p>
    </div>

    {{-- slide 16 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">These shapes are formed by putting curve and
            straight lines together.</h2>
        <img src="{{ asset('assets/images/pptimages/s8.png') }}" class="large-img2" />
    </div>

    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">A semi-circle is half a circle. It is formed
            using a curve and a straight line.</h2>
        <img src="{{ asset('assets/images/pptimages/s13.png') }}" class="large-img2" />
    </div>

    {{-- slide 19 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">This is a quadrant. It is half semi-circle..</h2>
        <img src="{{ asset('assets/images/pptimages/s12.png') }}" class="large-img2" />
        <p class="note">Note: Teacher to use the tiles to show children when two quadrants are put together
            it forms a semi circle.</p>
    </div>

    {{-- slide 20 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">This shape is called a pie shape as it looks
            like a piece of a pie.</h2>
        <img src="{{ asset('assets/images/pptimages/s11.png') }}"  class="large-img2"/>
    </div>


    {{-- slide 21 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">Look at these shapes, do they look like bridges?</h2>
        <img src="{{ asset('assets/images/pptimages/s9.png') }}"  class="large-img2" />
        <p class="note">Note: Point out to the children that it has no straight lines.</p>
    </div>



    {{-- slide 22 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">They are known as arches. They looked like bridges going over a river.</h2>
        <img src="{{ asset('assets/images/pptimages/s10.png') }}"  class="large-img2" />
    </div>


    {{-- slide 23 --}}
    <div class="flex flex-col justify-center  slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title stroke !text-white stroke">Class Activity 2</h2>
            <img src="{{ asset('assets/images/pptimages/s8.png') }}" class="large-img2" />
        </div>
        <div class="flex items-start">
            <h2 class="title stroke stroke text-start">Let's do:<br> Match the shapes.</h2>
        </div>

    </div>


    {{-- slide 24 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">Shapes can be formed using straight lines
            and curve lines. There are many different
            types of shapes.</h2>
        <div class="flex ">
            <img src="{{ asset('assets/images/pptimages/s17.png') }}"  class="large-img" />
            <img src="{{ asset('assets/images/pptimages/s18.png') }}"  class="large-img"/>

        </div>
    </div>


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
                    window.location.href = "{{ route('identifyShapesSelection') }}";
                } else {
                    // Not first slide: go back
                    showSlide(currentIndex - 1);
                }
            });

            // Done button
            doneBtn.addEventListener("click", () => {
                window.location.href = "{{ route('identifyShapesSelection') }}";
            });

            // Start at first slide
            showSlide(0);
        });
    </script>
@endpush
