<x-layout>  
    <x-setting :heading="'Edit Post: ' . $post->title">
        <form method="POST" action="/admin/posts/{{$post->id}}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name="title" :value="old('title', $post->title)"/>
            <x-form.input name="slug" :value="old('slug', $post->slug)"/>
            <div class="flex mt-6">
                <div class="flex-1 mt-6">
                    <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $post->thumbnail)"/>
                </div>
                
                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="" class="rounded-xl ml-6" style="height: 100px"/>
            </div>
            
            <x-form.text-area name="excerpt">{{ old('excerpt', $post->excerpt) }}</x-form.text-area>
            <x-form.text-area name="body">{{ old('body', $post->body) }}</x-form.text-area>
            <div class="mb-6">
                <x-form.label name="category" />
                <select name="category_id" id="category">
                    @foreach (\App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}"{{ old('category_id', $post->category_id) == $category->id ? ' selected' : '' }}>{{ ucwords($category->name) }}</option>
                    @endforeach
                </select>
                <x-form.error name="category" />
            </div>
            <x-form.button>Update</x-form.button>
        </form>
    </x-setting>  
</x-layout>