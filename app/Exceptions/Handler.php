<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        return parent::render($request, $exception);
    }
    
    ///////////////////////IMPORTANTE///////////////////////

        /* La siguiente funcion te dara un error, ya que ya esta declarada
        en Illuminate\Foundation\Exceptions\Handler si usas visual studio
        puedes irte al use de arriba, click derecho "Go to Definition"
        ctrl + F y buscas "unauthenticated"  y reemplazas la funcion por 
        esta  */


    //////////////////////// Funcion agregada /////////////////////////////
    
    ////Esta funcion revisa que tipo de restricciones tiene la pagina a la que se quiere acceder y te redirecciona a su login correspondiente
    
   /*  protected function unauthenticated($request, AuthenticationException $exception) 
    {
        
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }
        
        if ($request->is('admin') || $request->is('admin/*')) {
            return redirect()->guest(route('admin.login'));
        }
        
        return redirect()->guest(route('login'));
    } */
}////////////////////////////////////////////////////////////////////////////////////////


        