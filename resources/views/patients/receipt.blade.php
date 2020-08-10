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
	<tr><td align="center"><h1>RECEIPT<h1></td></tr>
</table>
<br><br>
<table width="100%" style="font-family:arial;font-size:14px;">
	<tr style="font-weight:bold;">
		<td>Seq</td>
		<td>Description</td>		
		<td>Qty</td>
		<td>Price</td>
		<td>Total</td>
	</tr>
	<tr>
		<td colspan="5"><hr></td>
	</tr>
	@forelse($inventory as $d)
	@php 
	$total += ($d->price * $d->qty);
	@endphp
	<tr>
		<td>{{$loop->iteration}}</td>
		<td>{{$d->name}}</td>		
		<td>{{number_format($d->qty,2)}}</td>
		<td>{{number_format($d->price,2)}}</td>
		<td>{{number_format(($d->price * $d->qty),2)}}</td>
	</tr>
	@empty

	@endforelse
	@forelse($services as $d)
	@php 
	$total += ($d->price * $d->qty);
	@endphp
	<tr>
		<td>{{$loop->iteration}}</td>
		<td>{{$d->name}}</td>		
		<td>{{number_format($d->qty,2)}}</td>
		<td>{{number_format($d->price,2)}}</td>
		<td>{{number_format(($d->price * $d->qty),2)}}</td>
	</tr>
	@empty

	@endforelse
	<tr>
		<td colspan="5"><hr></td>
	</tr>
	<tr>
		<td colspan="5" align="right" style="font-weight:bold;font-size:18px;">Total: {{number_format($total,2)}}</td>
	</tr>
</table>
<br><br>

</body>
