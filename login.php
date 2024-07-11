
<?php
    $title = "Login";
	require "./template/header.php";
	require_once "./functions/database_functions.php";

    ob_start();
	if(isset( $_POST['email']) && isset($_POST['pass'])) {
        $row = login($_POST['email'] ,$_POST['pass']);
        // $_SESSION['user_info'] = '';
	    $_SESSION['user_info'] =$row;
        // echo $row['email_user'];
        // echo "<script> window.location.href = './index.php'</script>";

			
	if(!isset($row['email_user'])){
		echo '<p class="callout">عفوا هذا المتخدم غير موجود </p>';
	}else{
        echo "<script> window.location.href = './index.php'</script>";


    }
    // redirct("index.php");
	// header("Location: index.php");
    $massage="";
}

    ?>
    <main>
    <article>
    <section class="contact" >
    <div class="form-container" >
        <div class = 'box'>
            <form autocomplete="off" method="post" class  = "form"enctype="application/x-www-form-urlencoded">
           
        <h1>login</h1>
			<br>
            <div class="input">
                <input required type="text" name="email" id="ucname" maxlength="50" placeholder="name">
			</div>
			<div class="input">
                <input required type="password" name="pass"  id="ucname" maxlength="50" placeholder="Email">
            </div>
            
            
			
            
              
			
            <input type="submit" class ="button"name="<?= $action?>" value="login">
        </form>
</div>
    </div>
    </section>
    </artical>
    </main>
    <?php
    require_once './template/footer.php';
    ?>