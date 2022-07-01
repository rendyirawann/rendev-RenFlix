<?php 
    // Mengambil data id dari URL
    $id = $_GET["id"];
    $movie = query ("SELECT * FROM movie WHERE id = $id")[0];
?>

<!-- Source PHP -->

<div class="renflix">

  <section class="player">
    <div class="row vidsplayer">
      <div class="col-lg-12">
        <h1>RenFlix Movie -
          <?php echo $movie["mv_name"];?>
        </h1>
        <p>Post on :
          <?php echo $movie["date"];?>
        </p>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-4">
        <p><i class="fa fa-fw fa-tags"></i>
          Tags :<i>
            <?php echo $movie["mv_tag"];?>
          </i></p>
      </div>
    </div>

    <input type="hidden" name="id" placeholder="ID" value="<?= $movie["id"];?>">
    <div class="row">
      <div class="col-lg-12">
        <div id="video_player">
          <iframe src="<?php echo $movie["link1"];?>" width="800" height="600" allow="autoplay"></iframe>
          <br>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-11">
        <div class="border border-warning frame">
          <h4>Download This Movie Below :</h4>
          <a class="btn btn-warning" type="submit" role="button" href="<?php echo $movie["link1"];?>">Gdrive 1</a></td>
          <a class="btn btn-warning" type="submit" role="button" href="<?php echo $movie["link2"];?>">Gdrive 2</a></td>
        </div>
      </div>
    </div>

    <div class="row description">
      <div class="col-lg-12">
        <h2>Movie :
          <?php echo $movie["mv_name"];?> | Release Date :
          <?php echo $movie["meta_description"];?>
        </h2>
        <h5> <i>Genre : <?php echo $movie["genre_name"];?> | Category : <?php echo $movie["category_name"];?></i> </h5>
        <p>Description Movie :</p>
        <p>
          <?php echo $movie["mv_des"];?>
        </p>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
      <a class="btn btn-warning" type="submit" role="button" href="index.php?p=#home">	&#8592; Back To Select Another Movie</a></td>
      </div>
    </div>


  </section>

  <script src="../script.js"></script>
</div>