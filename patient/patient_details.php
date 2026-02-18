<?php include('meta_tags.php'); ?>
<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php include('cal.php'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <h1>PATIENT DETAILS</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">INFO</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">

                <div class="box box-danger">
                    <div class="box-header">
                        <h3 class="box-title"></h3>
                    </div>

                    <form action="patient_details_insert.php" id="formID" method="post" enctype="multipart/form-data" name="form1">
                        <table width="503" border="0" align="center">

                            <tr>
                                <td width="218" height="37">Patient Full Name </td>
                                <td width="290"><input name="patient_full_name" type="text" id="patient_full_name" placeholder="Enter Your Full Name" class="validate[required,custom[onlyLetter]] form-control"></td>
                            </tr>
                            <tr>
                                <td height="40">Patient Address </td>
                                <td><input name="patient_address" type="text" id="patient_address" placeholder="Enter Your Address" class="validate[required] form-control"></td>
                            </tr>
                            <tr>
                                <td height="38">City</td>
                                <td><input name="city" type="text" id="city" placeholder="Enter City" class="validate[required,custom[onlyLetter]] form-control"></td>
                            </tr>
                            <tr>
                                <td height="44">Contact Number</td>
                                <td><input name="contact_no" type="text" placeholder="Enter Valid Contact Number" class="validate[required,custom[onlyNumber]] form-control" id="contact_no" maxlength="10"></td>
                            </tr>
                            <tr>
                                <td height="39">DOB</td>
                                <td>
                                    <?php
                                    $date_default = date('Y-m-d');
                                    $syear = date('Y') - 50;
                                    $myCalendar = new tc_calendar("dob", true, true);
                                    $myCalendar->setIcon("calendar/images/iconCalendar.gif");
                                    $myCalendar->setDate(date('d', strtotime($date_default)), date('m', strtotime($date_default)), date('Y', strtotime($date_default)));
                                    $myCalendar->dateAllow("$syear-01-01", "$date_default");
                                    $myCalendar->setPath("calendar/");
                                    $myCalendar->setYearInterval(1950, 2002);
                                    $myCalendar->setAlignment('left', 'bottom');
                                    $myCalendar->writeScript();
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td height="39">Gender</td>
                                <td>
                                    <input name="gender" type="radio" value="Male" class="validate[required]"> Male
                                    <input name="gender" type="radio" value="Female" class="validate[required]"> Female
                                </td>
                            </tr>
                            <tr>
                                <td height="42">Blood Group </td>
                                <td><select name="blood_group" id="blood_group" class="validate[required] form-control">
                                        <option value="">Select Blood Group</option>
                                        <option value="A">A</option>
                                        <option value="A+">A+</option>
                                        <option value="AB">AB</option>
                                        <option value="O+">O+</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td height="50">E-mail id </td>
                                <td><input name="email_id" type="email" id="email_id" placeholder="Enter Valid E-mail" class="validate[required,custom[email]] form-control"></td>
                            </tr>
                            <tr>
                                <td height="49">Photo</td>
                                <td><input name="photo" type="file" placeholder="Insert Your Photo From Gallery" id="photo" required class="form-control"></td>
                            </tr>
                            <tr>
                                <td height="57">Pincode</td>
                                <td><input name="pincode" type="text" id="pincode" placeholder="Enter Valid Pincode" class="validate[required,custom[pinCode]] form-control"></td>
                            </tr>
                            <tr>
                                <td height="61" colspan="2">
                                    <div align="center">
                                        <input type="submit" name="Submit" value="Submit" class="btn btn-success">
                                        <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>

            </div>
        </div>
    </section>
</div>

<?php include('footer.php'); ?>
<?php include('script.php'); ?>
<?php include('val.php'); ?>