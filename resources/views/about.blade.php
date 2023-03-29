<x-layouts.header-footer>
    <x-slot:footer>
        Maktab haqida
    </x-slot:footer>

    <x-layouts.pages>
        Maktab haqida
    </x-layouts.pages>

    {{-- components/layouts/about about file dan kelyapti --}}

    <x-layouts.about.about>

    </x-layouts.about.about>


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->

    {{-- @extends('Admin.admin') --}}
       {{-- components/layouts/about about school file dan kelyapti --}}
    <x-layouts.about.about-school>

    </x-layouts.about.about-school>


    <!-- Team Start -->
        <x-layouts.about.about-team>

        </x-layouts.about.about-team>
    <!-- Team End -->

</x-layouts.header-footer>
