<?php get_header(); ?>
<?php /* Template name: contato */ ?>

    <div id="page" >
        <div class="container home-page" style="opacity:1">
            <span class="tags top-tags"> &nbsp;&nbsp;&nbsp;&lt;body&gt;</span>
            <div class="text-contato">
                <h2 id="typed-contato"></h2>
                <?php echo do_shortcode('[contact-form-7 id="16" title="Sem título"]'); ?>
                <!--form class="animated fadeInUp">
                    <div class="row">
                        <div class="col-12 col-md">
                            <input type="text" class="form-control" placeholder="Nome">
                        </div>
                        <div class="col-12 col-md">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Assunto">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <textarea class="form-control" name="message" rows="5"
                                placeholder="Mensagem"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>
                </form-->
            </div>
            <span class="tags bottom-tags">&nbsp;&nbsp;&nbsp;&lt;/body&gt;<br>&lt;/html&gt;</span>
        </div>
    </div>

<?php get_footer();?>