@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;
@endphp

@push('styles')
    <style>
        .p-note {
            font-size: 1.2vw;
            color: white !important;
        }

        .c-btn {
            color: #F7B94A !important;
        }

        .title-top {
            font-size: 1.5vw !important;
            color: #F7B94A;
        }

        .box {
            width: 160px;
            height: 80px;
            border-radius: 10px;
            background: #FBF0D0;
            box-shadow: 0 4px 4px #00000040;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .box span {
            color: #A15E0D;
            font-size: 2.5vw;
        }

        .box.answer {
            cursor: pointer;
        }

        .panel-ul {
            color: white;
            font-size: 1.3vw;
            padding-left: 3vw;
        }
    </style>
@endpush


@section('content')

    {{-- Panel 1 – Intro --}}
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/begins.m4a') }}">
        <h2 class="top-title stroke">It Begins With</h2>
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/play.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
        <p class="p-note">Tips: To know more about this activity, <a class="c-btn info-btn1">Click here</a>.</p>
    </div>

    {{-- Side Info Panel --}}
    <div class="phonics-panel info-panel-1 flex flex-col items-start">
        <h1 class="text-white text-[1.6vw]">Tips:</h1>
        <ul class="list-disc text-start panel-ul space-y-[.2vw]">
            <li>The ability to understand that words are made up of sounds is an important beginning reading skill.</li>
            <li>Language and word games can help children develop the ability to listen for sounds in spoken words.</li>
            <li>This simple listening game helps children develop their ability to listen for and identify initial sounds.
            </li>
        </ul>
    </div>

    {{-- Panel 2 – Question --}}
    <div class="phonics-panel h-full space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/begins-with.m4a') }}">
        <h2 class="title-top stroke">Look at the picture. <br>
            Find the blend that completes the name of this item.</h2>

        <div class="flex flex-col items-center space-y-[1vw]">
            <div class="flex items-center gap-[1.5vw]">
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/prah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pr</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>bl</span>
                </div>
                <div class="box answer">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>br</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/fl_gl/flah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>fl</span>
                </div>
            </div>
            <div class="flex items-end justify-center">
                <img src="{{ asset('assets/images/phonics_l2/brpr/branch.png') }}" class="w-[15vw]" />
                <div class="flex items-center gap-4">
                    <div class="box"></div>
                    <span class="text-[2.5vw] text-[#f7b94a]">anch</span>
                </div>
            </div>
        </div>

        <p class="p-note">Tips: Invite children to name the object. <br>
            Encourage them to listen and identify the initial blend while saying the word.</p>
    </div>

    {{-- Panel 3 – Question  --}}
    <div class="phonics-panel h-full space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/begins-with.m4a') }}">
        <h2 class="title-top stroke">Look at the picture. <br>
            Find the blend that completes the name of this item.</h2>

        <div class="flex flex-col items-center space-y-[1vw]">
            <div class="flex items-center gap-[1.5vw]">
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/dr_gr/drah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>dr</span>
                </div>
                <div class="box answer">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/prah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pr</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/fl_gl/glah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>gl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>br</span>
                </div>
            </div>
            <div class="flex items-end justify-center">
                <img src="{{ asset('assets/images/phonics_l2/brpr/prize.png') }}" class="h-[15vw]" />
                <div class="flex items-center gap-4">
                    <div class="box"></div>
                    <span class="text-[2.5vw] text-[#f7b94a]">ize</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Panel 4 – Question  --}}
    <div class="phonics-panel h-full space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/begins-with.m4a') }}">
        <h2 class="title-top stroke">Look at the picture. <br>
            Find the blend that completes the name of this item.</h2>

        <div class="flex flex-col items-center space-y-[1vw]">
            <div class="flex items-center gap-[1.5vw]">
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>cl</span>
                </div>
                <div class="box answer">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>br</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/tr_gr/trah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>tr</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/dr_gr/grah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>gr</span>
                </div>
            </div>
            <div class="flex items-end justify-center gap-10">
                <img src="{{ asset('assets/images/phonics_l2/brpr/break.png') }}" class="h-[15vw]" />
                <div class="flex items-center gap-4">
                    <div class="box"></div>
                    <span class="text-[2.5vw] text-[#f7b94a]">eak</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Panel 5 – Question  --}}
    <div class="phonics-panel h-full space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/begins-with.m4a') }}">
        <h2 class="title-top stroke">Look at the picture. <br>
            Find the blend that completes the name of this item.</h2>

        <div class="space-y-[1vw]">
            <div class="flex items-center gap-[1.5vw]">
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/dr_gr/drah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>dr</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/crah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>cr</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/fl_gl/flah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>fl</span>
                </div>
                <div class="box answer">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/prah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pr</span>
                </div>
            </div>
            <div class="flex items-end justify-center gap-[1vw]">
                <img src="{{ asset('assets/images/phonics_l2/brpr/proud.png') }}" class="h-[17vw]" />
                <div class="flex items-center gap-4">
                    <div class="box"></div>
                    <span class="text-[2.5vw] text-[#f7b94a]">oud</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Panel 6 – Question  --}}
    <div class="phonics-panel h-full space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/begins-with.m4a') }}">
        <h2 class="title-top stroke">Look at the picture. <br>
            Find the blend that completes the name of this item.</h2>

        <div class="flex flex-col items-center space-y-[1vw]">
            <div class="flex items-center gap-[1.5vw]">
                <div class="box answer">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>br</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/fr_cr/frah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>fr</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/pluh.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>cl</span>
                </div>
            </div>
            <div class="flex items-end justify-center gap-10">
                <img src="{{ asset('assets/images/phonics_l2/brpr/brush.png') }}" class="w-[15vw]" />
                <div class="flex items-center gap-4">
                    <div class="box"></div>
                    <span class="text-[2.5vw] text-[#f7b94a]">ush</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Panel 7 – Question  --}}
    <div class="phonics-panel h-full space-y-[1.5vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/begins-with.m4a') }}">
        <h2 class="title-top stroke">Look at the picture. <br>
            Find the blend that completes the name of this item.</h2>

        <div class="flex flex-col items-center space-y-[1vw]">
            <div class="flex items-center gap-[1.5vw]">
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/fl_gl/flah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>fl</span>
                </div>
                <div class="box answer">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/prah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pr</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/tr_gr/trah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>tr</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/pluh.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pl</span>
                </div>
            </div>
            <div class="flex items-end justify-center">
                <img src="{{ asset('assets/images/phonics_l2/brpr/press.png') }}" class="h-[15vw]" />
                <div class="flex items-center gap-4">
                    <div class="box"></div>
                    <span class="text-[2.5vw] text-[#f7b94a]">ess</span>
                </div>
            </div>
        </div>
    </div>


    {{-- ======================================================== --}}
    {{-- All Buttons --}}
    <div id="buttons" class="absolute flex flex-row gap-6 z-90">
        <button id="returnButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/return-btn.png') }}" />
        </button>
        <button id="homeButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/home-btn.png') }}" />
        </button>
        <button id="closeButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/cancel.png') }}" />
        </button>
    </div>

    <div class="down-btn-container">
        <button class="nextButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/next-btn.png') }}" />
        </button>
    </div>

    <div class="down-btn-container">
        <button class="doneButton hidden">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/done.png') }}" />
        </button>
    </div>

