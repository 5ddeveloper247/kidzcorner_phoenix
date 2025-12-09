@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- title --}}
    <h2 class="top-title stroke">Bridges</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/br1.png') }}" class="img-lg" />
        <h2 class="title stroke">Children, this is another type of structure.
            What is it called? What do we use it for?</h2>
    </div>



    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/br1.png') }}" class="img-lg" />
        <h2 class="title stroke">A bridge is a structure designed and built to carry
            people and things across water, valleys or gaps.</h2>
    </div>


    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/br2.png') }}" class="img-lg" />
        <h2 class="title stroke">A beam bridge is the simplest type of bridge.</h2>
        <p class="note">Note: Have children compare and talk about the characteristics of a beam bridge.</p>
    </div>


    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/br2.png') }}" class="img-lg" />
        <h2 class="title stroke">It is a flat surface that rests on two end supports.</h2>
        <p class="note">Note: Have children point at the end supports of these beam bridge.</p>
    </div>


    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/br3.png') }}" class="img-lg" />
        <h2 class="title stroke">What happens if there is too much weight on a <span class="!text-white">beam bridge</span>?
        </h2>
        <p class="note">Note: Encourage children to predict the outcome of this experiment.</p>
    </div>



    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video1" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/135.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">The bridge collapses when there is too much weight on it.</h2>
        <p class="note">Note: Have children describe the details of this experiment (How to do it? How did the bridge
            deform?).</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>



    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[17vw]">
        <h2 class="title stroke">Over time, people designed and built stronger bridges
            so that the bridges can support more weight. Let's see some examples here!</h2>
        <p class="note">Note: Guide children to talk about the characteristics of each bridge in the following pages.</p>
    </div>



    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/br5.png') }}" class="img-lg" />
        <h2 class="title stroke">What do you see from this truss bridge?</h2>
        <p class="note">Note: Guide children to talk about the shapes that form the structure built above the bridge.</p>
    </div>



    {{-- Slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/br6.png') }}" class="img-lg" />
        <h2 class="title stroke">What do you see from this truss bridge?</h2>
        <p class="note">Note: Guide children to talk about the shapes that form the structure built above the bridge.</p>
    </div>



    {{-- Slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/br7.png') }}" class="img-lg" />
        <h2 class="title stroke">What do you see from this truss bridge?</h2>
        <p class="note">Note: Guide children to talk about the shapes that form the structure built above the bridge.</p>
    </div>




    {{-- Slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/br8.png') }}" class="img-lg" />
        <h2 class="title stroke">What do you see from this arch bridge?</h2>
        <p class="note">Note: Guide children to talk about the shapes that form the structure built above the bridge.</p>
    </div>



    {{-- Slide 12 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/br9.png') }}" class="img-lg" />
        <h2 class="title stroke">What do you see from this arch bridge?</h2>
        <p class="note">Note: Guide children to talk about the shapes that form the structure built above the bridge.</p>
    </div>



    {{-- Slide 13 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/br10.png') }}" class="img-lg" />
        <h2 class="title stroke">What do you see from this arch bridge?</h2>
        <p class="note">Note: Guide children to talk about the shapes that form the structure built above the bridge.</p>
    </div>



    {{-- Slide 14 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/br11.png') }}" class="img-lg" />
        <h2 class="title stroke">What do you see from this suspension bridge?</h2>
        <p class="note">Note: Guide children to talk about the shapes that form the structure built above the bridge.</p>
    </div>


    {{-- Slide 15 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/br12.png') }}" class="img-lg" />
        <h2 class="title stroke">What do you see from this suspension bridge?</h2>
        <p class="note">Note: Guide children to talk about the shapes that form the structure built above the bridge.</p>
    </div>



    {{-- Slide 16 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/br13.png') }}" class="img-lg" />
        <h2 class="title stroke">What do you see from this suspension bridge?</h2>
        <p class="note">Note: Guide children to talk about the shapes that form the structure built above the bridge.</p>
    </div>



    {{-- Slide 17 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/br14.png') }}" class="img-xl" />
        <h2 class="title stroke">It is clear that certain structures are built above or below a
            bridge to make it stronger and able to support more weight.</h2>
    </div>


    {{-- Slide 18 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/str/br15.png') }}" class="img-xl" />
        <h2 class="title stroke">Therefore, we know that we can use some shapes
            to design stronger bridges.</h2>
    </div>


    {{-- Slide 19 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">Now, can you design and build a bridge
            that is strong enough to hold up some weight?</h2>
    </div>



    {{-- Slide 20 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <h2 class="text-center justify-start  !text-white stroke">Small Group Activity 1</h2>
        <div class="text-start">
            <h2 class="title stroke">Mission:</h2>
            <ol class="title stroke">
                <li>Use some straws and pipe cleaners to build the structure of a beam bridge and test how strong is it.
                </li>
            </ol>
        </div>
        <p class="note text-center">Note: Give each group of children a set of materials (straws & pipe cleaners) to work
            on.</p>
    </div>

    {{-- Slide 21 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="1">
                <li>Learn how to extend the length of a pipe cleaner.</li>
            </ol>
        </div>
        <video id="video2" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/124.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video, talk about how to do the step and then learn how
            to do so.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 22 --}}
    <div class="slide hidden flex flex-col justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="2">
                <li>Learn how to extend the length of a straw.</li>
            </ol>
        </div>
        <div class="flex items-center">
            <video id="video3" class="pointer-events-none">
                <source src="{{ asset('assets/images/K1/str/125.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <img src="{{ asset('assets/images/K1/str/arrow.png') }}" class="!w-[4vw]" />

            <p class="text-white w-[8vw] text-[1.2vw]">Each group prepares 5 long straws (same length)</p>
        </div>
        <p class="note text-center">Note: Have children observe the video, talk about how to do the step and then learn how
            to do so.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 23 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="3">
                <li>Learn how to build the structure of a beam bridge.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K1/str/br18.png') }}" class="img-lg" />
        <p class="note text-center z-[99]">Note: Have children work in groups to complete the mission. <a href=""
                class="text-[#F7B94A] click-btn1">Click Here</a> to follow the step-by-step guide.</p>
    </div>

    {{-- ==== --}}
    {{-- click slides --}}
    {{-- Slide 24 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start">
        <h2 class="text-center title stroke">How to make the structure of a beam bridge? - Step 1 of 9</h2>
        <video id="video4" class="pointer-events-none !min-w-[40vw]">
            <source src="{{ asset('assets/images/K1/str/126.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all the sub-steps. Then have them work together in groups to complete the sub-steps.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 25 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start">
        <h2 class="text-center title stroke">How to make the structure of a beam bridge? - Step 2 of 9</h2>
        <video id="video5" class="pointer-events-none !min-w-[40vw]">
            <source src="{{ asset('assets/images/K1/str/127.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all the sub-steps. Then have them work together in groups to complete the sub-steps.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 26 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start">
        <h2 class="text-center title stroke">How to make the structure of a beam bridge? - Step 3 of 9</h2>
        <video id="video6" class="pointer-events-none !min-w-[40vw]">
            <source src="{{ asset('assets/images/K1/str/128.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all the sub-steps. Then have them work together in groups to complete the sub-steps.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video6')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 27 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start">
        <h2 class="text-center title stroke">How to make the structure of a beam bridge? - Step 4 of 9</h2>
        <video id="video7" class="pointer-events-none !min-w-[40vw]">
            <source src="{{ asset('assets/images/K1/str/129.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all the sub-steps. Then have them work together in groups to complete the sub-steps.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video7')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 28 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start">
        <h2 class="text-center title stroke">How to make the structure of a beam bridge? - Step 5 of 9</h2>
        <video id="video8" class="pointer-events-none !min-w-[40vw]">
            <source src="{{ asset('assets/images/K1/str/130.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all the sub-steps. Then have them work together in groups to complete the sub-steps.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video8')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 29 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start">
        <h2 class="text-center title stroke">How to make the structure of a beam bridge? - Step 6 of 9</h2>
        <video id="video9" class="pointer-events-none !min-w-[40vw]">
            <source src="{{ asset('assets/images/K1/str/131.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all the sub-steps. Then have them work together in groups to complete the sub-steps.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video9')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 30 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start">
        <h2 class="text-center title stroke">How to make the structure of a beam bridge? - Step 7 of 9</h2>
        <video id="video10" class="pointer-events-none !min-w-[40vw]">
            <source src="{{ asset('assets/images/K1/str/132.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all the sub-steps. Then have them work together in groups to complete the sub-steps.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video10')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>


    {{-- Slide 31 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start">
        <h2 class="text-center title stroke">How to make the structure of a beam bridge? - Step 8 of 9</h2>
        <video id="video11" class="pointer-events-none !min-w-[40vw]">
            <source src="{{ asset('assets/images/K1/str/133.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all the sub-steps. Then have them work together in groups to complete the sub-steps.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video11')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>


    {{-- Slide 32 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start">
        <h2 class="text-center title stroke">How to make the structure of a beam bridge? - Step 9 of 9</h2>
        <video id="video12" class="pointer-events-none !min-w-[40vw]">
            <source src="{{ asset('assets/images/K1/str/134.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all the sub-steps. Then have them work together in groups to complete the sub-steps.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video12')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>




    {{-- Slide 33 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="4">
                <li>Test how much weight your bridge can support.</li>
            </ol>
        </div>
        <div class="flex items-center gap-[1vw]">
            <video id="video13" class="pointer-events-none video-md">
                <source src="{{ asset('assets/images/K1/str/135.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <img src="{{ asset('assets/images/K1/str/arrow.png') }}" class="!w-[4vw]" />
            <p class="text-white w-[6vw]">What other
                things can
                you use for
                the test?</p>
        </div>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Then have them
            work in groups to complete the step. Have them record the test result in the learning journal.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video13')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>




    {{-- Slide 34 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <h2 class="text-center justify-start  !text-white stroke">Small Group Activity 2</h2>
        <div class="text-start">
            <h2 class="title stroke">Mission:</h2>
            <ol class="title stroke">
                <li>Design certain structures above or below your bridge to make it stronger and able to support more
                    weight.</li>
            </ol>
        </div>
        <p class="note text-center">Note: Give each group of children a set of materials (straws, pipe cleaners and
            scissors) to work on.</p>
    </div>


    {{-- Slide 35 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[30vw]">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="1">
                <li>How do you design a stronger bridge that is able to support more weight? Draw it in the learning
                    journal.</li>
                <li>Build your bridge according to your design.</li>
                <li>Test how much weight your new bridge can support. Modify your design and repeat the test until your new
                    bridge can support more weight. Draw your final design in the learning journal.</li>
            </ol>
        </div>
        <p class="note text-center">Note: Have children discuss in groups to come out with a design idea before they start
            working on the add-on structure above or below their bridges. Ask possible questions (on the next page) to
            trigger their ideas. Have children work in groups to complete the mission.</p>
    </div>



    {{-- Slide 36 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <div class="text-start">
            <h2 class="title stroke">Possible questions during hands-on session:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="1">
                <li>What kind of bridge design do you think is strong enough to hold up more weight?</li>
                <li>What shapes do you think can be used to design a stronger bridge?</li>
                <li>How do you make your bridge strong enough to support more weight?</li>
            </ol>
        </div>
        <p class="note text-center">Note: Have children try out their ideas and share with the class. Pause once or twice
            to point out good building techniques or good building designs. Have them share and discuss problems encountered
            individually.</p>
    </div>



    {{-- Slide 37 --}}
    <div class="slide hidden flex flex-col items-start justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="4">
                <li>Design and build the roadway of your bridge.</li>
                <li>Showcase your work.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K1/str/br28.png') }}" class="img-sm" />
        <p class="note">Note: During the showcase, have them share their design ideas with the class.
            After the showcase, guide children to reflect and share things they learned from this engineering
            activity (refer to the possible questions for reflection in the teacher's mode).</p>
    </div>



    {{-- Slide 38 --}}
    <div class="slide hidden flex flex-col items-center justify-between gap-y-4">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center flex flex-col justify-between items-start"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>How did you test your beam bridge? Draw here.</p>
            <p>What did you use for the test?________________________________ <br>
                How much weight can your beam bridge support before it collapses? _______________</p>
        </div>
    </div>


    {{-- Slide 39 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center flex flex-col items-start"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>How do you design a stronger bridge that is able to support more weight? Draw it.</p>
        </div>
    </div>


    {{-- Slide 40 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center flex flex-col justify-between items-start"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>What was your final design of a stronger bridge that is able to support more weight? Draw it.</p>
            <p>How much weight can your new bridge support before it collapses?</p>
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
            const returnRouteFromFirstSlide = "{{ route('bridgeSelection') }}";
            const doneButtonRoute = "{{ route('K1structure') }}";

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
