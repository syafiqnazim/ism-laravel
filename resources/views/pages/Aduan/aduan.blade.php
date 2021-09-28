@extends('../layout/' . $layout)

@section('subhead')
<title>Penjadualan Kursus | MyISM</title>
@endsection

@section('subcontent')
<h2 class="intro-x font-bold text-2xl xl:text-3xl text-center mt-5">Tempahan 1MTC</h2>
<div class="grid grid-cols-12 gap-5 mt-5">
    <!-- BEGIN: Calendar Side Menu -->
    <div class="col-span-12">
        <div class="box p-5 intro-y flex">
            <textarea name="" id="" cols="100" rows="10" placeholder="Keterangan Masalah..."
                class="border-2 border-gray-300 p-3"></textarea>
            <div class="flex flex-col items-start ml-10">
                <div>
                    <input type="radio" id="lelaki" name="gender" value="Lelaki">
                    <label for="lelaki">Elektrikal</label><br>
                </div>
                <div>
                    <input type="radio" id="perempuan" name="gender" value="Perempuan">
                    <label for="perempuan">Bangunan</label><br>
                </div>
            </div>
        </div>
        <a href="javascript:;" data-toggle="modal" data-target="#datepicker-modal-preview"
            class="btn btn-primary pilih-tarikh mt-3" id="1">
            Hantar <i data-feather="send" class="ml-2 h-4 w-4"></i>
        </a>
    </div>
    <!-- END: Calendar Side Menu -->
</div>

<div class="col-span-12 mt-10">
    <table class="table-fixed w-full">
        <thead>
            <tr class="bg-gray-300">
                <th class="w-1/12 py-3 border-2 border-gray-400">#</th>
                <th class="w-3/12 py-3 border-2 border-gray-400">Jenis Kerosakan</th>
                <th class="w-2/12 py-3 border-2 border-gray-400">Keterangan Kerosakan</th>
                <th class="w-2/12 py-3 border-2 border-gray-400">Penyelenggara</th>
                <th class="w-2/12 py-3 border-2 border-gray-400">Tarikh Aduan</th>
                <th class="w-2/12 py-3 border-2 border-gray-400">Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center py-3 border-2 border-gray-400">1</td>
                <td class="text-center py-3 border-2 border-gray-400">Elektrikal</td>
                <td class="text-center py-3 border-2 border-gray-400">Suis lampu tidak menyala</td>
                <td class="text-center py-3 border-2 border-gray-400">Hussein Zulkifli</td>
                <td class="text-center py-3 border-2 border-gray-400">28-9-2021</td>
                <td class="text-center py-3 border-2 border-gray-400">Dalam Proses</td>
            </tr>
        </tbody>
    </table>
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

@include('../pages/Kursus/datepicker-modal')
@endsection