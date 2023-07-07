@extends('admin.layouts.base')
@section('contents')
<h1>Progetti</h1>

 @if (session('delete_success'))
    @php $project = session('delete_success') @endphp
    <div class="alert alert-danger">
        The project "{{ $project->title }}" has benn eliminated
        {{-- <form
            action="{{ route("admin.projects.restore", ['project' => $project]) }}"
                method="post"
                class="d-inline-block"
            >
            @csrf
            <button class="btn btn-warning">Ripristina</button>
        </form> --}}
    </div>
@endif

{{-- @if (session('restore_success'))
    @php $project = session('restore_success') @endphp
    <div class="alert alert-success">
        La pasta "{{ $pasta->titolo }}" è stata ripristinata
    </div>
@endif  --}}

{{-- <a class="btn btn-primary" href="{{ route('pastas.create') }}">Nuovo</a>
<a class="btn btn-primary" href="{{ route('pastas.trashed') }}">Cestino</a> --}}

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Image</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
            <tr>
                <th scope="row">{{ $project->id }}</th>
                <td>{{ $project->title }}</td>
                <td>{{ $project->url_image }}</td>
                <td>{{ $project->languages }}</td>
                <td>{{ $project->description }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('admin.projects.show', ['project' => $project]) }}">View</a>
                    <a class="btn btn-warning" href="{{ route('admin.projects.edit', ['project' => $project]) }}">Edit</a>
                    <button type="button" class="btn btn-danger js-delete" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="
                    {{$project->id}}">
                        Delete
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body">
          Are you sure?
        </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <form
                        action="{{ route('admin.projects.destroy', ['project' => $project]) }}"
                        data-template="{{ route('admin.projects.destroy', ['project' => '*****']) }}"
                        method="post"
                        class="d-inline-block"
                        id="confirm-delete"
                    >
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Delete</button>
                    </form>
            </div>
        </div>
    </div>
</div>

{{ $projects->links() }}

{{-- <div>
    <ul>
        @for($i = 1; $i <= $pastas->lastPage(); $i++)
            <li>
                <a href="/pastas?page={{ $i }}">{{ $i }}</a>
            </li>
        @endfor
    </ul>
</div> --}}
@endsection