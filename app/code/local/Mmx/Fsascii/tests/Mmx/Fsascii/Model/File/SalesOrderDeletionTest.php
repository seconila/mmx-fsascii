<?php

class Mmx_Fsascii_Model_File_SalesOrderDeletionTest extends PHPUnit_Framework_TestCase {

    /**
     *
     * @var Mmx_Fsascii_Model_File_SalesOrderDeletion
     */
    protected $model;
    
    /**
     *
     * @var Mage_Sales_Model_Order
     */
    protected $order;

    public function setUp() {
        
        $this->order = Mage::getModel('sales/order')->load(1036);

        $this->model = new Mmx_Fsascii_Model_File_SalesOrderDeletion();
        $this->model->setOrder($this->order);
    }

    public function testGetOrder() {
        $this->model->setOrder($this->order);
        $this->assertEquals(1036, $this->model->getOrder()->getId());
    }
    
    public function testIsNotValidWhenStatusIsPending() {
        $this->assertEquals(false, $this->model->isValid());
    }

    
    public function testGetSalesOrderDeletion() {
        $this->assertEquals('00|S5|B001085|Order Del|', $this->model->_getRunControlRecord()->__toString());
    }
    
    public function testGenerateFilename() {
        $this->assertEquals('DEL_SO B001085.txt', $this->model->generateFilename());
    }

}
