<?php
include './binary-search-tree.php';

// Instantiate a new tree with root node of 5
$bst = new BinarySearchTree(5);

// Insert left branch nodes
$bst->insert(2);
$bst->insert(1);
$bst->insert(4);

// Insert right branch nodes
$bst->insert(11);
$bst->insert(7);
$bst->insert(23);
$bst->insert(16);
$bst->insert(34);

// Walk the tree
$tree = $bst->walk();
foreach($tree as $node) {
    echo "{$node->value}\n";
}
?>