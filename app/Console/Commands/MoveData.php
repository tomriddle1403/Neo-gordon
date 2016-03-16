<?php

namespace App\Console\Commands;

use DB;
use Illuminate\Console\Command;

class MoveData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'gd:move-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Move data from old database to new one';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->old = DB::connection('old');
        // Pages
        $this->movePages();
    }

    protected function movePages()
    {
        $this->info('Collecting old `pages` data');
        $pages = array_map(function ($page) {
            return [
                'id' => $page->id,
                'name' => $page->name,
                'slug' => $page->slug,
                'content' => $page->content,
                'text_background_enabled' => (bool) $page->flag_text,
                'logo_background_enabled' => (bool) $page->flag_logo_nav,
                'images' => json_encode(array_filter([
                    $page->image,
                    $page->image2,
                    $page->image3,
                    $page->image4,
                    $page->image5,
                ])),
                'background_colour' => $page->background_color,
                'metadata' => $page->metadata,
                'created_at' => $page->created_at,
                'updated_at' => $page->updated_at,
            ];
        }, $this->old->table('pages')->get());

        $this->info('Insert new data to `pages`');
        DB::table('pages')->insert($pages);
    }
}
