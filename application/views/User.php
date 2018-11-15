<div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="panel panel-default">
        <div class="panel-heading">Cadastar uma nova pessoa:</div>
        <div class="panel-body">
          <?php echo validation_errors(); ?>
          <?php echo form_open('user/send') ?>
            <div class="form-group col-md-8">
              <label for="inputName">Nome:</label>
              <input type="name" name="name"  placeholder="Nome" size="25">
            </div>
            <div class="form-group col-md-4">
              <label for="inputLastname">Sobrenome</label>
              <input type="lastname" class="form-control" placeholder="Password">
            </div>
            <div class="form-group col-md-4">
              <label for="inputBirthday">Aniversario:</label>
              <input type="date" class="form-control" name="birthday">
            </div>
            <div class="form-group col-md-4">
              <label for="inputSex">Sexo:</label>
              <select class="form-control">
                <option value="0">Feminino</option>
                <option value="1">Masculino</option>
                <option value="2">Outro</option>
              </select>
            </div>
            <div class="form-group col-md-4">
              <label for="inputCPF">CPF:</label>
              <input type="number" class="form-control" placeholder="000.000.000-00" max="11">
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail">E-mail:</label>
              <input type="email" class="form-control" placeholder="name@email.com">
            </div>
            <div class="form-group col-md-2">
              <label for="inputDDD">DDD:</label>
              <input type="number" class="form-control" placeholder="000" min="3" max="3">
            </div>
            <div class="form-group col-md-4">
              <label for="inputTelphone">Telefone:</label>
              <input type="number" class="form-control" placeholder="91234-6789">
            </div>
            <div class="form-group col-md-12">
              <label for="inputCEP">CEP:</label>
              <input type="number" class="form-control" placeholder="32673-000">
            </div>
            <div class="form-group col-md-8">
              <label for="inputStreet">Rua:</label>
              <input type="text" class="form-control" placeholder="Rua Apareceu a Margarida">
            </div>
            <div class="form-group col-md-4">
              <label for="inputStreetNumber">Número:</label>
              <input type="number" class="form-control" placeholder="1026">
            </div>
            <div class="form-group col-md-8">
              <label for="inputBairro">Bairro:</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Centro">
            </div>
            <div class="form-group col-md-4">
              <label for="exampleInputPassword1">Complemento:</label>
              <select class="form-control">
                <option value="0">Casa</option>
                <option value="1">Apartamento</option>
                <option value="2">Outro</option>
              </select>
            </div>
            <div class="form-group col-md-12">
              <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
            </div>
          <?php echo form_close(); ?>
        </div>
       </div>
    </div>
  </div>
</div>