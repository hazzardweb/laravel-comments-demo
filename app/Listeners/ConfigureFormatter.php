<?php

namespace App\Listeners;

use s9e\TextFormatter\Configurator;
use Hazzard\Comments\Events\FormatterConfigurator;

class ConfigureFormatter
{
    /**
    * Create the event listener.
    *
    * @return void
    */
   public function __construct()
   {
       //
   }

   /**
    * Handle the event.
    *
    * @param  FormatterConfigurator $event
    * @return void
    */
   public function handle(FormatterConfigurator $event)
   {
       // Access the configurator using $event->configurator...

       // $event->configurator->Emoticons->add(':)', '&#x1f604;');
   }
}
