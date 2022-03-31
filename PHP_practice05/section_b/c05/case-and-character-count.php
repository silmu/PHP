<?php
$text = 'Home sweet home';
?>
<?php include 'includes/header.php'; ?>

<p>
  To lowercase:
  <?= strtolower($text);?>
</p>
<p>
  To uppercase:
  <?= strtoupper($text);?>
</p>
<p>
  Number of characters:
  <?= strlen($text);?>
</p>
<p>
  Number of words:
  <?= str_word_count($text);?>
</p>

<?php include 'includes/footer.php'; ?>