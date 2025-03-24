<h1>Este es mi Home</h1>

<?php components('menu') ?>

<form action="<?= routes("login")?>" method="post">
    <div>
        <input type="text" name="email" value="<?= old('email') ?>" placeholder="Email">
        <br>
        <?php if(hasError('email')){
            echo errors('email');
        }    
        ?>
    </div>
    <div>
        <input type="password" name="password" value="" placeholder="Password">
        <br>
        <?php if(hasError('password')){
            echo errors('password');
        }    
        ?>
    </div>

    <button type="submit">Enviar</button>
</form>
