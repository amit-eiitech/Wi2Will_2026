<?php

namespace Database\Seeders;

use App\Enums\ContentStatus;
use App\Models\BlogPost;
use App\Models\Category;
use App\Models\Event;
use App\Models\News;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    public function run(): void
    {
        // --- Categories ---
        $newsCategory = Category::updateOrCreate(
            ['slug' => 'company-news', 'scope' => 'news'],
            ['name' => 'お知らせ', 'description' => '株式会社ウィズウィルからのお知らせ'],
        );

        $servicesCategory = Category::updateOrCreate(
            ['slug' => 'services', 'scope' => 'news'],
            ['name' => '事業の取り組み', 'description' => '販促・営業支援、人材派遣の取り組み'],
        );

        $mediaCategory = Category::updateOrCreate(
            ['slug' => 'media', 'scope' => 'news'],
            ['name' => 'メディア掲載', 'description' => '雑誌・Webメディアへの掲載情報'],
        );

        $recruitCategory = Category::updateOrCreate(
            ['slug' => 'recruit', 'scope' => 'news'],
            ['name' => '採用情報', 'description' => 'スタッフ募集・採用に関するお知らせ'],
        );

        // ... blog/event categories unchanged ...

        // --- News ---
        $news1 = News::updateOrCreate(
            ['slug' => 'corporate-website-renewal'],
            [
                'title' => 'コーポレートサイトをリニューアルしました',
                'excerpt' => '事業内容や会社情報をより分かりやすくお伝えするため、公式サイトを刷新しました。',
                'content' => '<p>このたび、株式会社ウィズウィルのコーポレートサイトをリニューアルしました。</p><p>派遣スタッフによる販促・営業支援の取り組みや、研修体制についてご紹介しています。ぜひご覧ください。</p>',
                'status' => ContentStatus::Published,
                'published_at' => now()->subDays(3),
            ],
        );
        $news1->categories()->sync([$newsCategory->id]);

        $news2 = News::updateOrCreate(
            ['slug' => 'umeda-promotion-event-staffing'],
            [
                'title' => '大阪・梅田の販促イベントにスタッフを派遣しました',
                'excerpt' => '商業施設で開催された販促イベントに、接客研修を修了したスタッフを派遣しました。',
                'content' => '<p>大阪・梅田の商業施設で開催された販促イベントに、当社スタッフを派遣しました。</p><p>商品のご案内や試供品の配布を通じて、来場者の増加と売場の活性化を支援しました。</p>',
                'status' => ContentStatus::Published,
                'published_at' => now()->subDays(12),
            ],
        );
        $news2->categories()->sync([$servicesCategory->id]);

        $news3 = News::updateOrCreate(
            ['slug' => 'sales-staff-training-program'],
            [
                'title' => '販促スタッフ向けの接客研修を実施しました',
                'excerpt' => '接客マナーと商品提案の基礎を学ぶ、新人スタッフ向け研修を実施しました。',
                'content' => '<p>新人スタッフを対象に、接客マナーのほか、商品の特長を分かりやすく伝える提案方法を学ぶ研修を実施しました。</p><p>研修後は現場での実習を通じて、実践力を身につけていきます。</p>',
                'status' => ContentStatus::Published,
                'published_at' => now()->subDays(20),
            ],
        );
        $news3->categories()->sync([$servicesCategory->id, $newsCategory->id]);

        $news4 = News::updateOrCreate(
            ['slug' => 'media-coverage-sales-support'],
            [
                'title' => '当社の販売支援サービスが業界メディアに掲載されました',
                'excerpt' => '人材派遣による販促支援の取り組みが、業界メディアの特集記事で紹介されました。',
                'content' => '<p>当社が提供する販売支援サービスが、業界メディアの特集記事で紹介されました。</p><p>企業の販促活動を支える派遣スタッフの育成と配置について、取り組みをお伝えしています。</p>',
                'status' => ContentStatus::Published,
                'published_at' => now()->subDays(28),
            ],
        );
        $news4->categories()->sync([$mediaCategory->id]);

        $news5 = News::updateOrCreate(
            ['slug' => 'winter-staff-recruitment'],
            [
                'title' => '冬季スタッフの募集を開始しました',
                'excerpt' => '年末年始の販促シーズンに向けて、イベント・販売スタッフを募集します。',
                'content' => '<p>年末年始の販促シーズンに向けて、イベントスタッフ・販売スタッフを募集しています。</p><p>未経験の方も歓迎します。研修制度が充実しているため、安心してご応募ください。</p>',
                'status' => ContentStatus::Published,
                'published_at' => now()->subDays(35),
            ],
        );
        $news5->categories()->sync([$recruitCategory->id]);

        // --- Events ---
        // $event1 = Event::updateOrCreate(
        //     ['slug' => 'annual-tech-summit-2025'],
        //     [
        //         'title' => 'Annual Tech Summit 2025',
        //         'excerpt' => 'Join us for our flagship technology conference featuring keynotes, panels, and networking.',
        //         'content' => '<p>Join us for our flagship technology conference featuring keynotes from industry leaders, hands-on panels, and unparalleled networking opportunities.</p><p>Early-bird registration is now open.</p>',
        //         'location' => 'San Francisco Convention Center, CA',
        //         'registration_url' => 'https://example.com/register/tech-summit',
        //         'starts_at' => now()->addDays(30),
        //         'ends_at' => now()->addDays(32),
        //         'status' => ContentStatus::Published,
        //         'published_at' => now()->subDays(10),
        //     ],
        // );
        // $event1->categories()->sync([$conferenceCategory->id]);

        // $event2 = Event::updateOrCreate(
        //     ['slug' => 'laravel-workshop-series'],
        //     [
        //         'title' => 'Laravel Workshop Series',
        //         'excerpt' => 'A 3-day intensive workshop covering advanced Laravel patterns, testing, and deployment.',
        //         'content' => '<p>A 3-day intensive workshop covering advanced Laravel patterns, testing strategies, and deployment best practices. Suitable for intermediate to senior developers.</p>',
        //         'location' => 'Online (Zoom)',
        //         'registration_url' => 'https://example.com/register/laravel-workshop',
        //         'starts_at' => now()->addDays(14),
        //         'ends_at' => now()->addDays(16),
        //         'status' => ContentStatus::Published,
        //         'published_at' => now()->subDays(7),
        //     ],
        // );
        // $event2->categories()->sync([$workshopCategory->id]);

        // $event3 = Event::updateOrCreate(
        //     ['slug' => 'community-meetup-monthly'],
        //     [
        //         'title' => 'Community Meetup — Monthly',
        //         'excerpt' => 'Our monthly community meetup with lightning talks and open discussions.',
        //         'content' => '<p>Our monthly community meetup with lightning talks and open discussions. Everyone is welcome — bring your questions and ideas!</p>',
        //         'location' => 'WeWork Downtown, Austin TX',
        //         'starts_at' => now()->addDays(7),
        //         'ends_at' => now()->addDays(7)->addHours(2),
        //         'status' => ContentStatus::Published,
        //         'published_at' => now()->subDays(3),
        //     ],
        // );
        // $event3->categories()->sync([$communityCategory->id]);

        // --- Blog Posts ---
        // $blog1 = BlogPost::updateOrCreate(
        //     ['slug' => 'getting-started-with-our-api'],
        //     [
        //         'title' => 'Getting Started with Our API',
        //         'excerpt' => 'A quick guide to integrating with our REST API, including authentication and common endpoints.',
        //         'content' => '<p>A quick guide to integrating with our REST API. We cover authentication via API keys, common endpoints, rate limiting, and error handling.</p><p>By the end of this post you will be able to make your first authenticated request in under 5 minutes.</p>',
        //         'author_name' => 'Jane Developer',
        //         'status' => ContentStatus::Published,
        //         'published_at' => now()->subDays(2),
        //     ],
        // );
        // $blog1->categories()->sync([$techCategory->id]);

        // $blog2 = BlogPost::updateOrCreate(
        //     ['slug' => '5-tips-for-remote-team-productivity'],
        //     [
        //         'title' => '5 Tips for Remote Team Productivity',
        //         'excerpt' => 'Practical strategies we use internally to keep our distributed team aligned and productive.',
        //         'content' => '<p>Practical strategies we use internally to keep our distributed team aligned and productive. From async standups to shared dashboards, these tips have made a real difference for us.</p>',
        //         'author_name' => 'Alex Manager',
        //         'status' => ContentStatus::Published,
        //         'published_at' => now()->subDays(9),
        //     ],
        // );
        // $blog2->categories()->sync([$communityCategory->id]);

        // $blog3 = BlogPost::updateOrCreate(
        //     ['slug' => 'why-we-migrated-to-laravel-12'],
        //     [
        //         'title' => 'Why We Migrated to Laravel 12',
        //         'excerpt' => 'Our journey migrating a large application to Laravel 12 — the wins, the gotchas, and the lessons learned.',
        //         'content' => '<p>Our journey migrating a large application to Laravel 12. We share the wins, the gotchas, and the lessons learned along the way.</p><p>Spoiler: the new caching improvements alone were worth the upgrade.</p>',
        //         'author_name' => 'Jane Developer',
        //         'status' => ContentStatus::Published,
        //         'published_at' => now()->subDays(18),
        //     ],
        // );
        // $blog3->categories()->sync([$techCategory->id]);

        // $blog4 = BlogPost::updateOrCreate(
        //     ['slug' => 'upcoming-features-roadmap-2025'],
        //     [
        //         'title' => 'Upcoming Features — Roadmap 2025',
        //         'excerpt' => 'A sneak peek at what we have planned for the rest of the year, including AI-powered search.',
        //         'content' => '<p>A sneak peek at what we have planned for the rest of the year. Highlights include AI-powered search, a redesigned dashboard, and expanded webhook support.</p>',
        //         'author_name' => 'Alex Manager',
        //         'status' => ContentStatus::Draft,
        //         'published_at' => null,
        //     ],
        // );
        // $blog4->categories()->sync([$techCategory->id, $communityCategory->id]);
    }
}
