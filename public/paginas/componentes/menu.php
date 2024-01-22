<ul class="nav nav-pills justify-content-center">
    <li class="nav-item">
        <a class="nav-link" href=<?="$path?cod=0"?>>Home</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link active dropdown-toggle bg-transparent" data-toggle="dropdown" id="dropdown">Episódios</a>
        <div class="dropdown-menu">
            <a href=<?=$_SERVER["PHP_SELF"].'?cod=0'?> class="dropdown-item text-warning" id="episodio1">Episódio I</a>
            <a href=<?=$_SERVER["PHP_SELF"].'?cod=1'?> class="dropdown-item" id="menuEpisodio2">Episódio II</a>
            <a href=<?=$_SERVER["PHP_SELF"].'?cod=2'?> class="dropdown-item" id="menuEpisodio3">Episódio III</a>
            <a href=<?=$_SERVER["PHP_SELF"].'?cod=3'?> class="dropdown-item" id="menuEpisodio4">Episódio IV</a>
            <a href=<?=$_SERVER["PHP_SELF"].'?cod=4'?> class="dropdown-item" id="menuEpisodio5">Episódio V</a>
            <a href=<?=$_SERVER["PHP_SELF"].'?cod=5'?> class="dropdown-item" id="menuEpisodio6">Episódio VI</a>
        </div>
    </li>
    <li class="nav-item">
        <a href="<?=$_SERVER["PHP_SELF"].'?cod=7'?>" class="nav-link" id="menuCreditos">Créditos</a>
    </li>
    <li class="nav-item">
        <a href=<?=$_SERVER["PHP_SELF"].'?cod=8'?> class="nav-link" id="menuSobre">Sobre</a>
    </li>
</ul>