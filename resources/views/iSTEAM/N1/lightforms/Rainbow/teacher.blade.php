@extends('layout.master')
@section('title', 'Dynamic Presentation')

@push('style')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        button {
            cursor: pointer !important;
        }

        a {
            cursor: pointer;

        }
    </style>
@endpush



@section('content')
    {{-- slide 1 --}}
    <div class="flex flex-col justify-start gap-y-10 text-start text-2xl text-white slide hidden">
        <div>
            <h2 class="font-bold">Children will be able to:</h2>
            <ul class="list-disc">
                <li>Develop awareness of different types of shadows</li>
                <li>Explore materials and their shadows</li>
                <li>Create a shadow puppet with mix of materials</li>
                <li>Develop curiosity in exploring various types of items</li>
                <li>Develop observation and understanding through hands-on activities</li>
            </ul>
        </div>
        <div class="flex w-[100%] justify-between">
            <div>
                <h2 class="text-[33px] font-bold">Keywords:</h2>
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
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" />
        </div>
    </div>

    {{-- slide 2 --}}
    <div class="text-white relative flex w-[75%] gap-y-20 flex-col text-start text-2xl slide hidden">
        <div>
            <h2 class="font-bold">Preparations for Class Activity I:</h2>
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
            <img src="{{ asset('assets/images/pptimages/fish.png') }}" alt="" class="w-[50%]" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt=""
            class="absolute right-0 bottom-[-50px]" />
        <div class="h-fit w-[60%]">
            <p>Teacher can point out about the shape of the shadows when children are working on the activity.</p>
        </div>
    </div>

    {{-- slide 3 --}}
    <div class="text-white relative flex w-[75%] gap-y-20 flex-col text-start text-2xl slide hidden">
        <div>
            <h2 class="font-bold">Preparations for Class Activity I:</h2>
            <ul class="list-disc">
                <li>3) Translucent items that forms coloured shadows such as coloured plastic cups, translucent toys,
                    red/yellow plastic bags, coloured plastic sheets, cellophane paper etc.</li>
            </ul>
            <img src="{{ asset('assets/images/pptimages/glass.png') }}" alt="" class="w-[50%]" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt=""
            class="absolute right-0 bottom-[-50px]" />
        <div class="h-fit w-[60%]">
            <p>Teacher can point out on the coloured shadows to the children when they are exploring.</p>
        </div>
    </div>

    {{-- slide 4 --}}
    <div class="text-white relative flex w-[75%] gap-y-20 flex-col text-start text-2xl slide hidden">
        <div>
            <h2 class="font-bold">Preparations for Class Activity I:</h2>
            <ul class="list-disc">
                <li>4. Transparent items such as transparent plastic cups, water bottles, goggles, magnifying glass or
                    ziplock bag etc. Teacher to point out which parts do not have shadows as light is able to shine through.
                </li>
            </ul>
            <img src="{{ asset('assets/images/pptimages/lens.png') }}" alt="" class="w-[50%]" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt=""
            class="absolute right-0 bottom-[-50px]" />
        <div class="h-fit w-[60%]">
            <p>Important Notes: </br>Teacher to remind children not to shine light directly into their eyes or their
                friend's eyes. Explain to them that it will damage their eyes. Teacher can use simple words to explain
                translucent and transparent.</p>
        </div>
    </div>

    {{-- slide 5 --}}
    <div class="flex w-[75%] flex-col text-start text-2xl text-white slide hidden">
        <div>
            <h2 class="font-bold">Preparations for Class Activity II:</h2>
            <p>Do these for the children before the activity:</p>
            <ul class="list-decimal pl-6">
                <li>Pre-cut puppet templates of a face <span class="block text-lg">(You may use paper plates for the head
                        and cut out the eyes and mouth portion)</span></li>
                <li>Allow children to freely paste the materials on their template and let them discover the shadow formed
                    with the materials.</li>
            </ul>
            <div class="flex items-center justify-between">
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
                <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" />
            </div>
        </div>
    </div>

    {{-- slide 6 --}}
    <div class="text-white flex w-[75%] flex-col justify-start gap-y-10 text-start text-2xl slide hidden">
        <h1 class="title text-amber-300 text-[45px] text-center stroke">Learning Center Idea</h1>
        <div>
            <h2 class="font-bold">Matching shadow</h2>
            <h2>What and how to setup:</h2>
            <p>Prepare some flashlights and some toys such as cars, dinosaurs, animal figurines etc. Print out shadows of
                the objects for children to match. The shadows can be taller/bigger/smaller/shorter, depending on how the
                light was positioned.</p>
        </div>
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="font-bold">What to do:</h2>
                <ul class="mt-2 list-decimal space-y-1 pl-6">
                    <li>Invite children to pick up a picture and find the item that will cast the shadow.</li>
                    <li>Ask children to use the lights to create the same shadow.</li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" />
        </div>
    </div>



    {{-- done Button --}}
    <div class="absolute bottom-[80px] z-[999]">
        <button
            class="cursor-pointer doneButton w-66 h-[75px] relative bg-[#F8A23A] rounded-[30px]  shadow-[3px_4px_7.8px_0px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_0px_rgba(0,0,0,0.25)] 
                    outline outline-1 outline-yellow-700 overflow-hidden">
            <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
            <div class="absolute left-[8.22px] top-[3.17px] "> <img src="/assets/images/pptimages/Vector4.png" />
            </div>
            <span class="absolute left-[80px] top-[18px] flex items-center  text-white text-5xl stroke font-bold ">DONE</span>
        </button>
    </div>

    {{-- Buttons --}}
    <div id="buttons" class="absolute top-0 right-[60px] flex flex-row gap-6 z-90">

        <!-- Return Button -->
        <a class="relative w-24 h-24 button-fade-in bg-slate-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-teal-800 cursor-pointer"
            id="returnButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] w-14 h-14"
                src="{{ asset('assets/images/pptimages/reverse-icon.png') }}" />
        </a>

        <!-- Home Button -->
        <button
            class="relative w-24 h-24 button-fade-in bg-sky-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-teal-800 cursor-pointer"
            id="homeButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] w-14 h-14"
                src="{{ asset('assets/images/pptimages/home-icon.png') }}" />
        </button>

        <!-- Close Button -->
        <button class="relative w-24 h-24 button-fade-in cursor-pointer" id="closeButton">
            <div
                class="absolute inset-0 bg-red-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-red-900">
            </div>
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <div id="closeButtonText"
                class="absolute top-[16px] left-[30px] w-11 h-16 text-white text-6xl font-normal font-['Jua']">X
            </div>
        </button>

    </div>

    {{-- next Button --}}
    <div class="absolute bottom-[80px] z-[999]">

        <button
            class="cursor-pointer nextButton w-66 h-[75px] relative bg-[#F8A23A]  rounded-[30px]  overflow-hidden">
            <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
            <div class="absolute left-[8.22px] top-[3.17px] "> <img src="/assets/images/pptimages/Vector4.png" /> </div>
            <span class="absolute left-[80px] top-[18px] flex items-center stroke text-white text-5xl font-bold ">NEXT
            </span>
        </button>
    </div>
@endsection


@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const slides = document.querySelectorAll(".slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton"); // ✅ DONE button

            let currentSlide = 0;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                // ✅ Agar last slide hai → NEXT button hide, DONE show
                if (index === slides.length - 1) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            // ✅ NEXT buttons listener
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                });
            });

            // ✅ Return button
            returnButton.addEventListener("click", () => {
                if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('lightforms') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
