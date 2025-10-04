@php
    echo '<?xml version="1.0" encoding="UTF-8"?>'
@endphp
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    <url>
        <loc>{{url('/')}}</loc>
        <lastmod>2025-06-02T07:54:52+00:00</lastmod>
        <changefreq>Weekly</changefreq>
        <priority>0.8</priority>
    </url>



  <url>
        <loc>{{url('/about-us')}}</loc>
        <lastmod>2025-06-02T07:54:52+00:00</lastmod>
        <changefreq>Weekly</changefreq>
        <priority>0.8</priority>
    </url>


       <url>
        <loc>{{url('/gallery')}}</loc>
        <lastmod>2025-06-02T07:54:52+00:00</lastmod>
        <changefreq>Weekly</changefreq>
        <priority>0.8</priority>
    </url>


    @foreach ($tourCategory as $tourCategory)

    <url>
        <loc>{{url('/')}}/tour-and-package/{{$tourCategory->slug}}</loc>
        <lastmod>{{$tourCategory->created_at->tz('UTC')->toAtomString()}}</lastmod>
        <changefreq>Weekly</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach



       @foreach ($tour as $tour)

    <url>
        <loc>{{url('/')}}/tour-details/{{$tour->slug}}</loc>
        <lastmod>{{$tour->created_at->tz('UTC')->toAtomString()}}</lastmod>
        <changefreq>Weekly</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach

     <url>
        <loc>{{url('/contact-us')}}</loc>
        <lastmod>2025-06-02T07:54:52+00:00</lastmod>
        <changefreq>Weekly</changefreq>
        <priority>0.8</priority>
    </url>




</urlset>
