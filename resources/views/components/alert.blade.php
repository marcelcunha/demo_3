<div class="flex bg-green-200 p-4 rounded-2xl mx-auto text-green-500 mb-4 justify-between" x-data='{alert: true}' x-show='alert'>

    <span>{{$slot}}</span>

    <button class="object-right" x-on:click='alert=false'>
        <i class="fas fa-times"></i>
    </button>
</div>
