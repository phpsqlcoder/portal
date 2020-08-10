<style>
#hrd { 
  
  border-width: 3px;
} 
p {
	font-size:15px;
	display: inline-block;
}
</style>
@php 
$total = 0;
@endphp
<body >
<table width="100%" style="font-family:arial;font-size:14px;">
	<tr><td align="center" style="font-size:18px;">Maria Cecilia P. Ingente-Tablante, MD, DPDS</td></tr>
	<tr><td align="center">Dermatology</td></tr>
	<tr><td align="center">Room 304, Jesusa Complex, Malvar corner Mt. Apo Street.</td></tr>
	<tr><td align="center">Davao City, Philippines</td></tr>
	<tr><td align="center">+63-923-845-4103<br><br></td></tr>
	<tr><td align="center"><hr id="hrd"><br><br></td></tr>	
	<tr><td align="center"><h1>PRESCRIPTION<h1></td></tr>
</table>
<br><br>
<table width="100%" style="font-family:arial;font-size:14px;">
	<tr style="font-weight:bold;">
		<td>Seq</td>
		<td>Description</td>		
		<td>When to take/apply</td>
		<td>No of days</td>
		<td>Qty</td>
	</tr>
	<tr>
		<td colspan="5"><hr></td>
	</tr>
	@forelse($details as $d)
	
	<tr>
		<td>{{$loop->iteration}}</td>
		<td>{{$d->name}}</td>	
		<td>{{$d->when_to_apply}}</td>	
		<td>{{$d->total_days}}</td>		
		<td>{{number_format($d->qty,2)}}</td>

	</tr>
	@empty

	@endforelse
	
	<tr>
		<td colspan="5"><hr></td>
	</tr>
	
</table>
<br><br><br><br>
<table>
<tr><td colspan="2">&nbsp;</td><td colspan="2" style="border-top: 1px solid #cdd0d4;">Maria Cecilia P. Ingente-Tablanter, MD, DPDS</p></td></tr>
	<tr><td colspan="2">&nbsp;</td><td colspan="2">Lic. No. 0115617</td></tr>
</table>
</body>
