@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Triangular Structures</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/tr-str/s1.png') }}" class="img-lg" />
        <h2 class="title stroke">Children, do you remember what these are?</h2>
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>

    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/tr-str/s1.png') }}" class="img-lg" />
        <h2 class="title stroke">These are different types of buildings. These buildings
            are <span class="!text-white">structures </span> with different shapes and sizes.</h2>
    </div>

    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">Children, today we are going to look at
            <span class="!text-white">structures</span> that are in the shape of <span class="!text-white">triangle</span>!
        </h2>
    </div>

    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/tr-str/s2.png') }}" class="img-xl" />
        <h2 class="title stroke">Children, do you know what these are in the pictures?</h2>
        <p class="note">Note: Encourage children to share what they know about the pictures.</p>
    </div>

    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/tr-str/s3.png') }}" class="img-md" />
        <h2 class="title stroke">This is the Eiffel <span class="!text-white">Tower</span>. The <span
                class="text-white">structure</span> looks like a triangle
            where its base is <span class="!text-white">wide</span> and its top is <span class="!text-white">narrow</span>.
        </h2>
    </div>

    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/tr-str/gl.png') }}" class="img-lg" />
        <h2 class="title stroke">The Eiffel <span class="!text-white">Tower Structure</span> is put together with many
            small iron pieces.
        </h2>
    </div>

    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="flex items-center justify-center gap-[1vw]">
            <img src="{{ asset('assets/images/N2/structure/tr-str/s4.png') }}" class="img-h-sm" />
            <img src="{{ asset('assets/images/N2/structure/tr-str/s5.png') }}" class="img-h-sm" />
        </div>
        <h2 class="title stroke">The Eiffel Tower structure is supported by four 'legs',
            helping it to stand tall into the sky
        </h2>
    </div>

    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="flex items-center justify-center">
            <img src="{{ asset('assets/images/N2/structure/tr-str/s4.png') }}" class="img-h-sm" />
            <img src="{{ asset('assets/images/N2/structure/tr-str/s5.png') }}" class="img-h-sm" />
        </div>
        <h2 class="title stroke">The Eiffel Tower structure is supported by four 'legs',
            helping it to stand tall into the sky
        </h2>
    </div>

    {{-- Slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/tr-str/s6.png') }}" class="img-lg" />
        <h2 class="title stroke">Similarly, the electrical grids are also built from
            smaller metals pieces.
        </h2>
    </div>

    {{-- Slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/tr-str/s7.png') }}" class="img-lg" />
        <h2 class="title stroke">The electrical grids also have a <span class="!text-white">wide</span> base and <span
                class="text-white">narrrow</span> top.
            Some are also support by four 'legs'.
        </h2>
    </div>

    {{-- Slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <h2 class="title stroke !text-white">Class Activity</h2>
        <div class="flex items-center justify-center gap-[1vw]">
            <img src="{{ asset('assets/images/N2/structure/tr-str/s8.png') }}" class="img-h-sm" />
            <img src="{{ asset('assets/images/N2/structure/tr-str/s9.png') }}" class="img-h-sm" />
        </div>
        <h2 class="title stroke !text-start">Mission: <br>
            Make a tower in the shape of a triangle using the
            construction set.</h2>
    </div>

    {{-- Slide 12 --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke">
                <li>Look at the tower and observe the parts used. Point out the shapes on the structure.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/structure/tr-str/s10.png') }}" class="img-h-sm" />
        <p class="note">Note: Teacher can point out that the base is wide and the top is narrow, hence creating
            a triangular looking structure.</p>
    </div>

    {{-- Slide 13 --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="2">
                <li>Get the following parts from the construction set.</li>
            </ol>
        </div>
        <div class="flex justify-center items-end">
            <img src="{{ asset('assets/images/N2/structure/tr-str/s10.png') }}" class="img-h-sm" />
            <p class="note !text-white !text-start">square piece X 1 <br>
                long rectangle piece X 7 <br>
                three directions connector X 5</p>
        </div>
        <p class="note">Note: Encourage children to work together in small group and pick out the parts needed.</p>
    </div>

    {{-- Slide 14 --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="3">
                <li>Connect a 4 direction connector on the long rectangle piece.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/structure/tr-str/s11.png') }}" class="img-md" />
        <p class="note">Note: Encourage and guide the children to try to connect the pieces.</p>
    </div>

    {{-- Slide 15 --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="4">
                <li>Connect two more long rectangle pieces on the connector and adjust the pieces such that it forms a 'Y'
                    shape.</li>
            </ol>
        </div>
        <div class="flex justify-center items-center gap-[1vw]">
            <img src="{{ asset('assets/images/N2/structure/tr-str/s12.png') }}" class="img-h-sm" />
            <img src="{{ asset('assets/images/N2/structure/tr-str/s13.png') }}" class="img-h-sm" />
        </div>
        <p class="note">Note: Encourage and assist the children to connect the pieces as it may
            be hard for them to fix the pieces.</p>
    </div>

    {{-- Slide 16 --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="5">
                <li>Take the square piece and connect four 3-direction connectors on each side.</li>
            </ol>
        </div>
        <div class="flex justify-center items-center gap-[1vw]">
            <img src="{{ asset('assets/images/N2/structure/tr-str/s14.png') }}" class="img-h-sm" />
            <img src="{{ asset('assets/images/N2/structure/tr-str/s15.png') }}" class="img-h-sm" />
        </div>
        <p class="note">Note: Assist children in fixing the pieces if required.</p>
    </div>

    {{-- Slide 17 --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="6">
                <li>Connect the square piece to the 'Y' shape structure.</li>
            </ol>
        </div>
        <div class="flex justify-center items-center gap-[1vw]">
            <img src="{{ asset('assets/images/N2/structure/tr-str/s16.png') }}" class="img-h-sm" />
            <img src="{{ asset('assets/images/N2/structure/tr-str/s17.png') }}" class="img-h-sm" />
        </div>
        <p class="note">Note: Assist children in fixing the pieces if required.</p>
    </div>

    {{-- Slide 18 --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="7">
                <li>Connect one long rectangle to each of the connectors as shown.</li>
            </ol>
        </div>
        <div class="flex justify-center items-center gap-[1vw]">
            <img src="{{ asset('assets/images/N2/structure/tr-str/s18.png') }}" class="img-h-sm" />
            <img src="{{ asset('assets/images/N2/structure/tr-str/s19.png') }}" class="img-h-sm" />
        </div>
        <p class="note">Note: Assist children in fixing the pieces if required.</p>
    </div>

    {{-- Slide 19 --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="8">
                <li>After connecting four long rectangles, adjust the pieces and the tower is done!</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/structure/tr-str/s10.png') }}" class="img-h-sm" />
        <p class="note">Note: Assist children in fixing the pieces if required.</p>
    </div>

    {{-- Slide 20 --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <img src="{{ asset('assets/images/N2/structure/tr-str/s20.png') }}" class="img-lg" />
        <h2 class="title stroke">More pieces can be added to create a taller tower.
            One has 3 levels and the other has 4.</h2>
        <p class="note z-90">Note: Teacher can challenge children to think of ways to create a taller tower. <a
                class="text-[#F7B94A]click-btn1">Click here</a> for the guide.</p>
    </div>

    {{-- Slide 21 --}}
    <div class="slide hidden click1 flex flex-col justify-start items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke">
                <li>Find the pieces required to make the tower taller.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/structure/tr-str/s21.png') }}" class="img-md" />
    </div>

    {{-- Slide 22 --}}
    <div class="slide hidden click1 flex flex-col justify-start items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="2">
                <li>Connect the 3-directions connectors on two opposite rectangle pieces as shown.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/structure/tr-str/s22.png') }}" class="img-md" />
    </div>

    {{-- Slide 23 --}}
    <div class="slide hidden click1 flex flex-col justify-start items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="3">
                <li>Connect one long rectangle pieces to the connectors.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/structure/tr-str/s23.png') }}" class="img-md" />
    </div>

    {{-- Slide 24 --}}
    <div class="slide hidden click1 flex flex-col justify-start items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="4">
                <li>Connect one square piece using the 3-directions connector as shown.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/structure/tr-str/s24.png') }}" class="img-md" />
    </div>

    {{-- Slide 25 --}}
    <div class="slide hidden click1 flex flex-col justify-start items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="5">
                <li>Use a 2-directions connector to fix the square piece to the centre piece.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/structure/tr-str/s25.png') }}" class="img-normal-md" />
    </div>

    {{-- Slide 26 --}}
    <div class="slide hidden click1 flex flex-col justify-start items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="6">
                <li>Connect a square piece on the other side in the same way.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/structure/tr-str/s26.png') }}" class="img-md" />
    </div>

    {{-- Slide 27 --}}
    <div class="slide hidden click1 flex flex-col justify-start items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="7">
                <li>Connect a long rectangle at each of the connectors.</li>
            </ol>
        </div>
        <div class="flex">
            <img src="{{ asset('assets/images/N2/structure/tr-str/s27.png') }}" class="img-h-sm" />
            <img src="{{ asset('assets/images/N2/structure/tr-str/s28.png') }}" class="img-h-sm" />
        </div>
    </div>

    {{-- Slide 28 --}}
    <div class="slide hidden click1 flex flex-col justify-start items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="8">
                <li>Adjust the pieces to make the tower stand and the tower is completed!</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/structure/tr-str/s10.png') }}" class="img-h-sm" />
    </div>

    {{-- Slide 29 --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <h2 class="title stroke">Another <span class="!text-white">structure</span> that looks like a <span
                class="text-white">triangle</span> <br>
            is the <span class="!text-white">pyramid</span>.</h2>
        <img src="{{ asset('assets/images/N2/structure/tr-str/s29.png') }}" class="img-lg" />
    </div>

    {{-- Slide 30 --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <h2 class="title stroke">The shape of a <span class="!text-white">triangle</span> can be seen on each side
            of the <span class="!text-white">pyramid</span>.</h2>
        <img src="{{ asset('assets/images/N2/structure/tr-str/s29.png') }}" class="img-lg" />
    </div>

    {{-- Slide 31 --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <video id="video1" class=" pointer-events-none">
            <source src="{{ asset('assets/images/N2/structure/videos/4.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Look at the side of the <span class="!text-white">pyramid</span>. <br>
            Each side looks like a <span class="!text-white">triangle</span>.</h2>
        {{-- Video Toggle Button --}}
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- Slide 32 --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <img src="{{ asset('assets/images/N2/structure/tr-str/s30.png') }}" class="img-lg" />
        <h2 class="title stroke">This is how the <span class="!text-white">pyramid</span> looks like closed up.
            It is made up of many large cube shaped stones.</h2>
    </div>

    {{-- Slide 33 --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <img src="{{ asset('assets/images/N2/structure/tr-str/s31.png') }}" class="img-lg" />
        <h2 class="title stroke">The cube shaped stones are put together layer by layer,
            forming a <span class="!text-white">structure</span> similar to stairs.</h2>
    </div>

    {{-- Slide 34 --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <img src="{{ asset('assets/images/N2/structure/tr-str/s31.png') }}" class="img-lg" />
        <h2 class="title stroke">This stairs <span class="!text-white">structure</span> makes the <span
                class="text-white">pyramid</span> look like
            a triangle from far.</h2>
    </div>

    {{-- Slide 35 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <h2 class="title stroke !text-white">Class Activity</h2>
        <h2 class="title stroke !text-start">Mission: <br>
            Build the biggest pyramid with all the blocks in the
            construction set.</h2>
        <p class="note">Note: Encourage children to work together.</p>
    </div>

    {{-- Slide 36 --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="1">
                <li>Gather all the blocks and the block connectors.</li>
                <li>Build a stairs structure like the picture below.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/structure/tr-str/s35.png') }}" class="img-md" />
        <p class="note">Note: Teacher can get children to stand far from the structure to see if it looks like a
            triangle.</p>
    </div>

    {{-- slide --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="3">
                <li>As the pyramid has stairs on the four sides, add blocks on each side to create the stairs.</li>
                <li>Continue to expand the structure and see how big can your pyramid be!
                    <img src="{{ asset('assets/images/N2/structure/tr-str/s32.png') }}" class="img-h-sm float-right" />
                </li>
            </ol>
        </div>
        <p class="note">Note: Teacher can get children to stand far from the structure to see if it looks like a
            triangle.</p>
    </div>

    {{-- Slide 37 --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <div class="flex gap-[1vw]">
            <img src="{{ asset('assets/images/N2/structure/tr-str/s8.png') }}" class="img-h-md" />
            <img src="{{ asset('assets/images/N2/structure/tr-str/s9.png') }}" class="img-h-md" />
            <img src="{{ asset('assets/images/N2/structure/tr-str/s33.png') }}" class="img-h-md" />
        </div>
        <h2 class="title stroke">We learned that <span class="!text-white">tower</span> and <span
                class="text-white">pyramids</span> are <span class="!text-white">structures</span>
            that look like <span class="!text-white">triangles</span>.</h2>
    </div>




    {{-- ================ --}}
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

            const returnRouteFromFirstSlide = "{{ route('TriangularstructureSelection') }}";
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
