@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Geodesic Domes</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images//K1/str/st2.png" />
        <h2 class="title stroke">Children, buildings are common structures around us.
            What kind of buildings do you like? Why?</h2>
    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/str/st2.png" />
        <h2 class="title stroke">Buildings come in different shapes and sizes.
            Some buildings are really cool.</h2>
    </div>


    {{-- Slide3 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/str/st24.png" />
        <h2 class="title stroke">This building has a special shape. What shape is it?</h2>
    </div>


    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/str/st24.png" />
        <h2 class="title stroke">This dome-shaped building is environment museum
            called the Montreal Biosphere in Canada.</h2>
    </div>


    {{-- Slide 5  --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <div class="flex gap-[1vw]">
            <img src="/assets/images/K1/str/st24.png" class="large-img" />
            <img src="/assets/images/K1/str/st25.png" class="large-img" />
        </div>
        <h2 class="title stroke">In its simplest form, a dome looks like
            the upper half of a ball or a sphere.</h2>
    </div>



    {{-- slide 6 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/str/st26.png" />
        <h2 class="title stroke">If you see closely, this dome is made of
            a network of triangles.</h2>
    </div>



    {{-- Slide 7 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/str/st24.png" />
        <h2 class="title stroke">This dome-shaped building is environment museum
            called the Montreal Biosphere in Canada.</h2>
        <p class="note">Note: Sum up for children that a geodesic dome is a hemispherical structure made of a
            network of triangles.</p>
    </div>



    {{-- slide 8 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/str/st27.png" />
        <h2 class="title stroke">Sometimes, a few geodesic domes can be joined
            together to form a bigger building.</h2>
    </div>



    {{-- slide 9 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <div class="flex items-center justify-center gap-[1vw]">
            <img src="/assets/images/K1/str/st27.png" class="large-img" />
            <img src="/assets/images/K1/str/st28.png" class="large-img" />
        </div>
        <h2 class="title stroke">For an example, the Eden Project in England is a garden built
            with adjoining geodesic domes that attracts many visitors.</h2>
    </div>



    {{-- slide 10 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/str/st29.png" />
        <h2 class="title stroke">In fact, a geodesic dome can be designed differently when
            it is made of a network of different types of triangles.</h2>
    </div>




    {{-- slide 11 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/str/st30.png" />
        <h2 class="title stroke">Because of that, a geodesic dome can also be extended
            to an elongated shape.</h2>
    </div>



    {{-- slide 12 --}}
    <div class="slide hidden  flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/str/st31.png" />
        <h2 class="text-center title stroke">For an example, the Esplanade Theatres n Singapore has two
            elongated domes made up of different triangles.</h2>
    </div>


    {{-- .slide 13 --}}
    <div class="slide hidden  flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/str/st32.png" />
        <h2 class="text-center title stroke">In addition, a geodesic dome can be built as a climbing frame,
            for children to have fun at the playground.</h2>
    </div>


    {{-- slide 14 --}}
    <div class="slide hidden  flex flex-col items-center justify-center ">
        <h2 class="text-center title stroke">Now, let’s learn how to build a
            geodesic dome building!</h2>
    </div>


    {{-- sldie 15 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <h2 class="text-center justify-start text-[45px] !text-white stroke">Small Group Activity 1</h2>
        <h2 class="text-start title stroke">Mission: <br>
            Observe and understand the structure of a geodesic dome.
            After that, use the straws and pipe cleaners to build one.</h2>
        <p class="note text-center">Note: Display the premade sample of a geodesic dome.</p>
    </div>


    {{-- slide 15 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class=" lesson-ul title stroke">
                <li>1. Observe a geodesic dome and answer some questions.</li>
            </ol>
        </div>
        <video id="video1" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/113.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: <a href="" class="text-[#F7B94A] click-btn1">Click here</a> for questions.
            Guide children to identify the characteristics of a geodesic dome.</p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- click slides --}}
    <div class="slide hidden click1  flex flex-col items-center justify-start  ">
        <h2 class="text-center title stroke">What shapes do you see from a geodesic dome?</h2>
        <video id="video2" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/113.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Guide children to spot the shapes (Hemisphere, triangles) from the premade sample.
        </p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- sldie==2 --}}
    <div class="slide hidden click1  flex flex-col items-center justify-start  ">
        <h2 class="text-center title stroke">Can you find pentagons in this geodesic dome?
            How many are there?</h2>
        <img src="/assets/images//K1/str/gl1.png" />
        <p class="note text-center">Note: Guide children to spot each pentagon and count the number of pentagons that
            make up this geodesic dome.</p>
    </div>

    {{-- sldie==3 --}}
    <div class="slide hidden click1  flex flex-col items-center justify-start  ">
        <h2 class="text-center title stroke">How many triangles made up a pentagon here?</h2>
        <img src="/assets/images//K1/str/gl2.png" />
        <p class="note text-center">Note: Guide children to count the number of triangles in each pentagon.</p>
    </div>

    {{-- sldie==4 --}}
    <div class="slide hidden  click1 flex flex-col items-center justify-start  ">
        <h2 class="text-center title stroke">How many triangles made up this geodesic dome?</h2>
        <img src="/assets/images//K1/str/gl3.png" />
        <p class="note text-center">Note: Guide children to count the number of triangles in this geodesic [(5x5)+5].</p>
    </div>


    {{-- slide 16 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">\
        <div class="text-start">

            <h2 class="title stroke">Steps:</h2>
            <ol class=" lesson-ul title stroke">
                <li>2. Learn how to build the structure of a geodesic dome:
                    i. Make a pentagon.</li>
            </ol>
        </div>
        <img src="/assets/images//K1/str/st34.png" class="large-img" />
        <p class="note text-center">Note: Give each group a set of materials to work on.
            <a href="" class="text-[#F7B94A] click-btn2">Click here</a> to have all children learn how to make a
            pentagon.
        </p>
    </div>

    {{-- ==== --}}
    {{-- click slides --}}
    {{-- step 1 --}}
    <div class="slide hidden click2  flex flex-col items-center justify-start  ">
        <h2 class="text-center title stroke">How to make a pentagon? - Step 1 of 7</h2>
        <video id="video3" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/114.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video, talk about how to do the step and then learn how
            to do so.
        </p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- step 2 --}}
    <div class="slide hidden click2  flex flex-col items-center justify-start  ">
        <h2 class="text-center title stroke">How to make a pentagon? - Step 2 of 7</h2>
        <video id="video4" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/115.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video, talk about how to do the step and then learn how
            to do so.</p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- step 3 --}}
    <div class="slide hidden click2  flex flex-col items-center justify-start  ">
        <h2 class="text-center title stroke">How to make a pentagon? - Step 3 of 7</h2>
        <video id="video5" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/116.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video, talk about how to do the step and then learn how
            to do so.</p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- step 4 --}}
    <div class="slide hidden click2  flex flex-col items-center justify-start  ">
        <h2 class="text-center title stroke">How to make a pentagon? - Step 4 of 7</h2>
        <video id="video6" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/117.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video, talk about how to do the step and then learn how
            to do so.</p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video6')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- step 5 --}}
    <div class="slide hidden click2  flex flex-col items-center justify-start  ">
        <h2 class="text-center title stroke">How to make a pentagon? - Step 5 of 7</h2>
        <video id="video7" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/118.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video, talk about how to do the step and then learn how
            to do so.</p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video7')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- step 6 --}}
    <div class="slide hidden click2  flex flex-col items-center justify-start  ">
        <h2 class="text-center title stroke">How to make a pentagon? - Step 6 of 7</h2>
        <video id="video8" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/119.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video, talk about how to do the step and then learn how
            to do so.</p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video8')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- step 7 --}}
    <div class="slide hidden click2  flex flex-col items-center justify-start  ">
        <h2 class="text-center title stroke">How to make a pentagon? - Step 7 of 7</h2>
        <video id="video9" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/120.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video, talk about how to do the step and then learn how
            to do so.</p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video9')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- slide 17 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class=" lesson-ul title stroke">
                <li>2. Learn how to build the structure of a geodesic dome: <br>
                    ii. Make a total of 6 pentagons</li>
            </ol>
        </div>
        <img src="/assets/images//K1/str/st42.png" class="large-img" />
        <p class="note text-center">Note: Have children work in groups to complete the step.</p>
    </div>


    {{-- slide 18 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class=" lesson-ul title stroke">
                <li>2. Learn how to build the structure of a geodesic dome:
                    iii. Join the pentagons together in the shape of a dome.</li>
            </ol>
        </div>
        <img src="/assets/images//K1/str/st43.png" />
        <p class="note text-center z-[99]">Note: Have children work in groups to complete the step. <a href=""
                class="text-[#F7B94A] click-btn3">Click here</a> to see a way to join them together.</p>
    </div>



    {{-- slide 19 click --}}
    <div class="slide hidden click3  flex flex-col items-center justify-start  ">
        <video id="video10" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/121.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video, talk about how to do the step and then learn how
            to do so.</p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video10')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 20  click --}}
    <div class="slide hidden click3  flex flex-col items-center justify-start  ">
        <img src="/assets/images//K1/str/st45.png" />
        <p class="note text-center">Note: Have children observe the video, talk about how to do the step and then learn how
            to do so. </p>
    </div>


    {{-- slide 21  --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="text-start">

            <h2 class="title stroke">Steps:</h2>
            <ol class=" lesson-ul title stroke">
                <li>2. Learn how to build the structure of a geodesic dome:
                    iv. Use straws to fill the gaps around the base of the dome.</li>
            </ol>
        </div>
        <img src="/assets/images//K1/str/st46.png" />
        <p class="note text-center z-[99]">Note: Have children work in groups to complete the step. <a href=""
                class="text-[#F7B94A] click-btn4">Click here</a> to see a way to join them together.</p>
    </div>



    {{-- sldie 22 click slide  --}}
    <div class="slide hidden click4  flex flex-col items-center justify-start  ">
        <video id="video11" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/122.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video, talk about how to do the step and then learn how
            to do so.</p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video11')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 23 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="/assets/images//K1/str/st48.png" />
        <p class="note text-center">Note: Tell children that they can use the same way to fill the gaps around the base of
            the dome to complete the making of a geodesic dome.</p>
    </div>


    {{-- slide 24 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="text-start">

            <h2 class="title stroke">Steps:</h2>
            <ol class=" lesson-ul title stroke">
                <li>3. Complete the learning journal and showcase your work</li>
            </ol>
        </div>
        <img src="/assets/images//K1/str/st52.png" class="large-img" />
        <p class="note text-center">Note: After the showcase, guide children to reflect and share things they learned from
            this engineering
            activity (refer to the possible questions for reflection in the teacher's mode).</p>
    </div>


    {{-- slide 25 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <h2 class="text-center justify-start text-[45px] !text-white stroke">Small Group Activity 2</h2>
        <h2 class="text-start title stroke">Mission: <br>
            Think of what your geodesic dome is going to use for.
            Design and build the look of your geodesic dome building.</h2>
        <p class="note text-center">Note: Guide children to search online the uses of a geodesic dome
            (greenhouse, theatre, stadium, tent, etc).</p>
    </div>


    {{-- sldie 26 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class=" lesson-ul title stroke">
                <li>1. What is the use of your geodesic dome building? Design the
                    look based on its use. Draw it in the learning journal. </li>
            </ol>
        </div>
        <img src="/assets/images//K1/str/st49.png" />
        <p class="note text-center">Note: Encourage children to design the look of their tall buildings creatively in the
            learning journal.</p>
    </div>



    {{-- sldie 27 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="text-start">

            <h2 class="title stroke">Steps:</h2>
            <ol class=" lesson-ul title stroke">
                <li>2. Choose the wrappers based on your design idea and start
                    building the look of your tall building. </li>
            </ol>
        </div>
        <img src="/assets/images//K1/str/st18.png" />
        <p class="note text-center z-[99]">Note: Encourage children to try to find their own building techniques. <a
                href=""class="text-[#F7B94A] click-btn5">Click here</a> to
            see a way to build.</p>
    </div>

    {{--  click slide --}}
    <div class="slide hidden click5  flex flex-col items-center justify-start  ">
        <video id="video12" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/123.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Give children more time to explore and learn their own building techniques.Pause
            once or twice to point out good building techniques.</p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video12')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- slide 27 --}}
    <div class="slide hidden  flex flex-col items-center justify-start ">
        <div class="text-start title stroke">
            <h2>Steps:</h2>
            <ul class="lesson-ul">
                <li>3. Name and label you building.</li>
                <li>4. Showcase your work.</li>
            </ul>
        </div>
        <p class="note">Note: During the showcase, have children share their design ideas to the class.</p>
    </div>



    {{-- slide 28 --}}
    <div class="slide  hidden flex flex-col items-center justify-center ">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[40vw] h-[43vh] bg-cover bg-center flex flex-col justify-center items-start"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="/assets/images//K1/str/st51.png" />
        </div>
    </div>


    {{-- slide 29 --}}
    <div class="slide  hidden flex flex-col items-center justify-center ">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[40vw] h-[43vh] bg-cover bg-center flex flex-col justify-between items-start"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>What is the use of your building? ________________________________________________ <br>

                Design the look of your tall building based on its use. Draw it.</p>
            <p>What is the name of your building?___________________________________________________</p>
        </div>
    </div>




    {{-- ====================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>


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
            const clickButtons = document.querySelectorAll("[class*='click-btn']");

            // Keep track of which slide we're currently viewing
            let currentSlide = 0;
            let parentSlideIndex = null;
            let isViewingClickSlides = false;
            let currentClickClass = null;

            // CONFIGURE YOUR ROUTES HERE
            const returnRouteFromFirstSlide = "{{ route('domeSelection') }}";
            const doneButtonRoute = "{{ route('domeSelection') }}";

            // Pause all videos when changing slides
            function pauseAllVideos() {
                const videos = document.querySelectorAll('video');
                videos.forEach(video => {
                    if (!video.paused) {
                        video.pause();
                    }
                });
            }

            // Check if slide is any click slide (click1, click2, etc.)
            function isClickSlide(slide) {
                return Array.from(slide.classList).some(cls => cls.startsWith('click') && cls.match(/^click\d+$/));
            }

            // Check if there's another click slide with same class after current one
            function hasNextClickSlide(currentIndex) {
                if (!currentClickClass) return false;

                for (let i = currentIndex + 1; i < slides.length; i++) {
                    if (slides[i].classList.contains(currentClickClass)) {
                        return true;
                    }
                }
                return false;
            }

            // Get click class from button (click-btn1 → click1, click-btn2 → click2)
            function getClickClassFromButton(button) {
                const classList = Array.from(button.classList);
                const clickBtnClass = classList.find(cls => cls.startsWith('click-btn'));
                if (clickBtnClass) {
                    const number = clickBtnClass.replace('click-btn', '');
                    return 'click' + number;
                }
                return null;
            }

            // Show a specific slide and hide all others
            function showSlide(index) {
                // Pause all videos before switching
                pauseAllVideos();

                // Hide all slides except the current one
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                // Check if last slide OR last click slide
                const isLastSlide = index === slides.length - 1;
                const isLastClickSlide = isViewingClickSlides && !hasNextClickSlide(index);

                if (isLastSlide || isLastClickSlide) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            // Click button handlers
            clickButtons.forEach((btn) => {
                btn.addEventListener("click", (e) => {
                    e.preventDefault(); // Prevent default anchor behavior

                    parentSlideIndex = currentSlide;
                    isViewingClickSlides = true;
                    currentClickClass = getClickClassFromButton(btn);

                    // Find the first slide with matching click class
                    for (let i = 0; i < slides.length; i++) {
                        if (slides[i].classList.contains(currentClickClass)) {
                            currentSlide = i;
                            showSlide(currentSlide);
                            break;
                        }
                    }
                });
            });

            // NEXT button - skip click slides if not viewing them
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;

                        // Skip click slides if not viewing them
                        while (!isViewingClickSlides &&
                            currentSlide < slides.length &&
                            isClickSlide(slides[currentSlide])) {
                            currentSlide++;
                        }

                        // If viewing click slides, only show slides with current click class
                        if (isViewingClickSlides) {
                            while (currentSlide < slides.length &&
                                !slides[currentSlide].classList.contains(currentClickClass)) {
                                currentSlide++;
                            }
                        }

                        if (currentSlide < slides.length) {
                            showSlide(currentSlide);
                        }
                    }
                });
            });

            // RETURN button - go to previous slide or navigate back
            returnButton.addEventListener("click", () => {
                // If on first slide and not viewing click slides, navigate to return route
                if (currentSlide === 0 && !isViewingClickSlides) {
                    window.location.href = returnRouteFromFirstSlide;
                    return;
                }

                if (isViewingClickSlides) {
                    // Find previous slide with same click class
                    let prevSlide = currentSlide - 1;

                    while (prevSlide >= 0 && !slides[prevSlide].classList.contains(currentClickClass)) {
                        prevSlide--;
                    }

                    if (prevSlide >= 0 && slides[prevSlide].classList.contains(currentClickClass)) {
                        currentSlide = prevSlide;
                        showSlide(currentSlide);
                    } else {
                        // No more click slides, return to parent
                        currentSlide = parentSlideIndex;
                        isViewingClickSlides = false;
                        currentClickClass = null;
                        parentSlideIndex = null;
                        showSlide(currentSlide);
                    }
                } else if (currentSlide > 0) {
                    currentSlide--;

                    // Skip click slides when going back
                    while (currentSlide > 0 && isClickSlide(slides[currentSlide])) {
                        currentSlide--;
                    }

                    showSlide(currentSlide);
                }
            });

            // DONE button - navigate to completion route or return to parent
            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    if (isViewingClickSlides && parentSlideIndex !== null) {
                        // Return to parent slide
                        currentSlide = parentSlideIndex;
                        isViewingClickSlides = false;
                        currentClickClass = null;
                        parentSlideIndex = null;
                        showSlide(currentSlide);
                    } else {
                        // Navigate to route
                        window.location.href = doneButtonRoute;
                    }
                });
            }

            // Initialize - show first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
