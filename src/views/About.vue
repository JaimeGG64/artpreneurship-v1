<template>
  <main class="about">
    <section class="about-us">
      <h1 class="about-us__heading">About Us</h1>
      <p class="about-us__copy">Artpreneurship was developed to help all artists, creatives, and designers to start or sustain a business, whether as a sole inventor, contributing innovator, or as an equal partner when developing a new product or service. With proven curriculums and support from collaborators, the goal of Artpreneurship is to create Artpreneurs who will use their thinking, curiosity, and talents to enhance society by developing products and services that improve human lives.</p>
      <router-link to="/sponsorship" class="about-us__btn">Donate</router-link>
      <img class="about-us__image" src="../assets/about/about-group-pictures.jpg" alt="group photo on the beach"/>
    </section>
    <section class="goals">
      <h2 class="goals__heading">Our Goal</h2>
      <p class="goals__copy">Is to support artists, creators, and designers in their pursuit to create sustainable business practices, which will allow for personal and professional growth. Students will explore opportunities and learn how to solve problems by integrating design thinking, design sprints, and other creative processes. Students will design business strategies based on validated assumptions, using the feedback loop: design, measure, and learn.</p>
      <ul class="goals__list">
        <li>Students will be encouraged to attend a series of lectures, workshops, and seminars to better familiarize themselves with business and business applications.</li>
        <li>Students will tour and visit various businesses and will have an opportunity to learn and share their business models.</li>
        <li>Students will be introduced to different levels of business development.</li>
      </ul>
      <img class="goals__image" src="../assets/global/air_rally_illustration_2.svg"/>
    </section>
    <section class="curricula">
      <h2 class="curricula__heading">Curricula</h2>
      <p class="curricula__copy">The following is a short outline for new businesses. And there are three tiers of potential curriculums we can build. Through these hands-on curriculum options, students will start, refine, or expand their work for an entrepreneurial venture.</p>
      <dl class="curricula__def-list">
        <dt>Idealist</dt>
          <dd>First is the Idealist. These are individuals who may have a dream of opening up a  new business, but they really don’t have many resources or knowledge about how to start a new business.</dd>
        <dt>Start-Ups</dt>
          <dd>The second group is a pre-existing group of “Start-Ups.” They have some knowledge about business, but they need additional help.</dd>
        <dt>Owners</dt>
          <dd>The last group is comprised of existing business owners who simply want to expand or make their companies more sustainable.</dd>
      </dl>
    </section>
    <section class="cooperation">
      <h2 class="cooperation__heading">Cooperation</h2>
      <p class="cooperation__copy">
        The Artpreneurship Program will complement and align with the efforts of the David Nazarian College of Business and Economics in creating more inclusive entrepreneurship on campus. It is also intended to share and complement the work of Research and Graduate Studies.
      </p>
      <p class="cooperation__copy">
        Some of the topics listed here will be provided to those students, but again, many of the curriculum items and topics already exist from COBAE, and the Artpreneurship Program will complement and rely heavily on existing entrepreneurship resources.
      </p>
    </section>
  </main>
</template>

<script>
export default {
  name: 'about',
  title: 'About',
}
</script>

<style lang="scss">
@import "../scss/button-styles.scss";
@import "../scss/variables.scss";
.about{
  background: url("../assets/about/about-background.png");
  background-position: center 97%;
  background-repeat: no-repeat;
  background-size: contain;
}
.about-us{
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-template-rows: repeat(5, auto);
  grid-row-gap: 1.25rem;
  &__heading, &__copy, &__btn{
    grid-column: 2/3;
    margin: 0 5.5rem;
  }
  &__heading{
    grid-row: 2/3;
  }
  &__copy{
    grid-row: 3/4;
  }
  &__btn{
    grid-row: 4/5;
    @include base-btn-style($yellow-hue-1, none);
    width: 6.5rem;
    &:hover{
      @include base-btn-blur(30px, $yellow-hue-1);
    }
  }
  &__image{
    grid-column: 1/2;
    grid-row: 1/6;
    width: 100%;
  }
}
.goals{
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-template-rows: 5rem auto auto auto 5rem;
  padding: 0 5rem;
  &__heading, &__copy, &__list{
    grid-column: 1/2;
  }
  &__heading{
    grid-row: 2/3
  }
  &__copy{
    grid-row: 3/4;
  }
  &__list{
    grid-row: 4/5;
    padding-left: 5rem;
  }
  &__image{
    grid-column: 2/3;
    grid-row: 2/5;
    height: 27rem;
    align-self: center;
    justify-self: center;
  }
}
.curricula{
  display: grid;
  grid-template-rows: 5rem auto auto 5rem;
  grid-template-columns: repeat(2, 1fr);
  &__heading, &__copy{
    grid-column: 1/2;
    padding: 0 5rem;
  }
  &__heading{
    grid-row: 2/3;
  }
  &__copy{
    grid-row: 3/4;
  }
  &__def-list{
    grid-column: 2/3;
    grid-row: 2/4;
    padding: 0 5rem;
  }

  &::before{
    content: "";
    background: $yellow-hue-1;
    grid-column: 1/2;
    grid-row: 1/5;
    border-radius: 0 10px 10px 0;
  }
}
.cooperation{
  padding: 10rem 25rem;
  &__heading{
    text-align: center;
  }
  &__copy{
    text-align: left;
    margin-bottom: 1rem;
  }
}
</style>
