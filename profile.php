
<?php
    $title = 'Tahleel Real Estate - Profile';
    require_once './template/admin_header.php';
    require_once './functions/database_functions.php';
    if(isset( $_POST['opass']) && isset($_POST['npass'])) {
        $row = change_password($_SESSION['user_info']['id'],$_POST['opass'] ,$_POST['npass']);
        // $_SESSION['user_info'] = '';
	    // $_SESSION['user_info'] =$row;
        // echo $row;
        // echo "<script> window.location.href = './index.php'</script>";

			
	if($row){
		echo '<p class="callout">change seccssieful </p>';
	}else{
		echo '<p class="callout">old password not done </p>';
        // echo "<script> window.location.href = './index.php'</script>";


    }
}
    ?>
    <main>
    <article>
    <section class="contact" >
    <div class="form-container" >
    <div class = 'menu'>
             
             <a href="./profile.php" class="active">profile</a>
             <a href="./masseges.php">Massages</a>
             <a href="./properties.php">Properties</a>
             <a href="./admin_blogs.php">Blogs</a>
         </div>
        <div class = 'table'>
        <table class="data">
        <thead>
            <tr>
            <th>name</th>
            <th>email</th>
            <th>type</th>  
            <th>operation</th>
            
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?=$_SESSION['user_info']['user_name']?></td>
                <td><?=$_SESSION['user_info']['email_user']?></td>
                <td><?=$_SESSION['user_info']['type_name']?></td>
                <td>
                <button class="header-top-btn"  aria-label="Close Menu" style="background:red;">
                     <span>Change password</span>
                </button>
                </td>
                
                
            </tr>
            
        </tbody>
            </table>
            <form autocomplete="off" method="post" class  = "form"enctype="application/x-www-form-urlencoded">
           
                 <h1>Change password</h1>
                    <br>
                    <div class="input" style="width:250px" >
                        <input required type="password" name="opass" id="ucname" maxlength="50" placeholder="old password">
                    </div>
                    <div class="input" style="width:250px">
                        <input required type="password" name="npass"  id="ucname" maxlength="50" placeholder="new password">
                    </div>
                <input type="submit" class ="button"name="<?= $action?>" value="change">
        </form>
        </div>
        
        </div>
    </section>
    </artical>
    </main>
    <?php
    require_once './template/footer.php';
    ?>