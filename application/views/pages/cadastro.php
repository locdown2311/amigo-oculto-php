<form action="<?php echo base_url('cadastrado'); ?>" method="POST">
    <div class="row">
        <div class="medium-6 columns medium-centered">
            <fieldset>
                <legend>Área de cadastro de participantes</legend>
                <label>
                    Nome da pessoa a ser cadastrada :
                    <input type="text" name="pessoa" required />
                </label>
            </fieldset>
        </div>
    </div>
    <div class="row">
        <div class="medium-6 columns medium-centered">
            <input type="submit" value="Cadastrar" class="button" />
        </div>
    </div>
</form>
