<?php
include("dbconnect.php"); // caminho do seu arquivo de conexão ao banco de dados
?>
<!doctype html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="/print.css" media="print" />

<html>
  <div>  <form class="myForm" method="post"  action= "<?php echo $_SERVER['PHP_SELF'] ?>?a=buscar">
<title> Cadastrar Cliente</title>

<h1><center> Cadastre o Cliente </center></h1>
<br></br>
<div class="alin">
<label> NOME </label>
 <input name="nome" />

<label> EMAIL </label>
<input name="email" type="email" >

<label> TELEFONE </label>
<input type="text" placeholder="Telefone" name="phone" class="phone"/>
<input type="submit"  value="salvar" class="btn btn-primary"/>
<script>
 $(document).ready(function(){
    $('body').on('focus', '.phone', function(){
        var maskBehavior = function (val) {
            return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },
        options = {
            onKeyPress: function(val, e, field, options) {
                field.mask(maskBehavior.apply({}, arguments), options);

                if(field[0].value.length >= 14){
                    var val = field[0].value.replace(/\D/g, '');
                    if(/\d\d(\d)\1{7,8}/.test(val)){
                        field[0].value = '';
                        alert('Telefone Invalido');
                    }
                }
            }
        };
        $(this).mask(maskBehavior, options);
    });
});

});
     
     </script>
</div>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript">
		$(document).ready(function() {
			$('#tabela').DataTable({			
				"processing": true,
				"serverSide": true,
				"ajax": {
					"url": "forms.php",
					"type": "POST"
				}
			});
		} );
		</script>
	</head>
	<body>
		<h1>Listar Clientes</h1>
		<table id="tabela" class="display" style="width:100%">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Email</th>
					<th>Telefone</th>
				</tr>
			</thead>
		</table>		
	</body>
</html>


<script>
    function somenteNumeros(num) {
        var er = /[^0-9.]/;
        er.lastIndex = 0;
        var campo = num;
        if (er.test(campo.value)) {
          campo.value = "";
        }
    }
 </script>

     
     </script>

<style>

.name{
  display: flex;
align-items: center;
justify-content: space-between;

  border-width: 1px;
border-style: solid;
border-color: #000;
}
.alin{
display: flex;
align-items: center;
justify-content: space-between;
padding: 1.2em;
    border-width: 1px;
border-style: solid;
border-color: #000;
  }
body{
  border-width: 1px;
border-style: solid;
border-color: #000;

}
.trans{
  background-color: "#ffffff";
}
  header{
    text-align-last:center ;
    padding: 1.2em;
    border-width: 1px;
border-style: solid;
border-color: #000;
  }
  h2{
    text-align-last:center ;
  }
  #tabela{
    font:arial;
    font-size: 15px;
  }
  #swal-input2{
      font:arial;
      font-size:15px;
    }
   

 #imgpos {
  position: absolute; 
  left: 180px; /* posiciona a 90px para a esquerda */ 
  top: 105px; /* posiciona a 70px para baixo */
}
    .myForm {
border-width: 1px;
border-style: solid;
border-color: #000;
  }
.myForm {
      display: column;
      grid-template-columns: [labels] auto [controls] 1fr;
      grid-auto-flow: columns;
      grid-gap: .2em;
      grid-gap: .3em;
      background: white;
      padding: 1.5em;
      margin: 50px 150px 200px 150px;
    }
    .myForm > label  {
      grid-column: labels;
      grid-row: auto;
    }
    .myForm > input{
      grid-column: controls;
      grid-row:row;
    }
    .myForm > textarea {
      grid-column: controls;
      grid-row: auto;
    }
    .myForm > button {
      grid-column: span 2;
    }  
  
    @page 
  {
      size: A4;   /* auto is the initial value */
      margin: 0mm;  /* this affects the margin in the printer settings */
  }
@media print{
.myForm {
    
      
      padding: 1.5em;
      margin: 0;
    }
    #asse{
      position: absolute; 
  left: 760px; /* posiciona a 90px para a esquerda */ 
  top: 900px; /* posiciona a 70px para baixo */}

    .myForm > select{
      display:none;
    }
    #buscar{
      display:none;
    }
    #imgpos {
  position: absolute; 
  left: 45px; /* posiciona a 90px para a esquerda */ 
  top: 80px; /* posiciona a 70px para baixo */
}
#botaocadastrar{
display:none;
}
#block{
display:none;
}


}
   </style>
<?php

$nome = $_POST['nome'];
$nome=$_POST['nome'];
$email=$_POST['email'];
$fone=$_POST['telefone'];
$result_usuario = "INSERT INTO cliente(nome, email,telefone) VALUES ('$nome','$email',$fone)";
$resultado_usuario = mysqli_query($conn, $result_usuario);
    ?>
</html>