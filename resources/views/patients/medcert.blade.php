<style>
hr { 
  
  border-width: 3px;
} 
p {
	font-size:15px;
	display: inline-block;
}
</style>
<body onload="window.print();">
<table width="100%" style="font-family:arial;font-size:14px;">
	<tr><td align="center" style="font-size:18px;">Maria Cecilia P. Ingente-Tablante, MD, DPDS</td></tr>
	<tr><td align="center">Dermatology</td></tr>
	<tr><td align="center">Room 304, Jesusa Complex, Malvar corner Mt. Apo Street.</td></tr>
	<tr><td align="center">Davao City, Philippines</td></tr>
	<tr><td align="center">+63-923-845-4103<br><br></td></tr>
	<tr><td align="center"><hr><br><br></td></tr>
	
	<tr><td align="center"><h1>MEDICAL CERTIFICATE<h1></td></tr>
</table>
<br><br>
<table width="100%" style="font-family:arial;font-size:14px;">
	<tr><td colspan="4">Date Issued:<p>{{date('F d, Y',strtotime($id->visit_date))}}</p><br><br></td></tr>
	<tr><td>Name:<p>{{$id->patient->fullname}}</p></td>
		<td>Age:<p>{{$id->patient->age}}</p></td>
		<td>Sex:<p>{{$id->patient->gender}}</p></td>
		<td>CS:<p>{{$id->patient->civil_status}}</p></td>
	</tr>
	<tr><td colspan="4"><br><br>Diagnosis:<p>{{$id->diagnoses}}</p><br><br></td></tr>
	<tr><td colspan="4">Recommendation:<p>{{$id->recommendation}}</p><br><br></td></tr>
	<tr><td colspan="4">Remarks:<p>{{$id->remarks}}</p><br><br><br><br></td></tr>
	<tr><td colspan="2">&nbsp;</td><td colspan="2" style="border-top: 1px solid #cdd0d4;">Maria Cecilia P. Ingente-Tablanter, MD, DPDS</p></td></tr>
	<tr><td colspan="2">&nbsp;</td><td colspan="2">Lic. No. 0115617</td></tr>
</table>
</body>
