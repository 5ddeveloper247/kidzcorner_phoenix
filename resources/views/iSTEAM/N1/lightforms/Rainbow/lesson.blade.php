@extends('layout.master')

@section('title stroke', 'Dynamic Presentation')
@section('content')
    {{-- title --}}
    <h2 class="title !text-[3vw] top-title stroke absolute top-[5vh] z-[100]">Rainbows</h2>

    {{-- slide 0 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <h2 class="title  stroke">What do you see in this picture?</h2>
        <img src="{{ asset('assets/images/pptimages/rainbow.png') }}" />
        <p class="note">Note: Guide children to share their answers.</p>
    </div>

    {{-- slide 1 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">

        <h2 class="title  stroke">There's a <span class="text-white">rainbow</span> in the sky! <br> Do you know how are
            <span class="text-white">rainbows</span> formed?
        </h2>
        <img src="{{ asset('assets/images/pptimages/rainbow.png') }}"
            class="max-w-[536px] sm:max-w-[600px] lg:max-w-[536px]" />
        <p class="note">Note: Ask children if they have seen a rainbow in real life and share their thoughts about
            rainbows.</p>
    </div>

    {{-- slide 2 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <h2 class="title  stroke">Rainbows are formed when <span class="text-white">light</span> shines through water
            droplets
            forming a <span class="text-white">rainbow</span></h2>
        <img src="{{ asset('assets/images/pptimages/gl7.png') }}" />
    </div>

    {{-- slide 3 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <h2 class="title  stroke">The water droplet separates the <span class="text-white">white light</span> into <span
                class="text-white">seven colours</span></h2>
        <img src="{{ asset('assets/images/pptimages/gl7.png') }}" />
    </div>

    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center gap-3 slide hidden">
        <h2 class="title  stroke">The seven colours are <span style="color:red;">red</span>, <span
                style="color:orange;">orange</span>, <span style="color:yellow;">yellow</span>, <span
                style="color:green;">green</span>, <span style="color:blue;">blue</span>, <span
                style="color:indigo;">indigo</span> and <span style="color:violet;">violet</span>.</h2>
        <img src="{{ asset('assets/images/pptimages/gl8.png') }}" />
    </div>

    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-center gap-3 slide hidden">
        <h2 class="title  stroke">This is how the <span class="text-white">rainbows</span> are formed!</h2>
        <img src="{{ asset('assets/images/pptimages/gl8.png') }}" />
    </div>


    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <h2 class="title  stroke"><span style="color:white;">Rainbows</span> can form whenever there's <span
                style="color:white;">light</span> and water! Sometimes <span style="color:white;">rainbows</span> appear
            at the fountains on a sunny day.</h2>
        <img class="large-img" src="{{ asset('assets/images/pptimages/reflect.png') }}" />
        <p class="note">Note: Teacher can explain that there's light from the sun and water from the fountain.</p>
    </div>

    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <h2 class="title  stroke text-white">CLASS ACTIVITY 1</h2>
        <img class="large-img" src="{{ asset('assets/images/pptimages/bottle.png') }}" />
        <h2 class="title  stroke text-start">Let's try: Create a raibow in the sun</h2>
        <p class="note">Note: Teacher recap with children what are the main things needed to create a <br>rainbow (light
            and water). This should be done on a sunny day.</p>
    </div>

    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center space-y-20 slide hidden">
        <div class="title  stroke text-start px-4">
            <h2>let's do:</h2>
            <ul class="list-decimal">
                <li>Place white paper on the floor in the outdoors.</li>
                <li>Take a bottle of water and hold it in the sun.</li>
                <li>Observe the paper on the floor as the sunlight shines through the bottle of water.</li>
            </ul>
        </div>
        <p class="note">Note: The rainbow captured on the paper may be very small, teacher may need to point out to
            children to see it.</p>
    </div>

    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">

        <div class="title  stroke text-start">
            <h2>let's do:</h2>
            <ul>
                <li>4. Place white paper on the floor in the outdoors.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/couple.png') }}" />
    </div>

    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">

        <h2 class="title  stroke text-white">CLASS ACTIVITY 2</h2>
        <img src="{{ asset('assets/images/pptimages/bowl.png') }}" class="large-img" />
        <h2 class="title  stroke text-start">Let's try: Create a raibow using a mirror, water and flashlight!</h2>
        <p class="note">Note: Teacher recap with children what are the main things needed to create a rainbow (light and
            water).</p>
    </div>

    {{-- slide 11 --}}
    <div class="flex  flex-col items-center justify-center space-y-10 slide hidden">
        <div class="title  stroke text-start px-4">
            <h2>let's do:</h2>
            <ul class="list-decimal">
                <li>Fill half the container with water and place a mirror in it.</li>
                <li>Make sure that the mirror is placed slanted such that only half of the mirror is submerged in the water.
                </li>
                <li>Shine the flashlight onto the mirror submerged in water.</li>
            </ul>
        </div>
        <p class="note">Note: Remind children not to shine light into eyes. <br> Teacher to guide children to observe
            where the
            rainbow is formed when they shine the <br>flashlight on the mirror.</p>
    </div>

    {{-- slide 12 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="title  stroke text-start">
            <h2>let's do:</h2>
            <ul>
                <li>4. Move the flashlight and explore how a rainbow can be reformed</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/couple2.png') }}" />
    </div>

    {{-- slide 13 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">

        <img src="{{ asset('assets/images/pptimages/cds.png') }}" />
        <h2 class="title  stroke">Do you know what these are?</h2>
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>

    {{-- slide 14 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">

        <h2 class="title  stroke">These are disc. They are shiny and reflective!</h2>
        <img class="large-img" src="{{ asset('assets/images/pptimages/cds.png') }}" />
        <h2 class="title  stroke">Like water, the shiny disc separates light into seven colours.</h2>
        <p class="note">Note: Teacher can pass a few CDs around the class and let children have a closer look at it.
        </p>
    </div>

    {{-- slide 15 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">

        <img src="{{ asset('assets/images/pptimages/cds.png') }}" />
        <h2 class="title  stroke">Can you see rainbows on the disc?</h2>
        <p class="note">Note: Teacher can guide children to observe and share what colours they see on the disc.</p>
    </div>

    {{-- slide 16 --}}
    <div class="flex flex-col items-center justify-center space-y-10 slide hidden">
        <div class="title  stroke text-start px-4">
            <h2>let's do:</h2>
            <ul class="list-decimal">
                <li>Place white paper on the floor in the outdoors.</li>
                <li>Take a bottle of water and hold it in the sun.</li>
                <li>Observe the paper on the floor as the sunlight shines through the bottle of water.</li>
            </ul>
        </div>
        <p class="note">Note: The rainbow captured on the paper may be very small, teacher may need to point out to
            children to see it.</p>
    </div>

    {{-- slide 17 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">

        <h2 class="title  stroke text-white">CLASS ACTIVITY 3</h2>
        <img src="{{ asset('assets/images/pptimages/paper.png') }}" />
        <h2 class="title  stroke text-start">Let's try: Create a raibow using a disc!</h2>
        <p class="note">Note: Teacher can try to do this activity both indoors and outdoors.</p>
    </div>

    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">

        <ul class="title stroke text-start">
            <h2>Let’s do (Outdoors):</h2>
            <li>1. Observe the ‘rainbows’ formed using disc in the
                outdoors during sunny days.</li>
        </ul>

        <img src="{{ asset('assets/images/pptimages/couple3.png') }}" />
    </div>

    {{-- slide 19 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex title  stroke  flex-col text-start  justify-center">
            <h2 class="title  stroke">Let’s do (Indoors):</h2>
            <ul class="list-decimal">
                <li> Shine the flashlight on the disc. </li>
                <li> Observe the ‘rainbows’ formed on the walls as
                    light is being reflected on the back of the disc.</li>
            </ul>
        </div>
        <img class="large-img" src="{{ asset('assets/images/pptimages/torche.png') }}" />
        <p class="note ">Note: Teacher to encourage children to share answers. Teacher can point out the shadows of the
            tree and bird.</p>
    </div>

    {{-- slide 20 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex title  stroke flex-col text-start justify-center">
            <h2 class="title  stroke">Let’s do (Indoors):</h2>
            <ul>
                <li> 3. Change the angle of the flashlights or disc and
                    observe how the shape of the ‘rainbow’change.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/torche2.png') }}" class="large-img" />
        <p class="note">Note: Teacher to guide children to observe the rainbows are formed. <br>
            Encourage them to try moving the flashlight, changing the angles when shining on the CD.</p>
    </div>

    {{-- slide 21 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <h2 class="title stroke">Let’s sing: <span class="text-white">Rainbow, Rainbow</span></h2>
        <img src="{{ asset('assets/images/pptimages/svg.png') }}" />
        <h2 class="title  stroke text-start">Here’s a song to help you remember colours on a rainbow.</h2>
        <p class="note">Note: Teacher to lead children to sing the song. Refer to notes for link to the song.</p>
    </div>

    {{-- slide 22 --}}
    <div class="flex flex-col items-center justify-center space-y-10 slide hidden">
        <h2 class="title stroke">Rainbows are formed when light is separated.</h2>
        <img src="{{ asset('assets/images/pptimages/gl8.png') }}" />
        <h2 class="title  stroke">Light is separated into seven colours- <span style="color:red;">red</span>, <span
                style="color:orange;">orange</span>, <span style="color:yellow;">yellow</span>, <span
                style="color:green;">green</span>, <span style="color:blue;">blue</span>, <span
                style="color:indigo;">indigo</span> and <span style="color:violet;">violet</span>.</h2>
    </div>

    {{-- slide 23 --}}
    <div class="flex flex-col items-center justify-center px-4 text-start slide hidden">
        <h2 class="title stroke">The seven colours form a rainbow!</h2>
        <img src="{{ asset('assets/images/pptimages/rainbow2.png') }}" class="large-img" />
    </div>





    {{-- Complete/Done Butttom --}}
    <div class="down-btn-container">
        <button class="doneButton">
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

        <button class="nextButton">
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
                    window.location.href = "{{ route('rainbowSelection') }}";
                } else {
                    // Not first slide: go back
                    showSlide(currentIndex - 1);
                }
            });

            // Done button
            doneBtn.addEventListener("click", () => {
                window.location.href = "{{ route('rainbowSelection') }}";
            });

            // Start at first slide
            showSlide(0);
        });
    </script>
@endpush
