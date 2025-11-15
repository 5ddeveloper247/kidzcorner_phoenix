@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">The Stages of Growth of a Butterfly</h2>

    {{-- sldie 1  --}}
    <div class="flex  !text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title ">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Learn about the stages of growth of a butterfly</li>
                <li>Talk about the changes that occur between the different stages of growth</li>
                <li>Learn how to take care of a caterpillar</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="t-title ">Keywords:</h2>
                <div class="flex  gap-10">

                    <ul class="list-disc ">
                        <li>Egg</li>
                        <li>Caterpillar</li>
                        <li>Pupa</li>
                        <li>Butterfly</li>
                    </ul>
                    <ul class="list-disc ">
                        <li>Stage of Growth</li>
                        <li>Living Thing</li>

                    </ul>

                </div>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
        </div>
    </div>



    {{-- slide 2 --}}
    <div class="flex  !text-white flex-col t-slide justify-start  text-start ">
        <div>
            <h2 class=" t-title">Preparations for Individual Activity:</h2>
            <ul class="list-disc ">
                <li>Caterpillar Kit (from Oh Farm)</li>
                <li>Leaves for caterpillar (from Oh Farm)</li>
                <li>Empty Container</li>
                <li>Clean paper cut to the size of the caterpillar's container</li>
            </ul>
        </div>
        <div>
            <h2 class="t-title">Preparations for Individual Activity:</h2>

            <ul class="list-disc">
                <li>Prepare the photos of the stages of growth of a butterfly
                    cut them out before the lesson so that children can use it in their learning journal</li>

            </ul>

        </div>
    </div>



    {{-- slide 3 --}}
    <div class="flex  !text-white justify-start  text-start t-slide">
        <div>
            <h2 class=" t-title">Things to consider during hands-on sessions:</h2>
            <ul class="list-disc ">
                <li>Some questions to ask during observation: Encourage children to observe the
                    appearance of the caterpillar and describe what it is doing. Which stage do
                    you think it is in now? What do you think will happen to the caterpillar after
                    a one/two days? Encourage children to guess on the colour of the butterfly
                    that may emerge.</li>
                <li> Put in fresh leaves only when the leaves are dry or the
                    caterpillar has eaten most of the leaves. The leaves are
                    to be kept in the fridge.</li>
                <li>If it becomes the pupa, no need to change the paper or
                    leaves anymore. Once it becomes a butterfly, release it
                    asap as it needs to find food else it will not survive,</li>
                <li>Take photos of the caterpillar when you observe changes.
                    Photos can be printed for learning journal. You can also
                    ask children to draw what they see during their observations.
                </li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />


    </div>


    {{-- slide 4 --}}
    <div class="text-white flex text-start  hidden t-slide">
        <div>

            <h2 class=" t-title ">Additional information:</h2>
            <ul class="list-disc">
                <li>Caterpillars are delicate and can be easily injured, so handle them
                    gently.
                </li>
                <li>Do not shake or knock the container that holds the caterpillar.</li>
                <li>If a caterpillar stops moving, it may be shedding its skin.

                    Do not disturb it during this time.
                    Shedding may take up to 24 hours.

                </li>
                <li>

                    When the caterpillar reaches the pupa stage:
                    Explain to children that it no longer needs to eat because it has stored enough
                    food.
                    It is undergoing a transformation into a butterfly.
                    Encourage children to observe the butterfly’s appearance and describe its
                    behavior.
                    Explain that the butterfly’s wings may be wet immediately after emerging, so it
                    may stay still until its wings dry.
                </li>

            </ul>


        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>


    {{-- slide 5 --}}
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


    {{-- slide 6 --}}
    <div class="text-white flex flex-col  hidden t-slide">
        <h2 class="text-center title stroke">Learning Centre Idea</h2>

        <div class="text-start">
            <h2 class="!text-white text-[2vw] stroke">Caring for the Caterpillar</h2>
            <h2 class=" t-title ">What and how to set up:</h2>
            <ul class="list-disc">
                <li>
                    Place the caterpillar in a transparent container with a cover.
                    Provide magnifying glasses for children to take a closer look. </li>
            </ul>

            <h2 class=" t-title ">What to do:</h2>
            <ul class="list-decimal">
                <li>Invite children to care for the caterpillar. Children
                    can clean the container and replace the leaves.</li>
            </ul>

        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>


    {{-- slide 7 --}}
    <div class="text-white flex  flex-col  hidden t-slide">
        <h2 class="text-center title stroke">Learning Centre Idea</h2>
        <div class="text-start">
            <h2 class="!text-white text-[2vw] stroke">Stages of Growth</h2>
            <h2 class=" t-title ">What and how to set up:</h2>
            <p>Place pictures of the different stages of growth of a butterfly.
                Prepare text labels of the stages - egg, caterpillar, pupa and
                butterfly</p>

        </div>
        <div class="text-start">
            <h2 class=" t-title ">What to do:</h2>
            <ul class="list-decimal">
                <li>Invite children to arrange the pictures of stages in the
                    correct order.</li>
                <li>Then, invite children to match each photo to its label.</li>
            </ul>
        </div>


        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>


    {{-- slide  8 --}}
    <div class="text-white flex  flex-col  hidden t-slide">
        <h2 class="text-center title stroke">Learning Centre Idea</h2>
        <div class="text-start">
            <h2 class="!text-white text-[2vw] stroke">Butterfly Art</h2>
            <h2 class=" t-title ">What and how to set up:</h2>
            <p>Fold an A4 drawing paper into two equal parts. Provide children
                with painting materials.</p>

        </div>
        <div class="text-start">
            <h2 class=" t-title ">What to do:</h2>
            <ul class="list-decimal">
                <li>Invite children to paint the wings of a butterfly on one
                    half of the paper.</li>

                <li> Invite children to fold the paper and press it down to
                    create a symmetrical art work.</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>


    {{-- ===================== --}}
    {{-- Done Button --}}
    <div class="down-btn-container">
        <button class=" doneButton ">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>


    {{-- Buttons --}}
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

                //   Agar last slide hai → NEXT button hide, DONE show
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
                    window.location.href = "{{ route('StageOfGrowthSelection') }}";
                } else if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('StageOfGrowthSelection') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
