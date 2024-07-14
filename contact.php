
    <?php
    $title = 'Add Hospetl';
    require_once './template/header.php';
    require_once './functions/database_functions.php';
    $name="";
    $email="";
    $phone="";
    $massage="";
    if(isset($_POST['name'])){
        addMessage($_POST['name'],$_POST['email'],$_POST['phone'],$_POST['message']);
        echo "<alert>Message send successfully</alert>";
        // redirct('rooms.php');
    }
    // if(isset($_POST['edit'])){
    //     editrooms($_GET['rooms_id_edit'],$_POST['info_rome'],$_POST['price_room'],$_POST['hospitle_room'],$_POST['tybe_room']);
    //     redirct('rooms.php');
    // }
    // if(isset($_GET['rooms_id_edit'])){
    //     $row =  getAllroomsbyID($_GET['rooms_id_edit']);
    //     $action="edit";
    //     $info_rome= $row['info_rome'];
    //     $price_room= $row['price_room'];
    // }
    ?>
    <main>
    <article>
    <section class="contact" >
    <div class="form-container" >
        <div class = 'box'>
            <form autocomplete="off" method="post" class  = "form"enctype="application/x-www-form-urlencoded">
           
        <h1>Contact us</h1>
           
			<br>
            <div class="input">
                <input required type="text" name="name"  id="ucname" maxlength="50" placeholder="name" require>
			</div>
			<div class="input">
                <input required type="email" name="email"  id="ucname" maxlength="50" placeholder="Email" require>
            </div>
            <div class="input">
                <input required type="phone" name="phone"  id="ucname" maxlength="50" placeholder="phone number" require>
			</div>
            <div class="input">
                <textarea required type="textarea" name="message"    placeholder="Massages" require></textarea> 
			</div>
            
			
            
              
			
            <input type="submit" class ="button"name="<?= $action?>" value="send">
        </form>
</div>
    </div>
    </section>
    </artical>
    </main>
    <?php
    require_once './template/footer.php';
    ?>