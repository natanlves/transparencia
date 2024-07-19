<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="/css/styles.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

            <title>Transparencia</title>
        </head>        
        <body>
          
                 <!--barra de navegação-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <!--navbar-->  
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Transparencia site</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" 
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                
                <!--items do navbar-->
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="/emendas">Emendas</a>
                    <a class="nav-link" href="/licitacaores">res</a>
                    <a class="nav-link" href="/licitacao">Licitações</a>
                  </div>
                </div>
                <!--barra de pesquisa-->
                
                <form class="d-flex">
                  <input class="form-control me-2" type="Search" placeholder="Pesquise aqui" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                </form>
              </div>
            
          </nav>


          @foreach ($data as $item)
          @if (isset($item['id']))
              <?php
              $id = $item['id'];
              $licitacao = $item['licitacao'] ?? null;
              $numero = $licitacao['numero'] ?? 'N/A';
              $objeto = $licitacao['objeto'] ?? 'N/A';
              $numeroProcesso = $licitacao['numeroProcesso'] ?? 'N/A';
              $contatoResponsavel = $licitacao['contatoResponsavel'] ?? 'não definido';
              ?>
              <div>
                  <h2>ID: {{ $id }}</h2>
                  <p><strong>Número da Licitação:</strong> {{ $numero }}</p>
                  <p><strong>Objeto:</strong> {{ $objeto }}</p>
                  <p><strong>Número do Processo:</strong> {{ $numeroProcesso }}</p>
                  <p><strong>Contato Responsável:</strong> {{ $contatoResponsavel }}</p>
                  <hr>
              </div>
          @endif
          @endforeach



          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        
        </body>
    </html>