@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-indigo-400 text-base font-medium text-rose bg-cl focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 hover:text-gray hover:bg-white_ transition duration-150 ease-in-out'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-white_  hover:border-gray-300 focus:outline-none hover:text-gray hover:bg-white_ focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
