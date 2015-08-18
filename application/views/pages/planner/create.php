<br>
<section>
    <h2 class="sr-only">Create section</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">



                <form class="form-horizontal" action="<?php echo current_url(); ?>" method="POST">
                    <fieldset>

                        <!-- Form Name -->
                        <legend>Create new task</legend>


            <code>
                Account Director view:
            </code>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="task">Name</label>
                            <div class="col-md-10">
                                <input id="task" name="task" type="text" placeholder="task name" class="form-control input-md" required="">

                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="type">Type</label>
                            <div class="col-md-10">
                                <select id="type" name="type" class="form-control">
                                    <option value="clients">Clients</option>
                                    <option value="inhouse">Inhouse</option>
                                </select>
                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="clients">Clients</label>
                            <div class="col-md-10">
                                <select id="clients" name="clients" class="form-control">
                                    <option value="client-1">Client 1</option>
                                    <option value="client-2">Client 2</option>
                                </select>
                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="employee">Employee</label>
                            <div class="col-md-10">
                                <select id="employee" name="employee" class="form-control">
                                    <option value="employee-1">Employee 1</option>
                                    <option value="employee-2">Employee 2</option>
                                </select>
                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="department">Department</label>
                            <div class="col-md-10">
                                <select id="department" name="department" class="form-control">
                                    <option value="ws-account-manager">WS ACCOUNT MANAGER</option>
                                    <option value="ws-account-executive">WS ACCOUNT EXECUTIVE</option>
                                    <option value="ws-account-assistant">WS ACCOUNT ASSISTANT</option>
                                    <option value="ws-graphic-designer">WS GRAPHIC DESIGNER</option>
                                    <option value="ux-ui-designer">UX/UI DESIGNER</option>
                                    <option value="web-developer">WEB DEVELOPER</option>
                                </select>
                            </div>
                        </div>

                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="brief">Task brief</label>
                            <div class="col-md-10">
                                <input id="brief" name="brief" class="input-file" type="file">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="gdrive">or brief link</label>
                            <div class="col-md-10">
                                <input id="gdrive" name="gdrive" type="text" placeholder="" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="start">Start</label>
                            <div class="col-md-10">
                                <input id="start" name="start" type="text" placeholder="" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="end">End</label>
                            <div class="col-md-10">
                                <input id="end" name="end" type="text" placeholder="" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="assignment">Assign to</label>
                            <div class="col-md-10">
                                <select id="department" name="assignment" class="form-control">
                                    <option value="account-manager">Acc.Manager</option>
                                    <option value="account-executive">Directors</option>
                                </select>
                            </div>
                        </div>






            <hr>
            <code>
                Account Manager view:
            </code>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="task">Name</label>
                            <div class="col-md-10">
                                <input id="task" name="task" type="text" placeholder="task name" class="form-control input-md" required="">

                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="type">Type</label>
                            <div class="col-md-10">
                                <select id="type" name="type" class="form-control">
                                    <option value="banner">Banner</option>
                                    <option value="interactive-banner">Interactive Banner</option>
                                    <option value="newsletter">Newsletter</option>
                                    <option value="website">Website</option>
                                    <option value="mobile-app">Mobile App</option>
                                    <option value="presentation">Presentation</option>
                                </select>
                            </div>
                        </div>

                       <!-- Select Basic -->
                        <div class="form-group">
            <code>
                vs
            </code>
                            <label class="col-md-2 control-label" for="type">Type</label>
                            <div class="col-md-10">
                                <select id="type" name="type" class="form-control">
                                    <option value="sales">Sales</option>
                                    <option value="improvements">Improvements</option>
                                </select>
                            </div>
                        </div>


                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="clients">Clients</label>
                            <div class="col-md-10">
                                <select id="clients" name="clients" class="form-control">
                                    <option value="client-1">Client 1</option>
                                    <option value="client-2">Client 2</option>
                                </select>
                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="employee">Employee</label>
                            <div class="col-md-10">
                                <select id="employee" name="employee" class="form-control">
                                    <option value="employee-1">Employee 1</option>
                                    <option value="employee-2">Employee 2</option>
                                </select>
                            </div>
                        </div>


                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="department">Department</label>
                            <div class="col-md-10">

        <code>
            Incorrect data Designers/Programmers
        </code>
                                <select id="department" name="department" class="form-control">
                                    <option value="Designers">Designers</option>
                                    <option value="Programmers">Programmers</option>
                                </select>
                            </div>
                        </div>

                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="brief">Task brief</label>
                            <div class="col-md-10">
                                <input id="brief" name="brief" class="input-file" type="file">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="gdrive">or brief link</label>
                            <div class="col-md-10">
                                <input id="gdrive" name="gdrive" type="text" placeholder="" class="form-control input-md">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="start">Start</label>
                            <div class="col-md-10">
        <code>
            Note here will be start hour with date too
        </code>
                                <input id="start" name="start" type="text" placeholder="" class="form-control input-md">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="end">End</label>
                            <div class="col-md-10">
        <code>
            Note here will be end hour with date too
        </code>
                                <input id="end" name="end" type="text" placeholder="" class="form-control input-md">
                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="assignment">Assign to</label>
                            <div class="col-md-10">
                                <select id="department" name="assignment" class="form-control">
                                    <option value="account-manager">Designers or Programmers</option>
                                    <option value="account-executive">Account Director</option>
                                </select>
                            </div>
                        </div>





        <hr>
        <code>
            Managing Director view:
        </code>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="task">Name</label>
                            <div class="col-md-10">
                                <input id="task" name="task" type="text" placeholder="task name" class="form-control input-md" required="">

                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="type">Type</label>
                            <div class="col-md-10">
                                <select id="type" name="type" class="form-control">
                                    <option value="banner">Banner</option>
                                    <option value="interactive-banner">Interactive Banner</option>
                                    <option value="newsletter">Newsletter</option>
                                    <option value="website">Website</option>
                                    <option value="mobile-app">Mobile App</option>
                                    <option value="presentation">Presentation</option>
                                </select>
                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <code>
                                vs
                            </code>
                            <label class="col-md-2 control-label" for="type">Type</label>
                            <div class="col-md-10">
                                <select id="type" name="type" class="form-control">
                                    <option value="sales">Sales</option>
                                    <option value="improvements">Improvements</option>
                                </select>
                            </div>
                        </div>


                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="clients">Clients</label>
                            <div class="col-md-10">
                                <select id="clients" name="clients" class="form-control">
                                    <option value="client-1">Client 1</option>
                                    <option value="client-2">Client 2</option>
                                </select>
                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="employee">Employee</label>
                            <div class="col-md-10">
                                <select id="employee" name="employee" class="form-control">
                                    <option value="employee-1">Employee 1</option>
                                    <option value="employee-2">Employee 2</option>
                                </select>
                            </div>
                        </div>


                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="department">Department</label>
                            <div class="col-md-10">

                                <code>
                                    Incorrect data Designers/Programmers
                                </code>
                                <select id="department" name="department" class="form-control">
                                    <option value="Designers">Designers</option>
                                    <option value="Programmers">Programmers</option>
                                </select>
                            </div>
                        </div>

                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="brief">Task brief</label>
                            <div class="col-md-10">
                                <input id="brief" name="brief" class="input-file" type="file">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="gdrive">or brief link</label>
                            <div class="col-md-10">
                                <input id="gdrive" name="gdrive" type="text" placeholder="" class="form-control input-md">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="start">Start</label>
                            <div class="col-md-10">
                                <code>
                                    Note here will be start hour with date too
                                </code>
                                <input id="start" name="start" type="text" placeholder="" class="form-control input-md">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="end">End</label>
                            <div class="col-md-10">
                                <code>
                                    Note here will be end hour with date too
                                </code>
                                <input id="end" name="end" type="text" placeholder="" class="form-control input-md">
                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="assignment">Assign to</label>
                            <div class="col-md-10">
                                <select id="department" name="assignment" class="form-control">
                                    <option value="account-manager">Acc.Manager</option>
                                    <option value="account-executive">Directors</option>
                                </select>
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