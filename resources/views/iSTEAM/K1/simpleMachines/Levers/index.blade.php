@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')

    <div id="topDiv" class="flex flex-col  items-center ">
        <div class="indexTitle  text-[55px]  stroke">How do Levers Work?</div>
        <div
            class="text-white">
            Explore the characteristics and uses <br>
            of a simple machine - Lever
            <br><br><br>

            <button
                class="nextButton ">
                            <img src="{{ asset('assets/images/pptimages/next-btn.png') }}" />

            </button>

        </div>
    </div>




 <div id="buttons" class="absolute  flex flex-row gap-6 ">

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
                    window.location.href = "{{ route('LeversSelection') }}";
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
