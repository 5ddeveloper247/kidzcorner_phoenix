@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Structure of a Car</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/c-str/s1.png') }}" class="img-lg" />
        <h2 class="title stroke">Children, what do you see in this picture?</h2>
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>

    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/c-str/s1.png') }}" class="img-lg" />
        <h2 class="title stroke">Do you know that a car is a structure?</h2>
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>

    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/c-str/s1.png') }}" class="img-lg" />
        <h2 class="title stroke">A car is made up of many smaller parts! <br>
            What <span class="!text-white">shapes</span> do you see on the car?</h2>
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>

    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/c-str/s2.png') }}" class="img-lg" />
        <h2 class="title stroke">The <span class="!text-white">body</span> of the car is made up of one short
            <span class="!text-white">rectangle</span> and one long <span class="!text-white">rectangle</span>.
        </h2>
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>

    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/c-str/s3.png') }}" class="img-lg" />
        <h2 class="title stroke">Two <span class="!text-white">triangles</span> can be found on the car.</h2>
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>

    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/c-str/s4.png') }}" class="img-lg" />
        <h2 class="title stroke">The <span class="!text-white">wheel</span> are in the <span
                class="!text-white">shape</span>
            of a circle.</h2>
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>

    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">Let's make a car using the construction set!</h2>
    </div>

    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <h2 class="title stroke !text-white">Individual Activity 1</h2>
        <img src="{{ asset('assets/images/N2/structure/c-str/s1.png') }}" class="img-md" />
        <h2 class="title stroke !text-start">Mission: <br>
            Make a car similar to the one in the picture using <br>
            the construction set.</h2>
    </div>

    {{-- Slide 9 --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke">
                <li>Get the following parts from the construction set.</li>
            </ol>
        </div>
        <div class="flex gap-[1vw] justify-center items-end">
            <img src="{{ asset('assets/images/N2/structure/c-str/s5.png') }}" class="img-md" />
            <p class="note !text-white !text-start">small prism X 2 <br>
                cube X 6 <br>
                block connector X 10<br>
                pair of small wheels X 2</p>
        </div>
        <p class="note">Note: Encourage children to work together in small group and pick out the parts needed.</p>
    </div>

    {{-- Slide 10 --}}
    <div class="slide hidden flex flex-col justify-between h-[30vw] items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="2">
                <li>Take 6 cubes and 5 connectors to form the long rectangle for the car's body.</li>
            </ol>
        </div>
        <div class="flex gap-[1vw] justify-center items-center gap-[1vw]">
            <img src="{{ asset('assets/images/N2/structure/c-str/s6.png') }}" class="!w-[27vw]" />
            <img src="{{ asset('assets/images/N2/structure/c-str/s7.png') }}" class="!w-[27vw]" />
        </div>
        <p class="note">Note: Encourage and guide the children to try to connect the pieces.</p>
    </div>

    {{-- Slide 11 --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="3">
                <li>Use a block connector to connect the cubes together one by one.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/structure/c-str/s8.png') }}" class="img-lg" />
        <p class="note">Note: Encourage and assist the children to connect the pieces as it may be
            hard for them to fix the pieces.</p>
    </div>

    {{-- Slide 12 --}}
    <div class="slide hidden flex flex-col justify-between h-[30vw] items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="4">
                <li>Take 2 cubes, 2 small prism and 3 block connector to form the top part of the car.</li>
            </ol>
        </div>
        <div class="flex gap-[1vw] justify-center items-center">
            <img src="{{ asset('assets/images/N2/structure/c-str/s9.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/N2/structure/c-str/s10.png') }}" class="img-sm" />
        </div>
        <p class="note">Note: Assist children in fixing the pieces if required.</p>
    </div>

    {{-- Slide 13 --}}
    <div class="slide hidden flex flex-col justify-between h-[30vw] items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="5">
                <li>Connect the prism to the cube using the connector</li>
            </ol>
        </div>
        <div class="flex gap-[1vw] justify-center items-center">
            <img src="{{ asset('assets/images/N2/structure/c-str/s11.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/N2/structure/c-str/s12.png') }}" class="img-sm" />
        </div>
        <p class="note">Note: Assist children in fixing the pieces if required.</p>
    </div>

    {{-- Slide 14 --}}
    <div class="slide hidden flex flex-col justify-between h-[30vw] items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="6">
                <li>Continue to connect another cube and prism to form the shape as shown.</li>
            </ol>
        </div>
        <div class="flex gap-[1vw] justify-center items-center">
            <img src="{{ asset('assets/images/N2/structure/c-str/s13.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/N2/structure/c-str/s14.png') }}" class="img-sm" />
        </div>
        <p class="note">Note: Assist children in fixing the pieces if required.</p>
    </div>

    {{-- Slide 15 --}}
    <div class="slide hidden flex flex-col justify-between h-[30vw] items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="7">
                <li>Connect two connectors on the prisms as shown.</li>
            </ol>
        </div>
        <div class="flex gap-[1vw] justify-center items-center">
            <img src="{{ asset('assets/images/N2/structure/c-str/s15.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/N2/structure/c-str/s16.png') }}" class="img-sm" />
        </div>
        <p class="note">Note: Assist children in fixing the pieces if required.</p>
    </div>

    {{-- Slide 16 --}}
    <div class="slide hidden flex flex-col justify-between h-[30vw] items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="8">
                <li>Now connect the two parts together to form the shape of the car.</li>
            </ol>
        </div>
        <div class="flex gap-[1vw] justify-center items-center">
            <img src="{{ asset('assets/images/N2/structure/c-str/s17.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/N2/structure/c-str/s18.png') }}" class="img-sm" />
        </div>
        <p class="note">Note: Assist children in fixing the pieces if required.</p>
    </div>

    {{-- Slide 17 --}}
    <div class="slide hidden flex flex-col justify-between items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke space-y-[1vw]" start="9">
                <li>Turn the structure upside down and connect the wheels.</li>
                <li>Connect one pair on the second cube and the other on the fifth cube.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/structure/c-str/s19.png') }}" class="!w-[35vw]" />
        <p class="note">Note: Assist children in fixing the pieces if required.</p>
    </div>

    {{-- Slide 18 --}}
    <div class="slide hidden flex flex-col justify-between">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="11">
                <li>The car is completed!</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/structure/c-str/s20.png') }}" class="img-md" />
        <p class="note">Note: Assist children in fixing the pieces if required.</p>
    </div>

    {{-- Slide 19 --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <img src="{{ asset('assets/images/N2/structure/c-str/s21.png') }}" class="img-lg" />
        <h2 class="title stroke">Most cars have similar structures and look similar in <span
                class="!text-white">shape</span> .</h2>
    </div>

    {{-- Slide 20 --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <div class="flex gap-[1vw] justify-center items-center">
            <img src="{{ asset('assets/images/N2/structure/c-str/s22.png') }}" class="!w-[25vw]" />
            <img src="{{ asset('assets/images/N2/structure/c-str/s23.png') }}" class="!w-[25vw]" />
        </div>
        <h2 class="title stroke">Some cars have special <span class="!text-white">designs</span> and their
            <span class="!text-white">shape</span> structure looks different.
        </h2>
        <p class="note">Note: Encourage children to point out the shapes they see or describe how the cars look.</p>
    </div>

    {{-- Slide 21 --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <div class="flex gap-[1vw] justify-center items-center">
            <img src="{{ asset('assets/images/N2/structure/c-str/s24.png') }}" class="!w-[25vw]" />
            <img src="{{ asset('assets/images/N2/structure/c-str/s25.png') }}" class="!w-[25vw]" />
        </div>
        <h2 class="title stroke">This is a convertible. <br>
            This car can fold its roof and keep it hidden.</h2>
        <p class="note">Note: Encourage children to point out the shapes they see or describe how the cars look.</p>
    </div>

    {{-- Slide 22 --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <video id="video1" class="pointer-events-none">
            <source src="{{ asset('assets/images/N2/structure/videos/5.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Watch how the <span class="!text-white">roof</span> appears from the back of the car,
            opens up and covers the car.</h2>
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- Slide 23 --}}
    <div class="slide hidden flex flex-col justify-between h-[30vw] items-center">
        <div class="flex gap-[1vw] justify-center items-center">
            <img src="{{ asset('assets/images/N2/structure/c-str/s27.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/N2/structure/c-str/s28.png') }}" class="img-sm" />
        </div>
        <h2 class="title stroke">Vans and trucks are structures too! <br>
            Can you spot the <span class="!text-white">shapes</span> on them?</h2>
        <p class="note">Note: Encourage children to point out the shapes they see on the vehicles.</p>
    </div>

    {{-- Slide 24 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <h2 class="title stroke !text-white">Individual Activity</h2>
        <img src="{{ asset('assets/images/N2/structure/c-str/s29.png') }}" class="img-md" />
        <h2 class="title stroke !text-start">Mission: <br>
            Let's build a small vehicle using the construction set.</h2>
        <p class="note">Note: Children can choose from the pictures above or any other small vehicles they like.
            You may assign 5-6 children to a set a DDQ blocks for this activity.</p>
    </div>

    {{-- Slide 25 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[30vw]">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke">
                <li>Choose a picture of the small vehicle you like.</li>
                <li>Look at the shapes on the vehicle.</li>
                <li>Find the pieces/blocks needed to form the shapes.</li>
                <li>Combine the parts together.</li>
                <li>Present your creation to your friends.</li>
            </ol>
        </div>
        <p class="note">Note: Small vehicles means car, lorry, van, taxi, motorcycle etc. Teacher to assist children
            in connecting if they are unable to do it. <a class="text-[#F7B94A]click-btn1" href="">Click here</a>
            if you need to show some examples.
        </p>
    </div>

    {{-- Slide 26 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/N2/structure/c-str/s30.png') }}" class="img-xl" />
        <h2 class="title stroke">This is an example of the car with a rounded top.</h2>
    </div>

    {{-- Slide 27 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/N2/structure/c-str/s31.png') }}" class="img-lg" />
        <h2 class="title stroke">This is an example of the convertible.</h2>
    </div>

    {{-- Slide 28 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/N2/structure/c-str/s32.png') }}" class="img-xl" />
        <h2 class="title stroke">This is an example of a small truck.</h2>
    </div>

    {{-- Slide 29 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/N2/structure/c-str/s33.png') }}" class="img-xl" />
        <h2 class="title stroke">This is an example of a van.</h2>
    </div>

    {{-- Slide 30 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[30vw]">
        <div class="text-start">
            <h2 class="title stroke text-start">Guided Questions During Presentation:</h2>
            <ol class="lesson-ul list-decimal title stroke">
                <li>What vehicle did you choose? Why?</li>
                <li>What shapes do you see on the vehicle? Can you point out the shapes?</li>
                <li>How did you build the shapes?</li>
                <li>Can you share what you like most about your vehicle?</li>
            </ol>
        </div>
        <p class="note">Note: Small vehicles means car, lorry, van, taxi, motorcycle etc.
            Teacher to assist children in connecting if they are unable to do it.
        </p>
    </div>

    {{-- Slide 31 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/N2/structure/c-str/s1.png') }}" class="img-lg" />
        <h2 class="title stroke">We learned that cars are structures!
            They are made up of many smaller parts.</h2>
    </div>

    {{-- Slide 32 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="flex gap-[1vw]">
            <img src="{{ asset('assets/images/N2/structure/c-str/s1.png') }}" class="!w-[27vw]" />
            <img src="{{ asset('assets/images/N2/structure/c-str/s20.png') }}" class="!w-[27vw]" />
        </div>
        <h2 class="title stroke">The shape structure of this car is made up
            of triangles and rectangles.</h2>
    </div>

    {{-- Slide 33 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/N2/structure/c-str/s29.png') }}" class="img-lg" />
        <h2 class="title stroke">In fact, all vehicles are structures. Some have different
            designs so their shape structures look different too.</h2>
    </div>

    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    <div id="buttons" class="absolute flex flex-row">
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
        function toggleVideo(videoId) {
            const video = document.getElementById(videoId);
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        }

        document.addEventListener("DOMContentLoaded", () => {
            const slides = document.querySelectorAll(".slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");
            const clickButtons = document.querySelectorAll("[class*='click-btn']");

            let currentSlide = 0;
            let parentSlideIndex = null;
            let isViewingClickSlides = false;
            let currentClickClass = null;

            const returnRouteFromFirstSlide = "{{ route('CarstructureSelection') }}";
            const doneButtonRoute = "{{ route('Structures') }}";

            function pauseAllVideos() {
                const videos = document.querySelectorAll('video');
                videos.forEach(video => {
                    if (!video.paused) {
                        video.pause();
                    }
                });
            }

            function isClickSlide(slide) {
                return Array.from(slide.classList).some(cls => cls.startsWith('click') && cls.match(/^click\d+$/));
            }

            function hasNextClickSlide(currentIndex) {
                if (!currentClickClass) return false;

                for (let i = currentIndex + 1; i < slides.length; i++) {
                    if (slides[i].classList.contains(currentClickClass)) {
                        return true;
                    }
                }
                return false;
            }

            function getClickClassFromButton(button) {
                const classList = Array.from(button.classList);
                const clickBtnClass = classList.find(cls => cls.startsWith('click-btn'));
                if (clickBtnClass) {
                    const number = clickBtnClass.replace('click-btn', '');
                    return 'click' + number;
                }
                return null;
            }

            function showSlide(index) {
                pauseAllVideos();

                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                const isLastSlide = index === slides.length - 1;
                const isLastClickSlide = isViewingClickSlides && !hasNextClickSlide(index);

                if (isLastSlide || isLastClickSlide) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            clickButtons.forEach((btn) => {
                btn.addEventListener("click", (e) => {
                    e.preventDefault();

                    parentSlideIndex = currentSlide;
                    isViewingClickSlides = true;
                    currentClickClass = getClickClassFromButton(btn);

                    for (let i = 0; i < slides.length; i++) {
                        if (slides[i].classList.contains(currentClickClass)) {
                            currentSlide = i;
                            showSlide(currentSlide);
                            break;
                        }
                    }
                });
            });

            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;

                        while (!isViewingClickSlides &&
                            currentSlide < slides.length &&
                            isClickSlide(slides[currentSlide])) {
                            currentSlide++;
                        }

                        if (isViewingClickSlides) {
                            while (currentSlide < slides.length &&
                                !slides[currentSlide].classList.contains(currentClickClass)) {
                                currentSlide++;
                            }
                        }

                        if (currentSlide < slides.length) {
                            showSlide(currentSlide);
                        }
                    }
                });
            });

            returnButton.addEventListener("click", () => {
                if (currentSlide === 0 && !isViewingClickSlides) {
                    window.location.href = returnRouteFromFirstSlide;
                    return;
                }

                if (isViewingClickSlides) {
                    let prevSlide = currentSlide - 1;

                    while (prevSlide >= 0 && !slides[prevSlide].classList.contains(currentClickClass)) {
                        prevSlide--;
                    }

                    if (prevSlide >= 0 && slides[prevSlide].classList.contains(currentClickClass)) {
                        currentSlide = prevSlide;
                        showSlide(currentSlide);
                    } else {
                        currentSlide = parentSlideIndex;
                        isViewingClickSlides = false;
                        currentClickClass = null;
                        parentSlideIndex = null;
                        showSlide(currentSlide);
                    }
                } else if (currentSlide > 0) {
                    currentSlide--;

                    while (currentSlide > 0 && isClickSlide(slides[currentSlide])) {
                        currentSlide--;
                    }

                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    if (isViewingClickSlides && parentSlideIndex !== null) {
                        currentSlide = parentSlideIndex;
                        isViewingClickSlides = false;
                        currentClickClass = null;
                        parentSlideIndex = null;
                        showSlide(currentSlide);
                    } else {
                        window.location.href = doneButtonRoute;
                    }
                });
            }

            showSlide(currentSlide);
        });
    </script>
@endpush
