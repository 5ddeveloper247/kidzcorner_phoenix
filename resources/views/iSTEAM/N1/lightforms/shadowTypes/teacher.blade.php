@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="title !text-[3vw] top-title stroke absolute top-[5vh] z-[100]">Different Types of Shadows</h2>

    {{-- slide 29 --}}
    <div class="flex flex-col justify-start text-start text-2xl text-white slide hidden t-slide">
        <div>
            <h2 class="t-title">Children will be able to:</h2>
            <ul class="list-disc">
                <li>Develop awareness of different types of shadows</li>
                <li>Explore materials and their shadows</li>
                <li>Create a shadow puppet with mix of materials</li>
                <li>Develop curiosity in exploring various types of items</li>
                <li>Develop observation and understanding through hands-on activities</li>
            </ul>
        </div>

        <div>
            <h2 class="t-title">Keywords:</h2>
            <div class="flex items-center gap-x-10">
                <ul class="list-disc">
                    <li>Black</li>
                    <li>Shadow</li>
                    <li>Light</li>
                    <li>Block</li>
                    <li>Translucent</li>
                </ul>
                <ul class="list-disc">
                    <li>Transparent</li>
                    <li>Shadow Puppetry</li>
                    <li>Puppet</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="" />
    </div>


    {{-- slide 31 --}}
    <div class="text-white flex flex-col text-start text-2xl slide hidden t-slide">
        <div>
            <h2 class="t-title">Preparations for Class Activity I:</h2>
            <ul class="list-disc">
                <li>
                    The following items for each group:
                    <ul class="list-decimal">
                        <li>Flashlights</li>
                        <li>Items that can form shadows such as Solid toy figurines Blocks Books Construction/coloured paper
                            or card</li>
                    </ul>
                </li>
            </ul>
            <img src="{{ asset('assets/images/pptimages/fish.png') }}" alt="" />
        </div>
        <p>Teacher can point out about the shape of the shadows when children are working on the activity.</p>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="">
    </div>


    {{-- slide 32 --}}
    <div class="text-white flex flex-col text-start text-2xl slide hidden t-slide">
        <div>
            <h2 class="t-title">Preparations for Class Activity I:</h2>
            <ul class="list-disc">
                <li>3. Translucent items that forms coloured shadows such as coloured plastic cups, translucent toys,
                    red/yellow plastic bags, coloured plastic sheets, cellophane paper etc.</li>
            </ul>
            <img src="{{ asset('assets/images/pptimages/glass.png') }}" alt="" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="">
        <p>Teacher can point out on the coloured shadows to the children when they are exploring.</p>
    </div>


    {{-- slide 33 --}}
    <div class="text-white flex flex-col text-start text-2xl slide hidden t-slide">
        <div>
            <h2 class="t-title">Preparations for Class Activity I:</h2>
            <ul class="list-disc">
                <li>4. Transparent items such as transparent plastic cups, water bottles, goggles, magnifying glass or
                    ziplock bag etc. Teacher to point out which parts do not have shadows as light is able to shine through.
                </li>
            </ul>
            <img src="{{ asset('assets/images/pptimages/lens.png') }}" alt="" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="">
        <p>Important Notes: </br>Teacher to remind children not to shine light directly into their eyes or their
            friend's eyes. Explain to them that it will damage their eyes. Teacher can use simple words to explain
            translucent and transparent.</p>
    </div>


    {{-- slide 34 --}}
    <div class="flex flex-col text-start text-2xl text-white slide hidden t-slide">
        <div>
            <h2 class="t-title">Preparations for Class Activity II:</h2>
            <p>Do these for the children before the activity:</p>
            <ul class="list-decimal pl-6">
                <li>Pre-cut puppet templates of a face <span class="block text-lg">(You may use paper plates for the head
                        and cut out the eyes and mouth portion)</span></li>
                <li>Allow children to freely paste the materials on their template and let them discover the shadow formed
                    with the materials.</li>
            </ul>
            <div class="flex items-center justify-around w-full">
                <ul class="list-disc pl-6">
                    <h3 class="font-semibold mt-4">Notes:</h3>
                    <li>Teacher to assist children to glue/tape the materials.</li>
                    <li>
                        Provide a variety of items such as:
                        <ul class="list-disc pl-6">
                            <li>Strings</li>
                            <li>Pipe cleaners</li>
                            <li>Cut-out shapes using paper</li>
                            <li>Cellophane paper</li>
                        </ul>
                    </li>
                </ul>
                <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1"
                    alt="" />
            </div>
        </div>
    </div>


    {{-- slide 35 --}}
    <div class="text-white flex flex-col justify-start text-start text-2xl slide hidden t-slide">
        <h1 class="title stroke text-center">Learning Center Idea</h1>
        <div>
            <h2 class="!text-white stroke title">Matching shadow</h2>
            <h2 class="t-title">What and how to setup:</h2>
            <p>Prepare some flashlights and some toys such as cars, dinosaurs, animal figurines etc. Print out shadows of
                the objects for children to match. The shadows can be taller/bigger/smaller/shorter, depending on how the
                light was positioned.</p>
        </div>
        <div>
            <h2 class="t-title">What to do:</h2>
            <ul class="mt-2 list-decimal space-y-1 pl-6">
                <li>Invite children to pick up a picture and find the item that will cast the shadow.</li>
                <li>Ask children to use the lights to create the same shadow.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="" />
    </div>




    {{-- done Button --}}
    <div class="down-btn-container">
        <button class="doneButton ">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    {{-- Buttons --}}
    <div id="buttons" class="absolute top-[30px] right-[60px] flex flex-row gap-6 z-[99]">

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

        <button class=" nextButton">
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
