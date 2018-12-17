<div class="panel panel-primary connexion text-center">
    <div class="panel-heading">
        <h1 class="text-center">Page de connexion</h1>
        <h2 class="text-center">Pour faire un audit de sécurité en ligne de sa structure il faut se connecter ou bien créer un compte</h2>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <img src="public/images/serveurs.png" alt="" class="img-thumbnail">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="#" class="tooltip-test" data-toggle="modal" data-target="#login" title="Pour vous connecter à votre compte.">
                    <img src="public/images/connexion.png" alt="" class="img-thumbnail">
                </a>    
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="#" class="tooltip-test" data-toggle="modal" data-target="#registring" title="Pour créer un compte.">
                    <img src="public/images/creationCompte.png"  alt="" class="img-thumbnail">
                </a>    
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <img src="public/images/reseaux.png" alt="" class="img-thumbnail">
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                        <h3 class="form">Se connecter à son compte</h3>
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
                        <img src="public/images/connexion.png" alt="" width="100">
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                        <form class="form form-horizontal" action="index.php?action=connexion" method="post" accept-charset="utf-8" name="form-login">
                            <h4 class="form">Saisir ses identifiants</h4>   
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="pseudo" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 control-label">Compte</label>
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
<div class="modal fade" id="registring" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                        <h3 class="form">Créer un compte</h3>
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
                        <img src="public/images/creationCompte.png" alt="">
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                        <form class="form form-horizontal" action="index.php?action=registring" method="post" accept-charset="utf-8" name="form-login">
                            <h4 class="form">Saisir les informations demandées</h4>   
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="rPseudo" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">Compte</label>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                        <input name="pseudo" placeholder="Identifiant" class="form-control" type="text" id="rPseudo" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="rSociety" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">Société</label>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                        <input name="society" placeholder="Société" class="form-control" type="text" id="rSociety"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="rFirst" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">Prénom</label>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                        <input name="firstName" placeholder="Prénom" class="form-control" type="text" id="rFirst" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="rLast" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">Nom</label>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                        <input name="lastName" placeholder="Nom" class="form-control" type="text" id="rLast" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="rNo" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">No</label>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                        <input name="streetNum" placeholder="N° de rue" class="form-control" type="text" id="rNo" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="rAddr1" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">Adresse</label>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                        <input name="addr1" placeholder="Nom de la rue" class="form-control" type="text" id="rAddr1" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="rAddr2" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">Complément</label>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                        <input name="addr2" placeholder="Complément d'adresse" class="form-control" type="text" id="rAddr2"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="rCP" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">Code postal</label>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                        <input name="postalCode" placeholder="Code postal" class="form-control" type="text" id="rCP" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="rCity" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">Ville</label>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                        <input name="city" placeholder="Ville" class="form-control" type="text" id="rCity" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="rTph" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">Téléphone fixe</label>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                        <input name="phone" placeholder="0325745073" class="form-control" type="text" id="rTph"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="rGsm" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">Mobile</label>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                        <input name="mobile" placeholder="0651143924" class="form-control" type="text" id="rGsm"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="rEmail" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">Adresse</label>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                        <input name="email" placeholder="john.doe@ltd.com" class="form-control" type="email" id="rEmail" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="rPwd1" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">Clé</label>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                        <input name="pwd" class="form-control" type="password" id="rPwd1" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="rPwd2" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">Confirmation</label>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                        <input name="confirm" class="form-control" type="password" id="rPwd2" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col=lg-8 col-md-8 col-sm-6 col-xs-12">
                                    <button class="btn btn-default" type="submit">
                                        <span class="glyphicon glyphicon-ok btn-icon" aria-hidden="true"></span>Créer le compte
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