<?php
include('autoloader.php');
$detail_class = new ProductDetail();
$product = $product_class->getProductById();
?>
<doctype <!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css" />
        <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css" />/**icon library**/
        <script src="node_modules/jquery/dist/jquery.js"></script>
        <script src="node_modules/boostrap/dist/js/bootstrap.js"></script>
        <script src="node_modules/propper.js/dist/umd/propper.js"></script>
    </head>>
    
    <body>
        <div class="container">
            <div class = "row ">
                <div class ="col">
                    <h1><?php echo product [0]['name'] ?></h1>
                </div>
            </div>
            <div class = "row">
               <div class="col-md-6">
                   
                   
                   
               </div>
                <div class="col-md-6">
                   <?php ?>
                   
               </div>
            </div>
        </div>
    </body>
</html>