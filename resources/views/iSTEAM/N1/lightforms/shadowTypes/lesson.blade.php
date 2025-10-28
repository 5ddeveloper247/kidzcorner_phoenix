@extends('layout.master')

@section('title stroke', 'Dynamic Presentation')
@section('content')

    {{-- title --}}
    <h2 class="title !text-[3vw] top-title stroke absolute top-[5vh] z-[100]">Different Types of Shadows</h2>

    {{-- slide 0 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Do you remember what the black shap in the picture is?</h2>
        <div class="relative">
            <div class="absolute border border-4 border-red-600 w-[150px] h-[150px] rounded-[50%] right-[60px] top-[38%]">
            </div>
            <img src="{{ asset('assets/images/pptimages/shadow1.png') }}" />
        </div>

        <p class="note">Note: Encourage children to share and ask them what that black shape is.</p>
    </div>

    {{-- slide 1 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">The <span class=" text-white"> black</span> shape is the boy's <span class="text-white">
                shadow </span>! <span class="text-white"> Shadows </span> are made when something <span class="text-white">
                blocks</span> the <span class="text-white"> light </span>.</h2>
        <img src="{{ asset('assets/images/pptimages/shadow1.png') }}" />
    </div>

    {{-- slide 2 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">When you stand in the sun or in front of a <span class="text-white">light</span>, you <span
                class="text-white">block</span> the <span class="text-white">shadow</span> will be formed.</h2>
        <img src="{{ asset('assets/images/pptimages/shadow3.png') }}" />
    </div>

    {{-- slide 3 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">The shape of your shadow looks like you and it follows your movement and actions.</h2>
        <img src="{{ asset('assets/images/pptimages/shadow3.png') }}" />
    </div>

    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Look at this picture. Can you see the shadow? How is the shadow different?</h2>
        <img src="{{ asset('assets/images/pptimages/umbrella.png') }}" />
        <p class="note">Note: Teacher to encourage children to answer.</p>
    </div>

    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">The shadow is <span class="text-white"> red</span> in colour! What do you think it is
            not
            black in colour?</h2>
        <img src="{{ asset('assets/images/pptimages/umbrella.png') }}" />
        <p class="note">Note: Teacher to encourage children to answer.</p>
    </div>

    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title stroke">This is because some light can pass through the canopy of the umbrella.</h2>
            <img src="{{ asset('assets/images/pptimages/umbrella.png') }}" />
        </div>
    </div>

    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">When some light pass through the red canopy, it forms a red shadow in the floor.</h2>
        <img src="{{ asset('assets/images/pptimages/umbrella.png') }}" />
        <p class="note">Note: Teacher to point out to children which part of the umbrella is known as the canopy.</p>
    </div>

    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">The canopy of the umbrella is <span class="text-white">translucent.</span> This means
            some
            light is able to pass through it.</h2>
        <img src="{{ asset('assets/images/pptimages/umbrella.png') }}" />
    </div>

    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">What do you see here? Do you see any shadows.</h2>
        <img src="{{ asset('assets/images/pptimages/window.png') }}" />
        <p class="note">Note: Teacher to encourage children to share, get the children to point which part of the window
            formed the shadow.</p>
    </div>

    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">The metal frame formed the black shadows that look like '+'s.</h2>
        <img src="{{ asset('assets/images/pptimages/gl6.png') }}" />
        <p class="note">Note: Teacher to point out to the children.</p>
    </div>

    {{-- slide 11 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">What about the glass? Why are there no shadows formed?</h2>
        <img src="{{ asset('assets/images/pptimages/window.png') }}" />
        <p class="note">Note: Teacher to encourage children to guess.</p>
    </div>

    {{-- slide 12 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">There are no shadows because light passes through the glass.</h2>
        <img src="{{ asset('assets/images/pptimages/window.png') }}" />
        <p class="note">Note: Teacher can recap with children that shadows are form only when something blocks the light.
        </p>
    </div>

    {{-- slide 13 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">The glass is transparent. You can see through them and light can pass through them too.
        </h2>
        <img src="{{ asset('assets/images/pptimages/window.png') }}" />
    </div>

    {{-- slide 14 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Transparent things do not form any shadows.</h2>
        <img src="{{ asset('assets/images/pptimages/window.png') }}" />
        <p class="note">Note: Teacher can give examples of things that are transparent e.g. spectacles, zip loc bags etc.
        </p>
    </div>

    {{-- slide 15 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke text-white">CLASS ACTIVITY 1</h2>
        <img src="{{ asset('assets/images/pptimages/tools.png') }}" />
        <h2 class="title stroke text-start">Let's find out: Can light pass through these items?</h2>
        <p class="note">Note: Teacher to give each group a flashlight and a set of materials.</p>
    </div>

    {{-- slide 16 --}}
    <div class="flex flex-col items-center justify-center space-y-20 w-[80%] slide hidden">
        <div class="title stroke text-start px-4">
            <h2>let's do: </h2>
            <ul class="list-decimal">
                <li>Choose an item and shine the flashlight on the item.</li>
                <li>Look at the shadow — is it black, coloured, or no shadow?</li>
                <li>Gather as a class and share findings.</li>
            </ul>
        </div>
        <p class="note">Note: Teacher to facilitate as children work on the activity, ask questions and point out to them
            if the items form shadows, coloured shadows or no shadows. Teacher can explain to children using simple words -
            light can/cannot pass through the items.</p>
    </div>

    {{-- slide 17 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Look at the picture. What are they doing?</h2>
        <img src="{{ asset('assets/images/pptimages/girls.png') }}" />
        <p class="note">Note: Teacher to encourage children to share answers.</p>
    </div>

    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">This is shadow puppetry. They are putting up a show using the shadows of the puppets.
        </h2>
        <img src="{{ asset('assets/images/pptimages/girls.png') }}" />
    </div>

    {{-- slide 19 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">What shadows do you see?</h2>
        <img src="{{ asset('assets/images/pptimages/girls.png') }}" />
        <p class="note w-[80%]">Note: Teacher to encourage children to share answers. Teacher can point out the shadows of
            the tree and bird.</p>
    </div>

    {{-- slide 20 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">When light shines on the puppets, shadows are formed. The shape of the shadows show
            what
            characters they are.</h2>
        <img src="{{ asset('assets/images/pptimages/girls.png') }}" />
    </div>

    {{-- slide 21 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title stroke text-white">CLASS ACTIVITY 2</h2>
            <img src="{{ asset('assets/images/pptimages/act.png') }}" />
        </div>
        <h2 class="title stroke text-start">Let's try: Make puppets for shadow play.</h2>
        <p class="note">Note: Teacher to provide some templates for children to choose. E.g. House, shapes, animals.</p>
    </div>

    {{-- slide 22 --}}
    <div class="flex flex-col items-center justify-center space-y-20 w-[80%] slide hidden">
        <div class="title stroke text-start px-4">
            <h2>let's do: </h2>
            <ul class="list-decimal text-4xl">
                <li>Explore the items and with flashlights.</li>
                <li>
                    Choose where to add the materials to the cardboard template:
                    <ul class="list-disc">
                        <li>Cover the holes (eyes and mouth) with translucent materials (e.g., cellophane paper).</li>
                        <li>Add other materials to create a different shape on the template.</li>
                    </ul>
                </li>
            </ul>
        </div>
        <p class="note">Note: Teacher to provide a wide variety of materias for children to explore. Encourage children
            to explore the materials with the flashlight.</p>
    </div>

    {{-- slide 23 --}}
    <div class="flex flex-col items-center justify-center px-4 text-start slide hidden">
        <div class="title stroke">
            <h2>Let's do:</h2>
            <ul>
                <li>3. Use a flashlight and shine it on your puppet. Look at the shadow of your puppet.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/doll.png') }}" alt="" />
        <p class="note text-ellipsis">Note: Teacher to guide and assist children in using tape and glue as they add the
            translucent paper and other materials on their puppet. Template should have some holes cut out e.g eyes nose
            etc for children to paste.</p>
    </div>

    {{-- slide 24 --}}
    <div class="flex flex-col items-center justify-center space-y-20 w-[90%] slide hidden">
        <div class="title stroke text-start px-4">
            <h2>let's do: </h2>
            <ul>
                <li>4. Continue to add more materials until you are satisfied with the outcome of the shadow.</li>
                <li>5. Gather as a class. Take turns to do a "Show And Tell" on the puppet you have created.</li>
            </ul>
        </div>
        <p class="note">Note: Encourage children to share their puppet as they present the shadows during the 'Show and
            Tell. Teacher to guide children in expressing their thoughts with questions.</p>
    </div>

    {{-- slide 25 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Look at the shadow of the house. The holes allow light to pass through them.</h2>
        <img src="{{ asset('assets/images/pptimages/house.png') }}" />
    </div>

    {{-- slide 26 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Coloured shadows are formed when cellophane paper used.</h2>
        <img src="{{ asset('assets/images/pptimages/article.png') }}" />
    </div>

    {{-- slide 27 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke"> <span class="text-white">Translucent</span> things, such as the cellophane paper,
            allow
            some light to pass through them.</h2>
        <img src="{{ asset('assets/images/pptimages/article.png') }}" />
    </div>

    {{-- slide 28 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke"><span class="text-white">Translucent</span> things allow light to pass through them
            and
            they do not form any shadows.</h2>
        <img src="{{ asset('assets/images/pptimages/window.png') }}" />
    </div>




    {{-- Complete/Done Butttom --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    {{-- Buttons --}}
    <div id="buttons" class="absolute  flex flex-row ">

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
            // Get all elements
            const slides = document.querySelectorAll(".slide");
            const nextBtn = document.querySelector(".nextButton");
            const returnBtn = document.getElementById("returnButton");
            const doneBtn = document.querySelector(".doneButton");

            // Current slide position
            let currentIndex = 0;

            // Show slide and update buttons
            function showSlide(index) {
                // Hide all slides
                slides.forEach(slide => slide.classList.add("hidden"));

                // Show current slide
                slides[index].classList.remove("hidden");

                // Update index
                currentIndex = index;

                // Check if last slide
                const isLastSlide = (index === slides.length - 1);

                if (isLastSlide) {
                    // Last slide: hide Next, show Done
                    nextBtn.style.display = "none";
                    doneBtn.style.display = "block";
                } else {
                    // Not last slide: show Next, hide Done
                    nextBtn.style.display = "block";
                    doneBtn.style.display = "none";
                }
            }

            // Next button
            nextBtn.addEventListener("click", () => {
                if (currentIndex < slides.length - 1) {
                    showSlide(currentIndex + 1);
                }
            });

            // Return button
            returnBtn.addEventListener("click", () => {
                if (currentIndex === 0) {
                    // On first slide: redirect to route
                    window.location.href = "{{ route('choosetypes') }}";
                } else {
                    // Not first slide: go back
                    showSlide(currentIndex - 1);
                }
            });

            // Done button
            doneBtn.addEventListener("click", () => {
                window.location.href = "{{ route('choosetypes') }}";
            });

            // Start at first slide
            showSlide(0);
        });
    </script>
@endpush
