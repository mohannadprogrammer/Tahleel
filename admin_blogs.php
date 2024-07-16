
<?php
    $title = 'Tahleel Real Estate - blogs ';
    require_once './template/admin_header.php';
    require_once './functions/database_functions.php';
    $name="";
    $email="";
    $phone="";
    $massage="";

    $result1 = getAllBlog();



    ?>
    <main>
    <article>
    <section class="contact" >
    <div class="form-container" >
    <div class = 'menu'>
             
             <a href="./profile.php" >profile</a>
             <a href="./masseges.php" >Massages</a>
             <a href="./properties.php" >Properties</a>
             <a href="./admin_blogs.php" class="active">Blogs</a>
         </div>
        <div class = 'table'style="
    flex-direction: column;
">
        <a href="./add_blog.php" class="logo">
            <button class="header-top-btn" style="background:green;">add blog</button>
          </a>
        <table class="data">
        <thead>
            <tr>
            <th>Subject</th> 
            <th>topic</th> 
            <th>content</th> 
            <th>created date</th> 
            <th>created by</th> 
            <th>topic image</th> 
            </tr>
        </thead>
        <tbody>
        <?php 
                    if($result1){
                        foreach ($result1 as $row){
?>
            <tr>
                
                <td><?=$row['subject']?></td>
                <td><?=$row['topic_name']?></td>
                <td><?=$row['content']?></td>
                <td><?=$row['created_date']?></td>
                <td><?=$row['user_name']?></td>
                <td><?=$row['topic_image']?></td>
            </tr>

<?php
                    }}else{
?>

<?php
                    }
                    ?>
                

           
        </tbody>
            </table>
        </div>
        
        </div>
    </section>
    </artical>
    </main>
    <?php
    require_once './template/footer.php';
    ?>