<?php 

    require '../../modelos/Cliente.php';

    $objCliente = new Cliente();
    $clientes = $objCliente->buscar();
    var_dump($clientes);
?>

<?php include_once '../templates/header.php'; ?>

<h1 class="text-center">Formulario de productos</h1>
<div class="row justify-content-center">
    <form action="/crud_2024/controladores/producto/guardar.php" method="POST" class="border bg-light shadow rounded p-4 col-lg-6">
        <div class="row mb-3">
            <div class="col">
                <label for="prod_nombre">Nombre del producto</label>
                <input type="text" name="prod_nombre" id="prod_nombre" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="prod_precio">Precio del producto</label>
                <input type="text" name="prod_precio" id="prod_precio" min="0" step="0.01" class="form-control" required>
            </div>
        </div>
        <!-- <div class="row mb-3">
            <div class="col">
                <label for="prod_fecha">FEcha del producto</label>
                <input type="datetime-local"  name="prod_fecha" id="prod_fecha" min="0" step="0.01" class="form-control" required>
            </div>
        </div> -->


        <select name="cliente" id="clientes" class="form-control">
            <option value="">SELECCIONE...</option>
            <?php foreach ($clientes as $cliente) : ?>
                <option value="<?= $cliente['cli_id'] ?>"><?= $cliente['cli_nombre'] .  " " . $cliente['cli_apellido']  ?></option>
            <?php endforeach ?>
        </select>
        <div class="row mb-3">
            <div class="col">
                <button type="submit" class="btn btn-primary w-100">Guardar</button>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="../../controladores/producto/buscar.php" class="btn btn-info w-100">Buscar</a>
            </div>
        </div>
    </form>
</div>

<?php include_once '../templates/footer.php'; ?>


   