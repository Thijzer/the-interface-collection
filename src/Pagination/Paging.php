<?php

namespace Intface\Component\Common\Pagination;

interface Paging
{
    /** Returns the previous page number */
    public function getPreviousPageNumber(): int;
    /** Returns the current page number */
    public function getCurrentPageNumber(): int;
    /** Returns the next page number */
    public function getNextPageNumber(): int;
    /** Returns the Total number of pages */
    public function count(): int;
}
