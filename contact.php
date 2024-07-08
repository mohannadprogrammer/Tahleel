
    <?php
    $title = 'Add Hospetl';
    require_once './template/header.php';
    // require_once './functions/database_functions.php';
    $name="";
    $email="";
    $phone="";
    $massage="";
    ?>
    <main>
    <article>
    <section class="contact" >
    <div class="form-container" >
        <form autocomplete="off" method="post" class  = "form"enctype="application/x-www-form-urlencoded">
           
        <h1>Contact us</h1>
           
			<br>
            <div class="input">
                <input required type="text" name="name" value="<?= $name?>" id="ucname" maxlength="50" placeholder="name">
			</div>
			<div class="input">
                <input required type="email" name="email" value="<?= $email?>" id="ucname" maxlength="50" placeholder="Email">
            </div>
            <div class="input">
                <input required type="phone" name="phone" value="<?= $name?>" id="ucname" maxlength="50" placeholder="phone number">
			</div>
            <div class="input">
                <input required type="textarea" name="Massage" value="<?= $name?>" id="ucname" maxlength="50" placeholder="Massages">
			</div>
            
			
            
              
			
            <input type="submit" class ="button"name="<?= $action?>" value="send">
        </form>
        <div></div>
    </div>
    </section>
    </artical>
    </main>
    <?php
    require_once './template/footer.php';
    ?>