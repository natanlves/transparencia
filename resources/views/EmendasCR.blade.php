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
                    <a class="nav-link" href="/passagem">Passagem</a>
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
          
              <div>
                  <h2>ID: {{ $item['id'] }}</h2>
                  <p><strong>Data:</strong> {{ $item['data'] }}</p>
                  <p><strong>Objeto:</strong> {{ $item['fase'] }}</p>
                  <p><strong>Codigo Documento:</strong> {{ $item['codigoDocumento'] }}</p>
                  <p><strong>Codigo Documento Resumido:</strong> {{ $item['codigoDocumentoResumido'] }}</p>
                  <p><strong>Especie Tipo:</strong> {{ $item['especieTipo'] }}</p>
                  <p><strong>Tipo de Emenda:</strong> {{ $item['tipoEmenda'] }}</p>
                  <hr>
              </div>
          
          @endforeach

          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        </body>
    </html>
    