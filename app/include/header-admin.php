<?php require_once "../../path.php"; ?>
<header class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-4">
        <h1><a href="<?php echo BASE_URL; ?>">My site</a></h1>
      </div>
      <nav class="col-8">
        <ul>

            <li>
              <a href="#">
                <i class="fas fa-user"></i>

              </a>
            </li>
            <li>
                <a href="<?php echo BASE_URL . "../../logout.php"; ?>">Выход</a>
            </li>


        </ul>
      </nav>
    </div>
  </div>
</header>
