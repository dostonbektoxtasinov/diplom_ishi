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
                        <a href="#" class="btn btn-success">
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
                        <td>{{ $post->rasm }}</td>
                        <td>
                            <a href="#" class="btn btn-primary">
                                Update
                            </a>
                        </td>
                        <td>
                            <a href="#" class="btn btn-danger">
                                Delete
                            </a>
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
