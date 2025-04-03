<div>
    <select {{ $attributes->merge(['class' => 'w-full']) }}>
        {{ $slot }}
    </select>
</div>