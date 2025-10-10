@extends('layout.master')
@section('title', 'Dynamic Presentation')

@push('style')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        button {
            cursor: pointer !important;
        }

        a {
            cursor: pointer;

        }
    </style>
@endpush



@section('content')
    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="  font-bold">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Learn how to grow a plant from a seed</li>
                <li>Learn how to regrow green onions</li>
                <li>Observe how plants grow</li>
                <li>Learn about basic things that help plants grow</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex flex-col  items-start justify-between">
            <h2 class="text-[33px] font-bold">Keywords:</h2>
            <ul class="list-disc ">
                <li>Plant</li>
                <li>Grow</li>
                <li>Seed</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <ul class="list-disc">
            <h2 class="font-bold">Preparations for Individual Activity - growing plants from seeds:</h2>
            <li>A type of fast growing seed (preferably not too small), such as:
                Radish seeds (sprout in 3–10 days) Sunflower seeds (sprout in 1 week) Melon seeds (sprout in 5–10 days)
                Green beans and peas</li>
            <li>Snack size zipper storage bags (preferably no design to avoid distractions during observations)</li>
            <li>Paper towels (size that fit the bag)</li>
            <li>Glue (when the activity starts, help to apply 2 dots of glue with a gap in between roughly at the middle of
                the paper towel for each child)</li>
            <li>Spray bottles with water</li>
            <li>Labels (if non-adhesive, use tape to fix it on the bag at the end)</li>
            <li>Adhesive tape</li>
        </ul>

        <ul class="list-disc">
            <p><strong>Preparations for Class Activity - regrow green onions:</strong></p>
            <li>A bunch of green onions with roots</li>
            <li>A reasonable size transparent container filled with some water</li>
        </ul>
        </ul>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>

    {{-- sldie 3 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold">Things to consider for preparations - growing plants from seeds:</h2>
            <ul class="list-disc">
                <li>If you want to use seeds from fresh melons or squash like watermelon and pumpkin for this activity, you
                    should clean the seeds thoroughly and allow them dry indoors for a week beforehand. To help the seeds
                    germinate faster, carefully remove the shell of the seeds (don't damage the seed as it may not geminate)
                    and soak them for around 2 hours before the activity</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p16.png') }}" class="w-[800px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- slide 4 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold">How to grow plants from seeds and things to consider:</h2>
            <ul class="list-decimal">
                <li>Have children write the name of the seed, date of activity and his/her name on a label. [Help to apply 2
                    dots of glue with a of the paper towel for each child .]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p17.png') }}" alt="Teacher" class="w-[800px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- slide 5 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold">How to grow plants from seeds and things to consider:</h2>
            <ul>
                <li>2.Have children put a seed on each of the glue dot on his/her paper towel and allow the glue dry.
                    [Make sure that the glue dries before continue with the next step.]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p6.png') }}" alt="Teacher" class="w-[600px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>

    {{-- sldie 6 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold">How to grow plants from seeds and things to consider:</h2>
            <ul>
                <li>3.Have children put his/her paper towel into a zipper storage bag and spray water to wet the paper
                    towel.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p7.png') }}" alt="Teacher" class="w-[600px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- sldie 7 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold">How to grow plants from seeds and things to consider:</h2>
            <ul>
                <li>4.Have children leave about 1cm extra water at the bottom of his/her bag and seal the bag.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p8.png') }}" alt="Teacher" class="w-[600px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- sldie 8 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold">How to grow plants from seeds and things to consider:</h2>
            <ul>
                <li>5.Have children label his/her bag and tape it to a sunny window.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p9.png') }}" alt="Teacher" class="w-[600px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- slide 9 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold">How to grow plants from seeds and things to consider:</h2>
            <ul>
                <li>6. Have children use the learning journal to record his/her observations. [Let them draw the current
                    look of the seeds and write down the date. Remind them to check on the seeds every day for at least a
                    week and record their observations whenever they see any change in seeds (root/stem/leaf).]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p14.png') }}" alt="Teacher" class="w-[700px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>



    {{-- sldie 10 --}}
    <div class=" slide flex text-2xl text-white flex-col items-start justify-start gap-y-5 text-start">
        <h2 class="font-bold">Sample Learning Journal 1:</h2>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p18.png') }}" alt="Teacher" class="w-[600px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- sldie 11 --}}
    <div class=" slide flex text-2xl text-white flex-col items-start justify-start gap-y-5 text-start">
        <h2 class="font-bold">Sample Learning Journal 2:</h2>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p19.png') }}" alt="Teacher" class="w-[600px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>

    {{-- sldie 12 --}}
    <div class=" slide flex text-2xl text-white flex-col items-start justify-start gap-y-5 text-start">
        <h2 class="font-bold">Sample seed’s growth 1:</h2>
        <div class="flex items-start gap-5">
            <img src="{{ asset('assets/images/K2/livingthings/pgrow/p20.png') }}" alt="Teacher" class="w-[600px]" />
            <p class="w-[130px] note">For your info, this seed sprouted after 2 days and showed signs of growth each day
                until day 6. It eventually died.</p>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>

    {{-- sldie 13 --}}
    <div class=" slide flex text-2xl text-white flex-col items-start justify-start gap-y-5 text-start">
        <h2 class="font-bold">Sample seed’s growth 2:</h2>
        <div class="flex items-start gap-5">
            <img src="{{ asset('assets/images/K2/livingthings/pgrow/p21.png') }}" alt="Teacher" class="w-[600px]" />
            <p class="w-[130px] note">For your info, this seed sprouted after 3 days and showed signs of growth each day.
            </p>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- sldie 14 --}}
    <div class=" slide flex text-2xl text-white flex-col items-start justify-start gap-y-5 text-start">
        <h2 class="font-bold">Sample seed’s growth 3:</h2>
        <div class="flex items-start gap-5">
            <img src="{{ asset('assets/images/K2/livingthings/pgrow/p22.png') }}" alt="Teacher" class="w-[600px]" />
            <p class="w-[130px] note">For your info, this seed sprouted after 3 days. Its stem and roots could be clearly
                seen at day 6. At day 7, two leaves sprouted from the seed coat.</p>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- sldie 15 --}}
    <div class=" slide flex text-2xl text-white flex-col items-start justify-start gap-y-5 text-start">
        <h2 class="font-bold">Sample seed’s growth 4:</h2>
        <div class="flex items-start gap-5">
            <img src="{{ asset('assets/images/K2/livingthings/pgrow/p21.png') }}" alt="Teacher" class="w-[600px]" />
            <p class="w-[130px] note">For your info, this seed sprouted after 3 days and showed signs of growth each day
                until day 6. It eventually died.</p>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- slide16 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold">How to regrow green onions and things to consider:</h2>
            <ul>
                <li>1.Cut off the green leaves of the green onions. [You may keep only the white stems and roots. Tell
                    children that the green leaves will be used to garnish their food today.]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p11.png') }}" alt="Teacher" class="w-[700px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- slide17 --}}
    <div class=" slide flex text-2xl text-white flex-col items-start justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold">How to regrow green onions and things to consider:</h2>
            <ul>
                <li>2. Place the remaining green onions with roots in a transparent container filled with some water. [Use
                    clear plastic container or glass as we want to observe the roots of the plants. Be sure that only roots
                    and partial of the white stems are in the water because green leaves that soak in water will wilt and
                    cause the whole plant to die.]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p12.png') }}" alt="Teacher" class="w-[400px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- slide18 --}}
    <div class="slide flex text-2xl text-white flex-col items-start justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold">How to regrow green onions and things to consider:</h2>
            <ul>
                <li>3. Place the container near a sunny window.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p12.png') }}" alt="Teacher" class="w-[600px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- slide19 --}}
    <div class=" slide flex text-2xl text-white flex-col items-start justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold">How to regrow green onions and things to consider:</h2>
            <ul>
                <li>4. Have children use the learning journal to record his/her observations. [Let them draw the current
                    look of the green onions (length of the roots and leaves) and write down present date. Remind them to
                    check on the green onions every day for a week and record their observations after one week. Remember to
                    change water every day.]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p13.png') }}" alt="Teacher" class="w-[600px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- sldie 20 --}}
    <div class=" slide flex text-2xl text-white flex-col items-start justify-start gap-y-5 text-start">
        <h2 class="font-bold">Sample Learning Journal:</h2>
        <img src="{{ asset('assets/images/K2/livingthings/pgrow/p23.png') }}" alt="Teacher" class="w-[600px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- sldie 21 --}}
    <div class=" slide flex text-2xl text-white flex-col items-start justify-start gap-y-5 text-start">
        <h2 class="font-bold">Sample green onion’s growth:</h2>
        <div class="flex items-start gap-5">
            <img src="{{ asset('assets/images/K2/livingthings/pgrow/p24.png') }}" alt="Teacher" class="w-[600px]" />
            <p class="w-[250px]">For
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
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>




    {{-- sldie 22 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2>Possible questions during daily observation session:</h2>
            <ul class="list-disc ">
                <li>Does the seed change?</li>
                <li>(If yes) What change do you see? How long does it take to start the change? <br>
                    <em>[Focus on root, stem & leaf]</em>
                </li>
                <li>Do the green onion plants grow taller from day 1?</li>
                <li>(If yes) What change do you see? <br>
                    <em>[Focus on roots & leaves]</em>
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>

    {{-- sldie 23 --}}
    <div class="slide flex  flex-col justify-start  text-2xl text-start text-white">
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="font-bold">Notes:</h2>
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
                    <li>Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                    </li>
                    <li>
                        Click on this <span class="font-bold">shortcut icon</span>
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
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute right-[250px] bottom-[150px]"
                alt="Teacher" />
        </div>
    </div>


    {{-- slide 24 --}}
    <div class="text-white flex flex-col items-center justify-center gap-y-10 text-start text-2xl slide hidden">
        <h2 class=" title stroke">Learning Centre Idea</h2>
        <div class="flex">
            <div class="space-y-20">
                <ul>
                    <h2 class="!text-white title stroke">How Does this Plan Grow?</h2>
                    <h2>What and how to set up:</h2>
                    <li> Put a very young potted plant with label of the plant's name here.</li>
                </ul>

                <ul class="list-decimal">
                    <h2>What to do:</h2>
                    <li>Learn how to take care of the plant</li>
                    <li>Observe how the plant grow and change.</li>
                    <li>Record the plant growth with a drawing paper.</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- ========================================================== --}}
    {{-- Buttons --}}
    <div class="absolute bottom-0">
        <button
            class="cursor-pointer doneButton w-66 h-[75px] relative bg-[#F8A23A] rounded-[30px]  shadow-[3px_4px_7.8px_0px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_0px_rgba(0,0,0,0.25)] 
                    outline outline-1 outline-yellow-700 overflow-hidden">
            <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
            <div class="absolute left-[8.22px] top-[3.17px] "> <img src="/assets/images/pptimages/Vector4.png" />
            </div>
            <span
                class="absolute left-[80px] top-[18px] flex items-center  text-white text-5xl font-bold stroke">DONE</span>
        </button>
    </div>

    <div id="buttons" class="absolute top-0 right-[60px] flex flex-row gap-6 z-90">

        <!-- Return Button -->
        <a class="relative w-24 h-24 button-fade-in bg-slate-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-teal-800 cursor-pointer"
            id="returnButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] w-14 h-14"
                src="{{ asset('assets/images/pptimages/reverse-icon.png') }}" />
        </a>

        <!-- Home Button -->
        <button
            class="relative w-24 h-24 button-fade-in bg-sky-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-teal-800 cursor-pointer"
            id="homeButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] w-14 h-14"
                src="{{ asset('assets/images/pptimages/home-icon.png') }}" />
        </button>

        <!-- Close Button -->
        <button class="relative w-24 h-24 button-fade-in cursor-pointer" id="closeButton">
            <div
                class="absolute inset-0 bg-red-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-red-900">
            </div>
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <div id="closeButtonText"
                class="absolute top-[16px] left-[30px] w-11 h-16 text-white text-6xl font-normal font-['Jua']">X
            </div>
        </button>

    </div>

    {{-- next Button --}}
    <div class="absolute bottom-0">

        <button
            class="cursor-pointer nextButton w-66 h-[75px] relative bg-[#F8A23A]  rounded-[30px]  shadow-[3px_4px_7.8px_0px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_0px_rgba(0,0,0,0.25)] 
        outline outline-1 outline-yellow-700 overflow-hidden">
            <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
            <div class="absolute left-[8.22px] top-[3.17px] "> <img src="/assets/images/pptimages/Vector4.png" /> </div>
            <span class="absolute left-[80px] top-[18px] flex items-center  text-white text-5xl font-bold stroke">NEXT
            </span>
        </button>
    </div>




@endsection


@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const slides = document.querySelectorAll(".slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton"); // ✅ DONE button

            let currentSlide = 0;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                // ✅ Agar last slide hai → NEXT button hide, DONE show
                if (index === slides.length - 1) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            // ✅ NEXT buttons listener
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                });
            });

            // ✅ Return button
            returnButton.addEventListener("click", () => {
                if (currentSlide > 0) {
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
