<?php

namespace App\Http\Middleware;

use Closure;

class BreadCrumbs
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $url = $_SERVER['REQUEST_URI'];
        $urls = explode('/', $url);
         
        //Хлебные крошки
        $crumbs = array();
 
        //На главной не показываем
        if (!empty($urls) && $url != '/')
        {
            foreach ($urls as $key => $value)
            {
                //Собираем url для каждого пункта цепочки
                $prev_urls = array();
                for ($i = 0; $i <= $key; $i++)
                {
                    $prev_urls[] = $urls[$i];
                }
 
                //собираем url для всех, кроме текущей страницы
                if ($key == count($urls) - 1) $crumbs[$key]['url'] = '';
                elseif (!empty($prev_urls)) $crumbs[$key]['url'] = count($prev_urls) > 1 ? implode('/', $prev_urls) : '/';
 
                //Прописываем название пункта, исходя из url
                switch ($value)
                {
                    case 'portfolio' :
                        $crumbs[$key]['text'] = 'Portfolio';
                        break;
                    case 'pricingbox' :
                        $crumbs[$key]['text'] = 'Price';
                        break;
                    case 'blog' :
                        $crumbs[$key]['text'] = 'Blog';
                        break;
                    case 'contact' :
                        $crumbs[$key]['text'] = 'Contact';
                        break;
                    default :
                        $crumbs[$key]['text'] = 'Home';
                        break;
                }
                 
                if ($key > 0) $crumbs[$key]['text'] = $crumbs[$key]['text'];
            }
        }
        $request->attributes->Add(['breadcrumbs' => $crumbs]);
        return $next($request);
    }
}
