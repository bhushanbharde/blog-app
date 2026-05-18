<div class="">
    <img class="h-2/5 w-full object-cover" src="{{ $post->cover_image }}" alt="">
    <div class="text-sm flex items-center gap-2 my-6 text-gray-400">
        <img class="rounded-full w-8 " src="{{ $post->user->avatar }}" alt="">
        <span>{{ $post->user->name }}</span>
        <i class="fa-solid fa-circle text-[3px]"></i>
        <span>{{ \Carbon\Carbon::parse($post->created_at)->format('M d') }}</span>
    </div>

    <div class="my-4">
        <h2 class="mt-2 mb-2 text-lg font-bold line-clamp-2">{{ $post->title }}</h2>
        <p class="line-clamp-2 text-md text-gray-400">{{ strip_tags($post->content) }}</p>
    </div>

    <div class="flex justify-between items-center py-4 my-2">
        <div class="flex text-gray-400 text-sm gap-6">
            <div>
                <a href="" class="flex items-center gap-1"><i
                        class="fa-regular fa-heart"></i>{{ $post->likes->count() }}</a>
            </div>
            <div>
                <a href="" class="flex items-center gap-1"><i
                        class="fa-regular fa-comment"></i>{{ $post->comments->count() }}</a>
            </div>
            <div>
                <a href="" class="flex items-center gap-1"><i class="fa-solid fa-retweet"></i> 12</a>
            </div>
        </div>

        <div class="flex text-gray-400 gap-4">
            <div>
                <a href=""><i class="fa-regular fa-bookmark"></i></a>
            </div>
            <div>
                <a href=""><i class="fa-solid fa-share-nodes"></i></a>
            </div>
        </div>
    </div>
</div>
