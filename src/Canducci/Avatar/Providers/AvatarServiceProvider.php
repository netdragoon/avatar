<?php namespace Canducci\Avatar\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;

class AvatarServiceProvider extends ServiceProvider {

    public function boot()
    {                
        $this->registerBladeExtensions();                
    }
                
    public function register()
    {
        $this->app->singleton('Canducci\Avatar\Contracts\AvatarContract','Canducci\Avatar\Avatar');
    }
    
    protected function registerBladeExtensions()
    {
        
        $this->app->afterResolving('blade.compiler', function (BladeCompiler $blade) {
            
            if (str_contains($this->app->version(), '5.0')) 
            {
                
                $blade->extend(function ($view, $compiler) {
                    
                    $pattern = $compiler->createMatcher('avatar');

                    return preg_replace($pattern, '$1<?php echo avatar$2->getTagImage(); ?>', $view);
    
                });
                
            }
            else 
            {
                
                 $blade->directive('avatar', function ($expression) {
                     
                    return "<?php echo avatar{$expression}->getTagImage(); ?>";
                    
                });
                
            }
        });        
        
    }

}
