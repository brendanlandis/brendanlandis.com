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
        <section>
            <p>A few things I've worked on, professionally and otherwise:</p>
            <div class="accordion accordion-flush" id="accordionProjects">
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Slow Names CMS
                        </button>
                    </h3>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionProjects">
                        <div class="accordion-body">
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
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            CMS-driven band sites
                        </button>
                    </h3>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionProjects">
                        <div class="accordion-body">

                            <div id="carouselBandSites" class="carousel slide">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="img/bands01.jpg" class="d-block w-100" alt="screenshot of the Receive web site">
                                        <div class="carousel-caption">
                                            <p>The front page for the band Receive displays upcoming shows, plus recent posts. (If there are no shows booked, it displays photos from the most recent show.)</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/bands02.jpg" class="d-block w-100" alt="screenshot of the Receive web site">
                                        <div class="carousel-caption">
                                            <p>The Shows page for Receive displays an archive of old flyers underneath the current schedule.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/bands03.jpg" class="d-block w-100" alt="screenshot of the Hey Exit web site">
                                        <div class="carousel-caption">
                                            <p>The front page for the defunct project Hey Exit displays a few randomly-chosen photos of old live performances.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/bands04.jpg" class="d-block w-100" alt="screenshot of the Hey Exit web site">
                                        <div class="carousel-caption">
                                            <p>The Press page displays reviews that are marked as CV-worthy in the CMS.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/bands05.jpg" class="d-block w-100" alt="screenshot of the Hey Exit web site">
                                        <div class="carousel-caption">
                                            <p>The Discography page first displays a selection of Hey Exit's major works...</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/bands06.jpg" class="d-block w-100" alt="screenshot of the Hey Exit web site">
                                        <div class="carousel-caption">
                                            <p>... Before displaying a list of complete works underneath.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/bands07.jpg" class="d-block w-100" alt="screenshot of the Hey Exit web site">
                                        <div class="carousel-caption">
                                            <p>A page for each Hey Exit release displays reviews, artwork, photos of physical editions, a Bandcamp embed &amp; Spotify link, and a host of other metadata.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/bands08.jpg" class="d-block w-100" alt="screenshot of the Hey Exit web site">
                                        <div class="carousel-caption">
                                            <p>The Live page again displays an archive of show flyers...</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/bands09.jpg" class="d-block w-100" alt="screenshot of the Hey Exit web site">
                                        <div class="carousel-caption">
                                            <p>... Before listing a complete gigography underneath.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-controls">
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselBandSites" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselBandSites" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselBandSites" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselBandSites" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        <button type="button" data-bs-target="#carouselBandSites" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                        <button type="button" data-bs-target="#carouselBandSites" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                        <button type="button" data-bs-target="#carouselBandSites" data-bs-slide-to="5" aria-label="Slide 6"></button>
                                        <button type="button" data-bs-target="#carouselBandSites" data-bs-slide-to="6" aria-label="Slide 7"></button>
                                        <button type="button" data-bs-target="#carouselBandSites" data-bs-slide-to="7" aria-label="Slide 8"></button>
                                        <button type="button" data-bs-target="#carouselBandSites" data-bs-slide-to="8" aria-label="Slide 9"></button>
                                    </div>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselBandSites" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>

                            <p>A pair of band web sites (one for an older project, one for a newer band), each calling data from the Slow Names REST API.</p>

                            <p>Both sites are written in Typescript, using React and NextJS, including the NextJS App Router.</p>

                            <p>I also used these projects as an opportunity to get familiar with Tailwind CSS and its approach to design, but ultimately opted to write my designs from scratch using CSS and Sass.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Clorox sites
                        </button>
                    </h3>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionProjects">
                        <div class="accordion-body">
                            Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                            Retrofret
                        </button>
                    </h3>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionProjects">
                        <div class="accordion-body">
                            Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                            Cut It
                        </button>
                    </h3>
                    <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionProjects">
                        <div class="accordion-body">
                            Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include "../footer.php"; ?>
</body>

</html>