@endsection

@push('script')
    <script>
        document.body.dataset.homeRoute = "{{ url('/phonics/l2') }}";

        document.addEventListener("DOMContentLoaded", function() {

            const AUDIO = {
                cheering: "{{ asset('assets/audio/phonics_audio-2/common/cheering.mp3') }}",
                br_anch:   "{{ asset('assets/audio/phonics_audio-2/br_pr/br-anch.m4a') }}",
                pr_ize:     "{{ asset('assets/audio/phonics_audio-2/br_pr/pr-ize.m4a') }}",
                br_eak:   "{{ asset('assets/audio/phonics_audio-2/br_pr/br-eak.m4a') }}",
                pr_oud:   "{{ asset('assets/audio/phonics_audio-2/br_pr/pr-oud.m4a') }}",
                br_ush:   "{{ asset('assets/audio/phonics_audio-2/br_pr/br-ush.m4a') }}",
                pr_ess:   "{{ asset('assets/audio/phonics_audio-2/br_pr/pr-ess.m4a') }}",
            };

            const SLIDE_ANSWER_AUDIO = {
                2: AUDIO.br_anch,
                3: AUDIO.pr_ize,
                4: AUDIO.br_eak,
                5: AUDIO.pr_oud,
                6: AUDIO.br_ush,
                7: AUDIO.pr_ess,
            };

            /* ── DOM ── */
            const slides       = document.querySelectorAll(".phonics-panel");
            const nextButtons  = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const homeButton   = document.getElementById("homeButton");
            const infoButtons  = document.querySelectorAll("[class*='info-btn']");
            const soundButtons = document.querySelectorAll("[id^='soundButton']");

            const returnURL = "{{ url('/phonics_l2/dr_gr/drgr') }}";
            const doneURL   = "{{ url('/phonics_l2/dr_gr/drgr') }}";
            const homeURL   = document.body.dataset.homeRoute;

            let currentSlide     = 0;
            let currentAudio     = null;
            let cheeringAudio    = null;
            let isInSpecialMode  = false;
            let returnToSlide    = null;
            let specialSlideClass = null;

            /* ── Audio ── */
            function stopAudio() {
                if (currentAudio) {
                    currentAudio.onended = null;
                    currentAudio.pause();
                    currentAudio.currentTime = 0;
                    currentAudio = null;
                }
                if (cheeringAudio) {
                    cheeringAudio.pause();
                    cheeringAudio.currentTime = 0;
                    cheeringAudio = null;
                }
            }

            function playAudio(src, onEnd) {
                stopAudio();
                if (!src) { if (onEnd) onEnd(); return; }
                currentAudio = new Audio(src);
                if (onEnd) currentAudio.onended = onEnd;
                currentAudio.play().catch(() => { if (onEnd) onEnd(); });
            }

            function playSlideAudio(idx) {
                const slide = slides[idx];
                const src = slide.getAttribute('data-slide-audio') ||
                    slide.querySelector('[data-slide-audio]')?.getAttribute('data-slide-audio');
                playAudio(src);
            }

            /* ── Reset a question slide back to its original state ── */
            function resetSlide(idx) {
                const slide = slides[idx];
                const answerBox = slide.querySelector('.box.answer');
                if (!answerBox) return;

                // Restore the answer box visibility
                answerBox.classList.remove('opacity-0');
                answerBox.style.pointerEvents = '';

                // Clear the bottom box that was filled with the answer text
                const bottomBox = slide.querySelector('.flex.items-center.gap-4 .box');
                if (bottomBox) bottomBox.innerHTML = '';
            }

            /* ── Slides ── */
            function isSpecialSlide(slide) {
                return Array.from(slide.classList).some(c => /^info-panel-\d+$/.test(c));
            }

            function isLastSlide(idx) {
                if (isInSpecialMode) {
                    for (let i = idx + 1; i < slides.length; i++) {
                        if (slides[i].classList.contains(specialSlideClass)) return false;
                    }
                    return true;
                }
                for (let i = idx + 1; i < slides.length; i++) {
                    if (!isSpecialSlide(slides[i])) return false;
                }
                return true;
            }

            function showSlide(idx, resetPrev = false) {
                stopAudio();

                // Reset the slide we're leaving if requested
                if (resetPrev && currentSlide !== idx) resetSlide(currentSlide);

                currentSlide = idx;
                slides.forEach((s, i) => s.classList.toggle('hidden', i !== idx));
                playSlideAudio(idx);

                const last = isLastSlide(idx);
                nextButtons.forEach(b => b.classList.toggle('hidden', last));
                document.querySelectorAll('.doneButton').forEach(b => b.classList.toggle('hidden', !last));
            }

            /* ── Answer box click ── */
            slides.forEach((slide, idx) => {
                const answerBox = slide.querySelector('.box.answer');
                if (!answerBox) return;

                answerBox.addEventListener('click', () => {
                    answerBox.classList.add('opacity-0');
                    answerBox.style.pointerEvents = 'none';

                    const answerText = answerBox.querySelector('span')?.textContent || '';
                    const bottomBox = slide.querySelector('.flex.items-center.gap-4 .box');
                    if (bottomBox) bottomBox.innerHTML = `<span>${answerText}</span>`;

                    // Play answer audio then cheering (tracked separately so stopAudio() can kill it)
                    stopAudio();
                    currentAudio = new Audio(SLIDE_ANSWER_AUDIO[idx]);
                    currentAudio.onended = () => {
                        cheeringAudio = new Audio(AUDIO.cheering);
                        cheeringAudio.play().catch(() => {});
                    };
                    currentAudio.play().catch(() => {});

                    const last = isLastSlide(idx);
                    nextButtons.forEach(b => b.classList.toggle('hidden', last));
                    document.querySelectorAll('.doneButton').forEach(b => b.classList.toggle('hidden', !last));
                });
            });

            /* ── Sound buttons ── */
            soundButtons.forEach(btn => {
                btn.addEventListener('click', e => {
                    e.stopPropagation();
                    e.preventDefault();
                    playAudio(btn.getAttribute('data-slide-audio'));
                });
            });

            /* ── Navigation ── */
            function goNext() {
                let next = currentSlide + 1;
                while (next < slides.length) {
                    if (isInSpecialMode
                        ? slides[next].classList.contains(specialSlideClass)
                        : !isSpecialSlide(slides[next])) break;
                    next++;
                }
                if (next < slides.length) showSlide(next, true); // true = reset previous slide
            }

            function goBack() {
                if (currentSlide === 0 && !isInSpecialMode) {
                    stopAudio();
                    window.location.href = returnURL;
                    return;
                }
                if (isInSpecialMode) {
                    let prev = currentSlide - 1;
                    while (prev >= 0 && !slides[prev].classList.contains(specialSlideClass)) prev--;
                    if (prev >= 0) {
                        showSlide(prev);
                    } else {
                        isInSpecialMode  = false;
                        specialSlideClass = null;
                        showSlide(returnToSlide);
                        returnToSlide = null;
                    }
                } else {
                    let prev = currentSlide - 1;
                    while (prev > 0 && isSpecialSlide(slides[prev])) prev--;
                    showSlide(prev, true); // true = reset the slide we're leaving
                }
            }

            /* ── Info buttons ── */
            infoButtons.forEach(btn => {
                btn.addEventListener('click', e => {
                    e.preventDefault();
                    returnToSlide = currentSlide;
                    isInSpecialMode  = true;
                    specialSlideClass = Array.from(btn.classList)
                        .find(c => c.startsWith('info-btn'))
                        ?.replace('info-btn', 'info-panel-');
                    for (let i = 0; i < slides.length; i++) {
                        if (slides[i].classList.contains(specialSlideClass)) {
                            showSlide(i);
                            break;
                        }
                    }
                });
            });

            nextButtons.forEach(b => b.addEventListener('click', goNext));
            if (returnButton) returnButton.addEventListener('click', goBack);
            if (homeButton) homeButton.addEventListener('click', () => {
                stopAudio();
                window.location.href = homeURL;
            });
            document.querySelectorAll('.doneButton').forEach(b => b.addEventListener('click', () => {
                stopAudio();
                if (isInSpecialMode) {
                    isInSpecialMode  = false;
                    specialSlideClass = null;
                    showSlide(returnToSlide);
                    returnToSlide = null;
                } else {
                    window.location.href = doneURL;
                }
            }));

            showSlide(0);
        });
    </script>
@endpush