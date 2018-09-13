var accedit = false;

function main() {
    $('.boto1').on('click', function () {
      //  $('.boto1').ToggleClass("img_menu_active");

        var parametro = {
            "tipo": "Pizza"
        }

        $.ajax({
            data: parametro,
            url: "ranking.php",
            type: 'post',
            success: function (result) {
                $(".seccions").html(result);

            }
        });
    });

    $('.boto2').on('click', function () {
      //  $(this).toggleClass("img_menu_active");

        var parametro = {
            "tipo": "Entrepans"
        }

        $.ajax({
            data: parametro,
            url: "ranking.php",
            type: 'post',
            success: function (result) {
                $(".seccions").html(result);

            }
        });
    });

    $('.boto3').on('click', function () {
      //  $(this).toggleClass("img_menu_active");

        var parametro = {
            "tipo": "Plats combinats"
        }
        $.ajax({
            data: parametro,
            url: "ranking.php",
            type: 'post',
            success: function (result) {
                $(".seccions").html(result);

            }
        });
    });

    $('.boto4').on('click', function () {
       // $(this).toggleClass("img_menu_active");

        var parametro = {
            "tipo": "Vegetarians"
        }
        $.ajax({
            data: parametro,
            url: "ranking.php",
            type: 'post',
            success: function (result) {
                $(".seccions").html(result);

            }
        });
    });

    $('.boto5').on('click', function () {
     //   $(this).toggleClass("img_menu_active");
        var parametro = {
            "tipo": "Begudes"
        }
        $.ajax({
            data: parametro,
            url: "ranking.php",
            type: 'post',
            success: function (result) {
                $(".seccions").html(result);
            }
        });
    });

    $('#una').on('click', function () {
        if (accedit == false) {
            document.getElementById('una').src = 'or.png';
            accedit = true;

            //fem la modificacio a la taula i les puntuacions del restaurant
            var parametro = {
                "puntuacio": 1
            }

            $.ajax({
                data: parametro,
                url: "modificar_bd.php",
                type: 'post',
                success: function (result) {
                    $(".a").html(result);

                }
            });

        }
    });


    $('#dos').on('click', function () {
            if (accedit == false) {
                document.getElementById('una_0').src = 'or.png';
                document.getElementById('dos_0').src = 'or.png';
                accedit = true;


                //fem la modificacio a la taula i les puntuacions del restaurant
                var parametro = {
                    "puntuacio" : 2
                }

                $.ajax({
                    data: parametro,
                    url: "modificar_bd.php",
                    type: 'post',
                    success: function (result) {
                        $(".a").html(result);

                    }
                });





            }
        }
    );

    $('#tres').on('click', function () {
            if (accedit == false) {
                document.getElementById('una').src = 'or.png';
                document.getElementById('dos').src = 'or.png';
                document.getElementById('tres').src = 'or.png';

                accedit = true;

                //fem la modificacio a la taula i les puntuacions del restaurant
                var parametro = {
                    "puntuacio" : 3
                }

                $.ajax({
                    data: parametro,
                    url: "modificar_bd.php",
                    type: 'post',
                    success: function (result) {
                        $(".a").html(result);

                    }
                });



            }
        }
    );

    $('#quatre').on('click', function () {
            if (accedit == false) {
                document.getElementById('una').src = 'or.png';
                document.getElementById('dos').src = 'or.png';
                document.getElementById('tres').src = 'or.png';
                document.getElementById('quatre').src = 'or.png';
                accedit = true;


                //fem la modificacio a la taula i les puntuacions del restaurant
                var parametro = {
                    "puntuacio" : 4
                }


                $.ajax({
                    data: parametro,
                    url: "modificar_bd.php",
                    type: 'post',
                    success: function (result) {
                        $(".a").html(result);
                    }
                });


            }
        }
    );

    $('#cinc').on('click', function () {
            if (accedit == false) {
                document.getElementById('una').src = 'or.png';
                document.getElementById('dos').src = 'or.png';
                document.getElementById('tres').src = 'or.png';
                document.getElementById('quatre').src = 'or.png';
                document.getElementById('cinc').src = 'or.png';
                accedit = true;

                //fem la modificacio a la taula i les puntuacions del restaurant
                var parametro = {
                    "puntuacio": 5
                }

                $.ajax({
                    data: parametro,
                    url: "modificar_bd.php",
                    type: 'post',
                    success: function (result) {
                        $(".a").html(result);

                    }
                });


            }
        }
    );

    /////////////////////////////////////////////////////////////////////////////////////
    $('.Frankfurt_Pedralbes').on('click', function () {
        var parametro = {
            "restaurant": "Frankfurt_Pedralbes"
        }
        $.ajax({
            data: parametro,
            url: "buscar_mapa.php",
            type: 'post',
            success: function (result) {
                $(".map").html(result);

            }
        });

    });

    $('.Nostrum').on('click', function () {
        var parametro = {
            "restaurant": "Nostrum"
        }
        $.ajax({
            data: parametro,
            url: "buscar_mapa.php",
            type: 'post',
            success: function (result) {
                $(".map").html(result);

            }
        });

    });

    $('.Unity').on('click', function () {
        var parametro = {
            "restaurant": "Unity"
        }
        $.ajax({
            data: parametro,
            url: "buscar_mapa.php",
            type: 'post',
            success: function (result) {
                $(".map").html(result);

            }
        });

    });


    $('.Bar_de_la_fib').on('click', function () {
        var parametro = {
            "restaurant": "Bar_de_la_fib"
        }
        $.ajax({
            data: parametro,
            url: "buscar_mapa.php",
            type: 'post',
            success: function (result) {
                $(".map").html(result);

            }
        });

    });

    $('.Sal_i_pebre').on('click', function () {
        var parametro = {
            "restaurant": "Sal_i_pebre"
        }
        $.ajax({
            data: parametro,
            url: "buscar_mapa.php",
            type: 'post',
            success: function (result) {
                $(".map").html(result);

            }
        });

    });

    $('.Al_Taglio_BCN').on('click', function () {
        var parametro = {
            "restaurant": "Al_Taglio_BCN"
        }
        $.ajax({
            data: parametro,
            url: "buscar_mapa.php",
            type: 'post',
            success: function (result) {
                $(".map").html(result);

            }
        });
    });

        $('.Pati_blau').on('click', function () {
            var parametro = {
                "restaurant": "Pati_blau"
            }
            $.ajax({
                data: parametro,
                url: "buscar_mapa.php",
                type: 'post',
                success: function (result) {
                    $(".map").html(result);

                }
            });

    });

    $('.Leo_Boeck').on('click', function () {
        var parametro = {
            "restaurant": "Leo_Boeck"
        }
        $.ajax({
            data: parametro,
            url: "buscar_mapa.php",
            type: 'post',
            success: function (result) {
                $(".map").html(result);

            }
        });

    });

    $('.Dunkin_Coffee').on('click', function () {
        var parametro = {
            "restaurant": "Dunkin_Coffee"
        }
        $.ajax({
            data: parametro,
            url: "buscar_mapa.php",
            type: 'post',
            success: function (result) {
                $(".map").html(result);

            }
        });

    });

    $('.Aris_Sport_Bar').on('click', function () {
        var parametro = {
            "restaurant": "Aris_Sport_Bar"
        }
        $.ajax({
            data: parametro,
            url: "buscar_mapa.php",
            type: 'post',
            success: function (result) {
                $(".map").html(result);

            }
        });

    });

    ///////////////////////////////////////////////////////////////////////////

}

$(document).ready(main);