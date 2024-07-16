
<?php
    $title = 'Tahleel Real Estate - Messages';
    require_once './template/admin_header.php';
    require_once './functions/database_functions.php';
    $name="";
    $email="";
    $phone="";
    $massage="";

    $result1 = getAllMessages();



    ?>
    <main>
    <article>
    <section class="contact" >
    <div class="form-container" >
    <div class = 'menu'>
             
             <a href="./profile.php" >profile</a>
             <a href="./masseges.php" class="active">Massages</a>
             <a href="./properties.php">Properties</a>
             <a href="./admin_blogs.php">Blogs</a>
         </div>
        <div class = 'table'>
        <table class="data">
        <thead>
            <tr>
            <th>name</th> 
            <th>email</th> 
            <th>phone number</th> 
            <th>message</th> 
            </tr>
        </thead>
        <tbody>
        <?php 
                    if($result1){
                        foreach ($result1 as $row){
?>
            <tr>
                
<td><?=$row['name']?></td>
                <td><?=$row['email']?></td>
                <td><?=$row['phone_number']?></td>
                <td><?=$row['message']?></td>
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