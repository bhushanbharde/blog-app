<div class="w-3/12 h-screen pl-10 border-l border-l-gray-700">
    <img class="w-20 rounded-full" src="{{ $user->avatar }}" alt="">

    <h3 class="text-lg mb-2 mt-4 font-semibold">{{ $user->name }}</h3>

    <p class="my-2 text-gray-300">352 followers</p>

    <p class="my-2 text-sm text-gray-400">I write essays on literature, pop culture, video games, and reality. A throughline of my work is metanarrative horror and defining what it is to be human.</p>

    <div class="mt-6">
        <x-forms.button name="Follow" type="primary" />
    </div>
</div>