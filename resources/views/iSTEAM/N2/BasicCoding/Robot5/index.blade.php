@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')

    <div id="topDiv" class="flex flex-col items-center ">
        <div class="indexTitle stroke">Programme A Robot 5</div>
        <h2 class=" lg:text-6xl !text-white stroke">Create a simple story and turn it into a
            programming game; programme a robot to move based on a story</h2>
        <button
               class="nextButton" >       <img src="{{ asset('assets/images/pptimages/next-btn.png') }}" />

        </button>
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

            if (nextButton) {
                nextButton.addEventListener("click", () => {
                    window.location.href = "{{ route('Robot5Selection') }}";
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
