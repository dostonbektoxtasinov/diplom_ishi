@extends('Admin.layouts.main')

@section('biz_haqimizda')

<div class="container py-5" style="display: flex; justify-content: center;">
    <div class="col-lg-7 mb-5 mb-lg-0">
        <div class="contact-form">
            <div id="success"></div>
            <form action="{{ route('biz_haqimizda.store') }}"  method="post">
                @csrf
                <div class="control-group mb-4">
                    <input type="text" class="form-control p-4" name="ertalab" placeholder="Dars ertalab" />
                    @error('Dars vaqti')
                        <p class="help-block text-danger mt-4">{{ $message }}</p>
                    @enderror
                </div>
                <div class="control-group mb-4">
                    <input type="text" class="form-control p-4" name="kech" placeholder="Dars kech" />
                    @error('Dars vaqti')
                        <p class="help-block text-danger mt-4">{{ $message }}</p>
                    @enderror
                </div>
                <div class="control-group mb-4">
                    <input type="text" class="form-control p-4" name="manzil" placeholder="Lokatsiya" />
                    @error('Manzil')
                        <p class="help-block text-danger mt-4">{{ $message }}</p>
                    @enderror
                </div>
                <div class="control-group mb-4">
                    <input type="number" class="form-control p-4" name="nomer" placeholder="Telefon nomer" />
                    @error('Nomer')
                        <p class="help-block text-danger mt-4">{{ $message }}</p>
                    @enderror
                </div>
                <div class="control-group mb-4">
                    <input type="email" class="form-control p-4" name="email" placeholder="example@gmail.com" />
                    @error('Email')
                        <p class="help-block text-danger mt-4">{{ $message }}</p>
                    @enderror
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

@endsection
