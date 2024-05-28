@props(['type' => 'info'])

@php
    switch ($type) {
        case 'info':
            $class = ' text-blue-800 bg-blue-50 cian:bg-gray-800 cian::text-blue400';
            break;

        case 'danger':
            $class = ' text-red-800 bg-red-50 cian:bg-gray-800 cian::text-blue400';
            break;

        case 'success':
            $class = ' text-yellow-800 bg-yellow-50 cian:bg-gray-800 cian::text-blue400';
            break;

        case 'warning':
            $class = ' text-green-800 bg-green-50 cian:bg-gray-800 cian::text-blue400';
            break;

        case 'dark':
            $class = ' text-gray-800 bg-gray-50 cian:bg-gray-800 cian::text-blue400';
            break;

        default:
            $class = ' text-blue-800 bg-blue-50 cian:bg-gray-800 cian::text-blue400';
            break;
    }
@endphp

<div role="alert" {{$attributes->merge(['class' => 'p-4 text-sm rounded-lg' . $class])}}>
    <span class="font-medium">{{ $title ?? 'Info Alert!' }}</span> {{ $slot }}
</div>