<x-user-dashboard>
    <div class="bg-gray-900 h-full p-8 pt-32">
        <div class="bg-gray-800 w-full mx-auto p-8 rounded-md text-gray-200">
            <h1 class="font-semibold text-2xl border-b pb-4">Staff - Build your team.</h1>
            <div class="py-10 overflow-x-auto">
                <table class="w-full bg-gray-900 rounded-md overflow-hidden">
                    <tr class="uppercase text-center border-b">
                        <th class="py-3 px-6">S/N</th>
                        <th class="py-3 px-6">Name</th>
                        <th class="py-3 px-6">Email</th>
                        <th class="py-3 px-6">Role</th>
                        <th class="py-3 px-6">Created At</th>
                        <th class="py-3 px-6">Actions</th>
                    </tr>
                </table>
            </div>
            <div class="flex justify-end">
                <button type="button" onclick="Livewire.emit('openModal', 'user.staff.create-staff')" class="bg-purple-800 text-white px-4 py-2 rounded-md font-semibold">
                    Create New Staff
                </button>
            </div>
        </div>
    </div>
</x-user-dashboard>