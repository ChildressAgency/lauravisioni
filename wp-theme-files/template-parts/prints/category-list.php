<ul class="nav flex-column">
  <?php
  $categories = get_terms(
    array(
      "taxonomy" => "print_category",
      "hide_empty" => false,
    )
  );

  foreach ($categories as $cat):
    $active = is_tax("print_category", $cat->name);
    ?>
    <li class="menu-item <?php echo $active ? "active" : "" ?>">
      <a href="<?php echo get_term_link($cat) ?>">
        <?php echo $cat->name; ?>
      </a>
    </li>
  <?php endforeach; ?>
</ul>
