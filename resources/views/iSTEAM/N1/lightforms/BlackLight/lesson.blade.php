@extends('layout.master')

@section('title', 'Dynamic Presentation')


@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Back Light</h2>

    {{-- slide 0 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Do you remember these <span class="!text-white">glow-in-the-dark</span> toys?</h2>
        <img src="{{ asset('assets/images/pptimages/dark1.png') }}" class="img-md" />
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>

    {{-- slide 1 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title stroke">These toys <span class="!text-white">store light energy</span> and <span
                    class="text-white">glow</span> when
                they are in a <span class="!text-white">dark</span> palce.</h2>
            <img src="{{ asset('assets/images/pptimages/dark2.png') }}" class="img-md" />
        </div>
        <p class="note">Note: Encourage children to recap what they did previously.</p>
    </div>

    {{-- slide 2 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Look at these items, they are <span class="!text-white">bright</span> in
            colours. Do they look like they are <span class="!text-white">glowing</span>?</h2>

        <img src="{{ asset('assets/images/pptimages/bl1.png') }}" class="img-md" />
    </div>

    {{-- slide 3 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">These <span class="!text-white">bright</span> colours are known as <span
                class="text-white">neon</span> colours.</h2>
        <img src="{{ asset('assets/images/pptimages/bl1.png') }}" class="img-md" />
    </div>

    {{-- slide 4 --}}
    <div class="flex flex-col justify-center slide hidden !gap-[1vw]">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title !text-white stroke">CLASS ACTIVITY 1</h2>
            <img src="{{ asset('assets/images/pptimages/bl1.png') }}" class="img-sm" />
        </div>
        <div class="flex flex-col items-start">
            <h2 class="title stroke text-start"><span class="!text-white">Let's try:</span><br> Will the neon coloured items
                glow in the <span class="!text-white">dark</span>?
            </h2>
            <p class="note ">Note: Encourage children to share their views and findings after trying this short activity.
            </p>
        </div>
    </div>

    {{-- slide 5 --}}
    <div class="flex flex-col  slide hidden h-[45vh] justify-between items-center">
        <div class="title stroke text-start">
            <h2 class="!text-white">let's do:</h2>
            <ul class="list-decimal lesson-ul   ">
                <li>Switch off the lights.</li>
                <li>Discuss as a class:</li>
                <ul class="list-disc   ml-6 space-y-1">
                    <li>How does the items look?</li>
                    <li>Are they still bright?</li>
                    <li>How can we make it glow?</li>
                </ul>
            </ul>
        </div>
        <p class="note  text-center">Note: Teacher to explain that these <span class="!text-white">neon</span> coloured items
            are not the same as the glow
            in the <span class="!text-white">dark</span> items.
        </p>
    </div>

    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Although the <span class="!text-white">neon</span> coloured items look like
            they are <span class="!text-white">glowing</span>, they do not <span class="!text-white">glow</span> in the <span
                class="text-white">dark</span>.</h2>
        <img src="{{ asset('assets/images/pptimages/bl2.png') }}" class="img-lg" />
    </div>

    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">This special flashlight can make the <span class="!text-white">neon</span>
            coloured items look like they are <span class="!text-white">glowing</span> in the <span
                class="text-white">dark</span>.</h2>
        <img src="{{ asset('assets/images/pptimages/bl3.png') }}" class="img-lg" />
    </div>

    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">This is a <span class="!text-white">black light flashlight</span>. the <span
                class="text-white">light</span> is blue
            in colour. It is different from the usual flashlight.</h2>
        <img src="{{ asset('assets/images/pptimages/bl3.png') }}" class="img-lg" />
    </div>

    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">When the <span class="!text-white">neon</span> coloured items are placed
            under<span class="!text-white"> black light</span>, they <span class="!text-white">glow brightly</span>.</h2>
        <img src="{{ asset('assets/images/pptimages/bl4.png') }}" class="img-lg" />
    </div>


    <span class="!text-white">
    </span>{{-- slide 10 --}}
    <div class="flex flex-col justify-center slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title !text-white stroke">CLASS ACTIVITY 2</h2>
            <img src="{{ asset('assets/images/pptimages/bl5.png') }}" class="img-md" />
        </div>
        <div class="flex items-start">
            <h2 class="title stroke text-start"><span class="!text-white">Let's try:</span><br> Make a black light
                flashlight.</h2>
        </div>
    </div>

    {{-- slide 11 --}}
    <div class="flex flex-col slide hidden items-center justify-between h-[28vw]">
        <div class="title stroke text-start">
            <h2 class="!text-white">let's do:</h2>
            <ol class="list-decimal lesson-ul ">
                <li>Choose the cellophane paper that will give a light similar to a black light.</li>
                <li>Put it on the front of a normal flashlight. Is the colour of the light same as the light from the black
                    light flash light?</li>
                <li>Shine the light at some neon coloured items in the black box. Do the items glow?</li>
            </ol>
        </div>
        <p class="note  text-center">Note: Teacher to assist children in creating the flashlight. Provide cellophane paper
            of different
            colours and encourage children to try to create their own black light to make neon items glow. </p>
    </div>

    {{-- slide 12 --}}
    <div class="flex flex-col slide hidden items-center justify-between h-[28vw]">
        <div class="title stroke text-start">
            <h2 class="!text-white">let's do:</h2>
            <ol class="list-decimal lesson-ul space-y-3" start="4">
                <li>Use the black light and shine on the items. Now use the black light which you have made and shine on the
                    item too.</li>
                <li>Does it work? How does the items look?</li>
                <li>Change the cellophane paper if your black light does not work.</li>
            </ol>
        </div>
        <p class="note  text-center">Note: Teacher to guide children on this and remind them not to shine light
            into their eyes. </p>
    </div>


    {{-- slide 13 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Look at these Halloween crafts! <span class="!text-white">Neon</span>
            coloured materials are often used for Halloween crafts.</h2>
        <img src="{{ asset('assets/images/pptimages/bl6.png') }}" class="img-lg" />
    </div>

    {{-- slide 14 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke"><span class="!text-white">Black light</span> are often used during Halloween!
            The <span class="!text-white">lights</span> make the Halloween decorations <span class="!text-white">glow
                brightly</span>.</h2>
        <img src="{{ asset('assets/images/pptimages/bl7.png') }}" class="img-lg" />
    </div>



    {{-- slide 15 --}}
    <div class="flex flex-col justify-center slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title !text-white stroke">CLASS ACTIVITY 3</h2>
            <img src="{{ asset('assets/images/pptimages/bl6.png') }}" class="img-lg" />
        </div>
        <div class="flex items-start">
            <h2 class="title stroke text-start"><span class="!text-white">Let's try:</span><br>Prepare for Halloweeen</h2>
        </div>
        <p class="note  text-center">Note: Encourage children to decide what to create. This activity spreads over 2-3
            lessons.</p>
    </div>


    {{-- slide 16 --}}
    <div class="flex flex-col slide hidden items-center justify-between h-[28vw]">
        <div class="title stroke text-start">
            <h2 class="!text-white">let's do:</h2>
            <ol class="list-decimal lesson-ul space-y-3">
                <li>Discuss as a class on the characters and items that appear during Halloween. (E.g. witches, ghost,
                    pumpkins etc)</li>
                <li>Use the black light and explore with the materials such as paper plate, stripes of cloth, paper,
                    ribbons, highlighter, glow sticks and paint.</li>
                <li>Share ideas on how the materials can be used to create the characters/items to decorate the classroom
                    for Halloween party.</li>
            </ol>
        </div>
        <p class="note  text-center">Note: Teacher to provide a range of neon and regolar coloured materials for
            children to explore.</p>
    </div>


    {{-- slide 17 --}}
    <div class="flex flex-col slide hidden items-center justify-between h-[28vw]">
        <div class="title stroke text-start">
            <h2 class="!text-white">let's do:</h2>
            <ol class=" list-decimal lesson-ul space-y-3" start="4">
                <li>Use the materials provided to create the select Halloween characters and decorate the class.</li>
                <li>Place the craft in a place where the black light can shine on it.</li>
            </ol>
        </div>
        <p class="note  text-center">Note: Guide children on creating the craft. Make a display box. Paint the inside
            black.
            Make two-three holes on top to put the black light flashlight in such that it
            will shine downwards on the children's creation.</p>
    </div>


    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Black light helps neon colour items
            <span class="!text-white">glow</span> in the <span class="!text-white">dark</span>.
        </h2>
        <img src="{{ asset('assets/images/pptimages/bl4.png') }}" class="img-lg" />
    </div>


    {{-- ===================== --}}
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
                window.location.href = "{{ route('lightforms') }}";
            });

            // Start at first slide
            showSlide(0);
        });
    </script>
@endpush
