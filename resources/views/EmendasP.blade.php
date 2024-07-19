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
          <!--codigo começa aqui-->

          <form action="emendasParR">
            <!--query1-->
            <div class="p-5 bg-white">Código da Emenda 
              <input type="text" name="query1" placeholder="primeiro parametro"></div>
              
              <!--query2-->
            <div class="p-5 bg-white">Número da emenda
              <input type="text" name="query2" placeholder="segundo parametro"></div>
              
              <!--query3-->
            <div class="p-5 bg-white">Nome do Autor
              <input type="text" name="query3" placeholder="terceiro parametro"></div>
              
              <!--query4-->
            <div class="p-5 bg-white">Tipo de emenda 
              <input type="text" name="query4" placeholder="quarto parametro"></div>
              
              <!--query5-->
            <div class="p-5 bg-white">Ano 
              <input type="text" name="query5" placeholder="quinto parametro"></div>
              
              <!--query6-->
            <div class="p-5 bg-white">Código da função 
              <input type="text" name="query6" placeholder="sexto parametro"></div>
              
              <!--query7-->
            <div class="p-5 bg-white">Código da subfunção 
              <input type="text" name="query7" placeholder="setimo parametro"></div>
              
              <!--query8-->
            <div class="p-5 bg-white">Página consultada 
              <input type="text" name="query8" placeholder="oitavo parametro"></div>


          </form>


          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        
        </body>
    </html>