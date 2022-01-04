
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php bloginfo('template_url')?>/assets/css/bootstrap.min.css">
    <title><?php bloginfo('name')?></title>
    <?php wp_head() ?>
</head>


<body <?php body_class()?>>
    <h1 class="site-header">
        <a href="<?php echo home_url()?>"><?php bloginfo('name')?></a> 
        
    </h1>
    <h4><?php bloginfo('description')?></h4>
    
    <nav class="navbar navbar-expand-md navbar-dark bg-dark" role="navigation">
      <div class="container">   
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
            <span class="navbar-toggler-icon"></span>
        </button>
        </div>
    </nav>
</body>
</html>