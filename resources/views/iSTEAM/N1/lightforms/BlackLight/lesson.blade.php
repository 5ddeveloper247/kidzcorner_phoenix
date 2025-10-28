@extends('layout.master')

@section('title', 'Dynamic Presentation')


@section('content')
    {{-- title --}}
    <h2 class="title !text-[3vw] top-title stroke absolute top-[5vh] z-[100]">Back Light</h2>

    {{-- slide 0 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Do you remember these glow-in-the-dark toys?</h2>
        <img src="{{ asset('assets/images/pptimages/dark1.png') }}" class="large-img2" />
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>

    {{-- slide 1 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title stroke">These toys store light energy and glow when
                they are in a dark palce.</h2>
            <img src="{{ asset('assets/images/pptimages/dark2.png') }}" class="large-img2" />
        </div>
        <p class="note">Note: Encourage children to recap what they did previously.</p>
    </div>

    {{-- slide 2 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Look at these items, they are bright in
            colours. Do they look like they are glowing?</h2>

        <img src="{{ asset('assets/images/pptimages/bl1.png') }}" class="large-img2" />
    </div>

    {{-- slide 3 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">These bright colours are known as neon colours.</h2>
        <img src="{{ asset('assets/images/pptimages/bl1.png') }}" class="large-img2" />
    </div>

    {{-- slide 4 --}}
    <div class="flex flex-col justify-center slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title !text-white">CLASS ACTIVITY 1</h2>
            <img src="{{ asset('assets/images/pptimages/bl1.png') }}" class="large-img2" />
        </div>
        <div class="flex items-start">
            <h2 class="title stroke text-start">Let's try:<br> Will the neon coloured items glow in the dark?
            </h2>
        </div>
        <p class="note ">Note: Encourage children to share their views and findings after trying this short activity.</p>
    </div>

    {{-- slide 5 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class="list-decimal list-inside ">
                <li>Switch off the lights.</li>
                <li>Discuss as a class:</li>
                <ul class="list-disc list-inside ml-6 space-y-1">
                    <li>How does the items look?</li>
                    <li>Are they still bright?</li>
                    <li>How can we make it glow?</li>
                </ul>
            </ul>
        </div>
        <p class="note  text-center">Note: Teacher to explain that these neon coloured items are not the same as the glow
            in the dark items.
        </p>
    </div>

    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Although the neon coloured items look like
            they are glowing, they do not glow in the dark.</h2>
        <img src="{{ asset('assets/images/pptimages/bl2.png') }}" class="large-img2" />
    </div>

    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">This special flashlight can make the neon
            coloured items look like they are glowing in the dark.</h2>
        <img src="{{ asset('assets/images/pptimages/bl3.png') }}" class="large-img2" />
    </div>

    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">This is a black light flashlight. the light is blue
            in colour. It is different from the usual flashlight.</h2>
        <img src="{{ asset('assets/images/pptimages/bl3.png') }}" class="large-img2" />
    </div>

    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">When the neon coloured items are placed
            under black light, they glow brightly.</h2>
        <img src="{{ asset('assets/images/pptimages/bl4.png') }}" class="large-img2" />
    </div>



    {{-- slide 10 --}}
    <div class="flex flex-col justify-center slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title !text-white">CLASS ACTIVITY 2</h2>
            <img src="{{ asset('assets/images/pptimages/bl5.png') }}" class="large-img2" />
        </div>
        <div class="flex items-start">
            <h2 class="title stroke text-start">Let's try:<br> Make a black light flashlight.</h2>
        </div>
    </div>

    {{-- slide 11 --}}
    <div class="flex flex-col slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class="list-decimal list-inside ">
                <li>Choose the cellophane paper that will give a light similar to a black light.</li>
                <li>Put it on the front of a normal flashlight. Is the colour of the light same as the light from the black
                    light flash light?</li>
                <li>Shine the light at some neon coloured items in the black box. Do the items glow?</li>
            </ul>
        </div>
        <p class="note  text-center">Note: Teacher to assist children in creating the flashlight. Provide cellophane paper
            of different
            colours and encourage children to try to create their own black light to make neon items glow. </p>
    </div>

    {{-- slide 12 --}}
    <div class="flex flex-col slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class="list-decimal list-inside ">
                <li>Use the black light and shine on the items. Now use the black light which you have made and shine on the
                    item too.</li>
                <li>Does it work? How does the items look?</li>
                <li>Change the cellophane paper if your black light does not work.</li>
            </ul>
        </div>
        <p class="note  text-center">Note: Teacher to guide children on this and remind them not to shine light
            into their eyes. </p>
    </div>


    {{-- slide 13 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Look at these Halloween crafts! Neon
            coloured materials are often used for Halloween crafts.</h2>
        <img src="{{ asset('assets/images/pptimages/bl6.png') }}" class="large-img2" />
    </div>

    {{-- slide 14 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Black light are often used during Halloween!
            The lights make the Halloween decorations glow brightly.</h2>
        <img src="{{ asset('assets/images/pptimages/bl7.png') }}" class="large-img2" />
    </div>



    {{-- slide 15 --}}
    <div class="flex flex-col justify-center slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title !text-white">CLASS ACTIVITY 2</h2>
            <img src="{{ asset('assets/images/pptimages/bl6.png') }}" class="large-img2" />
        </div>
        <div class="flex items-start">
            <h2 class="title stroke text-start">Let's try:<br>Prepare for Halloweeen</h2>
        </div>
        <p class="note  text-center">Note: Encourage children to decide what to create. This activity spreads over 2-3
            lessons.</p>
    </div>


    {{-- slide 16 --}}
    <div class="flex flex-col slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class="list-decimal list-inside ">
                <li>Discuss as a class on the characters and items that appear during Halloween. (E.g. witches, ghost,
                    pumpkins etc)</li>
                <li>Use the black light and explore with the materials such as paper plate, stripes of cloth, paper,
                    ribbons, highlighter, glow sticks and paint.</li>
                <li>Share ideas on how the materials can be used to create the characters/items to decorate the classroom
                    for Halloween party.</li>
            </ul>
        </div>
        <p class="note  text-center">Note: Teacher to provide a range of neon and regular coloured materials for
            children to explore.</p>
    </div>


    {{-- slide 17 --}}
    <div class="flex flex-col slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class=" list-inside ">
                <li>4. Use the materials provided to create the select Halloween characters and decorate the class.</li>
                <li>5. Place the craft in a place where the black light can shine on it.</li>
            </ul>
        </div>
        <p class="note  text-center">Note: Guide children on creating the craft. Make a display box. Paint the inside black.
            Make two-three holes on top to put the black light flashlight in such that it
            will shine downwards on the children's creation.</p>
    </div>


    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Black light helps neon colour items
            glow in the dark.</h2>
        <img src="{{ asset('assets/images/pptimages/bl4.png') }}" class="large-img2" />
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
                    window.location.href = "{{ route('blacklightSelection') }}";
                } else {
                    // Not first slide: go back
                    showSlide(currentIndex - 1);
                }
            });

            // Done button
            doneBtn.addEventListener("click", () => {
                window.location.href = "{{ route('blacklightSelection') }}";
            });

            // Start at first slide
            showSlide(0);
        });
    </script>
@endpush
