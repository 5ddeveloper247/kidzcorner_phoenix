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
            font-size: 2.2vw;
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

        ol {
            width: 47vw;
        }
    </style>
@endpush

@section('content')

    {{-- panel 1 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Vegetables and Fruits Group</h1>
        <div class="flex ">
            <img src="{{ asset('assets/images/micet/n1/mybody/class1/c1.png') }}" class="h-[12vw]" />
            <img src="{{ asset('assets/images/micet/n1/mybody/class2/c1.png') }}" class="h-[12vw]" />
        </div>

        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>To identify some common vegetables and fruits</li>
            <li>To know that most fruits are sweet and can be eaten raw</li>
            <li>To know that food from the vegetables and fruits group
                promotes good digestive system and regular bowel
                movement</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start space-y-[5vw] h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Vegetables and Fruits Group</h1>

        <div class="space-y-[2vw]">
            <h3 class="ptitle">Preparations</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Thematic Activity Book</li>
                <li>Leafy vegetables, Chinese cabbage, carrot, tomato,
                    cucumber, potato, apple, orange, grapes, watermelon
                    and banana (let children observe them while looking at
                    the pictures)</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Vegetables and Fruits Group</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>
            <ol class="list-decimal panel-ul w-[45vw]">
                <li>Ask children: "Besides the rice and noodles group and meat and seafood
                    group, what other food do you eat everyday?"</li>
                <li>Tell children that they are going to identify another group of food that we
                    eat everyday.</li>
            </ol>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Vegetables and Fruits Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children: "What is this?" "Have you seen it before?" "What is its colour
                and shape?" "What food can it be made into?"</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c1.png') }}" class="h-[16vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">Choy Sum <br> <span class="text-[1.2vw]">(Chinese Flowering Cabbage)</span>
        </h5>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Vegetables and Fruits Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Choy Sum can be cooked with boiling water, such as boiled Choy Sum!
                Have you ever eaten boiled Choy Sum? Do you like to eat it?</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c2.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">boiled Choy Sum</h5>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Vegetables and Fruits Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="5">
            <li>Ask children: “”How is Choy Sum boiled?””</li>
        </ol>

        <div class="flex items-center gap-[2vw]">
            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c1.png') }}" class="h-[17vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw]">Choy Sum</h5>
            </div>
            <img src="{{ asset('assets/images/micet/n1/nutrition/class1/arrow.png') }}" class="w-[1.5vw]" />
            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c2.png') }}" class="w-[30vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw]">boiled Choy Sum</h5>
            </div>
        </div>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Vegetables and Fruits Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="6">
            <li>Click on the video, have children look at the Choy Sum boiling process and talk
                about it.</li>
        </ol>

        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/n1/nutrition/class3/v1.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Vegetables and Fruits Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="7">
            <li>Ask children: "What is this?" "Have you seen it before?" "What is its colour
                and shape?" "What food can it be made into?"</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c3.png') }}" class="w-[20vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">Chinese White Cabbage <br> <span class="text-[1.2vw]">(Napa Cabbage)</span>
        </h5>
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Vegetables and Fruits Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="8">
            <li>Chinese white cabbage can be cooked with oil, such as stir-fried Chinese
                white cabbage. Have you ever eaten it? Do you like to eat it?</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c4.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">Chinese White Cabbage</h5>
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Vegetables and Fruits Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Ask children: "What is this?" "Have you seen it before?" "What is its colour
                and shape?" "What food can it be made into?"</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c5.png') }}" class="w-[35vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">Carrot</h5>
    </div>


    {{-- panel 11 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Vegetables and Fruits Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="10">
            <li>Carrot can be cooked with other vegetables, such as vegetable soup.
                Have you ever had vegetable soup? Do you like it?</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c6.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">vegetable soup</h5>
    </div>


    {{-- panel 12 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Vegetables and Fruits Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li>Ask children: "What is this?" "Have you seen it before?" "What is its colour
                and shape?" "What food can it be made into?"</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c7.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">Tomato</h5>
    </div>


    {{-- panel 13 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Vegetables and Fruits Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="12">
            <li>Tomato can be crushed in a pot, then cooked with water and egg, such as
                tomato egg soup. Have you ever had tomato egg soup? Do you like it?</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c8.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">Tomato</h5>
    </div>


    {{-- panel 14 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Vegetables and Fruits Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="13">
            <li>Ask children: "What is this?" "Have you seen it before?" "What is its colour
                and shape?" "What food can it be made into?"</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c9.png') }}" class="h-[17vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">cucumber</h5>
    </div>


    {{-- panel 15 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Vegetables and Fruits Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="14">
            <li>Cucumber can be cut in slices and placed in between slices of bread,
                such as sandwich. Have you ever eaten a sandwich? Do you like to eat it?</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c10.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">sandwich</h5>
    </div>


    {{-- panel 16 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Vegetables and Fruits Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="15">
            <li>Ask children: "What is this?" "Have you seen it before?" "What is its colour
                and shape?" "What food can it be made into?"</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c11.png') }}" class="w-[26vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">potato</h5>
    </div>


    {{-- panel 17 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Vegetables and Fruits Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="16">
            <li>Potato can be boiled and then mashed, such as mashed potato. Have you
                ever eaten mashed potato? Do you like to eat it?</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c12.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">mashed potato</h5>
    </div>


    {{-- panel 18 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Vegetables and Fruits Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="17">
            <li>Tell children that these are vegetables. Have children name each of them.</li>
        </ol>

        <div class="grid grid-cols-3 gap-[.5vw] items-end">
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c1.png') }}" class="h-[10vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw]">Choy Sum</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c3.png') }}" class="w-[10vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw]">Chine White Cabbage</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c5.png') }}" class="w-[15vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw]">carrot</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c7.png') }}" class="w-[10vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw]">tomato</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c9.png') }}" class="h-[8vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw]">cucumber</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c11.png') }}" class="w-[12vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw]">potato</h5>
            </div>
        </div>
    </div>


    {{-- panel 19 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Vegetables and Fruits Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="18">
            <li>Ask children: "Do you know what is a fruit?" "Name some fruits that you
                know."</li>
            <li>Tell children that they are going to talk about some of the common fruits.</li>
        </ol>
    </div>


    {{-- panel 20 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Vegetables and Fruits Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="20">
            <li>Ask children: "What is this?" "Have you seen it before?" "What is its colour
                and shape?" "What food can it be made into?"</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c13.png') }}" class="w-[20vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">apples</h5>
    </div>


    {{-- panel 21 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Vegetables and Fruits Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="21">
            <li>Ask children: “””Have you ever eaten an apple?”” “”What does it taste like?””
                “”How do you eat it?””</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c14.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 22 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Vegetables and Fruits Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="22">
            <li>Ask children: "What is this?" "Have you seen it before?" "What is its colour
                and shape?" "What food can it be made into?"</li>
        </ol>
        <div>
            <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c15.png') }}" class="h-[18vw]" />
            <h5 class="text-[#f7b94a] text-[1.7vw]">oranges</h5>
        </div>
    </div>


    {{-- panel 23 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Vegetables and Fruits Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="23">
            <li>Ask children: "What is this?" "Have you seen it before?" "What is its colour
                and shape?" "What food can it be made into?"</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c16.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 24 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Vegetables and Fruits Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="24">
            <li>Ask children: "What is this?" "Have you seen it before?" "What is its colour
                and shape?" "What food can it be made into?"</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c17.png') }}" class="w-[20vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">grapes</h5>
    </div>


    {{-- panel 25 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Vegetables and Fruits Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="25">
            <li>Ask children: “””Have you ever eaten a grape?”” “”What does it taste like?””
                “”How do you eat it?””</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c18.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 26 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Vegetables and Fruits Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="26">
            <li>Ask children: "What is this?" "Have you seen it before?" "What is its colour
                and shape?" "What food can it be made into?"</li>
        </ol>
        <div>
            <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c19.png') }}" class="h-[18vw]" />
            <h5 class="text-[#f7b94a] text-[1.7vw]">watermelon</h5>
        </div>
    </div>


    {{-- panel 27 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Vegetables and Fruits Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="27">
            <li>Ask children: “””Have you ever eaten a watermelon?”” “”What does it taste like?””
                “”How do you eat it?””</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c20.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 28 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Vegetables and Fruits Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="28">
            <li>Ask children: "What is this?" "Have you seen it before?" "What is its colour
                and shape?" "What food can it be made into?"</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c21.png') }}" class="w-[25vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">bananas</h5>
    </div>


    {{-- panel 29 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Vegetables and Fruits Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="29">
            <li>Ask children: “””Have you ever eaten a banana?”” “”What does it taste like?””
                “”How do you eat it?””</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c22.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 30 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Vegetables and Fruits Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="30">
            <li>Have the children name the fruits.</li>
        </ol>
        <div class="flex flex-col gap-[1vw] items-center">

            <div class="flex items-center gap-[3vw]">
                <div>
                    <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c19.png') }}" class="h-[8vw]" />
                    <h5 class="text-[#f7b94a] text-[1.7vw] text-center">watermelon</h5>
                </div>

                <div>
                    <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c22.png') }}" class="w-[10vw]" />
                    <h5 class="text-[#f7b94a] text-[1.7vw] text-center">bananas</h5>
                </div>
            </div>

            <div class="flex items-center gap-[1.5vw]">
                <div>
                    <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c13.png') }}" class="w-[10vw]" />
                    <h5 class="text-[#f7b94a] text-[1.7vw] text-center">apples</h5>
                </div>

                <div>
                    <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c15.png') }}" class="h-[8vw]" />
                    <h5 class="text-[#f7b94a] text-[1.7vw] text-center">orange</h5>
                </div>

                <div>
                    <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c17.png') }}" class="h-[8vw]" />
                    <h5 class="text-[#f7b94a] text-[1.7vw] text-center">grapes</h5>
                </div>
            </div>
        </div>
    </div>


    {{-- panel 31 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Vegetables and Fruits Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="31">
            <li>Ask children: “”What are the differences between the taste of vegetables
                and fruits””</li>
        </ol>

        <div class="flex justify-between w-full">

            <div class="flex flex-col items-center gap-4 border-4 border-[#f7b94a] rounded-full">

                <!-- Top Image -->
                <div>
                    <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c11.png') }}" class="w-[10vw]" />
                </div>

                <!-- Bottom 2 Images -->
                <div class="flex gap-4">
                    <div>
                        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c3.png') }}" class="w-[10vw]" />
                    </div>

                    <div>
                        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c1.png') }}" class="w-[10vw]" />
                    </div>
                </div>

            </div>

            <div class="flex flex-col items-center gap-4 border-4 border-[#f7b94a] rounded-full">

                <!-- Top Image -->
                <div>
                    <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c17.png') }}" class="w-[10vw]" />
                </div>

                <!-- Bottom 2 Images -->
                <div class="flex gap-4">
                    <div>
                        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c15.png') }}" class="h-[10vw]" />
                    </div>

                    <div>
                        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c21.png') }}" class="w-[10vw]" />
                    </div>
                </div>

            </div>

        </div>
    </div>


    {{-- panel 32 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Vegetables and Fruits Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="32">
            <li>Tell children that most fruits are sweet and can be eaten raw, while
                vegetables are normally cooked before eaten.</li>
        </ol>

        <div class="flex justify-between w-full">

            <div class="flex flex-col items-center gap-4 border-4 border-[#f7b94a] rounded-full">

                <!-- Top Image -->
                <div>
                    <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c11.png') }}" class="w-[10vw]" />
                </div>

                <!-- Bottom 2 Images -->
                <div class="flex gap-4">
                    <div>
                        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c3.png') }}" class="w-[10vw]" />
                    </div>

                    <div>
                        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c1.png') }}" class="w-[10vw]" />
                    </div>
                </div>

            </div>

            <div class="flex flex-col items-center gap-4 border-4 border-[#f7b94a] rounded-full">

                <!-- Top Image -->
                <div>
                    <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c17.png') }}" class="w-[10vw]" />
                </div>

                <!-- Bottom 2 Images -->
                <div class="flex gap-4">
                    <div>
                        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c15.png') }}" class="h-[10vw]" />
                    </div>

                    <div>
                        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c21.png') }}" class="w-[10vw]" />
                    </div>
                </div>

            </div>

        </div>
    </div>


    {{-- panel 33 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Vegetables and Fruits Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="33">
            <li>Have children say whether these fruits are sweet.</li>
        </ol>
        <div class="grid grid-cols-6 gap-4 justify-items-center">

            <div class="col-span-3">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c19.png') }}" class="h-[8vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw] text-center">watermelon</h5>
            </div>

            <div class="col-span-3">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c22.png') }}" class="w-[10vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw] text-center">bananas</h5>
            </div>

            <div class="col-span-2">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c13.png') }}" class="w-[10vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw] text-center">apples</h5>
            </div>

            <div class="col-span-2">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c15.png') }}" class="h-[8vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw] text-center">orange</h5>
            </div>

            <div class="col-span-2">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c17.png') }}" class="h-[8vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw] text-center">grapes</h5>
            </div>

        </div>
    </div>


    {{-- panel 34 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Vegetables and Fruits Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="34">
            <li>Ask children: "Do you know why we need to eat from the vegetables and
                fruits group everyday?" Encourage children to guess boldly, teacher assists
                when needed.</li>
            <li>Tell children that food from the vegetables and fruits group help us to digest
                our food more easily and have regular bowel movement.</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c23.png') }}" class="h-[15vw]" />
    </div>


    {{-- panel 35 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Vegetables and Fruits Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="36">
            <li>Guide children to complete the corresponding activities in the Thematic
                Activity Book.</li>
        </ol>
    </div>


    {{-- panel 36 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 3: Vegetables and Fruits Group</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Have children take turns to talk about the fruits and vegetables that they
                    have eaten and the benefits of eating them.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to know that most fruits are sweet and can be eaten raw.</li>
                <li>Able to know that food from the vegetables and fruits group promotes
                    good digestive system and regular bowel movement.</li>
            </ul>
        </div>
    </div>


    {{-- panel 37 --}}
    <div class="phonics-panel flex flex-col items-center justify-start h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 3: Vegetables and Fruits Group</h1>

        <div class="text-start">
            <h3 class="ptitle">Extension</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>At home, have children spot food from the vegetables and fruits
                    group when having dinner and tell their parents about the benefit
                    of eating them. Back in the class, have children take turns to share
                    what food they had from the vegetables and fruits group.</li>
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
            const returnURL = "{{ url('/micet/n1/nutrition/index') }}";
            const doneURL = "{{ url('/micet/n1/nutrition/index') }}";

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
