@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- sldie 1  --}}
    <div class=" slide t-slide flex  text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li class="text-[1.1vw]">Understand that the uniqueness of fingerprints make them ideal for
                    personal identification</li>
                <li class="text-[1.1vw]">Understand the uses of fingerprint</li>
                <li class="text-[1.1vw]">Learn how to dust and lift a fingerprint</li>
                <li class="text-[1.1vw]">Learn to analyse the evidence found and solve a case</li>
                <li class="text-[1.1vw]">Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex flex-col  items-start justify-between">
            <h2 class="t-title font-bold">Keywords:</h2>
            <div>
                <ul class="list-disc ">
                    <li class="text-[1.1vw]">Fingerprint</li>
                    <li class="text-[1.1vw]">Personal Identification</li>
                </ul>

            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide t-slide flex  text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations for Mini Mobile Phone Activity:</h2>
            <div class="flex items-center gap-10">
                <ul class="list-disc ">
                    <li class="text-[1.1vw]">A mobile phone</li>
                    <li class="text-[1.1vw]">Plain papers</li>
                    <li class="text-[1.1vw]">A suitable screen wipe</li>
                </ul>
                <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u8.png') }}" class="w-[150px] h-[150px]" />
            </div>
        </div>
        <div>
            <h2 class=" t-title">How to carry out Mini Mobile Phone Activity and things to consider:</h2>
            <ul class="list-decimal">
                <li class="text-[1.1vw]">Wipe the screen of a mobile phone and then use a finger to leave a mark on the
                    screen. Have children
                    face the phone and ask if they see anything on the screen.</li>
                <li class="text-[1.1vw]">Tilt the phone to a certain angle, guide children to discover the fingerprint mark
                    on the screen. Have
                    them guess why the fingerprint appears on the phone screen when the teacher's hand is clean.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 3 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-center  text-start">
        <div>
            <h2 class="font-bold t-title">Preparations for Individual Activity - Practice of Dusting and Lifting A
                Fingerprint:</h2>
            <ul class="list-disc">
                <li class="text-[1.1vw]">Small mirrors (replaceable with anything that has a smooth surface and tested to
                    leave fingerprint
                    marks; normally easier on items made from glass or metal like glass panel, bottle, vase, plate, or cup;
                    one for each child and teacher)</li>
                <li class="text-[1.1vw]">Masks and gloves (a set for each child and teacher)</li>
                <li class="text-[1.1vw]">A bottle of lotion</li>
                <li class="text-[1.1vw]">Fingerprint powder (any fine powder like corn flour, talcum powder, or cocoa
                    powder; ideally, use white
                    powder if the fingerprint is on a dark surface and dark powder if the fingerprint is on a light surface;
                    put them in a few small containers with lids for sharing; sample shown: talcum powder in a recycled
                    cosmetic container)</li>
                <li class="text-[1.1vw]">Soft brushes (preferably cosmetic or paint brushes with fibre bristles; one for
                    each child and teacher)
                </li>
                <li class="text-[1.1vw]">Adhesive clear tapes (for a better outcome, 3M Scotch Tape is recommended)</li>
                <li class="text-[1.1vw]">Black papers (sample shown: cut an A4 size paper with smooth texture into 4 equal
                    pieces; one for each
                    child and teacher)</li>
                <li class="text-[1.1vw]">Individual Fingerprint Record (from the previous lesson)</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to dust and lift a fingerprint and things to consider:</h2>
            <ul class="list-decimal">
                <li class="text-[1.1vw]">Press your thumb firmly on a mirror. Can you see your fingerprint? [ Demonstrate
                    how to do it. Explain to children that we'll apply lotion on hands to make sure that
                    the print is easier to see after dusting (press after 1-2 minutes so that the hand
                    is not too moist and slippery). Can also get children to make a few of the same
                    thumbprint on the mirror and develop only those that are clear. ]</li>
            </ul>
            <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u12.png') }}" class="w-[600px]" />
        </div>
    </div>


    {{-- slide 5 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to dust and lift a fingerprint and things to consider:</h2>
            <ul>
                <li class="text-[1.1vw]">2. Dab the brush carefully into powder and tap the brush on its side to remove
                    excess powder. [Demonstrate how to do it by wearing gloves and a mask.
                    Explain to children that dusting for a fingerprint using a brush with overloaded
                    powder may smear the print.]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u13.png') }}" class="w-[500px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />

        <!-- Video Trigger Button -->
        <div data-property-1="Default" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 6 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to dust and lift a fingerprint and things to consider:</h2>
            <ul>
                <li class="text-[1.1vw]">3. Gently sweep the brush over the area where you put your fingerprint. Can you see
                    a fingerprint developing? [Demonstrate how to do it. Remind children not to apply
                    too much pressure when they sweep the brush so that the print will not be wiped
                    away (only the bristle tips of the brush will touch the fingerprint surface).]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u14.png') }}" class="w-[500px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')"
            class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
      <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- sldie 7 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to dust and lift a fingerprint and things to consider:</h2>
            <ul>
                <li class="text-[1.1vw]">4.Gently blow off excess powder and check your result. Can you make out the
                    fingerprint pattern? [For safety, teacher to do the step. Be sure that you don't
                    blow towards anyone. If the print gets smeared, encourage children to clean the
                    mirror and redo the activity from step 1.] </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u15.png') }}" class="w-[500px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 8 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to dust and lift a fingerprint and things to consider:</h2>
            <ul>
                <li class="text-[1.1vw]">5. Carefully press down a piece of clear tape on top of the developed fingerprint.
                    [Demonstrate how to do it. Remind children to hold only the edges of the tape.]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u16.png') }}" class="w-[500px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')"
            class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
      <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>




    {{-- slide 9 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to dust and lift a fingerprint and things to consider:</h2>
            <ul>
                <li class="text-[1.1vw]">6. Lift the tape and paste it on a paper. Did you successfully transfer your
                    fingerprint? [Demonstrate how to do it. If the print gets smeared, encourage
                    children to clean the mirror and redo the activity from step 1.]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u17.png') }}" class="w-[500px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 10 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to dust and lift a fingerprint and things to consider:</h2>
            <ul>
                <li class="text-[1.1vw]">7. Compare the fingerprint collected to yours in the fingerprint record. [Have
                    children check if they manage to lift up clear fingerprint. If not, encourage them
                    to repeat the activity to practise dusting and lifting skills.]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u18.png') }}" class="w-[500px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- slide 10 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <ul class="list-disc !text-start">
                <h2 class="font-bold t-title">How to dust and lift a fingerprint and things to consider:</h2>
                <li class="text-[1.1vw]">At the end, have children discuss and share their activity experience.</li>
                <li class="text-[1.1vw]">Explain to children that:</li>
                <li class="list-none text-[1.1vw]">- Lotion contains lots of oil and fat. When you apply it, your fingertips become
                    much stickier and this lead to a much more pronounced print.</li>
                <li class="list-none text-[1.1vw]"> - Fingerprints tend to stick very well on a smooth surface such as glass or metal.
                    Just a little talcum or cocoa powder applied with a brush should be enough to
                    reveal your fingerprint.</li>
                <li class="list-none text-[1.1vw]">- If you apply too much powder, the fine details of your print might be lost.
                    When you press too hard onto the surface with the brush, the fingerprint will be
                    wiped away. Therefore, you have to be careful when treating the surface with
                    the powder.</li>

            </ul>
        </div>
    </div>


    {{-- slide 11 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <ul class="list-disc !text-start">
                <h2 class="font-bold t-title">Preparations for Class Activity - Solve A Case:</h2>
                <li class="text-[1.1vw]">A folder</li> <br>
                <h2 class="font-bold t-title">How to carry out Solve A Case activity and things to consider:</h2>
                <li class="text-[1.1vw]">Note: Print out all the details of the case beforehand and put them in a folder
                    (total of 10 pages from next page onwards).</li>
                <li class="text-[1.1vw]">Brief children on the mission of the activity - study a case, analyse the
                    evidence,
                    record their findings in the learning journal and solve the case.</li>
                <li class="text-[1.1vw]">At the end, guide children to answer the questions in the lesson: 1) Who messed
                    up the room ?; 2) Who spilled the paints on the floor ?; 3) Who left the playdough
                    on the shelf ?; 4) Who left the half-eaten muffin and the broken plate on the
                    floor ?.</li>
                <li class="text-[1.1vw]">If you want, you may refer to the details of the case and create a more
                    challenging case for children to solve. For examples, you may add in a part where</li>
                <li class="text-[1.1vw]">children have to dust and lift fingerprints (if they are ready) or include all 10
                    fingerprints for every suspect of the case</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 11 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <ul class=" !text-start">
                <h2 class="font-bold t-title">Solve A Case:</h2>
                <li class="text-[1.1vw]">What happened?</li> <br>
                <li class="text-[1.1vw]">Teacher Sue walked into the art and craft room this morning, and was shocked to
                    see that the room was in
                    <br>
                    a mess.
                </li> <br>
                <li class="text-[1.1vw]">She noticed that some paints were spilled on the floor, some playdough was <br>
                    left on the shelf and a
                    half-eaten muffin together with a broken plate were <br> left on the floor next to the activity table
                </li> <br>
                <li class="text-[1.1vw]">Who did it? Teacher Sue quickly gather the evidence around
                    the room.</li>

            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 12 --}}
    <div class=" slide flex text-2xl  flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" !text-start title stroke"> <span class="!text-white font bold">Evidence 1:</span> Based on the
                statements of other teachers, 6 <br>
                children below entered the art and craft room while waiting
                for their parents to pick them up yesterday evening.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u20.png') }}" />
    </div>

    {{-- slide 12 --}}
    <div class=" slide flex text-2xl  flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" !text-start title stroke"> <span class="!text-white font bold">Evidence 2:</span> 3 shoe prints as
                shown were found on the floor
                near the door.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u21.png') }}" />
    </div>
    {{-- slide 12 --}}
    <div class=" slide flex text-2xl  flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" !text-start title stroke"> <span class="!text-white font bold">Evidence 3:</span> 3 right
                thumbprints as shown were found at
                different parts of the room</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u22.png') }}" />
    </div>
    {{-- slide 12 --}}
    <div class=" slide flex text-2xl  flex-col justify-start items-center  text-start">
        <div>
            <h2 class=" !text-start title stroke">Profile of the suspect 1:</h2> <br>
            <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u23.png') }}" />
        </div>
    </div>
    {{-- slide 12 --}}
    <div class=" slide flex text-2xl  flex-col justify-start items-center  text-start">
        <div>
            <h2 class=" !text-start title stroke">Profile of the suspect 2:</h2><br>
            <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u24.png') }}" />
        </div>
    </div>
    {{-- slide 12 --}}
    <div class=" slide flex text-2xl  flex-col justify-start items-center  text-start">
        <div>
            <h2 class=" !text-start title stroke">Profile of the suspect 3:</h2><br>
            <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u25.png') }}" />
        </div>
    </div>
    {{-- slide 12 --}}
    <div class=" slide flex text-2xl  flex-col justify-start items-center  text-start">
        <div>
            <h2 class=" !text-start title stroke">Profile of the suspect 4:</h2><br>
            <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u26.png') }}" />
        </div>
    </div>
    {{-- slide 12 --}}
    <div class=" slide flex text-2xl  flex-col justify-start items-center  text-start">
        <div>
            <h2 class=" !text-start title stroke">Profile of the suspect 5:</h2><br>
            <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u27.png') }}" />
        </div>
    </div>
    {{-- slide 12 --}}
    <div class=" slide flex text-2xl  flex-col justify-start items-center  text-start">
        <div>
            <h2 class=" !text-start title stroke">Profile of the suspect 6:</h2><br>
            <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u28.png') }}" />
        </div>
    </div>




    {{-- sldie 12 --}}
    <div class="slide flex t-slide  flex-col justify-start  text-2xl text-start text-white">
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class=" t-title">Notes:</h2>
                <ul class="list-disc leading-relaxed">
                    <li class="text-[1.1vw] flex">
                        If you see
                        <span>
                            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                        </span>
                        next to a picture,click on the picture to watch the video.
                    </li>
                    <li class="text-[1.1vw]">Emphasise and use the keywords during hands-on sessions.</li>
                    <li class="text-[1.1vw]">Print out the Learning Journal (if any) for every child to complete at the end
                        of the lesson.
                    </li>
                    <li class="text-[1.1vw] flex">
                        Click on this shortcut icon
                       <span>
                            <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" class="home-btn" />
                        </span>
                        if you need to go to some parts of the lesson quickly.
                    </li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1"
                alt="Teacher" />
        </div>
    </div>


    {{-- slide 13 --}}
    <div class="text-white flex flex-col items-center justify-center  text-start t-slide slide hidden">
        <h2 class=" title stroke">Learning Centre Idea</h2>
        <div class="flex flex-col gap-10">
            <ul>
                <h2 class="!text-white title stroke">Fingerprints Art</h2>
                <h2 class="t-title">What and how to set up:</h2>
                <li class="text-[1.1vw]">Place masks, gloves, brushes, fingerprint powder and a few things
                    with different surface texture and material like glass, metal, paper,
                    textile and wood here.</li>
            </ul>

            <div>
                <h2 class="t-title">What to do:</h2>
                <ul class="list-decimal">
                    <li class="text-[1.1vw]">Press your thumb firmly on the surface of different things.</li>
                    <li class="text-[1.1vw]">With mask and gloves on, dust for your prints to find out what</li>
                    <li class="text-[1.1vw]">Share the findings with your teacher and friends!</li>
                </ul>

            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" />
    </div>


    {{-- slide 14 --}}
    <div class="text-white flex flex-col items-center justify-center  text-start t-slide slide hidden">
        <h2 class=" title stroke">Learning Centre Idea</h2>
        <div>
            <ul class="list-disc">
                <h2 class="!text-white title stroke">Fun Facts</h2>
                <h2 class="t-title">What and how to set up:</h2>
                <p class="text-[1.4vw]">Use your creativity to design graphic fact sheet for every fun fact
                    below. Guide children to understand the facts.</p>
                <li class="text-[1.1vw]">Identical twins are indistinguishable via DNA testing, but
                    fingerprints can still tell them apart.</li>
                <li class="text-[1.1vw]">Just like fingerprints, our tongue prints and retinal print are also
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
                    window.location.href = "{{ route('k2livingthings') }}";
                } else {
                    //   Previous slide pe jao
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
