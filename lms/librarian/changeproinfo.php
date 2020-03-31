<?php
include "profiledb.php";
?>
<title>change info</title>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>My Profile</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_content">
                                
								    <div class="login_wrapper">

            <section class="login_content" style="margin-top: -40px;">
                <form name="form1" action="changeproconfig.php"  method="post">
                    <h2>Profile info <?php echo $fn ?></h2><br>

                    <div>
                        <input type="text" class="form-control" placeholder="FirstName" value="<?php echo $fn ?>" name="firstname"  />
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="LastName" value="<?php echo $ln ?>" name="lastname" />
                    </div>

                    <div>
                        <input type="text" class="form-control" placeholder="Username" value="<?php echo $un ?>" name="username" readonly />
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="email" value="<?php echo $email ?>" name="email" />
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="contact" value="<?php echo $contact ?>" name="contact"  />
                    </div>
                    <div class="col-lg-12  col-lg-push-3">
                        <input class="btn btn-default submit " type="submit" name="submit1" value="Update">
                    </div>

                </form>
            </section>


    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
<?php
include "footer.php";
?>



