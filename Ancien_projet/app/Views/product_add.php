<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo $title; ?></title>
    </head>
    <body>
        <h1><?php echo $title; ?></h1>
        <?php
		if (count($arrErrors) > 0){
        ?>
        <div class="error">
        <?php
                foreach($arrErrors as $strError){
                    echo "<p>".$strError."</p>";
                }
        ?>
        </div>
        <?php
            }
            echo $form_open;
            echo $label_name;
            echo $form_name;
            echo $label_price;
            echo $form_price;
            echo $form_submit;
            echo $form_close;
        ?>
    </body>
</html>