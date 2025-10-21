@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-y-[5rem]">
        <h2 class="title stroke">Children, do you still remember what <span class="!text-white">living things?</span> are?
            What are the common points of <span class="!text-white">living things?</span>
            What are the two groups of <span class="!text-white">living things?</span> ?</h2>
        <p class="note">Note: Encourage children to recall and share the basic characteristics
            and examples of living things.</p>
    </div>

    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex gap-1">
            <img src="{{ asset('assets/images/k2/livingthings/bacteria/b1.png') }}" />
            <img src="{{ asset('assets/images/k2/LivingThings/bacteria/b2.png') }}" />
        </div>
        <p class="note">Note: Invite children to sing “”It is Living”” song together, get them share what they know about
            DNA.</p>
    </div>


    {{-- Slide 3 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex items-center gap-10">
            <img src="/assets/images/K2/livingthings/dna/h5.png" />
        </div>
        <h2 class="title stroke">DNA is the instruction manual of all living things.
            It tells every living thing how to form and work correctly.</h2>
    </div>


    {{-- Slide 4  --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex items-center gap-10">
            <img src="/assets/images/K2/livingthings/dna/h5.png" />
        </div>
        <h2 class="title stroke">Living things are made up of cells and
            DNA is stored in the cells.</h2>
    </div>



    {{-- slide 5 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex items-center gap-10">
            <img src="/assets/images/K2/livingthings/bacteria/b3.png" />
        </div>
        <h2 class="title stroke"><span class="!text-white">Animals</span> and <span class="!text-white">plants</span> are
            two groups of <span class="!text-white">living things?</span>.</h2>
    </div>



    {{-- Slide 6 --}}
    <div class="slide flex flex-col items-center justify-center gap-[5rem] ">
        <h2 class="title stroke">Today, we'll learn about another group <br>
            of <span class="!text-white">living things</span> called <span class="!text-white">bacteria</span>!</h2>
        <p class="note">Note: Have children share what they know about bacteria.</p>
    </div>



    {{-- slide 7 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K2/livingthings/bacteria/b4.png" />
        <h2 class="title stroke">Bacteria are tiny living things around us.</h2>
        <p class="note">Note: Explain to children that bacterium is the singular of bacteria.</p>
    </div>



    {{-- slide 8 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K2/livingthings/bacteria/b35.png" />
        <h2 class="title stroke">Bacteria are too tiny to be seen with our eyes.
            We can only see them under a microscope.</h2>
    </div>



    {{-- slide 9 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K2/livingthings/bacteria/b5.png" />
        <h2 class="title stroke">Bacteria can be found everywhere!
            They are on the doorknobs, tables and even our skins.</h2>
    </div>




    {{-- slide 10 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K2/livingthings/bacteria/b6.png" />
        <h2 class="title stroke">They are in the water, soil and even plants.</h2>
    </div>



    {{-- slide 11 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K2/livingthings/bacteria/b7.png" />
        <h2 class="title stroke">They live even inside out bodies!</h2>
    </div>



    {{-- .slide 12 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K2/livingthings/bacteria/b8.png" />
        <h2 class="title stroke">Bacteria come in all sorts of shapes. Scientists group them
            into three basic shapes - spheres, rods and spirals.</h2>
    </div>



    {{-- slide 13 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K2/livingthings/bacteria/b9.png" />
        <h2 class="title stroke">Some people call bacteria as germs because they can make us
            sick. In fact, there are good and bad bacteria.</h2>
    </div>

    {{-- sldie 14 --}}

    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K2/livingthings/bacteria/b10.png" />
        <h2 class="title stroke">Bad bacteria are called pathogens.
            Pathogens can cause and spread diseases in animals and plants.</h2>
    </div>



    {{-- slide 15 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K2/livingthings/bacteria/b11.png" />
        <h2 class="title stroke">Nowadays we can use antibiotics, antiseptics and some cleaning
            products to fight against the bad pathogens.</h2>
        <p class="note">Note: Guide children to understand the meaning of the 2 terms
            (refer to the definitions in teacher resources).</p>
    </div>


    {{-- slide 16 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K2/livingthings/bacteria/b4.png" />
        <h2 class="title stroke">Most bacteria around us are actually good.
            They are very helpful to us.</h2>
    </div>


    {{-- slide 17 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex">
            <img src="/assets/images/K2/livingthings/bacteria/b12.png" />
            <img src="/assets/images/K2/livingthings/bacteria/b13.png" />
        </div>
        <h2 class="title stroke">Most of our food come from plants.
            Bacteria in the soil work hard to help plants grow.</h2>
    </div>


    {{-- slide 18 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K2/livingthings/bacteria/b14.png" />
        <h2 class="title stroke">Do you like to eat yogurt or cheese?
            Do you know that bacteria are used to make them?.</h2>
    </div>

    {{-- slide 19 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K2/livingthings/bacteria/b15.png" />
        <h2 class="title stroke">Besides yogurt and cheese, bacteria also been used to make
            food like butters, chocolates and soya sauces.</h2>
    </div>

    {{-- slide 20 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K2/livingthings/bacteria/b16.png" />
        <h2 class="title stroke">There are many good bacteria in our bodies. The main use of
            these bacteria is to help us digest and break down our food.</h2>
    </div>

    {{-- slide 21 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K2/livingthings/bacteria/b4.png" />
        <h2 class="title stroke">Therefore, there are actually more good bacteria
            than bad bacteria around us.</h2>
    </div>


    {{-- slide 22 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K2/livingthings/bacteria/b17.png" />
        <h2 class="title stroke">This is a Petri dish. It is a flat dish with lid.
            To study bacteria, scientists actually collect and grow them in
            a Petri dish. How is it done? Let's find out!.</h2>
    </div>


    {{-- slide 23 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K2/livingthings/bacteria/b18.png" />
        <h2 class="title stroke">First, scientists fill the dish with agar to make agar plate.
            The hardened jelly-like agar contains nutrients that help
            bacteria to grow.</h2>
    </div>


    {{-- sldie 24 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K2/livingthings/bacteria/b19.png" />
        <h2 class="title stroke">Next, scientists use a cotton bud to pick up
            sample bacteria from anything.</h2>
    </div>


    {{-- sldie 25 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K2/livingthings/bacteria/b20.png" />
        <h2 class="title stroke">Then, scientists use the cotton bud to lightly draw
            lines on the agar in the dish.</h2>
    </div>



    {{-- slide 26 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K2/livingthings/bacteria/b21.png" />
        <h2 class="title stroke">Lastly, scientists keep the sampled dish in a
            cooling place to allow bacteria to grow.</h2>
    </div>



    {{-- sldie 27 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K2/livingthings/bacteria/b22.png" />
        <h2 class="title stroke">Finally, scientists observe bacteria grown in the dish
            and conduct tests to study them in details.</h2>
    </div>


    {{-- slide 28 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <h2 class="title stroke">Now, we'll learn how to use this scientific method <br>
            for growing bacteria. <br>
            We'll test if disinfectant sprays help to kill bacteria.</h2>
    </div>


    {{-- slide 29 --}}
    <div class="slide flex flex-col items-center justify-center gap-5   ">
        <h2 class="title stroke font-bold !text-white">Class Activity</h2>
        <img src="/assets/images/K2/livingthings/bacteria/b36.png" />
        <h2 class="title stroke !text-start">Let's find out: <br>
            Do disinfectant sprays really kill bacteria?</h2>
        <p class="note">Note: Display all the things needed. Guide children to name the things and know their use.</p>
    </div>


    {{-- slide 30 --}}
    <div class="slide flex flex-col items-center justify-center gap-5   ">
        <img src="/assets/images/K2/livingthings/bacteria/b25.png" />
        <h2 class="title stroke !text-start">What do you think (Prediction): <br>
            Do disinfectant sprays kill some or all the bacteria?</h2>
        <p class="note">Note: Have children vote for their choice and record the result in a graph
            (refer to the sample on the next page).</p>
    </div>


    {{-- slide 31 --}}
    <div class="slide flex flex-col items-center justify-center gap-5   ">
        <img src="/assets/images/K2/livingthings/bacteria/b26.png" />
        <p class="note">Note: Plot children's prediction on the graph. At the end, put a star <span
                class="text-yellow-300 text-xl">⭐</span>
            to mark the final result.</p>
    </div>


    {{-- slide 32 --}}
    <div class="slide flex flex-col items-center justify-center gap-5   ">
        <h2 class="title stroke !text-start">
            Let's do: <br>
            1.Use a cotton bud to go through surface of a dirty shoe to
            pick up sample bacteria.</h2>
        <img src="/assets/images/K2/livingthings/bacteria/b27.png" />
        <p class="note">Note: Invite a child to do the step with hands wearing gloves.</p>
    </div>


    {{-- slide 33 --}}
    <div class="slide flex flex-col items-center justify-center gap-5   ">
        <h2 class="title stroke !text-start">
            Let's do: <br>
            2.
            Remove the lid of a petri dish, use the cotton bud to lightly
            draw many lines on the agar and close the lid again.</h2>
        <div class="flex gap-1 items-start">
            <img src="/assets/images/K2/livingthings/bacteria/b28.png" />
            <img src="/assets/images/K2/livingthings/bacteria/b29.png" />
        </div>

        <p class="note">Note: Invite another child to do the step with hands wearing gloves.
            Once done, throw away the used cotton bud.</p>
    </div>


    {{-- slide 34 --}}
    <div class="slide flex flex-col  justify- items-center gap-5   ">
        <h2 class="title stroke !text-start">
            Let's do: <br>
            3. Label the sampled petri dish.</h2>
        <img src="/assets/images/K2/livingthings/bacteria/b30.png" />
        <p class="note">Note: Invite another child to do the step.</p>
    </div>


    {{-- slide 35 --}}
    <div class="slide flex flex-col justify-start items-center gap-5   ">
        <h2 class="title stroke !text-start">
            Let's do: <br>
            4. Spray on the surface of the shoe.</h2>
        <img src="/assets/images/K2/livingthings/bacteria/b31.png" />
        <p class="note">Note: Invite another child to do the step.</p>
    </div>



    {{-- slide 36 --}}
    <div class="slide flex flex-col justify-start items-center gap-5   ">
        <h2 class="title stroke !text-start">
            Let's do: <br>
            5.Use a new cotton bud to repeat step 1-3.</h2>
        <img src="/assets/images/K2/livingthings/bacteria/b32.png" />
    </div>


    {{-- slide 37 --}}
    <div class="slide flex flex-col justify-start items-center gap-5   ">
        <h2 class="title stroke !text-start">Let's do: <br>
            6.Put both the sampled petri dishes in a box and keep the box
            at a cooling place.</h2>
        <img src="/assets/images/K2/livingthings/bacteria/b33.png" />
        <p class="note">Note:Teacher to do the step; use tape to seal all the petri dishes to prevent children from
            opening them
            Tell children that bacteria need time to grow, so we'll check the results at least 10 days later.
        </p>
    </div>
















    {{-- ====================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button
         class="doneButton">
 <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>


    <div id="buttons" class="absolute right-[60px] flex flex-row gap-6 ">

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
                    window.location.href = "{{ route('bacteriaSelection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
