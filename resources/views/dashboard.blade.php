<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @can('create post')
                    <form action="{{route('post.store')}}" method="POST">
                        @csrf
                        <input type="text" name="title" placeholder="Título" class="w-full" >
                        <br>
                        <textarea name="content" placeholder="Contenido"></textarea>
                        <br>
                        <select name="tags[]" id="tags" multiple >
                            @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endforeach
                        </select>
                        <br>
                        <button>Enviar</button>
                    </form>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
