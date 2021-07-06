<!-- start sidebar -->
<div id="sideBar"
    class="relative flex flex-col flex-wrap mt-20 w-60 bg-white border-r border-gray-300 p-6  animated faster">


    <!-- sidebar content -->
    <div class="flex flex-col">


        <!-- end sidebar toggle -->
        <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">administração</p>

        <a href="{{route('users.index')}}"
            class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fas fa-users text-xs mr-2"></i>
            Usuários
        </a>
        <a href="{{route('prospects.index')}}"
            class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fas fa-user-plus text-xs mr-2"></i>
            Pré-Usuários
        </a>

        <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">menu</p>

        <a href="{{route('github.index')}}"
            class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fab fa-github text-xs mr-2"></i>
            GitHub
        </a>
    </div>
    <!-- end sidebar content -->

</div>
<!-- end sidbar -->
