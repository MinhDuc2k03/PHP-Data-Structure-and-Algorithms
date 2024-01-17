<?php
class Stack {
    private $_items = array();

    // thêm phần tử vào cuối array
    public function push($value = NULL) {
        array_push($this->_items, $value);
    }

    // xóa phần tử cuối array
    public function pop() {
        return array_pop($this->_items);
    }

    // trả về phần tử cuối array
    public function peek() {
        return end($this->_items);
    }

    // trả về số phần tử trong array
	public function size() {
		return count($this->_items);
	}

    // kiểm tra xem array có trống hay không
	public function isEmpty() {
		return empty($this->_items);
	}
}
?>