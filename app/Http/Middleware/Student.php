<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class Student
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $userId = session('id');
       
        $item = DB::table('tbl_item_user')
            ->where('user_id', $userId)
            ->where('item_type_id', 12)
            ->first();
            
            if (isset($item->item_id) && $item->item_id) {
                if ($item->item_id == 2) {
                    return redirect()->route('main-dashboard');
                }
            }
        
        return $next($request);
    }
}
