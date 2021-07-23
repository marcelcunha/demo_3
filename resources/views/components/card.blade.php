<div class=" container mx-auto sm:px-6 lg:px-8 ">
    <div class="overflow-hidden  text-gray-600 rounded-lg">

        <div class="px-8 py-4 text-2xl font-bold bg-white border-b border-gray-300 font-bold uppercase ">
            @isset($header)
            {{$header}}
            @endisset
        </div>

        <div class="p-6 bg-white border-b border-gray-300 ">
            {{$slot}}
        </div>


        @isset ($footer)
        <div class="p-6 bg-white border-gray-200 text-right">
           {{$footer}}
        </div>
        @endisset

    </div>
</div>
