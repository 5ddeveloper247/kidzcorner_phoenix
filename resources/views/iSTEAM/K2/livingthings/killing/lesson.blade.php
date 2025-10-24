@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K2/livingthings/killing/k1.png" />
        <h2 class="title stroke">What do you see in this picture?</h2>
        <p class="note">Note: Encourage children to recall and share the basic characteristics of bacteria.</p>

    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K2/livingthings/killing/k1.png" />
        <h2 class="title stroke">Bacteria are tiny living things around us.
            Bacteria can be found anywhere.</h2>

    </div>

    {{-- Slide3 --}}

    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K2/livingthings/killing/k2.png" />
        <h2 class="title stroke">There are good and bad bacteria.
            Most bacteria around us are actually good.</h2>

    </div>

    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex justify-center items-center">

            <img src="/assets/images/K2/livingthings/killing/k3.png" />
            <img src="/assets/images/K2/livingthings/killing/k4.png" />
        </div>
        <h2 class="title stroke">Bad bacteria are called pathogens.
            Pathogens can cause and spread diseases in animals and plants.</h2>

    </div>

    {{-- Slide 5  --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K2/livingthings/killing/k5.png" />
        <h2 class="title stroke">Nowadays we can use antibiotics, antiseptics and some cleaning
            products to fight against the bad pathogens.</h2>

    </div>


    {{-- slide 6 --}}
    <div class="slide flex flex-col items-center justify-center gap-[5rem] ">
        <h2 class="title stroke">Do you know how effective is some of the cleaning products
            that we used to fight against pathogens?
            Let's find out!</h2>

        <p class="note">Note: Divide children into 3 groups to do the activity. Tell them that they are going to
            prepare sampled petri dishes for test. Advise them take turns to do the steps in groups.</p>
    </div>


    {{-- Slide 7 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <h2 class="title stroke !text-white  font-bold">Small Group Activity</h2>
        <img src="/assets/images/K2/livingthings/killing/k7.png" />

        <h2 class="title stroke !text-start">Let's find out: <br>
            (Group 1) Do hand sanitizers really kill bacteria? <br>
            (Group 2) Do hand soaps really kill bacteria? <br>
            (Group 3) Do toothpastes really kill bacteria?</h2>
        <p class="note">Note: Display all the things needed. Guide children to name the things and know their use.</p>
    </div>



    {{-- slide 8 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K2/livingthings/killing/k8.png" />


        <h2 class="title stroke !text-start">What do you think (Prediction): <br>
            (G1) Do hand sanitizers kill some or all the bacteria? br
            (G2) Do hand soaps kill some or all the bacteria?
            (G3) Do toothpastes kill some or all the bacteria?</h2>
        <p class="note">Note: Have children vote for their choice and record the result in a graph
            (refer to the sample on the next page).</p>
    </div>


    {{-- slide 9 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K2/livingthings/killing/k6.png" />

        <p class="note">Note: Plot children's prediction on the graph. At the end, put a star <span
                class="text-yellow-400 text-xl">⭐</span>
            to mark the final result.</p>
    </div>


    {{-- slide 10 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <h2 class="title stroke !text-start">Let's do: <br>
            1. (G1 & G2) Use a cotton bud to go through hand of a group <br>
            member to pick up sample bacteria.</h2>

        <img src="/assets/images/K2/livingthings/killing/k9.png" />

        <p class="note">Note: Advise children to choose a group member as the subject of the test
            and another member to do the step with hands wearing gloves.</p>
    </div>


    {{-- slide 11 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <h2 class="title stroke !text-start">Let's do: <br>
            1. (G3) Use a cotton bud to go through teeth of a group
            member to pick up sample bacteria.</h2>

        <img src="/assets/images/K2/livingthings/killing/k10.png" />

        <p class="note">Note: Advise children to choose a group member as the subject of the test
            and another member to do the step with hands wearing gloves.</p>
    </div>

    {{-- slide 12 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <h2 class="title stroke !text-start">Let's do: <br>
            2.(G1, G2 & G3) Remove the lid of a petri dish, use the
            cotton bud to lightly draw many lines on the agar in the
            dish and close the lid again.</h2>
        <div class=" flex gap-1">

            <img src="/assets/images/K2/livingthings/killing/k11.png" />
            <img src="/assets/images/K2/livingthings/killing/k12.png" />
        </div>

        <p class="note">Note: Advise children to choose another group member to do the step with hands wearing gloves.
            Once done, throw away the used cotton bud.</p>
    </div>


    {{-- slide 13 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <h2 class="title stroke !text-start">Let's do: <br>
            3.(G1, G2 & G3) Label the sampled petri dish.</h2>

        <img src="/assets/images/K2/livingthings/killing/k13.png" />

        <p class="note">Note: Advise children to choose another group member to do the step.</p>
    </div>


    {{-- slide 14 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <h2 class="title stroke !text-start">Let's do: <br>
            4.Invite the group member to thoroughly clean his or her
            hands with hand sanitizers (G1) or hand soap (G2)</h2>

        <img src="/assets/images/K2/livingthings/killing/k14.png" />

        <p class="note">Note: Remind children that the subject of the experiment will do this step.</p>
    </div>


    {{-- slide 15 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <h2 class="title stroke !text-start">Let's do: <br>
            4.Invite the group member to thoroughly clean his or her
            teeth with toothpastes (G3).</h2>

        <img src="/assets/images/K2/livingthings/killing/k15.png" />

        <p class="note">Note: Remind children that the subject of the experiment will do this step.</p>
    </div>

    {{-- slide 16 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <h2 class="title stroke !text-start">Let's do: <br>
            5.(G1, G2 & G3) Use a new cotton bud to repeat step 1-3.</h2>

        <img src="/assets/images/K2/livingthings/killing/k16.png" />

        <p class="note">Note: Advise children take turns to do the different steps.</p>
    </div>


    {{-- slide 17 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <h2 class="title stroke !text-start">Let's do: <br>
            6.Put all the sampled petri dishes in a box and keep the box
            at a cooling place.</h2>

        <img src="/assets/images/K2/livingthings/killing/k17.png" />

        <p class="note">Note: Teacher to do the step; use tape to seal all the petri dishes to prevent children from
            opening them
            Tell children that bacteria need time to grow, so we'll check the results at least 10 days later.</p>
    </div>



    <div class="absolute bottom-[85px]">
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





    {{-- Buttons --}}
    <div id="buttons" class="absolute  flex flex-row gap-6 ">

        <!-- Return Button -->
        <a class="relative w-24 h-24 button-fade-in bg-slate-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-teal-800 cursor-pointer"
            id="returnButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10" src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] w-14 h-14"
                src="{{ asset('assets/images/pptimages/reverse-icon.png') }}" />
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
                    window.location.href = "{{ route('killingSelection') }}";
                });
            }

            //   Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
