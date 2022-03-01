@extends('../layout/' . $layout)

@section('subhead')
<title>Senarai peserta | MyISM</title>
<!-- Custom styles for this page -->


<link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet">
  

@endsection

@section('subcontent')





<h2 class="intro-x font-bold text-2xl xl:text-3xl text-center mt-5">Senarai Peserta</h2>

<form method="get" id="peserta-form">
	 

	<select id="kluster" class="w-full form-select box border-gray-300" required="" name="kluster" onchange="document.getElementById('peserta-form').submit()">
		<option value="">Pilih Satu</option>
		<option value="1" {{ ($kluster == 1) ? 'selected' : '' }}>Professional Development</option>
		<option value="2" {{ ($kluster == 2) ? 'selected' : '' }}>Social Development</option>
		<option value="3" {{ ( $kluster == 3) ? 'selected' : '' }}>Volunteerism &amp; Social Entrepreneurship</option>
		<option value="4" {{ ( $kluster == 4) ? 'selected' : '' }}>Capacity &amp; Gender Development</option>
		<option value="5" {{ ( $kluster == 5) ? 'selected' : '' }}>Research &amp; Development</option>
		<option value="6" {{ ( $kluster == 6) ? 'selected' : '' }}>Administration and Human Resources Units</option>
		<option value="7" {{ ( $kluster == 7) ? 'selected' : '' }}>Finance Units</option>
		<option value="8" {{ ( $kluster == 8) ? 'selected' : '' }}>Domestic and Maintenance Units</option>
		<option value="9"> {{ ( $kluster == 9) ? 'selected' : '' }}Library and Documentation Centre</option>
		<option value="10" {{ ( $kluster == 10) ? 'selected' : '' }}>Information Technology Units</option>
	</select>

	 

	@if(!empty( $kluster))
	<select id="nama_kursus" class="w-full form-select box border-gray-300 mt-3" required name="nama_kursus" onchange="document.getElementById('peserta-form').submit()">
		<option value="">Nama Kursus</option>
		@foreach ($kursuses as $kursus)
		<option value="{{ $kursus['nama_kursus'] }}"  @if($nama_kursus == $kursus['nama_kursus']) selected @endif {{-- ( $kursus['nama_kursus'] == $nama_kursus) ? 'selected' : '' --}}>{{ $kursus['nama_kursus'] }}</option>
		@endforeach
	</select>
	@endif
</form>


<div class="grid grid-cols-12 gap-6 mt-5">
	<!-- BEGIN: Top Header -->
	<div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2 justify-between">
		
		
		


	</div>
	<!-- END: Top Header -->

	<!-- BEGIN: Users Layout -->

	@if(!empty($kluster) && !empty($nama_kursus))

	<div class="col-span-12">
		<table class="table-fixed w-full" id="example">
			<thead>
				<tr class="bg-gray-300">
					<th class="w-1/12 py-3 border-2 border-gray-400">#</th>
					<th class="w-4/12 py-3 border-2 border-gray-400">Nama Peserta</th>
					<th class="w-1/12 py-3 border-2 border-gray-400">I.C. Peserta</th>
					<th class="w-1/12 py-3 border-2 border-gray-400">No. Telefon</th>
					<th class="w-2/12 py-3 border-2 border-gray-400">Email</th>
					<th class="w-1/12 py-3 border-2 border-gray-400">Sektor</th>
					<th class="w-2/12 py-3 border-2 border-gray-400">Tindakan</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($pesertas as $peserta)
				<tr class={{$peserta['id'] % 2 == 0 ? 'bg-gray-300' : 'bg-none'}}>
					<td class="text-center py-3 border-2 border-gray-400">{{ $peserta['id'] }}</td>
					<td class="text-center py-3 border-2 border-gray-400">{{ $peserta['name'] }}</td>
					<td class="text-center py-3 border-2 border-gray-400">{{ $peserta['ic_number'] }}</td>
					<td class="text-center py-3 border-2 border-gray-400">{{ $peserta['phone_number'] }}</td>
					<td class="text-center py-3 border-2 border-gray-400">{{ $peserta['email'] }}</td>
					<td class="text-center py-3 border-2 border-gray-400">{{ $peserta['sector'] }}</td>
					<td class="text-center py-3 border-2 border-gray-400">
						<a title="Edit" class="btn btn-success p-1" href="{{ route('peserta.edit', ['id' => $peserta['id']]) }}">
							<i data-feather="edit" class="w-3 h-3 text-white"></i>
						</a>
						<a href="{{ route('peserta.destroy', ['id' => $peserta['id']]) }}" title="Delete" class="btn btn-danger p-1 delete-peserta" id="{{ $peserta['id'] }}">
							<i data-feather="trash-2" class="w-3 h-3 text-white"></i>
						</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

	@endif

	<!-- BEGIN: Users Layout -->
</div>
</div>
<!-- BEGIN: Success Notification Content -->
<div id="success-notification-content" class="toastify-content hidden flex">
	<i class="text-theme-10" data-feather="check-circle"></i>
	<div class="ml-4 mr-4">
		<div class="font-medium">Berjaya!</div>
	</div>
</div>
<!-- END: Success Notification Content -->
<!-- BEGIN: Failed Notification Content -->
<div id="failed-notification-content" class="toastify-content hidden flex">
	<i class="text-theme-24" data-feather="x-circle"></i>
	<div class="ml-4 mr-4">
		<div class="font-medium">Gagal!</div>
	</div>
</div>
<!-- END: Failed Notification Content -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>


<script>
$(document).ready(function() {
$('#example').DataTable();
} );

</script>
@endsection