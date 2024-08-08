<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-gradient-to-r from-[#db2d1b] to-[#3c2a99] text-white text-[14px] font-semibold py-2 px-4 rounded transition duration-300 ease-in-out hover:opacity-80']) }}>
    {{ $slot }}
</button>
