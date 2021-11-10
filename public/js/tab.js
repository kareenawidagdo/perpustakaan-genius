$(document).ready(function(){
    $('#tabir-1').click(function(){
        if($('#tabir-1').hasClass('active')){
            $('#tab-1').attr('style','');
            $('#tab-2').attr('style','display: none;');
        } else if($('#tabir-1').hasClass('initab')){
            $('#tabir-1').removeClass('initab');
            $('#tabir-1').addClass('active');
            $('#tab-1').attr('style','');
            $('#tab-2').attr('style','display: none;');
        }

        if($('#tabir-2').hasClass('active')){
            $('#tabir-2').removeClass('active').addClass('initab');
        }
    });

    $('#tabir-2').click(function(){
        if($('#tabir-2').hasClass('active')){
            $('#tab-reviews').attr('style','');
            $('#tab-1').attr('style','display: none;');
        } else if($('#tabir-2').hasClass('initab')){
            $('#tabir-2').removeClass('initab');
            $('#tabir-2').addClass('active');
            $('#tab-2').attr('style','');
            $('#tab-1').attr('style','display: none;');
        }

        if($('#tabir-1').hasClass('active')){
            $('#tabir-1').removeClass('active').addClass('initab');
        }
    });

    // pesanan
    // riwayat
    // alamat

    $('#tabir-pesanan').click(function(){
        if($('#tabir-pesanan').hasClass('active')){
            $('#tab-pesanan').attr('style','');
            $('#tab-riwayat').attr('style','display: none;');
            $('#tab-alamat').attr('style','display: none;');
        } else if($('#tabir-pesanan').hasClass('initab')){
            $('#tabir-pesanan').removeClass('initab');
            $('#tabir-pesanan').addClass('active');
            $('#tab-pesanan').attr('style','');
            $('#tab-riwayat').attr('style','display: none;');
            $('#tab-alamat').attr('style','display: none;');
        }

        if($('#tabir-riwayat').hasClass('active')){
            $('#tabir-riwayat').removeClass('active').addClass('initab');
        }

        if($('#tabir-alamat').hasClass('active')){
            $('#tabir-alamat').removeClass('active').addClass('initab');
        }
    });

    $('#tabir-riwayat').click(function(){
        if($('#tabir-riwayat').hasClass('active')){
            $('#tab-riwayat').attr('style','');
            $('#tab-pesanan').attr('style','display: none;');
            $('#tab-alamat').attr('style','display: none;');
        } else if($('#tabir-riwayat').hasClass('initab')){
            $('#tabir-riwayat').removeClass('initab');
            $('#tabir-riwayat').addClass('active');
            $('#tab-riwayat').attr('style','');
            $('#tab-pesanan').attr('style','display: none;');
            $('#tab-alamat').attr('style','display: none;');
        }

        if($('#tabir-pesanan').hasClass('active')){
            $('#tabir-pesanan').removeClass('active').addClass('initab');
        }

        if($('#tabir-alamat').hasClass('active')){
            $('#tabir-alamat').removeClass('active').addClass('initab');
        }
    });

    $('#tabir-alamat').click(function(){
        if($('#tabir-alamat').hasClass('active')){
            $('#tab-alamat').attr('style','');
            $('#tab-pesanan').attr('style','display: none;');
            $('#tab-riwayat').attr('style','display: none;');
        } else if($('#tabir-alamat').hasClass('initab')){
            $('#tabir-alamat').removeClass('initab');
            $('#tabir-alamat').addClass('active');
            $('#tab-alamat').attr('style','');
            $('#tab-pesanan').attr('style','display: none;');
            $('#tab-riwayat').attr('style','display: none;');
        }

        if($('#tabir-pesanan').hasClass('active')){
            $('#tabir-pesanan').removeClass('active').addClass('initab');
        }

        if($('#tabir-riwayat').hasClass('active')){
            $('#tabir-riwayat').removeClass('active').addClass('initab');
        }
    });
});