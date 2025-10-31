@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Structure of a Car</h2>


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/structure/c-str/s1.png') }}" />
        <h2 class="title stroke">Children, what do you see in this picture?</h2>
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>


    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/structure/c-str/s1.png') }}" />
        <h2 class="title stroke">Do you know that a car is a structure?</h2>
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>


    {{-- Slide3 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/structure/c-str/s1.png') }}" />
        <h2 class="title stroke">A car is made up of many smaller parts! <br>
            What <span class="text-white">shapes</span> do you see on the car?</h2>
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>


    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/structure/c-str/s2.png') }}" />
        <h2 class="title stroke">The <span class="text-white">body</span> of the car is made up of one short
            <span class="text-white">rectangle</span> and one long <span class="text-white">rectangle</span>.
        </h2>
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>


    {{-- Slide 5  --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/structure/c-str/s3.png') }}" />
        <h2 class="title stroke">Two <span class="text-white">triangles</span> can be found on the car.</h2>
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>



    {{-- slide 6 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/structure/c-str/s4.png') }}" />
        <h2 class="title stroke">The <span class="text-white">wheel</span> are in the <span class="text-white">shape</span>
            of a circle.</h2>
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>

    {{-- Slide 7 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke">Let’s make a car using the construction set!</h2>
    </div>


    {{-- Slide 8 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke !text-white ">Individual Activity 1</h2>

        <img src="{{ asset('assets/images/N2/structure/c-str/s1.png') }}" />

        <h2 class="title stroke !text-start">Mission: <br>
            Make a car similar to the one in the picture using <br>
            the construction set.</h2>
    </div>


    {{-- slide 9 --}}
    <div class="slide hidden  flex flex-col justify-start items-center   ">
        <h2 class="title stroke  !text-start">Steps: <br>
            1.Get the following parts from the construction set.</h2>

        <div class="flex gap-1 justify-center items-end">

            <img src="{{ asset('assets/images/N2/structure/c-str/s5.png') }}" class="large-img4" />
            <p class= " note !text-white !text-start">small prism X 2 <br>
                cube X 6 <br>
                block connector X 10<br>
                pair of small wheels X 2</p>

        </div>



        <p class="note">Note: Encourage children to work together in small group and pick out the parts needed.</p>
    </div>


    {{-- slide 10 --}}
    <div class="slide hidden  flex flex-col justify-start items-center   ">
        <h2 class="title stroke  !text-start">Steps: <br>
            2.Take 6 cubes and 5 connectors to form the long <br>
            rectangle for the car’s body.</h2>

        <div class="flex gap-1 justify-center items-center">

            <img src="{{ asset('assets/images/N2/structure/c-str/s6.png') }}" class="large-img4" />

            <img src="{{ asset('assets/images/N2/structure/c-str/s7.png') }}" class="large-img4" />


        </div>



        <p class="note">Note: Encourage and guide the children to try to connect the pieces.</p>
    </div>


    {{-- slide 11 --}}
    <div class="slide hidden  flex flex-col justify-start items-center   ">
        <h2 class="title stroke  !text-start">Steps: <br>
            3.Use a block connector to connect the cubes together <br>
            one by one.</h2>


        <img src="{{ asset('assets/images/N2/structure/c-str/s8.png') }}" />





        <p class="note">Note: Encourage and assist the children to connect the pieces as it may be
            hard for them to fix the pieces.</p>
    </div>

    {{-- slide 12 --}}
    <div class="slide hidden  flex flex-col justify-start items-center   ">
        <h2 class="title stroke  !text-start">Steps: <br>
            5.Take 2 cubes, 2 small prism and 3 block connector to <br>
            form the top part of the car.</h2>

        <div class="flex gap-1 justify-center items-center">
            <img src="{{ asset('assets/images/N2/structure/c-str/s9.png') }}" class="large-img4" />
            <img src="{{ asset('assets/images/N2/structure/c-str/s10.png') }}" class="large-img4" />
        </div>
        <p class="note">Note: Assist children in fixing the pieces if required.</p>
    </div>


    {{-- slide 13 --}}
    <div class="slide hidden  flex flex-col justify-start items-center   ">
        <h2 class="title stroke  !text-start">Steps: <br>
            6.Connect the prism to the cube using the connector</h2>

        <div class="flex gap-1 justify-center items-center">
            <img src="{{ asset('assets/images/N2/structure/c-str/s11.png') }}" class="large-img4" />
            <img src="{{ asset('assets/images/N2/structure/c-str/s12.png') }}" class="large-img4" />
        </div>
        <p class="note">Note: Assist children in fixing the pieces if required.</p>
    </div>

    {{-- slide 14 --}}
    <div class="slide hidden  flex flex-col justify-start items-center   ">
        <h2 class="title stroke  !text-start">Steps: <br>
            7.Continue to connect another cube and prism to form <br>
            the shape as shown.</h2>

        <div class="flex gap-1 justify-center items-center">
            <img src="{{ asset('assets/images/N2/structure/c-str/s13.png') }}" class="large-img4" />
            <img src="{{ asset('assets/images/N2/structure/c-str/s14.png') }}" class="large-img4" />
        </div>
        <p class="note">Note: Assist children in fixing the pieces if required.</p>
    </div>


    {{-- slide 15 --}}
    <div class="slide hidden  flex flex-col justify-start items-center   ">
        <h2 class="title stroke  !text-start">Steps: <br>
            8.Connect two connectors on the prisms as shown.</h2>

        <div class="flex gap-1 justify-center items-center">

            <img src="{{ asset('assets/images/N2/structure/c-str/s15.png') }}" class="large-img4" />
            <img src="{{ asset('assets/images/N2/structure/c-str/s16.png') }}" class="large-img4" />

        </div>



        <p class="note">Note: Assist children in fixing the pieces if required.</p>
    </div>


    {{-- slide 16 --}}
    <div class="slide hidden  flex flex-col justify-start items-center   ">
        <h2 class="title stroke  !text-start">Steps: <br>
            9.Now connect the two parts together to form the <br>
            shape of the car.</h2>

        <div class="flex gap-1 justify-center items-center">
            <img src="{{ asset('assets/images/N2/structure/c-str/s17.png') }}" class="large-img4" />
            <img src="{{ asset('assets/images/N2/structure/c-str/s18.png') }}" class="large-img4" />
        </div>



        <p class="note">Note: Assist children in fixing the pieces if required.</p>
    </div>


    {{-- slide 17 --}}
    <div class="slide hidden  flex flex-col justify-start items-center   ">
        <h2 class="title stroke  !text-start">Steps: <br>
            10.Turn the structure upside down and connect the wheels. <br>
            11.Connect one pair on the second cube and the other on
            the fifth cube.</h2>
        <img src="{{ asset('assets/images/N2/structure/c-str/s19.png') }}" class="large-img2" />
        <p class="note">Note: Assist children in fixing the pieces if required.</p>
    </div>


    {{-- slide 18 --}}
    <div class="slide hidden  flex flex-col justify-start items-center   ">
        <h2 class="title stroke  !text-start ">Steps: <br>
            12.The car is completed!</h2>
        <img src="{{ asset('assets/images/N2/structure/c-str/s20.png') }}" class="large-img2" />
        <p class="note">Note: Assist children in fixing the pieces if required.</p>
    </div>


    {{-- slide 19 --}}
    <div class="slide hidden  flex flex-col justify-start items-center   ">
        <img src="{{ asset('assets/images/N2/structure/c-str/s21.png') }}" class="large-img2" />
        <h2 class="title stroke ">Most cars have similar structures and look similar in <span
                class="!text-white">shape</span> .</h2>
    </div>


    {{-- slide 20 --}}
    <div class="slide hidden  flex flex-col justify-start items-center   ">
        <div class="flex gap-1 justify-center items-center">
            <img src="{{ asset('assets/images/N2/structure/c-str/s22.png') }}" class="large-img" />
            <img src="{{ asset('assets/images/N2/structure/c-str/s23.png') }}" class="large-img" />
        </div>
        <h2 class="title stroke ">Some cars have special <span class="!text-white">designs</span> and their
            <span class="!text-white">shape</span> structure looks different.
        </h2>




        <p class="note">Note: Encourage children to point out the shapes they see or describe how the cars look.</p>
    </div>

    {{-- slide 21 --}}
    <div class="slide hidden  flex flex-col justify-start items-center   ">
        <div class="flex gap-1 justify-center items-center">

            <img src="{{ asset('assets/images/N2/structure/c-str/s24.png') }}" class="large-img" />
            <img src="{{ asset('assets/images/N2/structure/c-str/s25.png') }}" class="large-img" />


        </div>
        <h2 class="title stroke ">This is a convertible. <br>
            This car can fold its roof and keep it hidden.</h2>




        <p class="note">Note: Encourage children to point out the shapes they see or describe how the cars look.</p>
    </div>

    {{-- slide 22 --}}
    <div class="slide hidden  flex flex-col justify-start items-center   ">
        <img src="{{ asset('assets/images/N2/structure/c-str/s26.png') }}" class="large-img2" />
        <h2 class="title stroke ">Watch how the <span class="!text-white">roof</span> appears from the back of the car,
            opens up and covers the car.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 23 --}}
    <div class="slide hidden  flex flex-col justify-start items-center   ">
        <div class="flex gap-1 justify-center items-center">

            <img src="{{ asset('assets/images/N2/structure/c-str/s27.png') }}" class="large-img" />
            <img src="{{ asset('assets/images/N2/structure/c-str/s28.png') }}" class="large-img" />


        </div>
        <h2 class="title stroke ">Vans and trucks are structures too! <br>
            Can you spot the <span class="!text-white">shapes</span> on them?</h2>




        <p class="note">Note: Encourage children to point out the shapes they see on the vehicles.</p>
    </div>

    {{-- slide 24 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke !text-white ">Individual Activity </h2>

        <img src="{{ asset('assets/images/N2/structure/c-str/s29.png') }}" class="large-img2" />

        <h2 class="title stroke !text-start">Mission: <br>
            Let’s build a small vehicle using the construction set.</h2>

        <p class="note">Note: Children can choose from the pictures above or any other small vehicles they like.
            You may assign 5-6 children to a set a DDQ blocks for this activity.</p>
    </div>

    {{-- slide 25 --}}
    <div class="slide hidden  flex flex-col items-center justify-between h-[50vh]  ">
        <ul class="title stroke list-decimal !text-start">
            <li>Choose a picture of the small vehicle you like.</li>
            <li>Look at the shapes on the vehicle.</li>
            <li>Find the pieces/blocks needed to form the shapes.</li>
            <li>Combine the parts together.</li>
            <li>Present your creation to your friends.</li>
        </ul>
        <p class="note">Note: Small vehicles means car, lorry, van, taxi, motorcycle etc. Teacher to assist children
            in connecting if they are unable to do it. <a class="text-amber-300 click-btn1" href="">Click here</a>
            if you need
            to show some examples.
        </p>
    </div>



    {{-- slide 26 --}}
    {{-- click here --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/N2/structure/c-str/s30.png') }}" />
        <h2 class="title stroke ">This is an example of the car with a rounded top.</h2>
    </div>


    {{-- slide 27 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start  ">

        <img src="{{ asset('assets/images/N2/structure/c-str/s31.png') }}" />

        <h2 class="title stroke ">This is an example of the convertible.</h2>





    </div>


    {{-- slide 28 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/N2/structure/c-str/s32.png') }}" />
        <h2 class="title stroke ">This is an example of a small truck.</h2>
    </div>


    {{-- slide 29 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/N2/structure/c-str/s33.png') }}" />
        <h2 class="title stroke ">This is an example of a van.</h2>
    </div>


    {{-- slide 30 --}}
    <div class="slide hidden  flex flex-col items-center justify-between h-[50vh]   ">

        <ul class="title stroke list-decimal !text-start">
            <h2 class="title stroke !text-start">Guided Questions During Presentation</h2>
            <li>What vehicle did you choose? Why?</li>
            <li>What shapes do you see on the vehicle? Can you
                point out the shapes?</li>
            <li>How did you build the shapes?</li>
            <li>Can you share what you like most about your vehicle?</li>

        </ul>

        <p class="note">Note: Small vehicles means car, lorry, van, taxi, motorcycle etc.
            Teacher to assist children in connecting if they are unable to do it.
        </p>
    </div>



    {{-- slide 31 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/N2/structure/c-str/s1.png') }}" />
        <h2 class="title stroke ">We learned that cars are structures!
            They are made up of many smaller parts.</h2>
    </div>


    {{-- slide 32 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex gap-1">
            <img src="{{ asset('assets/images/N2/structure/c-str/s1.png') }}" class="large-img" />
            <img src="{{ asset('assets/images/N2/structure/c-str/s20.png') }}" class="large-img" />
        </div>

        <h2 class="title stroke ">The shape structure of this car is made up
            of triangles and rectangles.</h2>

    </div>

    {{-- slide 33 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="text-start">
            <h2 class="title stroke ">Let's do: <br>
                4. Use the connectors to fix the rectangle pieces together
                as shown:</h2>
        </div>
        <div class="flex items-center ">
            <img src="{{ asset('assets/images/N2/structure/str/st28.png') }}" class="large-img4" />
            <img src="{{ asset('assets/images/N2/structure/str/st29.png') }}" class="large-img4" />
        </div>
        <p class="note">Note: Encourage and guide the children to try.</p>
    </div>


    {{-- slide 34 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="text-start">
            <h2 class="title stroke ">Let's do: <br>
                5. Continue to use the connectors to join the rectangle pieces as shown:</h2>
        </div>
        <div class="flex items-center justify-center gap-[1vw] ">
            <img src="{{ asset('assets/images/N2/structure/str/st30.png') }}" class="large-img4" />
            <img src="{{ asset('assets/images/N2/structure/str/st31.png') }}" class="large-img4" />
            <img src="{{ asset('assets/images/N2/structure/str/st32.png') }}" class="large-img4" />
        </div>
        <p class="note">Note: Encourage and guide the children to try.</p>
    </div>


    {{-- slide 35 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="text-start">
            <h2 class="title stroke ">Let's do: <br>
                6. Put your square upright. Can it stand on its own?</h2>
        </div>
        <img src="{{ asset('assets/images/N2/structure/str/st33.png') }}" class="large-img" />
        <p class="note">Note: Encourage and guide the children to try.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>


    {{-- slide 36 --}}
    <div class="slide hidden  flex flex-col items-center justify-between h-full ">
        <div class="text-start">
            <h2 class="title stroke ">Children, why do you think the structure is
                now able to stand on its own?</h2>
        </div>
        {{-- <img src="{{ asset('assets/images/N2/structure/str/st33.png') }}" class="w-[400px]" /> --}}
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>


    {{-- slide 37 --}}
    <div class="slide hidden  flex flex-col items-center  ">
        <img src="{{ asset('assets/images/N2/structure/str/st34.png') }}" />
        <h2 class="title stroke ">This structure can stand on its own because
            its base is wider and it can support its body.</h2>
    </div>


    {{-- slide 38 --}}
    <div class="slide hidden  flex flex-col items-center  ">
        <img src="{{ asset('assets/images/N2/structure/str/st35.png') }}" />
        <h2 class="title stroke ">It is like when you stand on your feet.
            You can stand still and you do not wobble.</h2>
        <p class="note">Note: Teacher can get children to compare how they feel when stand on tiptoes and on their feet.
        </p>
    </div>


    {{-- slide 39 --}}
    <div class="slide hidden  flex flex-col items-center  ">
        <img src="{{ asset('assets/images/N2/structure/str/st35.png') }}" />
        <h2 class="title stroke ">It is like when you stand on your feet.
            You can stand still and you do not wobble.</h2>
        <p class="note">Note: Teacher can get children to compare how they feel when stand on tiptoes and on their feet.
        </p>
    </div>


    {{-- slide 40 --}}
    <div class="slide hidden  flex flex-col items-center  ">
        <img src="{{ asset('assets/images/N2/structure/str/st36.png') }}" />
        <h2 class="title stroke ">Similarly, all these structures have a base that helps
            them stand firmly on the ground.</h2>
    </div>


    {{-- slide 41 --}}
    <div class="slide hidden  flex flex-col items-center  ">
        <img src="{{ asset('assets/images/N2/structure/str/st36.png') }}" />
        <h2 class="title stroke ">All the different structures are made up of smaller parts
            giving them their shape.</h2>
    </div>

    {{-- slide 16 --}}
    {{-- <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[40vw] h-[40vh] bg-cover bg-center flex flex-col justify-between items-start"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>Design a unique building. Draw it.</p>
            <p>What is the name of your building?___________________________________________________</p>
        </div>
    </div> --}}







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
            const returnRouteFromFirstSlide = "{{ route('CarstructureSelection') }}";
            const doneButtonRoute = "{{ route('CarstructureSelection') }}";

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
