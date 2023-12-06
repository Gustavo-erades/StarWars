<?php
    class Filmes{
        private $dataLancamento;
        private $notaIMDB;
        private $notaRotenTomatoes;
        private $notaMetaCritica;
        private $diretor;
        private $atores;
        private $roterista;
        private $duracao;
        private $bilheteria;
        // Data de lançamento
        public function getDataLancamento(){
            return $this->dataLancamento;
        }
        public function setDataLancamento($dataLancamento){
            $this->dataLancamento=$dataLancamento;
        }
        // IMDB
        public function getNotaIMDB(){
            return $this->notaIMDB;
        }
        public function setNotaIMDB($notaIMDB){
            $this->notaIMDB=$notaIMDB;
        }
        // Roten Tomatoes
        public function getnotaRotenTomatoes(){
            return $this->notaRotenTomatoes;
        }
        public function setNotaRotenTomatoes($notaRotenTomatoes){
            $this->notaRotenTomatoes=$notaRotenTomatoes;
        }
        // MetaCritica
        public function getnotaMetaCritica(){
            return $this->notaMetaCritica;
        }
        public function setnotaMetaCritica($notaMetaCritica){
            $this->notaMetaCritica=$notaMetaCritica;
        }
        // Diretor
        public function getDiretor(){
            return $this->diretor;
        }
        public function setDiretor($diretor){
            $this->diretor=$diretor;
        }
        // Atores
        public function getAtores(){
            return $this->atores;
        }
        public function setAtores($Atores){
            $this->atores=$Atores;
        }
        public function getRoterista(){
            return $this->roterista;
        }
        public function setRoterista($roterista){
            $this->roterista=$roterista;
        }
        // Duração
        public function getDuracao(){
            return $this->duracao;
        }
        public function setDuracao($duracao){
            $this->duracao=$duracao;
        }
        // Bilheteria
        public function getBilheteria(){
            return $this->bilheteria;
        }
        public function setBilheteria($bilheteria){
            return $this->bilheteria=$bilheteria;
        }
    }