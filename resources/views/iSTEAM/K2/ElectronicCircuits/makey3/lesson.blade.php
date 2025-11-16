@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Makey Makey (3)</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/circuit/makey/m21.png') }}" class="img-md" />
        <h2 class="title stroke">Children, what are used to set up this Makey Makey
            music maker?</h2>
        <p class="note">Note: Have children recall and share what they have learnt.</p>
    </div>

    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/circuit/makey/m21.png') }}" class="img-md" />
        <h2 class="title stroke">Why were playdough balls and paper clips band added to this
            set up? How do you play this music maker?</h2>
        <p class="note">Note: Have children recall and share what they have learnt.</p>
    </div>

    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/circuit/makey/m26.png') }}" class="img-xl" />
        <h2 class="title stroke">With the help of the bongos application, you turned a set of
            Makey Makey into a music maker.</h2>
        <p class="note">Note: Tell children that Makey Makey can only be a toy when it's connected to certain computer
            applications.</p>
    </div>

    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center">
        <video id="video1" class="pointer-events-none">
            <source src="{{ asset('assets/images/K2/circuit/makey/323.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">You wear the paper clip band and tap on the playdough balls
            to create music using this Makey Makey music maker.</h2>
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-center">
            <img src="{{ asset('assets/images/K2/circuit/makey/m24.png') }}" class="img-h-sm" />
            <video id="video2" class="video-md pointer-events-none">
                <source src="{{ asset('assets/images/K2/circuit/makey/323.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <h2 class="title stroke">You wear the paper clip band and tap on the playdough balls
            to create music using this Makey Makey music maker.</h2>
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col items-center">
        <video id="video3" class="w-full max-w-[40rem] pointer-events-none">
            <source src="{{ asset('assets/images/K2/circuit/makey/323.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Wearing a paper clips band gives you the convenience of not
            needing to always hold on to the alligator clip that is
            connected to the Earth of the board while creating music.</h2>
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center">
        <video id="video4" class="w-full max-w-[40rem] pointer-events-none">
            <source src="{{ asset('assets/images/K2/circuit/makey/323.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Turning the playdough balls into keypads makes the process of
            creating music easier and smoother.</h2>
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">Now it's time for you to get creative!
            Set up and turn a set of Makey Makey into a fun music maker
            with the help of a piano application!</h2>
    </div>

    {{-- Slide 9 --}}
    <div class="slide hidden flex flex-col items-center h-[28vw] justify-between">
        <h2 class="!text-white title stroke">Hands-on Time</h2>
        <h2 class="title stroke text-start">Mission: <br>
            Let's use our creativity to set up and turn a set of Makey
            Makey into a fun music maker with the help of a piano
            application!</h2>
        <div class="flex flex-col items-center">
            <img src="{{ asset('assets/images/K2/circuit/makey/m27.png') }}" class="img-tiny" />
            <a href="https://apps.makeymakey.com/piano/" class="text-white">https://apps.makeymakey.com/piano/</a>
        </div>
        <p class="text-center note">Note: Decide if this is a class activity or small groups activity.</p>
    </div>

    {{-- Slide 10 --}}
    <div class="slide hidden flex flex-col items-center h-[28vw] justify-between">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke">
                <li>Open up the piano application page from the Makey Makey's website.</li>
            </ol>
        </div>
        <div class="flex flex-col items-start">
            <img src="{{ asset('assets/images/K2/circuit/makey/m27.png') }}" class="img-xs" />
            <a href="https://apps.makeymakey.com/piano/" class="text-white">https://apps.makeymakey.com/piano/</a>
        </div>
        <p class="note">Note: Guide children to do the step.</p>
    </div>

    {{-- Slide 11 --}}
    <div class="slide hidden flex flex-col items-center h-[28vw] justify-between">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="2">
                <li>Based on the picture of the piano application, connect alligator clips to a Makey Makey Board.</li>
            </ol>
        </div>
        <div class="flex items-end">
            <img src="{{ asset('assets/images/K2/circuit/makey/m28.png') }}" class="img-xs" />
            <p class="note w-[140px] text-end">The text only show
                when you roll the
                mouse cursor over the
                key.</p>
        </div>
        <p class="note">Note: Have children work together to complete the step.</p>
    </div>

    {{-- Slide 12 --}}
    <div class="slide hidden flex flex-col items-center h-[28vw] justify-between">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="3">
                <li>How do you want to set up and play with this Makey Makey music maker? Discuss, decide and draw the
                    design in the learning journal.</li>
                <li>Do the set up based on your design</li>
                <li>Create a piece of music and record it in the learning journal.</li>
                <li>Showcase your work.</li>
            </ol>
        </div>
        <p class="note">Note: Have children work together to complete the steps.
            When they showcase their work, have them present their ideas too.</p>
    </div>

    {{-- Slide 13 --}}
    <div class="slide hidden flex flex-col items-center h-[28vw] justify-between">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="7">
                <li>Modify your Makey Makey music maker such that more players can work together at the same time to create
                    a piece of music. Draw the design in the learning journal.</li>
                <li>Create a piece of music and record it in the learning journal.</li>
                <li>Showcase your work.</li>
            </ol>
        </div>
        <p class="note">Note: Have children work together to complete the steps. <br>
            When they showcase their work, have them present their ideas too. </p>
    </div>

    {{-- Slide 14 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">Let's get ideas from some samples!</h2>
    </div>

    {{-- Slide 15 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/circuit/makey/m29.png') }}" class="img-lg" />
        <p class="note">Note: Guide children to talk about the set up of this Makey Makey music maker
            (e.g. design idea, things used, for how many players at one go).</p>
    </div>

    {{-- Slide 16 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/circuit/makey/m30.png') }}" class="img-lg" />
        <p class="note">Note: Guide children to talk about the set up of this Makey Makey music maker
            (e.g. design idea, things used, for how many players at one go).</p>
    </div>

    {{-- Slide 17 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/circuit/makey/m31.png') }}" class="img-lg" />
        <p class="note">Note: Guide children to talk about the set up of this Makey Makey music maker
            (e.g. design idea, things used, for how many players at one go).</p>
    </div>

    {{-- Slide 18 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/circuit/makey/m32.png') }}" class="img-lg" />
        <p class="note">Note: Guide children to talk about the set up of this Makey Makey music maker
            (e.g. design idea, things used, for how many players at one go).</p>
    </div>

    {{-- Slide 19 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-4 p-[10px]">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center flex flex-col items-start"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('assets/images/K2/circuit/makey/m33.png') }}" />
        </div>
    </div>

    {{-- Slide 20 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-4 p-[10px]">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center flex flex-col items-start"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('assets/images/K2/circuit/makey/m34.png') }}" />
        </div>
    </div>

    {{-- Slide 21 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-4 p-[10px]">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center flex flex-col items-start"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('assets/images/K2/circuit/makey/m35.png') }}" />
        </div>
    </div>

    {{-- Slide 22 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-4 p-[10px]">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center flex flex-col items-start"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('assets/images/K2/circuit/makey/m36.png') }}" />
        </div>
    </div>

    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    <div id="buttons" class="absolute flex flex-row">
        <button id="returnButton">
            <img src="{{ asset('assets/images/pptimages/return.png') }}" />
        </button>

        <button id="homeButton">
            <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
        </button>

        <button id="closeButton">
            <img src="{{ asset('assets/images/pptimages/cancel.png') }}" />
        </button>
    </div>

    <div class="down-btn-container">
        <button class="cursor-pointer nextButton">
            <img src="{{ asset('assets/images/pptimages/next-btn.png') }}" />
        </button>
    </div>
@endsection

@push('script')
    <script>
        function toggleVideo(videoId) {
            const video = document.getElementById(videoId);
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        }

        document.addEventListener("DOMContentLoaded", () => {
            const slides = document.querySelectorAll(".slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");

            let currentSlide = 0;

            const returnRouteFromFirstSlide = "{{ route('makey3Selection') }}";
            const doneButtonRoute = "{{ route('k2ElectronicCircuits') }}";

            function pauseAllVideos() {
                const videos = document.querySelectorAll('video');
                videos.forEach(video => {
                    if (!video.paused) {
                        video.pause();
                    }
                });
            }

            function showSlide(index) {
                pauseAllVideos();

                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                const isLastSlide = index === slides.length - 1;

                if (isLastSlide) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                });
            });

            returnButton.addEventListener("click", () => {
                if (currentSlide === 0) {
                    window.location.href = returnRouteFromFirstSlide;
                    return;
                }

                currentSlide--;
                showSlide(currentSlide);
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = doneButtonRoute;
                });
            }

            showSlide(currentSlide);
        });
    </script>
@endpush
