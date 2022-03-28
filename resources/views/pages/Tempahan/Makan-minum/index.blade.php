@extends('../layout/' . $layout)

@section('subhead')
    <title>Tempahan Makanan & Minuman | MyISM</title>
@endsection

@section('subcontent')
    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center mt-5">Tempahan</h2>
    <div class="grid grid-cols-12 gap-5 mt-5">
        <!-- BEGIN: Calendar Side Menu -->
        <div class="col-span-12">
            <form action="{{ route('tempahan.store') }}">
                @csrf
            </form>
            <div class="box p-5 intro-y">
                <!-- BEGIN: Show Modal Toggle -->
                <div class="text-center">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center mt-5">Makanan & Minuman</h2>
                </div>

                <div class="input-form mb-6 p-2">
                    <label for="" class="form-label w-full flex flex-col sm:flex-row">
                        Nama Kluster
                    </label>
                    <select id="klusterTempahanMakanMinum" name="kluster" class="w-full form-select box border-gray-300" data-pristine-required="">
                        <option value="">Pilih Satu</option>
                        @foreach ($klusters as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-form mb-6 p-2">
                    <label for="" class="form-label w-full flex flex-col sm:flex-row">
                        Nama Program
                    </label>
                    <select id="programTempahanMakanMinum" name="program" class="w-full form-select box border-gray-300" data-pristine-required="">
                    </select>
                </div>
                <form action="{{ route('tempahan-makan-minum.store') }}" method="post">
                    @csrf
                    <div class="" id="report-div">
                    </div>
                </form>


            </div>
        </div>
    </div>



    <!-- BEGIN: Success Notification Content -->
    <div id="success-notification-content" class="toastify-content hidden flex">
        <i class="text-theme-10" data-feather="check-circle"></i>
        <div class="ml-4 mr-4">
            <div class="font-medium">Registration success!</div>
            <div class="text-gray-600 mt-1">
                Please check your e-mail for further info!
            </div>
        </div>
    </div>
    <!-- END: Success Notification Content -->
    <!-- BEGIN: Failed Notification Content -->
    <div id="failed-notification-content" class="toastify-content hidden flex">
        <i class="text-theme-24" data-feather="x-circle"></i>
        <div class="ml-4 mr-4">
            <div class="font-medium">Registration failed!</div>
            <div class="text-gray-600 mt-1">
                Please check the fileld form.
            </div>
        </div>
    </div>
    <!-- END: Failed Notification Content -->

    {{-- @include('../pages/Kursus/datepicker-modal') --}}
@endsection

