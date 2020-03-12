<template>
  <main class="about">
    <section class="about-us">
      <h1 class="about-us__heading">About Us</h1>
      <p class="about-us__copy">Artpreneurship was developed to help all artists, creatives, and designers to start or sustain a business, whether as a sole inventor, contributing innovator, or as an equal partner when developing a new product or service. With proven curriculums and support from collaborators, the goal of Artpreneurship is to create Artpreneurs who will use their thinking, curiosity, and talents to enhance society by developing products and services that improve human lives.</p>
      <router-link to="/sponsorship" class="about-us__btn">Donate</router-link>
      <img class="about-us__image" src="../assets/about/about-group-photo.jpg" alt="group photo on the beach"/>
    </section>
    <section class="goals">
      <h2 class="goals__heading">Our Goal</h2>
      <p class="goals__copy">Is to support artists, creators, and designers in their pursuit to create sustainable business practices, which will allow for personal and professional growth. Students will explore opportunities and learn how to solve problems by integrating design thinking, design sprints, and other creative processes. Students will design business strategies based on validated assumptions, using the feedback loop: design, measure, and learn.</p>
      <ul class="goals__list">
        <li class="goals__list-item">
          Students will be encouraged to attend a series of lectures, workshops, and seminars to better familiarize themselves with business and business applications.
          <img src="../assets/global/icon-check.svg" alt=""/>
        </li>
        <li class="goals__list-item">
          Students will tour and visit various businesses and will have an opportunity to learn and share their business models.
          <img src="../assets/global/icon-check.svg" alt=""/>
        </li>
        <li class="goals__list-item">
          Students will be introduced to different levels of business development.
          <img src="../assets/global/icon-check.svg" alt=""/>
        </li>
      </ul>
      <img class="goals__image" src="../assets/global/air_rally_illustration_2.svg"/>
    </section>
    <section class="curricula">
      <div class="curricula__copy-wrapper">
        <h2 class="curricula__heading">Curricula</h2>
        <p class="curricula__copy">
          The following is a short outline for new businesses. And there are three tiers of potential curriculums we can build.
        </p>
        <p class="curricula__copy">
          Through these hands-on curriculum options, students will start, refine, or expand their work for an entrepreneurial venture.
        </p>
      </div>
      <dl class="curricula__def-list">
        <div class="curricula__list-wrapper">
          <dt class="curricula__list-term">Idealist</dt>
            <dd class="curricula__list-def">First is the Idealist. These are individuals who may have a dream of opening up a  new business, but they really don’t have many resources or knowledge about how to start a new business.</dd>
            <img class="curricula__list-icon" src="../assets/about/icon-cloud.svg" alt=""/>
        </div>
        <div class="curricula__list-wrapper">
          <dt class="curricula__list-term">Start-Ups</dt>
            <dd class="curricula__list-def">The second group is a pre-existing group of “Start-Ups.” They have some knowledge about business, but they need additional help.</dd>
            <img class="curricula__list-icon" src="../assets/about/icon-power.svg" alt=""/>
        </div>
        <div class="curricula__list-wrapper">
          <dt class="curricula__list-term">Owners</dt>
            <dd class="curricula__list-def">The last group is comprised of existing business owners who simply want to expand or make their companies more sustainable.</dd>
            <img class="curricula__list-icon" src="../assets/about/icon-suitcase.svg" alt=""/>
        </div>
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
  background: $white;
}
.about-us{
  display: grid;
  grid-template-columns: 100%;
  grid-template-rows: 4;
  &__heading, &__copy{
    padding: 0 1.75rem;
  }
  &__btn{
    @include base-btn-style($yellow-hue-1, none);
    grid-row: 4/5;
    width: 6.5rem;
    justify-self: center;
    margin: 3rem 0;
    &:hover, &:focus{
      @include base-btn-blur(30px, $yellow-hue-1);
    }
  }
  &__image{
    grid-row: 1/2;
    width: 100%;
  }
}
.goals{
  display: grid;
  grid-template-columns: 100%;
  grid-template-rows: repeat(4, auto);
  padding: 1.75rem;
  &__list{
    grid-row: 3/4;
    padding: 0;
  }
  &__list-item{
    display: grid;
    grid-template-columns: 4.75rem auto;
    margin-bottom: 1rem;
    img{
      width: 3rem;
      justify-self: start;
      grid-column: 1/2;
      grid-row: 1/2;
      padding-top: .5rem;
    }
  }
  &__image{
    height: 20rem;
    align-self: center;
    justify-self: center;
  }
}
.curricula{
  display: grid;
  grid-template-columns: 100%;
  grid-template-rows: repeat(3, auto);
  &__copy-wrapper{
    background: $yellow-hue-1;
    border-radius: 0;
    padding: 1.75rem;
  }
  &__def-list{
    padding: 1.75rem;
  }

  &__list{
    &-wrapper{
      display: grid;
      grid-template-columns: 5.5rem auto;
      grid-template-rows: repeat(2, auto);
      margin-bottom: 1rem;
      grid-row-gap: 1rem;
    }
    &-term{
      grid-row: 1/2;
      grid-column: 2/3;
      align-self: end;
      line-height: 1.5rem;
      font-size: 1.65rem;
    }
    &-def{
      grid-row: 2/3;
      grid-column: 1/3;
      margin: 0;
    }
    &-icon{
      grid-row: 1/2;
      grid-column: 1/2;
      width: 4rem;
    }
  }
}

.cooperation{
  padding: 1.75rem;
}

@media screen and (min-width: map-get($break-point , "xl")){
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
      padding: 0;
    }
    &__copy{
      grid-row: 3/4;
      padding: 0;
    }
    &__btn{
      justify-self: start;
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
      padding: 0;
    }
    &__list-item{
      display: grid;
      grid-template-columns: 8rem auto;
      margin-bottom: 1rem;
      img{
        width: 3.5rem;
        justify-self: start;
        grid-column: 1/2;
        grid-row: 1/2;
        padding-top: .5rem;
      }
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
    grid-template-rows: 5rem auto 5rem;
    grid-template-columns: repeat(2, 1fr);
    &__heading, &__copy{
      grid-column: 1/2;
      margin-bottom: 1rem;
    }
    &__def-list{
      grid-column: 2/3;
      grid-row: 1/5;
      grid-area: "list";
      padding: 5rem;
    }
    &__copy-wrapper{
      grid-column: 1/2;
      grid-row: 1/6;
      border-radius: 0 10px 10px 0;
      display: grid;
      align-content: center;
      padding: 5rem;
    }
    &__list-wrapper{
      display: grid;
      grid-template-columns: repeat(6, 1fr);
      grid-template-rows: repeat(2, auto);
      margin-bottom: 1rem;
      dt, dd{
        grid-column: 2/7;
      }
      dt{
        grid-row: 1/2;
        font-weight: 700;
      }
      dd{
        grid-row: 2/3;
        margin: 0;
      }
      img{
        grid-column: 1/2;
        grid-row: 2/3;
        width: 3.5rem;
        justify-self: center;
        padding-top: .5rem;
      }
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
}
</style>
