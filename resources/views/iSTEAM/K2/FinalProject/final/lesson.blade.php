@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-between h-[60%]">
        <div class="title stroke">
            <h2>Children, do you still remember the six simple machines that
                you have learnt? What are they?</h2>
        </div>
        <p class="note">Note: Guide children to recall and name the six simple machines. <br>
            Guide them to state the basic characteristics and uses of each one with help of the info on the next page.</p>
    </div>


    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/final/f1.png') }}" />
    </div>


    {{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/final/f2.png') }}" />
        <h2 class="title stroke text-center">Why do you think we learn about these simple machines?</h2>
        <p class="note">Note: Encourage and guide children to boldly share their views.</p>
    </div>

    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/final/f3.png') }}" />
        <h2 class="title stroke text-center">Many things around us are actually made with the idea of
            simple machines. Can you spot them from each picture?</h2>
    </div>

    {{-- Slide 5 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/final/f4.png') }}" />
        <h2 class="title stroke">What are these? What did you do with them?</h2>
        <p class="note">Note: Guide children to recall and share how to control Dash the robot.</p>
    </div>


    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center gap-y-3">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/final/f5.png') }}" class="h-[343px]" />
            <video id="video1" class="w-full max-w-4xl pointer-events-none">
                <source src="{{ asset('assets/images/K2/final/224.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <h2 class="title stroke">You used an application called Blockly in a tablet
            to programme the robot to do certain tasks.</h2>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center gap-y-3">
        <img src="{{ asset('assets/images/K2/final/f6.png') }}" />
        <h2 class="title stroke">What about this? What have you used it for?</h2>
        <p class="note">Note: Use a tablet to show the app. Have children share what they know about ScratchJr.</p>
    </div>


    {{-- slide 8 --}}
    <div class="slide hidden flex flex-col items-center gap-y-3">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/final/f7.png') }}" class="h-[343px]" />
            <video id="video2" class="w-full max-w-4xl pointer-events-none">
                <source src="{{ asset('assets/images/K2/final/284.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <h2 class="title stroke">You used ScratchJr to programme the characters to create
            your own animated stories.</h2>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>

    {{-- slide 9 --}}
    <div class="slide hidden flex flex-col items-center gap-y-3">
        <img src="{{ asset('assets/images/K2/final/f8.png') }}" />
        <h2 class="title stroke">Why do you think we learn about programming?</h2>
        <p class="note">Note: Encourage and guide children to boldly share their views.</p>
    </div>

    {{-- slide 10 --}}
    <div class="slide hidden flex flex-col items-center gap-y-3">
        <img src="{{ asset('assets/images/K2/final/f9.png') }}" />
        <h2 class="title stroke">Many machines that do work for us are controlled by
            different programmes.</h2>
    </div>

    {{-- slide 11 --}}
    <div class="slide hidden flex flex-col items-center gap-y-3">
        <img src="{{ asset('assets/images/K2/final/f10.png') }}" />
        <h2 class="title stroke">Do you remember these? What did you use to build them?</h2>
        <p class="note">Note: Guide children to recall and talk about the experience they used straws and
            pipe cleaners to build structures.</p>
    </div>

    {{-- slide 12 --}}
    <div class="slide hidden flex flex-col items-center gap-y-3">
        <img src="{{ asset('assets/images/K2/final/f10.png') }}" />
        <h2 class="title stroke">Why do you think we learn about structures?</h2>
        <p class="note">Note: Encourage and guide children to boldly share their views.</p>
    </div>

    {{-- slide 13 --}}
    <div class="slide hidden flex flex-col items-center gap-y-3">
        <img src="{{ asset('assets/images/K2/final/f11.png') }}" />
        <h2 class="title stroke">Buildings, bridges and many things around us are structures.</h2>
        <p class="note">Note: Tell children that structures are durable and behave well only if properly built.</p>
    </div>

    {{-- slide 14 --}}
    <div class="slide hidden flex flex-col items-center gap-y-3">
        <img src="{{ asset('assets/images/K2/final/f12.png') }}" />
        <h2 class="title stroke">What is this? What is it for?</h2>
        <p class="note">Note: Guide children to recall and share what they know about an electrical circuit.</p>
    </div>

    {{-- slide 15 --}}
    <div class="slide hidden flex flex-col items-center gap-y-3">
        <img src="{{ asset('assets/images/K2/final/f12.png') }}" />
        <h2 class="title stroke">This is the drawing of an electrical circuit.
            An electrical circuit is a path that electricity can flow through.</h2>
    </div>

    {{-- slide 16 --}}
    <div class="slide hidden flex flex-col items-center gap-y-3">
        <img src="{{ asset('assets/images/K2/final/f12.png') }}" />
        <h2 class="title stroke">Why do you think we learn about electrical circuits?</h2>
        <p class="note">Note: Encourage and guide children to boldly share their views.</p>
    </div>


    {{-- slide 17 --}}
    <div class="slide hidden flex flex-col items-center gap-y-3">
        <img src="{{ asset('assets/images/K2/final/f13.png') }}" />
        <h2 class="title stroke">Only a complete electrical circuit allows electricity to provide
            power for machines around us to do work.</h2>
    </div>


    {{-- slide 18 --}}
    <div class="slide hidden flex flex-col items-center gap-y-3">
        <img src="{{ asset('assets/images/K2/final/f14.png') }}" />
        <h2 class="title stroke">Everything that you have learnt will help you become
            a good problem solver.</h2>
    </div>


    {{-- slide 19 --}}
    <div class="slide hidden flex flex-col items-center gap-y-3">
        <img src="{{ asset('assets/images/K2/final/f14.png') }}" />
        <h2 class="title stroke">We must use what we have learnt to do good and help to
            make our lives and the lives of others better.</h2>
    </div>

    {{-- slide 20 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">Now it's time for you to get creative! <br>
            Let's invent things that would help to solve some problems or
            take on challenges, using knowledge that you have learnt!</h2>
    </div>


    {{-- slide 21 --}}
    <div class="flex flex-col items-center justify-between h-[80%] slide hidden">
        <h2 class="title !text-white stroke">1 - Pool Toys</h2>
        <div class="text-start self-start title stroke">
            <h2 class="!text-white">Problem:</h2>
            <h2>You and your friends have gathered for a day of fun at the
                swimming pool but you have forgotten to bring the bag of pool
                toys! Create a pool toy that will be fun for you and your
                friends to play in the pool.</h2>
        </div>
        <p class="note">Note: Guide children to understand the problem.</p>
    </div>


    {{-- slide 22 --}}
    <div class="flex flex-col items-center justify-between h-[80%] slide hidden">
        <h2 class="title !text-white stroke">2 - Reduce Food Wastage</h2>
        <div class="text-start self-start title stroke">
            <h2 class="!text-white">Challenge:</h2>
            <h2>Create something to inform the school cook of the class
                attendance every morning so that the cook will know how much
                to cook!</h2>
        </div>
        <p class="note">Note: Guide children to understand the problem.</p>
    </div>

    {{-- slide 23 --}}
    <div class="flex flex-col items-center justify-between h-[80%] slide hidden">
        <h2 class="title !text-white stroke">3 - Home For The Fallen Baby Bird</h2>
        <div class="text-start self-start title stroke">
            <h2 class="!text-white">Problem:</h2>
            <h2>You found a bird nest in the playground. The nest is broken
                and there's a baby bird in it. Construct a new home for the
                baby bird so that it will be safe from the stray cats and dogs.</h2>
        </div>
        <p class="note">Note: Guide children to understand the problem.</p>
    </div>


    {{-- slide 24 --}}
    <div class="flex flex-col items-center justify-between h-[80%] slide hidden">
        <h2 class="title !text-white stroke">4 - No More Paper Towel</h2>
        <div class="text-start self-start title stroke">
            <h2 class="!text-white">Problem:</h2>
            <h2>The toilet floor will be wet when there isn't enough paper
                towels for children to dry their hands after washing. Design
                something that can alert the school cleaner that the paper
                towels in the toilet need refilling before it runs out.</h2>
        </div>
        <p class="note">Note: Guide children to understand the problem.</p>
    </div>


    {{-- slide 25 --}}
    <div class="flex flex-col items-center justify-between h-[80%] slide hidden">
        <h2 class="title !text-white stroke">5 - Let There Be Light</h2>
        <div class="text-start self-start title stroke">
            <h2 class="!text-white">Problem:</h2>
            <h2>The classroom is dark during naptime. Create a night light for
                the class.</h2>
        </div>
        <p class="note">Note: Guide children to understand the problem.</p>
    </div>

    {{-- slide 26 --}}
    <div class="flex flex-col items-center justify-between h-[80%] slide hidden">
        <h2 class="title !text-white stroke">6 - Rain Alarm</h2>
        <div class="text-start self-start title stroke">
            <h2 class="!text-white">Problem:</h2>
            <h2>The school cleaner hangs rugs out to dry after washing but
                the rugs get wet whenever it starts to rain! Design something
                that helps to alert the cleaner when it's raining!</h2>
        </div>
        <p class="note">Note: Guide children to understand the problem.</p>
    </div>


    {{-- slide 27 --}}
    <div class="flex flex-col items-center justify-between h-[80%] slide hidden">
        <h2 class="title !text-white stroke">7 - Cross A River</h2>
        <div class="text-start self-start title stroke">
            <h2 class="!text-white">Problem:</h2>
            <h2>You and your friends are hiking when you come to a fast river
                filled with crocodiles. How can you get across the river safely?</h2>
        </div>
        <p class="note">Note: Guide children to understand the problem.</p>
    </div>

    {{-- slide 28 --}}
    <div class="flex flex-col items-center justify-between h-[80%] slide hidden">
        <h2 class="title !text-white stroke">8 - Share Your Day With The Visitors</h2>
        <div class="text-start self-start title stroke">
            <h2 class="!text-white">Challenge:</h2>
            <h2>Use ScratchJr to create an animated story of your day in
                school.</h2>
        </div>
        <p class="note">Note: Guide children to understand the problem.</p>
    </div>


    {{-- slide 29 --}}
    <div class="flex flex-col items-center justify-between h-[80%] slide hidden">
        <h2 class="title !text-white stroke">9 - Homes For Crowded Cities</h2>
        <div class="text-start self-start title stroke">
            <h2 class="!text-white">Problem:</h2>
            <h2>City states like Singapore have limited land but high population.
                Such cities may face overcrowding issues. Can you design
                homes that can help to solve the problem?</h2>
        </div>
        <p class="note">Note: Guide children to understand the problem.</p>
    </div>



    {{-- slide 30 --}}
    <div class="flex flex-col items-center justify-between h-[80%] slide hidden">
        <h2 class="title !text-white stroke">10 - Useful Inventions</h2>
        <div class="text-start self-start title stroke">
            <h2 class="!text-white">Problem:</h2>
            <h2>People invent by identifying problems, pursuing ideas and
                developing new solutions. Do you or people around you facing
                any problem in the daily lives? Can you identify a problem and
                invent a new solution for it?</h2>
        </div>
        <p class="note">Note: Guide children to understand the problem.</p>
    </div>




    {{-- slide 31 --}}
    <div class="flex flex-col items-center justify-between h-[80%] slide hidden">
        <h2 class="title !text-white stroke">11 - New Coding Game</h2>
        <div class="text-start self-start title stroke">
            <h2 class="!text-white">Challenge:</h2>
            <h2>Let's invent a new coding game for 2 players or more. Select
                a robot to use. Design the rules of the game and create the
                game mat/board, coding cards and props needed for the game.</h2>
        </div>
        <p class="note">Note: Guide children to understand the problem.</p>
    </div>

    {{-- slide 32 --}}
    <div class="flex flex-col items-center justify-between h-[80%] slide hidden">
        <div class="text-start self-start title stroke">
            <h2>What problems or challenges would you like to solve or take on?</h2>
            <ul class="list-decimal">
                <li>Pool Toys</li>
                <li>Reduce Food Wastage</li>
                <li>Home For The Fallen Baby Bird</li>
                <li>No More Paper Towel</li>
                <li>Let There Be Light</li>
                <li>Rain Alarm</li>
            </ul>
        </div>
        <p class="note">Note: Organise children into groups based on their interests to start the project.</p>
    </div>

    {{-- slide 33 --}}
    <div class="flex flex-col items-center justify-between h-[80%] slide hidden">
        <div class="text-start self-start title stroke">
            <h2>What problems or challenges would you like to solve or take on?</h2>
            <ul>
                <li>7. Cross A River</li>
                <li>8. Share Your Day With The Visitors</li>
                <li>9. Homes For Crowded Cities</li>
                <li>10. Useful Inventions</li>
                <li>11. New Coding Game</li>
            </ul>
        </div>
        <p class="note">Note: Organise children into groups based on their interests to start the project.</p>
    </div>

    {{-- slide 34 --}}
    <div class="flex flex-col items-center justify-between h-[80%] slide hidden">
        <h2 class="title !text-white stroke">Solve A Problem/Take Up A Challenge</h2>
        <div class="text-start self-start title stroke">
            <h2 class="!text-white">Mission:</h2>
            <h2>Let's create something to solve your problem!/ Let's take up a
                challenge to invent!</h2>
        </div>
        <p class="note">Note: Have children discuss and work in groups to complete the final project.</p>
    </div>

    {{-- slide 35 --}}
    <div class="flex flex-col items-center justify-between h-[80%] slide hidden">
        <div class="text-start self-start title stroke">
            <h2 class="!text-white">Steps:</h2>
            <ul class="list-decimal">
                <li>Understand your problem/challenge.</li>
                <li>Come up with potential solutions for the problem/challenge.</li>
                <li>Decide one solution and design it (draw).</li>
                <li>Choose suitable materials to build the solution.</li>
                <li>Choose suitable materials to build the solution.</li>
                <li>Showcase your invention.</li>
            </ul>
        </div>
        <p class="note">Note: Guide children of each group to document their working process for the final showcase.</p>
    </div>

    {{-- slide 36 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[500px] bg-cover bg-center p-[20px] text-start"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>Problem:_____________________________________________________________ <br>
                What are you going to create to solve the problem? Design it.</p>
        </div>
    </div>

    {{-- sldie 37 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[500px] bg-cover bg-center p-[20px]  text-start"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>Challenge: _________________________________________________ <br>
                What are you going to invent? Design it.</p>
        </div>
    </div>

    {{-- ====================================== --}}
    {{-- Buttons --}}
    <div class="absolute bottom-[85px]">
        <button
            class="cursor-pointer doneButton w-66 h-[75px] relative bg-[#F8A23A] rounded-[30px]  shadow-[3px_4px_7.8px_0px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_0px_rgba(0,0,0,0.25)] 
                    outline outline-1 outline-yellow-700 overflow-hidden">
            <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
            <div class="absolute left-[8.22px] top-[3.17px] "> <img src="/assets/images/pptimages/Vector4.png" />
            </div>
            <span
                class="absolute left-[80px] top-[18px] flex items-center  text-white text-5xl font-bold stroke">DONE</span>
        </button>
    </div>

 <div id="buttons" class="absolute right-[60px] flex flex-row gap-6 ">
        <!-- Return Button -->
        <a class="relative w-24 h-24 button-fade-in bg-slate-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-teal-800 cursor-pointer"
            id="returnButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] w-14 h-14"
                src="{{ asset('assets/images/pptimages/reverse-icon.png') }}" />
        </a>

        <!-- Home Button -->
        <button
            class="relative w-24 h-24 button-fade-in bg-sky-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-teal-800 cursor-pointer"
            id="homeButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] w-14 h-14"
                src="{{ asset('assets/images/pptimages/home-icon.png') }}" />
        </button>

        <!-- Close Button -->
        <button class="relative w-24 h-24 button-fade-in cursor-pointer" id="closeButton">
            <div
                class="absolute inset-0 bg-red-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-red-900">
            </div>
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <div id="closeButtonText"
                class="absolute top-[16px] left-[30px] w-11 h-16 text-white text-6xl font-normal font-['Jua']">X
            </div>
        </button>

    </div>

    {{-- next Button --}}
    <div class="absolute bottom-[85px]">

        <button
            class="cursor-pointer nextButton w-66 h-[75px] relative bg-[#F8A23A]  rounded-[30px]  shadow-[3px_4px_7.8px_0px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_0px_rgba(0,0,0,0.25)] 
        outline outline-1 outline-yellow-700 overflow-hidden">
            <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
            <div class="absolute left-[8.22px] top-[3.17px] "> <img src="/assets/images/pptimages/Vector4.png" /> </div>
            <span class="absolute left-[80px] top-[18px] flex items-center  text-white text-5xl font-bold stroke">NEXT
            </span>
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
            const infoButtons = document.querySelectorAll("[class*='info-btn'], [class*='click-btn']");

            let currentSlide = 0;
            let parentSlideIndex = null;
            let isViewingInfoSlides = false;
            let currentInfoClass = null;

            // Pause all videos in the current slide before navigating away
            function pauseCurrentSlideVideos() {
                const currentSlideElement = slides[currentSlide];
                if (currentSlideElement) {
                    const videos = currentSlideElement.querySelectorAll("video");
                    videos.forEach(video => {
                        if (!video.paused) {
                            video.pause();
                        }
                    });
                }
            }

            function showSlide(index) {
                // Pause videos before switching slides
                pauseCurrentSlideVideos();

                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                // Update current slide index
                currentSlide = index;

                // Determine if we're on the last slide
                const isLastSlide = index === slides.length - 1;
                const isLastInfoSlide = isViewingInfoSlides && !hasNextInfoSlide(index);

                if (isLastSlide || isLastInfoSlide) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            // Check if there's another info/click slide with same class after current one
            function hasNextInfoSlide(currentIndex) {
                if (!currentInfoClass) return false;

                for (let i = currentIndex + 1; i < slides.length; i++) {
                    if (slides[i].classList.contains(currentInfoClass)) {
                        return true;
                    }
                }
                return false;
            }

            // Get info/click class from button (info-btn1 → info-slide1, click-btn1 → click1)
            function getInfoClassFromButton(button) {
                const classList = Array.from(button.classList);

                // Check for info-btn pattern
                const infoBtnClass = classList.find(cls => cls.startsWith('info-btn'));
                if (infoBtnClass) {
                    const number = infoBtnClass.replace('info-btn', '');
                    return 'info-slide' + number;
                }

                // Check for click-btn pattern
                const clickBtnClass = classList.find(cls => cls.startsWith('click-btn'));
                if (clickBtnClass) {
                    const number = clickBtnClass.replace('click-btn', '');
                    return 'click' + number;
                }

                return null;
            }

            // Check if slide is any info/click slide
            function isInfoSlide(slide) {
                return Array.from(slide.classList).some(cls =>
                    (cls.startsWith('info-slide') && cls.match(/^info-slide\d+$/)) ||
                    (cls.startsWith('click') && cls.match(/^click\d+$/))
                );
            }

            // Info/Click button handlers
            infoButtons.forEach((btn) => {
                btn.addEventListener("click", (e) => {
                    e.preventDefault();

                    parentSlideIndex = currentSlide;
                    isViewingInfoSlides = true;
                    currentInfoClass = getInfoClassFromButton(btn);

                    // Find the first slide with matching info/click class
                    for (let i = 0; i < slides.length; i++) {
                        if (slides[i].classList.contains(currentInfoClass)) {
                            showSlide(i);
                            break;
                        }
                    }
                });
            });

            // NEXT button - skip info/click slides if not viewing them
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        let nextSlide = currentSlide + 1;

                        // Skip info/click slides if not viewing them
                        while (!isViewingInfoSlides &&
                            nextSlide < slides.length &&
                            isInfoSlide(slides[nextSlide])) {
                            nextSlide++;
                        }

                        // If viewing info/click slides, only show slides with current class
                        if (isViewingInfoSlides) {
                            while (nextSlide < slides.length &&
                                !slides[nextSlide].classList.contains(currentInfoClass)) {
                                nextSlide++;
                            }
                        }

                        if (nextSlide < slides.length) {
                            showSlide(nextSlide);
                        }
                    }
                });
            });

            // Return button
            returnButton.addEventListener("click", () => {
                if (isViewingInfoSlides) {
                    // Find previous slide with same info/click class
                    let prevSlide = currentSlide - 1;

                    while (prevSlide >= 0 && !slides[prevSlide].classList.contains(currentInfoClass)) {
                        prevSlide--;
                    }

                    if (prevSlide >= 0 && slides[prevSlide].classList.contains(currentInfoClass)) {
                        showSlide(prevSlide);
                    } else {
                        // No more info/click slides, return to parent
                        isViewingInfoSlides = false;
                        currentInfoClass = null;
                        showSlide(parentSlideIndex);
                        parentSlideIndex = null;
                    }
                } else if (currentSlide > 0) {
                    let prevSlide = currentSlide - 1;

                    // Skip info/click slides when going back
                    while (prevSlide > 0 && isInfoSlide(slides[prevSlide])) {
                        prevSlide--;
                    }

                    showSlide(prevSlide);
                }
            });

            // DONE button handler
            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    if (isViewingInfoSlides && parentSlideIndex !== null) {
                        // Return to parent slide
                        isViewingInfoSlides = false;
                        currentInfoClass = null;
                        showSlide(parentSlideIndex);
                        parentSlideIndex = null;
                    } else {
                        // Navigate to route
                        window.location.href = "{{ route('final2Selection') }}";
                    }
                });
            }

            // Start with first slide
            showSlide(0);
        });
    </script>
@endpush
