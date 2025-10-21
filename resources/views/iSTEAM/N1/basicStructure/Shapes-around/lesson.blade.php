@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="title !text-[3vw] top-title stroke absolute top-[5vh] z-[100]">Shapes Around Us</h2>

    {{-- slide 0 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Develop awareness that all things have shapes and structures; explore and create different
            structures using shapes.</h2>
        <img src="{{ asset('assets/images/pptimages/gl10.png') }}">
        <p class="note">Note: Recap with children the shapes used.</p>
    </div>


    {{-- slide 1 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">This is a van created using the<br />squares and circles.</h2>

        <img src="{{ asset('assets/images/pptimages/s4.png') }}" class="large-img2" />

        <p class="note">Note: Encourage the children share what do they see.</p>
    </div>

    {{-- slide 2 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">These shapes form the outline of a van,<br />like a drawing of a van on a piece of paper.
        </h2>

        <img src="{{ asset('assets/images/pptimages/s4.png') }}" class="large-img2" />
    </div>


    {{-- slide 3 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title">This image is two-dimensional, it is flat. </h2>
        <img src="{{ asset('assets/images/pptimages/s4.png') }}" class="large-img2" />
        <p class="note">Note: Guide children to share their answers.</p>
    </div>

    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">A van is not <span class="text-white">flat</span>, it is three dimensional.<br />It takes
            up space and things can be placed in it.</h2>
        <img src="{{ asset('assets/images/pptimages/r30.png') }}" />
        <p class="note">Note: Guide children to point out which is big and which is small.</p>
    </div>

    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">Look at this gift box. What <span class="text-white">shape</span> do you see?</h2>
        <img src="{{ asset('assets/images/pptimages/r31.png') }}" class="large-img2" />
        <p class="note">Note: Encourage children to answer.</p>
    </div>

    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">It looks like a<span class="text-white"> square!</span></h2>
        <img src="{{ asset('assets/images/pptimages/gl11.png') }}">
    </div>

    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">But this gift box is not <span class="text-white">flat</span>.</h2>
        <img src="{{ asset('assets/images/pptimages/gl11.png') }}">
    </div>


    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title">The gift box takes up space and it has many sides.</h2>
        <img src="{{ asset('assets/images/pptimages/r33.png') }}" class="large-img2" />
    </div>

    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">

        <img src="{{ asset('assets/images/pptimages/B-box.png') }}" class="large-img2" />

        <h2 class="title">Each side of the giftbox is like a square! Let’s count how many squares are needed.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>

    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <img src="{{ asset('assets/images/pptimages/B-box.png') }}" class="large-img2" />
        <h2 class="title">The gift box has 6 sides.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- slide 11 --}}
    <div class="flex flex-col justify-center  slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title !text-white stroke">individual Activity 1</h2>
            <img src="{{ asset('assets/images/pptimages/r32.png') }}" class="large-img" />
        </div>
        <div class="flex items-start">
            <h2 class="title stroke text-start ">Let's do:<br> Let’s make a box! </h2>
        </div>
        <p class="note">Note: Teacher to pack 6 pieces of square tiles for each child and work in small groups.</p>
    </div>

    {{-- slide 13 --}}
    <div class="flex flex-col items-center  slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class="list-decimal list-inside ">
                <li>Put three square tiles like this.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/r34.png') }}" class="large-img2" />
        <p class="note  text-center">Note: Teacher will demonstrate this in class with a real box.</p>
    </div>



    {{-- slide 14 --}}
    <div class="flex flex-col items-center  slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class="list-decimal list-inside ">
                <li>2. Lift up the two squares at the side and let them stick together.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/r35.png') }}" class="large-img2" />
        <p class="note  text-center">Note: Teacher to guide the children and assist them.</p>
    </div>

    {{-- slide 15 --}}
    <div class="flex flex-col items-center slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class="list-decimal list-inside ">
                <li>3. Attach one square tile on the side as shown below.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/r36.png') }}" class="large-img2" />
        <p class="note  text-center">Note: Teacher to guide the children and assist them.</p>
    </div>

    {{-- slide 16 --}}
    <div class="flex flex-col items-center slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class="list-decimal list-inside ">
                <li>4. Place one more square tile on the other side.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/r37.png') }}" class="large-img2" />
        <p class="note  text-center">Note: Teacher to guide the children and assist them. You may wish to prepare
            the 6 pieces of square this beforehand.</p>
    </div>

    {{-- slide 17 --}}
    <div class="flex flex-col items-center slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class="list-decimal list-inside ">
                <li>5. Attach one square tile on the top to complete the box.</li>
                <li>6. The structure the box is completed.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/r38.png') }}" class="large-img2" />
        <p class="note  text-center">Note: Teacher to guide the children and assist them.</p>
    </div>


    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">When pieces of <span class="text-white">shapes</span> are placed together like
            this,<br />a
            <span class="text-white">structure</span> of a box is created.
        </h2>
        <img src="{{ asset('assets/images/pptimages/r39.png') }}" class="large-img2" />
    </div>


    {{-- slide 19 --}}

    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">This <span class="text-white">structure</span> is not flat!<br />It is three dimensional
            just like the box.</h2>
        <img src="{{ asset('assets/images/pptimages/r39.png') }}" class="large-img2" />
    </div>


    {{-- slide 20 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">Look at these <span class="text-white">structures</span>. They are not <span
                class="text-white">flat</span>!</h2>
        <img src="{{ asset('assets/images/pptimages/r40.png') }}" class="large-img2" />
    </div>

    {{-- slide 19 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title">Three dimensional structures can be created by stacking the magnetic tiles together or attaching
            them on the sides.</h2>
        <img src="{{ asset('assets/images/pptimages/r40.png') }}" />

    </div>

    {{-- slide 20 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">When different pieces are attached together,<br />different three dimensional <span
                class="text-white">structures</span> can be created.</h2>
        <img src="{{ asset('assets/images/pptimages/r40.png') }}" />
    </div>


    {{-- slide 21 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">Look at these <span class="text-white">structures</span>! <br />Can you see what <span
                class="text-white">shapes</span> are used?</h2>
        <img src="{{ asset('assets/images/pptimages/r40.png') }}" />
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>



    {{-- slide 22 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">This is like a<span class="text-white"> pyramid</span>.</h2>
        <img src="{{ asset('assets/images/pptimages/r41.png') }}" />
        <p class="note">Note: Point out how the shape looks like the pyramid in the photo.</p>
    </div>

    {{-- sldie 23 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">Does this look like a slice of a <span class="text-white">watermelon</span>?</h2>
        <img src="{{ asset('assets/images/pptimages/r42.png') }}" />
        <p class="note">Note: Point out how the shape looks like the watermelon in the photo.</p>
    </div>

    {{-- slide 24 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">The stack of square tiles is like a<span class="text-white"> container</span>.</h2>
        <img src="{{ asset('assets/images/pptimages/r43.png') }}" />
        <p class="note">Note: Point out how the shape looks like the container in the photo.</p>
    </div>

    {{-- slide 25 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">This one looks like an ice cream cone.</h2>
        <img src="{{ asset('assets/images/pptimages/r44.png') }}" />
        <p class="note">Note: Point out how the shape looks like the ice cream in the photo.</p>
    </div>


    {{-- slide 26 --}}
    <div class="flex flex-col justify-center  slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title !text-white stroke">Class Activity 2</h2>
            <img src="{{ asset('assets/images/pptimages/r40.png') }}" class="large-img2" />
        </div>
        <div class="flex items-start">
            <h2 class="title stroke text-start ">Let's do:<br>Create a structure using the magnetic tiles.</h2>
        </div>
        <p class="note">Note: Encourage children to explore how the tiles can be attached to create different structures.
            There is no right or wrong creations, encourage children to explore and work on the materials freely.</p>

    </div>


    {{-- slide 27 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class="list-decimal list-inside ">
                <li>Choose the magnetic tiles and work with them.</li>
                <li>Try stacking and attaching the magnetic tiles together</li>
                <li>Explore different ways to putting the tiles together.</li>
                <li>. Present the creation to the class.</li>

            </ul>

        </div>
        <p class="note  text-center">Note: Encourage children to play with the tiles and create any structures they like.
            Teachers can provide suggestions to children if they don't know what to make,suggest building vehicles/animals/
            house ete something familiar to them.</p>
    </div>

    {{-- slide 28 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Suggested questions for presentation:</h2>
            <ul class="list-decimal list-inside ">
                <li>What have you created?</li>
                <li>What shapes did you use?</li>
                <li>Was it easy to make the structure? Was it fun?</li>
            </ul>

        </div>
        <p class="note  text-center">Note: Guided questions to help the children present their creations.</p>
    </div>



    {{-- slide 29 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Images are two dimensional and they are flat.</h2>
        <img src="{{ asset('assets/images/pptimages/gl10.png') }}" />

    </div>

    {{-- slide 30 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Things around us are not flat.They are three dimensional and they take up space.</h2>
        <div class="flex">

            <img src="{{ asset('assets/images/pptimages/r33.png') }}" class="large-img" />
            <img src="{{ asset('assets/images/pptimages/r30.png') }}" class="large-img" />
        </div>
    </div>


    {{-- slide 31 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Everything around us has a structure.</h2>
        <img src="{{ asset('assets/images/pptimages/r45.png') }}" />
    </div>

    {{-- slide 32 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="stroke title"><span class="text-white">Structures</span> are made up of <span
                class="text-white">shapes</span>.</h2>

        <img src="{{ asset('assets/images/pptimages/r46.png') }}" />
    </div>




    {{-- Complete/Done Butttom --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    {{-- Buttons --}}
    <div id="buttons" class="absolute right-[60px] flex flex-row gap-6 ">

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
                    window.location.href = "{{ route('Shape-aroundSelection') }}";
                } else {
                    // Not first slide: go back
                    showSlide(currentIndex - 1);
                }
            });

            // Done button
            doneBtn.addEventListener("click", () => {
                window.location.href = "{{ route('Shape-aroundSelection') }}";
            });

            // Start at first slide
            showSlide(0);
        });
    </script>
@endpush
