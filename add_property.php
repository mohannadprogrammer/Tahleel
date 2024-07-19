
<?php
    $title = 'Al-Tahleel Real Estate - add property ';
    require_once './template/admin_header.php';
    require_once './functions/database_functions.php';
    $name="";
    $des="";
    $service="";
    $num_bed="";
    $num_bath="";
    $square="";
    $price="";
    $city="";
    $hood="";
    $image="";

    $oper_title ="";

    if(isset($_GET['property_id_edite'])){
        $oper_title = "Edite property";
        $data = getPropertyById($_GET['property_id_edite']);
        $name = $data["name"];
        $des = $data["description"];
        $service = $data["service"];
        $num_bed=$data["num_bedrooms"];
        $num_bath = $data["num_bathrooms"];
        $square = $data["square"];
        $price = $data["price"];
        $city = $data["city"];
        $hood = $data["hood"];
        $image = $data["image"];
        if(isset($_POST['name'])&&  isset($_FILES['image'])){
            $file_name = $_FILES['image']['name'];
            $temp_name = $_FILES['image']['tmp_name'];
            $folder ='images/'.$file_name;
            if(move_uploaded_file($temp_name,$folder)){
                addProperty($_POST['name'],$_POST['description'],$_POST['service'],$_POST['city'],$_POST['hood']
                ,$_POST['num_bed'],$_POST['num_bath'] ,$_POST['square'], $_POST['price'],$_SESSION['user_info']['id'],$folder);
                echo "<alert>property added successfully</alert>";
            }
        }


    }else{
        $oper_title = "Add property";
        if(isset($_POST['name'])){
            $file_name = $_FILES['image']['name'];
            $temp_name = $_FILES['image']['tmp_name'];
            $folder ='images/'.$file_name;
            if(move_uploaded_file($temp_name,$folder)){
                addProperty($_POST['name'],$_POST['description'],$_POST['service'],$_POST['city'],$_POST['hood']
                ,$_POST['num_bed'],$_POST['num_bath'] ,$_POST['square'], $_POST['price'],$_SESSION['user_info']['id'],$folder);
                echo "<alert>property added successfully</alert>";
            }else{
            echo "<alert>errroeroero</alert>";
            }
            // addMessage($_POST['name'],$_POST['email'],$_POST['phone'],$_POST['message']);
            // echo "<alert>Message send successfully</alert>";
            // redirct('rooms.php');
        }else{
            // echo "<alert>32222222222222222222222</alert>";
    
        }

    }
    
    
    ?>
    <main>
    <article>
    <section class="contact" >
    <div class="form-container" >
        <div class = 'box'>
            <form autocomplete="off" method="post" class  = "form"enctype="multipart/form-data">
           
        <h1><?=$oper_title?></h1>
           
			<br>
            <div class="input">
                <input  value="<?=$name?>" required type="text" name="name"  id="ucname" maxlength="50" placeholder="name" require>
			</div>
            <div class="input">
                <textarea  required  type="textarea" name="description"    placeholder="Description" require><?=$des?></textarea> 
			</div>
            <div class="input">
					<select required value=<?=$service?>  name="service">
						<option value="">Service type</option>
						<option   <?php if($service =="Sale"){ echo "SELECTED" ; }?> value= 'Sale'>Sale</option>
						<option <?php if($service =="Rent"){ echo "SELECTED" ; }?>  value= 'Rent'>Rent</option>
					</select>
				</div>
			<div class="input">
                <input value="<?=$city?>" required type="text" name="city"  id="ucname" maxlength="50" placeholder="city" require>
            </div>
            <div class="input">
                <input value="<?=$hood?>" required  type="text" name="hood"  id="ucname" maxlength="50" placeholder="hood" require>
			</div>
            <div required class="input" style="display: flex;justify-content: space-between;">
                <input value="<?=$num_bed?>"  type="number" name="num_bed"  id="ucname" maxlength="50" placeholder="nubmer of bedrooms" required>
                <input value="<?=$num_bath?>"   type="number" name="num_bath"  id="ucname" maxlength="50" placeholder="nubmer of bathrooms" required>
                <input value="<?=$square?>"   type="number" name="square"  id="ucname" maxlength="50" placeholder="square" required>
                <input  value="<?=$price?>"  type="number" name="price"  id="ucname" maxlength="50" placeholder="price" required>
			</div>
            <?php
                if (isset($_GET['property_id_edite'])){
                    ?>
                    <img src=<?=$image?> style="    width: 195px;"/>
                    <?php
                }
            ?>
            <div class="input" >
                <input  required  type="file" name="image"  id="ucname" maxlength="50" placeholder="image" require>
			</div>
            
            
			
            
              
			
            <input type="submit" class ="button"name="<?= $action?>" value="add">
        </form>
</div>
    </div>
    </section>
    </artical>
    </main>
    <?php
    require_once './template/footer.php';
    ?>