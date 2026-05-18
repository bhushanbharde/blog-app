{{-- 
Purpose - Reusable blog post preview card.
Used In:
    Home page
    Posts page
    Category page 
--}}


<div class="py-8 rounded-md shadow border-b border-b-gray-700">
    <div class="flex items-center text-sm my-3">
        <img class="rounded-full w-8 mr-2 " src="{{ $post->user->avatar }}" alt="">
        <a href="{{ route('dash.users.show', $post->user->id) }}">{{ $post->user->name }}</a>
        <i class="fa-solid fa-circle text-[4px] mx-2 text-gray-400"></i>
        <span class="text-gray-400">{{ \Carbon\Carbon::parse($post->created_at)->format('M d, Y') }}</span>
    </div>

    <a href="{{ route('posts.show', $post->id) }}" class="flex ">
        <div class="w-9/12 pr-12">
            <h2 class="text-2xl my-2 font-bold">{{ $post->title }}</h2>
            <p class="line-clamp-3 text-sm text-gray-400 leading-6">
                {{ Str::words(strip_tags(preg_replace('/<h2[^>]*>.*?<\/h2>/is', '', $post->content))) }}
            </p>
        </div>
        
        <img class="w-3/12 rounded-lg object-cover" src="{{ $post->cover_image }}" alt="">
    </a>

    <div class="flex text-gray-400 text-sm gap-6 mt-4">
        <div>
            <a href=""><i class="fa-regular fa-heart mr-1"></i>{{ $post->likes->count() }}</a>
        </div>
        <div>
            <a href=""><i class="fa-regular fa-comment mr-1"></i>{{ $post->comments->count() }}</a>
        </div>
        <div>
            <a href=""><i class="fa-solid fa-retweet mr-1"></i> 12</a>
        </div>
    </div>
</div>