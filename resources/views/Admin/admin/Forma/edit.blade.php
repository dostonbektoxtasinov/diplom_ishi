{{-- @extends('Admin.layouts.main')

@section('Forma')

<div class="container py-5" style="display: flex; justify-content: center;">
    <div class="col-lg-7 mb-5 mb-lg-0">
        <div class="contact-form">
            <div id="success"></div>
            <form action="{{ route('Forma.store') }}"  method="post">
                @csrf
                <div class="control-group mb-4">
                    <input type="text" class="form-control p-4" name="ism" value="{{ $post->ism }}" placeholder="Nomi" />
                    @error('Ism')
                        <p class="help-block text-danger mt-4">{{ $message }}</p>
                    @enderror
                </div>
                <div class="control-group">
                    <input type="file" class="form-control p-4" name="rasm" value="{{ $post->rasm }}" placeholder="Rasm"/>
                    <p class="help-block text-danger"></p>
                </div>
                <div>
                    <button class="btn btn-primary btn-block py-3 px-5" type="submit">
                        Saqlash
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection --}}
