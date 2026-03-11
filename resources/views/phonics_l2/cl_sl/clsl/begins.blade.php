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

    {{-- Panel 2 – Question: slime --}}
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
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/pluh.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pl</span>
                </div>
                <div class="box answer">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>sl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/flah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>fl</span>
                </div>
            </div>
            <div class="flex items-end justify-center">
                <img src="{{ asset('assets/images/phonics_l2/clsl/slime.png') }}" class="h-[13vw]" />
                <div class="flex items-center gap-4">
                    <div class="box"></div>
                    <span class="text-[2.5vw] text-[#f7b94a]">ime</span>
                </div>
            </div>
        </div>

        <p class="p-note">Tips: Invite children to name the object. <br>
            Encourage them to listen and identify the initial blend while saying the word.</p>
    </div>

    {{-- Panel 3 – Question: climb --}}
    <div class="phonics-panel h-full space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/begins-with.m4a') }}">
        <h2 class="title-top stroke">Look at the picture. <br>
            Find the blend that completes the name of this item.</h2>

        <div class="flex flex-col items-center space-y-[1vw]">
            <div class="flex items-center gap-[1.5vw]">
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>sl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/pluh.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>fl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/flah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pl</span>
                </div>
                <div class="box answer">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>cl</span>
                </div>
            </div>
            <div class="flex items-end justify-center">
                <img src="{{ asset('assets/images/phonics_l2/clsl/climb.png') }}" class="h-[15vw]" />
                <div class="flex items-center gap-4">
                    <div class="box"></div>
                    <span class="text-[2.5vw] text-[#f7b94a]">imb</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Panel 4 – Question: slip --}}
    <div class="phonics-panel h-full space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/begins-with.m4a') }}">
        <h2 class="title-top stroke">Look at the picture. <br>
            Find the blend that completes the name of this item.</h2>

        <div class="flex flex-col items-center space-y-[1vw]">
            <div class="flex items-center gap-[1.5vw]">
                <div class="box answer">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>sl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/flah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>fl</span>
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
            <div class="flex items-end justify-center">
                <img src="{{ asset('assets/images/phonics_l2/clsl/slip.png') }}" class="w-[15vw]" />
                <div class="flex items-center gap-4">
                    <div class="box"></div>
                    <span class="text-[2.5vw] text-[#f7b94a]">ip</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Panel 5 – Question: close --}}
    <div class="phonics-panel h-full space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/begins-with.m4a') }}">
        <h2 class="title-top stroke">Look at the picture. <br>
            Find the blend that completes the name of this item.</h2>

        <div class="space-y-[1vw]">
            <div class="flex items-center gap-[1.5vw]">
                <div class="box answer">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>cl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>sl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/glah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>gl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/pluh.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pl</span>
                </div>
            </div>
            <div class="flex items-end justify-center gap-[1vw]">
                <img src="{{ asset('assets/images/phonics_l2/clsl/close.png') }}" class="h-[17vw]" />
                <div class="flex items-center gap-4">
                    <div class="box"></div>
                    <span class="text-[2.5vw] text-[#f7b94a]">ose</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Panel 6 – Question: slug --}}
    <div class="phonics-panel h-full space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/begins-with.m4a') }}">
        <h2 class="title-top stroke">Look at the picture. <br>
            Find the blend that completes the name of this item.</h2>

        <div class="flex flex-col items-center space-y-[1vw]">
            <div class="flex items-center gap-[1.5vw]">
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/flah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>fl</span>
                </div>
                <div class="box answer">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>sl</span>
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
            <div class="flex items-end justify-center">
                <img src="{{ asset('assets/images/phonics_l2/clsl/snail.png') }}" class="w-[15vw]" />
                <div class="flex items-center gap-4">
                    <div class="box"></div>
                    <span class="text-[2.5vw] text-[#f7b94a]">ug</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Panel 7 – Question: clock --}}
    <div class="phonics-panel h-full space-y-[1.5vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/begins-with.m4a') }}">
        <h2 class="title-top stroke">Look at the picture. <br>
            Find the blend that completes the name of this item.</h2>

        <div class="flex flex-col items-center space-y-[1vw]">
            <div class="flex items-center gap-[1.5vw]">
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/flah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>fl</span>
                </div>
                <div class="box answer">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>cl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>sl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>bl</span>
                </div>
            </div>
            <div class="flex items-end justify-center">
                <img src="{{ asset('assets/images/phonics_l2/clsl/clock.png') }}" class="w-[15vw]" />
                <div class="flex items-center gap-4">
                    <div class="box"></div>
                    <span class="text-[2.5vw] text-[#f7b94a]">ock</span>
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

            /* ══════════════════════════════════════════════
               AUDIO PATHS — edit here if files change
            ══════════════════════════════════════════════ */
            const AUDIO = {
                // Common
                beginsWith: "{{ asset('assets/audio/phonics_audio-2/common/begins-with.m4a') }}",
                cheering: "{{ asset('assets/audio/phonics_audio-2/common/cheering.mp3') }}",

                // Blends
                slah: "{{ asset('assets/audio/phonics_audio-2/cl_sl/slah.m4a') }}",
                clah: "{{ asset('assets/audio/phonics_audio-2/cl_sl/clah.m4a') }}",
                flah: "{{ asset('assets/audio/phonics_audio-2/cl_sl/flah.m4a') }}",
                pluh: "{{ asset('assets/audio/phonics_audio-2/cl_sl/pluh.m4a') }}",
                glah: "{{ asset('assets/audio/phonics_audio-2/cl_sl/glah.m4a') }}",
                blah: "{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}",

                // Answer audios (word + blend)
                sl_ime: "{{ asset('assets/audio/phonics_audio-2/cl_sl/sl-ime.m4a') }}",
                cl_imb: "{{ asset('assets/audio/phonics_audio-2/cl_sl/cl-imb.m4a') }}",
                sl_ip: "{{ asset('assets/audio/phonics_audio-2/cl_sl/sl-ip.m4a') }}",
                cl_ose: "{{ asset('assets/audio/phonics_audio-2/cl_sl/cl-ose.m4a') }}",
                sl_ug: "{{ asset('assets/audio/phonics_audio-2/cl_sl/sl-ug.m4a') }}",
                cl_ock: "{{ asset('assets/audio/phonics_audio-2/cl_sl/cl-ock.m4a') }}",
            };

            /* ══════════════════════════════════════════════
               SLIDE ANSWER AUDIO
               Maps slide index (0-based) → audio to play
               when the correct box is clicked
            ══════════════════════════════════════════════ */
            const SLIDE_ANSWER_AUDIO = {
                2: AUDIO.sl_ime, // slime
                3: AUDIO.cl_imb, // climb
                4: AUDIO.sl_ip, // slip
                5: AUDIO.cl_ose, // close
                6: AUDIO.sl_ug, // slug
                7: AUDIO.cl_ock, // clock
            };

            /* ── DOM ── */
            const slides = document.querySelectorAll(".phonics-panel");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const homeButton = document.getElementById("homeButton");
            const infoButtons = document.querySelectorAll("[class*='info-btn']");
            const soundButtons = document.querySelectorAll("[id^='soundButton']");

            const returnURL = "{{ url('/phonics_l2/cl_sl/clsl') }}";
            const doneURL = "{{ url('/phonics_l2/cl_sl/clsl') }}";
            const homeURL = document.body.dataset.homeRoute;

            let currentSlide = 0;
            let currentAudio = null;
            let isInSpecialMode = false;
            let returnToSlide = null;
            let specialSlideClass = null;

            /* ── Audio ── */
            function stopAudio() {
                if (currentAudio) {
                    currentAudio.onended = null;
                    currentAudio.pause();
                    currentAudio.currentTime = 0;
                    currentAudio = null;
                }
            }

            function playAudio(src, onEnd) {
                stopAudio();
                if (!src) {
                    if (onEnd) onEnd();
                    return;
                }
                currentAudio = new Audio(src);
                if (onEnd) currentAudio.onended = onEnd;
                currentAudio.play().catch(() => {
                    if (onEnd) onEnd();
                });
            }

            function playSlideAudio(idx) {
                const slide = slides[idx];
                const src = slide.getAttribute('data-slide-audio') ||
                    slide.querySelector('[data-slide-audio]')?.getAttribute('data-slide-audio');
                playAudio(src);
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

            function showSlide(idx) {
                stopAudio();
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
                    // Hide the clicked answer box
                    answerBox.classList.add('opacity-0');
                    answerBox.style.pointerEvents = 'none';

                    // Fill the bottom empty box with the answer text
                    const answerText = answerBox.querySelector('span')?.textContent || '';
                    const bottomBox = slide.querySelector('.flex.items-center.gap-4 .box');
                    if (bottomBox) bottomBox.innerHTML = `<span>${answerText}</span>`;

                    // Play answer audio → cheering
                    playAudio(SLIDE_ANSWER_AUDIO[idx], () => playAudio(AUDIO.cheering));

                    // Show next / done button
                    const last = isLastSlide(idx);
                    nextButtons.forEach(b => b.classList.toggle('hidden', last));
                    document.querySelectorAll('.doneButton').forEach(b => b.classList.toggle(
                        'hidden', !last));
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
                    if (isInSpecialMode ? slides[next].classList.contains(specialSlideClass) : !isSpecialSlide(
                            slides[next])) break;
                    next++;
                }
                if (next < slides.length) showSlide(next);
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
                        isInSpecialMode = false;
                        specialSlideClass = null;
                        showSlide(returnToSlide);
                        returnToSlide = null;
                    }
                } else {
                    let prev = currentSlide - 1;
                    while (prev > 0 && isSpecialSlide(slides[prev])) prev--;
                    showSlide(prev);
                }
            }

            /* ── Info buttons ── */
            infoButtons.forEach(btn => {
                btn.addEventListener('click', e => {
                    e.preventDefault();
                    returnToSlide = currentSlide;
                    isInSpecialMode = true;
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
                    isInSpecialMode = false;
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
