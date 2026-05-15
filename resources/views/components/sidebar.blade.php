@php
// dd($posts);
@endphp
<div class="pl-10 pt-10 border-l border-l-gray-700 w-3/12">
    <h2 class="text-xl mb-4">Staff Picks</h2>
    <div>
        @foreach ($posts as $key => $post)
            @if ($key < 3)    
            <div class=" py-4 my-2 text-gray-200">
                <div class="flex text-sm gap-2">
                    <img class="w-6 rounded-full"
                        src="https://yt3.ggpht.com/yti/ANjgQV9c7LQ0MbOvY8QqxxUXC0qXcFOn2tXsnTWs5vGT9DS_CUmy=s88-c-k-c0x00ffffff-no-rj"
                        alt="">
                    <span>{{ $post->name }}</span>
                </div>
                <a href="{{ route('posts.show', $post->id) }}" class=""><h3 class="my-2 font-semibold">{{ $post->title }}</h3></a>
                <p class="text-sm text-gray-400">May 15</p>
            </div>
            @endif
        @endforeach
    </div>

    <a href="" class="text-sm hover:underline">See the full list</a>

    <h2 class="text-xl mb-4 mt-6">Recommended topics</h2>
    <div class="flex flex-wrap gap-3 text-sm">
        <a href=""
            class="inline-block px-4 py-2 bg-gray-800 rounded-lg hover:bg-gray-700 transition duration-300">Data
            Science</a>
        <a href=""
            class="inline-block px-4 py-2 bg-gray-800 rounded-lg hover:bg-gray-700 transition duration-300">Business</a>
        <a href=""
            class="inline-block px-4 py-2 bg-gray-800 rounded-lg hover:bg-gray-700 transition duration-300">Python</a>
        <a href=""
            class="inline-block px-4 py-2 bg-gray-800 rounded-lg hover:bg-gray-700 transition duration-300">AI</a>
        <a href=""
            class="inline-block px-4 py-2 bg-gray-800 rounded-lg hover:bg-gray-700 transition duration-300">Technology</a>
        <a href=""
            class="inline-block px-4 py-2 bg-gray-800 rounded-lg hover:bg-gray-700 transition duration-300">Machine
            Learning</a>
    </div>
</div>
