<?php
$email = $_SESSION['emailadres'];
$orderPrijs = getTotalOrderPriceQuery($pdo, $email);
?>

<div class="container">
    <div class="row">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product Name</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Date</th>
                        <th>Price</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php print(getTotalOrderPrice($orderPrijs)); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>