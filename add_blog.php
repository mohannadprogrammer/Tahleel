
<?php
    $title = 'Add Hospetl';
    require_once './template/header.php';
    require_once './functions/database_functions.php';
    $name="";
    $email="";
    $phone="";
    $massage="";
    $topic =getallTopic();
    if(isset($_POST['subject'])){
        $file_name = $_FILES['image']['name'];
        $temp_name = $_FILES['image']['tmp_name'];
        $folder ='images/'.$file_name;
        if(move_uploaded_file($temp_name,$folder)){
            addblog($_POST['subject'],$_POST['topic'],$_POST['content'],$_SESSION['user_info']['id'],$folder);
            echo "<alert>blog added successfully</alert>";
        }else{
        echo "<alert>errroeroero</alert>";
        }
        // addMessage($_POST['name'],$_POST['email'],$_POST['phone'],$_POST['message']);
        // echo "<alert>Message send successfully</alert>";
        // redirct('rooms.php');
    }else{
        // echo "<alert>32222222222222222222222</alert>";

    }
    
    ?>
    <main>
    <article>
    <section class="contact" >
    <div class="form-container" >
        <div class = 'box'>
            <form autocomplete="off" method="post" class  = "form"enctype="multipart/form-data">
           
        <h1>Add blog</h1>
           
			<br>
            <div class="input">
                <input  required type="text" name="subject"  id="ucname" maxlength="50" placeholder="Subject" require>
			</div>
            
            <div class="input">
					<select required   name="topic">
						<option value="">Topic type</option>
                        <?php 
                            while ($row = mysqli_fetch_assoc($topic)) {
                                echo '<option value= '.$row['id'].'>'.$row['topic_name'].'</option>';
                            }
                        ?>
					</select>
				</div>
			
            <div class="input" >
                <input required  type="file" name="image"  id="ucname" maxlength="50" placeholder="image" require>
			</div>
            <div class="input">
                <textarea required  type="textarea" name="content"    placeholder="Content" require></textarea> 
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