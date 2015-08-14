<?php if($_current_user): ?>
<section>
    <h2 class="sr-only">Page navigation</h2>
    <div class="container">

        <ul class="nav nav-pills nav-justified">
            <?php foreach ($_site_config['can_see_navigation'] as $key => $nav ): ?>
                <li <?php echo ($this->uri->segment(1) === $key)?'class="active"':''; ?>>
                    <a href="<?php echo site_url($key); ?>"><?php echo $nav; ?><i class="fa fa-angle-right"></i> <?php echo ($this->uri->segment(1) === $key)?'<span class="sr-only">(current)</span>':''; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>

    </div>
</section>
<?php endif; ?>