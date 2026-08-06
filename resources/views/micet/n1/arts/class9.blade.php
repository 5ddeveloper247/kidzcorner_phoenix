@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = false;
    $showVector1 = true;
    $showVector5 = false;
    $showMascot = true;
@endphp


@push('styles')
    <style>
        .p-note {
            font-size: 1.2vw;
            color: white !important;
        }

        .panel-title {
            color: #F7B94A;
            font-size: 2.5vw;
        }

        .ptitle {
            color: #F7B94A;
            font-size: 1.7vw;
        }

        .panel-ul {
            color: white;
            font-size: 1.4vw;
            text-align: left;
        }
    </style>
@endpush

@section('content')

    {{-- panel 1 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Combining Shapes</h1>
        <div class="flex items-center">
            <img src="{{ asset('assets/images/micet/n1/toys/b1.png') }}" class="h-[8vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b2.png') }}" class="h-[8vw]" />
        </div>

        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul">
            <li>To know that different shapes can be combined to form a
                variety of objects.</li>
            <li>To identify the shapes of a few objects.</li>
            <li>To combine different shapes to form some objects.</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: Combining Shapes</h1>

        <div>
            <h3 class="ptitle">Preparations</h3>

            <ul class="list-disc panel-ul">
                <li>Thematic Activity Book</li>
                <li>Blocks of different shapes</li>
            </ul>
        </div>
    </div>

    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: Combining Shapes</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[45vw]">
                <li>Ask children: "Do you know that we can combine different shapes to form a
                    variety of things?"</li>
                <li>Let's see some examples below.</li>
            </ol>
        </div>

    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Combining Shapes</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children:
                <ul class="list-disc">
                    <li>What is this? [Accept all logical answers and let children talk about it.] </li>
                    <li>What shapes are used to form it? </li>
                </ul>
            </li>
        </ol>

        <div class="flex w-full justify-between items-center">

            <img src="{{ asset('assets/images/micet/n1/shapes/class9/c1.png') }}" class="w-[17vw]" />

            <div class="flex flex-col items-center">

                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center rounded-full text-white text-[1vw]">
                    circle
                </div>
                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    square
                </div>
                <div class="w-[8vw] h-[4vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    rectangle
                </div>
                <div class="relative w-36 h-28">
                    <svg viewBox="0 0 100 90" class="absolute inset-0 w-full h-full">

                        <polygon points="50,5 5,85 95,85" fill="none" stroke="white" stroke-width="2" />
                    </svg>

                    <div class="absolute bottom-3 left-1/2 -translate-x-1/2">
                        <span class="text-white text-[1vw]">triangle</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Combining Shapes</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children:
                <ul class="list-disc">
                    <li>What is this? [Accept all logical answers and let children talk about it.] </li>
                    <li>What shapes are used to form it? </li>
                </ul>
            </li>
        </ol>

        <div class="flex w-full justify-between items-center">

            <img src="{{ asset('assets/images/micet/n1/shapes/class9/c1.png') }}" class="w-[17vw]" />

            <div class="flex flex-col items-center relative">
                <img src="{{ asset('assets/images/micet/n1/shapes/class9/tick.png') }}"
                    class="w-[3vw] absolute left-[-3vw] top-[1vw]" />
                <img src="{{ asset('assets/images/micet/n1/shapes/class9/tick.png') }}"
                    class="w-[3vw] absolute left-[-3vw] bottom-[1vw]" />

                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center rounded-full text-white text-[1vw]">
                    circle
                </div>
                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    square
                </div>
                <div class="w-[8vw] h-[4vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    rectangle
                </div>
                <div class="relative w-36 h-28">
                    <svg viewBox="0 0 100 90" class="absolute inset-0 w-full h-full">

                        <polygon points="50,5 5,85 95,85" fill="none" stroke="white" stroke-width="2" />
                    </svg>

                    <div class="absolute bottom-3 left-1/2 -translate-x-1/2">
                        <span class="text-white text-[1vw]">triangle</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Combining Shapes</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children:
                <ul class="list-disc">
                    <li>What is this? [Accept all logical answers and let children talk about it.] </li>
                    <li>What shapes are used to form it? </li>
                </ul>
            </li>
        </ol>

        <div class="flex w-full justify-between items-center">

            <img src="{{ asset('assets/images/micet/n1/shapes/class9/c2.png') }}" class="h-[15vw]" />

            <div class="flex flex-col items-center">

                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center rounded-full text-white text-[1vw]">
                    circle
                </div>
                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    square
                </div>
                <div class="w-[8vw] h-[4vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    rectangle
                </div>
                <div class="relative w-36 h-28">
                    <svg viewBox="0 0 100 90" class="absolute inset-0 w-full h-full">

                        <polygon points="50,5 5,85 95,85" fill="none" stroke="white" stroke-width="2" />
                    </svg>

                    <div class="absolute bottom-3 left-1/2 -translate-x-1/2">
                        <span class="text-white text-[1vw]">triangle</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Combining Shapes</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children:
                <ul class="list-disc">
                    <li>What is this? [Accept all logical answers and let children talk about it.] </li>
                    <li>What shapes are used to form it? </li>
                </ul>
            </li>
        </ol>

        <div class="flex w-full justify-between items-center">

            <img src="{{ asset('assets/images/micet/n1/shapes/class9/c2.png') }}" class="h-[15vw]" />

            <div class="flex flex-col items-center relative">
                <img src="{{ asset('assets/images/micet/n1/shapes/class9/tick.png') }}"
                    class="w-[3vw] absolute left-[-3vw] top-[6vw]" />
                <img src="{{ asset('assets/images/micet/n1/shapes/class9/tick.png') }}"
                    class="w-[3vw] absolute left-[-3vw] bottom-[1vw]" />

                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center rounded-full text-white text-[1vw]">
                    circle
                </div>
                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    square
                </div>
                <div class="w-[8vw] h-[4vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    rectangle
                </div>
                <div class="relative w-36 h-28">
                    <svg viewBox="0 0 100 90" class="absolute inset-0 w-full h-full">

                        <polygon points="50,5 5,85 95,85" fill="none" stroke="white" stroke-width="2" />
                    </svg>

                    <div class="absolute bottom-3 left-1/2 -translate-x-1/2">
                        <span class="text-white text-[1vw]">triangle</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Combining Shapes</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children:
                <ul class="list-disc">
                    <li>What is this? [Accept all logical answers and let children talk about it.] </li>
                    <li>What shapes are used to form it? </li>
                </ul>
            </li>
        </ol>

        <div class="flex w-full justify-between items-center">

            <img src="{{ asset('assets/images/micet/n1/shapes/class9/c3.png') }}" class="h-[15vw]" />

            <div class="flex flex-col items-center">

                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center rounded-full text-white text-[1vw]">
                    circle
                </div>
                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    square
                </div>
                <div class="w-[8vw] h-[4vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    rectangle
                </div>
                <div class="relative w-36 h-28">
                    <svg viewBox="0 0 100 90" class="absolute inset-0 w-full h-full">

                        <polygon points="50,5 5,85 95,85" fill="none" stroke="white" stroke-width="2" />
                    </svg>

                    <div class="absolute bottom-3 left-1/2 -translate-x-1/2">
                        <span class="text-white text-[1vw]">triangle</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Combining Shapes</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children:
                <ul class="list-disc">
                    <li>What is this? [Accept all logical answers and let children talk about it.] </li>
                    <li>What shapes are used to form it? </li>
                </ul>
            </li>
        </ol>

        <div class="flex w-full justify-between items-center">

            <img src="{{ asset('assets/images/micet/n1/shapes/class9/c3.png') }}" class="h-[15vw]" />

            <div class="flex flex-col items-center relative">
                <img src="{{ asset('assets/images/micet/n1/shapes/class9/tick.png') }}"
                    class="w-[3vw] absolute left-[-3vw] top-[1vw]" />
                <img src="{{ asset('assets/images/micet/n1/shapes/class9/tick.png') }}"
                    class="w-[3vw] absolute left-[-3vw] bottom-[8vw]" />

                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center rounded-full text-white text-[1vw]">
                    circle
                </div>
                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    square
                </div>
                <div class="w-[8vw] h-[4vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    rectangle
                </div>
                <div class="relative w-36 h-28">
                    <svg viewBox="0 0 100 90" class="absolute inset-0 w-full h-full">

                        <polygon points="50,5 5,85 95,85" fill="none" stroke="white" stroke-width="2" />
                    </svg>

                    <div class="absolute bottom-3 left-1/2 -translate-x-1/2">
                        <span class="text-white text-[1vw]">triangle</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Combining Shapes</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children:
                <ul class="list-disc">
                    <li>What is this? [Accept all logical answers and let children talk about it.] </li>
                    <li>What shapes are used to form it? </li>
                </ul>
            </li>
        </ol>

        <div class="flex w-full justify-between items-center">

            <img src="{{ asset('assets/images/micet/n1/shapes/class9/c4.png') }}" class="w-[17vw]" />

            <div class="flex flex-col items-center">

                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center rounded-full text-white text-[1vw]">
                    circle
                </div>
                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    square
                </div>
                <div class="w-[8vw] h-[4vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    rectangle
                </div>
                <div class="relative w-36 h-28">
                    <svg viewBox="0 0 100 90" class="absolute inset-0 w-full h-full">

                        <polygon points="50,5 5,85 95,85" fill="none" stroke="white" stroke-width="2" />
                    </svg>

                    <div class="absolute bottom-3 left-1/2 -translate-x-1/2">
                        <span class="text-white text-[1vw]">triangle</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Combining Shapes</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children:
                <ul class="list-disc">
                    <li>What is this? [Accept all logical answers and let children talk about it.] </li>
                    <li>What shapes are used to form it? </li>
                </ul>
            </li>
        </ol>

        <div class="flex w-full justify-between items-center">

            <img src="{{ asset('assets/images/micet/n1/shapes/class9/c4.png') }}" class="w-[17vw]" />

            <div class="flex flex-col items-center relative">
                <img src="{{ asset('assets/images/micet/n1/shapes/class9/tick.png') }}"
                    class="w-[3vw] absolute left-[-3vw] top-[1vw]" />
                <img src="{{ asset('assets/images/micet/n1/shapes/class9/tick.png') }}"
                    class="w-[3vw] absolute left-[-3vw] bottom-[12vw]" />

                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center rounded-full text-white text-[1vw]">
                    circle
                </div>
                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    square
                </div>
                <div class="w-[8vw] h-[4vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    rectangle
                </div>
                <div class="relative w-36 h-28">
                    <svg viewBox="0 0 100 90" class="absolute inset-0 w-full h-full">

                        <polygon points="50,5 5,85 95,85" fill="none" stroke="white" stroke-width="2" />
                    </svg>

                    <div class="absolute bottom-3 left-1/2 -translate-x-1/2">
                        <span class="text-white text-[1vw]">triangle</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Combining Shapes</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children:
                <ul class="list-disc">
                    <li>What is this? [Accept all logical answers and let children talk about it.] </li>
                    <li>What shapes are used to form it? </li>
                </ul>
            </li>
        </ol>

        <div class="flex w-full justify-between items-center">

            <img src="{{ asset('assets/images/micet/n1/shapes/class9/c5.png') }}" class="w-[17vw]" />

            <div class="flex flex-col items-center">

                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center rounded-full text-white text-[1vw]">
                    circle
                </div>
                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    square
                </div>
                <div class="w-[8vw] h-[4vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    rectangle
                </div>
                <div class="relative w-36 h-28">
                    <svg viewBox="0 0 100 90" class="absolute inset-0 w-full h-full">

                        <polygon points="50,5 5,85 95,85" fill="none" stroke="white" stroke-width="2" />
                    </svg>

                    <div class="absolute bottom-3 left-1/2 -translate-x-1/2">
                        <span class="text-white text-[1vw]">triangle</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Combining Shapes</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children:
                <ul class="list-disc">
                    <li>What is this? [Accept all logical answers and let children talk about it.] </li>
                    <li>What shapes are used to form it? </li>
                </ul>
            </li>
        </ol>

        <div class="flex w-full justify-between items-center">

            <img src="{{ asset('assets/images/micet/n1/shapes/class9/c5.png') }}" class="w-[17vw]" />

            <div class="flex flex-col items-center relative">
                <img src="{{ asset('assets/images/micet/n1/shapes/class9/tick.png') }}"
                    class="w-[3vw] absolute left-[-3vw] top-[1vw]" />
                <img src="{{ asset('assets/images/micet/n1/shapes/class9/tick.png') }}"
                    class="w-[3vw] absolute left-[-3vw] bottom-[1vw]" />

                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center rounded-full text-white text-[1vw]">
                    circle
                </div>
                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    square
                </div>
                <div class="w-[8vw] h-[4vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    rectangle
                </div>
                <div class="relative w-36 h-28">
                    <svg viewBox="0 0 100 90" class="absolute inset-0 w-full h-full">

                        <polygon points="50,5 5,85 95,85" fill="none" stroke="white" stroke-width="2" />
                    </svg>

                    <div class="absolute bottom-3 left-1/2 -translate-x-1/2">
                        <span class="text-white text-[1vw]">triangle</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Combining Shapes</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children:
                <ul class="list-disc">
                    <li>What is this? [Accept all logical answers and let children talk about it.] </li>
                    <li>What shapes are used to form it? </li>
                </ul>
            </li>
        </ol>

        <div class="flex w-full justify-between items-center">

            <img src="{{ asset('assets/images/micet/n1/shapes/class9/c6.png') }}" class="w-[17vw]" />

            <div class="flex flex-col items-center">

                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center rounded-full text-white text-[1vw]">
                    circle
                </div>
                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    square
                </div>
                <div class="w-[8vw] h-[4vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    rectangle
                </div>
                <div class="relative w-36 h-28">
                    <svg viewBox="0 0 100 90" class="absolute inset-0 w-full h-full">

                        <polygon points="50,5 5,85 95,85" fill="none" stroke="white" stroke-width="2" />
                    </svg>

                    <div class="absolute bottom-3 left-1/2 -translate-x-1/2">
                        <span class="text-white text-[1vw]">triangle</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Combining Shapes</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children:
                <ul class="list-disc">
                    <li>What is this? [Accept all logical answers and let children talk about it.] </li>
                    <li>What shapes are used to form it? </li>
                </ul>
            </li>
        </ol>

        <div class="flex w-full justify-between items-center">

            <img src="{{ asset('assets/images/micet/n1/shapes/class9/c6.png') }}" class="w-[17vw]" />

            <div class="flex flex-col items-center relative">
                <img src="{{ asset('assets/images/micet/n1/shapes/class9/tick.png') }}"
                    class="w-[3vw] absolute left-[-3vw] top-0" />
                <img src="{{ asset('assets/images/micet/n1/shapes/class9/tick.png') }}"
                    class="w-[3vw] absolute left-[-3vw] bottom-[1vw]" />
                <img src="{{ asset('assets/images/micet/n1/shapes/class9/tick.png') }}"
                    class="w-[3vw] absolute left-[-3vw] top-[6vw]" />

                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center rounded-full text-white text-[1vw]">
                    circle
                </div>
                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    square
                </div>
                <div class="w-[8vw] h-[4vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    rectangle
                </div>
                <div class="relative w-36 h-28">
                    <svg viewBox="0 0 100 90" class="absolute inset-0 w-full h-full">

                        <polygon points="50,5 5,85 95,85" fill="none" stroke="white" stroke-width="2" />
                    </svg>

                    <div class="absolute bottom-3 left-1/2 -translate-x-1/2">
                        <span class="text-white text-[1vw]">triangle</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Combining Shapes</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children:
                <ul class="list-disc">
                    <li>What is this? [Accept all logical answers and let children talk about it.] </li>
                    <li>What shapes are used to form it? </li>
                </ul>
            </li>
        </ol>

        <div class="flex w-full justify-between items-center">

            <img src="{{ asset('assets/images/micet/n1/shapes/class9/c7.png') }}" class="w-[17vw]" />

            <div class="flex flex-col items-center">

                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center rounded-full text-white text-[1vw]">
                    circle
                </div>
                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    square
                </div>
                <div class="w-[8vw] h-[4vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    rectangle
                </div>
                <div class="relative w-36 h-28">
                    <svg viewBox="0 0 100 90" class="absolute inset-0 w-full h-full">

                        <polygon points="50,5 5,85 95,85" fill="none" stroke="white" stroke-width="2" />
                    </svg>

                    <div class="absolute bottom-3 left-1/2 -translate-x-1/2">
                        <span class="text-white text-[1vw]">triangle</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Combining Shapes</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children:
                <ul class="list-disc">
                    <li>What is this? [Accept all logical answers and let children talk about it.] </li>
                    <li>What shapes are used to form it? </li>
                </ul>
            </li>
        </ol>

        <div class="flex w-full justify-between items-center">

            <img src="{{ asset('assets/images/micet/n1/shapes/class9/c7.png') }}" class="w-[17vw]" />

            <div class="flex flex-col items-center relative">
                <img src="{{ asset('assets/images/micet/n1/shapes/class9/tick.png') }}"
                    class="w-[3vw] absolute left-[-3vw] top-[1vw]" />
                <img src="{{ asset('assets/images/micet/n1/shapes/class9/tick.png') }}"
                    class="w-[3vw] absolute left-[-3vw] top-[6vw]" />
                <img src="{{ asset('assets/images/micet/n1/shapes/class9/tick.png') }}"
                    class="w-[3vw] absolute left-[-3vw] bottom-[8vw]" />

                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center rounded-full text-white text-[1vw]">
                    circle
                </div>
                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    square
                </div>
                <div class="w-[8vw] h-[4vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    rectangle
                </div>
                <div class="relative w-36 h-28">
                    <svg viewBox="0 0 100 90" class="absolute inset-0 w-full h-full">

                        <polygon points="50,5 5,85 95,85" fill="none" stroke="white" stroke-width="2" />
                    </svg>

                    <div class="absolute bottom-3 left-1/2 -translate-x-1/2">
                        <span class="text-white text-[1vw]">triangle</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Combining Shapes</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children:
                <ul class="list-disc">
                    <li>What is this? [Accept all logical answers and let children talk about it.] </li>
                    <li>What shapes are used to form it? </li>
                </ul>
            </li>
        </ol>

        <div class="flex w-full justify-between items-center">

            <img src="{{ asset('assets/images/micet/n1/shapes/class9/c8.png') }}" class="w-[17vw]" />

            <div class="flex flex-col items-center">

                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center rounded-full text-white text-[1vw]">
                    circle
                </div>
                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    square
                </div>
                <div class="w-[8vw] h-[4vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    rectangle
                </div>
                <div class="relative w-36 h-28">
                    <svg viewBox="0 0 100 90" class="absolute inset-0 w-full h-full">

                        <polygon points="50,5 5,85 95,85" fill="none" stroke="white" stroke-width="2" />
                    </svg>

                    <div class="absolute bottom-3 left-1/2 -translate-x-1/2">
                        <span class="text-white text-[1vw]">triangle</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Combining Shapes</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children:
                <ul class="list-disc">
                    <li>What is this? [Accept all logical answers and let children talk about it.] </li>
                    <li>What shapes are used to form it? </li>
                </ul>
            </li>
        </ol>

        <div class="flex w-full justify-between items-center">

            <img src="{{ asset('assets/images/micet/n1/shapes/class9/c8.png') }}" class="w-[17vw]" />

            <div class="flex flex-col items-center relative">
                <img src="{{ asset('assets/images/micet/n1/shapes/class9/tick.png') }}"
                    class="w-[3vw] absolute left-[-3vw] top-[6vw]" />
                <img src="{{ asset('assets/images/micet/n1/shapes/class9/tick.png') }}"
                    class="w-[3vw] absolute left-[-3vw] bottom-[8vw]" />
                <img src="{{ asset('assets/images/micet/n1/shapes/class9/tick.png') }}"
                    class="w-[3vw] absolute left-[-3vw] bottom-[1vw]" />

                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center rounded-full text-white text-[1vw]">
                    circle
                </div>
                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    square
                </div>
                <div class="w-[8vw] h-[4vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    rectangle
                </div>
                <div class="relative w-36 h-28">
                    <svg viewBox="0 0 100 90" class="absolute inset-0 w-full h-full">

                        <polygon points="50,5 5,85 95,85" fill="none" stroke="white" stroke-width="2" />
                    </svg>

                    <div class="absolute bottom-3 left-1/2 -translate-x-1/2">
                        <span class="text-white text-[1vw]">triangle</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Combining Shapes</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children:
                <ul class="list-disc">
                    <li>What is this? [Accept all logical answers and let children talk about it.] </li>
                    <li>What shapes are used to form it? </li>
                </ul>
            </li>
        </ol>

        <div class="flex w-full justify-between items-center">

            <img src="{{ asset('assets/images/micet/n1/shapes/class9/c9.png') }}" class="w-[17vw]" />

            <div class="flex flex-col items-center">

                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center rounded-full text-white text-[1vw]">
                    circle
                </div>
                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    square
                </div>
                <div class="w-[8vw] h-[4vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    rectangle
                </div>
                <div class="relative w-36 h-28">
                    <svg viewBox="0 0 100 90" class="absolute inset-0 w-full h-full">

                        <polygon points="50,5 5,85 95,85" fill="none" stroke="white" stroke-width="2" />
                    </svg>

                    <div class="absolute bottom-3 left-1/2 -translate-x-1/2">
                        <span class="text-white text-[1vw]">triangle</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Combining Shapes</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children:
                <ul class="list-disc">
                    <li>What is this? [Accept all logical answers and let children talk about it.] </li>
                    <li>What shapes are used to form it? </li>
                </ul>
            </li>
        </ol>

        <div class="flex w-full justify-between items-center">

            <img src="{{ asset('assets/images/micet/n1/shapes/class9/c9.png') }}" class="w-[17vw]" />

            <div class="flex flex-col items-center relative">
                <img src="{{ asset('assets/images/micet/n1/shapes/class9/tick.png') }}"
                    class="w-[3vw] absolute left-[-3vw] top-[1vw]" />
                <img src="{{ asset('assets/images/micet/n1/shapes/class9/tick.png') }}"
                    class="w-[3vw] absolute left-[-3vw] top-[6vw]" />
                <img src="{{ asset('assets/images/micet/n1/shapes/class9/tick.png') }}"
                    class="w-[3vw] absolute left-[-3vw] bottom-[8vw]" />
                <img src="{{ asset('assets/images/micet/n1/shapes/class9/tick.png') }}"
                    class="w-[3vw] absolute left-[-3vw] bottom-[1vw]" />

                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center rounded-full text-white text-[1vw]">
                    circle
                </div>
                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    square
                </div>
                <div class="w-[8vw] h-[4vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    rectangle
                </div>
                <div class="relative w-36 h-28">
                    <svg viewBox="0 0 100 90" class="absolute inset-0 w-full h-full">

                        <polygon points="50,5 5,85 95,85" fill="none" stroke="white" stroke-width="2" />
                    </svg>

                    <div class="absolute bottom-3 left-1/2 -translate-x-1/2">
                        <span class="text-white text-[1vw]">triangle</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Combining Shapes</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children:
                <ul class="list-disc">
                    <li>What is this? [Accept all logical answers and let children talk about it.] </li>
                    <li>What shapes are used to form it? </li>
                </ul>
            </li>
        </ol>

        <div class="flex w-full justify-between items-center">

            <img src="{{ asset('assets/images/micet/n1/shapes/class9/c10.png') }}" class="h-[17vw]" />

            <div class="flex flex-col items-center">

                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center rounded-full text-white text-[1vw]">
                    circle
                </div>
                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    square
                </div>
                <div class="w-[8vw] h-[4vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    rectangle
                </div>
                <div class="relative w-36 h-28">
                    <svg viewBox="0 0 100 90" class="absolute inset-0 w-full h-full">

                        <polygon points="50,5 5,85 95,85" fill="none" stroke="white" stroke-width="2" />
                    </svg>

                    <div class="absolute bottom-3 left-1/2 -translate-x-1/2">
                        <span class="text-white text-[1vw]">triangle</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Combining Shapes</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children:
                <ul class="list-disc">
                    <li>What is this? [Accept all logical answers and let children talk about it.] </li>
                    <li>What shapes are used to form it? </li>
                </ul>
            </li>
        </ol>

        <div class="flex w-full justify-between items-center">

            <img src="{{ asset('assets/images/micet/n1/shapes/class9/c10.png') }}" class="h-[17vw]" />

            <div class="flex flex-col items-center relative">
                <img src="{{ asset('assets/images/micet/n1/shapes/class9/tick.png') }}"
                    class="w-[3vw] absolute left-[-3vw] top-[1vw]" />
                <img src="{{ asset('assets/images/micet/n1/shapes/class9/tick.png') }}"
                    class="w-[3vw] absolute left-[-3vw] top-[6vw]" />
                <img src="{{ asset('assets/images/micet/n1/shapes/class9/tick.png') }}"
                    class="w-[3vw] absolute left-[-3vw] bottom-[8vw]" />
                <img src="{{ asset('assets/images/micet/n1/shapes/class9/tick.png') }}"
                    class="w-[3vw] absolute left-[-3vw] bottom-[1vw]" />

                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center rounded-full text-white text-[1vw]">
                    circle
                </div>
                <div class="w-[5vw] h-[5vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    square
                </div>
                <div class="w-[8vw] h-[4vw] border-[.25vw] border-white flex items-center justify-center text-white text-[1vw]">
                    rectangle
                </div>
                <div class="relative w-36 h-28">
                    <svg viewBox="0 0 100 90" class="absolute inset-0 w-full h-full">

                        <polygon points="50,5 5,85 95,85" fill="none" stroke="white" stroke-width="2" />
                    </svg>

                    <div class="absolute bottom-3 left-1/2 -translate-x-1/2">
                        <span class="text-white text-[1vw]">triangle</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Combining Shapes</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Have children use their creativity and imagination to combine different shape
                stickers to form an object in the Thematic Activity Book.</li>
        </ol>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: Combining Shapes</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Have children take turns to show the objects that they
                    created. Have them name the object as well as the shapes
                    used to form it.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to know that different shapes can be combined to
                    form a variety of objects.</li>
                <li>Able to identify the shapes of a few objects.</li>
                <li>Able to combine different shapes to form some objects.</li>
            </ul>
        </div>
    </div>






    {{-- =============================================== --}}
    {{-- All Buttons --}}
    <div id="buttons" class="absolute flex flex-row gap-6 z-90">

        <!-- Home Button -->
        <button id="returnButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/return-btn.png') }}" />
        </button>

        <!-- return Button -->
        <button id="homeButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/home-btn.png') }}" />
        </button>

        <!-- Close Button -->
        <button id="closeButton">

            <img src="{{ asset('assets/images/phonicsl1/global/btns/cancel.png') }}" />
        </button>
    </div>

    {{-- Next and Done Buttons --}}
    <div class="down-btn-container">
        <button class="nextButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/next-btn.png') }}" />
        </button>
    </div>

    <div class="down-btn-container">
        <button class="doneButton hidden">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/done.png') }}" />
        </button>
    </div>
@endsection

@push('script')
    <script>
        // SLIDE NAVIGATION SYSTEM
        document.body.dataset.homeRoute = "{{ url('/micet') }}";

        document.addEventListener("DOMContentLoaded", function() {

            // Get all elements
            const slides = document.querySelectorAll(".phonics-panel");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");
            const infoButtons = document.querySelectorAll("[class*='info-btn']");
            const soundButtons = document.querySelectorAll("[id^='soundButton']");

            // URLs for navigation
            const returnURL = "{{ url('/micet/n1/arts/index') }}";
            const doneURL = "{{ url('/micet/n1/arts/index') }}";

            // Track current position
            let currentSlide = 0;
            let isInSpecialMode = false;
            let returnToSlide = null;
            let specialSlideClass = null;

            // Audio management
            let currentAudio = null;

            // HELPER FUNCTIONS

            function isSpecialSlide(slide) {
                const classList = Array.from(slide.classList);
                return classList.some(cls => /^info-panel-\d+$/.test(cls));
            }

            function getSlideTypeFromButton(button) {
                const classList = Array.from(button.classList);

                for (let className of classList) {
                    if (className.startsWith('info-btn')) {
                        const number = className.replace('info-btn', '');
                        return 'info-panel-' + number;
                    }
                }
                return null;
            }

            function hasMoreSpecialSlides(fromIndex) {
                if (!specialSlideClass) return false;

                for (let i = fromIndex + 1; i < slides.length; i++) {
                    if (slides[i].classList.contains(specialSlideClass)) {
                        return true;
                    }
                }
                return false;
            }

            function isLastSlide(slideIndex) {
                if (isInSpecialMode && !hasMoreSpecialSlides(slideIndex)) return true;

                if (!isInSpecialMode) {
                    for (let i = slideIndex + 1; i < slides.length; i++) {
                        if (!isSpecialSlide(slides[i])) {
                            return false;
                        }
                    }
                    return true;
                }

                return false;
            }

            // AUDIO FUNCTIONS

            function stopCurrentAudio() {
                if (currentAudio) {
                    currentAudio.pause();
                    currentAudio.currentTime = 0;
                }
            }

            function playSlideAudio(slideIndex) {
                // Stop any currently playing audio
                stopCurrentAudio();

                // Get the slide element
                const slide = slides[slideIndex];

                // Check if the slide itself has data-slide-audio attribute
                let audioSrc = slide.getAttribute('data-slide-audio');

                // If not, look for element inside the slide with data-slide-audio attribute
                if (!audioSrc) {
                    const audioElement = slide.querySelector('[data-slide-audio]');
                    if (audioElement) {
                        audioSrc = audioElement.getAttribute('data-slide-audio');
                    }
                }

                // Play the audio if we found a source
                if (audioSrc) {
                    currentAudio = new Audio(audioSrc);
                    currentAudio.play().catch(err => console.log('Audio play failed:', err));
                }
            }


            // DISPLAY FUNCTIONS

            function showSlide(slideIndex) {
                // Stop audio from previous slide
                stopCurrentAudio();

                // Hide all slides, show only current one
                slides.forEach((slide, index) => {
                    if (index === slideIndex) {
                        slide.classList.remove("hidden");
                    } else {
                        slide.classList.add("hidden");
                    }
                });

                // Play audio for current slide (if it has one)
                playSlideAudio(slideIndex);

                // Show "Done" button on last slide, otherwise show "Next"
                if (isLastSlide(slideIndex)) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            soundButtons.forEach(btn => {
                btn.addEventListener("click", (e) => {
                    e.preventDefault();

                    // Get audio source from data-slide-audio attribute
                    const audioSrc = btn.getAttribute('data-slide-audio');

                    if (audioSrc) {
                        stopCurrentAudio();
                        currentAudio = new Audio(audioSrc);
                        currentAudio.play().catch(err => console.log('Audio play failed:', err));
                    }
                });
            });
            // NAVIGATION FUNCTIONS

            function goNext() {
                if (currentSlide >= slides.length - 1) return;

                currentSlide++;

                while (currentSlide < slides.length) {
                    const slide = slides[currentSlide];

                    if (isInSpecialMode) {
                        if (slide.classList.contains(specialSlideClass)) break;
                    } else {
                        if (!isSpecialSlide(slide)) break;
                    }

                    currentSlide++;
                }

                if (currentSlide < slides.length) {
                    showSlide(currentSlide);
                }
            }

            function goBack() {
                if (currentSlide === 0 && !isInSpecialMode) {
                    stopCurrentAudio();
                    window.location.href = returnURL;
                    return;
                }

                if (isInSpecialMode) {
                    let previousIndex = currentSlide - 1;

                    while (previousIndex >= 0) {
                        if (slides[previousIndex].classList.contains(specialSlideClass)) {
                            break;
                        }
                        previousIndex--;
                    }

                    if (previousIndex >= 0) {
                        currentSlide = previousIndex;
                        showSlide(currentSlide);
                    } else {
                        currentSlide = returnToSlide;
                        isInSpecialMode = false;
                        specialSlideClass = null;
                        returnToSlide = null;
                        showSlide(currentSlide);
                    }
                } else {
                    if (currentSlide > 0) {
                        currentSlide--;

                        while (currentSlide > 0 && isSpecialSlide(slides[currentSlide])) {
                            currentSlide--;
                        }

                        showSlide(currentSlide);
                    }
                }
            }

            function handleDone() {
                stopCurrentAudio();

                if (isInSpecialMode && returnToSlide !== null) {
                    currentSlide = returnToSlide;
                    isInSpecialMode = false;
                    specialSlideClass = null;
                    returnToSlide = null;
                    showSlide(currentSlide);
                } else {
                    window.location.href = doneURL;
                }
            }

            // EVENT LISTENERS

            infoButtons.forEach(button => {
                button.addEventListener("click", function(e) {
                    e.preventDefault();

                    returnToSlide = currentSlide;
                    isInSpecialMode = true;
                    specialSlideClass = getSlideTypeFromButton(button);

                    for (let i = 0; i < slides.length; i++) {
                        if (slides[i].classList.contains(specialSlideClass)) {
                            currentSlide = i;
                            showSlide(currentSlide);
                            break;
                        }
                    }
                });
            });

            nextButtons.forEach(btn => {
                btn.addEventListener("click", goNext);
            });

            if (returnButton) {
                returnButton.addEventListener("click", goBack);
            }

            if (doneButton) {
                doneButton.addEventListener("click", handleDone);
            }

            const letterLinks = document.querySelectorAll('.phonics-panel a[href=""]:not([class*="info-btn"])');
            letterLinks.forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    const letter = link.getAttribute('data-letter') || 'a';
                    speakLetter(letter);
                });
            });

            window.speechSynthesis.onvoiceschanged = () => {
                window.speechSynthesis.getVoices();
            };

            // INITIALIZE - Show first slide and play its audio automatically
            showSlide(currentSlide);
        });
    </script>
@endpush
