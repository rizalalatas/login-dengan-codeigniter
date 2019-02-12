<?php echo form_open('Administrator/login') ?>

<label for="username">Masukan Username</label>
<input type="text" name="username"><br><br>
<label for="password">Masukan Password</label>
<input type="password" name="password"><br><br>
<button type="submit" name="submit">login</button>

<?php echo form_close() ?>