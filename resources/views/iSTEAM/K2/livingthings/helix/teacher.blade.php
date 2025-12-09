@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Double DNA Helix</h2>

    {{-- sldie 1  --}}
    <div class="t-slide flex  !text-white flex-col justify-around  text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Know that a DNA double helix looks like a twisted ladder</li>
                <li>Know that a DNA double helix is composed of long sequences of the four bases</li>
                <li>Learn how to make a model of a DNA double helix</li>
                <li>Know that every living thing has different orders of the bases in DNA that make it
                    unique</li>
                <li>Know that DNA determines our traits</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex flex-col  items-start justify-between">
            <h2 class="t-title">Keywords:</h2>
            <div>
                <ul class="list-disc ">
                    <li>Living Thing</li>
                    <li>DNA</li>
                    <li>Double Helix</li>
                </ul>
                <ul class="list-disc ">
                    <li>Twisted Ladder</li>
                    <li>Base</li>
                    <li>Trait</li>
                </ul>
            </div>
        </div>
    </div>



    {{-- slide 2 --}}
    <div class="t-slide flex  !text-white flex-col justify-center items-center  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>
                    1 pipe cleaner for each child
                    (sample shown: cut a 30cm long pipe cleaner in half to obtain two 15cm long pieces)
                </li>
                <li>
                    8 twist ties for each child
                    (sample shown: cut four 12cm long twist ties in half to obtain eight 6cm long pieces;
                    the pipe cleaners and twist ties should be the same colour)
                </li>
                <li>
                    4 different colours of craft beads in separate containers with labels
                    (decide which coloured bead represents which base and add labels to the containers beforehand)
                </li>
                <li>
                    1 strap for each child (sample shown: strap with a hook)
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/h19.png') }}" class="img-sm" />
    </div>


    {{-- sldie 3 --}}
    <div class="t-slide flex  !text-white flex-col justify-center items-center  text-start">
        <div>
            <h2 class=" t-title">How to make a model of DNA double helix and things to consider:</h2>
            <ul class="list-decimal">
                <li>Have children find out the colour representation of each bead . [Display the beads
                    with labels. Guide
                    children to understand which coloured bead represent which base.]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/h7.png') }}" class="img-md" />
    </div>


    {{-- slide 4 --}}
    <div class="t-slide flex  !text-white flex-col justify-center items-center  text-start">
        <div>
            <h2 class=" t-title">How to make a model of DNA double helix and things to consider:</h2>
            <ul>
                <li>2.Have children create base pairs by hooking AT or CG beads together in the middle
                    of the twist tie.
                    [Tell children how many base pairs is needed (this sample needs 10 pairs in total) and it is up to them
                    to have equal or unequal numbers of AT and CG base pairs. Help if needed.]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/h8.png') }}" class="img-xl" />
    </div>


    {{-- slide 5 --}}
    <div class="t-slide flex  !text-white flex-col justify-center items-center  text-start">
        <div>
            <h2 class=" t-title">How to make a model of DNA double helix and things to consider:</h2>
            <ul>
                <li>3. Have children attach the base pairs to the pipe cleaners by twisting the free
                    ends of twist ties
                    around the pipe cleaners . [Advise children to space the base pairs as evenly as possible on the pipe
                    cleaners (around 1cm gap). Tell them that it is up to them to create the order of the base pairs . Help
                    if needed.]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/h9.png') }}" class="img-xl" />
    </div>


    {{-- sldie 6 --}}
    <div class="t-slide flex  !text-white flex-col justify-center items-center  text-start">
        <div>
            <h2 class=" t-title">How to make a model of DNA double helix and things to consider:</h2>
            <ul>
                <li>4. Have children display and observe the ladder made . [Have them place all ladders
                    made together for
                    observations. Guide them to compare and find out if many of them have the same base pattern. Guide them
                    to count and record how many base patterns have been designed by the class. ]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/h10.png') }}" class="img-sm" />
    </div>


    {{-- sldie 7 --}}
    <div class="t-slide flex  !text-white flex-col justify-center items-center  text-start">
        <div>
            <h2 class=" t-title">How to make a model of DNA double helix and things to consider:</h2>
            <ul>
                <li>5. Have children twist the ladder to form the shape of DNA double helix . [Help
                    each child to adjust the
                    shape and tidy up one end of the DNA model (twist two free ends together and fold the sharp point around
                    the edge) .]</li>
            </ul>
        </div>
        <div class="flex flex-col items-center gap-[.5vw]">
            <img src="{{ asset('assets/images/K2/livingthings/dna/h11.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/K2/livingthings/dna/h25.png') }}" class="img-xl" />
        </div>
    </div>

    {{-- sldie 8 --}}
    <div class="t-slide flex  !text-white flex-col justify-center items-center  text-start">
        <div>
            <h2 class=" t-title">How to make a model of DNA double helix and things to consider:</h2>
            <ul>
                <li>6. Have children attach a strap over the DNA double helix . [Tell children that
                    they can use the DNA
                    model as a charm to hang on their belongings .]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/h12.png') }}" class="img-xl" />
    </div>


    {{-- sldie 9 --}}
    <div class=" t-slide text-start flex items-center !text-white !w-[53vw]">
        <div>
            <h2 class="t-title ">Notes:</h2>
            <ul class="list-disc space-y-3">
                <li>
                    <span class="relative">
                        If you see <span class="opacity-0">---</span>next to a picture, click on the picture to watch the
                        video.
                        <img class="t-video-btn absolute top-[-1vw] left-[7.6vw]"
                            src="{{ asset('assets/images/pptimages/video.png') }}" />
                    </span>
                </li>

                <li>
                    Always ask questions to encourage children to think and share their ideas first before giving out
                    any information.
                </li>

                <li>Emphasise and use the keywords during hands-on sessions.</li>

                <li>
                    Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                </li>

                <li>
                    <span class="relative">
                        Click on this shortcut icon <span class="opacity-0">---</span> if you need to go to some parts of
                        the lesson quickly.
                        <img src="{{ asset('assets/images/pptimages/home-btn.png') }}"
                            class="t-home-btn absolute top-0 left-[19vw]" />
                    </span>
                </li>

            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 10 --}}
    <div class="text-white flex flex-col justify-center items-center  text-start t-slide hidden">
        <h2 class="text-center title stroke">Learning Centre Idea</h2>
        <div>
            <h2 class="!text-white title stroke">DNA Charm</h2>
            <h2 class="t-title">What and how to set up:</h2>
            <ul>
                <li>Place things as listed in preparations and an instruction sheet (refer
                    to the attachment on the next page) here.</li>
            </ul>
        </div>

        <div>
            <h2 class="t-title">What to do:</h2>
            <ul class="list-decimal">
                <li>Make a DNA charm as a gift for your family member.</li>
                <li>If needed, you may refer to the instruction sheet while making the charm.</li>
            </ul>

        </div>
    </div>


    {{-- slide 11 --}}
    <div class="text-white flex flex-col justify-center items-center  text-start t-slide hidden">
        <h2 class="text-center title stroke">Learning Centre Idea</h2>
        <div>
            <h2 class="!text-white title stroke">DNA Charm</h2>
            <h2 class="t-title">How to make a DNA charm:</h2>
            <ul class="list-disc">
                <li>Create base pairs by hooking A-T or C-G beads together in the middle of the twist
                    tie.</li>
                <li>Attach the base pairs to the pipe cleaners by twisting the free ends of the twist
                    ties around the pipe
                    cleaners.</li>
                <li>Twist the ladder to form the shape of a DNA double helix.</li>
                <li>Attach a strap over the DNA double helix.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/h20.png') }}" class="img-xl" />
    </div>


    {{-- slide 12 --}}
    <div class="text-white flex flex-col justify-center items-center  text-start t-slide hidden">
        <h2 class="text-center title stroke">Learning Centre Idea</h2>
        <div class="space-y-[1vw]">
            <h2 class="!text-white title stroke">Fun Facts</h2>
            <div>
                <h2 class="t-title">What and how to set up:</h2>
                <p>Use your creativity to design graphic fact sheet for every fun fact
                    below. Guide children to understand the facts.</p>
            </div>

            <div>
                <ul class="pl-[2vw] list-disc">
                    <li>A parent and child share 99.5% of the same DNA.</li>
                    <li>Fraternal twins each have their own DNA, while identical twins
                        share their DNA.</li>
                    <li>DNA can be used to identify us. Crime investigators use DNA to
                        find criminals!</li>
                </ul>
            </div>
        </div>
    </div>

    {{-- slide 13 --}}
    <div class="text-white flex flex-col justify-center items-center  text-start t-slide hidden">
        <h2 class=" title stroke">Extension Class Activity 1</h2>
        <div class="space-y-[1vw]">
            <h2 class="!text-white title stroke">Let's Sing A Song</h2>
            <div>
                <h2 class="t-title">What to do:</h2>
                <ul class="list-decimal">
                    <li> Prepare lyrics poster for the song on the next page.</li>
                    <li>Guide children learn to sing the song to the tune of "She'll Be
                        Coming Round The Mountain".</li>
                </ul>
            </div>
        </div>
    </div>


    {{-- slide 14 --}}
    <div class="text-white flex flex-col justify-between items-center  text-start t-slide hidden">
        <h2 class=" title stroke">Extension Class Activity 1</h2>
        <h2 class="!text-white title stroke">Let's Sing A Song</h2>
        <div class="text-center">
            <p>DNA Song <br>
                DNA is deoxyribonucleic acid. <br>
                It has a special shape called a double helix. <br>
                It tells every living thing on how to form and work correctly. <br>
                It's the key for making everything in me.</p>
        </div>

        <p class="note">Note: Sing to the tune of "She'll Be Coming Round The Mountain".</p>
    </div>


    {{-- slide 15 --}}
    <div class="text-white flex flex-col justify-center items-center  text-start t-slide hidden">
        <h2 class=" title stroke">Extension Class Activity 2</h2>
        <div class="space-y-[1vw]">
            <h2 class="!text-white title stroke">Which Traits Of You Are Inherited?</h2>
            <div>
                <h2 class="t-title">What to prepare:</h2>
                <ul>
                    <li> Give each child a record sheet (see Appendix 1), explain the
                        meaning (see Appendix 2 for some photo references) and get them
                        to fill up together with their parents at home. Fix a date for
                        children to bring the record sheet, as well as photos of their
                        father, mother and themselves back to the class for show and tell.</li>
                </ul>
            </div>
        </div>
    </div>


    {{-- slide 16 --}}
    <div class="text-white flex flex-col justify-center items-center  text-start t-slide hidden">
        <h2 class=" title stroke">Extension Class Activity 2</h2>
        <div class="space-y-[1vw]">
            <h2 class="!text-white title stroke">Which Traits Of You Are Inherited?</h2>
            <div>
                <h2 class="t-title">What to do:</h2>
                <ul>
                    <li> Show and tell - Have children take turns to show their record
                        sheets and family photos. Have them share their findings: Which
                        traits did you inherit from your father? Which traits did you
                        inherit from your mother?</li>
                </ul>
            </div>
        </div>
    </div>


    {{-- slide 17 --}}
    <div class="text-white flex flex-col justify-around items-center  text-start t-slide hidden">
        <h2 class=" title stroke">Extension Class Activity 2</h2>
        <div>
            <h2 class="!text-white title stroke">Appendix 1: Which Traits Of You Are Inherited?</h2>
            <img src="{{ asset('assets/images/K2/livingthings/dna/h21.png') }}" class="img-xl" />
        </div>
    </div>


    {{-- slide 18 --}}
    <div class="text-white flex flex-col justify-around items-center  text-start t-slide hidden">
        <h2 class=" title stroke">Extension Class Activity 2</h2>
        <div>
            <h2 class="!text-white title stroke">Appendix 1: Which Traits Of You Are Inherited?</h2>
            <img src="{{ asset('assets/images/K2/livingthings/dna/h22.png') }}" class="img-xl" />
        </div>
    </div>

    {{-- slide 19 --}}
    <div class="text-white flex flex-col justify-around items-center text-start t-slide hidden">
        <h2 class=" title stroke">Extension Class Activity 2</h2>
        <div>
            <h2 class="!text-white title stroke">Appendix 2: Which Traits Of You Are Inherited?</h2>
            <img src="{{ asset('assets/images/K2/livingthings/dna/h23.png') }}" class="img-xl" />
        </div>
    </div>


    <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" />


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
            // Get all elements
            const slides = document.querySelectorAll(".t-slide");
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
                    window.location.href = "{{ route('helixSelection') }}";
                } else {
                    // Not first slide: go back
                    showSlide(currentIndex - 1);
                }
            });

            // Done button
            doneBtn.addEventListener("click", () => {
                window.location.href = "{{ route('helixSelection') }}";
            });

            // Start at first slide
            showSlide(0);
        });
    </script>
@endpush
