<?php
  
use App\Models\Texto;
use App\Models\Configuracao;  
/**
 * Write code on Method
 *
 * @return response()
 */
if (! function_exists('getConfig')) {
    function getConfig($name)
    {
        $config = Texto::where('nome',$name)->first();
        return $config;
    }
}
if (! function_exists('getConfigByType')) {
  function getConfigByType($type)
  {
      $config = Texto::where('tipo',$type)->orderBy('ordem')->get();
      return $config;
  }
}
if (! function_exists('getConfiguration')) {
    function getConfiguration($name)
    {
        $config = Configuracao::where('nome',$name)->first();
        return $config;
    }
  }
  if (! function_exists('verifica_nascimento')) {
   function verifica_nascimento($nascimento){
       
        if($nascimento != ""){
            // VERIFICANDO SE USUÁRIO TEM +18
            $VerificaIdade = explode('-', $nascimento);
            $Ano = $VerificaIdade[0];
            $Mes = $VerificaIdade[1];
            $Dia = $VerificaIdade[2];
            
            // UNIX timestamp
            $Nascimento = mktime(0, 0, 0, $Dia, $Mes, $Ano);
            
            // fetch the current date (minus 18 years)
            $Verifica['Dia'] = date('d');
            $Verifica['Mes'] = date('m');
            $Verifica['Ano'] = date('Y') - 18;
            
            // Timestamp
            $Hoje = mktime(0, 0, 0, $Verifica['Dia'], $Verifica['Mes'], $Verifica['Ano']);
            
            if ($Nascimento >= $Hoje) {
                return "menor";
            }else{
                return "maior";
            }
        }
        
   }
}