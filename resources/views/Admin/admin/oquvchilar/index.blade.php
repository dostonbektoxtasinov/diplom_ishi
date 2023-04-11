@extends('Admin.layouts.main')

@section('oquvchilar')
    <div class="card">
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Rasm</th>
                        <th>Ism Familya</th>
                        <th>Sinfi</th>
                        <th>Jinsi</th>
                        <th></th>
                        <th>
                            <a href="{{ route('oquvchilar.create') }}" class="btn btn-success">
                                Create
                            </a>
                        </th>
                    </tr>

                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <th>
                                <img style="width: 100px;" src="{{ asset('storage/'.$post->rasm) }}" alt="">
                            </th>
                            <th>{{ $post->ism_fam }}</th>
                            <th>{{ $post->sinfi }}</th>
                            <th>{{ $post->jinsi }}</th>
                           
                            <td>
                                <a href="{{ route('oquvchilar.edit', ['oquvchilar' => $post->id]) }}" class="btn btn-primary">
                                    Update
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('oquvchilar.destroy', ['oquvchilar' => $post->id]) }}" method="POST">
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
                        <th>Rasm</th>
                        <th>Ism Familya</th>
                        <th>Sinfi</th>
                        <th>Jinsi</th>  
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
