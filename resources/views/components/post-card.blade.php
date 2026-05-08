{{-- 
Purpose - Reusable blog post preview card.
Used In:
    Home page
    Posts page
    Category page 
--}}


<div class="p-6 rounded shadow">

    <h2 class="text-2xl font-bold">
        {{ $post->title }}
    </h2>

    <p class="mt-2 text-gray-600">
        {{ Str::limit($post->content, 100) }}
    </p>

</div>