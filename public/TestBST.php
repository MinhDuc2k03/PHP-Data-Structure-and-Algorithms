<?php
include "../vendor/autoload.php";
use Dell\PhpDataStructureAndAlgorithms\DataStructures\BinarySearchTree;


// Khởi tạo một tree với root bằng 5
$bst = new BinarySearchTree(5);

// Thêm nút cho branch trái
$bst->insert(2);
$bst->insert(1);
$bst->insert(4);

// Thêm nút cho branch phải
$bst->insert(11);
$bst->insert(7);
$bst->insert(23);
$bst->insert(16);
$bst->insert(34);

// "Walk the tree"
$tree = $bst->walk();
foreach($tree as $node) {
    echo "{$node->value}" . PHP_EOL;
}
?>