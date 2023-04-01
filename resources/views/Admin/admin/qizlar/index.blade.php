@extends('Admin.layouts.main')

@section('qizlar')
<div class="card">
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Rasm</th>
                    <th>FISH</th>
                    <th>Qisqacha malumot</th>
                    <th>To'liq malumot</th>
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
                        <td>{{ $post->photo }}</td>
                        <td>{{ $post->fish}}</td>
                        <td>{{ $post->short_content }}</td>
                        <td>{{ $post->content }}</td>
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
                    <th>Rasm</th>
                    <th>FISH</th>
                    <th>Qisqacha malumot</th>
                    <th>To'liq malumot</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection
