<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>報名成功</title>
	<style>
		.align-center-color {text-align: center; font-weight: bold; font-size: 50px; font-family: DFKai-sb; color: red}
		.align-center {text-align: center; font-weight: bold; font-size: 30px; font-family: DFKai-sb}
		.margin {margin: 30px; padding: 20px;}
		.table {border: 2px solid black;}
		.table-content {font-weight: bold; float: left; margin-right: 50px; width: 100px}
	</style>
</head>
<body>
	<div class="align-center-color">
		<?php 
			if(isset($_POST['uname']))
			{
				echo "感謝您參與此次的公益車賽, " . $_POST['uname'] . "先生/小姐";
			}
		?>
	</div>
	<br>
	<br>

	<div class="margin">
		<div>
			<table rules="all" cellpadding="10" border="2" bordercolor="#000000">
				<tr>
					<th colspan="4">參賽者個人資料</th>
				</tr>

				<tr>
					<td width="10%" bgcolor="#C1C1E1">姓名:</td> <td width="25%"><?php echo $_POST['uname']; ?></td>
					<td width="10%" bgcolor="#C1C1E1">性別:</td> <td width="30%"><?php echo $_POST['gender']; ?></td>
				</tr>

				<tr>
					<td bgcolor="#C1C1E1">連絡電話:</td> <td><?php echo $_POST['tel']; ?></td>
					<td bgcolor="#C1C1E1">E-Mail:</td> <td><?php echo $_POST['email']; ?></td>
				</tr>

				<tr>
					<td bgcolor="#C1C1E1">聯絡地址:</td> <td colspan="3"><?php echo $_POST['addr']; ?></td>
				</tr>

				<tr>
					<td bgcolor="#C1C1E1">參加項目:</td> <td colspan="3"><?php echo $_POST['length'] . " KM"; ?></td>
				</tr>

				<tr>
					<td bgcolor="#C1C1E1">選擇活動 T-Shirt(紀念衫) 贈品尺寸:</td> <td colspan="3"><?php echo $_POST['tshirt-size']; ?></td>
				</tr>

				<tr>
					<td bgcolor="#C1C1E1">緊急聯絡人姓名:</td> <td><?php echo $_POST['fname']; ?></td>
					<td bgcolor="#C1C1E1">緊急聯絡人電話:</td> <td><?php echo $_POST['ftel']; ?></td>
				</tr>

				<tr>
					<td bgcolor="#C1C1E1">是否要收到本活動單位的其它活動訊息?</td> 
					<td colspan="3">
					<?php 
						if (isset($_POST['other'])) 
						{
							echo "是"; 
						}
						else
						{
							echo "否";
						}
					?>
					</td>
				</tr>
			</table>
		</div>
	</div>

	<div class="align-center">
		<a href="homework1-A1043338.html">
			<input type="submit" value="重新填選" class="align-center">
		</a>
		<a href="http://www.nuk.edu.tw/bin/home.php">
			<input type="button" value="關閉試窗" onclick="window.close()" class="align-center">
		</a>
	</div>
</body>
</html>