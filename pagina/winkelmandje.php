<!DOCTYPE html>
<html>
    <head>
        <title>webshop</title>
        <link href="../css/winkelmandjenew.css" rel="stylesheet">
    </head>
    <body>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['removeProduct'])) {
            removeProductFromBasket($pdo, $_POST['artikelId'], $_SESSION['id']);
        }

        if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['refreshProduct'])) {
            updateAmount($pdo, $_POST['amount'], $_POST['artikelId'], $_SESSION['id']);
        }

        checkSessionId($pdo);

        $productInfo = basketProducts($_SESSION['id'], $pdo);
        ?>
        <div class="container">
            <table id="cart" class="table table-hover table-condensed">
                <thead>
                    <tr>
                        <th style="width:50%">Product</th>
                        <th style="width:10%">Prijs</th>
                        <th style="width:8%">Hoeveelheid</th>
                        <th style="width:22%" class="text-center">Subtotaal</th>
                        <th style="width:10%"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $totalPrice = 0;

                    foreach ($productInfo as $value) {
                        print('
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-2 hidden-xs"><img src="/kbs/images/artikelen/' . $value['product_image'] . '"" height = "250" width = "250" alt="' . $value['product_name'] . '" class="img-responsive"/></div>
                                <div class="col-sm-10">
                                    <a href="/KBS/artikel/' . $value['product_id'] . '" ><p class="nomargin">' . $value['product_name'] . '</hp></a>
                                    <a href="/KBS/artikel/' . $value['product_id'] . '" ><h5>' . $value['product_description'] . '</h5><a/>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">€' . $value['product_price'] . '</td>
                        <td data-th="Quantity">
                            <form method="post"><input type="number" name="amount" class="form-control text-center" value="' . $value['amount'] . '">
                        </td>
                        <td data-th="Subtotal" class="text-center">€' . $value['amount'] * $value['product_price'] . '</td>
                        <td class="actions" data-th="">
                            <button class="btn btn-info btn-sm" name="refreshProduct"><i class="fa fa-refresh"></i></button>
                            <button class="btn btn-danger btn-sm" name="removeProduct"><i class="fa fa-trash-o"></i></button>
                            <input type="hidden" name="artikelId" value="' . $value['product_id'] . '"</input></form>
                        </td>
                    </tr>');
                        $totalPrice += $value['product_price'] * $value['amount'];
                    }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td><a href="/KBS/webshop/" class="btn btn-warning"><i class="fa fa-angle-left"></i>Verder winkelen</a></td>
                        <td class="text-center"><strong>Totaal bedrag:</strong></td>
                        <td colspan="1" class="hidden-xs"></td>
                        <td class="hidden-xs text-center"><strong>€<?php print($totalPrice); ?></strong></td>
                        <?php if(countBasketItems($pdo, $_SESSION['id'])>0){
                                if(isset($_SESSION['ingelogd']))
                                {print('<td><a href="/KBS/ganaarbetalen/" class="btn btn-success btn-block">Bestelling afronden<i class="fa fa-angle-right"></i></a></td>');
                                }elseif (!isset($_SESSION['ingelogd'])){
                                    print('<td><a href="/KBS/bestellingBevestig/" class="btn btn-success btn-block">Bestelling afronden<i class="fa fa-angle-right"></i></a></td>');
                                }
                                }
                        ?>

                    </tr>
                </tfoot>
            </table>
        </div>
    </body>
</html>