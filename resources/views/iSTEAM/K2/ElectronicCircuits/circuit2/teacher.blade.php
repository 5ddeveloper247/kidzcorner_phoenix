@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Playdough Circuit</h2>


    {{-- sldie 1  --}}
    <div class="flex t-slide !text-white flex-col justify-around  text-start">
        <div>
            <h2 class="t-title ">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>
                    Know that conductors are things that allow electricity to pass through them and insulators are things
                    that do not allow electricity to pass through them.
                </li>
                <li>Know that playdough is a conductor and modelling clay is an insulator.</li>
                <li>Use creativity to create sculptures that light up.</li>
                <li>Develop understanding through observation and inquiry.</li>
            </ul>
        </div>

        <div>
            <h2 class="t-title ">Keywords:</h2>
            <div>
                <ul class="list-disc ">
                    <li>Circuit</li>
                    <li>Electricity</li>
                    <li>Conductor</li>
                    <li>Insulator</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class="flex t-slide !text-white flex-col justify-center  text-start">
        <div class="space-y-10">
            <ul class="list-disc ">
                <h2 class=" t-title">Preparations:</h2>
                <li>
                    Each group a set of materials below (to create a sculpture that lights up):
                    <ul>
                        <li>>A pencil and some papers (to draw their design of a sculpture)</li>
                        <li>>Playdough of different colours (except white)</li>
                        <li>>White modelling clay</li>
                        <li>>A battery</li>
                        <li>>A battery connector</li>
                        <li>>5 LEDs</li>
                    </ul>
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 3 --}}
    <div class="text-start  t-slide !text-white flex flex-col justify-around">
        <div>
            <h2 class=" t-title">Things to note during hands-on session:</h2>
            <ul class="list-disc pl-[1vw]">
                <li>Remind children not to touch any circuit parts when their hands are wet.</li>
                <li>Remind children to handle the materials with care and not to put them into their mouths.</li>
                <li>
                    Remind children not to connect the LED directly to the battery without using playdough
                    because this will make the battery very hot and burn the LED out.
                </li>
                <li>Remind children to be patient and take turns when using the materials provided.</li>
                <li>Encourage children to always discuss and make decisions as a group to complete each mission.</li>
                <li>Always encourage children to attempt on their own before prompting.</li>
                <li>Remember to take photos and videos for documentation purposes.</li>
            </ul>
        </div>
        <div>
            <ul class="list-disc pl-[1vw]">
                <li>Take photos of all the playdough circuits created, as well as the design drawings.</li>
                <li>Display the photos in the classroom.</li>
                <li>
                    If you want, let every child have a chance to create a sculpture that lights up on
                    his or her own during free time.
                </li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
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
            const slides = document.querySelectorAll(".slide");
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
                    window.location.href = "{{ route('circuit2Selection') }}";
                } else {
                    // Not first slide: go back
                    showSlide(currentIndex - 1);
                }
            });

            // Done button
            doneBtn.addEventListener("click", () => {
                window.location.href = "{{ route('circuit2Selection') }}";
            });

            // Start at first slide
            showSlide(0);
        });
    </script>

@endpush
