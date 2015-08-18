<br>
<section>
    <h2 class="sr-only">Create section</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <form class="form-horizontal" action="<?php echo current_url(); ?>" method="POST" enctype="multipart/form-data">
                    <fieldset>

                        <!-- Form Name -->
                        <legend>Create new agreement template</legend>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="type">Agreement type</label>
                            <div class="col-md-10">
                                <select id="type" name="type" class="form-control">
                                    <option value="contracts">Contracts</option>
                                    <option value="non-disclosure-agreement">NON-DISCLOSURE AGREEMENT (NDA)</option>
                                    <option value="purchase-order">PURCHASE ORDER</option>
                                </select>
                            </div>
                        </div>

                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="userfile">Upload agreement</label>
                            <div class="col-md-10">
                                <input id="userfile" name="userfile" class="input-file" type="file" size="20">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="url">or agreement url</label>
                            <div class="col-md-10">
                                <input id="url" name="url" type="text" placeholder="etc: https://docs.google.com/a/creativeoutsourcing.nl/spreadsheets/d/1_riUGCaG5H80Aakj48B07NVPYGUTGsA2Kw77k6WhQnk" class="form-control input-md">
                            </div>
                        </div>

                        <!-- Button (Double) -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="save"></label>
                            <div class="col-md-10">
                                <button id="save" name="save" class="btn btn-success">Save</button>
                                <a href="<?php echo site_url($this->uri->segment(1)); ?>" id="cancel" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>

                    </fieldset>
                </form>

            </div>
        </div>
    </div>
</section>