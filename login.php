<?php require 'pages/header.php';?>
    <div class="container">
        <h1>Login</h1>
        <?php 
            require 'classes/usuarios.class.php';
            $u = new Usuarios();
            if(isset($_POST['email']) && !empty($_POST['email'])){
                $email = addslashes($_POST['email']);
                $senha = $_POST['senha'];

                if($u->login($email, $senha)){
                    ?>
                    <script text="text/javascript">
                        window.location.href="./";
                    console.log('eita soh');
                    </script>
                    <?php
                }else{
                    ?>
                    <div class="alert alert-dander">
                        <strong>Usuario ou senha incorretos</a>
                        <script text="text/javascript">
                            console.log('errado');
                        </script>
                    </div>
                    <?php

                }

            }
        ?>
        <form method='POST'>
            <div class="form-group">
                <label for="email">email:</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="senha">senha:</label>
                <input type="password" name="senha" id="senha" class="form-control">
            </div>
            <input type="submit" value="Fazer login" class="btn btn-default">
        </form>
    </div>
<?php require 'pages/footer.php';?>
