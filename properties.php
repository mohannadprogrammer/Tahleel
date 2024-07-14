
<?php
    $title = 'Add Hospetl';
    require_once './template/header.php';
    require_once './functions/database_functions.php';
    $name="";
    $email="";
    $phone="";
    $massage="";

    $result1 = getAllProperties();



    ?>
    <main>
    <article>
    <section class="contact" >
    <div class="form-container" >
    <div class = 'menu'>
             
             <a href="./profile.php" >profile</a>
             <a href="./masseges.php" >Massages</a>
             <a href="./properties.php" class="active">Properties</a>
             <a href="./admin_blogs.php">Blogs</a>
         </div>
        <div class = 'table' style="
    flex-direction: column;
">
        <a href="./add_property.php" class="logo">
            <button class="header-top-btn" style="background:green;">add property</button>
          </a>
        <table class="data">
        <thead>
            <tr>
            <th>name</th> 
            <th>description</th> 
            <th>Sarvice</th> 
            <th>number of bedrooms</th> 
            <th>number of bathrooms</th> 
            <th>Square</th> 
            <th>price</th> 
            <th>city</th> 
            <th>hood</th> 
            </tr>
        </thead>
        <tbody>
        <?php 
                    if($result1){
                        foreach ($result1 as $row){
?>
            <tr>
                
                <td><?=$row['name']?></td>
                <td><?=$row['description']?></td>
                <td><?=$row['service']?></td>
                <td><?=$row['num_bedrooms']?></td>
                <td><?=$row['num_bathrooms']?></td>
                <td><?=$row['square']?></td>
                <td><?=$row['price']?></td>
                <td><?=$row['city']?></td>
                <td><?=$row['hood']?></td>
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