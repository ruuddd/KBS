
                <?php
                if (search())
                    {
                    $products = searchProducts($_POST['search'], $pdo);
                    }
                    else
                        {
                        $products = findAllProducts($pdo);
                        }
                foreach ($products as $key => $value) {
                    $artikelNaam = $value['product_name'];
                    $artikelPrijs = $value['product_price'];
                    $artikelAfbeelding = $value['product_image'];
                    $artikelBeschrijving = $value['product_description'];
                    $artikelBeschikbaarheid = $value['availability'];
                    print ( '
                    <div class = "col-md-3" v-for = "item in selling">
                    <div class = "card"><img src = "' . $artikelAfbeelding . '" align = "middle" height = "250" width = "250" alt = "' . $artikelNaam . '"/>
                    <div class = "card-block">
                    <h4 class = "card-title">' . $artikelNaam . '</h4>
                    <div class = "card-text">Nog <strong> ' .$artikelBeschikbaarheid. ' </strong> beschikbaar</div><br>
                    <div class = "card-text">€' . $artikelPrijs . '</div>
                  <div class="row justify-content-end">
                    <form><button type="submit" class="btn btn-primary" action="winkelmandje.php" :data-id="item.id">Toevoegen aan winkelmandje</button></form>
                  </div>
                </div>
              </div>
            </div>
                ');
                    }
                ?>
                
            <div class="modal fade" id="cart">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Cart</h5>
                            <button class="close" type="button" data-dismiss="modal">×</button>
                        </div>
                        <div class="modal-body">
                            <table class="table">
                                <tbody>
                                    <tr v-for="item in cart">
                                        <td>{{ item.name }}</td>
                                        <td>${{ item.price / 100 }}</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><strong>${{ cartTotal / 100 }}</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-dismiss="modal">Continue shopping</button>
                            <button class="btn btn-primary">Check out</button>
                        </div>
                    </div>
                </div>
            </div>

