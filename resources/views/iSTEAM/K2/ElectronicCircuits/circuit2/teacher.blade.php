@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Playdough Circuit</h2>


    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl t-slide text-white flex-col justify-start  text-start">
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
    <div class=" slide flex text-2xl t-slide text-white flex-col justify-start  text-start">
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
    <div class=" slide text-start text-2xl t-slide text-white space-y-10">
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
    <div class="slide flex  flex-col justify-start  text-2xl t-slide text-start text-white w-[80%]">
        <div class="flex w-[100%] items-center justify-between">
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
                    <li>Emphasise and use the keywords during hands-on sessions.</li>
                    <li>Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                    </li>
                    <li class="flex">
                        Click on this shortcut icon
                       <span>
                            <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" class="home-btn" />
                        </span>
                        if you need to go to some parts of the lesson quickly.
                    </li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
        </div>
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
            const returnRouteFromFirstSlide = "{{ route('circuit2Selection') }}";

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
