@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">The Stages of Growth of a Butterfly</h2>

    {{-- Slide 1 --}}
    <div class="flex flex-col items-center justify-between h-[40vh]  slide hidden">
        <h2 class="stroke title">Children, do you still remember what the
            stages of growth of a person are?
            What happens when you grow?</h2>
        <p class="note">Note: Encourage children to share what they know about the stages of growth.</p>
    </div>


    {{-- Slide 2 --}}
    <div class="flex flex-col items-center justify-center slide hidden">

        <img src="{{ asset('assets/images/N2/LivingThings/gl6.png') }}" class="img-xl" />
        <h2 class="stroke title">These are the stages of growth of a girl.</h2>
        <p class="note">Note: Explain to children that every girl goes through these stages of growth.</p>
    </div>


    {{-- Slide 3 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/gl8.png') }}" class="img-lg" />
        <h2 class="title stroke">Note: Invite children take turns to share their changes over time.</h2>

    </div>


    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an51.png') }}" class="img-md" />
        <h2 class="stroke title">This is a <span class="!text-white">butterfly</span>.<br />Let’s look at the <span
                class="text-white">stages of growth</span> of a <span class="!text-white">butterfly</span>.</h2>

    </div>


    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">First Stage</h2>
        <img src="{{ asset('assets/images/N2/LivingThings/an43.png') }}" class="img-md" />
        <h2 class="stroke title">The butterfly starts off as an egg.</span>.
        </h2>
    </div>


    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <video id="video1" class="pointer-events-none">
            <source src="{{ asset('assets/images/N2/LivingThings/1.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="stroke title">Watch how the caterpillar hatches from the egg.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Second Stage</h2>
        <img src="{{ asset('assets/images/N2/LivingThings/an45.png') }}" class="img-md" />
        <h2 class="stroke title">Once the caterpillar hatches,
            it is in the second stage of growth.</span>.
        </h2>
    </div>


    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <video id="video2" class="pointer-events-none">
            <source src="{{ asset('assets/images/N2/LivingThings/2.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="stroke title">The caterpillar eats a lot and it can grow
            100 times its size during this stage!</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <video id="video3" class="pointer-events-none">
            <source src="{{ asset('assets/images/N2/LivingThings/3.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="stroke title">The caterpillar eats a lot and it can grow
            100 times its size during this stage!</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Third Stage</h2>
        <video id="video4" class="pointer-events-none">
            <source src="{{ asset('assets/images/N2/LivingThings/4.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="stroke title">As the caterpillar grows, it sheds its skin.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- slide 11 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Forth Stage</h2>
        <video id="video5" class="pointer-events-none">
            <source src="{{ asset('assets/images/N2/LivingThings/5.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="stroke title">Inside the pupa, the caterpillar is changing.
            When it is ready, it comes out of the pupa as a butterfly.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 12 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an51.png') }}" class="img-md" />
        <h2 class="stroke title">After drying its wings, the butterfly will fly off
            to look for food.</h2>
    </div>


    {{-- slide 13 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <video id="video6" class="pointer-events-none">
            <source src="{{ asset('assets/images/N2/LivingThings/6.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="stroke title">The butterfly drinks nectar from flowers using its
            proboscis. The proboscis is like a straw.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video6')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 14 --}}
    <div class="flex flex-col items-center justify-between h-[50vh] slide hidden">
        <h2 class="title stroke">Class Activity</h2>

        <h2 class="stroke title">Let’s take care of a caterpillar and see how
            it grows.</h2>
        <p class="note">Note: Display the caterpillar and let children observe it.</p>
    </div>


    {{-- slide 15 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ol class="list-decimal lesson-ul" start="1">
                <li>Prepare a clean piece of paper cut to the size
                    of the container and an empty container.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an63.png') }}" class="img-md" />
    </div>


    {{-- slide 16 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ol class="list-decimal lesson-ul" start="2">

                <li>Remove the cover of the caterpillar’s container.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an52.png') }}" class="img-md" />
    </div>


    {{-- slide 17 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ol class="list-decimal lesson-ul" start="3">
                <li>Transfer the caterpillar to an empty container
                    with teacher’s help.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an53.png') }}" class="img-xl" />
        <p class="note">Note: If the caterpillar is not on the leaves, you can place a leaf/stick near to it to let it
            crawl onto it. Be gentle if you plan to transfer it by holding the caterpillar.</p>
    </div>


    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ol class="list-decimal lesson-ul" start="4">
                <li>Throw the dirty paper away and use a tissue to
                    clean the container if it is dirty.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an54.png') }}" class="img-md" />

    </div>



    {{-- slide 19 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ol class="list-decimal lesson-ul" start="5">
                <li>Put the clean paper flat at the bottom
                    of the container.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an55.png') }}" class="img-md" />

    </div>


    {{-- slide 20 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ol class="list-decimal lesson-ul" start="6">
                <li>Remove the leaf from the water holder and place the
                    leaf with the caterpillar in the container.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an56.png') }}" class="img-xl" />

    </div>


    {{-- slide 21 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ol class="list-decimal lesson-ul" start="7">
                <li> Wash and change the water in the water holder. Fill
                    the water to the brim of the water holder and cover it</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an57.png') }}" class="img-md" />

    </div>


    {{-- slide 22 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ol class="list-decimal lesson-ul" start="8">
                <li>Pluck a leaf from the bunch of leaves in the fridge.
                    Ensure that the stalk is intact.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an58.png') }}" class="img-xl" />
    </div>


    {{-- slide 23 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ol class="list-decimal lesson-ul" start="9">
                <li>Put the stalk of the leaf into the hole on the cover.</li>
            </ol>
        </div>
        <video id="video7" class="pointer-events-none">
            <source src="{{ asset('assets/images/N2/LivingThings/7.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video7')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>


    {{-- slide 24 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ol class="list-decimal lesson-ul" start="10">
                <li>Put the leaf back in the container.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an60.png') }}" class="img-md" />

    </div>


    {{-- slide 25 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ol class="list-decimal lesson-ul" start="11">
                <li>Transfer the caterpillar back into the container.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an61.png') }}" class="img-md" />

    </div>

    {{-- slide 26 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start self-start">
            <h2>Let’s do:</h2>
            <ol class="list-decimal lesson-ul" start="12">
                <li>Close the container.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an62.png') }}" class="img-md" />

    </div>

    {{-- slide 27 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ol class="list-decimal lesson-ul" start="13">
                <li>See how the caterpillar grow overtime. Record
                    (draw or paste a photo) when there are changes.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an57.png') }}" class="img-md" />
        <p class="note">Note: Guide children to record their observations in the learning journal.</p>
    </div>


    {{-- slide 28 --}}
    <div class="flex flex-col items-center justify-between h-[30vh] slide hidden">
        <h2 class="stroke title">Children, how did the caterpillar grew.</h2>


        <p class="note">Note: At the end of the activity, have children display their learning journal
            and share what they have observed.</p>
    </div>


    {{-- slide 29 --}}
    <div class="flex flex-col items-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/gl9.png') }}" class="img-xl" />
        <h2 class="stroke title">These are the stages of growth of a butterfly.</h2>
    </div>


    {{-- slide 20 --}}
    <div class="flex flex-col items-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/gl10.png') }}" class="img-xl" />
        <h2 class="stroke title">Similar to you, the caterpillar also goes through the stages
            of growth. It gets bigger as it grows and its look changes.</h2>
    </div>



    {{-- slide 31 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/gl10.png') }}" class="img-xl" />
        <p class="note">Note: Invite children take turns to share their changes over time.</p>
    </div>


    {{-- slde 32 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title !text-white stroke">Individual Activity</h2>

        <img src="{{ asset('assets/images/N2/LivingThings/gl11.png') }}" class="img-md" />

        <h2 class="title stroke text-start">Let’s do: <br>
            How has the caterpillar grown? Put the photos in the correct order.</h2>
        <p class="note">Note: Give children the photos and guide children to paste them in their learning journals..</p>
    </div>

    {{-- slde 33 --}}
    <div class="slide  hidden flex flex-col items-center justify-center">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>How does your caterpillar grow? Record your observations here
                (draw or paste photos)</p>
        </div>
    </div>


    {{-- slde 34 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center flex justify-center items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('assets/images/N2/LivingThings/gl12.png') }}" class="img-md" />
        </div>
    </div>




    {{-- Complete button --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    {{-- Buttons --}}
    <div id="buttons" class="absolute  flex flex-row gap-6 ">

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

            // Keep track of which slide we're currently viewing
            let currentSlide = 0;

            // CONFIGURE YOUR ROUTES HERE
            const returnRouteFromFirstSlide = "{{ route('StageOfGrowthSelection') }}";
            const doneButtonRoute = "{{ route('LivingThings') }}";

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
