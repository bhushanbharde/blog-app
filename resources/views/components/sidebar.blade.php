@php
    // dd($posts);
@endphp
<div class="pl-10 pt-12 border-l border-l-gray-700 w-3/12">
    <h2 class="mb-4">Staff Picks</h2>
    <div>
        @foreach ($posts as $key => $post)
            @if ($key < 3)
                <div class=" py-4 my-1 text-gray-200">
                    <div class="flex items-center text-sm gap-2">
                        <img class="w-8 rounded-full" src="{{ $post->avatar }}" alt="">
                        <span>{{ $post->name }}</span>
                    </div>
                    <a href="{{ route('posts.show', $post->id) }}" class="">
                        <h3 class="my-2 font-semibold">{{ $post->title }}</h3>
                    </a>
                    <p class="text-sm text-gray-400">{{ \Carbon\Carbon::parse($post->created_at)->format('M d, Y') }}
                    </p>
                </div>
            @endif
        @endforeach
    </div>

    <a href="{{ route('posts.index') }}" class="text-sm hover:underline">See the full list</a>

    <h2 class="mb-8 mt-10">Recommended topics</h2>
    <div class="flex flex-wrap gap-3 text-sm">
        @foreach ($tags as $tag)
            <a href="{{ route('tags.show', $tag->id) }}"
                class="inline-block px-4 py-2 bg-gray-800 rounded-lg hover:bg-gray-700 transition duration-300">{{ $tag->name }}</a>
        @endforeach
    </div>

    <h2 class="mb-4 mt-6">Who to follow</h2>
    <div>
        @foreach ($users as $user)
            <div class="flex justify-between items-center gap-3 my-6">
                <a href="{{ route('dash.users.show', $user->id) }}" class="flex items-start gap-3">
                    <img class="w-10 rounded-full" src="{{ $user->avatar }}" alt="">
                    <div class="">
                        <span class="font-semibold">{{ $user->name }}</span>
                        <p class="text-xs text-gray-400">{{ $user->about }}</p>
                    </div>
                </a>

                <a href="{{ route('dash.users.show', $user->id) }}"
                    class="text-sm px-4 py-2 border border-gray-700 rounded-lg hover:bg-gray-800">Follow</a>
            </div>
        @endforeach
    </div>

</div>
