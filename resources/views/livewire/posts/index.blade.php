@section('title')
    Tampilkan POST
@endsection

<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>

    <div class="w-auto mx-7 my-7 px-10 bg-slate-500 flex flex-col">
        <a href="/create" class="bg-blue-500 w-fit px-5 py-3 my-3">Create</a>
        <table class="table-fixed">
            <thead class="bg-red-600">
                
                    <th class="bg-green-500">Title</th>
                    <th>Konten</th>
                
            </thead>
            
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    {{ $posts->Links() }}
</div>
