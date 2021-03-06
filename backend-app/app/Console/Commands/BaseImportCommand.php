<?php

namespace App\Console\Commands;
use App\Imports\PostsImport;
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
        Excel::import(new PostsImport, storage_path('app/public/posts.xlsx'));
    }
}
