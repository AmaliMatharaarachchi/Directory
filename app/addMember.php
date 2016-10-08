<div onload="setDate()">
    <div class="graphs">
        <div class="xs">
            <div class="panel panel-success formRightMargine">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Add new member</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="horizontal-form">
                            <form form="myForm" class="form-horizontal">



                                <div class="form-group">
                                    <label class="col-md-2 control-label">Name</label>
                                    <div class="col-md-8">
                                        <input id="name" required="required"
                                                type="text" class="form-control "
                                               placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Contact Number</label>
                                    <div class="col-md-8">
                                        <input id="contactNumber1" required="required"
                                               type="text" class="form-control"
                                               placeholder="Contact Number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label"> </label>
                                    <div class="col-md-8">
                                        <input id="contactNumber2"
                                               type="text" class="form-control"
                                               placeholder="Optional-Contact Number" maxlength="10">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label">Country</label>
                                    <div class="col-md-8">
                                        <input id="country" required="required"
                                               type="text" class="form-control "
                                               placeholder="Country">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">City</label>
                                    <div class="col-md-8">
                                        <input id="city" required="required"
                                               type="text" class="form-control "
                                               placeholder="City">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label">Profession</label>
                                    <div class="col-md-8">
                                        <input id="profession" required="required"
                                               type="text" class="form-control "
                                               placeholder="Profession">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label">Date</label>
                                    <div class="col-md-8">
                                        <input id="registeredDate" required="required"
                                               type="text" class="form-control"
                                               placeholder="YYYY-MM-DD" disabled="disabled">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label"></label>
                                    <div class="col-sm-8">
                                        <button style="float: right"  title="Sign Up"
                                                type="submit"
                                                class=" btn btn-primary waves-effect w-md waves-light m-b-5"> Create account
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



