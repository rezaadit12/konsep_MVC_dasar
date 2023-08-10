<nav class="navbar navbar-expand-lg bg-primary bg-gradient">
    <div class="container">
        <a class="navbar-brand text-light" href="<?= BASEURL; ?>">| BISMILLAH |</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">Home</a>
                <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
                <a class="nav-link" href="<?= BASEURL; ?>/siswa">Siswa</a>
            </div>
            <a class="nav-link ms-auto" href="<?= BASEURL; ?>/Login/logout" onclick="return confirm('Yakin ingin keluar?')">Logout</a> 
        </div>
    </div>
</nav>
