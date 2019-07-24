<!DOCTYPE html>
<html>
<head>
	<title>kalkulatorPutra</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<table>
		<tr>
			<td colspan="5">
				<input type="text" disabled id="output" placeholder="0">
			</td>
		</tr>
		<tr>
                    <td><input type="button" class="btn" onclick="btn('1')" value="1"></td>
		    <td><input type="button" class="btn" onclick="btn('2')" value="2"></td>
		    <td><input type="button" class="btn" onclick="btn('3')" value="3"></td>
                    <td><input type="button" class="btn opr" onclick="btn_opr(1)" value="*"></td>
		</tr>
		<tr>
                    <td><input type="button" class="btn" onclick="btn('4')" value="4"></td>
		    <td><input type="button" class="btn" onclick="btn('5')" value="5"></td>
		    <td><input type="button" class="btn" onclick="btn('6')" value="6"></td>
                    <td><input type="button" class="btn opr" onclick="btn_opr(2)" value="/"></td>
		</tr>
		<tr>
                    <td><input type="button" class="btn" onclick="btn('7')" value="7"></td>
		    <td><input type="button" class="btn" onclick="btn('8')" value="8"></td>
		    <td><input type="button" class="btn" onclick="btn('9')" value="9"></td>
                    <td><input type="button" class="btn opr" onclick="btn_opr(3)" value="-"></td>
		</tr>
		<tr>
			<td><button class="btn" onclick="btn('0')">0</button></td>
			<td><button class="btn" onclick="koma()">.</button></td>
			<td><button class="btn clr" onclick="clr()">C</button></td>
			<td><button class="btn opr" onclick="btn_opr(4)">+</button></td>
		</tr>
		<tr>
			<td colspan="5"><button class="btn hsl" style="width: 100%" onclick="hitung()">=</button></td>
		</tr>
	</table>
	<script type="text/javascript" src="kalkulator.js"></script>
</body>
</html>