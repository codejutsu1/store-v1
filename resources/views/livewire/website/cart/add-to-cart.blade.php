@if($addedToCart)
    <button type="button"  class="px-5 py-2 uppercase font-bold bg-[#FEE715] text-[#101820] rounded-tr-md rounded-bl-md text-center">Added</button>
@else
    <button type="button" wire:click="addToCart"  class="cursor-pointer px-5 py-2 uppercase font-bold bg-[#FEE715] text-[#101820] rounded-tr-md rounded-bl-md text-center">Add to Cart</button>
@endif