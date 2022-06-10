<h1>Editar Produto</h1>

<?php 
    extract($data);

?>
<form action="" method="post">


    <label for="name">Nome</label>
    <input value="<?php echo $product['name'] ?>" id="name" name="name" type="text" class="form-control mb-3">

    <label for="description">Descrição</label>
    <textarea id="description" name="description" class="form-control mb-3"><?php echo $product['description'] ?></textarea>

    <label for="value">Valor</label>
    <input id="value" name="value" type="text" class="form-control mb-3"value="<?php echo $product['value'] ?>">

    <label for="quantity">Quantidade</label>
    <input id="quantity" name="quantity" type="text" class="form-control mb-3"value="<?php echo $product['quantity'] ?>">

    <label for="photo">foto</label>
    <input id="photo" name="photo" type="text" class="form-control mb-3"
    value="<?php echo $product['photo'] ?>">

    <button class="btn btn-primary">Atualizar</button>

</form>