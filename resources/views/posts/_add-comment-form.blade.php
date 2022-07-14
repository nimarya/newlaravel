@auth
    <x-panel>
        <form action="/posts/{{ $post->slug; }}/comments" method="post">
            @csrf

            <header class="flex items-center">
                <img src="https://i.pravatar.cc/40?id={{ auth()->id(); }}" alt="" width="40" height="40" class="rounded-full">

                <h2 class="ml-4">Want to participate?</h2>
            </header>

            <div  class="mt-5">
                <textarea 
                    name="body" 
                    class="w-full text-sm focus:outline-none focus:ring" 
                    id=""  
                    rows="5" 
                    placeholder="Leave your comment!"
                    required></textarea>
                    
                    @error ('body')
                        <span class="text-xs text-red-500">{{ $message; }}</span>
                    @enderror
        
            </div>

            <div class="flex justify-end mt-5">
                <x-submit-button>Post</x-submit-button>
            </div>
        </form>
    </x-panel>
@else
<p class="text-sm">
    <a href="/register" class="text-blue-500 font-bold hover:text-blue-600">Register </a>
    or 
    <a href="/login" class="text-blue-500 font-bold  hover:text-blue-600">Log in</a>
     to comment.
</p>

@endauth