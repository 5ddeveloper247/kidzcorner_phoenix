@extends('layout.master')
@section('title', 'Dynamic Presentation')



@section('content')

    <div id="topDiv" class="flex flex-col items-center ">
        <div class="indexTitle  text-[55px]  stroke">Coding Challenge (1)</div>
        <h2 class="text-2xl sm:text-3xl lg:text-5xl text-white stroke ">
            Plan a route for a purpose; <br>
            programme a robot to move according <br>
            to the planned route</h2>

        <button
                class="nextButton"  >     <img src="{{ asset('assets/images/pptimages/next-btn.png') }}" />

        </button>
    </div>





    <div id="buttons" class="absolute  flex flex-row ">

        <!-- Return Button -->
        <button
            class="relative w-24 h-24 button-fade-in bg-[#59967D] rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-[#22664A] flex justify-center items-center"
            id="returnButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10" src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img   src="{{ asset('assets/images/pptimages/reverse-icon.png') }}" />
        </button>

        <!-- Home Button -->
        <button            id="homeButton">>
            <img  src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
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

            if (nextButton) {
                nextButton.addEventListener("click", () => {
                    window.location.href = "{{ route('challenge1Selection') }}";
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
