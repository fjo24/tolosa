  (function ($) {
            $(function () {
                var addFormGroup = function (event) {
                    event.preventDefault();
                    var $formGroup = $(this).closest('.form-group');
                    var $multipleFormGroup = $formGroup.closest('.multiple-form-group');
                    var $formGroupClone = $formGroup.clone();
                    $(this)
                            .toggleClass('btn-success btn-add btn-success btn-add')
                            .html('+');
                    $formGroupClone.find('file').val('');
                    $formGroupClone.find('.product_id').text('Seleccione');
                    $formGroupClone.find('.select-product').val('');
                    
                    $formGroupClone.insertAfter($formGroup);
                    var $lastFormGroupLast = $multipleFormGroup.find('.form-group:last');
                    if ($multipleFormGroup.data('max') <= countFormGroup($multipleFormGroup)) {
                        $lastFormGroupLast.find('.btn-add').attr('disabled', true);
                    }*/

                    //Llamar calculate y costos cuando se agrega producto

                    calculate();
                    calcular_total_costos();

                    var idproduct = $(this).closest('.multiple-form-group').find('.select-product').val();
                    var quantity = $(this).closest('.multiple-form-group').find('.producto-quantity').val();
                    $(this).closest('.multiple-form-group').find('.select-product').val();
                    remove_product_ajax(idproduct, quantity);

                    //fin

                };
                var removeFormGroup = function (event) {
                    event.preventDefault();
                    var $formGroup = $(this).closest('.form-group');
                    var $multipleFormGroup = $formGroup.closest('.multiple-form-group');
                    var $lastFormGroupLast = $multipleFormGroup.find('.form-group:last');
                    if ($multipleFormGroup.data('max') >= countFormGroup($multipleFormGroup)) {
                        $lastFormGroupLast.find('.btn-add').attr('disabled', false);
                    }
                    $formGroup.remove();

                     //Llamar calculate y costos cuando se elimina producto
                    calculate();
                    calcular_total_costos();

                    var idproduct = $(this).closest('.multiple-form-group').find('.select-product').val();
                    var quantity = $(this).closest('.multiple-form-group').find('.producto-quantity').val();
                    add_product_ajax(idproduct, quantity);

                    //Fin
                };
                var selectFormGroup = function (event) {
                    event.preventDefault();
                    var $selectGroup = $(this).closest('.input-group-select');
                    var param = $(this).attr("href").replace("#","");
                    var concept = $(this).text();
                    $selectGroup.find('.concept').text(concept);
                    $selectGroup.find('.input-group-select-val').val(param);
                }
                var countFormGroup = function ($form) {
                    return $form.find('.form-group').length;
                };
                $(document).on('click', '.btn-add', addFormGroup);
                $(document).on('click', '.btn-remove', removeFormGroup);
                //$(document).on('click', '.btn-cal', calFormGroup);
               // $(document).on('click', '.dropdown-menu a', selectFormGroup);
            });
        })(jQuery);
        //Fin PRODUCTS



// LLAMAR A CALCULATE CON BOTON CALCULATE

//Llamar calculate y costos cuando se agrega producto

/*var calFormGroup = function (event) {
                   
                     //Llamar calculate y costos cuando se elimina producto
                    calculate();
                    calcular_total_costos();


                    //Fin
                };*/

//FIN LLAMAR CON CALCULATE BUTTON
        //Colocar precio, costo y stock de los productos en los fields

    /*    $(document).on('change', '.select-product', function () {
            var id = $(this).val();
            var myArray = ;

            var found = $.map(myArray, function (val) {
                return val.id == id ? val.price : null;
            });

            var available = $.map(myArray, function (val) {
                return val.id == id ? val.unit_id : null;
            });

            var cost = $.map(myArray, function (val) {
                return val.id == id ? val.cost : null;
            });

            $(this).closest('.multiple-form-group').find('.producto-price').val(cost[0]);
            $(this).closest('.multiple-form-group').find('.producto-unidad').val(unit_id[0]);
            //$(this).closest('.multiple-form-group').find('.producto-cost').val(cost[0]);

            console.log(found[0]);

        });
/*
        //Fin Colocar precio, costo y stock de los productos en los fields

        //Calcular total de los productos
  /*      function calcular_total_producto() {

            productos_total = 0

            $(".producto-price").each(
                    function (index, value) {
                        if (eval($(this).val() != '')) {
                            productos_total = productos_total + (eval($(this).val()) * eval($(this).closest('.multiple-form-group').find('.producto-quantity').val()));
                        }
                    }
            );

            if (isNaN(productos_total)) {
                productos_total = 0
            }

            return productos_total;
        }*/

        //Fin  Calcular total de los productos


        //Caluclar total de los servicios
     /*   function calcular_total_servicios() {

            servicios_total = 0

            var hh = eval($(".order_hh").val());
            ;

            var size = $(".hh-service").size();
            console.log('size service =' + size);
            $(".hh-service").each(
                    function (index, value) {
                        if (eval($(this).val() != '')) {
                            servicios_total = servicios_total + (eval($(this).val()) * hh);
                        }
                        //eval($(this).closest('.multiple-form-group2').find('.hh-service').val()
                    });

            if (isNaN(servicios_total)) {
                servicios_total = 0
            }

            return servicios_total;
        }*/
        //Fin  Calcular total de los servicios

        //Caluclar total de los costos

        //Fin calculate



/*<div class="contacts">
                            <div class="form-group multiple-form-group input-group">
                                <div class="col-md-6">
                                    <div class="input-group-btn input-group-select">
                                        <div class="form-group">
                                            <div class="btn">
                                                <span>Imagen</span>
                                                {!! Form::file('imagen') !!}
                                            </div>
                                            <div class="file-path-wrapper">
                                                {!! Form::text('imagen',null, ['class'=>'file-path', 'placeholder'=>'Imagenes del producto']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="col-md-1">
                                    <label> - </label>
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-danger btn-remove">-</button>
                                    </span>
                                </div>
                                <div class="col-md-1">
                                    <label> - </label>
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-success btn-add">+</button>
                                    </span>
                                </div>
                            </div>
                        </div>


                        */
        //datepicker
                $('.datepicker').datepicker({
                    format: "dd-mm-yyyy",
                    language: "es",
                    autoclose: true
                });