@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Hole Punching Machine</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-between h-[50vh]">
        <h2 class="title stroke">Children, today we are going to build another Rube Goldberg Machine!</h2>
        <p class="note">Note: Have children recall and say what a Rube Goldberg Machine is, why is it called so and why people created different Rube Goldberg Machines.</p>
    </div>

    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video1" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/41.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Let's watch a video!</h2>
        <p class="note">Note: Turn to next page to watch the video in slow motion.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video2" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/42.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Now, let's watch the video in slow motion!</h2>
        <p class="note">Note: Have children freely talk about what they see. Do not correct them on the terms used.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/sm/punching/pn3.png') }}" class="img-xl" />
        <h2 class="title stroke">This is the full view of the machine.</h2>
    </div>

    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/sm/punching/pn4.png') }}" class="img-xl" />
        <h2 class="title stroke">What are the things used in this machine?</h2>
    </div>

    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/sm/punching/pnn.png') }}" class="img-xl" />
        <h2 class="title stroke">What are the things used in this machine?</h2>
    </div>

    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video3" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/41.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">What is the use of the machine?</h2>
        <p class="note">Note: Have children watch and talk about what happens in the last part of the video (What does the machine do?).</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video4" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/41.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Yes, this is a Rube Goldberg Machine to punch holes in a paper, just for fun!</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <h2 class="title stroke !text-white">Class Activity</h2>
        <div class="text-start">
            <h2 class="title stroke">Mission:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="1">
                <li>Build a Rube Goldberg Machine to punch holes in a sheet of paper.</li>
            </ol>
        </div>
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="1">
                <li>Put things together to set up the machine.</li>
                <li>Test the machine.</li>
            </ol>
        </div>
    </div>

    {{-- Slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <div class="text-start">
            <h2 class="title stroke">Possible questions during hands-on session:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="1">
                <li>What do we turn?</li>
                <li>What happens when we turn the bolt? What does this nut do?</li>
                <li>Why does the ball roll down?</li>
                <li>What should you do to make the last book always fall on the hole punch?</li>
            </ol>
        </div>
        <p class="note">Note: Have children freely share their ideas and encourage them to try out the ideas. After hands-on session, continue with reflection on the following pages.</p>
    </div>

    {{-- Slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <h2 class="title stroke !text-white">Reflection</h2>
        <img src="{{ asset('assets/images/K1/sm/punching/pn5.png') }}" class="img-lg" />
        <h2 class="title stroke">What happens first?</h2>
    </div>

    {{-- Slide 12 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K1/sm/punching/pn5.png') }}" class="img-lg" />
        <h2 class="title stroke">We turn the bolt, which moves forward and pushes the ball.</h2>
    </div>

    {{-- Slide 13 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K1/sm/punching/pn6.png') }}" class="!w-[30vw]" />
        <h2 class="title stroke">This is a <span class="!text-white">nut and bolt</span>. It has a spiral groove on it called thread.</h2>
    </div>

    {{-- Slide 14 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K1/sm/punching/pn7.png') }}" class="!w-[30vw]" />
        <h2 class="title stroke">A nut and bolt is an example of a <span class="!text-white">simple machine</span> called <span class="!text-white">screw</span>.</h2>
    </div>

    {{-- Slide 15 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K1/sm/punching/pn8.png') }}" class="img-md" />
        <h2 class="title stroke">These are different <span class="!text-white">screw</span>.</h2>
    </div>

    {{-- Slide 16 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K1/sm/punching/pn9.png') }}" class="img-md" />
        <h2 class="title stroke">Why does the ball roll down?</h2>
    </div>

    {{-- Slide 17 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K1/sm/punching/pn9.png') }}" class="img-md" />
        <h2 class="title stroke">When the ball gets pushed by the bolt, it rolls down a slope. A slope is an inclined plane.</h2>
    </div>

    {{-- Slide 18 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K1/sm/punching/pn10.png') }}" class="img-md" />
        <h2 class="title stroke">How do you make the books always fall one after another?</h2>
    </div>

    {{-- Slide 19 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <video id="video5" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/43.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Position the books such that they always fall one after another and create a <span class="!text-white">domino effect</span>.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 20 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K1/sm/punching/pn3.png') }}" class="img-xl" />
        <h2 class="title stroke">How do you (always) get holes punched in the paper?</h2>
    </div>

    {{-- Slide 21 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K1/sm/punching/pn10.png') }}" class="img-md" />
        <h2 class="title stroke">Arrange the books from small to big.</h2>
    </div>

    {{-- Slide 22 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K1/sm/punching/pn12.png') }}" class="img-md" />
        <h2 class="title stroke">Place the hole punch with the paper near the last book so that the book falls on the hole punch and presses onto it.</h2>
    </div>

    {{-- Slide 23 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center text-center" style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>Draw the Rube Goldberg Machine that you have created to punch holes in a sheet of paper.</p>
        </div>
    </div>

    {{-- Complete button --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    {{-- Buttons --}}
    <div id="buttons" class="absolute flex flex-row gap-6">
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

    {{-- Next Button --}}
    <div class="down-btn-container">
        <button class="nextButton">
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

            const returnRouteFromFirstSlide = "{{ route('PunchingSelection') }}";
            const doneButtonRoute = "{{ route('K1simpleMachines') }}";

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

                if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
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