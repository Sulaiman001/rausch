<?php get_header(); ?>

<article class="video-intro">

  <div class="mask-container">
    <video loop muted id="bgvid">
      <source src="<?php bloginfo('template_directory'); ?>/img/rausch-events.webm" type="video/webm">
      <source src="<?php bloginfo('template_directory'); ?>/img/rausch-events.mp4" type="video/mp4">
      <source src="<?php bloginfo('template_directory'); ?>/img/rausch-events.ogv" type="video/ogg">
    </video>
  </div>

  <section class="intro-copy col-5-12">
    <h1>Award-winning, multimedia production company</h1>
    <p>Rausch Productions provides you with the techniques and tools to educate, entertain and engage your audience. We employ the latest audiovisual technology to build that connection, whether it’s a web video directed at new clients, presenting sales goals to your staff of 50, or putting on a concert for 3000 of your biggest fans.</p>
    <button>Learn More</button>
  </section>

</article>

<article class="service-portal">

  <section class="centerpiece">
      <h1>We Build The Experience From Start To Finish</h1>
      <p>RP was conceived fifteen years ago in a single attic office, piecing together partnerships through productions based on trusted relationships. Founder and President, Ron Rausch, start the company with one thing in mind;  to provide his clients with a full- service multimedia video production solution. While the industry continues to evolve, we thrive to build relationships and provide our clients with a full-service experience to enable them to do the same for their guests.</p>
      <a href="/rausch/work"><button>View Our Work</button></a>
  </section>

  <section class="halfpiece">
      <p>With a full range of capabilities from video production to event management, we offer the most creative and cutting edge production solutions available unique to your live event needs.</p>
      <a href="/rausch/services"><button>View Our Process</button></a>
  </section>

  <section class="halfpiece">
      <p>LED technology provides dazzling images that enhance any live entertainment experience. Investing in LED wall and mobile screen solutions is investing in a reliable, budget-friendly option—guaranteed to engage your audience.</p>
      <a href="/rausch/led-technology"><button>View Our Screens</button></a>
  </section>

</article>

<article class="testimonial" data-type="background" data-background="<?php bloginfo('template_directory'); ?>/img/VidProduction2.jpg">
    <section class="centerpiece">
        <h1>"This was the event of a lifetime! I've literally lost count of how many people have told me that this was the best Commencement that Ashford has ever had. The Rausch team not only worked hard, but also showed great flexibility in helping where help was needed."</h1>
        <p>- Sarah</p>
        <p>Event Coordinator, Ashford University</p>
        <button>View Client List</button>
    </section>
</article>

<?php get_footer(); ?>