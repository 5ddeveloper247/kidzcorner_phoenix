@extends('layout.master')

@section('title', 'Dynamic Presentation')
@section('content')

    {{-- title --}}
    <h2 class="title !text-[3vw] top-title stroke absolute top-[5vh] z-[100]">Light and Shadow</h2>
    
    {{-- slide 1 --}}
    <div class="slide flex flex-col items-center justify-center">
        <h2 class="title stroke">Have you ever noticed a black shape near your
            feet when you are out in the sun?</h2>
        <img src="{{ asset('assets/images/pptimages/shadow1.png') }}" />

        <p class="note">Note: Encourage children to share and ask them what that black shape is.</p>
    </div>

    {{-- slide 2 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">That
            <span class="text-white">black</span> shape is your <span class="text-white">shadow</span>. <br>
            <span class="text-white">Shadows</span> are made when something <span class="text-white">blocks</span> the
            <span class="text-white">light</span>
        </h2>

        <img src="{{ asset('assets/images/pptimages/shadow1.png') }}" />
    </div>

    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="stroke title">The man, the poles, the trees have shadows!</h2>

        <img src="{{ asset('assets/images/pptimages/sh.png') }}" class="max-w-[500px] sm:max-w-[600px] lg:max-w-[636px]" />

        <p class="note">Note: Teacher to point out the shadows of each item to the children.</p>
    </div>

    <!-- Slide 4 -->
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="stroke title">The shape of your
            <span class="text-white">shadow </span> looks like you and it follows all your movements.
        </h2>

        <img src="{{ asset('assets/images/pptimages/shadow1.png') }}" />
    </div>

    <!-- Slide 5 -->
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="stroke title">When you jump, your shadow jumps.</h2>

        <img src="{{ asset('assets/images/pptimages/shadow2.png') }}" />
    </div>

    <!-- Slide 6 -->
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="stroke title">When you lift up your arms, <br> your shadow does
            the same actions.</h2>
        <img src="{{ asset('assets/images/pptimages/shadow2.png') }}" />
    </div>

    <!-- Slide 7 -->
    <div class="slide hidden flex flex-col items-center justify-center text-center">
        <h2 class="title !text-white">Class Activity 1</h2>
        <img src="{{ asset('assets/images/pptimages/shadow17.png') }}" />

        <h2 class="stroke title">Make animal shadows with your hands.</h2>

        <p class="note ">Note: Teacher to use light to shine towards a white wall. Ensure enough space
            for children to work in front of the light.</p>
    </div>

    <!-- Slide 8 -->
    <div class="slide hidden flex flex-col items-center justify-center px-4 text-start">
        <div class="title stroke ">
            <h2>Let's do:</h2>
            <ul class="slide-ul list-decimal">
                <li>Place a light source at a distance from a plain wall.</li>
                <li>Shine the light at the wall.</li>
                <li>Stand in front of the light and raise up your arms.</li>
                <li>Observe how your shadows move as your arms move.</li>
            </ul>
        </div>
        <p class="note text-ellipsis">Note: Ensure children's safety while doing this activity. <br>Make sure the room
            is not too dark and remind children not to look into the light directly. <br>Let children know that it is
            bad for their eyes.</p>
    </div>

    <!-- Slide 9 -->
    <div class="slide hidden flex flex-col items-center justify-center px-4 text-center">

        <div class="title !text-white stroke">Let's do:</div>
        <div class="title stroke">5. Look at the picture below. What animal is it?</div>
        <img src="{{ asset('assets/images/pptimages/shadow16.png') }}" />

        <p class="note text-ellipsis">Note: Encourage children to share their answers.</p>
    </div>

    <!-- Slide 10 -->
    <div class="slide hidden flex flex-col items-center justify-center px-4 text-center">

        <h2 class="!text-white title stroke">Let's do:</h2>
        <h2 class="title stroke">6. Follow the pictures below and make a shadow of a bird.</h2>
        <img src="{{ asset('assets/images/pptimages/shadow14.png') }}" />

        <p class="note text-ellipsis">Note: Guide children to follow the shadow of a bird.</p>
    </div>

    <!-- Slide 11 -->
    <div class="slide hidden flex flex-col items-center justify-center px-4 text-center">

        <h2 class="title !text-white stroke">Let's do:</h2>
        <h2 class=" title stroke">7. Look at the picture below. What animal is
            it?</h2>
        <img src="{{ asset('assets/images/pptimages/shadow15.png') }}" />
        <p class="note text-ellipsis">Note: Encourage children to share their answers.</p>
    </div>

    <!-- Slide 12 -->
    <div class="slide hidden flex flex-col items-center justify-center px-4 text-center">

        <h2 class="!text-white title stroke">Let's do:</h2>
        <h2 class="title stroke">8. Follow the pictures below and make a
            shadow of a moose.</h2>
        <img src="{{ asset('assets/images/pptimages/shadow13.png') }}" />

        <p class="note text-ellipsis">Note: Guide children to follow the shadow of a moose.</p>
    </div>

    <!-- Slide 13 -->
    <div class="slide hidden flex flex-col items-center justify-center px-4 text-center">

        <h2 class="title !text-white stroke">Let's do:</h2>
        <h2 class="title stroke">9. Try making the shadow of a dog.</h2>
        <img src="{{ asset('assets/images/pptimages/shadow12.png') }}" />

        <p class="note text-ellipsis">Note: Guide and encourage children to try.</p>
    </div>

    <!-- Slide 14 -->
    <div class="slide hidden flex flex-col items-center justify-center px-4 text-center">

        <h2 class="title !text-white stroke">Let's do:</h2>
        <h2 class="title stroke">10.Try making the shadow of a duck.</h2>
        <img src="{{ asset('assets/images/pptimages/shadow11.png') }}" />

        <p class="note text-ellipsis">Note: Guide and encourage children to try.</p>
    </div>

    <!-- Slide 15 -->
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="justify-start text-center title stroke">
            Look at these pictures. <br />
            How are the shadows different?
        </h2>
        <img src="{{ asset('assets/images/pptimages/gl5.png') }}" />
        <p class="note   text-wrap">Note: Guide and encourage children to answer.</p>
    </div>

    <!-- Slide 16 -->
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="justify-start text-center title stroke w-[80%]">The shadow in the land is
            <span class="text-white"> long </span>, </br> but the shadow on the tennis player is
            <span class="text-white"> short </span>.
        </h2>
        <img src="{{ asset('assets/images/pptimages/gl5.png') }}" />
    </div>

    <!-- Slide 17 -->
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="stroke justify-start text-center title">Why are the shadows different?</h2>
        <img src="{{ asset('assets/images/pptimages/gl5.png') }}" />
        <p class="note   text-wrap">Note: Guide and encourage children to share their thoughts.</p>
    </div>

    <!-- Slide 18 -->
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="justify-start text-center title !text-white stroke">CLASS ACTIVITY 2</h2>
        <img src="{{ asset('assets/images/pptimages/shadow6.png') }}" />

        <h2 class="stroke justify-start text-start title">
            Let's find out: <br />
            What changes the size of the shadows?
        </h2>
        <p class="note   text-wrap">Note: Teacher to prepapre materials for each group to explore.</p>
    </div>

    <!-- Slide 19 -->
    <div class="slide hidden flex flex-col items-center justify-between h-[60%] px-4 text-start">
        <ul class="slide-ul list-decimal title stroke text-start">
            <h2>Let's do: </h2>
            <li>Build a tower with 3 blocks.</li>
            <li>Paste a piece of paper on the wall.</li>
        </ul>

        <p class="note text-ellipsis">Note: Assist the children in each group to set up the paper on the wall.
            Encourage children to build their own tower.</p>
    </div>

    <!-- Slide 20 -->
    <div class="slide hidden flex flex-col items-center justify-center px-4 text-start">
        <ul class="slide-ul  text-start title stroke">
            <h2>Let's do:</h2>
            <li>
                3. Put the flashlight at a distance from the <br />
                blocks such that the shadow is projected on the wall.
            </li>
        </ul>
        <img src="{{ asset('assets/images/pptimages/shadow6.png') }}" alt="" />

        <p class="note text-ellipsis">Note: Assist the children in each group to set up and let children explore with
            the set up.</p>
    </div>

    <!-- Slide 21 -->
    <div class="slide hidden flex flex-col items-center justify-center px-4 text-start">
        <ul class="slide-ul title stroke text-start">
            <h2 class="stroke title">Let's do:</h2>
            <li> <span style="opacity:0;">-</span> 4. Draw the shadow on the paper and label it as A.</li>
            <li>5. Paste a label A at the position where the flashlight is</li>
        </ul>
        <img src="{{ asset('assets/images/pptimages/shadow7.png') }}" alt="" />

        <p class="note text-ellipsis">Note: Assist the children in each group to set up and let children explore with
            the set up.</p>
    </div>

    <!-- Slide 22 -->
    <div class="slide hidden flex flex-col items-center justify-center px-2 space-y-10 text-start w-[90%]">
        <h2 class="stroke title">
            Let's do:
        </h2>
        <ul class="slide-ul title stroke">
            <li>6. Move the position of the flashlight and observe the size of the shadows formed.</li>
            <li>7.Now try to make a shadow that is smaller/bigger than the one drawn on the paper.</li>
            <li>8. Draw the shadow and mark the position.</li>
        </ul>

        <p class="note text-ellipsis">Note: Teacher to ask questions to lead children to explore how they can change
            the position of the light. Children are not allowed to add blocks to make a taller tower.</p>
    </div>

    <!-- Slide 23 -->
    <div class="slide hidden flex flex-col items-center justify-center px-4 text-start">
        <h2 class="stroke title">
            Let's do:
        </h2>
        <ul class="slide-ul title stroke">
            <li><span style="opacity:0;">-</span> 9. Share how to make a shadow smaller/bigger.</li>
        </ul>
        <img src="{{ asset('assets/images/pptimages/shadow8.png') }}" alt="" />

        <p class="note text-ellipsis">Note: Assist the children to gather conclusion.</p>
    </div>

    <!-- Slide 24 -->
    <div class="slide hidden flex w-[90%] flex-col items-center justify-center space-y-10 px-2 text-start">
        <h2 class="stroke title">
            Suggested Guiding Question:
        </h2>
        <ul class="slide-ul list-disc title stroke">
            <li>What happens to the shadow when the flashlight is placed nearer to/farther from the blocks?</li>
            <li>What happens when the flashlight is placed at a higher or lower position?</li>
            <li>Use more or bigger flashlights to shine at the blocks.</li>
            <li>How to make the shadow taller/smaller/shorter?</li>
        </ul>

        <p class="note text-ellipsis">Note: Teacher to facilitate each group and encourage them to explore how they can
            find solutions for the different challenges - making shadows taller, smaller or shorter.</p>
    </div>

    <!-- Slide 25 -->
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">The shadow becomes <span class="text-white">bigger </span> when the <span
                class="text-white">flashlight</span>
            is used and placed <span class="text-white">nearer</span> to the blocks.</h2>
        <div class="px-20">
            <img src="{{ asset('assets/images/pptimages/shadow9.png') }}" />
        </div>
        <h2 class="title stroke">The shadow becomes <span class="text-white">smaller</span> when the <span
                class="text-white">flashlight</span>
            is placed <span class="text-white">farther from</span> the blocks.</h2>
    </div>


    <!-- Slide 26 -->
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">The shadow becomes <span class="text-white">taller</span> when the <span
                class="text-white">flashlight</span>
            is placed <span class="text-white">at a lower position.</span></h2>
        <div class="px-20">
            <img src="{{ asset('assets/images/pptimages/shadow10.png') }}" />
        </div>
        <h2 class="title stroke">The shadow becomes <span class="text-white">shorter</span> when the <span
                class="text-white">flashlight</span>
            is placed <span class="text-white">at a higher position.</span></h2>
    </div>

    <!-- Slide 27 -->
    <div class="slide hidden flex flex-col items-center justify-center text-center">
        <div class="flex items-center gap-x-20">
            <h2 class="stroke title">Let's sing:</h2>
            <h2 class="stroke title">Hi Shadow</h2>
        </div>
        <img src="{{ asset('assets/images/pptimages/shadow2.png') }}" />

        <h2 class="stroke title">This song tells you what you have learned about <span
                class="text-white">shadows.</span></h2>
        <p class="note text-ellipsis">Note: Encourage children to sing along. Refer</p>
    </div>

    <!-- Slide 28 -->
    <div class="slide hidden flex flex-col items-center justify-center t">
        <img src="{{ asset('assets/images/pptimages/shadow2.png') }}" />

        <h2 class="title stroke">Shadows are black shapes made when <br />something blocks light.</h2>
    </div>

    <!-- Slide 29 -->
    <div class="slide hidden flex flex-col items-center justify-center t">
        <img src="{{ asset('assets/images/pptimages/shadow17.png') }}" />

        <h2 class="title stroke">Animal shaped shadows can be made using hands. <br />The shadows move when your hands
            move!</h2>
    </div>

    <!-- Slide 30 -->
    <div class="slide hidden flex flex-col items-center justify-center t">
        <img src="{{ asset('assets/images/pptimages/shadow8.png') }}" />

        <h2 class="title stroke">The size of the shadow changes <br />when the position of the light changes.</h2>
    </div>


    {{-- Complete/Done Butttom --}}
    <div class="down-btn-container">
        <button class="cursor-pointer doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    {{-- Buttons --}}
    <div id="buttons" class="absolute  flex flex-row ">

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

        <button class="nextButton ">
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
                    window.location.href = "{{ route('chooseShadow') }}";
                } else {
                    // Not first slide: go back
                    showSlide(currentIndex - 1);
                }
            });

            // Done button
            doneBtn.addEventListener("click", () => {
                window.location.href = "{{ route('chooseShadow') }}";
            });

            // Start at first slide
            showSlide(0);
        });
    </script>
@endpush
