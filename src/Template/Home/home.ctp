<?php

use Cake\Core\Configure;
use Cake\I18n\Time;
use Cake\Routing\Router;
?>

<style>
    body {
        margin: 0;
        padding: 0;
    }

    html {
        background: #f8f8f8;
    }

    center h1 {
        font-size: 20px;
        font-family: sans-serif;
        color: #fff;
        background: orange;
        padding: 10px;
        margin: 1%;
        width: 50%;
        border-radius: 50px;

    }

    .searchinput {
        line-height: 100%;
        display: table;
        margin: 0;
        width: 100%;
        position: absolute;
        text-align: center;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .text {
        width: 40%;
        height: 20px;
        padding: 9px;
        color: orange;
        border: 1px solid orange;
        box-shadow: 1px 0px 3px orange;
        border-radius: 50px;
        font-size: 15px;
        text-transform: capitalize;
        outline: none;
    }

    ::-webkit-input-placeholder {
        color: orange;
    }

    ::-moz-input-placeholder {
        color: orange;
    }

    ::-ms-input-placeholder {
        color: orange;
    }

    .text:focus {
        box-shadow: 1px 1px 8px orange;
    }

    .submit {
        padding: 10px;
        height: 40px;
        width: 80px;
        font-size: 13px;
        color: white;
        background: orange;
        border: none;
        margin: 10px;
        border-radius: 50px;
        box-shadow: 0px 0px 10px orange;
        outline: none;
    }

    .submit:active {
        box-shadow: 0px 0px 7px orange;
    }

    
</style>

</head>

<body>

    <div class="searchinput">
        <h1 style="text-align: center;">Busqueda de vendedores MELI</h1>
        <?php echo $this->Form->create('Busqueda', ['type' => 'get', 'url' => ['controller' => 'Home', 'action' => 'buscar']]); ?>
        <input type="text" name="search" placeholder=" Buscar..." class="text" required>
        <button type="submit" class="submit"><i class="fas fa-search"></i></button>
        </form>
        <span>Buscar usuario con SELLER_ID = 179571326</span>
    </div>

</body>

</html>