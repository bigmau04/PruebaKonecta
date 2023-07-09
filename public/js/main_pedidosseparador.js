(function() {
    $(function() {
        $('#guardar_pedido_separado').on('click', function() {
            $('#registro_ob').modal('show');
            $('#asignar_pedidos').modal('hide');
        });
        $('#guardar_ob').on('click', function() {
            alert('Datos guardados correctamente');
            $('#registro_ob').modal('hide');
        });
    });


}());