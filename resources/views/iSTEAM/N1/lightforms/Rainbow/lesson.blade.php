@extends('layout.master')
@section('title', 'Dynamic Presentation')

@push('styles')
    <style>
        @-webkit-keyframes scale-up-hor-left {
            0% {
                -webkit-transform: scaleX(0.4);
                transform: scaleX(0.4);
                -webkit-transform-origin: 0% 0%;
                transform-origin: 0% 0%;
            }

            100% {
                -webkit-transform: scaleX(1);
                transform: scaleX(1);
                -webkit-transform-origin: 0% 0%;
                transform-origin: 0% 0%;
            }   
        }

        @keyframes scale-up-hor-left {
            0% {
                -webkit-transform: scaleX(0.4);
                transform: scaleX(0.4);
                -webkit-transform-origin: 0% 0%;
                transform-origin: 0% 0%;
            }

            100% {
                -webkit-transform: scaleX(1);
                transform: scaleX(1);
                -webkit-transform-origin: 0% 0%;
                transform-origin: 0% 0%;
            }
        }


        .gif {
            -webkit-animation: scale-up-hor-left 1s steps(5, end) infinite alternate-reverse forwards;
            animation: scale-up-hor-left 1s steps(5, end) infinite alternate-reverse forwards;
        }
    </style>
@endpush


