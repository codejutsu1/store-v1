<x-user-dashboard>
    <div class="bg-gray-900 h-full p-8 pt-32">
        <div class="bg-gray-800 w-3/5 mx-auto p-8 rounded-md text-gray-200 space-y-3 font-semibold">
            <h1 class="text-xl text-center">{{ $staff->name }}'s Dashboard</h1>
            <h2 class="text-lg text-center">Roles:</h2>
            @forelse($roles as $role_name)
                <div class="flex justify-between border-b py-5 font-semibold">
                    <span>{{ ucfirst($role_name) }}</span>

                    <span>
                        <livewire:user.staff.toggle-role :id_name="$staff->id" :user="$staff" :field="$role_name" />
                    </span>
                </div>
            @empty
            <p class="text-center">No Roles or Permission...</p>
            @endforelse
            <h2 class="text-lg text-center">Permissions: </h2>
            @foreach($staff->getAllPermissions() as $permission)
                <div class="flex justify-between border-b py-5 font-semibold">
                    <span>To {{ ucwords($permission->name) }}</span>
                </div>
            @endforeach
        </div>
    </div>
</x-user-dashboard>