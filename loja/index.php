<?php
    include "cabecalho.php"
?>
<body>
    <div class="container">
        <h1>Loja da Ana Fortes - Doces</h1>
        <h2>Venha conhecer nossos doces!</h2>

        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <a href = "form_cadastrar.php"type="button" class="btn btn-light">Cadastrar</a>
            <a href = "listar.php"type="button" class="btn btn-light">Listar</a>
        </div>
          

                <div class="row">
        <?php
            // Lista com fotos e legendas
            $fotos = [
            ["src" => "https://painacozinha.com/wp-content/uploads/12.Cheesecake-de-Morango-Sem-Acucar.webp", "legenda" => "Cheescake"],
            ["src" => "https://cms-cdn.saipos.com/assets/2024/05/21/doces-saipos-sistema-para-restaurante-3_uid_664cf50ba8175.png", "legenda" => "Donuts"],
            ["src" => "https://delicious.com.br/wp-content/uploads/2020/10/DSC_0183.jpg", "legenda" => "Docinhos"]
            ];

            foreach ($fotos as $foto) {
            echo '
            <div class="col-md-4 mb-4 text-center">
                <img src="'. $foto["src"] .'" class="img-thumbnail" style="width:100%; height:250px; object-fit:cover;" alt="Foto">
                <p class="mt-2">'. $foto["legenda"] .'</p>
            </div>
            ';
            }
        ?>
        </div>

        <style>
            body {
                background-color: #FFC1C1;
            }

            h1{
                font-family: "Times New Roman", Times, serif;
                color: #FFFAFA;
                font-size: 36px;
            }

            h2{
                font-family: "Times New Roman", Times, serif;
                color: #fffafa;
                font-size: 36px;
            }
            </style>
            

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>
</html>