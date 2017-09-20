<script>
    function setInvisible() {
        document.getElementById("img").style.visibility = "hidden";
    }
</script>
<div class="row">
    <h1 class="subheader">Instruções para a realização do sorteio</h1>
    <div class="medium-12 columns">
        <div data-alert class="alert-box info radius">
            <p>Olá usuario seja bem vindo ao sorteio de amigo oculto da família.</p>
            <p>O site é bem simples mas caso haja duvidas de sua utilização, deixarei algumas possiveis soluções abaixo :</p>

            <blockquote>Como realizo o sorteio?.<cite>Clique em <strong> SORTEAR </strong> e selecione o seu nome</cite></blockquote>
            <blockquote>Meu nome não esta na lista, como proceder?.<cite>Entre em contato com Igor, o mesmo desativou o cadastro para evitar possiveis duplicações</cite></blockquote>
            <a href="#" class="close">&times;</a>
        </div>
    </div>

</div>
<div id="img" class="row">
    <h2 class="subheader">Imagens para auxiliar</h2>
    <div class="medium-12 columns">
        <div data-alert class="alert-box info radius">
            <img src="<?php echo base_url('assets/img/instrucao-1.png'); ?>" alt="Realização do sorteio"/>
            <legend>Forma de realizar o sorteio</legend>
            <a onclick="setInvisible()" href="#tiraInst" class="close">&times;</a>
        </div>
    </div>
</div>