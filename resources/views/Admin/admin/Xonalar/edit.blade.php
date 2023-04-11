@extends('Admin.layouts.main')

@section('Xonalar')
    <div class="container py-5" style="display: flex; justify-content: center;">
        <div class="col-lg-7 mb-5 mb-lg-0">
            <div class="contact-form">
                <div id="success"></div>
                <form action="{{ route('Xonalar.update', ['Xonalar' => $Xonalar->id]) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="control-group mb-4">
                        <input type="text" class="form-control p-4" name="hona_nomi" placeholder="Hona nomi" value="{{ $Xonalar->hona_nomi }}"/>
                        @error('Hona nomi')
                            <p class="help-block text-danger mt-4">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="control-group">
                        <input type="file" class="form-control p-4" name="rasm" placeholder="Rasm" />
                        @error('Rasm')
                            <p class="help-block text-danger mt-4">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex mt-4">   
                        <button class="btn btn-primary  py-3 px-5" type="submit">
                            Saqlash
                        </button>
                        <a href="{{ route('Xonalar.index') }}" class="btn btn-success py-3 px-5 float-right">
                            Ortga qaytish
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
