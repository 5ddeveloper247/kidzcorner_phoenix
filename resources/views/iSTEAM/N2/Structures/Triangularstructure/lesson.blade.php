@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
{{-- title --}}
    <h2 class="top-title stroke">Triangular Structures</h2>


    {{-- Slide 1 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/N2/structure/tr-str/s1.png') }}" />
        <h2 class="title stroke">Children, do you remember what these are?</h2>
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>


    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/N2/structure/tr-str/s1.png') }}" />
        <h2 class="title stroke">These are different types of buildings. These buildings
            are <span class="!text-white">structures </span> with different shapes and sizes.</h2>
    </div>



    {{-- Slide3 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <h2 class="title stroke">Children, today we are going to look at
            <span class="!text-white">structures</span> that are in the shape of <span class="!text-white">triangle</span>!
        </h2>
    </div>


    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/N2/structure/tr-str/s2.png') }}" />
        <h2 class="title stroke">Children, do you know what these are in the pictures?</h2>

        <p class="note">Note: Encourage children to share what they know about the pictures.</p>
    </div>


    {{-- Slide 5  --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/N2/structure/tr-str/s3.png') }}" />
        <h2 class="title stroke">This is the Eiffel <span class="!text-white">Tower</span>. The <span
                class="text-white">structure</span> looks like a triangle
            where its base is <span class="!text-white">wide</span> and its top is <span class="!text-white">narrow</span>.
        </h2>

    </div>



    {{-- slide 6 --}}

    {{-- group slide miss --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/N2/structure/tr-str/s3.png') }}" />
        <h2 class="title stroke">The Eiffel <span class="!text-white">Tower Structure</span> is put together with many
            small iron pieces.
        </h2>

    </div>

    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <div class=" flex items-center justify-center ">
            <img src="{{ asset('assets/images/N2/structure/tr-str/s4.png') }}" class="large-img3" />
            <img src="{{ asset('assets/images/N2/structure/tr-str/s5.png') }}" class="large-img" />

        </div>
        <h2 class="title stroke">The Eiffel Tower structure is supported by four ‘legs’,
            helping it to stand tall into the sky
        </h2>

    </div>


    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <div class=" flex items-center justify-center ">


            <img src="{{ asset('assets/images/N2/structure/tr-str/s4.png') }}" class="large-img3" />
            <img src="{{ asset('assets/images/N2/structure/tr-str/s5.png') }}" class="large-img" />

        </div>
        <h2 class="title stroke">The Eiffel Tower structure is supported by four ‘legs’,
            helping it to stand tall into the sky
        </h2>

    </div>

    {{-- slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">

        <img src="{{ asset('assets/images/N2/structure/tr-str/s6.png') }}" />


        <h2 class="title stroke">Similarly, the electrical grids are also built from
            smaller metals pieces.
        </h2>

    </div>

    {{-- slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">

        <img src="{{ asset('assets/images/N2/structure/tr-str/s7.png') }}" />


        <h2 class="title stroke">The electrical grids also have a <span class="!text-white">wide</span> base and <span
                class="text-white">narrrow</span> top.
            Some are also support by four ‘legs’.
        </h2>

    </div>


    {{-- slide 11 --}}
    <div class="slide hidden  flex flex-col items-center justify-start ">
        <h2 class="title stroke !text-white ">Class Activity</h2>
        <div class=" flex items-center justify-center ">


            <img src="{{ asset('assets/images/N2/structure/tr-str/s8.png') }}" class="large-img3"  />
            <img src="{{ asset('assets/images/N2/structure/tr-str/s9.png') }}" class="large-img3" />

        </div>
        <h2 class="title stroke !text-start">Mission: <br>
            Make a tower in the shape of a triangle using the
            construction set.</h2>
    </div>


    {{-- slide 12 --}}
    <div class="slide hidden  flex flex-col justify-start items-center  ">
        <h2 class="title stroke  !text-start">Steps: <br>
            1.Look at the tower and observe the parts used. Point
            out the shapes on the structure.</h2>


        <img src="{{ asset('assets/images/N2/structure/tr-str/s10.png') }}" class="large-img4" />



        <p class="note">Note: Teacher can point out that the base is wide and the top is narrow, hence creating
            a triangular looking structure.</p>
    </div>


    {{-- slide 13 --}}
    <div class="slide hidden  flex flex-col justify-start items-center  ">
        <h2 class="title stroke  !text-start">Steps: <br>
            2.Get the following parts from the construction set.</h2>

        <div class="flex justify-center items-end">

            <img src="{{ asset('assets/images/N2/structure/tr-str/s10.png') }}" class="large-img4" />
            <p class= " note !text-white !text-start">square piece X 1 <br>
                long rectangle piece X 7 <br>
                three directions connector X 5</p>

        </div>



        <p class="note">Note: Encourage children to work together in small group and pick out the parts needed.</p>
    </div>

    {{-- slide 14 --}}
    <div class="slide hidden  flex flex-col justify-start items-center  ">
        <h2 class="title stroke  !text-start">Steps: <br>
            3.Connect a 4 direction connector on the long rectangle piece.</h2>


        <img src="{{ asset('assets/images/N2/structure/tr-str/s11.png') }}" class="large-img4" />



        <p class="note">Note: Encourage and guide the children to try to connect the pieces.</p>
    </div>


    {{-- slide 15 --}}
    <div class="slide hidden  flex flex-col justify-start items-center  ">
        <h2 class="title stroke  !text-start">Steps: <br>
            4.Connect two more long rectangle pieces on the connector <br>
            and adjust the pieces such that it forms a ‘Y’ shape.</h2>

        <div class="flex justify-center items-center">

            <img src="{{ asset('assets/images/N2/structure/tr-str/s12.png') }}" class="large-img4" />
            <img src="{{ asset('assets/images/N2/structure/tr-str/s13.png') }}" class="large-img4" />


        </div>



        <p class="note">Note: Encourage and assist the children to connect the pieces as it may
            be hard for them to fix the pieces.</p>
    </div>


    {{-- slide 16 --}}
    <div class="slide hidden  flex flex-col justify-start items-center  ">
        <h2 class="title stroke  !text-start">Steps: <br>
            5.Take the square piece and connect four 3-direction <br>
            connectors on each side.</h2>

        <div class="flex justify-center items-center">

            <img src="{{ asset('assets/images/N2/structure/tr-str/s14.png') }}" class="large-img4" />
            <img src="{{ asset('assets/images/N2/structure/tr-str/s15.png') }}" class="large-img4" />


        </div>



        <p class="note">Note: Assist children in fixing the pieces if required.</p>
    </div>

    {{-- slide 17 --}}
    <div class="slide hidden  flex flex-col justify-start items-center  ">
        <h2 class="title stroke  !text-start">Steps:
            6.Connect the square piece to the ‘Y’ shape structure.</h2>

        <div class="flex justify-center items-center">

            <img src="{{ asset('assets/images/N2/structure/tr-str/s16.png') }}" class="large-img4" />
            <img src="{{ asset('assets/images/N2/structure/tr-str/s17.png') }}" class="large-img4" />


        </div>



        <p class="note">Note: Assist children in fixing the pieces if required.</p>
    </div>

    {{-- slide 18 --}}
    <div class="slide hidden  flex flex-col justify-start items-center  ">
        <h2 class="title stroke  !text-start">Steps:
            7.Connect one long rectangle to each of the connectors
            as shown.</h2>

        <div class="flex justify-center items-center">

            <img src="{{ asset('assets/images/N2/structure/tr-str/s18.png') }}" class="large-img4" />
            <img src="{{ asset('assets/images/N2/structure/tr-str/s19.png') }}" class="large-img4" />


        </div>



        <p class="note">Note: Assist children in fixing the pieces if required.</p>
    </div>


    {{-- slide 19 --}}
    <div class="slide hidden  flex flex-col justify-start items-center  ">
        <h2 class="title stroke  !text-start">Steps: <br>
            8.After connecting four long rectangles, adjust the pieces
            and the tower is done!</h2>

        <img src="{{ asset('assets/images/N2/structure/tr-str/s10.png') }}" class="large-img4" />

        <p class="note">Note: Assist children in fixing the pieces if required.</p>
    </div>



    {{-- slide 20 --}}
    <div class="slide hidden  flex flex-col justify-start items-center  ">

        <img src="{{ asset('assets/images/N2/structure/tr-str/s20.png') }}" />



        <h2 class="title stroke ">More pieces can be added to create a taller tower.
            One has 3 levels and the other has 4.</h2>




        <p class="note z-90">Note: Teacher can challenge children to think of ways to create a taller tower. <a
                class="text-amber-300 click-btn1" href="">Click here</a> for the guide.</p>
    </div>


    {{-- slide 21 --}}

    {{-- click here --}}
    <div class="slide hidden click1 flex flex-col justify-start items-center  ">
        <h2 class="title stroke  !text-start">Steps: <br>
            1.Find the pieces required to make the tower taller.</h2>


        <img src="{{ asset('assets/images/N2/structure/tr-str/s21.png') }}" class="large-img" />




    </div>

    {{-- slide 22 --}}
    <div class="slide hidden click1  flex flex-col justify-start items-center  ">
        <h2 class="title stroke  !text-start">Steps: <br>
            2.Connect the 3-directions connectors on two opposite
            rectangle pieces as shown.</h2>


        <img src="{{ asset('assets/images/N2/structure/tr-str/s22.png') }}" class="large-img" />




    </div>


    {{-- slide 23 --}}
    <div class="slide hidden click1  flex flex-col justify-start items-center  ">
        <h2 class="title stroke  !text-start">Steps: <br>
            3.Connect one long rectangle pieces to the connectors.</h2>


        <img src="{{ asset('assets/images/N2/structure/tr-str/s23.png') }}" class="large-img" />




    </div>

    {{-- slide 24 --}}
    <div class="slide hidden click1  flex flex-col justify-start items-center  ">
        <h2 class="title stroke  !text-start">Steps: <br>
            4.Connect one square piece using the 3-directions <br>
            connector as shown.</h2>


        <img src="{{ asset('assets/images/N2/structure/tr-str/s24.png') }}" class="large-img" />




    </div>

    {{-- slide 25 --}}
    <div class="slide hidden click1  flex flex-col justify-start items-center  ">
        <h2 class="title stroke  !text-start">Steps: <br>
            5.Use a 2-directions connector to fix the square piece
            to the centre piece..</h2>


        <img src="{{ asset('assets/images/N2/structure/tr-str/s25.png') }}" class="large-img" />




    </div>



    {{-- slide 26 --}}
    <div class="slide hidden click1  flex flex-col justify-start items-center  ">
        <h2 class="title stroke  !text-start">Steps: <br>
            6.Connect a square piece on the other side in the same way.</h2>


        <img src="{{ asset('assets/images/N2/structure/tr-str/s26.png') }}" class="large-img" />




    </div>

    {{-- slide 27 --}}
    <div class="slide hidden click1  flex flex-col justify-start items-center  ">
        <h2 class="title stroke  !text-start">Steps: <br>
            7.Connect a long rectangle at each of the connectors.</h2>

        <div class="flex">

            <img src="{{ asset('assets/images/N2/structure/tr-str/s27.png') }}" class="large-img4" />
            <img src="{{ asset('assets/images/N2/structure/tr-str/s28.png') }}" class="large-img4" />
        </div>




    </div>


    {{-- slide 28 --}}
    <div class="slide hidden click1  flex flex-col justify-start items-center  ">
        <h2 class="title stroke  !text-start">Steps: <br>
            8.Adjust the pieces to make the tower stand and the <br>
            tower is completed!</h2>


        <img src="{{ asset('assets/images/N2/structure/tr-str/s10.png') }}" class="large-img" />

    </div>


    {{-- slide 29 --}}
    <div class="slide hidden  flex flex-col justify-start items-center  ">
        <h2 class="title stroke ">Another <span class="!text-white">structure</span> that looks like a <span
                class="text-white">triangle</span> <br>
            is the <span class="!text-white">pyramid</span>.</h2>


        <img src="{{ asset('assets/images/N2/structure/tr-str/s29.png') }}" />

    </div>

    {{-- slide 30 --}}
    <div class="slide hidden  flex flex-col justify-start items-center  ">
        <h2 class="title stroke ">The shape of a <span class="!text-white">triangle</span> can be seen on each side
            of the <span class="!text-white">pyramid</span>.</h2>


        <img src="{{ asset('assets/images/N2/structure/tr-str/s29.png') }}" />

    </div>



    {{-- slide 31 --}}
    <div class="slide hidden  flex flex-col justify-start items-center  ">


        <img src="{{ asset('assets/images/N2/structure/tr-str/s29.png') }}" />
        <h2 class="title stroke ">Look at the side of the <span class="!text-white">pyramid</span>. <br>
            Each side looks like a <span class="!text-white">triangle</span>.</h2>

    </div>

    {{-- slide 32 --}}
    <div class="slide hidden  flex flex-col justify-start items-center  ">


        <img src="{{ asset('assets/images/N2/structure/tr-str/s30.png') }}" />
        <h2 class="title stroke ">This is how the <span class="!text-white">pyramid</span> looks like closed up.
            It is made up of many large cube shaped stones.</h2>

    </div>

    {{-- slide 33 --}}
    <div class="slide hidden  flex flex-col justify-start items-center  ">


        <img src="{{ asset('assets/images/N2/structure/tr-str/s31.png') }}" />
        <h2 class="title stroke ">The cube shaped stones are put together layer by layer,
            forming a <span class="!text-white">structure</span> similar to stairs.</h2>

    </div>


    {{-- slide 34 --}}
    <div class="slide hidden  flex flex-col justify-start items-center  ">


        <img src="{{ asset('assets/images/N2/structure/tr-str/s31.png') }}" />
        <h2 class="title stroke ">This stairs <span class="!text-white">structure</span> makes the <span
                class="text-white">pyramid</span> look like
            a triangle from far.</h2>

    </div>


    {{-- slide 35 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke !text-white ">Class Activity</h2>

        <h2 class="title stroke !text-start">Mission: <br>
            Build the biggest pyramid with all the blocks in the
            construction set.</h2>
        <p class="note">Note: Encourage children to work together.</p>
    </div>


    {{-- slide 36 --}}
    <div class="slide hidden  flex flex-col justify-start items-center  ">
        <h2 class="title stroke  !text-start">Steps: <br>
            3.As the pyramid has stairs on the four sides, add blocks <br>
            on each side to create the stairs. <br>
            4.Continue to expand the structure and see how big can <br>
            your pyramid be!
        </h2>


        <img src="{{ asset('assets/images/N2/structure/tr-str/s32.png') }}" class="large-img" />
        <p class="note">Note: Teacher can get children to stand far from the structure to see if it looks like a
            triangle.</p>

    </div>


    {{-- slide 37 --}}
    <div class="slide hidden  flex flex-col justify-start items-center  ">

        <div class="flex">

            <img src="{{ asset('assets/images/N2/structure/tr-str/s8.png') }}"  class="large-img4" />
            <img src="{{ asset('assets/images/N2/structure/tr-str/s9.png') }}"  class="large-img4" />
            <img src="{{ asset('assets/images/N2/structure/tr-str/s33.png') }}" class="large-img4"  />
        </div>

        <h2 class="title stroke ">We learned that <span class="!text-white">tower</span> and <span
                class="text-white">pyramids</span> are <span class="!text-white">structures</span>
            that look like <span class="!text-white">triangles</span>.</h2>
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

        <button class="nextButton ">
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
            const clickButtons = document.querySelectorAll("[class*='click-btn']");

            // Keep track of which slide we're currently viewing
            let currentSlide = 0;
            let parentSlideIndex = null;
            let isViewingClickSlides = false;
            let currentClickClass = null;

            // CONFIGURE YOUR ROUTES HERE
            const returnRouteFromFirstSlide = "{{ route('TriangularstructureSelection') }}";
            const doneButtonRoute = "{{ route('TriangularstructureSelection') }}";

            // Pause all videos when changing slides
            function pauseAllVideos() {
                const videos = document.querySelectorAll('video');
                videos.forEach(video => {
                    if (!video.paused) {
                        video.pause();
                    }
                });
            }

            // Check if slide is any click slide (click1, click2, etc.)
            function isClickSlide(slide) {
                return Array.from(slide.classList).some(cls => cls.startsWith('click') && cls.match(/^click\d+$/));
            }

            // Check if there's another click slide with same class after current one
            function hasNextClickSlide(currentIndex) {
                if (!currentClickClass) return false;

                for (let i = currentIndex + 1; i < slides.length; i++) {
                    if (slides[i].classList.contains(currentClickClass)) {
                        return true;
                    }
                }
                return false;
            }

            // Get click class from button (click-btn1 → click1, click-btn2 → click2)
            function getClickClassFromButton(button) {
                const classList = Array.from(button.classList);
                const clickBtnClass = classList.find(cls => cls.startsWith('click-btn'));
                if (clickBtnClass) {
                    const number = clickBtnClass.replace('click-btn', '');
                    return 'click' + number;
                }
                return null;
            }

            // Show a specific slide and hide all others
            function showSlide(index) {
                // Pause all videos before switching
                pauseAllVideos();

                // Hide all slides except the current one
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                // Check if last slide OR last click slide
                const isLastSlide = index === slides.length - 1;
                const isLastClickSlide = isViewingClickSlides && !hasNextClickSlide(index);

                if (isLastSlide || isLastClickSlide) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            // Click button handlers
            clickButtons.forEach((btn) => {
                btn.addEventListener("click", (e) => {
                    e.preventDefault(); // Prevent default anchor behavior

                    parentSlideIndex = currentSlide;
                    isViewingClickSlides = true;
                    currentClickClass = getClickClassFromButton(btn);

                    // Find the first slide with matching click class
                    for (let i = 0; i < slides.length; i++) {
                        if (slides[i].classList.contains(currentClickClass)) {
                            currentSlide = i;
                            showSlide(currentSlide);
                            break;
                        }
                    }
                });
            });

            // NEXT button - skip click slides if not viewing them
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;

                        // Skip click slides if not viewing them
                        while (!isViewingClickSlides &&
                            currentSlide < slides.length &&
                            isClickSlide(slides[currentSlide])) {
                            currentSlide++;
                        }

                        // If viewing click slides, only show slides with current click class
                        if (isViewingClickSlides) {
                            while (currentSlide < slides.length &&
                                !slides[currentSlide].classList.contains(currentClickClass)) {
                                currentSlide++;
                            }
                        }

                        if (currentSlide < slides.length) {
                            showSlide(currentSlide);
                        }
                    }
                });
            });

            // RETURN button - go to previous slide or navigate back
            returnButton.addEventListener("click", () => {
                // If on first slide and not viewing click slides, navigate to return route
                if (currentSlide === 0 && !isViewingClickSlides) {
                    window.location.href = returnRouteFromFirstSlide;
                    return;
                }

                if (isViewingClickSlides) {
                    // Find previous slide with same click class
                    let prevSlide = currentSlide - 1;

                    while (prevSlide >= 0 && !slides[prevSlide].classList.contains(currentClickClass)) {
                        prevSlide--;
                    }

                    if (prevSlide >= 0 && slides[prevSlide].classList.contains(currentClickClass)) {
                        currentSlide = prevSlide;
                        showSlide(currentSlide);
                    } else {
                        // No more click slides, return to parent
                        currentSlide = parentSlideIndex;
                        isViewingClickSlides = false;
                        currentClickClass = null;
                        parentSlideIndex = null;
                        showSlide(currentSlide);
                    }
                } else if (currentSlide > 0) {
                    currentSlide--;

                    // Skip click slides when going back
                    while (currentSlide > 0 && isClickSlide(slides[currentSlide])) {
                        currentSlide--;
                    }

                    showSlide(currentSlide);
                }
            });

            // DONE button - navigate to completion route or return to parent
            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    if (isViewingClickSlides && parentSlideIndex !== null) {
                        // Return to parent slide
                        currentSlide = parentSlideIndex;
                        isViewingClickSlides = false;
                        currentClickClass = null;
                        parentSlideIndex = null;
                        showSlide(currentSlide);
                    } else {
                        // Navigate to route
                        window.location.href = doneButtonRoute;
                    }
                });
            }

            // Initialize - show first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
