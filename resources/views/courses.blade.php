@extends('layouts.app')

@section('content')



<div class="w-5/5 mt-5 py-4 mb-5">
    <video src="images/vvv.mp4" controls autoplay> vv</video>
</div>
<h1 class="mb-6 text-gray-700 text-center font-light tracking-wider text-4xl sm:mb-8 sm:text-6xl underline">Courses Offered</h1>

<div class=" mt-20 bg-blend-normal mx-8">

    <div class=" box-border h-35 w-35 p-4 border-4 w-4/5 rounded-md text-center">
        <img class="object-contain h-85 w-full py-8" src="images/Wd.png" alt="">
        <a href="{{ url('/apply') }}" class="text-6xl text-blue-700 underline">Web Development</a>
        <p class="mt-8">Get inspired to learn more about web development with these
             Skillshare classes. Explore online tutorials about a wide variety of topics, 
             from the basics of HTML and CSS, to more sophisticated programming and writing code. 
             Whether you’re looking for development and design for beginners, or you’re a working 
             front-end or back-end developer, you’ll find tips and classes to up your game, taught
              by experienced experts and pros. 
               a community of creators.</p>
    </div>

    <div class="box-border h-35 w-35 p-4 border-4 w-4/5 text-center ">
        <img class="object-contain h-85 w-full py-8" src="images/customers.jpg" alt="">
        <a href="{{ url('/apply') }}" class="text-6xl text-blue-700 underline">Customer Service</a>
        <p class="mt-8">Course is designed to equip participants with the
             requisite skills and techniques to deliver effective and exceptional customer service.</p>
    </div>

    <div class="box-border h-35 w-35 p-4 border-4 w-4/5 text-center">
        <img class="object-contain h-85 w-full py-8" src="images/intro.jpg" alt="">
        <a href="{{ url('/apply') }}" class="text-6xl text-blue-700 underline">Introduction to Computer Programming</a>
        <p class="mt-8"> This course provides you with the foundational skill set required to write computer programs. 
            If you are interested in learning how to write interactive, graphical programs from an 
            introductory level in a real programming language, this is the course for you. You will begin by learning the basics of editing and
             running programs. Then you will learn how to create 2D graphics using shapes and coordinates.</p>
    </div>

    <div class="box-border h-35 w-35 p-4 border-4 w-4/5 text-center">
        <img class="object-contain h-85 w-full py-8" src="images/vr2.jpg" alt="">
        <a href="{{ url('/apply') }}" class="text-6xl text-blue-700 underline">Introduction to Virtual Reality</a>
        <p class="mt-8">This course will introduce you to Virtual Reality (VR). The course will
             teach you everything from the basics of VR- the hardware and the history of VR- to different applications of VR, 
            the psychology of Virtual Reality, and the challenges of the medium.</p>
    </div>

    <div class="box-border h-35 w-35 p-4 border-4 w-4/5 text-center">
        <img class="object-contain h-85 w-full py-8" src="images/cm2.jpg" alt="">
        <a href="{{ url('/apply') }}" class="text-6xl mb-7 text-blue-700 underline">Cybersecurity and Mobility</a>
        <p class="mt-8">This course is for you if you are interested in transitioning toward a managerial 
            role in cybersecurity and mobility. Through interviews with industry experts in this area, 
            you will be able to analyze innovations powering the rapid spread of information technology and how they present new challenges for protecting data. For example, mobile devices increase convenience but often bypass traditional security measures. After this course, you will be able to describe how the nature of the threat evolves, as culprits employ a burgeoning set of sophisticated tools to take
             advantage of our growing reliance on networks for critical-data exchange.</p>
    </div>


</div>






    
@endsection