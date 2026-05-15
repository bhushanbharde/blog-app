@props([
    'name' => '',
    'rows' => '',
    'value' => '',
    'placeholder' => ''
])

<textarea name="{{ $name }}" id="" cols="30" rows="{{ $rows }}"
    class="border border-gray-700 bg-[#1c2433] px-4 py-2 mt-3 block w-full rounded-sm focus:outline-none" placeholder="{{ $placeholder }}"
>{{ $value }}</textarea>