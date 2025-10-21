@extends('layout.master')
@section('title', 'Dynamic Presentation')

@push('style')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endpush



@section('content')

    <div id="topDiv" class="flex flex-col   items-center ">
        <div class="  text-[#F7B94A] text-[50px] font-extrabold stroke">What is Coding?</div>
        <h2 class="text-2xl sm:text-3xl lg:text-5xl text-white stroke ">Explore and learn about basic coding;
            learn how to handle a robot and a tablet with care</h2>

        <button
                class="nextButton"  >     <img src="{{ asset('assets/images/pptimages/next-btn.png') }}" />

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

            if (nextButton) {
                nextButton.addEventListener("click", () => {
                    window.location.href = "{{ route('wCodingSelection') }}";
                });
            }
            if (returnButton) {
                returnButton.addEventListener("click", () => {
                    window.location.href = "{{ route('coding') }}";
                });
            }
        });
    </script>
@endpush
