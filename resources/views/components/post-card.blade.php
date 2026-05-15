{{-- 
Purpose - Reusable blog post preview card.
Used In:
    Home page
    Posts page
    Category page 
--}}


<div class="py-6 rounded-md shadow my-3">
    <div class="flex items-center text-sm">
        <img class="rounded-full w-6 mr-2 " src="{{ $post->avatar }}" alt="">
        <span>{{ $post->name }}</span>
        <i class="fa-solid fa-circle text-[5px] mx-2"></i>
        <span class="text-gray-400">May 13</span>
    </div>

    <a href="{{ route('posts.show', $post->id) }}" class="flex items-center">
        <div class="w-9/12 pr-12">
            <h2 class="text-2xl mb-2 font-bold">{{ $post->title }}</h2>
            <p class="line-clamp-3 text-sm text-gray-400">{{ $post->content }}</p>
        </div>

        <img class="w-3/12" src="{{ $post->cover_image }}" alt="">
    </a>

    <div class="flex text-gray-400 text-sm gap-6">
        <div>
            <a href=""><i class="fa-solid fa-hands-clapping"></i> 23</a>
        </div>
        <div>
            <a href=""><i class="fa-regular fa-comment"></i> 34</a>
        </div>
        <div>
            <a href=""><i class="fa-solid fa-retweet"></i> 12</a>
        </div>
    </div>
</div>