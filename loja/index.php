<?php
    include "cabecalho.php"
?>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#a3003f;">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Loja</a>
        </div>
    </nav>

    <div class="container text-center mt-4">
        <h1 class="text-dark">Doces deliciosos</h1>
        <h2 class="text-muted mb-4">Venha conhecer nossos doces!</h2>

        <div class="mb-4">
            <a href="form_cadastrar.php" class="btn btn-danger me-2">Cadastrar</a>
            <a href="listar.php" class="btn btn-outline-dark">Listar</a>
        </div>

        <!-- Produtos -->
        <div class="row">
        <?php
            $fotos = [
                ["src" => "https://painacozinha.com/wp-content/uploads/12.Cheesecake-de-Morango-Sem-Acucar.webp", "legenda" => "Cheesecake"],
                ["src" => "https://cms-cdn.saipos.com/assets/2024/05/21/doces-saipos-sistema-para-restaurante-3_uid_664cf50ba8175.png", "legenda" => "Donuts"],
                ["src" => "https://delicious.com.br/wp-content/uploads/2020/10/DSC_0183.jpg", "legenda" => "Docinhos"]
            ];

            foreach ($fotos as $foto) {
                echo '
                <div class="col-md-4 mb-4">
                    <div class="card shadow h-100">
                        <img src="'. $foto["src"] .'" class="card-img-top" style="height:250px; object-fit:cover;" alt="Foto">
                        <div class="card-body">
                            <h5 class="card-title">'. $foto["legenda"] .'</h5>
                            <p class="card-text text-muted">Experimente nosso delicioso '.$foto["legenda"].'.</p>
                            <a href="#" class="btn btn-sm btn-danger">Comprar</a>
                        </div>
                    </div>
                </div>';
            }
        ?>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center text-white py-3 mt-4" style="background-color:#a3003f;">
        © 2025 Loja da Ana Fortes - Todos os direitos reservados
    </footer>

    <style>
        body {
            background-color: #ffe6eb;
        }

    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
