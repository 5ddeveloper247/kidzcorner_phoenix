@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Global Warming</h2>


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <div class="flex items-center ">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s1.png') }}" />
        </div>

        <h2 class="title stroke">Children, what do you see in the picture?</h2>
        <p class="note">Note: Encourage children to share what they see in the picture.
        </p>
    </div>



    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s1.png') }}" />

        </div>
        <h2 class="title stroke">This is our planet, Earth.</h2>
    </div>



    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s1.png') }}" />

        </div>
        <h2 class="title stroke">Do you know that Earth is sick?</h2>
        <p class="note">Note: Encourage children to guess how Earth is sick.
        </p>
    </div>
    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s2.png') }}" />

        </div>
        <h2 class="title stroke text-center">Earth's climate has been changing.<br>
            Earth is getting warmer.</h2>
        <p class="note">Note: Explain that climate means the weather over a longer period of time.
        </p>
    </div>
    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s2.png') }}" />

        </div>
        <h2 class="title stroke text-center">This is known as global warming.
            Make a guess - What causes Earth's temperature to rise?</h2>
        <p class="note">Note: Encourage children to share their thoughts with the class.
        </p>
    </div>



    {{-- slide 4 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s2.png') }}" />

        </div>
        <h2 class="title stroke text-center">This is known as global warming.
            Make a guess - What causes Earth's temperature to rise?</h2>
        <p class="note">Note: Encourage children to share their thoughts with the class.
        </p>
    </div>


    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s3.png') }}"  />
        <h2 class="title stroke text-center">The increase of greenhouse gases causes
            Earth's temperature to rise!</h2>
    </div>
    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s3.png') }}"  />
        <h2 class="title stroke text-center">Carbon dioxide, methane and nitrous oxide are
            known as greenhouse gases.</h2>
    </div>
    {{-- slide 5 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s4.png') }}" class="large-img6" />

        </div>
        <h2 class="title stroke text-center">Greenhouse gases are produced when fuels such as wood and
            coal are burned in factories and vehicles.</h2>
    </div>
    {{-- slide 5 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s5.png') }}" class="large-img6" />

        </div>
        <h2 class="title stroke text-center">Farm animals also give out greenhouse gases.</h2>
    </div>

    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">How do these greenhouse gases affect
            Earth's temperature?
        </h2>
        <p class="note">
            Note: Encourage children to share their thoughts with the class.
        </p>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s6.png') }}" />

        </div>
        <h2 class="title stroke text-center">During the day, the sun shines through the atmosphere and
            warms up Earth's surface.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s7.png') }}" />

        </div>
        <h2 class="title stroke text-center">During the night, Earth’s surface cools down.
            Heat escapes into the air.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s8.png') }}" />

        </div>
        <h2 class="title stroke text-center">Some of the heat escapes into space, while some are trapped
            by the greenhouse gases.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s9.png') }}" />

        </div>
        <h2 class="title stroke text-center">The heat trapped in the atmosphere
            keeps Earth warm.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s10.png') }}" />

        </div>
        <h2 class="title stroke text-center">The increase in greenhouse gases stops most of the heat from
            escaping and heat gets trapped in the atmosphere.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s10.png') }}" />

        </div>
        <h2 class="title stroke text-center">The heat trapped in the atmosphere causes Earth's
            temperature to increase.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">Let's work on an experiment to observe what happens to the
            temperature when air is being trapped.</h2>
        <p class="note">Note: Remind children on safety rules when using the thermometer and the glass container.
        </p>
    </div>

    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s11.png') }}" class="w-img" />
        <h2 class="title stroke text-start">Let's find out:<br>
            How does the temperature change when heat/air is unable to
            escape from an enclosed container?</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-start ">
        <h2 class="title stroke text-start">Let's do:<br>
            Get two thermometers and a glass jar with a lid.</h2>
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s11.png') }}" class="w-img" />
        <p class="note">Note: Teacher to remind children to be careful when using the glass jar and glass thermometers.
        </p>
    </div>

    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke text-start">Let's do:<br>
            2. Paste a piece of paper underneath the hole on the lid.</h2>
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s12.png') }}" class="w-img" />
        <p class="text-center note">Note: Seal the hole with a paper because it's easier for children to poke a thermometer
            through it later.</p>
    </div>

    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center">
        <h2 class="title stroke text-start">Let's do:<br>
            3. Poke a thermometer through the hole into the glass jar and
            cover it. Use tape to seal up any gaps to ensure that
            heat/air cannot escape from the jar. The glass jar acts as
            the greenhouse gases which prevent the heat from escaping.</h2>
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s13.png') }}" class="w-img" />
    </div>

    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-between h-[50vh]">
        <h2 class="title stroke text-start">Let's do:<br>
            5. The thermometer outside the glass jar will measure the
            temperature of the environment.
            6. The thermometer inside the glass jar will measure the
            temperature of the air being trapped, just like how the
            greenhouse gases were trapped in the atmosphere.</h2>
        <p class="text-center note">Note: Teacher to help to read out the temperature on each thermometer.</p>
    </div>

    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-between h-[50vh]">
        <h2 class="title stroke text-start">Let's do:<br>
            7. After setting up, record the temperature readings of both
            thermometers in the learning journal.
            8. Wait 5 minutes and 10 minutes later to record the second
            and third readings.
            9. As a class, discuss the observations.
        </h2>
        <p class="note">Note: Teacher to ask questions to guide them in concluding their findings.</p>
    </div>


    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s14.png') }}" />
        </div>
        <h2 class="title stroke text-center">What happens when Earth's temperature keeps increasing?</h2>
        <p class="note">Note: Encourage children to share their thoughts.</p>
    </div>

    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex gap-2 items-center">
            <img class="w-[500px]" src="{{ asset('assets/images/K2/sustain/Globalwarming/s15a.png') }}" />
            <img class="!max-w-[13vw]" src="{{ asset('assets/images/K2/sustain/Globalwarming/s15b.png') }}" />
        </div>
        <h2 class="title stroke text-center">When temperature increases, we feel hot!</h2>
        <p class="note">Note: Teacher can help children to relate to how they feel when they are under
            the hot sun during outdoors.</p>
    </div>


    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s16.png') }}" />
        </div>
        <h2 class="title stroke text-center">Ice and snow on the ice cap mountains will melt.</h2>
        <p class="note">Note: Teacher to explain that hot weather affects the plants.</p>
    </div>


    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s17.png') }}" />
        </div>
        <h2 class="title stroke text-center">Ice and snow on the ice cap mountains will melt.</h2>
    </div>


    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-1 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s18.png') }}" />
        </div>
        <h2 class="title stroke text-center">Glaciers will melt too!</h2>
        <p class="note">Note: Teacher to explain that aglacier is a large piece of ice on top of land.<br>
            Glacier is formed by the accumulation and compaction of snow.</p>
    </div>


    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <h2 class="title stroke ">What do you think will happen
            when glaciers melt?</h2>
        <p class="note">Note: Encourage children to share their thoughts.</p>
    </div>


    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-1 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s19.png') }}" />
        </div>
        <h2 class="title stroke text-center">Let’s find out:<br>
            What happens when glaciers melt?</h2>
    </div>

    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="title stroke text-start">Let's do:<br>
            1. Use clay or dough to form land on one side of a container.</h2>
        <div class="flex items-end gap-1 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s20.png') }}" />
        </div>
        <p class="note">Note: Teacher may get children to work in small groups</p>
    </div>

    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="title stroke text-start">Let's do:<br>
            2. Fill the other side of the container with water, to represent
            the sea. <br>
            3. Place a block of ice on top of the land. Explain that this is
            glacier, where the top part of the land is ice.</h2>
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s21.png') }}" class="w-img" />
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="title stroke text-start">Let's do:<br>
            4. Use a marker and mark the water level on the side of the
            container.</h2>
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s22.png') }}" class="w-img" />
        <p class="note">Note: Teacher to ensure that the ice stays on top of the land at the start of the experiment.</p>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[50vh]">
        <h2 class="title stroke text-start">Let's do:<br>
            5. Glaciers will melt due to global warming. Guess what will<br>
            happen when the block of ice melts into the sea.<br>
            6. Leave it in the outdoors or near a light source to <br>
            represent the sun.<br>
            7. Check the level again when all the ice has melted.</h2>
        <p class="note">Note: Teacher to guide children in observing the change in water level.
        </p>
    </div>

    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <h2 class="title stroke text-start">Let's do:<br>
            8. Discuss as a class what you have observed.<br>
            9. Imagine if the water was the sea, what would have<br>
            happened? </h2><br>
        <p class="note">Note: Teacher to ask questions to guide them in concluding their findings.</p>
        </p>
    </div>

    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s18.png') }}" />
        <h2 class="title stroke text-center">When the glaciers melt, the sea level will increase<br>
            and islands may be flooded.</h2>
    </div>

    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-1 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s23.png') }}" />
        </div>
        <h2 class="title stroke text-center">Our houses and the roads will be flooded too.</h2>
        <p class="note">Note: Teacher to talk about how the flood will affect people.</p>
    </div>

    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <h2 class="title stroke">What have you learned about global warming?</h2>
        <p class="note">Note: Encourage children to share.</p>
        </p>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-1 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s2.png') }}" />
        </div>
        <h2 class="title stroke text-center">Global warming is the process of Earth getting warmer<br>
            and the temperature increases.</h2>
        <p class="note">Note: Explain that climate means the weather over a longer period of time.</p>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-1 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s10.png') }}" />
        </div>
        <h2 class="title stroke text-center">Global warming is caused by the increase in greenhouse gases<br>
            trapped in the atmosphere.</h2>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex gap-1 items-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s16.png') }}" class="!max-w-[18vw]" />
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s18.png') }}" class="!max-w-[18vw]" />
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s23.png') }}" class="!max-w-[18vw]" />
        </div>
        <h2 class="title stroke text-center">With the increased temperature, it affects the land, animals
            and plants. When glaciers melt, we will be affected too.</h2>
    </div>

    {{-- slide 30 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[30vw] h-fit bg-cover bg-center p-[20px] flex flex-col justify-center items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f12.png') }}" />
        </div>
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
                    window.location.href = "{{ route('warmingSelection') }}";
                } else {
                    // Not first slide: go back
                    showSlide(currentIndex - 1);
                }
            });

            // Done button
            doneBtn.addEventListener("click", () => {
                window.location.href = "{{ route('warmingSelection') }}";
            });

            // Start at first slide
            showSlide(0);
        });
    </script>
@endpush
