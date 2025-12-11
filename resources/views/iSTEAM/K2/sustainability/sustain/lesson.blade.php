@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- title --}}
    <h2 class="top-title stroke">What is Sustainability?</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s2.png') }}" class="img-md" />
        <h2 class="title stroke">Children, do you remember what global warming is?</h2>
        <p class="note">Note: Encourage children to share what their answers.</p>
    </div>



    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s2.png') }}" class="img-md" />
        <h2 class="title stroke">Global warming is the process of Earth getting warmer
            and the increase in temperature.</h2>
        <p class="note">Note: Explain that climate means the weather over a longer period of time.</p>
    </div>


    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s10.png') }}" class="img-md" />
        <h2 class="title stroke text-center">Global warming is caused by the increase in greenhouse gases
            trapped in the atmosphere.</h2>
        <p class="note">Note: Encourage children to share their thoughts with the class.</p>
    </div>

    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s2.png') }}" class="img-md" />
        <h2 class="title stroke">Global warming is the process of Earth getting warmer
            and the increase in temperature.</h2>
        <p class="note">Note: Explain that climate means the weather over a longer period of time.</p>
    </div>

    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex gap-[1vw] items-center">
            <div class="flex flex-col gap-[.8vw]">
                <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s16.png') }}" class="!w-[18vw]" />
                <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s18.png') }}" class="!w-[18vw]" />
            </div>
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s23.png') }}" class="img-md" />
        </div>
        <h2 class="title stroke">With the increased temperature, it affects the land, animals
            and plants. When glaciers melt, we will be affected too.</h2>
    </div>

    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s1.png') }}" class="img-sm" />
        <h2 class="title stroke">Do you know that besides the increasing greenhouse gases,
            Earth is facing another major problem?</h2>
        <p class="note">Note: Encourage children to brainstorm.</p>
    </div>


    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s1.png') }}" class="img-sm" />
        <h2 class="title stroke">Earth's natural resources are running out!</h2>
    </div>

    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s1.png') }}" class="img-sm" />
        <h2 class="title stroke">Do you know what natural resources are?
            Can you name some examples of natural resources?</h2>
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>



    {{-- Slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a1.png') }}" class="img-lg" />
        <h2 class="title stroke">Natural resources are things found in nature
            which can be used by people.</h2>
    </div>

    {{-- Slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a1.png') }}" class="img-lg" />
        <h2 class="title stroke">Trees, sun, coal, fish, water, plants and animals
            are examples of natural resources.</h2>
    </div>

    {{-- Slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a2.png') }}" class="img-md" />
        <h2 class="title stroke">People need natural resources to stay alive.</h2>
        <p class="note">Note: Teacher can share that people need air, water and food to stay alive.
            Food comes from animals and plants.</p>
    </div>

    {{-- Slide 12 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a1.png') }}" class="img-lg" />
        <h2 class="title stroke">However, natural resources are running out.
            People are using them faster than they can recover.</h2>
    </div>

    {{-- Slide 13 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s1.png') }}" class="img-sm" />
        <h2 class="title stroke">When all the natural resources run out,
            no one can live on Earth anymore.</h2>
        <p class="note">Note: Teacher can explain that the lives of animals, plants and humans will be affected due to
            the lack of clean water, clean air and food.</p>
    </div>

    {{-- Slide 14 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s1.png') }}" class="img-sm" />
        <h2 class="title stroke">We need to make the natural resources sustainable.</h2>
    </div>

    {{-- Slide 15 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[20vw] self-end">
        <h2 class="title stroke">Do you know what is the meaning of sustainable?</h2>
        <p class="note">Note: Encourage children to share their thoughts.</p>
    </div>

    {{-- Slide 16 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a3.png') }}" class="img-h-md" />
        <h2 class="title stroke">Imagine that you have a jar of cookies in class.</h2>
    </div>

    {{-- Slide 17 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a3.png') }}" class="img-h-md" />
        <h2 class="title stroke">Whenever children take cookies from the jar,
            the cookie jar refills itself.</h2>
    </div>

    {{-- Slide 18 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a3.png') }}" class="img-h-md" />
        <h2 class="title stroke">The cookies will never run out! It's like magic!</h2>
    </div>

    {{-- Slide 19 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a3.png') }}" class="img-h-md" />
        <h2 class="title stroke">In this case, the cookies are sustainable. This means that
            there will still be cookies after a long time.</h2>
    </div>

    {{-- Slide 20 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a4.png') }}" class="img-md" />
        <h2 class="title stroke">But in the real world, there isn't any magic cookie jars. The
            number of cookies in the jar will decrease when we take them.</h2>
    </div>

    {{-- Slide 21 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a4.png') }}" class="img-md" />
        <h2 class="title stroke">The jar will be empty if we continue to take the
            cookies and no one refills it.</h2>
    </div>

    {{-- Slide 22 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a1.png') }}" class="img-lg" />
        <h2 class="title stroke">Just like the cookies, natural resources will run out
            if we don't do anything to 'refill' them.</h2>
    </div>

    {{-- Slide 23 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a2.png') }}" class="img-md" />
        <h2 class="title stroke">We need to make natural resources sustainable
            so that people can continue to live on Earth.</h2>
    </div>

    {{-- Slide 24 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">Let's find out why natural resources are important to us.</h2>
    </div>

    {{-- Slide 25 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a5.png') }}" class="img-md" />
        <h2 class="title stroke">Let's look at one of the natural resources - trees. How will
            Earth be affected when trees are being chopped down?</h2>
        <p class="note">Note: Encourage children to share their thoughts.</p>
    </div>

    {{-- Slide 26 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke !text-white">Class Activity 1</h2>
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a6.png') }}" class="img-sm" />
        <h2 class="title stroke">Let's find out:
            What do you think happens when trees are chopped down?</h2>
    </div>

    {{-- Slide 27 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="text-start">
            <h2 class="title stroke">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke">
                <li>Set up as shown. Label the bottles as A, B and C from left to right.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a6.png') }}" class="img-sm" />
        <p class="note">Note: Click on each bottle label to explain to children what each represents.</p>
    </div>

    {{-- Slide 28 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="text-start">
            <h2 class="title stroke">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke">
                <li>Prepare 3 cups of water.</li>
                <li>Observe the water which is being collected below each bottle.</li>
                <li>Pour the cup of water at the end of bottle one by one.</li>
                <li>Observe the colour of the water collected and make comparisons.</li>
                <li>Draw your observations in the learning journal.</li>
            </ol>
        </div>
    </div>

    {{-- Slide 29 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a20.png') }}" class="img-lg" />
        <h2 class="title stroke">As seen in the experiment, the water collect from bottle C is
            dirtier compared to the water collected from bottle A.</h2>
        <p class="note">Note: Teacher can prompt children to think of reasons why the water collected is different and
            why.</p>
    </div>

    {{-- Slide 30 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a8.png') }}" class="img-lg" />
        <h2 class="title stroke">Trees and plants have roots that hold onto the soil.</h2>
    </div>

    {{-- Slide 31 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a8.png') }}" class="img-lg" />
        <h2 class="title stroke">Whenever it's raining, soil will not be washed away.</h2>
    </div>

    {{-- Slide 32 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a9.png') }}" class="img-lg" />
        <h2 class="title stroke">Similarly, for places with some trees,
            the roots of the trees hold on to the soil.</h2>
    </div>

    {{-- Slide 33 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a9.png') }}" class="img-lg" />
        <h2 class="title stroke">The fallen leaves and twigs also helps to reduce
            the amount of soil being washed away during rainy days.</h2>
    </div>

    {{-- Slide 34 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a10.png') }}" class="img-lg" />
        <h2 class="title stroke">When there are no trees, <br>
            there is nothing to hold on to the soil.</h2>
    </div>

    {{-- Slide 35 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a10.png') }}" class="img-lg" />
        <h2 class="title stroke">When it rains, the rainwater carries the soil into the sea.
            This causes the sea to be dirty.</h2>
    </div>

    {{-- Slide 36 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a11.png') }}" class="img-lg" />
        <h2 class="title stroke">The lives of the sea creatures and animals
            will be affected by dirty water.</h2>
    </div>

    {{-- Slide 37 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a2.png') }}" class="img-md" />
        <h2 class="title stroke">This will affect us as we need water and food to live.</h2>
        <p class="note">Note: Teacher can explain that the dirty water may cause the fishes and animals to be sick.
            Then it may cause a decrease in the amount of food available for us. Dirty water
            also affect our lives as we need water too.</p>
    </div>

    {{-- Slide 38 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a12.png') }}" class="img-lg" />
        <h2 class="title stroke">Trees also help to clean up the air. <br>
            Trees take in the carbon dioxide, one of the greenhouse gases,
            and covert them into healthier air, oxygen.</h2>
    </div>

    {{-- Slide 39 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a12.png') }}" class="img-lg" />
        <h2 class="title stroke">Therefore, trees are important to Earth.</h2>
    </div>

    {{-- Slide 40 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a1.png') }}" class="img-lg" />
        <h2 class="title stroke">Similarly, other natural resources also play important
            roles on Earth.</h2>
    </div>

    {{-- Slide 41 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a13.png') }}" class="img-md" />
        <h2 class="title stroke">Coal needs a very long time to be formed.
            If people keep using coal, it will run out very soon.</h2>
    </div>

    {{-- Slide 42 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a1.png') }}" class="img-lg" />
        <h2 class="title stroke">Similarly, if people consume food faster than nature can
            replenish, there will not be any food left in the future.</h2>
    </div>

    {{-- Slide 43 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a1.png') }}" class="img-md" />
        <h2 class="title stroke">It is important to use these natural resources carefully
            so that they will be sustainable and available
            even after a long time.</h2>
    </div>

    {{-- Slide 44 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a1.png') }}" class="img-lg" />
        <h2 class="title stroke">In the next lesson, we will look at how we can do our part in
            making natural resources sustainable.</h2>
    </div>

    {{-- Slide 45 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center p-[20px] flex flex-col justify-center items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('assets/images/K2/sustain/sustainability/a14.png') }}" class="w-full" />
        </div>
    </div>














    {{-- ====================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>


    <div id="buttons" class="absolute flex flex-row gap-6">
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
            const nextBtn = document.querySelector(".nextButton");
            const returnBtn = document.getElementById("returnButton");
            const doneBtn = document.querySelector(".doneButton");

            let currentIndex = 0;

            function showSlide(index) {
                slides.forEach(slide => slide.classList.add("hidden"));
                slides[index].classList.remove("hidden");
                currentIndex = index;

                const isLastSlide = (index === slides.length - 1);

                if (isLastSlide) {
                    nextBtn.style.display = "none";
                    doneBtn.style.display = "block";
                } else {
                    nextBtn.style.display = "block";
                    doneBtn.style.display = "none";
                }
            }

            nextBtn.addEventListener("click", () => {
                if (currentIndex < slides.length - 1) {
                    showSlide(currentIndex + 1);
                }
            });

            returnBtn.addEventListener("click", () => {
                if (currentIndex === 0) {
                    window.location.href = "{{ route('sustainSelection') }}";
                } else {
                    showSlide(currentIndex - 1);
                }
            });

            doneBtn.addEventListener("click", () => {
                window.location.href = "{{ route('k2sustainability') }}";
            });

            showSlide(0);
        });
    </script>
@endpush
