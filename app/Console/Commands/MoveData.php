<?php

namespace App\Console\Commands;

use App\ProjectPage;
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
        $this->movePages();
        $this->moveProjects();
    }

    protected function moveProjects()
    {
        $this->info('Moving `categories` data');
        $categories = array_map(function ($i) {
            return (array) $i;
        }, $this->old->table('categories')->get());
        DB::table('categories')->insert($categories);

        $this->info('Moving `projects` data');
        $projects = array_map(function ($p) {
            $metadata = $p->brochure !== null
                ? ['brochure' => $p->brochure]
                : null;

            return [
                'id'                      => $p->id,
                'category_id'             => $p->category_id,
                'name'                    => $p->name,
                'published'               => $p->published,
                'description'             => $p->description,
                'client'                  => $p->client,
                'sort_order'              => $p->sort_order,
                'metadata'                => json_encode($metadata),
                'text_background_enabled' => (bool) $p->flag_text,
                'logo_background_enabled' => (bool) $p->flag_logo_nav,
                'background_colour'       => $p->background_color,
                'created_at'              => $p->created_at,
                'updated_at'              => $p->updated_at,
            ];
        }, $this->old->table('projects')->get());

        DB::table('projects')->insert($projects);
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
