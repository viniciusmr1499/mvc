<?php 

namespace SON;

class Controller 
{

   protected function render(array $data = [], string $view = null)
   {
       if(!$view){
           $view = $this->controllerName() .'/'. debug_backtrace()[1]['function'];
       }
       extract($data);
       require __DIR__ . '/../templates' . '/'. $view . '.tpl.php';
   }

   private function controllerName()
   {
        $class = get_class($this); // App\Controllers\UserControllers
        $class = explode('\\',$class); // [App], [Controllers], [UserControllers]
        $class = array_pop($class); // UserControllers
        $class = preg_replace('/Controller$/','',$class); //Users
            // var_dump($class); exit;
        return strtolower($class); // users
   }
}