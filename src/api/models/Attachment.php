<?php
class Attachment extends BaseModel {
    public $filename = '';
    public $name = '';
    public $type = '';
    public $user_id = 0;
    public $timestamp = null;

    public function __construct($container, $id = 0) {
        parent::__construct('attachment', $id, $container);

        $this->loadFromBean($this->bean);
    }

    public function updateBean() {
    }

    public function loadFromBean($container, $bean) {
    }

    public function loadFromJson($container, $obj) {
    }
}
