<?php

interface ReaderInterface {
    public function start() : void;
    public function read() : array;
    public function stop() : void;
}
interface WriterInterface {
   public function start() : void;
   public function write(array $data) : void;
   public function stop() : void;
}

class DatabaseReader implements ReaderInterface {
    // qualquer coisa implementada aqui
}

class SpreadsheetReader implements ReaderInterface {
    // qualquer coisa implementada aqui
}

class CsvWriter implements WriterInterface {
    // qualquer coisa implementada aqui
}

class JsonWriter implements WriterInterface {
    // qualquer coisa implementada aqui
}

class Transformer {

    // qualquer coisa implementada aqui inclusive o findReader e o findWriter

    public function transform(string $from, string $to) : void {
        $reader = $this->findReader($from);
        $writer = $this->findWriter($to);

        $reader->start();
        $writer->start();
        try {
            foreach ($reader->read() as $row) {
                $writer->write($row);
            }
         } finally {
             $writer->stop();
             $reader->stop();
         }
     }
}
