	<?php
		$pages_dir = '.assets/page';
		if(!empty($_GET['pg'])){
			$pages = scandir($pages_dir, 0);
			unset($pages[0], $pages[1]);
			
			$p = $_GET['pg'];
			if(in_array($p.'.php', $pages)){
				include($pages_dir.'/'.$p.'.php');
			} else {
				echo '				';
			}
		} else {
			include($pages_dir.'/monitoring');
		}
	?>	