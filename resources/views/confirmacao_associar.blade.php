@extends('layout.internas')

@section('title', getConfig('Associe-se')->nome)

@section('content')

           
           

           
            <section class="section-xl bg-periglacial-blue">
              <div class="shell">
                <div class="range range-sm-center">
                  <div class="cell-sm-12 cell-md-12 cell-lg-12">
             
                   
                 
                      <div class="range range-sm-bottom range-15 row">
                        <div class="cell-sm-12 col-lg-6">
                            <label class="form-label-outside" for="contact-first-name">Nome Completo: {{$cliente->nome}} </label>
                            <label class="form-label-outside" for="contact-last-name">E-mail: {{$cliente->email}} </label>
                            <label class="form-label-outside" for="contact-last-name">Telefone:{{$cliente->telefone}} </label>
                            <label class="form-label-outside" for="contact-last-name">Telemovel: {{$cliente->telemovel}}  </label>
                            <label class="form-label-outside" for="contact-last-name">Nacionalidade: {{$cliente->nacionalidade}} </label>
                          
                            @php
                              $date = explode('-', $cliente->nascimento);
                              $nascimento = $date[2]."/".$date[1]."/".$date[0];
                             
                              @endphp
                            <label class="form-label-outside" for="contact-last-name">Data de Nascimento: {{$nascimento}} </label>
                          
                            <label class="form-label-outside" for="contact-last-name">Documento de Identificação: {{$cliente->tipo_documento}} - {{$cliente->documento}}</label>
                          
                      
                            <label class="form-label-outside" for="contact-last-name">Código Postal: {{$cliente->cep}}</label>
                       
                     
                            <label class="form-label-outside" for="contact-message">Endereço Completo (Morada) : {{$cliente->endereco}}</label>

                            <label class="form-label-outside" for="contact-message">RG : {{$cliente->rg}}</label>

                            <label class="form-label-outside" for="contact-message">CPF : {{$cliente->cpf}}</label>
                            <hr>      
                            <br>
                            @if(count($dependentes) > 0)
                              <label class="form-label-outside" for="contact-message">Dependentes:</label>
                              <br>
                              @foreach($dependentes as $dependente)
                              <label class="form-label-outside" for="contact-message">Nome: {{$dependente->nome}}</label>
                              <label class="form-label-outside" for="contact-message">Nascimento: {{$dependente->nascimento}}</label>
                              <label class="form-label-outside" for="contact-message">Parentesco: {{\App\Models\Parentesco::find($dependente->parentesco_id)->nome}}</label>
                              @endforeach
                            
                          
                            <hr>
                            @endif
                            <br>
                          <label class="form-label-outside" for="contact-message">
                              {!!$valores->descricao!!}
                          </label>
                          <label class="form-label-outside" for="contact-message">Total: €{{$valores->valor}}
                          </div>
                         
                         
                        </div>
                        <div class = "row">
                          <div class="cell-sm-6 col-lg-6">
                            <a href = "/public/cancela_associacao/{{$cliente->id}}" class="btn btn-sm btn-danger btn-block btn-circle form_enviar" >Pensei bem e não quero me associar</a>
                            
                          </div>
                          <div class="cell-sm-6 col-lg-6">
                            <a href = "/public/confirma_associacao/{{$cliente->id}}" class="btn btn-sm btn-primary btn-block btn-circle form_enviar" >Quero me associar</a>
                          </div>
                        </div>  
                    </div>
            </section>
           
@endsection
