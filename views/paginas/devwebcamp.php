<main class="devwebcamp">
    <h2 class="devwebcamp__heading"><?php echo $titulo; ?></h2>
    <p class="devwebcamp__descripcion">Conoce la Conferencia mas importante de latinoamerica</p>

    <div class="devwebcamp__grid">
        <div <?php aos_animation(); ?> class="devwebcamp__imagen">
            <picture>
                <source srcset="build/img/sobre_devwebcamp.avif" type="image/avif">
                <source srcset="build/img/sobre_devwebcamp.webp" type="image/webp">
                <img loading="lazy" width="200" height="200" src="build/img/sobre_devwebcamp.jpg">
            </picture>
        </div>
        <div class="devwebcamp__contenido">
            <p <?php aos_animation(); ?> class="devwebcamp__texto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec ultricies arcu, in lacinia sem. Etiam egestas feugiat dignissim. Pellentesque mollis mollis arcu nec porta. Sed eget diam auctor, pulvinar sem efficitur, ultricies odio. Fusce aliquam eget eros a ornare. Praesent vitae gravida risus. Aenean at vulputate eros. Fusce malesuada libero vitae mauris fermentum, quis fermentum dolor bibendum. In facilisis lobortis metus, quis faucibus mauris facilisis quis. Vivamus tristique odio vitae elementum euismod. In mauris velit, consequat id sagittis et, sodales non lectus. Nunc non massa ut leo dapibus euismod non eget metus. Maecenas vitae ante aliquam, iaculis lacus id, malesuada est.</p>
            <p <?php aos_animation(); ?> class="devwebcamp__texto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec ultricies arcu, in lacinia sem. Etiam egestas feugiat dignissim. Pellentesque mollis mollis arcu nec porta. Sed eget diam auctor, pulvinar sem efficitur, ultricies odio. Fusce aliquam eget eros a ornare. Praesent vitae gravida risus. Aenean at vulputate eros. Fusce malesuada libero vitae mauris fermentum, quis fermentum dolor bibendum. In facilisis lobortis metus, quis faucibus mauris facilisis quis. Vivamus tristique odio vitae elementum euismod. In mauris velit, consequat id sagittis et, sodales non lectus. Nunc non massa ut leo dapibus euismod non eget metus. Maecenas vitae ante aliquam, iaculis lacus id, malesuada est.</p>
        </div>
    </div>
</main>