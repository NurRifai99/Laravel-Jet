@section('title')
    Tampilkan POST
@endsection

<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>

    <a href="/create" class="bg-blue-500 px-5 py-3 m-5">Create</a>
</div>
