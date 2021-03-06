<h2 class="new-user"><?php echo __('Edit user') ?></h2>
<section class="new-file fz-modal">
  <form method="POST" enctype="multipart/form-data" action="<?php echo url_for ('/admin/users/'.$user->id.'/edit') ?>" id="update_user-form">
  <div id="username">
    <label for="input-username"><?php echo __('Username') ?> :</label>
    <input type="text" id="input-username" name="username" value="<?php echo $user->username ?>" alt="<?php echo __('Username') ?>" maxlength="40" />
    <!-- <label for="input-password"><?php echo __('Password') ?> :</label> -->
    <input type="password" id="input-password" name="password" class="password" autocomplete="off" size="5"/>
  </div>
  <div id="email">
    <label for="input-email"><?php echo __('Email') ?> :</label>
    <input type="text" id="input-email" name="email" value="<?php echo $user->email ?>" alt="<?php echo __('email') ?>" maxlength="200" />
  </div>
  <input type="hidden" name="is_admin" id="is_admin" value="0" />
  <ul id="options">
    <li id="is_admin">
      <input type="checkbox" name="is_admin" id="is_admin" <?php echo ($user->is_admin==1) ? "checked" : "" ?> />
      <label for="is_admin" title="<?php echo __('This user can administrate FileZ') ?>">
        <?php echo __('Admin') ?>
      </label>
    </li>
  </ul>
  <div id="firstname">
    <label for="input-firstname"><?php echo __('Firstname') ?></label>
    <input type="text" id="input-firstname" name="firstname" value="<?php echo $user->firstname ?>" alt="<?php echo __('Firstname') ?>" maxlength="20" />
  </div>
  <div id="lastname">
    <label for="input-lastname"><?php echo __('Lastname') ?> :</label>
    <input type="text" id="input-lastname" name="lastname" value="<?php echo $user->lastname ?>" alt="<?php echo __('Lastname') ?>" maxlength="20" />
  </div>
  <div id="upload">
    <input type="submit" id="update_user" name="update_user" class="awesome blue large" value="&raquo; <?php echo __('Update') ?>" />
  </div>
  </form>
</section>
