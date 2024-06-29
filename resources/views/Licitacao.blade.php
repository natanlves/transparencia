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
          <pre>{{ json_encode($Licitacao, JSON_PRETTY_PRINT) }}</pre>
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
                    


                
           
           

           
            <!-- colunas de licitas-->
            <section id=intro>
              <div class="col-sm-4 col-lg-6">
                <div class="p-5 bg-white"></div>
            </div> 
              <div class="col-sm-4 col-lg-6">
                <div class="p-5 bg-dark text-light">licitas</div>
            </div>

            <!-- data inicial-->
            <form action="/licitacoes" method="GET">

            <div class="col-sm-4 col-lg-6">
              <div class="p-5 bg-white">Data de abertura inicial (DD/MM/AAAA) 
                <input type="text" name="query1" placeholder="Enter your first search query"></div>
            </div> 
            
            
            <!-- data final-->

            <div class="col-sm-4 col-lg-6">
              <div class="p-5 bg-dark text-light">Data de abertura final (DD/MM/AAAA)
                <input type="text" name="query2" placeholder="Enter your second search query"></div>
            </div> 
            

            <!-- SIAFI -->

            <div class="col-sm-4 col-lg-6">
              <div class="p-5 bg-white">Código do Órgão (SIAFI) 
                <input type="text" name="query3" placeholder="Enter your third search query" ></div>
              
            </div> 
            

            <button type="button" class="btn btn-warning">pesquisar</button>

            </form>
              @if(isset($licitacoes))
              <h2>Results</h2>
              <pre>{{ json_encode($licitacoes, JSON_PRETTY_PRINT) }}</pre>
              @else
              <p>No data available</p>
              @endif

            </section>

            
            
            
            
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        </body>
    </html>

