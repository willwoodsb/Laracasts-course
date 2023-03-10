@props(['heading'])

<section class="py-8 max-w-4xl mx-auto">
    <h1 class="text-xl font-bold mb-8 pb-2 border-b">
        {{ $heading }}
    </h1>
    <div class="flex flex-row">
        <aside class="w-48 flex-shrink-0">
            <h4 class="font-semibold mb-6">Links</h4>
            <ul>
                <li>
                    <a href="/admin/posts/create" class="hover:underline {{ request()->is('admin/posts/create') ? 'text-blue-500' : '' }}">New Post</a>
                </li >
                <li>
                <a href="/admin/posts" class="hover:underline {{ request()->is('admin/posts') ? 'text-blue-500' : '' }}">All Posts</a>
                </li>
            </ul>
        </aside>
        <main class="flex-1">
            <x-panel>
                {{ $slot }}
            </section>
        </main>
    </div>
</x-panel>