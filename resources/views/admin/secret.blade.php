<style type="text/css">
	table, th, td {
    border: 1px solid black;
}
</style>

<table>
	<thead>
		<tr>
			<th>No</th>
			<th>Lomba</th>
			<th>Terdaftar</th>
			<th>Verified Email</th>
			<th>Verified Admin</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($comp as $key => $value)
			<tr>
				<td>{{ $key+1 }}</td>
				<td>{{ $value->long_name }}</td>
				<td style="text-align: center;">{{ $value->jml }}</td>
				<td style="text-align: center;">@if(isset($compVerifiedEmail[$key])) {{ $compVerifiedEmail[$key]->jml }} @endif</td>
				<td style="text-align: center;">@if(isset($compVerifiedAll[$key])) {{ $compVerifiedAll[$key]->jml }} @endif</td>
			</tr>
		@endforeach
	</tbody>
</table>