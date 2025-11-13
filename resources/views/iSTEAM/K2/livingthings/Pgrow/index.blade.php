    @extends('layout.master')
    @section('title', 'Dynamic Presentation')

    @push('style')
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <style>
            button {
                cursor: pointer;
            }

            .stroke {

                -webkit-text-stroke: 2px #533705;
            }

            .note {
                font-size: 24px;
                font-weight: 400;
                color: white;
            }

            a {
                cursor: pointer;

            }
        </style>
    @endpush



    @section('content')

        <div id="topDiv" class="flex flex-col   items-center ">
            <div class="indexTitle    stroke">How Plants Grow?</div>
            <h2 class=" !text-white stroke ">
                Learn how to grow a plant from a see; <br>
                how to regrow green onions; <br>
                observe how plants grow</h2>

            <button class="nextButton">
                <img src="{{ asset('assets/images/pptimages/next-btn.png') }}" />
            </button>
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
                        window.location.href = "{{ route('PgrowSelection') }}";
                    });
                }
                if (returnButton) {
                    returnButton.addEventListener("click", () => {
                        window.location.href = "{{ route('k2livingthings') }}";
                    });
                }
            });
        </script>
    @endpush
