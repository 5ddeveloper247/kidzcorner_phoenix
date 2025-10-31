@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">A Measuring Car (2)</h2>

    {{-- Slide 1 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/gl8.png') }}" class="large-img5" alt="">
        <h2 class="stroke title">Children, what did you build in the last lesson? How did you play with it? What can you use
            it for?</h2>
    </div>


    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/N2/SimpleMachines/b19.png') }}" class="large-img5" />
        <h2 class="stroke title">You pushed the car to make it go forward.
            You read the scale to know how far it went forward. </h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-30  -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>


    {{-- Slide 3 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/gl8.png') }}" class="large-img5" alt="">
        <h2 class="stroke title">It is measuring car. <br>
            You can use it to count how many units it goes forward.</h2>
    </div>


    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-between h-[50vh] slide hidden">
        <h2 class="title stroke">How do you make a measuring car go very far?
            How many ways can you make it go very far?</h2>
        <p class="note">Note: Encourage children to share their hands-on experiences.</p>
    </div>

    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/b20.png') }}" class="large-img5" />
        <h2 class="title stroke">This is way to make a measuring car go very far when you give it a push.</h2>
    </div>


    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/gl10.png') }}" class="large-img5" />
        <h2 class="title stroke">Do you know what this is?</h2>
        <p class="note">Note: Encourage children to boldly share their views.</p>
    </div>


    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/gl9.png') }}" class="large-img5" />
        <h2 class="title stroke">This is a ramp. It is a slanting surface with one end higher than the other end.</h2>
    </div>

    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/gl9.png') }}" class="large-img5" />
        <h2 class="stroke title">The <span class="text-white">ramp</span> looks like a shape.<br />It is a <span
                class="text-white">simple machine</span> called an <span class="text-white">inclined plane</span>.</h2>
    </div>


    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/gl9.png') }}" class="large-img5" />
        <h2 class="stroke title"><span class="text-white">Simple machines </span>are tools that help us to do work
            easily.<br />Let’s find out more about <span class="text-white">inclined planes!</span></h2>
    </div>

    {{-- slide 10 --}}
    <div class="flex flex-col  slide hidden justify-between h-[50vh] items-center">
        <h2 class="title stroke !text-white">Hands-on Time</h2>
        <div class="title stroke text-start">
            <h2>Mission:</h2>
            <ul>
                <li>Let’s push a measuring car down an inclined plane at different heights to see how far it will go.</li>
            </ul>
        </div>
        <p class="note">Note: Divide children into groups and give each group a set of materials.</p>
    </div>


    {{-- slide 11 --}}
    <div class="flex flex-col  slide hidden items-center">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>1. Push a measuring car down an inclined plane to see how far it goes. Read the scale and record your
                    reading.</li>
            </ul>
        </div>
        <img class="large-img" src="{{ asset('assets/images/N2/SimpleMachines/b21.png') }}" />
        <p class="note">Note: Have children work in groups to complete the mission. Have them record the reading in their
            learning journal.</p>

    </div>


    {{-- slide 12 --}}
    <div class="flex flex-col  slide hidden items-center">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>2. Change the height of the inclined plane and test again. Read the scale and record your reading.</li>
            </ul>
        </div>
        <img class="large-img" src="{{ asset('assets/images/N2/SimpleMachines/b21.png') }}" />
        <p class="note">Note: Have children work in groups to complete the mission.Have them record the reading in their
            learning journal.</p>

    </div>

    {{-- slide 13 --}}
    <div class="flex flex-col  slide hidden items-center">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>2. Change the height of the inclined plane and test again. Read the scale and record your reading,</li>
            </ul>
        </div>
        <img class="large-img" src="{{ asset('assets/images/N2/SimpleMachines/b22.png') }}" />
        <p class="note">Note: Have children work in groups to complete the mission.Have them record the reading in their
            learning journal.</p>

    </div>

    {{-- sldie 14 --}}
    <div class="flex flex-col  slide hidden items-center  h-[50vh] justify-between">
        <h2 class="title stroke">Based on your record, which height of inclined plane makes the car go very far? How many
            units does the car go? What do you find out from the test?</h2>
        <p class="note">Note: Have each group of children share their findings based on the record in their learning
            journal.
            Guide them to conclude in the end- a car will go very far (longer distance) if the inclined plane is sleeper.
        </p>
    </div>


    {{-- sldie 15 --}}
    <div class="flex flex-col  slide hidden items-center">
        <h2 class="stroke title">Learning Journal</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/bb1.png') }}" class="large-img5" />
    </div>



    {{-- ======= --}}
    {{-- Buttons --}}
    {{-- Complete button --}}
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
        document.addEventListener("DOMContentLoaded", () => {
            // Get all elements
            const slides = document.querySelectorAll(".slide");
            const nextBtn = document.querySelector(".nextButton");
            const returnBtn = document.getElementById("returnButton");
            const doneBtn = document.querySelector(".doneButton");

            let currentIndex = 0;

            // Pause all videos in current slide
            function pauseAllVideos() {
                if (slides[currentIndex]) {
                    const videos = slides[currentIndex].querySelectorAll("video");
                    videos.forEach(video => {
                        if (!video.paused) {
                            video.pause();
                        }
                    });
                }
            }

            // Show slide and update buttons
            function showSlide(index) {
                pauseAllVideos();

                // Hide all slides
                slides.forEach(slide => slide.classList.add("hidden"));

                // Show current slide
                slides[index].classList.remove("hidden");

                currentIndex = index;

                // Update button visibility
                const isLastSlide = (index === slides.length - 1);

                if (isLastSlide) {
                    nextBtn.style.display = "none";
                    doneBtn.style.display = "block";
                } else {
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
                    window.location.href = "{{ route('MeasuringCar2Selection') }}";
                } else {
                    showSlide(currentIndex - 1);
                }
            });

            // Done button
            doneBtn.addEventListener("click", () => {
                window.location.href = "{{ route('MeasuringCar2Selection') }}";
            });

            // Initialize
            showSlide(0);
        });

        // Video toggle function
        function toggleVideo(videoId) {
            const video = document.getElementById(videoId);
            if (video) {
                if (video.paused) {
                    video.play();
                } else {
                    video.pause();
                }
            }
        }
    </script>
@endpush
