@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Global Warming</h2>


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s1.png') }}" class="img-sm" />
        <h2 class="title stroke">Children, what do you see in the picture?</h2>
        <p class="note">Note: Encourage children to share what they see in the picture.</p>
    </div>



    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s1.png') }}" class="img-sm" />
        <h2 class="title stroke">This is our planet, Earth.</h2>
    </div>



    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s1.png') }}" class="img-sm" />
        <h2 class="title stroke">Do you know that Earth is sick?</h2>
        <p class="note">Note: Encourage children to guess how Earth is sick.</p>
    </div>


    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s2.png') }}" class="!w-[30vw]" />
        <h2 class="title stroke text-center">Earth's climate has been changing.
            Earth is getting warmer.</h2>
        <p class="note">Note: Explain that climate means the weather over a longer period of time.</p>
    </div>

    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s2.png') }}" class="!w-[30vw]" />
        <h2 class="title stroke text-center">This is known as global warming.
            Make a guess - What causes Earth's temperature to rise?</h2>
        <p class="note">Note: Encourage children to share their thoughts with the class.</p>
    </div>



    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s3.png') }}" class="img-xl" />
        <h2 class="title stroke text-center">The increase of greenhouse gases causes
            Earth's temperature to rise!</h2>
    </div>

    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s3.png') }}" class="img-xl" />
        <h2 class="title stroke text-center">Carbon dioxide, methane and nitrous oxide are
            known as greenhouse gases.</h2>
    </div>

    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s4.png') }}" class="img-lg" />
        <h2 class="title stroke text-center">Greenhouse gases are produced when fuels such as wood and
            coal are burned in factories and vehicles.</h2>
    </div>

    {{-- Slide 9 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s5.png') }}" class="img-lg" />
        <h2 class="title stroke text-center">Farm animals also give out greenhouse gases.</h2>
    </div>

    {{-- Slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[20vw] self-end">
        <h2 class="title stroke">How do these greenhouse gases affect
            Earth's temperature?</h2>
        <p class="note">Note: Encourage children to share their thoughts with the class.</p>
    </div>

    {{-- Slide 11 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s6.png') }}" class="img-md" />
        <h2 class="title stroke text-center">During the day, the sun shines through the atmosphere and
            warms up Earth's surface.</h2>
    </div>

    {{-- Slide 12 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s7.png') }}" class="img-md" />
        <h2 class="title stroke text-center">During the night, Earth's surface cools down.
            Heat escapes into the air.</h2>
    </div>

    {{-- Slide 13 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s8.png') }}" class="img-md" />
        <h2 class="title stroke text-center">Some of the heat escapes into space, while some are trapped
            by the greenhouse gases.</h2>
    </div>

    {{-- Slide 14 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s9.png') }}" class="img-md" />
        <h2 class="title stroke text-center">The heat trapped in the atmosphere
            keeps Earth warm.</h2>
    </div>

    {{-- Slide 15 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s10.png') }}" class="img-md" />
        <h2 class="title stroke text-center">The increase in greenhouse gases stops most of the heat from
            escaping and heat gets trapped in the atmosphere.</h2>
    </div>

    {{-- Slide 16 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s10.png') }}" class="img-md" />
        <h2 class="title stroke text-center">The heat trapped in the atmosphere causes Earth's
            temperature to increase.</h2>
    </div>

    {{-- Slide 17 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[20vw] self-end">
        <h2 class="title stroke">Let's work on an experiment to observe what happens to the
            temperature when air is being trapped.</h2>
        <p class="note">Note: Remind children on safety rules when using the thermometer and the glass container.</p>
    </div>

    {{-- Slide 18 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <h2 class="title stroke !text-white">Class Activity 1</h2>
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s11.png') }}" class="img-sm" />
        <h2 class="title stroke text-start">Let's find out: <br>
            How does the temperature change when heat/air is unable to
            escape from an enclosed container?</h2>
    </div>

    {{-- Slide 19 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[30vw]">
        <div class="text-start">
            <h2 class="title stroke">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="1">
                <li>Get two thermometers and a glass jar with a lid.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s11.png') }}" class="img-sm" />
        <p class="note">Note: Teacher to remind children to be careful when using the glass jar and glass thermometers.
        </p>
    </div>

    {{-- Slide 20 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[30vw]">
        <div class="text-start">
            <h2 class="title stroke">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="2">
                <li>Paste a piece of paper underneath the hole on the lid.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s12.png') }}" class="img-sm" />
        <p class="text-center note">Note: Seal the hole with a paper because it's easier for children to poke a thermometer
            through it later.</p>
    </div>

    {{-- Slide 21 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="text-start">
            <h2 class="title stroke">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="3">
                <li>Poke a thermometer through the hole into the glass jar and cover it. Use tape to seal up any gaps to
                    ensure that heat/air cannot escape from the jar. The glass jar acts as the greenhouse gases which
                    prevent the heat from escaping.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s13.png') }}" class="img-sm" />
    </div>

    {{-- Slide 22 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <div class="text-start">
            <h2 class="title stroke">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="4">
                <li>The thermometer outside the glass jar will measure the temperature of the environment.</li>
                <li>The thermometer inside the glass jar will measure the temperature of the air being trapped, just like
                    how the greenhouse gases were trapped in the atmosphere.</li>
            </ol>
        </div>
        <p class="text-center note">Note: Teacher to help to read out the temperature on each thermometer.</p>
    </div>

    {{-- Slide 23 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <div class="text-start">
            <h2 class="title stroke">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="6">
                <li>After setting up, record the temperature readings of both thermometers in the learning journal.</li>
                <li>Wait 5 minutes and 10 minutes later to record the second and third readings.</li>
                <li>As a class, discuss the observations.</li>
            </ol>
        </div>
        <p class="note">Note: Teacher to ask questions to guide them in concluding their findings.</p>
    </div>


    {{-- Slide 24 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s14.png') }}" class="img-lg" />
        <p class="note">Note: Encourage children to share their thoughts.</p>
    </div>

    {{-- Slide 25 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex gap-2 items-center">
            <img class="img-md" src="{{ asset('assets/images/K2/sustain/Globalwarming/s15a.png') }}" />
            <img class="img-h-sm" src="{{ asset('assets/images/K2/sustain/Globalwarming/s15b.png') }}" />
        </div>
        <h2 class="title stroke text-center">When temperature increases, we feel hot!</h2>
        <p class="note">Note: Teacher can help children to relate to how they feel when they are under the hot sun during
            outdoors.</p>
    </div>


    {{-- Slide 26 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s16.png') }}" class="img-lg" />
        <p class="note">Note: Teacher to explain that hot weather affects the plants.</p>
    </div>


    {{-- Slide 27 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s17.png') }}" class="img-lg" />
        <h2 class="title stroke">Ice and snow on the ice cap mountains will melt.</h2>
    </div>



    {{-- Slide 28 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s18.png') }}" class="img-lg" />
        <h2 class="title stroke text-center">Glaciers will melt too!</h2>
        <p class="note">Note: Teacher to explain that a glacier is a large piece of ice on top of land.
            Glacier is formed by the accumulation and compaction of snow.</p>
    </div>


    {{-- Slide 29 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[20vw] self-end">
        <h2 class="title stroke">What do you think will happen when glaciers melt?</h2>
        <p class="note">Note: Encourage children to share their thoughts.</p>
    </div>


    {{-- Slide 30 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s19.png') }}" class="!w-[30vw]" />
        <h2 class="title stroke text-center">Let's find out: <br>
            What happens when glaciers melt?</h2>
    </div>

    {{-- Slide 31 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[30vw]">
        <div class="text-start">
            <h2 class="title stroke">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="1">
                <li>Use clay or dough to form land on one side of a container.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s20.png') }}" class="!w-[30vw]" />
        <p class="note">Note: Teacher may get children to work in small groups</p>
    </div>

    {{-- Slide 32 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="text-start">
            <h2 class="title stroke">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="2">
                <li>Fill the other side of the container with water, to represent the sea.</li>
                <li>Place a block of ice on top of the land. Explain that this is glacier, where the top part of the land is
                    ice.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s21.png') }}" class="img-sm" />
    </div>

    {{-- Slide 33 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[30vw]">
        <div class="text-start">
            <h2 class="title stroke">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="3">
                <li>Use a marker and mark the water level on the side of the container.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s22.png') }}" class="img-sm" />
        <p class="note">Note: Teacher to ensure that the ice stays on top of the land at the start of the experiment.</p>
    </div>

    {{-- Slide 34 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <div class="text-start">
            <h2 class="title stroke">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="4">
                <li>Glaciers will melt due to global warming. Guess what will happen when the block of ice melts into the
                    sea.</li>
                <li>Leave it in the outdoors or near a light source to represent the sun.</li>
                <li>Check the level again when all the ice has melted.</li>
            </ol>
        </div>
        <p class="note">Note: Teacher to guide children in observing the change in water level.</p>
    </div>

    {{-- Slide 35 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <div class="text-start">
            <h2 class="title stroke">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="7">
                <li>Discuss as a class what you have observed.</li>
                <li>Imagine if the water was the sea, what would have happened?</li>
            </ol>
        </div>
        <p class="note">Note: Teacher to ask questions to guide them in concluding their findings.</p>
    </div>

    {{-- Slide 36 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s18.png') }}" class="img-lg" />
        <h2 class="title stroke text-center">When the glaciers melt, the sea level will increase
            and islands may be flooded.</h2>
    </div>

    {{-- Slide 37 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s23.png') }}" class="img-lg" />
        <h2 class="title stroke text-center">Our houses and the roads will be flooded too.</h2>
        <p class="note">Note: Teacher to talk about how the flood will affect people.</p>
    </div>

    {{-- Slide 38 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[20vw] self-end">
        <h2 class="title stroke">What have you learned about global warming?</h2>
        <p class="note">Note: Encourage children to share.</p>
    </div>

    {{-- Slide 39 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s2.png') }}" class="!w-[35vw]" />
        <h2 class="title stroke text-center">Global warming is the process of Earth getting warmer
            and the temperature increases.</h2>
        <p class="note">Note: Explain that climate means the weather over a longer period of time.</p>
    </div>

    {{-- Slide 40 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s10.png') }}" class="img-md" />
        <h2 class="title stroke text-center">Global warming is caused by the increase in greenhouse gases
            trapped in the atmosphere.</h2>
    </div>

    {{-- Slide 41 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex gap-[1vw] items-center">
            <div class="flex flex-col gap-[.8vw]">
                <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s18.png') }}" class="!w-[17vw]" />
                <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s16.png') }}" class="!w-[17vw]" />
            </div>
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s23.png') }}" class="!w-[33vw]" />
        </div>
        <h2 class="title stroke text-center">With the increased temperature, it affects the land, animals
            and plants. When glaciers melt, we will be affected too.</h2>
    </div>

    {{-- Slide 42 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center p-[20px] flex flex-col justify-center items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f12.png') }}" class="w-full" />
        </div>
    </div>


    {{-- ====================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>


    <div id="buttons" class="absolute flex flex-row gap-6">
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
            const slides = document.querySelectorAll(".slide");
            const nextBtn = document.querySelector(".nextButton");
            const returnBtn = document.getElementById("returnButton");
            const doneBtn = document.querySelector(".doneButton");

            let currentIndex = 0;

            function showSlide(index) {
                slides.forEach(slide => slide.classList.add("hidden"));
                slides[index].classList.remove("hidden");
                currentIndex = index;

                const isLastSlide = (index === slides.length - 1);

                if (isLastSlide) {
                    nextBtn.style.display = "none";
                    doneBtn.style.display = "block";
                } else {
                    nextBtn.style.display = "block";
                    doneBtn.style.display = "none";
                }
            }

            nextBtn.addEventListener("click", () => {
                if (currentIndex < slides.length - 1) {
                    showSlide(currentIndex + 1);
                }
            });

            returnBtn.addEventListener("click", () => {
                if (currentIndex === 0) {
                    window.location.href = "{{ route('warmingSelection') }}";
                } else {
                    showSlide(currentIndex - 1);
                }
            });

            doneBtn.addEventListener("click", () => {
                window.location.href = "{{ route('k2sustainability') }}";
            });

            showSlide(0);
        });
    </script>
@endpush
