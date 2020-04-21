<?php $chapter = ( isset($_GET['chapter']) && $_GET['chapter']!='legado/index.php' ) ? $_GET['chapter'] : 'start'; ?>

<!-- HEAD -->
<?php require_once('includes/sections/head.php'); ?>
<body>
  <!-- HEADER -->
  <?php require_once('includes/sections/header.php'); ?>
  <main role="main" class="container">
    <div id="youlose">
      <?php require_once('includes/youlose.php'); ?>
    </div>
    <div id="legado">
      <?php require_once('includes/chapters-selector.php'); ?>
    </div>
  </main>
  <!-- FOOTER -->
  <?php require_once('includes/sections/footer.php'); ?>
  <!-- MODALS -->
  <?php require_once('includes/modals/modals.php'); ?>
  <!-- INCLUDES -->
  <?php require_once('includes/sections/includes.php'); ?>
</body>
