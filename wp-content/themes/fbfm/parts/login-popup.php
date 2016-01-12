    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" data-backdrop="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form class="login-form" action="" method="post">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-times-circle fa-2x"></i>
                        </button>
                        Sign In
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <input type="text" class="form-control" id="username" name="username" placeholder="User Name">
                                <span class="help-block">Username cannot be empty</span>
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="text" class="form-control" id="password" name="password" placeholder="Password">
                                <span class="help-block">Your password seem to be wrong</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <div class="checkbox">
                                    <label class="control-label" for="remember-me">
                                        <input type="checkbox" id="remember-me" name="remember-me" checked> Remember me on this machine
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-sm-6">
                                <a class="invert restore-password" href="javascript:void(0)">Restore Password...</a>
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
                            <div class="form-group col-sm-6">
                                <a class="btn btn-blue btn-block btn-lg" href="javascript:void(0)">Facebook</a>
                            </div>
                            <div class="form-group col-sm-6">
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