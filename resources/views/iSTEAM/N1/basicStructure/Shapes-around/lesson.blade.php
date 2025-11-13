@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Shapes Around Us</h2>

    {{-- slide 0 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Develop awareness that all things have <span class="!text-white">shapes</span> and structures;
            explore and create different
            structures using <span class="!text-white">shapes</span>.</h2>
        <img src="{{ asset('assets/images/pptimages/gl10.png') }}" class="img-xl">
        <p class="note">Note: Recap with children the shapes used.</p>
    </div>


    {{-- slide 1 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">This is a van created using the <span class="!text-white">squares</span> and <span
                class="text-white">circles</span>.</h2>

        <img src="{{ asset('assets/images/pptimages/s4.png') }}" class="img-md" />

        <p class="note">Note: Encourage the children share what do they see.</p>
    </div>

    {{-- slide 2 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">These <span class="!text-white">shapes</span> form the outline of a van, like a drawing
            of a van on a piece of paper.
        </h2>

        <img src="{{ asset('assets/images/pptimages/s4.png') }}" class="img-md" />
    </div>


    {{-- slide 3 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">This image is two-dimensional, it is <span class="!text-white">flat</span>. </h2>
        <img src="{{ asset('assets/images/pptimages/s4.png') }}" class="img-md" />
        <p class="note">Note: Guide children to share their answers.</p>
    </div>

    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">A van is not <span class="!text-white">flat</span>, it is three dimensional. It takes
            up space and things can be placed in it.</h2>
        <img src="{{ asset('assets/images/pptimages/r30.png') }}" class="img-md" />
        <p class="note">Note: Guide children to point out which is big and which is small.</p>
    </div>

    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">Look at this gift box. What <span class="!text-white">shape</span> do you see?</h2>
        <img src="{{ asset('assets/images/pptimages/r31.png') }}" class="img-md" />
        <p class="note">Note: Encourage children to answer.</p>
    </div>

    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">It looks like a <span class="!text-white">square!</span></h2>
        <img src="{{ asset('assets/images/pptimages/gl11.png') }}" class="img-lg">
    </div>

    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">But this gift box is not <span class="!text-white">flat</span>.</h2>
        <img src="{{ asset('assets/images/pptimages/gl11.png') }}" class="img-lg">
    </div>


    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">The gift box takes up space and it has many sides.</h2>
        <img src="{{ asset('assets/images/pptimages/r33.png') }}" class="img-md img-normal-md" />
    </div>

    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">

        <video id="video1" class=" pointer-events-none">
            <source src="{{ asset('assets/images/pptimages/1.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="stroke title">Each side of the giftbox is like a <span class="!text-white">square</span>! Let’s count how
            many <span class="!text-white">squares</span> are needed.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <video id="video2" class=" pointer-events-none">
            <source src="{{ asset('assets/images/pptimages/1.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="stroke title">The gift box has 6 sides.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 11 --}}
    <div class="flex flex-col justify-center  slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title !text-white stroke">individual Activity 1</h2>
            <img src="{{ asset('assets/images/pptimages/r32.png') }}" class="img-md img-normal-md" />
        </div>
        <div class="flex flex-col items-start">
            <h2 class="title stroke text-start "><span class="!text-white">Let's do:</span><br> Let’s make a box! </h2>
            <p class="note">Note: Teacher to pack 6 pieces of <span class="!text-white">square</span> tiles for each child
                and work in small groups.</p>
        </div>
    </div>

    {{-- slide 13 --}}
    <div class="flex flex-col items-center  slide hidden">
        <div class="title stroke text-start">
            <h2 class="!text-white">let's do:</h2>
            <ol class="lesson-ul list-decimal">
                <li>Put three square tiles like this.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/pptimages/r34.png') }}" class="img-md" />
        <p class="note  text-center">Note: Teacher will demonstrate this in class with a real box.</p>
    </div>



    {{-- slide 14 --}}
    <div class="flex flex-col items-center  slide hidden">
        <div class="title stroke text-start">
            <h2 class="!text-white">let's do:</h2>
            <ol class="lesson-ul list-decimal" start="2">
                <li>Lift up the two squares at the side and let them stick together.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/pptimages/r35.png') }}" class="img-xl" />
        <p class="note  text-center">Note: Teacher to guide the children and assist them.</p>
    </div>

    {{-- slide 15 --}}
    <div class="flex flex-col items-center slide hidden">
        <div class="title stroke text-start">
            <h2 class="!text-white">let's do:</h2>
            <ol class="lesson-ul list-decimal" start="3">
                <li>Attach one square tile on the side as shown below.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/pptimages/r36.png') }}" class="img-xl" />
        <p class="note  text-center">Note: Teacher to guide the children and assist them.</p>
    </div>

    {{-- slide 16 --}}
    <div class="flex flex-col items-center slide hidden">
        <div class="title stroke text-start">
            <h2 class="!text-white">let's do:</h2>
            <ol class="lesson-ul list-decimal" start="4">
                <li>Place one more square tile on the other side.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/pptimages/r37.png') }}" class="img-xl" />
        <p class="note  text-center">Note: Teacher to guide the children and assist them. You may wish to prepare
            the 6 pieces of square this beforehand.</p>
    </div>

    {{-- slide 17 --}}
    <div class="flex flex-col items-center slide hidden">
        <div class="title stroke text-start">
            <h2 class="!text-white">let's do:</h2>
            <ol class="lesson-ul list-decimal" start="5">
                <li>Attach one square tile on the top to complete the box.</li>
                <li>The structure the box is completed.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/pptimages/r38.png') }}" class="img-xl" />
        <p class="note  text-center">Note: Teacher to guide the children and assist them.</p>
    </div>


    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">When pieces of <span class="!text-white">shapes</span> are placed together like
            this, a
            <span class="!text-white">structure</span> of a box is created.
        </h2>
        <img src="{{ asset('assets/images/pptimages/r39.png') }}" class="img-md" />
    </div>


    {{-- slide 19 --}}

    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">This <span class="!text-white">structure</span> is not <span
                class="text-white">flat</span>! It is three dimensional
            just like the box.</h2>
        <img src="{{ asset('assets/images/pptimages/r39.png') }}" class="img-md" />
    </div>


    {{-- slide 20 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">Look at these <span class="!text-white">structures</span>. They are not <span
                class="text-white">flat</span>!</h2>
        <img src="{{ asset('assets/images/pptimages/r40.png') }}" class="img-md" />
    </div>

    {{-- slide 19 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">Three dimensional <span class="!text-white">structures</span> can be created by stacking
            the magnetic tiles together or attaching
            them on the sides.</h2>
        <img src="{{ asset('assets/images/pptimages/r40.png') }}" class="img-md" />

    </div>

    {{-- slide 20 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">When different pieces are attached together, different three dimensional <span
                class="text-white">structures</span> can be created.</h2>
        <img src="{{ asset('assets/images/pptimages/r40.png') }}" class="img-md" />
    </div>


    {{-- slide 21 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">Look at these <span class="!text-white">structures</span>!Can you see what <span
                class="text-white">shapes</span> are used?</h2>
        <img src="{{ asset('assets/images/pptimages/r40.png') }}" class="img-md" />
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>



    {{-- slide 22 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">This is like a pyramid.</h2>
        <img src="{{ asset('assets/images/pptimages/r41.png') }}" class="img-xl" />
        <p class="note">Note: Point out how the shape looks like the pyramid in the photo.</p>
    </div>

    {{-- sldie 23 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">Does this look like a slice of a watermelon?</h2>
        <img src="{{ asset('assets/images/pptimages/r42.png') }}" class="img-xl" />
        <p class="note">Note: Point out how the shape looks like the watermelon in the photo.</p>
    </div>

    {{-- slide 24 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">The stack of <span class="!text-white">square</span> tiles is like container.</h2>
        <img src="{{ asset('assets/images/pptimages/r43.png') }}" class="img-xl" />
        <p class="note">Note: Point out how the shape looks like the container in the photo.</p>
    </div>

    {{-- slide 25 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">This one looks like an ice cream cone.</h2>
        <img src="{{ asset('assets/images/pptimages/r44.png') }}" class="img-xl" />
        <p class="note">Note: Point out how the shape looks like the ice cream in the photo.</p>
    </div>


    {{-- slide 26 --}}
    <div class="flex flex-col justify-center  slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title !text-white stroke">Class Activity 2</h2>
            <img src="{{ asset('assets/images/pptimages/r40.png') }}" class="img-md" />
        </div>
        <div class="flex items-start">
            <h2 class="title stroke text-start "><span class="!text-white">Let's do:</span><br>Create a structure using the
                magnetic tiles.</h2>
        </div>
        <p class="note">Note: Encourage children to explore how the tiles can be attached to create different structures.
            There is no right or wrong creations, encourage children to explore and work on the materials freely.</p>

    </div>


    {{-- slide 27 --}}
    <div class="flex flex-col  slide hidden h-[50vh] justify-between">
        <div class="title stroke text-start">
            <h2 class="!text-white">let's do:</h2>
            <ul class="lesson-ul list-decimal">
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
    <div class="flex flex-col  slide hidden h-[50vh] justify-between">
        <div class="title stroke text-start">
            <h2>Suggested questions for presentation:</h2>
            <ul class="lesson-ul list-decimal">
                <li>What have you created?</li>
                <li>What shapes did you use?</li>
                <li>Was it easy to make the structure? Was it fun?</li>
            </ul>

        </div>
        <p class="note  text-center">Note: Guided questions to help the children present their creations.</p>
    </div>



    {{-- slide 29 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Images are two dimensional and they are <span class="!text-white">flat</span>.</h2>
        <img src="{{ asset('assets/images/pptimages/gl10.png') }}" class="img-xl" />

    </div>

    {{-- slide 30 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Things around us are not <span class="!text-white">flat</span>.They are three dimensional
            and they take up space.</h2>
        <div class="flex gap-[2vw]">

            <img src="{{ asset('assets/images/pptimages/r33.png') }}" class="img-md img-normal-md" />
            <img src="{{ asset('assets/images/pptimages/r30.png') }}" class="img-md img-normal-md" />
        </div>
    </div>


    {{-- slide 31 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Everything around us has a <span class="!text-white">structure</span>.</h2>
        <img src="{{ asset('assets/images/pptimages/r45.png') }}" class="img-xl" />
    </div>

    {{-- slide 32 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="stroke title"><span class="!text-white">Structures</span> are made up of <span
                class="text-white">shapes</span>.</h2>

        <img src="{{ asset('assets/images/pptimages/r46.png') }}" class="img-xl" />
    </div>




    {{-- ===================== --}}
    {{-- Complete/Done Butttom --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    {{-- Buttons --}}
    <div id="buttons" class="absolute  flex flex-row gap-6 ">

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
        // Video toggle function - plays or pauses a video when clicked
        function toggleVideo(videoId) {
            const video = document.getElementById(videoId);
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        }

        document.addEventListener("DOMContentLoaded", () => {
            // Get all slide elements
            const slides = document.querySelectorAll(".slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");

            // Keep track of which slide we're currently viewing
            let currentSlide = 0;

            // CONFIGURE YOUR ROUTES HERE
            const returnRouteFromFirstSlide = "{{ route('Shape-aroundSelection') }}";
            const doneButtonRoute = "{{ route('basicStructure') }}";

            // Pause all videos when changing slides
            function pauseAllVideos() {
                const videos = document.querySelectorAll('video');
                videos.forEach(video => {
                    if (!video.paused) {
                        video.pause();
                    }
                });
            }

            // Show a specific slide and hide all others
            function showSlide(index) {
                // Pause all videos before switching
                pauseAllVideos();

                // Hide all slides except the current one
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                // Check if last slide
                const isLastSlide = index === slides.length - 1;

                if (isLastSlide) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            // NEXT button
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                });
            });

            // RETURN button - go to previous slide or navigate back
            returnButton.addEventListener("click", () => {
                // If on first slide, navigate to return route
                if (currentSlide === 0) {
                    window.location.href = returnRouteFromFirstSlide;
                    return;
                }

                if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            // DONE button - navigate to completion route
            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = doneButtonRoute;
                });
            }

            // Initialize - show first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
