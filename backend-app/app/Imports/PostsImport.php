<?php

namespace App\Imports;

use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class PostsImport implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
           $newPost = Post::create([
                'user_id' => User::where('name', $row['name'])->first()->id,
                'title' => $row['title'],
                'body' => $row['body'],            
            ]);     
            $tags = explode(";", $row['tags']);
            foreach ($tags as $tag) {
                Tag::firstOrCreate(['name' => $tag])->posts()->syncWithoutDetaching([$newPost->id]);
            }            
        }
    }
}