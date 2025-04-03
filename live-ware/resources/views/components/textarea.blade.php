<div>
    <textarea {{ $attributes->merge(['class' => 'w-full']) }}>
        {{ $slot }}
    </textarea>
</div>