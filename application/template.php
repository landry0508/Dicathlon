<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8"/>
    <title> <?php echo $content;?> Dicathlon </title>
    </head>
    <body>
        <div id="global">
            <div id="entete">
                 <h1> Dicathlon </h1>
            </div>
            <div id="contenu">
                <?php $this->load->view($content);?>
            </div>
            <div id="pied">
                <strong>&copy;2023</strong>
            </div>
        </div>
    </body>
</html>