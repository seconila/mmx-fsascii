<?php

/**
 * Only implemented the necessary parts of the spec - FS ASCII File Format V1.11
 * Add more as required
 */
class Mmx_Fsascii_Model_Format_GoodsReceivedNote extends Mmx_Fsascii_Model_Format {

    const FILE_CODE = '25';

    public function setWarehouse($warehouse) {
        $this->fields[1] = $warehouse;
        return $this;
    }

    public function setProduct($product) {
        $this->fields[2] = $product;
        return $this;
    }

    public function setQty($qty) {
        $this->fields[3] = $qty;
        return $this;
    }

    public function setReceiptDate($receipt_date) {
        $this->fields[4] = $receipt_date;
        return $this;
    }

    public function setComment($comment) {
        $this->fields[8] = $comment;
        return $this;
    }

    public function setBin($bin) {
        $this->fields[9] = $bin;
        return $this;
    }

    public function setSerial($serial) {
        $this->fields[16] = $serial;
        return $this;
    }

}
