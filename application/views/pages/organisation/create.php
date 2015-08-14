<br>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form class="form-horizontal">
                    <fieldset>

                        <!-- Form Name -->
                        <legend>Create new department position</legend>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="name">Role Name</label>
                            <div class="col-md-10">
                                <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="">
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

                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="tor">TOR</label>
                            <div class="col-md-10">
                                <input id="tor" name="tor" class="input-file" type="file">
                            </div>
                        </div>

                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="kpi">Goals &amp; KPI</label>
                            <div class="col-md-10">
                                <input id="kpi" name="kpi" class="input-file" type="file">
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