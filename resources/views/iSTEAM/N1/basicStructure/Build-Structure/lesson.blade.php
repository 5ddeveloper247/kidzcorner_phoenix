@extends('layout.master')
@section('title', 'Dynamic Presentation')


@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Building Structures</h2>

    {{-- slide 0 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="stroke title">Everything around us has a <span class="!text-white">structure</span>. <br><span
                class="text-white">Structures</span> give the item its <span class="!text-white">shapes</span>.</h2>
        <img src="{{ asset('assets/images/pptimages/B-4.png') }}" class="img-lg" />
    </div>


    {{-- slide 1 --}}
    <div class="flex flex-col items-center justify-center slide hidden">

        <img src="{{ asset('assets/images/pptimages/r33.png') }}" class="img-sm" />

        <h2 class="title stroke">Do you remember this gift box? Is it <span class="!text-white">flat</span>?</h2>
        <p class="note">Note: Encourage the children to share their answers.</p>
    </div>

    {{-- slide 2 --}}
    <div class="flex flex-col items-center justify-center slide hidden">


        <img src="{{ asset('assets/images/pptimages/r33.png') }}" class="img-sm" />
        <div>
            <h2 class="title stroke">The gift box is not <span class="!text-white">flat</span> and it has 6 sides.</h2>
            <p class="note">Note: Teacher can point out to the children. Teacher can also use the cube box
                from previous lesson.</p>
        </div>
    </div>


    {{-- slide 3 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <div class="flex items-center gap-[2vw]">
            <img src="{{ asset('assets/images/pptimages/r33.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/pptimages/r32.png') }}" class="img-sm" />

        </div>
        <h2 class="stroke title">Each side of the gift box is a <span class="!text-white">square</span>.<br />The <span
                class="text-white">squares</span> from the <span class="!text-white">structure</span> of the gift box.</h2>
    </div>

    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <div class="flex items-center gap-[2vw]">
            <img src="{{ asset('assets/images/pptimages/r4.png') }}" class="img-h-md" />
            <img src="{{ asset('assets/images/pptimages/r3.png') }}" class="img-sm" />

        </div>
        <h2 class="stroke title"><span class="!text-white">Buildings</span> such as office <span
                class="text-white">building</span> and<br /><span class="!text-white">houses</span> have <span
                class="text-white">structures</span> too.</h2>
    </div>



    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <div class="flex items-center gap-[2vw]">
            <img src="{{ asset('assets/images/pptimages/r4.png') }}" class="img-h-md" />
            <img src="{{ asset('assets/images/pptimages/r3.png') }}" class="img-sm" />

        </div>
        <h2 class="stroke title"><span class="!text-white">Buildings</span> are not<span class="!text-white"> flat</span>.
            Different <span class="!text-white">shapes</span> are put together to form their <span
                class="text-white">structures</span>.</h2>
    </div>


    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <img src="{{ asset('assets/images/pptimages/r4.png') }}" class="img-h-md" />
        <h2 class="stroke title">This is an office <span class="!text-white">building</span>. What <span
                class="text-white">shape</span> is the <span class="!text-white">building</span>?</h2>
        <p class="note">Note: Encourage children to share answer.</p>
    </div>

    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <img src="{{ asset('assets/images/pptimages/gl12.png') }}" class="img-h-md" />
        <h2 class="stroke title">This part of the <span class="!text-white">building</span> looks like a <span
                class="text-white">rectangle</span>?</h2>
        <p class="note">Note: Point out the rectangle to the children.</p>

    </div>


    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">

        <img src="{{ asset('assets/images/pptimages/gl13.png') }}" class="img-h-md" />
        <h2 class="stroke title">The side of the <span class="!text-white">building</span> also looks like a <span
                class="text-white">rectangle</span>.</h2>
        <p class="note">Note: Point out the rectangle to the children.</p>

    </div>


    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <img src="{{ asset('assets/images/pptimages/r4.png') }}" class="img-h-md" />
        <h2 class="stroke title">The <span class="!text-white">building</span> is not flat.Its sides are rectangolar in
            shape.</h2>

    </div>

    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/pptimages/r6.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/pptimages/r5.png') }}" class="img-sm" />
        </div>
        <h2 class="stroke title">Both the<span class="!text-white"> top</span> and <span class="!text-white">bottom</span> of
            the <span class="!text-white">building</span> are <span class="!text-white">shaped</span> like <span
                class="text-white">squares</span>.</h2>
    </div>


    {{-- slide 11 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <img src="{{ asset('assets/images/pptimages/r4.png') }}" class="img-h-md" />
        <h2 class="stroke title">When all these <span class="!text-white">shapes</span> are put together, the
            <span class="!text-white">structure</span> of a <span class="!text-white">building</span> is completed.
        </h2>

    </div>


    {{-- slide 12 --}}
    <div class="flex flex-col justify-center items-center slide hidden">
        <h2 class="title !text-white stroke">individual Activity 1</h2>
        <img src="{{ asset('assets/images/pptimages/r17.png') }}" class="!w-[30vw]" />
        <div class="flex items-start">
            <h2 class="title stroke text-start"><span class="!text-white">Let's do:</span><br> Create the structure of a
                building! </h2>
        </div>
    </div>

    {{-- slide 13 --}}
    <div class="flex flex-col items-center slide hidden">
        <div class="title stroke text-start">
            <h2 class="!text-white">let's do:</h2>
            <ol class="list-decimal lesson-ul">
                <li>Take two pieces of square tiles and create a rectangle as shown below.
                </li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/pptimages/r8.png') }}" class="!w-[30vw]" />
        <p class="note  text-center">Note: This can be done individually. Each child can build his/her <span
                class="text-white">building</span>.</p>
    </div>



    {{-- slide 14 --}}
    <div class="flex flex-col items-center slide justify-between h-[33vw] hidden">
        <div class="title stroke text-start">
            <h2 class="!text-white">let's do:</h2>
            <ol class="list-decimal lesson-ul lesson-ul" start="2">
                <li>Make three more <span class="!text-white">rectangle</span>s.</li>
                <li>Place the four <span class="!text-white">rectangle</span>s together as shown</li>

            </ol>
        </div>
        <div class="flex items-center gap-[2vw]">
            <img src="{{ asset('assets/images/pptimages/r10.png') }}" class="!w-[28vw]" />
            <img src="{{ asset('assets/images/pptimages/r9.png') }}" class="!w-[28vw]" />
        </div>
        <p class="note  text-center">Note: Teacher to guide the children and assist them.</p>
    </div>

    {{-- slide 15 --}}
    <div class="flex flex-col items-center slide justify-between h-[33vw] hidden">
        <div class="title stroke text-start">
            <h2 class="!text-white">let's do:</h2>
            <ol class="list-decimal lesson-ul lesson-ul" start="4">
                <li>Lift up the <span class="!text-white">rectangle</span>s and attached the <span
                        class="text-white">rectangle</span>s as shown.</li>
            </ol>
        </div>
        <div class="flex items-center gap-[2vw]">
            <img src="{{ asset('assets/images/pptimages/r10.png') }}" class="!w-[28vw]" />
            <img src="{{ asset('assets/images/pptimages/r9.png') }}" class="!w-[28vw]" />
        </div>
        <p class="note  text-center">Note: Teacher to guide the children and assist them.</p>
    </div>

    {{-- slide 16 --}}
    <div class="flex flex-col items-center slide justify-between h-[33vw] hidden">
        <div class="title stroke text-start">
            <h2 class="!text-white">let's do:</h2>
            <ol class="list-decimal lesson-ul lesson-ul" start="5">
                <li>Take one square and place it on the top. Take one more and put it at the bottom.</li>
            </ol>
        </div>
        <div class="flex items-center gap-[2vw]">
            <img src="{{ asset('assets/images/pptimages/r14.png') }}" class="!w-[28vw]" />
            <img src="{{ asset('assets/images/pptimages/r13.png') }}" class="!w-[28vw]" />
        </div>

        <p class="note  text-center">Note: Teacher to guide the children and assist them.</p>
    </div>

    {{-- slide 17 --}}
    <div class="flex flex-col items-center slide justify-between h-[33vw] hidden">
        <div class="title stroke text-start">
            <h2 class="!text-white">let's do:</h2>
            <ol class="list-decimal lesson-ul lesson-ul" start="6">
                <li>Put squares surrounding the <span class="!text-white">building</span> to make the <span
                        class="text-white">building</span> structure look like the one in the picture!
                </li>
            </ol>
        </div>
        <div class="flex items-center gap-[1vw] justify-center">
            <img src="{{ asset('assets/images/pptimages/r15.png') }}" class="!w-[18vw]" />
            <img src="{{ asset('assets/images/pptimages/r16.png') }}" class="!w-[18vw]" />
            <img src="{{ asset('assets/images/pptimages/r17.png') }}" class="!w-[18vw]" />
        </div>
        <p class="note  text-center">Note: Teacher to guide the children and assist them.</p>
    </div>


    {{-- slide 18 --}}
    <div class="flex flex-col  slide hidden h-[50vh] items-center justify-between">
        <div class="title stroke text-start">
            <h2 class="!text-white">let's do:</h2>
            <ol class="list-decimal lesson-ul lesson-ul" start="7">
                <li>Build a taller/bigger <span class="!text-white">building</span> as a class. Put all the <span
                        class="text-white">building</span>s together and see what structure can
                    be created.</li>
            </ol>
        </div>
        <p class="note  text-center">Note: Teacher to challenge children and encourage them to work together as a class.
        </p>
    </div>


    {{-- slide 19 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">Look at this <span class="!text-white">house</span>! What <span
                class="text-white">shapes</span> are put together to form the <span class="!text-white">structure</span>?
        </h2>
        <img src="{{ asset('assets/images/pptimages/r18.png') }}" class="!w-[25vw]" />
        <p class="note  text-center">Note: Encourage children to share answer.</p>
    </div>


    {{-- slide 20 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">The <span class="!text-white">top</span> looks like a <span
                class="text-white">triangle</span> and the<span class="!text-white"> bottom
            </span>looks like a <span class="!text-white">square</span>.</h2>
        <img src="{{ asset('assets/images/pptimages/gl14.png') }}" class="img-lg" />
        <p class="note  text-center">Note: Point out the shape to the children..</p>
    </div>

    {{-- slide 21 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">What about this side? What <span class="!text-white">shapes</span> are used from the <span
                class="text-white">structure</span> on the side?</h2>
        <img src="{{ asset('assets/images/pptimages/r19.png') }}" class="!w-[30vw]" />
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>

    {{-- slide 22 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">This side can be formed by putting two <span class="!text-white">rectangles</span>
            together.</h2>
        <img src="{{ asset('assets/images/pptimages/B-house.png') }}" class="!w-[30vw]" />
        <p class="note">Note: Teacher to point out the two <span class="!text-white">rectangle</span>s.</p>
    </div>


    {{-- slide 23 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">One <span class="!text-white">rectangle</span> and one on top. The one on topis
            placed at an angle.</h2>
        <img src="{{ asset('assets/images/pptimages/B-house2.png') }}" class="img-lg" />
        <p class="note">Note: Teacher can use two pieces of <span class="!text-white">rectangle</span>s
            (paper/cardboards) to demonstrate.</p>
    </div>



    {{-- slide 24 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <video id="video1" class=" pointer-events-none">
            <source src="{{ asset('assets/images/pptimages/2.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="stroke title">Just like the office <span class="!text-white">building</span>, the <span
                class="text-white">house</span> is not <span class="!text-white">flat</span>and it has many sides.
        </h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- slide 25 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <img src="{{ asset('assets/images/pptimages/r20.png') }}" class="img-h-md" />
        <h2 class="stroke title">The bottom of the house is in a shape of a <span class="!text-white">rectangle</span>.
        </h2>
        <p class="note">Note: Teacher can use two pieces of <span class="!text-white">rectangle</span>s
            (paper/cardboards) to demonstrate.</p>
    </div>

    {{-- slide 26 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">When all the <span class="!text-white">shapes</span> are places together, the
            <span class="!text-white">structure</span> of the <span class="!text-white">house</span> is completed.
        </h2>
        <img src="{{ asset('assets/images/pptimages/r19.png') }}" class="!w-[30vw]" />

    </div>


    {{-- slide 27 --}}
    <div class="flex flex-col justify-center items-center  slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title !text-white stroke">Class Activity 2</h2>
        </div>
        <img src="{{ asset('assets/images/pptimages/r21.png') }}" class="!w-[30vw]" />
        <div class="flex items-start">
            <h2 class="title stroke text-start"><span class="!text-white">Let's do:</span><br>Create the structure of a
                house!</h2>
        </div>

    </div>



    {{-- slide 28 --}}
    <div class="flex flex-col items-center slide hidden">
        <div class="title stroke text-start">
            <h2 class="!text-white">let's do:</h2>
            <ol class="list-decimal lesson-ul   ">
                <li>This side of the house looks like a square a triangle. Find a square and a triangle and put them
                    together to form this.</li>

            </ol>
        </div>
        <div class="flex items-center gap-[2vw]">
            <img src="{{ asset('assets/images/pptimages/r48.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/pptimages/r47.png') }}" class="img-sm"/>
        </div>
        <p class="note  text-center">Note: Teacher to guide children.</p>
    </div>




    {{-- slide 29 --}}
    <div class="flex flex-col items-center slide hidden">
        <div class="title stroke text-start">
            <h2 class="!text-white">let's do:</h2>
            <ol class="list-decimal lesson-ul" start="2">
                <li>Put two squares together to form a <span class="!text-white">rectangle</span>. Make two <span
                        class="text-white">rectangle</span>s and put them together.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/pptimages/r22.png') }}" class="!w-[30vw]" />

        <p class="note  text-center">Note: Teacher to guide the children and assist them.</p>
    </div>



    {{-- slide 30 --}}
    <div class="flex flex-col items-center justify-between h-[32vw] slide hidden">
        <div class="title stroke text-start">
            <h2 class="!text-white">let's do:</h2>
            <ol class="list-decimal lesson-ul" start="3">
                <li>Hold the <span class="!text-white">rectangle</span>s up and attach it as shown below.</li>

            </ol>
        </div>
        <img src="{{ asset('assets/images/pptimages/r23.png') }}" class="img-xl" />
        <p class="note  text-center">Note: Teacher to guide the children and assist them.</p>
    </div>



    {{-- slide 31 --}}
    <div class="flex flex-col items-center slide hidden">
        <div class="title stroke text-start">
            <h2 class="!text-white">let's do:</h2>
            <ol class="list-decimal lesson-ul" start="4">
                <li>Make another <span class="!text-white">rectangle</span> and form the base of the house like this</li>

            </ol>
        </div>
        <div class="flex items-center gap-[2vw]">
            <img src="{{ asset('assets/images/pptimages/r24.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/pptimages/r25.png') }}" class="img-sm" />
        </div>
        <p class="note  text-center">Note: Teacher to guide the children and assist them.</p>
    </div>


    {{-- slide 32 --}}
    <div class="flex flex-col items-center slide hidden">
        <div class="title stroke text-start">
            <h2 class="!text-white">let's do:</h2>
            <ol class="list-decimal lesson-ul" start="5">
                <li>Use another 4 square to form the side of the house.</li>

            </ol>
        </div>
        <div class="flex items-center gap-[2vw]">
            <img src="{{ asset('assets/images/pptimages/r26.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/pptimages/r27.png') }}" class="img-sm" />
        </div>
        <p class="note  text-center">Note: Teacher to guide the children and assist them.</p>
    </div>


    {{-- slide 33 --}}
    <div class="flex flex-col items-center slide hidden">
        <div class="title stroke text-start">
            <h2 class="!text-white">let's do:</h2>
            <ol class="list-decimal lesson-ul" start="6">
                <li>Use another square and triangle and complete the house.</li>
            </ol>
        </div>
        <div class="flex items-center gap-[2vw]">
            <img src="{{ asset('assets/images/pptimages/r28.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/pptimages/r29.png') }}" class="img-sm" />
        </div>
        <p class="note  text-center">Note: Teacher to guide the children and assist them.</p>
    </div>


    {{-- slide 34 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title"><span class="!text-white">Structures</span> are made up of <span
                class="text-white">shapes</span>.</h2>
        <div class="flex gap-[2vw]">
            <img src="{{ asset('assets/images/pptimages/r17.png') }}" class="img-sm" />

            <img src="{{ asset('assets/images/pptimages/r29.png') }}" class="img-sm" />
        </div>
    </div>


    {{-- slide 35 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">The <span class="!text-white">structure</span> of the <span
                class="text-white">building</span>s can be created by <span class="!text-white">building</span>
            the <span class="!text-white">structure</span> one side at a time.</h2>
        <div class="flex gap-[2vw]">
            <img src="{{ asset('assets/images/pptimages/r17.png') }}" class="img-sm" />

            <img src="{{ asset('assets/images/pptimages/r29.png') }}" class="img-sm" />
        </div>
    </div>


    {{-- slide 36 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">Different pieces of <span class="!text-white">shapes</span> can be combined to create
            different <span class="!text-white">structures</span>.</h2>
        <div class="flex gap-[2vw]">
            <img src="{{ asset('assets/images/pptimages/r17.png') }}" class="img-sm" />

            <img src="{{ asset('assets/images/pptimages/r29.png') }}" class="img-sm" />
        </div>
    </div>




    {{-- ===================== --}}
    {{-- Complete/Done Butttom --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>


    {{-- Buttons --}}
    <div id="buttons" class="absolute flex flex-row">
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
            const returnRouteFromFirstSlide = "{{ route('Build-StructureSelection') }}";
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
