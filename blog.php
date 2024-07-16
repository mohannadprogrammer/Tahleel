
<?php
    require_once './template/admin_header.php';
    require_once './functions/database_functions.php';
    echo $_GET['id'];
    $row= getAllBlogsbyID($_GET['id']);
    $title = 'Tahleel Real Estate - blog -'.  $row['subject'];
    
    ?>
    <main>
    <article>
    <section class="contact" >
    <div class="form-container" >
        <div class = 'box' style="width:90%; padding:unset;">
        <div class="blog-card" style="width:100%; height:fit-content;">

<figure class="card-banner" style="
    width: 100%;
    height: 180px;
    border-radius: 10px  10px 0 0;
">
  <img src=<?= $row['topic_image']?> alt="The Most Inspiring Interior Design Of 2021" class="w-100">
    class="w-100">
</figure>

<div class="blog-content">

  <div class="blog-content-top">

    <ul class="card-meta-list">

      <li>
        <a href="#" class="card-meta-link">
          <ion-icon name="person"></ion-icon>

          <span>by: <?= $row['user_name']?></span>
        </a>
      </li>

      <li>
        <a href="#" class="card-meta-link">
          <ion-icon name="pricetags"></ion-icon>

          <span><?= $row['topic_name']?></span>
        </a>
      </li>

    </ul>

    <h3 class="h3 blog-title">
      <?= $row['subject']?>
    </h3>

  </div>

  <div class="blog-content-bottom" style="border-bottom: 1px solid hsla(0, 0%, 0%, 0.1);
  border-top: 0px solid hsla(0, 0%, 0%, 0.1);
  margin-bottom:20px;
  margin-top:0px;
  padding-bottom:20px;

  ">
    <div class="publish-date">
      <ion-icon name="calendar"></ion-icon>

      <time datetime="2022-27-04"><?= $row['created_date']?></time>
    </div>

    
  </div>
  <per>
  <?= $row['content']?>
    
</per>

</div>

</div>
        </div>
    </div>
    </section>
    </artical>
    </main>
    <?php
    require_once './template/footer.php';
    ?>