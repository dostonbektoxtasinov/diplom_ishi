@extends('Admin.layouts.main')

@section('biz_haqimizda')

<div class="container py-5" style="display: flex; justify-content: center;">
    <div class="col-lg-7 mb-5 mb-lg-0">
        <div class="contact-form">
            <div id="success"></div>
            <form action="{{ route('biz_haqimizda.update', ['biz_haqimizda' => $biz_haqimizda->id ]) }}"  method="POST">
                @method('PUT')
                @csrf
                <div class="control-group mb-4">
                    <input type="text" class="form-control p-4" name="dars_ertalab" placeholder="Dars ertalab" value="{{ $biz_haqimizda->dars_ertalab }}"/>
                    @error('Dars vaqti')
                        <p class="help-block text-danger mt-4">{{ $message }}</p>
                    @enderror
                </div>
                <div class="control-group mb-4">
                    <input type="text" class="form-control p-4" name="dars_kech" placeholder="Dars kech" value="{{ $biz_haqimizda->dars_kech }}"/>
                    @error('Dars vaqti')
                        <p class="help-block text-danger mt-4">{{ $message }}</p>
                    @enderror
                </div>
                <div class="control-group mb-4">
                    <input type="text" class="form-control p-4" name="lokatsiya" placeholder="Lokatsiya" value="{{ $biz_haqimizda->lokatsiya }}"/>
                    @error('Manzil')
                        <p class="help-block text-danger mt-4">{{ $message }}</p>
                    @enderror
                </div>
                <div class="control-group mb-4">
                    <input type="number" class="form-control p-4" name="nomer" placeholder="Telefon nomer" value="{{ $biz_haqimizda->nomer }}"/>
                    @error('Nomer')
                        <p class="help-block text-danger mt-4">{{ $message }}</p>
                    @enderror
                </div>
                <div class="control-group mb-4">
                    <input type="email" class="form-control p-4" name="email" placeholder="example@gmail.com" value="{{ $biz_haqimizda->email }}"/>
                    @error('Email')
                        <p class="help-block text-danger mt-4">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex">
                    <button class="btn btn-primary py-3 px-5" type="submit">
                        Saqlash
                    </button>
                    <a href="{{ route('biz_haqimizda.index') }}" class="btn btn-success py-3 px-5 float-right">
                        Ortga qaytish
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
