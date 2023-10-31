<?php

namespace App\Models;



class Post 
{
    private static $post_posts =[
        [
            "title" => "Aku,Kamu dan Semesta",
            "slug" => "judul-cerita-cerita-pertama",
            "penulis" => "Teo Yulio Sihotang",
            "body" =>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi 
            accusantium a ipsa est explicabo atque, aliquid dolore? Adipisci
             nulla corporis, exercitationem debitis non quaerat incidunt ratione 
             sequi nostrum. Facilis porro modi ipsam minima, soluta cum quos nobis
              nulla assumenda corrupti debitis dolore, illum quas repellendus iure ab,
               ipsa possimus numquam culpa expedita? Commodi ea hic, consequuntur ab 
               blanditiis placeat a laudantium incidunt impedit itaque, unde enim 
               quasi, maiores ipsum quas tempore in facere nisi animi eum error fuga 
               aut. Assumenda, minima suscipit ducimus exercitationem officia ipsam 
               repellat consequatur itaque ullam."
        ],
        [
            "title" => "Manusia Kuat ",
            "slug" => "judul-cerita-cerita-kedua",
            "penulis" => "Riama Sinaga",
            "body" =>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi 
            accusantium a ipsa est explicabo atque, aliquid dolore? Adipisci
            nulla corporis, exercitationem debitis non quaerat incidunt ratione 
            sequi nostrum. Facilis porro modi ipsam minima, soluta cum quos nobis
            nulla assumenda corrupti debitis dolore, illum quas repellendus iure ab,
            ipsa possimus numquam culpa expedita? Commodi ea hic, consequuntur ab 
            blanditiis placeat a laudantium incidunt impedit itaque, unde enim 
            quasi, maiores ipsum quas tempore in facere nisi animi eum error fuga 
            aut. Assumenda, minima suscipit ducimus exercitationem officia ipsam 
            repellat consequatur itaque ullam."
        ]
     ];


     public static function all()
{
    return collect(self:: $post_posts);
}
public static function find($slug)
{
    $posts =static::all();
//     $post =[];
// foreach($posts as $p){
//     if($p["slug"] === $slug){
//         $post = $p;
//     }
// }
return $posts->firstWhere('slug', $slug);
}
}
