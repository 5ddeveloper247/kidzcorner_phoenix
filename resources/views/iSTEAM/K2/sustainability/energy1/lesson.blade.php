@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
  {{-- title --}}
    <h2 class="top-title stroke">Clean Energy 1</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/sustainability/a1.png') }}" class="large-img6" />
        </div>
        <div class="title stroke">
            <h2>Children, what do you see in the pictures above?</h2>
            <p class="note">Note: Encourage children to share.</p>
        </div>
    </div>



    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/sustainability/a1.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke">Trees, sun, coal, fish, water, plants and animals are examples
            of natural resources on earth.</h2>
    </div>


    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/sustainability/a2.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke text-center">People need natural resources to stay alive.</h2>
        <p class="note">Note: Teacher can share that people need air, water and food to stay alive.
            Food comes from animals and plants.</p>
    </div>

    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/sustainability/a1.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke">Therefore, it is important to make natural resources
            sustainable, so that they will be available for a long time.</h2>
    </div>
    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e1.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke">Wood and coal are often used as fuels
            in factories and vehicles.</h2>
    </div>
    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e1.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke">The usage of wood and coal not only uses up Earth's natural
            resources quickly, it also causes air pollution which leads to
            global warming.</h2>
    </div>
    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e1.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke">To avoid using up natural resources and causing global
            warming, clean energy can be used.</h2>
    </div>

    {{-- Slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke">To avoid using up natural resources and causing global
            warming, clean energy can be used.</h2>
        <p class="note">Note: Encourage children to share their thoughts.</p>
    </div>
    {{-- slide 5 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/sustain/energy1/e2.png') }}" class="large-img6" />
        <h2 class="title stroke text-center">Clean energy is generated from natural sources or processes
            that are continually replenished.</h2>
    </div>
    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/sustain/energy1/e2.png') }}" class="large-img6" />
        <h2 class="title stroke text-center">The energy generated do not cause pollution to Earth, that's
            why they are called clean energy.</h2>
        <p class="note">Note: Teacher can explain what pollution means.</p>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e3.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke text-center">Energy from the sun is known as solar energy.</h2>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e3.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke text-center">How do you feel when you stand under the sun?</h2>
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e3.png') }}" />
        </div>
        <h2 class="title stroke text-center">The sun gives off heat and light.</h2>
    </div>

    {{-- Slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke">Children, what can the sun’s heat be used for?</h2>
        <p class="note">Note: Encourage children to share their thoughts.</p>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e4.png') }}" />
        </div>
        <h2 class="title stroke text-center">This is a solar oven. It is made from a box and wrapped up
            with aluminium foil and cling wrap.</h2>
    </div>

    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="flex items-center text-white">
            1. What materials are used in creating the solar oven?
            <img src="{{ asset('assets/images/K2/sustain/energy1/information.png') }}" class="!max-w-[2.5vw]" />
        </div>

        <div class="flex items-center text-white">
            2. Why do you think these materials are used?</h2>
            <img src="{{ asset('assets/images/K2/sustain/energy1/information.png') }}" class="!max-w-[2.5vw]" />
        </div>
        <p class="note">Note: Teacher to pass the solar oven around to let children have a closer look.</p>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e4.png') }}" />
        </div>
        <h2 class="title stroke text-center">A box with cover, aluminum foil, cling wrap and black paper.</h2>
    </div>

    {{-- pivtut --}}
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e0a.png') }}" />
        </div>
        <h2 class="title stroke text-center">The box gives the solar oven the structure like an oven.</h2>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/ab.png') }}" />
        </div>
        <h2 class="title stroke text-center">The aluminum foil on the cover helps to reflect light
            into and within the box.</h2>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e13.png') }}" />
        </div>
        <h2 class="title stroke text-center">The colour black absorbs heat. Putting a piece of black paper
            in the box helps to absorb heat from the sun.</h2>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e13.png') }}" />
        </div>
        <h2 class="title stroke text-center">The black paper absorbs heat into the box and helps to
            increase the temperature in the box.</h2>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e13.png') }}" />
        </div>
        <h2 class="title stroke text-center">Wrapping the cover with cling wraps prevents heat from
            escaping from the box.</h2>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="note">Class Activity 1</h2>
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e0a.png') }}" />
        </div>
        <h2 class="title stroke text-center">Let's find out:
            Create a solar oven and find out if the sun's heat
            can cook food.</h2>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="title stroke text-center">Let's do:
            1. Set up the oven and put the thermometer inside as shown.
            2. Write down the temperature of the oven before putting
            under the sun.
        </h2>
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e0a.png') }}" />
        </div>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="title stroke text-center">Let's do:
            3. Discuss as a class on the kind of food to try and cook in the
            solar oven.
            4. Draw how the food item looks like before putting in the
            oven.</h2>
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e5.png') }}" />
        </div>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke">Let's do:
            5. Place the food item in the box, close it tight and lift up the
            top panel to let the sunlight shine into it.
            6. Place the solar oven outdoors under the sun.
            7. Observe the temperature reading on the thermometer.
            8. Check the temperature reading and the food item after one
            hour.
            9. Draw and record the temperature reading on the learning
            journal.</h2>
        <p class="text-center note">Note: The experiment outcome will vary base on the weather.</p>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="title stroke text-center">Let's do:
            10. Discuss as a class, share observations and conclusions based
            on the activity.</h2>
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e5.png') }}" />
        </div>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e6.png') }}" />
        </div>
        <h2 class="title stroke text-center">Solar panels are used to absorb the energy from the sun.</h2>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e6.png') }}" />
        </div>
        <h2 class="title stroke text-center">When the sun shines on the panels, the panels use the
            energy and create electricity.</h2>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e6a.png') }}" />
        </div>
        <h2 class="title stroke text-center">The electricity generated can be used to power up lights,
            water heaters and other electrical devices.</h2>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="note">Class Activity 2</h2>
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e7.png') }}" />
        </div>
        <h2 class="title stroke text-center">Let's find out:
            How does a solar-powered light work?</h2>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="title stroke text-center">Let's do:
            1. Put the solar-powered light near a window or outdoors
            where the solar panel faces the sun.</h2>
        <div class="flex gap-2 items-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e8.png') }}" />
            <img src="{{ asset('assets/images/K2/sustain/energy1/e9.png') }}" />
        </div>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke">Let's do:
            2. Leave the solar-powered light in the sun for 15 minutes.
            3. Bring the solar-powered light into the class and switch off
            the lights in the class.
            4. Did the solar-powered light light up? Why?</h2>
        <p class="text-center note">Note: You can cover the solar panel to make the solar powered light light up too.
            Encourage children
            to discuss how did the solar powered light light up even when there's not batteries in it.</p>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke">Let's do:
            5. Put the solar-powered light in a cupboard for a few hours
            until the energy has been used up.
            6. Switch off the lights in the classroom and see if the solar-
            powered light lights up.
            7. Share and discuss observation as a class.</h2>
        <p class="text-center note">Note: Teacher to prompt children to share their observations and draw conclusions from
            it.
            Do encourage children to think of others ways to make the solar power light light up.</p>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e10.png') }}" />
        </div>
        <h2 class="title stroke text-center">The solar-powered light lights up when the classroom is dark.
            Energy from the sun is stored in the solar panel and lights up
            the light bulb when it's dark.</h2>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e7.png') }}" />
        </div>
        <h2 class="title stroke text-center">The solar-powered light does not light up when the classroom
            is bright. The solar panel detects light when it's bright and it
            does not light up the light bulb.</h2>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e7.png') }}" />
        </div>
        <h2 class="title stroke text-center">Why didn't the solar-powered light light up after being placed
            in the cupboard for a long time?</h2>
        <p class="note">Note: Encourage children to share their thoughts.</p>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e7.png') }}" />
        </div>
        <h2 class="title stroke text-center">This is because the solar panel did not get any energy from
            the sun when it was in the cupboard.
            Without energy, it has no power to light up..</h2>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e3.png') }}" />
        </div>
        <h2 class="title stroke text-center">The sun gives us heat and light which can be converted into
            useful clean energy.</h2>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e6.png') }}" />
        </div>
        <h2 class="title stroke text-center">Solar energy is one of the clean energies that can be used
            to replaced coal and wood.</h2>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="note">Learning Journal</h2>
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e5.png') }}" />
        </div>
    </div>


    {{-- ====================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>


    <div id="buttons" class="absolute flex flex-row">
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
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");

            // Get all info/click buttons (info-btn1, info-btn2, click-btn1, click-btn2, etc.)
            const infoButtons = document.querySelectorAll("[class*='info-btn'], [class*='click-btn']");

            let currentSlide = 0;
            let parentSlideIndex = null;
            let isViewingInfoSlides = false;
            let currentInfoClass = null; // Track which info/click class we're viewing

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                // Check if last slide OR last info/click slide
                const isLastSlide = index === slides.length - 1;
                const isLastInfoSlide = isViewingInfoSlides && !hasNextInfoSlide(index);

                if (isLastSlide || isLastInfoSlide) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            // Check if there's another info/click slide with same class after current one
            function hasNextInfoSlide(currentIndex) {
                if (!currentInfoClass) return false;

                for (let i = currentIndex + 1; i < slides.length; i++) {
                    if (slides[i].classList.contains(currentInfoClass)) {
                        return true;
                    }
                }
                return false;
            }

            // Get info/click class from button (info-btn1 → , click-btn1 → click1)
            function getInfoClassFromButton(button) {
                const classList = Array.from(button.classList);

                // Check for info-btn pattern
                const infoBtnClass = classList.find(cls => cls.startsWith('info-btn'));
                if (infoBtnClass) {
                    const number = infoBtnClass.replace('info-btn', '');
                    return 'info-slide' + number;
                }

                // Check for click-btn pattern
                const clickBtnClass = classList.find(cls => cls.startsWith('click-btn'));
                if (clickBtnClass) {
                    const number = clickBtnClass.replace('click-btn', '');
                    return 'click' + number;
                }

                return null;
            }

            // Info/Click button handlers
            infoButtons.forEach((btn) => {
                btn.addEventListener("click", (e) => {
                    e.preventDefault(); // Prevent default anchor behavior

                    parentSlideIndex = currentSlide;
                    isViewingInfoSlides = true;
                    currentInfoClass = getInfoClassFromButton(btn);

                    // Find the first slide with matching info/click class
                    for (let i = 0; i < slides.length; i++) {
                        if (slides[i].classList.contains(currentInfoClass)) {
                            currentSlide = i;
                            showSlide(currentSlide);
                            break;
                        }
                    }
                });
            });

            // NEXT button - skip info/click slides if not viewing them
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;

                        // Skip info/click slides if not viewing them
                        while (!isViewingInfoSlides &&
                            currentSlide < slides.length &&
                            isInfoSlide(slides[currentSlide])) {
                            currentSlide++;
                        }

                        // If viewing info/click slides, only show slides with current class
                        if (isViewingInfoSlides) {
                            while (currentSlide < slides.length &&
                                !slides[currentSlide].classList.contains(currentInfoClass)) {
                                currentSlide++;
                            }
                        }

                        if (currentSlide < slides.length) {
                            showSlide(currentSlide);
                        }
                    }
                });
            });

            // Check if slide is any info/click slide (info-slide1, info-slide2, click1, click2, etc.)
            function isInfoSlide(slide) {
                return Array.from(slide.classList).some(cls =>
                    (cls.startsWith('info-slide') && cls.match(/^info-slide\d+$/)) ||
                    (cls.startsWith('click') && cls.match(/^click\d+$/))
                );
            }

            // Return button
            returnButton.addEventListener("click", () => {
                // Redirect to route if on slide 1
                if (currentSlide === 1) {
                    window.location.href = "{{ route('energy1Selection') }}";
                    return;
                }

                if (isViewingInfoSlides && currentSlide > 0) {
                    // Check if previous slide is also same info/click class
                    let prevSlide = currentSlide - 1;

                    // Find previous slide with same info/click class
                    while (prevSlide >= 0 && !slides[prevSlide].classList.contains(currentInfoClass)) {
                        prevSlide--;
                    }

                    if (prevSlide >= 0 && slides[prevSlide].classList.contains(currentInfoClass)) {
                        currentSlide = prevSlide;
                        showSlide(currentSlide);
                    } else {
                        // No more info/click slides, return to parent
                        currentSlide = parentSlideIndex;
                        isViewingInfoSlides = false;
                        currentInfoClass = null;
                        parentSlideIndex = null;
                        showSlide(currentSlide);
                    }
                } else if (currentSlide > 0) {
                    currentSlide--;

                    // Skip info/click slides when going back
                    while (currentSlide > 0 && isInfoSlide(slides[currentSlide])) {
                        currentSlide--;
                    }

                    showSlide(currentSlide);
                }
            });;


            // DONE button handler
            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    if (isViewingInfoSlides && parentSlideIndex !== null) {
                        // Reset flags BEFORE returning to parent slide
                        const returnToSlide = parentSlideIndex;
                        isViewingInfoSlides = false;
                        currentInfoClass = null;
                        parentSlideIndex = null;
                        currentSlide = returnToSlide;
                        showSlide(currentSlide);
                    } else {
                        // Navigate to route
                        window.location.href = "{{ route('energy1Selection') }}";
                    }
                });
            }

            // Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
