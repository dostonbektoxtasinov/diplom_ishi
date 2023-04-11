@extends('Admin.layouts.main')

@section('Xonalar')
<div class="card">
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Hona nomi</th>
                    <th>Rasm</th>
                    <th></th>
                    <th>
                        <a href="{{ route('Xonalar.create') }}" class="btn btn-success">
                            Create
                        </a>
                    </th>
                </tr>

            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->hona_nomi }}</td>
                        <td>
                            <img style="width: 100px;" src="{{ asset('storage/'.$post->rasm) }}"  alt="image">
                        </td>
                        <td>
                            <a href="{{ route('Xonalar.edit', ['Xonalar' => $post->id]) }}" class="btn btn-primary">
                                Update
                            </a>
                        </td>
                        <td> 
                            <form action="{{ route('Xonalar.destroy', ['Xonalar' => $post->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
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
                    <th>Hona nomi</th>
                    <th>Rasm</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection
