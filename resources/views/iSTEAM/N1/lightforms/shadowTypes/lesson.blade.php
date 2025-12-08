@extends('layout.master')

@section('title', 'Dynamic Presentation')
@section('content')

    {{-- title --}}
    <h2 class="top-title stroke">Different Types of Shadows</h2>

    {{-- slide 0 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Do you remember what the <span class="!text-white">black</span> shape in the picture is?</h2>
        <div class="relative">
            <div class="absolute border border-4 border-red-600 w-[7.8vw] h-[7.8vw] rounded-[50%] right-[3.1vw] top-[38%]">
            </div>
            <img src="{{ asset('assets/images/pptimages/shadow1.png') }}" class="img-md" />
        </div>

        <p class="note">Note: Encourage children to share and ask them what that <span class="!text-white">black</span> shape
            is.</p>
    </div>

    {{-- slide 1 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">The <span class=" !text-white"> black</span> shape is the boy's <span class="!text-white">
                <span class="!text-white">shadows</span> </span>! <span class="!text-white"> Shadows </span> are made when
            something <span class="!text-white">
                blocks</span> the <span class="!text-white"> <span class="!text-white">light</span> </span>.</h2>
        <img src="{{ asset('assets/images/pptimages/shadow1.png') }}" class="img-md" />
    </div>

    {{-- slide 2 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">When you stand in the sun or in front of a <span class="!text-white">light</span>, you <span
                class="text-white">block</span> the <span class="!text-white">light</span> and your <span
                class="text-white">shadow</span> will be formed.</h2>
        <img src="{{ asset('assets/images/pptimages/shadow3.png') }}" class="img-md" />
    </div>

    {{-- slide 3 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">The shape of your <span class="!text-white">shadows</span> looks like you and it follows
            your movement and actions.</h2>
        <img src="{{ asset('assets/images/pptimages/shadow3.png') }}" class="img-md" />
    </div>

    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Look at this picture. Can you see the <span class="!text-white">shadow</span>? How is the
            <span class="!text-white">shadows</span> different?
        </h2>
        <img src="{{ asset('assets/images/pptimages/umbrella.png') }}" class="img-md" />
        <p class="note">Note: Teacher to encourage children to answer.</p>
    </div>

    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">The <span class="!text-white">shadows</span> is red in
            colour! <br> What do you think it is
            not <span class="!text-white">black</span> in colour?</h2>
        <img src="{{ asset('assets/images/pptimages/umbrella.png') }}" class="img-md" />
        <p class="note">Note: Teacher to encourage children to answer.</p>
    </div>

    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title stroke">This is because some <span class="!text-white">light</span> can pass through the canopy
                of the umbrella.</h2>
            <img src="{{ asset('assets/images/pptimages/umbrella.png') }}" class="img-md" />
        </div>
    </div>

    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">When some <span class="!text-white">light</span> pass through the red canopy,
            <br> it forms a red <span class="!text-white">shadow</span> on the floor.
        </h2>
        <img src="{{ asset('assets/images/pptimages/umbrella.png') }}" class="img-md" />
        <p class="note">Note: Teacher to point out to children which part of the umbrella is known as the canopy.</p>
    </div>

    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">The canopy of the umbrella is <span class="!text-white">translucent.</span> This means
            some
            <span class="!text-white">light</span> is able to pass through it.
        </h2>
        <img src="{{ asset('assets/images/pptimages/umbrella.png') }}" class="img-md" />
    </div>

    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">What do you see here? Do you see any <span class="!text-white">shadows</span>.</h2>
        <img src="{{ asset('assets/images/pptimages/window.png') }}" class="img-md" />
        <p class="note">Note: Teacher to encourage children to share, get the children to point which part of the window
            formed the shadow.</p>
    </div>

    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">The metal frame formed the <span class="!text-white">black</span> <span
                class="text-white">shadows</span> that look like
            'X's.</h2>
        <img src="{{ asset('assets/images/pptimages/uwindow1.png') }}" class="!w-[45vw]" />
        <p class="note">Note: Teacher to point out to the children.</p>
    </div>
    {{-- slide 11 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">What about the glass? Why are there no <span class="!text-white">shadows</span> formed?</h2>
        <img src="{{ asset('assets/images/pptimages/uwindow2.png') }}" class="img-md" />
        <p class="note">Note: Teacher to encourage children to guess.</p>
    </div>

    {{-- slide 12 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">There are no <span class="!text-white">shadows</span> because <span
                class="text-white">light</span> passes through the
            glass.</h2>
        <img src="{{ asset('assets/images/pptimages/window.png') }}" class="img-md" />
        <p class="note">Note: Teacher can recap with children that shadows are form only when something blocks the light.
        </p>
    </div>

    {{-- slide 13 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">The glass is <span class="!text-white">Transparent</span>. You can see through them and
            <span class="!text-white">light</span> can pass through them too.
        </h2>
        <img src="{{ asset('assets/images/pptimages/window.png') }}" class="img-md" />
    </div>

    {{-- slide 14 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke"><span class="!text-white">Transparent</span> things do not form any <span
                class="text-white">shadows</span>.</h2>
        <img src="{{ asset('assets/images/pptimages/window.png') }}" class="img-md" />
        <p class="note">Note: Teacher can give examples of things that are transparent e.g. spectacles, zip loc bags etc.
        </p>
    </div>

    {{-- slide 15 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke !text-white">CLASS ACTIVITY 1</h2>
        <img src="{{ asset('assets/images/pptimages/tools.png') }}" class="img-md" />
        <h2 class="title stroke text-start">Let's find out: <br> Can light pass through these
            items?</h2>
        <p class="note">Note: Teacher to give each group a flashlight and a set of materials.</p>
    </div>

    {{-- slide 16 --}}
    <div class="flex flex-col items-center justify-between h-[30vw] slide hidden">
        <div class="title stroke text-start ">
            <h2 class="!text-white">Let's do: </h2>
            <ol class="list-decimal lesson-ul">
                <li>Choose an item and shine the flashlight on the item.</li>
                <li>Look at the shadows, is it black, coloured, or no shadow?</li>
                <li>Gather as a class and share findings.</li>
            </ol>
        </div>
        <p class="note">Note: Teacher to facilitate as children work on the activity, ask questions and point out to them
            if the items form shadows, coloured shadows or no shadows. Teacher can explain
            to children using simple words -
            light can/cannot pass through the items.
        </p>
    </div>

    {{-- slide 17 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Look at the picture. What are they doing?</h2>
        <img src="{{ asset('assets/images/pptimages/girls.png') }}" class="img-md" />
        <p class="note">Note: Teacher to encourage children to share answers.</p>
    </div>

    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">This is <span class="!text-white">shadows puppetry </span>. They are putting up a show
            using
            the <span class="!text-white">shadows</span> of the <span class="!text-white">puppets</span>.
        </h2>
        <img src="{{ asset('assets/images/pptimages/girls.png') }}" class="img-md" />
    </div>

    {{-- slide 19 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">What <span class="!text-white">shadows</span> do you see?</h2>
        <img src="{{ asset('assets/images/pptimages/girls.png') }}" class="img-md" />
        <p class="note w-[80%]">Note: Teacher to encourage children to share answers. Teacher can point out the <span
                class="text-white">shadows</span> of
            the tree and bird.</p>
    </div>

    {{-- slide 20 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">When <span class="!text-white">light</span> shines on the <span
                class="text-white">puppets</span>, <span class="!text-white">shadows</span> are formed. The shape of the
            <span class="!text-white">shadows</span>
            show what characters they are.
        </h2>
        <img src="{{ asset('assets/images/pptimages/girls.png') }}" class="img-md" />
    </div>

    {{-- slide 21 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title stroke !text-white">CLASS ACTIVITY 2</h2>
            <img src="{{ asset('assets/images/pptimages/act.png') }}" class="img-md" />
        </div>
        <h2 class="title stroke text-start"> <span class="!text-white">Let's try:</span> <br> Make puppets for
            shadows play.</h2>
        <p class="note">Note: Teacher to provide some templates for children to choose. E.g. House, shapes, animals.</p>
    </div>

    {{-- slide 22 --}}
    <div class="flex flex-col items-center justify-between h-[30vw] slide hidden">
        <div class="title stroke text-start ">
            <h2 class="!text-white">Let's do: </h2>
            <ol class="list-decimal lesson-ul">
                <li>Explore the items and with flashlights.</li>
                <li>
                    Choose where to add the materials to the cardboard template:
                    <ol class="list-disc pl-5">
                        <li>Cover the holes (eyes and mouth) with translucent materials (e.g., cellophane paper).</li>
                        <li>Add other materials to create a different shape on the template.</li>
                    </ol>
                </li>
            </ol>
        </div>
        <p class="note">Note: Teacher to provide a wide variety of materias for children to explore. Encourage children
            to explore the materials with the flashlight.</p>
    </div>

    {{-- slide 23 --}}
    <div class="flex flex-col items-center justify-center  text-start slide hidden">
        <div class="title stroke">
            <h2 class="!text-white">Let's do:</h2>
            <ol class="list-decimal lesson-ul" start="3">
                <li> Use a flashlight and shine it on your puppet. Look at the shadows of
                    your puppet.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/pptimages/doll.png') }}" class="img-lg" />
        <p class="note">Note: Teacher to guide and assist children in using tape and glue as they add the
            translucent paper and other materials on their puppet. Template shoold have some holes cut out e.g eyes nose
            etc for children to paste.</p>
    </div>

    {{-- slide 24 --}}
    <div class="flex flex-col items-center justify-between h-[30vw] w-[90%] slide hidden">
        <div class="title stroke text-start ">
            <h2 class="!text-white">Let's do: </h2>
            <ol class="lesson-ul list-decimal space-y-5" start="4">
                <li>Continue to add more materials until you are satisfied with the outcome of the shadow.</li>
                <li>Gather as a class. Take turns to do a "Show And Tell" on the puppet you have created.</li>
            </ol>
        </div>
        <p class="note">Note: Encourage children to share their puppet as they present the <span
                class="text-white">shadows</span> during the 'Show and
            Tell. Teacher to guide children in expressing their thoughts with questions.</p>
    </div>

    {{-- slide 25 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Look at the <span class="!text-white">shadows</span> of the house. The holes allow light
            to pass through them.</h2>
        <img src="{{ asset('assets/images/pptimages/house.png') }}"  class="!w-[32vw]" />
    </div>

    {{-- slide 26 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Coloured <span class="!text-white">shadows</span> are formed when cellophane paper used.
        </h2>
        <img src="{{ asset('assets/images/pptimages/article.png') }}" class="img-md" />
    </div>

    {{-- slide 27 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke"> <span class="!text-white">Translucent</span> things, such as the cellophane paper,
            allow
            some <span class="!text-white">light</span> to pass through them.</h2>
        <img src="{{ asset('assets/images/pptimages/article.png') }}" class="img-md" />
    </div>

    {{-- slide 28 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke"><span class="!text-white">Translucent</span> things allow <span
                class="text-white">light</span> to pass through them
            and
            they do not form any <span class="!text-white">shadows</span>.</h2>
        <img src="{{ asset('assets/images/pptimages/window.png') }}" class="img-md" />
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
                window.location.href = "{{ route('lightforms') }}";
            });

            // Start at first slide
            showSlide(0);
        });
    </script>
@endpush
