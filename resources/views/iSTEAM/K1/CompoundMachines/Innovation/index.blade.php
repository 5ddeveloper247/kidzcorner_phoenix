@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')

    <div id="topDiv" class="flex flex-col items-center ">
        <div class="  text-[#F7B94A] text-[50px] font-extrabold stroke">An Innovation</div>
        <h2 class="text-2xl sm:text-3xl lg:text-xl text-white stroke ">Build a Rube Goldberg Machine that
            includes at least three simple machines</h2>

        <button
                class="nextButton"  >     <img src="{{ asset('assets/images/pptimages/next-btn.png') }}" />

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
                    window.location.href = "{{ route('InnovationSelection') }}";
                });
            }
            if (returnButton) {
                returnButton.addEventListener("click", () => {
                    window.location.href = "{{ route('K1CompoundMachines') }}";
                });
            }
        });
    </script>
@endpush
