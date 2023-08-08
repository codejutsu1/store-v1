<div class="bg-gray-800 w-full mx-auto p-4 md:p-8 rounded-md text-gray-200 mt-20">
    <h1 class="font-semibold text-xl md:text-2xl border-b pb-4">Change Password? - Sure, just below here.</h1>

    <div>
        <form wire:submit.prevent="submit" class="py-10 space-y-10">
            <div class="flex flex-col">
                <label for="input_show_hide_password">Current Password</label>
                <div 
                    x-data="{ show: false }"
                    class="relative flex items-center mt-2"
                >
                    <input 
                        :type=" show ? 'text': 'password' "
                        wire:model.lazy="current_password"
                        class="w-full rounded-md text-gray-200 bg-gray-900 focus:ring-0 focus:border-purple-600 mt-2"
                    >
                    <button type="button" class="absolute right-2 bg-transparent flex items-center justify-center" @click="show = !show">
                        <svg x-show="!show"  class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path></svg>

                        <svg x-show="show" x-cloak class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    </button>
                </div>
                @error('current_password') <span class="text-red-600 font-bold">{{ $message }}</span> @enderror
            </div>
            <div class="md:grid grid-cols-2 md:gap-10 space-y-10 md:space-y-0">
                <div class="flex flex-col">
                    <label for="new_password">New Password</label>
                    <div 
                        x-data="{ show: false }"
                        class="relative flex items-center mt-2"
                    >
                        <input 
                            :type=" show ? 'text': 'password' "
                            wire:model.lazy="new_password"
                            class="w-full rounded-md text-gray-200 bg-gray-900 focus:ring-0 focus:border-purple-600 mt-2"
                        >
                        <button type="button" class="absolute right-2 bg-transparent flex items-center justify-center" @click="show = !show">
                            <svg x-show="!show"  class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path></svg>

                            <svg x-show="show" x-cloak class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                        </button>
                    </div>
                    @error('new_password') <span class="text-red-600 font-bold">{{ $message }}</span> @enderror
                </div>

                <div class="flex flex-col">
                    <label for="confirm_new_password">Confirm New Password</label>
                    <div 
                        x-data="{ show: false }"
                        class="relative flex items-center mt-2"
                    >
                        <input 
                            :type=" show ? 'text': 'password' "
                            wire:model.lazy="confirm_new_password"
                            class="w-full rounded-md text-gray-200 bg-gray-900 focus:ring-0 focus:border-purple-600 mt-2"
                        >
                        <button type="button" class="absolute right-2 bg-transparent flex items-center justify-center" @click="show = !show">
                            <svg x-show="!show"  class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path></svg>

                            <svg x-show="show" x-cloak class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                        </button>
                    </div>
                    @error('confirm_new_password') <span class="text-red-600 font-bold">{{ $message }}</span> @enderror
                </div>
            </div>
            
            <div class="flex justify-end">
                <input type="submit" class="cursor-pointer bg-purple-800 text-white px-4 py-2 rounded-md font-semibold" value="Update Password" />
            </div>
        </form>
    </div>
</div>