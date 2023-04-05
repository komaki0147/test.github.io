<?php
		if (isset($_POST['submit'])) {
			$names = explode("\n", $_POST['names']); // 将输入的名单分割成数组
			$winner = array_rand($names); // 随机从数组中选择一个获奖者
			echo "<p>恭喜获奖者：".trim($names[$winner])."！</p>"; // 显示获奖者
		}
?>
