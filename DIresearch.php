<?php

declare(strict_type=1);

namespace research;

interface LoggerInterface{}

class FileLgger{

    private string $file_path = "";

    public function setFilePath(string $file_path){
        $this->file_path = $file_path;
    }

    public function info(): void{
        print("loglogloglog");
    }
}

class NotDiLogger{
    
    const LOG_FILE_PAHT = "logger.txt";

    private $logger = NULL;

    public function __construct(){
        $this->logger = new FileLogger();
        $this->logger->setFilePath(self::LOG_FILE_PATH);
    }

    public function do_something(){
        $this->looger->info();
    }
}

class DiLogger{

    private $looger = NULL;
    public function __construct(LoogerInterface $logger){
        $this->logger = $logger;
    }

    public function do_something(){
        $this->looger->info();
    }
}