<div>
    <textarea {{ $attributes->merge(['class' => 'w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) }}>
        {{ $slot }}
    </textarea>
</div>