@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Rainbows</h2>

    {{-- slide 0 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">What do you see in this picture?</h2>
        <img src="{{ asset('assets/images/pptimages/rainbow.png') }}" class="img-md" />
        <p class="note">Note: Guide children to share their answers.</p>
    </div>

    {{-- slide 1 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">There's a <span class="!text-white">rainbow</span> in the sky! <br> Do you know how are
            <span class="!text-white">rainbows</span> formed?
        </h2>
        <img src="{{ asset('assets/images/pptimages/rainbow.png') }}" class="img-md" />
        <p class="note">Note: Ask children if they have seen a rainbow in real life and share their thoughts about
            rainbows.</p>
    </div>

    {{-- slide 2 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Rainbows are formed when <span class="!text-white">light</span> shines through water
            droplets forming a <span class="!text-white">rainbow</span></h2>
        <img src="{{ asset('assets/images/pptimages/gl16.png') }}" class="img-xl" />
    </div>

    {{-- slide 3 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">The water droplet separates the <span class="!text-white">white light</span> into <span
                class="text-white">seven <span class="!text-white">colours</span></span></h2>
        <img src="{{ asset('assets/images/pptimages/gl16.png') }}" class="img-xl" alt="Light separation" />
    </div>

    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">The seven <span class="!text-white">colours</span> are <span style="color:red;">red</span>,
            <span style="color:orange;">orange</span>, <span style="color:yellow;">yellow</span>, <span
                style="color:green;">green</span>, <span style="color:blue;">blue</span>, <span
                style="color:indigo;">indigo</span> and <span style="color:violet;">violet</span>.</h2>
        <div class="relative">
            <img src="{{ asset('assets/images/pptimages/gl16.png') }}" class="img-xl" alt="Rainbow formation" />
            <img src="{{ asset('assets/images/pptimages/svgR.png') }}"
                class="absolute top-[-2vw] !left-[8vw] z-[99] w-[24vw] gif" alt="Animated rainbow" />
        </div>
    </div>

    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">This is how the <span class="!text-white">rainbows</span> are formed!</h2>
        <img src="{{ asset('assets/images/pptimages/gl16.png') }}" class="img-xl" alt="Rainbow formation" />
        <img src="{{ asset('assets/images/pptimages/svgR.png') }}" class="absolute !w-[15vw] top-[16.5vw] right-[14vw] gif2"
            alt="Rainbow graphic" />
    </div>

    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke"><span style="color:white;">Rainbows</span> can form whenever there's <span
                style="color:white;">light</span> and water! Sometimes <span style="color:white;">rainbows</span> appear
            at the fountains on a sunny day.</h2>
        <img class="!w-[35vw]" src="{{ asset('assets/images/pptimages/reflect.png') }}" alt="Fountain rainbow" />
        <p class="note">Note: Teacher can explain that there's light from the sun and water from the fountain.</p>
    </div>

    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke !text-white">CLASS ACTIVITY 1</h2>
        <img class="!w-[30vw]" src="{{ asset('assets/images/pptimages/bottle.png') }}" alt="Water bottle" />
        <h2 class="title stroke text-start"><span class="!text-white">Let's try:</span> <br> Create a rainbow in the sun</h2>
        <p class="note">Note: Teacher recap with children what are the main things needed to create a <br>rainbow (light
            and water). This shoold be done on a sunny day.</p>
    </div>

    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-between h-[30vw] slide hidden">
        <div class="title stroke text-start px-4">
            <h2 class="!text-white pl-[1vw]">Let's do:</h2>
            <ol class=" lesson-ul list-decimal">
                <li>Place white paper on the floor in the outdoors.</li>
                <li>Take a bottle of water and hold it in the sun.</li>
                <li>Observe the paper on the floor as the sunlight shines through the bottle of water.</li>
            </ol>
        </div>
        <p class="note">Note: The rainbow captured on the paper may be very small, teacher may need to point out to
            children to see it.</p>
    </div>

    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2 class="!text-white pl-[1vw]">Let's do:</h2>
            <ol class=" lesson-ul list-decimal" start="4">
                <li> Adjust the bottle in different angles until you can see a rainbow on thr ground</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/pptimages/couple.png') }}" alt="Children observing"
            class="img-xl" />
    </div>

    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke !text-white">CLASS ACTIVITY 2</h2>
        <img src="{{ asset('assets/images/pptimages/bowl.png') }}" class="!w-[30vw]"  alt="Bowl with water" />
        <h2 class="title stroke text-start"><span class="!text-white">Let's try:</span> <br> Create a rainbow using a mirror,
            water and flashlight!</h2>
        <p class="note">Note: Teacher recap with children what are the main things needed to create a rainbow (light and
            water).</p>
    </div>

    {{-- slide 11 --}}
    <div class="flex flex-col items-center justify-between h-[30vw] slide hidden">
        <div class="title stroke text-start px-4">
            <h2 class="!text-white pl-[1vw]">Let's do:</h2>
            <ol class=" lesson-ul list-decimal">
                <li>Fill half the container with water and place a mirror in it.</li>
                <li>Make sure that the mirror is placed slanted such that only half of the mirror is submerged in the water.
                </li>
                <li>Shine the flashlight onto the mirror submerged in water.</li>
            </ol>
        </div>
        <p class="note">Note: Remind children not to shine light into eyes. <br> Teacher to guide children to observe
            where the rainbow is formed when they shine the <br>flashlight on the mirror.</p>
    </div>

    {{-- slide 12 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2 class="!text-white pl-[1vw]">Let's do:</h2>
            <ol class=" lesson-ul list-decimal" start="4">
                <li>Move the flashlight and explore how a rainbow can be reformed</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/pptimages/couple2.png') }}" alt="Children experimenting"  class="img-xl"/>
    </div>

    {{-- slide 13 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/pptimages/cds.png') }}" class="img-md" alt="CDs/Discs" />
        <h2 class="title stroke">Do you know what these are?</h2>
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>

    {{-- slide 14 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">These are discs. They are shiny and reflective!</h2>
        <img src="{{ asset('assets/images/pptimages/cds.png') }}" class="!w-[30vw]" alt="Discs" />
        <h2 class="title stroke">Like water, the shiny disc separates <span class="!text-white">light</span> into seven <span
                class="text-white">colours</span>.</h2>
        <p class="note">Note: Teacher can pass a few CDs around the class and let children have a closer look at it.</p>
    </div>

    {{-- slide 15 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/pptimages/cds.png') }}" class="img-md" alt="Discs with rainbow colors" />
        <h2 class="title stroke">Can you see <span class="!text-white">rainbows</span> on the disc?</h2>
        <p class="note">Note: Teacher can guide children to observe and share what <span
                class="text-white">colours</span> they see on the disc.</p>
    </div>

    {{-- slide 16 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke !text-white">CLASS ACTIVITY 3</h2>
        <img src="{{ asset('assets/images/pptimages/paper.png') }}" alt="Paper and disc" class="!w-[30vw]" />
        <h2 class="title stroke text-start"><span class="!text-white">Let's try:</span> <br> Create a rainbow using a disc!
        </h2>
        <p class="note">Note: Teacher can try to do this activity both indoors and outdoors.</p>
    </div>

    {{-- slide 17 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2 class="!text-white pl-[1vw]">Let's do (Outdoors):</h2>
            <ol class=" lesson-ul list-decimal">
                <li>Observe the 'rainbows' formed using disc in the outdoors during sunny days.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/pptimages/couple3.png') }}" alt="Outdoor activity" class="img-xl" />
    </div>

    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2 class="!text-white pl-[1vw]">Let's do (Indoors):</h2>
            <ol class=" lesson-ul list-decimal">
                <li>Shine the flashlight on the disc.</li>
                <li>Observe the 'rainbows' formed on the walls as light is being reflected on the back of the disc.</li>
            </ol>
        </div>
        <img  src="{{ asset('assets/images/pptimages/torche.png') }}" class="img-sm"
            alt="Indoor flashlight activity" />
        <p class="note">Note: Teacher to encourage children to share answers.</p>
    </div>

    {{-- slide 19 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2 class="!text-white pl-[1vw]">Let's do (Indoors):</h2>
            <ol class=" lesson-ul list-decimal" start="3">
                <li>Change the angle of the flashlights or disc and observe how the shape of the 'rainbow' changes.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/pptimages/torche2.png') }}" class="img-sm"  alt="Changing angles" />
        <p class="note">Note: Teacher to guide children to observe the rainbows are formed. <br>
            Encourage them to try moving the flashlight, changing the angles when shining on the CD.</p>
    </div>

    {{-- slide 20 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke"><span class="!text-white">Let's sing:</span> Rainbow, Rainbow</h2>
        <img src="{{ asset('assets/images/pptimages/svg.png') }}" alt="Rainbow song" class="!w-[30vw]" />
        <h2 class="title stroke text-start">Here's a song to help you remember <span class="!text-white">colours</span> on
            a <span class="!text-white">rainbow</span>.</h2>
        <p class="note">Note: Teacher to lead children to sing the song. Refer to notes for link to the song.</p>
    </div>

    {{-- slide 21 --}}
    <div class="flex flex-col items-center justify-center space-y-10 slide hidden">
        <h2 class="title stroke">Rainbows are formed when light is separated.</h2>
        <div class="relative">
            <img src="{{ asset('assets/images/pptimages/gl16.png') }}" class="img-xl" alt="Rainbow formation" />
            <img src="{{ asset('assets/images/pptimages/svgR.png') }}"
                class="absolute top-[-2vw] !left-[8vw] z-[99] w-[24vw] gif" alt="Animated rainbow" />
        </div>
        <h2 class="title stroke">Light is separated into seven <span class="!text-white">colours</span>- <span
                style="color:red;">red</span>, <span style="color:orange;">orange</span>, <span
                style="color:yellow;">yellow</span>, <span style="color:green;">green</span>, <span
                style="color:blue;">blue</span>, <span style="color:indigo;">indigo</span> and <span
                style="color:violet;">violet</span>.</h2>
    </div>

    {{-- slide 22 --}}
    <div class="flex flex-col items-center justify-center px-4 text-start slide hidden">
        <img src="{{ asset('assets/images/pptimages/rainbow2.png') }}" class="img-h-md" alt="Complete rainbow" />
        <h2 class="title stroke">The seven <span class="!text-white">colours</span> form a rainbow!</h2>
    </div>






    {{-- ===================== --}}
    {{-- Complete/Done Button --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" alt="Done" />
        </button>
    </div>

    {{-- Buttons --}}
    <div id="buttons" class="absolute flex flex-row">
        <!-- Return Button -->
        <a id="returnButton">
            <img src="{{ asset('assets/images/pptimages/return.png') }}" alt="Return" />
        </a>

        <!-- Home Button -->
        <button id="homeButton">
            <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" alt="Home" />
        </button>

        <!-- Close Button -->
        <button id="closeButton">
            <img src="{{ asset('assets/images/pptimages/cancel.png') }}" alt="Close" />
        </button>
    </div>

    {{-- Next Button --}}
    <div class="down-btn-container">
        <button class="nextButton">
            <img src="{{ asset('assets/images/pptimages/next-btn.png') }}" alt="Next" />
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
                window.location.href = "{{ route('lightforms') }}";
            });

            // Start at first slide
            showSlide(0);
        });
    </script>
@endpush
