<x-user-dashboard>
    <div class="bg-gray-900 h-full p-8 pt-32">
        <div class="bg-gray-800 w-3/5 mx-auto p-8 rounded-md text-gray-200 space-y-3 font-semibold">
            <h1 class="text-xl text-center">{{ ucwords($staff->name) }}'s Dashboard</h1>
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

        <div class="mt-10 bg-gray-800 w-full mx-auto p-8 rounded-md text-gray-200">
            <h1 class="font-semibold text-2xl border-b pb-4">Orders delivered by this user.</h1>
            <div class="py-10 overflow-x-auto">
                <table class="w-full bg-gray-900 rounded-md overflow-hidden">
                    <tr class="font-semibold border-b">
                        <th class="py-3 px-6">S/N</th>
                        <th class="py-3 px-6">Order Id</th>
                        <th class="py-3 px-6">Status</th>
                        <th class="py-3 px-6">Date</th>
                    </tr>
                    @forelse($orders as $order)
                        <tr class="border-b text-center">
                            <td class="py-4 px-6">{{ $order->id }}</td>
                            <td class="py-4 px-6">
                                <a href="{{ route('orders.show', $order->id) }}" class="underline block">{{ $order->order_id }}</a>
                            </td>
                            <td class="py-4 px-6">
                                <span class="bg-green-500 px-1.5 py-0.5 rounded-lg text-gray-100">Delivered</span>
                            </td>
                            <td class="py-4 px-6">{{ dateConvert($order->created_at) }}</td>
                        </tr>
                    @empty
                    <p class="text-center">No Orders delivered by this user yet...</p>
                    @endforelse
                </table>
                <div class="mt-10">
                    {{ $orders->links() }}
                </div>
            </div>
        </div>
    </div>
</x-user-dashboard>