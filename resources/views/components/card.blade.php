<div class=" mx-auto sm:px-6 lg:px-8">
    <div class="overflow-hidden  text-gray-600">

        <div class="px-6 py-4 bg-white border-b border-gray-600 font-bold uppercase ">
            @yield('card-header')
        </div>

        <div class="p-6 bg-white border-b border-gray-600 ">
            @yield('card-body')
        </div>


        @hasSection ('card-footer')
        <div class="p-6 bg-white border-gray-200 text-right">
            @yield('card-footer')
        </div>
        @endif

    </div>
</div>
