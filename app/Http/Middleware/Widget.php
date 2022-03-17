<?php

namespace App\Http\Middleware;

use Closure;
use App\Widget;
use Session;
use Config;

class Widget
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        if (!method_exists($response, 'content')):
            return $response;
        endif;

        $content=null;
        $widgets = Widget::all();
        foreach ($widgets as $key => $value) {
            $content = str_replace($value->alias, $value->content, $content);
            foreach ($widgets as $value2) {
                $content = str_replace($value2->alias, $value2->content, $content);
                foreach ($widgets as $value3) {
                    $content = str_replace($value3->alias, $value3->content, $content);
                }
            }
            $response->setContent($content);
        }

        return $response;
    }
}
