@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- title --}}
    <h2 class="top-title stroke">The Use of Fingerprints</h2>


    {{-- sldie 1  --}}
    <div class="t-slide flex  !text-white flex-col justify-around  text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Understand that the uniqueness of fingerprints make them ideal for
                    personal identification</li>
                <li>Understand the uses of fingerprint</li>
                <li>Learn how to dust and lift a fingerprint</li>
                <li>Learn to analyse the evidence found and solve a case</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex flex-col  items-start justify-between">
            <h2 class="t-title ">Keywords:</h2>
            <div>
                <ul class="list-disc ">
                    <li>Fingerprint</li>
                    <li>Personal Identification</li>
                </ul>

            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class="t-slide flex  !text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations for Mini Mobile Phone Activity:</h2>
            <div class="flex items-center gap-10">
                <ul class="list-disc ">
                    <li>A mobile phone</li>
                    <li>Plain papers</li>
                    <li>A suitable screen wipe</li>
                </ul>
                <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u8.png') }}" class="!h-[10vw]" />
            </div>
        </div>
        <div>
            <h2 class=" t-title">How to carry out Mini Mobile Phone Activity and things to consider:</h2>
            <ul class="list-decimal">
                <li>Wipe the screen of a mobile phone and then use a finger to leave a mark on the
                    screen. Have children
                    face the phone and ask if they see anything on the screen.</li>
                <li>Tilt the phone to a certain angle, guide children to discover the fingerprint mark
                    on the screen. Have
                    them guess why the fingerprint appears on the phone screen when the teacher's hand is clean.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 3 --}}
    <div class="t-slide flex  !text-white flex-col items-center justify-center  text-start">
        <div>
            <h2 class="t-title">Preparations for Individual Activity - Practice of Dusting and Lifting A
                Fingerprint:</h2>
            <ul class="list-disc">
                <li>Small mirrors (replaceable with anything that has a smooth surface and tested to
                    leave fingerprint
                    marks; normally easier on items made from glass or metal like glass panel, bottle, vase, plate, or cup;
                    one for each child and teacher)</li>
                <li>Masks and gloves (a set for each child and teacher)</li>
                <li>A bottle of lotion</li>
                <li>Fingerprint powder (any fine powder like corn flour, talcum powder, or cocoa
                    powder; ideally, use white
                    powder if the fingerprint is on a dark surface and dark powder if the fingerprint is on a light surface;
                    put them in a few small containers with lids for sharing; sample shown: talcum powder in a recycled
                    cosmetic container)</li>
                <li>Soft brushes (preferably cosmetic or paint brushes with fibre bristles; one for
                    each child and teacher)
                </li>
                <li>Adhesive clear tapes (for a better outcome, 3M Scotch Tape is recommended)</li>
                <li>Black papers (sample shown: cut an A4 size paper with smooth texture into 4 equal
                    pieces; one for each
                    child and teacher)</li>
                <li>Individual Fingerprint Record (from the previous lesson)</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class="t-slide flex  !text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to dust and lift a fingerprint and things to consider:</h2>
            <ul class="list-decimal">
                <li>Press your thumb firmly on a mirror. Can you see your fingerprint?[ Demonstrate
                    how to do it. Explain to children that we'll apply lotion on hands to make sure that
                    the print is easier to see after dusting (press after 1-2 minutes so that the hand
                    is not too moist and slippery). Can also get children to make a few of the same
                    thumbprint on the mirror and develop only those that are clear.]</li>
            </ul>
            <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u12.png') }}" class="img-lg" />
        </div>
    </div>


    {{-- slide 5 --}}
    <div class="t-slide flex  !text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to dust and lift a fingerprint and things to consider:</h2>
            <ul>
                <li>2. Dab the brush carefully into powder and tap the brush on its side to remove
                    excess powder. [Demonstrate how to do it by wearing gloves and a mask.
                    Explain to children that dusting for a fingerprint using a brush with overloaded
                    powder may smear the print.]</li>
            </ul>
        </div>
        <video id="video1" class="video-md pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/189.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />

        <!-- Video Trigger Button -->
        <div data-property-1="Default" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 6 --}}
    <div class="t-slide flex  !text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to dust and lift a fingerprint and things to consider:</h2>
            <ul>
                <li>3. Gently sweep the brush over the area where you put your fingerprint. Can you see
                    a fingerprint developing? [Demonstrate how to do it. Remind children not to apply
                    too much pressure when they sweep the brush so that the print will not be wiped
                    away (only the bristle tips of the brush will touch the fingerprint surface).]</li>
            </ul>
        </div>
        <video id="video2" class="video-md pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/190.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- sldie 7 --}}
    <div class="t-slide flex  !text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to dust and lift a fingerprint and things to consider:</h2>
            <ul>
                <li>4.Gently blow off excess powder and check your result. Can you make out the
                    fingerprint pattern? [For safety, teacher to do the step. Be sure that you don't
                    blow towards anyone. If the print gets smeared, encourage children to clean the
                    mirror and redo the activity from step 1.] </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u15.png') }}" class="!w-[35vw]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 8 --}}
    <div class="t-slide flex  !text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to dust and lift a fingerprint and things to consider:</h2>
            <ul>
                <li>5. Carefully press down a piece of clear tape on top of the developed fingerprint.
                    [Demonstrate how to do it. Remind children to hold only the edges of the tape.]</li>
            </ul>
        </div>
        <video id="video3" class="video-md pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/191.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>




    {{-- slide 9 --}}
    <div class="t-slide flex  !text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to dust and lift a fingerprint and things to consider:</h2>
            <ul>
                <li>6. Lift the tape and paste it on a paper. Did you successfully transfer your
                    fingerprint? [Demonstrate how to do it. If the print gets smeared, encourage
                    children to clean the mirror and redo the activity from step 1.]</li>
            </ul>
        </div>
        <video id="video4" class="video-md pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/192.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 10 --}}
    <div class="t-slide flex  !text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to dust and lift a fingerprint and things to consider:</h2>
            <ul>
                <li>7. Compare the fingerprint collected to yours in the fingerprint record. [Have
                    children check if they manage to lift up clear fingerprint. If not, encourage them
                    to repeat the activity to practise dusting and lifting skills.]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u18.png') }}" class="img-md" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- slide 10 --}}
    <div class="t-slide flex  !text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to dust and lift a fingerprint and things to consider:</h2>
            <h2 class="t-title">At the end, have children discuss and share their activity experience.</h2>
            <ul class="list-disc !text-start">
                <li>Explain to children that:</li>
                <li class="list-none text-[1.1vw]">- Lotion contains lots of oil and fat. When you apply it, your
                    fingertips become
                    much stickier and this lead to a much more pronounced print.</li>
                <li class="list-none text-[1.1vw]"> - Fingerprints tend to stick very well on a smooth surface such as
                    glass or metal.
                    Just a little talcum or cocoa powder applied with a brush should be enough to
                    reveal your fingerprint.</li>
                <li class="list-none text-[1.1vw]">- If you apply too much powder, the fine details of your print might be
                    lost.
                    When you press too hard onto the surface with the brush, the fingerprint will be
                    wiped away. Therefore, you have to be careful when treating the surface with
                    the powder.</li>

            </ul>
        </div>
    </div>


    {{-- slide 11 --}}
    <div class="t-slide flex  !text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations for Class Activity - Solve A Case:</h2>
            <h2 class="t-title">A folder</h2>
            <ul class="list-disc !text-start">
                <h2 class=" t-title">How to carry out Solve A Case activity and things to consider:</h2>
                <li>Note: Print out all the details of the case beforehand and put them in a folder
                    (total of 10 pages from next page onwards).</li>
                <li>Brief children on the mission of the activity - study a case, analyse the
                    evidence,
                    record their findings in the learning journal and solve the case.</li>
                <li>At the end, guide children to answer the questions in the lesson: 1) Who messed
                    up the room ?; 2) Who spilled the paints on the floor ?; 3) Who left the playdough
                    on the shelf ?; 4) Who left the half-eaten muffin and the broken plate on the
                    floor ?.</li>
                <li>If you want, you may refer to the details of the case and create a more
                    challenging case for children to solve. For examples, you may add in a part where</li>
                <li>children have to dust and lift fingerprints (if they are ready) or include all 10
                    fingerprints for every suspect of the case</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 11 --}}
    <div class="t-slide flex  !text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">Solve A Case:</h2>
            <h2 class="t-title">What happened?</h2>
            <ul class=" !text-start">
                <li>Teacher Sue walked into the art and craft room this morning, and was shocked to
                    see that the room was in

                    a mess.
                </li>
                <li>She noticed that some paints were spilled on the floor, some playdough was
                    left on the shelf and a
                    half-eaten muffin together with a broken plate were left on the floor next to the activity table
                </li>
                <li>Who did it? Teacher Sue quickly gather the evidence around
                    the room.</li>

            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 12 --}}
    <div class="flex t-slide  flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" !text-start title stroke"> <span class="!text-white font bold">Evidence 1:</span> Based on the
                statements of other teachers, 6
                children below entered the art and craft room while waiting
                for their parents to pick them up yesterday evening.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u20.png') }}" class="img-xl" />
    </div>

    {{-- slide 12 --}}
    <div class="flex t-slide  flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" !text-start title stroke"> <span class="!text-white font bold">Evidence 2:</span> 3 shoe prints as
                shown were found on the floor
                near the door.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u21.png') }}" class="img-lg" />
    </div>

    {{-- slide 12 --}}
    <div class="flex t-slide  flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" !text-start title stroke"> <span class="!text-white font bold">Evidence 3:</span> 3 right
                thumbprints as shown were found at
                different parts of the room</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u22.png') }}" class="img-lg" />
    </div>

    {{-- slide 12 --}}
    <div class="flex t-slide  flex-col justify-start items-center  text-start">
        <div>
            <h2 class=" !text-start title stroke">Profile of the suspect 1:</h2>
            <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u23.png') }}" class="img-xl" />
        </div>
    </div>

    {{-- slide 12 --}}
    <div class="flex t-slide  flex-col justify-start items-center  text-start">
        <div>
            <h2 class=" !text-start title stroke">Profile of the suspect 2:</h2><br>
            <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u24.png') }}" class="img-xl" />
        </div>
    </div>
    {{-- slide 12 --}}
    <div class="flex t-slide  flex-col justify-start items-center  text-start">
        <div>
            <h2 class=" !text-start title stroke">Profile of the suspect 3:</h2><br>
            <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u25.png') }}" class="img-xl" />
        </div>
    </div>
    {{-- slide 12 --}}
    <div class="flex t-slide  flex-col justify-start items-center  text-start">
        <div>
            <h2 class=" !text-start title stroke">Profile of the suspect 4:</h2><br>
            <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u26.png') }}" class="img-xl" />
        </div>
    </div>
    {{-- slide 12 --}}
    <div class="flex t-slide  flex-col justify-start items-center  text-start">
        <div>
            <h2 class=" !text-start title stroke">Profile of the suspect 5:</h2><br>
            <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u27.png') }}" class="img-xl" />
        </div>
    </div>
    {{-- slide 12 --}}
    <div class="flex t-slide  flex-col justify-start items-center  text-start">
        <div>
            <h2 class=" !text-start title stroke">Profile of the suspect 6:</h2><br>
            <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u28.png') }}" class="img-xl" />
        </div>
    </div>




    {{-- sldie 12 --}}
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


    {{-- slide 13 --}}
    <div class="text-white flex flex-col items-center justify-center  text-start t-slide hidden">
        <h2 class="text-center title stroke">Learning Centre Idea</h2>
        <div class="space-y-[1vw]">
            <h2 class="!text-white title stroke">Fingerprints Art</h2>
            <div>

                <h2 class="t-title">What and how to set up:</h2>
                <ul>
                    <li>Place masks, gloves, brushes, fingerprint powder and a few things
                        with different surface texture and material like glass, metal, paper,
                        textile and wood here.</li>
                </ul>
            </div>
        </div>
        <div>
            <h2 class="t-title">What to do:</h2>
            <ul class="list-decimal">
                <li>Press your thumb firmly on the surface of different things.</li>
                <li>With mask and gloves on, dust for your prints to find out what</li>
                <li>Share the findings with your teacher and friends!</li>
            </ul>

        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" />
    </div>


    {{-- slide 14 --}}
    <div class="text-white flex flex-col items-center justify-center  text-start t-slide hidden">
        <h2 class="text-center title stroke">Learning Centre Idea</h2>
        <div>
            <h2 class="!text-white title stroke">Fun Facts</h2>
            <h2 class="t-title">What and how to set up:</h2>
            <ul class="list-disc space-y-[1vw]">
                <p class="text-[1.4vw]">Use your creativity to design graphic fact sheet for every fun fact
                    below. Guide children to understand the facts.</p>
                <li>Identical twins are indistinguishable via DNA testing, but
                    fingerprints can still tell them apart.</li>
                <li>Just like fingerprints, our tongue prints and retinal print are also
                    unique and cannot be forged by anyone.</li>
            </ul>
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
        // Video toggle function - plays or pauses a video when clicked
        function toggleVideo(videoId) {
            const video = document.getElementById(videoId);
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        }

        document.addEventListener("DOMContentLoaded", () => {
            // Get all slide elements
            const slides = document.querySelectorAll(".t-slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");

            // Keep track of which slide we're currently viewing
            let currentSlide = 0;

            // CONFIGURE YOUR ROUTES HERE
            const returnRouteFromFirstSlide = "{{ route('usageSelection') }}";
            const doneButtonRoute = "{{ route('usageSelection') }}";

            // Pause all videos when changing slides
            function pauseAllVideos() {
                const videos = document.querySelectorAll('video');
                videos.forEach(video => {
                    if (!video.paused) {
                        video.pause();
                    }
                });
            }

            // Show a specific slide and hide all others
            function showSlide(index) {
                // Pause all videos before switching
                pauseAllVideos();

                // Hide all slides except the current one
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                // Check if last slide
                const isLastSlide = index === slides.length - 1;

                if (isLastSlide) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            // NEXT button
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                });
            });

            // RETURN button - go to previous slide or navigate back
            returnButton.addEventListener("click", () => {
                // If on first slide, navigate to return route
                if (currentSlide === 0) {
                    window.location.href = returnRouteFromFirstSlide;
                    return;
                }

                if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            // DONE button - navigate to completion route
            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = doneButtonRoute;
                });
            }

            // Initialize - show first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
