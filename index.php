
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="GmnQBUPrEwV6RZmyPkyKdhFWSVUabdB52cF5JneN">

    <title>ServiçoBom.com – Precisou de serviços? Conte com a gente.</title>

    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="57x57" href="https://servicobom.com.br/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="https://servicobom.com.br/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://servicobom.com.br/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://servicobom.com.br/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://servicobom.com.br/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://servicobom.com.br/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="https://servicobom.com.br/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://servicobom.com.br/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://servicobom.com.br/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="https://servicobom.com.br/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://servicobom.com.br/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="https://servicobom.com.br/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://servicobom.com.br/images/favicons/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#085DAC">
    <meta name="msapplication-TileImage" content="https://servicobom.com.br/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#085DAC">

    <!-- ReCaptcha -->
    <script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Asap:400,500,700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://servicobom.com.br/plugins/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://servicobom.com.br/plugins/slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="https://servicobom.com.br/css/index.css"/>

    <link href="https://servicobom.com.br/plugins/loading-ajax/loading.css" rel="stylesheet">
    <link href="https://servicobom.com.br/css/custom.css?v=1?1595896496" rel="stylesheet">
</head>
<body class="loading">
    <div class='modalLoading'></div>

    <div id="app">
        <nav class="navbar navbar-expand-md shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="https://servicobom.com.br">
            <img src="https://servicobom.com.br/images/logobranca.png" class="logo" title="ServiçoBom.com – Precisou de serviços? Conte com a gente.">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul id="navLeft" class="navbar-nav mx-auto">
                <li class="nav-item navItemMiddle col">
                    <a class="nav-link" href="https://servicobom.com.br/servicos">SERVIÇOS</a>
                </li>
                <li class="nav-item navItemMiddle col-6">
                    <a class="nav-link" href="https://servicobom.com.br/trabalhe">TRABALHE CONOSCO</a>
                </li>
                <li class="nav-item navItemMiddle col">
                    <a class="nav-link" href="https://servicobom.com.br/contato">CONTATO</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul id="navRight" class="navbar-nav ml-auto float-right">
                <li id="navLiRight" class="nav-item col-7 d-none d-lg-block">
                    

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown col">
                            <a id="accountDropdown" class="nav-link dropdown-toggle dropConta text-center" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img src="https://servicobom.com.br/images/icons/account.png">
                                <br />Conta
                            </a>
    
                            <div class="dropdown-menu dropdown-menu-right dropdownEntrar mt-2 p-2" aria-labelledby="accountDropdown">
                                <a class="dropdown-item btnEntrar btn btn-sm text-center" href="https://servicobom.com.br/login">
                                        Entrar
                                    </a>
    
                                    <div class="hrDivider mt-4 mb-4">
                                        <hr/>
                                        <span>ou</span>
                                    </div>
    
                                    <a class="dropdown-item btnFacebook text-center mt-2" href="https://servicobom.com.br/auth/facebook">
                                        <i class="fab fa-facebook-square"></i> Entrar com o Facebook
                                    </a>
    
                                    <a class="dropdown-item linkRegister text-center mt-2" href="https://servicobom.com.br/register">
                                        Novo por aqui? Cadastrar
                                    </a>
                                                            </div>
                        </li>
    
                        <li class="nav-item col"  data-container="body" data-toggle="popover" data-placement="bottom" data-content="Faça login para ativar o carrinho de compras." >
                            <a class="nav-link  disabled " href="https://servicobom.com.br/cart">
                                <img src="https://servicobom.com.br/images/icons/cart.png">
                            </a>
                            <span id="countCart" class="badge badge-pill badge-light navBadgeCart float-right"></span>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://servicobom.com.br/images/examples/banner1.jpg" class="d-block w-100 imgCarousel" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://servicobom.com.br/images/examples/banner1.jpg" class="d-block w-100 imgCarousel" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
    </a>
