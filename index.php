<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <?php wp_head(); ?>
    </head>

    <body <?php body_class('vh-100'); ?>>
      <?php wp_body_open(); ?>

      <div class="d-flex flex-column h-100">
          <?php echo view(app('sage.view'), app('sage.data'))->render(); ?>
      </div>

      <?php wp_footer(); ?>
    </body>
</html>
