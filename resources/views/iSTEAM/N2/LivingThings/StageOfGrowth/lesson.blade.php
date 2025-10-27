@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="title !text-[3vw] top-title stroke absolute top-[5vh] z-[100]">The Stages of Growth of a Butterfly</h2>

    {{-- Slide 1 --}}
    <div class="flex flex-col items-center justify-between h-[40vh]  slide hidden">
        <h2 class="stroke title">Children, do you still remember what the
            stages of growth of a person are?
            What happens when you grow?</h2>
        <p class="note">Note: Encourage children to share what they know about the stages of growth.</p>
    </div>


    {{-- Slide 2 --}}
    <div class="flex flex-col items-center justify-center slide hidden">

        <img src="{{ asset('assets/images/N2/LivingThings/gl6.png') }}" class="large-img6" />
        <h2 class="stroke title">These are the stages of growth of a girl.</h2>
        <p class="note">Note: Explain to children that every girl goes through these stages of growth.</p>
    </div>


    {{-- Slide 3 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/gl8.png') }}" class="large-img6" />
        <h2 class="title stroke">Note: Invite children take turns to share their changes over time.</h2>

    </div>


    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an51.png') }}" />
        <h2 class="stroke title">This is a <span class="text-white">butterfly</span>.<br />Let’s look at the <span
                class="text-white">stages of growth</span> of a <span class="text-white">butterfly</span>.</h2>

    </div>


    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">First Stage</h2>
        <img src="{{ asset('assets/images/N2/LivingThings/an43.png') }}" />
        <h2 class="stroke title">The butterfly starts off as an egg.</span>.
        </h2>
    </div>


    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <video id="video1" class="pointer-events-none">
            <source src="{{ asset('assets/images/N2/LivingThings/1.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="stroke title">Watch how the caterpillar hatches from the egg.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Second Stage</h2>
        <img src="{{ asset('assets/images/N2/LivingThings/an45.png') }}" />
        <h2 class="stroke title">Once the caterpillar hatches,
            it is in the second stage of growth.</span>.
        </h2>
    </div>


    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <video id="video2" class="pointer-events-none">
            <source src="{{ asset('assets/images/N2/LivingThings/2.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="stroke title">The caterpillar eats a lot and it can grow
            100 times its size during this stage!</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <video id="video3" class="pointer-events-none">
            <source src="{{ asset('assets/images/N2/LivingThings/3.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="stroke title">The caterpillar eats a lot and it can grow
            100 times its size during this stage!</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Third Stage</h2>
        <video id="video4" class="pointer-events-none">
            <source src="{{ asset('assets/images/N2/LivingThings/4.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="stroke title">As the caterpillar grows, it sheds its skin.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- slide 11 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Forth Stage</h2>
        <video id="video5" class="pointer-events-none">
            <source src="{{ asset('assets/images/N2/LivingThings/5.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="stroke title">Inside the pupa, the caterpillar is changing.
            When it is ready, it comes out of the pupa as a butterfly.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 12 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an51.png') }}" />
        <h2 class="stroke title">After drying its wings, the butterfly will fly off
            to look for food.</h2>
    </div>


    {{-- slide 13 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <video id="video6" class="pointer-events-none">
            <source src="{{ asset('assets/images/N2/LivingThings/6.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="stroke title">The butterfly drinks nectar from flowers using its
            proboscis. The proboscis is like a straw.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video6')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 14 --}}
    <div class="flex flex-col items-center justify-between h-[50vh] slide hidden">
        <h2 class="title stroke">Class Activity</h2>

        <h2 class="stroke title">Let’s take care of a caterpillar and see how
            it grows.</h2>
        <p class="note">Note: Display the caterpillar and let children observe it.</p>
    </div>


    {{-- slide 15 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>1. Prepare a clean piece of paper cut to the size
                    of the container and an empty container.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an63.png') }}" class="large-img2" />
    </div>


    {{-- slide 16 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>

                <li>2. Remove the cover of the caterpillar’s container.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an52.png') }}" class="large-img2" />
    </div>


    {{-- slide 17 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>3. Transfer the caterpillar to an empty container
                    with teacher’s help.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an53.png') }}" class="large-img6" />
        <p class="note">Note: If the caterpillar is not on the leaves, you can place a leaf/stick near to it to let it
            crawl onto it. Be gentle if you plan to transfer it by holding the caterpillar.</p>
    </div>


    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>4. Throw the dirty paper away and use a tissue to
                    clean the container if it is dirty.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an54.png') }}" class="large-img2" />

    </div>



    {{-- slide 19 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>5. Put the clean paper flat at the bottom
                    of the container.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an55.png') }}" class="large-img2" />

    </div>


    {{-- slide 20 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>6. Remove the leaf from the water holder and place the
                    leaf with the caterpillar in the container.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an56.png') }}" class="large-img6" />

    </div>


    {{-- slide 21 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>7. Wash and change the water in the water holder. Fill
                    the water to the brim of the water holder and cover it</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an57.png') }}" class="large-img6" />

    </div>


    {{-- slide 22 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>8. Pluck a leaf from the bunch of leaves in the fridge.
                    Ensure that the stalk is intact.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an58.png') }}" class="large-img6" />
    </div>


    {{-- slide 23 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>9. Put the stalk of the leaf into the hole on the cover.</li>
            </ul>
        </div>
        <video id="video7" class="pointer-events-none">
            <source src="{{ asset('assets/images/N2/LivingThings/7.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video7')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>


    {{-- slide 24 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>10. Put the leaf back in the container.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an60.png') }}" class="large-img2" />

    </div>


    {{-- slide 25 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>11. Transfer the caterpillar back into the container.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an61.png') }}" />

    </div>

    {{-- slide 26 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start self-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>12. Close the container.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an62.png') }}" />

    </div>

    {{-- slide 27 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>13.
                    See how the caterpillar grow overtime. Record
                    (draw or paste a photo) when there are changes.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an57.png') }}" class="large-img" />
        <p class="note">Note: Guide children to record their observations in the learning journal.</p>
    </div>


    {{-- slide 28 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="stroke title">Children, how did the caterpillar grew.</h2>


        <p class="note">Note: At the end of the activity, have children display their learning journal
            and share what they have observed.</p>
    </div>


    {{-- slide 29 --}}
    <div class="flex flex-col items-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/gl9.png') }}" class="large-img6" />
        <h2 class="stroke title">These are the stages of growth of a butterfly.</h2>
    </div>


    {{-- slide 20 --}}
    <div class="flex flex-col items-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/gl10.png') }}" class="large-img6" />
        <h2 class="stroke title">Similar to you, the caterpillar also goes through the stages
            of growth. It gets bigger as it grows and its look changes.</h2>
    </div>



    {{-- slide 31 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/gl10.png') }}" class="large-img6" />
        <h2 class="title stroke">Note: Invite children take turns to share their changes over time.</h2>

    </div>


    {{-- slde 32 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title !text-white stroke">Individual Activity</h2>

        <img src="{{ asset('assets/images/N2/LivingThings/gl11.png') }}" />

        <h2 class="title stroke text-start">Let’s do: <br>
            How has the caterpillar grown? Put the photos in the correct order.</h2>
        <p class="note">Note: Give children the photos and guide children to paste them in their learning journals..</p>
    </div>

    {{-- slde 33 --}}
    <div class="slide  hidden flex flex-col items-center justify-center">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[45vw] h-[40vh] bg-cover bg-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>How does your caterpillar grow? Record your observations here
                (draw or paste photos)</p>
        </div>
    </div>


    {{-- slde 34 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[45vw] h-[40vh] bg-cover bg-center 
        
        flex justify-center items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{asset('assets/images/N2/LivingThings/gl12.png')}}" />
        </div>
    </div>




    {{-- Complete button --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    {{-- Buttons --}}
    <div id="buttons" class="absolute  flex flex-row gap-6 ">

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

        <button class="nextButton ">
            <img src="{{ asset('assets/images/pptimages/next-btn.png') }}" />

        </button>
    </div>
@endsection


@push('script')
    <script>
        // Video toggle function
        function toggleVideo(videoId) {
            const video = document.getElementById(videoId);
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        }

        document.addEventListener("DOMContentLoaded", () => {
            // Get all elements
            const slides = document.querySelectorAll(".slide");
            const nextBtn = document.querySelector(".nextButton");
            const returnBtn = document.getElementById("returnButton");
            const doneBtn = document.querySelector(".doneButton");

            // Current slide position
            let currentIndex = 0;

            console.log("Total slides:", slides.length);
            console.log("Next button:", nextBtn);
            console.log("Done button:", doneBtn);

            // Pause all videos in current slide
            function pauseVideos() {
                if (slides[currentIndex]) {
                    const videos = slides[currentIndex].querySelectorAll("video");
                    videos.forEach(video => {
                        if (!video.paused) {
                            video.pause();
                        }
                    });
                }
            }

            // Show slide and update buttons
            function showSlide(index) {
                console.log("Showing slide:", index);

                // Pause videos before switching
                pauseVideos();

                // Hide all slides
                slides.forEach(slide => slide.classList.add("hidden"));

                // Show current slide
                slides[index].classList.remove("hidden");

                // Update index
                currentIndex = index;

                // Check if last slide
                const isLastSlide = (index === slides.length - 1);
                console.log("Is last slide?", isLastSlide);

                if (isLastSlide) {
                    // Last slide: hide Next, show Done
                    console.log("Hiding Next, Showing Done");
                    nextBtn.style.display = "none";
                    doneBtn.style.display = "block";
                } else {
                    // Not last slide: show Next, hide Done
                    console.log("Showing Next, Hiding Done");
                    nextBtn.style.display = "block";
                    doneBtn.style.display = "none";
                }
            }

            // Next button
            nextBtn.addEventListener("click", () => {
                console.log("Next clicked, current:", currentIndex);
                if (currentIndex < slides.length - 1) {
                    showSlide(currentIndex + 1);
                }
            });

            // Return button
            returnBtn.addEventListener("click", () => {
                console.log("Return clicked, current:", currentIndex);
                if (currentIndex > 0) {
                    showSlide(currentIndex - 1);
                }
            });

            // Done button
            doneBtn.addEventListener("click", () => {
                console.log("Done clicked");
                window.location.href = "{{ route('StageOfGrowthSelection') }}";
            });

            // Start at first slide
            showSlide(0);
        });
    </script>
@endpush
