<div class="panel panel-primary connexion text-center">
    <div class="panel-heading">
        <h1 class="text-center">Page de connexion</h1>
        <img src="public/images/stop-connexion.png" alt="" class="img-thumbnail">
        <h4 class="text-center text-italic">Sauf aux personnes duement autorisées</h4>
    </div>
    <div class="panel-body">
        <div class="card">
            <div class="card-body">
                <form action="admin.php?action=connexion" method="post" accept-charset="utf-8" name="form-login">
                    <h4>Saisir ses identifiants</h4>
                    <div class="form-group row">
                        <label for="pseudo" class="col-lg-1 col-md-1 col-sm-3 col-xs-6">Compte</label>
                        <input class="form-control col-lg-10 col-md-10 col-sm-8 col-xs-6" name="pseudo" id="pseudo" type="text" placeholder="Identifiant">
                    </div>
                    <div class="form-group row">
                        <label for="pwd" class="col-lg-1 col-md-1 col-sm-3 col-xs-6">Clé</label>
                        <input class="form-control col-lg-10 col-md-10 col-sm-8 col-xs-6" name="pwd" id="pwd" type="password" placeholder="Mot de passe">
                    </div>
                    <button type="submit" class="btn btn-warning"><i class="fas fa-plug"></i> Se connecter</button>
                </form>
            </div>      
        </div>
    </div>
</div>