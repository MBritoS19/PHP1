<nav class="navbar navbar-expand-sm bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">Matheuzinho</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <?php if($pg_atual == 'home'): ?>
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        <?php else: ?>
          <a class="nav-link" href="home.php">Home</a>
        <?php endif; ?>
        </li>

        <li class="nav-item">
        <?php if($pg_atual == 'usuario'): ?>
          <a class="nav-link active" aria-current="page" href="#">Inserir Usuario</a>
        <?php else: ?>
          <a class="nav-link" href="usuario.php">Inserir Usuario</a>
        <?php endif; ?>
          
        </li>
        <li class="nav-item">
        <?php if($pg_atual == 'resultado'): ?>
          <a class="nav-link active" aria-current="page" href="#">Resultado</a>
        <?php endif;?>
        </li>
      </ul>
    </div>
  </div>
</nav>