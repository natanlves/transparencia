// app/Http/Kernel.php

protected $routeMiddleware = [
    'auth' => \App\Http\Middleware\Authenticate::class,
    'pesquisa' => \App\Http\Middleware\ArmazenaPesquisa::class, // Adicione esta linha
];

