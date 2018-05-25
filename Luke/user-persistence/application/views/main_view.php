<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php echo $error;?>
        <? echo form_open_multipart('main/upload');?>
        <input type="file" name="userfile" />
        <input type="submit" name="submit" value="upload image">
</form>
    </body>
</html>
