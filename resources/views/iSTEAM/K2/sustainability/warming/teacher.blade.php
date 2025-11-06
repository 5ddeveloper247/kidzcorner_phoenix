@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- title --}}
    <h2 class="top-title stroke">Global Warming</h2>


    {{-- sldie 1  --}}
    <div class=" slide t-slide flex  text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Understand the meaning of global warming</li>
                <li>Learn about the causes of global warming and how it affects earth</li>
                <li>Develop awareness of environmental issues</li>
                <li>Develop curiosity and understanding through inquiry</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex flex-col  items-start justify-between">
            <h2 class="t-title">Keywords:</h2>
            <div>
                <ul class="list-disc ">
                    <li>Global Warming</li>
                    <li>Climate</li>
                    <li>Temperature</li>
                    <li>Earth</li>
                    <li>Heat</li>
                    <li>Atmosphere</li>
                    <li>Greenhouse Gases</li>
                </ul>

            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- slide 2 --}}
    <div class=" slide t-slide flex  text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2><br>
            <h2 class=" t-title">Class Activity 1:</h2>
            <ul class="list-disc ">
                <li>
                    1 glass jar with a hole lid
                </li>
                <li>2 thermometers (glass thermometers or kitchen thermometers)</li>
                <li>
                    1 small piece of paper
                </li>
                <li>Adhesive tape</li>
            </ul>
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s24.png') }}" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- slide 2 --}}
    <div class=" slide t-slide flex  text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2><br>
            <h2 class=" t-title">Class Activity 2:</h2>
            <ul class="list-disc ">
                <li>
                    1 big transparent container (size around the same as the example below)
                </li>
                <li>Some clay or dough (represents land to fill up one side of the big container)</li>
                <li>
                    1 cup of blue coloured water (represents sea)
                </li>
                <li>1 block of ice (represents the glacier, preferable big in size)</li>
                <li>
                    1 marker pen
                </li>
            </ul>
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s25.png') }}" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 3 --}}
    <div class=" slide t-slide flex  text-white flex-col items-center justify-center  text-start">
        <div>
            <h2 class=" t-title">Things to note for Class Activity 1:</h2>
            <ul class="list-disc">
                <li>The glass jar and the glass thermometer may be hot after being out in the sun.<br>
                    Please ensure that children do not touch the glass jar and glass thermometer.</li>
                <li>
                    Do not leave the glass thermometer outside unattended over a long period <br>
                    of time as the high temperature may cause it to crack/explode.
                </li>
                <li>
                    Do not take out the thermometer from the glass bottle to take the readings as it will be inaccurate.
                </li>
                <li>
                    If it's a rainy day, you can try conducting the experiment with a lamp in between both thermometers.<br>
                    But bear in mind that this may take a longer time for you to see the significant differences of the<br>
                    temperature on the thermometers.
                </li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class=" slide t-slide flex  text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">Things to note for Class Activity 1:</h2>
            <ul class="list-decimal">
                <li>If you are using a kitchen thermometer, you may see the numbers change within
                    seconds. <br>
                    This type of thermometer is also easier for children to read the values.</li>
                <li>Remind children of safety as the other side of the thermometer is sharp like a
                    needle.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s26.png') }}" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 5 --}}
    <div class=" slide t-slide flex  text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">Things to note for Class Activity 2:</h2>
            <ul>
                <li>Prepare sufficient ice for your class the day before the experiment. <br>
                    It will depend on the size of the container and number of groups that will be doing the experiment.
                </li>
                <li>Each group need to have a big block of ice that enable you to<br>
                    see the change in water level when the ice melts into the water.
                </li>
                <li>Remember to put the ice on the land (dough/clay) and let it melt into the s
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 6 --}}
    <div class=" slide t-slide flex  text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">Useful information:</h2><br>
            <ul>
                <li>What is a glacier?
                    A glacier is a thick mass of ice that covers a large area of land. Around ten
                    percent of the world's land area is covered by glaciers. Most glaciers are
                    located near the North or South Poles, but glaciers also exist high in mountain
                    ranges such as the Himalayas and the Andes.
                </li><br>
                <li>How do glaciers form?
                    Glaciers form from snow that doesn't melt even during the summer. When
                    enough snow builds up the weight of the snow will compress and turn into solid
                    ice. It can take hundreds of years for a large glacier to form.
                </li><br>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 7 --}}
    <div class=" slide t-slide flex  text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">Notes</h2>
            <ul>
                <li class="flex whitespace-nowrap">if this icon
                    <span>
                        <img src="{{ asset('assets/images/pptimages/video.png') }}" class="!max-w-[2.5vw]" />
                    </span> next to a
                    picture, click on the picture to watch the video
                </li>
                <li>Always ask questions to encourage children to think and share their ideas first
                    before giving out any information.</li>
                <li>
                    Emphasise and use the keywords during hands-on sessions.
                </li>
                <li>Print out the Learning Journal (if any) for every
                    child to complete at the end of the lesson.
                </li>
                <li class="flex whitespace-nowrap">Click on this shortcut icon
                    <span>
                        <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" class="!max-w-[2.5vw]" />
                    </span>if you need to go to some
                    parts of the lesson quickly.
                </li>


            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- sldie 8 --}}
    <div class=" slide t-slide flex  text-white flex-col items-center justify-start  text-start">
        <h2 class="title stroke">Learning Centre Idea</h2>

        <div>
            <h2 class="title stroke !text-white">When Glaciers Melt</h2>
            <h2 class=" t-title">When Glaciers Melt</h2>
            <p class="note">What and how to set up:<br>
                Use clay or dough to create an island in a tray on one side. Decorate it with
                animals toys, cars, people and houses. Fill up the other side with water which
                will act as the sea. Place huge pieces of ice on top of the island.</p>
        </div>
        <div>
            <h2 class="t-title"> What to do:</h2>
            <ul class="list-decimal">
                <li>Invite children to observe the setting in the beginning when island is not
                    flooded.</li>
                <li>Let the ice melt and encourage children to observe what happens.</li>
                <li>Teacher can encourage children to make different landforms such as
                    mountains or create a city with tall buildings. Encourage children to relate
                    how the melting of glaciers will affect people in the world.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- ========================================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    <div id="buttons" class="absolute  flex flex-row gap-6 z-90">

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
                window.location.href = "{{ route('k2sustainability') }}";
            });

            // Start at first slide
            showSlide(0);
        });
    </script>
@endpush
