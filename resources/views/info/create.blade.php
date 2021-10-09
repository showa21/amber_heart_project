@extends('layouts.app')

@section('content')

<div class="m-auto w-4/8 py24">
    <div class="text-center">

        <h1>Add qualification</h1>
        


    </div>

</div>

<div class="flex justify=center py20">
    
    <form action="/info" method="POST">
        @csrf

        <div class="block">
            <input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" 
            name="subject" placeholder="Subject">
            
            <input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" 
            name="certification" placeholder="Certification ">

            <input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" 
            name="award" placeholder="Award">

            <input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" 
            name="institution" placeholder="Institution">

            <input type="number" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" 
            name="year" placeholder="Year">


            <button type="submit" class="bg=green-500 block shadow-5xl mb=10 p-2 w-80 font-bold uppercase">

                    submit
            </button>


        </div>



    </form>


</div>



@endsection
