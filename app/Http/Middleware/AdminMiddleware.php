<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
class AdminMiddleware
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */

    //middle ware nay lay duoc trang thai xem ngta co login hay chua, bangcach cach cau truc nay
    //sau buoc nay tui xe co bien auth nay , tac dung giong nhu bien auth minh hay goi

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //check la chi ktra dang nhap ui,lay thong tin cua dong chi nay duoc vacai ham user nay
        //user la mot cai ham,  1 dong trong csdl ,..seo do ktra level cua dog chi nay thui
        //con  &&  ktra coi co phai la admin khong thi cho di tiep
        //user nay nghia laf
            if ($this->auth->check() && $this->auth->user()->role ===1 ) {
                return $next($request);

        }
        return redirect('/');
        //khong thi day ra ngoai trang chu un
        //khi do viet xong thi phai dang ky moi sai duoc

    }
}
