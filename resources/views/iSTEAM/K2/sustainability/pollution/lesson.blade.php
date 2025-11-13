@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title--}}
    <h2 class="top-title stroke">Pollution and its Effects</h2>

    {{-- Slide 2 --}}
    <div class="slide flex flex-col hidden items-center justify-between h-[30vh]">
        <div class="title stroke">
            <h2>Children, what do you remember
                what clean energy is?</h2>
        </div>
        <p class="note">Note: Encourage children to share.</p>
    </div>

    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/energy2/e13.png') }}" class="w-img3" />
        <h2 class="title stroke">Solar energy, wind power and hydropower are
            three types of clean energy.</h2>
    </div>

    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/energy2/e1.png') }}" />
        <h2 class="title stroke">The sun, wind and water are natural sources that help to
            generate clean energy.</h2>
    </div>

    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/energy2/e1.png') }}" />
        <h2 class="title stroke">Clean energy is energy generated from natural resources
            which do not cause pollution.</h2>
    </div>

    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/energy2/e13.png') }}" class="w-img3" />
        <h2 class="title stroke">Using clean energy will help natural resources to be sustainable
            and protect our Earth from global warming and pollution.</h2>
    </div>

    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[50%]">
        <h2 class="title stroke text-center">Let's have a better understanding of what pollution is and
            how pollution affects Earth.</h2>
    </div>

    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/pollution/p1.png') }}" class="w-img3" />
        <h2 class="title stroke text-center">Look at these pictures.
            These are pictures of the different types of pollution.</h2>
        <p class="note">Note: Encourage children to share what they see and guess how will pollution affect us.</p>
    </div>

    {{-- Slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/pollution/p1.png') }}" class="w-img3" />
        <h2 class="title stroke text-center"><span class="!text-white">Pollution </span>is when gases,<span
                class="text-white"> chemicals,</span> oil spills and trash are
            introduced into the environment in large amounts that is
            harmful or poisonous to humans, animals and plants.</h2>
    </div>

    {{-- Slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/K2/sustain/pollution/p2.png') }}" class="w-img3" />
        <h2 class="title stroke">As seen previously, greenhouse gases are produced when fuels
            such as wood and coal are burned in factories and vehicles.</h2>
    </div>

    {{-- Slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/pollution/p2.png') }}" class="w-img3" />
        <h2 class="title stroke">Harmful smoke and chemicals are also released when such
            fuels are burnt, causing air pollution.</h2>
    </div>

    {{-- Slide 12 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p3.png') }}" class="w-img3" />
        <h2 class="title stroke">Prolonged exposure to the harmful smoke and <span class="!text-white">chemicals</span> leads
            to many health problems, especially for young children.</h2>
    </div>

    {{-- Slide 13 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p3.png') }}" class="w-img3" />
        <h2 class="title stroke"> <span class="!text-white">Air pollution </span>can cause serious damages to
            lungs, heart and brains.</h2>
    </div>

    {{-- Slide 14 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p4.png') }}" />
        <h2 class="title stroke">Can you guess what this is?</h2>
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>

    {{-- Slide 15 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p4.png') }}" />
        <h2 class="title stroke">This is a picture of oil spill in the sea. Oil spills are hard to
            clean up and it is harmful to the environment.</h2>
    </div>

    {{-- Slide 16 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p5.png') }}" class="w-img3" />
        <h2 class="title stroke">Oil spills are caused by ship accidents or during the process of
            drilling oil rigs to gather oil from the sea bed.</h2>
    </div>

    {{-- Slide 17 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p6.png') }}" class="w-img3" />
        <h2 class="title stroke">Sea creatures and marine birds are often killed by oil spills.</h2>
        <p class="note">Note: Teacher can <a class="click-btn1 text-[#F7B94A]"> click here </a>to share how oil spills are
            harmful to the animals.</p>
    </div>

    {{-- Slide 18 --}}
    <div class="slide hidden flex flex-col click1 items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p37.png') }}" />
        <h2 class="title stroke">Oil spills are sticky.
            It sticks onto animal fur and the bird feathers.</h2>
    </div>

    {{-- Slide 19 --}}
    <div class="slide hidden flex flex-col click1 items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p37.png') }}" />
        <h2 class="title stroke">When the fur or feathers are covered with oil, the animals
            and birds are unable to keep warm.</h2>
    </div>

    {{-- Slide 20 --}}
    <div class="slide hidden flex flex-col click1 items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p37.png') }}" />
        <h2 class="title stroke">Animals and birds may die because they are
            unable to keep warm.</h2>
    </div>

    {{-- Slide 21 --}}
    <div class="slide hidden flex flex-col click1 items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p7.png') }}" class="w-img3" />
        <h2 class="title stroke">Other animals such as turtles and fishes may mistaken the oil
            spill as food. Some fall sick or die after eating them.</h2>
    </div>

    {{-- Slide 22 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p8.png') }}" class="w-img3" />
        <h2 class="title stroke">Besides oil spills, the sea is also polluted with chemical waste
            from inconsiderate factories.</h2>
    </div>

    {{-- Slide 23 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p8.png') }}" class="w-img3" />
        <h2 class="title stroke">When these <span class="!text-white"> chemical </span> waste flows into the sea, it
            poisons the sea creatures and makes the sea water dirty.</h2>
    </div>

    {{-- Slide 24 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p9.png') }}" class="w-img3" />
        <h2 class="title stroke">The sea is also polluted with rubbish.</h2>
    </div>

    {{-- Slide 25 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p9.png') }}" class="w-img3" />
        <h2 class="title stroke">Look at this, what is in the sea? Can the sea be cleaned?</h2>
        <p class="note">Note: Encourage children to share what they see or share their thoughts</p>
    </div>

    {{-- Slide 26 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[50vh]">
        <h2 class="title stroke !text-white">Brainstorming Session</h2>
        <div class="title stroke text-start">
            <ol class="lesson-ul space-y-4 list-disc">
                <li>How can we clean the polluted sea? How can the rubbish be removed from the sea?</li>
                <li>What can be used to clean the water?</li>
                <li>What are the possible ways to make dirty water clean?</li>
            </ol>
        </div>
        <p class="note">Note: Teacher to ask these questions and jot down children's answers on a large piece paper to
            be displayed in the class. Teacher can guide and prompt children to think of removing the bigger pieces
            of rubbish first then think of other ways to remove the smaller ones.</p>
    </div>

    {{-- Slide 27 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p10.png') }}" class="w-img3" />
        <h2 class="title stroke">Children, do you know what these are?</h2>
        <p class="note">Note: Encourage children to share what they see or share their thoughts.</p>
    </div>

    {{-- Slide 28 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p10.png') }}" class="w-img3" />
        <h2 class="title stroke">These are different types of <span class="!text-white"> filters!
                Filters </span> help to remove unwanted substances and only allow
            certain substances to pass through them.</h2>
    </div>

    {{-- Slide 29 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p11a.png') }}" class="!max-w-[40vw]" />
        <h2 class="title stroke">This is a sieve. A sieve acts as a filter to remove
            unwanted lumps from the flour.</h2>
    </div>

    {{-- Slide 30 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p11a.png') }}" class="!max-w-[40vw]" />
        <h2 class="title stroke">The smooth flour will pass through the sieve
            and be used in baking.</h2>
    </div>

    {{-- Slide 31 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p11.png') }}" class="w-img4" />
        <h2 class="title stroke">This is a coffee <span class="!text-white"> filter </span>paper.
            The <span class="!text-white"> filter </span> helps to trap coffee grounds on the paper.</h2>
    </div>

    {{-- Slide 32 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p11.png') }}" class="w-img4" />
        <h2 class="title stroke">Only liquid coffee will be able to flow through
            the coffee filter paper.</h2>
    </div>

    {{-- Slide 33 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p12.png') }}" />
        <h2 class="title stroke">This is a water filter for tap water. This filter helps remove
            impurities from the tap water as it flows out of the tap.</h2>
    </div>

    {{-- Slide 34 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="title stroke items-center">Let’s make a water filter!</h2>
    </div>

    {{-- Slide 35 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="text-white">Class Activity 1 </h2>

        <img src="{{ asset('assets/images/K2/sustain/pollution/p13.png') }}" class="w-img" />
        <h2 class="title stroke text-start">Let's find out: <br>
            How can we clean dirty water? Which filter materials are
            good for cleaning dirty water?</h2>
    </div>

    {{-- Slide 36 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="text-start title stroke">
            <h2>Let's do:</h2>
            <ol class="lesson-ul space-y-4 list-decimal" start="1">
                <li>Make dirty water by mixing paint, straws, soil, leaves, small pieces of rubbish like tissue paper, food
                    wrapper, eraser rubbings, coffee, oil, egg shells etc. Ensure it is enough for all groups to use.</li>
            </ol>
        </div>

        <img src="{{ asset('assets/images/K2/sustain/pollution/p14.png') }}" />
    </div>

    {{-- Slide 37 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[55vh]">
        <div class="text-start title stroke">
            <h2>Let's do:</h2>
            <ol class="lesson-ul space-y-4 list-decimal" start="2">
                <li>Look at the dirty water mixture. Discuss as a class about what can be seen in the mixture.</li>
                <li>How can we remove the rubbish in the mixture? Which rubbish is the easiest to remove?</li>
                <li>Look at the filter materials. Discuss and guess which filter materials will help in cleaning the
                    mixture.</li>
            </ol>
        </div>
        <p class="note">Note: Teacher may get children to share why they think certain filter material is good for
            cleaning up the water. You may include children's suggestion in the activity for them to verify if that material
            does help in cleaning up. Teacher can continue to jot down children's views on the large paper.</p>
    </div>

    {{-- Slide 38 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="text-start title stroke">
            <h2>Let's do:</h2>
            <ol class="lesson-ul space-y-4 list-decimal" start="5">
                <li>In each small groups, choose the filter materials for your
                    water filter (choose up to 5 types)</li>
                <li>Place the bottles as shown.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/sustain/pollution/p15.png') }}" class="w-img2" />

    </div>

    {{-- Slide 39 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[55vh]">
        <div class="text-start title stroke">
            <h2>Let's do:</h2>
            <ol class="lesson-ul space-y-4 list-decimal" start="7">
                <li>Think of the sequence of the filter materials to be placed in the bottles. Which is at the bottom and
                    which is at the top?</li>
                <li>Fill up the bottles with the filter materials layer by layer as planned.</li>
            </ol>
        </div>
        <p class="note">Note: Engage children in thinking by asking them these <a
                class="click-btn2 text-[#F7B94A]">questions</a>. Teacher can guide children in scooping the filter
            materials and placing them in the bottles. Ensure that children do not mix them materials.</p>
    </div>

    {{-- Slide 40 --}}
    <div class="slide hidden flex click2 flex-col !text-start items-center">
        <h2 class="title stroke">Guiding Questions:</h2>
        <ol class="list-disc">
            <li>Do you think this material will help to remove the dirt?</li>
            <li>What should be done to remove the bigger pieces of rubbish?</li>
            <li>Look at the sizes of the filter materials. Are they the same? How can they be placed in order?</li>
            <li>Do you think the order of the filter materials will affect how clean the water will be?</li>
            <li>Is the water cleaner after passing through the filter? Is the result similar to other groups?</li>
        </ol>
    </div>

    {{-- Slide 41 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="text-start title stroke">
            <h2>Let's do:</h2>
            <ol class="lesson-ul space-y-4 list-decimal" start="9">
                <li>Place the all bottles in a row (including the bottles that teacher had prepared).</li>
                <li>Pour equal amount of dirty water into each filter and wait for the water to seep through.</li>
                <li>Let it sit for a few hours as it may take a long time to filter.</li>
                <li>Compare the water collected from each water filter and discuss the results.</li>
            </ol>
        </div>
        <p class="note">Note: Teacher to remind children that although the water may look cleaner, it has not gone
            through cleaning of bacteria so it is still unsafe to drink.</p>
    </div>

    {{-- Slide 42 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[55vh]">
        <div class="text-start title stroke">
            <h2>Let's do:</h2>
            <ol class="lesson-ul space-y-4 list-decimal" start="13">
                <li>Which water filter works best?</li>
                <li>What filter materials were used in the bottle that produced the cleanest water?</li>
                <li>Compare the water collected from the teacher's bottles. One has activated charcoal and one does not. How
                    is the water collected different and what does that show?</li>
            </ol>
        </div>
        <p class="note">Note: Teacher can share that the activated charcoal is used to remove harmful chemicals, smell
            and taste in many water filtering machines.</p>
    </div>

    {{-- Slide 43 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p16.png') }}" />
        <h2 class="title stroke">Dirty water will need to go through many layers of
            filters to get clean.</h2>
    </div>

    {{-- Slide 44 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p17.png') }}" />
        <h2 class="title stroke">Bigger pieces of rubbish such as straws and food wrapper are
            trapped on the top layer filled with large pebbles.</h2>
    </div>

    {{-- Slide 45 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p17.png') }}" />
        <h2 class="title stroke">Bigger pieces of rubbish such as straws and food wrapper are
            trapped on the top layer filled with large pebbles.</h2>
    </div>

    {{-- Slide 46 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/gl1.png') }}" class="!max-w-[35vw]" />
        <h2 class="title stroke">Liquid flows through the different layers of filter materials.
            Unwanted substances are trapped in the layers accordingly.</h2>
    </div>

    {{-- Slide 47 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/gl2.png') }}" class="!max-w-[35vw]" />
        <h2 class="title stroke">Clean liquid is collected at the bottom of the container.</h2>
    </div>

    {{-- Slide 48 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p18.png') }}" />
        <h2 class="title stroke">The <span class="!text-white">liquid</span> was brown and filled with rubbish before
            going through the <span class="!text-white">filter </span>. The <span class="!text-white">liquid</span> is
            colourless
            and clean after going through the <span class="!text-white">filter </span>.</h2>
    </div>

    {{-- Slide 49 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p19.png') }}" />
        <h2 class="title stroke">Do you think this liquid is now safe for us to drink?</h2>
        <p class="note">Note: Encourage children to share their thoughts.</p>
    </div>

    {{-- Slide 50 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p19.png') }}" />
        <h2 class="title stroke">No! The liquid still needs to go through cleaning to get rid of
            bacteria before it can be safe for drinking.</h2>
    </div>

    {{-- Slide 51 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p9.png') }}" />
        <h2 class="title stroke">Similarly, water filters are needed to clean up and remove the
            rubbish in the polluted sea water.</h2>
    </div>

    {{-- Slide 52 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p9.png') }}" />
        <h2 class="title stroke">The process to clean up the sea is not easy and it is expensive
            to have such water filters to make water clean.</h2>
    </div>

    {{-- Slide 53 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p9.png') }}" />
        <h2 class="title stroke">However, if everyone does their part and not throw so much
            rubbish, the sea can be cleaner!</h2>
    </div>

    {{-- Slide 54 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p20.png') }}" />
        <h2 class="title stroke">Let’s take closer look at the rubbish.</h2>
    </div>

    {{-- Slide 55 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p20.png') }}" />
        <h2 class="title stroke">What type of rubbish do you see?</h2>
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>

    {{-- Slide 56 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p20.png') }}" />
        <h2 class="title stroke">There are plastic bags, food wrappers, straws, ropes and
            plastic baskets.</h2>
    </div>

    {{-- Slide 57 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p20.png') }}" />
        <h2 class="title stroke">In fact, most of the rubbish you see here
            are made of plastics.</h2>
    </div>

    {{-- Slide 58 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p20.png') }}" />
        <h2 class="title stroke"><span class="!text-white">Plastics</span> are harmful to the environment because
            they are <span class="!text-white">non-biodegradable</span>.</h2>
    </div>

    {{-- Slide 59 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p20.png') }}" />
        <h2 class="title stroke"><span class="!text-white">Non-biodegradable</span> materials cannot be broken down
            naturally. Therefore, they are a form of pollution to Earth.</h2>
    </div>

    {{-- Slide 60 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p21.png') }}" />
        <h2 class="title stroke"><span class="!text-white">Biodegradable</span> materials are materials from nature.
            These materials will break down naturally over time.</h2>
    </div>

    {{-- Slide 61 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p22.png') }}" class="w-img3" />
        <h2 class="title stroke">Wood and cotton are examples
            of biodegradable materials.</h2>
    </div>

    {{-- Slide 62 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p23.png') }}" class="w-img3" />
        <h2 class="title stroke">Furniture and papers products such as newspaper and
            books are made from wood.</h2>
    </div>

    {{-- Slide 63 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p24.png') }}" class="w-img3" />
        <h2 class="title stroke">Clothes, bed sheets and bags can be made from biodegradable
            materials such as cotton.</h2>
    </div>

    {{-- Slide 64 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="title stroke">Let's observe what happens to
            <span class="!text-white">non-biodegradable</span> materials and <span class="!text-white">biodegradable</span>
            materials in the sea over time.
        </h2>
    </div>

    {{-- Slide 65 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="text-white">Class Activity 2 </h2>

        <img src="{{ asset('assets/images/K2/sustain/pollution/p9.png') }}" />
        <h2 class="title stroke text-start">Let’s find out: <br>
            What happens to paper and plastics in the sea?</h2>
    </div>

    {{-- Slide 66 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="text-start title stroke">
            <h2>Let's do:</h2>
            <ol class="lesson-ul space-y-4 list-decimal">
                <li>Fill water in the two bottles until they are 3/4 full. Pretend that the water is the sea.</li>
            </ol>
        </div>

        <img src="{{ asset('assets/images/K2/sustain/pollution/p25.png') }}" />
    </div>

    {{-- Slide 67 --}}
    <div class="slide hidden flex flex-col items-center">

        <div class="text-start title stroke">
            <h2>Let's do:</h2>
            <ol class="lesson-ul space-y-4 list-decimal" start="2">
                <li>Prepare a square piece of plastic sheet cut out from a plastic bag and one piece of toilet paper. Ensure
                    both are of the same size.</li>
                <li>Ask children to touch and compare the items.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/sustain/pollution/p26.png') }}" class="!max-w-[37vw] h-[11vw]" />
        <p class="note">Note: Teacher to can take a photo of the items in the bottles for future comparisons.</p>
    </div>

    {{-- Slide 68 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="text-start title stroke">
            <h2>Let's do:</h2>
            <ol class="lesson-ul space-y-4 list-decimal" start="4">
                <li>Put the newspaper into bottle A and put the plastic sheet into bottle B.</li>
            </ol>
        </div>

        <img src="{{ asset('assets/images/K2/sustain/pollution/p27.png') }}" />
    </div>

    {{-- Slide 69 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="text-start title stroke">
            <h2>Let's do:</h2>
            <ol class="lesson-ul space-y-3 list-decimal" start="5">
                <li>Close the cap and shake the bottles to pretend that there are waves in the bottles.</li>
                <li>Encourage children to compare and discuss on the changes they observe after shaking.</li>
            </ol>
        </div>

        <img src="{{ asset('assets/images/K2/sustain/pollution/p28.png') }}" class="!h-[7vw]" />
        <p class="note">Note: Teacher can keep the bottles and get children to shake it daily. Observe the changes after
            one week. Get children to compare and observe if there are any changes for the plastic sheet.</p>
    </div>

    {{-- Slide 70 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p29.png') }}" />
        <h2 class="title stroke">Look at the plastic sheet in the bottle. What do you see?</h2>
        <p class="note">Note: Encourage children to share what they see.</p>
    </div>

    {{-- Slide 71 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p29.png') }}" />
        <h2 class="title stroke">Plastic is non-biodegradable.
            This means that it cannot be broken down.</h2>
    </div>

    {{-- Slide 72 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p29.png') }}" />
        <h2 class="title stroke">The plastic doesn't change no matter how hard you shake the
            bottle. Similarly, it will not break down when it is in the sea.</h2>
    </div>

    {{-- Slide 73 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p30.png') }}" />
        <h2 class="title stroke">Let’s look at the paper in the bottle.</h2>
        <p class="note">Note: Encourage children to share what they see.</p>
    </div>

    {{-- Slide 74 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/sustain/pollution/p30.png') }}" />
        <h2 class="title stroke">The toilet paper became smaller. The water broke the paper.</h2>
    </div>

    {{-- Slide 75 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p30.png') }}" />
        <h2 class="title stroke">The toilet paper is biodegradable. This means that it can be
            broken down into smaller pieces naturally.</h2>
    </div>

    {{-- Slide 76 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p30.png') }}" />
        <h2 class="title stroke">Things that are biodegradable break down in the environment
            and do not cause pollution.</h2>
    </div>

    {{-- Slide 77 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p9.png') }}" />
        <h2 class="title stroke">But things made of plastic do not break down.
            It will harm the animals and our environment.</h2>
    </div>

    {{-- Slide 78 --}}
    <div class="slide hidden flex flex-col items-center">

        <img src="{{ asset('assets/images/K2/sustain/pollution/p1.png') }}" class="w-img3" />
        <h2 class="title stroke">Pollution is harmful.
            It harms the animals, the environment and us.</h2>
    </div>

    {{-- ====================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton hidden">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    <div id="buttons" class="absolute flex flex-row gap-6">
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
        document.addEventListener("DOMContentLoaded", function() {
            const slides = document.querySelectorAll(".slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");
            const clickableButtons = document.querySelectorAll("[class*='info-btn'], [class*='click-btn']");

            let currentSlide = 0;
            let isViewingSpecialSlides = false;
            let parentSlide = null;
            let currentSpecialType = null;

            const returnRoute = "{{ route('pollutionSelection') }}";
            const doneRoute = "{{ route('k2sustainability') }}";

            function isSpecialSlide(slide) {
                const classList = Array.from(slide.classList);

                for (let className of classList) {
                    if (className.match(/^click\d+$/) || className.match(/^info-slide\d+$/)) {
                        return true;
                    }
                }
                return false;
            }

            function getSpecialTypeFromButton(button) {
                const classList = Array.from(button.classList);

                for (let className of classList) {
                    if (className.startsWith('click-btn')) {
                        const number = className.replace('click-btn', '');
                        return 'click' + number;
                    }
                    if (className.startsWith('info-btn')) {
                        const number = className.replace('info-btn', '');
                        return 'info-slide' + number;
                    }
                }
                return null;
            }

            function hasMoreSpecialSlides(fromIndex) {
                if (!currentSpecialType) return false;

                for (let i = fromIndex + 1; i < slides.length; i++) {
                    if (slides[i].classList.contains(currentSpecialType)) {
                        return true;
                    }
                }
                return false;
            }

            function isLastSlide(index) {
                if (index === slides.length - 1) return true;
                if (isViewingSpecialSlides && !hasMoreSpecialSlides(index)) return true;
                return false;
            }

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    if (i === index) {
                        slide.classList.remove("hidden");
                    } else {
                        slide.classList.add("hidden");
                    }
                });

                if (isLastSlide(index)) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            function goToNextSlide() {
                if (currentSlide >= slides.length - 1) return;

                currentSlide++;

                while (currentSlide < slides.length) {
                    const slide = slides[currentSlide];

                    if (isViewingSpecialSlides) {
                        if (slide.classList.contains(currentSpecialType)) break;
                    } else {
                        if (!isSpecialSlide(slide)) break;
                    }

                    currentSlide++;
                }

                if (currentSlide < slides.length) {
                    showSlide(currentSlide);
                }
            }

            function goToPreviousSlide() {
                if (currentSlide === 0 && !isViewingSpecialSlides) {
                    window.location.href = returnRoute;
                    return;
                }

                if (isViewingSpecialSlides) {
                    let prevSlide = currentSlide - 1;

                    while (prevSlide >= 0) {
                        if (slides[prevSlide].classList.contains(currentSpecialType)) break;
                        prevSlide--;
                    }

                    if (prevSlide >= 0) {
                        currentSlide = prevSlide;
                        showSlide(currentSlide);
                    } else {
                        currentSlide = parentSlide;
                        isViewingSpecialSlides = false;
                        currentSpecialType = null;
                        parentSlide = null;
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

            clickableButtons.forEach(button => {
                button.addEventListener("click", function(e) {
                    e.preventDefault();

                    parentSlide = currentSlide;
                    isViewingSpecialSlides = true;
                    currentSpecialType = getSpecialTypeFromButton(button);

                    for (let i = 0; i < slides.length; i++) {
                        if (slides[i].classList.contains(currentSpecialType)) {
                            currentSlide = i;
                            showSlide(currentSlide);
                            break;
                        }
                    }
                });
            });

            nextButtons.forEach(btn => {
                btn.addEventListener("click", goToNextSlide);
            });

            returnButton.addEventListener("click", goToPreviousSlide);

            if (doneButton) {
                doneButton.addEventListener("click", function() {
                    if (isViewingSpecialSlides && parentSlide !== null) {
                        currentSlide = parentSlide;
                        isViewingSpecialSlides = false;
                        currentSpecialType = null;
                        parentSlide = null;
                        showSlide(currentSlide);
                    } else {
                        window.location.href = doneRoute;
                    }
                });
            }

            showSlide(currentSlide);
        });
    </script>
@endpush
