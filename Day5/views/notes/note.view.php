<?php require('views/partials/head.php'); ?>

<?php require('views/partials/nav.php'); ?>

<?php require('views/partials/banner.php'); ?>


<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

  <p>
    <a href="/laracast-path/Day5/notes" class="text-blue-500 underline" > go back...</a>
  </p>
        <a  class="text-black-500 hover:underline">
          <?= htmlspecialchars($note['body']); ?>
        </a>

  </div>
</main>

<?php require('views/partials/footer.php'); ?>