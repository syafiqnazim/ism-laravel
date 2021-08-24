<!-- BEGIN: Modal Content -->
<div id="datepicker-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
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
                    <input id="modal-datepicker-1" class="datepicker form-control" data-single-mode="true">
                </div>
                <div class="col-span-12 sm:col-span-6">
                    <label for="modal-datepicker-2" class="form-label">Sehingga</label>
                    <input id="modal-datepicker-2" class="datepicker form-control" data-single-mode="true">
                </div>
            </div>
            <!-- END: Modal Body -->
            <!-- BEGIN: Modal Footer -->
            <div class="modal-footer text-right">
                <button type="button" data-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancel</button>
                <button type="button" class="btn btn-primary w-20">Submit</button>
            </div>
            <!-- END: Modal Footer -->
        </div>
    </div>
</div>
<!-- END: Modal Content -->