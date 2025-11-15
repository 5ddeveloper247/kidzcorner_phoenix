@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Lets Programme 2</h2>

    {{-- sldie 1  --}}
    <div class="flex  !text-white flex-col justify-start  text-start t-slide">
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



    {{-- slide 2 --}}
    <div class="hidden flex flex-col  justify-start  text-start t-slide  !text-white">
        <div class="flex flex-col ">
            <ul class="list-disc">
                <h2 class=" t-title ">Preparations:</h2>
                <li>25 mats (to form a grid maze)</li>
                <li>Reuse the start and end cards</li>
            </ul>
        </div>
        <div class="flex justify-center items-center ">
            <img src="{{ asset('assets/images/N2/BasicCoding/bs30.png') }}" />
            <div class="flex flex-col !text-white text-[20px] gap-[2rem]">
                <div
                    class="w-24 h-12 bg-zinc-300 rounded-[10px] flex justify-center items-center border-[3px] border-black">
                    Start</div>
                <div
                    class="w-24 h-12 bg-zinc-300 rounded-[10px] flex justify-center items-center border-[3px] border-black">
                    End</div>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>


    {{-- slide 3 --}}
    <div class="hidden flex flex-col  justify-start  text-start t-slide  !text-white">
        <div class="flex flex-col ">
            <ul class="list-disc">
                <h2 class=" t-title ">Preparations:</h2>
                <li>Reuse the programming cards - forward, backward, turn left and turn right.</li>
            </ul>
        </div>
        <div class="flex justify-center items-center ">
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/N2/BasicCoding/bs14.png') }}" class="img-xl" />
                <div class="flex !text-white text-[1.5vw] gap-[2vw]">
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
    <div class="hidden flex flex-col  justify-start items-center text-start t-slide  !text-white">
        <div class="flex flex-col ">
            <ul class="list-disc">
                <h2 class=" t-title ">Preparations:</h2>
                <li>Picture cut-outs of places in the zoo</li>
                <li>Pictures/figurines of different zoo animals (for children to create new
                    coding challenges in hands-on session 2)</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/N2/BasicCoding/bs42.png') }}" class="img-lg" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>


    {{-- slide 5 --}}
    <div class="hidden flex flex-col  justify-start items-center text-start t-slide  !text-white">
        <div class="flex flex-col ">
            <ul class="list-disc">
                <h2 class=" t-title ">Preparations:</h2>
                <li>For extension class activity, picture cut-outs of toys (can be other common things)</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/N2/BasicCoding/bs43.png') }}" class="img-lg" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>

    {{-- slide 6 --}}
    <div class="hidden flex flex-col justify-start items-center text-start t-slide  !text-white">
        <div class="flex flex-col ">
            <ul class="list-disc">
                <h2 class=" t-title ">Preparations:</h2>
                <li>For extension class activity, laminated grid maze.</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
        <img src="{{ asset('assets/images/N2/BasicCoding/bs44.png') }}" class="img-h-sm" />
    </div>



    {{-- slide 7 --}}
    <div class="hidden flex flex-col  justify-start  text-start t-slide  !text-white">
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
        <div>
            <h2 class=" t-title ">Possible questions during hands-on sessions:</h2>
            <ul class="list-disc">
                <li>Do you (go forward/go backward/turn right/turn left) now?</li>
            </ul>
            <li>What comes first/next?</li>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>


    {{-- slide 8 --}}
    <div class=" t-slide text-start !text-white !w-[53vw] flex items-center">
        <div>
            <h2 class="t-title ">Notes:</h2>
            <ul class="list-disc space-y-3">
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

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 9 --}}
    <div class="text-white flex flex-col items-center justify-center  text-start t-slide  hidden">
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
    <div class="text-white flex flex-col items-center justify-center  text-start t-slide  hidden">
        <h2 class="!text-center title stroke">Learning Centre Idea</h2>
        <div class="space-y-10 text-start">
            <h2 class="!text-white title stroke">Move Through The Maze and Pick Things Up</h2>
            <ul class="list-disc">
                <h2 class="t-title">What and how to set up:</h2>
                <li>Create a grid maze programming game to pick things up <a
                        class="text-[#F7B94A] info-btn1 z-[99]">(example)</a>.
                    Place the programming cards, a grid maze and a marker pen next to the maze.</li>
            </ul>
        </div>
        <div class="text-start">
            <h2 class="t-title">What to do:</h2>
            <ul>
                <li>Have children think and plan how to move through the maze to pick things up.</li>
            </ul>
        </div>
        </dixv>
        <p class="!note">Note: Encourage children to take turns solving the maze.</p>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>

    {{-- Example slides --}}
    <div class="flex flex-col items-center  justify-betweeen h-[50vh] t-slide info-slide1 hidden">
        <h2 class="title stroke">Example: Move Through The Maze And Pick Things Up</h2>
        <div class="text-start ">
            <h2 class="title stroke text-start">Mission: <br>
                Let's lay out a grid maze and play a programming game. Think
                and plan how to move through the maze to pick up things.After that, lay out the programming cards and move
                from the starting point to the end point.</h2>
        </div>
        <p class="note">Note: Have children work together as a class to complete the mission.
        <p>
    </div>


    {{-- slide 2 --}}
    <div class="flex flex-col items-center justify-center t-slide info-slide1 hidden">
        <div class="flex items-center">
            <h2 class="text-[30px] !text-white">Sample Maze 1</h2>
            <img src="{{ asset('assets/images/N2/BasicCoding/bs45.png') }}" class="img-h-sm" />
        </div>
        <h2 class="stroke title">How can you move through the maze and pick up the ball?</h2>
        <p class="note text-center">Note: Have children lay out the maze, plan the way (draw a way in the laminated grid
            maze).lay out the programming cards and move through the maze.</p>
    </div>

    {{-- slide 3 --}}
    <div class="flex flex-col items-center justify-center t-slide info-slide1 hidden">
        <h2 class="stroke title">One way to move through this maze and pick up the ball.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/bs46.png') }}"class="img-lg" />
        <p class="note text-center">Note: Accept other logical answers presented by children.</p>
    </div>

    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center t-slide info-slide1 hidden">
        <h2 class="stroke title">One way to move through this maze and pick up the ball.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/bs47.png') }}" class="img-h-sm" />
        <p class="note text-center">Note: Accept other logical answers presented by children.</p>
    </div>


    {{-- sldie 5 --}}
    <div class="flex flex-col items-center justify-center t-slide info-slide1 hidden">
        <div class="flex items-center">
            <h2 class="text-[30px] !text-white">Sample Maze 2</h2>
            <img src="{{ asset('assets/images/N2/BasicCoding/bs48.png') }}" class="img-h-sm" />
        </div>
        <h2 class="stroke title">How can you move through the maze and pick up the ball?</h2>
        <p class="note text-center">Note: Have children lay out the maze, plan the way (draw a way in the laminated grid
            maze).
            lay out the programming cards and move through the maze.</p>
    </div>


    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center t-slide info-slide1 hidden">
        <h2 class="stroke title">One way to move through this maze and pick up the ball.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/bs49.png') }}" class="img-lg" />
        <p class="note text-center">Note: Accept other logical answers presented by children.</p>
    </div>

    {{-- sldie 7 --}}
    <div class="flex flex-col items-center justify-center t-slide info-slide1 hidden">
        <h2 class="stroke title">One way to move through this maze and pick up the ball.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/bs50.png') }}" class="img-h-sm" />
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
        document.addEventListener("DOMContentLoaded", function() {
            const nextButtons = document.querySelectorAll(".nextButton");
            const slides = document.querySelectorAll(".t-slide");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");
            const clickableButtons = document.querySelectorAll("[class*='info-btn'], [class*='click-btn']");

            let currentSlide = 0;
            let isViewingSpecialSlides = false;
            let parentSlide = null;
            let currentSpecialType = null;

            const returnRoute = "{{ route('LetsProgram2Selection') }}";
            const doneRoute = "{{ route('LetsProgram2Selection') }}";

            function isSpecialSlide(slide) {
                const classList = Array.from(slide.classList);
                return classList.some(className =>
                    className.match(/^click\d+$/) || className.match(/^info-slide\d+$/)
                );
            }

            function getSpecialTypeFromButton(button) {
                const classList = Array.from(button.classList);

                for (let className of classList) {
                    if (className.startsWith('click-btn')) {
                        return 'click' + className.replace('click-btn', '');
                    }
                    if (className.startsWith('info-btn')) {
                        return 'info-slide' + className.replace('info-btn', '');
                    }
                }
                return null;
            }

            function hasMoreSpecialSlides(fromIndex) {
                if (!currentSpecialType) return false;

                for (let i = fromIndex + 1; i < slides.length; i++) {
                    if (slides[i].classList.contains(currentSpecialType)) {
                        return true;
                    }
                }
                return false;
            }

            function hasMoreRegularSlides(fromIndex) {
                for (let i = fromIndex + 1; i < slides.length; i++) {
                    if (!isSpecialSlide(slides[i])) {
                        return true;
                    }
                }
                return false;
            }

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                currentSlide = index;

                // Determine if we should show Done or Next button
                let shouldShowDone = false;

                if (isViewingSpecialSlides) {
                    shouldShowDone = !hasMoreSpecialSlides(index);
                } else {
                    shouldShowDone = !hasMoreRegularSlides(index);
                }

                nextButtons.forEach(btn => btn.classList.toggle("hidden", shouldShowDone));
                if (doneButton) doneButton.classList.toggle("hidden", !shouldShowDone);
            }

            function goToNextSlide() {
                let nextIndex = currentSlide + 1;

                while (nextIndex < slides.length) {
                    const slide = slides[nextIndex];

                    if (isViewingSpecialSlides) {
                        // In special mode, only show slides with current special type
                        if (slide.classList.contains(currentSpecialType)) {
                            currentSlide = nextIndex;
                            showSlide(currentSlide);
                            return;
                        }
                    } else {
                        // In normal mode, skip special slides
                        if (!isSpecialSlide(slide)) {
                            currentSlide = nextIndex;
                            showSlide(currentSlide);
                            return;
                        }
                    }
                    nextIndex++;
                }
            }

            function goToPreviousSlide() {
                if (currentSlide === 0 && !isViewingSpecialSlides) {
                    window.location.href = returnRoute;
                    return;
                }

                if (isViewingSpecialSlides) {
                    let prevIndex = currentSlide - 1;

                    // Find previous slide with same special type
                    while (prevIndex >= 0) {
                        if (slides[prevIndex].classList.contains(currentSpecialType)) {
                            currentSlide = prevIndex;
                            showSlide(currentSlide);
                            return;
                        }
                        prevIndex--;
                    }

                    // No previous special slide found, return to parent
                    isViewingSpecialSlides = false;
                    currentSpecialType = null;
                    currentSlide = parentSlide;
                    parentSlide = null;
                    showSlide(currentSlide);
                } else {
                    let prevIndex = currentSlide - 1;

                    // Find previous regular slide
                    while (prevIndex >= 0) {
                        if (!isSpecialSlide(slides[prevIndex])) {
                            currentSlide = prevIndex;
                            showSlide(currentSlide);
                            return;
                        }
                        prevIndex--;
                    }
                }
            }

            // Click on info/special buttons
            clickableButtons.forEach(button => {
                button.addEventListener("click", function(e) {
                    e.preventDefault();
                    e.stopPropagation();

                    parentSlide = currentSlide;
                    isViewingSpecialSlides = true;
                    currentSpecialType = getSpecialTypeFromButton(button);

                    console.log("Clicked button, looking for:", currentSpecialType);

                    // Find first slide with special type
                    for (let i = 0; i < slides.length; i++) {
                        if (slides[i].classList.contains(currentSpecialType)) {
                            console.log("Found special slide at index:", i);
                            currentSlide = i;
                            showSlide(currentSlide);
                            return;
                        }
                    }

                    console.error("No slides found with class:", currentSpecialType);
                });
            });

            nextButtons.forEach(btn => {
                btn.addEventListener("click", goToNextSlide);
            });

            returnButton.addEventListener("click", goToPreviousSlide);

            if (doneButton) {
                doneButton.addEventListener("click", function() {
                    if (isViewingSpecialSlides && parentSlide !== null) {
                        // Return to parent slide
                        isViewingSpecialSlides = false;
                        currentSpecialType = null;
                        currentSlide = parentSlide;
                        parentSlide = null;
                        showSlide(currentSlide);
                    } else {
                        // Exit to selection page
                        window.location.href = doneRoute;
                    }
                });
            }

            showSlide(currentSlide);
        });
    </script>
@endpush
