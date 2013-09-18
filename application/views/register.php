
<div id="info"> 

      <p id="regis">สมัครสมาชิก</p>

        <?php echo form_open('auth/create_user'); ?>
            <div class = "row" style="margin-left:200px; margin-bottom:10px;">


              <p style="margin-right:30px;">
                  <?php echo form_error("first_name","<font size=5px; class='font_error' color='error'>","</font>");?></br>
                  <label for="first_name" style="margin-right:10px;">First Name:</label>
                  <input type="text" name="first_name" value="" id="first_name"  />      </p>

                  <p>  <?php echo form_error("last_name","<font size=5px; class='font_error' color='error'>","</font>");?></br>
                  <label for="first_name" style="margin-right:10px;">Last Name:</label> 
                  <input type="text" name="last_name" value="" id="last_name"  />      </p>

            </div>

             
            <div class = "row" style="margin-left:200px; margin-bottom:10px;">
              <p style="margin-right:30px;">  <?php echo form_error("email","<font size=5px; class='font_error' color='error'>","</font>");?></br>
                  <label for="email" style="margin-right:63px;">Email:</label>
                  <input type="text" name="email" value="" id="email"  />      </p>

                   <p>  <?php echo form_error("phone","<font size=5px; class='font_error' color='error'>","</font>");?></br>
                   <label for="phone" style="margin-right:55px;">Phone:</label> 
                  <input type="text" name="phone" value="" id="phone"  />      </p>

             </div>

            

            <div class = "row" style="margin-left:200px;">

              <p>  <?php echo form_error("password","<font size=5px; class='font_error' color='error'>","</font>");?></br>
                  <label for="password" style="margin-right:30px;">Password:</label> 
                  <input type="password" name="password" value="" id="password"  />      </p>

            </div>
            <div class = "row" style="margin-left:200px;">

              <p> <?php echo form_error("password_confirm","<font size=5px; class='font_error' color='error'>","</font>");?></br>
                  <label for="password_confirm" style="margin-right:30px;">Confirm Password:</label> 
                  <input type="password" name="password_confirm" value="" id="password_confirm"  />      </p>

             </div>

           
          
 
          
             <button type="submit" class="btn" id="submit" >Submit</button>
             <button  type="reset" class="btn" id="reset" >Reset</button>
         



        <?php echo form_close(); ?>


          <link href="<?php echo base_url() ?>styles/jqModal.css" rel="stylesheet" type="text/css" /> 
</div>