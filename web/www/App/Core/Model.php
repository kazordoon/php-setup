<?php

namespace App\Core;

use \Pecee\Pixie\QueryBuilder\QueryBuilderHandler;

abstract class Model {
  protected QueryBuilderHandler $queryBuilder;
}
