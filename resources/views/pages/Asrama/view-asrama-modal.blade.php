<!-- BEGIN: View Asrama Modal -->
<div id="view-asrama-{{ $loop->index }}" class="modal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog w-1/2 mt-36">
		<div class="modal-content">
			<form>
				<div class="modal-body p-0">
					<div class="p-5 text-center">
						<h5 class="intro-x font-bold text-2xl xl:text-3xl text-center mb-6">
							Lihat Asrama
						</h5>
						<div class="grid grid-cols-2 gap-2 mb-6">
							<div class="grid-cols-1 input-form">
								<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
									Kod Asrama
								</label>
								<input type="text" class="form-control" readonly value="{{ $asrama['kod_asrama'] }}">
							</div>
							<div class="grid-cols-1 input-form">
								<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
									Kapasiti
								</label>
								<input type="text" class="form-control" readonly value="{{ $asrama['kapasiti'] }}">
							</div>
						</div>
						<div class="grid grid-cols-2 gap-2 mb-6">
							<div class="grid-cols-1 input-form">
								<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
									Status
								</label>
								<select class="w-full form-select box border-gray-300" disabled="true">
									<option value="0" {{ $asrama['status'] == null ? 'selected' : '' }}>Pilih Satu
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
				</div>
			</form>
		</div>
	</div>
</div>
<!-- END: View Asrama Modal -->