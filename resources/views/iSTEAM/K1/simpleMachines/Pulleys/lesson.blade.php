@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Pulleys to the Rescue</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center">
        <video id="video1" class="pointer-events-none video-md">
            <source src="{{ asset('assets/images/K1/sm/36.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">How are the big boxes lifted?</h2>
        <p class="note">Note: Let children share what they see.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video2" class="pointer-events-none video-md">
            <source src="{{ asset('assets/images/K1/sm/36.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">A crane lifts the big boxes.</h2>
        <p class="note">Note: Ask children to share any information they know about cranes.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/sm/pulley/pu2.png') }}" class="img-lg" />
        <h2 class="title stroke">A crane has a special thing called a <span class="!text-white">pulley</span> on it.</h2>
    </div>

    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/sm/pulley/pu3.png') }}" class="img-lg" />
        <h2 class="title stroke">This is a <span class="!text-white">pulley</span>. It has wheel.</h2>
    </div>

    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/sm/pulley/pu4.png') }}" class="img-md" />
        <h2 class="title stroke">To lift a heavy object, a rope or chain is first wrapped around the wheel.</h2>
    </div>

    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/sm/pulley/pu5.png') }}" class="img-h-md" />
        <h2 class="title stroke">The heavy object attached to the other end of the rope or chain with a hook.</h2>
    </div>

    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/sm/pulley/pu5.png') }}" class="img-h-md" />
        <h2 class="title stroke">When one end of the rope is pulled, the heavy object on the other end will be lifted up.
        </h2>
    </div>

    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/sm/pulley/pu2.png') }}" class="img-lg" />
        <h2 class="title stroke">This is how a <span class="!text-white">pulley</span> helps the crane to lift the heavy
            boxes.</h2>
    </div>

    {{-- Slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/sm/pulley/pu6.png') }}" class="img-md" />
        <h2 class="title stroke">A <span class="!text-white">pulley</span> is a type of simple machine.</h2>
        <p class="note">Note: Let children share what they think a simple machine is.</p>
    </div>

    {{-- Slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[18vw]">
        <h2 class="title stroke"><span class="!text-white">Simple machines</span> are basic tools that help us to do work
            easily.</h2>
        <p class="note">Note: Explain that there are 6 types of simple machines and pulley is one of it.</p>
    </div>

    {{-- Slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[18vw]">
        <h2 class="title stroke">Do you know how a <span class="!text-white">pulley</span> helps us to do work easily?</h2>
        <p class="note">Note: Let children share what they know.</p>
    </div>

    {{-- Slide 12 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/sm/pulley/pu7.png') }}" class="img-h-md" />
        <h2 class="title stroke">A <span class="!text-white">pulley</span> helps us to move or lift a heavy object easily.
        </h2>
        <p class="note">Note: Guide children to understand that a pulley is a simple machine as it helps us to do our work
            easily.</p>
    </div>

    {{-- Slide 13 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[30vh]">
        <h2 class="title stroke">Can you name some things which have pulleys on them?</h2>
        <p class="note">Note: Have children name some things in their surroundings where pulleys are used.</p>
    </div>

    {{-- Slide 14 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/sm/pulley/pu8.png') }}" class="img-md" />
        <h2 class="title stroke">What is this? Where is the pulley? What does it do?</h2>
    </div>

    {{-- Slide 15 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/sm/pulley/pu8.png') }}" class="img-md" />
        <h2 class="title stroke">People draw water from a well with the rope on a pulley. It helps to lift a heavy pail of
            water up easily.</h2>
    </div>

    {{-- Slide 16 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/sm/pulley/pu9.png') }}" class="img-md" />
        <h2 class="title stroke">What is this? Where is the pulley? What does it do?</h2>
    </div>

    {{-- Slide 17 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video3" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/37.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">The pulley is on the window blinds. When we pull the rope on the pulley, the blinds go up
            and down easily.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 18 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/sm/pulley/pu11.png') }}" class="img-h-md" />
        <h2 class="title stroke">What is this? Where is the pulley? What does it do?</h2>
    </div>

    {{-- Slide 19 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/sm/pulley/pu11.png') }}" class="img-h-md" />
        <h2 class="title stroke">The pulley is on the exercise machine. It helps a person to lift weights and be fit.</h2>
    </div>

    {{-- Slide 20 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/sm/pulley/pu12.png') }}" class="img-md" />
        <h2 class="title stroke">What is this? Where is the pulley? What does it do?</h2>
    </div>

    {{-- Slide 21 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video4" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/38.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Cable cars are a mode of transport. A pulley helps to move them from one place to another
            easily.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 22 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/sm/pulley/pu14.png') }}" class="img-lg" />
        <h2 class="title stroke">What is this? Where is the pulley? What does it do?</h2>
    </div>

    {{-- Slide 23 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/sm/pulley/pl1.png') }}" class="img-lg" />
        <h2 class="title stroke">The pulley on the fishing rod helps us to pull the fishing line in easily and catch a
            fish.</h2>
    </div>

    {{-- Slide 24 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/sm/pulley/pu15.png') }}" class="img-lg" />
        <h2 class="title stroke">What is this? Where is the pulley? What does it do?</h2>
    </div>

    {{-- Slide 25 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/sm/pulley/pl2.png') }}" class="img-lg" />
        <h2 class="title stroke">The pulley is on the sail boat. When the sailor pulls the rope on the pulley, the sails
            are raised and lowered easily.</h2>
    </div>

    {{-- Slide 26 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke !text-white">Class Activity</h2>
        <img src="{{ asset('assets/images/K1/sm/pulley/pl3.png') }}" class="img-xl" />
        <div class="text-start">
            <h2 class="stroke title">Let's find out:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="1">
                <li>What is the easiest way to lift a heavy object.</li>
            </ol>
        </div>
    </div>

    {{-- Slide 27 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/sm/pulley/pl4.png') }}" class="img-xl" />
        <div class="text-start">
            <h2 class="stroke title !text-white">What do you think will happen (Prediction):</h2>
            <ol class="lesson-ul list-decimal title stroke" start="1">
                <li>Is it easier to lift a heavy object with our hands or using pulley?</li>
            </ol>
        </div>
        <p class="note text-center">Note: Have children vote for their choice and record the result in a graph (refer to
            the sample on the next page).</p>
    </div>

    {{-- Slide 28 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">Is it easier to lift a heavy object with our hands or using a pulley?</h2>
        <img src="{{ asset('assets/images/K1/sm/pulley/pl5.png') }}" class="img-sm" />
        <p class="note text-center">Note: Plot children's prediction on the graph. At the end, put a star to mark the final
            result.</p>
    </div>

    {{-- Slide 29 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/sm/pulley/pl6.png') }}" class="img-xl" />
        <div class="text-start">
            <h2 class="stroke title !text-white">What do you think will happen (Prediction):</h2>
            <ol class="lesson-ul list-decimal title stroke" start="1">
                <li>Is it easier to lift a heavy object with one pulley or two pulleys?</li>
            </ol>
        </div>
        <p class="note text-center">Note: Have children vote for their choice and record the result in a graph (refer to
            the sample on the next page).</p>
    </div>

    {{-- Slide 30 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">Is it easier to lift a heavy object using one pulley or two pulleys?</h2>
        <img src="{{ asset('assets/images/K1/sm/pulley/pl7.png') }}" class="img-md" />
        <p class="note text-center">Note: Plot children's prediction on the graph. At the end, put a star to mark the final
            result.</p>
    </div>

    {{-- Slide 31 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke !text-white">Let's do (Experiment Procedure):</h2>
            <ol class="lesson-ul list-decimal title stroke" start="1">
                <li>Choose an object and lift it with your hands.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K1/sm/pulley/pu23.png') }}" class="img-md" />
    </div>

    {{-- Slide 32 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke !text-white">Let's do (Experiment Procedure):</h2>
            <ol class="lesson-ul list-decimal title stroke" start="2">
                <li>Put the object in the basket of a pulley. Pull the rope to lift the object</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K1/sm/pulley/pl8.png') }}" class="img-xl" />
    </div>

    {{-- Slide 33 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke !text-white">What do you observe (Result):</h2>
            <ol class="lesson-ul list-decimal title stroke" start="1">
                <li>Is it easier to lift a heavy object with our hands or using a pulley?</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K1/sm/pulley/pl4.png') }}" class="img-xl" />
        <p class="note">Note: Put a star to mark the final result on the graph.</p>
    </div>

    {{-- Slide 34 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke !text-white">Let's do (Experiment Procedure):</h2>
            <ol class="lesson-ul list-decimal title stroke" start="3">
                <li>Now, put the object into the basket of two pulleys and pull the rope to lift the object.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K1/sm/pulley/pl10.png') }}" class="img-xl" />
    </div>

    {{-- Slide 35 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K1/sm/pulley/pl6.png') }}" class="img-xl" />
        <div class="text-start">
            <h2 class="title stroke !text-white">What do you observe (Result):</h2>
            <ol class="lesson-ul list-decimal title stroke" start="2">
                <li>Is it easier to lift a heavy object with one pulley or two pulleys?</li>
            </ol>
        </div>
        <p class="note">Note: Put a star to mark the final result on the graph.</p>
    </div>

    {{-- Slide 36 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke !text-white">What do you observe (Conclusion):</h2>
            <ol class="lesson-ul list-decimal title stroke" start="1">
                <li>What is the easiest way to lift a heavy object? Using our hands, a pulley or two pulleys</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K1/sm/pulley/pl3.png') }}" class="img-xl" />
    </div>

    {{-- Slide 37 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video5" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/39.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Through this activity, we learn that it is easier to lift a heavy object using a rope on a
            pulley than with our hands.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 38 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video6" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/40.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">It is easier to lift a heavy object using the set up of two pulleys than one pulley.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video6')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 39 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center flex flex-col items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p class="!text-center">If you want to lift a heavy object easily, how would you set up the pulley? Tick ✔ it.
            </p>
            <img src="{{ asset('assets/images/K1/sm/pulley/pl12.png') }}" />
        </div>
    </div>

    {{-- Complete button --}}
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

            const returnRouteFromFirstSlide = "{{ route('PulleysSelection') }}";
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
