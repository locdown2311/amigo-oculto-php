<script>
    setInterval(function () {
        $('#amigooculto').load(<?= base_url('resultados') ; ?>);
    }, 2000) /* time in milliseconds (ie 2 seconds)*/

</script>
<div class="row">
    <div id="amigooculto" class="medium-6 columns medium-centered">
        <fieldset>
            <legend>Resultados do amigo oculto da família</legend>
            <table>
                <thead>
                    <tr>
                        <th width="60%">Nome</th>
                        <th>Amigo Oculto</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($nomes as $id): ?>
                        <tr>
                            <td> <?php echo $id['nome']; ?> </td>
                            <td> <?php echo $id['segredo']; ?> </td>
                        </tr>
                    <?php endforeach; ?>
                    </tr>

                </tbody>
            </table>
        </fieldset>
    </div>
</div>
