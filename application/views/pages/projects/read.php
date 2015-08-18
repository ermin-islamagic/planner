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

            <?php if($this->uri->segment(3) !== 'all' && $this->uri->segment(3) !== NULL): ?>
                <li>
                    <a href="<?php echo current_url(); ?>/update_type" title="Edit selected task type">
                        <i class="fa fa-edit"></i>
                    </a>
                </li>
            <?php endif; ?>

            <li>
                <a href="<?php echo site_url($this->uri->segment(1)); ?>/create_type" title="Add new task type">
                    <i class="fa fa-plus"></i>
                </a>
            </li>
        </ol>

    </div>
</section>

<br>

<section>
    <h2 class="sr-only">Items section</h2>
    <div class="container">

        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail outline">
                    <a href="<?php echo site_url($this->uri->segment(1)); ?>/create"><img src="https://placeholdit.imgix.net/~text?txtsize=133&amp;txt=%2B&amp;w=780&amp;h=420" alt=""></a>
                </div>
            </div>

            <div data-items="legal">

                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <a href="#"><img src="https://placeholdit.imgix.net/~text?txtsize=80&amp;txt=PROJECT%201&amp;w=780&amp;h=420" alt=""></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <a href="#"><img src="https://placeholdit.imgix.net/~text?txtsize=80&amp;txt=PROJECT%202&amp;w=780&amp;h=420" alt=""></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <a href="#"><img src="https://placeholdit.imgix.net/~text?txtsize=80&amp;txt=PROJECT%203&amp;w=780&amp;h=420" alt=""></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <a href="#"><img src="https://placeholdit.imgix.net/~text?txtsize=80&amp;txt=PROJECT%204&amp;w=780&amp;h=420" alt=""></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <a href="#"><img src="https://placeholdit.imgix.net/~text?txtsize=80&amp;txt=PROJECT%205&amp;w=780&amp;h=420" alt=""></a>
                    </div>
                </div>

            </div>

        </div>


    </div>
</section>