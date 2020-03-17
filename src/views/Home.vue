<template>
  <main class="home">
    <section>
      <h1>Artpreneurship</h1>
      <p>Artperneurship is a uniquely designed program that embraces the entrepreneurial mindset, specifically for students of art and humanities. While developing their personal work, students in the program can adapt and transform that work into an entrepreneurial venture.</p>
      <router-link to="/sponsorship">Donate</router-link> 
    </section>
    <section>
      <h2>About Our Program</h2>
      <p>This is a uniquely designed program that embraces the entrepreneurship mindset, specifically for students pursuing arts and humanities.</p>
      <p>Artpreneurship is intended to create a broader understanding for artists and students in humanities to leverage their talent and develop a series of skills that will enhance their career path—whether in arts, dance, film, journalism, literature, music, radio, television, theatre, theology/religion, or writing—for business practices. Students in arts and humanities fields have always been known to “create,” and many do so for personal reasons and to share their work with others. Students combine creativity and critical thinking, and they are natural collaborators. Through Artpreneurship, we believe students in the program, while developing their personal work, can adapt and transform that work for an entrepreneurial venture.</p>
      <router-link to="/about">Learn More</router-link>
    </section>
    <section>
      <h2>Gallery</h2>
    </section>
    <section>
      <h2>Program Features</h2>
      <p>Artpreneurship consists of four main critical features.</p>
      <dl>
        <div>
          <router-link to="/collaborators">
            <dt>Collaborators</dt>
            <dd>Key industry and community partners who are advocates and network providers.</dd>
          </router-link>
        </div>
        <div>
          <router-link to="/business">
            <dt>Business</dt>
            <dd>Our core mission is to emphasize the importance of the business side of creativity.</dd>
          </router-link>
        </div>
        <div>
          <router-link to="/sponsorship">
            <dt>Sponsorship</dt>
            <dd>Sponsors provide seed funding or other resources to continue the program. </dd>
          </router-link>
        </div>
        <div>
          <router-link to="/awards">
            <dt>Awards</dt>
            <dd>We celebrate student achievement by giving creatives an opportunity to be recognized.</dd>
          </router-link>
        </div>
      </dl>
    </section>
    <section>
      <p>We are partnering with Knowbility</p>
      <a href="https://www.knowbility.org/" target=_blank>Learn More</a>
    </section>
  </main>
</template>

<script>
export default {
  name: 'Home',
  title: 'Home',
}
</script>
