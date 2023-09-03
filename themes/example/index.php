<!DOCTYPE html>
<html>
  <head>
    <title>
      Example
    </title>
    <?php wp_head() ?>
  </head>
  <body>
    <h1>
      Example
    </h1>
    <p>
      If you are able to see this, it means the theme is working correctly.
    </p>
    <p>
      Here are some useful links:
    </p>
    <ul>
      <li>
        <a
          href="<?php echo get_site_url(); ?>/wp-admin"
        >
          Login into the WordPress admin dashboard.
        </a>
      </li>
    </ul>
    <?php wp_footer() ?>
  </body>
</html>
