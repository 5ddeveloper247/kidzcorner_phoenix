@extends('layout.master')
@section('title', 'Dynamic Presentation')


@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Identifying Shapes</h2>

    {{-- slide 0 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">Children, do you remember these <span class="text-white">shapes</span>?</h2>
        <img src="{{ asset('assets/images/pptimages/cshapes.png') }}" class="w-img3" />
        <p class="note">Note: Guide children to share their answers.</p>
    </div>

    {{-- slide 1 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title stroke">These are <span class="text-white"> square</span>, <span
                    class="text-white">triangle</span> and <span class="text-white"> rectangle</span>
                </span>.</h2>
            <img src="{{ asset('assets/images/pptimages/cshapes.png') }}" class="w-img3" />
        </div>
        <p class="note">Note: Guide children to point out the <span class="text-white">shapes</span>.</p>
    </div>

    {{-- slide 2 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">These <span class="text-white">shapes</span> are formed by joining <span
                class="text-white">lines</span> together.</h2>

        <img src="{{ asset('assets/images/pptimages/gl9.png') }}" class="w-img3" />
    </div>

    {{-- slide 3 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">Look at these <span class="text-white">shapes</span>. What <span
                class="text-white">shape</span> are these?
        </h2>
        <img src="{{ asset('assets/images/pptimages/gl6.png') }}" class="w-img3" />
        <p class="note">Note: Guide children to share their answers.</p>
    </div>

    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">These are <span class="text-white">squares</span> of different sizes!</h2>
        <img src="{{ asset('assets/images/pptimages/gl6.png') }}" class="w-img3" />
        <p class="note">Note: Guide children to point out which is big and which is small.</p>
    </div>

    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">Look at these <span class="text-white">shapes</span>. What are they?</h2>
        <img src="{{ asset('assets/images/pptimages/gl7.png') }}" class="w-img3" />
        <p class="note">Note: Guide children to answer.</p>
    </div>

    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">These <span class="text-white">triangles</span> are of different types and sizes.</h2>
        <img src="{{ asset('assets/images/pptimages/gl7.png') }}" class="w-img3" />
        <p class="note">Note: Guide children to compare them.</p>
    </div>

    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">Each of them is formed using three <span class="text-white">lines</span>.</h2>
        <img src="{{ asset('assets/images/pptimages/gl7.png') }}" class="w-img3" />
        <p class="note">Note: Guide children to count the <span class="text-white">lines</span>.</p>
    </div>

    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">

        <img src="{{ asset('assets/images/pptimages/gl8.png') }}" class="w-img3" />
        <h2 class="title stroke"><span class="text-white">Rectangles</span> come in different sizes too.</h2>
        <p class="note">Note: Guide children to point out which is big and which is small.</p>
    </div>

    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <img src="{{ asset('assets/images/pptimages/gl8.png') }}" class="w-img3" />
        <h2 class="title stroke">Some are big and some are small.</h2>
        <p class="note">Note: Guide children to point out which is big and which is small.</p>
    </div>

    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <img src="{{ asset('assets/images/pptimages/s18.png') }}" class="large-img2" />
        <h2 class="title stroke">Look at these toys. Do you know what <span class="text-white">shapes</span> are they?</h2>
        <p class="note">Note: Encourage children to asnwer.</p>
    </div>


    {{-- slide 11 --}}
    <div class="flex flex-col justify-center  slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title !text-white stroke">Class Activity 1</h2>
            <img src="{{ asset('assets/images/pptimages/s18.png') }}" class="large-img2" />
        </div>
        <div class="flex items-start">
            <h2 class="title stroke text-start"><span class="text-white">Let's do:</span><br> Compare and sort out the
                magnetic tiles based on
                their shapes. </h2>
        </div>
    </div>

    {{-- slide 12 --}}
    <div class="flex flex-col  slide hidden h-[50vh] justify-between">
        <div class="title stroke text-start">
            <h2 class="!text-white">Let's do:</h2>
            <ul class="list-decimal   ">
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
            rectangles. But they are <span class="text-white">shapes</span> too.</h2>
        <img src="{{ asset('assets/images/pptimages/s17.png') }}" class="large-img2" />

    </div>

    {{-- slide 14 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">This is a <span class="text-white">circle</span>! It is formed with one <span
                class="text-white">curved line</span>.</h2>
        <img src="{{ asset('assets/images/pptimages/s16.png') }}" class="large-img2" />
        <p class="note">Note: Point out to the children that it has no straight <span class="text-white">lines</span>.</p>
    </div>

    {{-- slide 15 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">Some of these <span class="text-white">shapes</span> are formed by joining
            straight lines together.</h2>
        <img src="{{ asset('assets/images/pptimages/s15.png') }}" class="large-img2" />
        <p class="note">Note: Point out to the children that it has no straight <span class="text-white">lines</span>.
        </p>
    </div>


    {{-- slide 16 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">These <span class="text-white">shapes</span> are formed by putting <span
                class="text-white">curve</span> and
            straight <span class="text-white">lines</span> together.</h2>
        <img src="{{ asset('assets/images/pptimages/s8.png') }}" class="large-img2" />
    </div>

    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">A semi-circle is half a <span class="text-white">circle</span>. It is formed
            using a <span class="text-white">curve</span> and a straight <span class="text-white">line</span>.</h2>
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
        <h2 class="title stroke">This <span class="text-white">shape</span> is called a pie shape as it looks
            like a piece of a pie.</h2>
        <img src="{{ asset('assets/images/pptimages/s11.png') }}" class="large-img2" />
    </div>


    {{-- slide 21 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">Look at these shapes, do they look like bridges?</h2>
        <img src="{{ asset('assets/images/pptimages/s9.png') }}" class="large-img2" />
        <p class="note">Note: Point out to the children that it has no straight lines.</p>
    </div>



    {{-- slide 22 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">They are known as <span class="text-white">arches</span>. They looked like bridges going
            over a river.</h2>
        <img src="{{ asset('assets/images/pptimages/s10.png') }}" class="large-img2" />
    </div>


    {{-- slide 23 --}}
    <div class="flex flex-col justify-center  slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title stroke !text-white ">Class Activity 2</h2>
            <img src="{{ asset('assets/images/pptimages/s8.png') }}" class="large-img2" />
        </div>
        <div class="text-start">
            <h2 class="title stroke text-start"><span class="text-white">Let's do:</span><br> Match the shapes.
            </h2>
        </div>
    </div>

    {{-- slide  --}}
    <div class="flex flex-col justify-between h-[50vh]  slide hidden">
        <div class="title stroke text-start">
            <h2 class="!text-white">Let's do:</h2>
            <ol class="list-decimal">
                <li>Look at the magnetic tiles.</li>
                <li>Take one and match it to the mat labeled
                    with the picture of the same shape.</li>
            </ol>
        </div>
        <p class="note">Note: Encourage children to sort the pieces. It’s okay if children do not know the names.</p>
    </div>


    {{-- slide 24 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">Shapes can be formed using <span class="text-white">straight lines</span>
            and <span class="text-white">curve lines</span>. There are many different
            types of <span class="text-white">shapes</span>.</h2>
        <div class="flex ">
            <img src="{{ asset('assets/images/pptimages/s17.png') }}" class="large-img" />
            <img src="{{ asset('assets/images/pptimages/s18.png') }}" class="large-img" />

        </div>
    </div>




    {{-- ==================== --}}
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
