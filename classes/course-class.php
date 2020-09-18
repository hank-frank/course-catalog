<?php 
    class Course {
        public $title;
        public $projects;
        public $hours; 
        public $description;
        public $objective;
        public $color;
        public $buttonText;

        function set_title($title) {
            $this->title = $title;
        }
        function get_title() {
            return $this->title;
        }

        function set_projects($projects) {
            $this->projects = $projects;
        }
        function get_projects() {
            return $this->projects;
        }

        function set_hours($hours) {
            $this->hours = $hours;
        }
        function get_hours() {
            return $this->hours;
        }

        function set_description($description) {
            $this->description = $description;
        }
        function get_description() {
            return $this->description;
        }

        function set_objective($objective) {
            $this->objective = $objective;
        }
        function get_objective() {
            return $this->objective;
        }

        function set_color($color) {
            $this->color = $color;
        }
        function get_color() {
            return $this->color;
        }

        function set_buttonText($buttonText) {
            $this->buttonText = $buttonText;
        }
        function get_buttonText() {
            return $this->buttonText;
        }

    };
?>