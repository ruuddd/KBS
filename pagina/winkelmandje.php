<!DOCTYPE html>
<html>
    <head>
        <title>webshop</title>
        <link href="../css/winkelmandjenew.css" rel="stylesheet">
    </head>
    <body>
        <?php
        checkSessionId($pdo);
                $_SESSION['id']=1;
        $productInfo = basketProducts($_SESSION['id'], $pdo);

        ?>
        <div class="container">
            <table id="cart" class="table table-hover table-condensed">
                <thead>
                    <tr>
                        <th style="width:50%">Product</th>
                        <th style="width:10%">Price</th>
                        <th style="width:8%">Quantity</th>
                        <th style="width:22%" class="text-center">Subtotal</th>
                        <th style="width:10%"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $totalPrice=0;
                    foreach ($productInfo as $value)
                    {
                        print('
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-2 hidden-xs"><img src="'.$value['product_image'].'"" height = "250" width = "250" alt="'.$value['product_name'].'" class="img-responsive"/></div>
                                <div class="col-sm-10">
                                    <h4 class="nomargin">Product 1</h4>
                                    <p>'.$value['product_description'].'</p>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">'.$value['product_price'].'</td>
                        <td data-th="Quantity">
                            <input type="number" class="form-control text-center" value="'.$value['amount'].'">
                        </td>
                        <td data-th="Subtotal" class="text-center">'.$value['amount']*$value['product_price'].'</td>
                        <td class="actions" data-th="">
                            <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>								
                        </td>
                    </tr>');
                                $totalPrice+=$value['product_price']*$value['amount'];
                    }
                            ?>
                </tbody>
                <tfoot>
                    <tr class="visible-xs">
                        <td class="text-center"><strong><?php print($totalPrice); ?></strong></td>
                    </tr>
                    <tr>
                        <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                        <td colspan="2" class="hidden-xs"></td>
                        <td class="hidden-xs text-center"><strong><?php print($totalPrice); ?></strong></td>
                        <td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </body>
</html>