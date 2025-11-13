@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    <div id="topDiv" class="flex flex-col   items-center ">
        <div class="indexTitle    stroke">Umbrellas</div>
        <h2 class=" !text-white stroke ">
            Explore and learn about umbrellas;
            learn how to build an umbrella</h2>

        <button class="nextButton"> 
            <img src="{{ asset('assets/images/pptimages/next-btn.png') }}" />
        </button>
    </div>





    <div id="buttons" class="absolute  flex flex-row gap-6 ">

        <!-- Return Button -->
        <button id="returnButton">
            <img src="{{ asset('assets/images/pptimages/return.png') }}" />
        </button>

        <!-- Home Button -->
        <button id="homeButton">
            <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
        </button>

        <!-- Close Button -->
        <button id="closeButton">
            <img src="{{ asset('assets/images/pptimages/cancel.png') }}" />
        </button>

    </div>


@endsection

@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const nextButton = document.querySelector(".nextButton");
            const retutnButton = document.querySelector("#returnButton");

            if (nextButton) {
                nextButton.addEventListener("click", () => {
                    window.location.href = "{{ route('umbrellaSelection') }}";
                });
            }

             if (returnButton) {
                returnButton.addEventListener("click", () => {
                    window.location.href = "{{ route('K1structure') }}";
                });
            }
        });
    </script>
@endpush
