<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = [
            [
                'user_id' => 2,
                //'thumbnail' => 'gambar.jpg',
                'title' => 'Apis Dorsta merupakan lebah yang keren? rill kah maniezz',
                'article_body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sodales porta lorem, sit amet tempus augue posuere aliquam. Aenean sapien ligula, lobortis eget nibh ac, aliquet tincidunt diam. Integer fringilla augue eget sem ultricies, vitae mattis lectus malesuada. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In vestibulum facilisis lectus, vitae tristique dui sagittis et. Vivamus at dolor vitae turpis finibus ornare nec in tortor. Mauris sollicitudin sem quis felis pulvinar venenatis. Mauris vehicula sem id ante tempus laoreet. Etiam feugiat, tortor ut vehicula lacinia, tortor sem vehicula orci, eget aliquet lorem arcu et lorem. Pellentesque sed enim magna. Quisque arcu est, consectetur euismod finibus ut, commodo quis justo. Maecenas et purus congue, tempor dolor imperdiet, semper arcu. Etiam ut congue nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit.

                    Morbi pharetra mattis nulla, non porttitor orci mattis nec. Ut vehicula, magna nec dictum lacinia, odio velit pharetra turpis, elementum dictum lorem dui vitae massa. Aenean risus ante, suscipit nec felis sed, auctor molestie lectus. Mauris et leo leo. Mauris aliquam commodo libero ac tempus. Sed et nulla ex. Integer dignissim est sed vehicula blandit. Suspendisse hendrerit, ipsum nec efficitur porttitor, enim dolor sodales augue, ac pretium dolor ante et nisi. Phasellus vulputate sed erat a imperdiet. Cras a placerat odio. Nam neque odio, posuere vel dolor at, aliquet tempor lorem. Vivamus nibh arcu, molestie eu ligula rutrum, commodo fringilla eros.

                    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis finibus tortor at leo tincidunt elementum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In eleifend bibendum nulla, id convallis mauris imperdiet nec. Quisque vitae placerat magna, quis faucibus lacus. Nulla pellentesque fermentum ante, eget scelerisque diam suscipit ac. Ut aliquet fermentum orci, vitae sodales purus eleifend eget. Sed ornare nisi quis justo vulputate accumsan. Curabitur ut porta ex, vel ultrices neque.

                    Nullam convallis est vel ligula viverra pulvinar vel eu nisl. Suspendisse quis ultrices ipsum. Maecenas turpis velit, viverra vitae accumsan vel, vestibulum vel eros. Proin iaculis magna sit amet est semper, non mollis lacus luctus. Pellentesque eget velit elementum dolor vestibulum congue. Donec ut facilisis lacus. Sed posuere vehicula lacus, et ultrices odio. Nam a fermentum dolor, non hendrerit enim. Suspendisse facilisis, nisi ac vestibulum pellentesque, lectus risus elementum tellus, ultrices consequat eros tortor ut enim. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean congue quam euismod odio placerat, quis porttitor felis commodo. Fusce a hendrerit justo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum vitae vestibulum neque. Donec felis est, tincidunt ut sapien a, auctor dapibus ligula.

                    Nullam sollicitudin tincidunt feugiat. Morbi at ligula est. Integer sollicitudin posuere nisl, vel eleifend nibh condimentum sit amet. Curabitur nec neque tempus, ultricies turpis id, bibendum enim. Ut dictum aliquet urna, a aliquam nibh mattis ac. Nulla pharetra vehicula odio, eu laoreet eros finibus quis. Aenean mollis massa nec accumsan sagittis.',
                'slug' => Str::slug('Apis Dorsta merupakan lebah yang keren? rill kah maniezz')
            ]
        ];
        foreach($articles as $article)
        {
            Article::create($article);
        }
    }
}
