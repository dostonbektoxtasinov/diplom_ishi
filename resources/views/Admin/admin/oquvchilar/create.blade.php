@extends('Admin.layouts.main')

@section('oquvchilar')
    <div class="container py-5" style="display: flex; justify-content: center;">
        <div class="col-lg-7 mb-5 mb-lg-0">
            <div class="contact-form">
                <div id="success"></div>
                <form action="{{ route('oquvchilar.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="control-group mb-4">
                        <input type="file" class="form-control p-4" name="rasm" placeholder="Rasm" />
                        @error('rasm')
                            <p class="help-block text-danger mt-4">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="control-group mb-4">
                        <input type="text" name="ism_fam" class="form-control p-4"  placeholder="ISM FAMILYA" />
                        @error('ism_fam')
                            <p class="help-block text-danger mt-4">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="control-group mb-4">
                        <input type="text" class="form-control p-4" name="sinfi" placeholder="Sinfi" />
                        @error('sinfi')
                            <p class="help-block text-danger mt-4">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="control-group mb-4 ml-4">
                        <input type="radio" class="form-check-input " id="erkak" id="Erkak" value="Erkak" name="jinsi" placeholder="Jinsi" />
                        <label class="form-check-label ml-3" for="inlineRadio1">Erkak</label>
                        @error('jinsi')
                            <p class="help-block text-danger mt-4">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="control-group mb-4 ml-4">
                        <input type="radio" class="form-check-input p-4" id="ayol" value="Ayol" name="jinsi" placeholder="Jinsi" />
                        <label class="form-check-label ml-3" for="inlineRadio2">Ayol</label>
                        @error('jinsi')
                            <p class="help-block text-danger mt-4">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex mt-4">
                        <button class="btn btn-primary py-3 px-5" type="submit">
                            Saqlash
                        </button>
                        <a href="{{ route('oquvchilar.index') }}" class="btn btn-success py-3 px-5 float-right">
                            Ortga qaytish
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
