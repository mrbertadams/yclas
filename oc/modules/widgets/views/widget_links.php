<?php defined('SYSPATH') or die('No direct script access.');?>
<h3><?=$widget->links_title?></h3>
<ul>
	<?foreach($widget->url as $url):?>
	<li style="margin-left:-20px;">
		<a target="<?=$widget->target?>" href="<?=$url[0]?>"><?=$url[1]?></a>
	</li>
	<?endforeach?>
</ul>