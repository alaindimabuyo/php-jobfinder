<?php include 'include/header.php' ?>
<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h3 class="display-3">Find a Job</h3>
      <form action="index.php" method="GET">
        <select name="category" class="form-control" id="">
          <option value="0">Choose Category</option>
          <?php foreach($categories as $category): ?>
            <option value="<?php echo $category->id; ?>"><?php echo $category->name ?></option>
          <?php endforeach ?>
        </select>
        <input type="submit" class="btn btn-lg btn-success" value="find">
      </form>
      
    </div>
  </div>
  <h3><?php echo $title ?></h3>
  <?php foreach($jobs as $job): ?>
  <div class="container">

      <h4><?php echo $job->job_title?></h4>
      <p><?php echo $job->description?></p>
      <div class="row">
        <div class="col-md-10">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eg et metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
    </div>
 
    <hr>
  </div> <!-- /container -->
  <?php endforeach; ?>
</main>

<?php include 'include/footer.php' ?>