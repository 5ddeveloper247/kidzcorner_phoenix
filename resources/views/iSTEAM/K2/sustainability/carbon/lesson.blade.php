@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="!text-[2.5vw] top-title stroke">Carbon
        Footprint and
        the Future of
        Food</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-between h-[16vw]">
        <div class="title stroke ">
            <h2>Children, what is global warming?
                Why are we concerned about global warming?
                What causes global warming?</h2>
        </div>
        <p class="note ">Note: Encourage children to share what they have leart.</p>
    </div>

    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s2.png') }}" class="img-h-md" />
        <h2 class="title stroke">Global warming is the process of Earth getting warmer.
            It is the gradual rise in the Earth's temperature.</h2>
    </div>

    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/carbon/ab.png') }}" class="img-lg" />
        <h2 class="title stroke text-center">With the increased temperature, it causes extreme and
            unpredictable weather that affects the living environment
            of people, animals and plants.</h2>
    </div>

    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s10.png') }}" class="img-md" />
        <h2 class="title stroke text-center">Global warming is caused by an increase in greenhouse gases
            trapped in the atmosphere.</h2>
    </div>

    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s4.png') }}" class="img-lg" />
        <h2 class="title stroke">Greenhouse gases are produced when fuels such as wood, coal,
            oil and gas are used in factories and vehicles.</h2>
    </div>

    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">

        <img src="{{ asset('assets/images/K2/sustain/carbon/c1.png') }}" class="img-xl" />

        <h2 class="title stroke">All of us produce carbon dioxide, one of the greenhouse
            gases, through our day-to-day activities.</h2>
    </div>

    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/carbon/c2.png') }}" class="img-md" />
        <h2 class="title stroke text-center">A footprint is a mark you leave by walking.
            The way you live also leaves a mark.</h2>
    </div>

    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/carbon/c2.png') }}" class="img-md" />
        <h2 class="title stroke text-center">The amount of carbon dioxide you emit to the atmosphere is
            your "carbon footprint".</h2>
    </div>

    {{-- Slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <h2 class="title stroke">Let's watch a video to help us understand more about
            ""carbon footprint".</h2>
        <a href="https://www.youtube.com/watch?v=8q7_aV8eLUE"
            class="text-[#f7b94a] !text-[2vw] stroke">https://www.youtube.com/watch?v=8q7_aV8eLUE </a>
        <p class="text-center note">Note: Invite children to watch the video and then talk about what carbon footprint is.
            You may replay and pause the video as needed during the discussion.</p>
    </div>

    {{-- Slide 10 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/carbon/c2.png') }}" class="img-md" />
        <h2 class="title stroke text-center">In short, carbon footprint is an idea created to measure how
            much carbon dioxide a person, event, organization, service,
            place or product emitted to the atmosphere..</h2>
    </div>

    {{-- Slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <h2 class="title stroke">Let's see how a person's carbon footprint is calculated at the
            following website!</h2>
        <a href="https://mycarbonfootprint.spgroup.com.sg/" class="text-[#f7b94a] !text-[2vw] stroke">https://mycarbonfootprint.spgroup.com.sg/
        </a>
        <p class="text-center note">Note: Youmay use your own or a mock-up household information for this demo.
            Explain to children that nowadays there are many carbon footprint calculators online;
            for more accurate calculation, choose one that is more relevant to where you live.</p>
    </div>

    {{-- Slide 12 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <h2 class="!text-white stroke">Class Activity 1 </h2>
        <div class="text-start title stroke">
            <h2 class="title stroke text-start">Let's do:
                Get your daddy or mummy to help you calculate your carbon
                footprint. Record the result and then share with the class.</h2>
        </div>
        <p class="note text-center">Note: Send parents a notice that includes the link on the last page (or your desired
            website) to have them assist their
            children to complete the task at home. Remind children to record their results on a paper and then share in the
            class.
            Extend the activity by plotting a graph to show total, highest and lowest carbon footprint in the class.</p>
    </div>

    {{-- Slide 13 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r8.png') }}" class="img-h-md" />
        <h2 class="title stroke text-center">We all know that there's only one Earth. So we should do our
            part in protecting the Earth for a sustainable future!</h2>
    </div>

    {{-- Slide 14 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/carbon/c3.png') }}" class="img-sm" />
        <h2 class="title stroke text-center">One way everyone can do to protect our Earth is by
            reducing our carbon footprint.
            What do you think you can do to achieve the goal?</h2>
        <p class="note">Note: Encourage children to share their views.</p>
    </div>

    {{-- Slide 15 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="title stroke text-center">As a suggestion, you can reduce your carbon footprint by <br>
            <span class="!text-white !text-[3vw]"> energy and natural resources </span> <br>

            in any way possible.
        </h2>
        <p class="note">Note: For the following pages, guide children to discuss and understand how each
            example/action/habit
            reduces our carbon footprint.</p>
    </div>

    {{-- Slide 16 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex gap-[1vw] items-center">
            <img src="{{ asset('assets/images/K2/sustain/carbon/c4a.png') }}" class="img-h-sm" />
            <img src="{{ asset('assets/images/K2/sustain/carbon/c4b.png') }}" class="img-h-sm" />
        </div>
        <h2 class="title stroke text-center">Turn off lights and electronics when you are not using them to
            save electricity and thus reduce your carbon footprint.</h2>
    </div>

    {{-- Slide 17 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/carbon/c6.png') }}" class="img-md" />
        <h2 class="title stroke text-center">Turn off the faucet while brushing your teeth or washing
            dishes to save water and thus reduce your carbon footprint.</h2>
    </div>

    {{-- Slide 18 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex gap-[1vw] items-center">
            <img src="{{ asset('assets/images/K2/sustain/carbon/c7a.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/K2/sustain/carbon/c7b.png') }}" class="img-sm" />
        </div>
        <h2 class="title stroke text-center">Use energy-efficient lights and electronics to conserve energy
            and thus reduce your carbon footprint.</h2>
        <p class="note">Note: Explain that every country has its own energy efficiency label.</p>
    </div>

    {{-- Slide 19 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/carbon/c8.png') }}" class="img-sm" />
        <h2 class="title stroke text-center">Share or borrow things like books and toys from friends
            rather than buy new ones to conserve natural resources
            and thus reduce your carbon footprint.</h2>
    </div>

    {{-- Slide 20 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/carbon/c9.png') }}" class="img-lg" />
        <h2 class="title stroke text-center">Practise the three 'R's on a regular basis to keep excess waste
            out of landfills and thus reduce your carbon footprint.</h2>
    </div>

    {{-- Slide 21 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="title stroke text-center">You can also reduce your carbon footprint by
            <span class="!text-white !text-[3vw]">travelling wisely </span>.
        </h2>
    </div>

    {{-- Slide 22 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/carbon/c9.png') }}" class="img-xl" />
        <h2 class="title stroke text-center">Travelling on any fuel-powered vehicle results in greenhouse
            gas emissions. Walk, ride a bicycle or take public
            transportation instead of drive a car to conserve fuel
            and thus reduce your carbon footprint.</h2>
    </div>

    {{-- Slide 23 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[16vw]">
        <h2 class="title stroke text-center">You can reduce your carbon footprint by
            <span class="!text-white !text-[3vw]">being a responsible consumer </span> too.
        </h2>
        <p class="note">Note: For the following pages, guide children to discuss and understand how each
            example/action/habit
            reduces our carbon footprint.</p>
    </div>

    {{-- Slide 24 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/carbon/c11.png') }}" class="img-xl" />
        <h2 class="title stroke text-center">Growing, producing, processing, packaging, delivery and
            distribution of food and products we consume
            result in greenhouse gas emissions
            from farms, factories, trucks, grocery stores and more.</h2>
    </div>

    {{-- Slide 25 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/carbon/c12.png') }}" class="img-md" />
        <h2 class="title stroke text-center">Buying food and products produced locally will reduce your
            carbon footprint.</h2>
    </div>

    {{-- Slide 26 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/carbon/c13.png') }}" class="img-xl" />
        <h2 class="title stroke text-center">Growing some food for your own use will also reduce
            your carbon footprint.</h2>
    </div>

    {{-- Slide 27 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/carbon/c14.png') }}" class="img-xl" />
        <h2 class="title stroke text-center">Do you know that eating less meat will also reduce your carbon
            footprint?</h2>
        <p class="note">Note: Guide children to talk about meat (types, health benefits, nutrients) and how consuming
            less meat reduces our
            carbon footprint; guide them to understand that protein can also be found in legumes (plants; healthier source).
        </p>
    </div>

    {{-- Slide 28 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/carbon/c15.png') }}" class="img-h-md" />
        <h2 class="title stroke text-center">Besides global warming, out Earth is also facing the
            problem of population growth,</h2>
    </div>

    {{-- Slide 29 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/carbon/c16.png') }}" class="img-lg" />
        <h2 class="title stroke text-center">By 2050, the global population is expected to hit 10 billion
            people. More food needs to be produced to feed everyone.</h2>
    </div>

    {{-- Slide 30 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/carbon/c17.png') }}" class="img-lg" />
        <h2 class="title stroke text-center">Unfortunately, there is not enough land for us to grow food
            now for future populations.</h2>
    </div>

    {{-- Slide 31 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/carbon/c18.png') }}" class="img-md" />
        <h2 class="title stroke text-center">So in the years to come, people must look for alternative ways
            to grow and produce food.</h2>
        <p class="note">Note: Guide children to view and understand this video <br> <span class="text-[#F7B94A]">
                <a href="//www.youtube.com/watch?v=2ueVw83Plec"> //www.youtube.com/watch?v=2ueVw83Plec)</a></span>.</p>
    </div>

    {{-- Slide 32 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/carbon/c19.png') }}" class="img-lg" />
        <h2 class="title stroke text-center">Our future food trend that has already started
            is plant-based meat.</h2>
    </div>

    {{-- Slide 33 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/carbon/c20.png') }}" class="img-xl" />
        <h2 class="title stroke text-center">Substitutes like legumes (peas, beans, lentils), eggplants,
            mushrooms and jackfruits are used to make plant-based meat.</h2>
    </div>

    {{-- Slide 34 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <h2 class="!text-white stroke">Class Activity 2</h2>
        <div class="text-start title stroke">
            <h2>Let's do:</h2>
            <h2>Let's learn how to make a kind of h2lant-based meat and taste it.</p>
        </div>
        <p class="note">Note: You may choose other recipes for this activity but remember to use natural ingredients to
            make
            up the taste of the meat; avoid ingredients that may trigger food allergy and food intolerance.</p>
    </div>

    {{-- Slide 35 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="text-start title stroke">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal">
                <li>Name the ingredients. Which ingredient is a source of protein?</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/sustain/carbon/c21.png') }}" class="img-md" />
        <p class="note">Note: The ingredients in this recipe are cauliflowers, eggplants, carrots, onion, garlic, basil,
            crushed pumpkin
            seeds, cinnamon powder and cumin. Explain to children the nutrients that each ingredient contains.</p>
    </div>

    {{-- Slide 36 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="text-start title stroke">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal" start="2">
                <li>Cut all the main ingredients into smaller pieces.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/sustain/carbon/c21.png') }}" class="img-lg" />
        <p class="note">Note: Guide children to do the step using the kid-safe knives.</p>
    </div>

    {{-- Slide 37 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="text-start title stroke">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal" start="3">
                <li>Use a food processor to process all the main ingredients until finely chopped.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/sustain/carbon/c21.png') }}" class="img-lg" />
        <p class="note">Note: Assist children in handling the food processor.</p>
    </div>

    {{-- Slide 38 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <div class="text-start title stroke">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal" start="4">
                <li>Transfer all the finely chopped ingredients into a mixing bowl.</li>
                <li>Add a bit of cumin and cinnamon powder into the mixing bowl and stir to combine the mixture.</li>
            </ol>
        </div>
        <p class="note">Note: Guide children to do the steps.</p>
    </div>

    {{-- Slide 39 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <div class="text-start title stroke">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal" start="6">
                <li>Pan fry the mixture over medium-high heat until the moisture has evaporated and the vegetables are
                    cooked (about 6-8 minutes).</li>
                <li>Add the crushed pumpkin seeds into the pan to combine with the mixture.</li>
                <li>Pan fry for 1 minute and the meat is ready for cooking dishes.</li>
            </ol>
        </div>
        <p class="note">Note: Adult will do the steps and explain to children. You may consider film these steps to show
            children.</p>
    </div>

    {{-- Slide 40 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <div class="text-start title stroke">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal" start="9">
                <li>Shape the meat into meatballs or patties.</li>
                <li>Use them in soups, pasta or burgers.</li>
                <li>Taste the meat. Do you like it?</li>
            </ol>
        </div>
        <p class="note">Note: Adult will do step 10 and explain to children.</p>
    </div>

    {{-- Slide 41 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/carbon/c22.png') }}" class="img-md" />
        <h2 class="title stroke text-center">Besides plant-based meat, scientists use a small sample of
            animal tissue to culture lab-grown meat,
            which is also known as cultured meat.</h2>
    </div>

    {{-- Slide 42 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/carbon/c23.png') }}" class="img-xl" />
        <h2 class="title stroke text-center">There are many possibilities for the future of food.</h2>
        <p class="note">Note: If time permit, guide children to search for related information online.</p>
    </div>

    {{-- Slide 43 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/carbon/c24.png') }}" class="img-sm" />
        <h2 class="title stroke text-center">Anyway, the food of the future will be sustainable (produced
            with a smaller carbon footprint), healthier (nutritious, avoid
            food intolerances and allergies) and in sufficient quantities
            (prevent food shortages).</h2>
    </div>





    {{-- -============ --}}
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
                    window.location.href = "{{ route('carbonSelection') }}";
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
