<?php
    interface Functions {
        public function move();
        public function specialFunction(); 
        public function beep(); 
        public function wipersOn(); 
    }

    abstract class Tech implements Functions {
        private $type;
        private $color;
        private $salon;
        public function __construct($type, $color, $salon)
        {
            $this->type = $type;
            $this->color = $color;
            $this->salon = $salon;
        }
        public function info() {
            echo "Тип: $this->type.<br>";
            echo "Цвет: $this->color.<br>";
            echo "Салон: $this->salon.<br>";
        }
        abstract public function turn ();
    }

    class SpecialClass {
        public function special($object) {
            $object->move();
            $object->specialFunction();
        }
    }

    class Car extends Tech {
        public function move() {
            echo "Едем прямо, скорость 100 км/ч.<br>";
        }
        public function turn () {
            echo "Поворот направо.<br>";
        }
        public function specialFunction() {
            echo "Открываем окно в крыше.<br>";
        }
        public function beep() {
            echo "Бип-бип.<br>";
        }
        public function wipersOn() {
            echo "Включаем дворники.<br>";
        }
    }
    class Tank extends Tech {
        public function move() {
            echo "Едем прямо, скорость 40 км/ч.<br>";
        }
        public function turn () {
            echo "Поворот налево.<br>";
        }
        public function specialFunction() {
            echo "Огонь!<br>";
        }
        public function beep() {
            echo "Ищем сигнал, а его нет.<br>";
        }
        public function wipersOn() {
            echo "Дворники отсутствуют.<br>";
        }
    }
    class Buldozer extends Tech {
        public function move() {
            echo "Едем прямо, скорость 10 км/ч.<br>";
        }
        public function turn () {
            echo "Поворот налево.<br>";
        }
        public function specialFunction() {
            echo "Опускаем ковш.<br>";
        }
        public function beep() {
            echo "Бип-Бип!.<br>";
        }
        public function wipersOn() {
            echo "Включаем дворники.<br>";
        }
    }
    $auto = new Car("Hyundai Solaris", "Черный", "Велюр");
    $auto->info();
    $auto->turn();
    $specialObject = new SpecialClass();
    $specialObject->special($auto);
    $tank = new Tank("Sherman", "Хаки", "Сталь");
    $tank->info();
    $tank->wipersOn();
    $specialObject->special($tank);
    $buldozer = new Buldozer("Hitachi", "Желтый", "Металл");
    $buldozer->info();
    $specialObject->special($buldozer);
?>	