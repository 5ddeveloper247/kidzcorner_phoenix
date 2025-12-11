@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    <h2 class="top-title stroke">Clean Energy 1</h2>

    {{-- Slide 1 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a1.png') }}" class="img-lg" />
        <div>
            <h2 class="title stroke">Children, what do you see in the pictures above?</h2>
        </div>
        <p class="note">Note: Encourage children to share.</p>
    </div>

    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a1.png') }}" class="img-lg" />
        <h2 class="title stroke">Trees, sun, coal, fish, water, plants and animals are examples of natural resources on
            earth.</h2>
    </div>

    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a2.png') }}" class="img-md" />
        <h2 class="title stroke text-center">People need natural resources to stay alive.</h2>
        <p class="note">Note: Teacher can share that people need air, water and food to stay alive. Food comes from
            animals and plants.</p>
    </div>

    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a1.png') }}" class="img-lg" />
        <h2 class="title stroke">Therefore, it is important to make natural resources sustainable, so that they will be
            available for a long time.</h2>
    </div>

    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/energy1/e1.png') }}" class="img-lg" />
        <h2 class="title stroke">Wood and coal are often used as fuels in factories and vehicles.</h2>
    </div>

    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/energy1/e1.png') }}" class="img-lg" />
        <h2 class="title stroke">The usage of wood and coal not only uses up Earth's natural resources quickly, it also
            causes air pollution which leads to global warming.</h2>
    </div>

    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/energy1/e1.png') }}" class="img-lg" />
        <h2 class="title stroke">To avoid using up natural resources and causing global warming, clean energy can be used.
        </h2>
    </div>

    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[20vw] self-end">
        <h2 class="title stroke">Do you know what clean energy is?</h2>
        <p class="note">Note: Encourage children to share their thoughts.</p>
    </div>

    {{-- Slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/energy1/e2.png') }}" class="img-md" />
        <h2 class="title stroke text-center">Clean energy is generated from natural sources or processes that are
            continually replenished.</h2>
    </div>

    {{-- Slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/energy1/e2.png') }}" class="img-md" />
        <h2 class="title stroke text-center">The energy generated do not cause pollution to Earth, that's why they are
            called clean energy.</h2>
        <p class="note">Note: Teacher can explain what pollution means.</p>
    </div>

    {{-- Slide 11 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/energy1/e3.png') }}" class="img-lg" />
        <h2 class="title stroke text-center">Energy from the sun is known as solar energy.</h2>
    </div>

    {{-- Slide 12 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/energy1/e3.png') }}" class="img-lg" />
        <h2 class="title stroke text-center">How do you feel when you stand under the sun?</h2>
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>

    {{-- Slide 13 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/energy1/e3.png') }}" class="img-lg" />
        <h2 class="title stroke text-center">The sun gives off heat and light.</h2>
    </div>

    {{-- Slide 14 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[20vw] self-end">
        <h2 class="title stroke">Children, what can the sun's heat be used for?</h2>
        <p class="note">Note: Encourage children to share their thoughts.</p>
    </div>

    {{-- Slide 15 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/energy1/e4.png') }}" class="img-md" />
        <h2 class="title stroke text-center">This is a solar oven. It is made from a box and wrapped up with aluminium foil
            and cling wrap.</h2>
    </div>

    {{-- Slide 16 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <div>
            <div class="flex items-center justify-between">
                <h2 class="title stroke text-start">1. What materials are used in creating the solar oven?</h2>
                <button class="info-btn1">
                    <img src="{{ asset('assets/images/K2/sustain/energy1/info-btn.png') }}" class="!w-[3vw]" />
                </button>
            </div>

            <div class="flex items-center justify-between">
                <h2 class="title stroke text-start">2. Why do you think these materials are used?</h2>
                <button class="info-btn2">
                    <img src="{{ asset('assets/images/K2/sustain/energy1/info-btn.png') }}" class="!w-[3vw]" />
                </button>
            </div>
        </div>
        <p class="note">Note: Teacher to pass the solar oven around to let children have a closer look.</p>
    </div>

    {{-- Info Slide 1 --}}
    <div class="slide hidden flex info-slide1 flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/energy1/e4.png') }}" class="img-md" />
        <h2 class="title stroke text-center">A box with cover, aluminum foil, cling wrap and black paper.</h2>
    </div>

    {{-- Info Slide 2-1 --}}
    <div class="slide hidden flex flex-col info-slide2 items-center">
        <img src="{{ asset('assets/images/K2/sustain/energy1/e0a.png') }}" class="img-md" />
        <h2 class="title stroke text-center">The box gives the solar oven the structure like an oven.</h2>
    </div>

    {{-- Info Slide 2-2 --}}
    <div class="slide hidden flex flex-col info-slide2 items-center">
        <img src="{{ asset('assets/images/K2/sustain/energy1/ab.png') }}" class="img-lg" />
        <h2 class="title stroke text-center">The aluminum foil on the cover helps to reflect light into and within the box.
        </h2>
    </div>

    {{-- Info Slide 2-3 --}}
    <div class="slide hidden flex flex-col info-slide2 items-center">
        <img src="{{ asset('assets/images/K2/sustain/energy1/e13.png') }}" class="!w-[32vw]" />
        <h2 class="title stroke text-center">The colour black absorbs heat. Putting a piece of black paper in the box helps
            to absorb heat from the sun.</h2>
    </div>

    {{-- Info Slide 2-4 --}}
    <div class="slide hidden flex flex-col info-slide2 items-center">
        <img src="{{ asset('assets/images/K2/sustain/energy1/e13.png') }}" class="!w-[32vw]" />
        <h2 class="title stroke text-center">The black paper absorbs heat into the box and helps to increase the temperature
            in the box.</h2>
    </div>

    {{-- Info Slide 2-5 --}}
    <div class="slide hidden flex flex-col info-slide2 items-center">
        <img src="{{ asset('assets/images/K2/sustain/energy1/e13.png') }}" class="img-md" />
        <h2 class="title stroke text-center">Wrapping the cover with cling wraps prevents heat from escaping from the box.
        </h2>
    </div>

    {{-- Slide 17 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="title stroke !text-white">Class Activity 1</h2>
        <img src="{{ asset('assets/images/K2/sustain/energy1/e0a.png') }}" class="!w-[25vw]" />
        <h2 class="title stroke text-start">Let's find out: <br> Create a solar oven and find out if the sun's heat can
            cook
            food.</h2>
    </div>

    {{-- Slide 18 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="title stroke text-start">
            <h2>Let's do:</h2>
            <ol class="lesson-ul list-decimal" start="1">
                <li>Set up the oven and put the thermometer inside as shown.</li>
                <li>Write down the temperature of the oven before putting under the sun.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/sustain/energy1/e0a.png') }}" class="img-sm" />
    </div>

    {{-- Slide 19 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="title stroke text-start">
            <h2>Let's do:</h2>
            <ol class="lesson-ul list-decimal" start="3">
                <li>Discuss as a class on the kind of food to try and cook in the solar oven.</li>
                <li>Draw how the food item looks like before putting in the oven.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/sustain/energy1/e5.png') }}" class="img-md" />
    </div>

    {{-- Slide 20 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <div class="title stroke text-start">
            <h2>Let's do:</h2>
            <ol class="lesson-ul list-decimal" start="5">
                <li>Place the food item in the box, close it tight and lift up the top panel to let the sunlight shine into
                    it.</li>
                <li>Place the solar oven outdoors under the sun.</li>
                <li>Observe the temperature reading on the thermometer.</li>
                <li>Check the temperature reading and the food item after one hour.</li>
                <li>Draw and record the temperature reading on the learning journal.</li>
            </ol>
        </div>
        <p class="text-center note">Note: The experiment outcome will vary base on the weather.</p>
    </div>

    {{-- Slide 21 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="title stroke text-start">
            <h2>Let's do:</h2>
            <ol class="lesson-ul list-decimal" start="10">
                <li>Discuss as a class, share observations and conclusions based on the activity.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/sustain/energy1/e5.png') }}" class="img-lg" />
    </div>

    {{-- Slide 22 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/energy1/e6.png') }}" class="img-lg" />
        <h2 class="title stroke text-center">Solar panels are used to absorb the energy from the sun.</h2>
    </div>

    {{-- Slide 23 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/energy1/e6.png') }}" class="img-lg" />
        <h2 class="title stroke text-center">When the sun shines on the panels, the panels use the energy and create
            electricity.</h2>
    </div>

    {{-- Slide 24 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/energy1/e6a.png') }}" class="img-lg" />
        <h2 class="title stroke text-center">The electricity generated can be used to power up lights, water heaters and
            other electrical devices.</h2>
    </div>

    {{-- Slide 25 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="title stroke">Class Activity 2</h2>
        <img src="{{ asset('assets/images/K2/sustain/energy1/e7.png') }}" class="!w-[30vw]" />
        <h2 class="title stroke text-center">Let's find out: How does a solar-powered light work?</h2>
    </div>

    {{-- Slide 26 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="title stroke text-start">
            <h2>Let's do:</h2>
            <ol class="lesson-ul list-decimal" start="1">
                <li>Put the solar-powered light near a window or outdoors where the solar panel faces the sun.</li>
            </ol>
        </div>
        <div class="flex gap-[1vw] items-center">
            <div class="flex gap-[.8vw]">
                <p class="text-[1vw] text-white">solar <br>
                    panel</p>
                <img src="{{ asset('assets/images/K2/sustain/energy1/e8.png') }}" class="img-xs" />
            </div>
            <img src="{{ asset('assets/images/K2/sustain/energy1/e9.png') }}" class="!w-[25vw]" />
        </div>
    </div>

    {{-- Slide 27 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <div class="title stroke text-start">
            <h2>Let's do:</h2>
            <ol class="lesson-ul list-decimal" start="2">
                <li>Leave the solar-powered light in the sun for 15 minutes.</li>
                <li>Bring the solar-powered light into the class and switch off the lights in the class.</li>
                <li>Did the solar-powered light light up? Why?</li>
            </ol>
        </div>
        <p class="text-center note">Note: You can cover the solar panel to make the solar powered light light up too.
            Encourage children to discuss how did the solar powered light light up even when there's not batteries in it.
        </p>
    </div>

    {{-- Slide 28 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <div class="title stroke text-start">
            <h2>Let's do:</h2>
            <ol class="lesson-ul list-decimal" start="5">
                <li>Put the solar-powered light in a cupboard for a few hours until the energy has been used up.</li>
                <li>Switch off the lights in the classroom and see if the solar-powered light lights up.</li>
                <li>Share and discuss observation as a class.</li>
            </ol>
        </div>
        <p class="text-center note">Note: Teacher to prompt children to share their observations and draw conclusions from
            it. Do encourage children to think of others ways to make the solar power light light up.</p>
    </div>

    {{-- Slide 29 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/energy1/e10.png') }}" class="img-md" />
        <h2 class="title stroke text-center">The solar-powered light lights up when the classroom is dark. Energy from the
            sun is stored in the solar panel and lights up the light bulb when it's dark.</h2>
    </div>

    {{-- Slide 30 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/energy1/e7.png') }}" class="img-md" />
        <h2 class="title stroke text-center">The solar-powered light does not light up when the classroom is bright. The
            solar panel detects light when it's bright and it does not light up the light bulb.</h2>
    </div>

    {{-- Slide 31 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/energy1/e7.png') }}" class="img-md" />
        <h2 class="title stroke text-center">Why didn't the solar-powered light light up after being placed in the cupboard
            for a long time?</h2>
        <p class="note">Note: Encourage children to share their thoughts.</p>
    </div>

    {{-- Slide 32 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/energy1/e7.png') }}" class="img-md" />
        <h2 class="title stroke text-center">This is because the solar panel did not get any energy from the sun when it
            was in the cupboard. Without energy, it has no power to light up.</h2>
    </div>

    {{-- Slide 33 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/energy1/e3.png') }}" class="img-lg" />
        <h2 class="title stroke text-center">The sun gives us heat and light which can be converted into useful clean
            energy.</h2>
    </div>

    {{-- Slide 34 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/energy1/e6.png') }}" class="img-lg" />
        <h2 class="title stroke text-center">Solar energy is one of the clean energies that can be used to replaced coal
            and wood.</h2>
    </div>

    {{-- Slide 35 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <img src="{{ asset('assets/images/K2/sustain/energy1/e5.png') }}" class="img-lg" />
    </div>


    {{-- ================= --}}
    {{-- CButton --}}
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
        document.addEventListener("DOMContentLoaded", function() {
            const slides = document.querySelectorAll(".slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");
            const clickableButtons = document.querySelectorAll("[class*='info-btn'], [class*='click-btn']");

            let currentSlide = 0;
            let isViewingSpecialSlides = false;
            let parentSlide = null;
            let currentSpecialType = null;

            const returnRoute = "{{ route('energy1Selection') }}";
            const doneRoute = "{{ route('k2sustainability') }}";

            function isSpecialSlide(slide) {
                const classList = Array.from(slide.classList);

                for (let className of classList) {
                    if (className.match(/^click\d+$/) || className.match(/^info-slide\d+$/)) {
                        return true;
                    }
                }
                return false;
            }

            function getSpecialTypeFromButton(button) {
                const classList = Array.from(button.classList);

                for (let className of classList) {
                    if (className.startsWith('click-btn')) {
                        const number = className.replace('click-btn', '');
                        return 'click' + number;
                    }
                    if (className.startsWith('info-btn')) {
                        const number = className.replace('info-btn', '');
                        return 'info-slide' + number;
                    }
                }
                return null;
            }

            function hasMoreSpecialSlides(fromIndex) {
                if (!currentSpecialType) return false;

                for (let i = fromIndex + 1; i < slides.length; i++) {
                    if (slides[i].classList.contains(currentSpecialType)) {
                        return true;
                    }
                }
                return false;
            }

            function isLastSlide(index) {
                if (index === slides.length - 1) return true;
                if (isViewingSpecialSlides && !hasMoreSpecialSlides(index)) return true;
                return false;
            }

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    if (i === index) {
                        slide.classList.remove("hidden");
                    } else {
                        slide.classList.add("hidden");
                    }
                });

                if (isLastSlide(index)) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            function goToNextSlide() {
                if (currentSlide >= slides.length - 1) return;

                currentSlide++;

                while (currentSlide < slides.length) {
                    const slide = slides[currentSlide];

                    if (isViewingSpecialSlides) {
                        if (slide.classList.contains(currentSpecialType)) break;
                    } else {
                        if (!isSpecialSlide(slide)) break;
                    }

                    currentSlide++;
                }

                if (currentSlide < slides.length) {
                    showSlide(currentSlide);
                }
            }

            function goToPreviousSlide() {
                if (currentSlide === 0 && !isViewingSpecialSlides) {
                    window.location.href = returnRoute;
                    return;
                }

                if (isViewingSpecialSlides) {
                    let prevSlide = currentSlide - 1;

                    while (prevSlide >= 0) {
                        if (slides[prevSlide].classList.contains(currentSpecialType)) break;
                        prevSlide--;
                    }

                    if (prevSlide >= 0) {
                        currentSlide = prevSlide;
                        showSlide(currentSlide);
                    } else {
                        currentSlide = parentSlide;
                        isViewingSpecialSlides = false;
                        currentSpecialType = null;
                        parentSlide = null;
                        showSlide(currentSlide);
                    }
                } else {
                    if (currentSlide > 0) {
                        currentSlide--;

                        while (currentSlide > 0 && isSpecialSlide(slides[currentSlide])) {
                            currentSlide--;
                        }

                        showSlide(currentSlide);
                    }
                }
            }

            clickableButtons.forEach(button => {
                button.addEventListener("click", function(e) {
                    e.preventDefault();

                    parentSlide = currentSlide;
                    isViewingSpecialSlides = true;
                    currentSpecialType = getSpecialTypeFromButton(button);

                    for (let i = 0; i < slides.length; i++) {
                        if (slides[i].classList.contains(currentSpecialType)) {
                            currentSlide = i;
                            showSlide(currentSlide);
                            break;
                        }
                    }
                });
            });

            nextButtons.forEach(btn => {
                btn.addEventListener("click", goToNextSlide);
            });

            returnButton.addEventListener("click", goToPreviousSlide);

            if (doneButton) {
                doneButton.addEventListener("click", function() {
                    if (isViewingSpecialSlides && parentSlide !== null) {
                        currentSlide = parentSlide;
                        isViewingSpecialSlides = false;
                        currentSpecialType = null;
                        parentSlide = null;
                        showSlide(currentSlide);
                    } else {
                        window.location.href = doneRoute;
                    }
                });
            }

            showSlide(currentSlide);
        });
    </script>
@endpush
