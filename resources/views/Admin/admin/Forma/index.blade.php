@extends('Admin.layouts.main')

@section('Forma')
<div class="card">
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Ism</th>
                    <th>Rasm</th>
                    <th></th>
                    <th>
                        <a href="{{ route('Forma.create')}}" class="btn btn-success">
                            Create
                        </a>
                    </th>
                </tr>

            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->ism }}</td>
                        <td>
                            <img src="{{asset('storage/'.$post->rasm)}}" alt="" width="80px" height="50px">
                        </td>
                        <td>
                            <a href="{{ route('Forma.edit', ['Forma' => $post->id]) }}" class="btn btn-primary">
                                Update
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('Forma.destroy', ['Forma' => $post->id]) }}" method="POST">
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
                    <th>Ism</th>
                    <th>Rasm</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection
