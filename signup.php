<form method="post" action="controller/userProcess.php">



              <h1>Registration</h1>

              <div>

<?php


session_start();
session_destroy();


if(isset($_GET['p'])){
echo '<select name="referal"><option value="'.$_GET["p"]. '">'.$_GET["p"]. '</option></select>';
}else {
echo '<select><option>No referal selected</option></select>';
}


?>


              </div>

              <div>
                    <select name="group_id">
                      <option value="1">
                        classic
                      </option> 
                      <option value="2">
                        Professional
                      </option> 
                      <option value="3">
                        Premium
                      </option> 
                      <option value="4">
                        Ultimate
                      </option> 
                      <option value="5">
                        Veteran
                      </option> 
                    </select>
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Name" name="username" required="">
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" name="email" required="">
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" required="">
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Re-type Password" name="retypePassword" required="">
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Tel" name="telephone" required="">
              </div>
               <div>
                 Male<input value="m" type="radio" name="gender">  Female<input value="f" type="radio" name="gender">
              </div>
              <div>
                <p style="color:red;">Please provide banking details in this format: BANK NAME,ACCOUNT NO</p>
                <input type="text" class="form-control" placeholder="BANKNAME,ACCNO" name="bankDetails" required="">
              </div>
              <div>
                <input type="submit" class="btn btn-success" value="register" name="btnManage">
              </div>

              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <br>

                <div>
                  <h1><i class="fa fa-paw"></i> HelpToBank!</h1>
                  <p>©2017 All Rights Reserved. HelpToBank! is a Crowdfunding Platform. Privacy and Terms</p>
                </div>
              </div>
  </form>