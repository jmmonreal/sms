<?php 
if(isset($this->params['named']['no_msj'])) {
echo "Mensajes Restantes : ".$this->params['named']['no_msj'];
}
echo "<br><hr><br>";
 ?>
 <style>
 .sendMsj  input[type="text"]
 {
 	width: 300px !important;
 }
 </style>
<div class="sendMsj">
<form action="/users/send" method="post">
	Para:<input type="text" name="num" placeholder="ejemplo 3921010000"  maxlength="10">
	Mensaje:<input name="msj" type="text" maxlength="140"/>
	<input type="hidden" name="ide" value="FyouM"/>
	<input type="submit" values="Enviar"/>

</form>
</div>	