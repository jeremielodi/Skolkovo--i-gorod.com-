<?php
 header("Content-type: text/html; charset=utf-8");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Технические работы</title>
<style>
	table {
		font-family: Tahoma, Arial;
		font-size: 11px;
		
	}
	h2 {
		font-size: 16px;
		/*font-weight: normal*/
	}
	h2, p {
		padding: 0px 15px 10px;
		text-align: left
	}
	a {
		color: #138ecc
	}
	#logo {
		position: absolute;
		width: 137px;
		height: 53px;
		background: url(/errors/images/logo.png) no-repeat
	}
	
	#content {
		text-align: left;
	}
</style>
</head>
<body>
	<table style="width: 100%; height: 100%">
		<tr>
			<td align="center">
				<div style="width: 600px" id="content">
					<div id=logo></div>
					<div style="padding-left: 137px">
						<div style="padding: 13px 0px; text-align: left">
							<div style="background: #dadcde"><img src="/errors/images/umicms.jpg"/></div>
						</div>
						<h2 style="color: #ff6a08">Ведутся технические работы</h2>
						<p>В данный момент на сайте ведутся технические работы. Попробуйте повторить попытку позже.</p>
						<div style="border-top: #dddddd 1px solid; border-bottom: #dddddd 1px solid">
							<p>Поддержка пользователей UMI.CMS<br/><a href="http://www.umi-cms.ru/support">www.umi-cms.ru/support</a></p>
						</div>
					</div>
				</div>
			</td>
		</tr>
	</table>
</body>
</html>
