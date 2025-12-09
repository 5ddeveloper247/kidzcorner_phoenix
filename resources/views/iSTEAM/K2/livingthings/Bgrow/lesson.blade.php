@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- title --}}
    <h2 class="top-title stroke">Do Bacteria Grow?</h2>


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/K2/livingthings/bg/b1.png') }}" class="img-xl" />
        <h2 class="title stroke">Children, do you still remember what we used to grow bacteria?
            Where did we get the sample bacteria from?</h2>
        <p class="note">Note: Encourage children to recall and share the procedures of the tests.</p>

    </div>


    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/K2/livingthings/bg/b2.png') }}" class="img-md" />
        <h2 class="title stroke">Why did we do the tests?</h2>
        <p class="note">Note: Encourage children to recall and share the procedures of the tests.</p>

    </div>

    {{-- Slide3 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/K2/livingthings/bg/b1.png') }}" class="img-xl" />
        <h2 class="title stroke">We have collected sample bacteria from
            a dirty shoe, hand and teeth
            to grow them in agar plates.</h2>

    </div>

    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/K2/livingthings/bg/b3.png') }}" class="img-md" />
        <h2 class="title stroke">We want to find out if disinfectant sprays, hand sanitizers,
            hand soaps and toothpastes really help to kill bacteria.</h2>

    </div>

    {{-- Slide 5  --}}
    <div class="slide flex flex-col items-center justify-between h-[20vw] self-end">
        <h2 class="title stroke">Now, let's check on the results of the different tests!</h2>
        <p class="note">Note: Display all the sampled petri dishes. Arrange them in such a way <br>
            that easy to do comparisons for each test.</p>

    </div>


    {{-- slide 6 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/K2/livingthings/bg/b4.png') }}" class="img-lg" />
        <h2 class="title stroke !text-start">What do you observe: <br>
            Did bacteria grow in each dish?</h2>
        <p class="note">Note: Have children compare and share their observations on each test.</p>

    </div>


    {{-- Slide 7 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/K2/livingthings/bg/b4.png') }}" class="img-lg" />
        <h2 class="title stroke !text-start">What do you observe: <br>
            What is the shape of the bacteria in each dish?</h2>
        <p class="note">Note: Have children compare and share their observations on each test.</p>

    </div>



    {{-- slide 8 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/K2/livingthings/bg/b4.png') }}" class="img-lg" />
        <h2 class="title stroke !text-start">What do you observe: <br>
            What is the colour and size of the bacteria in each dish?</h2>
        <p class="note">Note: Have children compare and share their observations on each test.</p>

    </div>


    {{-- slide 9 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/K2/livingthings/bg/b4.png') }}" class="img-lg" />
        <h2 class="title stroke !text-start">What do you observe: <br>
            Which dish has the most or least bacteria?</h2>
        <p class="note">Note: Have children compare and share their observations on each test.</p>

    </div>


    {{-- slide 10 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/K2/livingthings/bg/b4.png') }}" class="img-lg" />
        <h2 class="title stroke !text-start">What do you observe: <br>
            Do disinfectant sprays, hand sanitizers, hand soaps and 
            toothpastes really kill bacteria?</h2>
        <p class="note">Note: Have children compare and share their observations on each test.</p>

    </div>



    {{-- slide 11 --}}
    <div class="slide flex flex-col items-center justify-center">
        <h2 class="title stroke !text-start">What do you learn: <br>
            Do disinfectant sprays kill some or all the bacteria?</h2>
        <img src="{{ asset('/assets/images/K2/livingthings/bg/b5.png') }}" class="img-lg" />
        <p class="note">Note: Guide children to make conclusions from their own test results.</p>

    </div>

    {{-- slide 12 --}}
    <div class="slide flex flex-col items-center justify-center">
        <h2 class="title stroke !text-start">What do you learn: <br>
            Do hand sanitizers kill some or all the bacteria?</h2>
        <img src="{{ asset('/assets/images/K2/livingthings/bg/b6.png') }}" class="img-lg" />
        <p class="note">Note: Guide children to make conclusions from their own test results.</p>

    </div>


    {{-- slide 13 --}}
    <div class="slide flex flex-col items-center justify-center">
        <h2 class="title stroke !text-start">What do you learn: <br>
            Do hand soaps kill some or all the bacteria?</h2>
        <img src="{{ asset('/assets/images/K2/livingthings/bg/b7.png') }}" class="img-lg" />
        <p class="note">Note: Guide children to make conclusions from their own test results.</p>

    </div>


    {{-- slide 14 --}}
    <div class="slide flex flex-col items-center justify-center">
        <h2 class="title stroke !text-start">What do you learn: <br>
            Do toothpastes kill some or all the bacteria?</h2>
        <img src="{{ asset('/assets/images/K2/livingthings/bg/b8.png') }}" class="img-lg" />
        <p class="note">Note: Guide children to make conclusions from their own test results.</p>

    </div>


    {{-- slide 15 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/K2/livingthings/bg/b3.png') }}"class="img-md"/>
        <h2 class="title stroke">Through the activities, we know that disinfectant sprays, hand
            sanitizers, hand soaps and toothpastes do help to kill bacteria.</h2>

    </div>

    {{-- slide 16 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/K2/livingthings/bg/b9.png') }}" class="img-lg" />
        <h2 class="title stroke">As advertised, these cleaning products can kill
            some or most of the bacteria.</h2>

    </div>


    {{-- slide 17 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/livingthings/bg/b10.png') }}" class="img-xl" />
        <h2 class="title stroke">That's why people like to use different cleaning products to
            protect themselves from harmful bacteria.</h2>

    </div>

    {{-- slide 18 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/K2/livingthings/bg/b11.png') }}" class="img-md" />
        <h2 class="title stroke">Through the activities, we also know that bacteria grow very
            fast when supplied with nutrients.</h2>

    </div>
    {{-- slide 19 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/K2/livingthings/bg/b12.png') }}" class="img-md" />
        <h2 class="title stroke">As you know, bacteria are too tiny to be seen with our eyes.
            That's why we couldn't see any of them at the beginning.</h2>

    </div>
    {{-- slide 20 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/K2/livingthings/bg/b11.png') }}" class="img-md" />
        <h2 class="title stroke">The reason we are able to see them now is that we used
            scientific method to grow them in a big group called colony.</h2>

    </div>
    {{-- slide 21 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/K2/livingthings/bg/b13.png') }}" class="img-h-md" />
        <h2 class="title stroke">Different types of bacteria will produce colonies of different
            looks with their shapes, sizes and colours.</h2>

    </div>
    {{-- slide 22 --}}
    <div class="slide flex flex-col items-center justify-between h-[20vw] self-end">
        <h2 class="title stroke">Now, count the number of colonies in each dish
            and talk about their differences.</h2>
        <p class="note">Note: Guide children to compare and talk about the result in each dish.
            After that, have them draw the results in the learning journals.</p>

    </div>
    {{-- slide 23 --}}
    <div class="slide  hidden flex flex-col items-center justify-start gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center flex flex-col gap-10 justify-center items-center p-[30px]"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('/assets/images/K2/livingthings/bg/b14.png') }}" class="w-full" />

        </div>
    </div>
    {{-- slide 23 --}}
    <div class="slide  hidden flex flex-col items-center justify-start gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center flex flex-col gap-10 justify-center items-center p-[30px]"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('/assets/images/K2/livingthings/bg/b15.png') }}" class="w-full" />

        </div>
    </div>

    {{-- slide 23 --}}
    <div class="slide  hidden flex flex-col items-center justify-start gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center flex flex-col gap-10 justify-center items-center p-[30px]"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('/assets/images/K2/livingthings/bg/b16.png') }}" class="w-full" />

        </div>
    </div>

    {{-- slide 23 --}}
    <div class="slide  hidden flex flex-col items-center justify-start gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center flex flex-col gap-10 justify-center items-center p-[30px]"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('/assets/images/K2/livingthings/bg/b17.png') }}" class="w-full" />

        </div>
    </div>



    {{-- ================== --}}
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
                    window.location.href = "{{ route('BgrowSelection') }}";
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
