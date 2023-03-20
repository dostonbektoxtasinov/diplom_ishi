@extends('Admin.layouts.main')

@section('content')
    <div class="card">
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
                        <th>Telegram</th>
                        <th>Instagram</th>
                        <th>Whatsapp</th>
                        <th>Facebook</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->dars_ertalab }}</td>
                            <td>{{ $post->dars_kech }}</td>
                            <td>{{ $post->lokatsiya }}</td>
                            <td>{{ $post->tel_nomer }}</td>
                            <td>{{ $post->email }}</td>
                            <td>{{ $post->telegram }}</td>
                            <td>{{ $post->instagram }}</td>
                            <td>{{ $post->watsapp }}</td>
                            <td>{{ $post->facebook }}</td>
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
                        <th>Telegram</th>
                        <th>Instagram</th>
                        <th>Whatsapp</th>
                        <th>Facebook</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
