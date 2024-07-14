
<?php
    $title = 'Add Hospetl';
    require_once './template/header.php';
    require_once './functions/database_functions.php';
    $name="";
    $email="";
    $phone="";
    $massage="";
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
        echo "<alert>32222222222222222222222</alert>";

    }
    
    ?>
    <main>
    <article>
    <section class="contact" >
    <div class="form-container" >
        <div class = 'box'>
            <form autocomplete="off" method="post" class  = "form"enctype="multipart/form-data">
           
        <h1>Add property</h1>
           
			<br>
            <div class="input">
                <input   type="text" name="name"  id="ucname" maxlength="50" placeholder="name" require>
			</div>
            <div class="input">
                <textarea   type="textarea" name="description"    placeholder="Description" require></textarea> 
			</div>
            <div class="input">
					<select    name="service">
						<option value="">Service type</option>
						<option value= 'Sale'>Sale</option>
						<option value= 'Rent'>Rent</option>
					</select>
				</div>
			<div class="input">
                <input   type="text" name="city"  id="ucname" maxlength="50" placeholder="city" require>
            </div>
            <div class="input">
                <input   type="text" name="hood"  id="ucname" maxlength="50" placeholder="hood" require>
			</div>
            <div class="input" style="display: flex;justify-content: space-between;">
                <input   type="number" name="num_bed"  id="ucname" maxlength="50" placeholder="nubmer of bedrooms" require>
                <input   type="number" name="num_bath"  id="ucname" maxlength="50" placeholder="nubmer of bathrooms" require>
                <input   type="number" name="square"  id="ucname" maxlength="50" placeholder="square" require>
                <input   type="number" name="price"  id="ucname" maxlength="50" placeholder="price" require>
			</div>
            <div class="input" >
                <input   type="file" name="image"  id="ucname" maxlength="50" placeholder="image" require>
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