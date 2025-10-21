@extends('layout.master')
@section('title', 'Dynamic Presentation')

 

{{-- @php
    $basicCodingRoute = '{{ route('DifferentDirectionsSelection') }}';
@endphp --}}

@section('content')


    {{-- Slide 1 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs1a.png') }}" alt="">
        <h2 class="stroke title">Children, do you remember what these are?</h2>
        <p class="note">Note: Have children recall and share what they have learnt.</p>
    </div>


    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-10 ">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs1a.png') }}" />
        <h2 class="stroke title">These are <span class="text-white">directional signs</span> with <span
                class="text-white">arrows</span> to show us which way to go. <span class="text-white">Directional
                signs</span> give us <span class="text-white">instructions</span> on where to go.</h2>
    </div>


    {{-- Slide 3 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs6.png') }}" />
        <h2 class="stroke title">Which <span class="text-white">direction</span> are these <span
                class="text-white">arrows</span> pointing to?</h2>
        <p class="note">Note: Have children recall and share what they have learnt.</p>
    </div>


    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs6.png') }}" />
        <h2 class="stroke title">The arrows are pointing forward, which means to the front.</h2>
        <p class="note">Note: Physically show children how one moves forward (one step).</p>
    </div>

    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs3.png') }}" />
        <h2 class="stroke title">Which<span class="text-white"> direction</span> are these <span
                class="text-white">arrows</span> pointing to?</h2>
        <p class="note">Note: Have children recall and share what they have learnt.</p>
    </div>

    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs3.png') }}" />
        <h2 class="stroke title">The <span class="text-white">arrows</span> are pointing <span
                class="text-white">backward</span>, which means to the back.</h2>
        <p class="note">Note: Physically show children how one moves forward (one step).</p>
    </div>


    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="!text-white title stroke">Hands-on Time 1</h2>
        <h2 class="title stroke">Mission: <br>
            Let’s look at some arrows and follow the instructions.
            Move forward or backward according to the direction it points to.</h2>
        <p class="note">Note: Have children stand with enough space to move forward and backward.</p>
    </div>


    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs21.png') }}" />
        <h2 class="stroke title">Move forward.</h2>
        <p class="note">Note: Guide children to move accordingly.</p>
    </div>


    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs21.png') }}" class="rotate-[180deg]" />
        <h2 class="stroke title">Move backward.</h2>
        <p class="note">Note: Guide children to move accordingly.</p>
    </div>


    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center justify-center">
            <img src="{{ asset('assets/images/N2/BasicCoding/bs23.png') }}" />
            <img src="{{ asset('assets/images/N2/BasicCoding/bs22.png') }}" />
        </div>
        <h2 class="stroke title">Move backward.</h2>
        <p class="note">Note: Guide children to move accordingly.</p>
    </div>

    {{-- sldie 11 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="rotate-[180deg] flex items-center justify-center">
            <img src="{{ asset('assets/images/N2/BasicCoding/bs23.png') }}" />
            <img src="{{ asset('assets/images/N2/BasicCoding/bs22.png') }}" />
        </div>
        <h2 class="stroke title">Move forward.</h2>
        <p class="note">Note: Guide children to move accordingly.</p>

    </div>

    {{-- slide 12 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="!text-white title stroke">Hands-on Time 2</h2>
        <h2 class="title stroke">Mission: <br>
            Let’s sing a song and do the actions accordingly.</h2>
        <p class="note">Note: Have children stand with enough space to move forward and backward.</p>
    </div>

    {{-- slide 13 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <ul class="title stroke">
            <li>Forward, Forward.</li>
            <li>Backward, backward.</li>
            <li>Clap, clap, clap.</li>
            <li>Snap, snap, snap.</li>
            <li>Forward, forward, forward.</li>
            <li>Backward, backward, backward.</li>
            <li>Turn around, now we’re done!</li>
        </ul>
        <p class="note">Note: Guide children to sing to the tune of “”Are You Sleeping”” and do actions together.
            Only proceed to the next page when all children understand the meaning of forward and backward.</p>
    </div>

    {{-- slide 14 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs1a.png') }}" alt="">
        <h2 class="stroke title">Children, what are directional signs?</h2>
        <p class="note">Note: Guide children to share the use of directional signs.</p>
    </div>


    {{-- slide 15 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs4.png') }}" alt="">
        <h2 class="stroke title">Which direction is this arrow pointing to?
            What instruction does it give?</h2>
        <p class="note">Note: Have children recall and share what they have learnt.</p>
    </div>

    {{-- slide 16 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs4.png') }}" alt="">
        <h2 class="stroke title">The <span class="text-white">arrow</span> is pointing <span class="text-white">left</span>.
            If someone wants to go to the washroom, he or she should turn <span class="text-white">left</span>.</h2>
        <p class="note">Note: Physically show children how one turns left (90 degrees)</p>
    </div>


    {{-- slide 17 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs5.png') }}" alt="">
        <h2 class="stroke title">Which direction is this arrow pointing to?
            What instruction does it give?</h2>
        <p class="note">Note: Have children boldly share their views.</p>
    </div>

    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs5.png') }}" alt="">
        <h2 class="stroke title">The <span class="text-white">arrow</span> is pointing <span
                class="text-white">right</span>. If someone wants to go to the washroom, he or she should turn <span class="text-white">right</span>.</h2>
        <p class="note">Note: Physically show children how one turns right (90 degrees) </p>
    </div>


    {{-- slide 19 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs25.png') }}" alt="">
        <h2 class="stroke title">Do you know which is your<span class="text-white"> left</span> and which is your <span
                class="text-white">right</span>?</h2>
        <p class="note">Note: Have children boldly share their views. </p>
    </div>


    {{-- slide 20 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs25.png') }}" alt="">
        <h2 class="stroke title">If you put your hands out like this,your left hand will form a letter L.</h2>
    </div>

    {{-- slide 21 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs8.png') }}" alt="">
        <h2 class="stroke title">This girl is raising her left arm. Can you do the same?</h2>
        <p class="note">Note: Have children follow accordingly.</p>
    </div>


    {{-- slide 22 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs9.png') }}" alt="">
        <h2 class="stroke title">This girl is raising her right arm. Can you do the same?</h2>
        <p class="note">Note: Have children follow accordingly.</p>
    </div>

    {{-- sldie 23 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="!text-white title stroke">Hands-on Time 3</h2>
        <h2 class="title stroke">Mission: <br>
            Let’s sing a song and do the actions accordingly.</h2>
        <p class="note">Note: Have children stand with enough space to do the actions.</p>
    </div>

    {{-- slide 24 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <ul class="title stroke">
            <li>Wave your left hand, wave your right.</li>
            <li>Wiggle your left leg, wiggle your right.</li>
            <li>Touch your left ear, touch your right.</li>
            <li>Close your left eye, close your right.</li>
            <li>Step to the left, step to the right.</li>
            <li>It's fun to know my left and right.</li>
        </ul>
        <p class="note">Note: Guide children to sing to the tune of "Twinkle Twinkle Little Star" and do the actions
            accordingly.</p>
    </div>


    {{-- slide 25 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <div class="flex items-center gap-20">
            <img src="{{ asset('assets/images/N2/BasicCoding/bs23.png') }}" alt="" class="rotate-[90deg]">
            <img src="{{ asset('assets/images/N2/BasicCoding/bs23.png') }}" alt="" class="rotate-[-90deg]">
        </div>
        <h2 class="stroke title">Which is pointing to the <span class="text-white">left</span>? Which is pointing to the
            <span class="text-white">right</span>?
        </h2>
        <p class="note">Note: Have children come forward to point out the answers.</p>
    </div>

    {{-- slide 26 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs26.png') }}">
        <h2 class="stroke title">Which is pointing to the <span class="text-white">left</span>? Which is pointing to the
            <span class="text-white">right</span>?
        </h2>
        <p class="note">Note: Have children come forward to point out the answers.</p>
    </div>

    {{-- slide 27 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs24.png') }}">
        <h2 class="stroke title">Which is pointing to the <span class="text-white">left</span>? Which is pointing to the
            <span class="text-white">right</span>?
        </h2>
        <p class="note">Note: Have children come forward to point out the answers.</p>
    </div>


    {{-- sldie 28 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="!text-white title stroke">Hands-on Time 4</h2>
        <div class="text-start">
            <h2 class="title stroke">Mission: <br>
                Let’s look at the directional signs and follow the instructions.
                Turn left or right according to where you want to go.</h2>
        </div>
        <p class="note">Note: Have children stand with enough space to turn.</p>
    </div>

    {{-- slide 29 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs26.png') }}">
        <h2 class="stroke title">If you want to go to the zoo, should you turn left or right?</h2>
        <p class="note">Note: Have children come forward to point out the answers.</p>
    </div>

    {{-- slide 30 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs26.png') }}">
        <h2 class="stroke title">If you want to go to the zoo, should you turn left or right?</h2>
        <p class="note">Note: Have children come forward to point out the answers.</p>
    </div>


    {{-- slide 31 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs24.png') }}">
        <h2 class="stroke title">If you want to go to the bus stop, should you turn
            left or right?</h2>
        <p class="note">Note: Have children     sically turn to show the answer.</p>
    </div>


    {{-- slide 32 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs24.png') }}">
        <h2 class="stroke title">If you want to go to the bus stop, should you turn
            left or right?</h2>
        <p class="note">Note: Have children physically turn to show the answer.</p>
    </div>







    {{-- =================================================================== --}}
    {{-- Complete button --}}
    <div class="down-btn-container">
        <button
         class="doneButton">
 <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    {{-- Buttons --}}
 <div id="buttons" class="absolute right-[60px] flex flex-row gap-6 ">

        <!-- Return Button -->
        <a id="returnButton">
 <img
    src="{{ asset('assets/images/pptimages/return.png') }}" />
        </a>

        <!-- Home Button -->
        <button
     id="homeButton">
            <img 
                src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
        </button>

        <!-- Close Button -->
        <button id="closeButton">
           
            <img 
                src="{{ asset('assets/images/pptimages/cancel.png') }}" />
    
        </button>

    </div>

    {{-- next Button --}}
    <div class="down-btn-container">

        <button
            class="nextButton ">
                        <img src="{{ asset('assets/images/pptimages/return.png') }}" />

        </button>
    </div>
@endsection


@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const slides = document.querySelectorAll(".slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton"); // ✅ DONE button

            let currentSlide = 0;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                // ✅ Agar last slide hai → NEXT button hide, DONE show
                if (index === slides.length - 1) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            // ✅ NEXT buttons listener
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                });
            });

            // ✅ Return button
            returnButton.addEventListener("click", () => {
                if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('DifferentDirectionsSelection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
