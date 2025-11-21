@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Machines and Electricity</h2>


    {{-- sldie 1  --}}
    <div class="flex !text-white flex-col t-slide justify-center  text-start">
        <div>
            <h2 class="t-title ">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Know that many things around us are machines</li>
                <li>Know that many machines need the power of electricity to do work</li>
                <li>Know how different machines get electricity supply</li>
                <li>Develop understanding through observation and inquiry</li>
            </ul>
        </div>

        <div>
            <h2 class="t-title ">Keywords:</h2>
            <ul class="list-disc ">
                <li>Machines</li>
                <li>Electricity</li>
                <li>Plug</li>
                <li>Socket</li>
                <li>Battery</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 in Teacher file --}}
    <div class="flex !text-white flex-col t-slide justify-start  text-start">
        <div class="space-y-10">
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>Pencils and coloured pencils</li>
                <li>Big papers (to record children's findings during hands-on sessions)</li>
                <li>A 2-pin plastic adaptor</li>
                <li>
                    For hands-on session 1, children will look for machines with an attached plug around a place
                    (school, classroom, kitchen, etc.) and the teacher will guide them to find out details of each machine
                    (<a href="{{ route('electricityLesson', ['slide' => 9, 'returnUrl' => urlencode(route('electricityTeacher', ['slide' => 1]))]) }}"
                        class="text-[#F7B94A]">click here</a> for the
                    details).
                    You may want to purposely put some relevant machines around the place (fan, kettle, blender, toaster,
                    rice cooker, iron, vacuum, etc.; preferably machines with different types of plugs).
                </li>
                <li>
                    For hands-on session 2, children will each look for a machine that uses electricity to work.
                    You may want to purposely put some relevant machines around the place
                    (machines with an attached plug like fan, kettle and vacuum;
                    machines with a detachable cable and plug like portable fan, portable radio and smartphone;
                    machines with batteries like flashlight, clock, toothbrush and electronic toys).
                </li>
                <li>Read the learning points (2 pages) of this lesson beforehand.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 3 --}}
    <div class="text-start t-slide flex flex-col justify-around !text-white">
        <div>
            <h2 class=" t-title">Electrical safety tips:</h2>
            <ul class="list-disc pl-[50px]">
                <li>Never play with electricity.</li>
                <li>Never stick anything but a proper plug into a socket.</li>
                <li>Never touch any socket when your hands are wet.</li>
                <li>Never plug too many cords into a socket.</li>
                <li>To unplug something from a socket, do not pull on the cord or cable, but the plug.</li>
            </ul>
        </div>
        <div>
            <h2 class="t-title">Fun fact:</h2>
            <ul class="list-disc pl-[50px]">
                <li>Our bodies use electricity to communicate including telling our heart to keep <br>
                    beating.</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class=" t-slide flex flex-col justify-center text-start !text-white !w-[53vw]">
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



    {{-- ========================================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

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
            const slides = document.querySelectorAll(".t-slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");

            // Get slide number from URL parameter
            const urlParams = new URLSearchParams(window.location.search);
            const slideParam = urlParams.get('slide');
            let currentSlide = slideParam ? parseInt(slideParam) : 0;

            // Validate slide number
            if (currentSlide < 0 || currentSlide >= slides.length) {
                currentSlide = 0;
            }

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                // If last slide → hide NEXT button, show DONE
                if (index === slides.length - 1) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            // NEXT buttons listener
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                });
            });

            // Return button - redirect if on first slide, otherwise go back
            returnButton.addEventListener("click", () => {
                if (currentSlide === 0) {
                    window.location.href = "{{ route('electricitySelection') }}";
                } else {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('electricitySelection') }}";
                });
            }

            // Show the initial slide (either from URL param or slide 0)
            showSlide(currentSlide);
        });
    </script>
@endpush
