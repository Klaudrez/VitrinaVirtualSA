{{Auth::guard('admin')->user()->name}    :    muestra el mombre del admin

@if (Auth::guard('admin')->check())      :    estas en una cuenta de admin

@endif  

@if (Auth::guard('web')->check())      :    estas en una cuenta de admin

@endif  


////////////////////Importante////////////////////////

Leer comentario de app/exceptions/handler.php, si no tirara un error