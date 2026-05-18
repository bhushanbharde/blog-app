@props([
    'name' => '',
    'type' => 'primary',
    'icon' => '',
    'icontype' => ''
])

@php
    // Map your types to specific Tailwind color configurations
    $typeClasses = [
        'primary' => 'bg-blue-600 hover:bg-blue-500',
        'secondary' => 'bg-gray-700 hover:bg-gray-600',
        'danger' => 'bg-red-800 hover:bg-red-700',
        'success' => 'bg-green-700 hover:bg-green-600',
        'warning' => 'bg-orange-700 hover:bg-orange-600',
        'info' => 'bg-purple-700 hover:bg-purple-600',
        'outline' => 'border border-gray-700 hover:bg-gray-700',
    ][$type] ?? 'bg-blue-600'; // Fallback if type is missing or mismatched

@endphp

<button {{ $attributes->merge(['class' => "flex gap-2 items-center font-semibold text-sm px-5 py-2 rounded-lg hover:cursor-pointer transition duration-300 " . $typeClasses]) }}>
    @if ($icon)
        <i {{ $attributes->merge(['class' => "fa-".$icontype." fa-" . $icon]) }}></i>
    @endif
    <span class="">{{ $name }}</span>
</button>

{{-- <x-forms.button name="" type="" /> --}}