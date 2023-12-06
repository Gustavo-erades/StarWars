<?php
    class StarWarsFilmes{
        // atributos
        private $notaIMDB;
        private $notaRotenTomatoes;
        private $notaMetaCritica;
        private $diretor;
        private $producao;
        private $atores;
        private $lancamento;
        private $roterista;
        private $genero;
        private $duracao;
        private $premios;

        // métodos getters e setters
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
        // Produção
        public function getProducao(){
            return $this->producao;
        }
        public function setProducao($Producao){
            $this->producao=$Producao;
        }
        // Atores
        public function getAtores(){
            return $this->atores;
        }
        public function setAtores($Atores){
            $this->atores=$Atores;
        }
        // Lançamento
        public function getLancamento(){
            return $this->lancamento;
        }
        public function setLancamento($lancamento){
            $this->lancamento=$lancamento;
        }
        // Roteirista
        public function getRoterista(){
            return $this->roterista;
        }
        public function setRoterista($roterista){
            $this->roterista=$roterista;
        }
        // Gênero
        public function getGenero(){
            return $this->genero;
        }
        public function setGenero($genero){
            $this->genero=$genero;
        }
        // Duração
        public function getDuracao(){
            return $this->duracao;
        }
        public function setDuracao($duracao){
            $this->duracao=$duracao;
        }
        // Prêmios
        public function getPremios(){
            return $this->premios;
        }
        public function setPremios($Premios){
            $this->premios=$Premios;
        }

    }