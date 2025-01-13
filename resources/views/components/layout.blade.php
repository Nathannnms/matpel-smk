<nav x-data="{ open: false }" class="bg-blue-200 border-b border-gray-100 shadow-md">
    <div class="flex justify-center py-4"> <!-- Menambahkan padding vertikal -->
        <div class="space-x-8 sm:flex">
            <x-nav-link :href="route('home')" :active="request()->routeIs('home')" class="text-slate-800 text-2xl font-semibold hover:text-white hover:bg-red-400 transition duration-300 rounded-lg px-4 py-2">
                {{ __('Home') }}
            </x-nav-link>
            <x-nav-link :href="route('admin')" :active="request()->routeIs('admin')" class="text-slate-800 text-2xl font-semibold hover:text-white hover:bg-red-400 transition duration-300 rounded-lg px-4 py-2">
                {{ __('Admin') }}
            </x-nav-link>
            <x-nav-link :href="route('pengadaan')" :active="request()->routeIs('pengadaan')" class="text-slate-800 text-2xl font-semibold hover:text-white hover:bg-red-400 transition duration-300 rounded-lg px-4 py-2">
                {{ __('Pengadaan') }}
            </x-nav-link>
        </div>
    </div>
</nav>