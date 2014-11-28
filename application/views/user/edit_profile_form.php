<div class="block-border">
    <div class="block-header">
        <h1>Edit Profile
            <?php
            $message=$this->session->userdata('message');
            if(isset($message))
            {
                echo "--".$message;
                $this->session->unset_userdata('message');
                        
            }
            ?>
        </h1><span></span>
    </div>
    <form  class="block-content form" action="<?php echo base_url();?>super_user/update_user_profile/<?php echo $user_info->user_id?>" method="post">

        <div class="_100">
            <p><label for="textfield">Full Name</label><input id="textfield" name="user_name" class="required" type="text" value="<?php echo $user_info->user_name;?>" /></p>
        </div>
        <div class="_100">
            <p><label for="textfield">Email</label><input type="email" name="user_email_address" class="required" type="text" value="<?php echo $user_info->user_email_address;?>" /></p>
        </div>
        <div class="_100">
            <p><label for="textfield">Password</label><input type="password" name="user_password" class="required" type="text" value="<?php echo $user_info->user_password;?>" /></p>
        </div>


        <div class="clear"></div>
        <div class="block-actions">
            <ul class="actions-left">
                <li><a class="button red" id="reset-validate-form" href="javascript:void(0);">Reset</a></li>
            </ul>
            <ul class="actions-right">
                <li><input type="submit" class="button" value="Save Profile"></li>
            </ul>
        </div>
    </form>
</div>