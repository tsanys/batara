<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    private function generatePhoneNumber()
    {
        $randomNumber = mt_rand(1000000000, 9999999999);

        return '08' . substr($randomNumber, 0, 10);
    }
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\User::factory()->create([
            'fullname' => 'Admin',
            'phone' => $this->generatePhoneNumber(),
            'email' => 'bataracoop@gmail.com',
            'password' => Hash::make('BataraCoop.01')
        ]);

        \App\Models\MemberType::create([
            'name' => 'pelopor',
            'administrative_cost' => 500000,
            'principal_saving' => 500000,
            'mandatory_saving' => 100000,
            'special_mandatory_saving' => 10000000
        ]);
        \App\Models\MemberType::create([
            'name' => 'pengembang bisnis',
            'administrative_cost' => 500000,
            'principal_saving' => 500000,
            'mandatory_saving' => 100000,
            'special_mandatory_saving' => 1000000
        ]);
        \App\Models\MemberType::create([
            'name' => 'pemodal',
            'administrative_cost' => 500000,
            'principal_saving' => 500000,
            'mandatory_saving' => 100000,
            'special_mandatory_saving' => 25000000
        ]);
        \App\Models\MemberType::create([
            'name' => 'produsen',
            'administrative_cost' => 500000,
            'principal_saving' => 500000,
            'mandatory_saving' => 100000,
            'special_mandatory_saving' => 500000
        ]);
        \App\Models\MemberType::create([
            'name' => 'mitra',
            'administrative_cost' => 500000,
            'principal_saving' => 500000,
            'mandatory_saving' => 100000,
            'special_mandatory_saving' => 700000
        ]);
        \App\Models\MemberType::create([
            'name' => 'konsumen',
            'administrative_cost' => 500000,
            'principal_saving' => 500000,
            'mandatory_saving' => 100000,
            'special_mandatory_saving' => 100000
        ]);

        // \App\Models\News::create([
        //     'user_id' => 1,
        //     'title' => 'Testing Berita Pertama',
        //     'slug' => 'testing-berita-pertama',
        //     'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Molestie ac feugiat sed lectus vestibulum. Malesuada nunc vel risus commodo viverra maecenas accumsan lacus vel. Cursus sit amet dictum sit. Pretium fusce id velit ut tortor pretium viverra suspendisse. Mauris vitae ultricies leo integer malesuada. Ut placerat orci nulla pellentesque dignissim enim sit. Elit at imperdiet dui accumsan sit amet nulla. Molestie ac feugiat sed lectus. Aliquam sem fringilla ut morbi tincidunt augue interdum. Tristique et egestas quis ipsum suspendisse ultrices gravida dictum fusce. Id donec ultrices tincidunt arcu non sodales neque sodales. Donec adipiscing tristique risus nec feugiat in fermentum posuere. Amet dictum sit amet justo donec enim. Luctus accumsan tortor posuere ac ut consequat semper viverra. Congue nisi vitae suscipit tellus mauris a diam maecenas sed. Vivamus arcu felis bibendum ut tristique et egestas quis ipsum. Pretium quam vulputate dignissim suspendisse in est ante in nibh. Tellus orci ac auctor augue mauris augue.</p><p>Elit eget gravida cum sociis natoque. Vitae nunc sed velit dignissim sodales ut eu sem integer. Tincidunt lobortis feugiat vivamus at augue. Ut aliquam purus sit amet luctus. Morbi non arcu risus quis varius quam quisque. Vestibulum lectus mauris ultrices eros in. Erat imperdiet sed euismod nisi porta lorem. Mauris cursus mattis molestie a iaculis at erat pellentesque. Odio eu feugiat pretium nibh. Cras pulvinar mattis nunc sed blandit. Et ultrices neque ornare aenean euismod elementum nisi quis. Tortor consequat id porta nibh venenatis cras sed. Dictum non consectetur a erat nam at lectus. Integer quis auctor elit sed vulputate mi sit amet mauris. Urna nunc id cursus metus aliquam eleifend mi in nulla. Mi eget mauris pharetra et ultrices neque ornare. Libero nunc consequat interdum varius sit amet mattis vulputate. Varius duis at consectetur lorem donec massa sapien faucibus et. Nunc sed id semper risus in. Velit sed ullamcorper morbi tincidunt ornare massa eget.</p><p>Pellentesque eu tincidunt tortor aliquam nulla facilisi cras fermentum odio. Tellus integer feugiat scelerisque varius morbi enim. Eget velit aliquet sagittis id consectetur purus ut faucibus pulvinar. Ultrices mi tempus imperdiet nulla malesuada pellentesque elit. Blandit libero volutpat sed cras ornare. Diam phasellus vestibulum lorem sed risus ultricies tristique. Eleifend quam adipiscing vitae proin sagittis nisl. Gravida arcu ac tortor dignissim convallis aenean et. Eleifend quam adipiscing vitae proin sagittis nisl rhoncus. Volutpat diam ut venenatis tellus in metus. Augue ut lectus arcu bibendum at varius vel pharetra vel. Quam quisque id diam vel quam elementum. Gravida quis blandit turpis cursus in. Gravida cum sociis natoque penatibus et magnis dis.</p>',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore ',
        //     'is_published' => 1,
        // ]);
        // \App\Models\News::create([
        //     'user_id' => 1,
        //     'title' => 'Testing Berita Kedua',
        //     'slug' => 'testing-berita-kedua',
        //     'content' => '<p><strong>Testing Berita Untuk Pertama Kali</strong></p><p>&nbsp;</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Molestie ac feugiat sed lectus vestibulum. Malesuada nunc vel risus commodo viverra maecenas accumsan lacus vel. Cursus sit amet dictum sit. Pretium fusce id velit ut tortor pretium viverra suspendisse. Mauris vitae ultricies leo integer malesuada. Ut placerat orci nulla pellentesque dignissim enim sit. Elit at imperdiet dui accumsan sit amet nulla. Molestie ac feugiat sed lectus. Aliquam sem fringilla ut morbi tincidunt augue interdum. Tristique et egestas quis ipsum suspendisse ultrices gravida dictum fusce. Id donec ultrices tincidunt arcu non sodales neque sodales. Donec adipiscing tristique risus nec feugiat in fermentum posuere. Amet dictum sit amet justo donec enim. Luctus accumsan tortor posuere ac ut consequat semper viverra. Congue nisi vitae suscipit tellus mauris a diam maecenas sed. Vivamus arcu felis bibendum ut tristique et egestas quis ipsum. Pretium quam vulputate dignissim suspendisse in est ante in nibh. Tellus orci ac auctor augue mauris augue.</p><p>&nbsp;</p><p>Elit eget gravida cum sociis natoque. Vitae nunc sed velit dignissim sodales ut eu sem integer. Tincidunt lobortis feugiat vivamus at augue. Ut aliquam purus sit amet luctus. Morbi non arcu risus quis varius quam quisque. Vestibulum lectus mauris ultrices eros in. Erat imperdiet sed euismod nisi porta lorem. Mauris cursus mattis molestie a iaculis at erat pellentesque. Odio eu feugiat pretium nibh. Cras pulvinar mattis nunc sed blandit. Et ultrices neque ornare aenean euismod elementum nisi quis. Tortor consequat id porta nibh venenatis cras sed. Dictum non consectetur a erat nam at lectus. Integer quis auctor elit sed vulputate mi sit amet mauris. Urna nunc id cursus metus aliquam eleifend mi in nulla. Mi eget mauris pharetra et ultrices neque ornare. Libero nunc consequat interdum varius sit amet mattis vulputate. Varius duis at consectetur lorem donec massa sapien faucibus et. Nunc sed id semper risus in. Velit sed ullamcorper morbi tincidunt ornare massa eget.</p><p>&nbsp;</p><p>Pellentesque eu tincidunt tortor aliquam nulla facilisi cras fermentum odio. Tellus integer feugiat scelerisque varius morbi enim. Eget velit aliquet sagittis id consectetur purus ut faucibus pulvinar. Ultrices mi tempus imperdiet nulla malesuada pellentesque elit. Blandit libero volutpat sed cras ornare. Diam phasellus vestibulum lorem sed risus ultricies tristique. Eleifend quam adipiscing vitae proin sagittis nisl. Gravida arcu ac tortor dignissim convallis aenean et. Eleifend quam adipiscing vitae proin sagittis nisl rhoncus. Volutpat diam ut venenatis tellus in metus. Augue ut lectus arcu bibendum at varius vel pharetra vel. Quam quisque id diam vel quam elementum. Gravida quis blandit turpis cursus in. Gravida cum sociis natoque penatibus et magnis dis.</p>',
        //     'description' => 'Testing Berita Untuk Pertama Kali Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do ei',
        //     'is_published' => 0,
        // ]);
    }
}
