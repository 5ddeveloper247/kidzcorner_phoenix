@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Evolution of Aeroplanes</h2>


    {{-- sldie 1  --}}
    <div class=" slide t-slide flex  !text-white flex-col justify-start  text-start">
        <div>
            <h2 class="t-title ">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Learn about the history of aeroplane design and how it has evolved</li>
                <li>Understand aerodynamic forces in various types of vehicles</li>
                <li>Understand the use of aerodynamic forces in sports</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex flex-col  items-start justify-between">
            <h2 class="t-title ">Keywords:</h2>
            <div class="flex gap-[10rem]">
                <ul class="list-disc ">
                    <li>Wright Brothers</li>
                    <li>Aerodynamic Forces</li>
                    <li>Aerodynamics</li>
                    <li>Aerofoil</li>
                </ul>
                <ul class="list-disc ">
                    <li>Downforce</li>
                    <li>Wind Tunnel</li>
                    <li>Drag</li>
                    <li>Front Wings</li>
                </ul>

            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide t-slide flex  !text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <h2 class="t-title">Monoplane</h2>
            <ul class="list-disc ">
                <li>The propeller provides thrust for the plane to move forward.</li>
                <li>Together with the aerodynamic shape of the aeroplane wings, the monoplane is able
                    to provide enough lift
                    for the plane to take off.</li>
                <li>Link for reference:
                    <a href="https://stocktonpropeller.com/basic-aerodynamics-flight/" class="text-[#F7B94A]"
                        target="_blank">
                        https://stocktonpropeller.com/basic-aerodynamics-flight/
                    </a>
                </li>
            </ul>
        </div>
        <div>
            <h2 class="t-title">Concorde</h2>
            <ul class="list-disc">
                <li>The Concorde could fly faster and higher than any commercial jets.</li>
                <li>The long, narrow shape of the Concorde is able to reduce drag as it moves through
                    the air.</li>
                <li>The Concorde stopped flying in 2003.</li>
                <li>Link for reference:
                    <a href="https://science.howstuffworks.com/transport/flight/modern/concorde3.html"
                        class="text-[#F7B94A]" target="_blank">
                        https://science.howstuffworks.com/transport/flight/modern/concorde3.html
                    </a>
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 3 --}}
    <div class=" slide t-slide text-start !text-white">
        <div>
            <h2 class=" t-title">Additional info on wind tunnel test:</h2>
            <ul class="list-disc text-[#F7B94A] space-y-10">
                <li>
                    <a
                        href="https://news.cgtn.com/news/2022-01-05/How-China-uses-wind-tunnels-to-train-
     athletes-in-60-seconds-16zYFZBDP68/index.html">
                        https://news.cgtn.com/news/2022-01-05/How-China-uses-wind-tunnels-to-train-
                        athletes-in-60-seconds-16zYFZBDP68/index.html</a>
                </li>
                <li>
                    <a
                        href="https://www.electronicspecifier.com/products/vr-ar/procedure-simplifies-wind-
     tunnel-tests">https://www.electronicspecifier.com/products/vr-ar/procedure-simplifies-wind-
                        tunnel-tests</a>
                </li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class="slide flex t-slide  flex-col justify-start  text-2xl text-start !text-white">
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class=" t-title">Notes:</h2>
                <ul class="list-disc leading-relaxed">
                    <li>
                        <span class="flex items-center whitespace-nowrap">
                            If you see
                            <span>
                                <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s27.png') }}"
                                    class="!max-w-[2.5vw]" />
                            </span>
                            next to a picture,click on the picture to watch the video.
                        </span>
                    </li>
                    <li>Emphasise and use the keywords during hands-on sessions.</li>
                    <li>Print out the Learning Journal (if any) for every child to complete at the end
                        of the lesson.
                    </li>
                    <li>
                        <span class="flex items-center whitespace-nowrap">
                            Click on this shortcut icon
                            <span>
                                <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s28.png') }}"
                                    class="!max-w-[2.5vw]" />
                            </span>
                            if you need to go to some parts of the lesson quickly.
                        </span>
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
                    window.location.href = "{{ route('EvolutionSelection') }}";
                } else {
                    //   Previous slide pe jao
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('k2Aerodynamics') }}";
                });
            }
            showSlide(currentSlide);
        });
    </script>
@endpush
