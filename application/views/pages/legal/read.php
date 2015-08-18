<section>
    <h2 class="sr-only">Document type navigation</h2>
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
                    <a href="<?php echo current_url(); ?>/update_type" title="Edit selected document type">
                        <i class="fa fa-edit"></i>
                    </a>
                </li>
            <?php endif; ?>

            <li>
                <a href="<?php echo site_url($this->uri->segment(1)); ?>/create_type" title="Add new document type">
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
                        <a href="#"><img src="https://placeholdit.imgix.net/~text?txtsize=80&amp;txt=AGREEMENT%201&amp;w=780&amp;h=420" alt=""></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <a href="#"><img src="https://placeholdit.imgix.net/~text?txtsize=80&amp;txt=AGREEMENT%202&amp;w=780&amp;h=420" alt=""></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <a href="#"><img src="https://placeholdit.imgix.net/~text?txtsize=80&amp;txt=AGREEMENT%203&amp;w=780&amp;h=420" alt=""></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <a href="#"><img src="https://placeholdit.imgix.net/~text?txtsize=80&amp;txt=AGREEMENT%204&amp;w=780&amp;h=420" alt=""></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <a href="#"><img src="https://placeholdit.imgix.net/~text?txtsize=80&amp;txt=AGREEMENT%205&amp;w=780&amp;h=420" alt=""></a>
                    </div>
                </div>

            </div>

        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Created</th>
                    <?php if((int)$_current_user->role > 5): ?>
                        <th style="max-width: 30px;">Edit</th>
                        <th style="max-width: 30px;">Delete</th>
                    <?php endif; ?>
                </tr>
                </thead>
                <tbody>
                <?php foreach($rows as $row):?>
                    <tr>
                        <td><?php echo $row->id; ?></td>
                        <td><?php echo $row->name; ?></td>
                        <td><?php echo date("d M. Y" , strtotime($row->created) ); ?></td>
                        <?php if((int)$_current_user->role > 5): ?>
                            <td><a href="<?php echo $pagination_setting['base_url'] . "/update/$row->id"; ?>"><i class="fa fa-edit"></i></a></td>
                            <td><a href="<?php echo $pagination_setting['base_url'] . "/delete/$row->id"; ?>" class="remove-action"><i class="fa fa-trash"></i></a></td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div><!-- /.box-body -->

        <div class="row">
            <div class="col-xs-4 col-sm-2 col-md-2 col-lg-1">
                <form method="POST" action="<?php echo $pagination_setting['base_url']; ?>"><?php echo form_dropdown('items_per_page', $pagination_setting['per_page'], $pagination_setting['items_per_page'], 'class="form-control"' ); ?></form>
            </div>
            <div class="col-lg-6">
                <?php echo $pagination_setting['pagination']; ?>
            </div>
        </div>

    </div>
</section>