 <ul class="flex-col md:flex-row list-none items-center  md:flex relative" x-data="{ dropDown :  false}">

     <div class="border rounded-lg border-white bg-indigo-600 cursor-pointer text-blueGray-500 block"
         x-on:click=" dropDown= !dropDown">

         <div class="items-center flex  mx-2 p-1 select-none">

             <span
                 class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full"><img
                     alt="..." class="w-full rounded-full align-middle border-none shadow-lg"
                     src="{{ asset('/img/team-1-800x800.jpg') }}" />
             </span>
             <div class="ml-1 font-semibold text-white"> {{ Str::ucfirst(Auth::user()->name) }}</div>
         </div>

     </div>

     <div x-show="dropDown" @click.outside="dropDown = false"
         class="absolute top-16 left-0  bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
         id="user-dropdown">

         <span class="bg-blue-450 text-sm py-2 px-4 font-normal block w-full whitespace-nowrap  text-gray-400">
             <i class="far fa-envelope-open"></i> <span class="ml-2">
                 {{ Str::ucfirst(Auth::user()->email) }}
             </span>
         </span>
         <a href="#pablo"
             class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
             <i class="fas fa-cog"></i> Settings </a>

         <div class="h-0 my-1 border border-solid border-blueGray-100"></div>
         <form action="{{ route('logout') }}" method="POST">
             @csrf
             <button type="submit"
                 class="text-left text-sm py-2 px-4 font-normal block w-full whitespace-nowrap  text-pink-700 bg-pink-50">
                 <i class="far fa-arrow-alt-circle-right"></i> Logout </button>
         </form>
     </div>
 </ul>
