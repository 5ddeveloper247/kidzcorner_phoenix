@extends('layout.master')
@section('title', 'Dynamic Presentation')


@section('content')

    <div id="topDiv" class="flex flex-col   items-center ">
        <div class="  text-[#F7B94A] text-[50px] font-extrabold stroke">Coding Challenge (3)</div>
        <h2 class="text-2xl sm:text-3xl lg:text-5xl text-white stroke ">
            Plan a route for a purpose; <br>
            programme a robot to move according <br>
            to the planned route</h2>

        <button
                class="nextButton"  >     <img src="{{ asset('assets/images/pptimages/next-btn.png') }}" />

        </button>
    </div>





    <div id="buttons" class="absoluteright-[60px] flex flex-row gap-6 z-40">

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
                    window.location.href = "{{ route('challenge3Selection') }}";
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
