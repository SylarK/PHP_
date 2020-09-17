<?php
	
	class Usuario{

		public function atualizarUsuario($nome,$senha,$imagem){
			$sql = MySql::conectar()->prepare("UPDATE `tb_admin.usuario` SET nome = ?,password = ?,img = ? WHERE user = ?");
			if($sql->execute(array($nome,$senha,$imagem,$_SESSION['user']))){
				return true;
			}else{
				return false;
			}
		}

		public static function userExists($user){
			$sql = MySql::conectar()->prepare("SELECT `id` FROM `tb_admin.usuario` WHERE user=?");
			$sql->execute(array($user));
			if($sql->rowCount() == 1)
				return true;
			else
				return false;
		}

		public static function cadastrarUsuario($user,$senha,$imagem,$nome,$cargo){
			$sql = MySql::conectar()->prepare("INSERT INTO `tb_admin.usuario` VALUES (null,?,?,?,?,?)");
			$sql->execute(array($user,$senha,$imagem,$nome,$cargo));
		}

	}

?>