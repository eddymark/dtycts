<html>
    <?php
    $title = "registration";
    include ('shared/head.php');
    ?>
    <body>

        <?php include ('shared/layout.php'); ?> 
        <div class="right">
            <?php include ('shared/logo.php'); ?>
            <div class="row-fluid">
                <div class="col-md-12 ">Registration</div>

                <div class="col-md-12 ">

                    <form role="form">
                        <div class="form-group">
                            <label for="name">First Name:</label>
                            <input type="text" class="form-control" id="firstname">
                        </div>

                        <div class="form-group">
                            <label for="lastname">Last Name:</label>
                            <input type="text" class="form-control" id="lastname">
                        </div>

                        <div class="form-group">
                            <label for="tittle">Tittle:</label>
                            <input type="text" class="form-control" id="titlename">
                        </div>

                        <div class="form-group">
                            <label for="phonenum">Phone Number:</label>
                            <input type="text" class="form-control" id="titlename">
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address:</label>
                            <input type="email" class="form-control" id="titlename">
                        </div>

                        <div class="form-group">
                            <label for="text">Name of your School/Organization:</label>
                            <input type="text" class="form-control" id="school">
                        </div>

                        <div class="form-group">
                            <label for="address">Your School/Organization address:</label>
                            <input type="text" class="form-control" id="address">
                        </div>

                        <div class="form-group">
                            <label for="text">City:</label>
                            <input type="text" class="form-control" id="school">
                        </div>
                        <div class="form-group">
                            <label for="state">State:</label>
                            <select name="state" class="form-control" id="sel1" >

                                <option value="NY">New York</option>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="zcode">Zip Code:</label>
                            <input type="text" class="form-control" id="zipcode">
                        </div>

                        <div class="form-group">
                            <label for="orgtype">What type of organization do you represent<br>(Check all that apply)</label>

                            <form role="form">

                                <div class="radio">
                                    <label><input type="radio" name="optradio">Elementary School</label>
                                </div>

                                <div class="radio">
                                    <label><input type="radio" name="optradio">Middle or junior High School</label>
                                </div>

                                <div class="radio">
                                    <label><input type="radio" name="optradio">High School</label>
                                </div>

                                <div class="radio">
                                    <label><input type="radio" name="optradio">Head Start of Early Start</label>
                                </div>

                                <div class="radio">
                                    <label><input type="radio" name="optradio">Community Based Organization</label>
                                </div>
                            </form>
                        </div>
                        <div class="form-group">
                            <label for="orgtype">Best way to contact you?</label>

                            <form role="form">

                                <div class="square">
                                    <label><input type="checkbox" name="checkbox">Email</label>
                                </div>

                                <div class="square">
                                    <label><input type="checkbox" name="checkbox">Phone</label>
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="orgtype">Would you like to be added to the email list to get more information regarding fatherhood programs</label>

                            <form role="form">

                                <div class="square">
                                    <label><input type="checkbox" name="checkbox">Yes</label>
                                </div>

                                <div class="square">
                                    <label><input type="checkbox" name="checkbox">No</label>
                                </div>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                </div>
                </div>
                    </form>

                    <?php include ('shared/footer.php'); ?>
                </div>



                <?php include ('shared/jscript.php'); ?>
                </body>
                </html>
