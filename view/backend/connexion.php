<div class="panel panel-primary connexion text-center">
    <div class="panel-heading">
        <h1 class="text-center">Page de connexion</h1>
        <h2 class="text-center">L'accès aux pages d'administration est interdit</h2>
        <h4 class="text-center text-italic">Sauf aux personnes duement autorisées</h4>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <img src="public/images/serveurs.png" alt="" class="img-thumbnail">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <a href="#" class="tooltip-test" data-toggle="modal" data-target="#login" title="Pour vous connecter à votre compte.">
                    <img src="public/images/stop-connexion.png" class="img-thumbnail">
                </a>    
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <img src="public/images/reseaux.png" alt="" class="img-thumbnail">
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                        <h3 class="form">Se connecter au compte Administrateur</h3>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="glyphicon glyphicon-remove-circle"></i></span> 
                        </button>
                    </div>
                </div>
            </div>
            <div class="modal-body">
            <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <img src="public/images/connexion.png" alt="" width="90%">
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                        <form class="form form-horizontal" action="admin.php?action=connexion" method="post" accept-charset="utf-8" name="form-login" role="form">
                            <h4 class="form">Saisir ses identifiants</h4>   
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="compte" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 control-label">Compte</label>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                        <input name="pseudo" placeholder="Identifiant" class="form-control" type="text" id="pseudo"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col=lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="password" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 control-label">Clé</label>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                        <input name="pwd" placeholder="Mot de passe" class="form-control" type="password" id="password"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col=lg-8 col-md-8 col-sm-6 col-xs-12">
                                    <button class="btn btn-default" type="submit">
                                        <span class="glyphicon glyphicon-ok btn-icon" aria-hidden="true"></span>Se connecter
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>