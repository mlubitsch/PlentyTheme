<?php
 
namespace PlentyTheme\Providers;
 
 
use IO\Extensions\Functions\Partial;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Templates\Twig;
 
class ThemeServiceProvider extends ServiceProvider{
     
    public function register(){        
    }
    
	public function boot(Twig $twig, Dispatcher $eventDispatcher){
        $eventDispatcher->listen('IO.init.templates', function(Partial $partial){
           $partial->set('header', 'PlentyTheme::content.ThemeHeader');
        }, 0);
        return false;
    }

}
