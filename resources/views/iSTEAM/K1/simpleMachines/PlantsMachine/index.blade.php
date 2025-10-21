@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')

    <div id="topDiv" class="flex flex-col  h-[90%] items-center gap-[15rem] ">
        <div class="indexTitle  text-[55px]  stroke">Water a Plant Machine</div>
        <div
            class="text-2xl sm:text-3xl lg:text-4xl text-white max-w-5xl leading-snug flex flex-col items-center space-x-[30px]">
            Build a Rube Goldberg Machine that includes
            a simple machine - Pulley
            <br><br><br>
            <button
                class="nextButton ">
                <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
                <div class="absolute left-[8.22px] top-[3.17px] "> <img src="/assets/images/pptimages/Vector4.png" /> </div>
                <span class="absolute left-[80px] top-[18px] flex items-center  text-white text-5xl font-bold stroke">NEXT
                </span>
            </button>

        </div>
    </div>





 <div id="buttons" class="absolute right-[60px] flex flex-row gap-6 ">

        <!-- Return Button -->
        <button
        id="returnButton">
            <img 
                src="{{ asset('assets/images/pptimages/return.png') }}" />
        </button>

        <!-- Home Button -->
        <button
          id="homeButton">
            <img 
                src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
        </button>

        <!-- Close Button -->
        <button id="closeButton">
           
<img  src="{{ asset('assets/images/pptimages/cancel.png') }}" />
   
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
                    window.location.href = "{{ route('PlantsMachineSelection') }}";
                });
            }
            if (returnButton) {
                returnButton.addEventListener("click", () => {
                    window.location.href = "{{ route('K1simpleMachines') }}";
                });
            }
        });
    </script>
@endpush
