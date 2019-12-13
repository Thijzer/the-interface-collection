<?php

namespace Intface\Component\Common\Pagination;

interface Paginator
{
    public function paginate($target, int $page = 1, int $limit = 10): Pagination;
}