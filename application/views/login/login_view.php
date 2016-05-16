<div class="row">

    <?php echo validation_errors('<div class="alert alert-danger">', '</div>');?>
    <?php if($this->session->flashdata('registered')) : ?>
        <p class="alert alert-success"><?php echo $this->session->flashdata('registered'); ?></p>
    <?php endif;?>
    <div class="span6" id="login">

        <?php echo form_open('home/login_validation'); ?>
        <?php if($this->session->flashdata('login_failed')) : ?>
            <p class="alert alert-danger"><?php echo $this->session->flashdata('login_failed'); ?></p>
        <?php endif;?>


        <div id="login-form" class="form-horizontal">


            <div class="control-group">
                <label class="control-label">Login</label>
                <div class="controls">
                   <input type="text" name="login" class="input-large">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Password</label>
                <div class="controls">

                    <input type="password" name="password" class="input-large">
                </div>
            </div>
            <div class="control-group">

                <div class="controls">
                    <input type="submit" value="login" class="btn btn-primary">


                </div>

            </div>
         </div>


<?php
        echo form_close();

        ?>
    </div>

    <div class="span6" >


        <?php

        echo form_open('register/register'); ?>

                    <div id="register_form" class="form-horizontal">
                        <div class="control-group">
                            <label class="control-label">First Name</label>
                            <div class="controls">
                                <input type="text" name="firstname" class="input-large">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Last Name</label>
                            <div class="controls">
                                <input type="text" name="lastname" class="input-large">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Login</label>
                            <div class="controls">
                                <input type="text" name="login" class="input-large">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Email</label>
                            <div class="controls">
                                <input type="text" name="email" class="input-large">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Password</label>
                            <div class="controls">
                                <input type="password" name="password" class="input-large">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Confirm Password</label>
                            <div class="controls">
                                <input type="password" name="confirm_password" class="input-large">
                            </div>
                        </div>
                        <div class="control-group">

                            <div class="controls">
                                <input type="submit" value="register" class="btn btn-primary">
                            </div>
                        </div>
                    </div>
        <?php
        echo form_close();

        ?>

                </div>
    </div>




