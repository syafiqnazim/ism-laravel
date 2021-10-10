<!-- BEGIN: Modal Content -->
<div id="datepicker-modal-{{ $loop->index }}" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{url('kursus/'. $kursus->id)}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="PUT">
            <div class="modal-content">
                <!-- BEGIN: Modal Header -->
                <div class="modal-header">
                    <h2 class="font-medium text-base mr-auto">Sila pilih tarikh</h2>
                    <div class="dropdown sm:hidden">
                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false">
                            <i data-feather="more-horizontal" class="w-5 h-5 text-gray-600 dark:text-gray-600"></i>
                        </a>
                    </div>
                </div>
                <!-- END: Modal Header -->
                <!-- BEGIN: Modal Body -->
                <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                    <div class="col-span-12 sm:col-span-6">
                        <label for="modal-datepicker-1" class="form-label">Dari</label>
                        @if($kursus->tarikh_mula)
                        <input id="modal-datepicker-1" class="datepicker form-control" data-single-mode="true"
                            name="tarikh_mula" value="{{ $kursus->tarikh_mula }}">
                        @else
                        <input id="modal-datepicker-1" class="datepicker form-control" data-single-mode="true"
                            name="tarikh_mula">
                        @endif

                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="modal-datepicker-2" class="form-label">Sehingga</label>
                        @if($kursus->tarikh_akhir)
                        <input id="modal-datepicker-1" class="datepicker form-control" data-single-mode="true"
                            name="tarikh_akhir" value="{{ $kursus->tarikh_akhir }}">
                        @else
                        <input id="modal-datepicker-1" class="datepicker form-control" data-single-mode="true"
                            name="tarikh_akhir">
                        @endif
                    </div>
                </div>
                <!-- END: Modal Body -->
                <!-- BEGIN: Modal Footer -->
                <div class="modal-footer text-right">
                    <button type="button" data-dismiss="modal"
                        class="btn btn-outline-secondary w-20 mr-1">Cancel</button>
                    <button type="submit" class="btn btn-primary w-20">Submit</button>
                </div>
                <!-- END: Modal Footer -->
            </div>
        </form>
    </div>
</div>
<!-- END: Modal Content -->