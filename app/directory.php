<div >
    <div id="page-wrapper" >

        <div class="graphs">
            <div class="xs">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Alumni Members</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="horizontal-form">
                                <form class="form-horizontal">
                                    <div >

                                        <div style="margin-bottom: 20px;background-color: lavender ;padding-bottom: 10px;padding-top: 10px"
                                             class="form-group">
                                            <label class="col-sm-2 control-label"><b>Batch</b></label>

                                            <div class="col-sm-4">
                                                <select required="required"
                                                        class="form-control"
                                                        id="batch">
<!--                                                    <option value="1">All Customers</option>-->
<!--                                                    <option value="2">Individual Customers</option>-->
<!--                                                    <option value="3">Company Customers</option>-->
                                                </select>
                                            </div>

                                            <label class="col-sm-2 control-label"><b>Search</b></label>
                                            <div class="col-sm-4">
                                                <input id="txtSearch" type="text"
                                                       class="form-control"
                                                       placeholder="Search here">
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <table class="table table-striped" id="datatable">
                                                <thead>
                                                <tr>
                                                    <th>Member Id</th>
                                                    <th>Register Date</th>
                                                    <th>Name</th>
                                                    <th>Batch</th>
                                                    <th>Degree</th>
                                                    <th>City</th>
                                                    <th>Contact Number 1</th>
                                                    <th>Contact Number 2</th>
                                                    <th>Profession</th>
                                                    <th>Organization</th>
                                                    <th>City</th>
                                                    <th>Country</th>

                                                </tr>
                                                </thead>

                                            </table>
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

    <!-- /.delete modal -->
    <div id="deleteConfirmDialog" class="modal modal-open" role="dialog"
         data-size="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Customer Deletion</h4>
                </div>
                <div class="modal-body">
                    <div class="row col-lg-12">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8 input-group">
                            <h5 style="text-align: center">Do you want delete this customer?</h5>
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                    <br>
                    <br>
                </div>
                <div class="modal-footer">
                    <div class="col-md-offset-9">
                        <button id="yesBtnOfFinish" data-toggle="tooltip"
                                class="btn btn-info btn-sm" ng-click="deleteCustomer()">Yes
                        </button>
                        <button id="reviewBtn" data-toggle="tooltip"
                                class="btn btn-info btn-sm" data-dismiss="modal">No
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /. dalete modal -->

    <!-- /. update modal -->
    <div id="updateDialog" class="modal modal-open" role="dialog" data-size="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>

                <div class="panel panel-success ">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Update customer</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="horizontal-form">
                                <form form="myForm" class="form-horizontal">

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Name</label>
                                        <div class="col-md-8">
                                            <input id="name" required="required" data-toggle="tooltip"
                                                   title="Customer Name"
                                                   ng-model="customer.name" type="text" class="form-control "
                                                   placeholder="Customer Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Adderss</label>
                                        <div class="col-md-8">
                                            <input id="address" required="required" data-toggle="tooltip"
                                                   title="Customer Address"
                                                   ng-model="customer.address" type="text" class="form-control"
                                                   placeholder="Address">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"><b>Region</b></label>

                                        <div ng-init="getRegions()" class="col-sm-8">
                                            <select required="required" data-toggle="tooltip" title="Customer Region"
                                                    class="form-control" ng-model="customer.region"
                                                    id="region">
                                                <option value="">Select Region</option>
                                                <option
                                                    ng-repeat="data in allRegions" value="{{data.regId}}">
                                                    {{data.regId}} - {{data.name}}
                                                </option>
                                            </select></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Contact No</label>
                                        <div class="col-md-8">
                                            <input id="contactNo" required="required" data-toggle="tooltip"
                                                   title="Customer Contact Number"
                                                   class="form-control" ng-model="customer.contactNo" type="text"
                                                   placeholder="Contact No" maxlength="10">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Credit Period</label>
                                        <div class="col-md-8">
                                            <input id="creditPeriod" required="required" autocomplete="false"
                                                   data-toggle="tooltip"
                                                   title="Credit Period" ng-model="customer.creditPeriod" type="text"
                                                   class="form-control" placeholder="Credit Period" maxlength="2">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Date</label>
                                        <div class="col-md-8">
                                            <input id="registeredDate" required="required" data-toggle="tooltip"
                                                   title="Customer Register Date"
                                                   ng-model="customer.registeredDate" type="text" placeholder="YYYY-MM-DD" class="form-control"
                                                   placeholder="Date" disabled="disabled">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"><b>Sales Representative</b></label>

                                        <div ng-init="getAllSalesRepresentative()" class="col-sm-8">
                                            <select required="required" data-toggle="tooltip"
                                                    title="Sales Representative"
                                                    class="form-control"
                                                    ng-model="customer.salesRepresentative"
                                                    id="salesRepresentative">
                                                <option value="">Select Sales Representative</option>
                                                <option ng-repeat="data in allSalesRep" value="{{data.userId}}">
                                                    {{data.userId}} - {{data.name}}
                                                </option>
                                            </select></div>
                                    </div>
                                    <div ng-hide="companyCustomerHide">
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">NBT</label>
                                            <div class="col-md-8">
                                                <input id="nbt" required="required" data-toggle="tooltip"
                                                       title="NBT"
                                                       ng-model="customer.nbt" type="text" class="form-control"
                                                       placeholder="NBT">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">VAT</label>
                                            <div class="col-md-8">
                                                <input id="vat" required="required" data-toggle="tooltip"
                                                       title="VAT"
                                                       ng-model="customer.vat" type="text" class="form-control"
                                                       placeholder="VAT">
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="col-md-offset-9">
                        <button id="yesBtnOfFinish" data-toggle="tooltip"
                                class="btn btn-info btn-sm" ng-click="updateCustomer(customer)">Update
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.update modal -->
</div>