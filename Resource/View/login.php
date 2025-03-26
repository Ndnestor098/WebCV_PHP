<?php

layout("app", function () { ?>

    <!--------------- Style --------------->
    <style>
        main{
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-box {
            max-width: 300px;
            background:rgb(245, 245, 245);
            overflow: hidden;
            border-radius: 16px;
            color: #010101;
        }

        .form {
            position: relative;
            display: flex;
            flex-direction: column;
            padding: 32px 24px 24px;
            gap: 16px;
            text-align: center;
        }

        /*Form text*/
        .title {
            font-weight: bold;
            font-size: 1.6rem;
        }

        .subtitle {
            font-size: 1rem;
            color: #666;
        }

        /*Inputs box*/
        .form-container {
            overflow: hidden;
            border-radius: 8px;
            margin: 1rem 0 .5rem;
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .input {
            background: none;
            border: 0;
            outline: 0;
            height: 40px;
            width: 250px;
            font-size: .9rem;
            padding: 8px 15px;
            background-color: #fff;
        }

        .form-section a {
            font-weight: bold;
            color: #0066ff;
            transition: color .3s ease;
        }

        .form-section a:hover {
            color: #005ce6;
            text-decoration: underline;
        }

        /*Button*/
        .form button {
            background-color: #0066ff;
            color: #fff;
            border: 0;
            border-radius: 24px;
            padding: 10px 16px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color .3s ease;
        }

        .form button:hover {
            background-color: #005ce6;
        }

        .error{
            font-size: 12px;
            font-weight: 600;
            color:rgb(212, 53, 53);
        }
    </style>


    <!--------------- Contenido de la pagina Web --------------->
    <main>
        <div class="form-box">
            <form action="<?= routes("login") ?>" method="post" class="form">
                <span class="title">Login</span>
                <div class="form-container">
                    <div>
                        <input type="text" name="name" value="<?= old("name")?>" class="input" placeholder="Name">
                        <?php if (hasError("name")) { ?>
                            <span class="error"><?= errors("name") ?></span>
                        <?php } ?>
                    </div>
                    <div>
                        <input type="email" name="email" value="<?= old("email")?>" class="input" placeholder="Email">
                        <?php if (hasError("email")) { ?>
                            <span class="error"><?= errors("email") ?></span>
                        <?php } ?>
                    </div>
                    <div>
                        <input type="text" name="password" class="input" placeholder="Password">
                        <?php if (hasError("password")) { ?>
                            <span class="error"><?= errors("password") ?></span>
                        <?php } ?>
                    </div>
                </div>
                <button>Sign up</button>
            </form>
        </div>
    </main>

    <!--  Efecto de Iluminacion -->
    <div class="iluminacion"></div>
    <script src="/assets/js/effect.js"></script>
<?php })?>


