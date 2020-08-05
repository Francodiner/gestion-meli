<?php

use Cake\Core\Configure;
use Cake\I18n\Time;
use Cake\Routing\Router;
?>

<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    #content {
        padding-top: 30px;
        width: 500px;
        margin: 0 auto;

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

<?php if ($vendedor != null) : ?>
    <section style="text-align:center" class="content-header">

        <h1>
            <?= $vendedor->nombre . ' ' . $vendedor->apellido ?>
        </h1>
    </section>

    <div id="content">
        <table>
            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Categoria</th>
                <th>Sitio</th>
            </tr>
            <?php foreach ($vendedorProducto as $pr) : ?>
                <tr>
                    <td><?= $pr->producto->titulo ?></td>
                    <td><?= $pr->producto->precio ?></td>
                    <td><?= $pr->producto->categoria->nombre ?></td>
                    <td><?= $pr->vendedor->site->ubicacion ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

    <?php echo $this->Html->link(
           'Volver',
            array(
                'controller' => 'Home',
                'action' => 'home',
            )
        ); ?>
<?php else : ?>
    <section style="text-align:center" class="content-header">
        <h1>
            No se encontraron resultados
        </h1>
        <h2>Vuelva a intentarlo</h2>
    </section>

    <div class="searchinput">
        <?php echo $this->Form->create('Busqueda', ['type' => 'get', 'url' => ['controller' => 'Home', 'action' => 'buscar']]); ?>
        <input type="text" name="search" placeholder=" Buscar..." class="text" required>
        <button type="submit" class="submit"><i class="fas fa-search"></i></button>
        </form>
        <?php echo $this->Html->link(
           'Volver',
            array(
                'controller' => 'Home',
                'action' => 'home',
            )
        ); ?>
    </div>



<?php endif; ?>