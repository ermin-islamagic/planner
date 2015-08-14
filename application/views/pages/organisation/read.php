<section>
    <h2 class="sr-only">Type navigation</h2>
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
                    <a href="<?php echo current_url(); ?>/update_type" title="Edit selected type">
                        <i class="fa fa-edit"></i>
                    </a>
                </li>
            <?php endif; ?>

            <li>
                <a href="<?php echo site_url($this->uri->segment(1)); ?>/create_type" title="Add new type">
                    <i class="fa fa-plus"></i>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url($this->uri->segment(1)); ?>/user_create" title="Add new user">
                    <i class="fa fa-user-plus"></i>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url($this->uri->segment(1)); ?>/list_users" title="List all users">
                    <i class="fa fa-list"></i>
                </a>
            </li>


        </ol>

    </div>
</section>

<br>

<section>
    <h2 class="sr-only">Items section</h2>
    <div class="container">

        <div id="organisation"></div>

    </div>
</section>