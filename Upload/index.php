﻿<?php

if($_POST['submit'] == "Upload"){
	include('config/UpLoadTree.php');
	$upload = new Upload($_FILES['arquivo']['name'] , $_FILES['arquivo']['size'] , $_FILES['arquivo']['tmp_name'] , $_FILES['arquivo']['type']);
}
if($_POST['submit'] == "Upload Todos"){
	include('config/MultiploUpLoadTree.php');
	$multiploUpload = new MultiploUpload($_FILES['arquivo']['name'] , $_filial['filial'] , $_nome['nome'] , $_FILES['arquivo']['size'] , $_FILES['arquivo']['tmp_name'] , $_FILES['arquivo']['type']);
	
header(""); 
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="" type="image/x-icon">
<center><img src=""/></center>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Envio de Documentos</title>
<script type="text/javascript" src="js/jquery.js">             	</script>
<script type="text/javascript" src="js/interface/interface.js"> </script>
<script type="text/javascript" src="js/funcoes.js">           	</script>
<link href="css/estilo.css" type="text/css" rel="stylesheet" />

</head>
<body>
	<div>
	<fieldset>
        	<legend>TITULO/legend>
        	<small><font face="verdana" color="#000000" > 
			<b>TITULO<br></b>
			
    </fieldset><br><br></small></small></font>


</br>

	<tr>	
    </form>
    </div>
    
    <div id="MultiploUpload">
    	<a href="#" id="windowOpen">Clique aqui para carregar arquivos...</a>
	</div>
    
    <!-- Início Janela Filé -->
    <div id="window">
        <div id="windowTop">
            <div id="windowTopContent">Documentos</div>
            <img src="images/window_min.jpg"   id="windowMin" />
            <img src="images/window_max.jpg"   id="windowMax" />
            <img src="images/window_close.jpg" id="windowClose" />
        </div>
        <div id="windowBottom">
            <div id="windowBottomContent">
                &nbsp;
            </div>
        </div>    
        <div id="windowContent">
            <form action="index.php" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <span>
                        <input type="file"   name="arquivo[]"  />
                    </span>
                    <span id="result">
                    	<!-- Se for precionado o + aqui é adicionado os campos -->
                    </span>
                    <span>
                    	<a href="#" onClick="adicionaCampo();">Adicionar arquivo +</a>
                    </span>
                    
                    <span>
                        <input type="submit" name="submit" value="Upload Todos" id="submit"/>    
                    </span>
                </fieldset>
            </form>
        </div>
        <img src="images/window_resize.gif" id="windowResize" />
	</div>
    <!-- Arquivo INI da Janela(window) -->
	<script src="js/fc.js"></script>
    <!-- Fim Janela Filé -->
</html>
</body>
