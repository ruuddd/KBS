<?php
$email = $_SESSION['emailadres'];
$order = getOrders($pdo, $email);
?>

<div class="container">
    <div class="row">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Ordernr</th>
                        <th>Naam</th>
                        <th>Email</th>
                        <th>Datum</th>
                        <th>Prijs</th>
                    </tr>
                </thead>
                <tbody>
                    <?php print $order; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>