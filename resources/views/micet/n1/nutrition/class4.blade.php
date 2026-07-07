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
        <h1 class="panel-title stroke">Classroom Activity 4: Eat a Balanced Meal</h1>
        <div class="flex ">
            <img src="{{ asset('assets/images/micet/n1/mybody/class1/c1.png') }}" class="h-[12vw]" />
            <img src="{{ asset('assets/images/micet/n1/mybody/class2/c1.png') }}" class="h-[12vw]" />
        </div>

        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Know that we need to eat from the 3 main food groups
                daily in order to have a balanced diet</li>
            <li>Know that a balanced diet will help us stay healthy and
                not fall sick easily</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Eat a Balanced Meal</h1>
        <div class="text-center space-y-[2vw]">
            <h3 class="ptitle">Preparations</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Thematic Activity Book</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center sapce-y-[4vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Eat a Balanced Meal</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[45vw]">
                <li>Ask children:
                    <ul class="list-disc">
                        <li>What 3 main food groups did we learn previously? [1) rice and noodles group, 2) meat and seafood
                            group, 3) vegetables and fruits group]
                        <li> What are the benefits of eating from each food group? <br>
                            [Food from: <br>
                            1) rice and noodles group gives us energy to carry out daily activities; <br>
                            2) meat and seafood group helps to build and strengthen our muscles <br>
                            for growing; <br>
                            3) vegetables and fruits group promotes good digestive system and
                            regular bowel movement]</li>
                    </ul>
                </li>
            </ol>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Eat a Balanced Meal</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="2">
            <li>Tell children that each food group has something (nutrients) that we need
                for our body, so we need to eat them daily to have a balanced diet to
                keep us healthy..</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class4/c1.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Eat a Balanced Meal</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="3">
            <li>Tell children that this is Ling's breakfast. Have children look at the food
                items and answer the following questions.</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class4/c2.png') }}" class="w-[35vw]" />
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Eat a Balanced Meal</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="4">
            <li>Ask children: “”Has Ling eaten food from the rice and noodles group?””
                “”What are they?””</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/nutrition/class4/c2.png') }}" class="w-[35vw]" />
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Eat a Balanced Meal</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="5">
            <li>Ling has taken bread and biscuits from the rice and noodles group.</li>
        </ol>
        <div class="w-fit h-fit relative">
            <div class="w-[11vw] h-[11vw] border-2 border-[#f7b94a] rounded-[2vw] absolute"></div>
            <div class="w-[10vw] h-[10vw] border-2 border-[#f7b94a] rounded-[2vw] absolute left-[35%] bottom-0"></div>
            <img src="{{ asset('assets/images/micet/n1/nutrition/class4/c2.png') }}" class="w-[35vw]" />
        </div>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Eat a Balanced Meal</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="6">
            <li>Ask children: "What are the benefits of eating food from the rice and
                noodles group?" (they provide energy for Ling to carry out daily activities)</li>
        </ol>
        <div class="w-fit h-fit relative">
            <div class="w-[11vw] h-[11vw] border-2 border-[#f7b94a] rounded-[2vw] absolute"></div>
            <div class="w-[10vw] h-[10vw] border-2 border-[#f7b94a] rounded-[2vw] absolute left-[35%] bottom-0"></div>
            <img src="{{ asset('assets/images/micet/n1/nutrition/class4/c2.png') }}" class="w-[35vw]" />
        </div>
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Eat a Balanced Meal</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="7">
            <li>Ask children: "Has Ling eaten food from the vegetables and fruits group?"
                "What are they?"</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class4/c2.png') }}" class="w-[35vw]" />
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Eat a Balanced Meal</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="8">
            <li>Ling has taken an orange, an apple, a banana, an orange juice, some
                strawberry jam and a salad from the vegetables and fruits group.</li>
        </ol>

        <div class="w-fit h-fit relative">
            <div class="w-[10vw] h-[9vw] border-2 border-[#f7b94a] rounded-[2vw] left-[35%] absolute top-[8%]"></div>
            <div class="w-[10vw] h-[9vw] border-2 border-[#f7b94a] rounded-[2vw] absolute top-[8%] right-0"></div>
            <div class="w-[10vw] h-[9vw] border-2 border-[#f7b94a] rounded-[2vw] absolute left-0 bottom-0"></div>
            <div class="w-[10vw] h-[9vw] border-2 border-[#f7b94a] rounded-[2vw] absolute right-0 bottom-0"></div>
            <img src="{{ asset('assets/images/micet/n1/nutrition/class4/c2.png') }}" class="w-[35vw]" />
        </div>
    </div>


    {{-- panel 11 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Eat a Balanced Meal</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="9">
            <li>Ask children: "What are the benefits of eating food from the vegetables
                and fruits group?" (they help Ling digest her food more easily and have
                regular bowel movement)</li>
        </ol>

        <div class="w-fit h-fit relative">
            <div class="w-[10vw] h-[9vw] border-2 border-[#f7b94a] rounded-[2vw] left-[35%] absolute top-[8%]"></div>
            <div class="w-[10vw] h-[9vw] border-2 border-[#f7b94a] rounded-[2vw] absolute top-[8%] right-0"></div>
            <div class="w-[10vw] h-[9vw] border-2 border-[#f7b94a] rounded-[2vw] absolute left-0 bottom-0"></div>
            <div class="w-[10vw] h-[9vw] border-2 border-[#f7b94a] rounded-[2vw] absolute right-0 bottom-0"></div>
            <img src="{{ asset('assets/images/micet/n1/nutrition/class4/c2.png') }}" class="w-[35vw]" />
        </div>
    </div>


    {{-- panel 12 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Eat a Balanced Meal</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="10">
            <li>Ask children: "Has Ling eaten food from the meat and seafood group?"
                (no) "Does she have a balanced diet?" (no)</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class4/c2.png') }}" class="w-[35vw]" />
    </div>


    {{-- panel 13 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Eat a Balanced Meal</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="11">
            <li>Tell children that this is Mike's breakfast. Have children look at the food
                items and answer the following questions.</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class4/c3.png') }}" class="w-[35vw]" />
    </div>


    {{-- panel 13 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Eat a Balanced Meal</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="12">
            <li>Ask children: “”Has Mike eaten food from the rice and noodles group?””
                “”What are they?””</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class4/c3.png') }}" class="w-[35vw]" />
    </div>


    {{-- panel 14 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Eat a Balanced Meal</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="13">
            <li>Mike has taken porridge and bun from the rice and noodles group.</li>
        </ol>

        <div class="w-fit h-fit relative">
            <div class="w-[10vw] h-[10vw] border-2 border-[#f7b94a] rounded-[2vw] absolute left-[25%]"></div>
            <div class="w-[10vw] h-[9vw] border-2 border-[#f7b94a] rounded-[2vw] absolute right-[5%] bottom-0"></div>
            <img src="{{ asset('assets/images/micet/n1/nutrition/class4/c3.png') }}" class="w-[35vw]" />
        </div>
    </div>


    {{-- panel 15 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Eat a Balanced Meal</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="14">
            <li>Ask children: "What are the benefits of eating food from the rice and
                noodles group?" (they provide energy for Mike to carry out daily activities)</li>
        </ol>

        <div class="w-fit h-fit relative">
            <div class="w-[10vw] h-[10vw] border-2 border-[#f7b94a] rounded-[2vw] absolute left-[25%]"></div>
            <div class="w-[10vw] h-[9vw] border-2 border-[#f7b94a] rounded-[2vw] absolute right-[5%] bottom-0"></div>
            <img src="{{ asset('assets/images/micet/n1/nutrition/class4/c3.png') }}" class="w-[35vw]" />
        </div>
    </div>


    {{-- panel 16 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Eat a Balanced Meal</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="15">
            <li>Ask children: "Has Mike eaten food from the meat and seafood group?"
                "What are they?"</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/nutrition/class4/c3.png') }}" class="w-[35vw]" />
    </div>


    {{-- panel 17 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Eat a Balanced Meal</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="16">
            <li>Ask children: "Has Mike eaten food from the meat and seafood group?"
                "What are they?"</li>
        </ol>

        <div class="w-fit h-fit relative">
            <div class="w-[15vw] h-[7vw] border-2 border-[#f7b94a] rounded-[2vw] absolute right-0 top-[12%]"></div>
            <div class="w-[8vw] h-[9vw] border-2 border-[#f7b94a] rounded-[2vw] absolute left-0 top-[25%]"></div>
            <div class="w-[15vw] h-[7vw] border-2 border-[#f7b94a] rounded-[2vw] absolute left-[15%] bottom-0"></div>
            <img src="{{ asset('assets/images/micet/n1/nutrition/class4/c3.png') }}" class="w-[35vw]" />
        </div>
    </div>


    {{-- panel 18 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Eat a Balanced Meal</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="17">
            <li>Ask children: "What are the benefits of eating food from the meat and
                seafood group?" (they help Mike build and strengthen his muscles for
                growing)</li>
        </ol>

        <div class="w-fit h-fit relative">
            <div class="w-[15vw] h-[7vw] border-2 border-[#f7b94a] rounded-[2vw] absolute right-0 top-[12%]"></div>
            <div class="w-[8vw] h-[9vw] border-2 border-[#f7b94a] rounded-[2vw] absolute left-0 top-[25%]"></div>
            <div class="w-[15vw] h-[7vw] border-2 border-[#f7b94a] rounded-[2vw] absolute left-[15%] bottom-0"></div>
            <img src="{{ asset('assets/images/micet/n1/nutrition/class4/c3.png') }}" class="w-[35vw]" />
        </div>
    </div>


    {{-- panel 19 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Eat a Balanced Meal</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="18">
            <li>Ask children: "Has Mike eaten food from the vegetables and fruits group?"
                (no) "Does he have a balanced diet?" (no).</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/nutrition/class4/c3.png') }}" class="w-[35vw]" />
    </div>


    {{-- panel 20 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Eat a Balanced Meal</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="19">
            <li>Tell children that this is Danny's breakfast. Have children look at the food
                items and answer the following questions.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/nutrition/class4/c4.png') }}" class="w-[40vw]" />
    </div>


    {{-- panel 21 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Eat a Balanced Meal</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="20">
            <li>Ask children: "Has Danny eaten food from the meat and seafood group?"
                "What are they?"</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/nutrition/class4/c4.png') }}" class="w-[40vw]" />
    </div>


    {{-- panel 22 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Eat a Balanced Meal</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="21">
            <li>Danny has taken steamed fish, fried steaks and fried prawns from the meat
                and seafood group.</li>
        </ol>

        <div class="w-fit h-fit relative">
            <div class="w-[15vw] h-[8vw] border-[.25vw] border-[#f7b94a] rounded-[2vw] absolute left-[7%] top-[5%]"></div>
            <div class="w-[15vw] h-[8vw] border-[.25vw] border-[#f7b94a] rounded-[2vw] absolute right-[2%] top-[5%]"></div>
            <div class="w-[15vw] h-[7vw] border-[.25vw] border-[#f7b94a] rounded-[2vw] absolute left-[33%] top-[40%]">
            </div>
            <img src="{{ asset('assets/images/micet/n1/nutrition/class4/c4.png') }}" class="w-[40vw]" />
        </div>
    </div>


    {{-- panel 23 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Eat a Balanced Meal</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="22">
            <li>Ask children: "What are the benefits of eating food from the meat and
                seafood group?" (they help Danny build and strengthen his muscles for growing)</li>
        </ol>

        <div class="w-fit h-fit relative">
            <div class="w-[15vw] h-[8vw] border-[.25vw] border-[#f7b94a] rounded-[2vw] absolute left-[7%] top-[5%]"></div>
            <div class="w-[15vw] h-[8vw] border-[.25vw] border-[#f7b94a] rounded-[2vw] absolute right-[2%] top-[5%]"></div>
            <div class="w-[15vw] h-[7vw] border-[.25vw] border-[#f7b94a] rounded-[2vw] absolute left-[33%] top-[40%]">
            </div>
            <img src="{{ asset('assets/images/micet/n1/nutrition/class4/c4.png') }}" class="w-[40vw]" />
        </div>
    </div>


    {{-- panel 24 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Eat a Balanced Meal</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="23">
            <li>Ask children: "Has Danny eaten food from the vegetables and fruits
                group?" "What are they?"</li>
        </ol>

        <div class="w-fit h-fit relative">
            <div class="w-[15vw] h-[8vw] border-[.25vw] border-[#f7b94a] rounded-[2vw] absolute left-[7%] top-[5%]"></div>
            <div class="w-[15vw] h-[8vw] border-[.25vw] border-[#f7b94a] rounded-[2vw] absolute right-[2%] top-[5%]"></div>
            <div class="w-[15vw] h-[7vw] border-[.25vw] border-[#f7b94a] rounded-[2vw] absolute left-[33%] top-[40%]">
            </div>
            <img src="{{ asset('assets/images/micet/n1/nutrition/class4/c4.png') }}" class="w-[40vw]" />
        </div>
    </div>


    {{-- panel 25 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Eat a Balanced Meal</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="24">
            <li>Danny has taken watermelon, grapes and stir-fried vegetables from the
                vegetables and fruits group.</li>
        </ol>

        <div class="w-fit h-fit relative">
            <div class="w-[13vw] h-[12vw] border-[.25vw] border-[#f7b94a] rounded-[2vw] absolute left-[2%] bottom-0"></div>
            <div class="w-[15vw] h-[8vw] border-[.25vw] border-[#f7b94a] rounded-[2vw] absolute right-[2%] bottom-0"></div>
            <img src="{{ asset('assets/images/micet/n1/nutrition/class4/c4.png') }}" class="w-[40vw]" />
        </div>
    </div>


    {{-- panel 26 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Eat a Balanced Meal</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="25">
            <li>Ask children: "What are the benefits of eating food from the vegetables
                and fruits group?" (they help Danny digest his food more easily and have
                regular bowel movement)</li>
        </ol>

        <div class="w-fit h-fit relative">
            <div class="w-[12vw] h-[11vw] border-[.25vw] border-[#f7b94a] rounded-[2vw] absolute left-[2%] bottom-0"></div>
            <div class="w-[15vw] h-[7vw] border-[.25vw] border-[#f7b94a] rounded-[2vw] absolute right-[2%] bottom-0"></div>
            <img src="{{ asset('assets/images/micet/n1/nutrition/class4/c4.png') }}" class="w-[37vw]" />
        </div>
    </div>


    {{-- panel 27 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Eat a Balanced Meal</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="26">
            <li>Ask children: "Has Danny eaten food from the rice and noodles group?"
                (no) "Does he have a balanced diet?" (no)</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/nutrition/class4/c4.png') }}" class="w-[40vw]" />
    </div>


    {{-- panel 28 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Eat a Balanced Meal</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="27">
            <li>Click on the picture to open the Software Magnetic Board. Guide children
                to prepare a balanced breakfast, lunch or dinner by selecting food from
                the 3 main groups.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/nutrition/class4/c5.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 29 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Eat a Balanced Meal</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="28">
            <li>Guide children to complete the corresponding activities in the Thematic
                Activity Book.</li>
        </ol>
    </div>

    {{-- panel 30 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Have children take turns to talk about their balanced meals and let others
                    check whether it's a balanced meal.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>.Able to know that we need to eat from the 3 main food groups daily in order
                    to have balanced diet.</li>
                <li>
                    Able to know that eating a balanced diet will help us stay healthy and not
                    fall sick easily.</li>
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
