@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Tomato DNA</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-[1vw] ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/td1.png') }}" class="large-img6" />
        <div class="title stroke">
            <h2>Children, do you still remember how to extract DNA from
                one's mouth? What does DNA look like?</h2>
        </div>
        <p class="note text-center">Note: Encourage children to recall and share what they have learnt.</p>
    </div>



    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/livingthings/dna/d21.png') }}" class="w-img" />
        <h2 class="title stroke">What is DNA? Where is our DNA?</h2>
        <p class="note">Note: Guide children to recap the points learnt [1. Like a set of building bricks will form an
            object correctly
            based on its instruction manual, every living thing has its own instruction manual called DNA that guide them on
            how to form and work correctly. 2. Living things are made up of cells and DNA is stored in the cells.]</p>
    </div>


    {{-- Slide3 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-center gap-[1vw]">
            <div class="flex flex-col items-center gap-[1vw]">
                <img src="{{ asset('assets/images/K2/livingthings/dna/d12.png') }}" class="w-img" />
                <img src="{{ asset('assets/images/K2/livingthings/dna/d18.png') }}" class="w-img" />
            </div>
            <img src="{{ asset('assets/images/K2/livingthings/dna/d21.png') }}" />
        </div>
        <h2 class="title stroke text-center">These are the chemicals used to extract our DNA.
            Can you name them?</h2>
        <p class="note">Note: Explain to children that chemicals are things will cause changes/chemical reactions.</p>
    </div>

    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-center gap-[1vw]">
            <div class="flex flex-col items-center gap-[1vw]">
                <img src="{{ asset('assets/images/K2/livingthings/dna/d12.png') }}" class="w-img" />
                <img src="{{ asset('assets/images/K2/livingthings/dna/d18.png') }}" class="w-img" />
            </div>
            <img src="{{ asset('assets/images/K2/livingthings/dna/d21.png') }}" />
        </div>
        <h2 class="title stroke text-center">Since our DNA can be extracted using these chemicals,
            do you think the same chemicals can be used to extract DNA from a plant?</h2>
    </div>


    {{-- Slide 5 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke">Now we'll learn how to extract DNA from a tomato.
            We'll also find out if the same chemicals will be used to extract DNA from a tomato.</h2>
    </div>


    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <h2 class="text-center justify-start text-[45px] text-white stroke">Class Activity</h2>
        <img src="{{ asset('assets/images/K2/livingthings/dna/td2.png') }}" class="w-img" />
        <h2 class="title stroke">Let's find out: <br>
            How to extract DNA from a tomato?</h2>
    </div>



    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                1. Put a tomato into a zipper storage bag and seal it.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/td3.png') }}" class="w-img" />
        <p class="note text-center">Note: Invite a child to do the step.</p>
    </div>


    {{-- slide 8 --}}
    <div class="slide hidden  flex flex-col items-center justify-start">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                2. Smash and crush the tomato.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/td4.png') }}" class="w-img" />
        <p class="note text-center">Note: Invite a child to take turns to do so.</p>
    </div>



    {{-- Slide 9  --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                3. Mix together 100ml distilled water, 10ml clear liquid dish
                soap and half a teaspoon of salt in a clear cup.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/td5.png') }}" class="w-img3" />
        <p class="note text-center">Note: Guide children to measure and prepare the mixture;
            stir gently until salt is dissolved but avoid making bubbles.</p>
    </div>


    {{-- Slide 10 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                4. Add 10ml of the mixture prepared into the bag with
                tomato.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/td6.png') }}" class="w-img3" />
        <p class="note text-center">Note: Guide children to measure and add the mixture into the bag.</p>
    </div>



    {{-- Slide 11 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                5. Reseal the bag and gently smash for another minute.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/td4.png') }}" class="w-img" />
        <p class="note text-center">Note: Advise children try to avoid making too many soap bubbles.</p>
    </div>



    {{-- Slide 12 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                6. Put a strainer on top of another clear cup.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/td7.png') }}" />
        <p class="note text-center">Note: Invite a child to do the step.</p>
    </div>


    {{-- Slide 13 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                7. Pour the tomato liquid into the strainer to separate the
                liquid from the flesh.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/td8.png') }}" />
        <p class="note text-center">Note: Guide children to gently do so with a teaspoon.</p>
    </div>


    {{-- Slide 14 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                8. Take 30ml of the filtrated liquid into another clear cup.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/td9.png') }}" />
        <p class="note text-center">Note: Guide children to do the step.</p>
    </div>


    {{-- Slide 15 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                9. Pour 30ml of cold rubbing alcohol from the side into the cup.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/td10.png') }}" />
        <p class="note text-center">Note: Teacher to do the step; do not mix or stir.</p>
    </div>


    {{-- Slide 16 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                10. Observe what happens in the cup.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/td10.png') }}" />
        <p class="note text-center">Note: Teacher to do the step; do not mix or stir.</p>
    </div>


    {{-- Slide 17 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/td11.png') }}" />
        <div class="text-start self-start">
            <h2 class="text-center title stroke">What do you observe: <br>
                What happens in the cup?</h2>
        </div>
    </div>

    {{-- Slide 18 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <div class="text-start self-start">
            <h2 class="text-center title stroke">What do you learn: <br>
                What are the white strings and clumps in the cup?</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/td12.png') }}" />
    </div>


    {{-- Slide 19 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <h2 class="title stroke">What do you learn: <br>
            Do you think the DNA is extracted from one cell or many cells?</h2>
        <img src="{{ asset('assets/images/K2/livingthings/dna/td12.png') }}" />
    </div>


    {{-- Slide 20 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/td12.png') }}" />
        <h2 class="title stroke">Through the activity, we know that the white strings and
            clumps are DNA strands from a tomato.</h2>
    </div>

    {{-- Slide 21 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/d22.png') }}" />
        <h2 class="title stroke">In fact, a strand of DNA is a long string
            but too small to be visible to our eyes.</h2>
    </div>


    {{-- Slide 22 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/td12.png') }}" />
        <h2 class="title stroke">The reason we are able to see DNA in this activity is that
            there are so many of them clumped together at the end.</h2>
    </div>


    {{-- Slide 24 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/td12.png') }}" />
        <h2 class="title stroke">Therefore, the white strings and clumps are many DNA strands
            that are released from many tomato cells.</h2>
    </div>


    {{-- Slide 25 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/td13.png') }}" />
        <h2 class="title stroke">This is the image drawing of a tomato under a microscope.
            DNA is stored in the cells.</h2>
    </div>

    {{-- Slide 26 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/td14.png') }}" class="w-img3" />
        <h2 class="title stroke">The <span class="text-white">chemicals</span> used in the process break down the outer
            covering of tomato <span class="text-white">cells</span> and release <span class="text-white">DNA</span> from
            the <span class="text-white">cells</span>.</h2>
    </div>


    {{-- Slide 27 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/td15.png') }}" class="w-img3" />
        <h2 class="title stroke">As a matter of fact, the same chemicals have been used to
            extract our DNA, as well as a tomato's DNA.</h2>
        <p class="note">Note: Have children name the chemicals or things used.</p>
    </div>

    {{-- Slide 28 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/td16.png') }}" class="w-img3" />
        <h2 class="title stroke">Based on the results of the activities, we can conclude that
            both animals and plants have DNA.</h2>
    </div>


    {{-- Slide 29 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/dna/td17.png') }}" class="w-img3" />
        <h2 class="title stroke"><span class="text-white">Animals</span> and <span class="text-white">plants</span> are
            <span class="text-white">living things</span>, so we can summarize
            that <span class="text-white">all living things have DNA</span>!
        </h2>
    </div>



    {{-- ====================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>


    <div id="buttons" class="absolute  flex flex-row gap-6 ">

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
                    window.location.href = "{{ route('tomatoDnaSelection') }}";
                } else {
                    // Not first slide: go back
                    showSlide(currentIndex - 1);
                }
            });

            // Done button
            doneBtn.addEventListener("click", () => {
                window.location.href = "{{ route('tomatoDnaSelection') }}";
            });

            // Start at first slide
            showSlide(0);
        });
    </script>
@endpush
