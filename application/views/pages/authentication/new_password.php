<section>
    <h2 class="sr-only">New password</h2>
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-lg-offset-4 login-form">
                <div class="row">

                    <?php if(!empty($message_array)){ if($message_array): ?>
                        <div class="callout callout-<?php echo $message_array['type'] ; ?>">
                            <?php echo $message_array['message']; ?>
                        </div>
                    <?php endif; } ?>

                    <form class="form-horizontal" method="POST" action="<?php echo current_url(); ?>">
                        <fieldset>
                            <!-- Text input-->
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label class="control-label" for="password">Enter password</label>
                                    <input type="password" id="password" name="password" placeholder="" class="form-control input-md" required="">
                                    <!--                        <span class="help-block">Enter your e-mail address</span>-->
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label class="control-label" for="confirm_password">Confirm password</label>
                                    <input type="password" id="confirm_password" name="confirm_password" placeholder="" class="form-control input-md" required="">
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="hidden" name="action" value="new_password">
                                    <button id="submit" name="submit" class="btn btn-brown center-block">Save</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>

        </div>
    </div>
</section>