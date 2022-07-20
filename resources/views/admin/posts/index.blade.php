<x-layout>
    <x-setting heading="Manage Posts" >
        <table class="border border-black w-full">
            @foreach ($posts as $post)
                <tr class="border border-black">
                    <td class="font-semibold px-4 py-2 hover:text-blue-500">
                        <a href="/posts/{{ $post->slug; }}">
                            {{ $post->title; }}
                        </a>
                    </td>
                    <td>status</td>
                    <td class="text-blue-400 hover:text-blue-500"> 
                        <a href="/admin/posts/{{ $post->id; }}/edit">edit</a> 
                    </td>
                </tr>
            @endforeach
          </table>
    </x-setting>
</x-layout>