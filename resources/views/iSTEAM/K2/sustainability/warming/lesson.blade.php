@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex items-center gap-5">
            {{-- <img src="{{ asset('assets/images/K2/livingthings/dna/h17.png') }}" class="w-[500px]" />
            <img src="{{ asset('assets/images/K2/livingthings/dna/h16.png') }}" class="w-[500px]" /> --}}
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s1.png') }}" class="w-[500px]" />
        </div>
        <div class="title stroke">

            <h2>Children, what do you see in the picture?</h2>
            <p class="note">Note: Encourage children to share what they see in the picture.
            </p>
        </div>
    </div>



    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s1.png') }}" />

        </div>
        <h2 class="title stroke">This is our planet, Earth.</h2>
    </div>



    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s1.png') }}" />

        </div>
        <h2 class="title stroke">Do you know that Earth is sick?</h2>
        <p class="note">Note: Encourage children to guess how Earth is sick.
        </p>
    </div>
    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s2.png') }}" />

        </div>
        <h2 class="title stroke text-center">Earth's climate has been changing.<br>
            Earth is getting warmer.</h2>
        <p class="note">Note: Explain that climate means the weather over a longer period of time.
        </p>
    </div>
    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s2.png') }}" />

        </div>
        <h2 class="title stroke text-center">This is known as global warming.
            Make a guess - What causes Earth's temperature to rise?</h2>
        <p class="note">Note: Encourage children to share their thoughts with the class.
        </p>
    </div>



    {{-- slide 4 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s2.png') }}" />

        </div>
        <h2 class="title stroke text-center">This is known as global warming.
            Make a guess - What causes Earth's temperature to rise?</h2>
        <p class="note">Note: Encourage children to share their thoughts with the class.
        </p>
    </div>


    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s3.png') }}" />
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s3.png') }}" />
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s3.png') }}" />
        </div>
        <h2 class="title stroke text-center">The increase of greenhouse gases causes
            Earth's temperature to rise!</h2>
    </div>
    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s3.png') }}" />
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s3.png') }}" />
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s3.png') }}" />
        </div>
        <h2 class="title stroke text-center">Carbon dioxide, methane and nitrous oxide are
            known as greenhouse gases.</h2>
    </div>
    {{-- slide 5 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s4.png') }}" />

        </div>
        <h2 class="title stroke text-center">Greenhouse gases are produced when fuels such as wood and
            coal are burned in factories and vehicles.</h2>
    </div>
    {{-- slide 5 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s5.png') }}" />

        </div>
        <h2 class="title stroke text-center">Farm animals also give out greenhouse gases.</h2>
    </div>

    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">How do these greenhouse gases affect
            Earth's temperature?</h2><br><br><br><br><br><br><br><br>
        <p class="note">Note: Encourage children to share their thoughts with the class.
        </p>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s6.png') }}" />

        </div>
        <h2 class="title stroke text-center">During the day, the sun shines through the atmosphere and
            warms up Earth's surface.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s7.png') }}" />

        </div>
        <h2 class="title stroke text-center">During the night, Earth’s surface cools down.
            Heat escapes into the air.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s8.png') }}" />

        </div>
        <h2 class="title stroke text-center">Some of the heat escapes into space, while some are trapped
            by the greenhouse gases.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s9.png') }}" />

        </div>
        <h2 class="title stroke text-center">The heat trapped in the atmosphere
            keeps Earth warm.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s10.png') }}" />

        </div>
        <h2 class="title stroke text-center">The increase in greenhouse gases stops most of the heat from
            escaping and heat gets trapped in the atmosphere.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s10.png') }}" />

        </div>
        <h2 class="title stroke text-center">The heat trapped in the atmosphere causes Earth's
            temperature to increase.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">Let's work on an experiment to observe what happens to the
            temperature when air is being trapped.</h2><br><br><br><br><br><br><br><br>
        <p class="note">Note: Remind children on safety rules when using the thermometer and the glass container.
        </p>
    </div>

    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s11.png') }}" />
        <h2 class="title stroke text-center">Let's find out:<br>
            How does the temperature change when heat/air is unable to<br>
            escape from an enclosed container?</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-start ">
        <h2 class="title stroke text-center">Let's do:<br>
            Get two thermometers and a glass jar with a lid.</h2>
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s11.png') }}" />
        <p class="note">Note: Teacher to remind children to be careful when using the glass jar and glass thermometers.
        </p>
    </div>

    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke text-center">Let's do:<br>
            2. Paste a piece of paper underneath the hole on the lid.</h2>
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s12.png') }}" />
        <p class="text-center note">Note: Seal the hole with a paper because it's easier for children to poke a thermometer
            through it later.</p>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center">
        <h2 class="title stroke">Let's do:<br>
            3. Poke a thermometer through the hole into the glass jar and<br>
            cover it. Use tape to seal up any gaps to ensure that<br>
            heat/air cannot escape from the jar. The glass jar acts as<br>
            the greenhouse gases which prevent the heat from escaping.</h2>
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s13.png') }}" />
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start">
        <h2 class="title stroke">Let's do:<br>
            5. The thermometer outside the glass jar will measure the<br>
            temperature of the environment.<br>
            6. The thermometer inside the glass jar will measure the<br>
            temperature of the air being trapped, just like how the<br>
            greenhouse gases were trapped in the atmosphere.</h2><br><br><br>
        <p class="text-center note">Note: Teacher to help to read out the temperature on each thermometer.</p>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center">
        <h2 class="title stroke">Let's do:<br>
            7. After setting up, record the temperature readings of both<br>
            thermometers in the learning journal.<br>
            8. Wait 5 minutes and 10 minutes later to record the second
            and third readings.<br>
            9. As a class, discuss the observations.
        </h2><br>
        <p class="note">Note: Teacher to ask questions to guide them in concluding their findings.</p>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s14.png') }}" />
        </div>
        <h2 class="title stroke text-center">What happens when Earth's temperature keeps increasing?</h2>
        <p class="note">Note: Encourage children to share their thoughts.</p>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex gap-2 items-center">
            <img class="w-[500px]" src="{{ asset('assets/images/K2/sustain/Globalwarming/s15a.png') }}" />
            <img class="w-[300px]" src="{{ asset('assets/images/K2/sustain/Globalwarming/s15b.png') }}" />
        </div>
        <h2 class="title stroke text-center">When temperature increases, we feel hot!</h2>
        <p class="note">Note: Teacher can help children to relate to how they feel when they are under
            the hot sun during outdoors.</p>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s16.png') }}" />
        </div>
        <h2 class="title stroke text-center">Ice and snow on the ice cap mountains will melt.</h2>
        <p class="note">Note: Teacher to explain that hot weather affects the plants.</p>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s17.png') }}" />
        </div>
        <h2 class="title stroke text-center">Ice and snow on the ice cap mountains will melt.</h2>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-1 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s18.png') }}" />
        </div>
        <h2 class="title stroke text-center">Glaciers will melt too!</h2>
        <p class="note">Note: Teacher to explain that aglacier is a large piece of ice on top of land.<br>
            Glacier is formed by the accumulation and compaction of snow.</p>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <h2 class="title stroke ">What do you think will happen
            when glaciers melt?</h2>
        <p class="note">Note: Encourage children to share their thoughts.</p>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-1 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s19.png') }}" />
        </div>
        <h2 class="title stroke text-center">Let’s find out:<br>
            What happens when glaciers melt?</h2>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="title stroke text-center">Let's do:<br>
            1. Use clay or dough to form land on one side of a container.</h2>
        <div class="flex items-end gap-1 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s20.png') }}" />
        </div>
        <p class="note">Note: Teacher may get children to work in small groups</p>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="title stroke text-center">Let's do:<br>
            2. Fill the other side of the container with water, <br>to represent
            the sea.<br>
            3. Place a block of ice on top of the land. Explain that this is
            glacier, where the top part of the land is ice.</h2>
        <div class="flex items-end gap-1 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s21.png') }}" />
        </div>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="title stroke text-center">Let's do:<br>
            4. Use a marker and mark the water level on the side of the
            container.</h2>
        <div class="flex items-end gap-1 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s22.png') }}" />
        </div>
        <p class="note">Note: Teacher to ensure that the ice stays on top of the land at the start of the experiment.</p>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">Let's do:<br>
            5. Glaciers will melt due to global warming. Guess what will<br>
            happen when the block of ice melts into the sea.<br>
            6. Leave it in the outdoors or near a light source to <br>
            represent the sun.<br>
            7. Check the level again when all the ice has melted.<br></h2><br><br><br>
        <p class="note">Note: Teacher to guide children in observing the change in water level.
        </p>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-5">
        <h2 class="title stroke">Let's do:<br>
            8. Discuss as a class what you have observed.<br>
            9. Imagine if the water was the sea, what would have<br>
            happened? </h2><br>
        <p class="note">Note: Teacher to ask questions to guide them in concluding their findings.</p>
        </p>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-1 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s18.png') }}" />
        </div>
        <h2 class="title stroke text-center">When the glaciers melt, the sea level will increase<br>
            and islands may be flooded.</h2>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-1 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s23.png') }}" />
        </div>
        <h2 class="title stroke text-center">Our houses and the roads will be flooded too.</h2>
        <p class="note">Note: Teacher to talk about how the flood will affect people.</p>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-5">
        <h2 class="title stroke">What have you learned about global warming?</h2>
        <p class="note">Note: Encourage children to share.</p>
        </p>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-1 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s2.png') }}" />
        </div>
        <h2 class="title stroke text-center">Global warming is the process of Earth getting warmer<br>
            and the temperature increases.</h2>
        <p class="note">Note: Explain that climate means the weather over a longer period of time.</p>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-1 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s10.png') }}" />
        </div>
        <h2 class="title stroke text-center">Global warming is caused by the increase in greenhouse gases<br>
            trapped in the atmosphere.</h2>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-1 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s16.png') }}" />
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s18.png') }}" />
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s23.png') }}" />
        </div>
        <h2 class="title stroke text-center">With the increased temperature, it affects the land, animals
            and plants. When glaciers melt, we will be affected too.</h2>
    </div>
    {{-- slide 8 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                1. (A) Use a pencil to make a patch of dark mark on a paper.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f3.png') }}" />
        <p class="note text-center">Note: Advise A to darken the patch by shading the patch again and again.</p>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- Slide 16 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                2. (B) Rub a fingertip over the pencil mark to stain it.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f4.png') }}" />
        <p class="note text-center">Note: Advise B to ensure that their fingertips have an even dark mark.</p>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- Slide 17 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                3. (C) Cut and stick a piece of clear tape on the stained fingertip (of B).</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f5.png') }}" />
        <p class="note text-center">Note: Advise C to hold only an edge of the tape and stick the tape flat on the
            fingertip
            of B.</p>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- Slide 18 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                4. (C) Carefully remove the tape from the fingertip (of B)
                and paste it on the learning journal (of B).</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f6.png') }}" />
        <p class="note text-center">Note: Remind C to paste the tape in the correct place of B's fingerprint record.</p>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- Slide 18 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                5. (A) Use a wet towel to clean the fingertip (of B).</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f7.png') }}" />
        <p class="note text-center">Note: Explain to children that this is to avoid possible messiness when taking prints
            of
            other fingers.</p>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>

    {{-- Slide 18 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                6. (A, B & C) Repeat the steps for other fingers.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f8.png') }}" />
        <p class="note text-center">Note: Have children change their roles to help one another complete the fingerprint
            record.</p>
    </div>


    {{-- Slide 19 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                7. Observe your fingerprints.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f2.png') }}" />
        <p class="note text-center">Note: Have children observe and compare their own set of fingerprints on the record.
        </p>
    </div>




    {{-- Slide 20 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f2.png') }}" />
        <h2 class="title stroke">What do you observe: <br>
            Are there similarities between your fingerprints?</h2>
    </div>


    {{-- Slide 21 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f2.png') }}" />
        <h2 class="title stroke">What do you observe: <br>
            Do your left and right hands’ fingerprints look alike?</h2>
    </div>



    {{-- Slide 22 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                8. Observe your fingerprints with friends.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f9.png') }}" />
        <p class="note">Note: Have children observe and compare their fingerprints with friends.</p>
    </div>


    {{-- Slide 24 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f9.png') }}" />
        <h2 class="title stroke text-start">What do you observe: <br>
            Do you find anyone with the same fingerprints as yours?</h2>
    </div>


    {{-- Slide 25 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="title stroke text-start">What do you learn: <br>
            What are the similarities between different fingerprints?</h2>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f9.png') }}" />
        <p class="note">Note: Explain to children that the lines on the tips of our fingers or thumbs are called ridges.
        </p>
    </div>


    {{-- Slide 26 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="title stroke text-start">What do you learn: <br>
            Do you find any two fingerprints are exactly same?</h2>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f9.png') }}" />
    </div>


    {{-- Slide 27 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f10.png') }}" />
        <h2 class="title stroke">Through the activity, we know that fingerprints
            are ridges on the tips of our fingers and thumbs.</h2>
    </div>

    {{-- Slide 28 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f11.png') }}" />
        <h2 class="title stroke">We also know that no two fingerprints are exactly alike.</h2>
    </div>

    {{-- Slide 29 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f11.png') }}" />
        <h2 class="title stroke">Therefore, individual fingerprints are unique
            and no two people have the same fingerprints.</h2>
    </div>

    {{-- slide 30 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-fit bg-cover bg-center p-[20px] flex flex-col justify-center items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f12.png') }}" />
        </div>
    </div>


    {{-- ====================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button
         class="doneButton">
 <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>


 <div id="buttons" class="absolute right-[60px] flex flex-row gap-6 ">

        <!-- Return Button -->
        <a id="returnButton">
 <img
    src="{{ asset('assets/images/pptimages/return.png') }}" />
        </a>

        <!-- Home Button -->
        <button
     id="homeButton">
            <img 
                src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
        </button>

        <!-- Close Button -->
        <button id="closeButton">
           
            <img 
                src="{{ asset('assets/images/pptimages/cancel.png') }}" />
    
        </button>

    </div>

    {{-- next Button --}}
    <div class="down-btn-container">

        <button
            class="nextButton">
 <img src="{{ asset('assets/images/pptimages/next-btn.png') }}" />
        </button>
    </div>




@endsection


@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const slides = document.querySelectorAll(".slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");

            // Get all info/click buttons (info-btn1, info-btn2, click-btn1, click-btn2, etc.)
            const infoButtons = document.querySelectorAll("[class*='info-btn'], [class*='click-btn']");

            let currentSlide = 0;
            let parentSlideIndex = null;
            let isViewingInfoSlides = false;
            let currentInfoClass = null; // Track which info/click class we're viewing

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                // Check if last slide OR last info/click slide
                const isLastSlide = index === slides.length - 1;
                const isLastInfoSlide = isViewingInfoSlides && !hasNextInfoSlide(index);

                if (isLastSlide || isLastInfoSlide) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            // Check if there's another info/click slide with same class after current one
            function hasNextInfoSlide(currentIndex) {
                if (!currentInfoClass) return false;

                for (let i = currentIndex + 1; i < slides.length; i++) {
                    if (slides[i].classList.contains(currentInfoClass)) {
                        return true;
                    }
                }
                return false;
            }

            // Get info/click class from button (info-btn1 → , click-btn1 → click1)
            function getInfoClassFromButton(button) {
                const classList = Array.from(button.classList);

                // Check for info-btn pattern
                const infoBtnClass = classList.find(cls => cls.startsWith('info-btn'));
                if (infoBtnClass) {
                    const number = infoBtnClass.replace('info-btn', '');
                    return 'info-slide' + number;
                }

                // Check for click-btn pattern
                const clickBtnClass = classList.find(cls => cls.startsWith('click-btn'));
                if (clickBtnClass) {
                    const number = clickBtnClass.replace('click-btn', '');
                    return 'click' + number;
                }

                return null;
            }

            // Info/Click button handlers
            infoButtons.forEach((btn) => {
                btn.addEventListener("click", (e) => {
                    e.preventDefault(); // Prevent default anchor behavior

                    parentSlideIndex = currentSlide;
                    isViewingInfoSlides = true;
                    currentInfoClass = getInfoClassFromButton(btn);

                    // Find the first slide with matching info/click class
                    for (let i = 0; i < slides.length; i++) {
                        if (slides[i].classList.contains(currentInfoClass)) {
                            currentSlide = i;
                            showSlide(currentSlide);
                            break;
                        }
                    }
                });
            });

            // NEXT button - skip info/click slides if not viewing them
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;

                        // Skip info/click slides if not viewing them
                        while (!isViewingInfoSlides &&
                            currentSlide < slides.length &&
                            isInfoSlide(slides[currentSlide])) {
                            currentSlide++;
                        }

                        // If viewing info/click slides, only show slides with current class
                        if (isViewingInfoSlides) {
                            while (currentSlide < slides.length &&
                                !slides[currentSlide].classList.contains(currentInfoClass)) {
                                currentSlide++;
                            }
                        }

                        if (currentSlide < slides.length) {
                            showSlide(currentSlide);
                        }
                    }
                });
            });

            // Check if slide is any info/click slide (info-slide1, info-slide2, click1, click2, etc.)
            function isInfoSlide(slide) {
                return Array.from(slide.classList).some(cls =>
                    (cls.startsWith('info-slide') && cls.match(/^info-slide\d+$/)) ||
                    (cls.startsWith('click') && cls.match(/^click\d+$/))
                );
            }

            // Return button
            returnButton.addEventListener("click", () => {
                if (isViewingInfoSlides && currentSlide > 0) {
                    // Check if previous slide is also same info/click class
                    let prevSlide = currentSlide - 1;

                    // Find previous slide with same info/click class
                    while (prevSlide >= 0 && !slides[prevSlide].classList.contains(currentInfoClass)) {
                        prevSlide--;
                    }

                    if (prevSlide >= 0 && slides[prevSlide].classList.contains(currentInfoClass)) {
                        currentSlide = prevSlide;
                        showSlide(currentSlide);
                    } else {
                        // No more info/click slides, return to parent
                        currentSlide = parentSlideIndex;
                        isViewingInfoSlides = false;
                        currentInfoClass = null;
                        parentSlideIndex = null;
                        showSlide(currentSlide);
                    }
                } else if (currentSlide > 0) {
                    currentSlide--;

                    // Skip info/click slides when going back
                    while (currentSlide > 0 && isInfoSlide(slides[currentSlide])) {
                        currentSlide--;
                    }

                    showSlide(currentSlide);
                }
            });

            // DONE button handler
            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    if (isViewingInfoSlides && parentSlideIndex !== null) {
                        // Return to parent slide
                        currentSlide = parentSlideIndex;
                        isViewingInfoSlides = false;
                        currentInfoClass = null;
                        parentSlideIndex = null;
                        showSlide(currentSlide);
                    } else {
                        // Navigate to route
                        window.location.href = "{{ route('warmingSelection') }}";
                    }
                });
            }

            // Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
