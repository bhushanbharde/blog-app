@props([
    'for' => '',
    
])

@if(session($for))
<div class="bg-green-950 border border-green-700 text-green-300 px-4 py-2 rounded my-6 flex items-center justify-between">
    <span>{{ session($for) }}</span>
    <button class="p-2 cursor-pointer" onclick="this.closest('div').remove()">
        <i class="fa-solid fa-xmark text-xl"></i>
    </button>
</div>
@endif