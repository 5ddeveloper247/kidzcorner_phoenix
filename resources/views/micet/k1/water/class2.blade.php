@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = false;
    $showVector1 = true;
    $showVector5 = false;
    $showMascot = true;
@endphp


@push('styles')
    <style>
        .p-note {
            font-size: 1.2vw;
            color: white !important;
        }

        .panel-title {
            color: #F7B94A;
            font-size: 2.5vw;
        }

        .ptitle {
            color: #F7B94A;
            font-size: 1.7vw;
        }

        .panel-ul {
            color: white;
            font-size: 1.4vw;
            text-align: left
        }
    </style>
@endpush

@section('content')

    {{-- panel 1 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: The Water Around Us</h1>
        <div class="flex ">
            <img src="{{ asset('assets/images/micet/k1/water/class2/b1.png') }}" class="h-[8vw]" />
        </div>


        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul">
            <li>To share one's knowledge of water with classmates.</li>
            <li>To understand the uses of water to people.</li>
            <li>To understand the dangers of water to people.</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col items-center space-y-[3vw] h-full">
        <h1 class="panel-title stroke">Classroom Activity 2: The Water Around Us</h1>

        <div>
            <h3 class="ptitle">Preparations</h3>

            <ul class="list-disc panel-ul">
                <li>Thematic Activity Book</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: The Water Around Us</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[45vw]">
                <li>Have the children share their knowledge of water. Ask the following questions: <ul class="list-disc">
                        <li>What is water?</li>
                        <li>What is the colour of water?</li>
                        <li>What is the taste of water?</li>
                        <li>Where can water be found?</li>
                    </ul>
                </li>
            </ol>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: The Water Around Us</h1>
        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="2">
                <li>Record children's answers on the white board. Guide the children in stating the following key points:
                    <ul class="list-disc">
                        <li>Water flows, it is transparent, colourless and tasteless.</li>
                        <li>We are surrounded by water.</li>
                        <li>Water falls back to Earth as rain, snow, hail, dew, frost, etc.</li>
                    </ul>
                </li>
            </ol>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: The Water Around Us</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Have the children discuss where water comes from. Guide the children to understand that water comes from
                rain. (Click on the video)</li>
        </ol>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k1/water/class2/v1.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: The Water Around Us</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Have the children discuss where water comes from. Guide the children to understand that water comes from
                rivers.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/water/class2/c1.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: The Water Around Us</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="5">
            <li>Have the children discuss where water comes from. Guide the children to understand that water comes from
                rivers.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/water/class2/c2.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: The Water Around Us</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="6">
            <li>Have the children discuss where water comes from. Guide the children to understand that water comes from
                rivers.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/water/class2/c3.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: The Water Around Us</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="7">
            <li>Ask the children: What would happen if you didn't drink water for a day (two days, a week, etc.)? Guide the
                children to conclude that water is very important for our survival.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/water/class2/c4.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: The Water Around Us</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="8">
            <li>Ask the children: What would happen if animals did not have water to drink. Guide them to understand that
                water is the basic necessity for all animals.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/water/class2/c5.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: The Water Around Us</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Ask the children: What would happen if animals did not have water to drink. Guide them to understand that
                water is the basic necessity for all animals.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/water/class2/c6.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: The Water Around Us</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="10">
            <li>Ask the children: What would happen if animals did not have water to drink. Guide them to understand that
                water is the basic necessity for all animals.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/water/class2/c7.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: The Water Around Us</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li>Ask the children: What would happen if plants did not get water. Guide them to understand that water is the
                basic necessity for all plants.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/water/class2/c25.png') }}" class="h-[20vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: The Water Around Us</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="12">
            <li>Ask the children: What would happen if plants did not get water. Guide them to understand that water is the
                basic necessity for all plants.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/water/class2/c8.png') }}" class="h-[20vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: The Water Around Us</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="13">
            <li>Ask the children: Where do fishes and other sea creatures live? What would happen to them if the seas,
                rivers and lakes dried up? Guide them to understand that water provides the living environment for these
                creatures.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/water/class2/c9.png') }}" class="h-[20vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: The Water Around Us</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="14">
            <li>Ask the children: Where do fishes and other sea creatures live? What would happen to them if the seas,
                rivers and lakes dried up? Guide them to understand that water provides the living environment for these
                creatures.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/water/class2/c10.png') }}" class="w-[25vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: The Water Around Us</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="15">
            <li>Have the children discuss the other uses of water. Guide them to understand that water is not only required
                for our basic survival but also has many other important uses.
                <ul class="list-disc">
                    <li>We need water for brushing teeth, bathing and washing hands.</li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/water/class2/c11.png') }}" class="h-[15vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: The Water Around Us</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="16">
            <li>Have the children discuss the other uses of water. Guide them to understand that water is not only required
                for our basic survival but also has many other important uses.
                <ul class="list-disc">
                    <li>We need water for cooking, washing dishes, washing clothes and washing cars.</li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/water/class2/c12.png') }}" class="h-[15vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: The Water Around Us</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="17">
            <li>Have the children discuss the other uses of water. Guide them to understand that water is not only required
                for our basic survival but also has many other important uses.
                <ul class="list-disc">
                    <li>Firemen use water to put out fires.</li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/water/class2/c13.png') }}" class="h-[17vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: The Water Around Us</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="18">
            <li>Have the children discuss the other uses of water. Guide them to understand that water is not only required
                for our basic survival but also has many other important uses.
                <ul class="list-disc">
                    <li>Boats can only sail on water.</li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/water/class2/c14.png') }}" class="h-[17vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: The Water Around Us</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="19">
            <li>Have the children discuss the other uses of water. Guide them to understand that water is not only required
                for our basic survival but also has many other important uses.
                <ul class="list-disc">
                    <li>Ships can only sail on water.</li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/water/class2/c15.png') }}" class="h-[17vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: The Water Around Us</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="20">
            <li>Have the children discuss the other uses of water. Guide them to understand that water is not only required
                for our basic survival but also has many other important uses.
                <ul class="list-disc">
                    <li>Ships can only sail on water.</li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/water/class2/c26.png') }}" class="h-[17vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: The Water Around Us</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="21">
            <li>Have the children discuss the other uses of water. Guide them to understand that water is not only required
                for our basic survival but also has many other important uses.
                <ul class="list-disc">
                    <li>We need water for swimming.</li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/water/class2/c16.png') }}" class="h-[17vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: The Water Around Us</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="22">
            <li>Have the children discuss the other uses of water. Guide them to understand that water is not only required
                for our basic survival but also has many other important uses.
                <ul class="list-disc">
                    <li>We need water for fishing.</li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/water/class2/c17.png') }}" class="h-[17vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: The Water Around Us</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="23">
            <li>Have the children discuss the other uses of water. Guide them to understand that water is not only required
                for our basic survival but also has many other important uses.
                <ul class="list-disc">
                    <li>We need water for rowing boats.</li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/water/class2/c18.png') }}" class="h-[17vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: The Water Around Us</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="24">
            <li>Have the children discuss the other uses of water. Guide them to understand that water is not only required
                for our basic survival but also has many other important uses.
                <ul class="list-disc">
                    <li>We need snow (frozen water) for skiing.</li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/water/class2/c19.png') }}" class="h-[17vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: The Water Around Us</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="25">
            <li>Have the children discuss the other uses of water. Guide them to understand that water is not only required
                for our basic survival but also has many other important uses.
                <ul class="list-disc">
                    <li>Click on the video to see how water is used for irrigation so crops and plants can flourish.</li>
                </ul>
            </li>
        </ol>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k1/water/class2/v2.mp4') }}" type="video/mp4">
        </video>
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: The Water Around Us</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="26">
            <li>Have the children discuss the other uses of water. Guide them to understand that water is not only required
                for our basic survival but also has many other important uses.
                <ul class="list-disc">
                    <li>We can also build dams to generate electricity using water.</li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/water/class2/c20.png') }}" class="h-[17vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: The Water Around Us</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="27">
            <li>Have the children discuss the other uses of water. Guide them to understand that water is not only required
                for our basic survival but also has many other important uses.
                <ul class="list-disc">
                    <li>Water can cause people to drown.</li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/water/class2/c21.png') }}" class="h-[17vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: The Water Around Us</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="28">
            <li>Have the children discuss the other uses of water. Guide them to understand that water is not only required
                for our basic survival but also has many other important uses.
                <ul class="list-disc">
                    <li>Floods can destroy houses, roads and crops.</li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/water/class2/c22.png') }}" class="h-[17vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: The Water Around Us</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="29">
            <li>Have the children discuss the other uses of water. Guide them to understand that water is not only required
                for our basic survival but also has many other important uses.
                <ul class="list-disc">
                    <li>Huge tides or tsunamis can destroy a city or an entire village.</li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/water/class2/c23.png') }}" class="h-[17vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: The Water Around Us</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="30">
            <li>Have the children discuss the other uses of water. Guide them to understand that water is not only required
                for our basic survival but also has many other important uses.
                <ul class="list-disc">
                    <li>Polluted water can cause serious illnesses and damage the entire living environment.</li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/water/class2/c27.png') }}" class="h-[17vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: The Water Around Us</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="31">
            <li>Have the children discuss the other uses of water. Guide them to understand that water is not only required
                for our basic survival but also has many other important uses.
                <ul class="list-disc">
                    <li>Boiling water can cause serious scalds.</li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/water/class2/c24.png') }}" class="h-[17vw]" />
    </div>



    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: The Water Around Us</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="32">
            <li>Guide children to complete the corresponding activities in the Thematic
                Activity Book.</li>
        </ol>
    </div>


    {{-- panel 19 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 2: The Water Around Us</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Have the children discuss if there are more uses or dangers of water.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to name some characteristics of water, e.g. colourless, tasteless, transparent.</li>
                <li>Able to state some relationships between water and living things.</li>
                <li>Able to state the uses and dangers of water.</li>
            </ul>
        </div>
    </div>


    {{-- =============================================== --}}
    {{-- All Buttons --}}
    <div id="buttons" class="absolute flex flex-row gap-6 z-90">

        <!-- Home Button -->
        <button id="returnButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/return-btn.png') }}" />
        </button>

        <!-- return Button -->
        <button id="homeButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/home-btn.png') }}" />
        </button>

        <!-- Close Button -->
        <button id="closeButton">

            <img src="{{ asset('assets/images/phonicsl1/global/btns/cancel.png') }}" />
        </button>
    </div>

    {{-- Next and Done Buttons --}}
    <div class="down-btn-container">
        <button class="nextButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/next-btn.png') }}" />
        </button>
    </div>

    <div class="down-btn-container">
        <button class="doneButton hidden">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/done.png') }}" />
        </button>
    </div>
@endsection

@push('script')
    <script>
        // SLIDE NAVIGATION SYSTEM
        document.body.dataset.homeRoute = "{{ url('/micet') }}";

        document.addEventListener("DOMContentLoaded", function() {

            // Get all elements
            const slides = document.querySelectorAll(".phonics-panel");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");
            const infoButtons = document.querySelectorAll("[class*='info-btn']");
            const soundButtons = document.querySelectorAll("[id^='soundButton']");

            // URLs for navigation
            const returnURL = "{{ url('/micet/k1/water/index') }}";
            const doneURL = "{{ url('/micet/k1/water/index') }}";

            // Track current position
            let currentSlide = 0;
            let isInSpecialMode = false;
            let returnToSlide = null;
            let specialSlideClass = null;

            // Audio management
            let currentAudio = null;

            // HELPER FUNCTIONS

            function isSpecialSlide(slide) {
                const classList = Array.from(slide.classList);
                return classList.some(cls => /^info-panel-\d+$/.test(cls));
            }

            function getSlideTypeFromButton(button) {
                const classList = Array.from(button.classList);

                for (let className of classList) {
                    if (className.startsWith('info-btn')) {
                        const number = className.replace('info-btn', '');
                        return 'info-panel-' + number;
                    }
                }
                return null;
            }

            function hasMoreSpecialSlides(fromIndex) {
                if (!specialSlideClass) return false;

                for (let i = fromIndex + 1; i < slides.length; i++) {
                    if (slides[i].classList.contains(specialSlideClass)) {
                        return true;
                    }
                }
                return false;
            }

            function isLastSlide(slideIndex) {
                if (isInSpecialMode && !hasMoreSpecialSlides(slideIndex)) return true;

                if (!isInSpecialMode) {
                    for (let i = slideIndex + 1; i < slides.length; i++) {
                        if (!isSpecialSlide(slides[i])) {
                            return false;
                        }
                    }
                    return true;
                }

                return false;
            }

            // AUDIO FUNCTIONS

            function stopCurrentAudio() {
                if (currentAudio) {
                    currentAudio.pause();
                    currentAudio.currentTime = 0;
                }
            }

            function playSlideAudio(slideIndex) {
                // Stop any currently playing audio
                stopCurrentAudio();

                // Get the slide element
                const slide = slides[slideIndex];

                // Check if the slide itself has data-slide-audio attribute
                let audioSrc = slide.getAttribute('data-slide-audio');

                // If not, look for element inside the slide with data-slide-audio attribute
                if (!audioSrc) {
                    const audioElement = slide.querySelector('[data-slide-audio]');
                    if (audioElement) {
                        audioSrc = audioElement.getAttribute('data-slide-audio');
                    }
                }

                // Play the audio if we found a source
                if (audioSrc) {
                    currentAudio = new Audio(audioSrc);
                    currentAudio.play().catch(err => console.log('Audio play failed:', err));
                }
            }


            // DISPLAY FUNCTIONS

            function showSlide(slideIndex) {
                // Stop audio from previous slide
                stopCurrentAudio();

                // Hide all slides, show only current one
                slides.forEach((slide, index) => {
                    if (index === slideIndex) {
                        slide.classList.remove("hidden");
                    } else {
                        slide.classList.add("hidden");
                    }
                });

                // Play audio for current slide (if it has one)
                playSlideAudio(slideIndex);

                // Show "Done" button on last slide, otherwise show "Next"
                if (isLastSlide(slideIndex)) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            soundButtons.forEach(btn => {
                btn.addEventListener("click", (e) => {
                    e.preventDefault();

                    // Get audio source from data-slide-audio attribute
                    const audioSrc = btn.getAttribute('data-slide-audio');

                    if (audioSrc) {
                        stopCurrentAudio();
                        currentAudio = new Audio(audioSrc);
                        currentAudio.play().catch(err => console.log('Audio play failed:', err));
                    }
                });
            });
            // NAVIGATION FUNCTIONS

            function goNext() {
                if (currentSlide >= slides.length - 1) return;

                currentSlide++;

                while (currentSlide < slides.length) {
                    const slide = slides[currentSlide];

                    if (isInSpecialMode) {
                        if (slide.classList.contains(specialSlideClass)) break;
                    } else {
                        if (!isSpecialSlide(slide)) break;
                    }

                    currentSlide++;
                }

                if (currentSlide < slides.length) {
                    showSlide(currentSlide);
                }
            }

            function goBack() {
                if (currentSlide === 0 && !isInSpecialMode) {
                    stopCurrentAudio();
                    window.location.href = returnURL;
                    return;
                }

                if (isInSpecialMode) {
                    let previousIndex = currentSlide - 1;

                    while (previousIndex >= 0) {
                        if (slides[previousIndex].classList.contains(specialSlideClass)) {
                            break;
                        }
                        previousIndex--;
                    }

                    if (previousIndex >= 0) {
                        currentSlide = previousIndex;
                        showSlide(currentSlide);
                    } else {
                        currentSlide = returnToSlide;
                        isInSpecialMode = false;
                        specialSlideClass = null;
                        returnToSlide = null;
                        showSlide(currentSlide);
                    }
                } else {
                    if (currentSlide > 0) {
                        currentSlide--;

                        while (currentSlide > 0 && isSpecialSlide(slides[currentSlide])) {
                            currentSlide--;
                        }

                        showSlide(currentSlide);
                    }
                }
            }

            function handleDone() {
                stopCurrentAudio();

                if (isInSpecialMode && returnToSlide !== null) {
                    currentSlide = returnToSlide;
                    isInSpecialMode = false;
                    specialSlideClass = null;
                    returnToSlide = null;
                    showSlide(currentSlide);
                } else {
                    window.location.href = doneURL;
                }
            }

            // EVENT LISTENERS

            infoButtons.forEach(button => {
                button.addEventListener("click", function(e) {
                    e.preventDefault();

                    returnToSlide = currentSlide;
                    isInSpecialMode = true;
                    specialSlideClass = getSlideTypeFromButton(button);

                    for (let i = 0; i < slides.length; i++) {
                        if (slides[i].classList.contains(specialSlideClass)) {
                            currentSlide = i;
                            showSlide(currentSlide);
                            break;
                        }
                    }
                });
            });

            nextButtons.forEach(btn => {
                btn.addEventListener("click", goNext);
            });

            if (returnButton) {
                returnButton.addEventListener("click", goBack);
            }

            if (doneButton) {
                doneButton.addEventListener("click", handleDone);
            }

            const letterLinks = document.querySelectorAll('.phonics-panel a[href=""]:not([class*="info-btn"])');
            letterLinks.forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    const letter = link.getAttribute('data-letter') || 'a';
                    speakLetter(letter);
                });
            });

            window.speechSynthesis.onvoiceschanged = () => {
                window.speechSynthesis.getVoices();
            };

            // INITIALIZE - Show first slide and play its audio automatically
            showSlide(currentSlide);
        });
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll('.phonics-panel').forEach(panel => {
                const observer = new MutationObserver(() => {
                    if (panel.classList.contains('hidden')) {
                        panel.querySelectorAll('video').forEach(video => {
                            if (!video.paused) video.pause();
                            video.currentTime = 0;
                        });
                    }
                });

                observer.observe(panel, {
                    attributes: true,
                    attributeFilter: ['class']
                });
            });
        });
    </script>
@endpush
