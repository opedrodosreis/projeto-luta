<?php
class Lutador {
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
        $this->setNome($no);
        $this->setNacionalidade($na);
        $this->setIdade($id);
        $this->setAltura($al);
        $this->setPeso($pe);
        $this->setVitorias($vi);
        $this->setDerrotas($de);
        $this->setEmpates($em);
    }

    public function apresentar(){
        echo "<br>Lutador: {$this->getNome()}";
        echo "<br>Origem: {$this->getNacionalidade()}";
        echo "<br>{$this->getIdade()} anos";
        echo "<br>{$this->getAltura()}m de altura";
        echo "<br>Pesando {$this->getPeso()}Kg";
        echo "<br>Ganhou: {$this->getVitorias()}";
        echo "<br>Perdeu: {$this->getDerrotas()}";
        echo "<br>Empatou: {$this->getEmpates()}<br>";
    }
    public function status(){
        echo "<br>{$this->getNome()}";
        echo " é um peso {$this->getCategoria()}";
        echo "<br>{$this->getVitorias()} vitórias";
        echo "<br>{$this->getDerrotas()} derrotas";
        echo "<br>{$this->getEmpates()} empates<br>";
    }
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }
    public function getNome() {
        return $this->nome;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getVitorias() {
        return $this->vitorias;
    }

    public function getDerrotas() {
        return $this->derrotas;
    }

    public function getEmpates() {
        return $this->empates;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }

    private function setCategoria() {
        if($this->peso < 52.2){
            $this->categoria = "Inválido";
        } elseif($this->peso <= 70.3){
            $this->categoria = "Leve";
        } elseif($this->peso <= 83.9){
            $this->categoria = "Médio";
        } elseif($this->peso <= 120.2){
            $this->categoria = "Pesado";
        } else{
            $this->categoria = "Inválido";
        }
    }

    public function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }

    public function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    public function setEmpates($empates) {
        $this->empates = $empates;
    }

}
