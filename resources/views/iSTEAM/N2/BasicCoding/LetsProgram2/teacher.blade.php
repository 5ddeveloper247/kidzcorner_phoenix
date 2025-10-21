@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')




    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="  font-bold">Children will be able to:</h2>
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
                <h2 class="text-[33px] font-bold ">Keywords:</h2>
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
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" />
        </div>
    </div>



    {{-- slide 2 --}}
    <div class="slide hidden flex flex-col w-[80%] justify-start gap-y-10 text-start text-2xl text-white">
        <div class="flex flex-col gap-y-20">
            <ul class="list-disc">
                <h2 class="font-bold ">Preparations:</h2>
                <li>25 mats (to form a grid maze)</li>
                <li>Reuse the start and end cards</li>
            </ul>
        </div>
        <div class="flex justify-center items-center gap-10">
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
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" />
        </div>
    </div>


    {{-- slide 3 --}}
    <div class="slide hidden flex flex-col w-[80%] justify-start gap-y-10 text-start text-2xl text-white">
        <div class="flex flex-col gap-y-20">
            <ul class="list-disc">
                <h2 class="font-bold ">Preparations:</h2>
                <li>Reuse the programming cards - forward, backward, turn left and turn right.</li>
            </ul>
        </div>
        <div class="flex justify-center items-center gap-10">
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/N2/BasicCoding/bs14.png') }}" class="w-[500px]" />
                <div class="flex text-white text-[20px] gap-[5rem]">
                    <p>forwar</p>
                    <p>bakcward</p>
                    <p>turn left</p>
                    <p>turn right</p>
                </div>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" />
        </div>
    </div>


    {{-- slide 4 --}}
    <div class="slide hidden flex flex-col w-[80%] justify-start gap-y-10 text-start text-2xl text-white">
        <div class="flex flex-col gap-y-20">
            <ul class="list-disc">
                <h2 class="font-bold ">Preparations:</h2>
                <li>Picture cut-outs of places in the zoo</li>
                <li>Pictures/figurines of different zoo animals (for children to create new
                    coding challenges in hands-on session 2)</li>
            </ul>
        </div>
        <div class="flex justify-center items-center gap-10">
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/N2/BasicCoding/bs42.png') }}" />
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" />
        </div>
    </div>


    {{-- slide 5 --}}
    <div class="slide hidden flex flex-col w-[80%] justify-start gap-y-10 text-start text-2xl text-white">
        <div class="flex flex-col gap-y-20">
            <ul class="list-disc">
                <h2 class="font-bold ">Preparations:</h2>
                <li>For extension class activity, picture cut-outs of toys (can be other common things)</li>
            </ul>
        </div>
        <div class="flex justify-center items-center gap-10">
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/N2/BasicCoding/bs43.png') }}" />
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" />
        </div>
    </div>

    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col w-[80%] justify-start gap-y-10 text-start text-2xl text-white">
        <div class="flex flex-col gap-y-20">
            <ul class="list-disc">
                <h2 class="font-bold ">Preparations:</h2>
                <li>For extension class activity, laminated grid maze.</li>
            </ul>
        </div>
        <div class="flex justify-center items-center gap-10">
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/N2/BasicCoding/bs44.png') }}" />
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" />
        </div>
    </div>



    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col w-[80%] justify-start gap-y-10 text-start text-2xl text-white">
        <div class="flex flex-col gap-y-20">
            <ul class="list-disc">
                <h2 class="font-bold ">Things to note:</h2>
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
                <h2 class="font-bold ">Possible questions during hands-on sessions:</h2>
                <li>What comes first/next?</li>
                <li>Do you (go forward/go backward/turn right/turn left) now?</li>
            </ul>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" />
        </div>
    </div>


    {{-- slide 8 --}}
    <div class="slide flex  flex-col justify-start  text-2xl text-start text-white">
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="font-bold">Notes:</h2>
                <ul class="list-disc leading-relaxed">
                    <li>
                        If you see
                        <span
                            class="relative inline-block h-16 w-16 cursor-pointer rounded-[20px] bg-sky-500 shadow-[2px_3px_5px_rgba(0,0,0,0.25)] shadow-[inset_2px_-3px_3px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
                            <!-- Decorative Vector -->
                            <img src="{{ asset('assets/images/pptimages/Vector4.png') }}"
                                class="absolute top-[4px] left-[6px] h-6 w-[80%]" />
                            <div class="absolute top-[7px] left-[12px] h-2.5 w-3.5 rounded-sm bg-white"></div>
                            <img src="{{ asset('assets/images/pptimages/play.png') }}"
                                class="absolute top-[16px] left-[16px] h-8 w-8" />
                        </span>
                        next to a picture, click on the picture to watch the video.
                    </li>
                    <li>Always ask questions to encourage children to think and share their
                        ideas first before giving out any information.</li>
                    <li>Emphasise and use the keywords during hands-on sessions.</li>
                    <li>The fundamental skill of coding or programming is the ability to
                        differentiate and navigate self to move forward, backward,
                        turn left and turn right. If children are not ready, play
                        more related games to improve the skill before moving on to the next lesson.</li>
                    <li>
                        Click on this <span class="font-bold">shortcut icon</span>
                        <span
                            class="relative inline-block h-16 w-16 cursor-pointer rounded-[20px] bg-sky-500 shadow-[2px_3px_5px_rgba(0,0,0,0.25)] shadow-[inset_2px_-3px_3px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
                            <img src="{{ asset('assets/images/pptimages/Vector4.png') }}"
                                class="absolute top-[4px] left-[6px] h-6 w-[80%]" />
                            <div class="absolute top-[7px] left-[12px] h-2.5 w-3.5 rounded-sm bg-white"></div>
                            <img src="{{ asset('assets/images/pptimages/home-icon.png') }}"
                                class="absolute top-[16px] left-[16px] h-8 w-8" />
                        </span>
                        if you need to go to some parts of the lesson quickly.
                    </li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" />
        </div>
    </div>


    {{-- slide 9 --}}
    <div class="text-white flex flex-col items-center justify-center gap-y-10 text-start text-2xl slide hidden">
        <h2 class="!text-white title stroke">Learning Centre Idea</h2>
        <div class="flex">
            <div class="space-y-10">
                <ul class="list-disc">
                    <h2 class="!text-white title stroke">Move, Move, Move</h2>
                    <h2>What and how to set up:</h2>
                    <li>Create a grid maze programming game each day. Set the starting
                        point and end point of the game. Place the programming cards next
                        to the maze.</li>
                </ul>

                <ul>
                    <h2>What to do:</h2>
                    <li>Lay out the programming cards and move through the maze.</li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt=""
                class="h-[350px] object-contain" />
        </div>
        <p class="note">Note: Encourage children to take turns solving the maze.</p>
    </div>


    {{-- slide 10 --}}
    <div class="text-white flex flex-col items-center justify-center gap-y-10 text-start text-2xl slide hidden">
        <h2 class="!text-white title stroke">Learning Centre Idea</h2>
        <div class="flex">
            <div class="space-y-10">
                <ul class="list-disc">
                    <h2 class="!text-white title stroke">Move Through The Maze and Pick Things Up</h2>
                    <h2>What and how to set up:</h2>
                    <li>Create a grid maze programming game to pick things up <span
                            class="text-amber-300">(example)</span>.
                        Place the programming cards, a grid maze and a marker pen next to the maze.</li>
                </ul>

                <ul>
                    <h2>What to do:</h2>
                    <li>Have children think and plan how to move through the maze to pick things up.</li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt=""
                class="h-[350px] object-contain" />
        </div>
        <p class="note">Note: Encourage children to take turns solving the maze.</p>
    </div>

    {{-- Example slides --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Example: Move Through The Maze And Pick Things Up</h2>
        <div class="text-start">
            <h2 class="title stroke">Mission: <br>
                Let's lay out a grid maze and play a programming game. Think
                and plan how to move through the maze to pick up things.After that, lay out the programming cards and move
                from the starting point to the end point.</h2>
        </div>
        <p class="note">Note: Have children work together as a class to complete the mission.
        <p>
    </div>


    {{-- slide 2 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center">
            <h2 class="text-[30px] text-white">Sample Maze 1</h2>
            <img src="{{ asset('assets/images/N2/BasicCoding/bs45.png') }}" />
        </div>
        <h2 class="stroke title">How can you move through the maze and pick up the ball?</h2>
        <p class="note text-center">Note: Have children lay out the maze, plan the way (draw a way in the laminated grid
            maze).lay out the programming cards and move through the maze.</p>
    </div>

    {{-- slide 3 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="stroke title">One way to move through this maze and pick up the ball.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/bs46.png') }}" />
        <p class="note text-center">Note: Accept other logical answers presented by children.</p>
    </div>

    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="stroke title">One way to move through this maze and pick up the ball.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/bs47.png') }}" />
        <p class="note text-center">Note: Accept other logical answers presented by children.</p>
    </div>


    {{-- sldie 5 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center">
            <h2 class="text-[30px] text-white">Sample Maze 2</h2>
            <img src="{{ asset('assets/images/N2/BasicCoding/bs48.png') }}" />
        </div>
        <h2 class="stroke title">How can you move through the maze and pick up the ball?</h2>
        <p class="note text-center">Note: Have children lay out the maze, plan the way (draw a way in the laminated grid
            maze).
            lay out the programming cards and move through the maze.</p>
    </div>


    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="stroke title">One way to move through this maze and pick up the ball.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/bs49.png') }}" />
        <p class="note text-center">Note: Accept other logical answers presented by children.</p>
    </div>

    {{-- sldie 7 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="stroke title">One way to move through this maze and pick up the ball.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/bs50.png') }}" />
        <p class="note text-center">Note: Accept other logical answers presented by children.</p>
    </div>




    {{-- =================================================================================== --}}
    {{-- Done Button --}}
    <div class="absolute bottom-0">
        <button
            class="cursor-pointer doneButton w-66 h-[75px] relative bg-[#F8A23A] rounded-[30px]  shadow-[3px_4px_7.8px_0px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_0px_rgba(0,0,0,0.25)] 
                    outline outline-1 outline-yellow-700 overflow-hidden">
            <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
            <div class="absolute left-[8.22px] top-[3.17px] "> <img
                    src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            </div>
            <span
                class="absolute left-[80px] top-[18px] flex items-center  text-white text-5xl font-bold stroke">DONE</span>
        </button>
    </div>


    {{-- Buttons --}}
    <div id="buttons" class="absolute top-0 right-[60px] flex flex-row gap-6 z-90">

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
    <div class="absolute bottom-0">

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
        document.addEventListener("DOMContentLoaded", () => {
            const slides = document.querySelectorAll(".slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton"); // ✅ DONE button

            let currentSlide = 0;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                // ✅ Agar last slide hai → NEXT button hide, DONE show
                if (index === slides.length - 1) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            // ✅ NEXT buttons listener
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                });
            });

            // ✅ Return button
            returnButton.addEventListener("click", () => {
                if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('BasicCoding') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
