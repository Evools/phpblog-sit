<?php

  function redirect_to($location)
  {
    return header("location: $location");
  }

  function clear_field($field)
  {
    return trim(htmlspecialchars($field));
  }