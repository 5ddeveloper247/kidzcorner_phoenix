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
            font-size: 2.2vw;
        }

        .ptitle {
            color: #F7B94A;
            font-size: 1.7vw;
        }

        .panel-ul {
            color: white;
            font-size: 1.4vw;
            text-align: left;
        }
    </style>
@endpush

@section('content')

    {{-- panel 1 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 8: Preventing the Spread of Germs</h1>
        <div class="flex ">
            <div class="flex items-center gap-1">
            <img src="{{ asset('assets/images/micet/n1/toys/b4.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b3.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b6.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b2.png') }}" class="h-[6vw]" />
        </div>
        </div>
        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul w-[40vw]">
            <li>Understand how germs spread among people</li>
            <li>Identify at least two methods of preventing germs
                from spreading</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 8: Preventing the Spread of Germs</h1>

        <div>
            <h3 class="ptitle">Preparations</h3>

            <ul class="list-disc panel-ul">
                <li>Thematic Activity Book</li>
                <li>Scraps of coloured paper and moisturizer</li>
                <li>A large sheet of paper</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 8: Preventing the Spread of Germs</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[50vw]">
                <li>Let children recall what germs are (germs are tiny organisms that cause
                    disease and make us sick. We need a special instrument called microscope
                    to see them).</li>
                <li>Display the scraps of coloured paper. Inform children that these scraps of
                    coloured paper represent germs.</li>
                <li>Take a handful of these scraps of coloured paper. Pretend to sneeze and
                    scatter the coloured paper scraps towards the children and say "I am sorry! I
                    have spread the germs to you!"</li>
            </ol>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 8: Preventing the Spread of Germs</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="4">
            <li>Ask children: What would happen if germs enter our body? (germs will make
                us sick) What should we do when we sneeze or cough? Guide children to
                understand that we cannot see germs but every time we sneeze or cough, we
                blow out millions of them. Therefore, we should use our hands, handkerchiefs
                or tissue paper to cover our mouths and noses when we sneeze or cough to
                prevent germs from spreading and infecting people.</li>
            <li>Let children discuss why we should wash our hands after using them to cover
                our mouths and noses while sneezing and coughing.</li>
        </ol>

    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 8: Preventing the Spread of Germs</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="6">
            <li>Conduct this activity with children to guide them to see what would happen if
                they did not wash their hands after using them to cover their nose and mouth
                while sneezing and coughing:
                <ul class="pl-[3vw]">
                    <li>-Let children sit in a circle. Invite a child to pretend to sneeze and then let
                        the child use his/her hand to cover his/her mouth and nose. Inform
                        children that every time we sneeze or cough, we blow out millions of
                        germs. The hand we use to cover our nose and mouth while sneezing
                        and coughing therefore has germs on it.</li>
                    <li>-Put some moisturizer on that child's hand and scatter the scraps of
                        coloured paper that represent germs on the child's hands (ensure that
                        the papers stay on the child's hand and do not fall off).</li>
                </ul>
            </li>
        </ol>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center mt-[-3vw]">
        <h1 class="panel-title stroke">Classroom Activity 8: Preventing the Spread of Germs</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="6">
            <li>Conduct this activity with children to guide them to see what would happen if
                they did not wash their hands after using them to cover their nose and mouth
                while sneezing and coughing:
                <ul class="pl-[3vw] text-[1.25vw]">
                    <li>-Put some moisturizer on the hands of the other children. Have the child that has
                        sneezed shake hands with the friend sitting on his/her right. Have this child shake
                        hands with the friend sitting on his/her right. Let the children continue with the
                        same action until all of them have shaken hands with the child sitting on their right.</li>
                    <li>-Have all the children open their hands and see what has happened (there will be some
                        coloured paper on each child's hands). Explain to children that as the first child did not
                        wash his/her hands after using them to cover the nose and mouth while sneezing, the
                        germs on his/her hand have spread to the other people whom he/she has come into
                        contact with. Guide children to understand that it is important to prevent germs
                        from spreading and encourage children to develop frequent hand washing habit.</li>
                    <li>-After that, bring children to wash their hands. Guide them to use soap
                        and water to wash off the moisturizer and coloured papers on their hands.</li>
                </ul>
            </li>
        </ol>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 8: Preventing the Spread of Germs</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="7">
            <li>Ask children to state the different methods of preventing germs from
                spreading. Record the proposed methods on a large sheet of paper (through
                drawings and writing). </li>
            <li>Conclude and emphasize the following two ways of preventing germs from
                spreading:
                <ul class="list-disc">
                    <li>Cover our mouth and nose with our hands, a handkerchief or a tissue
                        paper when we sneeze or cough and then wash our hands.</li>
                    <li>After we have blown our nose, sneezed or coughed, we should not touch
                        other people unless we wash our hands.</li>
                </ul>
            </li>
        </ol>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 8: Preventing the Spread of Germs</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="9">
            <li>Guide children to complete the corresponding activities in the Thematic
                Activity Book.</li>
        </ol>
    </div>



    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 8: Preventing the Spread of Germs</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Display the large sheet of paper in the classroom within
                    children's eye level to reinforce what has been learnt.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Know how germs can spread.</li>
                <li>Able to state at least two ways of preventing germs from
                    spreading.</li>
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
            const returnURL = "{{ url('/micet/n2/habit2/index') }}";
            const doneURL = "{{ url('/micet/n2/habit2/index') }}";

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
    </script>
@endpush
