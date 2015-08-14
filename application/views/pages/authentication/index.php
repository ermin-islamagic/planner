<section>
    <h2 class="sr-only">Authenticate</h2>
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-lg-offset-4 login-form">
                <div class="row">
                    <?php if(!empty($message_array)){ if($message_array): ?>
                        <div class="callout callout-<?php echo $message_array['type'] ; ?>">
                            <?php echo $message_array['message']; ?>
                        </div>
                    <?php endif; } ?>

                    <form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>">
                        <fieldset>

                            <!-- Text input-->
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label class="control-label" for="email">E-mail</label>
                                    <input id="email" name="email" type="text" placeholder="" class="form-control input-md" required="">
                                    <!--                        <span class="help-block">Enter your e-mail address</span>-->
                                </div>
                            </div>

                            <!-- Password input-->
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label class="control-label" for="password">Password</label>
                                    <input id="password" name="password" type="password" placeholder="" class="form-control input-md" required="">
                                    <!--                        <span class="help-block">Enter your password</span>-->
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Remember me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="hidden" name="action" value="singin">
                                    <button id="submit" name="submit" class="btn btn-brown center-block">Login</button>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <a class="help-block" href="<?php echo base_url("forgot"); ?>">Forgot your Password?</a>
                                </div>
                            </div>

                        </fieldset>
                    </form>

                </div>
            </div>

        </div>
    </div>
</section>

