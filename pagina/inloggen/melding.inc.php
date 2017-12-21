<?php
if (isset($_SESSION['melding'])) {
?>
<div class="alert alert-info">
    <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
    <?= $_SESSION['melding']; ?>
</div>

<?php
}

?>