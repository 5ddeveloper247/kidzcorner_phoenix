@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- title --}}
    <h2 class="top-title stroke">Triangular Structures</h2>

    {{-- sldie 1  --}}
    <div class="flex hidden !text-white flex-col justify-around  text-start t-slide">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Learn about the designs of towers and pyramids</li>
                <li>Observe shapes of the towers and pyramids</li>
                <li>Explore, design and build a triangular structure</li>
                <li>Develop fine motor and eye-hand coordination skills</li>
                <li>Develop creativity and imagination</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>
        <div>
            <h2 class="t-title ">Keywords:</h2>
            <div class="flex justify-between w-[50%] items-center">
                <ul class="list-disc ">
                    <li>Structures</li>
                    <li>Shapes</li>
                    <li>Square</li>
                    <li>Rectangle</li>
                </ul>
                <ul class="list-disc ">
                    <li>Triangle</li>
                    <li>Structure</li>

                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class="flex hidden !text-white flex-col justify-start  text-start t-slide">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>Please note the following number of sets for each type of activity is based
                    on 1 box of DDQ blocks. If you are planning of asking two groups of children
                    to do two different activities at the same, the following guide will not be
                    accurate.</li>
            </ul>
        </div>
        <div class="flex items-center gap-[1vw]">
            <img src="/assets/images/N2/structure/str/st13.png" class="img-lg" />
            <p>5 sets for square structure per
                set of DDQ blocks.</p>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 3 --}}
    <div class="flex !text-white flex-col items-start  justify-around  text-start t-slide">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>Put aside the following parts from the DDQ blocks set until the later
                    lessons to avoid distraction to the children,</li>
                <li>Print out the learning journals required.</li>
            </ul>
        </div>
        <div class="flex items-center gap-5">
            <img src="{{ asset('/assets/images/N2/structure/str2/gl.png') }}" />

        </div>
        <ul class="list-disc ">
            <li>Print out the learning journals required.</li>
        </ul>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- slide 4 --}}
    <div class="flex !text-white flex-col items-baseline  justify-start  text-start t-slide">
        <div>
            <h2 class=" t-title">Things to note for Group Activity:</h2>
            <ul class="list-disc ">
                <li>Prepare one set of the following for each group of children (3-5). One box
                    of DDQ blocks can only make one Eiffel Tower ( taller version)</li>
            </ul>
        </div>

        <img src="{{ asset('/assets/images/N2/structure/tr-str/s34.png') }}" class="img-sm" />

        <ul class="list-disc ">
            <li>Although the steps are given, you may encourage children to use their creativity to create their version of
                the tower. They can use the red/yellow rectangle pieces too in the activity.</li>
            <li>The teacher can point out characteristics of the Eiffel Tower, such as the wider base and narrow top, to
                help children think about how they can build their structures.</li>
        </ul>
        </ul>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- sldie 4 --}}
    <div class="flex !text-white flex-col justify-start items-start  text-start t-slide">
        <div>
            <h2 class=" t-title">Things to note for Class Activity:</h2>
            <ul class="list-disc ">

                <li>You can mix all the sets together to create the biggest pyramid.</li>
                <li>Note that there is no need to use the connectors for every block, as there will not be enough. You can
                    just attach the parts where needed.</li>
                <li>The teacher may want to create a smaller version first (3 layers) so that children can see what the
                    structure looks like.</li>
                <li>When the big pyramid is done, get children to stand far from it and observe if the structure takes the
                    shape of a triangle from a distance.</li>


            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 5 --}}
    <div class=" t-slide text-start !text-white !w-[53vw] flex items-center">
        <div>
            <h2 class="t-title ">Notes:</h2>
            <ul class="list-disc space-y-3">
                <li>
                    <span class="relative">
                        If you see <span class="opacity-0">---</span>next to a picture, click on the picture to watch the
                        video.
                        <img class="t-video-btn absolute top-[-1vw] left-[7.6vw]"
                            src="{{ asset('assets/images/pptimages/video.png') }}" />
                    </span>
                </li>

                <li>
                    <span class="relative">
                        If you see <span class="opacity-0">---</span> , click on it for additional information or activity.
                        <img src="{{ asset('assets/images/pptimages/info-btn.png') }}"
                            class="t-info-btn absolute top-[-1vw] left-[8vw]" />
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
                            class="t-home-btn absolute top-0 left-[19vw]" />
                    </span>
                </li>

            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 8 --}}
    <div class="text-white flex flex-col items-center justify-center  text-start t-slide hidden">
        <h2 class=" title stroke">Learning Centre Idea</h2>
        <div>
            <h2 class="!text-white text-[2vw] stroke">I am a Creative Builder</h2>
            <h2 class="t-title">What and how to set up:</h2>
            <ul>
                <li>
                    Display sample pictures of creations done using the construction
                    sets. Encourage children to explore how they can connect the
                    blocks and the shape pieces together to form a tower or a building.
                </li>
            </ul>
        </div>
        <div>

            <h2 class="t-title">What to do:</h2>
            <ul class="list-decimal">
                <li>Encourage children to explore the different connectors and
                    parts.</li>
                <li>Encourage children to build any structure that they like and
                    take a photo of their creation to display at the corner.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" />
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
            const slides = document.querySelectorAll(".t-slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton"); //   DONE button

            let currentSlide = 0;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                //   Agar last hai → NEXT button hide, DONE show
                if (index === slides.length - 1) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            //   NEXT buttons listener
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                });
            });

            //   Return button - redirect if on first slide
            returnButton.addEventListener("click", () => {
                if (currentSlide === 0) {
                    // Redirect to route when on first slide
                    window.location.href = "{{ route('TriangularstructureSelection') }}";
                } else if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('TriangularstructureSelection') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
