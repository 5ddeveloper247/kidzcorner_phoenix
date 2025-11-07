@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- Slide 1 --}}
    <h2 class="top-title stroke">Reduce & Reuse</h2>

    {{-- Slide 1 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[30vh] mt-[4vw]">
        <h2 class="title stroke">Children, let’s recap on what we have learned about pollution.</h2>
        <p class="note">Note: Encourage children to share.</p>
    </div>

    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r1.png') }}" class="large-img6" />
        <h2 class="title stroke">Look at these pictures. These are pictures of the different types of pollution.</h2>
        <p class="note">Note: Encourage children to recap and share what they know.</p>
    </div>

    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center justify-between">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r1.png') }}" class="large-img6" />
        <h2 class="title stroke text-center">
            <span class="text-white">Pollution</span> is when gases, <span class="text-white">chemicals</span>, oil spills
            and trash are introduced into the environment in large amounts that is harmful or poisonous to humans, animals
            and plants.
        </h2>
    </div>

    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/pollution/p2.png') }}" class="large-img6" />
        <h2 class="title stroke text-center">Harmful smoke and chemicals are also released when such fuels are burnt,
            causing air pollution.</h2>
    </div>

    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r2.png') }}" class="large-img6" />
        <h2 class="title stroke">The sea is polluted with oil spill. Oil spills are harmful to the environment and animals.
        </h2>
    </div>

    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/pollution/p9.png') }}" />
        <h2 class="title stroke">The sea is also polluted with rubbish.</h2>
    </div>

    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/pollution/p20.png') }}" />
        <h2 class="title stroke">Children, how did these rubbish end up in the sea?</h2>
        <div class="text-start title stroke">
            <ol class="lesson-ul">
                <li>Note: Encourage children to guess.</li>
            </ol>
        </div>
    </div>

    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r3.png') }}" />
        <h2 class="title stroke">Plastic bags, food wrappers and straws are common items that we throw in our bins.</h2>
    </div>

    {{-- Slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r4.png') }}" />
        <h2 class="title stroke">When rubbish is being transported, rubbish that's made of plastics are often blown away
            because it's so lightweight.</h2>
    </div>

    {{-- Slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r5.png') }}" />
        <h2 class="title stroke">The collected rubbish are placed into landfills.</h2>
    </div>

    {{-- Slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r6.png') }}" />
        <h2 class="title stroke">Storms may wash these plastics from landfills into drains or rivers. These plastics will
            then end up in the sea.</h2>
    </div>

    {{-- Slide 12 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r7.png') }}" class="large-img6" />
        <h2 class="title stroke">Fish and animals in the sea get stuck or choked by the rubbish they found in the sea.</h2>
    </div>

    {{-- Slide 13 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r8.png') }}" class="w-img" />
        <h2 class="title stroke">How can we help?</h2>
        <div class="text-start title stroke">
            <ol class="lesson-ul">
                <li>Note: Encourage children to share their answers.</li>
            </ol>
        </div>
    </div>

    {{-- Slide 14 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r9.png') }}" class="!max-w-[15vw] !h-[10vw]" />
        <h2 class="title stroke">We can do our part by practicing the three 'R's - <span class="text-white">Reduce, Reuse
                and Recycle</span>. Do you know what it means?</h2>

        <p class="note">Note: Encourage children to share their understanding on the terms and examples of what they can
            do to protect our environment. Teacher can write down their points on a mahjong paper.</p>
    </div>

    {{-- Slide 15 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r9.png') }}" class="!max-w-[15vw] !h-[10vw]" />
        <h2 class="title stroke">Let’s look at how waste can be <span class="text-white">reduced</span>.</h2>
    </div>

    {{-- Slide 16 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r3.png') }}" />
        <h2 class="title stroke">The most direct way to help is to <span class="text-white">reduce</span> waste!</h2>
    </div>

    {{-- Slide 17 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r3.png') }}" />
        <h2 class="title stroke">When we throw less rubbish, there will be less rubbish. Less rubbish will end up in the
            sea.</h2>
    </div>

    {{-- Slide 18 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r10.png') }}" class="w-img3" />
        <h2 class="title stroke">We can use less plastic bags or bring our own bags when we go shopping.</h2>
    </div>

    {{-- Slide 19 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r11.png') }}" class="large-img6" />
        <h2 class="title stroke">Buy items with less packaging. This will help to reduce the amount of rubbish being thrown
            away.</h2>
    </div>

    {{-- Slide 20 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r12.png') }}" class="large-img6" />
        <h2 class="title stroke">Use reusable food containers and utensils instead of disposable ones.</h2>
    </div>

    {{-- Slide 21 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r13.png') }}" class="large-img6" />
        <h2 class="title stroke">Using reusable masks also helps to reduce the amount of waste created.</h2>
    </div>

    {{-- Slide 22 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r14.png') }}" class="large-img6" />
        <h2 class="title stroke">Walking, riding a bicycle and taking the public transport instead of driving our cars help
            to reduce air pollution too!</h2>
    </div>

    {{-- Slide 23 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r15.png') }}" class="large-img6" />
        <h2 class="title stroke">We should ask for a smaller portion of food if we think the serving is too much. This helps
            to reduce food waste.</h2>
    </div>

    {{-- Slide 24 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <h2 class="title stroke !text-white">Individual Activity 1</h2>
        <img src="{{ asset('assets/images/K2/sustain/reduce/r16.png') }}" />
        <div class="text-start title stroke">
            <h2>Let's do:</h2>
            <ol class="lesson-ul">
                <li>Fill up the activity sheet with challenges that will reduce waste!</li>
            </ol>
        </div>
    </div>

    {{-- Slide 25 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do:</h2>
            <div class="text-start title stroke">
                <ol class="lesson-ul list-decimal">
                    <li>Discuss as a class on things you can do to help to reduce waste.</li>
                    <li>Try to have a different challenge from each other.</li>
                    <li>Help each other keep track of their challenges and encourage each other to overcome their
                        challenges.</li>
                </ol>
            </div>
        </div>
    </div>

    {{-- Slide 26 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start title stroke">
            <h2>Some examples:</h2>
            <ol class="lesson-ul list-disc">
                <li>Say 'No' to plastic bags/straws</li>
                <li>Empty bowls (Finish all the food/drinks served)</li>
                <li>Switch lights off when not in use</li>
                <li>Use reusable bags</li>
                <li>Save paper (use two sides of the paper)</li>
                <li>Walk or ride a bicycle</li>
                <li>Use reusable mask/water bottles/shower bags</li>
            </ol>
        </div>
        <p class="note">Note: There can be other ideas from the children.</p>
    </div>

    {{-- Slide 27 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r17.png') }}" />
        <h2 class="title stroke">Let’s look at how waste can be <span class="text-white">reused</span>.</h2>
    </div>

    {{-- Slide 28 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r17.png') }}" />
        <h2 class="title stroke">Reusing is about looking for ways to use the item again.</h2>
    </div>

    {{-- Slide 29 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r18.png') }}" class="large-img6" />
        <h2 class="title stroke">Glass and plastic containers can be reused to store items such as food or stationery.</h2>
    </div>

    {{-- Slide 30 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r19.png') }}" class="large-img6" />
        <h2 class="title stroke">Old clothes can be passed on to others who need them or be transformed into bags.</h2>
    </div>

    {{-- Slide 31 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r20.png') }}" class="large-img6" />
        <h2 class="title stroke">Artists reuse unwanted materials to create artwork.</h2>

        <p class="note">Note: Encourage children to share what materials were used for the artwork.</p>
    </div>

    {{-- Slide 32 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r21.png') }}" class="large-img6" />
        <h2 class="title stroke">Some artists use artwork to send messages to people.</h2>

        <p class="note">Note: Ask children what materials do they see and what message do they think the artist is trying
            to
            say.</p>
    </div>

    {{-- Slide 33 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r21.png') }}" class="large-img6" />
        <h2 class="title stroke">The message 'Stop cluttering the Baltic Sea' in polish is also displayed below the
            sculpture.</h2>
    </div>

    {{-- Slide 34 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r21.png') }}" class="large-img6" />
        <h2 class="title stroke">The artist wanted to show people that the rubbish they threw into the Baltic sea end up
            inside the fishes' stomachs.</h2>
    </div>

    {{-- Slide 35 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r21.png') }}" class="large-img6" />
        <h2 class="title stroke">Using this artwork, the artist reminds people to be responsible and take charge of
            reducing pollution.</h2>
    </div>

    {{-- Slide 36 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <h2 class="text-white text-center">Class Activity 2</h2>
        <img src="{{ asset('assets/images/K2/sustain/reduce/r21.png') }}" class="large-img6" />
        <h2 class="title stroke">Let's find out: <br> Create an artwork that can remind people to do their part in helping
            Earth.</h2>
    </div>

    {{-- Slide 37 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[55vh]">
        <h2 class="text-white text-center stroke">Brainstorming Session</h2>
        <div class="text-start title stroke">
            <ol class="lesson-ul">
                <li>1) What have you learned about climate change, global warming and pollution?</li>
                <li>2) What messages do you want to share with others about protecting Earth?</li>
                <li>3) What kind of artwork would you like to create?</li>
                <li>4) What materials have you collected and how will you use them in your artwork?</li>
            </ol>
        </div>
        <p class="note">Note: Teacher to write children's sharing on a large mahjong paper. Teacher to guide children in
            their thoughts for their message about protecting earth. Assist children in planning the type of artwork they
            want to create. It can be a 2D or 3D artwork. Encourage children to be creative in using the recycle materials
            collected.</p>
    </div>

    {{-- Slide 38 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start title stroke">
            <h2>Let's do:</h2>
            <ol class="lesson-ul list-decimal">
                <li>Discuss as a class the main message of your artwork.</li>
                <li>Sketch and design how your artwork will look like.</li>
                <li>Divide the tasks among groups to work on different parts of the artwork.</li>
                <li>Display the artwork. Spread awareness of your message with peers and visitors.</li>
            </ol>
        </div>
    </div>

    {{-- Slide 39 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r22.png') }}" />
        <h2 class="title stroke">There will be less pollution when we do our part in reducing waste and reusing unwanted
            items.</h2>
    </div>

    {{-- Slide 40 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r24.png') }}" />
        <h2 class="title stroke">The three 'R's are the key points to protecting our Earth!</h2>
    </div>

    {{-- Slide 41 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <h2 class="text-white">Learning Journal</h2>
        <img src="{{ asset('assets/images/K2/sustain/reduce/r23.png') }}" class="!max-w-[35vw]"/>
    </div>




    {{-- ========== --}}
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

    {{-- Next Button --}}
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
                slides.forEach((s, i) => s.classList.toggle("hidden", i !== index));
                currentIndex = index;
                const isLast = index === slides.length - 1;
                if (nextBtn) nextBtn.style.display = isLast ? "none" : "block";
                if (doneBtn) doneBtn.style.display = isLast ? "block" : "none";
            }

            if (nextBtn) nextBtn.addEventListener("click", () => {
                if (currentIndex < slides.length - 1) showSlide(currentIndex + 1);
            });

            if (returnBtn) returnBtn.addEventListener("click", () => {
                if (currentIndex === 0) {
                    window.location.href = "{{ route('reduceSelection') }}";
                } else {
                    showSlide(currentIndex - 1);
                }
            });

            if (doneBtn) doneBtn.addEventListener("click", () => {
                window.location.href = "{{ route('k2sustainability') }}";
            });

            showSlide(0);
        });
    </script>
@endpush
