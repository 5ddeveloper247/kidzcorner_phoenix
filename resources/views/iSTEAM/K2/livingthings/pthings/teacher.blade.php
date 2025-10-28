@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')
    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Explore and learn about the basic characteristics of living things</li>
                <li>Analyse and sort things into living and non-living things</li>
                <li>Talk about the differences between living and non-living things</li>
                <li>Know that all animals are living things</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex flex-col  items-start justify-between">
            <h2 class="t-title ">Keywords:</h2>
            <div >
                <ul class="list-disc ">
                    <li>Living Thing</li>
                    <li>Non-living Thing</li>
                    <li>Move</li>
                    <li>Water</li>
                    <li>Food</li>
                </ul>
                <ul class="list-disc">
                    <li>Air</li>
                    <li>Grow</li>
                    <li>Produce Young</li>
                    <li>Animals</li>
                    <li>Plants</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">Possible questions during hands-on session:</h2>
            <ul class="list-disc ">
                <li>Would you like to find out if things that you like (pets, cartoon characters, etc.) are living or
                    non-living things?</li>
                <li>Is there anything around that you are not sure of if they are living or non-living things?</li>
                <li>Is there anything that you think could be both living and non-living things? Why?</li>
                <li>
                    A hamburger is made up of meat from a cow, vegetables from plants, and bread made from other plants.
                    Would you call it a living thing? Why?
                    [No, because it has no characteristics of a living thing.]
                </li>
                <li>
                    Can a living thing ever become a non-living thing?
                    [Yes, after it dies and no longer has the characteristics of a living
                    thing.]
                </li>
                <li>
                    Can a non-living thing ever become a living thing?
                    [No.]
                </li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>

    {{-- sldie 3 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">Additional information:</h2>
            <ul class="list-disc">
                <li>
                    Many things have one or more characteristics of living things, but a living thing must have
                    <strong>all</strong> of the characteristics of living things.
                </li>
                <li>
                    Many things that move — like cars, fans, and windmills — are non-living things. These objects move by
                    external power such as fuel, battery, electricity, or wind.
                </li>
                <li>
                    All human-made things are non-living things. However, some natural things around us like rocks, water,
                    air, and clouds are also non-living things.
                </li>
                <li>
                    A living thing can become a non-living thing if it has been changed from its natural form into something
                    new and no longer has the characteristics of a living thing.For example: cotton plant → a piece of
                    cotton fabric; vegetables → salad.
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations - if you do the experiment of Plants Do Breathe Air:</h2>
            <ul class="list-disc">
                <li>A large clear bowl with lukewarm water</li>
                <li>A big leaf freshly pluck from a plant</li>
                <li>A stone or marble</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pthings/p15.png') }}" class="w-[500px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- slide 5 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to do the experiment of Plants Do Breathe Air:</h2>
            <ul class="list-decimal">
                <li>Fill a large clear bowl with lukewarm water.</li>
                <li>Pluck a big leaf from a plant and put it inside the bowl.</li>
                <li>ut a stone or marble on top of the leaf so that the leaf is fully submerged under the water.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pthings/p15.png') }}" class="w-[500px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>

    {{-- sldie 6 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to do the experiment of Plants Do Breathe Air:</h2>
            <ul>
                <li>4. Place the bowl at a sunny spot.</li>
                <li>5. Check and observe the leaf every hour for a few times.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pthings/p27.png') }}" class="w-[500px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>



    {{-- sldie 7 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <p class="note text-center">As a reference, some bubbles form around this sample leaf once it was placed in the
                water. After 2 hours, many more bubbles form around the leaf.</p>
        </div>
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/livingthings/pthings/p28.png') }}" class="w-[500px]" />
            <img src="{{ asset('assets/images/K2/livingthings/pthings/p29.png') }}" class="w-[500px]" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>




    {{-- sldie 7 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <p class="note">When the hands-on sessions 1 or 2 start, guide each group of children to set up
            the mat accordingly (as shown). Advise them to discuss as a group to complete the
            mission. <span class="text-[#F7B94A]"> If needed, adjust the level of difficulty by reducing the number of
                colour cards on the mat for different groups.</span></p>
        <img src="{{ asset('assets/images/K1/coding/challenge2/ch3.png') }}" alt="Teacher" class="w-[400px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- sldie 8 --}}
    <div class="slide flex  flex-col justify-start  text-2xl text-start text-white">
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="font-bold t-title">Notes:</h2>
                <ul class="list-disc leading-relaxed">
                    <li>
                        If you see
                        <span
                            class="relative inline-block h-16 w-16 cursor-pointer rounded-[20px] bg-sky-500 shadow-[2px_3px_5px_rgba(0,0,0,0.25)] shadow-[inset_2px_-3px_3px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
                            <!-- Decorative Vector -->
                            <img src="{{ asset('assets/images/pptimages/Vector4.png') }}"
                                class="absolute top-[4px] left-[6px] h-6 w-[80%]" />
                            <div class="absolute top-[7px] left-[12px] h-2.5 w-3.5 rounded-sm bg-white"></div>
                            <img src="{{ asset('assets/images/pptimages/play.png') }}"
                                class="absolute top-[16px] left-[16px] h-8 w-8" />
                        </span>
                        next to a picture, class="text-amber-400" click on the picture to watch the video.
                    </li>
                    <li>Emphasise and use the <strong>keywords</strong> during hands-on sessions.</li>
                    <li class="text-amber-400">The fundamental skill of coding or programming is ability to
                        differentiate and navigate self to move forward, backward, turn left
                        and turn right. If children are not ready, play more related games to
                        improve the skill.</li>
                    <li class="text-amber-400">It is important to inculcate the habit of always laying out the steps
                        using coding cards before working on the Blockly because it's not easy
                        for children to remember all the steps when they use Blockly to
                        programme.</li>
                    <li>Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                    </li>
                    <li>
                        Click on this shortcut icon
                        <span
                            class="relative inline-block h-16 w-16 cursor-pointer rounded-[20px] bg-sky-500 shadow-[2px_3px_5px_rgba(0,0,0,0.25)] shadow-[inset_2px_-3px_3px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
                            <img src="{{ asset('assets/images/pptimages/Vector4.png') }}"
                                class="absolute top-[4px] left-[6px] h-6 w-[80%]" />
                            <div class="absolute top-[7px] left-[12px] h-2.5 w-3.5 rounded-sm bg-white"></div>
                            <img src="{{ asset('assets/images/pptimages/home-icon.png') }}"
                                class="absolute top-[16px] left-[16px] h-8 w-8" />
                        </span>
                        if you need to go to some parts of the lesson quickly.
                    </li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1"
                alt="Teacher" />
        </div>
    </div>


    {{-- slide 9 --}}
    <div class="text-white flex flex-col items-center justify-center  text-start text-2xl slide hidden">
        <h2 class=" title stroke">Learning Centre Idea</h2>
        <div class="flex">
            <div class="space-y-20">
                <ul>
                    <h2 class="!text-white title stroke">Living or Non-Living</h2>
                    <h2 class="t-title">What and how to set up:</h2>
                    <li>Place pictures of living (different animals) and non-living things
                        (toys, transportation, household items, etc) here.</li>
                </ul>

                <ul>
                    <h2 class="t-title">What to do:</h2>
                    <li>1. Name the thing in each picture.</li>
                    <li>2. Sort the pictures into living and non-living things.</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" />
    </div>


    {{-- slide 10 --}}
    <div class="text-white flex flex-col items-center justify-center  text-start text-2xl slide hidden">
        <h2 class=" title stroke">Learning Centre Idea</h2>
        <div class="flex">
            <div class="space-y-20">
                <ul>
                    <h2 class="!text-white title stroke">Living Things And Non-living Things</h2>
                    <h2 class="t-title">What and how to set up:</h2>
                    <li>Provide a display board (can be wall), some arts and crafts
                        materials and pictures of things as prepared at the learning centre here.</li>
                </ul>

                <ul>
                    <h2 class="t-title">What to do:</h2>
                    <li> Have children work together to make a pretty living things and
                        non-living things display board.</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" />
    </div>



    {{-- ========================================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button
         class="doneButton">
 <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    <div id="buttons" class="absolute  flex flex-row gap-6 z-90">

        <!-- Return Button -->
        <a id="returnButton">
 <img
    src="{{ asset('assets/images/pptimages/return.png') }}" />
        </a>

        <!-- Home Button -->
        <button
     id="homeButton">
            <img 
                src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
        </button>

        <!-- Close Button -->
        <button id="closeButton">
           
            <img 
                src="{{ asset('assets/images/pptimages/cancel.png') }}" />
    
        </button>

    </div>

    {{-- next Button --}}
    <div class="down-btn-container">

        <button
            class="nextButton">
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

              //   Return button - redirect if on first slide, otherwise go back
        returnButton.addEventListener("click", () => {
            if (currentSlide === 0) {
                //   First slide pe hai →  
                window.location.href = "{{ route('YourRouteNameHere') }}";
            } else {
                //   Previous slide pe jao
                currentSlide--;
                showSlide(currentSlide);
            }
        });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('k2livingthings') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
