@props(['heading'])

<section class="py-8 max-w-4xl mx-auto">

    <h1 class="texl-lg mb-8 pb-4 font-bold">
        {{ $heading; }}
    </h1>

    <div class="flex">
        <aside class="w-48">
            <h3 class="font-semibold mb-4">Links:</h3>
            <ul>
                <li>
                    <a 
                        href="/admin/posts/create" 
                        class="hover:text-blue-500 {{ request()->is('admin/posts/create') ? 'text-blue-500' : ''; }}"
                    >New Post</a>
                </li>
                <li>
                    <a 
                        href="/admin/dashboard" 
                        class="hover:text-blue-500 {{ request()->is('admin/dashboard') ? 'text-blue-500' : ''; }}"
                    >Dashboard</a>
                </li>
            </ul>
        </aside>

        <main class="flex-1">
            <x-panel class="bg-gray-100">
                {{ $slot; }}
            </x-panel>
        </main>
    </div>
    
    
</section>