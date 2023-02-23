<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('products')->insert([
            'name' => 'Oppo Mobile',
            'price' => '300',
            'category' => 'mobile',
            'description' => 'A smartphone with 8gb ram and much more feature',
            'gallery' => 'https://www.mobiledokan.com/wp-content/uploads/2021/08/Oppo-A16-image.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'Samsung TV',
            'price' => '400',
            'category' => 'TV',
            'description' => 'A smart TV with much more feature',
            'gallery' => 'https://images.samsung.com/is/image/samsung/p6pim/bd/qa75q70barsfs/gallery/bd-qled-q70b-qa75q70barsfs-533632704?$730_584_PNG$',
        ]);


        DB::table('products')->insert([
            'name' => 'LG Fridge',
            'price' => '500',
            'category' => 'fridge',
            'description' => 'A smart Fridge with much more feature',
            'gallery' => 'https://www.lg.com/bd/images/refrigerators/md07562760/gallery/N01_D-1.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'Panasonic AC',
            'price' => '600',
            'category' => 'AC',
            'description' => 'A smart AC with much more feature',
            'gallery' => 'https://transcomdigital.com/_next/image?url=https%3A%2F%2Ftranscom-storage.s3.amazonaws.com%2F2eb459e3-036e-4c2f-ac2a-2a2039c4a351%2Fddd04b35-531a-4fe0-bc10-d4103d6bf2a6%2Fe5081a13-1a36-4a04-a8c1-7d74efc3675b&w=1500&q=100'
        ]);
        DB::table('products')->insert([
            'name' => 'Sony Camera',
            'price' => '700',
            'category' => 'camera',
            'description' => 'A smart Camera with much more feature',
            'gallery' => 'https://d13o3tuo14g2wf.cloudfront.net/thumbnails%2Fmedium%2FAsset+Hierarchy%2FConsumer+Assets%2FDigital+Imaging%2FAlpha%2FE-mount%2FE-mount+Kits%2FBodies%2FILCE%2FILCE-7RM5-B%2FeComm+Product+Images%2FILCE-7RM5_front.png.png?Policy=eyJTdGF0ZW1lbnQiOlt7IlJlc291cmNlIjoiaHR0cHM6Ly9kMTNvM3R1bzE0ZzJ3Zi5jbG91ZGZyb250Lm5ldC90aHVtYm5haWxzJTJGbWVkaXVtJTJGQXNzZXQrSGllcmFyY2h5JTJGQ29uc3VtZXIrQXNzZXRzJTJGRGlnaXRhbCtJbWFnaW5nJTJGQWxwaGElMkZFLW1vdW50JTJGRS1tb3VudCtLaXRzJTJGQm9kaWVzJTJGSUxDRSUyRklMQ0UtN1JNNS1CJTJGZUNvbW0rUHJvZHVjdCtJbWFnZXMlMkZJTENFLTdSTTVfZnJvbnQucG5nLnBuZyIsIkNvbmRpdGlvbiI6eyJEYXRlTGVzc1RoYW4iOnsiQVdTOkVwb2NoVGltZSI6MjE0NTc2MjAwMH19fV19&Signature=QD64XJxqCdr2nRiX22-jcAKChTekMyPy1k4fKwWNjbnnHE~~aYDraoqfyet~V6IyUKjZcHRm8xj8pAujKQ2KIRNBzJJ9q6FLSyG9fi0bG9ABuf57ngv22cF78PYBgC3Do-gcMHKyxTNX2UatJGV-xQRdtSPQYWsjzEk7t4M4LawPyo2YNfpXGvhNX905r~D~u79lhByEbRJbgXWFtBPrY1QFHsLo2mkTo7DY1ObcDpEqmEN2a30W6y0a4Zv2hIF7QCSc5KLT75YK-hepoRnbtQNe7W3XGG0HPZZL2PxVgB80uNz0WgN3ESGK0LS9hJOgU2BGnhyaKKeQQlJMeDMiMQ__&Key-Pair-Id=K37BLT9C6HMMJ0',
        ]);
     
        

         
    }
}
