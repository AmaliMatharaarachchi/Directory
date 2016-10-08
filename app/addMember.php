<?php
// define variables and set to empty values
$name = $contactNumber1 = $contactNumber1 = $email = $organization = $country = $profession = $city = "";
$nameErr = $contactNumber1Err = $contactNumber2Err = $emailErr = $countryErr = $cityErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $nameErr = "Only letters and white space allowed";
    }

    $contactNumber1 = test_input($_POST["contactNumber1"]);
    if (!preg_match("/^[0-9]*$/", $contactNumber1)) {
        $contactNumber1Err = "Only numbers allowed";
    }
    $contactNumber2 = test_input($_POST["contactNumber2"]);

    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }

    $country = test_input($_POST["country"]);
    if (!preg_match("/^[a-zA-Z ]*$/", $country)) {
        $countryErr = "Only letters and white space allowed";
    }

    $city = test_input($_POST["city"]);
    if (!preg_match("/^[a-zA-Z ]*$/", $city)) {
        $cityErr = "Only letters and white space allowed";
    }

    $profession = test_input($_POST["profession"]);

    $organization = test_input($_POST["organization"]);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
<div >
    <div class="graphs">
        <div class="xs">
            <div class="panel panel-success formRightMargine">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Add new member</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="horizontal-form">
                            <form method="get" class="form-horizontal"
                                  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                                <div class="form-group">
                                    <label class="col-md-2 control-label">Name</label>
                                    <div class="col-md-8">
                                        <input name="name" required="required"
                                               type="text" class="form-control "
                                               placeholder="Name"><span class="error">* <?php echo $nameErr; ?></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Contact Number</label>
                                    <div class="col-md-8">
                                        <input name="contactNumber1" required="required"
                                               type="text" class="form-control"
                                               placeholder="Contact Number" maxlength="10"><span
                                            class="error">* <?php echo $contactNumber1Err; ?></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label"> </label>
                                    <div class="col-md-8">
                                        <input name="contactNumber2"
                                               type="text" class="form-control"
                                               placeholder="Optional-Contact Number" maxlength="10"><span
                                            class="error"> <?php echo $contactNumber2Err; ?></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Email Address</label>
                                    <div class="col-md-8">
                                        <input name="email" required="required"
                                               type="text" class="form-control "
                                               placeholder="Email Address"><span
                                            class="error">* <?php echo $emailErr; ?></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Country</label>
                                    <div class="col-md-8">
                                        <input name="country" required="required"
                                               type="text" class="form-control "
                                               placeholder="Country"><span
                                            class="error">* <?php echo $countryErr; ?></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">City</label>
                                    <div class="col-md-8">
                                        <input name="city" required="required"
                                               type="text" class="form-control "
                                               placeholder="City"><span class="error">* <?php echo $cityErr; ?></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label">Profession</label>
                                    <div class="col-md-8">
                                        <input name="profession" required="required"
                                               type="text" class="form-control "
                                               placeholder="Profession"><span class="error"> <?php echo "*"; ?></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Organization</label>
                                    <div class="col-md-8">
                                        <input name="organization" required="required"
                                               type="text" class="form-control "
                                               placeholder="Organization"><span class="error"> <?php echo "*"; ?></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label">Date</label>
                                    <div class="col-md-8">
                                        <input name="registeredDate" required="required"
                                               type="text" class="form-control"
                                               placeholder="YYYY-MM-DD" disabled="disabled">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label"></label>
                                    <div class="col-sm-8">
                                        <button style="float: right" title="Sign Up"
                                                type="submit"
                                                class=" btn btn-primary waves-effect w-md waves-light m-b-5"> Create
                                            account
                                        </button>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


