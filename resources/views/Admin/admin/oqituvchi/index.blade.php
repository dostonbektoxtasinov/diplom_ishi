@extends('Admin.layouts.main')

@section('oqituvchi')
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>O'qituvchi rasm</th>
                        <th>O'qituvchi ismi</th>
                        <th>O'qitish fani</th>
                        <th></th>
                        <th>
                            <a href="#" class="btn btn-success">
                                Create
                            </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->rasm }}</td>
                            <td>{{ $post->ism }}</td>
                            <td>{{ $post->fan }}</td>
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
                        <th>O'qituvchi rasm</th>
                        <th>O'qituvchi ismi</th>
                        <th>O'qitish fani</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
