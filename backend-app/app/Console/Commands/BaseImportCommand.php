<?php

namespace App\Console\Commands;
use App\Imports\GoodsImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Console\Command;

class BaseImportCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'base-import-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        Excel::import(new GoodsImport, storage_path('app/public/goods.xlsx'));
    }
}
