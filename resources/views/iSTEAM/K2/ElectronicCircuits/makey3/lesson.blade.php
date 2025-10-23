@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="{{ asset('assets/images/K2/circuit/makey/m21.png') }}" />
        <div class="title stroke">
            <h2>Children, what are used to set up this Makey Makey
                music maker?</h2>
        </div>
        <p class="note">Note: Have children recall and share what they have learnt.</p>
    </div>


    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center gap-4">
        <img src="{{ asset('assets/images/K2/circuit/makey/m21.png') }}" />
        <h2 class="title stroke">Why were playdough balls and paper clips band added to this
            set up? How do you play this music maker?</h2>
        <p class="note">Note: Have children recall and share what they have learnt.</p>
    </div>


    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center gap-3 ">
        <img src="{{ asset('assets/images/K2/circuit/makey/m26.png') }}" />
        <h2 class="title stroke">With the help of the bongos application, you turned a set of
            Makey Makey into a music maker.</h2>
        <p class="note">Note: Tell children that Makey Makey can only be a toy when it's connected to certain computer
            applications.</p>
    </div>


    {{-- slide 4 --}}
    <div class="slide hidden flex flex-col items-center  h-full justify-around">

        <video id="video1" class="w-full max-w-[42rem] pointer-events-none">
            <source src="{{ asset('assets/images/K2/circuit/makey/323.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">You wear the paper clip band and tap on the playdough balls
            to create music using this Makey Makey music maker.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')"
            class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
      <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center  h-full justify-around">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/circuit/makey/m24.png') }}" class="w-[370px]" />
            <video id="video2" class="w-full max-w-[35rem] pointer-events-none">
                <source src="{{ asset('assets/images/K2/circuit/makey/323.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <h2 class="title stroke">You wear the paper clip band and tap on the playdough balls
            to create music using this Makey Makey music maker.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')"
            class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
      <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center  h-full justify-around">
        <video id="video3" class="w-full max-w-[40rem] pointer-events-none">
            <source src="{{ asset('assets/images/K2/circuit/makey/323.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Wearing a paper clips band gives you the convenience of not
            needing to always hold on to the alligator clip that is
            connected to the Earth of the board while creating music.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')"
            class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
      <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center  h-full justify-around">
        <video id="video4" class="w-full max-w-[40rem] pointer-events-none">
            <source src="{{ asset('assets/images/K2/circuit/makey/323.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Turning the playdough balls into keypads makes the process of
            creating music easier and smoother.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')"
            class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
      <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">Now it's time for you to get creative!
            Set up and turn a set of Makey Makey into a fun music maker
            with the help of a piano application!</h2>
    </div>


    {{-- slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-full  ">
        <h2 class="!text-white title stroke">Hands-on Time</h2>
        <h2 class="title stroke text-start">Mission: <br>
            Let's use our creativity to set up and turn a set of Makey
            Makey into a fun music maker with the help of a piano
            application!</h2>
        <div class="flex flex-col items-center gap-2">
            <img src="{{ asset('assets/images/K2/circuit/makey/m27.png') }}" />
            <a href="https://apps.makeymakey.com/piano/" class="text-white">https://apps.makeymakey.com/piano/</a>
        </div>
        <p class="text-center note">Note: Decide if this is a class activity or small groups activity.</p>
    </div>



    {{-- slide 10 --}}
    <div class="slide hidden flex flex-col items-center  h-full justify-around">
        <ul class="text-start title stroke">
            <h2>Steps:</h2>
            <li>1. Open up the piano application page from the Makey Makey's
                website.</li>
        </ul>
        <div class="flex items-start gap-2">
            <img src="{{ asset('assets/images/K2/circuit/makey/m27.png') }}" />
            <a href="https://apps.makeymakey.com/piano/" class="text-white">https://apps.makeymakey.com/piano/</a>
        </div>
        <p class="note">Note: Guide children to do the step.</p>
    </div>



    {{-- slide 11 --}}
    <div class="slide hidden flex flex-col items-center  h-full justify-around">
        <ul class="text-start title stroke">
            <h2>Steps:</h2>
            <li>2. Based on the picture of the piano application, connect
                alligator clips to a Makey Makey Board.</li>
        </ul>
        <div class="flex items-end gap-5">
            <img src="{{ asset('assets/images/K2/circuit/makey/m28.png') }}" />
            <p class="note w-[140px] text-end">The text only show
                when you roll the
                mouse cursor over the
                key.</p>
        </div>
        <p class="note">Note: Have children work together to complete the step.</p>
    </div>


    {{-- slide 12 --}}
    <div class="slide hidden flex flex-col items-center  h-full justify-around">
        <ul class="text-start title stroke">
            <h2>Steps:</h2>
            <li>3. How do you want to set up and play with this Makey Makey
                music maker? Discuss, decide and draw the design in the
                learning journal.</li>
            <li>4. Do the set up based on your design</li>
            <li>5. Create a piece of music and record it in the learning journal.</li>
            <li>6. Showcase your work.</li>
        </ul>
        <p class="note">Note: Have children work together to complete the steps.
            When they showcase their work, have them present their ideas too.</p>
    </div>



    {{-- slide 13 --}}
    <div class="slide hidden flex flex-col items-center  h-full justify-around">
        <ul class="text-start title stroke">
            <h2>Steps:</h2>
            <li>7. Modify your Makey Makey music maker such that more
                players can work together at the same time to create a
                piece of music. Draw the design in the learning journal.</li>
            <li>8. Create a piece of music and record it in the learning
                journal.</li>
            <li>9. Showcase your work.</li>
        </ul>
        <p class="note">Note: Have children work together to complete the steps. <br>
            When they showcase their work, have them present their ideas too. </p>
    </div>


    {{-- slide 14 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">Let’s get ideas from some samples!</h2>
    </div>



    {{-- slide 15 --}}
    <div class="slide hidden flex flex-col items-center gap-3">
        <img src="{{ asset('assets/images/K2/circuit/makey/m29.png') }}" />
        <p class="note">Note: Guide children to talk about the set up of this Makey Makey music maker
            (e.g. design idea, things used, for how many players at one go).</p>
    </div>


    {{-- slide 16 --}}
    <div class="slide hidden flex flex-col items-center gap-3">
        <img src="{{ asset('assets/images/K2/circuit/makey/m30.png') }}" />
        <p class="note">Note: Guide children to talk about the set up of this Makey Makey music maker
            (e.g. design idea, things used, for how many players at one go).</p>
    </div>


    {{-- slide 17 --}}
    <div class="slide hidden flex flex-col items-center gap-3">
        <img src="{{ asset('assets/images/K2/circuit/makey/m31.png') }}" />
        <p class="note">Note: Guide children to talk about the set up of this Makey Makey music maker
            (e.g. design idea, things used, for how many players at one go).</p>
    </div>


    {{-- slide 18 --}}
    <div class="slide hidden flex flex-col items-center gap-3">
        <img src="{{ asset('assets/images/K2/circuit/makey/m32.png') }}" />
        <p class="note">Note: Guide children to talk about the set up of this Makey Makey music maker
            (e.g. design idea, things used, for how many players at one go).</p>
    </div>


    {{-- slide 19 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4 p-[10px]">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[536px] bg-cover bg-center flex flex-col items-start"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('assets/images/K2/circuit/makey/m33.png') }}" />
        </div>
    </div>


    {{-- sldie 20 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4 p-[10px]">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[536px] bg-cover bg-center flex flex-col items-start"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('assets/images/K2/circuit/makey/m34.png') }}" />
        </div>
    </div>


    {{-- sldie 21 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4 p-[10px]">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[536px] bg-cover bg-center flex flex-col items-start"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('assets/images/K2/circuit/makey/m35.png') }}" />
        </div>
    </div>

    {{-- slide 22 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4 p-[10px]">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[536px] bg-cover bg-center flex flex-col items-start"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('assets/images/K2/circuit/makey/m36.png') }}" />
        </div>
    </div>


    {{-- ====================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button
         class="doneButton">
 <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    <div id="buttons" class="absolute  flex flex-row ">
        <!-- Return Button -->
        <a class="relative w-24 h-24 button-fade-in bg-[#28674de0] rounded-[30px] " id="returnButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class=" w-14 h-14"
                src="{{ asset('assets/images/pptimages/reverse-icon.png') }}" />
        </a>

        <!-- Home Button -->
        <button class="relative w-24 h-24 button-fade-in bg-sky-500 rounded-[30px] " id="homeButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class=" w-14 h-14"
                src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
        </button>

        <!-- Close Button -->
        <button  id="closeButton">
                        <img src="{{ asset('assets/images/pptimages/cancel.png') }}" />

        </button>
    </div>

    {{-- next Button --}}
    <div class="down-btn-container">
        <button class="cursor-pointer nextButton w-66 h-[75px] relative bg-[#F8A23A]  rounded-[30px]">
            <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
            <div class="absolute left-[8.22px] top-[3.17px] "> <img src="/assets/images/pptimages/Vector4.png" /> </div>
            <span class="flex items-center  text-white text-5xl font-bold stroke">NEXT
            </span>
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
            const returnRouteFromFirstSlide = "{{ route('makey3Selection') }}";
            const doneButtonRoute = "{{ route('makey3Selection') }}";

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

                // Show "Done" button on last slide, otherwise show "Next" button
                const isLastSlide = index === slides.length - 1;

                if (isLastSlide) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            // NEXT button - go to next slide
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
                // If on first slide, navigate to the return route
                if (currentSlide === 0) {
                    window.location.href = returnRouteFromFirstSlide;
                    return;
                }

                // Otherwise, go to previous slide
                currentSlide--;
                showSlide(currentSlide);
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
