# PHP Unset() and Array Reindexing Bug

This repository demonstrates a common error in PHP related to the `unset()` function and array reindexing.  When using `unset()` to remove elements from a numerically indexed array, PHP does *not* automatically reindex the remaining elements. This can lead to unexpected behavior, particularly when accessing array elements by their numerical index.

The `bug.php` file contains code exhibiting this behavior. The `bugSolution.php` file presents a solution showing best practices to avoid this issue. 

## Bug Details

The bug stems from the fact that `unset()` only removes the specified element; it doesn't shift the following elements to fill the gap.  Therefore, if you attempt to access an element using an index that was previously occupied by a removed element, you will receive an `Undefined offset` error.

## Solution

The best solution is to use array functions designed for filtering, such as `array_filter` to remove the element, avoiding the use of `unset()` in this context which will preserve the array keys.