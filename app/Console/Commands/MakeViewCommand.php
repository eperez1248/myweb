<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use File;

class MakeViewCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:view {view}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crea una plantilla blade';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $view=$this->argument('view');
        $path = $this->viewPath($view);
        $this->CreateDir($path);
        if (File::exists($path))
        {
            $this->error("El fichero {$path} existe");
            return;
            
        }
        File::put($path,$path);
        $this->info("fichero {$path} creado");
    }
    public function ViewPath($view){
        
        $view= str_replace('.', '/', $view).'.blade.php';
        $path="resources/views/{$view}";
        
        return $path;
        
    }
    public function createDir($path){
        
        $dir= dirname($path);
        if (!file_exists($dir)){
            
            mkdir($dir,0777,true);
            
        }
    }
}
