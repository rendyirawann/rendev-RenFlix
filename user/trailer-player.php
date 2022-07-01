<?php 
    // Mengambil data id dari URL
    $id = $_GET["id"];
    $new_movie = query ("SELECT * FROM new_movie WHERE id = $id")[0];
?>

<!-- Source PHP -->

<div class="renflix">

  <section class="player">
    <div class="row">
      <div class="col-lg-12">
        <h1>RenFlix Movie -
          <?php echo $new_movie["mv_name"];?> Trailer
        </h1>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-4">
        <p><i class="fa fa-fw fa-tags"></i>
          Tags :<i>
            <?php echo $new_movie["mv_tag"];?>
          </i></p>
      </div>
    </div>

    <input type="hidden" name="id" placeholder="ID" value="<?= $new_movie["id"];?>">
    <div class="row">
      <div class="col-lg-12">
        <div id="video_player">
          <iframe width="800" height="600" src="<?php echo $new_movie["link_trailer"];?>" title="
            <?php echo $new_movie["mv_name"];?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write;
            encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
          </iframe>
          <!-- <iframe src="<?php echo $new_movie["link_trailer"];?>" width="800" height="600" allow="autoplay"></iframe> -->
        </div>
      </div>
    </div>

    <div class="row description">
      <div class="col-lg-12">
        <h2>
          <?php echo $new_movie["mv_name"];?> | Release Date :
          <?php echo $new_movie["meta_description"];?>
        </h2>
        <h5> <i>Genre : <?php echo $new_movie["genre_name"];?> | Category : <?php echo $new_movie["category_name"];?></i> </h5>
        <p>Description Movie :</p>
        <p>
          <?php echo $new_movie["mv_des"];?>
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