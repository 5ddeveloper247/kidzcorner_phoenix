@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')




    {{-- sldie 23  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="  font-bold">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Build a measuring car based on a pictorial guide</li>
                <li>Explore and learn how connected pairs of wheels and axles make a measuring car work</li>
                <li>Answer some questions based on the hands-on experience</li>
                <li>Develop fine motor and eye-hand coordination skills</li>
                <li>Develop understanding through observation and inquiry</li>
            </ul>
        </div>

        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="t-title font-bold">Keywords:</h2>
                <ul class="list-disc ">
                    <li>Simple Machine</li>
                    <li>Wheel</li>
                    <li>Axle</li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1"  />
        </div>
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start w-[75%]">
        <div>
            <h2 class="font-bold">Preparations:</h2>
            <ul class="list-disc ">
                <li>Each group a set of building bricks (parts and quantity as shown)</li>
            </ul>
        </div>
        <div class="flex items-center">
            <img src="{{ asset('assets/images/N2/SimpleMachines/b1.png') }}" class="w-[636px]" />
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt=""
                class="h-[350xp] object-contain" />
        </div>
    </div>



    {{-- slide 3 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start w-[75%]">
        <div>
            <h2 class="font-bold">What you need to do before the lesson:</h2>
            <ul class="list-disc ">
                <li> Fix all the wheels for the class (you may give children the opportunity to try fixing them during free
                    time). A wheel is formed using a tire and two hubs.</li>
            </ul>
        </div>
        <div class="flex items-center">
            <video id="video1" class="w-full max-w-[42rem] pointer-events-none">
                <source src="{{ asset('assets/images/N2/SimpleMachines/4.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>

            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt=""
                class="h-[350xp] object-contain float-right" />
        </div>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>


    </div>


    {{-- slide 4 --}}
    <div class="text-white flex flex-col text-start text-2xl slide hidden">
        <div>
            <h2 class="font-bold underline">What you need to do before the lesson:</h2>
            <ul class="list-disc">
                <li>Be familiar with the name of the parts in the lego set.</li>
            </ul>
        </div>
        <div class="flex items-center">
            <img src="{{ asset('assets/images/N2/SimpleMachines/at1.png') }}" class="w-[536px]" />
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt=""
                class="h-[350xp] object-contain" />
        </div>
    </div>


    {{-- slide 5 --}}
    <div class="text-white flex flex-col text-start text-2xl slide hidden">
        <div>
            <h2 class="font-bold underline">Things to note during hands-on sessions:</h2>
            <ul class="list-disc">
                <li>Encourage children to always discuss and make decisions as a group to complete the mission.</li>
                <li>Always encourage children to attempt on their own before prompting.</li>
                <li>The measuring car may not work on certain surfaces (e.g. the table used in the video), so please
                    allocate suitable spots for the hands-on sessions.</li>
                <li>For a fair test (hands-on session 2), remind children to set the handle to zero before each test.</li>
                <li>Keep the measuring cars built for use in the next lesson.</li>
            </ul>
        </div>
        <div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt=""
                class="h-[350xp] object-contain float-right" />
        </div>

    </div>



    {{-- slide 6 --}}
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
                    <li>
                        If you see
                        <span
                            class="relative inline-block h-16 w-16 cursor-pointer rounded-[20px] bg-amber-500 shadow-[2px_3px_5px_rgba(0,0,0,0.25)] shadow-[inset_2px_-3px_3px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
                            <img src="{{ asset('assets/images/pptimages/Vector4.png') }}"
                                class="absolute top-[4px] left-[6px] h-6 w-[80%]" />
                            <div class="absolute top-[7px] left-[12px] h-2.5 w-3.5 rounded-sm bg-white"></div>
                            <img src="{{ asset('assets/images/pptimages/info.png') }}"
                                class="absolute top-[16px] left-[16px] h-8 w-8" />
                        </span>
                        , click on it for additional information or activity.
                    </li>
                    <li>Always ask questions to encourage children to think and share their ideas first before giving
                        out
                        any information.</li>
                    <li>Emphasise and use the <strong>keywords</strong> during hands-on sessions.</li>
                    <li>Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                    </li>
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
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1"  />

        </div>

    </div>







    {{-- Done Button --}}
    <div class="down-btn-container">
        <button class=" doneButton ">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />

        </button>
    </div>


    {{-- Buttons --}}
    <div id="buttons" class="absolute top-0 right-[60px] flex flex-row gap-6 z-90">

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
            // Get all elements
            const slides = document.querySelectorAll(".slide");
            const nextBtn = document.querySelector(".nextButton");
            const returnBtn = document.getElementById("returnButton");
            const doneBtn = document.querySelector(".doneButton");

            let currentIndex = 0;

            // Pause all videos in current slide
            function pauseAllVideos() {
                if (slides[currentIndex]) {
                    const videos = slides[currentIndex].querySelectorAll("video");
                    videos.forEach(video => {
                        if (!video.paused) {
                            video.pause();
                        }
                    });
                }
            }

            // Show slide and update buttons
            function showSlide(index) {
                pauseAllVideos();

                // Hide all slides
                slides.forEach(slide => slide.classList.add("hidden"));

                // Show current slide
                slides[index].classList.remove("hidden");

                currentIndex = index;

                // Update button visibility
                const isLastSlide = (index === slides.length - 1);

                if (isLastSlide) {
                    nextBtn.style.display = "none";
                    doneBtn.style.display = "block";
                } else {
                    nextBtn.style.display = "block";
                    doneBtn.style.display = "none";
                }
            }

            // Next button
            nextBtn.addEventListener("click", () => {
                if (currentIndex < slides.length - 1) {
                    showSlide(currentIndex + 1);
                }
            }); // Return button
            returnBtn.addEventListener("click", () => {
                if (currentIndex === 0) {
                    window.location.href = "{{ route('MeasuringCarSelection') }}";
                } else {
                    showSlide(currentIndex - 1);
                }
            });

            // Done button
            doneBtn.addEventListener("click", () => {
                window.location.href = "{{ route('SimpleMachines') }}";
            });

            // Initialize
            showSlide(0);
        });

        // Video toggle function
        function toggleVideo(videoId) {
            const video = document.getElementById(videoId);
            if (video) {
                if (video.paused) {
                    video.play();
                } else {
                    video.pause();
                }
            }
        }
    </script>
@endpush
