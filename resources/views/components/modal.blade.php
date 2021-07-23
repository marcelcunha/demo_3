<div x-show='modal' class="flex items-center justify-center fixed left-0 bottom-0 w-full h-full  shadow-inner">

    <div class="bg-white rounded-lg w-1/2 z-40">
        <div class="flex flex-col items-start p-4">
            <div class="flex items-center w-full">
                <div class="text-gray-900 font-medium text-lg">
                    @isset($title)
                    {{$title}}
                    @endisset
                </div>
                <svg x-on:click="modal=false" class="ml-auto fill-current text-gray-700 w-6 h-6 cursor-pointer"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                    <path
                        d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                </svg>
            </div>
            <hr>

            {{$slot}}

            <hr>
            @isset($footer)
            <div class="p-6 bg-white border-gray-200 text-right">
                {{$footer}}
            </div>
            @endisset
        </div>
    </div>
    <div class="z-30 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50"></div>
</div>
