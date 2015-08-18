<section>
    <h2 class="sr-only">Task type navigation</h2>
    <div class="container">

        <ol class="breadcrumb">
            <?php foreach ($types as $key => $type ): ?>
                <?php if($this->uri->segment(3) === $key): ?>
                    <li class="active">
                        <?php echo $type; ?>
                    </li>
                <?php else: ?>
                    <li>
                        <a href="<?php echo site_url($this->uri->segment(1)) . "/type/$key"; ?>">
                            <?php echo $type; ?>
                        </a>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ol>

    </div>
</section>

<br>

<section>
    <h2 class="sr-only">Create new type</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form class="form-horizontal">
                    <fieldset>

                        <!-- Form Name -->
                        <legend>Create new <?php echo strtolower($_site_config['can_see_navigation'][$this->uri->segment(1)]); ?> type</legend>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="type">Type</label>
                            <div class="col-md-10">
                                <input id="type" name="type" type="text" placeholder="" class="form-control input-md" required="">

                            </div>
                        </div>

                        <!-- Button (Double) -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="save"></label>
                            <div class="col-md-10">
                                <button id="save" name="save" class="btn btn-success">Save</button>
                                <a href="<?php echo site_url($this->uri->segment(1)); ?>" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>

                    </fieldset>
                </form>

            </div>
        </div>
    </div>
</section>