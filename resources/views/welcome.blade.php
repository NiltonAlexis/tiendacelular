<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>USUARIO</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
        html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a6864;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/usuarios') }}" class="text-sm text-gray-700 underline">usuarios</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Iniciar Sesion</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <link rel="ico/LOGO.ico" ><title>CELULARES</title>
       
        <style>
            
            /* menu de imagenes de las prendas 1 */
                .celular1 {
                /* IMPORTANTE */
                text-align: center;
                }

                .celular1 {
                background-color: rgba(255, 255, 255, 0.2);
                width: 420px ;
                height: 450px;
                /*padding: 180px; REMPLAZAR ARRIBA*/ 
                margin: 1px;
                border: 1px solid #ffffff;
                /* IMPORTANTE */
                transition-property: all;
                transition-duration: 0.5s;
                display:inline-table;
                }
                .celular1:hover{/*ANIMACION DE SCALA*/
                transform:  scale(1.03, 1.03);/*translate(4px, -15px);/*ANUMACION DE MOVIMIENTO DE LOS CUADROS*/
                 }


            /* menu de imagenes de las accesorios 1 */
                .padreImgAccesorios1 {
                /* IMPORTANTE */
                text-align: center;
                }

                .hijoImgAccesorios1 {
                background-color: rgba(74, 17, 20,0.2);
                width: 420px ;
                height: 430px;
                /*padding: 180px; REMPLAZAR ARRIBA*/ 
                margin: 1px;
                border: 1px solid #ffffff;
                /* IMPORTANTE */
                /* IMPORTANTE */
                transition-property: all;
                transition-duration: 0.5s;
                display:inline-flex;
                }
                .hijoImgAccesorios1:hover{/*ANIMACION DE SCALA*/
                transform:  scale(1.03, 1.03);/*translate(4px, -15px);/*ANUMACION DE MOVIMIENTO DE LOS CUADROS*/
                 }




            /* menu de imagenes de las prendas 2*/
                    .padreImgPrendas2 {
                    /* IMPORTANTE */
                    text-align: center;
                    }

                    .hijoImgPrendas2{
                    background-color: rgba(74, 17, 20,0.2);

                    padding: 120px;
                    margin: 1px;
                    border: 1px solid #ffffff;
                    /* IMPORTANTE */
                    display: inline-block;
                    }


                .div_centrado{
                background: yellow;
                width: 200px;       
                height: 200px;
                position: absolute;
                bottom: 0;
                right: 50%;
                margin-right: -100px;
            }

            .PieDeLaPagina{
                height: 200px;
                width: 1300px;
                background-color: rgb(51, 47, 44);
                color:rgb(255, 255, 255);
                position: absolute;
                text-align: center;
            }
            button{
                cursor: pointer;
                text-decoration: none;
                padding: 10px;
                font-weight: 600;
                font-size: 20px;
                color: #ffffff;
                background-color: #1883ba;
    border-radius: 6px;
    border: 2px solid #0016b0;
    text-align: center;
            }
  .boton_personalizado:hover{
    color: #1883ba;
    background-color: #ffffff;
  }
  span{
      font-size: 30px;
  }
        </style>
</head>
<body>


<!-- mOSTRANDO IMAGENES DE LOS PRODUCTO-->
<div class="imagen">
    <div class="celular1">Xiaomi Redmi Note 10 Pro 5G 128gb / 6gb<img src="cel2.webp" width="300px" height="300px"><button>S/ 1245. <span>99</span></button></div>
    <div class="celular1">Apple iPhone 11 64GB - Negro <img src="cel3.webp" width="300px" height="300px"><button>S/ 4267. <span>99</span> </button></div>
    <div class="celular1">CELULAR UMIDIGI A7 PRO 4GB RAM<img src="cel4.webp" width="300px" height="300px"><button>S/ 5178. <span>99</span></button> </div>
    <!--<div class="hijoImgPrenda1">Celular Huawei Y6 P 6.3 64GB 3GB<img src="cel5.webp" width="300px" height="300px"><button>COMPRAR</button>
    <div class="hijoImgPrenda1">Motorola Moto G10 128gb 4gb Ram <img src="cel6.webp" width="300px" height="300px"><button>COMPRAR</button></div>
    <div class="hijoImgPrenda1">LG K50S Negro 3GB , 32 GB <img src="cel7.webp" width="300px" height="300px"><button>COMPRAR</button></div>
    <div class="hijoImgPrenda1">Celular Huawei Y5P 5.45 2GB 32GB 8MP<img src="cel8.webp" width="300px" height="300px"><button>COMPRAR</button></div>
    <div class="hijoImgPrenda1">Samsung Galaxy S21 Ultra 5G 256GB <img src="cel9.webp" width="300px" height="300px"><button>COMPRAR</button></div>
    <div class="hijoImgPrenda1">Galaxy S21 Samsung-Rosa<img src="cel10.webp" width="300px" height="300px"><button>COMPRAR</button></div>-->

</div>   
<br>

<!-- -->
<h3 style="text-align:center; color: rgb(255, 255, 255);">Accesorios</h3>
<br>

<!-- mOSTRANDO IMAGENES DE LOS ACCESORIOS-->
<div class="padreImgAccesorios1">
    <div class="img1">Imagen 1</div>
    <div class="hijoImgAccesorios1">Imagen 2</div>
    <div class="hijoImgAccesorios1">Imagen 3</div>
    <div class="hijoImgAccesorios1">Imagen 4</div>
    <div class="hijoImgAccesorios1">Imagen 5</div>
    <div class="hijoImgAccesorios1">Imagen 6</div>
  </div>
<br>

<!-- -->
<h3 style="text-align:center; color: rgb(255, 255, 255);">Prendas(Mas Para Mostrar)</h3>
<br>
<div class="padreImgPrendas2">
    <div class="hijoImgPrendas2">Imagen 1</div>
    <div class="hijoImgPrendas2">Imagen 2</div>
    <div class="hijoImgPrendas2">Imagen 3</div>
    <div class="hijoImgPrendas2">Imagen 4</div>
  </div>
<br>

        
    </body>
