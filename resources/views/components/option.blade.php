@props(['value' => null, 'isSelected' => false])

<a href="#"
    {{ $attributes->merge(['class' => 'block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out']) }}
    wire:click="$set('{{ $attributes->get('wire:model') }}', '{{ $value }}')">
    @if ($isSelected)
        <svg class="mr-2 h-4 w-4 text-green-500" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
            <path d="M5 13l4 4L19 7"></path>
        </svg>
    @endif
    {{ $slot }}
</a>
