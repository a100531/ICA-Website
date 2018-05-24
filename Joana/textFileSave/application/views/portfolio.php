<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>File Upload</title>
  </head>
  <body>
      <?=form_open_multipart($form_action);?>
          <?php foreach ($form as $key => $input): ?>

              <?=form_label($key.':', $input['id']);?>
              <?=form_input($input);?>
              <br>

          <?php endforeach; ?>

          <?=form_button($buttons['submit'])?>

      <?=form_close();?>

  </body>
</html>
