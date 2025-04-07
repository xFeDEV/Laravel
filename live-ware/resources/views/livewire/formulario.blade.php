<div>
    {{-- FORMULARIO PARA CREAR POST --}}
    <div class="bg-white shadow rounded-lg p-6 mb-8">
        <form wire:submit.prevent="save">
            {{-- Título --}}
            <div class="mb-4">
                <x-label>Nombre</x-label>
                <x-input class="w-full" wire:model="postCreate.title" />
                <x-input-error for="postCreate.title" />
            </div>

            {{-- Contenido --}}
            <div class="mb-4">
                <x-label>Contenido</x-label>
                <x-textarea class="w-full" wire:model="postCreate.content"></x-textarea>
                <x-input-error for="postCreate.content" />
            </div>

            {{-- Categoría --}}
            <div class="mb-4">
                <x-label>Categoría</x-label>
                <x-select wire:model="postCreate.category_id" :options="$categories->pluck('name', 'id')->toArray()">
                    <option value="">Selecciona una categoría</option>
                </x-select>
                <x-input-error for="postCreate.category_id" />
            </div>

            {{-- Etiquetas --}}
            <div class="mb-4">
                <x-label>Etiquetas</x-label>
                <ul>
                    @foreach ($tags as $tag)
                        <li>
                            <x-checkbox wire:model="selectedTags" value="{{ $tag->id }}" />
                            {{ $tag->name }}
                        </li>
                    @endforeach
                </ul>
                <x-input-error for="selectedTags" />
            </div>

            {{-- Botón Crear --}}
            <div class="flex justify-end">
                <x-button type="submit">Crear</x-button>
            </div>
        </form>
    </div>

   {{-- LISTADO DE POSTS --}}
<div class="bg-white shadow rounded-lg p-6 mt-4">
    <ul class="space-y-4">
        @foreach ($posts as $post)
            <li class="border-b pb-4" wire:key="post-{{ $post->id }}">
                <div class="flex justify-between items-center mb-2">
                    <h3 class="text-lg font-semibold">{{ $post->title }}</h3>
                    <div class="flex space-x-2">
                        <x-button wire:click='edit({{ $post->id }})'>Editar</x-button>
                        <x-danger-button wire:click='destroy({{ $post->id }})'>Eliminar</x-danger-button>
                    </div>
                </div>

                {{-- Contenido --}}
                <p class="text-gray-700 mb-1">{{ $post->content }}</p>

                {{-- Categoría --}}
                <p class="text-sm text-gray-500">Categoría: {{ $post->category->name ?? 'Sin categoría' }}</p>

                {{-- Etiquetas --}}
                <div class="text-sm text-gray-500 mt-1">
                    Etiquetas:
                    @forelse ($post->tags as $tag)
                        <span class="inline-block bg-gray-200 rounded px-2 py-0.5 text-xs text-gray-700 mr-1">{{ $tag->name }}</span>
                    @empty
                        <span class="text-gray-400">Sin etiquetas</span>
                    @endforelse
                </div>
            </li>
        @endforeach
    </ul>
</div>


    {{-- MODAL PARA EDITAR POST --}}
    <form wire:submit.prevent='update'>
        <x-dialog-modal wire:model='open'>
            <x-slot name="title">Editar post</x-slot>

            <x-slot name="content">
                {{-- Título --}}
                <div class="mb-4">
                    <x-label>Nombre</x-label>
                    <x-input class="w-full" wire:model='postEdit.title' required />
                    <x-input-error for="postEdit.title" />
                </div>

                {{-- Contenido --}}
                <div class="mb-4">
                    <x-label>Contenido</x-label>
                    <x-textarea class="w-full" wire:model='postEdit.content'></x-textarea>
                    <x-input-error for="postEdit.content" />
                </div>

                {{-- Categoría --}}
                <div class="mb-4">
                    <x-label>Categoría</x-label>
                    <x-select class="w-full" wire:model='postEdit.category_id'>
                        <option value="" disabled>Seleccione una categoría</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </x-select>
                    <x-input-error for="postEdit.category_id" />
                </div>

                {{-- Etiquetas --}}
                <div class="mb-4">
                    <x-label>Etiquetas</x-label>
                    <ul>
                        @foreach ($tags as $tag)
                            <li>
                                <x-checkbox wire:model='postEdit.tags' value="{{ $tag->id }}" />
                                {{ $tag->name }}
                            </li>
                        @endforeach
                    </ul>
                    <x-input-error for="postEdit.tags" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <div class="flex justify-end">
                    <x-danger-button class="mr-2" wire:click="$set('open', false)">Cancelar</x-danger-button>
                    <x-button type="submit">Actualizar</x-button>
                </div>
            </x-slot>
        </x-dialog-modal>
    </form>
</div>
