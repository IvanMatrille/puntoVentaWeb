<?php
include_once("biblioteca.php");
    cabezaPagina();
?>

    <form action="">
        <input type='text' name='codigo' id='codigo' placeholder='Codigo'>
        <input type='text' name='Nombre' id='nombre' placeholder='nombre'>
        <input type='text' name='Apellido' id='Apellido' placeholder='Apellido'>
        <input type='text' name='Cedula' id='Cedula' placeholder='Cedula'>
        <input type='text' name='Direccion' id='Direccion' placeholder='Direccion'>
        <input type='text' name='Sector' id='Sector' placeholder='Sector'>
        <input type='text' name='Telefono' id='Telefono' placeholder='Telefono'>
        <input type='text' name='Celular' id='Celular' placeholder='Celular'>
        <input type='text' name='RNC' id='RNC' placeholder='RNC'>
        <select name="tipoCliente" id="tipoCliente">
            <option value="">Tipo de Cliente:</option>
        </select>
        <input type='text' name='idVendedor' id='Vendedor' placeholder='Vendedor'>
        <input type='text' name='limiteCredito' id='limiteCredito' placeholder='Limite de Credito'>
        <input type='text' name='Descuento' id='Descuento' placeholder='Descuento'>
        <input type='text' name='text' id='diasCredito' placeholder='Dias de Credito'>
        <textarea></textarea>

    </form>

<?php
    piePagina();
?>

       
