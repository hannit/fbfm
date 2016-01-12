    <div class="modal fade" id="registration-modal" tabindex="-1" role="dialog" data-backdrop="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form class="registrationx-form" action="" method="post">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-times-circle fa-2x"></i>
                        </button>
                        Join As A Fan
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-sm-4">
                                <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
                                <span class="help-block">First name cannot be empty</span>
                            </div>
                            <div class="form-group col-sm-4">
                                <input type="text" class="form-control" id="lanme" name="lanme" placeholder="Last Name">
                                <span class="help-block">Last name cannot be empty</span>
                            </div>
                            <div class="form-group col-sm-4">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                                <span class="help-block">Email cannot be empty</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-4">
                                <input type="text" class="form-control" id="email-confirm" name="email-confirm" placeholder="Repeat Email">
                            </div>
                            <div class="form-group col-sm-4">
                                <input type="text" class="form-control" id="password" name="password" placeholder="Password">
                                <span class="help-block">Password cannot be empty</span>
                            </div>
                            <div class="form-group col-sm-4">
                                <input type="text" class="form-control" id="password-confirm" name="password-confirm" placeholder="Repeat Password">
                            </div>
                        </div>
                        <div class="row">
                            <div class="login-option-title">
                                <span class="stroke hidden-sm hidden-xs"></span>
                                <span class="text">Favorite Players</span>
                                <span class="stroke hidden-sm hidden-xs"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-4">
                                <input type="text" class="form-control" id="player-name" name="player-name" placeholder="Player's Name">
                            </div>
                            <div class="form-group col-sm-4">
                                <input type="text" class="form-control" id="club" name="club" placeholder="Club">
                            </div>
                            <div class="form-group col-sm-4">
                                <input type="text" class="form-control" id="position" name="position" placeholder="Position">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <a class="invert add-player pull-right" href="javascript:void(0)">Add Player...</a>
                            </div>
                            <div class="form-group table-responsive col-sm-12">
                                <table id="players-table" class="table table-blocks">
                                    <tbody>
                                        <tr>
                                            <th>Player's Name</th>
                                            <th>Club</th>
                                            <th>Position</th>
                                            <th class="last "></th>
                                        </tr>
                                        <tr>
                                            <td>Jordy Clasie</td>
                                            <td>Everton</td>
                                            <td>Goalkeeper</td>
                                            <td class="last col-xs-1 text-center">
                                                <a class="remove-line invert" href="javascript:void(0)">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="last">
                                            <td>Kelvin Davis</td>
                                            <td>Liverpool</td>
                                            <td>Midfielder</td>
                                            <td class="last col-xs-1 text-center">
                                                <a class="remove-line invert" href="javascript:void(0)">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="login-option-title">
                                <span class="stroke hidden-sm hidden-xs"></span>
                                <span class="text">Or Sign In With</span>
                                <span class="stroke hidden-sm hidden-xs"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group social-login col-sm-6">
                                <a class="btn btn-blue btn-block btn-lg" href="javascript:void(0)">Facebook</a>
                            </div>
                            <div class="form-group social-login col-sm-6">
                                <a class="btn btn-red btn-block btn-lg" href="javascript:void(0)">Google</a>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn-link" value="DONE">
                    </div>
                </form>
            </div>
        </div>
    </div>