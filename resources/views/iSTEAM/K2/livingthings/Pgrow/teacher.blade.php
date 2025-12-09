@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">How Plants Grow?</h2>

    <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />

    {{-- Slide 1 --}}
    <div class="flex t-slide hidden !text-white flex-col justify-around text-start">
        <div>
            <h2 class="t-title">Children will be able to:</h2>
            <ul class="pl-[1.5vw] space-y-[.5vw] list-disc">
                <li>Learn how to grow a plant from a seed</li>
                <li>Learn how to regrow green onions</li>
                <li>Observe how plants grow</li>
                <li>Learn about basic things that help plants grow</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex flex-col items-start justify-between">
            <h2 class="t-title">Keywords:</h2>
            <ul class="pl-[1.5vw] space-y-[.5vw] list-disc">
                <li>Plant</li>
                <li>Grow</li>
                <li>Seed</li>
            </ul>
        </div>
    </div>

    {{-- Slide 2 --}}
    <div class="flex t-slide hidden !text-white flex-col justify-center text-start">
        <div>
            <h2 class="t-title">Preparations for Individual Activity - growing plants from seeds:</h2>
            <ul class="pl-[1.5vw] space-y-[.5vw] list-disc">
                <li>A type of fast growing seed (preferably not too small), such as:
                    Radish seeds (sprout in 3–10 days) Sunflower seeds (sprout in 1 week) Melon seeds (sprout in 5–10 days)
                    Green beans and peas</li>
                <li>Snack size zipper storage bags (preferably no design to avoid distractions during
                    observations)</li>
                <li>Paper towels (size that fit the bag)</li>
                <li>Glue (when the activity starts, help to apply 2 dots of glue with a gap in between
                    roughly at the middle of
                    the paper towel for each child)</li>
                <li>Spray bottles with water</li>
                <li>Labels (if non-adhesive, use tape to fix it on the bag at the end)</li>
                <li>Adhesive tape</li>
            </ul>
        </div>

        <div>
            <h2 class="t-title">Preparations for Class Activity - regrow green onions:</h2>
            <ul class="pl-[1.5vw] space-y-[.5vw] list-disc">
                <li>A bunch of green onions with roots</li>
                <li>A reasonable size transparent container filled with some water</li>
            </ul>
        </div>
    </div>

    {{-- Slide 3 --}}
    <div class="flex t-slide hidden !text-white flex-col justify-center text-start">
        <div>
            <h2 class="t-title">Things to consider for preparations - growing plants from seeds:</h2>
            <ul class="pl-[1.5vw] space-y-[.5vw] list-disc">
                <li>If you want to use seeds from fresh melons or squash like watermelon and pumpkin
                    for this activity, you
                    should clean the seeds thoroughly and allow them dry indoors for a week beforehand. To help the seeds
                    germinate faster, carefully remove the shell of the seeds (don't damage the seed as it may not geminate)
                    and soak them for around 2 hours before the activity</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p16.png') }}" class="!w-[45vw]" />
    </div>

    {{-- Slide 4 --}}
    <div class="flex t-slide hidden !text-white flex-col justify-center text-start">
        <div class="text-start">
            <h2 class="t-title">How to grow plants from seeds and things to consider:</h2>
            <ol class="pl-[1.5vw] space-y-[.5vw] list-decimal">
                <li>Have children write the name of the seed, date of activity and his/her name on a
                    label. [Help to apply 2
                    dots of glue with a of the paper towel for each child .]</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p17.png') }}" class="img-xl" />
    </div>

    {{-- Slide 5 --}}
    <div class="flex t-slide hidden !text-white flex-col items-center justify-center text-start">
        <div class="text-start">
            <h2 class="t-title">How to grow plants from seeds and things to consider:</h2>
            <ol class="pl-[1.5vw] space-y-[.5vw] list-decimal" start="2">
                <li>Have children put a seed on each of the glue dot on his/her paper towel and
                    allow the glue dry.
                    [Make sure that the glue dries before continue with the next step.]</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p6.png') }}" class="!w-[35vw]" />
    </div>

    {{-- Slide 6 --}}
    <div class="flex t-slide hidden !text-white flex-col items-center justify-center text-start">
        <div class="text-start">
            <h2 class="t-title">How to grow plants from seeds and things to consider:</h2>
            <ol class="pl-[1.5vw] space-y-[.5vw] list-decimal" start="3">
                <li>Have children put his/her paper towel into a zipper storage bag and spray water
                    to wet the paper
                    towel.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p7.png') }}" class="!w-[35vw]" />
    </div>

    {{-- Slide 7 --}}
    <div class="flex t-slide hidden !text-white flex-col items-center justify-center text-start">
        <div class="text-start">
            <h2 class="t-title">How to grow plants from seeds and things to consider:</h2>
            <ol class="pl-[1.5vw] space-y-[.5vw] list-decimal" start="4">
                <li>Have children leave about 1cm extra water at the bottom of his/her bag and seal
                    the bag.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p8.png') }}" class="img-md" />
    </div>

    {{-- Slide 8 --}}
    <div class="flex t-slide hidden !text-white flex-col items-center justify-center text-start">
        <div class="text-start">
            <h2 class="t-title">How to grow plants from seeds and things to consider:</h2>
            <ol class="pl-[1.5vw] space-y-[.5vw] list-decimal" start="5">
                <li>Have children label his/her bag and tape it to a sunny window.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p9.png') }}" class="img-lg" />
    </div>

    {{-- Slide 9 --}}
    <div class="flex t-slide hidden !text-white flex-col items-center justify-center text-start">
        <div class="text-start">
            <h2 class="t-title">How to grow plants from seeds and things to consider:</h2>
            <ol class="pl-[1.5vw] space-y-[.5vw] list-decimal" start="6">
                <li>Have children use the learning journal to record his/her observations. [Let
                    them draw the current
                    look of the seeds and write down the date. Remind them to check on the seeds every day for at least a
                    week and record their observations whenever they see any change in seeds (root/stem/leaf).]</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p14.png') }}" class="img-lg" />
    </div>

    {{-- Slide 10 --}}
    <div class="flex t-slide hidden !text-white flex-col items-start justify-center gap-y-5 text-start">
        <h2 class="t-title">Sample Learning Journal 1:</h2>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p18.png') }}" class="img-lg" />
    </div>

    {{-- Slide 11 --}}
    <div class="flex t-slide hidden !text-white flex-col items-start justify-center gap-y-5 text-start">
        <h2 class="t-title">Sample Learning Journal 2:</h2>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p19.png') }}" class="img-lg" />
    </div>

    {{-- Slide 12 --}}
    <div class="flex t-slide hidden !text-white flex-col items-start justify-center gap-y-5 text-start">
        <h2 class="t-title">Sample seed's growth 1:</h2>
        <div class="flex items-start gap-5">
            <video id="video1" class="video-md pointer-events-none">
                <source src="{{ asset('assets/images/K2/videos/167.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <p class="w-[20vw] note">For your info, this seed sprouted after 2 days and showed signs of growth each day
                until day 6. It eventually died.</p>
        </div>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 13 --}}
    <div class="flex t-slide hidden !text-white flex-col items-start justify-center gap-y-5 text-start">
        <h2 class="t-title">Sample seed's growth 2:</h2>
        <div class="flex items-start gap-5">
            <video id="video2" class="video-md pointer-events-none">
                <source src="{{ asset('assets/images/K2/videos/168.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <p class="w-[20vw] note">For your info, this seed sprouted after 3 days and showed signs of growth each day.
            </p>
        </div>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 14 --}}
    <div class="flex t-slide hidden !text-white flex-col items-start justify-center gap-y-5 text-start">
        <h2 class="t-title">Sample seed's growth 3:</h2>
        <div class="flex items-start gap-5">
            <video id="video3" class="video-md pointer-events-none">
                <source src="{{ asset('assets/images/K2/videos/169.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <p class="w-[20vw] note">For your info, this seed sprouted after 3 days. Its stem and roots could be clearly
                seen at day 6. At day 7, two leaves sprouted from the seed coat.</p>
        </div>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 15 --}}
    <div class="flex t-slide hidden !text-white flex-col items-start justify-center gap-y-5 text-start">
        <h2 class="t-title">Sample seed's growth 4:</h2>
        <div class="flex items-start gap-5">
            <video id="video4" class="video-md pointer-events-none">
                <source src="{{ asset('assets/images/K2/videos/170.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <p class="w-[20vw] note">For your info, this seed sprouted after 3 days and showed signs of growth each day
                until day 6. It eventually died.</p>
        </div>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 16 --}}
    <div class="flex t-slide hidden !text-white flex-col items-center justify-center text-start">
        <div class="text-start">
            <h2 class="t-title">How to regrow green onions and things to consider:</h2>
            <ol class="pl-[1.5vw] space-y-[.5vw] list-decimal">
                <li>Cut off the green leaves of the green onions. [You may keep only the white
                    stems and roots. Tell
                    children that the green leaves will be used to garnish their food today.]</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p11.png') }}" class="img-lg" />
    </div>

    {{-- Slide 17 --}}
    <div class="flex t-slide hidden !text-white flex-col items-start justify-center text-start">
        <div class="text-start">
            <h2 class="t-title">How to regrow green onions and things to consider:</h2>
            <ol class="pl-[1.5vw] space-y-[.5vw] list-decimal" start="2">
                <li>Place the remaining green onions with roots in a transparent container filled
                    with some water. [Use
                    clear plastic container or glass as we want to observe the roots of the plants. Be sure that only roots
                    and partial of the white stems are in the water because green leaves that soak in water will wilt and
                    cause the whole plant to die.]</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p12.png') }}" class="img-sm" />
    </div>

    {{-- Slide 18 --}}
    <div class="flex t-slide hidden !text-white flex-col items-start justify-center text-start">
        <div class="text-start">
            <h2 class="t-title">How to regrow green onions and things to consider:</h2>
            <ol class="pl-[1.5vw] space-y-[.5vw] list-decimal" start="3">
                <li>Place the container near a sunny window.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p12.png') }}" class="img-sm" />
    </div>

    {{-- Slide 19 --}}
    <div class="flex t-slide hidden !text-white flex-col items-start justify-center text-start">
        <div class="text-start">
            <h2 class="t-title">How to regrow green onions and things to consider:</h2>
            <ol class="pl-[1.5vw] space-y-[.5vw] list-decimal" start="4">
                <li>Have children use the learning journal to record his/her observations. [Let
                    them draw the current
                    look of the green onions (length of the roots and leaves) and write down present date. Remind them to
                    check on the green onions every day for a week and record their observations after one week. Remember to
                    change water every day.]</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p13.png') }}" class="img-md" />
    </div>

    {{-- Slide 20 --}}
    <div class="flex t-slide hidden !text-white flex-col items-start justify-center gap-y-5 text-start">
        <h2 class="t-title">Sample Learning Journal:</h2>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p23.png') }}" class="img-lg" />
    </div>

    {{-- Slide 21 --}}
    <div class="flex t-slide hidden !text-white flex-col items-start justify-center gap-y-5 text-start">
        <h2 class="t-title">Sample green onion's growth:</h2>
        <div class="flex items-start gap-5">
            <video id="video5" class="video-md pointer-events-none">
                <source src="{{ asset('assets/images/K2/videos/171.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <p class="w-[14vw]">For
                your info, the
                plants grow taller
                every day and
                after a week, the leaves can be cut
                for the second
                time. The growing
                process can be
                repeated a few
                times but the
                plants will weaken
                and stop producing
                eventually. If you
                plant them in the
                soil, they will
                continue grow
                almost
                indefinitely.</p>
        </div>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 22 --}}
    <div class="flex t-slide hidden !text-white flex-col justify-center text-start">
        <div>
            <h2 class="t-title">Possible questions during daily observation session:</h2>
            <ul class="pl-[1.5vw] space-y-[.5vw] list-disc">
                <li>Does the seed change?</li>
                <li>(If yes) What change do you see? How long does it take to start the change? <br>
                    <em>[Focus on root, stem & leaf]</em>
                </li>
                <li>Do the green onion plants grow taller from day 1?</li>
                <li>(If yes) What change do you see? <br>
                    <em>[Focus on roots & leaves]</em>
                </li>
            </ul>
        </div>
    </div>

    {{-- Slide 23 --}}
    <div class="t-slide hidden text-start flex items-center !text-white !w-[53vw]">
        <div>
            <h2 class="t-title">Notes:</h2>
            <ul class="pl-[1.5vw] space-y-[.5vw] list-disc space-y-3">
                <li>
                    <span class="relative">
                        If you see <span class="opacity-0">---</span>next to a picture, click on the picture to watch the
                        video.
                        <img class="t-video-btn absolute top-[-1vw] left-[7.6vw]"
                            src="{{ asset('assets/images/pptimages/video.png') }}" />
                    </span>
                </li>

                <li>
                    Always ask questions to encourage children to think and share their ideas first before giving out
                    any information.
                </li>

                <li>Emphasise and use the keywords during hands-on sessions.</li>

                <li>
                    Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                </li>

                <li>
                    <span class="relative">
                        Click on this shortcut icon <span class="opacity-0">---</span> if you need to go to some parts of
                        the lesson quickly.
                        <img src="{{ asset('assets/images/pptimages/home-btn.png') }}"
                            class="t-home-btn absolute top-0 left-[19vw]" />
                    </span>
                </li>
            </ul>
        </div>
    </div>

    {{-- Slide 24 --}}
    <div class="text-white flex flex-col items-center justify-center text-start t-slide hidden">
        <h2 class="title stroke">Learning Centre Idea</h2>
        <div class="flex">
            <div class="text-start">
                <h2 class="!text-white text-[2vw] stroke">How Does this Plan Grow?</h2>
                <h2 class="t-title">What and how to set up:</h2>
                <ul class="pl-[1.5vw] space-y-[.5vw] list-disc">
                    <li>Put a very young potted plant with label of the plant's name here.</li>
                </ul>

                <h2 class="t-title">What to do:</h2>
                <ol class="pl-[1.5vw] space-y-[.5vw] list-decimal">
                    <li>Learn how to take care of the plant</li>
                    <li>Observe how the plant grow and change.</li>
                    <li>Record the plant growth with a drawing paper.</li>
                </ol>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" />
    </div>

    {{-- ========================================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    <div id="buttons" class="absolute flex flex-row gap-6 z-90">
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
            const slides = document.querySelectorAll(".t-slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");

            // Keep track of which slide we're currently viewing
            let currentSlide = 0;

            // CONFIGURE YOUR ROUTES HERE
            const returnRouteFromFirstSlide = "{{ route('PgrowSelection') }}";
            const doneButtonRoute = "{{ route('PgrowSelection') }}";

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
