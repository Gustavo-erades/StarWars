<?php
    $file='paginacao.php';
?>
<ul class="nav nav-pills justify-content-center">
    <li class="nav-item">
        <a class="nav-link" href=<?="$file?cod=0"?>>Home</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle bg-transparent" data-toggle="dropdown" id="dropdown">Episódios</a>
        <div class="dropdown-menu">
            <a href=<?="$file?cod=1"?> class="dropdown-item" id="episodio1">Episódio I</a>
            <a href=<?="$file?cod=2"?> class="dropdown-item" id="menuEpisodio2">Episódio II</a>
            <a href=<?="$file?cod=3"?> class="dropdown-item" id="menuEpisodio3">Episódio III</a>
            <a href=<?="$file?cod=404"?> class="dropdown-item" id="menuEpisodio4">Episódio IV</a>
            <a href=<?="$file?cod=404"?> class="dropdown-item" id="menuEpisodio5">Episódio V</a>
            <a href=<?="$file?cod=404"?> class="dropdown-item" id="menuEpisodio6">Episódio VI</a>
        </div>
    </li>
    <li class="nav-item">
        <a href="<?=$file?>?cod=7" class="nav-link" id="menuCreditos">Créditos</a>
    </li>
    <li class="nav-item">
        <a href=<?="$file?cod=8"?> class="nav-link" id="menuSobre">Sobre</a>
    </li>
</ul>