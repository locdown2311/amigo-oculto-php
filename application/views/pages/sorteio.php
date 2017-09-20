<form action="<?php echo base_url('sortear'); ?>" method="POST">
    <div class="row">
        <div class="medium-6 columns medium-centered">
            <fieldset>
                <legend>Área de sorteio dos participantes</legend>
                <label>
                    Escolha o seu nome : 
                    <select name="opcao" required>
                        <?php foreach ($nomes as $id): ?>
                            <?php echo "<option value=" . $id['nome'] . ">" . $id['nome'] . "</option>"; ?>
                        <?php endforeach; ?>
                    </select>
                </label>
            </fieldset>
        </div>
    </div>
    <div class="row">
        <div class="medium-6 columns medium-centered">
            <input onclick="return confirm('O seu nome está correto ?')" type="submit" value="Sortear" class="button" />
        </div>

    </div>
</form>
