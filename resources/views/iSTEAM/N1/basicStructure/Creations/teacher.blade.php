@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- title --}}
    <h2 class="top-title stroke">My Creations</h2>

    {{-- slide 1 --}}
    <div class="flex flex-col justify-start text-start  !text-white hidden t-slide">
        <div>
            <h2 class="t-title">Children will be able to:</h2>
            <ul class="list-disc">
                <li>Learn how to identify shapes of an item</li>
                <li>Explore and create shape templates and structures for an item</li>
                <li>Explore how to create a three-dimensional structure</li>
                <li>Develop fine motor and eye-hand coordination skills</li>
                <li>Develop creativity and spatial intelligence</li>
            </ul>
        </div>

        <div class="flex w-full justify-between">
            <div>
                <h2 class="t-title">Keywords:</h2>
                <div class="flex items-center gap-x-10">
                    <ul class="list-disc">
                        <li>Shapes</li>
                        <li>Square</li>
                        <li>Rectangle</li>
                        <li>Triangle</li>
                        <li>Lines</li>
                        <li>Structure</li>
                    </ul>
                </div>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
        </div>
    </div>

    {{-- slide 2 --}}
    <div class="text-white flex text-start  hidden t-slide">
        <div>
            <h2 class="t-title">Preparations:</h2>
            <ul class="list-disc">
                <li>Materials: Cut paper into shapes of various sizes for the learning journal.</li>
                <li>Include shapes that are in the magnetic tile set.</li>
                <li>Prepare glue and tape for children to stick their paper shape image on their learning journal.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    

    {{-- slide 3 --}}
    <div class="text-white flex flex-col text-start  hidden t-slide">
        <div>
            <p>
                Here are some examples of toys that you can make into 3D Structures. <br>
                Sailboat
            </p>
        </div>
        <img src="{{ asset('assets/images/pptimages/tr2.png') }}" alt="Sailboat" class="large-img2" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 4 --}}
    <div class="text-white flex flex-col text-start  items-start hidden t-slide">
        <div>
            <p>An example of a toy structure: <br>Teddy bear image and 3D head.</p>
            <img src="{{ asset('assets/images/pptimages/tr4.png') }}" alt="Toy Example" class="object-contain large-img4" />
        </div>

        <div>
            <p>Teddy bear 3D structure</p>
            <img src="{{ asset('assets/images/pptimages/tr3.png') }}" alt="3D Teddy" class="large-img4" />
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 5 --}}
    <div class=" t-slide hidden text-start !text-white !w-[53vw]">
        <div>
            <h2 class="t-title ">Notes:</h2>
            <ul class="list-disc space-y-3">
                <li>
                    <span class="relative">
                        If you see <span class="opacity-0">---</span>next to a picture, click on the picture to watch the
                        video.
                        <img class="t-video-btn absolute top-[-1vw] left-[8vw]"
                            src="{{ asset('assets/images/pptimages/video.png') }}" />
                    </span>
                </li>

                <li>
                    <span class="relative">
                        If you see <span class="opacity-0">---</span> , click on it for additional information or activity.
                        <img src="{{ asset('assets/images/pptimages/info-btn.png') }}"
                            class="t-info-btn absolute top-[-1vw] left-[8.5vw]" />
                    </span>
                </li>

                <li>
                    Always ask questions to encourage children to think and share their ideas first before giving out
                    any information.
                </li>

                <li>Emphasise and use the keywords during hands-on sessions.</li>

                <li>
                    Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                </li>

                <li>
                    <span class="relative">
                        Click on this shortcut icon <span class="opacity-0">---</span> if you need to go to some parts of
                        the lesson quickly.
                        <img src="{{ asset('assets/images/pptimages/home-btn.png') }}"
                            class="t-home-btn absolute top-0 left-[19.5vw]" />
                    </span>
                </li>

            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>




    {{-- ============ --}}
    {{-- Done Button --}}
    <div class="down-btn-container">
        <button class="cursor-pointer doneButton hidden">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" alt="Done Button" />
        </button>
    </div>

    {{-- Navigation Buttons --}}
    <div id="buttons" class="absolute flex flex-row gap-6 z-90">
        <a id="returnButton">
            <img src="{{ asset('assets/images/pptimages/return.png') }}" alt="Return Button" />
        </a>
        <button id="homeButton">
            <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" alt="Home Button" />
        </button>
        <button id="closeButton">
            <img src="{{ asset('assets/images/pptimages/cancel.png') }}" alt="Close Button" />
        </button>
    </div>

    {{-- Next Button --}}
    <div class="down-btn-container">
        <button class="nextButton">
            <img src="{{ asset('assets/images/pptimages/next-btn.png') }}" alt="Next Button" />
        </button>
    </div>
@endsection

@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const slides = document.querySelectorAll(".t-slide");
            const nextBtn = document.querySelector(".nextButton");
            const returnBtn = document.getElementById("returnButton");
            const doneBtn = document.querySelector(".doneButton");

            if (!slides.length) return; // ✅ defensive check

            let currentIndex = 0;

            function showSlide(index) {
                slides.forEach(slide => slide.classList.add("hidden"));
                slides[index].classList.remove("hidden");

                currentIndex = index;

                if (index === slides.length - 1) {
                    nextBtn.style.display = "none";
                    doneBtn.classList.remove("hidden");
                } else {
                    nextBtn.style.display = "block";
                    doneBtn.classList.add("hidden");
                }
            }

            nextBtn?.addEventListener("click", () => {
                if (currentIndex < slides.length - 1) {
                    showSlide(currentIndex + 1);
                }
            });

            returnBtn?.addEventListener("click", () => {
                if (currentIndex === 0) {
                    window.location.href = "{{ route('CreationsSelection') }}";
                } else {
                    showSlide(currentIndex - 1);
                }
            });

            doneBtn?.addEventListener("click", () => {
                window.location.href = "{{ route('CreationsSelection') }}";
            });

            // Optional: keyboard navigation
            document.addEventListener("keydown", e => {
                if (e.key === "ArrowRight") nextBtn.click();
                if (e.key === "ArrowLeft") returnBtn.click();
            });

            showSlide(0);
        });
    </script>
@endpush
