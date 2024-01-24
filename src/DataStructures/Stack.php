<?php
namespace Dell\PhpDataStructureAndAlgorithms\DataStructures;

class Stack {
    private $items = array();

    // thêm phần tử vào cuối array
    public function push($value = NULL) {
        array_push($this->items, $value);
    }

    // xóa phần tử cuối array
    public function pop() {
        return array_pop($this->items);
    }

    // trả về phần tử cuối array
    public function peek() {
        return end($this->items);
    }

    // trả về số phần tử trong array
	public function size() {
		return count($this->items);
	}

    // kiểm tra xem array có trống hay không
	public function isEmpty() {
		return empty($this->items);
	}
}
?>