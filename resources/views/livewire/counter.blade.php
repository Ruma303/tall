<div class="flex flex-col items-center space-y-2">
    <h3 class="text-xl">Counter</h3>
    <div class="buttons">
        <button wire:click="decrement" class="p-3 w-12 bg-black text-white font-bold rounded">-</button>
        <button wire:click="increment" class="p-3 w-12 bg-black text-white font-bold rounded">+</button>
    </div>
    <p class="text-xl">{{ $count }}</p>
</div>


