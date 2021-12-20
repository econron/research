<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TooManyDataInsert extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'insert:toomany';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'テスト練習用に作成したコマンドその３';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return 0;
    }
}
