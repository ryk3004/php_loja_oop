<?php
require_once("cabecalho.php");
require_once("banco-categoria.php");
require_once("logica-usuario.php");
require_once("class/Produto.php");
require_once("class/Categoria.php");
require_once("class/CategoriaDAO.php");

verificaUsuario();

$categoriaDao = new CategoriaDao($conexao);
$categoria = new Categoria();
$categoria->setId(1);

$produto = new Produto($nome, $preco, $descricao, $categoria, $usado);

$categorias = $categoriaDao->listaCategorias();

?>	

<h1>Formulário de produto</h1>
<form action="adiciona-produto.php" method="post">
	<table class="table">
		
		<?php include("produto-formulario-base.php"); ?>

		<tr>
			<td>
				<button class="btn btn-primary" type="submit">Cadastrar</button>
			</td>
		</tr>
	</table>
</form>

<?php include("rodape.php"); ?>