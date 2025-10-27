@extends('layout.master')
@section('title', 'Dynamic Presentation')


@section('content')

    <div id="topDiv" class="flex flex-col   items-center ">
        <div class="indexTitle  text-[55px]  stroke">Buildings are Structures</div>
        <h2 class=" text-white stroke ">
            Explore how buildings are designed and built
            as a kind of structure; design and build a tall building</h2>

        <button class="nextButton">
            <img src="{{ asset('assets/images/pptimages/next-btn.png') }}" />

        </button>
    </div>



    <div id="buttons" class="absolute  flex flex-row ">

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
                    const returnButton = document.querySelector("#returnButton");


                    if (nextButton) {
                        nextButton.addEventListener("click", () => {
                            window.location.href = "{{ route('buildingsSelection') }}";
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
