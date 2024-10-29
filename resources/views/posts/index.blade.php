<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="w-full overflow-x-auto p-10" >
                    <table class="w-full">
                    <thead>
                        <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                        <th class="px-4 py-3">Titulo</th>
                        <th class="px-4 py-3">Contenido</th>
                        <th class="px-4 py-3">Tags</th>
                        <th class="px-4 py-3">Usuario</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach ($posts as $post)
                        <tr class="text-gray-700">
                            <td class="px-4 py-3 border">
                                <p class="font-semibold text-black">{{ $post->title }}</p>
                            </td>
                            <td class="px-4 py-3 border" >
                                {{ $post->content }}
                            </td>
                            <td class="px-4 py-3 text-ms font-semibold border">
                                @foreach ($post->tags as $tag)
                                    <span class="inline-flex items-center rounded-md bg-purple-50 px-2 py-1 text-xs font-medium text-purple-700 ring-1 ring-inset ring-purple-700/10">
                                        {{ $tag->name }}
                                    </span>
                                @endforeach
                            </td>
                            <td class="px-4 py-3 text-sm border"> {{ $post->user->name }} </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                    <div class="mt-5" >
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
