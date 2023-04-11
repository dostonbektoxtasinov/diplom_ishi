@extends('Admin.layouts.main')

@section('Maqol')
<div class="card">
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Maqol</th>
                    <th></th>
                    <th>
                        <a href="{{ route('BoshMaqol.create') }}" class="btn btn-success">
                            Create
                        </a>
                    </th>
                </tr>

            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->maqollar }}</td>
                        <td>
                            <a href="{{ route('BoshMaqol.edit', ['BoshMaqol' => $post->id]) }}" class="btn btn-primary">
                                Update
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('BoshMaqol.destroy', ['BoshMaqol' => $post->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Maqol</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection
