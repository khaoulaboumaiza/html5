<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8">
		<meta name="description" content="tansi9 al nosous w ashel bel css ">
		<title>simple trable (Table, Caption, Tr, Th, Td)</title>
		<style >
		  	table,td,th {border: 1px solid #676767 }
		  	table{ width: 500px }
		</style>
        <link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript"></script>
	</head>
	<body>
		<table>
			<caption>the colspan</caption>
				<tr>
					<th colspan="2">
						progamming
					</th>
					<th colspan="3">
						web design
					</th>
				</tr>
				<tr>
					<td>
						php
					</td>
					<td>
						mysql
					</td>
					<td>
						css
					</td>
					<td>
						jquery
					</td>
					<td>
						javascript
					</td>
				</tr>	
		</table>
		<table>
			<caption>the rowspan</caption>
				<tr>
					<th>
						name
					</th>
					<th>
						email
					</th>
				</tr>
				<tr>
					<td rowspan="2">
						roufa
					</td>
					<td>
						roufa@gmail.com
					</td>
				</tr>
				<tr>
					<td>
						dadouf@gmail.com
					</td>
				</tr>	
		</table>
		<table>
			<caption>the colgroup and col </caption>
				<colgroup>
				<col span="1" style="background: #EEE">
				<col span="2" style="background: #DDD">
				<col span="1" style="background: #AAA">
				</colgroup>
					<tr>
						<td>
							programming
						</td>
						<td>
						    programming        
						</td>
						<td>
							design
						</td>
						<td>
							design
						</td>
						
					</tr>	
					<tr>
						<td>
							php
						</td>
						<td>
							mysql
						</td>
						<td>
							css
						</td>
						<td>
							jquery
						</td>
						
					</tr>
					<tr>
						<td>
							php
						</td>
						<td>
							mysql
						</td>
						<td>
							css
						</td>
						<td>
							jquery
						</td>
						
					</tr>
					<tr>
						<td>
							php
						</td>
						<td>
							mysql
						</td>
						<td>
							css
						</td>
						<td>
							jquery
						</td>
						
					</tr>
		</table>
	</body>
</html>