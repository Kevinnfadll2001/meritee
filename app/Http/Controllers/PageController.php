<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function careers()
    {
        return view('pages.careers');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function services()
    {
        return view('pages.services');
    }

    // =======================
// NEWS DATA (ONE SOURCE)
// =======================
private function newsData()
{
    return [
        [
        'slug' => 'lip-balm-benefits',
        'img' => 'blog1.jpeg',
        'date' => 'Lip Balm',
        'title' => 'Lip Balm — Everyday Moisture & Comfort',
        'content' => '
• Instant moisture for dry lips
• Protects against everyday dryness
• Smooth, comfortable wear
• Softens lips over time
        ',
    ],
    [
        'slug' => 'body-oil-mist-benefits',
        'img' => 'body-oil-mist.jpg',
        'date' => 'Body Oil Mist',
        'title' => 'Body Oil Mist — Lightweight Glow & Hydration',
        'content' => '
• Lightweight daily hydration
• Leaves skin silky without greasiness
• Enhances natural glow
• Refreshing scent with instant softness
        ',
    ],
    [
        'slug' => 'lash-eyebrow-serum-benefits',
        'img' => 'lash-eyebrow-serum.jpg',
        'date' => 'Lash & Eyebrow Serum',
        'title' => 'Lash & Eyebrow Serum — Strength & Definition',
        'content' => '
• Strengthens and nourishes lashes and brows
• Promotes fuller, longer-looking hairs
• Reduces breakage and fallout
• Hydrates and conditions for healthy growth
• Gentle formula for daily use
        ',
    ],

    ];
}

// =======================
// NEWS LIST
// =======================
public function news()
{
    $blogs = $this->newsData();
    return view('pages.news', compact('blogs'));
}

// =======================
// NEWS DETAILS
// =======================
public function newsDetails($slug)
{
    $post = collect($this->newsData())->firstWhere('slug', $slug);

    abort_if(!$post, 404);

    return view('pages.news-details', compact('post'));
}

}


