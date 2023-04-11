@extends('Admin.layouts.main')

@section('oqituvchi')

<div class="container py-5" style="display: flex; justify-content: center;">
    <div class="col-lg-7 mb-5 mb-lg-0">
        <div class="contact-form">
            <div id="success"></div>
            <form action="{{ route('oqituvchi.update', ['oqituvchi' => $oqituvchi->id]) }}"  method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="control-group mb-4">
                    <input type="file" class="form-control p-4" name="rasm" placeholder="Rasm" value="{{ $oqituvchi->rasm }}"/>
                    @error('rasm')
                        <p class="help-block text-danger mt-4">{{ $message }}</p>
                    @enderror
                </div>
                <div class="control-group mb-4">
                    <input type="text" class="form-control p-4" name="ism" placeholder="Fan oqituvchi"  value="{{ $oqituvchi->ism }}"/>
                    @error('Ism')
                        <p class="help-block text-danger mt-4">{{ $message }}</p>
                    @enderror
                </div>
                <div class="control-group mb-4">
                    <input type="text" class="form-control p-4" name="fan" placeholder="Fan nomi" value="{{ $oqituvchi->fan }}"/>
                    @error('Fan')
                        <p class="help-block text-danger mt-4">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex mt-4">
                    <button class="btn btn-primary py-3 px-5" type="submit">
                        Saqlash
                    </button>
                    <a href="{{ route('oqituvchi.index') }}" class="btn btn-success py-3 px-5 float-right">
                        Ortga qaytish
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
