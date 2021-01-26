<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">

    <title>TAB</title>
</head>
<header>
    <div id="menu">
        <ul>
            <li><a class="logo" href="../">Logo</a></li>
        </ul>
    </div>
</header>

<body>
    <div class="card border mt-3" style="max-width: 450px;">
        <div class="card-body">
            <ul class="nav nav-tabs nav-justified" style="width: 100%" id="myTab" role="tablist">
                <!-- Recibir tab -->
                <li class="nav-item" style="width: 50%" role="presentation">
                    <a class="nav-link active" id="get-tab" data-bs-toggle="tab" href="#get" role="tab"
                        aria-controls="get" aria-selected="true">Recibir</a>
                </li>
                <!-- Enviar tab -->
                <li class="nav-item" style="width: 50%" role="presentation">
                    <a class="nav-link text-center" id="send-tab" data-bs-toggle="tab" href="#send" role="tab"
                        aria-controls="send" aria-selected="false">Enviar</a>
                </li>
            </ul>
            <!-- Fin Tab Principal -->

            <div class="tab-content mt-2" id="myTabContentPrincipal">
                <!-- Inicio Contenido Tab Recibir -->
                <div class="tab-pane fade show active" style="width: 100%" id="get" role="tabpanel"
                    aria-labelledby="get-tab">
                    <ul class="nav nav-pills nav-justified  mb-3" style="width: 100%" id="pills-get-tab" role="tablist">
                        <li class="nav-item" role="presentation" style="width: 20%">
                            <a class="nav-link active" id="pills-one-tab" data-bs-toggle="pill" href="#pills-one"
                                role="tab" aria-controls="pills-one" aria-selected="true">1</a>
                        </li>
                        <li class="nav-item" role="presentation" style="width: 20%">
                            <a class="nav-link text-center" id="pills-two-tab" data-bs-toggle="pill" href="#pills-two"
                                role="tab" aria-controls="pills-two" aria-selected="false">2</a>
                        </li>
                        <li class="nav-item" role="presentation" style="width: 20%">
                            <a class="nav-link text-center" id="pills-three-tab" data-bs-toggle="pill"
                                href="#pills-three" role="tab" aria-control-tab="pills-three"
                                aria-selected="false">3</a>
                        </li>
                        <li class="nav-item" role="presentation" style="width: 20%">
                            <a class="nav-link text-center" id="pills-four-tab" data-bs-toggle="pill" href="#pills-four"
                                role="tab" aria-controls="pills-four" aria-selected="false">4</a>
                        </li>
                        <li class="nav-item" role="presentation" style="width: 20%">
                            <a class="nav-link text-center" id="pills-five-tab" data-bs-toggle="pill" href="#pills-five"
                                role="tab" aria-controls="pills-five" aria-selected="false">5</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent-get">
                        <div class="tab-pane fade show active" id="pills-one" role="tabpanel"
                            aria-labelledby="pills-one-tab"><textarea style="width: 100%; height: 100%;" name=""
                                id="one" cols="30" rows="10"readonly>Texto 1</textarea>
                            <div class="d-grid gap-2">
                                <button class="btn btn-info" onclick="copyTextarea('one')" type="button">Recibir</button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-two" role="tabpanel" aria-labelledby="pills-tow-tab">
                            <textarea name="" id="two" cols="30" rows="10"
                                style="width: 100%; height: 100%;"readonly>Texto 2</textarea>
                            <div class="d-grid gap-2">
                                <button class="btn btn-info" onclick="copyTextarea('two')" type="button">Recibir</button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-three" role="tabpanel" aria-labelledby="pills-three-tab">
                            <textarea name="" id="three" cols="30" rows="10"
                                style="width: 100%; height: 100%;"readonly>Texto 3</textarea>
                            <div class="d-grid gap-2">
                                <button class="btn btn-info" onclick="copyTextarea('three')"
                                    type="button">Recibir</button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-four" role="tabpanel" aria-labelledby="pills-four-tab">
                            <textarea name="" id="four" cols="30" rows="10"
                                style="width: 100%; height: 100%;"readonly>Texto 4</textarea>
                            <div class="d-grid gap-2">
                                <button class="btn btn-info" onclick="copyTextarea('four')"
                                    type="button">Recibir</button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-five" role="tabpanel" aria-labelledby="pills-five-tab">
                            <textarea name="" id="five" cols="30" rows="10"
                                style="width: 100%; height: 100%;"readonly>Texto 5</textarea>
                            <div class="d-grid gap-2">
                                <button class="btn btn-info" onclick="copyTextarea('five')"
                                    type="button">Recibir</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin Contenido Tab Recibir -->
                <!-- Inicio Contenido Tab Enviar -->
                <div class="tab-pane fade" style="width: 100%" id="send" role="tabpanel" aria-labelledby="get-tab">
                    <div class="container">
                        <ul class="nav nav-pills nav-justified  mb-3" style="width: 100%" id="pills-send-tab"
                            role="tablist">
                            <li class="nav-item" role="presentation" style="width: 20%">
                                <a class="nav-link active" id="pills-six-tab" data-bs-toggle="pill" href="#pills-six"
                                    role="tab" aria-controls="pills-six" aria-selected="true">6</a>
                            </li>
                            <li class="nav-item" role="presentation" style="width: 20%">
                                <a class="nav-link text-center" id="pills-seven-tab" data-bs-toggle="pill"
                                    href="#pills-seven" role="tab" aria-controls="pills-seven"
                                    aria-selected="false">7</a>
                            </li>
                            <li class="nav-item" role="presentation" style="width: 20%">
                                <a class="nav-link text-center" id="pills-eight-tab" data-bs-toggle="pill"
                                    href="#pills-eight" role="tab" aria-controls="pills-eight"
                                    aria-selected="false">8</a>
                            </li>
                            <li class="nav-item" role="presentation" style="width: 20%">
                                <a class="nav-link text-center" id="pills-nine-tab" data-bs-toggle="pill"
                                    href="#pills-nine" role="tab" aria-controls="pills-nine" aria-selected="false">9</a>
                            </li>
                            <li class="nav-item" role="presentation" style="width: 20%">
                                <a class="nav-link text-center" id="pills-ten-tab" data-bs-toggle="pill"
                                    href="#pills-ten" role="tab" aria-controls="pills-ten" aria-selected="false">10</a>
                            </li>
                        </ul>
                        <div>
                            <div class="tab-content" id="pills-tabContent-get">
                                <div class="tab-pane fade show active" id="pills-six" role="tabpanel"
                                    aria-labelledby="pills-six-tab"><textarea style="width: 100%; height: 100%;" name=""
                                        id="six" cols="30" rows="10"readonly> Texto 6</textarea>
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-info" onclick="copyTextarea('six')"
                                            type="button">Enviar</button>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-seven" role="tabpanel"
                                    aria-labelledby="pills-seven-tab">
                                    <textarea name="" id="seven" cols="30" rows="10"
                                        style="width: 100%; height: 100%;"readonly>Texto 7</textarea>
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-info" onclick="copyTextarea('seven')"
                                            type="button">Enviar</button>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-eight" role="tabpanel"
                                    aria-labelledby="pills-eight-tab">
                                    <textarea name="" id="eight" cols="30" rows="10"
                                        style="width: 100%; height: 100%;"readonly>Texto 8</textarea>
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-info" onclick="copyTextarea('eight')"
                                            type="button">Enviar</button>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-nine" role="tabpanel"
                                    aria-labelledby="pills-nine-tab">
                                    <textarea name="" id="nine" cols="30" rows="10"
                                        style="width: 100%; height: 100%;" readonly>texto 9</textarea>>
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-info" onclick="copyTextarea('nine')"
                                            type="button">Enviar</button>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-ten" role="tabpanel"
                                    aria-labelledby="pills-ten-tab">
                                    <textarea name="" id="ten" cols="30" rows="10"
                                        style="width: 100%; height: 100%;" readonly>texto 10</textarea>
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-info" onclick="copyTextarea('ten')"
                                            type="button">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fin Contenido Tab Enviar -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="js/index.js"></script>
</body>

</html>