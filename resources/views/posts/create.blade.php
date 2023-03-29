<x-layouts.header-footer>
    <x-slot:title>
        Post yaratish
    </x-slot:title>


    <x-layouts.pages>
        Yangi post yaratish
    </x-layouts.pages>

    <div class="container py-5" style="display: flex; justify-content: center;">
        <div class="col-lg-7 mb-5 mb-lg-0">
            <div class="contact-form">
                <div id="success"></div>
                <form action="{{ route('posts.store') }}" method="post">
                    @csrf
                    {{-- <div class="control-group">
                        <input type="file" class="form-control p-3" name="" placeholder="Rasm"/>
                        @error('photo')
                            <p class="help-block text-danger mt-4">{{ $message }}</p>
                        @enderror
                    </div> --}}
                    <div class="control-group mb-4">
                        <input type="text" class="form-control p-4" name="title" placeholder="Sarlavha" />
                        @error('title')
                            <p class="help-block text-danger mt-4">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="control-group mb-4">
                        <input class="form-control p-4" rows="3" name="short_content" placeholder="Qisqacha malumot">
                        @error('short_content')
                            <p class="help-block text-danger mt-4">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="control-group mb-4">
                        <textarea class="form-control p-4" rows="6" name="content" placeholder="Ma'qola"></textarea>
                        @error('content')
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


</x-layouts.header-footer>
