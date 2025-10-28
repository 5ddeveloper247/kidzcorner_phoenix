@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    <div id="topDiv" class="flex flex-col  gap-20 justify-between h-full items-center ">
        <div class="indexTitle  text-[55px]  stroke">What is Aerodynamics? 2</div>
        <h2 class=" text-white ">
            Understand the concept of Thrust and Drag; <br>
            understand how aerodynamic forces affect the movement of
            aeroplanes</h2>

        <button
            class="nextButton w-66 h-[90px] relative bg-[#F8A23A]  rounded-[30px] outline outline-1 outline-yellow-700 overflow-hidden">
            <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
            <div class="absolute left-[8.22px] top-[3.17px] "> <img src="/assets/images/pptimages/Vector4.png" /> </div>
            <span class="flex items-center  text-white text-5xl  stroke">NEXT
            </span>
        </button>
    </div>




    <div id="buttons" class="absolute  flex flex-row ">
        <!-- Return Button -->
        <button class="relative w-24 h-24 button-fade-in bg-slate-500 rounded-[30px] " id="returnButton">
            <img 
                src="{{ asset('assets/images/pptimages/return.png') }}" />
        </button>

        <!-- Home Button -->
        <button class="relative w-24 h-24 button-fade-in bg-sky-500 rounded-[30px] " id="homeButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10" src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img  
                src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
        </button>

        <!-- Close Button -->
        <button class="relative w-24 h-24 bg-red-500 rounded-[30px] button-fade-in" id="closeButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10" src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <div id="closeButtonText"
                class=" w-11 h-16 text-white text-6xl">X
            </div>
        </button>

    </div>


@endsection

@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const nextButton = document.querySelector(".nextButton");
            const returnButton = document.querySelector("#returnButton");

            if (nextButton) {
                nextButton.addEventListener("click", () => {
                    window.location.href = "{{ route('Aerodynamics2Selection') }}";
                });
            }
            if (returnButton) {
                returnButton.addEventListener("click", () => {
                    window.location.href = "{{ route('k2Aerodynamics') }}";
                });
            }
        });
    </script>
@endpush
