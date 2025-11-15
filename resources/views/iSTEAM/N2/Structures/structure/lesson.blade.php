@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">What are Strcutures?</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/N2/structure/str/st1.png') }}" class="img-lg" />
        <h2 class="title stroke">Children, what do you see in the pictures?</h2>
        <p class="note">Note: Guide children to share their answers.</p>
    </div>

    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/N2/structure/str/st3.png') }}" class="img-lg" />
        <h2 class="title stroke text-center">These are tall buildings, an observation wheel and a tower.</h2>
        <p class="note">Note: Guide children to share what they see and describe the look and shape of these building
            structures.</p>
    </div>

    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/N2/structure/str/st1.png') }}" class="img-lg" />
        <h2 class="title stroke text-center">These are different types of <span class="!text-white">structures</span>.</h2>
        <p class="note">Note: Tell the children that tall buildings are called skyscrapers.</p>
    </div>

    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/N2/structure/str/st2.png') }}" class="img-lg" />
        <h2 class="title stroke text-center">House and bridges are <span class="!text-white">structures</span> too.</h2>
        <p class="note">Note: Encourage children to think of other building structures that they know of e.g. muesum,
            schools etc.</p>
    </div>

    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="title stroke text-center">A <span class="!text-white">structures</span> is something made by putting
            small
            parts together. When the parts are put together, <br>forms a <span class="!text-white">shape</span>.</h2>
    </div>

    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="{{ asset('/assets/images/N2/structure/str/st1.png') }}" class="img-lg" />
        <h2 class="title stroke text-center">What shapes do you see in these structures?</h2>
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>

    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('/assets/images//N2/structure/str/st4.png') }}" class="img-lg" />
        <h2 class="title stroke text-center">The tall buildings are shaped like rectangles. Some are tall
            and some are short.</h2>
    </div>

    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('/assets/images//N2/structure/str/st5.png') }}" class="img-lg" />
        <h2 class="title stroke text-center">The observation wheel is like a circle.</h2>
    </div>

    {{-- Slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('/assets/images//N2/structure/str/st6.png') }}" class="img-lg" />
        <h2 class="title stroke text-center">This tower is shaped like a triangle. The bottom of the
            tower is bigger than the top!</h2>
    </div>

    {{-- Slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('/assets/images//N2/structure/str/st2.png') }}" class="img-lg" />
        <h2 class="title stroke text-center">What shapes can you see here?</h2>
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>

    {{-- Slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('/assets/images//N2/structure/str/st7.png') }}" class="img-lg" />
        <h2 class="title stroke text-center">Triangles and rectangles can be found in the shape of a house.</h2>
        <p class="note">Note: Encourage children to point out the shapes.</p>
    </div>

    {{-- Slide 12 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('/assets/images//N2/structure/str/st8.png') }}" class="img-lg" />
        <h2 class="title stroke text-center">The bridge looks like long rectangle.</h2>
        <p class="note">Note: Encourage children to point out the shape.</p>
    </div>

    {{-- Slide 13 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('/assets/images//N2/structure/str/st9.png') }}" class="img-md" />
        <h2 class="title stroke text-center">The different structures are made up of many small
            parts. Construction workers put these parts together.</h2>
    </div>

    {{-- Slide 14 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images//N2/structure/str/st9.png') }}" class="img-md" />
        <h2 class="title stroke text-center">When the parts are placed together, it forms
            the shape of the structure.</h2>
    </div>

    {{-- Slide 15 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('/assets/images//N2/structure/str/st10.png') }}" class="img-lg" />
        <h2 class="title stroke text-center">Look at this construction set!
            There are many different small parts.</h2>
    </div>

    {{-- Slide 16 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('/assets/images//N2/structure/str/st11.png') }}" class="img-lg" />
        <h2 class="title stroke text-center">These are the different <span class="!text-white">connectors</span>.</h2>
    </div>

    {{-- Slide 17 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('/assets/images//N2/structure/str/st12.png') }}" class="img-lg" />
        <h2 class="title stroke text-center">These are the different pieces for construction.</h2>
    </div>

    {{-- Slide 18 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('/assets/images//N2/structure/str/st13.png') }}" class="img-xl" />
        <h2 class="title stroke text-center">Let's use these pieces to create a square structure!</h2>
        <p class="note">Note: Ask the children how a square looks like; <br>
            explain that a square has 4 equal sides and hence the 4 rectangles used must be the same size.</p>
    </div>

    {{-- Slide 19 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[50vh]">
        <h2 class="title stroke !text-white">Individual Activity - Make a Square 1</h2>
        <h2 class="title stroke text-center">Create a square structure using the
            parts provided.</h2>
        <p class="note">Note: Give each child a set of materials to carry out this activity.</p>
    </div>

    {{-- Slide 20 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke">
                <li>Gather the following parts needed for making a square.</li>
            </ol>
        </div>
        <img src="{{ asset('/assets/images//N2/structure/str/st14.png') }}" class="img-xl" />
        <p class="note">Note: Encourage children to count the pieces needed. <br>
            Teachers please take note of the type of connectors used.</p>
    </div>

    {{-- Slide 21 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="2">
                <li>Arrange the long rectangle pieces in a shape of a square.</li>
            </ol>
        </div>
        <img src="{{ asset('/assets/images//N2/structure/str/st15.png') }}" class="img-md" />
        <p class="note">Note: Encourage and guide the children to try.</p>
    </div>

    {{-- Slide 22 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="3">
                <li>Use the connectors to fix the rectangle pieces together at each connecting point.</li>
            </ol>
        </div>
        <img src="{{ asset('/assets/images//N2/structure/str/st16.png') }}" class="img-md" />
        <p class="note">Note: Teacher to assist if children are unable to connect the parts together.</p>
    </div>

    {{-- Slide 23 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="4">
                <li>Join the rectangle pieces with the one direction connectors.</li>
            </ol>
        </div>
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('/assets/images//N2/structure/str/st17.png') }}" class="img-sm" />
            <img src="{{ asset('/assets/images//N2/structure/str/st18.png') }}" class="img-sm" />
        </div>
        <p class="note">Note: Teacher to assist if children are unable to connect the parts together.</p>
    </div>

    {{-- Slide 24 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="5">
                <li>Join the four rectangle pieces together to form the square.</li>
            </ol>
        </div>
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('/assets/images//N2/structure/str/st19.png') }}" class="img-xs" />
            <img src="{{ asset('/assets/images//N2/structure/str/st20.png') }}" class="img-xs" />
            <img src="{{ asset('/assets/images//N2/structure/str/st21.png') }}" class="img-xs" />
        </div>
        <p class="note">Note: Teacher to assist if children are unable to connect the parts together.</p>
    </div>

    {{-- Slide 25 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="6">
                <li>Your square structure is completed. Can your structure stand on its own?</li>
            </ol>
        </div>
        <video id="video1" class="pointer-events-none">
            <source src="{{ asset('assets/images/N2/structure/videos/1.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note">Note: Teacher to assist if children are unable to connect the parts together.</p>
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- Slide 26 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">Children, why do you think the <span class="!text-white">structure</span> is
            unable to stand on its own?</h2>
        <p class="note align-bottom">Note: Teacher to assist if children are unable to connect the parts together.</p>
    </div>

    {{-- Slide 27 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('/assets/images//N2/structure/str/st23.png') }}" class="img-md" />
        <h2 class="title stroke">Let's stand up and tiptoe. <br>
            Is it easy to stand on your toes?</h2>
        <p class="note">Note: Encourage children to share how they feel. Was it hard to balance? Did they wobble?</p>
    </div>

    {{-- Slide 28 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('/assets/images//N2/structure/str/st24.png') }}" class="img-lg" />
        <h2 class="title stroke">Similar to you, the structure cannot stand on its own because
            its base is narrow and it is hard for it to support its body.</h2>
    </div>

    {{-- Slide 29 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[50vh]">
        <h2 class="title stroke !text-white">Individual Activity - Make a Square 2</h2>
        <h2 class="title stroke">Using the same parts provided,
            make a square that can stand on its own.</h2>
        <p class="note">Note: Prompt children to think how they can make the base bigger.
            Get children to try on their own first before showing them to the next slide.</p>
    </div>

    {{-- Slide 30 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke">
                <li>Look at the square below. This square can stand on its own!</li>
            </ol>
        </div>
        <img src="{{ asset('/assets/images//N2/structure/str/st25.png') }}" class="img-sm" />
        <p class="note">Note: Teacher to point out that the parts used to make this square are
            the same as the previous square.</p>
    </div>

    {{-- Slide 31 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="2">
                <li>Gather the following parts needed for making a square.</li>
            </ol>
        </div>
        <img src="{{ asset('/assets/images//N2/structure/str/st26.png') }}" class="img-xl" />
        <p class="note">Note: Encourage children to count the pieces needed. Teachers please take
            note of the type of connectors used.</p>
    </div>

    {{-- Slide 32 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="3">
                <li>Arrange the long rectangle pieces in a shape of a square.</li>
            </ol>
        </div>
        <img src="{{ asset('/assets/images//N2/structure/str/st27.png') }}" class="img-md" />
        <p class="note">Note: Encourage and guide the children to try.</p>
    </div>

    {{-- Slide 33 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="4">
                <li>Use the connectors to fix the rectangle pieces together as shown:</li>
            </ol>
        </div>
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('/assets/images//N2/structure/str/st28.png') }}" class="img-sm" />
            <img src="{{ asset('/assets/images//N2/structure/str/st29.png') }}" class="img-sm" />
        </div>
        <p class="note">Note: Encourage and guide the children to try.</p>
    </div>

    {{-- Slide 34 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="5">
                <li>Continue to use the connectors to join the rectangle pieces as shown:</li>
            </ol>
        </div>
        <div class="flex items-center justify-center gap-[1vw]">
            <img src="{{ asset('/assets/images//N2/structure/str/st30.png') }}" class="img-xs" />
            <img src="{{ asset('/assets/images//N2/structure/str/st31.png') }}" class="img-xs" />
            <img src="{{ asset('/assets/images//N2/structure/str/st32.png') }}" class="img-xs" />
        </div>
        <p class="note">Note: Encourage and guide the children to try.</p>
    </div>

    {{-- Slide 35 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="6">
                <li>Put your square upright. Can it stand on its own?</li>
            </ol>
        </div>
        <video id="video2" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/structure/videos/2.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note">Note: Encourage and guide the children to try.</p>
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- Slide 36 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-full">
        <h2 class="title stroke">Children, why do you think the structure is
            now able to stand on its own?</h2>
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>

    {{-- Slide 37 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('/assets/images/N2/structure/str/st34.png') }}" class="img-xl" />
        <h2 class="title stroke">This structure can stand on its own because
            its base is wider and it can support its body.</h2>
    </div>

    {{-- Slide 38 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('/assets/images/N2/structure/str/st35.png') }}" class="img-lg" />
        <h2 class="title stroke">It is like when you stand on your feet.
            You can stand still and you do not wobble.</h2>
        <p class="note">Note: Teacher can get children to compare how they feel when stand on tiptoes and on their feet.
        </p>
    </div>

    {{-- Slide 39 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('/assets/images/N2/structure/str/st36.png') }}" class="img-lg" />
        <h2 class="title stroke">Similarly, all these structures have a base that helps
            them stand firmly on the ground.</h2>
    </div>

    {{-- Slide 40 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('/assets/images/N2/structure/str/st36.png') }}" class="img-lg" />
        <h2 class="title stroke">All the different structures are made up of smaller parts
            giving them their shape.</h2>
    </div>

    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    <div id="buttons" class="absolute flex flex-row">
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

            const returnRouteFromFirstSlide = "{{ route('structureSelection') }}";
            const doneButtonRoute = "{{ route('Structures') }}";

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
