<div class="block">
	<?php 
  	if(isset($data['title']))
    	echo "<h1>".$data['title']."</h1>\n"; 
	?>
	<p><?php echo $data['content']; ?></p>
</div>