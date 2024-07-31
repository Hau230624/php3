<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class isAmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->role == 1) {
            return $next($request);
        }

        // Nếu không có quyền admin, chuyển hướng về trang chủ với thông báo lỗi
        return redirect('/')->with('error','Bạn Không Có Quyền truy Cập Vào Trang Này.');
    }
}
