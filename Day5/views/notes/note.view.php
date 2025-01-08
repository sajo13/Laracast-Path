<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>


<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

  <p>
    <a href="/laracast-path/Day5/notes" class="text-blue-500 underline" > go back...</a>
  </p>
        <a  class="text-black-500 hover:underline">
          <?= htmlspecialchars($note['body']); ?>
        </a>

        <form action="" class="mt-6" method="post">
          <input type="hidden" name="_method" value="DELETE">
          <input type="hidden" name="id" value="<?= $note['id']; ?>">
          <button class="text-sm text-red-500">Delete</button>
        </form>
  </div>
</main>

<?php require base_path('views/partials/footer.php'); ?>