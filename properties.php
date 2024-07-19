
<?php
    $title = 'Al-Tahleel Real Estate - Properties';
    require_once './template/admin_header.php';
    require_once './functions/database_functions.php';
    $name="";
    $email="";
    $phone="";
    $massage="";
    if(isset($_GET['property_id_delete'])){
        $row =  deleteProperty($_GET['property_id_delete']);
    }
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
                <td>
                    <div style="display:flex;">
                    <a href="properties.php?property_id_delete=<?= $row['pro_id']?>" style="margin:5px">
                        <ion-icon name="close-outline" style="font-size:20px ;color:white;background-color:red;padding:5px; border-radius:5px;"></ion-icon>
                    </a>
                    <a href="add_property.php?property_id_edite=<?= $row['pro_id']?>" style="margin:5px">
                        <ion-icon name="create-outline" style="font-size:20px ;color:white;background-color:gray ;padding:5px; border-radius:5px;"></ion-icon>

                    </a>
                        </div>
                </td>
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