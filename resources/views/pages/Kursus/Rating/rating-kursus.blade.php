@extends('../layout/' . $layout)

@section('subhead')
<title>Rating Program | MyISM</title>
@endsection

@section('subcontent')
<h2 class="intro-x font-bold text-2xl xl:text-3xl text-center mt-5">Senarai Rating Program</h2>
<div class="grid grid-cols-12 gap-6 mt-5">
    <!-- BEGIN: Top Header -->
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2 justify-between">
        <button class="btn btn-primary shadow-md mr-2">
            <a href="javascript:;" data-toggle="modal" data-target="#rating-program">
                Tambah Rating Program
            </a>
        </button>
        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
            <div class="w-56 relative text-gray-700 dark:text-gray-300">
                <form>
                    <input id='carian' type="text" class="form-control w-56 box pr-10 placeholder-theme-8"
                        placeholder="Carian..." value="{{ $query }}" name="nama_kursus">
                    <button type="submit" class="w-4 h-4 absolute mb-auto mt-2 inset-y-0 mr-3 right-0">
                        <i data-feather="search"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- END: Top Header -->

    <!-- BEGIN: Users Layout -->

    <div class="col-span-12">
        <table class="table-fixed w-full">
            <thead>
                <tr class="bg-gray-300">
                    <th class="w-1/12 py-3 border-2 border-gray-400">#</th>
                    <th class="w-3/12 py-3 border-2 border-gray-400">Nama Program</th>
                    <th class="w-2/12 py-3 border-2 border-gray-400">Kluster</th>
                    <th class="w-2/12 py-3 border-2 border-gray-400">Tarikh Rating</th>
                    <th class="w-2/12 py-3 border-2 border-gray-400">Tindakan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ratings as $rating)
                <tr class={{$rating['id'] % 2 == 0 ? 'bg-none' : 'bg-gray-300'}}>
                    <td class="text-center py-3 border-2 border-gray-400">{{ $loop->iteration }}</td>
                    <td class="text-center py-3 border-2 border-gray-400">{{ $rating->kursus->nama_kursus }}</td>
                    <td class="text-center py-3 border-2 border-gray-400">{{ $rating->kursus->kursusKluster->name }}</td>
                    <td class="text-center py-3 border-2 border-gray-400">{{ $rating->updated_at->format('d/m/Y'); }}</td>
                    <td class="text-center py-3 border-2 border-gray-400">
                        <a title="Lihat" class="btn btn-primary p-1" href="javascript:;" data-toggle="modal"
                            data-target="#view-rating-{{ $loop->index }}">
                            <i data-feather="eye" class="w-3 h-3 text-white"></i>
                        </a>
                        <a title="Edit" class="btn btn-success p-1" href="javascript:;" data-toggle="modal"
                            data-target="#edit-rating-{{ $loop->index }}">
                            <i data-feather="edit" class="w-3 h-3 text-white"></i>
                        </a>
                        {{-- <a title="Buka" class="btn btn-warning p-1">
                            <i data-feather="calendar" class="w-3 h-3 text-white"></i>
                        </a> --}}
                        <a title="Delete" class="btn btn-danger p-1 delete-rating-kursus" id="{{ $rating['id'] }}">
                            <i data-feather="trash-2" class="w-3 h-3 text-white"></i>
                        </a>
                    </td>
                </tr>
                @include('pages.Kursus.Rating.edit-rating-modal', [$loop->index, $rating])
                @include('pages.Kursus.Rating.view-rating-modal', [$loop->index, $rating])
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- BEGIN: Users Layout -->
</div>
</div>
<!-- BEGIN: Success Notification Content -->
<div id="success-notification-content" class="toastify-content hidden flex">
    <i class="text-theme-10" data-feather="check-circle"></i>
    <div class="ml-4 mr-4">
        <div class="font-medium">Berjaya!</div>
        {{-- <div class="text-gray-600 mt-1">
            Please check your e-mail for further info!
        </div> --}}
    </div>
</div>
<!-- END: Success Notification Content -->
<!-- BEGIN: Failed Notification Content -->
<div id="failed-notification-content" class="toastify-content hidden flex">
    <i class="text-theme-24" data-feather="x-circle"></i>
    <div class="ml-4 mr-4">
        <div class="font-medium">Gagal!</div>
        {{-- <div class="text-gray-600 mt-1">
            Please check the fileld form.
        </div> --}}
    </div>
</div>
<!-- END: Failed Notification Content -->

@include('pages.Kursus.Rating.tambah-rating-modal', [$klusters])
@endsection
