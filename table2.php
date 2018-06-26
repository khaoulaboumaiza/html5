<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8">
		<meta name="description" content="tansi9 al nosous w ashel bel css ">
		<title> table (Thead, Tbody, Tfoot)</title>
		<style >
		  	table{ width: 500px }
		  	thead td {font-weight:bold;text-align:center;color: #FFF;background: #333;padding: 5px }
		  	tbody td {text-align:center;background: #EFEFEF;padding: 5px }
		  	tfoot td {font-weight:bold;text-align:center;color: #F00;background: #DDD;padding: 5px  }
		  	
		</style>
        <link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript"></script>
	</head>
	<body>
		<table>
			<caption>this our hosting plan</caption>
				<thead>
					<tr>
						<td>plan1</td>
						<td>plan2</td>
						<td>plan3</td>
						<td>plan4</td>					
					</tr>
				</thead>
				<tbody>	
					<tr>
						<td>hard disk 50GB</td>
						<td>hard disk 40GB</td>
						<td>hard disk 60GB</td>
						<td>hard disk 30GB</td>
					</tr>
					<tr>
						<td>5 databases</td>
						<td>6 databases</td>
						<td>7 databases</td>
						<td>8 databases</td>
					</tr>
				</tbody>
				<tfoot>	
					<tr>
						<td>70 dt</td>
						<td>80 dt</td>
						<td>90 dt</td>
						<td>700 dt </td>
					</tr>
				</tfoot>	
		</table>
	</body>
</html>