</div>
    <main class="newsletter p-3">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-3 col-md-1">
                <img src="https://servicobom.com.br/images/icons/mail_mkt.png" class="newsletterIconMkt">
            </div>
            <div class="col-9 col-md-3 mb-4 mb-md-0 pt-md-2 text-right text-md-left my-md-auto newsletterText">
                <p class="text-justify" style="line-height: 21px;">
                    Cadastre-se para receber nossas <br /> <b style="letter-spacing: 0.4px;">novidades e ofertas por e-mail</b>
                </p>
            </div>
            <div class="col-12 col-md-8 my-auto">
                <form action="https://servicobom.com.br/novidades" method="post">
                    <input type="hidden" name="_token" value="GmnQBUPrEwV6RZmyPkyKdhFWSVUabdB52cF5JneN">
                    <div class="form-row">
                        <div class="col-12 mb-2 mb-md-0 col-md-8">
                            <div class="input-group input-group-sm pt-2">
                                <input type="text" class="form-control" id="iptNewsletter" name="newsletter" placeholder="Seu e-mail">
                            </div>
                        </div>
                        <div class="col-12 col-md text-center text-md-left">
                            <button class="btn btn-sm btnNewsletter float-md-right"> CADASTRAR </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
    <main class="container py-5">
        <div class="row justify-content-center comoFunciona">
            <div class="col-12 mb-4 mb-md-3 text-center">
                <p class="comoFuncionaTitle">COMO FUNCIONA</p>
            </div>
            <div class="col mb-5 mb-md-0">
                <div class="col-12 text-center mb-4">
                    <img src="https://servicobom.com.br/images/icons/agendamento_online.png" class="comoFuncionaIcons">
                </div>
                <div class="col-12 text-center comoFuncionaSubtitle mb-4">Agendamento online</div>
                <div class="col-12 text-center comoFuncionaText">
                    Contrate horas de serviço de acordo com o seu espaço, agendando quando e onde quiser em poucos cliques.
                </div>
            </div>
            <div class="col mb-5 mb-md-0">
                <div class="col-12 text-center mb-4">
                    <img src="https://servicobom.com.br/images/icons/seguranca.png" class="comoFuncionaIcons">
                </div>
                <div class="col-12 text-center comoFuncionaSubtitle mb-4">Segurança</div>
                <div class="col-12 text-center comoFuncionaText">
                    Após o agendamento, você receberá um e-mail com foto e os dados do profissional que irá lhe atender, tornando todo o processo muito mais seguro
                </div>
            </div>
            <div class="col mb-4">
                <div class="col-12 text-center mb-4">
                    <img src="https://servicobom.com.br/images/icons/qualidade.png" class="comoFuncionaIcons">
                </div>
                <div class="col-12 text-center comoFuncionaSubtitle mb-4">Qualidade</div>
                <div class="col-12 text-center comoFuncionaText">
                    Nossa equipe de profissionais é treinada e capacitada para que você receba o serviço que contratou com garantia de satisfação.
                </div>
            </div>
        </div>

        <div class="row justify-content-center py-3">
    <div class="col-12 mt-5">
        <ul class="nav nav-tabs navDestaques" id="destaquesTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link navDestaquesLinks active" id="destaques-tab" data-toggle="tab" href="#destaques" role="tab" aria-controls="destaques" aria-selected="true">Destaques</a>
            </li>
        </ul>

        <hr class="hrNav">

        <div class="tab-content mt-1 py-4" id="destaquesTabContent">
            <div class="tab-pane fade show active" id="destaques" role="tabpanel" aria-labelledby="destaques-tab">
                <div class="container">
                    <div class="slickDestaques text-center">
                                                                                    <div class="col-11">
                                    <div class="row destaquesBox">
                                        <div class="col-12 text-center destaquesImg">
                                            <img src="https://servicobom.com.br/images/icons/destaque_limpeza_emp_4.png">
                                        </div>
                                        <div class="col-12 mt-3 text-center destaquesBoxBottom">
                                            <p class="mb-5">Limpeza Empresarial Comum 4h</p>
                                            <a href="https://servicobom.com.br/mount/create/eyJpdiI6ImhpaGlPR0xRb2U1MndFNHNYMDhlOFE9PSIsInZhbHVlIjoia1ByYStHcVpESWRRWjRRT25jYmxzZz09IiwibWFjIjoiNTVlNmFmMDM2ZjY3OTdkOTU4NTlkYjRlOTcxNzA3Njk3MjM5Y2NmY2RmMGU2Y2MyN2JiOTY1ZDM5NGE5ZjM1MSJ9/eyJpdiI6IkVPcmxnYW41eFdvSFdJQTl6emtHZHc9PSIsInZhbHVlIjoibkFZdnBrUnZrK1U2TkpJSXJYWW5ndz09IiwibWFjIjoiYzIxMjA4ZjQwNzNiYWVhODkzY2IwMTc1ZjdhNjExMGI3ODViNjY4NjQ2OGFhNDY1Njk0OTE1MjI2NDM2NzAzZCJ9/eyJpdiI6Imx0U0RGcUl3RXVaRmtKMGdra3FWR2c9PSIsInZhbHVlIjoid0ViYkdyT2V6bWc0Mk5cL0RIR1FOSHc9PSIsIm1hYyI6IjJiZTU1NDM4ZjgyNzQzOWVkY2Y1OTFjMjRiNDBiMWZkNTU5ZjJmYTY3ZWFkNWZhMDM4MzU2Y2IyOGVkMDA4Y2YifQ==" class="btn mb-3"> CONTRATAR </a>
                                        </div>
                                    </div>
                                </div>
                                                            <div class="col-11">
                                    <div class="row destaquesBox">
                                        <div class="col-12 text-center destaquesImg">
                                            <img src="https://servicobom.com.br/images/icons/destaque_limpeza_res_8.png">
                                        </div>
                                        <div class="col-12 mt-3 text-center destaquesBoxBottom">
                                            <p class="mb-5">Limpeza Empresarial Pesada 8h</p>
                                            <a href="https://servicobom.com.br/mount/create/eyJpdiI6ImhFeWFaNWtraUJ0ZnVHYm9oYktmdWc9PSIsInZhbHVlIjoiOGJLWlBaR1V3N0R0ZTE2a2lVTVwvTlE9PSIsIm1hYyI6ImVkZGNkOTE3MjQzMGRhN2UzMGE3NTM5OGY3MmQ4MTk2ODYwYjVhYTJmMDIwMDY0OTRkMzgxZjhkNTIyNGI1MDMifQ==/eyJpdiI6IjBkSHlWODR3WUVIY3RZelRjMlBrb0E9PSIsInZhbHVlIjoiXC95T2pCdWVWeitQaXVSbTVMQUc3enc9PSIsIm1hYyI6IjM4NzJmMjAwMmE2Mzg2Y2M1NzgyMWFmMzMwOTNhZjdmZWE4YThjYTY0ZWUyMmZiYWEyYWNiNTNkNzI3NmUzOGIifQ==/eyJpdiI6IjVodFpoaGx2VUNyeHRWdnBsWE0zU3c9PSIsInZhbHVlIjoiTWJzeDdwNTNhQUwzeFJiblJleFRxdz09IiwibWFjIjoiMWFiZjI5NDk3YjliNTllNDJhN2Q1NTM2ZDk5MDVhM2VmOGUyN2UxOTA5MWNmYmY4YzEzNDBjYWUyZGQ0MTJiZSJ9" class="btn mb-3"> CONTRATAR </a>
                                        </div>
                                    </div>
                                </div>
                                                            <div class="col-11">
                                    <div class="row destaquesBox">
                                        <div class="col-12 text-center destaquesImg">
                                            <img src="https://servicobom.com.br/images/icons/destaque_passar_roupas_2.png">
                                        </div>
                                        <div class="col-12 mt-3 text-center destaquesBoxBottom">
                                            <p class="mb-5">Passar Roupa 2h</p>
                                            <a href="https://servicobom.com.br/mount/create/eyJpdiI6IjdoZ1wvUERoUkJrcHFrcXphdittYkhBPT0iLCJ2YWx1ZSI6IklydHdCMEk1UUJPNGJlaU1TcDFOTVE9PSIsIm1hYyI6Ijg2YzA5YzUyNDVmNGJhMDdhOWNjODUxNGFjNjhhNmJmM2EwNjQ1Mzc5ZGUxZTcwYjY4OWI0MTlmNjk3MjNiYjkifQ==/eyJpdiI6IkRcL1duaWdNbDRsTm1hQnlsWGtjTUlBPT0iLCJ2YWx1ZSI6IjMyWktMNk9Fd2k5N3JwQmFNelh6Znc9PSIsIm1hYyI6ImEwOGY3NDc3MmU2ZTE0NDA4NTc0ZWU1ZGUxNGQ5NTgyZjE2OWM4OGQxNGExMTJhNTFlZWIxNGYwZTYzMjY2MWUifQ==/eyJpdiI6Ikl2em5jUGhtWlFtK1BBU1wvaU1BWnV3PT0iLCJ2YWx1ZSI6ImlETSt2c1ppQlFmOVBLbks0TU9nMGc9PSIsIm1hYyI6IjAwNjNjNDliMWZiYzhiYTk0YjNlZmZmNDc5ZTU0YWVkNzNkYWZhOWVmMjk5OTNhMGQzYjUxODhmNzU2Yjc1ZDcifQ==" class="btn mb-3"> CONTRATAR </a>
                                        </div>
                                    </div>
                                </div>
                                                            <div class="col-11">
                                    <div class="row destaquesBox">
                                        <div class="col-12 text-center destaquesImg">
                                            <img src="https://servicobom.com.br/images/icons/destaque_passar_roupas_6.png">
                                        </div>
                                        <div class="col-12 mt-3 text-center destaquesBoxBottom">
                                            <p class="mb-5">Passar Roupa 6h</p>
                                            <a href="https://servicobom.com.br/mount/create/eyJpdiI6IjBYbWlsUlM1TU0zY01nd0NtZERXRmc9PSIsInZhbHVlIjoiQ1I3QVJvYVBsU3ExRGtWYWZ0S3lRQT09IiwibWFjIjoiM2Q3MDg2NjFmM2Y5NTZkZTUxNTE4M2EzOGQwYTBkODI2ODM3ZWM4NjA5MDlhZmMxZjE3MWQ1ZTk5MTBlZmJhMCJ9/eyJpdiI6InlIcUt2N042aGQ0VGhob25KR28zNXc9PSIsInZhbHVlIjoiVFhHZnZJbG02aWh1Sm0wbkZwckxGUT09IiwibWFjIjoiOTNhMmI4NDExZjk4NjU0NWZiZmEzZjQ3Yjc2YTJiMzQzNzI3ZTM5Y2FkMTFiMTk3ODY0OTY2NDNlOGY1MjQ2NyJ9/eyJpdiI6IkJaOFFyS2p6SjZ5eUNoVlM0bjNaV0E9PSIsInZhbHVlIjoibjNIOXEyWW5xakROQVg2aVprNnRnZz09IiwibWFjIjoiYTAyZjM4OTZkNGU3NjBiNTgzYWIzNzY1Y2E0Yjk1MzRlZjBjZDU1MWZjMjg1MzZjZmRlNmJlMjlmMDA0OGMwMCJ9" class="btn mb-3"> CONTRATAR </a>
                                        </div>
                                    </div>
                                </div>
                                                            <div class="col-11">
                                    <div class="row destaquesBox">
                                        <div class="col-12 text-center destaquesImg">
                                            <img src="https://servicobom.com.br/images/icons/destaque_limpeza_emp_8.png">
                                        </div>
                                        <div class="col-12 mt-3 text-center destaquesBoxBottom">
                                            <p class="mb-5">Limpeza Empresarial Comum 8h</p>
                                            <a href="https://servicobom.com.br/mount/create/eyJpdiI6Imp0a1c5SmJhVjV4VmMraFhEcGZGQXc9PSIsInZhbHVlIjoiV293QVR3d1diWGdMVko3NElWMnZCZz09IiwibWFjIjoiNzA3NDBjZWFmZTI0ZTE0YmNmNWMwNTQ5NmQ3NDljMGFlMGFhYmJiZDZmMTBlMmE3ZmRjNzNlNDUxNzMwOTVlMSJ9/eyJpdiI6InRVTXM3XC92ZzV1dUNcL1ZHZWliYjFXUT09IiwidmFsdWUiOiJtUytla01jcFwvRU5VT2V4YjBVQVFDdz09IiwibWFjIjoiN2QyZDdkZWQ0YTNmZGQzZjE0ZGIxNmZhMTkyMDMxZjNkMDcxMzZhMTI0N2I5YTdjYTljMmUzMGNlYmJjNGNjMCJ9/eyJpdiI6IkhDQnE2TE9WZVhuRStsejJnUmtDc3c9PSIsInZhbHVlIjoibmFBWEVFMEozSTJENFlKaE5CYzh0Zz09IiwibWFjIjoiMDI3MjZjNzNjY2FlM2RlZDJmMzFlYTYwN2JmNDg1ZTllYzE4OTM2ZGE4YmY1ZjRkMDg0YjNmNGQzOWMzOGRjNiJ9" class="btn mb-3"> CONTRATAR </a>
                                        </div>
                                    </div>
                                </div>
                                                            <div class="col-11">
                                    <div class="row destaquesBox">
                                        <div class="col-12 text-center destaquesImg">
                                            <img src="https://servicobom.com.br/images/icons/destaque_limpeza_res_obra.png">
                                        </div>
                                        <div class="col-12 mt-3 text-center destaquesBoxBottom">
                                            <p class="mb-5">Limpeza Residencial Pós-Obra 8h 3 Profissionais</p>
                                            <a href="https://servicobom.com.br/mount/create/eyJpdiI6ImhpQkFmZXF1OVkwSGhkaGdNOU5POUE9PSIsInZhbHVlIjoibXlOU2MwUXc3SFJtd3VvZ0FcLzU1OUE9PSIsIm1hYyI6IjMzMDIwMjUxZGIwYjQzNWNhZDU0NTIzODUzYzgyNjdlNTg1ODQ2NmZhZTQ0MGU1ZWM2MDZjN2Q0NzgxYjg5YWYifQ==/eyJpdiI6IkVvTTJzbnMrbENUUW5hN3ZGVWpyWnc9PSIsInZhbHVlIjoib3dPdjQ1NUJIbHBCZ2JMUXZGenhZQT09IiwibWFjIjoiMmIzYWMyYTkxNGY5YmYwNGExZTllY2Q0NmVkNzZlNTg2NjBkMjgwMDE3YjliMWQ0MDQ1MTMwNjNmOWI0ZDQ1MSJ9/eyJpdiI6IjJTZjB5KzZtNk1ZeWpoNEVGc3hvNFE9PSIsInZhbHVlIjoiRUJNNjhJYXRXZlFGeXZ0ZjVkXC9tTkE9PSIsIm1hYyI6IjI3NzRiYjY2NDA2MDllMzg4MTJkNzBiYzZhYWIyMTE0MTA4MTVkMTc5N2Q2YzI5NjVjZTlkN2JjMGQ1MjBhMjkifQ==" class="btn mb-3"> CONTRATAR </a>
                                        </div>
                                    </div>
                                </div>
                                                                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <div class="row justify-content-center mt-md-1 mb-5">
            <a href="https://servicobom.com.br/servicos" class="btnOutrosServicos"> OUTROS SERVIÇOS </a>
        </div>

        <div class="row justify-content-center my-5 pt-3">
            <p class="testimonialsTitle">O QUE ESTÃO FALANDO</p>
        </div>

        <div class="row justify-content-center my-3">
    <div class="col-12">
        <div class="container">
            <div class="slickTestimonials text-center">
                <div class="col-11">
                    <div class="row py-4 testimonialsBox">
                        <div class="col-3 foto testimonialsFoto">
                            &nbsp;
                        </div>
                        <div class="col-9 text-left">
                            <p class="testimonialsName">Alexandre Araújo</p>
                            <p class="testimonialsText">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porta dictum gravida.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-11">
                    <div class="row py-4 testimonialsBox">
                        <div class="col-3 foto testimonialsFoto">
                            &nbsp;
                        </div>
                        <div class="col-9 text-left">
                            <p class="testimonialsName">Blog da Lari</p>
                            <p class="testimonialsText">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porta dictum gravida.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-11">
                    <div class="row py-4 testimonialsBox">
                        <div class="col-3 foto testimonialsFoto">
                            &nbsp;
                        </div>
                        <div class="col-9 text-left">
                            <p class="testimonialsName">Bruno Porttes</p>
                            <p class="testimonialsText">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porta dictum gravida.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    </main>

        <footer class="py-4 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md mb-5 mb-md-0">
                <div class="row">
                    <div class="col-12 mb-3 footerTitle">
                        REDES SOCIAIS
                    </div>

                    <div class="row col-10">
                        <div class="col-2 mx-auto footerIconsBorder">
                            <a href="https://www.facebook.com/servicobom.com.br" target="_blank"><i class="fab fa-facebook"></i></a>
                        </div>
                        <div class="col-2 mx-auto footerIconsBorder">
                            <a href="https://www.instagram.com/servicobom.com.br" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="col-2 mx-auto footerIconsBorder">
                            <a href="https://twitter.com/servicobom_br" target="_blank"><i class="fab fa-twitter"></i></a>
                        </div>
                        <div class="col-2 mx-auto footerIconsBorder">
                            <i class="fab fa-youtube"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md mb-5 mb-md-0">
                <div class="row">
                    <div class="col-12 mb-3 footerTitle">
                        MAPA DO SITE
                    </div>
                    <div class="col-12 footerLinks">
                                                    <a href="https://servicobom.com.br/login"> Conta </a>
                                            </div>
                    <div class="col-12 footerLinks">
                        <a href="https://servicobom.com.br/servicos">Serviços</a>
                    </div>
                    <div class="col-12 footerLinks">
                        <a href="https://servicobom.com.br/trabalhe">Trabalhe Conosco</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md mb-5 mb-md-0">
                <div class="row">
                    <div class="col-12 mb-3 footerTitle">
                        AJUDA
                    </div>
                    <div class="col-12 footerLinks">
                        <a href="https://servicobom.com.br/politicasdeprivacidade">Políticas de privacidade</a>
                    </div>
                    <div class="col-12 footerLinks">
                        <a href="https://servicobom.com.br/termosdeuso">Termos e condições</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md">
                <div class="row">
                    <div class="col-12 mb-3 footerTitle">
                        CONTATOS
                    </div>
                    <div class="col-12 mb-2 footerIcons footerLinks footerText">
                        <a href="https://servicobom.com.br/contato"><i class="fas fa-envelope"></i> contato@servicobom.com.br</a>
                    </div>
                    <div class="col-12 mb-2 footerIcons footerLinks footerText">
                        <a href="http://api.whatsapp.com/send?1=pt_BR&phone=5527997974906" target="_blank"><i class="fab fa-whatsapp"></i> Whatsapp</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md">
                <div class="col-12 mb-3 footerTitle">
                    <a href="https://servicobom.com.br">
                        <img src="https://servicobom.com.br/images/logobranca.png" style="width: 100%; max-width: 100%; height: auto;">
                    </a>
                </div>
                <div class="row">
                    <div class="col-12 footerText">
                        Avenida Ouro Preto, 917<br />
                        Linhares/ES | CEP 29903-041<br />
                        CNPJ: 33.561.124/0001-03
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>    </div>

    <a id="link_busca" href="" style="display: none;"></a>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

    <script type="text/javascript">
        $(function () {
            /** SHOW DROPDOWN HOVER **/
            $('ul.navbar-nav li.dropdown').hover(function() {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
            }, function() {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
            });

            /** EXPAND SEARCH **/
            jQuery.ui.autocomplete.prototype._resizeMenu = function () {
                var ul = this.menu.element;
                ul.outerWidth(this.element.outerWidth());
            }

            $("#iptSearch").hover(function() {
                $(this).attr("ishoveredin",1);
                $('#navLeft').animate().css('display', 'none');
                $('#navRight').animate().removeClass('ml-auto').addClass('col-10');
                $('#navLiRight').animate().removeClass('col-7').addClass('col-12');
            }, function() {
                $(this).attr("ishoveredin",0);
                if( $(this).attr("isfocusedin")!=1) {
                    $('#navLeft').animate().css('display', '');
                    $('#navRight').animate().removeClass('col-10').addClass('ml-auto');
                    $('#navLiRight').animate().removeClass('col-12').addClass('col-7');
                }
            });

            $("#iptSearch").focus(function() {
                $(this).attr("isfocusedin",1);
                $('#navLeft').animate().css('display', 'none');
                $('#navRight').animate().removeClass('ml-auto').addClass('col-10');
                $('#navLiRight').animate().removeClass('col-7').addClass('col-12');
            });

            $("#iptSearch").blur(function() {
                $(this).attr("isfocusedin",0);
                $('#navLeft').animate().css('display', '');
                $('#navRight').animate().removeClass('col-10').addClass('ml-auto');
                $('#navLiRight').animate().removeClass('col-12').addClass('col-7');
            });

            $.widget( "custom.catcomplete", $.ui.autocomplete, {
                _create: function() {
                    this._super();
                    this.widget().menu( "option", "items", "> :not(.ui-autocomplete-category)" );
                },
                _renderMenu: function( ul, items ) {
                    var that = this,
                        currentCategory = "";
                    $.each( items, function( index, item ) {
                        var li;
                        if ( item.category != currentCategory ) {
                            ul.append( "<li class='ui-autocomplete-category'>" + item.category + "</li>" );
                            currentCategory = item.category;
                        }
                        li = that._renderItemData( ul, item );
                        if ( item.category ) {
                            li.attr( "aria-label", item.category + " : " + item.label );
                            li.children().attr( "link-busca", item.link );
                        }
                    });
                }
            });

            $.ajax({
                url: "https://servicobom.com.br/autocomplete",
                type: "post",
                dataType: "json",
                data: "_token=" + $('meta[name="csrf-token"]').attr('content'),
                success: function (result) {
                    $('body').removeClass('loading');

                    $( "#iptSearch" ).catcomplete({
                        delay: 0,
                        source: result
                    });
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    Swal.fire({
                        position: 'top-end',
                        type: "error",
                        title: "Houve um erro no sistema, atualize a página por favor. Desculpe o transtorno!",
                        showConfirmButton: false,
                        timer: 2000
                    });
                }
            });

            $(document).on("click", ".ui-menu-item-wrapper", function () {
                $("#link_busca").prop("href", $(this).attr("link-busca"));
                $("#link_busca")[0].click();
            });

            /** POPOVER **/
            $('[data-toggle="popover"]').popover();

            /** DATEPICKER **/
            $( "#datepicker" ).datepicker({
                dateFormat: 'dd/mm/yy',
                dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
                dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
                dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
                monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
                monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
                nextText: 'Próximo',
                prevText: 'Anterior'
            });

            /** MENSAGENS E ERROS **/
            
            
            
            
            
            
            /** BUSCA CEP **/
            $(document).on('keyup paste', '#zipcode', function () {
                if ($(this).val().length === 8) {
                    $.ajax({
                        url: "https://servicobom.com.br/buscacep",
                        type: "post",
                        data: "_token=" + $('meta[name="csrf-token"]').attr('content') + "&cep=" + $(this).val(),
                        dataType: "json",
                        success: function (result) {
                            $('body').removeClass('loading');

                            $('#street').val(result[0].tipo_logradouro + ' ' + result[0].logradouro);
                            $('#neighborhood').val(result[0].bairro);
                            $('#city').val(result[0].cidade);
                            $('#state').val(result[0].uf);
                        },
                        error: function (XMLHttpRequest, textStatus, errorThrown) {
                            Swal.fire({
                                position: 'top-end',
                                type: "error",
                                title: "Houve um erro no sistema, atualize a página por favor. Desculpe o transtorno!",
                                showConfirmButton: false,
                                timer: 2000
                            });
                        }
                    });
                }
            });

            /** BUSCA ENDEREÇO **/
            $('#btnBuscaEndereco').click(function () {
                $.ajax({
                    url: "https://viacep.com.br/ws/" + $('#modal_state').val() + "/" + $('#modal_city').val() + "/" + $('#modal_street').val() + "/json/",
                    type: "get",
                    dataType: "json",
                    success: function (result) {
                        $('#resultBuscaEndereco').html("");
                        $.each(result, function (idx, val) {
                            $('#resultBuscaEndereco').append('' +
                                '<div class="col-4 pageSubTitle">' +
                                '   <p><b>CEP:</b> ' + val.cep + ' <button type="button" class="btn btn-sm btn-outline-primary setEndCep float-right mr-5" data-cep="' + val.cep + '"> Usar </button></p>' +
                                '   <p><b>Logradouro:</b> ' + val.logradouro + ' ' + val.complemento + '</p>' +
                                '   <p><b>Bairro:</b> ' + val.bairro + '</p>' +
                                '   <p><b>Cidade:</b> ' + val.localidade + '</p>' +
                                '   <p><b>UF:</b> ' + val.uf + '</p>' +
                                '</div>'
                            );
                        });
                    },
                    error: function (XMLHttpRequest, textStatus, errorThrown) {
                        Swal.fire({
                            position: 'top-end',
                            type: "warning",
                            title: "Endereço não encontrado, verifique os dados digitados!",
                            showConfirmButton: false,
                            timer: 2000
                        });
                    }
                });
            });

            $(document).on('click', '.setEndCep', function () {
                $('#zipcode').val($(this).data('cep').replace('-', ''));
                $('#buscaEndModal').modal('hide');
                $('#zipcode').keyup();
            });

            /** COUNT CART **/
            window.countCart = function(type = 0, place = '') {
                $.ajax({
                    url: "https://servicobom.com.br/cart/count",
                    type: "post",
                    dataType: "json",
                    data: "_token=" + $('meta[name="csrf-token"]').attr('content'),
                    success: function (response) {
                        $('body').removeClass('loading');

                        $('#countCart').html(response);

                        if (type === 1)
                            $('#' + place).html(response);
                    },
                    error: function (XMLHttpRequest, textStatus, errorThrown) {
                        
                    }
                });
            };

                            $('#countCart').html("X");
            
            /* ERRORS */
            ps_errors = [];
            $.ajax({
                url: "https://servicobom.com.br/ps/get_errors",
                type: "post",
                dataType: "json",
                data: "_token=" + $('meta[name="csrf-token"]').attr('content'),
                success: function (result) {
                    $.each(result, function (idx, val) {
                        ps_errors[idx] = val;
                    });
                }
            });

            window.showErrors = function(exibirError, tipo=0) {
                var showErrors = "";

                if (tipo === 1) {
                    showErrors += exibirError + "<br />";
                } else {
                    $.each(exibirError, function (idx, val) {
                        if(typeof ps_errors[idx] === 'undefined') {
                            showErrors += idx + ": " + val + "<br />";
                        } else {
                            showErrors += idx + ": " + ps_errors[idx] + "<br />";
                        }
                    });
                }

                showErrors += "<br /> Favor corrigir o erros informados e tentar o cadastro novamente.";

                $('body').removeClass('loading');

                Swal.fire({
                    title: '<strong>ATENÇÃO</strong>',
                    type: 'error',
                    html: showErrors,
                    showCloseButton: true,
                    showCancelButton: false,
                    focusConfirm: false,
                });
            }
        });
    </script>

        <script type="text/javascript" src="https://servicobom.com.br/plugins/slick/slick.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.slickDestaques').slick({
                arrows: true,
                dots: false,
                infinite: true,
                speed: 300,
                slidesToShow: 3,
                slidesToScroll: 3,
                autoplay: true,
                autoplaySpeed: 4000,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });

            $('.slickTestimonials').slick({
                arrows: true,
                dots: false,
                infinite: true,
                speed: 300,
                slidesToShow: 2,
                slidesToScroll: 2,
                autoplay: true,
                autoplaySpeed: 4000,
                adaptiveHeight: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
        });
    </script>

    <script type="text/javascript" src="https://servicobom.com.br/plugins/loading-ajax/loading.js"></script>
</body>
</html>
