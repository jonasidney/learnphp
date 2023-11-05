<h1> Editar Usuário</h1>

<?php
        $sql = "SELECT * FROM usuario WHERE ID_USer=".$_REQUEST["ID_User"];
        $registro = $connect->query($sql);
        $row = $registro->fetch_object();
?>

<form action="?page=grava" method="POST">
  <input type="hidden" name="operacao" value="editarUsuario">
  <input type="hidden" name="ID_User" value="<?php print $row->ID_User; ?>">

      <div class="row">

                <div class="col-sm-12">
                  <label><b>Nome completo:</b> </label><br>
                  <input type="text" name="nome" value="<?php print $row->NM_User; ?>" class="form-control" required>
                </div>
                <div class="col-sm-12">
                  <label><b>E-mail:</b> </label><br>
                  <input type="email" name="email" value="<?php print $row->EM_User; ?>" class="form-control" required>
                </div>
                <div class="col-sm-12">
                  <label><b>Data de nascimento:</b> </label><br>
                  <input type="date" name="nascimento" value="<?php print $row->DN_User; ?>" class="form-control" required>
                </div>
                <div class="col-sm-12">
                  <label><b>Estado:</b> </label><br>
                  <select class="form-select" name="estado" value="<?php print $row->ST_User; ?>" class="form-control" required>
                    <option value="Acre - AC">Acre</option>
                    <option value="Alagoas - AL">Alagoas</option>
                    <option value="Amapá - AP">Amapá</option>
                    <option value="Amazonas - AM">Amazonas</option>
                    <option value="Brahia - BA">Bahia</option>
                  </select>
                </div>
                <div class="col-sm-12">
                  <label><b>Endereço:</b> </label><br>
                  <input type="text" name="endereco" value="<?php print $row->AD_User; ?>" class="form-control" required>
                </div>
                <div class="col-sm-12">
                  <label><b>Sexo:</b> </label><br>
                  <input type="radio" name="sexo" value="masculino" <?php if ($row->SX_User == 'masculino') { print 'checked'; } ?>> Masculino
                  <input type="radio" name="sexo" value="feminino" <?php if ($row->SX_User == 'feminino') { print 'checked'; } ?>> Feminino
                </div>
                <div class="col-sm-12">
                  <br><b>Categoria de interesse (marque mais que uma):</b> </label><br>
                  <input type="checkbox" name="categoria[ ]" id="" value="praia"> Praia
                  <input type="checkbox" name="categoria[ ]" id="" value="campo"> Campo
                  <input type="checkbox" name="categoria[ ]" id="" value="nacionais"> Nacionais
                  <input type="checkbox" name="categoria[ ]" id="" value="internacionais"> Internacionais
                  <input type="checkbox" name="categoria[ ]" id="" value="serra"> Serra
                  <input type="checkbox" name="categoria[ ]" id="" value="cidade"> Cidade
                </div>
                <div class="col-sm-12">
                  <label><b>Login:</b> </label><br>
                  <input type="text" name="login" placeholder="nome de usuario" value="<?php print $row->LG_User; ?>" class="form-control" required>
                </div>
                <div class="col-sm-12">
                  <label><b>Senha:</b> </label><br>
                  <input type="password" name="senha" placeholder="senha" class="form-control" required>
                </div>

                <div class="col-sm-12"> <Br>
                  <input type="reset" value="Limpar" class="btn btn-danger">
                  <input type="submit" value="Salvar" class="btn btn-success">
                </div>

        </div>
</form>