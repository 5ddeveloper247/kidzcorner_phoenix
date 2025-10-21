@extends('layout.master')
@section('title', 'Dynamic Presentation')


@section('content')

    <div id="topDiv" class="flex flex-col items-center h-full justify-between ">
        <div class="indexTitle  text-[55px]  stroke">Different Directions</div>
        <h2 class="text-2xl sm:text-3xl lg:text-6xl !text-white stroke">Identify “forward”, “backward”, “left” and
            “right” directions; learn to move according to directional signs</h2>
        <button
               class="nextButton" >       <img src="{{ asset('assets/images/pptimages/next-btn.png') }}" />

        </button>
    </div>


    <div id="buttons" class="absolute  flex flex-row ">
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
                    window.location.href = "{{ route('DifferentDirectionsSelection') }}";
                });
            }
              if (returnButton) {
                returnButton.addEventListener("click", () => {
                    window.location.href = "{{ route('BasicCoding') }}";
                });
            }
        });
    </script>
@endpush
