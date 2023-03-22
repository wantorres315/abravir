@extends('layout.internas')

@section('title', getConfig('Associe-se')->nome)

@section('content')

           
            @if(!empty($_GET['cadastrado']))           
            @if($_GET['cadastrado'] == true)
              <div class="shell  text-center">
               
                    <div class="text-highlighted-wrap">
                      <p class="text-highlighted">{!! getConfig('cadastro_sucesso')->valor !!}</p>
                    </div>
                   
                  
                 
               
              </div>
              @endif  
            @endif
           
            <section class=" bg-periglacial-blue">
              <div class="shell">
                <div class="range range-sm-center">
                  <div class="cell-sm-12 cell-md-12 cell-lg-12">
             
                    <!-- RD Mailform-->
                    <form method="post" action="/associar">
                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                      <div class="range range-sm-bottom range-15">
                        <div class="cell-sm-12">
                          <div class="form-group">
                            <label class="form-label-outside" for="contact-first-name">Nome Completo <m style = "color:red">*</m></label>
                            <input class="form-control" id="nome_completo" required type="text" value = "Wanessa" name="nome" >
                          </div>
                        </div>
                        <div class="cell-sm-4">
                          <div class="form-group">
                            <label class="form-label-outside" for="contact-last-name">E-mail <m style = "color:red">*</m></label>
                            <input class="form-control" id="email" required type="email" value = "wanessa.araujo.torres@gmail.com" name="email" >
                          </div>
                        </div>
                        <div class="cell-sm-4">
                          <div class="form-group">
                            <label class="form-label-outside" for="contact-last-name">Telefone <m style = "color:red">*</m></label>
                            <input class="form-control" id="telefone" required type="text" value = "46055576" name="telefone" >
                          </div>
                        </div>
                        <div class="cell-sm-4">
                          <div class="form-group">
                            <label class="form-label-outside" for="contact-last-name">Telemovel <m style = "color:red">*</m></label>
                            <input class="form-control" id="telemovel" required type="text" value = "913521912" name="telemovel" >
                          </div>
                        </div>
                        <div class="cell-sm-6">
                          <div class="form-group">
                            <label class="form-label-outside" for="contact-last-name">Nacionalidade <m style = "color:red">*</m></label>
                            <input class="form-control" id="nacionalidade" required type="text" name="nacionalidade" value = "brasileira" >
                          </div>
                        </div>
                        <div class="cell-sm-6">
                          <div class="form-group">
                            <label class="form-label-outside" for="contact-last-name">Data de Nascimento <m style = "color:red">*</m></label>
                            <input class="form-control" id="nascimento" required type="date" name="nascimento"  value = "1985-02-26">
                          </div>
                        </div>
                        <div class="cell-sm-4">
                          <div class="form-group">
                            <label class="form-label-outside" for="contact-last-name">Documento de Identificação <m style = "color:red">*</m></label>
                            <input  id="contact-email" type="radio" value = "passaporte" name="doc_type" >Passaporte
                            <input  id="contact-email" type="radio" value = "nif" checked name="doc_type" >NIF
                            <input  id="contact-email" type="radio" value = "outro" name="doc_type" >Outro
                          </div>
                        </div>
                        <div class="cell-sm-4">
                          <div class="form-group">
                            <label class="form-label-outside" for="contact-last-name">Numero do Documento <m style = "color:red">*</m></label>
                            <input class="form-control" id="numero_documento" value = "309993792" required type="text" name="documento" >
                          </div>
                        </div>
                        <div class="cell-sm-4">
                          <div class="form-group">
                            <label class="form-label-outside" for="contact-last-name">Código Postal <m style = "color:red">*</m></label>
                            <input class="form-control" id="codigo_postal" value = "5000-058" required type="text" name="codigo_postal" >
                          </div>
                        </div>
                        <div class="cell-xs-12">
                          <div class="form-group">
                            <label class="form-label-outside" for="contact-message">Endereço Completo (Morada) <m style = "color:red">*</m></label>
                            <textarea class="form-control" id="endereco" required name="endereco" >Rua A, 5</textarea>
                          </div>
                        </div>
                        <div class="cell-xs-12">
                          <div class="form-group">
                            <label class="form-label-outside" for="contact-message">Dependentes</label>
                            <button class="btn btn-sm btn-warning btn-block btn-circle add_dependente" type="button" onclick="cloneNode()">Adicionar Dependente</button>
                          </div>
                        </div>
                        <div id = "dependentes" class = "cell-xs-12">

                        </div>
                        <div class="cell-sm-12">
                          <div class="form-group">
                             <input  type="checkbox" name="acordo" id = "acordo" style = "float: left;margin-right: 10px;">
                             <label class="form-label-outside" id = "label_acordo" for="contact-email">De acordo com o Regulamento Geral de Proteção de Dados, de 25 de maio de 2018, ao preencher este formulário concordo de maneira livre, informada e inequívoca com o tratamento dos meus dados pessoais somente para o fim de armazenamento, comunicação, inscrição e direcionamento  para as atividades da Associação de Brasileiros do Distrito de Vila Real.</label>
                          
                          </div>
                        </div>
                        <div class="cell-sm-12 offset-custom-1">
                          <button class="btn btn-sm btn-primary btn-block btn-circle form_enviar" type="submit">Efetuar Cadastro</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </section>
           
@endsection
