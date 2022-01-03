@extends('../layout/' . $layout)

@section('subhead')
<title>Penjadualan Kursus | MyISM</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection

@section('subcontent')
<h2 class="intro-x font-bold text-2xl xl:text-3xl text-center mt-5">Penjadualan Program</h2>
<div class="grid grid-cols-12 gap-5 mt-5">
    <!-- BEGIN: Calendar Side Menu -->
    <div class="col-span-12">
        <div class="box p-5 intro-y">
            <!-- BEGIN: Show Modal Toggle -->
            {{-- <div class="text-center flex justify-between items-center mt-5"> --}}
            <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center">Senarai Program</h2>
            {{-- <a class="btn btn-primary shadow-md" href="javascript:;" data-toggle="modal"
                    data-target="#tambah-penjadualan-kursus-baru">
                    Tambah Kursus
                </a> --}}
            {{--
            </div> --}}
            <form method="get" id="department-form">
                <select id="kluster" class="w-full form-select box border-gray-300" required name="kluster" onchange="document.getElementById('department-form').submit()">
                    <option value="">Pilih Satu</option>
                    <option value="1">Professional Development</option>
                    <option value="2">Social Development</option>
                    <option value="3">Volunteerism & Social Entrepreneurship</option>
                    <option value="4">Capacity & Gender Development</option>
                    <option value="5">Research & Development</option>
                    <option value="6">Administration and Human Resources Units</option>
                    <option value="7">Finance Units</option>
                    <option value="8">Domestic and Maintenance Units</option>
                    <option value="9">Library and Documentation Centre</option>
                    <option value="10">Information Technology Units</option>
                </select>
            </form>
            <!-- END: Show Modal Toggle -->
            <div class="border-t border-b border-gray-200 mt-6 mb-5 py-3" id="calendar-events">
                {{-- @include('../pages/Kursus/datepicker-modal') --}}
                <h1></h1>
                <table class="table-fixed w-full" id="kursus">
                    <thead>
                        <tr class="bg-gray-300">
                            <th class="w-1/5 py-3 border-2 border-gray-400">#</th>
                            <th class="w-2/5 py-3 border-2 border-gray-400">Nama Program / Kluster</th>
                            <th class="w-1/5 py-3 border-2 border-gray-400">Kapasiti</th>
                            <th class="w-1/5 py-3 border-2 border-gray-400">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kursuses as $kursus)
                        <tr class={{$kursus['id'] % 2==0 ? 'bg-gray-300' : 'bg-none' }}>
                            <td class="text-center py-3 border-2 border-gray-400">{{ $loop->index + 1 }}</td>
                            <td class="text-center py-3 border-2 border-gray-400">{{ $kursus['nama_kursus'] }}</td>
                            <td class="text-center py-3 border-2 border-gray-400">{{ $kursus['kapasiti'] }}</td>
                            <td class="text-center py-3 border-2 border-gray-400">

                                <a onclick="openForm({{ $kursus['id'] }})" class="btn btn-primary">Pilih Tarikh</a>
                            </td>
                        </tr>
                        <tr id="form{{ $kursus['id'] }}" class="hide">
                            <td colspan="4">
                                @include('../pages/Kursus/datepicker', [$loop->index, $kursus])
                            </td>
                        </tr>
                        @include('../pages/Kursus/datepicker-modal', [$loop->index, $kursus])

                        @endforeach
                    </tbody>
                </table>
            </div>
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
<script>
    $(window).on("load", function() {
        $('.hide').hide();
    });

    function openForm(id) {
        $('.hide').hide();
        $('#form' + id).toggle();
    }
</script>

@include('../pages/Kursus/tambah-penjadualan-kursus-modal', [$kursuses])
@endsection