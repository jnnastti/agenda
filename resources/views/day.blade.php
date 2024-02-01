@vite(['resources/css/app.scss', 'resources/js/app.js'])
<!
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Dia {{ date('d/m') }} | Início </title>
    </head>
    <body class="container">
        <h1> Olá, {{ $usuario }}! </h1>

        <section class="row">
            <div class="col-md-12 d-flex justify-content-between">
                <button class="btn btn-primary"> Novo compromisso </button>

                <div class="m-lg-2">
                    <button class="btn btn-outline-secondary"> < </button>
                    <button class="btn btn-outline-secondary"> > </button>
                </div>
            </div>

        </section>

        <section class="container">
            <div class="row mt-5">
                <!-- Coluna à direita para #para-hoje -->
                <div id="para-hoje" class="col-md-4 text-right">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="text-primary mb-0">Para hoje</h3>
                        <button class="btn btn-sm btn-outline-primary">+</button>
                    </div>
                    <!-- Outro conteúdo de #para-hoje aqui -->
                </div>

                <!-- Coluna centralizada para #humor-dia -->
                <div id="humor-dia" class="col-md-4 text-center">
                    <h3 class="text-primary">Humor do dia</h3>


                    <h3 class="text-primary">Água</h3>
                    <!-- Outro conteúdo de #humor-dia aqui -->
                </div>

                <!-- Coluna à direita para #alimentacao-dia -->
                <div id="alimentacao-dia" class="col-md-4 text-right">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="text-primary mb-0">Alimentação do dia</h3>
                        <button class="btn btn-sm btn-outline-primary">+</button>
                    </div>
                    <!-- Outro conteúdo de #alimentacao-dia aqui -->
                </div>
            </div>
        </section>


    </body>
</html>
