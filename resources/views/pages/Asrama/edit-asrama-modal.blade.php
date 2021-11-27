<!-- BEGIN: Edit Asrama Modal -->
<div id="edit-asrama-{{ $loop->index }}" class="modal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog w-1/2 mt-36">
		<div class="modal-content">
			<form action="{{url('asrama/'. $asrama->id)}}" method="post">
				@csrf
				<input name="_method" type="hidden" value="PUT">
				<div class="modal-body p-0">
					<div class="p-5 text-center">
						<h5 class="intro-x font-bold text-2xl xl:text-3xl text-center mb-6">
							Tukar Maklumat Asrama</h5>
						<div class="grid grid-cols-2 gap-2 mb-6">
							<div class="grid-cols-1 input-form">
								<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
									Kod Asrama
								</label>
								<input id="edit_kod_asrama" name="kod_asrama" type="text" class="form-control"
									required data-pristine-required-message="Ruangan ini perlu di isi."
									value="{{ $asrama['kod_asrama'] }}">
							</div>
							<div class="grid-cols-1 input-form">
								<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
									Kapasiti
								</label>
								<input id="edit_kapasiti" name="kapasiti" type="text" class="form-control" required
									data-pristine-required-message="Ruangan ini perlu di isi."
									value="{{ $asrama['kapasiti'] }}">
							</div>
						</div>
						<div class="grid grid-cols-2 gap-2 mb-6">
							<div class="grid-cols-1 input-form">
								<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
									Status
								</label>
								<select id="edit_status" class="w-full form-select box border-gray-300" name="status">
									<option value="0" {{ !$asrama['status'] ? 'selected' : '' }}>Pilih Satu
									</option>
									<option value="available" {{ $asrama['status'] == "available" ? 'selected' : '' }}>
										Available
									</option>
									<option value="inactive" {{ $asrama['status'] == "inactive" ? 'selected' : '' }}>
										Inactive
									</option>
								</select>
							</div>
						</div>
					</div>
					<div class="px-5 pb-8 text-center">
						<button id="edit-asrama" type="submit" class="btn btn-primary mr-1">
							Tukar Maklumat
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- END: Edit Asrama Modal -->