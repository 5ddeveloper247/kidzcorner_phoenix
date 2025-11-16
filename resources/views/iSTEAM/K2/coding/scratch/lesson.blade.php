@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">What is Scratch Jr?</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/K2/coding/s1.png') }}" class="img-md" />
        <h2 class="title stroke">Children, do you remember what these are?
            What did we do with them?</h2>
    </div>

    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-center gap-2 justify-center">
            <div>
                <img src="/assets/images/K2/coding/s2.png" class="img-sm" />
                <img src="/assets/images/K2/coding/s3.png" class="img-h-sm float-right" />
            </div>
            <img src="{{ asset('/assets/images/K2/coding/s1.png') }}" class="img-normal-md" />
        </div>
        <h2 class="title stroke">We used an application called Blockly in a tablet
            to programme the robot to do certain tasks.</h2>
    </div>

    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="flex gap-[1vw]">
            <img src="{{ asset('assets/images/K2/coding/gl1.png') }}" class="img-h-sm" />
            <video id="video1" class="video-md pointer-events-none">
                <source src="{{ asset('assets/images/K2/final/224.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <h2 class="title stroke text-center">For an example, we used Blockly to programme the robot
            to say "Hi" before moving forward and then
            say "Ta-da" before changing its eye pattern.</h2>
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="/assets/images/K2/coding/s4.png" class="img-md" />
        <h2 class="title stroke">Now, let's explore and learn about another interesting
            application called ScratchJr!</h2>
    </div>

    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="/assets/images/K2/coding/s5.png" class="img-xl" />
        <h2 class="title stroke">
            <span class="!text-white">ScratchJr</span>
            is a tool that allows us to create our own
            interactive stories and games.
        </h2>
        <p class="note">Note: Encourage children to share whether they like to read storybooks and create their own
            stories.</p>
    </div>

    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-start gap-[2rem]">
        <img class="img-lg" src="/assets/images/K2/coding/s5.png" />
        <img class="img-xs" src="/assets/images/K2/coding/s4.png" />
        <h2 class="title stroke">How does ScratchJr work? <br>
            Let's find out together!</h2>
    </div>

    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-start gap-[2vw]">
        <img src="/assets/images/K2/coding/s6.png" class="img-lg" />
        <h2 class="title stroke">This is the application icon of ScratchJr in a tablet.</h2>
        <p class="note">Note: Use a tablet to show the application of ScratchJr. Demonstrate the correct way to handle
            a tablet. Remind children that we should use it with care to prevent it from spoiling easily.</p>
    </div>

    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center gap-[2vw]">
        <div class="flex items-center gap-2 justify-center items-center">
            <img src="/assets/images/K2/coding/s7.png" class="img-sm" />
            <img src="/assets/images/K2/coding/s8.png" class="!max-w-[2.5vw]" />
            <img src="/assets/images/K2/coding/s9.png" class="img-sm" />
        </div>
        <h2 class="title stroke">Tap on the icon of ScratchJr to open the application.</h2>
        <p class="note">Note: Use a tablet to demonstrate how to do it.</p>
    </div>

    {{-- Slide 9 --}}
    <div class="slide hidden flex flex-col items-center gap-[2vw]">
        <div class="flex items-center gap-2 justify-center items-center">
            <img src="/assets/images/K2/coding/s11.png" class="img-sm" />
            <img src="/assets/images/K2/coding/s8.png" class="!max-w-[2.5vw]" />
            <img src="/assets/images/K2/coding/s10.png" class="img-sm" />
        </div>
        <h2 class="title stroke">Tap here to start using the <span class="!text-white">application</span>.</h2>
        <p class="note">Note: Use a tablet to demonstrate how to do it.</p>
    </div>

    {{-- Slide 10 --}}
    <div class="slide hidden flex flex-col items-center gap-[2vw]">
        <div class="flex items-center gap-2 justify-center items-center">
            <img src="/assets/images/K2/coding/s12.png" class="img-sm" />
            <img src="/assets/images/K2/coding/s8.png" class="!max-w-[2.5vw]" />
            <img src="/assets/images/K2/coding/s13.png" class="img-sm" />
        </div>
        <h2 class="title stroke">Tap here to start creating a project.</h2>
        <p class="note">Note: Use a tablet to demonstrate how to do it.</p>
    </div>

    {{-- Slide 11 --}}
    <div class="slide hidden flex flex-col items-center gap-[2vw]">
        <div class="flex items-center gap-2 justify-center items-center">
            <img src="/assets/images/K2/coding/s14.png" class="img-sm" />
            <img src="/assets/images/K2/coding/s8.png" class="!max-w-[2.5vw]" />
            <img src="/assets/images/K2/coding/s15.png" class="img-sm" />
        </div>
        <h2 class="title stroke">Tap here to add a background.</h2>
        <p class="note">Note: Use a tablet to demonstrate how to do it.</p>
    </div>

    {{-- Slide 12 --}}
    <div class="slide hidden flex flex-col items-center gap-[2rem]">
        <div class="flex items-center gap-2 justify-center items-center">
            <img src="/assets/images/K2/coding/s16.png" class="img-sm" />
            <img src="/assets/images/K2/coding/s8.png" class="!max-w-[2.5vw]" />
            <img src="/assets/images/K2/coding/s17.png" class="img-sm" />
        </div>
        <h2 class="title stroke">Tap on the background that you want and then tap here
            to return to the working stage.</h2>
        <p class="note">Note: Use a tablet to demonstrate how to do it; double click on the selected background will
            achieve the same effect.</p>
    </div>

    {{-- Slide 13 --}}
    <div class="slide hidden flex flex-col items-center gap-[2rem]">
        <div class="flex items-center gap-2 justify-center items-center">
            <img src="/assets/images/K2/coding/s14.png" class="img-sm" />
            <img src="/assets/images/K2/coding/s8.png" class="!max-w-[2.5vw]" />
            <img src="/assets/images/K2/coding/s15.png" class="img-sm" />
        </div>
        <h2 class="title stroke">To change background, tap here again.</h2>
        <p class="note">Note: Use a tablet to demonstrate how to do it.</p>
    </div>

    {{-- Slide 14 --}}
    <div class="slide hidden flex flex-col items-center gap-[2rem]">
        <div class="flex items-center gap-2 justify-center items-center">
            <img src="/assets/images/K2/coding/s18.png" class="img-sm" />
            <img src="/assets/images/K2/coding/s8.png" class="!max-w-[2.5vw]" />
            <img src="/assets/images/K2/coding/s19.png" class="img-sm" />
        </div>
        <h2 class="title stroke">Tap on the background that you want and then tap here
            to return to the working stage.</h2>
        <p class="note">Note: Use a tablet to demonstrate how to do it; double click on the selected background will
            achieve the same effect.</p>
    </div>

    {{-- Slide 15 --}}
    <div class="slide hidden flex flex-col items-center gap-[2rem]">
        <div class="flex items-center gap-2 justify-center items-center">
            <img src="/assets/images/K2/coding/s20.png" class="img-sm" />
            <img src="/assets/images/K2/coding/s8.png" class="!max-w-[2.5vw]" />
            <img src="/assets/images/K2/coding/s21.png" class="img-sm" />
        </div>
        <h2 class="title stroke">Tap here to add a character.</h2>
        <p class="note">Note: Use a tablet to demonstrate how to do it.</p>
    </div>

    {{-- Slide 16 --}}
    <div class="slide hidden flex flex-col items-center gap-[2rem]">
        <div class="flex items-center gap-2 justify-center items-center">
            <img src="/assets/images/K2/coding/s22.png" class="img-sm" />
            <img src="/assets/images/K2/coding/s8.png" class="!max-w-[2.5vw]" />
            <img src="/assets/images/K2/coding/s23.png" class="img-sm" />
        </div>
        <h2 class="title stroke">Tap on the background that you want and then tap here
            to return to the working stage.</h2>
        <p class="note">Note: Use a tablet to demonstrate how to do it; double click on the selected background will
            achieve the same effect.</p>
    </div>

    {{-- Slide 17 --}}
    <div class="slide hidden flex flex-col items-center gap-[2vw]">
        <div class="flex items-center gap-2 justify-center items-center">
            <img src="/assets/images/K2/coding/s24.png" class="img-sm" />
            <img src="/assets/images/K2/coding/s8.png" class="!max-w-[2.5vw]" />
            <img src="/assets/images/K2/coding/s25.png" class="img-sm" />
        </div>
        <h2 class="title stroke">Tap, drag and place to move a character.</h2>
        <p class="note">Note: Use a tablet to demonstrate how to do it.</p>
    </div>

    {{-- Slide 18 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="/assets/images/K2/coding/s26.png" class="img-xl" />
        <h2 class="title stroke">To delete the character, tap and hold it till you see a cross
            and then tap the cross.</h2>
        <p class="note">Note: Use a tablet to demonstrate how to do it; show children both ways to delete a character.
        </p>
    </div>

    {{-- Slide 19 --}}
    <div class="slide hidden flex flex-col items-center gap-[2vw]">
        <div class="flex items-center gap-2 justify-center items-center">
            <img src="/assets/images/K2/coding/s27.png" class="img-sm" />
            <img src="/assets/images/K2/coding/s8.png" class="!max-w-[2.5vw]" />
            <img src="/assets/images/K2/coding/s28.png" class="img-sm" />
        </div>
        <h2 class="title stroke">If you tap here, your project will be saved.</h2>
        <p class="note">Note: Use a tablet to demonstrate how to do it.</p>
    </div>

    {{-- Slide 20 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <h2 class="title stroke !text-white">Hands-on Time</h2>
        <h2 class="title stroke !text-start">Mission: <br>
            Let's use ScratchJr to create a story about two friends
            helping each other. What happens in the story? Share your
            story with the class.</h2>
        <p class="note">Note: Divide children into groups. Have them take turns to complete the mission.</p>
    </div>

    {{-- Slide 21 --}}
    <div class="slide hidden flex flex-col items-center gap-[2vw]">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke">
                <li>Tap on the icon of ScratchJr to open the application.</li>
            </ol>
        </div>
        <div class="flex items-center gap-2 justify-center items-center">
            <img class="img-sm" src="/assets/images/K2/coding/s7.png" />
            <img src="/assets/images/K2/coding/s8.png" class="!max-w-[2.5vw]" />
            <img class="img-sm" src="/assets/images/K2/coding/s9.png" />
        </div>
    </div>

    {{-- Slide 22 --}}
    <div class="slide hidden flex flex-col items-center gap-[2vw]">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="2">
                <li>Tap here to start using the application.</li>
            </ol>
        </div>
        <div class="flex items-center gap-2 justify-center items-center">
            <img class="img-sm" src="/assets/images/K2/coding/s11.png" />
            <img src="/assets/images/K2/coding/s8.png" class="!max-w-[2.5vw]" />
            <img class="img-sm" src="/assets/images/K2/coding/s10.png" />
        </div>
    </div>

    {{-- Slide 23 --}}
    <div class="slide hidden flex flex-col items-center gap-[2vw]">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="3">
                <li>Tap here to start creating your story.</li>
            </ol>
        </div>
        <div class="flex items-center gap-2 justify-center items-center">
            <img class="img-sm" src="/assets/images/K2/coding/s12.png" />
            <img src="/assets/images/K2/coding/s8.png" class="!max-w-[2.5vw]" />
            <img class="img-sm" src="/assets/images/K2/coding/s19.png" />
        </div>
    </div>

    {{-- Slide 24 --}}
    <div class="slide hidden flex flex-col items-center gap-[2vw]">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="4">
                <li>Choose a background for your story.</li>
            </ol>
        </div>
        <div class="flex items-center gap-2 justify-center items-center relative">
            <img class="img-sm" src="/assets/images/K2/coding/s14.png" />
            <img src="/assets/images/K2/coding/s8.png" class="!max-w-[2.5vw]" />
            <img class="img-sm" src="/assets/images/K2/coding/s30.png" />
            <img class="right-[12vw] bottom-[14rem] absolute" src="/assets/images/K2/coding/s31.png" />
        </div>
        <p class="note">Note: Remind children that it's a story about two friends helping each other.</p>
    </div>

    {{-- Slide 25 --}}
    <div class="slide hidden flex flex-col items-center gap-[2vw]">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="5">
                <li>Choose two character for your story.</li>
            </ol>
        </div>
        <div class="flex items-center gap-2 justify-center items-center relative">
            <img class="img-sm" src="/assets/images/K2/coding/s32.png" />
            <img src="/assets/images/K2/coding/s8.png" class="!max-w-[2.5vw]" />
            <img class="img-sm" src="/assets/images/K2/coding/s21.png" />
            <img class="right-[12vw] bottom-[14rem] absolute" src="/assets/images/K2/coding/s31.png" />
        </div>
        <p class="note">Note: Remind children that it's a story about two friends helping each other.</p>
    </div>

    {{-- Slide 26 --}}
    <div class="slide hidden flex flex-col items-center gap-[2vw]">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="6">
                <li>What happens in your story? Share your story.</li>
            </ol>
        </div>
        <div class="flex items-center gap-2 justify-center items-center">
            <img class="img-sm" src="/assets/images/K2/coding/s33.png" />
            <img src="/assets/images/K2/coding/s8.png" class="!max-w-[2.5vw]" />
            <img class="img-sm" src="/assets/images/K2/coding/s34.png" />
        </div>
        <p class="note">Note: Have children share their stories to the class using the presentation mode.</p>
    </div>

    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    <div id="buttons" class="absolute flex flex-row gap-6">
        <a id="returnButton">
            <img src="{{ asset('assets/images/pptimages/return.png') }}" />
        </a>

        <button id="homeButton">
            <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
        </button>

        <button id="closeButton">
            <img src="{{ asset('assets/images/pptimages/cancel.png') }}" />
        </button>
    </div>

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

            const returnRouteFromFirstSlide = "{{ route('scratchSelection') }}";
            const doneButtonRoute = "{{ route('k2coding') }}";

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
