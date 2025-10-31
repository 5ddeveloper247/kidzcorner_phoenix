@extends('layout.master')
@section('title', 'Dynamic Presentation')


@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Glow in the Dark</h2>

    {{-- slide 0 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <h2 class="title stroke">What do you see in this picture?</h2>
        <img src="{{ asset('assets/images/pptimages/dark1.png') }}" class="large-img2" />
        <p class="note">Note: Guide children to share their answers.</p>
    </div>

    {{-- slide 1 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <h2 class="title stroke">Do you see toys that are shaped like
            the moon and stars?</h2>
        <img src="{{ asset('assets/images/pptimages/dark1.png') }}" class="large-img2" />
        <p class="note">Note: Ask children if they have played with such toys and share their experience.</p>
    </div>

    {{-- slide 2 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <h2 class="title stroke">These are <span class="text-white">glow-in-the-dark</span> toys! <br>
            Have you seen such toys before?</h2>
        <img src="{{ asset('assets/images/pptimages/dark1.png') }}" class="large-img2" />

        <p class="note">Note: Ask children if they have played with such toys and share their experience.</p>
    </div>

    {{-- slide 3 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <h2 class="title stroke">These toys are able to store light energy when
            they are in a bright place.</h2>
        <img src="{{ asset('assets/images/pptimages/dark1.png') }}" class="large-img2" />

        <p class="note">Note: Ask children if they have played with such toys and share their experience.</p>
    </div>


    {{-- slide 3 --}}
    <div class="flex flex-col items-center justify-center gap-2 slide hidden">
        <h2 class="title stroke">When these toys are place in the dark,
            they glow!</h2>
        <img src="{{ asset('assets/images/pptimages/dark2.png') }}" class="large-img2" />

        <h2 class="title stroke !text--[30px]">They will stop glowing when they have used up the
            light energy in them.</h2>
    </div>



    {{-- slide 4 --}}
    <div class="flex flex-col justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title stroke !text-white">CLASS ACTIVITY </h2>
            <img src="{{ asset('assets/images/pptimages/dark3.png') }}" class="large-img2" />
        </div>
        <div class="flex items-start">

            <h2 class="title stroke text-start">Let's try: <br> Can it glow?</h2>
        </div>
        <p class="note ">Note: Teacher to include toys that do not glow in the group. Encourage children to choose toys .
        </p>
    </div>



    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start px-4">
            <h2>let's do:</h2>
            <ul class="list-decimal">
                <li>Look at the toys and make a guess which one will glow in the dark.</li>
                <li>Put the toys in the black box.</li>
                <li>Switch off the lights and peek in the box</li>
            </ul>
        </div>
    </div>

    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center gap-3 slide hidden">

        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul>
                <li>4. Draw the toys that glow in the dark on the learning journal.</li>
            </ul>
        </div>
        <div class="w-[40vw] h-[40vh] bg-cover bg-center bg-size-[35vw] "
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p class="text-[1vw] ">Draw the items that glow in the dark!</p>
        </div>
    </div>

    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center gap-3 slide hidden">
        <div class=" flex gap-10  ">
            <div class="flex flex-col items-center justify-center">
                <h2 class="title stroke">Clock</h2>
                <img src="{{ asset('assets/images/pptimages/d5.png') }}" class="large-img" />
            </div>
            <div class="flex flex-col items-center justify-center">
                <h2 class="title stroke">Watch</h2>
                <img src="{{ asset('assets/images/pptimages/d6.png') }} " class="large-img" />
            </div>
        </div>
        <h2 class="title stroke">Some clocks and watches have parts that glow in the dark.</h2>
        <p class="note ">Note: Teacher can show children such clocks and watches too.</p>
    </div>


    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center gap-3 slide hidden">
        <div class=" flex gap-10  ">
            <div class="flex flex-col items-center justify-center">
                <h2 class="title stroke">Clock</h2>
                <img src="{{ asset('assets/images/pptimages/d7.png') }}" class="large-img" />
            </div>
            <div class="flex flex-col items-center justify-center">
                <h2 class="title stroke">Watch</h2>
                <img src="{{ asset('assets/images/pptimages/d8.png') }} " class="large-img" />
            </div>
        </div>
        <h2 class="title stroke">With the glow-in-the-dark parts, it is easy to tell the
            items in the dark.</h2>
    </div>


    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center gap-3 slide hidden">
        <div class=" flex gap-10  ">
            <img src="{{ asset('assets/images/pptimages/d10.png') }} " class="large-img" />
            <img src="{{ asset('assets/images/pptimages/d9.png') }}" class="large-img" />
        </div>
        <h2 class="title stroke">Look at the pictures. What are they?</h2>
        <p class="note ">Note: Encourage children to share their answers.</p>
    </div>

    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center gap-3 slide hidden">
        <div class=" flex gap-10  ">
            <div class="flex flex-col items-center justify-center">
                <h2 class="title stroke">FireFly</h2>
                <img src="{{ asset('assets/images/pptimages/d10.png') }}" class="large-img" />
            </div>
            <div class="flex flex-col items-center justify-center">
                <h2 class="title stroke">Jellyfish</h2>
                <img src="{{ asset('assets/images/pptimages/d9.png') }} " class="large-img" />
            </div>
        </div>
        <h2 class="title stroke">The firefly and the jellyfish can glow in the dark too.</h2>
    </div>

    {{-- slide 11 --}}
    <div class="flex flex-col items-center justify-center gap-3 slide hidden">
        <div class=" flex gap-10  ">
            <div class="flex flex-col items-center justify-center">
                <h2 class="title stroke">FireFly</h2>
                <img src="{{ asset('assets/images/pptimages/d12.png') }}" class="large-img" />
            </div>
            <div class="flex flex-col items-center justify-center">
                <h2 class="title stroke">Jellyfish</h2>
                <img src="{{ asset('assets/images/pptimages/d11.png') }} " class="large-img" />
            </div>
        </div>
        <h2 class="title stroke">The firefly and the jellyfish can glow in the dark too.</h2>
    </div>


    {{-- slide 12 --}}
    <div class="flex flex-col justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title stroke !text-white">Individual Activity </h2>
            <img src="{{ asset('assets/images/pptimages/d13.png') }}" class="large-img2" />
        </div>
        <div class="flex items-start">

            <h2 class="title stroke text-start">Let's try: <br>
                Make a glow in the dark jar/bottle</h2>
        </div>
        <p class="note ">Note: Teacher to assist children in creating the craft. </p>
    </div>


    {{-- slide 13 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start px-4">
            <h2>let's do:</h2>
            <ul class="list-decimal">
                <li>Make a glow in the dark jar/bottle with the stickers and paint.</li>
                <li>Paint on the inside of the bottle and paste stickers on the outside.</li>
            </ul>
            <img src="{{ asset('assets/images/pptimages/d14.png') }}" class="large-img float-right" />
        </div>
        <p class="note ">Note: Teacher to assist children with the materials, especially if glass jars are used.</p>
    </div>


    {{-- slide 14 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start px-4">
            <h2>let's do:</h2>
            <ul>
                <li>3. Close the jar/bottle.</li>
                <li>4. Switch off the lights in the class and get look at everyone’s jar/bottles.</li>
            </ul>
            <img src="{{ asset('assets/images/pptimages/d15.png') }}" class="large-img float-right" />
        </div>
        <p class="note ">Note: Teacher to assist children with the materials, especially if glass jars are used.</p>
    </div>


    {{-- slide 15 --}}
    <div class="flex flex-col items-center justify-center gap-3 slide hidden">
        <div class=" flex gap-10  ">
            <img src="{{ asset('assets/images/pptimages/dark1.png') }} " class="large-img" />
            <img src="{{ asset('assets/images/pptimages/d14.png') }}" class="large-img" />
        </div>
        <h2 class="title stroke"> <span class="text-white">Glow-in-the-dark</span> items store
            <span class="text-white">light energy</span> when they are placed in a bright
            <span class="text-white">place</span>.
        </h2>
    </div>


    {{-- slide 16 --}}
    <div class="flex flex-col items-center justify-center gap-3 slide hidden">
        <div class=" flex gap-10  ">
            <img src="{{ asset('assets/images/pptimages/dark2.png') }} " class="large-img" />
            <img src="{{ asset('assets/images/pptimages/d15.png') }}" class="large-img" />
        </div>
        <h2 class="title stroke"> When it’s dark, the Glow-in-the-dark items will glow brightly
            until all the light energy is used up.</h2>
    </div>

    {{-- slide 17 --}}
    <div class="flex flex-col items-center justify-center gap-3 slide hidden">
        <div class=" flex gap-10  ">
            <img src="{{ asset('assets/images/pptimages/d10.png') }} " class="large-img" />
            <img src="{{ asset('assets/images/pptimages/d9.png') }}" class="large-img" />
        </div>
        <h2 class="title stroke">Besides toys, fireflies and jellyfish can glow in the
            dark too!<h2>
    </div>


    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">

        <h2 class="title stroke stroke">Learning Journal </h2>
        <div class="w-[40vw] h-[40vh] bg-cover bg-center bg-size-[35vw] "
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p class="text-[1vw] ">Draw the items that glow in the dark!</p>

        </div>

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
                    window.location.href = "{{ route('darkSelection') }}";
                } else {
                    // Not first slide: go back
                    showSlide(currentIndex - 1);
                }
            });

            // Done button
            doneBtn.addEventListener("click", () => {
                window.location.href = "{{ route('darkSelection') }}";
            });

            // Start at first slide
            showSlide(0);
        });
    </script>
@endpush
