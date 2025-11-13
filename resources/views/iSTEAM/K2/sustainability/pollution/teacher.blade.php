@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- title --}}
    <h2 class="top-title stroke">Pollution and its Effects</h2>

    {{-- Slide 1 --}}
    <div class="slide t-slide flex !text-white flex-col justify-start text-start hidden">
        <div>
            <h2 class="t-title">Children will be able to:</h2>
            <div class="text-start">
                <h2 class="t-title">Let's do:</h2>
                <ol class="lesson-ul">
                    <li>Understand the meaning of pollution</li>
                    <li>Understand the meaning of biodegradable and non-biodegradable materials</li>
                    <li>Learn and discover the harmful effects of pollution on earth</li>
                    <li>Develop awareness of environmental issues</li>
                    <li>Develop curiosity and understanding through inquiry</li>
                </ol>
            </div>
        </div>

        <div class="flex flex-col items-start justify-between">
            <h2 class="t-title ">Keywords:</h2>
            <div class="flex items-start gap-[4vw]">
                <ul class="list-disc">
                    <li>Natural</li>
                    <li>ZSOlar Energy</li>
                    <li>HydroPower</li>
                    <li>Clean Energy</li>
                    <li>Pollution</li>
                    <li>Chemicals</li>
                </ul>

                <ul class="list-disc">
                    <li>Clean Energy</li>
                    <li>Biodegradable</li>
                    <li>Non-biodegradable</li>
                    <li>Cotton</li>
                    <li>Bacteria</li>
                </ul>

                <ul class="list-disc">
                    <li>Air Pollution</li>
                    <li>Filter</li>
                    <li>Liquid</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- Slide 2 --}}
    <div class="slide t-slide flex !text-white flex-col justify-start text-start hidden">
        <div>
            <h2 class=" t-title">Preparations For Class Activity 1:</h2>
            <div class="text-start ">
                <h2 class="t-title">Let's do:</h2>
                <ol class="lesson-ul">
                    <li>Prepare a piece of mahjong paper or A3 sized paper for the brainstorming session.</li>
                    <li>Pre-cut a few 500 ml water bottles of the same type. Teacher will need to prepare two sets for the
                        experiment.</li>
                    <li>Prepare a few more for the children (depends on how many groups you would want to have).</li>
                </ol>
            </div>
        </div>
        <img src="{{ asset('assets/images/K2/sustain/pollution/p32.png') }}" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- Slide 3 --}}
    <div class="slide t-slide flex !text-white flex-col items-center justify-center text-start hidden">
        <div>
            <h2 class="t-title">Preparations For Class Activity 1:</h2>
            <div class="text-start ">
                <h2 class="t-title">Let's do:</h2>
                <ol class="lesson-ul">
                    <li>Prepare a spoon to scoop the filter materials into each bottle during the activity. Ensure each
                        group has the same amount.</li>
                    <li>Please get the following materials required for the activity: activated charcoal powder, sand, small
                        stones/gravel and bigger stones/pebbles and coffee filter paper.</li>
                    <li>Children may suggest materials such as towel, paper, soap, salt which may not help in filtering —
                        prepare them and let children choose those materials as well. This helps children to analyze and see
                        the results. Encourage children to experiment, observe and analyze the results.</li>
                </ol>
            </div>
        </div>
        <img src="{{ asset('assets/images/K2/sustain/pollution/p33.png') }}" class="!max-w-[13vw]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- Slide 4 --}}
    <div class="slide t-slide flex  !text-white flex-col items-center justify-start text-start hidden">
        <div>
            <h2 class="t-title">Preparations For Class Activity 1:</h2>
            <div class="text-start ">
                <h2 class="t-title">Let's do:</h2>
                <ol class="lesson-ul">
                    <li>You can plan such that different groups have a different set of filter materials or place materials
                        in different order.</li>
                    <li>Teacher will need to set up 2 sets accordingly to the guideline below.</li>
                    <li>Teacher's Bottle: Put two coffee filter paper together and tie them at the mouth of the bottle with
                        a rubber band. (Do assist the children to tie if they want to do this)</li>
                </ol>
            </div>
        </div>
        <img src="{{ asset('assets/images/K2/sustain/pollution/p34.png') }}" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- Slide 5 --}}
    <div class="slide t-slide flex  !text-white flex-col items-center justify-start text-start hidden">
        <div>
            <h2 class="t-title">Preparations For Class Activity 1:</h2>
            <div class="text-start ">
                <h2 class="t-title">Let's do:</h2>
                <ol class="lesson-ul">
                    <li>2. Scoop the filter materials and add them in layer by layer in this order:
                        <div class="mt-2">
                            <h3 class="title stroke">Bottle 1</h3>: Activated charcoal, sand, gravel and pebbles
                        </div>
                    </li>
                </ol>
            </div>
        </div>
        <img src="{{ asset('assets/images/K2/sustain/pollution/p35.png') }}" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
        <div class="text-start  mt-4">
            <ol class="lesson-ul">
                <li>
                    <h3 class="title stroke">Bottle 2</h3>: Do the same preparations with the coffee filter paper. But you
                    will only add sand, gravel and pebbles layer by layer in this order.
                </li>
            </ol>
        </div>
    </div>

    {{-- Slide 6 --}}
    <div class="slide t-slide flex  !text-white flex-col items-center justify-start gap-y-10 text-start hidden">
        <div>
            <h2 class="t-title">Preparations For Class Activity 1:</h2>
            <div class="text-start ">
                <h2 class="t-title">Let's do:</h2>
                <ol class="lesson-ul">
                    <li>3. Pour half the dirty mixture into the water filter.</li>
                    <li>4. It may take more than 30 minutes to one hour to have some liquid being filtered out.</li>
                    <li>5. Encourage children to observe what happens and compare the results from the two bottles.</li>
                </ol>
            </div>
        </div>
        <img src="{{ asset('assets/images/K2/sustain/pollution/p36.png') }}" class="!max-w-[14vw]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- Slide 7 --}}
    <div class="slide t-slide flex  !text-white flex-col items-center justify-start text-start hidden">
        <div>
            <h2 class="t-title">Preparations for Class Activity 2 :</h2>
            <div class="text-start ">
                <h2 class="t-title">Let's do:</h2>
                <ol class="lesson-ul">
                    <li>Two 500ml water bottles of the same type. Prepare a piece of plastic cut out from the plastic bag.
                        Ensure same size as the toilet paper. You may have a third bottle to compare newspaper too. Note
                        that newspaper will take a longer time to break down as compared to the toilet paper. You need to
                        shake it more vigorously. If children find it hard to see the results of the materials in the
                        bottles, you can ask children to put the bottle against a black paper so that it is easier to see
                        the white toilet paper pieces.</li>
                </ol>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- Slide 8 --}}
    <div class="slide t-slide flex  !text-white flex-col items-center justify-start text-start hidden">
        <div>
            <h2 class="t-title">Useful information:</h2>
            <div class="text-start ">
                <h2 class="t-title">Let's do:</h2>
                <ol class="lesson-ul">
                    <li>
                        Oil destroys the insulating ability of fur-bearing mammals, such as sea otters, and the water
                        repellency of a bird's feathers, thus exposing these creatures to the harsh elements. Without the
                        ability to repel water and insulate from the cold water, birds and mammals will die from
                        hypothermia. Juvenile sea turtles can also become trapped in oil and mistake it for food. Dolphins
                        and whales can inhale oil, which can affect lungs, immune function and reproduction. Many birds and
                        animals also ingest oil when they try to clean themselves, which can poison them. Fish, shellfish,
                        and corals may not be exposed immediately, but can come into contact with oil if it is mixed into
                        the water column - shellfish can also be exposed in the intertidal zone. When exposed to oil, adult
                        fish may experience reduced growth, enlarged livers, changes in heart and respiration rates, fin
                        erosion, and reproduction impairment. Fish eggs and larvae can be especially sensitive to lethal and
                        sublethal impacts. Even when lethal impacts are not observed, oil can make fish and shellfish unsafe
                        for humans to eat.
                    </li>
                </ol>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- Slide 9 --}}
    <div class="slide t-slide flex  !text-white flex-col items-center justify-start gap-y-10 text-start hidden">
        <div>
            <h2 class="t-title">Notes</h2>
            <div class="text-start ">
                <h2 class="t-title">Let's do:</h2>
                <ol class="lesson-ul">
                    <li class="flex whitespace-nowrap">If you see <span><img
                                src="{{ asset('assets/images/K2/sustain/Globalwarming/s27.png') }}"
                                class="!max-w-[2.5vw]" /></span> next to a picture, click on the picture to watch the video
                    </li>
                    <li class="flex whitespace-nowrap">If you see <span><img
                                src="{{ asset('assets/images/K2/sustain/energy1/information.png') }}"
                                class="!max-w-[2.5vw]" /></span> next to a picture, click on it for additional information
                    </li>
                    <li>Always ask questions to encourage children to think and share their ideas first before giving out
                        any information.</li>
                    <li>Emphasise and use the keywords during hands-on sessions.</li>
                    <li>Print out the Learning Journal (if any) for every child to complete at the end of the lesson.</li>
                    <li class="flex whitespace-nowrap">Click on this shortcut icon <span><img
                                src="{{ asset('assets/images/K2/sustain/Globalwarming/s28.png') }}"
                                class="!max-w-[2.5vw]" /></span> if you need to go to some parts of the lesson quickly.</li>
                </ol>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
        </div>
    </div>

    {{-- Slide 10 --}}
    <div class="slide t-slide flex  !text-white flex-col items-center justify-start text-start hidden">
        <h2 class="title stroke">Learning Centre Idea</h2>
        <div>
            <h2 class="title stroke !text-white">Biodegradable Vs Non-biodegradable</h2>
            <div class="text-start ">
                <h2 class="t-title">What and how to set up:</h2>
                <ol class="lesson-ul">
                    <li>
                        Set up two trays. One tray to contain biodegradable items such as slice of fruit, leaves, parts of
                        vegetable waste. The other tray to contain non-biodegradable items like plastic bottles, plastic
                        toys and plastic bags.</li>
                </ol>
            </div>
            <div>
                <h2 class="t-title">What to do:</h2>
                <ol class="list-decimal">
                    <li>Get children to draw and note how each item looks like at different stages (beginning, after 3/5/7
                        days etc). Do take photos for children to refer and compare.</li>
                    <li>Tell the children to observe the changes on the items. Does it smell? Did the colours change?</li>
                    <li>Tell children not to touch the items as the biodegradable items may become rotten. Please dispose
                        the items once they have rot badly.</li>
                </ol>
            </div>
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

    <div id="buttons" class="absolute flex flex-row gap-6 z-90">
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
            const doneButton = document.querySelector(".doneButton"); //   DONE button

            let currentSlide = 0;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                //   If last slide → hide NEXT, show DONE
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
                    window.location.href = "{{ route('k2sustainability') }}";
                } else if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('k2sustainability') }}";
                });
            }
            showSlide(currentSlide);
        });
    </script>
@endpush
