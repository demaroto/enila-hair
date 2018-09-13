<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('titulo')</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  	body { padding-top: 70px; }
  </style>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
  <a class="navbar-brand" href="/">
    <img src="../css/assets/brand/icone.svg" width="30" height="30" class="d-inline-block align-top" alt="Enila Hair">
  </a>
</nav>
  

<div class="container-fluid">
@yield('conteudo')
</div>

</body>
</html>