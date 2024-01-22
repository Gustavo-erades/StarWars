<ul class="nav nav-pills justify-content-center">
    <li class="nav-item">
        <a class="nav-link" href=<?=$_SERVER["PHP_SELF"].'?cod=0'?>>Home</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link active dropdown-toggle bg-transparent" data-toggle="dropdown" id="dropdown">Episódios</a>
        <div class="dropdown-menu">
            <a href="<?=$_SERVER["PHP_SELF"].'?cod=ep1'?>" class="dropdown-item text-warning" id="menuEpisodio1">Episódio I</a>
            <a href="<?=$_SERVER["PHP_SELF"].'?cod=ep2'?>" class="dropdown-item" id="menuEpisodio2">Episódio II</a>
            <a href="<?=$_SERVER["PHP_SELF"].'?cod=ep3'?>" class="dropdown-item" id="menuEpisodio3">Episódio III</a>
            <a href="<?=$_SERVER["PHP_SELF"].'?cod=404'?>" class="dropdown-item" id="menuEpisodio4">Episódio IV</a>
            <a href="<?=$_SERVER["PHP_SELF"].'?cod=404'?>" class="dropdown-item" id="menuEpisodio5">Episódio V</a>
            <a href="<?=$_SERVER["PHP_SELF"].'?cod=404'?>" class="dropdown-item" id="menuEpisodio6">Episódio VI</a>
        </div>
    </li>
    <li class="nav-item">
        <a href="<?=$_SERVER["PHP_SELF"].'?cod=1'?>" class="nav-link" id="menuCreditos">Créditos</a>
    </li>
    <li class="nav-item">
        <a href="<?=$_SERVER["PHP_SELF"].'?cod=2'?>" class="nav-link" id="menuSobre">Sobre</a>
    </li>
</ul>