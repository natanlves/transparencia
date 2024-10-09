app/Http/Middleware/ArmazenaPesquisa.php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\Historico;

class ArmazenaPesquisa
{
    public function handle($request, Closure $next)
    {
        $query = $request->getQueryString(); // Pega a query da URL
        $pageUrl = $request->fullUrl(); // URL completa da página

        if ($query && Auth::check()) {
            // Salva a pesquisa no banco de dados
            Historico::create([
                'usuario_id' => Auth::id(),
                'consulta' => $query,
                'page_url' => $pageUrl,
            ]);
        }

        return $next($request);
    }
}
