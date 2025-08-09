<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <h1 class="text-2xl font-bold mb-4">Counter</h1>
    <div class="flex items-center space-x-4">
        <button wire:click="increment" class="px-4 py-2 bg-blue-300 text-white rounded hover:bg-blue-500">
            +
        </button>
        <span class="text-3xl font-bold">{{ $count }}</span>
        <button wire:click="decrement" class="px-4 py-2 bg-red-300 text-white rounded hover:bg-red-500">
            -
</button>
</div>
