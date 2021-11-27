<!-- BEGIN: Tambah Asrama Modal -->
<div id="tambah-asrama-baru" class="modal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog w-1/2 mt-36">
		<div class="modal-content">
			<form action="{{url('asrama/')}}" method="post">
				@csrf
				<div class="modal-body p-0">
					<div class="p-5 text-center">
						<h5 class="intro-x font-bold text-2xl xl:text-3xl text-center mb-6">Tambah Asrama Baru</h5>
						<div class="grid grid-cols-2 gap-2 mb-6">
							<div class="grid-cols-1 input-form">
								<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
									Kod Asrama
								</label>
								<input id="kod_asrama" name="kod_asrama" type="text" class="form-control" required
									data-pristine-required-message="Ruangan ini perlu di isi.">
							</div>
							<div class="grid-cols-1 input-form">
								<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
									Kapasiti
								</label>
								<input id="kapasiti" name="kapasiti" type="number" class="form-control" required
									data-pristine-required-message="Ruangan ini perlu di isi.">
							</div>
						</div>
						<div class="grid grid-cols-2 gap-2 mb-6">
							<div class="grid-cols-1 input-form">
								<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
									Status
								</label>
								<select id="status" class="w-full form-select box border-gray-300" required
									name="status">
									<option value="">Pilih Satu</option>
									<option value="available">Available</option>
									<option value="inactive">Inactive</option>
								</select>
							</div>
						</div>
					</div>
					<div class="px-5 pb-8 text-center">
						<button id="tambah-asrama" type="submit" class="btn btn-primary mr-1">
							Tambah Asrama
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- END: Tambah Asrama Modal -->