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
        ol{
            width: 47vw;
        }
    </style>
@endpush

@section('content')

    {{-- panel 1 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>
        <div class="flex ">
            <img src="{{ asset('assets/images/micet/n1/mybody/class1/c1.png') }}" class="h-[12vw]" />
            <img src="{{ asset('assets/images/micet/n1/mybody/class2/c1.png') }}" class="h-[12vw]" />
        </div>


        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul">
            <li>Understand that our ears enable us to hear sounds</li>
            <li>Express what sounds they like and dislike to hear</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start space-y-[2vw] h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <h3 class="ptitle mt-[5vw]">Preparations</h3>

        <ul class="list-disc panel-ul">
            <li>Thematic Activity Book</li>
        </ul>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>
            <ol class="list-decimal panel-ul">
                <li>Ask children: “”Where are the ears of the gingerbread man?”” Have the children
                    point to the ears.</li>
            </ol>
        </div>

        <img src="{{ asset('assets/images/micet/n1/mybody/class1/c2.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul" start="2">
                <li>Ask children: "Where are your eards?" "How many eyes do you have?" Have
                    children point to their own ears. Tell them that everyone has two ears. Point to
                    the ears and guide children in counting.</li>
            </ol>
        </div>

        <img src="{{ asset('assets/images/micet/n1/mybody/class3/c1.png') }}" class="h-[15vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">ears</h5>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul" start="3">
                <li>Ask children: "What will happen if we have no ears?"</li>
                <li>Have children do an experiment to confirm the functions of the ears.</li>
            </ol>
        </div>

        <img src="{{ asset('assets/images/micet/n1/mybody/class3/c1.png') }}" class="h-[15vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">ears</h5>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col space-y-[2vw] justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <ol class="list-decimal panel-ul" start="5">
            <li>Have children cover their ears with their hands. Teacher can use a
                handkerchief to cover her mouth and speak a short sentence (e.g. Let's sing
                together!). Let the children take their hands off their ears. Ask them whether
                they heard what was said.</li>
            <li>Teacher repeats previous actions and then asks children again whether they
                heard what was said. Let the children say what they hear.</li>
            <li>Tell children that without ears, they will not be able to hear anything a person
                says.</li>
        </ol>
    </div>

    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col space-y-[2vw] justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <ol class="list-decimal panel-ul" start="8">
            <li>Let the children cover their ears with their hands. Click on the speaker. Now
                let the children take their hands off their ears. Ask them whether they heard
                the sound that was played.</li>
            <li>Click on the speaker again, ask children if they can hear the sound. Have
                children guess what the sound is.</li>
        </ol>

        <button id="sound-btn" class="w-[5vw]">
            <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" />
        </button>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col space-y-[2vw] justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <ol class="list-decimal panel-ul" start="10">
            <li>Ask children: "Now, do you know the functions of our ears?" Guide children to
                understand that our ears enable us to hear sounds. Without our ears, we will
                not be able to hear anything.</li>
        </ol>
    </div>

    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col space-y-[2vw] justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <ol class="list-decimal panel-ul" start="8">
            <li>Let the children cover their ears with their hands. Click on the speaker. Now
                let the children take their hands off their ears. Ask them whether they heard
                the sound that was played.</li>
            <li>Click on the speaker again, ask children if they can hear the sound. Have
                children guess what the sound is.</li>
        </ol>

        <button id="sound-btn" class="w-[5vw]">
            <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" />
        </button>
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col space-y-[2vw] justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <ol class="list-decimal panel-ul" start="10">
            <li>Ask children: "Now, do you know the functions of our ears?" Guide children to
                understand that our ears enable us to hear sounds. Without our ears, we will
                not be able to hear anything.</li>
        </ol>
    </div>


    {{-- panel 11 --}}
    <div class="phonics-panel flex flex-col space-y-[2vw] justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <ol class="list-decimal panel-ul" start="8">
            <li>Let the children cover their ears with their hands. Click on the speaker. Now
                let the children take their hands off their ears. Ask them whether they heard
                the sound that was played.</li>
            <li>Click on the speaker again, ask children if they can hear the sound. Have
                children guess what the sound is.</li>
        </ol>

        <button id="sound-btn" class="w-[5vw]">
            <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" />
        </button>
    </div>


    {{-- panel 12 --}}
    <div class="phonics-panel flex flex-col space-y-[2vw] justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <ol class="list-decimal panel-ul" start="10">
            <li>Ask children: "Now, do you know the functions of our ears?" Guide children to
                understand that our ears enable us to hear sounds. Without our ears, we will
                not be able to hear anything.</li>
        </ol>
    </div>


    {{-- panel 13 --}}
    <div class="phonics-panel flex flex-col space-y-[2vw] justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <ol class="list-decimal panel-ul" start="11">
            <li>Click on the speaker, ask children whether they heard what was played.
                Have children guess what the sound is.</li>
        </ol>

        <button id="sound-btn" class="w-[5vw]">
            <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" />
        </button>
    </div>


    {{-- panel 14 --}}
    <div class="phonics-panel flex flex-col space-y-[2vw] justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <ol class="list-decimal panel-ul" start="12">
            <li>Click on the speaker, ask children whether they heard what was played.
                Have children guess what the sound is.</li>
        </ol>

        <button id="sound-btn" class="w-[5vw]">
            <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" />
        </button>
    </div>


    {{-- panel 15 --}}
    <div class="phonics-panel flex flex-col space-y-[2vw] justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <ol class="list-decimal panel-ul" start="13">
            <li>Click on the speaker, ask children whether they heard what was played.
                Have children guess what the sound is.</li>
        </ol>

        <button id="sound-btn" class="w-[5vw]">
            <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" />
        </button>
    </div>


    {{-- panel 16 --}}
    <div class="phonics-panel flex flex-col space-y-[2vw] justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <ol class="list-decimal panel-ul" start="14">
            <li>Click on the speaker, ask children whether they heard what was played.
                Have children guess what the sound is.</li>
        </ol>

        <button id="sound-btn" class="w-[5vw]">
            <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" />
        </button>
    </div>


    {{-- panel 17 --}}
    <div class="phonics-panel flex flex-col space-y-[2vw] justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <ol class="list-decimal panel-ul" start="15">
            <li>Click on the speaker, ask children whether they heard what was played.
                Have children guess what the sound is.</li>
        </ol>

        <button id="sound-btn" class="w-[5vw]">
            <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" />
        </button>
    </div>


    {{-- panel 18 --}}
    <div class="phonics-panel flex flex-col space-y-[2vw] justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <ol class="list-decimal panel-ul" start="16">
            <li>Click on the speaker, ask children whether they heard what was played.
                Have children guess what the sound is.</li>
        </ol>

        <button id="sound-btn" class="w-[5vw]">
            <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" />
        </button>
    </div>


    {{-- panel 19 --}}
    <div class="phonics-panel flex flex-col space-y-[2vw] justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <ol class="list-decimal panel-ul" start="17">
            <li>Click on the speaker, ask children whether they heard what was played.
                Have children guess what the sound is.</li>
        </ol>

        <button id="sound-btn" class="w-[5vw]">
            <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" />
        </button>
    </div>


    {{-- panel 20 --}}
    <div class="phonics-panel flex flex-col space-y-[2vw] justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <ol class="list-decimal panel-ul" start="18">
            <li>Click on the speaker, ask children whether they heard what was played.
                Have children guess what the sound is.</li>
        </ol>
    </div>


    {{-- panel 21 --}}
    <div class="phonics-panel flex flex-col space-y-[2vw] justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <ol class="list-decimal panel-ul" start="19">
            <li>Ask children: "What do you hear?" (alarm clock sound)</li>
            <li>"How does hearing the sound of an alarm clock help us?" (give us information
                - know that it's time to wake up)</li>
        </ol>

        <button id="sound-btn" class="w-[5vw]">
            <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" />
        </button>
    </div>


    {{-- panel 22 --}}
    <div class="phonics-panel flex flex-col space-y-[2vw] justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <ol class="list-decimal panel-ul" start="19">
            <li>Ask children: "What do you hear?" (telephone sound)</li>
            <li>"How does hearing the sound of an alarm clock help us?" (give us information
                - know that it's time to wake up)</li>
        </ol>

        <button id="sound-btn" class="w-[5vw]">
            <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" />
        </button>
    </div>


    {{-- panel 23 --}}
    <div class="phonics-panel flex flex-col space-y-[2vw] justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <ol class="list-decimal panel-ul" start="19">
            <li>Ask children: "What do you hear?" (Fire alarm sound)</li>
            <li>"How does hearing the sound of an alarm clock help us?" (give us information
                - know that it's time to wake up)</li>
        </ol>

        <button id="sound-btn" class="w-[5vw]">
            <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" />
        </button>
    </div>


    {{-- panel 24 --}}
    <div class="phonics-panel flex flex-col space-y-[2vw] justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <ol class="list-decimal panel-ul" start="19">
            <li>Ask children: "What do you hear?" (weather forecast on the radio)</li>
            <li>"How does hearing the sound of an alarm clock help us?" (give us information
                - know that it's time to wake up)</li>
        </ol>

        <button id="sound-btn" class="w-[5vw]">
            <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" />
        </button>
    </div>


    {{-- panel 25 --}}
    <div class="phonics-panel flex flex-col space-y-[2vw] justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <ol class="list-decimal panel-ul" start="19">
            <li>Ask children: "What do you hear?" (safety announcement in train station)</li>
            <li>"How does hearing the sound of an alarm clock help us?" (give us information
                - know that it's time to wake up)</li>
        </ol>

        <button id="sound-btn" class="w-[5vw]">
            <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" />
        </button>
    </div>


    {{-- panel 26 --}}
    <div class="phonics-panel flex flex-col space-y-[2vw] justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <ol class="list-decimal panel-ul" start="21">
            <li>Ask children: "Do you like all the sounds that you hear? Let's find out
                together!"</li>
        </ol>
    </div>


    {{-- panel 27 --}}
    <div class="phonics-panel flex flex-col space-y-[2vw] justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <ol class="list-decimal panel-ul" start="22">
            <li>Ask children: "What do you hear?" "Do you like it?"</li>
            <li>Guide children in understanding: Sometimes we like the sounds we hear and
                sometimes we dislike the sounds we hear.</li>
        </ol>

        <button id="sound-btn" class="w-[5vw]">
            <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" />
        </button>
    </div>


    {{-- panel 28 --}}
    <div class="phonics-panel flex flex-col space-y-[2vw] justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <ol class="list-decimal panel-ul" start="24">
            <li>Ask children: "What do you hear?" "Do you like it?"</li>
            <li>Guide children in understanding: Sometimes we like the sounds we hear and
                sometimes we dislike the sounds we hear.</li>
        </ol>

        <button id="sound-btn" class="w-[5vw]">
            <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" />
        </button>
    </div>


    {{-- panel 29 --}}
    <div class="phonics-panel flex flex-col space-y-[2vw] justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <ol class="list-decimal panel-ul" start="26">
            <li>Ask children: "What do you hear?" "Do you like it?"</li>
            <li>Guide children in understanding: Sometimes we like the sounds we hear and
                sometimes we dislike the sounds we hear.</li>
        </ol>

        <button id="sound-btn" class="w-[5vw]">
            <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" />
        </button>
    </div>


    {{-- panel 30 --}}
    <div class="phonics-panel flex flex-col space-y-[2vw] justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <ol class="list-decimal panel-ul" start="28">
            <li>Ask children: "What do you hear?" "Do you like it?"</li>
            <li>Guide children in understanding: Sometimes we like the sounds we hear and
                sometimes we dislike the sounds we hear.</li>
        </ol>

        <button id="sound-btn" class="w-[5vw]">
            <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" />
        </button>
    </div>


    {{-- panel 31 --}}
    <div class="phonics-panel flex flex-col space-y-[2vw] justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <ol class="list-decimal panel-ul" start="30">
            <li>Ask children: "What do you hear?" "Do you like it?"</li>
            <li>Guide children in understanding: Sometimes we like the sounds we hear and
                sometimes we dislike the sounds we hear.</li>
        </ol>

        <button id="sound-btn" class="w-[5vw]">
            <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" />
        </button>
    </div>


    {{-- panel 32 --}}
    <div class="phonics-panel flex flex-col space-y-[2vw] justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <ol class="list-decimal panel-ul" start="32">
            <li>Teacher concludes: Our ears do not just enable us to hear sounds, but also
                give us useful information. Sometimes we like the sounds we hear and
                sometimes we dislike the sounds we hear.</li>
            <li>Ask children: "Are ears important?" Tell children that ears are important
                parts of our body and we must take good care of them.</li>
        </ol>
    </div>


    {{-- panel 33 --}}
    <div class="phonics-panel flex flex-col space-y-[2vw] justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <ol class="list-decimal panel-ul" start="34">
            <li>Guide children to complete the corresponding activity in the Thematic
                Activity Book.</li>
        </ol>
    </div>


    {{-- panel 34 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Let the children take turns and share what sounds they like and
                    dislike to hear.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to understand that our ears enable us to hear sounds.</li>
                <li>Able to express what sounds they like and don't like to
                    hear.</li>
            </ul>
        </div>
    </div>


    {{-- panel 35 --}}
    <div class="phonics-panel flex flex-col items-center justify-start h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <div class="text-start">
            <h3 class="ptitle">Extension</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Get children to find out from their parents at home on how
                    to take care of their ears, then share the information with
                    the class.</li>
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
            const returnURL = "{{ url('/micet/n1/mybody/index') }}";
            const doneURL = "{{ url('/micet/n1/mybody/index') }}";

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
