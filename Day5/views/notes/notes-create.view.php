<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>


<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <div class="mb-6">
      create a note
    </div>


    <form method="POST">
      <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">


          <div class="col-span-full">
            <label for="body" class="block text-sm/6 font-medium text-gray-900">Description</label>
            <div class="mt-2">
              <textarea name="body" id="body" required rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                <?= $_POST['body'] ?? '' ?>
              </textarea>
            
            <?php if (isset($errors['body'])) : ?>
              <?php echo $errors['body']; ?>

            <?php endif; ?>
            
            
            </div>
          </div>
          <p>
            <button type="submit">Create</button>
          </p>

        </div>
      </div>


  </div>
  </div>
  </form>

  </div>
</main>

<?php require base_path('views/partials/footer.php'); ?>