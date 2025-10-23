@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f11.png') }}" />
        <div class="title stroke">
            <h2>Children, why are our fingerprints unique?</h2>
        </div>
        <p class="note">Note: Encourage children to recall and share what they have learnt previously.</p>
    </div>



    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f11.png') }}" />
        <h2 class="title stroke">Although we can have similar <span class="text-white">fingerprint</span> patterns,
            no two <span class="text-white">fingerprints</span> are exactly alike.</h2>
    </div>


    {{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f11.png') }}" />
        <h2 class="title stroke text-center">Besides that, individual fingerprints never change with the age.
            There's no way for anyone to change his or her fingerprints.</h2>
    </div>

    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f11.png') }}" />
        <h2 class="title stroke text-center">That's why individual fingerprints are unique
            and no two people have the same fingerprints.</h2>
    </div>


    {{-- Slide 5 --}}
    <div class="slide hidden  flex flex-col items-center justify-center gap-20  ">
        <h2 class="title stroke">Since our fingerprints are unique,
            what do you think we can use them for?
            <br> <br>
            Have you ever seen fingerprints used anywhere?
            Let's share with the class!
        </h2>

        <p class="note">Note: Encourage children to boldly share their prior knowledge, experience and views.</p>
    </div>


    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u1.png') }}" />
        <h2 class="title stroke">Because of uniqueness, fingerprints are used as personal
            identification for over a hundred years.</h2>
    </div>


    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u1.png') }}" />
        <h2 class="title stroke">Personal identification is a process of recognizing someone by
            his or her information like name, look, DNA and fingerprints.</h2>
        <p class="note">Note: Encourage children to name some information that they use to recognise a friend.</p>
    </div>



    {{-- slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u2.png') }}" />
        <h2 class="title stroke">That's why identity cards have the image of fingerprints.</h2>
        <p class="note">Note: Explain to children that everyone who is a lawfully resident in Singapore must register for
            an identity card at the age of 15; the card is meant to prove a person's identity and nationality.</p>
    </div>


    {{-- slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u1.png') }}" />
        <h2 class="title stroke">Generally, fingerprints for personal identification are used for
            either verification or identification.</h2>
    </div>

    {{-- slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u1.png') }}" />
        <h2 class="title stroke">Verification means finding out the answer to:
            “”Is this person who he say he is?””</h2>
    </div>

    {{-- slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u3.png') }}" />
        <h2 class="title stroke">When we want to enter or leave a country, fingerprints are
            used to verify that we are the correct passport holders.</h2>
    </div>

    {{-- slide 12 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u4.png') }}" />
        <h2 class="title stroke">When we want to enter a secured place, fingerprints are
            used to verify that we have the access right.</h2>
    </div>

    {{-- slide 13 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u5.png') }}" />
        <h2 class="title stroke">When we set fingerprints as keys for the phones, the
            phones will only unlock after verifying our fingerprints.</h2>
    </div>


    {{-- slide 14 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u1.png') }}" />
        <h2 class="title stroke">Identification means finding out the answer to:
            “Who is this person?”</h2>
    </div>


    {{-- slide 15 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u6.png') }}" />
        <h2 class="title stroke">Identification means finding out the answer to:
            “Who is this person?”</h2>
    </div>


    {{-- slide 16 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u7.png') }}" />
        <h2 class="title stroke">Police officers check fingerprints found at a crime scene to
            identify suspects, victims and real culprits of the case.</h2>
    </div>


    {{-- slide 17 --}}
    <div class="slide hidden flex flex-col items-center h-[50%] justify-between">
        <h2 class="title stroke">Do you know why fingerprints can be found on things?
            How do detectives discover fingerprints from a crime scene?</h2>
        <p class="note">Note: Encourage children to boldly share their prior knowledge, experience and views.</p>
    </div>

    {{-- slide 18 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u7.png') }}" />
        <h2 class="title stroke">Fingerprints can be found on many types of surfaces. They
            can be visible or invisible depending on where they are found.</h2>
    </div>


    {{-- slide 19 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">Children, do you see anything on the screen of the phone?</h2>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u8.png') }}" />
        <div class="text-start note">
            <p>Note: Follow the steps to do this mini activity in class -</p>
            <ul>
                <li>1) Wipe the screen of a mobile phone and then use a finger to leave a mark on the screen. Have children
                    face
                    the phone and ask if they see anything on the screen.</li>
                <li>2) Tilt the phone to a certain angle, guide children to discover the fingerprint mark on the screen.
                    Have them guess why the fingerprint appears on the phone screen when the teacher's hand is clean.</li>
            </ul>
        </div>
    </div>


    {{-- slide 20 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u9.png') }}" />
        <h2 class="title stroke">Our skin produces natural oils. When we touch something, <br>
            the oils transfer from our fingers to the surface <br>
            of the thing and leave behind the fingerprints.</h2>
    </div>

    {{-- slide 21 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u10.png') }}" />
        <h2 class="title stroke">A common method that detectives use to discover invisible
            fingerprints is by dusting the surface with fingerprint powder.</h2>
    </div>


    {{-- slide 22 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u11.png') }}" />
        <h2 class="title stroke">If any fingerprints appear, detectives will take photo and
            then lift them from the surface with adhesive tape.</h2>
    </div>


    {{-- slide 22 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u1.png') }}" />
        <h2 class="title stroke">After that, the fingerprints collected will be sent to the
            crime lab for identification.</h2>
    </div>



    {{-- slide 23 --}}
    <div class="slide hidden  flex flex-col items-center justify-between h-[90%]  ">
        <h2 class="!text-white title stroke">Individual Activity</h2>
        <h2 class="title stroke">Now, let's learn how to dust for fingerprints and lift them
            from a smooth surface!</h2>
        <p class="text-center note">Note: Give each child a mirror (or other option), a pair of gloves and a mask.</p>
    </div>


    {{-- slide 24 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">What to do?<br>
                1. Press your thumb firmly on a mirror. Can you see your
                fingerprint?</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u12.png') }}" />
        <p class="note text-center">Note: Demonstrate how to do it. Explain to children that we'll apply lotion on hands to
            make sure that
            the print is easier to see after dusting (press after 1-2 minutes so that the hand is not too
            moist and slippery).</p>
    </div>


    {{-- Slide 25 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">What to do? <br>
                2. Dab the brush carefully into powder and tap the brush on
                its side to remove excess powder.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u13.png') }}" />
        <p class="note text-center">Note: Demonstrate how to do it by wearing gloves and a mask. Explain to children that
            dusting for a fingerprint using a brush with overloaded powder may smear the print.</p>
        <!-- Video Trig ger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
      <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- Slide 26 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">What to do?<br>
                3. Gently sweep the brush over the area where you put your
                fingerprint. Can you see a fingerprint developing?</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u14.png') }}" />
        <p class="note text-center">Note: Demonstrate how to do it. Remind children not to apply too much pressure when
            they sweep the brush so that
            the print will not be wiped away (only the bristle tips of the brush will touch the fingerprint surface).</p>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
      <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- Slide 27 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">What to do? <br>
                4. Gently blow off excess powder and check your result. Can
                you make out the fingerprint pattern?</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u15.png') }}" />
        <p class="note text-center">Note: For safety, teacher to do the step. Be sure that you don't blow towards anyone.
            If the print gets smeared, encourage children to clean the mirror and redo the activity from step 1.</p>
    </div>


    {{-- Slide 28 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">What to do?<br>
                5. Carefully press down a piece of clear tape on top of the
                developed fingerprint.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u16.png') }}" />
        <p class="note text-center">Note: Demonstrate how to do it. Remind children to hold only the edges of the tape.</p>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
      <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- Slide 29 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">What to do?<br>
                6. Lift the tape and paste it on a paper. Did you successfully
                transfer your fingerprint?</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u17.png') }}" />
        <p class="note text-center">Note: Demonstrate how to do it. <br>
            If the print gets smeared, encourage children to clean the mirror and redo the activity from step 1.</p>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
      <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- Slide 30 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">What to do?<br>
                7.Compare the fingerprint collected to yours in the fingerprint record.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u18.png') }}" />
        <p class="note text-center">Note: Have children check if they manage to lift up clear fingerprint.
            If not, encourage them to repeat the activity to practise dusting and lifting skills.</p>
    </div>


    {{-- Slide 31 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u18.png') }}" />
        <div class="text-start">
            <h2 class="title stroke">What do you observe: <br>
                How does the lifted fingerprint look compared with the one in
                the record? Can you see the details?</h2>
        </div>
    </div>


    {{-- Slide 32 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <div class="text-start">
            <h2 class="title stroke">What do you learn: <br>
                How does fingerprint powder work?</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u19.png') }}" />
    </div>

    {{-- Slide 33 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <div class="text-start">
            <h2 class="title stroke">What do you learn: <br>
                Is it easy or difficult to dust and lift a clear fingerprint?</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u19.png') }}" />
    </div>


    {{-- Slide 34 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u14.png') }}" />
        <h2 class="title stroke">Through the activity, we know that fingerprint powder sticks
            to the oils of fingerprints making the prints visible.</h2>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
      <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- Slide 35 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/U19.png') }}" />
        <h2 class="title stroke text-center">We also know that practice is needed to obtain the skills
            to dust and lift fingerprints successfully.</h2>
    </div>


    {{-- SLIDE 36 --}}
    <div class="slide hidden  flex flex-col items-center justify-between h-[90%]  ">
        <h2 class="!text-white title stroke">Class Activity</h2>
        <h2 class="title stroke">Now, let's act like detectives to solve a case!</h2>
        <p class="text-center note">Note: Brief children that they are going to study a case, analyse the evidence and
            solve the case. Print out the case and put them in a folder for case study.</p>
    </div>

    {{-- SLIDE 37 --}}
    <div class="slide hidden  flex flex-col items-start">
        <h2 class="!text-white title stroke">What happened?</h2>
        <div class="space-y-10 text-start title stroke">
            <h2>Teacher Sue walked into the art and craft room this morning,
                and was shocked to see that the room was in a mess.</h2>
            <h2>She noticed that some paints were spilled on the floor, some
                playdough was left on the shelf and a half-eaten muffin
                together with a broken plate were left on the floor next to
                the activity table.</h2>
            <h2>Who did it? Teacher Sue quickly gather the evidence around
                the room.</h2>
        </div>
    </div>


    {{-- slide 38 --}}
    <div class="slide hidden  flex flex-col items-start">
        <h2 class=" title stroke"><span class="text-white">Evidence 1</span>: Based on the statements of other teachers, 6
            children below entered the art and craft room while waiting
            for their parents to pick them up yesterday evening.</h2>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u20.png') }}" />
    </div>


    {{-- slide 39 --}}
    <div class="slide hidden  flex flex-col items-start">
        <h2 class=" title stroke"><span class="text-white">Evidence 2</span> 3 shoe prints as shown were found on the
            floor near the door.</h2>
        <div class="w-[836px] h-fit bg-cover bg-center p-[20px] flex flex-col justify-center items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u21.png') }}" />
        </div>
    </div>


    {{-- slide 40 --}}
    <div class="slide hidden  flex flex-col items-start">
        <h2 class=" title stroke"><span class="text-white">Evidence 3</span> 3 right thumbprints as shown were found at
            different parts of the room.</h2>
        <div class="w-[836px] h-fit bg-cover bg-center p-[20px] flex flex-col justify-center items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u22.png') }}" />
        </div>
    </div>


    {{-- slide 41 --}}
    <div class="slide hidden  flex flex-col items-start">
        <h2 class=" title stroke">Profile of the suspect 1:</h2>
        <div class="w-[836px] h-fit bg-cover bg-center p-[20px] flex flex-col justify-center items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u23.png') }}" />
        </div>
    </div>


    {{-- slide 42 --}}
    <div class="slide hidden  flex flex-col items-start">
        <h2 class=" title stroke">Profile of the suspect 2:</h2>
        <div class="w-[836px] h-fit bg-cover bg-center p-[20px] flex flex-col justify-center items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u24.png') }}" />
        </div>
    </div>


    {{-- slide 43 --}}
    <div class="slide hidden  flex flex-col items-start">
        <h2 class=" title stroke">Profile of the suspect 3:</h2>
        <div class="w-[836px] h-fit bg-cover bg-center p-[20px] flex flex-col justify-center items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u25.png') }}" />
        </div>
    </div>

    {{-- slide 44 --}}
    <div class="slide hidden  flex flex-col items-start">
        <h2 class=" title stroke">Profile of the suspect 4:</h2>
        <div class="w-[836px] h-fit bg-cover bg-center p-[20px] flex flex-col justify-center items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u26.png') }}" />
        </div>
    </div>


    {{-- slide 45 --}}
    <div class="slide hidden  flex flex-col items-start">
        <h2 class=" title stroke">Profile of the suspect 5:</h2>
        <div class="w-[836px] h-fit bg-cover bg-center p-[20px] flex flex-col justify-center items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u27.png') }}" />
        </div>
    </div>


    {{-- slide 46 --}}
    <div class="slide hidden  flex flex-col items-start">
        <h2 class=" title stroke">Profile of the suspect 6:</h2>
        <div class="w-[836px] h-fit bg-cover bg-center p-[20px] flex flex-col justify-center items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u28.png') }}" />
        </div>
    </div>


    {{-- slide 47 --}}
    <div class="slide hidden  flex flex-col items-center space-y-10">
        <div class="text-start self-start title stroke">
            <h2>Let's analyse and find out:</h2>
            <ul class="list-decimal">
                <li>Who messed up the room?</li>
                <li>Who spilled the paints on the floor?</li>
                <li>Who left the playdough on the shelf?</li>
                <li>Who left the half-eaten muffin and the broken
                    plate on the floor?</li>
            </ul>
        </div>
        <p class="note">Note: Guide children to study and analyse the case; record their findings in the learning
            journal by putting a tick or cross in the table; solve the case and answer the questions on top.</p>
    </div>


    {{-- slide 48 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-fit bg-cover bg-center p-[20px] flex flex-col justify-center items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('assets/images/K2/livingthings/fingerprints/u29.png') }}" />
        </div>
    </div>

    {{-- slide 49 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[530px] bg-cover bg-center p-[20px] flex flex-col items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p class="text-start text-[20px]">A fingerprint is commonly used to unlock mobile phone nowadays. Can you think
                of a new use of your fingerprint? Draw it.</p>
        </div>
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
            const doneButton = document.querySelector(".doneButton");

            // Get all info/click buttons (info-btn1, info-btn2, click-btn1, click-btn2, etc.)
            const infoButtons = document.querySelectorAll("[class*='info-btn'], [class*='click-btn']");

            let currentSlide = 0;
            let parentSlideIndex = null;
            let isViewingInfoSlides = false;
            let currentInfoClass = null; // Track which info/click class we're viewing

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                // Check if last slide OR last info/click slide
                const isLastSlide = index === slides.length - 1;
                const isLastInfoSlide = isViewingInfoSlides && !hasNextInfoSlide(index);

                if (isLastSlide || isLastInfoSlide) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            // Check if there's another info/click slide with same class after current one
            function hasNextInfoSlide(currentIndex) {
                if (!currentInfoClass) return false;

                for (let i = currentIndex + 1; i < slides.length; i++) {
                    if (slides[i].classList.contains(currentInfoClass)) {
                        return true;
                    }
                }
                return false;
            }

            // Get info/click class from button (info-btn1 → , click-btn1 → click1)
            function getInfoClassFromButton(button) {
                const classList = Array.from(button.classList);

                // Check for info-btn pattern
                const infoBtnClass = classList.find(cls => cls.startsWith('info-btn'));
                if (infoBtnClass) {
                    const number = infoBtnClass.replace('info-btn', '');
                    return 'info-slide' + number;
                }

                // Check for click-btn pattern
                const clickBtnClass = classList.find(cls => cls.startsWith('click-btn'));
                if (clickBtnClass) {
                    const number = clickBtnClass.replace('click-btn', '');
                    return 'click' + number;
                }

                return null;
            }

            // Info/Click button handlers
            infoButtons.forEach((btn) => {
                btn.addEventListener("click", (e) => {
                    e.preventDefault(); // Prevent default anchor behavior

                    parentSlideIndex = currentSlide;
                    isViewingInfoSlides = true;
                    currentInfoClass = getInfoClassFromButton(btn);

                    // Find the first slide with matching info/click class
                    for (let i = 0; i < slides.length; i++) {
                        if (slides[i].classList.contains(currentInfoClass)) {
                            currentSlide = i;
                            showSlide(currentSlide);
                            break;
                        }
                    }
                });
            });

            // NEXT button - skip info/click slides if not viewing them
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;

                        // Skip info/click slides if not viewing them
                        while (!isViewingInfoSlides &&
                            currentSlide < slides.length &&
                            isInfoSlide(slides[currentSlide])) {
                            currentSlide++;
                        }

                        // If viewing info/click slides, only show slides with current class
                        if (isViewingInfoSlides) {
                            while (currentSlide < slides.length &&
                                !slides[currentSlide].classList.contains(currentInfoClass)) {
                                currentSlide++;
                            }
                        }

                        if (currentSlide < slides.length) {
                            showSlide(currentSlide);
                        }
                    }
                });
            });

            // Check if slide is any info/click slide (info-slide1, info-slide2, click1, click2, etc.)
            function isInfoSlide(slide) {
                return Array.from(slide.classList).some(cls =>
                    (cls.startsWith('info-slide') && cls.match(/^info-slide\d+$/)) ||
                    (cls.startsWith('click') && cls.match(/^click\d+$/))
                );
            }

            // Return button
            returnButton.addEventListener("click", () => {
                if (isViewingInfoSlides && currentSlide > 0) {
                    // Check if previous slide is also same info/click class
                    let prevSlide = currentSlide - 1;

                    // Find previous slide with same info/click class
                    while (prevSlide >= 0 && !slides[prevSlide].classList.contains(currentInfoClass)) {
                        prevSlide--;
                    }

                    if (prevSlide >= 0 && slides[prevSlide].classList.contains(currentInfoClass)) {
                        currentSlide = prevSlide;
                        showSlide(currentSlide);
                    } else {
                        // No more info/click slides, return to parent
                        currentSlide = parentSlideIndex;
                        isViewingInfoSlides = false;
                        currentInfoClass = null;
                        parentSlideIndex = null;
                        showSlide(currentSlide);
                    }
                } else if (currentSlide > 0) {
                    currentSlide--;

                    // Skip info/click slides when going back
                    while (currentSlide > 0 && isInfoSlide(slides[currentSlide])) {
                        currentSlide--;
                    }

                    showSlide(currentSlide);
                }
            });

            // DONE button handler
            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    if (isViewingInfoSlides && parentSlideIndex !== null) {
                        // Return to parent slide
                        currentSlide = parentSlideIndex;
                        isViewingInfoSlides = false;
                        currentInfoClass = null;
                        parentSlideIndex = null;
                        showSlide(currentSlide);
                    } else {
                        // Navigate to route
                        window.location.href = "{{ route('usageSelection') }}";
                    }
                });
            }

            // Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
