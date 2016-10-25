<?php

namespace App\Http\Middleware;

use Closure;

/**
 * 场景 有一个活动，在指定日期后开始，如果活动没有开始，只能访问宣传页面
 * Class Activity
 * @package App\Http\Middleware
 */
class Activity
{

//    public function handle($request, Closure $next)
//    {
//        // 运行动作 前置中间件
//        if(time() < strtotime('2016-10-26')){
//            return redirect('activity0');
//        }
//        return $next($request);
//    }

    public function handle($request, Closure $next)
    {
        $response = $next($request);
        // 运行动作 后置中间件
        if(time() < strtotime('2016-10-25')){
            return redirect('activity0');
        }
        return $response;
    }
}