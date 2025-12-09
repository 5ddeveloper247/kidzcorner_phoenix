@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- Title --}}
    <h2 class="top-title stroke">What are Bacteria?</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-between h-[17vw] self-end hidden">
        <h2 class="title stroke">Children, do you still remember what <span class="!text-white">living things?</span> are?
            What are the common points of <span class="!text-white">living things?</span>
            What are the two groups of <span class="!text-white">living things?</span> ?</h2>
        <p class="note">Note: Encourage children to recall and share the basic characteristics
            and examples of living things.</p>
    </div>

    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-between !h-[28vw] hidden">
        <div class="flex justify-between w-[40vw]">
            <img src="{{ asset('assets/images/K2/livingthings/bacteria/b1.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/K2/livingthings/bacteria/b2.png') }}" class="img-h-md" />
        </div>
        <p class="note">Note: Invite children to sing ""It is Living"" song together, get them share what they know about
            DNA.</p>
    </div>

    {{-- Slide 3 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <img src="{{ asset('assets/images/K2/livingthings/dna/h5.png') }}" class="img-lg" />
        <h2 class="title stroke">DNA is the instruction manual of all living things.
            It tells every living thing how to form and work correctly.</h2>
    </div>

    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <img src="{{ asset('assets/images/K2/livingthings/dna/h5.png') }}" class="img-lg" />
        <h2 class="title stroke">Living things are made up of cells and
            DNA is stored in the cells.</h2>
    </div>

    {{-- Slide 5 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <img src="{{ asset('assets/images/K2/livingthings/bacteria/b3.png') }}" class="img-lg" />
        <h2 class="title stroke"><span class="!text-white">Animals</span> and <span class="!text-white">plants</span> are
            two groups of <span class="!text-white">living things?</span>.</h2>
    </div>

    {{-- Slide 6 --}}
    <div class="slide flex flex-col items-center justify-between h-[20vw] self-end hidden">
        <h2 class="title stroke">Today, we'll learn about another group <br>
            of <span class="!text-white">living things</span> called <span class="!text-white">bacteria</span>!</h2>
        <p class="note">Note: Have children share what they know about bacteria.</p>
    </div>

    {{-- Slide 7 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <img src="{{ asset('assets/images/K2/livingthings/bacteria/b4.png') }}" class="img-sm" />
        <h2 class="title stroke">Bacteria are tiny living things around us.</h2>
        <p class="note">Note: Explain to children that bacterium is the singular of bacteria.</p>
    </div>

    {{-- Slide 8 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <img src="{{ asset('assets/images/K2/livingthings/bacteria/b35.png') }}" class="img-sm" />
        <h2 class="title stroke">Bacteria are too tiny to be seen with our eyes.
            We can only see them under a microscope.</h2>
    </div>

    {{-- Slide 9 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <img src="{{ asset('assets/images/K2/livingthings/bacteria/b5.png') }}" class="img-sm" />
        <h2 class="title stroke">Bacteria can be found everywhere!
            They are on the doorknobs, tables and even our skins.</h2>
    </div>

    {{-- Slide 10 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <img src="{{ asset('assets/images/K2/livingthings/bacteria/b6.png') }}" class="img-md" />
        <h2 class="title stroke">They are in the water, soil and even plants.</h2>
    </div>

    {{-- Slide 11 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <img src="{{ asset('assets/images/K2/livingthings/bacteria/b7.png') }}" class="img-lg" />
        <h2 class="title stroke">They live even inside out bodies!</h2>
    </div>

    {{-- Slide 12 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <img src="{{ asset('assets/images/K2/livingthings/bacteria/b8.png') }}" class="img-lg" />
        <h2 class="title stroke">Bacteria come in all sorts of shapes. Scientists group them
            into three basic shapes - spheres, rods and spirals.</h2>
    </div>

    {{-- Slide 13 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <img src="{{ asset('assets/images/K2/livingthings/bacteria/b9.png') }}" class="img-md" />
        <h2 class="title stroke">Some people call bacteria as germs because they can make us
            sick. In fact, there are good and bad bacteria.</h2>
    </div>

    {{-- Slide 14 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <img src="{{ asset('assets/images/K2/livingthings/bacteria/b10.png') }}" class="img-md" />
        <h2 class="title stroke">Bad bacteria are called pathogens.
            Pathogens can cause and spread diseases in animals and plants.</h2>
    </div>

    {{-- Slide 15 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <img src="{{ asset('assets/images/K2/livingthings/bacteria/b11.png') }}" class="img-xl" />
        <h2 class="title stroke">Nowadays we can use antibiotics, antiseptics and some cleaning
            products to fight against the bad pathogens.</h2>
        <p class="note">Note: Guide children to understand the meaning of the 2 terms
            (refer to the definitions in teacher resources).</p>
    </div>

    {{-- Slide 16 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <img src="{{ asset('assets/images/K2/livingthings/bacteria/b4.png') }}" class="img-sm" />
        <h2 class="title stroke">Most bacteria around us are actually good.
            They are very helpful to us.</h2>
    </div>

    {{-- Slide 17 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <div class="flex">
            <img src="{{ asset('assets/images/K2/livingthings/bacteria/b12.png') }}" class="!w-[40vw]" />
            <img src="{{ asset('assets/images/K2/livingthings/bacteria/b13.png') }}" class="!h-[20vw]" />
        </div>
        <h2 class="title stroke">Most of our food come from plants.
            Bacteria in the soil work hard to help plants grow.</h2>
    </div>

    {{-- Slide 18 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <img src="{{ asset('assets/images/K2/livingthings/bacteria/b14.png') }}" class="img-lg" />
        <h2 class="title stroke">Do you like to eat yogurt or cheese?
            Do you know that bacteria are used to make them?.</h2>
    </div>

    {{-- Slide 19 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <img src="{{ asset('assets/images/K2/livingthings/bacteria/b15.png') }}" class="img-lg" />
        <h2 class="title stroke">Besides yogurt and cheese, bacteria also been used to make
            food like butters, chocolates and soya sauces.</h2>
    </div>

    {{-- Slide 20 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <img src="{{ asset('assets/images/K2/livingthings/bacteria/b16.png') }}" class="!w-[35vw]" />
        <h2 class="title stroke">There are many good bacteria in our bodies. The main use of
            these bacteria is to help us digest and break down our food.</h2>
    </div>

    {{-- Slide 21 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <img src="{{ asset('assets/images/K2/livingthings/bacteria/b4.png') }}" class="img-sm" />
        <h2 class="title stroke">Therefore, there are actually more good bacteria
            than bad bacteria around us.</h2>
    </div>

    {{-- Slide 22 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <img src="{{ asset('assets/images/K2/livingthings/bacteria/b17.png') }}" class="img-lg" />
        <h2 class="title stroke">This is a Petri dish. It is a flat dish with lid.
            To study bacteria, scientists actually collect and grow them in
            a Petri dish. How is it done? Let's find out!.</h2>
    </div>

    {{-- Slide 23 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <img src="{{ asset('assets/images/K2/livingthings/bacteria/b18.png') }}" class="img-lg" />
        <h2 class="title stroke">First, scientists fill the dish with agar to make agar plate.
            The hardened jelly-like agar contains nutrients that help
            bacteria to grow.</h2>
    </div>

    {{-- Slide 24 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <img src="{{ asset('assets/images/K2/livingthings/bacteria/b19.png') }}" class="img-md" />
        <h2 class="title stroke">Next, scientists use a cotton bud to pick up
            sample bacteria from anything.</h2>
    </div>

    {{-- Slide 25 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <img src="{{ asset('assets/images/K2/livingthings/bacteria/b20.png') }}" class="img-md" />
        <h2 class="title stroke">Then, scientists use the cotton bud to lightly draw
            lines on the agar in the dish.</h2>
    </div>

    {{-- Slide 26 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <img src="{{ asset('assets/images/K2/livingthings/bacteria/b21.png') }}" class="img-lg" />
        <h2 class="title stroke">Lastly, scientists keep the sampled dish in a
            cooling place to allow bacteria to grow.</h2>
    </div>

    {{-- Slide 27 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <img src="{{ asset('assets/images/K2/livingthings/bacteria/b22.png') }}" class="img-lg" />
        <h2 class="title stroke">Finally, scientists observe bacteria grown in the dish
            and conduct tests to study them in details.</h2>
    </div>

    {{-- Slide 28 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <h2 class="title stroke">Now, we'll learn how to use this scientific method <br>
            for growing bacteria. <br>
            We'll test if disinfectant sprays help to kill bacteria.</h2>
    </div>

    {{-- Slide 29 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <h2 class="title stroke font-bold !text-white">Class Activity</h2>
        <img src="{{ asset('assets/images/K2/livingthings/bacteria/b36.png') }}" class="img-xs" />
        <h2 class="title stroke !text-start">Let's find out: <br>
            Do disinfectant sprays really kill bacteria?</h2>
        <p class="note">Note: Display all the things needed. Guide children to name the things and know their use.</p>
    </div>

    {{-- Slide 30 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <img src="{{ asset('assets/images/K2/livingthings/bacteria/b25.png') }}" class="img-xl" />
        <h2 class="title stroke !text-start">What do you think (Prediction): <br>
            Do disinfectant sprays kill some or all the bacteria?</h2>
        <p class="note">Note: Have children vote for their choice and record the result in a graph
            (refer to the sample on the next page).</p>
    </div>

    {{-- Slide 31 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <img src="{{ asset('assets/images/K2/livingthings/bacteria/b26.png') }}" class="img-md" />
        <p class="note">Note: Plot children's prediction on the graph. At the end, put a star <span
                class="text-yellow-300 text-xl">⭐</span>
            to mark the final result.</p>
    </div>

    {{-- Slide 32 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <div class="text-start">
            <h2 class="title stroke">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke">
                <li>Use a cotton bud to go through surface of a dirty shoe to pick up sample bacteria.</li>
            </ol>
        </div>
        <video id="video1" class="video-md pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/193.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note">Note: Invite a child to do the step with hands wearing gloves.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 33 --}}
    <div class="slide flex flex-col items-center justify-center !gap-[.5vw] hidden">
        <div class="text-start">
            <h2 class="title stroke">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="2">
                <li>Remove the lid of a petri dish, use the cotton bud to lightly draw many lines on the agar and close the lid again.</li>
            </ol>
        </div>
        <div class="flex gap-1 items-start">
            <img src="{{ asset('assets/images/K2/livingthings/bacteria/b28.png') }}" class="!w-[14vw]" />
            <video id="video2" class="video-md pointer-events-none">
                <source src="{{ asset('assets/images/K2/videos/194.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <p class="note">Note: Invite another child to do the step with hands wearing gloves.
            Once done, throw away the used cotton bud.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 34 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <div class="text-start">
            <h2 class="title stroke">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="3">
                <li>Label the sampled petri dish.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/bacteria/b30.png') }}" class="img-md" />
        <p class="note">Note: Invite another child to do the step.</p>
    </div>

    {{-- Slide 35 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <div class="text-start">
            <h2 class="title stroke">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="4">
                <li>Spray on the surface of the shoe.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/bacteria/b31.png') }}" class="img-md" />
        <p class="note">Note: Invite another child to do the step.</p>
    </div>

    {{-- Slide 36 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <div class="text-start">
            <h2 class="title stroke">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="5">
                <li>Use a new cotton bud to repeat step 1-3.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/bacteria/b32.png') }}" class="img-xl" />
    </div>

    {{-- Slide 37 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <div class="text-start">
            <h2 class="title stroke">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="6">
                <li>Put both the sampled petri dishes in a box and keep the box at a cooling place.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/bacteria/b33.png') }}" class="img-xs" />
        <p class="note">Note: Teacher to do the step; use tape to seal all the petri dishes to prevent children from opening them.
            Tell children that bacteria need time to grow, so we'll check the results at least 10 days later.</p>
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

    {{-- Next Button --}}
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
            const returnRouteFromFirstSlide = "{{ route('bacteriaSelection') }}";
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