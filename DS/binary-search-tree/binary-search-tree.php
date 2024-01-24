<?php
class Node
{
    public $parent, $value, $left, $right;

    public function __construct($value, Node $parent = null)
    {
        $this->value = $value;
        $this->parent = $parent;
    }

    //Tìm min của branch
    public function min() {
        $node = $this;
        while ($node->left) {
            if (!$node->left) {
                break;
            }
            $node = $node->left;
        }
        return $node;
    }

    //Tìm max của branch
    public function max() {
        $node = $this;
        while ($node->right) {
            if (!$node->right) {
                break;
            }
            $node = $node->right;
        }
        return $node;
    }

    //
    public function delete() {
        if ($this->left && $this->right) {

            $min = $this->right->min();
            $this->value = $min->value;
            $min->delete();

        } elseif ($this->right) {

            if ($this->parent->left === $this) {
                $this->parent->left = $this->right;
                $this->right->parent = $this->parent->left;
            } elseif ($this->parent->right === $this) {
                $this->parent->right = $this->right;
                $this->right->parent = $this->parent->right;
            }
            $this->parent = null;
            $this->right = null;

        } elseif ($this->left) {

            if ($this->parent->left === $this) {
                $this->parent->left = $this->left;
                $this->left->parent = $this->parent->left;
            } elseif ($this->parent->right === $this) {
                $this->parent->right = $this->left;
                $this->left->parent = $this->parent->right;
            }
            $this->parent = null;
            $this->left   = null;

        } else {

            if ($this->parent->right === $this) {
                $this->parent->right = null;
            } elseif ($this->parent->left === $this) {
                $this->parent->left = null;
            }
            $this->parent = null;
        }
    }
}



class BinarySearchTree {
    public $root;

    public function __construct($value = null) {
        if ($value !== null) {
            $this->root = new Node($value);
        }
    }

    //Tìm nút có value vừa nhập, tìm được thì trả về nút đó
    public function search($value) {
        $node = $this->root;

        while($node) {
            if ($value > $node->value) {
                $node = $node->right;
            } elseif ($value < $node->value) {
                $node = $node->left;
            } else {
                break;
            }
        }

        return $node;
    }

    //Thêm nút vào (tìm null branch để thêm vào đó)
    public function insert($value) {
        $node = $this->root;
        if (!$node) {
            return $this->root = new Node($value);
        }

        while($node) {
            if ($value > $node->value) {
                if ($node->right) {
                    $node = $node->right;
                } else {
                    $node = $node->right = new Node($value, $node);
                    break;
                }
            } elseif ($value < $node->value) {
                if ($node->left) {
                    $node = $node->left;
                } else {
                    $node = $node->left = new Node($value, $node);
                    break;
                }
            } else {
                break;
            }
        }
        return $node;
    }

    //Kiểm tra xem có root không, có thì gọi min() trong nút
    public function min() {
        if (!$this->root) {
            throw new Exception('Tree root trống');
        }

        $node = $this->root;
        return $node->min();
    }

    //Kiểm tra xem có root không, có thì gọi max() trong nút
    public function max() {
        if (!$this->root) {
            throw new Exception('Tree root trống');
        }

        $node = $this->root;
        return $node->max();
    }

    //Tìm xem có nút không, có thì gọi delete() của nút tìm được
    public function delete($value) {
        $node = $this->search($value);
        if ($node) {
            $node->delete();
        }
    }

    //Trả về dữ liệu của tree bằng generator theo thứ tự nhỏ đến lớn
    public function walk(Node $node = null) {
        if (!$node) {
            $node = $this->root;
        }

        if (!$node) {
            return false;
        }

        if ($node->left) {
            yield from $this->walk($node->left);
        }
        
        yield $node;
        if ($node->right) {
            yield from $this->walk($node->right);
        }
    }
}
?>