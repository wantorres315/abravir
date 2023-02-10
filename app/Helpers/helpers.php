<?php
  
use App\Models\Configuracao;
  
/**
 * Write code on Method
 *
 * @return response()
 */
if (! function_exists('getConfig')) {
    function getConfig($name)
    {
        $config = Configuracao::where('nome',$name)->first();
        return $config;
    }
}
if (! function_exists('getConfigByType')) {
  function getConfigByType($type)
  {
      $config = Configuracao::where('tipo',$type)->orderBy('ordem')->get();
      return $config;
  }
}
  
