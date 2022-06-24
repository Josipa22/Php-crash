<?php include 'inc/header.php'; ?>

<?php
$sql = 'SELECT * FROM feedback';
$result = mysqli_query($conn, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<h2>Feedback</h2>

<?php if (empty($feedback)) : ?>
  <p class="lead mt3">There is no feedback</p>
<?php endif; ?>

<?php foreach ($feedback as $item) : ?>

  <div class="card my-3 w-75">
    <div class="card-body text-center">
      #<?php echo $item['id'] ?> - <?php echo $item['body'] . "<br>"; ?>
      Rating:
      <?php
      switch ($item['rating']) {
        case 1:
          echo '*' . "<br>";
          break;
        case 2:
          echo '**' . "<br>";
          break;
        case 3:
          echo '***' . "<br>";
          break;
        case 4:
          echo '****' . "<br>";
          break;
        case 5:
          echo '*****' . "<br>";
          break;
        default:
          echo 'No rating' . "<br>";
      }
      ?>
      <a href=<?php echo $item['Video_URL'] ?>><?php echo $item['Video_URL'] ?></a>
      <div class="text-secondary mt-2">
        By <?php echo $item['name'] ?> on <?php echo $item['date'] ?>
      </div>
    </div>
  </div>

<?php endforeach; ?>

<?php include 'inc/footer.php'; ?>