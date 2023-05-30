<!DOCTYPE html>
<html>
<head>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body >
  <table style = "border:1px solid black;"  width="50%">
 
    <tr>
      <td width="20px"></td>
      <td>
        <table>
          <tr>
            <td style = "font-weight:bold; font-size:18px;margin-left:10px">{{$cliente->nome}}
            </td>
          </tr>
          <tr>
          
          <td style = "font-size:10px">Titular
          </td>
          </tr>
          <tr>
          @php
                              $date = explode('-', $cliente->nascimento);
                              $nascimento = $date[2]."/".$date[1]."/".$date[0];
                             
                              @endphp
            <td style = "font-size:12px"> Nascimento: {{$nascimento}}
            </td>
          </tr>

         
          <tr>
          @php
                              $dateval = explode('-', $cliente->validade);
                              $validade = $dateval[2]."/".$dateval[1]."/".$dateval[0];
                             
                              @endphp
               
          <td style = "font-size:12px"> Valido até: {{$validade}}
          </td>
        </tr>
        <tr>
          
          <td style = "font-size:12px"> Código: <b>ABRA00{{$cliente->id}}
          </td>
        </tr>
        <tr>
          <td align="center"><img src="data:image/png;base64, {!! $qrcode !!}"></td>
</tr>
        </table>
        
     
                             
      </td >
      <td width="150px" align="center" style = "font-size:12px">
      <img src="{{$logo}}" alt=""style = "width:150px" />
      <img src="{{$assinatura}}" alt=""style = " width: 90px;" /><br>
              Ass. Presidente
    </td>
    </tr>
    
</table>

@foreach($dependentes as $dependente)
<table style = "border:1px solid black;" width="50%">
 
 <tr>
   <td width="20px"></td>
   <td>
     <table>
       <tr>
         <td style = "font-weight:bold; font-size:18px;margin-left:10px">{{$dependente->nome}}
         </td>
       </tr>
       <tr>
       
       <td style = "font-size:10px">Dependente
       </td>
      </tr>
      <tr>
       <td style = "font-size:10px">Socio: {{$cliente->nome}}
       </td>
       </tr>
       <tr>
       @php
                           $daten = explode('-', $dependente->nascimento);
                           $nascimentod = $daten[2]."/".$daten[1]."/".$daten[0];
                          
                           @endphp
         <td style = "font-size:12px"> Nascimento: {{$nascimentod}}
         </td>
       </tr>

      
       <tr>
       @php
                           $dateval = explode('-', $cliente->validade);
                           $validade = $dateval[2]."/".$dateval[1]."/".$dateval[0];
                          
                           @endphp
            
       <td style = "font-size:12px"> Valido até: {{$validade}}
       </td>
     </tr>
     <tr>
       
       <td style = "font-size:12px"> Código: <b>ABRA00{{$cliente->id}}-{{$dependente->id}}
       </td>
     </tr>
     <tr>
       <td align="center"><img src="data:image/png;base64, {!! $qrcode !!}"></td>
</tr>
     </table>
     
  
                          
   </td >
   <td width="150px" align="center" style = "font-size:12px">
   <img src="{{$logo}}" alt=""style = "width:150px" />
   <img src="{{$assinatura}}" alt=""style = " width: 90px;" /><br>
           Ass. Presidente
 </td>
 </tr>
 
</table>

@endforeach
 <!--  <div class = "row" style = "margin-top:45px">
      <div class = "col-lg-12 row" >
        <div class = "col-lg-4">

        </div>
        <div class = "col-lg-4 row" style = "border:1px solid black; padding:0">
           

            <div class = "col-lg-8" style = "padding-top:30px;padding-left:48px">

                <div class = "" ></div>
                
                <div class = ""></div>
                <br><br>
                <div class = "">Categoria: Titular </div>
                
                @php
                              $dateval = explode('-', $cliente->validade);
                              $validade = $dateval[2]."/".$dateval[1]."/".$dateval[0];
                             
                              @endphp
                <div class = "" style = " position: absolute;bottom: 17px;">
                Código: <b>ABRA00{{$cliente->id}}</b> <br>
                Valido até: {{$validade}}</div>
            </div>
            <div class = "col-lg-4" style = "text-align:center">
              
              
            </div>
        </div>
        <div class = "col-lg-4">

        </div>
        
      </div>
  </div>
   
-->
    
  
</body>
</html>