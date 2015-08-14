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

            <li data-compare="toggle" class="sr-only">
                <a href="javascript:;" title="Compare">
                    <i class="fa fa-exchange"></i>
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





            <div class="col-lg-12">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#all" aria-controls="all" role="tab" data-toggle="tab">All</a></li>
                    <li role="presentation"><a href="#costs" aria-controls="costs" role="tab" data-toggle="tab">Costs</a></li>
                    <li role="presentation"><a href="#income" aria-controls="income" role="tab" data-toggle="tab">Income</a></li>
                    <li role="presentation"><a href="#filter" aria-controls="filter" role="tab" data-toggle="tab">Filter</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="all">
                        <div class="table-responsive">
                            <table class="table table-condensed table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th colspan="2"></th>
                                        <th colspan="2">Expected</th>
                                        <th colspan="2">Realised</th>
                                        <th colspan="2">Difference</th>
                                    </tr>
                                    <tr>
                                        <th colspan="2"></th>
                                        <th>Monthly</th>
                                        <th>Yearly</th>
                                        <th>Monthly</th>
                                        <th>Yearly</th>
                                        <th>Monthly</th>
                                        <th>Yearly</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Income in 2015</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Expenses in 2015</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="danger">
                                        <td>2.1</td>
                                        <td>Office Zagreb</td>
                                        <td>
                                            0							</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td class="green">0</td>
                                        <td class="green">0</td>
                                    </tr>
                                    <tr>
                                        <td>2.1.1</td>
                                        <td>Personel Costs</td>
                                        <td></td>
                                        <td>0</td>
                                        <td></td>
                                        <td>0</td>
                                        <td></td>
                                        <td class="green">0</td>
                                    </tr>
                                    <tr>
                                        <td>2.1.2</td>
                                        <td>Office and Administration Costs</td>
                                        <td></td>
                                        <td>0</td>
                                        <td></td>
                                        <td>0</td>
                                        <td></td>
                                        <td class="green">0</td>
                                    </tr>
                                    <tr class="warning">
                                        <td>2.2</td>
                                        <td>Office Sarajevo</td>
                                        <td>
                                            0							</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td class="green">0</td>
                                        <td class="green">0</td>
                                    </tr>
                                    <tr>
                                        <td>2.2.1</td>
                                        <td>Personel Costs</td>
                                        <td></td>
                                        <td>0</td>
                                        <td></td>
                                        <td>0</td>
                                        <td></td>
                                        <td class="green">0</td>
                                    </tr>
                                    <tr>
                                        <td>2.2.2</td>
                                        <td>Office and Administration Costs</td>
                                        <td></td>
                                        <td>0</td>
                                        <td></td>
                                        <td>0</td>
                                        <td></td>
                                        <td class="green">0</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Sales Provision (20%)</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Profit</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div role="tabpanel" class="tab-pane" id="costs">
                        ...
                    </div>
                    <div role="tabpanel" class="tab-pane" id="income">
                        ...
                    </div>
                    <div role="tabpanel" class="tab-pane" id="filter">
                        ...
                    </div>
                </div>

            </div>


        </div>


    </div>
</section>