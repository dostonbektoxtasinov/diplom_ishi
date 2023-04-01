@extends('Admin.layouts.main')

@section('biz_haqimizda')
<div class="card mt-5">
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Ertalabki dars</th>
                    <th>Kechki dars</th>
                    <th>Manzil</th>
                    <th>Telefon nomer</th>
                    <th>Email</th>
                    <th></th>
                    <th>
                        <a href="{{ route('biz_haqimizda.create')}}" class="btn btn-success">
                            Create
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->dars_ertalab }}</td>
                        <td>{{ $post->dars_kech }}</td>
                        <td>{{ $post->lokatsiya }}</td>
                        <td>{{ $post->nomer }}</td>
                        <td>{{ $post->email }}</td>
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
                    <th>Ertalabki dars</th>
                    <th>Kechki dars</th>
                    <th>Manzil</th>
                    <th>Telefon nomer</th>
                    <th>Email</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection
