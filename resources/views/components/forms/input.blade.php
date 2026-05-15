@props([
    'type' => '',
    'name' => '',
    'value' => '',
    'placeholder' => '',
])

    <input type="{{ $type }}" name="{{ $name }}" value="{{ $value }}"
        placeholder="{{ $placeholder }}"
        class="px-4 py-2 bg-[#1c2433] text-sm focus:outline-none border border-gray-700 rounded-sm mt-3 w-full"
    >
