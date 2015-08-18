<br>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form class="form-horizontal">
                    <fieldset>

                        <!-- Form Name -->
                        <legend>Create new sale</legend>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="association">Association</label>
                            <div class="col-md-10">
                                <select id="association" name="association" class="form-control">
                                    <option value="co-employee">CO Employee</option>
                                    <option value="lead">Lead</option>
                                    <option value="prospect">Prospect</option>
                                    <option value="mql">MQL</option>
                                    <option value="sql">SQL</option>
                                    <option value="client">Client</option>
                                    <option value="vendor">Vendor</option>
                                    <option value="partner">Partner</option>
                                </select>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="company">Company Name</label>
                            <div class="col-md-10">
                                <input id="company" name="company" type="text" placeholder="" class="form-control input-md" required="">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="first">First Name</label>
                            <div class="col-md-10">
                                <input id="first" name="first" type="text" placeholder="" class="form-control input-md" required="">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="last">Last Name</label>
                            <div class="col-md-10">
                                <input id="last" name="last" type="text" placeholder="" class="form-control input-md" required="">
                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="department">Departments</label>
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

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="position">Position</label>
                            <div class="col-md-10">
                                <input id="position" name="position" type="text" placeholder="" class="form-control input-md" required="">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="email">Email</label>
                            <div class="col-md-10">
                                <input id="email" name="email" type="text" placeholder="" class="form-control input-md" required="">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="phone">Phone</label>
                            <div class="col-md-10">
                                <input id="phone" name="phone" type="text" placeholder="" class="form-control input-md" required="">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="skype">Skype</label>
                            <div class="col-md-10">
                                <input id="skype" name="skype" type="text" placeholder="" class="form-control input-md" required="">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="birthday">B-day</label>
                            <div class="col-md-10">
                                <input id="birthday" name="birthday" type="text" placeholder="" class="form-control input-md" required="">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="note">Personal note</label>
                            <div class="col-md-10">
                                <input id="note" name="note" type="text" placeholder="" class="form-control input-md" required="">
                            </div>
                        </div>

                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="photo">Photo</label>
                            <div class="col-md-10">
                                <input id="photo" name="photo" class="input-file" type="file">
                            </div>
                        </div>
                        
                        <!-- Button (Double) -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="save"></label>
                            <div class="col-md-10">
                                <button id="save" name="save" class="btn btn-success">Save</button>
                                <button id="cancel" name="cancel" class="btn btn-danger">Cancel</button>
                            </div>
                        </div>

                    </fieldset>
                </form>

            </div>
        </div>
    </div>
</section>