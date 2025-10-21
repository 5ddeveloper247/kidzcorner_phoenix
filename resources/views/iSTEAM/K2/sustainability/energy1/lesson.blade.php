@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/sustainability/a1.png') }}" />
        </div>
        <div class="title stroke">
            <h2>Children, what do you see in the pictures above?</h2><br>
            <p class="note">Note: Encourage children to share.</p>
        </div>
    </div>



    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/sustainability/a1.png') }}" />
        </div>
        <h2 class="title stroke">Trees, sun, coal, fish, water, plants and animals are examples
            of natural resources on earth.</h2>
    </div>


    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/sustainability/a2.png') }}" />
        </div>
        <h2 class="title stroke text-center">People need natural resources to stay alive.</h2><br>
        <p class="note">Note: Teacher can share that people need air, water and food to stay alive.<br>
            Food comes from animals and plants.</p>
    </div>

    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/sustainability/a1.png') }}" />
        </div>
        <h2 class="title stroke">Therefore, it is important to make natural resources
            sustainable, so that they will be available for a long time.</h2>
    </div>
    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e1.png') }}" />
        </div>
        <h2 class="title stroke">Wood and coal are often used as fuels
            in factories and vehicles.</h2>
    </div>
    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e1.png') }}" />
        </div>
        <h2 class="title stroke">The usage of wood and coal not only uses up Earth's natural
            resources quickly, it also causes air pollution which leads to
            global warming.</h2>
    </div>
    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e1.png') }}" />
        </div>
        <h2 class="title stroke">To avoid using up natural resources and causing global
            warming, clean energy can be used.</h2>
    </div>

    {{-- Slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke">To avoid using up natural resources and causing global
            warming, clean energy can be used.</h2><br>
        <p class="note">Note: Encourage children to share their thoughts.</p>
    </div>
    {{-- slide 5 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/sustain/energy1/e2.png') }}" />
        <h2 class="title stroke text-center">Clean energy is generated from natural sources or processes
            that are continually replenished.</h2>
    </div>
    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/sustain/energy1/e2.png') }}" />
        <h2 class="title stroke text-center">The energy generated do not cause pollution to Earth, that's
            why they are called clean energy.</h2><br>
        <p class="note">Note: Teacher can explain what pollution means.</p>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e3.png') }}" />
        </div>
        <h2 class="title stroke text-center">Energy from the sun is known as solar energy.</h2><br>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e3.png') }}" />
        </div>
        <h2 class="title stroke text-center">How do you feel when you stand under the sun?</h2><br>
        <p class="note">Note: Encourage children to share their answers.
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e3.png') }}" />
        </div>
        <h2 class="title stroke text-center">The sun gives off heat and light.</h2><br>
    </div>
    {{-- Slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke">Children, what can the sun’s heat be used for?</h2><br>
        <p class="note">Note: Encourage children to share their thoughts.</p>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e4.png') }}" />
        </div>
        <h2 class="title stroke text-center">This is a solar oven. It is made from a box and wrapped up
            with aluminium foil and cling wrap.</h2><br>
    </div>

    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">1. What materials are used in creating the solar oven? <img
                src="{{ asset('assets/images/K2/sustain/energy1/information.png') }}" /><br>
            2. Why do you think these materials are used?</h2><img
            src="{{ asset('assets/images/K2/sustain/energy1/information.png') }}" /><br><br>
        <p class="note">Note: Teacher to pass the solar oven around to let children have a closer look.</p>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e4.png') }}" />
        </div>
        <h2 class="title stroke text-center">A box with cover, aluminum foil, cling wrap and black paper.</h2><br>
    </div>
    {{-- pivtut --}}
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e0a.png') }}" />
        </div>
        <h2 class="title stroke text-center">The box gives the solar oven the structure like an oven.</h2><br>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/ab.png') }}" />
        </div>
        <h2 class="title stroke text-center">The aluminum foil on the cover helps to reflect light
            into and within the box.</h2><br>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e13.png') }}" />
        </div>
        <h2 class="title stroke text-center">The colour black absorbs heat. Putting a piece of black paper
            in the box helps to absorb heat from the sun.</h2><br>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e13.png') }}" />
        </div>
        <h2 class="title stroke text-center">The black paper absorbs heat into the box and helps to
            increase the temperature in the box.</h2><br>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e13.png') }}" />
        </div>
        <h2 class="title stroke text-center">Wrapping the cover with cling wraps prevents heat from
            escaping from the box.</h2><br>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="note">Class Activity 1</h2>
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e0a.png') }}" />
        </div>
        <h2 class="title stroke text-center">Let's find out:<br>
            Create a solar oven and find out if the sun's heat <br>
            can cook food.</h2><br>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="title stroke text-center">Let's do:<br>
            1. Set up the oven and put the thermometer inside as shown.<br>
            2. Write down the temperature of the oven before putting
            under the sun.</h2><br>
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e0a.png') }}" />
        </div>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="title stroke text-center">Let's do:<br>
            3. Discuss as a class on the kind of food to try and cook in the
            solar oven.<br>
            4. Draw how the food item looks like before putting in the
            oven.</h2><br>
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e5.png') }}" />
        </div>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke">Let's do:
            5. Place the food item in the box, close it tight and lift up the
            top panel to let the sunlight shine into it.<br>
            6. Place the solar oven outdoors under the sun.<br>
            7. Observe the temperature reading on the thermometer.<br>
            8. Check the temperature reading and the food item after one<br>
            hour.
            9. Draw and record the temperature reading on the learning
            journal.</h2>
        <p class="text-center note">Note: The experiment outcome will vary base on the weather.</p>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="title stroke text-center">Let's do:<br>
            10. Discuss as a class, share observations and conclusions based
            on the activity.</h2><br>
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e5.png') }}" />
        </div>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e6.png') }}" />
        </div>
        <h2 class="title stroke text-center">Solar panels are used to absorb the energy from the sun.</h2>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e6.png') }}" />
        </div>
        <h2 class="title stroke text-center">When the sun shines on the panels, the panels use the
            energy and create electricity.</h2>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e6a.png') }}" />
        </div>
        <h2 class="title stroke text-center">The electricity generated can be used to power up lights,
            water heaters and other electrical devices.</h2>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="note">Class Activity 2</h2><br>
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e7.png') }}" />
        </div>
        <h2 class="title stroke text-center">Let's find out:
            How does a solar-powered light work?</h2>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="title stroke text-center">Let's do:<br>
            1. Put the solar-powered light near a window or outdoors
            where the solar panel faces the sun.</h2>
        <div class="flex gap-2 items-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e8.png') }}" />
            <img src="{{ asset('assets/images/K2/sustain/energy1/e9.png') }}" />
        </div>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke">Let's do:<br>
            2. Leave the solar-powered light in the sun for 15 minutes.<br>
            3. Bring the solar-powered light into the class and switch off
            the lights in the class.<br>
            4. Did the solar-powered light light up? Why?</h2><br><br><br>
        <p class="text-center note">Note: You can cover the solar panel to make the solar powered light light up too.<br>
            Encourage children
            to discuss how did the solar powered light light up even when there's not batteries in it.</p>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke">Let's do:
            5. Put the solar-powered light in a cupboard for a few hours
            until the energy has been used up.<br>
            6. Switch off the lights in the classroom and see if the solar-
            powered light lights up.<br>
            7. Share and discuss observation as a class.</h2>
        <p class="text-center note">Note: Teacher to prompt children to share their observations and draw conclusions from
            it.
            Do encourage children to think of others ways to make the solar power light light up.</p>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e10.png') }}" />
        </div>
        <h2 class="title stroke text-center">The solar-powered light lights up when the classroom is dark.<br>
            Energy from the sun is stored in the solar panel and lights up
            the light bulb when it's dark.</h2>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e7.png') }}" />
        </div>
        <h2 class="title stroke text-center">The solar-powered light does not light up when the classroom
            is bright. The solar panel detects light when it's bright and it
            does not light up the light bulb.</h2>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e7.png') }}" />
        </div>
        <h2 class="title stroke text-center">Why didn't the solar-powered light light up after being placed
            in the cupboard for a long time?</h2><br>
        <p class="note">Note: Encourage children to share their thoughts.</p>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e7.png') }}" />
        </div>
        <h2 class="title stroke text-center">This is because the solar panel did not get any energy from
            the sun when it was in the cupboard.
            Without energy, it has no power to light up..</h2>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e3.png') }}" />
        </div>
        <h2 class="title stroke text-center">The sun gives us heat and light which can be converted into
            useful clean energy.</h2>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e6.png') }}" />
        </div>
        <h2 class="title stroke text-center">Solar energy is one of the clean energies that can be used
            to replaced coal and wood.</h2>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="note">Learning Journal</h2>
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy1/e5.png') }}" />
        </div>
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
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>


    <div id="buttons" class="absolute  flex flex-row ">

        <!-- Return Button -->
        <a id="returnButton">
            <img src="{{ asset('assets/images/pptimages/return.png') }}" />
        </a>

        <!-- Home Button -->
        <button id="homeButton">
            <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
        </button>

        <!-- Close Button -->
        <button id="closeButton">

            <img src="{{ asset('assets/images/pptimages/cancel.png') }}" />

        </button>

    </div>

    {{-- next Button --}}
    <div class="down-btn-container">

        <button class="nextButton">
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
                        // Reset flags BEFORE returning to parent slide
                        const returnToSlide = parentSlideIndex;
                        isViewingInfoSlides = false;
                        currentInfoClass = null;
                        parentSlideIndex = null;
                        currentSlide = returnToSlide;
                        showSlide(currentSlide);
                    } else {
                        // Navigate to route
                        window.location.href = "{{ route('energy1Selection') }}";
                    }
                });
            }

            // Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
