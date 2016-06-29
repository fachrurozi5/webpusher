<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Web Pusher</title>
		<?php foreach ($css as $file) { ?>
	    <link href="<?php echo $file['src']; ?>" media="all" rel="stylesheet" />
	  <?php } ?>
</head>
<body>
	<div id="app">
	  <input v-model="newTodo" v-on:keyup.enter="addTodo">
	  <ul>
	    <li v-for="todo in todos">
	      <span>{{ todo.text }}</span>
	      <button v-on:click="removeTodo($index)">X</button>
	    </li>
	  </ul>
	</div>

	<?php foreach ($js as $file) { ?>
  	<script src="<?php echo $file['src']; ?>"></script>
  <?php } ?>
</body>
</html>
