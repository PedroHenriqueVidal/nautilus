<?php get_header(); ?>

<!-- Home page content here -->
<div id="wallpaper" style="display: flex; flex-direction: row; align-items: center;">
    <img src="<?=get_theme_file_uri('/assets/img/secao-01-personagem.png') ?>" alt="" style="height:100vh">
    <div style="display: flex; flex-direction: column; width: 600px;justify-content: center; height: 500px;">
        <p id="ordem" style="margin-bottom: -5px;">leve sua empresa para a nova realidade digital </p>
            <p id="propaganda" style="margin-top: 0%;">A sua persona virtual com alta performance</p>
            <p id="descrição" style="margin-top: -40px;">Para marcas inovadoras: Brand Persona PYXYS + Ilustraria  é o primeiro combo do Brasil de construção de avatares 3D, com tecnologia de ponta em computação gráfica, combinada à mais completa Estratégia de  Content, Growth e Performance Data-driven</p>
            <button id="curiosidades">Quero saber mais</button>
            <div style="display: flex; flex-direction: row; margin-top: 40px;">
                <p>Um produto:</p>
                <img src="<?=get_theme_file_uri('/assets/img/pyxys-logo-4x.png') ?>" alt="" id="LogoPyxys">
                <img src="<?=get_theme_file_uri('/assets/img/logo-ilustraria3d-branco.png') ?>" alt="" id="LogoIlustraria">
            </div>
        </div>
</div>
<div style="display: flex; align-items: center; flex-direction: column;" id="pag-dados">
    <p id="comprovação">Os números comprovam</p>
    <p id="resultados">Influenciador virtual traz resultados concretos para grandes marcas</p>
    <section style="display: flex; flex-direction: row;">
        <div class="dados" style="margin-left: 0px;">
            <p id="H1">4x</p>
            <p id="H2">mais seguidores e interatividade</p>
            <p id="H3">em comparação a ações feitas por influenciador convencional</p>
        </div>
        <div class="dados">
            <p id="H1" style="width: 210px;">10 bi</p>
            <p id="H2" style="width: 240px;">de reais movimentados no mercado global</p>
            <p id="H3">o segmento de personas virtuais só tende a crescer no mundo</p>
        </div>
        <div class="dados">
            <p id="H1" style="width: 260px; margin-left: 20px;">2º lugar</p>
            <p id="H2" style="width: 240px;">no ranking mundial de audiência é do Brasil</p>
            <p id="H3">o engajamento com avatares 3D só é maior nos Estados Unidos</p>
        </div>
        <div class="dados">
            <p id="H1">24h</p>
            <p id="H2">em contato direto com o consumidor </p>
            <p id="H3">sem o risco de expor atitudes que não combinem com a marca</p>
        </div>
    </section>
</div>

<?php get_footer(); ?>


