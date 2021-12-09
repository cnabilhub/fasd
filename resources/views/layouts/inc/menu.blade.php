 <ul class="flex-col md:flex-row list-none items-center  md:flex">
     <a class="text-blueGray-500 block" href="#pablo" onclick="openDropdown(event,'user-dropdown')">
         <div class="items-center flex">
             <span
                 class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full"><img
                     alt="..." class="w-full rounded-full align-middle border-none shadow-lg"
                     src="{{ asset('/img/team-1-800x800.jpg') }}" /></span>
         </div>
     </a>
     <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
         id="user-dropdown">
         <span class="bg-blue-450 uppercase  py-2 px-4 font-normal block w-full whitespace-nowrap  text-gray-400">
             <i class="far fa-user"></i> {{ Auth::user()->name }}
         </span>
         <span class="bg-blue-450 text-sm py-2 px-4 font-normal block w-full whitespace-nowrap  text-gray-400 ">
             <i class="far fa-envelope-open"></i> {{ Auth::user()->email }}
         </span>
         <a href="#pablo"
             class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
             <i class="fas fa-cog"></i> Settings </a>
         <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
         <form action="{{ route('logout') }}" method="POST">
             @csrf
             <button type="submit"
                 class="text-left text-sm py-2 px-4 font-normal block w-full whitespace-nowrap  text-pink-700 bg-pink-50">
                 <i class="far fa-arrow-alt-circle-right"></i> Logout </button>
         </form>
     </div>
 </ul>
