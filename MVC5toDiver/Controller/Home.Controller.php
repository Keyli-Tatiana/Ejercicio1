<?php
    class Home
    {
        public function Inicio
        {
            $smaty=new Smarty();
            $smaty->display('Home.tpl');
        }
    }
?>