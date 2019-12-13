<?php

namespace Intface\Component\Common\Pagination;

interface Pagination extends \Countable, \Traversable, \ArrayAccess
{
    /** Returns all the Page items */
    public function getCurrentPageResults(): array;
    /** has enough pages to paginate isPag */
    public function canPaginate(): bool;
    /** Returns the paging state */
    public function getPaging(): Paging;
    /** Returns the Total number of Items | getNbResults */
    public function getTotalItemsCount(): int;
}
