@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Being Self-Sufficient</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r9.png') }}" class="img-sm" />
        <div class="title stroke">
            <h2>Do you know why it is important for us to
                <span class="!text-white">reduce, reuse</span> and <span class="!text-white">recycle</span>?
            </h2>
        </div>
        <p class="note">Note: Encourage children to share their thoughts.</p>
    </div>

    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/self/s1.png') }}" class="img-xl" />
        <h2 class="title stroke">When we reduce waste, there will be less rubbish and less pollution.</h2>
    </div>

    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/recycle/s1.png') }}" class="img-xl" />
        <h2 class="title stroke text-center">When we reuse containers and old clothing, less waste is generated.</h2>
    </div>

    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/reduce/s2a.png') }}" class="img-md" />
        <h2 class="title stroke text-center">Recycling creates new things from old items. When we recycle, factories do not
            need to take resources from Earth to create the new things we need.</h2>
    </div>

    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r9.png') }}" class="img-sm" />
        <h2 class="title stroke">When everyone reduce, reuse and recycle, Earth can be cleaner and healthier!</h2>
    </div>

    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/self/s3.png') }}" class="img-lg" />
        <h2 class="title stroke">Global warming is one of the problems that Earth is facing. Droughts and floods are
            happening as the temperature rises.</h2>
    </div>

    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/self/gl1.png') }}" class="img-xl" />
        <h2 class="title stroke">We learned that greenhouse gases had caused Earth's temperature to rise!</h2>
    </div>

    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/self/s2.png') }}" class="img-xl" />
        <h2 class="title stroke">Greenhouse gases are produced when fuels such as wood and coal are burned in factories and
            vehicles.</h2>
    </div>

    {{-- Slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[15vw]">
        <div class="self-start text-start">
            <h2 class="title stroke">What can be done to reduce greenhouse gases?</h2>
        </div>
        <p class="note text-center">Note: Encourage children to share their answers.</p>
    </div>

    {{-- Slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="flex gap-2 items-center">
            <img src="{{ asset('assets/images/K2/sustain/reduce/r9.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/K2/sustain/self/s5b.png') }}" class="img-sm" />
        </div>
        <h2 class="title stroke">By practicing the three 'R's, we will not need so many new things. Factories will not need
            to produce so many things.</h2>
    </div>

    {{-- Slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="flex gap-2 items-center">
            <img src="{{ asset('assets/images/K2/sustain/reduce/r9.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/K2/sustain/self/s5b.png') }}" class="img-sm" />
        </div>
        <h2 class="title stroke">When factories do not produce so many things, less coal and fuel will be burned and less
            greenhouse gases will be produced.</h2>
    </div>

    {{-- Slide 12 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/self/s4.png') }}" class="img-xl" />
        <h2 class="title stroke">To reduce greenhouse gases produced by vehicles, we need to reduce the usage of vehicles!
        </h2>
    </div>

    {{-- Slide 13 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/self/s6.png') }}" class="img-xl" />
        <h2 class="title stroke">Walking, riding a bicycle and taking the public transport instead of driving our cars help
            to <span class="!text-white">reduce greenhouse gases</span>.</h2>
    </div>

    {{-- Slide 14 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/self/s4.png') }}" class="img-xl" />
        <h2 class="title stroke">Besides our daily commute, vehicles also travel when they are exporting and importing goods
            from different countries.</h2>
    </div>

    {{-- Slide 15 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/self/s7.png') }}" class="img-lg" />
        <h2 class="title stroke">For example, these vegetables are imported from China. How did they get to the supermarket
            near you from China?</h2>
        <p class="note">Note: Encourage children to share their thoughts.</p>
    </div>

    {{-- Slide 16 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/self/s8.png') }}" class="img-lg" />
        <h2 class="title stroke">First, the vegetables are gathered from the farm and are sent to the airport using a
            delivery truck.</h2>
    </div>

    {{-- Slide 17 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/self/s10.png') }}" class="img-xl" />
        <h2 class="title stroke">The vegetables are loaded on to the plane from the delivery truck.</h2>
    </div>

    {{-- Slide 18 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/self/s9.png') }}" class="img-md" />
        <h2 class="title stroke">The planes flies from China to Singapore.</h2>
    </div>

    {{-- Slide 19 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/self/s11.png') }}" class="img-xl" />
        <h2 class="title stroke">The vegetables are then transferred onto another truck to be delivered to the supermarkets
            near you.</h2>
    </div>

    {{-- Slide 20 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/self/s12.png') }}" class="img-xl" />
        <h2 class="title stroke">The vegetables travelled on trucks and plane to reach the supermarkets.</h2>
    </div>

    {{-- Slide 21 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/self/s12.png') }}" class="img-xl" />
        <h2 class="title stroke"><span class="!text-white">Greenhouse gases</span> are produced from the trucks and the
            plane. <span class="!text-white">Greenhouse gases</span> can be <span class="!text-white">reduced</span> the
            trucks and plane do not need to <span class="!text-white">import</span> and <span
                class="text-white">export</span></h2>
    </div>

    {{-- Slide 22 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/self/s13.png') }}" class="img-xl" />
        <h2 class="title stroke">One of the ways to reduce importing and exporting goods such as vegetables and fruits is
            to buy food grown locally.</h2>
    </div>

    {{-- Slide 23 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/self/s13.png') }}" class="img-xl" />
        <h2 class="title stroke">When we buy food grown locally, fewer planes are needed to <span
                class="text-white">import</span> and <span class="!text-white">export</span> these items.</h2>
    </div>

    {{-- Slide 24 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/self/s13.png') }}" class="img-xl" />
        <h2 class="title stroke">This helps our country to be self-sufficient, meaning our country can provide food for our
            people!</h2>
    </div>

    {{-- Slide 25 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/self/s14.png') }}" class="img-xl" />
        <h2 class="title stroke">Another way of being self-sufficient is growing vegetables for our own use at home.</h2>
    </div>

    {{-- Slide 26 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/self/s14.png') }}" class="img-xl" />
        <h2 class="title stroke">When we grow our own food, we do not need to import food from other countries too!</h2>
    </div>

    {{-- Slide 27 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <h2 class="text-white title stroke">Class Activity</h2>
        <img src="{{ asset('assets/images/K2/sustain/self/s15.png') }}" class="img-md" />
        <div class="text-start title stroke">
            <h2>Let's do:</h2>
            <h2>Grow some vegetables for the school.</h2>
        </div>
    </div>

    {{-- Slide 28 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start title stroke">
            <h2>Let's do:</h2>
            <ol class="lesson-ul list-decimal space-y-3">
                <li>Discuss as a class on the types of vegetables to grow.</li>
                <li>Put one seed into each hole of the growing cubes.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/sustain/self/s16.png') }}" class="img-md" />
    </div>

    {{-- Slide 29 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start title stroke">
            <h2>Let's do:</h2>
            <ol class="lesson-ul list-decimal space-y-3" start="3">
                <li>When the seed has grown into a small plant, cut the cubes and put each piece into the white container.
                </li>
                <li>Put the container into the vertical garden system.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/sustain/self/s17.png') }}" class="img-xl" />
        <p class="note text-center">Note: Teacher to refer to the notes for the usage of the vertical system.</p>
    </div>

    {{-- Slide 30 --}}
    <div class="slide hidden flex flex-col items-start justify-start">
        <div class="text-start title stroke">
            <h2>Let's do:</h2>
            <ol class="lesson-ul list-decimal space-y-3" start="5">
                <li>Check on the plants and wait for the harvest!</li>
                <li>Discuss as a class and create a recipe to cook the vegetables that you will be harvesting!</li>
            </ol>
        </div>
    </div>

    {{-- Slide 31 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/self/s13.png') }}" class="img-xl" />
        <h2 class="title stroke">When we support local farms, fewer planes are needed to import and export these items.
        </h2>
    </div>

    {{-- Slide 32 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/self/s14.png') }}" class="img-xl" />
        <h2 class="title stroke">Similarly, being self-sufficient also reduces the need to import food from other
            countries.</h2>
    </div>

    {{-- Slide 33 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r8.png') }}" class="img-md" />
        <h2 class="title stroke">There's only one Earth.<br>Let's do our part in protecting our Earth together!</h2>
    </div>




    {{-- =================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    <div id="buttons" class="absolute flex flex-row gap-6">
        <a id="returnButton">
            <img src="{{ asset('assets/images/pptimages/return.png') }}" />
        </a>
        <button id="homeButton">
            <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
        </button>
        <button id="closeButton">
            <img src="{{ asset('assets/images/pptimages/cancel.png') }}" />
        </button>
    </div>

    {{-- Next Button --}}
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
                    window.location.href = "{{ route('selfSelection') }}";
                } else {
                    // Not first slide: go back
                    showSlide(currentIndex - 1);
                }
            });

            // Done button
            doneBtn.addEventListener("click", () => {
                window.location.href = "{{ route('k2sustainability') }}";
            });

            // Start at first slide
            showSlide(0);
        });
    </script>
@endpush
