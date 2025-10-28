@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li class="!text-[1.5vw]">Learn how to grow a plant from a seed</li>
                <li class="!text-[1.5vw]">Learn how to regrow green onions</li>
                <li class="!text-[1.5vw]">Observe how plants grow</li>
                <li class="!text-[1.5vw]">Learn about basic things that help plants grow</li>
                <li class="!text-[1.5vw]">Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex flex-col  items-start justify-between">
            <h2 class="t-title ">Keywords:</h2>
            <ul class="list-disc ">
                <li class="!text-[1.5vw]">Plant</li>
                <li class="!text-[1.5vw]">Grow</li>
                <li class="!text-[1.5vw]">Seed</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start  text-start">
        <ul class="list-disc">
            <h2 class=" t-title">Preparations for Individual Activity - growing plants from seeds:</h2>
            <li class="!text-[1vw]">A type of fast growing seed (preferably not too small), such as:
                Radish seeds (sprout in 3–10 days) Sunflower seeds (sprout in 1 week) Melon seeds (sprout in 5–10 days)
                Green beans and peas</li>
            <li class="!text-[1vw]">Snack size zipper storage bags (preferably no design to avoid distractions during
                observations)</li>
            <li class="!text-[1vw]">Paper towels (size that fit the bag)</li>
            <li class="!text-[1vw]">Glue (when the activity starts, help to apply 2 dots of glue with a gap in between
                roughly at the middle of
                the paper towel for each child)</li>
            <li class="!text-[1vw]">Spray bottles with water</li>
            <li class="!text-[1vw]">Labels (if non-adhesive, use tape to fix it on the bag at the end)</li>
            <li class="!text-[1vw]">Adhesive tape</li>
        </ul>

        <ul class="list-disc">
            <p><strong>Preparations for Class Activity - regrow green onions:</strong></p>
            <li class="!text-[1vw]">A bunch of green onions with roots</li>
            <li class="!text-[1vw]">A reasonable size transparent container filled with some water</li>
        </ul>
        </ul>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- sldie 3 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">Things to consider for preparations - growing plants from seeds:</h2>
            <ul class="list-disc">
                <li class="!text-[1.5vw]">If you want to use seeds from fresh melons or squash like watermelon and pumpkin
                    for this activity, you
                    should clean the seeds thoroughly and allow them dry indoors for a week beforehand. To help the seeds
                    germinate faster, carefully remove the shell of the seeds (don't damage the seed as it may not geminate)
                    and soak them for around 2 hours before the activity</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p16.png') }}" class="w-[800px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">How to grow plants from seeds and things to consider:</h2>
            <ul class="list-decimal">
                <li class="!text-[1.5vw]">Have children write the name of the seed, date of activity and his/her name on a
                    label. [Help to apply 2
                    dots of glue with a of the paper towel for each child .]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p17.png') }}" alt="Teacher" class="w-[800px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 5 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to grow plants from seeds and things to consider:</h2>
            <ul>
                <li class="!text-[1.5vw]">2.Have children put a seed on each of the glue dot on his/her paper towel and
                    allow the glue dry.
                    [Make sure that the glue dries before continue with the next step.]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p6.png') }}" alt="Teacher" class="w-[600px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- sldie 6 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to grow plants from seeds and things to consider:</h2>
            <ul>
                <li class="!text-[1.5vw]">3.Have children put his/her paper towel into a zipper storage bag and spray water
                    to wet the paper
                    towel.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p7.png') }}" alt="Teacher" class="w-[600px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 7 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to grow plants from seeds and things to consider:</h2>
            <ul>
                <li class="!text-[1.5vw]">4.Have children leave about 1cm extra water at the bottom of his/her bag and seal
                    the bag.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p8.png') }}" alt="Teacher" class="w-[600px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 8 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to grow plants from seeds and things to consider:</h2>
            <ul>
                <li class="!text-[1.5vw]">5.Have children label his/her bag and tape it to a sunny window.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p9.png') }}" alt="Teacher" class="w-[600px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 9 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to grow plants from seeds and things to consider:</h2>
            <ul>
                <li class="!text-[1.5vw]">6. Have children use the learning journal to record his/her observations. [Let
                    them draw the current
                    look of the seeds and write down the date. Remind them to check on the seeds every day for at least a
                    week and record their observations whenever they see any change in seeds (root/stem/leaf).]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p14.png') }}" alt="Teacher" class="w-[700px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- sldie 10 --}}
    <div class=" slide flex text-2xl text-white flex-col items-start justify-start gap-y-5 text-start">
        <h2 class=" t-title">Sample Learning Journal 1:</h2>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p18.png') }}" alt="Teacher" class="w-[600px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 11 --}}
    <div class=" slide flex text-2xl text-white flex-col items-start justify-start gap-y-5 text-start">
        <h2 class=" t-title">Sample Learning Journal 2:</h2>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p19.png') }}" alt="Teacher" class="w-[600px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- sldie 12 --}}
    <div class=" slide flex text-2xl text-white flex-col items-start justify-start gap-y-5 text-start">
        <h2 class=" t-title">Sample seed’s growth 1:</h2>
        <div class="flex items-start gap-5">
            <img src="{{ asset('assets/images/K2/livingthings/pgrow/p20.png') }}" alt="Teacher" class="w-[600px]" />
            <p class="w-[20vw] note">For your info, this seed sprouted after 2 days and showed signs of growth each day
                until day 6. It eventually died.</p>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- sldie 13 --}}
    <div class=" slide flex text-2xl text-white flex-col items-start justify-start gap-y-5 text-start">
        <h2 class=" t-title">Sample seed’s growth 2:</h2>
        <div class="flex items-start gap-5">
            <img src="{{ asset('assets/images/K2/livingthings/pgrow/p21.png') }}" alt="Teacher" class="w-[600px]" />
            <p class="w-[20vw] note">For your info, this seed sprouted after 3 days and showed signs of growth each day.
            </p>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 14 --}}
    <div class=" slide flex text-2xl text-white flex-col items-start justify-start gap-y-5 text-start">
        <h2 class=" t-title">Sample seed’s growth 3:</h2>
        <div class="flex items-start gap-5">
            <img src="{{ asset('assets/images/K2/livingthings/pgrow/p22.png') }}" alt="Teacher" class="w-[600px]" />
            <p class="w-[20vw] note">For your info, this seed sprouted after 3 days. Its stem and roots could be clearly
                seen at day 6. At day 7, two leaves sprouted from the seed coat.</p>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 15 --}}
    <div class=" slide flex text-2xl text-white flex-col items-start justify-start gap-y-5 text-start">
        <h2 class=" t-title">Sample seed’s growth 4:</h2>
        <div class="flex items-start gap-5">
            <img src="{{ asset('assets/images/K2/livingthings/pgrow/p21.png') }}" alt="Teacher" class="w-[600px]" />
            <p class="w-[20vw] note">For your info, this seed sprouted after 3 days and showed signs of growth each day
                until day 6. It eventually died.</p>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide16 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to regrow green onions and things to consider:</h2>
            <ul>
                <li class="!text-[1.5vw]">1.Cut off the green leaves of the green onions. [You may keep only the white
                    stems and roots. Tell
                    children that the green leaves will be used to garnish their food today.]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p11.png') }}" alt="Teacher" class="w-[700px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide17 --}}
    <div class=" slide flex text-2xl text-white flex-col items-start justify-start  text-start">
        <div>
            <h2 class=" t-title">How to regrow green onions and things to consider:</h2>
            <ul>
                <li class="!text-[1.5vw]">2. Place the remaining green onions with roots in a transparent container filled
                    with some water. [Use
                    clear plastic container or glass as we want to observe the roots of the plants. Be sure that only roots
                    and partial of the white stems are in the water because green leaves that soak in water will wilt and
                    cause the whole plant to die.]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p12.png') }}" alt="Teacher" class="large-img3" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide18 --}}
    <div class="slide flex text-2xl text-white flex-col items-start justify-start  text-start">
        <div>
            <h2 class=" t-title">How to regrow green onions and things to consider:</h2>
            <ul>
                <li class="!text-[1.5vw]">3. Place the container near a sunny window.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p12.png') }}" alt="Teacher" class="w-[600px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide19 --}}
    <div class=" slide flex text-2xl text-white flex-col items-start justify-start  text-start">
        <div>
            <h2 class=" t-title">How to regrow green onions and things to consider:</h2>
            <ul>
                <li class="!text-[1.5vw]">4. Have children use the learning journal to record his/her observations. [Let
                    them draw the current
                    look of the green onions (length of the roots and leaves) and write down present date. Remind them to
                    check on the green onions every day for a week and record their observations after one week. Remember to
                    change water every day.]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p13.png') }}" alt="Teacher" class="w-[600px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 20 --}}
    <div class=" slide flex text-2xl text-white flex-col items-start justify-start gap-y-5 text-start">
        <h2 class=" t-title">Sample Learning Journal:</h2>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p23.png') }}" alt="Teacher" class="w-[600px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 21 --}}
    <div class=" slide flex text-2xl text-white flex-col items-start justify-start gap-y-5 text-start">
        <h2 class=" t-title">Sample green onion’s growth:</h2>
        <div class="flex items-start gap-5">
            <img src="{{ asset('assets/images/K2/livingthings/pgrow/p24.png') }}" alt="Teacher" class="w-[600px]" />
            <p class="w-[24vw] !text-[1.5vw]">For
                your info, the
                plants grow taller
                every day and
                after a week, the leaves can be cut
                for the second
                time. The growing
                process can be
                repeated a few
                times but the
                plants will weaken
                and stop producing
                eventually. If you
                plant them in the
                soil, they will
                continue grow
                almost
                indefinitely.</p>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>




    {{-- sldie 22 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start  text-start">
        <div>
            <h2>Possible questions during daily observation session:</h2>
            <ul class="list-disc ">
                <li class="!text-[1.5vw]">Does the seed change?</li>
                <li class="!text-[1.5vw]">(If yes) What change do you see? How long does it take to start the change? <br>
                    <em>[Focus on root, stem & leaf]</em>
                </li>
                <li class="!text-[1.5vw]">Do the green onion plants grow taller from day 1?</li>
                <li class="!text-[1.5vw]">(If yes) What change do you see? <br>
                    <em>[Focus on roots & leaves]</em>
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- sldie 23 --}}
    <div class="slide flex  flex-col justify-start  text-2xl text-start text-white">
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class=" t-title">Notes:</h2>
                <ul class="list-disc leading-relaxed">
                    <li class="!text-[1.5vw] flex">
                        If you see
                        <span class="info-btn">
                            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                        </span>
                        next to a picture, class="text-amber-400" click on the picture to watch the video.
                    </li>
                    <li class="!text-[1.5vw]">Emphasise and use the <strong>keywords</strong> during hands-on sessions.
                    </li>
                    <li class="!text-[1.5vw]">Print out the Learning Journal (if any) for every child to complete at the
                        end of the lesson.
                    </li>
                    <li class="!text-[1.5vw] flex">
                        Click on this <span class=" t-title">shortcut icon</span>
                        <span> 
                            <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" class="video-btn" />
                        </span>
                        if you need to go to some parts of the lesson quickly.
                    </li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1"
                alt="Teacher" />
        </div>
    </div>


    {{-- slide 24 --}}
    <div class="text-white flex flex-col items-center justify-center  text-start text-2xl slide hidden">
        <h2 class=" title stroke">Learning Centre Idea</h2>
        <div class="flex">
            <div>
                <ul>
                    <h2 class="!text-white title stroke">How Does this Plan Grow?</h2>
                    <h2 class="t-title">What and how to set up:</h2>
                    <li class="!text-[1.5vw]"> Put a very young potted plant with label of the plant's name here.</li>
                </ul>

                <ul class="list-decimal">
                    <h2 class="t-title">What to do:</h2>
                    <li class="!text-[1.5vw]">Learn how to take care of the plant</li>
                    <li class="!text-[1.5vw]">Observe how the plant grow and change.</li>
                    <li class="!text-[1.5vw]">Record the plant growth with a drawing paper.</li>
                </ul>
            </div>
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
                    window.location.href = "{{ route('k2livingthings') }}";
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
