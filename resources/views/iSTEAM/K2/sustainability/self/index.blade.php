@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    <div id="topDiv" class="flex flex-col  gap-[1vw] justify-center items-center ">
        <div class="indexTitle stroke">Being Self-Sufficient</div>
        <h2 class="text-2xl sm:text-3xl lg:text-5xl text-white stroke ">
            Understand the meaning of self-sufficient; <br>
            Learn how being self-sufficient helps the environment</h2>

        {{-- next Button --}}
        <div class="down-btn-container">
            <button class="nextButton">
                <img src="{{ asset('assets/images/pptimages/next-btn.png') }}" />
            </button>
        </div>
    </div>




    <div id="buttons" class="absolute flex flex-row gap-6 z-90">
        <!-- Return Button (hidden initially) -->
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
            const returnButton = document.querySelector("#returnButton");

            if (nextButton) {
                nextButton.addEventListener("click", () => {
                    window.location.href = "{{ route('selfSelection') }}";
                });
            }
            if (returnButton) {
                returnButton.addEventListener("click", () => {
                    window.location.href = "{{ route('k2sustainability') }}";
                });
            }
        });
    </script>
@endpush
