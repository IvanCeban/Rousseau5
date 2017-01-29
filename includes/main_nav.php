<nav class='navbar'>
    <div class="container-fluid">
        <button><span class="hamburger"></span></button>
        <ul class='nav visible-links'>
            <li class="nav-item <?php if($current_page == 'home') {echo 'active';} ?>"><a class="nav-link" href='/index.php'>Accueil</a></li>
            <li class="nav-item <?php if($current_page == 'results_for_sale') {echo 'active';} ?>"><a class="nav-link" href='/results_for_sale.php'>Achat résidentiel</a></li>
            <li class="nav-item <?php if($current_page == '') {echo 'active';} ?>"><a class="nav-link" href='#'>Location résidentiel</a></li>
            <li class="nav-item <?php if($current_page == 'results_promotions') {echo 'active';} ?>"><a class="nav-link" href='/results_promotions.php'>Projets neufs</a></li>
            <li class="nav-item <?php if($current_page == 'commercial') {echo 'active';} ?>"><a class="nav-link" href='/commercial.php'>Locaux commerciaux</a></li>
            <li class="nav-item dropdown <?php if($current_page == 'philosophy'||$current_page == 'press_list'||$current_page == 'team') {echo 'active';} ?>">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">L’agence</a>
                <div class="dropdown-menu" aria-labelledby="Preview">
                    <a class="dropdown-item <?php if($current_page == 'philosophy') {echo 'active';} ?>" href="#">Philisophie & competence</a>
                    <a class="dropdown-item <?php if($current_page == 'press_list') {echo 'active';} ?>" href="/press_list.php">Revue de presse</a>
                    <a class="dropdown-item <?php if($current_page == 'team') {echo 'active';} ?>" href="/team.php">L’equipe</a>
                </div>
            </li>
            <li class="nav-item"><a class="nav-link" href='#'>Nous contacter</a></li>
        </ul>
        <ul class='nav hidden-links hidden'></ul>
    </div>
</nav>