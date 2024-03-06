<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Brendan Landis : Projects</title>
    <base href="/" />
    <?php include '../html-header.php'; ?>
</head>

<body class="projects">
    <?php include "../header.php"; ?>
    <main>
        <h2>Projects</h2>
        <p>A few things I've worked on, professionally and otherwise:</p>
        <article>
            <h3>Slow Names CMS</h3>
            <div id="carouselSlowNames" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/cms01.jpg" class="d-block w-100" alt="A list of bands within the CMS">
                        <div class="carousel-caption">
                            <p>A list of bands within Strapi</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/cms02.jpg" class="d-block w-100" alt="The structure of the Release content type">
                        <div class="carousel-caption">
                            <p>The structure of the Release content type within Strapi</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/cms03.jpg" class="d-block w-100" alt="The CMS' media library">
                        <div class="carousel-caption">
                            <p>The CMS' media library within Strapi</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/cms04.jpg" class="d-block w-100" alt="The form for entering a post within the custom CMS frontend">
                        <div class="carousel-caption">
                            <p>The form for entering a post within the custom CMS frontend</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/cms05.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <p>A list of previous posts for a particular band within the custom CMS frontend</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/cms06.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <p>The form for entering a new show (or tour) within the custom CMS frontend</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-controls">
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselSlowNames" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselSlowNames" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselSlowNames" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselSlowNames" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselSlowNames" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselSlowNames" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselSlowNames" data-bs-slide-to="5" aria-label="Slide 6"></button>
                    </div>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselSlowNames" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <p>A headless CMS meant to help musicians keep track of their recorded and live activity, as well as internal documents. I created this to fill the need of my own bands. It's currently working great for us, and being tested and expanded to work for others.</p>
            <p>
                It's useful for several things:
            <ul>
                <li>Keeping track of future show bookings &mdash; whether a show has been confirmed by the venue, whether it has a flyer, a ticket link, a full lineup, start time, etc.</li>
                <li>Maintaining an archive for one's recorded material and past shows (including photos and videos).</li>
                <li>Managing internal-facing documents: press photos, band logos &amp; promotional material, writing tools, instrumental practice logs, merch templates &amp; designs; contact information for venue promoters in various cities, etc.</li>
            </ul>
            </p>
            <p>The CMS is constructed using Strapi, and utilizes a REST API that other sites and apps can query. An instance of the CMS is meant to be used by anyone from a single solo artist to a small collective of bands, each sharing members. A user can indicate which bands &amp; projects they're in and administrate data for each of those bands.</p>
            <p>I'm currently writing a custom frontend that's intended to replace Strapi's admin interface, making it easier to work with this idiosyncratic data set.</p>
        </article>
    </main>
    <?php include "../footer.php"; ?>
</body>

</html>