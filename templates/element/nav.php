<?php
$c_name = $this->request->getParam('controller');
$a_name = $this->request->getParam('action');
// echo $a_name;
// exit;
?>

<div class="container">
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                <?php foreach ($menus as $menu) : ?>

                    <?php if (empty($menu->submenus)) : ?>
                        <li class="nav-item ">
                            <a class="nav-link" href="#"><?= $menu->name ?></a>
                        </li>
                    <?php else : ?>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $menu->name ?></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <?php foreach ($menu->submenus as $key => $submenu) : ?>
                                <a class="dropdown-item" href="#"><?= $submenu->name ?></a>
                   
                                <?php endforeach; ?>
                            </div>
                        </li>
                    <?php endif ?>
                <?php endforeach; ?>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</div>


<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">

            <li class=<?= $a_name == 'home' ? 'bg-warning' :  '' ?>>
                <a class="nav-link" href=<?= $this->Url->build(['controller' => 'blogs', 'action' => 'home']); ?>>Home</a>
            </li>

            <li class=<?= $a_name == 'about' ? 'bg-warning' :  '' ?>>
                <a class="nav-link" href=<?= $this->Url->build(['controller' => 'blogs', 'action' => 'about']); ?>>About</a>
            </li>
            <li class=<?= $a_name == 'contact' ? 'bg-warning' :  '' ?>>
                <a class="nav-link" href=<?= $this->Url->build(['controller' => 'blogs', 'action' => 'contact']); ?>>Contact</a>
            </li>
        </ul>
    </div>

</nav>