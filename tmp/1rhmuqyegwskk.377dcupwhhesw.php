<?php echo $this->render('header_dash.htm',NULL,get_defined_vars(),0); ?>
	<body>
		<div class="col-sm9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<h1 class="page-header">Praticien List</h1>
			<?php foreach (($list?:[]) as $list): ?>
				<p><?= $list['id'] ?> <?= $list['username'] ?><p>
			<?php endforeach; ?>
		</div>	
		<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/home_admin">Kidsprofiler</a>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
        <!--  <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li> -->
         <!--    <li><a href="#">Reports</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Export</a></li> -->
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="/praticien_list">Liste Praticien</a></li>
            <!-- <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li> -->
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="/add">Ajouter</a></li>
            <li><a href="/delete">Supprimer</a></li>
            <li><a href="/edit">Modifier</a></li>
          </ul>
        </div>
          
        </div>
      </div>
    </div>
</body></html>