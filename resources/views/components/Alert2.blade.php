<div role="alert" {{$attributes->merge(['class' => 'p-4 text-sm rounded-lg' . $class])}}>
    <span class="font-medium">{{ $title ?? 'Info Alert!' }}</span> {{ $slot }}
</div>