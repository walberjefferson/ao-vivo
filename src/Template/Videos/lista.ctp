<?php echo $this->Html->image('santana.png', ['alt' => $cakeDescription, 'border' => '0', 'class' => 'santana']) ?>
<div class="row">
	<div class="col-md-8 col-md-offset-2">

		<?php
			$hora =  date('H:i');

			foreach ($video as $vi) :
				if($hora >= $vi->inicio and $hora < $vi->fim) :
				echo '<div class="embed-responsive embed-responsive-16by9">';
				echo '<iframe width="560" height="315" class="embed-responsive-item" src="https://www.youtube.com/embed/'. $vi->url .'?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>';
				echo '</div>';
				echo "<h3 class='text-center'>" . $vi->titulo . " novenário Senhora Sant'Ana </h3>";
				else :
					echo '<h2 class="text-center transmissao">Transmissão a partir das 19:00h</h2>';
				endif;
			endforeach;
		?>
	</div>
	

	<?php
	/*
	foreach ($videoss as $v) :
		echo "<p>" . $v->titulo . " novenário Senhora Sant'Ana </p>";
		echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/'. $v->url .'?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>';
	endforeach;
*/
	?>

</div>