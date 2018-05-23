<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" type="text/css" href="../assets/css/teste.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				$("#abas ul li").click(function(){
				    $(this).toggleClass("selecionado");

                    var idAba = $(this).attr("id");


                    $("."+idAba).toggle();
                });

            });



		</script>
</head>
<body>

	<div id="abas">
		<ul>

			<li id="aba1">Aba 1</li>
			<li id="aba2">Aba 2</li>
			<li id="aba3">Aba 3</li>
		</ul>
	</div>

<div id="conteudos">
	<div class="conteudo aba1">
		conteudo 1
	</div>
	<div class="conteudo aba2">
		conteudo 2
	</div>
	<div class="conteudo aba3">
		conteudo 3
	</div>
</div>

</body>
</html>