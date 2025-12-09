@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">How Plants Grow?</h2>

    {{-- Slide 1 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p1.png') }}" class="img-md" />
        <h2 class="title stroke">Children, what are these?</h2>
    </div>


    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/pp.png') }}" class="img-lg" alt="Different Plants" />
        <h2 class="title stroke">These are different <span class="!text-white">plants</span>.</h2>
    </div>

    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p2.png') }}" class="img-h-md" alt="Growing Plants" />
        <h2 class="title stroke">Have you ever <span class="!text-white">grown</span> a <span
                class="text-white">plant?</span> How does it change?</h2>
        <p class="note">Note: Encourage children to share their knowledge and experience.</p>
    </div>

    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">Today, we are going to learn how to <span class="!text-white">grow</span> a <span
                class="text-white">plant</span> from a <span class="!text-white">seed</span>!</h2>
    </div>

    {{-- Slide5 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="text-center justify-start text-[45px] !text-white stroke">Individual Activity</h2>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p3.png') }}" class="img-xs" alt="Activity Materials" />
        <h2 class="text-start title stroke"> <span class="!text-white">Let's find out:</span> <br>
            How to grow a plant from a seed? <br> How does a seed grow in a bag?</h2>
        <p class="note">Note: Display all the things needed and have children name each. Introduce the chosen seeds, have
            children observe their colour, shape and size. At last, give each child a set of things needed.</p>
    </div>

    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="title stroke text-start">
            <h2 class="!text-white">Let's do:</h2>
            <ol class="lesson-ul list-decimal">
                <li>Write the name of the seed, today's date and your name on a label.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p4.png') }}" class="!w-[35vw]" alt="Step 1" />
        <p class="note text-center">Note: Help to apply 2 dots of glue with a gap in between roughly at the middle of
            the paper towel for each child.</p>
    </div>

    {{-- Slide 7  --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start title stroke">
            <h2 class="!text-white">Let's do:</h2>
            <ol class="list-decimal lesson-ul" start="2">
                <li>Put a seed on each of the glue dot on the paper towel and allow the glue dry.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p5.png') }}" class="img-md" alt="Step 2" />
    </div>

    {{-- Slide 8  --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start title stroke">
            <h2 class="!text-white">Let's do:</h2>
            <ol class="list-decimal lesson-ul" start="3">
                <li>Put the paper towel into a zipper storage bag and spray water to wet the paper towel.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p6.png') }}" class="img-md" alt="Step 3" />
    </div>

    {{-- Slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="title stroke text-start">
            <h2 class="!text-white">Let's do:</h2>
            <ol class="list-decimal lesson-ul" start="4">
                <li>Leave about 1cm extra water at the bottom of the bag and seal the bag.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p7.png') }}" class="img-md" alt="Step 4" />
    </div>


    {{-- slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="title stroke text-start">
            <h2 class="!text-white">Let's do:</h2>
            <ol class="list-decimal lesson-ul" start="5">
                <li>Label the bag and tape it to a sunny window.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p8.png') }}" class="img-md" alt="Step 5" />
    </div>

    {{-- slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="title stroke text-start">
            <h2 class="!text-white">Let's do:</h2>
            <ol class="list-decimal lesson-ul" start="6">
                <li>Use the learning journal to record your observations.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p9.png') }}" class="img-lg" alt="Step 6" />
        <p class="note">Note: Have children draw the current look of the seeds and write down today's date.
            Remind them to check on the seeds every day for at least a week and record their observations.</p>
    </div>


    {{-- slide 12 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <h2 class="title stroke">Now, we are going to learn how to <br>
            regrow green onions together!</h2>
    </div>


    {{-- slide 13 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="text-center justify-start title !text-white stroke">Class Activity</h2>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p10.png') }}" alt="Green Onions" class="img-xl" />

        <h2 class="text-start title stroke"><span class="!text-white">Let's find out:</span> <br>
            How to regrow green onions? How tall do they grow after a week?</h2>
        <p class="note">Note: Display a bunch of green onions, have children name the parts.</p>
    </div>

    {{-- Slide 14 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="title stroke text-start">
            <h2 class="!text-white">Let's do:</h2>
            <ol class="list-decimal lesson-ul">
                <li>Cut off the green leaves of the green onions.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p11.png') }}" class="img-xl" />
        <p class="note text-center">Note: Tell children that the green leaves will be used to garnish their food today.</p>
    </div>


    {{-- Slide 15 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="title stroke text-start">
            <h2 class="!text-white">Let's do:</h2>
            <ol class="list-decimal lesson-ul" start="2">
                <li>Place the remaining green onions with roots in a transparent
                    container filled with some water.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p12.png') }}" class="!w-[30vw]" alt="Place in Water" />
        <p class="note text-center">Note: Be sure that only roots and partial of the white stems are in the water.</p>
    </div>


    {{-- Slide 16 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="title stroke text-start">
            <h2 class="!text-white">Let's do:</h2>
            <ol class="list-decimal lesson-ul" start="3">
                <li>Place the container near a sunny window.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p12.png') }}" class="!w-[30vw]" alt="Sunny Window" />
    </div>



    {{-- Slide 17 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="title stroke text-start">
            <h2 class="!text-white">Let's do:</h2>
            <ol class="list-decimal lesson-ul" start="4">
                <li>Use the learning journal to record your observations.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p13.png') }}" class="img-lg"
            alt="Record Observations" />
        <p class="note text-center">Note: Have children draw the current look of the green onions and write down today's
            date. <br>
            Remind them to check on the green onions every day for a week and record their observations after a week
            (encourage them to measure and record the heights).</p>
    </div>


    {{-- slide 18 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p14.png') }}" class="img-xl" />
    </div>

    {{-- slide 19 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p15.png') }}" class="img-xl" />
    </div>



    {{-- ====================================== --}}
    {{-- Complete/Done Butttom --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>


    {{-- Buttons --}}
    <div id="buttons" class="absolute flex flex-row ">
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
                    window.location.href = "{{ route('PgrowSelection') }}";
                } else {
                    // Not first slide: go back
                    showSlide(currentIndex - 1);
                }
            });
            // Done button
            doneBtn.addEventListener("click", () => {
                window.location.href = "{{ route('k2livingthings') }}";
            });
            // Start at first slide
            showSlide(0);
        });
    </script>
@endpush
