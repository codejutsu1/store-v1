<x-user-dashboard>
    <div class="bg-gray-900 h-full p-8 pt-32">
        @can('view settings')
        <livewire:user.settings.site />
        <livewire:user.settings.socials />
        @endcan
        <livewire:user.settings.change-password />
    </div>
</x-user-dashboard>