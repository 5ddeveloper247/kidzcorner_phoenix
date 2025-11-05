@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Lets Programme 2</h2>

    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start  text-start t-slide">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Follow and create step-by-step instructions to move through a grid maze</li>
                <li>Create new grid maze programming challenges</li>
                <li>Develop understanding through observation and inquiry</li>
                <li>Learn to share and take turns</li>
                <li>Learn to cooperate with friends to complete a task</li>
            </ul>
        </div>

        <div class="flex w-[100%] items-center justify-between">
            <div>
                <!-- Keywords -->
                <h2 class="t-title">Keywords:</h2>
                <div class="flex gap-x-10">
                    <ul class="list-disc">
                        <li>Machine/Robot</li>
                        <li>Programme</li>
                        <li>Instructions</li>
                        <li>Programming/Coding</li>
                        <li>Maze</li>
                    </ul>
                    <ul class="list-disc">
                        <li>Forward</li>
                        <li>Backward</li>
                        <li>Turn Left</li>
                        <li>Turn Right</li>
                        <li>Maze</li>
                    </ul>
                </div>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
        </div>
    </div>



    {{-- slide 2 --}}
    <div class="slide hidden flex flex-col  justify-start  text-start t-slide text-2xl text-white">
        <div class="flex flex-col ">
            <ul class="list-disc">
                <h2 class=" t-title ">Preparations:</h2>
                <li>25 mats (to form a grid maze)</li>
                <li>Reuse the start and end cards</li>
            </ul>
        </div>
        <div class="flex justify-center items-center ">
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/N2/BasicCoding/bs30.png') }}" />
            </div>
            <div class="flex flex-col text-white text-[20px] gap-[2rem]">
                <div
                    class="w-24 h-12 bg-zinc-300 rounded-[10px] flex justify-center items-center border-[3px] border-black">
                    Start</div>
                <div
                    class="w-24 h-12 bg-zinc-300 rounded-[10px] flex justify-center items-center border-[3px] border-black">
                    End</div>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
        </div>
    </div>


    {{-- slide 3 --}}
    <div class="slide hidden flex flex-col  justify-start  text-start t-slide text-2xl text-white">
        <div class="flex flex-col ">
            <ul class="list-disc">
                <h2 class=" t-title ">Preparations:</h2>
                <li>Reuse the programming cards - forward, backward, turn left and turn right.</li>
            </ul>
        </div>
        <div class="flex justify-center items-center ">
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/N2/BasicCoding/bs14.png') }}" class="w-[500px]" />
                <div class="flex text-white text-[1.5vw] gap-[2vw]">
                    <p>forwar</p>
                    <p>bakcward</p>
                    <p>turn left</p>
                    <p>turn right</p>
                </div>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
        </div>
    </div>


    {{-- slide 4 --}}
    <div class="slide hidden flex flex-col  justify-start items-center text-start t-slide text-2xl text-white">
        <div class="flex flex-col ">
            <ul class="list-disc">
                <h2 class=" t-title ">Preparations:</h2>
                <li>Picture cut-outs of places in the zoo</li>
                <li>Pictures/figurines of different zoo animals (for children to create new
                    coding challenges in hands-on session 2)</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/N2/BasicCoding/bs42.png') }}" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>


    {{-- slide 5 --}}
    <div class="slide hidden flex flex-col  justify-start items-center text-start t-slide text-2xl text-white">
        <div class="flex flex-col ">
            <ul class="list-disc">
                <h2 class=" t-title ">Preparations:</h2>
                <li>For extension class activity, picture cut-outs of toys (can be other common things)</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/N2/BasicCoding/bs43.png') }}" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>

    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col justify-start items-center text-start t-slide text-2xl text-white">
        <div class="flex flex-col ">
            <ul class="list-disc">
                <h2 class=" t-title ">Preparations:</h2>
                <li>For extension class activity, laminated grid maze.</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/N2/BasicCoding/bs44.png') }}" class="large-img3" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>



    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col  justify-start  text-start t-slide text-2xl text-white">
        <div class="flex flex-col ">
            <ul class="list-disc">
                <h2 class=" t-title ">Things to note:</h2>
                <li>Remind children to complete each mission by working together as a class or group.</li>
                <li>Always encourage children to attempt on their own before prompting.</li>
                <li>Suggested hands-on procedure: use the mats to lay out the grid maze; set the
                    starting and end points; place things to pick up and things to avoid somewhere;
                    plan how to move from the starting point to the end point;
                    lay out the programming cards and move through the
                    maze.</li>
                <li>Create other challenges for further practise if needed.</li>
            </ul>
        </div>
        <div class="flex justify-center">
            <ul class="list-disc">
                <h2 class=" t-title ">Possible questions during hands-on sessions:</h2>
                <li>What comes first/next?</li>
                <li>Do you (go forward/go backward/turn right/turn left) now?</li>
            </ul>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
        </div>
    </div>


    {{-- slide 8 --}}
    <div class="slide flex t-slide  flex-col  text-2xl text-start text-white">
        <div>
            <h2 class="t-title">Notes:</h2>
            <ul class="list-disc">
                <li class="flex whitespace-nowrap">
                    If you see
                    <span class="info-btn">

                        <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                    </span>
                    next to a picture, click on the picture to watch the video.
                </li>
                <li>Always ask questions to encourage children to think and share their ideas first before giving
                    out
                    any information.</li>
                <li>Emphasise and use the keywords during hands-on sessions.</li>
                <li>Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                </li>
                <li class="flex whitespace-nowrap">
                    Click on this shortcut icon
                    <span> <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" class="home-btn" />
                    </span>
                    if you need to go to some parts of the lesson quickly.
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 9 --}}
    <div class="text-white flex flex-col items-center justify-center  text-start t-slide text-2xl slide hidden">
        <h2 class="!text-center title stroke">Learning Centre Idea</h2>
        <div class="flex">
            <div class="space-y-10">
                <ul class="list-disc">
                    <h2 class="!text-white title stroke">Move, Move, Move</h2>
                    <h2 class="t-title">What and how to set up:</h2>
                    <li>Create a grid maze programming game each day. Set the starting
                        point and end point of the game. Place the programming cards next
                        to the maze.</li>
                </ul>

                <ul>
                    <h2 class="t-title">What to do:</h2>
                    <li>Lay out the programming cards and move through the maze.</li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
        </div>
        <p class="note">Note: Encourage children to take turns solving the maze.</p>
    </div>


    {{-- slide 10 --}}
    <div class="text-white flex flex-col items-center justify-center  text-start t-slide text-2xl slide hidden">
        <h2 class="!text-center title stroke">Learning Centre Idea</h2>
        <div class="flex">
            <div class="space-y-10">
                <ul class="list-disc">
                    <h2 class="!text-white title stroke">Move Through The Maze and Pick Things Up</h2>
                    <h2 class="t-title">What and how to set up:</h2>
                    <li>Create a grid maze programming game to pick things up <a
                            class="text-[#F7B94A] info-btn1">(example)</a>.
                        Place the programming cards, a grid maze and a marker pen next to the maze.</li>
                </ul>

                <ul>
                    <h2 class="t-title">What to do:</h2>
                    <li>Have children think and plan how to move through the maze to pick things up.</li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt=""
                class="absolute teacher-img1" />
        </div>
        <p class="note">Note: Encourage children to take turns solving the maze.</p>
    </div>

    {{-- Example slides --}}
    <div class="flex flex-col items-center  justify-center slide hidden info-slide1">
        <h2 class="title stroke">Example: Move Through The Maze And Pick Things Up</h2>
        <div class="text-start t-slide">
            <h2 class="title stroke">Mission: <br>
                Let's lay out a grid maze and play a programming game. Think
                and plan how to move through the maze to pick up things.After that, lay out the programming cards and move
                from the starting point to the end point.</h2>
        </div>
        <p class="note">Note: Have children work together as a class to complete the mission.
        <p>
    </div>


    {{-- slide 2 --}}
    <div class="flex flex-col items-center justify-center slide hidden info-slide1">
        <div class="flex items-center">
            <h2 class="text-[30px] text-white">Sample Maze 1</h2>
            <img src="{{ asset('assets/images/N2/BasicCoding/bs45.png') }}" class="large-img3" />
        </div>
        <h2 class="stroke title">How can you move through the maze and pick up the ball?</h2>
        <p class="note text-center">Note: Have children lay out the maze, plan the way (draw a way in the laminated grid
            maze).lay out the programming cards and move through the maze.</p>
    </div>

    {{-- slide 3 --}}
    <div class="flex flex-col items-center justify-center slide hidden info-slide1">
        <h2 class="stroke title">One way to move through this maze and pick up the ball.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/bs46.png') }}" />
        <p class="note text-center">Note: Accept other logical answers presented by children.</p>
    </div>

    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center slide hidden info-slide1">
        <h2 class="stroke title">One way to move through this maze and pick up the ball.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/bs47.png') }}" class="large-img3" />
        <p class="note text-center">Note: Accept other logical answers presented by children.</p>
    </div>


    {{-- sldie 5 --}}
    <div class="flex flex-col items-center justify-center slide hidden info-slide1">
        <div class="flex items-center">
            <h2 class="text-[30px] text-white">Sample Maze 2</h2>
            <img src="{{ asset('assets/images/N2/BasicCoding/bs48.png') }}" class="large-img3" />
        </div>
        <h2 class="stroke title">How can you move through the maze and pick up the ball?</h2>
        <p class="note text-center">Note: Have children lay out the maze, plan the way (draw a way in the laminated grid
            maze).
            lay out the programming cards and move through the maze.</p>
    </div>


    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center slide hidden info-slide1">
        <h2 class="stroke title">One way to move through this maze and pick up the ball.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/bs49.png') }}" />
        <p class="note text-center">Note: Accept other logical answers presented by children.</p>
    </div>

    {{-- sldie 7 --}}
    <div class="flex flex-col items-center justify-center slide hidden info-slide1">
        <h2 class="stroke title">One way to move through this maze and pick up the ball.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/bs50.png') }}" class="large-img3" />
        <p class="note text-center">Note: Accept other logical answers presented by children.</p>
    </div>




    {{-- =================================================================================== --}}
    {{-- Done Button --}}
    <div class="down-btn-container">
        <button class=" doneButton ">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>


    {{-- Buttons --}}
    <div id="buttons" class="absolute  flex flex-row gap-6 z-90">

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
        document.addEventListener("DOMContentLoaded", () => {
            // DOM Elements
            const slides = document.querySelectorAll(".slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");
            const infoButtons = document.querySelectorAll("[class*='info-btn'], [class*='click-btn']");

            // State
            let currentSlide = 0;
            let parentSlide = null;
            let infoMode = false;
            let infoClass = null;

            // Check if slide is an info/click slide
            function isInfoSlide(slide) {
                return Array.from(slide.classList).some(cls =>
                    /^info-slide\d+$/.test(cls) || /^click\d+$/.test(cls)
                );
            }

            // Get info class from button (e.g., "info-btn1" → "info-slide1")
            function getInfoClass(button) {
                const classes = Array.from(button.classList);
                const infoBtn = classes.find(cls => cls.startsWith('info-btn'));
                const clickBtn = classes.find(cls => cls.startsWith('click-btn'));

                if (infoBtn) return 'info-slide' + infoBtn.replace('info-btn', '');
                if (clickBtn) return 'click' + clickBtn.replace('click-btn', '');
                return null;
            }

            // Check if there's a next info slide
            function hasNextInfo(index) {
                if (!infoClass) return false;
                return [...slides].slice(index + 1).some(s => s.classList.contains(infoClass));
            }

            // Check if there's a next regular (non-info) slide
            function hasNextRegularSlide(index) {
                for (let i = index + 1; i < slides.length; i++) {
                    if (!isInfoSlide(slides[i])) return true;
                }
                return false;
            }

            // Display slide and update buttons
            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                currentSlide = index;

                // Determine if Done button should show
                let showDone = false;

                if (infoMode) {
                    // In info mode: show Done on last info slide
                    showDone = !hasNextInfo(index);
                } else {
                    // In normal mode: show Done if no more regular slides ahead
                    showDone = !hasNextRegularSlide(index);
                }

                nextButtons.forEach(btn => btn.classList.toggle("hidden", showDone));
                if (doneButton) doneButton.classList.toggle("hidden", !showDone);
            }

            // Info button click - enter info mode
            infoButtons.forEach(btn => {
                btn.addEventListener("click", (e) => {
                    e.preventDefault();
                    parentSlide = currentSlide;
                    infoMode = true;
                    infoClass = getInfoClass(btn);

                    const firstInfo = [...slides].findIndex(s => s.classList.contains(infoClass));
                    if (firstInfo !== -1) showSlide(firstInfo);
                });
            });

            // Next button click
            nextButtons.forEach(btn => {
                btn.addEventListener("click", () => {
                    if (currentSlide >= slides.length - 1) return;

                    currentSlide++;

                    while (currentSlide < slides.length) {
                        if (infoMode && slides[currentSlide].classList.contains(infoClass)) break;
                        if (!infoMode && !isInfoSlide(slides[currentSlide])) break;
                        currentSlide++;
                    }

                    if (currentSlide < slides.length) showSlide(currentSlide);
                });
            });

            // Return button click
            returnButton.addEventListener("click", () => {
                if (currentSlide === 0) {
                    window.location.href = "{{ route('LetsProgram2Selection') }}";
                    return;
                }

                if (infoMode) {
                    let prev = currentSlide - 1;
                    while (prev >= 0 && !slides[prev].classList.contains(infoClass)) prev--;

                    if (prev >= 0) {
                        showSlide(prev);
                    } else {
                        infoMode = false;
                        infoClass = null;
                        showSlide(parentSlide);
                        parentSlide = null;
                    }
                } else {
                    currentSlide--;
                    while (currentSlide > 0 && isInfoSlide(slides[currentSlide])) currentSlide--;
                    showSlide(currentSlide);
                }
            });

            // Done button click
            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    if (infoMode && parentSlide !== null) {
                        infoMode = false;
                        infoClass = null;
                        showSlide(parentSlide);
                        parentSlide = null;
                    } else {
                        window.location.href = "{{ route('BasicCoding') }}";
                    }
                });
            }

            showSlide(0);
        });
    </script>
@endpush
