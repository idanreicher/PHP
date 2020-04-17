<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="Jumbotron Jumbotron-flud text-center">
    <div class="container">
        <h1 class="display-3">
        <?php echo $data['title']; ?>
        <p class="lead">
            <?php  echo $data['description'] ?>
        </p>
        </h1>
    </div>
</div>

<p>This Is My MVC CMS</p>
<?php require APPROOT . '/views/inc/footer.php';?>