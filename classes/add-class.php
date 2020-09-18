<?php
    class AddCard {
        public $headline;
        public $subheadline;
        public $addColor;
        public $cta;
    };

    function set_headline($headline) {
        $this->headline = $headline;
    }
    function get_headline() {
        return $this->headline;
    }

    function set_subheadline($subheadline) {
        $this->subheadline = $subheadline;
    }
    function get_subheadline() {
        return $this->subheadline;
    }

    function set_addColor($addColor) {
        $this->addColor = $addColor;
    }
    function get_addColor() {
        return $this->addColor;
    }

    function set_cta($cta) {
        $this->cta = $cta;
    }
    function get_cta() {
        return $this->cta;
    }
?>