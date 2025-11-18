@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Fingerprints</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/livingthings/dna/h17.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/K2/livingthings/dna/h16.png') }}" class="img-sm" />
        </div>
        <div class="title stroke">
            <h2>Children, do you still remember what determines our traits? What makes each one of us unique?</h2>
        </div>
    </div>

    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/livingthings/dna/h1.png') }}" class="img-h-sm" />
            <img src="{{ asset('assets/images/K2/livingthings/dna/h17.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/K2/livingthings/dna/h1.png') }}" class="img-h-sm" />
        </div>
        <h2 class="title stroke">DNA determines our traits. We are all unique because the bases in our DNA are arranged
            differently!</h2>
    </div>

    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[50%]">
        <h2 class="title stroke text-center">Find a friend and compare your physical look! What are the common traits you
            have?</h2>
        <p class="note">Note: Encourage children to find at least two shared traits and show the rest.</p>
    </div>

    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/livingthings/dna/h17.png') }}" class="img-md" />
        <h2 class="title stroke text-center">Most of the time we compare just the obvious traits like hair type, facial
            feature, height and body shape.</h2>
    </div>

    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f1.png') }}" class="img-md" />
        <h2 class="title stroke">What about something small like <span class="!text-white">fingerprints</span>? Do you think
            our <span class="!text-white">fingerprints</span> look the same?</h2>
    </div>

    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">Now we'll learn how to make our own set of <span class="!text-white">fingerprints</span>.
            We'll compare and see if we all have the same <span class="!text-white">fingerprints</span>!</h2>
    </div>

    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <h2 class="!text-white title stroke">Small Group Activity</h2>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f2.png') }}" class="img-sm" />
        <div class="text-start">
            <h2 class="title stroke text-start">Let's find out: <br>How to make our own set of fingerprints? Do we have the
                same fingerprints?</h2>
        </div>
        <p class="text-center note">Note: Organise children into groups of 3 to do the activity (role A, B & C). Have them
            clean and dry their hands first.</p>
    </div>

    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke text-start">Let's do:</h2>
        </div>
        <ol class="lesson-ul list-decimal title stroke text-start">
            <li>(A) Use a pencil to make a patch of dark mark on a paper.</li>
        </ol>
        <video id="video1" class="video1 pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/183.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Advise A to darken the patch by shading the patch again and again.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke text-start">Let's do:</h2>
        </div>
        <ol class="lesson-ul list-decimal title stroke text-start" start="2">
            <li>(B) Rub a fingertip over the pencil mark to stain it.</li>
        </ol>
        <video id="video2" class="video1 pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/184.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Advise B to ensure that their fingertips have an even dark mark.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke text-start">Let's do:</h2>
        </div>
        <ol class="lesson-ul list-decimal title stroke text-start" start="3">
            <li>(C) Cut and stick a piece of clear tape on the stained fingertip (of B).</li>
        </ol>
        <video id="video3" class="video1 pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/185.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Advise C to hold only an edge of the tape and stick the tape flat on the fingertip
            of B.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke text-start">Let's do:</h2>
        </div>
        <ol class="lesson-ul list-decimal title stroke text-start" start="4">
            <li>(C) Carefully remove the tape from the fingertip (of B) and paste it on the learning journal (of B).</li>
        </ol>
        <video id="video4" class="video1 pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/186.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Remind C to paste the tape in the correct place of B's fingerprint record.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 12 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke text-start">Let's do:</h2>
        </div>
        <ol class="lesson-ul list-decimal title stroke text-start" start="5">
            <li>(A) Use a wet towel to clean the fingertip (of B).</li>
        </ol>
        <video id="video5" class="video1 pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/187.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Explain to children that this is to avoid possible messiness when taking prints
            of other fingers.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 13 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke text-start">Let's do:</h2>
        </div>
        <ol class="lesson-ul list-decimal title stroke text-start" start="6">
            <li>(A, B & C) Repeat the steps for other fingers.</li>
        </ol>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f8.png') }}" class="img-xl" />
        <p class="note text-center">Note: Have children change their roles to help one another complete the fingerprint
            record.</p>
    </div>

    {{-- Slide 14 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke text-start">Let's do:</h2>
        </div>
        <ol class="lesson-ul list-decimal title stroke text-start" start="7">
            <li>Observe your fingerprints.</li>
        </ol>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f2.png') }}" class="img-xl" />
        <p class="note text-center">Note: Have children observe and compare their own set of fingerprints on the record.
        </p>
    </div>

    {{-- Slide 15 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f2.png') }}" />
        <div class="text-start">
            <h2 class="title stroke text-start">What do you observe: <br>Are there similarities between your fingerprints?
            </h2>
        </div>
    </div>

    {{-- Slide 16 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f2.png') }}" />
        <div class="text-start">
            <h2 class="title stroke text-start">What do you observe: <br>Do your left and right hands' fingerprints look
                alike?</h2>
        </div>
    </div>

    {{-- Slide 17 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke text-start">Let's do:</h2>
        </div>
        <ol class="lesson-ul list-decimal title stroke text-start" start="8">
            <li>Observe your fingerprints with friends.</li>
        </ol>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f9.png') }}" class="large-img6" />
        <p class="note">Note: Have children observe and compare their fingerprints with friends.</p>
    </div>

    {{-- Slide 18 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f9.png') }}" class="large-img6" />
        <div class="text-start">
            <h2 class="title stroke text-start">What do you observe: <br>Do you find anyone with the same fingerprints as
                yours?</h2>
        </div>
    </div>

    {{-- Slide 19 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <div class="text-start">
            <h2 class="title stroke text-start">What do you learn: <br>What are the similarities between different
                fingerprints?</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f9.png') }}" class="img-xl" />
        <p class="note">Note: Explain to children that the lines on the tips of our fingers or thumbs are called ridges.
        </p>
    </div>

    {{-- Slide 20 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <div class="text-start">
            <h2 class="title stroke text-start">What do you learn: <br>Do you find any two fingerprints are exactly same?
            </h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f9.png') }}" class="img-xl" />
    </div>

    {{-- Slide 21 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f10.png') }}" class="img-xl" />
        <h2 class="title stroke">Through the activity, we know that fingerprints are ridges on the tips of our fingers and
            thumbs.</h2>
    </div>

    {{-- Slide 22 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f11.png') }}" class="img-xl" />
        <h2 class="title stroke">We also know that no two fingerprints are exactly alike.</h2>
    </div>

    {{-- Slide 23 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f11.png') }}" class="img-xl" />
        <h2 class="title stroke">Therefore, individual fingerprints are unique and no two people have the same
            fingerprints.</h2>
    </div>

    {{-- Slide 24 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="w-[30vw] h-fit bg-cover bg-center p-[20px] flex flex-col justify-center items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f12.png') }}" class="img-xl" />
        </div>
    </div>

    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

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

    {{-- next Button --}}
    <div class="down-btn-container">
        <button class="nextButton">
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
            const returnRouteFromFirstSlide = "{{ route('FingerprintsSelection') }}";
            const doneButtonRoute = "{{ route('k2livingthings') }}";

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

                // Check if last slide
                const isLastSlide = index === slides.length - 1;

                if (isLastSlide) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            // NEXT button
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
                // If on first slide, navigate to return route
                if (currentSlide === 0) {
                    window.location.href = returnRouteFromFirstSlide;
                    return;
                }

                if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
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
