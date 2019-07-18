<?php get_header(); ?>

    <section id="error-area" class="section-gray parallax bg-img-6">
    <div class="overlay opc-90"> </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="error404">
                        <h3>OOPS! PAGE NOT FOUND</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.</p>
                        <a class="btn-primary" href="<?php echo esc_url(home_url('/'));?>">Go Back</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>