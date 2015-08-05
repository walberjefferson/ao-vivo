<br>
<?php
foreach ($video as $vi) :
	echo '<iframe width="560" height="315" style="border-radius:0px;" src="https://www.youtube.com/embed/'. $vi->url .'?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>';
endforeach;
?>