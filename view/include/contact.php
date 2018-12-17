        <div class="modal fade" id="contact-mail" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><i class="glyphicon glyphicon-remove-circle"></i></span> 
                </button>
              </div>
              <div class="modal-body">
                <form class="form form-horizontal" action="index.php?action=mailContact" method="post">
                    <h3 class="form">Pour  nous adresser un message</h3>
                  <h4 class="form">Comment avez-vous entendu parler de nous ?</h4>
                  <fieldset class="form">
                      <ul class="list-group">
                          <li class="list-group-item form">
                              <label for="friend" class="radio">
                                  <input type="radio" name="origin" value="par un ami" id="friend"><span class="form">par un ami.</span>
                              </label>
                          </li>
                          <li class="list-group-item form">
                              <label for="radio" class="radio">
                                  <input type="radio" name="origin" value="à la radio." id="radio"><span class="form">à la radio.</span>
                              </label>
                          </li>
                          <li class="list-group-item form">
                              <label for="television" class="radio">
                                  <input type="radio" name="origin" value="à la télévision." id="television"><span class="form">à la télévision.</span>
                              </label>
                          </li>
                          <li class="list-group-item form">
                              <label for="web" class="radio">
                                  <input type="radio" name="origin" value="sur le web." id="web"><span class="form">sur le web.</span>
                              </label>
                          </li>
                          <li class="list-group-item form">
                              <label for="other" class="radio">
                                  <input type="radio" name="origin" value="par un autre moyen." id="other"><span class="form">par un autre moyen.</span>
                              </label>
                          </li>
                      </ul>
                      <div class="row">
                          <div class="form-group has-error has-feedback col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <label for="name" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">Nom</label>
                              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                  <input type="text" class="form-control" id="name" name="name" placeholder="Thierry CHARPENTIER"
<?php if(isset($_SESSION['Id'])) { ?>
    value="<?= $_SESSION['FirstName'] ?> <?= $_SESSION['LastName'] ?>"
<?php } else { ?>
    value=""
<?php } ?>>                                 
                                  <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="form-group has-error has-feedback col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <label for="email" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">Courriel</label>
                              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                  <input type="text" class="form-control has-error has-feedback" id="email" name="email" placeholder="jean.dupont@ltd.com" 
<?php if(isset($_SESSION['Id'])) { ?>
    value="<?= $_SESSION['Email'] ?>"
<?php } else { ?>
    value=""
<?php } ?>>
                                  <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="form-group has-error has-feedback col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <label for="subject" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">Objet</label>
                              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                <select class="form-control has-error has-feedback" id="subject" name="subject">
                                    <option>Souhaite être rappelé</option>
                                    <option>Souhaite recevoir le catalogue des services</option>
                                    <option>Pour toute autre raison</option>
                                </select>
                                <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="form-group has-error has-feedback col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <label for="message" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">Message</label>
                              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                  <textarea class="form-control has-error has-feedback" id="message" name="message" rows="4"></textarea>
                                  <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                              </div>
                          </div>
                      </div>
                  </fieldset>
                  <div class="row">
                      <div class="form-group">
                          <button type="submit" id="submit" class="btn btn-sm btn-default">
                              <span class="glyphicon glyphicon-ok btn-icon" aria-hidden="true"></span>Envoyer
                          </button>
                      </div>
                  </div>
              </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermeture</button>
              </div>
            </div>
          </div>  
        </div>