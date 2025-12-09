@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Geodesic Domes</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/st2.png') }}" class="img-xl" />
        <h2 class="title stroke">Children, buildings are common structures around us.
            What kind of buildings do you like? Why?</h2>
    </div>



    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/st2.png') }}" class="img-xl" />
        <h2 class="title stroke">Buildings come in different shapes and sizes.
            Some buildings are really cool.</h2>
    </div>


    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/st24.png') }}" class="img-md" />
        <h2 class="title stroke">This building has a special shape. What shape is it?</h2>
    </div>


    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/st24.png') }}" class="img-md" />
        <h2 class="title stroke">This dome-shaped building is environment museum
            called the Montreal Biosphere in Canada.</h2>
    </div>


    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="flex gap-[1vw]">
            <img src="{{ asset('assets/images/K1/str/st24.png') }}" class="!h-[20vw]" />
            <img src="{{ asset('assets/images/K1/str/st25.png') }}" class="!h-[20vw]" />
        </div>
        <h2 class="title stroke">In its simplest form, a dome looks like
            the upper half of a ball or a sphere.</h2>
    </div>



    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/st26.png') }}" class="img-md" />
        <h2 class="title stroke">If you see closely, this dome is made of
            a network of triangles.</h2>
    </div>



    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/st24.png') }}" class="img-md" />
        <h2 class="title stroke">This dome-shaped building is environment museum
            called the Montreal Biosphere in Canada.</h2>
        <p class="note">Note: Sum up for children that a geodesic dome is a hemispherical structure made of a
            network of triangles.</p>
    </div>



    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/st27.png') }}" class="img-md" />
        <h2 class="title stroke">Sometimes, a few geodesic domes can be joined
            together to form a bigger building.</h2>
    </div>



    {{-- Slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="flex items-center justify-center gap-[1vw]">
            <img src="{{ asset('assets/images/K1/str/st27.png') }}" class="!w-[25vw]" />
            <img src="{{ asset('assets/images/K1/str/st28.png') }}" class="!w-[25vw]" />
        </div>
        <h2 class="title stroke">For an example, the Eden Project in England is a garden built
            with adjoining geodesic domes that attracts many visitors.</h2>
    </div>



    {{-- Slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="flex gap-[1vw]">
            <p class="text-white text-[1.6vw]">The Amazon <br>
                Spheres in <br>
                Seattle</p>
            <img src="{{ asset('assets/images/K1/str/st29.png') }}" class="!w-[35vw]" />
        </div>
        <h2 class="title stroke">In fact, a geodesic dome can be designed differently when
            it is made of a network of different types of triangles.</h2>
    </div>




    {{-- Slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/st30.png') }}" class="img-md" />
        <h2 class="title stroke">Because of that, a geodesic dome can also be extended
            to an elongated shape.</h2>
    </div>



    {{-- Slide 12 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/st31.png') }}" class="img-lg" />
        <h2 class="text-center title stroke">For an example, the Esplanade Theatres in Singapore has two
            elongated domes made up of different triangles.</h2>
    </div>


    {{-- Slide 13 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/st32.png') }}" class="img-md" />
        <h2 class="text-center title stroke">In addition, a geodesic dome can be built as a climbing frame,
            for children to have fun at the playground.</h2>
    </div>


    {{-- Slide 14 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="text-center title stroke">Now, let's learn how to build a
            geodesic dome building!</h2>
    </div>


    {{-- Slide 15 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <h2 class="text-center justify-start !text-white stroke">Small Group Activity 1</h2>
        <div class="text-start">
            <h2 class="title stroke">Mission:</h2>
            <ol class="title stroke">
                <li>Observe and understand the structure of a geodesic dome. After that, use the straws and pipe cleaners to
                    build one.</li>
            </ol>
        </div>
        <p class="note text-center">Note: Display the premade sample of a geodesic dome.</p>
    </div>


    {{-- Slide 16 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="1">
                <li>Observe a geodesic dome and answer some questions.</li>
            </ol>
        </div>
        <video id="video1" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/113.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: <a href="" class="text-[#F7B94A] click-btn1">Click here</a> for questions.
            Guide children to identify the characteristics of a geodesic dome.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 17 --}}
    {{-- click slides --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start">
        <h2 class="text-center title stroke">What shapes do you see from a geodesic dome?</h2>
        <video id="video2" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/113.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Guide children to spot the shapes (Hemisphere, triangles) from the premade sample.
        </p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 18 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start">
        <h2 class="text-center title stroke">Can you find pentagons in this geodesic dome?
            How many are there?</h2>
        <img src="{{ asset('assets/images/K1/str/gl1.png') }}" class="img-lg" />
        <p class="note text-center">Note: Guide children to spot each pentagon and count the number of pentagons that
            make up this geodesic dome.</p>
    </div>

    {{-- Slide 19 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start">
        <h2 class="text-center title stroke">How many triangles made up a pentagon here?</h2>
        <img src="{{ asset('assets/images/K1/str/gl2.png') }}" class="img-lg" />
        <p class="note text-center">Note: Guide children to count the number of triangles in each pentagon.</p>
    </div>

    {{-- Slide 20 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start">
        <h2 class="text-center title stroke">How many triangles made up this geodesic dome?</h2>
        <img src="{{ asset('assets/images/K1/str/gl3.png') }}" class="img-lg" />
        <p class="note text-center">Note: Guide children to count the number of triangles in this geodesic [(5x5)+5].</p>
    </div>


    {{-- Slide 21 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="2">
                <li>Learn how to build the structure of a geodesic dome: i. Make a pentagon.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K1/str/st34.png') }}" class="!h-[20vw]" />
        <p class="note text-center">Note: Give each group a set of materials to work on.
            <a href="" class="text-[#F7B94A] click-btn2">Click here</a> to have all children learn how to make a
            pentagon.
        </p>
    </div>

    {{-- ==== --}}
    {{-- click slides --}}
    {{-- Slide 22 --}}
    <div class="slide hidden click2 flex flex-col items-center justify-start">
        <h2 class="text-center title stroke">How to make a pentagon? - Step 1 of 7</h2>
        <video id="video3" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/114.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video, talk about how to do the step and then learn how
            to do so.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>


    {{-- Slide 23 --}}
    <div class="slide hidden click2 flex flex-col items-center justify-start">
        <h2 class="text-center title stroke">How to make a pentagon? - Step 2 of 7</h2>
        <video id="video4" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/115.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video, talk about how to do the step and then learn how
            to do so.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>


    {{-- Slide 24 --}}
    <div class="slide hidden click2 flex flex-col items-center justify-start">
        <h2 class="text-center title stroke">How to make a pentagon? - Step 3 of 7</h2>
        <video id="video5" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/116.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video, talk about how to do the step and then learn how
            to do so.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>


    {{-- Slide 25 --}}
    <div class="slide hidden click2 flex flex-col items-center justify-start">
        <h2 class="text-center title stroke">How to make a pentagon? - Step 4 of 7</h2>
        <video id="video6" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/117.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video, talk about how to do the step and then learn how
            to do so.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video6')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>


    {{-- Slide 26 --}}
    <div class="slide hidden click2 flex flex-col items-center justify-start">
        <h2 class="text-center title stroke">How to make a pentagon? - Step 5 of 7</h2>
        <video id="video7" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/118.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video, talk about how to do the step and then learn how
            to do so.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video7')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>


    {{-- Slide 27 --}}
    <div class="slide hidden click2 flex flex-col items-center justify-start">
        <h2 class="text-center title stroke">How to make a pentagon? - Step 6 of 7</h2>
        <video id="video8" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/119.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video, talk about how to do the step and then learn how
            to do so.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video8')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 28 --}}
    <div class="slide hidden click2 flex flex-col items-center justify-start">
        <h2 class="text-center title stroke">How to make a pentagon? - Step 7 of 7</h2>
        <video id="video9" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/120.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video, talk about how to do the step and then learn how
            to do so.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video9')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>



    {{-- Slide 29 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="3">
                <li>Learn how to build the structure of a geodesic dome: ii. Make a total of 6 pentagons.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K1/str/st42.png') }}" class="img-sm" />
        <p class="note text-center">Note: Have children work in groups to complete the step.</p>
    </div>


    {{-- Slide 30 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="4">
                <li>Learn how to build the structure of a geodesic dome: iii. Join the pentagons together in the shape of a
                    dome.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K1/str/st43.png') }}" class="img-xl" />
        <p class="note text-center z-[99]">Note: Have children work in groups to complete the step. <a href=""
                class="text-[#F7B94A] click-btn3">Click here</a> to see a way to join them together.</p>
    </div>



    {{-- Slide 31 --}}
    <div class="slide hidden click3 flex flex-col items-center justify-start">
        <video id="video10" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/121.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video, talk about how to do the step and then learn how
            to do so.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video10')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>


    {{-- Slide 32 --}}
    <div class="slide hidden click3 flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K1/str/st45.png') }}" class="img-lg" />
        <p class="note text-center">Note: Have children observe the video, talk about how to do the step and then learn how
            to do so.</p>
    </div>


    {{-- Slide 33 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="5">
                <li>Learn how to build the structure of a geodesic dome: iv. Use straws to fill the gaps around the base of
                    the dome.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K1/str/st46.png') }}" class="img-lg" />
        <p class="note text-center z-[99]">Note: Have children work in groups to complete the step. <a href=""
                class="text-[#F7B94A] click-btn4">Click here</a> to see a way to join them together.</p>
    </div>



    {{-- Slide 34 --}}
    <div class="slide hidden click4 flex flex-col items-center justify-start">
        <video id="video11" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/122.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video, talk about how to do the step and then learn how
            to do so.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video11')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>


    {{-- Slide 35 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K1/str/st48.png') }}" class="img-xl" />
        <p class="note text-center">Note: Tell children that they can use the same way to fill the gaps around the base of
            the dome to complete the making of a geodesic dome.</p>
    </div>


    {{-- Slide 36 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="6">
                <li>Complete the learning journal and showcase your work.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K1/str/st52.png') }}" class="img-sm" />
        <p class="note text-center">Note: After the showcase, guide children to reflect and share things they learned from
            this engineering activity (refer to the possible questions for reflection in the teacher's mode).</p>
    </div>


    {{-- Slide 37 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <h2 class="text-center justify-start !text-white stroke">Small Group Activity 2</h2>
        <div class="text-start">
            <h2 class="title stroke">Mission:</h2>
            <ol class="title stroke">
                <li>Think of what your geodesic dome is going to use for. Design and build the look of your geodesic dome
                    building.</li>
            </ol>
        </div>
        <p class="note text-center">Note: Guide children to search online the uses of a geodesic dome
            (greenhouse, theatre, stadium, tent, etc).</p>
    </div>


    {{-- Slide 38 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="1">
                <li>What is the use of your geodesic dome building? Design the look based on its use. Draw it in the
                    learning journal.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K1/str/st49.png') }}" class="img-lg" />
        <p class="note text-center">Note: Encourage children to design the look of their tall buildings creatively in the
            learning journal.</p>
    </div>



    {{-- Slide 39 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="2" >
                <li>Choose the wrappers based on your design idea and start building the look of your tall building.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K1/str/st18.png') }}"  class="img-xl"/>
        <p class="note text-center z-[99]">Note: Encourage children to try to find their own building techniques. <a
                href="" class="text-[#F7B94A] click-btn5">Click here</a> to see a way to build.</p>
    </div>

    {{-- Slide 40 --}}
    {{--  click slide --}}
    <div class="slide hidden click5 flex flex-col items-center justify-start">
        <video id="video12" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/123.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Give children more time to explore and learn their own building techniques. Pause
            once or twice to point out good building techniques.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video12')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>



    {{-- Slide 41 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="">
                <li>Name and label your building.</li>
                <li>Showcase your work.</li>
            </ol>
        </div>
        <p class="note">Note: During the showcase, have children share their design ideas to the class.</p>
    </div>



    {{-- Slide 42 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center flex flex-col justify-center items-start"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('assets/images/K1/str/st51.png') }}" class="!w-full" />
        </div>
    </div>


    {{-- Slide 43 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center flex flex-col justify-between items-start"
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
            const clickButtons = document.querySelectorAll("[class*='click-btn']");

            let currentSlide = 0;
            let parentSlideIndex = null;
            let isViewingClickSlides = false;
            let currentClickClass = null;

            const returnRouteFromFirstSlide = "{{ route('domeSelection') }}";
            const doneButtonRoute = "{{ route('K1structure') }}";

            function pauseAllVideos() {
                const videos = document.querySelectorAll('video');
                videos.forEach(video => {
                    if (!video.paused) {
                        video.pause();
                    }
                });
            }

            function isClickSlide(slide) {
                return Array.from(slide.classList).some(cls => cls.startsWith('click') && cls.match(/^click\d+$/));
            }

            function hasNextClickSlide(currentIndex) {
                if (!currentClickClass) return false;

                for (let i = currentIndex + 1; i < slides.length; i++) {
                    if (slides[i].classList.contains(currentClickClass)) {
                        return true;
                    }
                }
                return false;
            }

            function getClickClassFromButton(button) {
                const classList = Array.from(button.classList);
                const clickBtnClass = classList.find(cls => cls.startsWith('click-btn'));
                if (clickBtnClass) {
                    const number = clickBtnClass.replace('click-btn', '');
                    return 'click' + number;
                }
                return null;
            }

            function showSlide(index) {
                pauseAllVideos();

                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

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

            clickButtons.forEach((btn) => {
                btn.addEventListener("click", (e) => {
                    e.preventDefault();

                    parentSlideIndex = currentSlide;
                    isViewingClickSlides = true;
                    currentClickClass = getClickClassFromButton(btn);

                    for (let i = 0; i < slides.length; i++) {
                        if (slides[i].classList.contains(currentClickClass)) {
                            currentSlide = i;
                            showSlide(currentSlide);
                            break;
                        }
                    }
                });
            });

            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;

                        while (!isViewingClickSlides &&
                            currentSlide < slides.length &&
                            isClickSlide(slides[currentSlide])) {
                            currentSlide++;
                        }

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

            returnButton.addEventListener("click", () => {
                if (currentSlide === 0 && !isViewingClickSlides) {
                    window.location.href = returnRouteFromFirstSlide;
                    return;
                }

                if (isViewingClickSlides) {
                    let prevSlide = currentSlide - 1;

                    while (prevSlide >= 0 && !slides[prevSlide].classList.contains(currentClickClass)) {
                        prevSlide--;
                    }

                    if (prevSlide >= 0 && slides[prevSlide].classList.contains(currentClickClass)) {
                        currentSlide = prevSlide;
                        showSlide(currentSlide);
                    } else {
                        currentSlide = parentSlideIndex;
                        isViewingClickSlides = false;
                        currentClickClass = null;
                        parentSlideIndex = null;
                        showSlide(currentSlide);
                    }
                } else if (currentSlide > 0) {
                    currentSlide--;

                    while (currentSlide > 0 && isClickSlide(slides[currentSlide])) {
                        currentSlide--;
                    }

                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    if (isViewingClickSlides && parentSlideIndex !== null) {
                        currentSlide = parentSlideIndex;
                        isViewingClickSlides = false;
                        currentClickClass = null;
                        parentSlideIndex = null;
                        showSlide(currentSlide);
                    } else {
                        window.location.href = doneButtonRoute;
                    }
                });
            }

            showSlide(currentSlide);
        });
    </script>
@endpush
