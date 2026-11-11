<?php
declare(strict_types=1);

// ==========================================
// 1. DESAIN YANG KELIRU (Pemaksaan Inheritance)
// ==========================================
class ProcessorKeliru {
    public function __construct(protected string $merk) {}
}

// SALAH: Komputer bukan jenis dari Processor (Komputer is-a Processor = SALAH)
class KomputerKeliru extends ProcessorKeliru {
    public function getInfo(): string {
        return "Komputer dengan CPU: " . $this->merk;
    }
}


// ==========================================
// 2. PERBAIKAN DESAIN (Menggunakan Komposisi)
// ==========================================
class Processor {
    public function __construct(private string $merk, private float $kecepatanGHz) {}

    public function getSpesifikasi(): string {
        return "{$this->merk} @ {$this->kecepatanGHz} GHz";
    }
}

class Komputer {
    private string $namaModel;
    private Processor $processor; 

    public function __construct(string $namaModel, Processor $processor) {
        $this->namaModel = $namaModel;
        $this->processor = $processor;
    }

    public function getInfo(): string {
        return "Model: {$this->namaModel} | CPU: " . $this->processor->getSpesifikasi();
    }
}

$cpu = new Processor("Intel Core i5", 3.4);
$pc = new Komputer("Lenovo LOQ", $cpu);
echo $pc->getInfo();