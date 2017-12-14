<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>product</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

        <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
    <link href="../css/artikel.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../jumbotron.css" rel="stylesheet">

  </head>

  <body>
    <?php 
    foreach (findOneProduct($_GET['product'], $pdo) as $value)
        {
                    $artikelNaam = $value['product_name'];
                    $artikelPrijs = $value['product_price'];
                    $artikelAfbeelding = $value['product_image'];
                    $artikelBeschikbaarheid = $value['availability'];
                    $artikelBeschrijving = $value['product_description'];
        }
    
    print('
    <div class="container">
        <div class="card">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-6">           
                        <div class="preview-pic tab-content">
                          <div class="tab-pane active" id="pic-1"><img src="'.$artikelAfbeelding.'" /></div>
                          <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252" /></div>
                          <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div>
                          <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
                          <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div>
                        </div>
                        <ul class="preview-thumbnail nav nav-tabs">
                          <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="'.$artikelAfbeelding.'" /></a></li>
                          <li><a data-target="#pic-2" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
                          <li><a data-target="#pic-3" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
                          <li><a data-target="#pic-4" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
                          <li><a data-target="#pic-5" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
                        </ul>
          </div>

                    <div class="details col-md-6">
                        <h3 class="">'.$artikelNaam.'</h3>
                        <p class="product-description">'.$artikelBeschrijving.'</p>
                        <h4 class="price">Prijs: <span>€'.$artikelPrijs.'</span></h4>
                        <h5 class="sizes">sizes:
                            <span class="size" data-toggle="tooltip" title="small">s</span>
                            <span class="size" data-toggle="tooltip" title="medium">m</span>
                            <span class="size" data-toggle="tooltip" title="large">l</span>
                            <span class="size" data-toggle="tooltip" title="xtra large">xl</span>
                        </h5>
                        <h5 class="colors">colors:
                            <span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
                            <span class="color green not-available"></span>
                            <span class="color blue"></span>
                        </h5>
                        <div class="action">
                            <button class="add-to-cart btn btn-default" type="button">add to cart</button>
                        </div>' )?>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>
