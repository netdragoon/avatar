<?php namespace Canducci\Avatar\Providers;

use Illuminate\Support\ServiceProvider;
use Blade;

class AvatarServiceProvider extends ServiceProvider
{   
    public function boot()
    {
        
        Blade::directive('avatar', function($expression) {
            
            return "<?php echo avatar{$expression}->getTagImage(); ?>";
            
        });
        
    }
                
    public function register(){
        
        $this->app->singleton('Canducci\Avatar\Contracts\AvatarContract','Canducci\Avatar\Avatar');
        
    }
}
