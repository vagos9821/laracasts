@props(['active' => false])

<a {{ $attributes }}
    class="{{ $active ? 'bg-orange-900 text-white' : 'text-gray-300 hover:bg-orange-700 hover:text-white' }} block rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ $active ? 'page' : 'false' }}">
    {{ $slot }}
</a>
