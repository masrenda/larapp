<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Adiyaksa Tarendra',
            'email' => 'tarenadiyaksa@gmail.com',
            'password' => bcrypt('123456789')
        ]);

        User::create([
            'name' => 'Dwita Febriyanti',
            'email' => 'dwifebiy@gmail.com',
            'password' => bcrypt('123456789')
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Social Library',
            'slug' => 'social-library'
        ]);

        Post::create([
            'title' => 'Nuxt 3 yang membingungkan',
            'slug' => 'nuxt-3-yang-membingunkan',
            'author' => 'adiyaksa tarendra',
            'excerpt' => 'Nuxt.js adalah framework JavaScript yang dibangun di atas Vue.js yang memungkinkan Anda untuk membuat aplikasi web statis atau dinamis dengan mudah.',
            'body' => 'Nuxt.js adalah framework JavaScript yang dibangun di atas Vue.js yang memungkinkan Anda untuk membuat aplikasi web statis atau dinamis dengan mudah. Nuxt.js menyediakan cara yang mudah untuk mengatur struktur proyek Anda dan mengelola aspek-aspek seperti routing, middleware, dan layanan lainnya yang dibutuhkan dalam aplikasi web. Jika Anda merasa bingung dengan Nuxt.js, pertama-tama pastikan bahwa Anda telah mempelajari dasar-dasar Vue.js terlebih dahulu. Kemudian, cobalah untuk memahami konsep-konsep dasar Nuxt.js seperti: Layouts: yang memungkinkan Anda untuk mengelola tata letak halaman yang digunakan oleh aplikasi Anda. Pages: yang merupakan komponen Vue yang mewakili halaman unik dalam aplikasi Anda. Middleware: yang digunakan untuk mengelola logika yang harus dilakukan sebelum menampilkan halaman. Plugins: yang memungkinkan Anda untuk menambahkan fitur tambahan ke aplikasi Anda dengan mudah. Jika Anda masih merasa bingung setelah mempelajari konsep-konsep dasar ini, cobalah untuk mengikuti tutorial atau membaca dokumentasi resmi Nuxt.js untuk mempelajari lebih lanjut. Jika masih ada pertanyaan, jangan ragu untuk bertanya kepada kami untuk mendapatkan bantuan lebih lanjut.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Laravel SSH',
            'slug' => 'laravel-ssh',
            'author' => 'adiyaksa tarendra',
            'excerpt' => 'Laravel includes a simple way to SSH into remote servers and run commands, allowing you to easily build Artisan tasks that work on remote servers. The SSH facade provides the access point to connecting to your remote servers and running commands.',
            'body' => 'Laravel includes a simple way to SSH into remote servers and run commands, allowing you to easily build Artisan tasks that work on remote servers. The SSH facade provides the access point to connecting to your remote servers and running commands. The configuration file is located at app/config/remote.php, and contains all of the options you need to configure your remote connections. The connections array contains a list of your servers keyed by name. Simply populate the credentials in the connections array and you will be ready to start running remote tasks. Note that the SSH can authenticate using either a password or an SSH key.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Cara Menulis Blog yang Baik dan Menarik',
            'slug' => 'cara-menulis-blog-yang-baik-dan-menarik',
            'author' => 'adiyaksa tarendra',
            'excerpt' => 'Blog kini memiliki berbagai fungsi. Tak hanya sebagai tempat menulis berbagai cerita sehari-hari atau uneg-uneg pribadi, blog bisa digunakan untuk kepentingan personal branding serta sarana pemasaran bisnis.',
            'body' => 'Sebelum mulai menulis blog, pertama-tama Toppers harus menentukan fokus blog terlebih dahulu. Fokus blog bisa bermacam-macam: Review buku, review film, review gadget, posting puisi karya sendiri, review drama series, cerita perjalanan, atau isu-isu sosial. Blog dengan fokus tertentu akan lebih mudah dikelola. Bila ingin blog jadi tempat menulis kegiatan sehari-hari juga tak masalah, namun biasanya blog jenis ini lebih sulit berkembang. Untuk keperluan artikel ini, mari kita gunakan blog buku sebagai contoh.',
            'category_id' => 2,
            'user_id' => 2
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
