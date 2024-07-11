
<?php
    $title = "Login";
	require "./template/header.php";
	require_once "./functions/database_functions.php";


	if(isset( $_POST['email']) && isset($_POST['pass'])) {
        $row = login($_POST['email'] ,$_POST['pass']);
        // $_SESSION['user_info'] = '';
	    $_SESSION['user_info'] =$row;
			
	if(!$row){
		echo '<p class="lead text-center text-muted">عفوا هذا المتخدم غير موجود </p>';
	}
    // redirct("index.php");
	header("Location: ./index.php");
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