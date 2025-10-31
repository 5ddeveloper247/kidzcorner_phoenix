@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- title --}}
    <h2 class="top-title stroke">Makey Makey (2)</h2>

    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl t-slide text-white flex-col justify-start  text-start">
        <div>
            <h2 class="t-title ">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Know that Makey Makey can be turned into a music maker with the help of the bongos application.</li>
                <li>Know that only a complete circuit will make a Makey Makey Board work.</li>
                <li>Know that suitable conductors can be added to the setup of Makey Makey as keypads.</li>
                <li>Develop understanding through observation and inquiry.</li>
                <li>Use creativity to create music using the bongos application.</li>
            </ul>
        </div>

        <div>
            <h2 class="t-title ">Keywords:</h2>
            <div class="flex items-start gap-[2vw]">
                <ul class="list-disc ">
                    <li>Electronics</li>
                    <li>Circuit Board (Makey Makey Board)</li>
                    <li>Computer</li>
                    <li>Application</li>
                </ul>
                <ul class="list-disc ">
                    <li>Complete Circuit</li>
                    <li>Conductor</li>
                    <li>Keypad</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl t-slide text-white flex-col justify-start  text-start">
        <div class="space-y-10">
            <ul class="list-disc ">
                <h2 class=" t-title">Preparations:</h2>
                <li>A computer</li>
                <li>A set of Makey Makey</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/circuit/makey/m13.png') }}" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 3 --}}
    <div class=" slide flex text-2xl t-slide text-white flex-col items-start justify-start  text-start">
        <div class="space-y-10">
            <ul class="list-disc ">
                <h2 class=" t-title">Preparations:</h2>
                <li>Paper clips</li>
                <li>Playdough of different colours</li>
                <li>For easy access, bookmark the bongos application page <br>
                    <a href="https://apps.makeymakey.com/bongos/" target="_blank">
                        https://apps.makeymakey.com/bongos/
                    </a>
                    from the Makey Makey's website before the lesson.
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 4 --}}
    <div class=" slide text-start text-2xl t-slide text-white space-y-[1vw]">
        <div>
            <h2 class=" t-title">Things to note during hands-on session:</h2>
            <ul class="list-disc pl-[1vw]">
                <li>Remind children not to touch any circuit parts when their hands are wet.</li>
                <li>Remind children to handle the materials with care.</li>
                <li>Remind children to be patient and take turns in using the materials provided.</li>
                <li>Always encourage children to attempt on their own before prompting.</li>
                <li>Remember to take photos and videos for documentation purpose.</li>
            </ul>
        </div>

        <div>
            <h2 class=" t-title">Additional info:</h2>
            <ul class="list-disc pl-[1vw]">
                <li>
                    Prepare common things around us that are good conductors (made of silver, copper or aluminium)
                    for children to turn them into the keypads of this Makey Makey music maker.
                    <br>Examples: forks and spoons, pots and pans, cookie cutters, keys, nuts and bolts, spanners, hammers,
                    pliers, coins, food or beverage cans.
                </li>
                <li>
                    Based on the info on Makey Makey's website, some conductors that might surprise children are slime,
                    potted plants, leaves, bananas (clip on the stem) and baby carrots.
                    You may try turning them into keypads together with children.
                    <br><strong>Please don't try on food items like gummy candy or pizza to avoid food wastage.</strong>
                </li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 5 --}}
    <div class=" slide text-start text-2xl t-slide text-white space-y-10">
        <div>
            <h2 class=" t-title">What you need to know or do before the lesson:</h2>
            <ul class="list-disc pl-[50px]">
                <li>Makey Makey is a set of electronic toys that allows you to create an alternative keyboard for any
                    computer programme or application that accepts keyboard or mouse click inputs.</li>
                <li>When you connect a Makey Makey Board to a computer, the computer may ask you to install drivers or do
                    other setup. Just close the pop-up window.</li>
            </ul>
            <img src="{{ asset('assets/images/K2/circuit/makey/m14.png') }}" />
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 6 --}}
    <div class="slide flex  flex-col justify-start  text-2xl t-slide text-start text-white w-[80%]">
        <div>
            <h2 class=" t-title">Notes:</h2>
            <ul class="list-disc leading-relaxed">
                <li class="flex">
                    If you see
                    <span>
                        <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                    </span>
                    next to a picture, click on the picture to watch the video.
                </li>
                <li>Emphasise and use the <strong>keywords</strong> during hands-on sessions.</li>
                <li>Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                </li>
                <li class="flex">
                    Click on this shortcut icon
                    <span>
                        <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
                    </span>
                    if you need to go to some parts of the lesson quickly.
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
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
            const slides = document.querySelectorAll(".slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");

            let currentSlide = 0;

            //   Configure your return route here (when on first slide)
            const returnRouteFromFirstSlide = "{{ route('makey1Selection') }}";

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                //   If last slide → hide NEXT, show DONE
                if (index === slides.length - 1) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            //   NEXT button - go to next slide
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                });
            });

            //   RETURN button - go back OR navigate to route if on first slide
            returnButton.addEventListener("click", () => {
                // If on first slide (slide 0), navigate to return route
                if (currentSlide === 0) {
                    window.location.href = returnRouteFromFirstSlide;
                    return;
                }

                // Otherwise, go to previous slide
                currentSlide--;
                showSlide(currentSlide);
            });

            //   DONE button - navigate to completion route
            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('k2ElectronicCircuits') }}";
                });
            }

            // Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
