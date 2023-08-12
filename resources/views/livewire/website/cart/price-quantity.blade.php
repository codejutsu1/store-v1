<div>
    <div class="mt-6 flex space-x-5 justify-center">
        <button wire:click="decrement" class="bg-[#101820] px-3 py-1 text-[#FEE715] font-bold text-4xl rounded-xl">-</button>
        <input type="number" min="1" wire:model="quantity" class="rounded-md w-20 shadow-md text-center focus:ring-0 text-lg" />
        <button wire:click="increment" class="bg-[#101820] px-2 py-1 text-[#FEE715] font-bold text-3xl rounded-xl">+</button>
    </div>
    <div class="py-5 text-xl font-semibold text-center">
        <p>Total - @money($total_price)</p>
    </div>
</div>