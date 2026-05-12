<a {{ $attributes->merge([
    'class' => 'block w-full px-4 py-2 text-start text-sm leading-5 text-gray-200 hover:bg-blue-900 hover:text-green-400 focus:outline-none focus:bg-blue-900 transition duration-150 ease-in-out'
]) }}>
    {{ $slot }}
</a>