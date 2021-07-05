<!-- start navbar -->
<div
    class="md:fixed md:w-full md:top-0 md:z-20 flex flex-row flex-wrap items-center bg-white p-6 border-b border-gray-300">

    <!-- logo -->
    <div class="flex-none w-56 flex flex-row items-center">

        <strong class="uppercase ml-1 flex-1 text-4xl">demo</strong>

        <button id="sliderBtn" class="flex-none text-right text-gray-900 hidden md:block">
            <i class="fas fa-list-ul"></i>
        </button>
    </div>
    <!-- end logo -->

    <!-- navbar content toggle -->
    <button id="navbarToggle" class="hidden md:block md:fixed right-0 mr-6">
        <i class="fas fa-chevron-double-down"></i>
    </button>
    <!-- end navbar content toggle -->

    <!-- navbar content -->
    <div id="navbar"
        class="animated md:hidden md:fixed md:top-0 md:w-full md:left-0 md:mt-16 md:border-t md:border-b md:border-gray-200 md:p-10 md:bg-white flex-1 pl-3 flex flex-row flex-wrap justify-end items-center md:flex-col md:items-center">
        <!-- left -->

        <!-- end left -->

        <!-- right -->
        <div class="flex flex-row-reverse items-center">

            <!-- user -->
            <div class="dropdown relative md:static" x-data="{userDropdown:false}">

                <button x-on:click='userDropdown=!userDropdown'
                    class="menu-btn focus:outline-none focus:shadow-outline flex flex-wrap items-center">
                    <div class="w-8 h-8 overflow-hidden rounded-full">
                        <i class="fas fa-user-circle text-4xl text-gray-500"></i>
                    </div>

                    <div class="ml-2 capitalize flex ">
                        <h1 class="text-sm text-gray-800 font-semibold m-0 p-0 leading-none">{{Auth::user()->name}}</h1>
                        <i class="fas fa-chevron-down ml-2 text-xs leading-none"></i>
                    </div>
                </button>

                <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>

                <div x-show='userDropdown'
                    class="text-gray-500 menu md:mt-10 md:w-full rounded bg-white shadow-md absolute z-20 right-0 w-40 mt-5 py-2 animated faster">

                    <!-- item -->
                    <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out"
                        href="{{route('profile')}}">
                        <i class="fas fa-user-edit text-xs mr-1"></i>
                        Editar Perfil
                    </a>
                    <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out"
                        href="{{route('profile.password')}}">
                        <i class="fas fa-key text-xs mr-1"></i>
                        Alterar Senha
                    </a>
                    <!-- end item -->

                    <hr>

                    <!-- item -->
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button
                            class="w-full px-4 py-2 block text-left capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out"
                            type="submit">
                            <i class="fas fa-user-times text-xs mr-1"></i>
                            logout
                        </button>
                    </form>
                    <!-- end item -->

                </div>
            </div>
            <!-- end user -->

        </div>
        <!-- end right -->
    </div>
    <!-- end navbar content -->

</div>
<!-- end navbar -->
