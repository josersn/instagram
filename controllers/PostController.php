<?php
    include("models/Post.php");
    class PostController{
        
   
    public function acao($rotas) {
        switch($rotas){
            case "posts":
            $this->viewPosts();
            break;
            case "formulario-post":
                $this->viewformPost();
            break;
            case "cadastrar-post":
                $this->criarPost();
            break;
        }
    }
    private function viewformPost(){
        include("views/newPost.php");
    }
    private function viewPosts(){
        include("views/posts.php");
    }
    private function criarPost() {
        $imgName = $_FILES["img"]["name"];
        $imgTmp = $_FILES["img"]["tmp_name"];
        $imgPath = "img/$imgName";
        move_uploaded_file($imgTmp, $imgPath);
        $descricao = $_POST["descricao"];

        $post = new Post();
        $resultado = $post->criarPost($imgPath, $descricao);

        if($resultado){
            header('Location: /instragram');
        }else {
            echo "não true";
        }
    }
}
?>