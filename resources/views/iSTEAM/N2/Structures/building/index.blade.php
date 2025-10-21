@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')

    <div id="topDiv" class="flex flex-col items-center ">
        <h2 class="indexTitle text-[55px] stroke ">Buildings Around Us</h2>
        <h2 class="!text-white title">Explore different types of buildings; <br>
learn about the different building designs; <br>
design and build a building.</h2>

        <button
            class="cursor-pointer nextButton  ">
                      <img src="{{ asset('assets/images/pptimages/next-btn.png') }}" />

        </button>

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
          class="relative w-24 h-24  bg-[#2D9CDB] rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-[#184E6D] flex justify-center items-center"
            id="homeButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10" src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] w-14 h-14"
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
            const returnButton = document.getElementById("returnButton");

            if (nextButton) {
                nextButton.addEventListener("click", () => {
                    window.location.href = "{{ route('n2buildingSelection') }}";
                });
            }
            if (returnButton) {
                returnButton.addEventListener("click", () => {
                    window.location.href = "{{ route('Structures') }}";
                });
            }
        });
    </script>
@endpush
