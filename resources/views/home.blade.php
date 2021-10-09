@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

            <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                Dashboard
            </header>

<!-- component -->
<div class="w-full relative mt-4 shadow-2xl rounded my-24 overflow-hidden">
  <div class="top h-64 w-full bg-blue-600 overflow-hidden relative" >
    <img src="https://images.unsplash.com/photo-1503264116251-35a269479413?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="" class="bg w-full h-full object-cover object-center absolute z-0">
    <div class="flex flex-col justify-center items-center relative h-full bg-black bg-opacity-50 text-white">
      {{-- <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" class="h-24 w-24 object-cover rounded-full"> --}}
      <h1 class="text-2xl font-semibold">Welcome: <span>{{ Auth::user()->name }}</span></h1>

    </div>
  </div>
  <div class="grid grid-cols-12 bg-white ">

    <div class="col-span-12 w-full px-3 py-6 justify-center flex space-x-4 border-b border-solid md:space-x-0 md:space-y-4 md:flex-col md:col-span-2 md:justify-start ">

      <a href="#" class="text-sm p-2 bg-indigo-900 text-white text-center rounded font-bold">Basic Information</a>

      <a href="#" class="text-sm p-2 bg-indigo-200 text-center rounded font-semibold hover:bg-indigo-700 hover:text-gray-200">Qualification</a>

      <a href="#" class="text-sm p-2 bg-indigo-200 text-center rounded font-semibold hover:bg-indigo-700 hover:text-gray-200">Application Status</a>

      <a href="#" class="text-sm p-2 bg-indigo-200 text-center rounded font-semibold hover:bg-indigo-700 hover:text-gray-200">Purchases</a>

      {{-- <a href="#" class="text-sm p-2 bg-indigo-200 text-center rounded font-semibold hover:bg-indigo-700 hover:text-gray-200">Logout</a> --}}


    </div>

    <div class="col-span-12 md:border-solid md:border-l md:border-black md:border-opacity-25 h-full pb-12 md:col-span-10">
      <div class="px-4 pt-4">
        <form action="#" class="flex flex-col space-y-8">

          <div>
            <h3 class="text-2xl font-semibold">Basic Information</h3>
            <hr>
          </div>

          <div class="form-item">
            <label class="text-xl ">Full Name</label>
            <input type="text" value="{{ Auth::user()->name }}" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2  mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200" disabled>
          </div>

          <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">

  
            <div class="form-item w-full">
              <label class="text-xl ">Email</label>
              <input type="text" value="{{ Auth::user()->email }}" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25 " disabled>
            </div>
          </div>

          <div class="form-item w-full">

          <button class="w-full appearance-none text-black text-opacity-50 rounded shadow 
           py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25 " disabled>
            Edit
          </button>

          </div>
        </div>

          {{-- <div>
            <h3 class="text-2xl font-semibold ">More About Me</h3>
            <hr>
          </div>

          <div class="form-item w-full">
            <label class="text-xl ">Biography</label>
            <textarea cols="30" rows="10" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25 " disabled>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem natus nobis odio. Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, eveniet fugiat? Explicabo assumenda dignissimos quisquam perspiciatis corporis sint commodi cumque rem tempora!</textarea>
          </div>

          <div>
            <h3 class="text-2xl font-semibold">My Social Media</h3>
            <hr>
          </div>

          <div class="form-item">
            <label class="text-xl ">Instagram</label>
            <input type="text" value="https://instagram.com/" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25 " disabled>
          </div>
          <div class="form-item">
            <label class="text-xl ">Facebook</label>
            <input type="text" value="https://facebook.com/" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25 " disabled>
          </div>
          <div class="form-item">
            <label class="text-xl ">Twitter</label>
            <input type="text" value="https://twitter.com/" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2  mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200  " disabled>
          </div> --}}

        </form>
      </div>
    </div>


  </div>
</div>



































            //
            <h1>hello tt</h1>
            <div class="w-full p-6">

                <form class="" action="">
                    <h1>Update your Info</h1>
                    <table class="border-separate border border-green-800 ...">
                        <thead>
                          <tr>
                            <th class="border border-green-600 ...">Id Picture</th>
                            <td class="border border-green-600 ..."><input type="file"></td>

                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="border border-green-600 ...">Qualifiactions</td>

                            <td class="border border-green-600 ..."><input type="text"></td>
                          </tr>
                          <tr>
                            <td class="border border-green-600 ...">Ohio</td>
                            <td class="border border-green-600 ...">Columbus</td>
                          </tr>
                          <tr>
                            <td class="border border-green-600 ...">Michigan</td>
                            <td class="border border-green-600 ...">Detroit</td>
                          </tr>
                        </tbody>
                      </table>
                   

                </form>
                <p class="text-gray-700">


                    {{-- @foreach ($User as $user )
                    <h1>{{ $user->email }}</h1>
                     @endforeach   --}}
                
                
            </p>
            </div>
        </section>
    </div>
</main>




{{-- <a href="/info"> info</a> --}}



@endsection
