@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="title !text-[3vw] top-title stroke absolute top-[5vh] z-[100]">Building Around Us</h2>


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-6 ">
        <div class="flex flex-col gap-1 justify-center items-center">
            <img src="{{ asset('/assets/images/N2/structure/str2/s1.png') }}" class="large-img3" />
            <img src="{{ asset('/assets/images/N2/structure/str2/s2.png') }}" class="large-img3" />
        </div>
        <h2 class="title stroke">Children, do you remember what these are?</h2>
        <p class="note">Note: Encourage children to name the different types of structures.</p>
    </div>




    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="{{ asset('/assets/images/N2/structure/str/st36.png') }}" class="large-img6" />
        <h2 class="title stroke">These are different types of <span class="text-white">structures</span>.</h2>

    </div>


    {{-- Slide3 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="{{ asset('/assets/images/N2/structure/str/st36.png') }}" class="large-img6" />
        <h2 class="title stroke">The <span class="text-white">structures</span> have different shapes and sizes.</h2>
        <p class="note">Note: Encourage children to share what shapes they see.</p>
    </div>


    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <h2 class="title stroke">Children, today we are going to look at <br>
            different types of <span class="text-white">buildings</span> around us!</h2>
    </div>



    {{-- Slide 5  --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="{{ asset('/assets/images/N2/structure/str3/s1.png') }}" class="large-img6" />
        <h2 class="title stroke"><span class="text-white">buildings</span> are <span class="text-white">structures</span>.
            <br>
            There are many types of <span class="text-white">buildings</span> around us.
        </h2>
        <p class="note">Note: Encourage children to share their answers.</p>

    </div>




    {{-- slide 6 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="{{ asset('/assets/images/N2/structure/str3/s1.png') }}" class="large-img6" />
        <h2 class="title stroke">Do you know what kind of <span class="text-white">buildings</span> these are?
            What <span class="text-white">shapes</span> do they look like?</h2>
        <p class="note">Note: Encourage children to share their answers.</p>

    </div>


    {{-- Slide 7 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="{{ asset('/assets/images/N2/structure/str3/s1.png') }}" class="large-img6" />
        <h2 class="title stroke">These are <span class="text-white"> office buildings</span>. They are usually <span
                class="text-white">tall</span>
            and they have shapes similar to <span class="text-white">rectangles</span>.</h2>

    </div>


    {{-- slide 8 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="{{ asset('/assets/images/N2/structure/str3/s2.png') }}" class="large-img6" />
        <h2 class="title stroke">What do you think these beautiful <span class="text-white">buildings</span> are?</h2>
        <p class="note">Note: Encourage children to describe the shape and how these buildings look.</p>

    </div>



    {{-- slide 9 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="{{ asset('/assets/images/N2/structure/str3/s2.png') }}" class="large-img6" />
        <h2 class="title stroke">These are <span class="text-white">hotels</span>. Some <span
                class="text-white">hotels</span> are tall and they have
            special designs and shapes.</h2>
        <p class="note">Note: Encourage children to describe the shape and how these buildings look.</p>

    </div>




    {{-- slide 10 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="{{ asset('/assets/images/N2/structure/str3/s3.png') }}" class="large-img6" />
        <h2 class="title stroke">Can you guess what these are?
            People can live in these <span class="text-white">buildings</span>.</h2>
        <p class="note">Note: Encourage children to describe how the houses look.</p>

    </div>



    {{-- slide 11 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="{{ asset('/assets/images/N2/structure/str3/s3.png') }}" class="large-img6" />
        <h2 class="title stroke">These are homes for people.
            These <span class="text-white">buildings</span> are of different <span class="text-white">shapes</span> too.
        </h2>
        <p class="note">Note: Encourage children to describe how the houses look.</p>

    </div>



    {{-- slide 12 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="{{ asset('/assets/images/N2/structure/str3/s4.png') }}" class="large-img6" />
        <h2 class="title stroke">Some people live in houses. Houses are also a type of
            <span class="text-white">building</span>. They are shorter and smaller.
        </h2>
        <p class="note">Note: Encourage children to describe how these houses look using shapes.</p>

    </div>


    {{-- slide 13 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="{{ asset('/assets/images/N2/structure/str3/s5.png') }}" class="large-img6" />
        <h2 class="title stroke">What do you see in these pictures?
            What are the shapes of these buildings?</h2>

    </div>


    {{-- slide 14 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="{{ asset('/assets/images/N2/structure/str3/s5.png') }}" class="large-img6" />
        <h2 class="title stroke">These buildings are <span class="text-white">short</span> and wide.
            They have big spaces in them.</h2>

    </div>


    {{-- slide 15 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="{{ asset('/assets/images/N2/structure/str3/s6.png') }}" class="large-img6" />
        <h2 class="title stroke">All the <span class="text-white">buildings</span> stand on their own because they have a
            base that can support their structure.</h2>

    </div>



    {{-- slide 16 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex ">

            <img src="{{ asset('/assets/images/N2/structure/str3/s7.png') }}" class="large-img4" />
            <img src="{{ asset('/assets/images/N2/structure/str3/s8.png') }}" class="large-img4" />
        </div>
        <h2 class="title stroke">Children, do you remember the two <span class="text-white">structures</span> you
            had made in the last lesson?</h2>

    </div>



    {{-- slide 17 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex  items-center">

            <img src="{{ asset('/assets/images/N2/structure/str3/s9.png') }}" class="large-img3" />
            <img src="{{ asset('/assets/images/N2/structure/str3/s10.png') }}" class="large-img3" />
            <img src="{{ asset('/assets/images/N2/structure/str3/s11.png') }}" class="large-img3" />
        </div>
        <h2 class="title stroke">We learned that the <span class="text-white">structure</span> with a <span
                class="text-white">thin base</span>
            cannot stand on its own.</h2>

    </div>

    {{-- slide 18 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="{{ asset('/assets/images/N2/structure/str3/s12.png') }}" class="large-img6" />
        <h2 class="title stroke">But the <span class="text-white">structure</span> with a <span class="text-white">wider
                base</span> can support its
            structure and is able to stand on its own.</h2>

    </div>


    {{-- slide 19 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="{{ asset('/assets/images/N2/structure/str3/s13.png') }}" />
        <h2 class="title stroke">Let’s take a look at how buildings are constructed.</h2>

        <p class="note">Note: Encourage children to guess how are buildings constructed.</p>
    </div>

    {{-- slide 20  --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="{{ asset('/assets/images/N2/structure/str3/s14.png') }}" />
        <h2 class="title stroke">The workers build the <span class="text-white">building</span> from the bottom to the
            top. They build one <span class="text-white">level</span> at a time.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>


    {{-- slide 21  --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="{{ asset('/assets/images/N2/structure/str3/s15.png') }}" />
        <h2 class="title stroke">Worker make sure that the <span class="text-white">base</span> is able to support the
            <span class="text-white">structure</span> as they build each level.
        </h2>

    </div>


    {{-- sldie 22 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="{{ asset('/assets/images/N2/structure/str3/s15.png') }}" />
        <h2 class="title stroke"><span class="text-white">Buildings</span> then form the <span
                class="text-white">shape</span> as the workers
            put the smaller parts together.</h2>

    </div>

    {{-- slide 23 --}}
    <div class="slide flex flex-col items-center justify-start gap-5 ">
        <h2 class="title stroke !text-white  font-bold">Individual Activity</h2>

        <img src="{{ asset('/assets/images/N2/structure/str3/s17.png') }}" class="large-img3" />


        <h2 class="title stroke !text-start">Mission: <br>
            Use the construction set and make a building similar to the
            office building.</h2>

        <p class="note">Note: Give each child a set of materials to work on this activity.</p>
    </div>

    {{-- slide 24 --}}
    <div class="slide flex flex-col items-center justify-start gap-5 ">
        <h2 class="title stroke !text-start">Steps: <br>
            1.Look at the shape of this office building. It looks like a
            rectangle.</h2>
        <img src="{{ asset('/assets/images/N2/structure/str3/s17.png') }}" class="large-img6" />
    </div>

    {{-- slide 25 --}}
    <div class="slide flex flex-col items-center justify-start gap-5 ">

        <h2 class="title stroke !text-start">Steps: <br>
            2.Get the following parts from the construction set.</h2>
        <img src="{{ asset('/assets/images/N2/structure/str3/s18.png') }}" class="large-img6" />

        <p class="note">Note: The colours of the cubes don’t matter, let children get the correct type of
            connectors and blocks.</p>

    </div>

    {{-- sldie 26 --}}
    <div class="slide flex flex-col items-center justify-start gap-5 ">



        <h2 class="title stroke !text-start">Steps: <br>
            3.Take two cubes and a block connector.
            4.Fix the connector on one cube.</h2>
        <div class="flex gap-3 justify-center items-center">

            <img src="{{ asset('/assets/images/N2/structure/str3/s19.png') }}" class="large-img3" />
            <img src="{{ asset('/assets/images/N2/structure/str3/s20.png') }}" class="large-img3" />
        </div>

        <p class="note">Note: Encourage and guide the children to try to connect the pieces.</p>

    </div>
    {{-- slide 27 --}}
    <div class="slide flex flex-col items-center justify-start gap-5 ">



        <h2 class="title stroke !text-start">Steps: <br>
            5.Connect one cube on top and continue to build the structure
            upwards using the connector and the cubes.</h2>
        <img src="{{ asset('/assets/images/N2/structure/str3/s21.png') }}" class="large-img" />

        <p class="note">Note: Teacher to assist the children as it may be hard for them to attach the parts.</p>

    </div>



    {{-- slide 28 --}}
    <div class="slide flex flex-col items-center justify-start gap-5 ">



        <h2 class="title stroke !text-start">Steps: <br>
            6.Put the last cube on top and you have made the office
            building.</h2>
        <div class="flex gap-3 justify-center items-center">

            <img src="{{ asset('/assets/images/N2/structure/str3/s22.png') }}" class="large-img4" />
            <img src="{{ asset('/assets/images/N2/structure/str3/s17.png') }}" class="large-img4" />
        </div>

        <p class="note">Note: Teacher to assist the children as it may be hard for them to attach the parts.</p>

    </div>




    <div class="slide flex flex-col items-center justify-start gap-7 ">
        <img src="{{ asset('/assets/images/N2/structure/str3/s23.png') }}" class="large-img5" />
        <h2 class="title stroke ">Different shaped structures can also be created <br>
            using the blocks.</h2>
        <p class="note">Note: Encourage children to identify the shapes.</p>

    </div>



    {{-- slide 29  --}}

    <div class="slide flex flex-col items-center justify-start gap-5 ">
        <img src="{{ asset('/assets/images/N2/structure/str3/s24.png') }}" class="large-img" />

        <h2 class="title stroke">What <span class="!text-white">shapes</span> can you see in this picture?
            How will you build the <span class="!text-white">structure</span> ?</h2>
        <p class="note">Note: Encourage children to describe the house using shapes and share their ideas on how they
            will build it.</p>

    </div>



    {{-- slide 30  --}}
    <div class="slide flex flex-col items-center justify-start gap-5 ">
        <img src="{{ asset('/assets/images/N2/structure/str3/s25.png') }}" class="large-img2" />
        <h2 class="title stroke ">This part of the house is made up of a
            <span class="!text-white">triangle</span> and a <span class="!text-white">rectangle</span>.
        </h2>
        <p class="note">Note: Encourage children to point out the shape.</p>

    </div>
    {{-- slide 31  --}}

    <div class="slide flex flex-col items-center justify-start gap-5 ">
        <img src="{{ asset('/assets/images/N2/structure/str3/s26.png') }}" class="large-img2" />

        <h2 class="title stroke ">This part of the house is made up of a
            <span class="!text-white">triangle</span> and a <span class="!text-white">rectangle</span>.
        </h2>


        <p class="note">Note: Encourage children to point out the shape.</p>

    </div>
    {{-- slide 32  --}}

    <div class="slide flex flex-col items-center justify-start gap-5 ">


        <img src="{{ asset('/assets/images/N2/structure/str3/s27.png') }}" class="large-img2" />

        <h2 class="title stroke ">A part of this building is hidden. It is made up of
            <span class="!text-white">triangle</span> and <span class="!text-white">rectangle</span>.
        </h2>


        <p class="note">Note: Encourage children to point out the shape.</p>

    </div>
    {{-- slide 33  --}}

    <div class="slide flex flex-col items-center justify-start gap-5 ">

        <div class="flex gap-2">
            <img src="{{ asset('/assets/images/N2/structure/str3/s25.png') }}" class="large-img3" />
            <img src="{{ asset('/assets/images/N2/structure/str3/s28.png') }}" class="large-img3" />
        </div>

        <h2 class="title stroke ">A <span class="!text-white">structure</span> for this part of the house
            can formed using different <span class="!text-white">shapes</span>.</h2>



    </div>
    {{-- slide 34  --}}

    <div class="slide flex flex-col items-center justify-start gap-5 ">

        <div class="flex gap-2">



            <img src="{{ asset('/assets/images/N2/structure/str3/s24.png') }}" class="large-img3" />
            <img src="{{ asset('/assets/images/N2/structure/str3/s28.png') }}" class="large-img3" />
        </div>

        <h2 class="title stroke ">This <span class="!text-white">rectangle structure</span> is made up of cubes.</h2>

        <p class="note">Note: Encourage children to point out the cubes.</p>

    </div>
    {{-- slide 35  --}}

    <div class="slide flex flex-col items-center justify-start gap-5 ">

        <div class="flex gap-2">



            <img src="{{ asset('/assets/images/N2/structure/str3/s24.png') }}" class="large-img3" />
            <img src="{{ asset('/assets/images/N2/structure/str3/s28.png') }}" class="large-img3" />
        </div>

        <h2 class="title stroke ">This <span class="!text-white">triangle structure</span> is made up different types of
            blocks.</h2>

        <p class="note">Note: Encourage children to point out the different blocks used to form the triangle structure.
        </p>

    </div>
    {{-- slide 36  --}}

    <div class="slide flex flex-col items-center justify-start gap-5 ">



        <img src="{{ asset('/assets/images/N2/structure/str3/s29.png') }}" class="large-img6" />

        <h2 class="title stroke ">Look at the <span class="!text-white">shapes</span> of the building in the photo and
            build the <span class="!text-white">structure</span> part by part.</h2>

        <p class="note">Note: Encourage children to point out the different blocks used to form the triangle structure.
        </p>

    </div>


    {{-- slide 35  --}}

    <div class="slide flex flex-col items-center justify-start gap-5 ">

        <div class="flex gap-2">
            <img src="{{ asset('/assets/images/N2/structure/str3/s24.png') }}" class="large-img4" />
            <img src="{{ asset('/assets/images/N2/structure/str3/s28.png') }}" class="large-img4" />
        </div>

        <h2 class="title stroke ">Put all the <span class="!text-white"> structures</span> together to complete the
            whole building structure.</h2>

        <p class="note">Note: Encourage children to point out the matching parts.</p>

    </div>
    {{-- slide 36  --}}

    <div class="slide flex flex-col items-center justify-start gap-5 ">

        <img src="{{ asset('/assets/images/N2/structure/str3/s24.png') }}" class="large-img" />

        <h2 class="title stroke ">Look at the <span class="!text-white"> shapes</span> of these <span
                class="!text-white">buildings</span>.</h2>

        <p class="note">Note: Encourage children to point out the matching parts.</p>

    </div>
    {{-- slide 36  --}}

    <div class="slide flex flex-col items-center justify-start gap-5 ">
        <h2 class="title stroke !text-white  font-bold">Class Activity</h2>

        <img src="{{ asset('/assets/images/N2/structure/str3/s30.png') }}" class="large-img2" />


        <h2 class="title stroke !text-start">Mission: <br>
            Choose a building that you like from the pictures. Use the
            constructions set and make a structure of the building.</h2>

        <p class="note">Note: Give each child a set of materials to work on this activity.</p>
    </div>



    {{-- slide 37 --}}
    <div class="slide flex flex-col items-center justify-start gap-[5rem] ">



        <h2 class="title stroke !text-start">Steps: <br>
            1.Discuss with your group on which building to build and the <br>
            shape that the building looks like. <br>
            2.Find the different parts in the set of materials to create <br>
            the shape structures. <br>
            3.Put the parts together and present it to your class. <br>
            4.Take a photo and paste it on the learning journal.<br>
            5.Showcase your work.</h2>
        <p class="note">Note: Teacher can refer to the questions to assist children during hands-on and their
            presentation.</p>
    </div>

    {{-- slide 38 --}}
    <div class="slide hidden  flex flex-col items-center justify-start gap-[6rem] ">
        <div class="flex justify start">
            <h2 class="title stroke !text-start">Possible questions during hands-on : <br>
                1.What shapes can be found in your design?<br>
                2.How can you form the shape? Which pieces/blocks can you <br>
                use? <br>
                3.Which part do you think you should build first? <br>
                want? <br><br>
                Possible questions during presentation: <br>
                1.What building is it? (e.g. hotel, house etc)<br>
                2.Which part was hard to make? Why and how you overcome
                it?<br>
            </h2>
        </div>
        <p class="note">Note: Teacher can point out to children on how they can create a shape in different ways.</p>
    </div>


    {{-- slide 39 --}}

    <div class="slide hidden  flex flex-col items-center justify-start gap-[1rem] ">

        <h2 class="title stroke !text-white !font-bold">Learning Journal</h2>

        <img src="{{ asset('/assets/images/N2/structure/str3/s31.png') }}" class="large-img5" />


    </div>

    {{-- ====================================== --}}
    {{-- Buttons --}}
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
        // Video toggle function
        function toggleVideo(videoId) {
            const video = document.getElementById(videoId);
            if (video) {
                video.paused ? video.play() : video.pause();
            }
        }

        document.addEventListener("DOMContentLoaded", () => {
            // Get all elements
            const slides = document.querySelectorAll(".slide");
            const nextBtn = document.querySelector(".nextButton");
            const returnBtn = document.getElementById("returnButton");
            const doneBtn = document.querySelector(".doneButton");

            // Current slide position
            let currentIndex = 0;

            // Pause all videos in current slide
            function pauseVideos() {
                const videos = slides[currentIndex]?.querySelectorAll("video") || [];
                videos.forEach(video => {
                    if (!video.paused) video.pause();
                });
            }

            // Show slide and update buttons
            function showSlide(index) {
                // Pause videos before switching
                pauseVideos();

                // Hide all slides
                slides.forEach(slide => slide.classList.add("hidden"));

                // Show current slide
                slides[index].classList.remove("hidden");

                // Update index
                currentIndex = index;

                // Check if last slide
                const isLastSlide = index === slides.length - 1;

                // Update button visibility
                if (isLastSlide) {
                    nextBtn.classList.add("hidden");
                    doneBtn.classList.remove("hidden");
                } else {
                    nextBtn.classList.remove("hidden");
                    doneBtn.classList.add("hidden");
                }
            }

            // Next button
            nextBtn.addEventListener("click", () => {
                if (currentIndex < slides.length - 1) {
                    showSlide(currentIndex + 1);
                }
            });

            // Return button - redirect if on first slide
            returnBtn.addEventListener("click", () => {
                if (currentIndex === 0) {
                    window.location.href = "{{ route('n2buildingSelection') }}";
                } else {
                    showSlide(currentIndex - 1);
                }
            });

            // Done button
            doneBtn.addEventListener("click", () => {
                window.location.href = "{{ route('n2buildingSelection') }}";
            });

            // Start at first slide
            showSlide(0);
        });
    </script>
@endpush
