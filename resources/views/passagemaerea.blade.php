<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="/css/styles.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
            
        </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Sky Travel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" 
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>


                <!--items do navbar-->
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                      <a class="nav-link active" aria-current="page" href="/emendas">Login</a>
                      <a class="nav-link" href="#">Passagem</a>
                      <a class="nav-link" href="/passagem">Fale Conosco</a>
                    </div>
                  </div>
                  <!--barra de pesquisa-->
                  
                  <form class="d-flex">
                    <input class="form-control me-2" type="Search" placeholder="Pesquise aqui" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                  </form>
                </div>
              
            </nav>
        
            <div class="container">
              <div class="py-5 text-center">
                
                <h2>Compra de Passagem</h2>
                <p class="lead">Verifique se suas passagens e estão corretas e forneça os dados para prosseguir com a compra.</p>
              </div>
            
              <div class="row">
                <div class="col-md-4 order-md-2 mb-4">
                  <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                    <span class="badge badge-secondary badge-pill">3</span>
                  </h4>
                  <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                      <div>
                        <h6 class="my-0">Passagem 1</h6>
                        <small class="text-muted">Breve descrição</small>
                      </div>
                      <span class="text-muted">R$120</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                      <div>
                        <h6 class="my-0">Passagem 2</h6>
                        <small class="text-muted">Breve descrição</small>
                      </div>
                      <span class="text-muted">R$80</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                      <div>
                        <h6 class="my-0">Passagem 3</h6>
                        <small class="text-muted">Breve descrição</small>
                      </div>
                      <span class="text-muted">R$50</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between bg-light">
                      <div class="text-success">
                        <h6 class="my-0">Código promocional</h6>
                        <small>EXAMPLOCÓDIGO</small>
                      </div>
                      <span class="text-success">-R$50</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                      <span>Total (BRS)</span>
                      <strong>R$200</strong>
                    </li>
                  </ul>
            
                  <form class="card p-2">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Código de Desconto">
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary">Comprar</button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col-md-8 order-md-1">
                  <h4 class="mb-3">
                    Endereço de Cobrança</h4>
                  <form class="needs-validation" novalidate>
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <label for="firstName">Primeiro Nome</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                          Valid first name is required.
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="lastName">Ultimo Nome</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                          Valid last name is required.
                        </div>
                      </div>
                    </div>
            
                    <div class="mb-3">
                      <label for="username">Usuario</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">@</span>
                        </div>
                        <input type="text" class="form-control" id="username" placeholder="Username" required>
                        <div class="invalid-feedback" style="width: 100%;">
                          Your username is required.
                        </div>
                      </div>
                    </div>
            
                    <div class="mb-3">
                      <label for="email">Email <span class="text-muted">(Optional)</span></label>
                      <input type="email" class="form-control" id="email" placeholder="you@example.com">
                      <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                      </div>
                    </div>
            
                    <div class="mb-3">
                      <label for="address">Endereço</label>
                      <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                      <div class="invalid-feedback">
                        Please enter your shipping address.
                      </div>
                    </div>
            
                   
                    <div class="row">
                      <div class="col-md-5 mb-3">
                        <label for="country">País</label>
                        <select class="custom-select d-block w-100" id="country" required>
                          <option value="">Escolha...</option>
                          <option>United States</option>
                        </select>
                        <div class="invalid-feedback">
                          Please select a valid country.
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <label for="state">Estado</label>
                        <select class="custom-select d-block w-100" id="state" required>
                          <option value="">Escolha...</option>
                          <option>California</option>
                        </select>
                        <div class="invalid-feedback">
                          Please provide a valid state.
                        </div>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="zip">CEP</label>
                        <input type="text" class="form-control" id="zip" placeholder="" required>
                        <div class="invalid-feedback">
                          Zip code required.
                        </div>
                      </div>
                    </div>
                    <hr class="mb-4">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="same-address">
                      <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="save-info">
                      <label class="custom-control-label" for="save-info">Save this information for next time</label>
                    </div>
                    <hr class="mb-4">
            
                    <h4 class="mb-3">Payment</h4>
            
                    <div class="d-block my-3">
                      <div class="custom-control custom-radio">
                        <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                        <label class="custom-control-label" for="credit">Credit card</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                        <label class="custom-control-label" for="debit">Debit card</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                        <label class="custom-control-label" for="paypal">PayPal</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <label for="cc-name">Name on card</label>
                        <input type="text" class="form-control" id="cc-name" placeholder="" required>
                        <small class="text-muted">Full name as displayed on card</small>
                        <div class="invalid-feedback">
                          Name on card is required
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="cc-number">Credit card number</label>
                        <input type="text" class="form-control" id="cc-number" placeholder="" required>
                        <div class="invalid-feedback">
                          Credit card number is required
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="cc-expiration">Expiration</label>
                        <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                        <div class="invalid-feedback">
                          Expiration date required
                        </div>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="cc-cvv">CVV</label>
                        <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                        <div class="invalid-feedback">
                          Security code required
                        </div>
                      </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
                  </form>
                </div>
              </div>
            
              <footer class="my-5 pt-5 text-muted text-center text-small">
                <p class="mb-1">© 2021 - 2045 Company Name</p>
                <ul class="list-inline">
                  <li class="list-inline-item"><a href="#">Privacy</a></li>
                  <li class="list-inline-item"><a href="#">Terms</a></li>
                  <li class="list-inline-item"><a href="#">Support</a></li>
                </ul>
              </footer>
            </div>
            
   
        
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>


</html>


