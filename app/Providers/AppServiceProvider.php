<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Http\Models\Tablero;
use App\Http\Models\Nota;

use Illuminate\Support\Facades\Blade;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Schema:.defaultStringLength(191);

        /**
         * Creamos una directiva de Blade para formatear la fecha
         * y obtener su valor en formato Europeo.
         * @param $dta  contiene una CADENA con el nombre de la variable a utilizar
         */
        Blade::directive('formateaFecha', function ($dta) {
            // en el caso de ser un objeto
            return "<?php 
                            echo \Carbon\Carbon::parse({$dta}->fecha)->format('d/m/Y') 
                    ?>";

            // en el caso de ser un array
            /*return "<?php 
                    echo \Carbon\Carbon::parse({$dta}['indice'])->format('d/m/Y') 
            ?>";*/

            /*return "<?php 
                            echo \Carbon\Carbon::parse({$dta}->fecha)->now()
                    ?>";*/
        });
    }
}
