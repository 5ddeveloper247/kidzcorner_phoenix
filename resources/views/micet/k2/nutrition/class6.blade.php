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
            text-align: left;
        }
    </style>
@endpush

@section('content')

    {{-- panel 1 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: My Healthy Plate</h1>
        <div class="flex items-center gap-1">
        <img src="{{ asset('assets/images/micet/n1/toys/b4.png') }}" class="h-[6vw]" />
        <img src="{{ asset('assets/images/micet/n1/toys/b3.png') }}" class="h-[6vw]" />
        <img src="{{ asset('assets/images/micet/n1/toys/b2.png') }}" class="h-[6vw]" />
        <img src="{{ asset('assets/images/micet/n1/toys/b4.png') }}" class="h-[6vw]" />
    </div> 


        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul">
            <li>Learn about My Healthy Plate</li>
            <li>Analyse one's eating and lifestyle habits</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">Classroom Activity 6: My Healthy Plate</h1>

        <div>
            <h3 class="ptitle">Preparations</h3>

            <ul class="list-disc panel-ul">
                <li>Thematic Activity Book</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: My Healthy Plate</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[50vw]">
                <li>Ask children: Do you know what this is? Encourage children to express what they think. Accept all
                    logical answers.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class6/c1.png') }}" class="w-[20vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: My Healthy Plate</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="2">
            <li>Inform children that this is a new and recommended healthy diet guideline called My Healthy Plate.</li>
            <li>Let children recall the five main food groups that they have learnt (fruit, vegetable, grain, meat and milk
                groups). Ask children to indicate where the different food groups are on My Healthy Plate.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class6/c1.png') }}" class="w-[18vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: My Healthy Plate</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="4">
            <li>Guide children to understand that My Healthy Plate is a visual tool that uses simple graphics to introduce a
                healthy and balanced diet to everyone. At the same time, it reminds us to practise healthy habits that aid
                in weight control and protect against various diseases.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class6/c1.png') }}" class="w-[20vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center justify-center">
        <h1 class="panel-title stroke">Classroom Activity 6: My Healthy Plate</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="5">
            <li>Explain to the children that My Healthy Plate uses a round plate to help us understand clearly what food to
                eat and in what portions we need to eat them, in each meal, in order to stay healthy.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class6/c2.png') }}" class="w-[20vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center justify-center">
        <h1 class="panel-title stroke">Classroom Activity 6: My Healthy Plate</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="6">
            <li>Explain to children that there are three eating habits recommended by My Healthy Plate: <br> a) Fill half of
                your plate with Fruits and Vegetables.
                <ul class="list-disc">
                    <li>Fruits and vegetables are rich in dietary fibre, vitamins and minerals. They can lower the risk of
                        developing heart disease, stroke and certain types of cancer.</li>
                    <li>Eating a variety of fruits and vegetables will help us get all the nutrients needed by our body.
                    </li>
                    <li> It matters how fruits and vegetables are eaten. Do not eat vegetables with lots of oil, or fruits
                        with sugar syrup as this will add to our consumption of calories and lead to weight gain.</li>
                </ul>

            </li>
        </ol>
        <div class="flex gap-[1vw]">
            <img src="{{ asset('assets/images/micet/k2/nutrition/class6/c3.png') }}" class="w-[10vw]" />
            <img src="{{ asset('assets/images/micet/k2/nutrition/class6/c4.png') }}" class="h-[10vw]" />
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center justify-center">
        <h1 class="panel-title stroke">Classroom Activity 6: My Healthy Plate</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="6">
            <li>Explain to children that there are three eating habits recommended by My Healthy Plate: <br> b) Fill half of
                your plate with <span class="text-[#F8473A]">Wholegrains</span>.
                <ul class="list-disc">
                    <li>Wholegrain food such as brown rice, wholemeal bread and rolled oats contain vitamins (B and E),
                        minerals (iron, zinc and magnesium) and other nutrients. Eating them can reduce the risk of heart
                        disease and diabetes and help to keep your weight in check as you get hungry less easily.</li>
                    <li>White rice or white bread are made from refined grains. Refined grains are processed wholegrains.
                        Most of the valuable nutrients are removed during processing. Hence, eating wholegrains over refined
                        grains is a wise choice.</li>
                </ul>

            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class6/c5.png') }}" class="h-[10vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center justify-center">
        <h1 class="panel-title stroke">Classroom Activity 6: My Healthy Plate</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="6">
            <li>Explain to children that there are three eating habits recommended by My Healthy Plate: <br> c) Fill half of
                your plate with <span class="text-[#F8473A]">Meat and Others</span>.
                <ul class="list-disc">
                    <li>Meat group food such as beef, chicken, fish and other food such as beans and nuts are high in
                        protein. Proteins help build muscles so we can grow tall and strong.</li>
                    <li>If we want to maximize our protein intake, we should choose wisely from the protein group: Lean
                        meats such as chicken and fish and food such as tofu, beans and nuts give us more protein than fatty
                        meats. Oily fish such as tuna, mackerel, sardine and salmon are high in omega 3 which can keep our
                        heart strong. It is recommended that we eat two servings of fish a week.</li>
                </ul>

            </li>
        </ol>
        <div class="flex gap-[1vw]">
            <img src="{{ asset('assets/images/micet/k2/nutrition/class6/c6.png') }}" class="w-[10vw]" />
            <img src="{{ asset('assets/images/micet/k2/nutrition/class6/c7.png') }}" class="w-[10vw]" />
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center justify-center">
        <h1 class="panel-title stroke">Classroom Activity 6: My Healthy Plate</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="6">
            <li>Explain to children that there are three eating habits recommended by My Healthy Plate: <br> c) Fill half of
                your plate with <span class="text-[#F8473A]">Meat and Others</span>.
                <ul class="list-disc">
                    <li>Meat group food such as beef, chicken, fish and other food such as beans and nuts are high in
                        protein. Proteins help build muscles so we can grow tall and strong.</li>
                    <li>If we want to maximize our protein intake, we should choose wisely from the protein group: Lean
                        meats such as chicken and fish and food such as tofu, beans and nuts give us more protein than fatty
                        meats. Oily fish such as tuna, mackerel, sardine and salmon are high in omega 3 which can keep our
                        heart strong. It is recommended that we eat two servings of fish a week.</li>
                </ul>

            </li>
        </ol>
        <div class="flex gap-[1vw]">
            <img src="{{ asset('assets/images/micet/k2/nutrition/class6/c6.png') }}" class="w-[10vw]" />
            <img src="{{ asset('assets/images/micet/k2/nutrition/class6/c7.png') }}" class="w-[10vw]" />
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center justify-center">
        <h1 class="panel-title stroke">Classroom Activity 6: My Healthy Plate</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="7">
            <li>Explain to children that there are three lifestyle habits recommended by My Healthy Plate: <br> a) Use
                healthier oils.
                <ul class="list-disc">
                    <li>Meat group food such as beef, chicken, fish and other food such as beans and nuts are high in
                        protein. Proteins help build muscles so we can grow tall and strong.</li>
                    <li>If we want to maximize our protein intake, we should choose wisely from the protein group: Lean
                        meats such as chicken and fish and food such as tofu, beans and nuts give us more protein than fatty
                        meats. Oily fish such as tuna, mackerel, sardine and salmon are high in omega 3 which can keep our
                        heart strong. It is recommended that we eat two servings of fish a week.</li>
                </ul>

            </li>
        </ol>
        <div class="flex items-end gap-[1vw]">
            <img src="{{ asset('assets/images/micet/k2/nutrition/class6/c8.png') }}" class="h-[10vw]" />
            <img src="{{ asset('assets/images/micet/k2/nutrition/class6/c9.png') }}" class="w-[5vw]" />
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center justify-center">
        <h1 class="panel-title stroke">Classroom Activity 6: My Healthy Plate</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="7">
            <li>Explain to children that there are three lifestyle habits recommended by My Healthy Plate: <br> b) Choose
                water.
                <ul class="list-disc">
                    <li>We need to drink enough water everyday. Make water your drink of choice. Choosing water over
                        sugar-sweetened drinks helps you maintain a healthy weight.</li>
                </ul>

            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class6/c10.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center justify-center">
        <h1 class="panel-title stroke">Classroom Activity 6: My Healthy Plate</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="7">
            <li>Explain to children that there are three lifestyle habits recommended by My Healthy Plate: <br> c) Be
                active.
                <ul class="list-disc">
                    <li>Be physically active by doing activities such as brisk walking, jogging, cycling, swimming, etc. You
                        can also include daily lifestyle activities such as taking the stairs and doing household chores to
                        be physically active.</li>
                </ul>

            </li>
        </ol>
        <div class="flex gap-[1vw]">
            <img src="{{ asset('assets/images/micet/k2/nutrition/class6/c11.png') }}" class="h-[10vw]" />
            <img src="{{ asset('assets/images/micet/k2/nutrition/class6/c12.png') }}" class="w-[10vw]" />
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: My Healthy Plate</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="8">
            <li>Let children discuss what kind of lifestyle and eating habits they are currently having. Help them to
                evaluate if these habits meet the standards that My Healthy Plate recommends.</li>
        </ol>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: My Healthy Plate</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="9">
            <li>Guide children to complete the corresponding activities in the Thematic
                Activity Book.</li>
        </ol>
    </div>


    {{-- panel 28 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 6: My Healthy Plate</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Invite children to share with their classmates what kinds of food they are eating more. Have them look
                    at the My Healthy Plate and say if the food they are eating more, should or should not be eaten in those
                    portions.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to indicate the position of the five main food groups in My Healthy Plate.</li>
                <li>Understand the concept of My Healthy Plate.</li>
                <li>Able to evaluate one's eating and lifestyle habits.</li>
            </ul>
        </div>
    </div>


    {{-- panel 28 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 6: My Healthy Plate</h1>

        <div class="text-start flex flex-col h-full">
            <h3 class="ptitle">Extension</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Encourage children to share the concept of My Healthy Plate with their family members and ask their family members to follow the recommended healthy food and lifestyle habits together.</li>
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
            const returnURL = "{{ url('/micet/k2/nutrition/index') }}";
            const doneURL = "{{ url('/micet/k2/nutrition/index') }}";

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
