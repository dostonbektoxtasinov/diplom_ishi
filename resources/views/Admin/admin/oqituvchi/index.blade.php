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
                            <a href="{{ route('oqituvchi.create') }}" class="btn btn-success">
                                Create
                            </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>
                                <img style="width: 100px;" src="{{ asset('storage/'.$post->rasm) }}"  alt="image">
                            </td>
                            <td>{{ $post->ism }}</td>
                            <td>{{ $post->fan }}</td>
                           
                            <td>
                                <a href="{{ route('oqituvchi.edit', ['oqituvchi' => $post->id]) }}" class="btn btn-primary">
                                    Update
                                </a>
                            </td>
                            <td> 
                                <form action="{{ route('oqituvchi.destroy', ['oqituvchi' => $post->id]) }}" method="POST">
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
