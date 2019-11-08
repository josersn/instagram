<?php
include("Connect.php");
    class Post extends Connect {
        public function criarPost($imgPath, $description){
            $db = parent::criarConexao();
            $query = $db->prepare("INSERT INTO post (img, descricao) VALUES( ?, ?)");
            return $query->execute([$imgPath, $description]);
            
        }

    }

?>