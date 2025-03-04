<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>王啓名簡介</title>
	<style type="text/css">
		* { font-family:"標楷體"; margin-left:auto; margin-right:auto;}
		h1 {color:blue; font-size:60px;}
		h2 {color:#33ff33; font-size:40px;}
	</style>

	<script>
		function change1() {
  			document.getElementById("pic").src = "radio2(去背).png";
  			document.getElementById("h2text").innerText = "靜宜資管";
		}

		function change2() {
  			document.getElementById("pic").src = "radio1(去背).png";
  			document.getElementById("h2text").innerText = "Chi-Ming Wang";
		}
	</script>
</head>
<body>
	<table width="70%">
		<tr>
			<td>
				<img src="radio1(去背).png" width="110%" id="pic" onmouseover="change1()" onmouseout="change2()"></img>
			</td>

		    <td>
			    <h1>王啓名</h1>
		    	<h2 id="h2text">Chi-Ming Wang</h2>
	    	</td>
	    </tr>
	</table>

	<table width="70%"border="1">
		<tr>
			<td>
				抖音：<a href="https://v.douyin.com/i5RQYg8m/">https://v.douyin.com/i5RQYg8m/</a><br>
				Tel: <a href="tel:04-1234567">04-1234567</a><br>
				E-Mail: <a href="mailto:s1107035@gm.pu.edu.tw">s1107035@gm.pu.edu.tw</a><br>
			</td>

			<td>
				大象席地而坐電影配樂<br>
				<audio controls>
					<source src="elephant.mp3" type="audio/mP3">
				</audio><br>
			</td>

			<td>
				不要去臺灣<br>

				<iframe src="https://www.youtube.com/embed/pW88QFpHXa8"allowfullscreen></iframe>
			</td>
		</tr>
	</table>

    <table>
    	<tr>
    		<td>
    			<iframe width="350" height="430" allow="microphone;" src="https://console.dialogflow.com/api-client/demo/embedded/dd2ad795-7eb8-4422-b049-a5270bb43ab8"></iframe>
    		</td>
    	</tr>
    </table>

    <?php echo date("Y-m-d") ?>
</body>
</html>