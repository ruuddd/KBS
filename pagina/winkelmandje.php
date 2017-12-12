<!DOCTYPE html>
<html>
    <head>
        <title>webshop</title>
        <link href="../css/winkelmandje.css" rel="stylesheet" type="text/css"/>
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    </head>
    <body>
    <?php
    include "../functions/CRUD/read.php";
    include '../functions/dbconnect.php';

    ?>
      <!--      <p>WINKELWAGEN</p>
            <table>
                <tr>
                    <th>foto</th>
                    <th>naam</th>
                    <th>id</th>                
                    <th>beschrijving</th>
                    <th>prijs</th>
                    <th>hoeveelheid</th>
                    <th>totaalgekozen</th>
                </tr>

                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    
                </tr>
            </table>
            -->
            <?php foreach (findAllProducts($pdo) as $key => $value) { 
        $artikelNaam = $value['product_name'];
        $artikelPrijs= $value['product_price'];
        print( 
                '<div class="col-md-3" v-for="item in selling">
                  <div class="card"><img class="card-img-top" :src="../images/artikelen/sjaal.jpg" :alt="item.name"/>
                    <div class="card-block">
                      <h4 class="card-title">'.$artikelNaam. '</h4>
                      <div class="card-text">'.$artikelPrijs.'</div>
                      
                    </div>
                  </div>
                </div>
              </div>');
    }
    
?>
        <div id="koop">
            <h6>Subtotaal</h6>
            <h6>BTW</h6>
            <h6>Verzendkosten</h6>
            <h6>Totaal</h6>
        </div>
            <form>
            <button type="submit" formaction="ganaarbetalen.php">ganaarbetalen</button>
            </form>
    </body>
</html>