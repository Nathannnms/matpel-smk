<nav x-data="{ open: false }" class="bg-blue-200 border-b pb-3 border-gray-100 ">
<div class="flex ml-14">
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex hover:bg-red-400">
                        <x-nav-link :href="route('home')" :active="request()->routeIs('home')" class="text-slate-200">
                            {{ __('Home') }}
                        </x-nav-link>
                    </div>
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex hover:bg-red-400">
                        <x-nav-link :href="route('admin')" :active="request()->routeIs('admin')" class="text-slate-200">
                            {{ __('Admin') }}
                        </x-nav-link>
                    </div>
                        <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex hover:bg-red-400">
                            <x-nav-link :href="route('pengadaan')" :active="request()->routeIs('pengadaan')" class="text-slate-200">
                                {{ __('Pengadaan') }}
                        </x-nav-link>
                    </div>
                </div>
            </div>
</nav>

