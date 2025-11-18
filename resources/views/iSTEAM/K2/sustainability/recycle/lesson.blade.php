@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- title --}}
    <h2 class="top-title stroke">Let's Recycle</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r9.png') }}" class="img-sm" />
        <div class="title stroke">
            <h2>Children, do you remember the three 'R's?</h2>
        </div>
        <p class="note">Note: Encourage children to share what they know about reduce and reuse.</p>
    </div>

    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r24.png') }}" class="img-sm" />
        <h2 class="title stroke">Reduce is about throwing less waste!</h2>
    </div>

    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center justify-between">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r3.png') }}" class="img-lg" />
        <h2 class="title stroke text-center">When we throw lesser rubbish, there will be lesser rubbish.
            Less rubbish will end up in the sea.</h2>
    </div>

    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r17.png') }}" class="img-sm" />
        <h2 class="title stroke text-center">Reusing is about looking for ways to use the item again.</h2>
    </div>

    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/recycle/s1.png') }}" class="img-xl" />
        <h2 class="title stroke">We can reuse old bottles or make new bag out of old clothes.
            Artists reuse old items to create new artworks.</h2>
    </div>

    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r9.png') }}" class="img-sm" />
        <h2 class="title stroke">What about recycle? What does that mean?</h2>
        <p class="note">Note: Encourage children to share what they know about recycle.</p>
    </div>

    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r9.png') }}" class="img-sm" />
        <h2 class="title stroke"><span class="!text-white">Recycle</span> using rubbish to make new things that
            can be used again.</h2>
    </div>

    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[15vw]">
        <h2 class="title stroke">Do you know the process of recycling?</h2>
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>

    {{-- Slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/reduce/s2a.png') }}" class="img-sm" />
        <h2 class="title stroke">Recyclable items such as bottles should be washed and cleaned
            before being discarded at the recycling bins.</h2>
        <p class="note">Note: Teacher can explain it is important to wash before throwing the bottles.
            <a class="click-btn1 text-[#F7b94a]">Click here</a> more information.
        </p>
    </div>

    {{-- Slide 10 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-center">
        <ul class="text-start lesson-ul stroke space-y-3 list-disc">
            <li>Additional information about washing recyclable rubbish:</li>
            <li>What happens if I don't wash my recycling?</li>
            <li>
                Food residue is a form of contamination. It gives off bad smell and may
                attract pests to the recycling bin. The recycling facility will not be
                able to recycle the items filled with pests.
            </li>
            <li>
                Food residue from one container may also contaminate all the other
                rubbish in the truck. The recycling facility will not be able to process
                the contaminated rubbish too. All the rubbish will then be sent to the
                landfill.
            </li>
        </ul>
    </div>

    {{-- Slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/recycle/s2.png') }}" class="img-md" />
        <h2 class="title stroke"><span class="!text-white">Recyclable</span> items should be sorted out by types.</h2>
    </div>

    {{-- Slide 12 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/recycle/s2.png') }}" class="img-md" />
        <h2 class="title stroke"><span class="!text-white">Metal,</span> paper, <span class="!text-white">plastic</span> and
            glass are some examples of <span class="!text-white">recyclable</span></h2>
    </div>

    {{-- Slide 13 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/recycle/s3.png') }}" class="img-md" />
        <h2 class="title stroke">Recyclable items are then discarded in recycling bins.</h2>
        <p class="note">Note: Ask children if they have seen or used these bins before.</p>
    </div>

    {{-- Slide 14 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/recycle/s4.png') }}" class="img-md" />
        <h2 class="title stroke">Recycling trucks collect the different types of recyclables and
            send them to the recycling factories accordingly.</h2>
    </div>

    {{-- Slide 15 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/recycle/s2.png') }}" class="img-md" />
        <h2 class="title stroke">The recyclables are sorted, checked and washed before being
            processed to make into new products.</h2>
    </div>

    {{-- Slide 16 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video1" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/201.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Glass items are crashed and melted. The molten glass are
            then placed into molds to make new glass bottles and jars.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- Slide 17 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/recycle/s6.png') }}" class="img-xl" />
        <h2 class="title stroke">Old tins and cans are melted to make new cans and tins.</h2>
    </div>

    {{-- Slide 18 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/recycle/s7.png') }}" class="img-lg" />
        <h2 class="title stroke"><span class="!text-white">Plastics</span> are squashed and shredded in factories.</h2>
    </div>

    {{-- Slide 19 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/recycle/s8.png') }}" class="img-lg" />
        <h2 class="title stroke">Shredded plastics are moulded into new containers or made
            into products such as clothes, toys and other items.</h2>
    </div>

    {{-- Slide 20 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video2" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/202.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Paper products are mixed and soaked in chemicals. The
            mixture is then dried and rolled out as new sheets of paper.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- Slide 21 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/recycle/s10.png') }}" class="img-md" />
        <h2 class="title stroke">Boxes, books, newspaper and toilet rolls are some examples
            made from recycled paper.</h2>
    </div>

    {{-- Slide 22 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="!text-white title stroke">Class Activity</h2>
        <img src="{{ asset('assets/images/K2/sustain/recycle/s11.png') }}" class="img-sm" />
        <h2 class="title stroke text-start">Let's find out: <br> How do we recycle paper?</h2>
    </div>

    {{-- Slide 23 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="text-start title stroke">
            <h2>Let's do:</h2>
            <ol class="lesson-ul list-decimal">
                <li>Prepare the materials needed for the activity.</li>
            </ol>
        </div>
        <video id="video3" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/203.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- Slide 24 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="text-start title stroke">
            <h2>Let's do:</h2>
            <ol class="lesson-ul list-decimal" start="2">
                <li>Tear used paper into small pieces and soak them in water for 30 minutes.</li>
            </ol>
        </div>
        <video id="video4" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/204.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- Slide 25 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="text-start title stroke">
            <h2>Let's do:</h2>
            <ol class="lesson-ul list-decimal" start="3">
                <li>Blend the soaked paper in the blender.</li>
            </ol>
        </div>
        <video id="video5" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/205.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- Slide 26 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="text-start title stroke">
            <h2>Let's do:</h2>
            <ol class="lesson-ul list-decimal" start="4">
                <li>Set up the tray as seen in the video below and prepare the pulp mixture.</li>
            </ol>
        </div>
        <video id="video6" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/206.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video6')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>

    {{-- Slide 27 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="text-start title stroke">
            <h2>Let's do:</h2>
            <ol class="lesson-ul list-decimal" start="5">
                <li>Pour the pulp mixture in the frame. Move the frame to let the pulp settle. Arrange the flowers and
                    leaves as desired.</li>
            </ol>
        </div>
        <video id="video7" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/207.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video7')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>

    {{-- Slide 28 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="text-start title stroke">
            <h2>Let's do:</h2>
            <ol class="lesson-ul list-decimal" start="6">
                <li>After one hour, follow the steps in the video on drying the pulp mixture.</li>
            </ol>
        </div>
        <video id="video8" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/208.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video8')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>

    {{-- Slide 29 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r9.png') }}" class="img-sm" />
        <div class="title stroke">
            <h2>Recycling helps to create new things from old items. This reduces the usage of natural resources!</h2>
        </div>
    </div>

    {{-- Slide 30 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r9.png') }}" class="img-sm" />
        <div class="title stroke">
            <h2>If everyone practices the three 'R's, there will be lesser pollution on Earth!</h2>
        </div>
    </div>

    {{-- Slide 31 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K2/sustain/reduce/r9.png') }}" class="img-sm" />
        <div class="title stroke">
            <h2>Earth will be a better environment for everyone to live in! Let's do our parts together!</h2>
        </div>
    </div>


    {{-- ============ --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    <div id="buttons" class="absolute flex flex-row gap-6">
        <a id="returnButton">
            <img src="{{ asset('assets/images/pptimages/return.png') }}" />
        </a>
        <button id="homeButton">
            <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
        </button>
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
        function toggleVideo(videoId) {
            const video = document.getElementById(videoId);
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        }

        document.addEventListener("DOMContentLoaded", function() {
            const slides = document.querySelectorAll(".slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");
            const clickButtons = document.querySelectorAll("[class*='info-btn'], [class*='click-btn']");

            let currentSlideNumber = 0;
            let inSpecialMode = false;
            let slideToReturnTo = null;
            let specialSlideType = null;

            const whereToGoWhenReturn = "{{ route('recycleSelection') }}";
            const whereToGoWhenDone = "{{ route('k2sustainability') }}";

            function pauseAllVideos() {
                const videos = document.querySelectorAll('video');
                for (let i = 0; i < videos.length; i++) {
                    videos[i].pause();
                }
            }

            function isSpecialSlide(slide) {
                const classes = slide.className.split(' ');
                for (let i = 0; i < classes.length; i++) {
                    if (classes[i].startsWith('click') && classes[i].match(/^click\d+$/)) {
                        return true;
                    }
                    if (classes[i].startsWith('info-slide') && classes[i].match(/^info-slide\d+$/)) {
                        return true;
                    }
                }
                return false;
            }

            function getSpecialTypeFromButton(button) {
                const classes = button.className.split(' ');
                for (let i = 0; i < classes.length; i++) {
                    if (classes[i].startsWith('click-btn')) {
                        const number = classes[i].replace('click-btn', '');
                        return 'click' + number;
                    }
                    if (classes[i].startsWith('info-btn')) {
                        const number = classes[i].replace('info-btn', '');
                        return 'info-slide' + number;
                    }
                }
                return null;
            }

            function hasMoreSpecialSlides(startFrom) {
                if (!specialSlideType) {
                    return false;
                }
                for (let i = startFrom + 1; i < slides.length; i++) {
                    if (slides[i].classList.contains(specialSlideType)) {
                        return true;
                    }
                }
                return false;
            }

            function isLastSlide(slideNumber) {
                if (slideNumber === slides.length - 1) {
                    return true;
                }
                if (inSpecialMode && !hasMoreSpecialSlides(slideNumber)) {
                    return true;
                }
                return false;
            }

            function showSlide(slideNumber) {
                pauseAllVideos();
                for (let i = 0; i < slides.length; i++) {
                    if (i === slideNumber) {
                        slides[i].classList.remove("hidden");
                    } else {
                        slides[i].classList.add("hidden");
                    }
                }
                if (isLastSlide(slideNumber)) {
                    for (let i = 0; i < nextButtons.length; i++) {
                        nextButtons[i].classList.add("hidden");
                    }
                    if (doneButton) {
                        doneButton.classList.remove("hidden");
                    }
                } else {
                    for (let i = 0; i < nextButtons.length; i++) {
                        nextButtons[i].classList.remove("hidden");
                    }
                    if (doneButton) {
                        doneButton.classList.add("hidden");
                    }
                }
            }

            function goToNextSlide() {
                if (currentSlideNumber >= slides.length - 1) {
                    return;
                }
                currentSlideNumber++;
                while (currentSlideNumber < slides.length) {
                    const slide = slides[currentSlideNumber];
                    if (inSpecialMode) {
                        if (slide.classList.contains(specialSlideType)) {
                            break;
                        }
                    } else {
                        if (!isSpecialSlide(slide)) {
                            break;
                        }
                    }
                    currentSlideNumber++;
                }
                if (currentSlideNumber < slides.length) {
                    showSlide(currentSlideNumber);
                }
            }

            function goToPreviousSlide() {
                if (currentSlideNumber === 0 && !inSpecialMode) {
                    window.location.href = whereToGoWhenReturn;
                    return;
                }
                if (inSpecialMode) {
                    let previousSlide = currentSlideNumber - 1;
                    while (previousSlide >= 0) {
                        if (slides[previousSlide].classList.contains(specialSlideType)) {
                            break;
                        }
                        previousSlide--;
                    }
                    if (previousSlide >= 0) {
                        currentSlideNumber = previousSlide;
                        showSlide(currentSlideNumber);
                    } else {
                        currentSlideNumber = slideToReturnTo;
                        inSpecialMode = false;
                        specialSlideType = null;
                        slideToReturnTo = null;
                        showSlide(currentSlideNumber);
                    }
                } else {
                    if (currentSlideNumber > 0) {
                        currentSlideNumber--;
                        while (currentSlideNumber > 0 && isSpecialSlide(slides[currentSlideNumber])) {
                            currentSlideNumber--;
                        }
                        showSlide(currentSlideNumber);
                    }
                }
            }

            for (let i = 0; i < clickButtons.length; i++) {
                clickButtons[i].addEventListener("click", function(event) {
                    event.preventDefault();
                    slideToReturnTo = currentSlideNumber;
                    inSpecialMode = true;
                    specialSlideType = getSpecialTypeFromButton(clickButtons[i]);
                    for (let j = 0; j < slides.length; j++) {
                        if (slides[j].classList.contains(specialSlideType)) {
                            currentSlideNumber = j;
                            showSlide(currentSlideNumber);
                            break;
                        }
                    }
                });
            }

            for (let i = 0; i < nextButtons.length; i++) {
                nextButtons[i].addEventListener("click", goToNextSlide);
            }

            returnButton.addEventListener("click", goToPreviousSlide);

            if (doneButton) {
                doneButton.addEventListener("click", function() {
                    if (inSpecialMode && slideToReturnTo !== null) {
                        currentSlideNumber = slideToReturnTo;
                        inSpecialMode = false;
                        specialSlideType = null;
                        slideToReturnTo = null;
                        showSlide(currentSlideNumber);
                    } else {
                        window.location.href = whereToGoWhenDone;
                    }
                });
            }

            showSlide(currentSlideNumber);
        });
    </script>
@endpush
