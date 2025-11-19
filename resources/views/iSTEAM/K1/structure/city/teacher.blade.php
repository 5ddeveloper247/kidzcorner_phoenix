@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- title --}}
    <h2 class="top-title stroke">Our Amazing City</h2>


    {{-- sldie 1  --}}
    <div class="flex !text-white flex-col t-slide justify-around  text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Know that a city has many types of structures</li>
                <li>Design and build a unique building</li>
                <li>Develop fine motor and eye-hand coordination skills</li>
                <li>Develop creativity and imagination</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div>
            <h2 class="t-title ">Keywords:</h2>
            <ul class="list-disc ">
                <li>Structures</li>
                <li>City</li>
            </ul>
        </div>
    </div>



    {{-- slide 2 --}}
    <div class="flex !text-white flex-col t-slide justify-around  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>Straws</li>
                <li>Pipe cleaners</li>
                <li>Each child a pair of scissors (remind children to use them carefully)</li>
                <li>Coloured transparent wrappers (tracing papers, cellophane wraps or any transparent materials that allow
                    us to see the structure of a building after wrapped)</li>
                <li>Art and craft materials (allow children to minimally use them in their construction)</li>
                <li>White glue or adhesive tape (single and double-sided)</li>
                <li>Rulers</li>
                <li>Labels (to indicate the name of a building or structure)</li>
            </ul>
        </div>
        <p class="note !text-[#F7B94A]">Suggestion: Pre-pack straws and pipe cleaners in a bag for each group before the
            lesson.</p>
    </div>


    {{-- sldie 3 --}}
    <div class="flex !text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Things to consider during hands-on sessions:</h2>
            <ul class="list-disc ">
                <li>Ask questions to prompt children to share and try out their ideas. You may add on questions based on
                    children's responses.</li>
                <li>During hands-on session:
                    <ul type="i">
                        <li>i. Guide children to discuss as a class what structures they think an amazing city has. Have
                            them
                            list down the structures and then decide the structures to build.</li>
                        <li>ii. Divide children into groups and guide them to decide tasks for each group. Once a decision
                            is
                            made, have each group of children work together to design and build the assigned structures.
                        </li>
                        <li>iii. When they complete the building of all the structures, have each group showcase their works
                            and
                            share their design ideas with the class. At the same time, have them share problems encountered
                            and solutions taken during the building process. Allow them to make improvements to their works
                            if they want to.</li>
                        <li>iv. Guide children to discuss as a class in deciding how to put together all the structures
                            created
                            to form a city.</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>


    {{-- sldie 4 --}}
    <div class="flex !text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Things to consider during hands-on sessions:</h2>
            <ul class="list-disc ">
                <li>During hands-on session:
                    <ul type="i">
                        <li>v. After children name and label their city, have them invite some guests
                            (friends, teachers or even parents) to their city showcase.</li>
                        <li>vi. Finally, have them share design ideas of their city with all the guests invited
                            to the showcase.</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>



    {{-- slide 5 --}}
    <div class=" t-slide text-start flex items-center !text-white !w-[53vw]">
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

    </div>



        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />

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
            const doneButton = document.querySelector(".doneButton"); //   DONE button

            let currentSlide = 0;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                //   Agar last slide hai → NEXT button hide, DONE show
                if (index === slides.length - 1) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            //   NEXT buttons listener
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                });
            });

            //   Return button - redirect if on first slide, otherwise go back
            returnButton.addEventListener("click", () => {
                if (currentSlide === 0) {
                    //   First slide pe hai →  
                    window.location.href = "{{ route('citySelection') }}";
                } else {
                    //   Previous slide pe jao
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('citySelection') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
