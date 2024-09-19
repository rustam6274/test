<?php 
require_once 'router.php';
require_once 'mod.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Задание</title>
</head>
<style>
.sticky {
    top: 0;
    z-index: 100;
    position: fixed;
    width: 100%;
}
.navbar-toggler:focus {
    box-shadow: 0 0 0 .05rem;
}
.btn-primary {
    color: #fff;
    background-color: #323f53;
    border-color: #323f53;
}
.btn-primary:hover {
    background-color: #89936b;
    border-color: #323f53;
}
</style>

<body> 
<header class="sticky">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
        <div class="container-fluid">
          <a class="navbar-brand" href="https://kompas-rus.ru/"><b>КОМПАС WEB</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navigation navbar-nav ms-auto ">
              <li class="nav-item">
                <a class="nav-link mx-2" href="index.php?page=task">Задание</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2" href="index.php?page=regiontime">Регион</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2" href="index.php?page=courier">ФИО курьера</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2" href="index.php?page=region">Регистрация поездки</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2" href="index.php?page=schedule">Расписание поездок</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
</header>
    <main>
        <section>
            <br><br><br>
            <div class="container">
        		 <?php 
        			Router::start($_SERVER['QUERY_STRING']);
        	 	 ?>
             </div>
  
        </section>
  </main>  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
<script type="text/javascript" src="js/courier.js"></script>
<script type="text/javascript" src="js/regiontime.js"></script>
<script type="text/javascript" src="js/region.js"></script>
<script type="text/javascript" src="js/select.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script>
	$(document).ready(function(){
	$('ul.navigation a').each(function () {
	if (this.href == location.href) $(this).parent().addClass('active');
	});
	});
</script>
</body>
</html>
