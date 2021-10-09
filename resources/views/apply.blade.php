@extends('layouts.app')

@section('content')

<div class="">
    <img class="w-1/2 py-8" src="images/logoaha.png" alt="">

</div>


<table class="w-full  mt-10 border-separate">

    <tr class="font-arial text-3xl ">
            <th class="border border-green-600">Course Name </th>
        
            <th class="border border-green-600"> Course Award</th>
        
            <th class="border border-green-600">Course Duration </th>
        
            <th class="border border-green-600">Course Modality</th>
    </tr>

    @foreach ($courses as $course )
    <tr class=" font-serif text-lg text-center text-xl pt-8">
        <td class="border border-green-600">{{ $course->name}}</td>
        <td class="border border-green-600">{{ $course->award}}</td>
        <td class="border border-green-600">{{ $course->duration }}</td>
        <td class="border border-green-600">{{ $course->modality}}</td>
        <td class="border border-green-600">
            <button>Apply</button>
        </td>
    </tr>
    @endforeach
</table>
    
@endsection