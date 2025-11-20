@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Makey Makey (1)</h2>

    {{-- sldie 1  --}}
    <div class=" flex t-slide hidden !text-white flex-col justify-around  text-start">
        <div>
            <h2 class="t-title ">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Know that a Makey Makey Board is a circuit board that uses electricity to do work.</li>
                <li>Know that a computer is needed in order to set up and an application is needed in order to "see" the use
                    of a Makey Makey Board.</li>
                <li>Know that people can be part of a complete circuit that makes a Makey Makey Board work.</li>
                <li>Know that people are conductors.</li>
                <li>Develop understanding through observation and inquiry.</li>
            </ul>
        </div>

        <div>
            <h2 class="t-title ">Keywords:</h2>
            <div class="flex items-start gap-[2vw]">
                <ul class="list-disc ">
                    <li>Circuit</li>
                    <li>Electricity</li>
                    <li>Electronic Machines</li>
                    <li>Electronics</li>
                </ul>
                <ul class="list-disc ">
                    <li>Circuit Board (Makey Makey Board)</li>
                    <li>Computer</li>
                    <li>Application</li>
                </ul>
                <ul class="list-disc ">
                    <li>Complete Circuit</li>
                    <li>Conductor</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" flex t-slide hidden !text-white flex-col justify-around  text-start">
        <div class="space-y-10">
            <ul class="list-disc ">
                <h2 class=" t-title">Preparations:</h2>
                <li>A computer</li>
                <li>A set of Makey Makey</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/circuit/makey/m13.png') }}" class="img-lg" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 3 --}}
    <div class="text-start t-slide !text-white space-y-10">
        <div>
            <h2 class=" t-title">What you need to know or do before the lesson:</h2>
            <ul class="list-disc pl-[50px]">
                <li>Makey Makey is a set of electronic toy that allows you to create alternative keyboard for any computer
                    programme or application that accepts keyboard or mouse click inputs.</li>
                <li>When you connect a Makey Makey Board to a computer, the computer may ask you to install drivers or do
                    other setup. Just close the pop up window.</li>
            </ul>
            <img src="{{ asset('assets/images/K2/circuit/makey/m14.png') }}" class="img-lg" />
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class="text-start t-slide !text-white space-y-10 hidden">
        <div>
            <h2 class=" t-title">Things to note during hands-on session:</h2>
            <ul class="list-disc pl-[50px]">
                <li>Remind children not to touch any circuit parts when their hands are wet.</li>
                <li>Remind children to handle the materials with care.</li>
                <li>Remind children to be patient and take turns in using the materials provided.</li>
                <li>Always encourage children to attempt on their own before prompting.</li>
                <li>Remember to take photos and videos for documentation purpose.</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 5 --}}
    <div class=" t-slide flex items-center text-start !text-white !w-[53vw]">
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
            // Get all elements
            const slides = document.querySelectorAll(".t-slide");
            const nextBtn = document.querySelector(".nextButton");
            const returnBtn = document.getElementById("returnButton");
            const doneBtn = document.querySelector(".doneButton");

            // Current slide position
            let currentIndex = 0;

            // Show slide and update buttons
            function showSlide(index) {
                // Hide all slides
                slides.forEach(slide => slide.classList.add("hidden"));

                // Show current slide
                slides[index].classList.remove("hidden");

                // Update index
                currentIndex = index;

                // Check if last slide
                const isLastSlide = (index === slides.length - 1);

                if (isLastSlide) {
                    // Last slide: hide Next, show Done
                    nextBtn.style.display = "none";
                    doneBtn.style.display = "block";
                } else {
                    // Not last slide: show Next, hide Done
                    nextBtn.style.display = "block";
                    doneBtn.style.display = "none";
                }
            }

            // Next button
            nextBtn.addEventListener("click", () => {
                if (currentIndex < slides.length - 1) {
                    showSlide(currentIndex + 1);
                }
            });

            // Return button
            returnBtn.addEventListener("click", () => {
                if (currentIndex === 0) {
                    // On first slide: redirect to route
                    window.location.href = "{{ route('makey1Selection') }}";
                } else {
                    // Not first slide: go back
                    showSlide(currentIndex - 1);
                }
            });

            // Done button
            doneBtn.addEventListener("click", () => {
                window.location.href = "{{ route('makey1Selection') }}";
            });

            // Start at first slide
            showSlide(0);
        });
    </script>
@endpush
