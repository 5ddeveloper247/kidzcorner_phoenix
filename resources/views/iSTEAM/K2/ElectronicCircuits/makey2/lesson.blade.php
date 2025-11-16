@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- title --}}
    <h2 class="top-title stroke">Makey Makey (2)</h2>


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video1" class="video1 pointer-events-none">
            <source src="{{ asset('assets/images/K2/circuit/makey/319.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="title stroke">
            <h2>Children, what is a Makey Makey Board?
                What makes this Makey Makey Board work?</h2>
        </div>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/circuit/makey/m5.png') }}" class="img-xl" />
        <h2 class="title stroke">A Makey Makey Board is a circuit board. 
            The board is printed with wires (lines) that connect all the 
            tiny small parts together. The board has a complicated circuit 
            that allow us to use the 4 main parts in front.</h2>
    </div>


    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center  ">
        <img src="{{ asset('assets/images/K2/circuit/makey/m11.png') }}" class="img-xl" />
        <h2 class="title stroke">You need a <span class="!text-white">computer</span> to set up a <span
                class="text-white">Makey Makey Board</span>.
            You are actually part of this complete circuit that empowers
            the <span class="!text-white">Makey Makey</span> Board to work!</h2>
    </div>

    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center  ">
        <img src="{{ asset('assets/images/K2/circuit/makey/m8.png') }}" class="img-lg" />
        <h2 class="title stroke text-center">You get to "see" the use of a <span class="!text-white"> Makey Makey
                Board</span> with the
            help of the Microsoft Word <span class="!text-white">application</span>.</p>
    </div>


    {{-- Slide 5 --}}
    <div class="slide hidden  flex flex-col items-center justify-between h-[30vh]">
        <h2 class="title stroke">Makey Makey is an electronic toy. <br>
            Let's see how it can be turned into a toy that entertains us!</h2>
        <p class="note">Note: Display a set of Makey Makey. Have children name the items in a set of Makey Makey.</p>
    </div>


    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]  ">
        <h2 class="!text-white title stroke">Class Activity</h2>
        <h2 class="title stroke text-start">Let's find out: <br>
            How to turn a set of Makey Makey into a fun music maker?</h2>
        <p class="text-center note">Note: Have all children sit closer to watch the demo.</p>
    </div>


    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center  h-[28vw] justify-between">
        <ul class="text-start title stroke list-decimal">
            <h2>Steps:</h2>
            <li>Connect 3 alligator clips to a Makey Makey Board.</li>
        </ul>
        <img src="{{ asset('assets/images/K2/circuit/makey/m15.png') }}" class="img-lg" />
        <p class="note">Note: Invite three children help to do the step. Have other children observe the demo.</p>
    </div>


    {{-- slide 8 --}}
    <div class="slide hidden flex flex-col items-center  h-[28vw] justify-between">
        <ul class="text-start title stroke">
            <h2>Steps:</h2>
            <li>2. Connect the board to a computer using a USB cable.</li>
        </ul>
        <img src="{{ asset('assets/images/K2/circuit/makey/m16.png') }}" class="img-md" />
        <p class="note">Note: Invite a child helps to do the step. Have other children observe the demo.</p>
    </div>



    {{-- slide 9 --}}
    <div class="slide hidden flex flex-col items-center  h-[28vw] justify-between">
        <ul class="text-start title stroke">
            <h2>Steps:</h2>
            <li>3. Open up the bongos application page from the Makey
                Makey's website.</li>
        </ul>
        <img src="{{ asset('assets/images/K2/circuit/makey/m17.png') }}" class="img-xl" />
        <p class="note">Note: Tell children that this is an application created by the Makey Makey Website.</p>
    </div>



    {{-- slide 10 --}}
    <div class="slide hidden flex flex-col items-center  h-[28vw] justify-between">
        <ul class="text-start title stroke">
            <h2>Steps:</h2>
            <li>4. Use a mouse to play the bongos.</li>
        </ul>
        <div class="flex items-start gap-[1vw]">
            <img src="{{ asset('assets/images/K2/circuit/makey/m18.png') }}" class="img-md"  />
            <p class="note w-[130px]">Is it easy to play
                the bongos and
                create music
                using a mouse?</p>
        </div>
        <p class="note">Note: Demo. Then have children take turns to try the step and share their views.</p>
    </div>



    {{-- slide 11 --}}
    <div class="slide hidden flex flex-col items-center  h-[28vw] justify-between">
        <ul class="text-start title stroke">
            <h2>Steps:</h2>
            <li>5. Use the Makey Makey to play the bongos.</li>
        </ul>
        <div class="flex items-start gap-[1vw] ">
            <p class="note w-[120px] text-end">Is it easier to
                play the bongos
                and create music
                using the Makey
                Makey?</p>
            <video id="video2" class="video1 pointer-events-none">
                <source src="{{ asset('assets/images/K2/circuit/makey/320.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <p class="note">Note: Demo. Then have children take turns to try the step and share their views.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 12 --}}
    <div class="slide hidden flex flex-col items-center  h-[28vw] justify-between">
        <ul class="text-start title stroke">
            <h2>Steps:</h2>
            <li>6. Use paper clips to form a band.</li>
        </ul>
        <img src="{{ asset('assets/images/K2/circuit/makey/m19.png') }}" class="img-lg" />
        <p class="note">Note: Have children use some paper clips to form the band (big enough to wear around your wrist).
        </p>
    </div>



    {{-- slide 13 --}}
    <div class="slide hidden flex flex-col items-center  h-[28vw] justify-between">
        <ul class="text-start title stroke">
            <h2>Steps:</h2>
            <li>7. Wear the band and use the Makey Makey to play the
                bongos.</li>
        </ul>
        <div class="flex items-end gap-[1vw]">
            <p class="note w-[120px] text-end">Is it easier to
                play the bongos
                and create music
                this way?</p>
            <video id="video3" class="video-md pointer-events-none">
                <source src="{{ asset('assets/images/K2/circuit/makey/321.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <p class="note">Note: Demo. Then have children take turns to try the step and share their views.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 14 --}}
    <div class="slide hidden flex flex-col items-center  h-[28vw] justify-between">
        <ul class="text-start title stroke">
            <h2>Steps:</h2>
            <li>8. Use playdough to form 2 balls.</li>
        </ul>
        <img src="{{ asset('assets/images/K2/circuit/makey/m20.png') }}" class="img-lg" />
        <p class="note">Note: Have children use different coloured playdough to form the balls.</p>
    </div>



    {{-- slide 15 --}}
    <div class="slide hidden flex flex-col items-center  h-[28vw] justify-between">
        <ul class="text-start title stroke">
            <h2>Steps:</h2>
            <li>9. Change the setting and play the bongos.</li>
        </ul>
        <div class="flex items-start gap-[1vw] ">
            <img src="{{ asset('assets/images/K2/circuit/makey/m21.png') }}" class="img-md" />
            <p class="note w-[130px] text-start">Is it easier to
                play the bongos
                and create music
                this way?</p>
        </div>
        <p class="note">Then have children take turns to try the step and share their views. <br>
            Note: Demo (wear the band and tap on the 2 playdough balls).</p>
    </div>


    {{-- slide 16 --}}
    <div class="slide hidden flex flex-col items-center ">
        <ul class="text-start title stroke">
            <h2>Steps:</h2>
            <li>10. Hold on to the alligator clip that is connected to the
                Earth. Let 2 children to each hold on to one of the other
                alligator clip. Tap on the children to play the bongos.</li>
        </ul>
        <div class="flex items-start gap-[1vw]">
            <img src="{{ asset('assets/images/K2/circuit/makey/m22.png') }}" class="img-lg" />
            <p class="note w-[130px]">Is it easier to
                play the bongos
                and create music
                this way?</p>
        </div>
        <p class="note">Note: Demo. Then have children take turns to try the step and share their views.</p>
    </div>


    {{-- slide 17 --}}
    <div class="slide hidden flex flex-col items-center h-[28vw] justify-between ">
        <div class="text-center space-y-10">
            <h2 class="title stroke">Do you remember this simple circuit?Do you like to play the bongos and create music
                using a mouse or a set of Makey Makey? Why?</h2>

            <h2 class="title stroke">Which arrangement of the Makey Makey entertains you the
                most in playing the bongos and creating music? Why?
            </h2>
        </div>
        <p class="note">Note: Encourage children to share their feelings and views based on their hands-on experience.
        </p>
    </div>


    {{-- slide 18 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/circuit/makey/m23.png') }}" class="img-xl" />
        <h2 class="title stroke">Do you realise that you turned a set of Makey Makey into a
            music maker with the help of the bongos application.</h2>
        <p class="note">Note: Have children think can Makey Makey be a music maker without the bongos application.</p>
    </div>



    {{-- slide 19 --}}
    <div class="slide hidden flex flex-col items-center  h-[28vw] justify-between">
        <div class="flex items-center gap-[.5vw] ">
            <img src="{{ asset('assets/images/K2/circuit/makey/m24.png') }}" class="img-sm" />
            <video id="video4" class="video-md pointer-events-none">
                <source src="{{ asset('assets/images/K2/circuit/makey/322.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <h2 class="title stroke">You can use Makey Makey to create music only
            when you are part of this complete circuit that
            makes the Makey Makey Board work.</h2>
        <p class="note">Note: Guide children to "see" how electricity flow in a circuit with reference to the drawing.
        </p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- sldie 20 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/circuit/makey/m25.png') }}" class="img-xl" />
        <h2 class="title stroke">You can add conductors into this complete circuit to make
            Makey Makey a better, fun and interesting music maker.</h2>
        <p class="note">Note: Have children recall and say what a conductor is. <br>
            Then have them name the conductors in these 2 arrangements of Makey Makey.</p>
    </div>


    {{-- sldie 21 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/circuit/makey/m25.png') }}" class="img-xl" />
        <h2 class="title stroke">By adding in conductors to the tapping points, you actually
            turned these conductors into keypads.</h2>
        <p class="note">Note: Have children name the keypads (buttons) in these 2 arrangements of Makey Makey.</p>
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
        <button id="returnButton">
            <img src="{{ asset('assets/images/pptimages/return.png') }}" />
        </button>

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
        <button class=" nextButton ">
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
            const returnRouteFromFirstSlide = "{{ route('makey2Selection') }}";
            const doneButtonRoute = "{{ route('k2ElectronicCircuits') }}";

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
