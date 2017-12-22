<?php                 
    $voornaam = $_SESSION['firstname'];
    $tussenvoegsel = $_SESSION['insertion'];
    $achternaam = $_SESSION['lastname'];
    $emailadres = $_SESSION['emailadres'];
    $telefoonnummer = $_SESSION['phonenumber'];
    $land = $_SESSION['country'];
    $postcode = $_SESSION['zipcode'];
    $straatnaam = $_SESSION['streetname'];
    $huisnummer = $_SESSION['addressnumber'];
    $stad = $_SESSION['city'];
?>
 <div class="container">

      <div class="row marketing">
      
        <div class="col-lg-12">
<div>
<center>  
<h4>Bevestig uw bestelling</h4>
<h5>Order number: #243735374</h5>
<hr />  
</div>
</center>
        </div>

    <div class="row">
        <div class="col-xs-12">
    		<div class="row">
    			<div class="col-xs-6">
        			<address>
    				<strong>Bezorg Adres:</strong><br>
                        <?php print("$voornaam $tussenvoegsel $achternaam");?> <br>
                        name@site.com<br>
                        <?php print("$telefoonnummer");?><br>
    					Adres:<br>
    					<?php print("$postcode, $stad, $land, $straatnaam");?>
    				</address>

    			</div>
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<center><p><span class="glyphicon glyphicon glyphicon-question-sign" aria-hidden="true"></span> 
                    De artikelen worden handmatig verstuurd. De bestelling kan daardoor soms langer duren.</p> </center>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td><strong>Product Name</strong></td>
        							<td class="text-right"><strong>Product Options</strong></td>
            						<td class="text-right"><strong>Subscription Type</strong></td>
            						<td class="text-right"><strong>Price</strong></td>
                                    
                                </tr>
    						</thead>
    						<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
    							<tr>
    								<td>Veganboxen</td>
            						<td class="text-right">Variable #1</td>
            						<td class="text-right">Monthly</td>
                                    <td class="text-right">189 SEK</td>
    							</tr>
    							<tr>
    								<td class="thick-line"></td>
    								<td class="thick-line"></td>
    								<td class="thick-line text-right"><strong>VAT - 12%</strong></td>
    								<td class="thick-line text-right">incl.</td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-right"><strong>Shipping</strong></td>
    								<td class="no-line text-right">incl.</td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-right"><strong>Total</strong></td>
    								<td class="no-line text-right">189 SEK</td>
    							</tr>
    						</tbody>
    					</table>
    				</div>
    		</div>
    	</div>
    </div>
</div>

      </div>

    </div> <!-- /container -->